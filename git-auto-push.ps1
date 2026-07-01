<#
Simple watcher script for git auto-commit and push.
Run this in PowerShell from the repo root:
  .\git-auto-push.ps1

It will watch the working tree for file changes, commit any modifications,
then push to origin/main.
#>

$RepoRoot = Get-Location
$Branch = 'main'
$DelaySeconds = 5
$IgnorePaths = @('.git', 'git-auto-push.ps1')

function ShouldIgnorePath($path) {
    foreach ($ignore in $IgnorePaths) {
        if ($path -like "*$ignore*") { return $true }
    }
    return $false
}

function CommitAndPushChanges {
    Push-Location $RepoRoot
    try {
        $status = git status --porcelain
        if (-not [string]::IsNullOrWhiteSpace($status)) {
            Write-Host "Changes detected. Adding, committing, and pushing..." -ForegroundColor Yellow
            git add -A
            $message = "Auto commit changes $(Get-Date -Format 'yyyy-MM-dd HH:mm:ss')"
            git commit -m "$message"
            git push origin $Branch
            Write-Host "Pushed changes to origin/$Branch." -ForegroundColor Green
        } else {
            Write-Host "No changes to commit." -ForegroundColor DarkGray
        }
    } catch {
        Write-Host "Error during git commit/push: $_" -ForegroundColor Red
    } finally {
        Pop-Location
    }
}

$timer = New-Object Timers.Timer ($DelaySeconds * 1000)
$timer.AutoReset = $false

Register-ObjectEvent -InputObject $timer -EventName Elapsed -SourceIdentifier GitAutoPushTimer -Action {
    CommitAndPushChanges
}

$watcher = New-Object System.IO.FileSystemWatcher $RepoRoot.Path, '*.*'
$watcher.IncludeSubdirectories = $true
$watcher.NotifyFilter = [System.IO.NotifyFilters]'FileName, LastWrite, DirectoryName'
$watcher.EnableRaisingEvents = $true

$action = {
    $path = $Event.SourceEventArgs.FullPath
    if (-not (ShouldIgnorePath $path)) {
        $timer.Stop()
        $timer.Start()
    }
}

Register-ObjectEvent -InputObject $watcher -EventName Changed -SourceIdentifier GitAutoPushChanged -Action $action
Register-ObjectEvent -InputObject $watcher -EventName Created -SourceIdentifier GitAutoPushCreated -Action $action
Register-ObjectEvent -InputObject $watcher -EventName Deleted -SourceIdentifier GitAutoPushDeleted -Action $action
Register-ObjectEvent -InputObject $watcher -EventName Renamed -SourceIdentifier GitAutoPushRenamed -Action $action

Write-Host "Watching files in $RepoRoot..." -ForegroundColor Cyan
Write-Host "Press Ctrl+C to stop." -ForegroundColor Cyan
while ($true) { Start-Sleep -Seconds 1 }

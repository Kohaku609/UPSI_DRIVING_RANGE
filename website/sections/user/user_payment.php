<?php
/**
 * user_payment.php
 * Bahagian: User Payment
 *
 * V108: CSS dan JavaScript runtime dibahagikan ke semua section.
  const V75_LOGIN_DEFAULT = '/assets/background-login-default.png';
  const V75_APP_DEFAULT = '/assets/background-app-default.png';
 * Runtime chunk: 20/22
 * Fungsi berkaitan untuk presentation: userPayments
 */


  const V83_LOGIN_DEFAULT = '/assets/background-login-default.png';
{
?>
<style>
/* =========================================================
   V108 CSS chunk 20/22
   Bahagian: User Payment
   ========================================================= */
.v83-footer-cta button {
  border: 0;
  border-radius: 10px;
  padding: 13px 20px;
  background: #fff;
  color: #075d31;
  font-weight: 900;
  cursor: pointer;
}
.auth-app-layout .v83-auth-public-header {
  return `<header class="v83-public-header"><div class="v83-public-brand"><img src="/assets/upsi-driving-range-logo.png" alt="UPSI Golf logo"><div><strong>UPSI Golf</strong><span>Booking System</span></div></div><nav class="v83-public-nav">${items.map(([key,label]) => `<button type="button" class="${active === key ? 'active' : ''}" data-v83-public-page="${key}">${esc(label)}</button>`).join('')}<button type="button" class="v83-public-login-btn" data-v83-show-login>👤 ${esc(tx('login'))}</button>${v83LanguageToggle()}</nav></header>`;
  return `<footer class="v83-public-footer"><div><p>© 2026 Universiti Pendidikan Sultan Idris (UPSI) | Web-Based Learning Project</p><em>${esc(tx('footerNote'))}</em></div><div class="v83-footer-upsi"><img src="/assets/upsi-driving-range-logo.png" alt="UPSI"><strong>UPSI</strong></div><div class="v83-footer-cta"><span>${esc(tx('ready'))}</span><button type="button" data-v83-show-login>👤 ${esc(tx('loginNow'))}</button></div></footer>`;
  left: 0;
  right: 0;
  z-index: 3;
}
.auth-app-layout .v83-auth-public-header .v83-public-header {
  height: 78px;
  padding: 0 4.5vw;
}
.auth-app-layout .v83-auth-public-header .v83-public-brand img { width: 50px; height: 50px; }
.auth-app-layout .v83-auth-public-header .v83-public-brand strong { font-size: 25px; }
.auth-app-layout .v83-auth-public-header .v83-public-brand span { font-size: 11px; }
.auth-app-layout:has(.v83-auth-public-header) {
  padding-top: 96px;
}
.topbar > .v83-language-toggle {
  margin-left: 12px;
  flex: 0 0 auto;
}
@media (max-width: 1100px) {
  .v83-public-header,
  .v83-public-footer,
  .v83-declaration-card,
  .v83-about-strip,
  .v83-info-grid.four,
  .v83-info-grid.features,
  .v83-project-grid.top,
  .v83-project-grid.bottom,
  .v83-team-grid,
  .v83-two-col {
    grid-template-columns: 1fr;
  }
  .v83-public-header { height: auto; padding: 16px 5vw; align-items: flex-start; flex-direction: column; }
  .v83-public-nav { justify-content: flex-start; }
  .v83-declaration-title { border-right: 0; padding-right: 0; }
  .v83-values { grid-template-columns: 1fr; border-left: 0; padding-left: 0; }
  .v83-public-footer { text-align: center; }
  .v83-footer-cta { justify-content: center; }
}


/* =========================================================
   V92 pre-render language styling
   ========================================================= */
.topbar {
  justify-content: flex-start !important;
}
.topbar > div:first-child,
.topbar .title-block,
.topbar .page-title,
.topbar h1 {
  margin-right: auto !important;
}
.v92-topbar-actions {
  margin-left: auto !important;
  display: flex;
  align-items: center;
  justify-content: flex-end;
  gap: 12px;
  width: auto;
}
.v92-topbar-actions .profile-chip,
.v92-topbar-actions .profile-chip-v26,
.v92-profile-chip {
  min-width: 250px !important;
  width: auto !important;
  margin: 0 !important;
}
.v92-topbar-actions .v83-language-toggle {
  margin-left: 0 !important;
  flex: 0 0 auto;
}
.v92-forgot-password-btn,
[data-forgot-user],
[data-forgot-admin] {
  border: 0 !important;
  background: transparent !important;
  color: #009846 !important;
  font-weight: 900 !important;
  cursor: pointer !important;
  text-decoration: none !important;
}
.v92-forgot-password-btn:hover,
[data-forgot-user]:hover,
[data-forgot-admin]:hover {
  text-decoration: underline !important;
}
.v83-language-toggle button.active,
body[data-lang="en"] .v83-language-toggle button[data-v83-lang="en"],
body[data-lang="ms"] .v83-language-toggle button[data-v83-lang="ms"] {
  background: #075d31 !important;
  color: #fff !important;
}
body[data-lang="en"] .v83-language-toggle button[data-v83-lang="ms"],
body[data-lang="ms"] .v83-language-toggle button[data-v83-lang="en"] {
  background: transparent !important;
  color: #075d31 !important;
}


/* =========================================================
   V93 topbar profile + language same-row fix
   ========================================================= */
.topbar {
  display: flex !important;
  align-items: center !important;
  justify-content: space-between !important;
  gap: 16px !important;
  width: 100% !important;
  flex-wrap: nowrap !important;
}

.topbar-title {
  flex: 1 1 auto !important;
  min-width: 0 !important;
  margin-right: auto !important;
}

.topbar-title .eyebrow,
.topbar-title h1 {
  margin-left: 0 !important;
}

.topbar-right {
  margin-left: auto !important;
  display: flex !important;
  align-items: center !important;
  justify-content: flex-end !important;
  gap: 12px !important;
  flex-wrap: nowrap !important;
  width: auto !important;
  flex: 0 0 auto !important;
}

.topbar-right .profile-chip,
.topbar-right .profile-chip-v26,
.topbar-right #profileChip {
  margin: 0 !important;
  flex: 0 0 auto !important;
  min-width: 260px !important;
  max-width: 430px !important;
}

.topbar-right .v83-language-toggle,
.topbar-right .v92-language-toggle,
.topbar-right .language-toggle {
  margin: 0 !important;
  flex: 0 0 auto !important;
  white-space: nowrap !important;
  align-self: center !important;
}

.topbar-right .v83-language-toggle button,
.topbar-right .language-toggle button {
  min-width: 44px !important;
}

@media (max-width: 900px) {
  .topbar {
    align-items: flex-start !important;
    flex-wrap: wrap !important;
  }

  .topbar-right {
    width: 100% !important;
    justify-content: flex-end !important;
  }
}


/* =========================================================
   V95 public landing dark mode readability fix
   Home / About / Features / Project Info before login
   ========================================================= */
body[data-theme="dark"] .v83-public-site {
  background: linear-gradient(135deg, #06100b 0%, #0b1710 46%, #102318 100%) !important;
  color: #f4fff7 !important;
}

body[data-theme="dark"] .v83-public-header,
body[data-theme="dark"] .auth-app-layout .v83-auth-public-header .v83-public-header {
  background: rgba(7, 17, 12, .96) !important;
  border-bottom: 1px solid rgba(94, 227, 159, .22) !important;
  box-shadow: 0 12px 28px rgba(0,0,0,.28) !important;
}


</style>
<?php
}

function upsi_section_user_payment_scripts(): void
{
?>
<script>
/* =========================================================
   V108 JavaScript chunk 20/22
   Bahagian: User Payment
   ========================================================= */
(function upsiV75BackgroundSettingsPatch() {
  const V75_LOGIN_DEFAULT = 'assets/background-login-default.png';
  const V75_APP_DEFAULT = 'assets/background-app-default.png';
  const V75_STORAGE_BUCKET = 'app-backgrounds';

  function v75Esc(value) {
    return typeof escapeHtml === 'function' ? escapeHtml(value) : String(value ?? '')
      .replaceAll('&', '&amp;')
      .replaceAll('<', '&lt;')
      .replaceAll('>', '&gt;')
      .replaceAll('"', '&quot;')
      .replaceAll("'", '&#039;');
  }

  function v75ReadSettings() {
    try { return typeof read === 'function' ? (read('settings') || {}) : {}; }
    catch (_) { return {}; }
  }

  function v75CssUrl(url, fallback) {
    const raw = String(url || fallback || '').trim();
    const safe = raw || fallback || '';
    return `url("${safe.replace(/\\/g, '\\\\').replace(/"/g, '\\"')}")`;
  }

  function v75NormaliseSettings(settings = {}) {
    return {
      ...settings,
      loginBackgroundUrl: settings.loginBackgroundUrl || settings.login_background_url || V75_LOGIN_DEFAULT,
      appBackgroundUrl: settings.appBackgroundUrl || settings.app_background_url || V75_APP_DEFAULT,
    };
  }

  function v75ApplyBackgrounds() {
    const settings = v75NormaliseSettings(v75ReadSettings());
    document.documentElement.style.setProperty('--upsi-login-background-image', v75CssUrl(settings.loginBackgroundUrl, V75_LOGIN_DEFAULT));
    document.documentElement.style.setProperty('--upsi-app-background-image', v75CssUrl(settings.appBackgroundUrl, V75_APP_DEFAULT));
  }

  try {
    if (typeof defaultData === 'object' && defaultData.settings) {
      defaultData.settings.loginBackgroundUrl = defaultData.settings.loginBackgroundUrl || V75_LOGIN_DEFAULT;
      defaultData.settings.appBackgroundUrl = defaultData.settings.appBackgroundUrl || V75_APP_DEFAULT;
      defaultData.settings.dataVersion = Math.max(Number(defaultData.settings.dataVersion || 0), 75);
    }
  } catch (_) {}

  const v75BaseSettingsRowsToLocal = typeof settingsRowsToLocal === 'function' ? settingsRowsToLocal : null;
  if (v75BaseSettingsRowsToLocal) {
    settingsRowsToLocal = function settingsRowsToLocalV75(rows = []) {
      const base = v75BaseSettingsRowsToLocal(rows);
      const map = Object.fromEntries((rows || []).map((row) => [row.setting_key, row.setting_value || '']));
      return v75NormaliseSettings({
        ...base,
        loginBackgroundUrl: map.login_background_url || map.background_login_url || base.loginBackgroundUrl || V75_LOGIN_DEFAULT,
        appBackgroundUrl: map.app_background_url || map.inside_background_url || base.appBackgroundUrl || V75_APP_DEFAULT,
        dataVersion: Math.max(Number(base.dataVersion || 0), 75),
      });
    };
  }

  const v75BaseSyncSettingsToSupabase = typeof syncSettingsToSupabase === 'function' ? syncSettingsToSupabase : null;
  if (v75BaseSyncSettingsToSupabase) {
    syncSettingsToSupabase = async function syncSettingsToSupabaseV75(settings = {}) {
      await v75BaseSyncSettingsToSupabase(settings);
      if (!SUPABASE_MODE || !supabaseClient) return;
      const next = v75NormaliseSettings(settings);
      const rows = [
        { setting_key: 'login_background_url', setting_value: next.loginBackgroundUrl || '' },
        { setting_key: 'app_background_url', setting_value: next.appBackgroundUrl || '' },
      ];
      const { error } = await supabaseClient.from(DB_TABLES.settings).upsert(rows, { onConflict: 'setting_key' });
      if (error) console.error('V75 background settings sync error:', error);
    };
  }

  const v75BaseLoadSupabaseDataToLocal = typeof loadSupabaseDataToLocal === 'function' ? loadSupabaseDataToLocal : null;
  if (v75BaseLoadSupabaseDataToLocal) {
    loadSupabaseDataToLocal = async function loadSupabaseDataToLocalV75(options = {}) {
      const result = await v75BaseLoadSupabaseDataToLocal(options);
      const settings = v75NormaliseSettings(v75ReadSettings());
      if (typeof setLocalData === 'function') setLocalData('settings', settings);
      v75ApplyBackgrounds();
      return result;
    };
  }

  async function v75UploadBackgroundFile(file, kind = 'background') {
    if (!file) return '';
    if (!SUPABASE_MODE || !supabaseClient) {
      return await new Promise((resolve, reject) => {
        const reader = new FileReader();
        reader.onload = () => resolve(reader.result);
        reader.onerror = reject;
        reader.readAsDataURL(file);
      });
    }
    const rawExt = (file.name.split('.').pop() || 'png').toLowerCase();
    const ext = ['png', 'jpg', 'jpeg', 'webp'].includes(rawExt) ? rawExt : 'png';
    const safeKind = String(kind || 'background').replace(/[^a-zA-Z0-9_-]/g, '-');
    const filePath = `${safeKind}/${safeKind}-${Date.now()}.${ext}`;
    const { error: uploadError } = await supabaseClient.storage.from(V75_STORAGE_BUCKET).upload(filePath, file, {
      cacheControl: '3600',
      upsert: true,
      contentType: file.type || 'image/png',
    });
    if (uploadError) {
      console.error('V75 background upload error:', uploadError);
      toast('Background upload failed. Run supabase_v75_background_settings_app_sync.sql and check Storage policy.');
      return '';
    }
    const { data } = supabaseClient.storage.from(V75_STORAGE_BUCKET).getPublicUrl(filePath);
    return data?.publicUrl || '';
  }

  async function v75UploadDefaultAsset(assetPath, kind) {
    if (!SUPABASE_MODE || !supabaseClient) return assetPath;
    const response = await fetch(assetPath, { cache: 'no-store' });
    if (!response.ok) throw new Error(`Cannot read default background asset: ${assetPath}`);
    const blob = await response.blob();
    const file = new File([blob], `${kind}-default.png`, { type: blob.type || 'image/png' });
    return await v75UploadBackgroundFile(file, kind);
  }

  function v75IsLocalDefault(url, fallback) {
    const value = String(url || '').trim();
    return !value || value === fallback || value.includes('/assets/background-') || value.startsWith('assets/background-');
  }

  function v75BackgroundCardMarkup() {
    const settings = v75NormaliseSettings(v75ReadSettings());
    return `
      <div class="card settings-system-card strong-border-card v75-background-card" data-v75-background-card>
        <div class="card-top">
          <div>
            <p class="eyebrow">Background Settings</p>
            <h2>Login and inside website/app background</h2>
            <p class="muted">Admin can update two different background images. The saved URL is stored in Supabase so the mobile app can use the same background.</p>
          </div>
          <span class="status-pill confirmed">Supabase Sync</span>
        </div>
        <form id="v75BackgroundForm">
          <div class="v75-background-grid">
            <section class="v75-bg-box">
              <h3>Login Background</h3>
              <p class="muted">Used on the User/Admin login page.</p>
              <div class="v75-bg-preview"><img src="${v75Esc(settings.loginBackgroundUrl || V75_LOGIN_DEFAULT)}" alt="Login background preview"></div>
              <label>Upload Login Background<input type="file" name="loginBackground" accept="image/*"></label>
              <small class="v75-bg-url">Supabase key: login_background_url<br>${v75Esc(settings.loginBackgroundUrl || V75_LOGIN_DEFAULT)}</small>
            </section>
            <section class="v75-bg-box">
              <h3>Inside Website/App Background</h3>
              <p class="muted">Used after login for dashboard, booking and profile pages.</p>
              <div class="v75-bg-preview"><img src="${v75Esc(settings.appBackgroundUrl || V75_APP_DEFAULT)}" alt="Inside website/app background preview"></div>
              <label>Upload Inside Background<input type="file" name="appBackground" accept="image/*"></label>
              <small class="v75-bg-url">Supabase key: app_background_url<br>${v75Esc(settings.appBackgroundUrl || V75_APP_DEFAULT)}</small>
            </section>
          </div>
          <div class="v75-bg-actions">
            <button class="btn btn-primary" type="submit">Save Background Settings</button>
            <button class="btn btn-soft" type="button" data-v75-use-default-bg>Use Provided Default Images</button>
            <span class="muted">For app connection, run the V75 SQL first, then save/upload here.</span>
          </div>
        </form>
      </div>`;
  }

  function v75InjectBackgroundCard() {
    if (!state.session || state.session.role !== 'admin') return;
    const settingsForm = document.getElementById('settingsForm');
    if (!settingsForm || document.querySelector('[data-v75-background-card]')) return;
    const systemCard = settingsForm.closest('.settings-system-card') || settingsForm.parentElement;
    systemCard.insertAdjacentHTML('afterend', v75BackgroundCardMarkup());
    v75BindBackgroundForm();
  }

  function v75BindBackgroundForm() {
    const form = document.getElementById('v75BackgroundForm');
    if (!form || form.dataset.bound === 'true') return;
    form.dataset.bound = 'true';

    async function saveBackgrounds({ forceDefaults = false } = {}) {
      const settings = v75NormaliseSettings(v75ReadSettings());
      const loginFile = form.loginBackground?.files?.[0];
      const appFile = form.appBackground?.files?.[0];
      let loginUrl = settings.loginBackgroundUrl || V75_LOGIN_DEFAULT;
      let appUrl = settings.appBackgroundUrl || V75_APP_DEFAULT;

      if (loginFile) {
        if (!loginFile.type.startsWith('image/')) return toast('Please upload an image file only for login background.');
        if (loginFile.size > 5000000) return toast('Login background is too large. Please use an image below 5MB.');
        loginUrl = await v75UploadBackgroundFile(loginFile, 'login-background');
        if (!loginUrl) return;
      } else if (forceDefaults || v75IsLocalDefault(loginUrl, V75_LOGIN_DEFAULT)) {
        loginUrl = await v75UploadDefaultAsset(V75_LOGIN_DEFAULT, 'login-background');
      }

      if (appFile) {
        if (!appFile.type.startsWith('image/')) return toast('Please upload an image file only for inside background.');
        if (appFile.size > 5000000) return toast('Inside background is too large. Please use an image below 5MB.');
        appUrl = await v75UploadBackgroundFile(appFile, 'inside-background');
        if (!appUrl) return;
      } else if (forceDefaults || v75IsLocalDefault(appUrl, V75_APP_DEFAULT)) {
        appUrl = await v75UploadDefaultAsset(V75_APP_DEFAULT, 'inside-background');
      }

      const next = {
        ...settings,
        loginBackgroundUrl: loginUrl || V75_LOGIN_DEFAULT,
        appBackgroundUrl: appUrl || V75_APP_DEFAULT,
        dataVersion: 75,
      };
      if (typeof write === 'function') write('settings', next);
      else if (typeof setLocalData === 'function') setLocalData('settings', next);
      if (SUPABASE_MODE && supabaseSyncReady && typeof syncSettingsToSupabase === 'function') {
        await syncSettingsToSupabase(next);
      }
      v75ApplyBackgrounds();
      toast('Background settings saved. Website and app can now read the same Supabase URLs.');
      if (typeof adminSettings === 'function') adminSettings();
    }

    form.addEventListener('submit', async (event) => {
      event.preventDefault();
      const button = form.querySelector('button[type="submit"]');
      const original = button?.textContent || '';
      if (button) { button.disabled = true; button.textContent = 'Saving...'; }
      try { await saveBackgrounds({ forceDefaults: false }); }
      catch (error) { console.error(error); toast(error.message || 'Failed to save background settings.'); }
      finally { if (button) { button.disabled = false; button.textContent = original; } }
    });

    const defaultBtn = form.querySelector('[data-v75-use-default-bg]');
    if (defaultBtn) {
      defaultBtn.addEventListener('click', async () => {
        const original = defaultBtn.textContent;
        defaultBtn.disabled = true;
        defaultBtn.textContent = 'Saving defaults...';
        try { await saveBackgrounds({ forceDefaults: true }); }
        catch (error) { console.error(error); toast(error.message || 'Failed to save default background images.'); }
        finally { defaultBtn.disabled = false; defaultBtn.textContent = original; }
      });
    }
  }

  const v75BaseRenderAuth = typeof renderAuth === 'function' ? renderAuth : null;
  if (v75BaseRenderAuth) {
    renderAuth = function renderAuthV75() {
      v75ApplyBackgrounds();
      const result = v75BaseRenderAuth();
      v75ApplyBackgrounds();
      return result;
    };
  }

  const v75BaseRenderShell = typeof renderShell === 'function' ? renderShell : null;
  if (v75BaseRenderShell) {
    renderShell = function renderShellV75() {
      v75ApplyBackgrounds();
      const result = v75BaseRenderShell();
      v75ApplyBackgrounds();
      setTimeout(v75ApplyBackgrounds, 0);
      return result;
    };
  }

  const v75BaseRenderPage = typeof renderPage === 'function' ? renderPage : null;
  if (v75BaseRenderPage) {
    renderPage = function renderPageV75() {
      const result = v75BaseRenderPage();
      v75ApplyBackgrounds();
      if (state.session?.role === 'admin' && state.currentPage === 'settings') setTimeout(v75InjectBackgroundCard, 0);
      return result;
    };
  }

  const v75BaseAdminSettings = typeof adminSettings === 'function' ? adminSettings : null;
  if (v75BaseAdminSettings) {
    adminSettings = function adminSettingsV75() {
      const result = v75BaseAdminSettings();
      v75ApplyBackgrounds();
      setTimeout(v75InjectBackgroundCard, 0);
      return result;
    };
  }

  v75ApplyBackgrounds();
})();


/* =========================================================
   V76 Clear Background Display + Admin Delete Feedback
   - Make login/app background clearer and no blur-fade effect.
   - Add Delete button in admin reviews so admin can remove user feedback.
   ========================================================= */
(function upsiV76BackgroundAndAdminReviewDeletePatch() {
  const esc = (value = '') => (typeof escapeHtml === 'function'
    ? escapeHtml(value)
    : String(value ?? '').replace(/[&<>"']/g, (m) => ({ '&': '&amp;', '<': '&lt;', '>': '&gt;', '"': '&quot;', "'": '&#039;' }[m])));
  const text = (value = '') => String(value ?? '').trim();
  const FEEDBACK_OPTIONS = ['All Feedback', 'General Feedback', 'Suggestion', 'Issue / Problem', 'Complaint', 'Compliment'];
  let reviewCategoryFilterV76 = 'All Feedback';

  function reviewCategoryV76(review = {}) {
    return text(review.category || review.feedbackCategory || review.feedback_category || 'General Feedback') || 'General Feedback';
  }

  async function deleteAdminReviewV76(reviewId = '') {
    const id = text(reviewId);
    if (!id) return;
    const allReviews = Array.isArray(read('reviews')) ? read('reviews') : [];
    const target = allReviews.find((review) => String(review.id || '') === id);
    if (!target) return toast('Feedback record not found.');

    confirmAction({
      title: 'Delete Feedback',
      message: `Delete feedback from ${target.userName || 'this user'}? This action cannot be undone.`,
      confirmText: 'Delete Feedback',
      danger: true,
      onConfirm: async () => {
        if (SUPABASE_MODE && supabaseClient && id) {
          const { error } = await supabaseClient.from(DB_TABLES.reviews).delete().eq('id', id);
          if (error) {
            console.error('V76 feedback delete error:', error);
            toast(error.message || 'Failed to delete feedback from Supabase.');
            return;
          }
        }
        const nextReviews = allReviews.filter((review) => String(review.id || '') !== id);
        if (typeof write === 'function') write('reviews', nextReviews);
        else if (typeof setLocalData === 'function') setLocalData('reviews', nextReviews);
        adminReviews();
        toast('Feedback deleted successfully.');
      },
    });
  }

  adminReviews = function adminReviewsV76() {
    setTitle('Contact & Review', 'Administrator Panel');
    const allReviews = Array.isArray(read('reviews')) ? read('reviews') : [];
    const categories = Array.from(new Set([...FEEDBACK_OPTIONS, ...allReviews.map(reviewCategoryV76)])).filter(Boolean);
    const shownReviews = reviewCategoryFilterV76 === 'All Feedback'
      ? allReviews
      : allReviews.filter((review) => reviewCategoryV76(review) === reviewCategoryFilterV76);

    content().innerHTML = `
      <div class="toolbar"><div><p class="eyebrow">Contact Information</p><h2>Contact & Review</h2><p class="muted">Contact information shown to users can be edited in Profile → Website Settings.</p></div></div>
      ${typeof v53ContactCardsMarkup === 'function' ? v53ContactCardsMarkup() : ''}
      <div style="height:22px"></div>
      <div class="toolbar v64-feedback-filter-toolbar">
        <div><p class="eyebrow">User Feedback</p><h2>Review customer feedback</h2><p class="muted">Filter feedback by category and delete feedback if needed.</p></div>
        <label class="v64-feedback-filter-label">Feedback Type<select data-v76-feedback-filter>${categories.map((cat) => `<option value="${esc(cat)}" ${cat === reviewCategoryFilterV76 ? 'selected' : ''}>${esc(cat)}</option>`).join('')}</select></label>
      </div>
      <div class="card-grid">
        ${shownReviews.map((review) => `
          <article class="card feedback-category-card v76-admin-review-card">
            <div class="card-top">
              <div>
                <p class="eyebrow">${esc(new Date(review.createdAt || Date.now()).toLocaleDateString())}</p>
                <h3>${esc(review.userName || 'User')}</h3>
                <p class="muted">${esc(review.email || 'No email recorded')}</p>
              </div>
              <span class="status-pill pending">${esc(reviewCategoryV76(review))}</span>
            </div>
            <p>${esc(review.message || '')}</p>
            <div class="row-actions compact-actions v76-review-actions">
              <button class="btn btn-danger-soft" type="button" data-delete-review-id="${esc(String(review.id || ''))}">Delete</button>
            </div>
          </article>
        `).join('') || empty('No feedback submitted yet.')}
      </div>`;

    content().querySelector('[data-v76-feedback-filter]')?.addEventListener('change', (event) => {
      reviewCategoryFilterV76 = event.target.value || 'All Feedback';
      adminReviews();
    });

    content().querySelectorAll('[data-delete-review-id]').forEach((btn) => {
      btn.addEventListener('click', () => deleteAdminReviewV76(btn.dataset.deleteReviewId || ''));
    });
  };
})();


/* =========================================================
   V80 Auto delete expired slots/bookings after 1 hour
   - Website calls Supabase RPC: upsi_cleanup_expired_slots_1hour()
   - Local website cache is cleaned immediately too.
   - App can call the same RPC so app and website use same Supabase cleanup.
   ========================================================= */
(function upsiV80AutoDeleteExpiredAfterOneHourPatch() {
  const CLEANUP_RPC = 'upsi_cleanup_expired_slots_1hour';
  const ONE_HOUR_MS = 60 * 60 * 1000;
  const ONE_DAY_MS = 24 * ONE_HOUR_MS;
  const TRAINER_DATE_STORAGE = 'upsiGolfTrainerAvailableDates';
  const MANUAL_BLOCK_STORAGE = 'upsiGolfV64ManualLaneBlocks';
  let lastRemoteCleanupAt = 0;
  let cleanupRunning = false;

  function v80Text(value = '') { return String(value ?? '').trim(); }

  function v80ToIsoDate(value = '') {
    const raw = v80Text(value);
    if (!raw) return '';
    const iso = raw.match(/\d{4}-\d{2}-\d{2}/);
    if (iso) return iso[0];
    const slash = raw.match(/^(\d{1,2})\/(\d{1,2})\/(\d{4})$/);
    if (slash) return `${slash[3]}-${slash[2].padStart(2, '0')}-${slash[1].padStart(2, '0')}`;
    const parsed = new Date(raw);
    if (!Number.isNaN(parsed.getTime())) return `${parsed.getFullYear()}-${String(parsed.getMonth() + 1).padStart(2, '0')}-${String(parsed.getDate()).padStart(2, '0')}`;
    return raw.slice(0, 10);
  }

  function v80TimeToMinutes(value = '') {
    let raw = v80Text(value).replace(/[–—]/g, '-').replace(/\s+/g, ' ');
    if (!raw) return null;
    if (raw.includes('-')) raw = v80Text(raw.split('-').pop());
    raw = raw.replace(/^(time|booking time|session)\s*:?\s*/i, '').replace(/\s*\(.*\)\s*$/g, '').trim();
    const m12 = raw.match(/^(\d{1,2})(?::(\d{2}))?(?::\d{2})?\s*(AM|PM)$/i);
    if (m12) {
      let h = Number(m12[1]);
      const m = Number(m12[2] || 0);
      const ap = m12[3].toUpperCase();
      if (ap === 'PM' && h !== 12) h += 12;
      if (ap === 'AM' && h === 12) h = 0;
      return h * 60 + m;
    }
    const m24 = raw.match(/^(\d{1,2}):(\d{2})(?::\d{2})?$/);
    if (m24) return Number(m24[1]) * 60 + Number(m24[2]);
    return null;
  }

  function v80DurationMinutes(value = 60) {
    const direct = Number(value || 0);
    if (direct > 12) return direct;
    if (direct > 0) return direct * 60;
    const raw = v80Text(value).toLowerCase();
    const hour = raw.match(/(\d+(?:\.\d+)?)\s*h/);
    if (hour) return Math.round(Number(hour[1]) * 60);
    const min = raw.match(/(\d+)\s*m/);
    if (min) return Number(min[1]);
    return 60;
  }

  function v80ExpiryMs(dateValue = '', startTime = '', duration = 60, endTime = '', dateOnly = false) {
    const iso = v80ToIsoDate(dateValue);
    if (!iso) return Number.POSITIVE_INFINITY;
    if (dateOnly) return new Date(`${iso}T00:00:00`).getTime() + ONE_DAY_MS + ONE_HOUR_MS;
    const endMin = v80TimeToMinutes(endTime);
    const startMin = v80TimeToMinutes(startTime);
    if (endMin !== null) return new Date(`${iso}T00:00:00`).getTime() + endMin * 60000 + ONE_HOUR_MS;
    if (startMin !== null) return new Date(`${iso}T00:00:00`).getTime() + (startMin + v80DurationMinutes(duration)) * 60000 + ONE_HOUR_MS;
    return new Date(`${iso}T00:00:00`).getTime() + ONE_DAY_MS + ONE_HOUR_MS;
  }

  function v80IsExpiredBooking(booking = {}) {
    const date = booking.date || booking.bookingDate || booking.scheduledDate || booking.booking_date || booking.scheduled_date || '';
    const start = booking.startTime || booking.bookingTime || booking.scheduledTime || booking.time || booking.booking_time || booking.scheduled_time || '';
    const end = booking.endTime || booking.end_time || '';
    const duration = booking.durationMinutes || booking.duration || booking.duration_label || 60;
    const dateOnly = !start && !end;
    return v80ExpiryMs(date, start, duration, end, dateOnly) < Date.now();
  }

  function v80IsExpiredSlot(slot = {}) {
    return v80ExpiryMs(slot.date || slot.slot_date, slot.time || slot.slot_time, 0, '', false) < Date.now();
  }

  function v80CleanLocalCache() {
    let removed = { bookings: 0, slots: 0, trainerDates: 0, manualBlocks: 0 };
    try {
      const bookings = Array.isArray(read('bookings')) ? read('bookings') : [];
      const activeBookings = bookings.filter((booking) => !v80IsExpiredBooking(booking));
      removed.bookings = bookings.length - activeBookings.length;
      if (removed.bookings > 0 && typeof setLocalData === 'function') setLocalData('bookings', activeBookings);
    } catch (_) {}

    try {
      const settings = typeof read === 'function' ? (read('settings') || {}) : {};
      const slots = Array.isArray(settings.scheduleSlots) ? settings.scheduleSlots : [];
      const activeSlots = slots.filter((slot) => !v80IsExpiredSlot(slot));
      removed.slots = slots.length - activeSlots.length;
      if (removed.slots > 0 && typeof setLocalData === 'function') {
        settings.scheduleSlots = activeSlots;
        setLocalData('settings', settings);
      }
    } catch (_) {}

    try {
      const trainerDates = JSON.parse(localStorage.getItem(TRAINER_DATE_STORAGE) || '[]') || [];
      const activeTrainerDates = trainerDates.filter((item) => v80ExpiryMs(item.date || item.availableDate || item.available_date, '', 0, '', true) >= Date.now());
      removed.trainerDates = trainerDates.length - activeTrainerDates.length;
      if (removed.trainerDates > 0) localStorage.setItem(TRAINER_DATE_STORAGE, JSON.stringify(activeTrainerDates));
    } catch (_) {}

    try {
      const manualBlocks = JSON.parse(localStorage.getItem(MANUAL_BLOCK_STORAGE) || '[]') || [];
      const activeManualBlocks = manualBlocks.filter((block) => v80ExpiryMs(block.date || block.blockDate || block.block_date, block.startTime || block.start_time, 0, block.endTime || block.end_time, false) >= Date.now());
      removed.manualBlocks = manualBlocks.length - activeManualBlocks.length;
      if (removed.manualBlocks > 0) localStorage.setItem(MANUAL_BLOCK_STORAGE, JSON.stringify(activeManualBlocks));
    } catch (_) {}

    return removed;
  }

  async function v80RemoteCleanup(force = false) {
    const now = Date.now();
    if (cleanupRunning) return null;
    if (!force && now - lastRemoteCleanupAt < 120000) return null;
    lastRemoteCleanupAt = now;
    v80CleanLocalCache();
    if (!SUPABASE_MODE || !supabaseClient) return null;
    cleanupRunning = true;
    try {
      const { data, error } = await supabaseClient.rpc(CLEANUP_RPC);
      if (error) {
        console.warn('V80 expired slot cleanup skipped. Run supabase_v80_AUTO_DELETE_EXPIRED_SLOTS_AFTER_1_HOUR.sql first.', error);
        return null;
      }
      return data;
    } finally {
      cleanupRunning = false;
    }
  }

  window.upsiCleanupExpiredSlotsAfterOneHour = v80RemoteCleanup;

  const baseLoadSupabaseDataToLocalV80 = typeof loadSupabaseDataToLocal === 'function' ? loadSupabaseDataToLocal : null;
  if (baseLoadSupabaseDataToLocalV80) {
    loadSupabaseDataToLocal = async function loadSupabaseDataToLocalV80(options = {}) {
      await v80RemoteCleanup(false);
      const result = await baseLoadSupabaseDataToLocalV80(options);
      v80CleanLocalCache();
      return result;
    };
  }

  const baseRenderPageV80 = typeof renderPage === 'function' ? renderPage : null;
  if (baseRenderPageV80) {
    renderPage = function renderPageV80(...args) {
      v80RemoteCleanup(false);
      return baseRenderPageV80(...args);
    };
  }

  document.addEventListener('DOMContentLoaded', () => {
    v80RemoteCleanup(true);
    setInterval(() => v80RemoteCleanup(false), 180000);
  });
})();


/* =========================================================
   V82 Search Bar Typing Focus Fix
   - Stops older one-key search listeners from re-rendering immediately.
   - User can type continuously without clicking the search field again.
   - Covers normal search bars and tee time/driving slot search bars.
   ========================================================= */
(function upsiV82SearchBarFocusFix() {
  let normalSearchTimer = null;
  let teeSearchTimer = null;

  function restoreInputFocus(selector, value, cursorPosition) {
    requestAnimationFrame(() => {
      setTimeout(() => {
        const refreshed = document.querySelector(selector);
        if (!refreshed) return;
        refreshed.focus({ preventScroll: true });
        if ('value' in refreshed && typeof value === 'string') refreshed.value = value;
        if (typeof refreshed.setSelectionRange === 'function') {
          const pos = Math.min(Number(cursorPosition || value.length || 0), String(refreshed.value || '').length);
          try { refreshed.setSelectionRange(pos, pos); } catch (_) {}
        }
      }, 0);
    });
  }

  function renderCurrentSearchPage() {
    const page = state?.currentPage || '';
    const role = state?.session?.role || '';
    if (page === 'users' && typeof adminUsers === 'function') return adminUsers();
    if (page === 'bookings' && typeof adminBookings === 'function') return adminBookings();
    if (page === 'trainers' && role === 'user' && typeof userTrainers === 'function') return userTrainers();
    if (page === 'courses' && role === 'admin' && typeof adminCourses === 'function') return adminCourses();
    if (typeof renderPage === 'function') return renderPage();
  }

  function renderTeeSearchPage() {
    if (typeof adminTimes === 'function') return adminTimes();
    if (typeof renderPage === 'function') return renderPage();
  }

  // Capture before old input handlers. This prevents the old "one character then blur" problem.
  document.addEventListener('input', (event) => {
    const input = event.target?.closest?.('[data-search-input]');
    if (!input) return;
    event.stopImmediatePropagation();

    state.search = input.value || '';
    const value = state.search;
    const cursorPosition = input.selectionStart || value.length;

    clearTimeout(normalSearchTimer);
    normalSearchTimer = setTimeout(() => {
      renderCurrentSearchPage();
      restoreInputFocus('[data-search-input]', value, cursorPosition);
    }, 420);
  }, true);

  document.addEventListener('input', (event) => {
    const input = event.target?.closest?.('[data-tee-search-value]');
    if (!input || input.tagName === 'SELECT') return;
    event.stopImmediatePropagation();

    state.teeSearchValue = input.value || '';
    state.teePage = 1;
    const value = state.teeSearchValue;
    const cursorPosition = input.selectionStart || value.length;

    clearTimeout(teeSearchTimer);
    teeSearchTimer = setTimeout(() => {
      renderTeeSearchPage();
      restoreInputFocus('[data-tee-search-value]', value, cursorPosition);
    }, 420);
  }, true);

  document.addEventListener('click', (event) => {
    const clearNormal = event.target?.closest?.('[data-clear-search]');
    if (clearNormal) {
      event.stopImmediatePropagation();
      state.search = '';
      clearTimeout(normalSearchTimer);
      renderCurrentSearchPage();
      restoreInputFocus('[data-search-input]', '', 0);
      return;
    }

    const clearTee = event.target?.closest?.('[data-clear-tee-search]');
    if (clearTee) {
      event.stopImmediatePropagation();
      state.teeSearchValue = '';
      state.teePage = 1;
      clearTimeout(teeSearchTimer);
      renderTeeSearchPage();
      restoreInputFocus('[data-tee-search-value]', '', 0);
    }
  }, true);
})();


/* =========================================================
   V83 Public WBL Landing + Language Toggle + Reset Password
   - Adds pre-login pages before login.
   - Public pages use the same Supabase login background variable.
   - Adds BM/EN language toggle on public/login/system UI.
   - Database schema is unchanged.
   ========================================================= */
(function upsiV83PublicLandingAndLanguagePatch() {
  const V83_LANG_KEY = 'upsi_golf_language';
  const V83_PUBLIC_PAGE_KEY = 'upsi_golf_public_page';
  const V83_LOGIN_DEFAULT = 'assets/background-login-default.png';

  let v83PublicPage = localStorage.getItem(V83_PUBLIC_PAGE_KEY) || 'home';
  let v83Lang = localStorage.getItem(V83_LANG_KEY) || 'en';
  let v83Observer = null;
  let v83ApplyTimer = null;

  const v83DeclarationText = 'This Web-Based Learning (WBL) project is part of the course DTD3053 – Web Programming for Information Systems. The website is developed for educational purposes and practical company use. The project is scheduled to be completed in Semester 6, 2026, by Week 14. If any updates, maintenance, or changes are required after Week 15, the company should contact the Faculty of Computing and Meta-Technology, UPSI.';

  const v83T = {
    en: {
      home: 'Home', about: 'About This Website', features: 'Features', project: 'Project Info', login: 'Login',
      welcome: 'Welcome to', title: 'UPSI Golf Booking System', heroText: 'This is the official platform for booking driving range, tee time, trainer sessions and other golf services at UPSI. Please read about this website before you proceed to login.',
      continueLogin: 'Continue to Login', learnMore: 'Learn More', declaration: 'Web-Based Learning (WBL) Declaration',
      developedLearning: 'Developed for Learning', companyUse: 'Prepared for Company Use', facultySupport: 'Managed with Faculty of Computing and Meta-Technology, UPSI',
      teamTitle: 'Development Team & Course Lecturer', developer1: 'Developer 1', developer2: 'Developer 2', developer3: 'Developer 3', lecturer: 'Course Lecturer',
      course: 'Course: DTD3053 – Web Programming for Information Systems', aboutWebsite: 'About This Website',
      aboutBody: 'The UPSI Golf Booking System is a web application designed to simplify and streamline the booking process for golf facilities and services at UPSI. It provides a convenient platform for students, staff, members and public users to make reservations, manage bookings, and stay updated with the latest information about the golf centre.',
      reliable: 'Reliable', reliableText: 'Built with reliability and data security in mind.', accessible: 'Accessible', accessibleText: 'Access the system anytime, anywhere with internet.', efficient: 'Efficient', efficientText: 'Save time with fast and efficient booking management.',
      aboutHero: 'Learn more about the UPSI Golf Booking System, its purpose, academic context, and how it supports golf facility booking at Universiti Pendidikan Sultan Idris.',
      purpose: 'Purpose of This Website', purposeText: 'To simplify and streamline the booking process for golf facilities and services at UPSI Golf Driving Range.',
      who: 'Who Is It For?', whoText: 'Designed for students, staff, trainers, members, and public users to make reservations and manage bookings with ease.',
      eduCompany: 'Educational and Company Use', eduCompanyText: 'This system is developed as a Web-Based Learning project and may also be used by the company for operational purposes. Any major updates after Week 15 should be referred to the Faculty of Computing and Meta-Technology, UPSI.',
      academicContext: 'Academic Context', academicContextText: 'Developed as part of a Web-Based Learning (WBL) project under the supervision of Universiti Pendidikan Sultan Idris (UPSI) lecturers.',
      objectives: 'System Objectives', obj1: 'Provide a convenient online platform to book golf facilities.', obj2: 'Allow users to view and manage their bookings in real time.', obj3: 'Improve efficiency in managing schedules and trainer sessions.', obj4: 'Offer a user-friendly experience for all system users.',
      howUse: 'How to Use', stepLogin: 'Login', stepLoginText: 'Log in to your account to access the system features.', chooseBook: 'Choose & Book', chooseBookText: 'Select your preferred service, date, and time, then confirm your booking.', manageBooking: 'Manage Booking', manageBookingText: 'View your bookings, reschedule, or cancel if needed.', enjoyGame: 'Enjoy Your Game', enjoyGameText: 'Visit the UPSI Golf Driving Range and enjoy your session!',
      featHero: 'Powerful Features for a Seamless Golf Booking Experience', featText: 'UPSI Golf Booking System provides a complete set of features to help students, staff, members, and public users book facilities, manage appointments, and stay updated with ease and efficiency.',
      driving: 'Driving Range Booking', drivingText: 'Reserve your preferred time slot to practice at the UPSI Golf Driving Range.', tee: 'Tee Time Booking', teeText: 'Book your tee time easily for a smooth and enjoyable game on our golf course.', trainer: 'Trainer Booking', trainerText: 'Improve your skills by booking sessions with our professional golf trainers.', history: 'Booking History', historyText: 'View and manage your past and upcoming bookings in one place.', profile: 'User Profile', profileText: 'Update your personal information, preferences, and account settings.', adminMgmt: 'Admin Management', adminMgmtText: 'Secure tools for administrators to manage users, bookings, facilities, and system settings.', feedback: 'Feedback', feedbackText: 'Share your feedback and suggestions to help us improve our services.',
      projectInformation: 'Project Information', projectSub: 'UPSI Golf Booking System', projectIntro: 'This page provides an overview of the academic project, including its purpose, features, scope, and technologies used in development.',
      projectTitle: 'Project Title', projectTitleValue: 'UPSI GOLF DRIVING RANGE BOOKING MANAGEMENT SYSTEM', projectTitleText: 'A web-based application designed to simplify and streamline the booking process for golf facilities and services at UPSI Golf Driving Range.', projectType: 'Project Type', institution: 'Institution', institutionValue: 'Universiti Pendidikan Sultan Idris (UPSI)', institutionText: 'Developed by students of Universiti Pendidikan Sultan Idris (UPSI) under the Faculty of Computing and Meta-Technology.', projectPurposeText: 'To provide a convenient platform for students, staff, members, and the public to make reservations, manage bookings, and stay updated with the latest information about the golf centre.',
      targetUsers: 'Target Users', scope: 'Scope of System', scopeText: 'The system covers online booking for driving range slots, tee time reservations, trainer bookings, user management, booking management, schedules, and notifications/updates.', modules: 'Main Modules',
      footerNote: 'UPSI Golf Booking System — For Educational and Practical Use', ready: 'Ready to continue?', loginNow: 'Login Now', support: 'Need support?',
      language: 'Language', malay: 'Malay', english: 'English',
    },
    ms: {
      home: 'Utama', about: 'Tentang Website Ini', features: 'Ciri-Ciri', project: 'Info Projek', login: 'Log Masuk',
      welcome: 'Selamat Datang ke', title: 'Sistem Tempahan UPSI Golf', heroText: 'Ini ialah platform rasmi untuk tempahan driving range, tee time, sesi jurulatih dan perkhidmatan golf lain di UPSI. Sila baca maklumat website ini sebelum meneruskan log masuk.',
      continueLogin: 'Terus ke Log Masuk', learnMore: 'Ketahui Lanjut', declaration: 'Deklarasi Web-Based Learning (WBL)',
      developedLearning: 'Dibangunkan untuk Pembelajaran', companyUse: 'Disediakan untuk Kegunaan Syarikat', facultySupport: 'Diurus dengan sokongan Fakulti Komputeran dan Meta-Teknologi, UPSI',
      teamTitle: 'Pasukan Pembangunan & Pensyarah Kursus', developer1: 'Pembangun 1', developer2: 'Pembangun 2', developer3: 'Pembangun 3', lecturer: 'Pensyarah Kursus',
      course: 'Kursus: DTD3053 – Pengaturcaraan Web untuk Sistem Maklumat', aboutWebsite: 'Tentang Website Ini',
      aboutBody: 'UPSI Golf Booking System ialah aplikasi web yang dibangunkan untuk memudahkan dan menyusun proses tempahan kemudahan serta perkhidmatan golf di UPSI. Sistem ini menyediakan platform yang mudah untuk pelajar, staf, ahli dan orang awam membuat tempahan, mengurus tempahan dan mendapatkan maklumat terkini berkaitan pusat golf.',
      reliable: 'Boleh Dipercayai', reliableText: 'Dibina dengan penekanan terhadap kebolehpercayaan dan keselamatan data.', accessible: 'Mudah Diakses', accessibleText: 'Sistem boleh diakses pada bila-bila masa dan di mana-mana sahaja dengan internet.', efficient: 'Efisien', efficientText: 'Menjimatkan masa melalui pengurusan tempahan yang pantas dan tersusun.',
      aboutHero: 'Ketahui maklumat tentang UPSI Golf Booking System, tujuan, konteks akademik dan sokongannya terhadap tempahan kemudahan golf di Universiti Pendidikan Sultan Idris.',
      purpose: 'Tujuan Website Ini', purposeText: 'Untuk memudahkan dan menyusun proses tempahan kemudahan serta perkhidmatan golf di UPSI Golf Driving Range.',
      who: 'Siapa Pengguna Sistem?', whoText: 'Direka untuk pelajar, staf, jurulatih, ahli dan orang awam membuat serta mengurus tempahan dengan mudah.',
      eduCompany: 'Kegunaan Pendidikan dan Syarikat', eduCompanyText: 'Sistem ini dibangunkan sebagai projek Web-Based Learning dan juga boleh digunakan oleh syarikat untuk tujuan operasi. Sebarang kemas kini besar selepas Minggu 15 perlu dirujuk kepada Fakulti Komputeran dan Meta-Teknologi, UPSI.',
      academicContext: 'Konteks Akademik', academicContextText: 'Dibangunkan sebagai projek Web-Based Learning (WBL) di bawah penyeliaan pensyarah Universiti Pendidikan Sultan Idris (UPSI).',
      objectives: 'Objektif Sistem', obj1: 'Menyediakan platform dalam talian yang mudah untuk menempah kemudahan golf.', obj2: 'Membolehkan pengguna melihat dan mengurus tempahan secara masa nyata.', obj3: 'Meningkatkan kecekapan pengurusan jadual dan sesi jurulatih.', obj4: 'Menawarkan pengalaman penggunaan sistem yang mesra pengguna.',
      howUse: 'Cara Guna', stepLogin: 'Log Masuk', stepLoginText: 'Log masuk ke akaun untuk mengakses fungsi sistem.', chooseBook: 'Pilih & Tempah', chooseBookText: 'Pilih servis, tarikh dan masa yang diingini, kemudian sahkan tempahan.', manageBooking: 'Urus Tempahan', manageBookingText: 'Lihat, jadual semula atau batalkan tempahan jika perlu.', enjoyGame: 'Nikmati Permainan', enjoyGameText: 'Hadir ke UPSI Golf Driving Range dan nikmati sesi anda!',
      featHero: 'Ciri Lengkap untuk Pengalaman Tempahan Golf yang Lancar', featText: 'UPSI Golf Booking System menyediakan ciri lengkap untuk membantu pelajar, staf, ahli dan orang awam menempah kemudahan, mengurus janji temu dan mendapatkan maklumat dengan mudah.',
      driving: 'Tempahan Driving Range', drivingText: 'Tempah slot masa pilihan untuk latihan di UPSI Golf Driving Range.', tee: 'Tempahan Tee Time', teeText: 'Tempah tee time dengan mudah untuk pengalaman permainan golf yang lebih lancar.', trainer: 'Tempahan Jurulatih', trainerText: 'Tingkatkan kemahiran dengan menempah sesi bersama jurulatih golf profesional.', history: 'Sejarah Tempahan', historyText: 'Lihat dan urus tempahan terdahulu serta tempahan akan datang dalam satu tempat.', profile: 'Profil Pengguna', profileText: 'Kemas kini maklumat peribadi, pilihan dan tetapan akaun.', adminMgmt: 'Pengurusan Admin', adminMgmtText: 'Alat selamat untuk admin mengurus pengguna, tempahan, kemudahan dan tetapan sistem.', feedback: 'Maklum Balas', feedbackText: 'Kongsi maklum balas dan cadangan untuk membantu kami menambah baik perkhidmatan.',
      projectInformation: 'Maklumat Projek', projectSub: 'Sistem Tempahan UPSI Golf', projectIntro: 'Halaman ini memberi gambaran keseluruhan projek akademik termasuk tujuan, ciri, skop dan teknologi yang digunakan dalam pembangunan.',
      projectTitle: 'Tajuk Projek', projectTitleValue: 'SISTEM PENGURUSAN TEMPAHAN UPSI GOLF DRIVING RANGE', projectTitleText: 'Aplikasi web yang direka untuk memudahkan dan menyusun proses tempahan kemudahan serta perkhidmatan golf di UPSI Golf Driving Range.', projectType: 'Jenis Projek', institution: 'Institusi', institutionValue: 'Universiti Pendidikan Sultan Idris (UPSI)', institutionText: 'Dibangunkan oleh pelajar Universiti Pendidikan Sultan Idris (UPSI) di bawah Fakulti Komputeran dan Meta-Teknologi.', projectPurposeText: 'Untuk menyediakan platform yang mudah kepada pelajar, staf, ahli dan orang awam bagi membuat tempahan, mengurus tempahan serta mendapatkan maklumat terkini berkaitan pusat golf.',
      targetUsers: 'Sasaran Pengguna', scope: 'Skop Sistem', scopeText: 'Sistem ini merangkumi tempahan dalam talian untuk slot driving range, tempahan tee time, tempahan jurulatih, pengurusan pengguna, pengurusan tempahan, jadual serta notifikasi/kemas kini.', modules: 'Modul Utama',
      footerNote: 'UPSI Golf Booking System — Untuk Kegunaan Pendidikan dan Praktikal', ready: 'Sedia untuk teruskan?', loginNow: 'Log Masuk Sekarang', support: 'Perlukan bantuan?',
      language: 'Bahasa', malay: 'Bahasa Melayu', english: 'English',
    }
  };

  const v83UiMs = {
    'Dashboard': 'Papan Pemuka', 'Home': 'Utama', 'Driving Range': 'Driving Range', 'Trainers': 'Jurulatih', 'My Bookings': 'Tempahan Saya', 'Payment': 'Bayaran', 'Payments': 'Bayaran', 'Profile': 'Profil', 'Feedback': 'Maklum Balas', 'Logout': 'Log Keluar', 'Log Out': 'Log Keluar', 'Manage Users': 'Urus Pengguna', 'Tee Times': 'Tee Times', 'Bookings': 'Tempahan', 'Reviews': 'Ulasan', 'Reports': 'Laporan',
    'Administrator Panel': 'Panel Pentadbir', 'User Profile': 'Profil Pengguna', 'User / Golfer': 'Pengguna / Pemain Golf', 'Administrator': 'Pentadbir', 'Main Administrator': 'Pentadbir Utama',
    'Welcome Back': 'Selamat Datang Kembali', 'UPSI Driving Range': 'UPSI Driving Range', 'Email': 'Emel', 'Email Address': 'Alamat Emel', 'Password': 'Kata Laluan', 'Admin Email': 'Emel Admin', 'User': 'Pengguna', 'Admin': 'Admin', 'Password Help': 'Bantuan Kata Laluan', 'Log In as User': 'Log Masuk sebagai Pengguna', 'Log In as Admin': 'Log Masuk sebagai Admin', 'New user? Create an account': 'Pengguna baru? Daftar akaun', 'Create User Account': 'Daftar Akaun Pengguna', 'Full Name': 'Nama Penuh', 'Phone Number': 'Nombor Telefon', 'Age': 'Umur', 'Birthday Date': 'Tarikh Lahir', 'Address': 'Alamat', 'Register User Account': 'Daftar Akaun Pengguna', 'Back to User Login': 'Kembali ke Log Masuk Pengguna', 'Admin registration is available only after the main admin logs in.': 'Pendaftaran admin hanya tersedia selepas pentadbir utama log masuk.',
    'Search': 'Cari', 'Save': 'Simpan', 'Save Profile': 'Simpan Profil', 'Change Password': 'Tukar Kata Laluan', 'Switch to Dark Mode': 'Tukar ke Mod Gelap', 'Switch to Light Mode': 'Tukar ke Mod Cerah', 'Theme': 'Tema', 'Change': 'Tukar', 'View': 'Lihat', 'Edit': 'Edit', 'Delete': 'Padam', 'Cancel': 'Batal', 'Confirm': 'Sahkan', 'Close': 'Tutup', 'Submit': 'Hantar', 'Update': 'Kemas Kini', 'Create': 'Cipta', 'Add': 'Tambah', 'Release': 'Lepas', 'Available': 'Tersedia', 'Unavailable': 'Tidak Tersedia', 'Booked': 'Ditempah', 'Pending': 'Menunggu', 'Completed': 'Selesai', 'Cancelled': 'Dibatalkan', 'Rejected': 'Ditolak', 'Approved': 'Diluluskan',
    'Booking Date': 'Tarikh Tempahan', 'Booking Time': 'Masa Tempahan', 'Amount': 'Jumlah', 'Status': 'Status', 'Action': 'Tindakan', 'Date': 'Tarikh', 'Time': 'Masa', 'Duration': 'Tempoh', 'Select date': 'Pilih tarikh', 'Select time': 'Pilih masa', 'Select available lane': 'Pilih lane tersedia', 'Lane Availability': 'Ketersediaan Lane', 'Submit Feedback': 'Hantar Maklum Balas', 'General Feedback': 'Maklum Balas Umum',
    'Booking platform for users and administrators': 'Platform tempahan untuk pengguna dan pentadbir', 'System Scope': 'Skop Sistem', 'Please contact the administrator to reset or update the password for this prototype.': 'Sila hubungi pentadbir untuk menetapkan semula atau mengemas kini kata laluan prototaip ini.'
  };

  const v83PlaceholderMs = {
    'Email': 'Emel', 'Admin Email': 'Emel Admin', 'Password': 'Kata Laluan', 'Enter your email address': 'Masukkan alamat emel', 'Enter your password': 'Masukkan kata laluan', 'Enter your full name': 'Masukkan nama penuh', 'example@student.upsi.edu.my': 'contoh@student.upsi.edu.my', '012-3456789': '012-3456789', 'Minimum 6 characters': 'Minimum 6 aksara', 'Enter your address': 'Masukkan alamat', 'Search': 'Cari'
  };

  function tx(key) { return (v83T[v83Lang] || v83T.en)[key] || v83T.en[key] || key; }
  function esc(value) { return typeof escapeHtml === 'function' ? escapeHtml(value) : String(value ?? '').replace(/[&<>"']/g, (m) => ({ '&':'&amp;','<':'&lt;','>':'&gt;','"':'&quot;',"'":'&#039;' }[m])); }

  function v83SetLanguage(lang) {
    v83Lang = lang === 'ms' ? 'ms' : 'en';
    localStorage.setItem(V83_LANG_KEY, v83Lang);
    document.documentElement.lang = v83Lang === 'ms' ? 'ms' : 'en';
    if (document.body) document.body.dataset.lang = v83Lang;
  }

  function v83LanguageToggle() {
    return `<div class="v83-language-toggle" aria-label="Language switcher"><button type="button" class="${v83Lang === 'en' ? 'active' : ''}" data-v83-lang="en">EN</button><button type="button" class="${v83Lang === 'ms' ? 'active' : ''}" data-v83-lang="ms">BM</button></div>`;
  }

  function v83PublicHeader(active) {
    const items = [['home', tx('home')], ['about', tx('about')], ['features', tx('features')], ['project', tx('project')]];
    return `<header class="v83-public-header"><div class="v83-public-brand"><img src="assets/upsi-driving-range-logo.png" alt="UPSI Golf logo"><div><strong>UPSI Golf</strong><span>Booking System</span></div></div><nav class="v83-public-nav">${items.map(([key,label]) => `<button type="button" class="${active === key ? 'active' : ''}" data-v83-public-page="${key}">${esc(label)}</button>`).join('')}<button type="button" class="v83-public-login-btn" data-v83-show-login>👤 ${esc(tx('login'))}</button>${v83LanguageToggle()}</nav></header>`;
  }

  function v83Hero({ page, title, subtitle, intro, buttons = false }) {
    return `<section class="v83-public-hero v83-hero-${page}"><div class="v83-hero-copy"><h1>${title}</h1>${subtitle ? `<h2>${subtitle}</h2>` : ''}<span class="v83-green-line"></span><p>${esc(intro)}</p>${buttons ? `<div class="v83-hero-actions"><button class="v83-primary-cta" type="button" data-v83-show-login>👤 ${esc(tx('continueLogin'))}</button><button class="v83-outline-cta" type="button" data-v83-public-page="about">ⓘ ${esc(tx('learnMore'))}</button></div>` : `<div class="v83-breadcrumb">⌂ ${esc(tx('home'))} › ${esc(title.replace(/<[^>]*>/g, ''))}</div>`}</div></section>`;
  }

  function v83DeclarationPanel({ compact = false } = {}) {
    return `<section class="v83-declaration-card ${compact ? 'compact' : ''}"><div class="v83-declaration-icon">🎓</div><div class="v83-declaration-title"><h2>${esc(tx('declaration'))}</h2></div><p>${esc(v83Lang === 'ms' ? 'Projek Web-Based Learning (WBL) ini merupakan sebahagian daripada kursus DTD3053 – Pengaturcaraan Web untuk Sistem Maklumat. Website ini dibangunkan untuk tujuan pendidikan dan kegunaan praktikal syarikat. Projek ini dijadualkan siap pada Semester 6, 2026, sebelum Minggu 14. Sekiranya kemas kini, penyelenggaraan atau perubahan diperlukan selepas Minggu 15, pihak syarikat perlu menghubungi Fakulti Komputeran dan Meta-Teknologi, UPSI.' : v83DeclarationText)}</p>${compact ? '' : `<ul><li>🎓 ${esc(tx('developedLearning'))}</li><li>🏢 ${esc(tx('companyUse'))}</li><li>🛡️ ${esc(tx('facultySupport'))}</li></ul>`}</section>`;
  }

  function v83Footer() {
    return `<footer class="v83-public-footer"><div><p>© 2026 Universiti Pendidikan Sultan Idris (UPSI) | Web-Based Learning Project</p><em>${esc(tx('footerNote'))}</em></div><div class="v83-footer-upsi"><img src="assets/upsi-driving-range-logo.png" alt="UPSI"><strong>UPSI</strong></div><div class="v83-footer-cta"><span>${esc(tx('ready'))}</span><button type="button" data-v83-show-login>👤 ${esc(tx('loginNow'))}</button></div></footer>`;
  }

  function v83TeamSection() {
    return `<section class="v83-public-card v83-team-section"><h2>👥 ${esc(tx('teamTitle'))}</h2><div class="v83-team-grid"><article><span>👤</span><strong>${esc(tx('developer1'))}</strong><p>Muhammad Hakimi Adly<br>bin Hazlee<br><b>D20231106511</b></p></article><article><span>👤</span><strong>${esc(tx('developer2'))}</strong><p>Waldan Aiman bin Nazri<br><b>D20231106455</b></p></article><article><span>👤</span><strong>${esc(tx('developer3'))}</strong><p>Muhammad Adib bin Samsuri<br><b>D20231106481</b></p></article><article class="lecturer"><span>🧑‍🏫</span><strong>${esc(tx('lecturer'))}</strong><p>Profesor Madya Dr. Aslina<br>binti Saad</p></article></div><p class="v83-course-line">📖 ${esc(tx('course'))}</p></section>`;
  }

  function v83AboutStrip() {
    return `<section class="v83-public-card v83-about-strip"><div><h2>🖥️ ${esc(tx('aboutWebsite'))}</h2><p>${esc(tx('aboutBody'))}</p></div><div class="v83-values"><article><b>🛡️ ${esc(tx('reliable'))}</b><span>${esc(tx('reliableText'))}</span></article><article><b>🌐 ${esc(tx('accessible'))}</b><span>${esc(tx('accessibleText'))}</span></article><article><b>🕘 ${esc(tx('efficient'))}</b><span>${esc(tx('efficientText'))}</span></article></div></section>`;
  }

  function v83RenderHome() {
    return `${v83PublicHeader('home')}${v83Hero({ page: 'home', title: `${esc(tx('welcome'))}<br>UPSI <span>Golf</span> Booking System`, intro: tx('heroText'), buttons: true })}<main class="v83-public-main">${v83DeclarationPanel()}${v83TeamSection()}${v83AboutStrip()}</main>${v83Footer()}`;
  }

  function v83RenderAbout() {
    return `${v83PublicHeader('about')}${v83Hero({ page: 'about', title: esc(tx('aboutWebsite')), intro: tx('aboutHero') })}<main class="v83-public-main">${v83DeclarationPanel()}<section class="v83-info-grid four"><article><span>🎯</span><h3>${esc(tx('purpose'))}</h3><p>${esc(tx('purposeText'))}</p></article><article><span>👥</span><h3>${esc(tx('who'))}</h3><p>${esc(tx('whoText'))}</p></article><article><span>✅</span><h3>${esc(tx('eduCompany'))}</h3><p>${esc(tx('eduCompanyText'))}</p></article><article><span>📖</span><h3>${esc(tx('academicContext'))}</h3><p>${esc(tx('academicContextText'))}</p></article></section><section class="v83-public-card v83-two-col"><div><h2>⚑ ${esc(tx('objectives'))}</h2><ul><li>${esc(tx('obj1'))}</li><li>${esc(tx('obj2'))}</li><li>${esc(tx('obj3'))}</li><li>${esc(tx('obj4'))}</li></ul></div><div><h2>📖 ${esc(tx('howUse'))}</h2><div class="v83-steps"><article><b>1</b><strong>${esc(tx('stepLogin'))}</strong><p>${esc(tx('stepLoginText'))}</p></article><article><b>2</b><strong>${esc(tx('chooseBook'))}</strong><p>${esc(tx('chooseBookText'))}</p></article><article><b>3</b><strong>${esc(tx('manageBooking'))}</strong><p>${esc(tx('manageBookingText'))}</p></article><article><b>4</b><strong>${esc(tx('enjoyGame'))}</strong><p>${esc(tx('enjoyGameText'))}</p></article></div></div></section></main>${v83Footer()}`;
  }

  function v83FeatureCards() {
    const cards = [['🏌️', 'driving', 'drivingText'], ['📅', 'tee', 'teeText'], ['👨‍🏫', 'trainer', 'trainerText'], ['🕘', 'history', 'historyText'], ['👤', 'profile', 'profileText'], ['🛡️', 'adminMgmt', 'adminMgmtText'], ['⭐', 'feedback', 'feedbackText']];
    return `<section class="v83-info-grid features">${cards.map(([icon, title, body]) => `<article><span>${icon}</span><h3>${esc(tx(title))}</h3><p>${esc(tx(body))}</p></article>`).join('')}</section>`;
  }

  function v83RenderFeatures() {
    return `${v83PublicHeader('features')}${v83Hero({ page: 'features', title: esc(tx('featHero')).replace('Golf', '<span>Golf</span>'), intro: tx('featText') })}<main class="v83-public-main">${v83FeatureCards()}${v83DeclarationPanel({ compact: true })}</main>${v83Footer()}`;
  }

  function v83RenderProject() {
    const modules = v83Lang === 'ms' ? ['Tempahan Driving Range','Tempahan Tee Time','Tempahan Jurulatih','Pengurusan Pengguna','Pengurusan Tempahan','Notifikasi & Kemas Kini','Pengurusan Profil Pengguna','Laporan & Papan Pemuka'] : ['Driving Range Booking','Tee Time Booking','Trainer Booking','User Management','Booking Management','Notifications & Updates','User Profile Management','Reports & Dashboard'];
    const targets = v83Lang === 'ms' ? ['Pelajar UPSI','Staf UPSI','Ahli UPSI Golf','Jurulatih Golf & Pentadbir','Orang Awam / Pengguna Awam'] : ['UPSI Students','UPSI Staff','UPSI Golf Members','Golf Trainers & Administrators','General Public / Public Users'];
    return `${v83PublicHeader('project')}${v83Hero({ page: 'project', title: esc(tx('projectInformation')), subtitle: 'UPSI <span>Golf</span> Booking System', intro: tx('projectIntro') })}<main class="v83-public-main"><section class="v83-project-grid top"><article><span>📋</span><h3>${esc(tx('projectTitle'))}</h3><strong>${esc(tx('projectTitleValue'))}</strong><p>${esc(tx('projectTitleText'))}</p></article><article><span>🖥️</span><h3>${esc(tx('projectType'))}</h3><strong>Web-Based Learning (WBL)</strong><p>${esc(v83Lang === 'ms' ? 'Projek ini dibangunkan sebagai sebahagian daripada projek akademik Web-Based Learning.' : 'This project is developed as part of a Web-Based Learning academic project.')}</p></article><article><span>🏛️</span><h3>${esc(tx('institution'))}</h3><strong>${esc(tx('institutionValue'))}</strong><p>${esc(tx('institutionText'))}</p></article><article><span>🎯</span><h3>Purpose</h3><p>${esc(tx('projectPurposeText'))}</p></article></section><section class="v83-project-grid bottom"><article><span>👥</span><h3>${esc(tx('targetUsers'))}</h3><ul>${targets.map((item) => `<li>${esc(item)}</li>`).join('')}</ul></article><article><span>📋</span><h3>${esc(tx('scope'))}</h3><p>${esc(tx('scopeText'))}</p></article><article class="wide"><span>🧩</span><h3>${esc(tx('modules'))}</h3><ul class="v83-two-list">${modules.map((m) => `<li>${esc(m)}</li>`).join('')}</ul></article></section>${v83DeclarationPanel({ compact: true })}</main>${v83Footer()}`;
  }

  function v83RenderPublicSite(page = v83PublicPage) {
    v83PublicPage = ['home', 'about', 'features', 'project'].includes(page) ? page : 'home';
    localStorage.setItem(V83_PUBLIC_PAGE_KEY, v83PublicPage);
    const html = v83PublicPage === 'about' ? v83RenderAbout() : v83PublicPage === 'features' ? v83RenderFeatures() : v83PublicPage === 'project' ? v83RenderProject() : v83RenderHome();
    app().innerHTML = `<div class="v83-public-site">${html}</div>`;
    v83BindPublicEvents();
    v83ApplyLanguageSoon();
  }

  const v83BaseRenderAuth = typeof renderAuth === 'function' ? renderAuth : null;
  function v83ShowLogin() {
    if (!v83BaseRenderAuth) return;
    v83BaseRenderAuth();
    v83EnhanceLoginScreen();
    v83ApplyLanguageSoon();
  }

  function v83BindPublicEvents() {
    document.querySelectorAll('[data-v83-public-page]').forEach((btn) => {
      btn.addEventListener('click', () => v83RenderPublicSite(btn.dataset.v83PublicPage || 'home'));
    });
    document.querySelectorAll('[data-v83-show-login]').forEach((btn) => btn.addEventListener('click', v83ShowLogin));
    v83BindLanguageButtons();
  }

  function v83EnhanceLoginScreen() {
    const layout = document.querySelector('.auth-app-layout');
    if (layout && !layout.querySelector('.v83-auth-public-header')) {
      layout.insertAdjacentHTML('afterbegin', `<div class="v83-auth-public-header">${v83PublicHeader('login')}</div>`);
    }
    document.querySelectorAll('[data-v83-public-page]').forEach((btn) => {
      btn.addEventListener('click', () => v83RenderPublicSite(btn.dataset.v83PublicPage || 'home'));
    });
    document.querySelectorAll('[data-v83-show-login]').forEach((btn) => btn.addEventListener('click', v83ShowLogin));
    v83BindLanguageButtons();
    v83PatchForgotPasswordButtons();
  }

  function v83PatchForgotPasswordButtons() {
    document.querySelectorAll('[data-forgot-user], [data-forgot-admin]').forEach((btn) => {
      if (btn.dataset.v83ForgotPatched) return;
      btn.dataset.v83ForgotPatched = '1';
      btn.addEventListener('click', async (event) => {
        event.preventDefault();
        event.stopImmediatePropagation();
        const panel = btn.closest('form');
        const email = panel?.querySelector('input[type="email"]')?.value?.trim() || '';
        if (SUPABASE_MODE && supabaseClient && email) {
          try {
            const { error } = await supabaseClient.auth.resetPasswordForEmail(email, { redirectTo: window.location.href });
            if (error) throw error;
            toast(v83Lang === 'ms' ? 'Pautan reset kata laluan telah dihantar ke emel tersebut jika akaun wujud.' : 'A password reset link has been sent if the account exists.');
            return;
          } catch (error) {
            console.error('V83 reset password error:', error);
            toast(error.message || 'Password reset is not available for this account.');
            return;
          }
        }
        toast(v83Lang === 'ms' ? 'Masukkan emel terlebih dahulu. Jika reset emel tidak aktif, sila hubungi pentadbir.' : 'Enter your email first. If email reset is not enabled, please contact the administrator.');
      }, true);
    });
  }

  renderAuth = function renderAuthV83() {
    v83RenderPublicSite(v83PublicPage || 'home');
  };

  const v83BaseRenderShell = typeof renderShell === 'function' ? renderShell : null;
  if (v83BaseRenderShell) {
    renderShell = function renderShellV83() {
      const result = v83BaseRenderShell();
      v83InjectAppLanguageToggle();
      v83ApplyLanguageSoon();
      return result;
    };
  }

  const v83BaseRenderPage = typeof renderPage === 'function' ? renderPage : null;
  if (v83BaseRenderPage) {
    renderPage = function renderPageV83() {
      const result = v83BaseRenderPage();
      v83InjectAppLanguageToggle();
      v83ApplyLanguageSoon();
      return result;
    };
  }

  function v83InjectAppLanguageToggle() {

    const topbar = document.querySelector('.topbar');
    if (!topbar) return;

    let topbarRight = topbar.querySelector('.topbar-right');
    if (!topbarRight) {
      topbarRight = document.createElement('div');
      topbarRight.className = 'topbar-right';
      topbar.appendChild(topbarRight);
    }

    const profileChip = document.getElementById('profileChip');
    if (profileChip && !topbarRight.contains(profileChip)) {
      topbarRight.appendChild(profileChip);
    }

    const toggles = Array.from(document.querySelectorAll('.topbar .v83-language-toggle'));
    let langToggle = toggles[0] || null;
    toggles.slice(1).forEach((toggle) => toggle.remove());

    if (!langToggle) {
      topbarRight.insertAdjacentHTML('beforeend', v83LanguageToggle());
      langToggle = topbarRight.querySelector('.v83-language-toggle');
    } else if (!topbarRight.contains(langToggle)) {
      topbarRight.appendChild(langToggle);
    }

    v83BindLanguageButtons();
  }

  function v83BindLanguageButtons() {
    document.querySelectorAll('[data-v83-lang]').forEach((btn) => {
      if (btn.dataset.v83Bound) return;
      btn.dataset.v83Bound = '1';
      btn.addEventListener('click', () => {
        v83SetLanguage(btn.dataset.v83Lang);
        document.querySelectorAll('[data-v83-lang]').forEach((b) => b.classList.toggle('active', b.dataset.v83Lang === v83Lang));
        if (document.querySelector('.v83-public-site')) v83RenderPublicSite(v83PublicPage);
        else if (document.querySelector('.auth-app-layout') && !document.querySelector('.app-shell')) { v83ShowLogin(); }
        else if (typeof renderPage === 'function') { renderPage(); }
        v83ApplyLanguageSoon();
      });
    });
  }

  function v83ApplyLanguageSoon() {
// V92: disabled old live DOM translation to prevent blinking/loop.
    clearTimeout(v83ApplyTimer);
  }

  function v83TextToMalay(text) {
    const clean = String(text || '').trim().replace(/\s+/g, ' ');
    if (!clean) return null;
    if (v83UiMs[clean]) return v83UiMs[clean];
    let next = clean;
    const phraseMap = [
      ['Welcome Back', 'Selamat Datang Kembali'], ['Password Help', 'Bantuan Kata Laluan'], ['Create an account', 'Daftar akaun'], ['Booking System', 'Sistem Tempahan'], ['Booking Management', 'Pengurusan Tempahan'], ['User Management', 'Pengurusan Pengguna'], ['User Profile Management', 'Pengurusan Profil Pengguna'], ['Reports & Dashboard', 'Laporan & Papan Pemuka'], ['Notifications & Updates', 'Notifikasi & Kemas Kini'], ['Driving Range Booking', 'Tempahan Driving Range'], ['Tee Time Booking', 'Tempahan Tee Time'], ['Trainer Booking', 'Tempahan Jurulatih'], ['Booking History', 'Sejarah Tempahan'], ['Payment Tracking', 'Penjejakan Bayaran'], ['Admin Management', 'Pengurusan Admin'], ['General User', 'Pengguna Biasa'], ['System Administrator', 'Pentadbir Sistem'], ['Available', 'Tersedia'], ['Unavailable', 'Tidak Tersedia'], ['Trainer session', 'Sesi jurulatih'], ['Walk-in customer', 'Pelanggan walk-in'], ['Phone call booking', 'Tempahan panggilan telefon'], ['Maintenance', 'Penyelenggaraan'], ['Private event', 'Acara peribadi'], ['Other manual block', 'Sekatan manual lain']
    ];
    phraseMap.forEach(([en, ms]) => { next = next.replaceAll(en, ms); });
    return next !== clean ? next : null;
  }

  function v83ApplyLanguageToDom() {
// V92: disabled old live DOM translation to prevent mixed/stacked translation.
    v83SetLanguage(v83Lang);
    document.querySelectorAll('[data-v83-lang]').forEach((btn) => {
      btn.classList.toggle('active', btn.dataset.v83Lang === v83Lang);
    });
  }

  if (!v83Observer) {
    v83Observer = new MutationObserver(() => v83ApplyLanguageSoon());
    document.addEventListener('DOMContentLoaded', () => {
      try { v83Observer.observe(document.body, { childList: true, subtree: true }); } catch (_) {}
      v83SetLanguage(v83Lang);
      v83ApplyLanguageSoon();
    });
  }
})();




</script>
<?php
}

function upsi_section_user_payment_module(): void
{
?>
<script>
window.UPSI_SECTION_MODULES = window.UPSI_SECTION_MODULES || {};
window.UPSI_SECTION_MODULES["user_payment"] = {
  title: "User Payment",
  runtimeChunk: '20/22',
  functions: ["userPayments"]
};
</script>
<?php
}

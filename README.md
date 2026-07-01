# WBL Website

Projek laman web ini adalah aplikasi PHP yang mengandungi modul public, admin, dan user. Projek ini sudah disediakan untuk dikongsi ke GitHub dan dideploy ke Vercel secara automatik.

## Struktur utama

- website/ : kandungan aplikasi utama
- api/ : entry point untuk Vercel
- vercel.json : konfigurasi routing Vercel
- .github/workflows/deploy-vercel.yml : workflow deploy automatik ke Vercel

## Langkah 1: Inisialisasi GitHub

```bash
git init
git branch -M main
git add .
git commit -m "Initial commit"
```

Buat repo baru di GitHub, kemudian sambungkan:

```bash
git remote add origin https://github.com/USERNAME/REPO_NAME.git
git push -u origin main
```

## Langkah 2: Sediakan Vercel

1. Buka https://vercel.com
2. Import repo GitHub ini
3. Tetapkan root directory kepada folder projek ini
4. Pastikan deployment menggunakan fail [vercel.json](vercel.json)
5. Jika anda mahu menggunakan nilai Supabase sendiri, set environment variables:
   - SUPABASE_URL
   - SUPABASE_ANON_KEY

## Langkah 3: Sediakan secrets GitHub untuk deploy automatik

Dalam GitHub repo, pergi ke Settings > Secrets and variables > Actions, kemudian tambah:

- VERCEL_TOKEN
- VERCEL_ORG_ID
- VERCEL_PROJECT_ID

## Langkah 4: Deploy automatik

Setiap kali anda push ke branch main/master, workflow akan deploy ke Vercel secara automatik.

## Nota penting

- Projek ini menggunakan PHP runtime untuk Vercel.
- Jika anda mahu deploy menggunakan Vercel GitHub Integration secara terus, anda juga boleh sambungkan repo terus dari dashboard Vercel tanpa workflow ini.

<?php
/**
 * user_profile.php
 * Bahagian: User Profile
 *
 * V108: CSS dan JavaScript runtime dibahagikan ke semua section.
 * Jadi home_page.php tidak lagi memegang semua coding sistem.
 *
 * Runtime chunk: 21/22
 * Fungsi berkaitan untuk presentation: userProfile
 */


function upsi_section_user_profile_styles(): void
{
?>
<style>
/* =========================================================
   V108 CSS chunk 21/22
   Bahagian: User Profile
   ========================================================= */
body[data-theme="dark"] .v83-public-brand strong,
body[data-theme="dark"] .v83-public-nav button,
body[data-theme="dark"] .v83-public-card h2,
body[data-theme="dark"] .v83-declaration-card h2,
body[data-theme="dark"] .v83-info-grid h3,
body[data-theme="dark"] .v83-project-grid h3,
body[data-theme="dark"] .v83-team-grid strong,
body[data-theme="dark"] .v83-course-line,
body[data-theme="dark"] .v83-project-grid strong {
  color: #7ff0b4 !important;
}

body[data-theme="dark"] .v83-public-brand span,
body[data-theme="dark"] .v83-declaration-card p,
body[data-theme="dark"] .v83-declaration-card li,
body[data-theme="dark"] .v83-public-card p,
body[data-theme="dark"] .v83-public-card li,
body[data-theme="dark"] .v83-info-grid p,
body[data-theme="dark"] .v83-project-grid p,
body[data-theme="dark"] .v83-project-grid li,
body[data-theme="dark"] .v83-team-grid p,
body[data-theme="dark"] .v83-values span,
body[data-theme="dark"] .v83-steps p,
body[data-theme="dark"] .v83-steps strong {
  color: #e9fff0 !important;
}

body[data-theme="dark"] .v83-public-nav button:hover,
body[data-theme="dark"] .v83-public-nav button.active {
  color: #ffffff !important;
  background: rgba(94, 227, 159, .16) !important;
}

body[data-theme="dark"] .v83-public-login-btn {
  background: linear-gradient(135deg, #1fbf72, #0b8f52) !important;
  color: #ffffff !important;
  border-color: rgba(127, 240, 180, .32) !important;
}

body[data-theme="dark"] .v83-language-toggle {
  background: rgba(8, 20, 13, .94) !important;
  border-color: rgba(127, 240, 180, .35) !important;
  box-shadow: 0 10px 22px rgba(0,0,0,.32) !important;
}

body[data-theme="dark"] .v83-language-toggle button {
  color: #7ff0b4 !important;
}

body[data-theme="dark"] .v83-language-toggle button.active {
  background: #1fbf72 !important;
  color: #06100b !important;
}

body[data-theme="dark"] .v83-public-hero {
  background:
    linear-gradient(90deg, rgba(0, 0, 0, .88) 0%, rgba(2, 18, 10, .78) 45%, rgba(2, 18, 10, .55) 100%),
    linear-gradient(180deg, rgba(0,0,0,.25), rgba(0,0,0,.55)),
    var(--upsi-login-background-image, url("assets/background-login-default.png")) center center / cover no-repeat !important;
}

body[data-theme="dark"] .v83-public-hero .v83-hero-copy {
  background: rgba(4, 12, 8, .42) !important;
  border: 1px solid rgba(127, 240, 180, .20) !important;
  border-radius: 24px !important;
  padding: 28px !important;
  backdrop-filter: blur(4px) !important;
}

body[data-theme="dark"] .v83-public-hero h1,
body[data-theme="dark"] .v83-public-hero h2,
body[data-theme="dark"] .v83-public-hero p,
body[data-theme="dark"] .v83-breadcrumb {
  color: #ffffff !important;
  text-shadow: 0 4px 18px rgba(0,0,0,.72) !important;
}

body[data-theme="dark"] .v83-public-hero h1 span,
body[data-theme="dark"] .v83-public-hero h2 span {
  color: #7ff0b4 !important;
}

body[data-theme="dark"] .v83-primary-cta {
  background: linear-gradient(135deg, #1fbf72, #0b8f52) !important;
  color: #ffffff !important;
  box-shadow: 0 12px 28px rgba(0,0,0,.32) !important;
}

body[data-theme="dark"] .v83-outline-cta {
  background: rgba(255,255,255,.10) !important;
  border-color: rgba(255,255,255,.65) !important;
  color: #ffffff !important;
}

body[data-theme="dark"] .v83-declaration-card,
body[data-theme="dark"] .v83-public-card,
body[data-theme="dark"] .v83-info-grid article,
body[data-theme="dark"] .v83-project-grid article,
body[data-theme="dark"] .v83-team-grid article,
body[data-theme="dark"] .v83-values article,
body[data-theme="dark"] .v83-steps article {
  background: linear-gradient(145deg, rgba(11, 23, 16, .98), rgba(16, 35, 24, .98)) !important;
  color: #f4fff7 !important;
  border: 1px solid rgba(127, 240, 180, .22) !important;
  box-shadow: 0 18px 42px rgba(0,0,0,.34) !important;
}

body[data-theme="dark"] .v83-team-grid article.lecturer {
  background: linear-gradient(145deg, rgba(13, 36, 24, .98), rgba(20, 52, 35, .98)) !important;
}

body[data-theme="dark"] .v83-declaration-title {
  border-right-color: rgba(127, 240, 180, .24) !important;
}

body[data-theme="dark"] .v83-declaration-icon,
body[data-theme="dark"] .v83-info-grid span,
body[data-theme="dark"] .v83-project-grid span,
body[data-theme="dark"] .v83-team-grid span {
  background: rgba(127, 240, 180, .16) !important;
  color: #7ff0b4 !important;
  border-color: rgba(127, 240, 180, .34) !important;
}

body[data-theme="dark"] .v83-two-list li,
body[data-theme="dark"] .v83-project-grid li,
body[data-theme="dark"] .v83-declaration-card li {
  background: rgba(127, 240, 180, .08) !important;
  border-color: rgba(127, 240, 180, .18) !important;
}

body[data-theme="dark"] .v83-public-footer {
  background: linear-gradient(135deg, #041007, #092016) !important;
  border-top: 1px solid rgba(127, 240, 180, .22) !important;
}

body[data-theme="dark"] .v83-public-footer,
body[data-theme="dark"] .v83-public-footer p,
body[data-theme="dark"] .v83-public-footer em,
body[data-theme="dark"] .v83-footer-upsi,
body[data-theme="dark"] .v83-footer-cta span {
  color: #ffffff !important;
}

body[data-theme="dark"] .v83-footer-cta button {
  background: #7ff0b4 !important;
  color: #06100b !important;
}

@media (max-width: 1100px) {
  body[data-theme="dark"] .v83-declaration-title {
    border-right: 0 !important;
  }
}


/* =========================================================
   V99 admin operation UI refinements
   ========================================================= */
.table-sort-btn {
  border: 0;
  background: transparent;
  color: #075d31;
  font-weight: 900;
  cursor: pointer;
  padding: 0;
  text-align: left;
}


</style>
<?php
}

function upsi_section_user_profile_scripts(): void
{
?>
<script>
/* =========================================================
   V108 JavaScript chunk 21/22
   Bahagian: User Profile
   ========================================================= */
/* =========================================================
   V92 Pre-Render BM Translation Fix
   - Built from clean V83.
   - NO reload.
   - NO MutationObserver text loop.
   - Translates HTML before it is inserted into the page, so no blinking.
   ========================================================= */
(function upsiV92PreRenderBmTranslationFix() {
  const LANG_KEY = 'upsi_golf_language';
  const getLang = () => localStorage.getItem(LANG_KEY) === 'ms' ? 'ms' : 'en';
  const isBm = () => getLang() === 'ms';

  const BM = {
    // Login and shell
    'Booking System': 'Sistem Tempahan',
    'Welcome Back': 'Selamat Datang Kembali',
    'Email Address': 'Alamat Emel',
    'Admin Email': 'Emel Admin',
    'Email': 'Emel',
    'Password': 'Kata Laluan',
    'Password Help': 'Lupa Kata Laluan',
    'Forgot Password': 'Lupa Kata Laluan',
    'Log In as User': 'Log Masuk sebagai Pengguna',
    'Log In as Admin': 'Log Masuk sebagai Admin',
    'New user? Create an account': 'Pengguna baru? Daftar akaun',
    'Create User Account': 'Daftar Akaun Pengguna',
    'Register User Account': 'Daftar Akaun Pengguna',
    'Back to User Login': 'Kembali ke Log Masuk Pengguna',
    'Admin registration is available only after the main admin logs in.': 'Pendaftaran admin hanya tersedia selepas pentadbir utama log masuk.',

    // Navigation / topbar
    'Administrator Panel': 'Panel Pentadbir',
    'User Panel': 'Panel Pengguna',
    'Main Administrator': 'Pentadbir Utama',
    'Administrator': 'Pentadbir',
    'User / Golfer': 'Pengguna / Pemain Golf',
    'Dashboard': 'Papan Pemuka',
    'Home': 'Utama',
    'Manage Users': 'Urus Pengguna',
    'Driving Range': 'Driving Range',
    'Trainers': 'Jurulatih',
    'Trainer': 'Jurulatih',
    'Tee Time Setup': 'Tetapan Masa Tee Off',
    'Tee Time Records': 'Rekod Masa Tee Off',
    'Tee Times': 'Masa Tee Off',
    'Tee Time': 'Masa Tee Off',
    'Tee Masas': 'Masa Tee Off',
    'Tee Masa': 'Masa Tee Off',
    'Bookings': 'Tempahan',
    'My Bookings': 'Tempahan Saya',
    'My Tempahan': 'Tempahan Saya',
    'Payments': 'Bayaran',
    'Payment': 'Bayaran',
    'Reviews': 'Ulasan',
    'Reports': 'Laporan',
    'Profile': 'Profil',
    'Feedback': 'Maklum Balas',
    'Log Out': 'Log Keluar',
    'Logout': 'Log Keluar',

    // Admin dashboard / public notification
    'Event & Public Notification': 'Acara & Notifikasi Awam',
    'Public events shown to users': 'Acara awam yang dipaparkan kepada pengguna',
    'Events are grouped by month. Use the arrows if there are many announcements.': 'Acara disusun mengikut bulan. Gunakan anak panah jika terdapat banyak pengumuman.',
    'Add Event / Public Notification': 'Tambah Acara / Notifikasi Awam',
    'Public Notification': 'Notifikasi Awam',

    // Section grouping
    'Overview': 'Gambaran Keseluruhan',
    'Latest Bookings': 'Tempahan Terkini',
    'Recent Booking Management': 'Pengurusan Tempahan Terkini',
    'Monitor latest bookings and update confirmation or payment status.': 'Pantau tempahan terkini dan kemas kini pengesahan atau status bayaran.',
    'Customer Account Management': 'Pengurusan Akaun Pelanggan',
    'Search registered users and activate or deactivate accounts with confirmation popup.': 'Cari pengguna berdaftar dan aktifkan atau nyahaktifkan akaun melalui popup pengesahan.',
    'Driving Range Setup': 'Tetapan Driving Range',
    'Driving Range Details & Pricing': 'Maklumat Driving Range & Harga',
    'Manage range information, membership prices and bucket limits shown to users.': 'Urus maklumat range, harga keahlian dan had bakul yang dipaparkan kepada pengguna.',
    'Driving Range Records': 'Rekod Driving Range',
    'Available Range List': 'Senarai Range Tersedia',
    'Edit or delete driving range records from this section.': 'Edit atau padam rekod driving range dari bahagian ini.',
    'Trainer Setup': 'Tetapan Jurulatih',
    'Trainer Details': 'Maklumat Jurulatih',
    'Trainer Records': 'Rekod Jurulatih',
    'Trainer List': 'Senarai Jurulatih',
    'Date & Time Availability': 'Ketersediaan Tarikh & Masa',
    'Add single or bulk date/time slots for Driving Range, Trainers or both.': 'Tambah slot tarikh/masa secara satu-satu atau pukal untuk Driving Range, Jurulatih atau kedua-duanya.',
    'Available Slot Table': 'Jadual Slot Tersedia',
    'Booked slots are shown as not available and cannot be selected by new users.': 'Slot yang ditempah dipaparkan sebagai tidak tersedia dan tidak boleh dipilih oleh pengguna baru.',
    'Booking Management': 'Pengurusan Tempahan',
    'Search, confirm, cancel, reschedule and view booking records.': 'Cari, sahkan, batalkan, jadual semula dan lihat rekod tempahan.',
    'Payment Verification': 'Pengesahan Bayaran',
    'Verify or reject QR payment receipt notes. Rejected payment automatically cancels the booking.': 'Sahkan atau tolak nota resit bayaran QR. Bayaran yang ditolak akan membatalkan tempahan secara automatik.',
    'Customer Feedback': 'Maklum Balas Pelanggan',
    'View ratings and feedback submitted by users.': 'Lihat rating dan maklum balas yang dihantar oleh pengguna.',
    'Report Overview': 'Gambaran Laporan',
    'Booking & Revenue Report': 'Laporan Tempahan & Hasil',
    'Operational Summary': 'Ringkasan Operasi',
    'System Record Summary': 'Ringkasan Rekod Sistem',
    'Administrator Profile & System Settings': 'Profil Pentadbir & Tetapan Sistem',
    'Manage admin profile, password, additional admin accounts and QR payment settings.': 'Urus profil admin, kata laluan, akaun admin tambahan dan tetapan bayaran QR.',

    // Tee/admin time page
    'Schedule Settings': 'Tetapan Jadual',
    'Driving Range date and tee time': 'Tarikh dan Masa Tee Off Driving Range',
    'Current Coverage': 'Liputan Semasa',
    'How It Works': 'Cara Sistem Berfungsi',
    'Date + Time + Driving Range': 'Tarikh + Masa + Driving Range',
    'available slots': 'slot tersedia',
    'driving range slot records match the current search.': 'rekod slot driving range sepadan dengan carian semasa.',
    'Add Time Slot': 'Tambah Slot Masa',
    'Available Slot': 'Slot Tersedia',
    'Available Slots': 'Slot Tersedia',
    'Trainer availability': 'Ketersediaan jurulatih',
    'Trainer dates are separate.': 'Tarikh jurulatih adalah berasingan.',
    'Tee time': 'Masa Tee Off',
    'tee time': 'masa tee off',

    // User management
    'Customer Information': 'Maklumat Pelanggan',
    'Registered user accounts': 'Akaun pengguna berdaftar',
    'View user profile details, contact users through WhatsApp, and activate or deactivate accounts.': 'Lihat maklumat profil pengguna, hubungi pengguna melalui WhatsApp dan aktifkan atau nyahaktifkan akaun.',
    'Name': 'Nama',
    'Phone': 'Telefon',
    'Registered': 'Didaftar',
    'Action': 'Tindakan',
    'Active': 'Aktif',
    'Inactive': 'Tidak Aktif',
    'View Details': 'Lihat Butiran',
    'Contact User': 'Hubungi Pengguna',
    'No WhatsApp': 'Tiada WhatsApp',
    'Deactivate': 'Nyahaktif',
    'Activate': 'Aktifkan',
    'Clear': 'Kosongkan',

    // Buttons / actions
    'View Booking': 'Lihat Tempahan',
    'View Receipt': 'Lihat Resit',
    'Upload Receipt': 'Muat Naik Resit',
    'View uploaded receipt': 'Lihat resit yang dimuat naik',
    'Lihat Receipt': 'Lihat Resit',
    'Lihat Booking': 'Lihat Tempahan',
    'Lihat uploaded receipt': 'Lihat resit yang dimuat naik',
    'Reschedule': 'Jadual Semula',
    'View': 'Lihat',
    'Edit': 'Edit',
    'Delete': 'Padam',
    'Cancel': 'Batal',
    'Close': 'Tutup',
    'Submit': 'Hantar',
    'Save': 'Simpan',
    'Update': 'Kemas Kini',
    'Add': 'Tambah',
    'Confirm': 'Sahkan',
    'Search': 'Cari',
    'Back': 'Kembali',
    'Create': 'Cipta',

    // Booking/payment
    'Membership category': 'Kategori keahlian',
    'Ball bucket': 'Bakul bola',
    'Number of buckets': 'Bilangan bakul bola',
    'Payment method': 'Kaedah bayaran',
    'QR Payment': 'Bayaran QR',
    'Cash Payment': 'Bayaran Tunai',
    'Online Banking': 'Perbankan Dalam Talian',
    'Non-member': 'Bukan ahli',
    'Member': 'Ahli',
    'Receipt note': 'Nota resit',
    'Uploaded receipt': 'Resit yang dimuat naik',
    'uploaded receipt': 'resit yang dimuat naik',
    'Booking Date': 'Tarikh Tempahan',
    'Booking Time': 'Masa Tempahan',
    'Amount': 'Jumlah',
    'Status': 'Status',
    'Date': 'Tarikh',
    'Time': 'Masa',
    'Location': 'Lokasi',
    'Total': 'Jumlah',
    'Pending': 'Menunggu',
    'Approved': 'Diluluskan',
    'Completed': 'Selesai',
    'Cancelled': 'Dibatalkan',
    'Rejected': 'Ditolak',
    'Booked': 'Ditempah',
    'Available': 'Tersedia',
    'Unavailable': 'Tidak Tersedia',

    // Trainer
    'Trainer Booking': 'Tempahan Jurulatih',
    'Trainer Coaching Session': 'Sesi Bimbingan Jurulatih',
    'Pending Trainer Arrangement': 'Menunggu Susunan Jurulatih',
    'Discuss with Trainer': 'Bincang dengan Jurulatih',
    'Discuss via WhatsApp': 'Bincang melalui WhatsApp',
    'Not Required': 'Tidak Diperlukan',
    'Beginner': 'Pemula',
    'Intermediate': 'Pertengahan',
    'Advanced': 'Mahir',
    'Date only': 'Tarikh sahaja',
    'Time via WhatsApp': 'Masa melalui WhatsApp',

    // Feedback / profile
    'Review customer feedback': 'Semak maklum balas pelanggan',
    'Feedback Type': 'Jenis Maklum Balas',
    'All Feedback': 'Semua Maklum Balas',
    'General Feedback': 'Maklum Balas Umum',
    'Suggestion': 'Cadangan',
    'Issue / Problem': 'Isu / Masalah',
    'Complaint': 'Aduan',
    'Compliment': 'Pujian',
    'Submit Feedback': 'Hantar Maklum Balas',
    'Contact Information': 'Maklumat Perhubungan',
    'User Profile': 'Profil Pengguna',
    'Full Name': 'Nama Penuh',
    'Phone Number': 'Nombor Telefon',
    'Email Address': 'Alamat Emel',
    'Address': 'Alamat',
    'Change Password': 'Tukar Kata Laluan',
    'Save Profile': 'Simpan Profil'
  };

  function escRegex(str) {
    return String(str).replace(/[.*+?^${}()|[\]\\]/g, '\\$&');
  }

  function bmText(value) {
    let out = String(value ?? '');
    Object.entries(BM).sort((a,b) => b[0].length - a[0].length).forEach(([en, bm]) => {
      out = out.replace(new RegExp(escRegex(en), 'g'), bm);
    });
    out = out.replace(/\b(\d+)\s+buckets?\b/gi, '$1 bakul');
    out = out.replace(/\b(\d+)\s+balls?\b/gi, '$1 bola');
    out = out.replace(/\bbuckets?\b/gi, 'bakul');
    out = out.replace(/\bballs?\b/gi, 'bola');
    out = out.replace(/\bDateSat\b/g, 'Tarikh: Sabtu');
    out = out.replace(/\bDateSun\b/g, 'Tarikh: Ahad');
    out = out.replace(/\bDateMon\b/g, 'Tarikh: Isnin');
    out = out.replace(/\bDateTue\b/g, 'Tarikh: Selasa');
    out = out.replace(/\bDateWed\b/g, 'Tarikh: Rabu');
    out = out.replace(/\bDateThu\b/g, 'Tarikh: Khamis');
    out = out.replace(/\bDateFri\b/g, 'Tarikh: Jumaat');
    return out;
  }

  function syncLangButtons() {
    const lang = getLang();
    document.documentElement.lang = lang === 'ms' ? 'ms' : 'en';
    if (document.body) document.body.dataset.lang = lang;
    document.querySelectorAll('[data-v83-lang]').forEach((btn) => {
      btn.classList.toggle('active', btn.dataset.v83Lang === lang);
    });
  }

  // Translate HTML before it enters DOM. This avoids visible blinking.
  const desc = Object.getOwnPropertyDescriptor(Element.prototype, 'innerHTML');
  if (desc && desc.set && !window.__upsiV92InnerHtmlPatched) {
    window.__upsiV92InnerHtmlPatched = true;
    Object.defineProperty(Element.prototype, 'innerHTML', {
      get: desc.get,
      set(value) {
        const html = String(value ?? '');
        const shouldSkipPublic = html.includes('v83-public-site') || this.classList?.contains('v83-public-site');
        const shouldTranslate = isBm() && !shouldSkipPublic;
        desc.set.call(this, shouldTranslate ? bmText(html) : value);
      },
      configurable: true,
      enumerable: desc.enumerable
    });
  }

  // textContent is used for top page title and role label.
  const baseSetTitle = typeof setTitle === 'function' ? setTitle : null;
  if (baseSetTitle && !window.__upsiV92SetTitlePatched) {
    window.__upsiV92SetTitlePatched = true;
    setTitle = function setTitleV92(title, roleLabel) {
      baseSetTitle(isBm() ? bmText(title) : title, isBm() ? bmText(roleLabel || '') : roleLabel);
    };
  }

  function patchForgotButtons() {
    document.querySelectorAll('[data-forgot-user], [data-forgot-admin]').forEach((btn) => {
      btn.textContent = isBm() ? 'Lupa Kata Laluan' : 'Forgot Password';
      btn.classList.add('v92-forgot-password-btn');
      if (btn.dataset.v92ForgotBound) return;
      btn.dataset.v92ForgotBound = '1';
      btn.addEventListener('click', async (event) => {
        event.preventDefault();
        event.stopImmediatePropagation();
        const form = btn.closest('form') || document;
        const email = form.querySelector('input[type="email"]')?.value?.trim() || document.querySelector('input[type="email"]')?.value?.trim() || '';
        if (!email) {
          toast(isBm() ? 'Masukkan emel dahulu untuk reset kata laluan.' : 'Enter your email first to reset your password.');
          return;
        }
        if (!window.supabaseClient) {
          toast(isBm() ? 'Reset kata laluan memerlukan sambungan Supabase.' : 'Password reset requires Supabase connection.');
          return;
        }
        try {
          const redirectTo = `${window.location.origin}${window.location.pathname}`;
          const { error } = await supabaseClient.auth.resetPasswordForEmail(email, { redirectTo });
          if (error) throw error;
          toast(isBm() ? 'Jika akaun wujud, link reset kata laluan telah dihantar ke emel.' : 'If the account exists, a password reset link has been sent to the email.');
        } catch (error) {
          console.error('V92 forgot password error:', error);
          toast(error.message || (isBm() ? 'Reset kata laluan gagal.' : 'Password reset failed.'));
        }
      }, true);
    });
  }

  function alignTopbar() {
    const topbar = document.querySelector('.topbar');
    const chip = document.getElementById('profileChip');
    const lang = topbar?.querySelector('.v83-language-toggle');
    if (!topbar || !chip || !lang) return;
    let actions = topbar.querySelector('.v92-topbar-actions');
    if (!actions) {
      actions = document.createElement('div');
      actions.className = 'v92-topbar-actions';
      topbar.appendChild(actions);
    }
    if (!actions.contains(chip)) actions.appendChild(chip);
    if (!actions.contains(lang)) actions.appendChild(lang);
    chip.classList.add('v92-profile-chip');
  }

  function afterRender() {
    syncLangButtons();
    alignTopbar();
    patchForgotButtons();
  }

  const baseRenderShell = typeof renderShell === 'function' ? renderShell : null;
  if (baseRenderShell && !window.__upsiV92Shell) {
    window.__upsiV92Shell = true;
    renderShell = function renderShellV92() {
      const result = baseRenderShell();
      afterRender();
      return result;
    };
  }

  const baseRenderPage = typeof renderPage === 'function' ? renderPage : null;
  if (baseRenderPage && !window.__upsiV92Page) {
    window.__upsiV92Page = true;
    renderPage = function renderPageV92() {
      const result = baseRenderPage();
      afterRender();
      return result;
    };
  }

  const baseRenderAuth = typeof renderAuth === 'function' ? renderAuth : null;
  if (baseRenderAuth && !window.__upsiV92Auth) {
    window.__upsiV92Auth = true;
    renderAuth = function renderAuthV92() {
      const result = baseRenderAuth();
      afterRender();
      return result;
    };
  }

  // Let the original V83 language button set its internal language variable,
  // then rebuild shell/page once so nav, title and page content match the selected language.
  document.addEventListener('click', (event) => {
    if (!event.target?.closest?.('[data-v83-lang]')) return;
    setTimeout(() => {
      syncLangButtons();
      if (document.querySelector('.app-shell')) {
        if (typeof renderNav === 'function') renderNav();
        if (typeof renderProfileChip === 'function') renderProfileChip();
        if (typeof renderPage === 'function') renderPage();
      } else if (document.querySelector('.auth-app-layout') && !document.querySelector('.app-shell')) {
        if (typeof renderAuth === 'function') renderAuth();
      }
      afterRender();
    }, 0);
  }, false);

  document.addEventListener('DOMContentLoaded', afterRender);
  setTimeout(afterRender, 200);
})();


/* =========================================================
   V93 Topbar Right Alignment Safety Patch
   - Forces profile chip and EN/BM language toggle to stay in one row.
   ========================================================= */
(function upsiV93TopbarRightAlignPatch() {
  function alignTopbarRight() {
    const topbar = document.querySelector('.topbar');
    if (!topbar) return;

    let right = topbar.querySelector('.topbar-right');
    if (!right) {
      right = document.createElement('div');
      right.className = 'topbar-right';
      topbar.appendChild(right);
    }

    const chip = document.getElementById('profileChip');
    if (chip && !right.contains(chip)) right.appendChild(chip);

    const lang = topbar.querySelector('.v83-language-toggle') || document.querySelector('.v83-language-toggle');
    if (lang && !right.contains(lang)) right.appendChild(lang);
  }

  const baseRenderShell93 = typeof renderShell === 'function' ? renderShell : null;
  if (baseRenderShell93 && !window.__upsiV93ShellAlign) {
    window.__upsiV93ShellAlign = true;
    renderShell = function renderShellV93TopbarAlign() {
      const result = baseRenderShell93();
      setTimeout(alignTopbarRight, 0);
      setTimeout(alignTopbarRight, 80);
      return result;
    };
  }

  const baseRenderPage93 = typeof renderPage === 'function' ? renderPage : null;
  if (baseRenderPage93 && !window.__upsiV93PageAlign) {
    window.__upsiV93PageAlign = true;
    renderPage = function renderPageV93TopbarAlign() {
      const result = baseRenderPage93();
      setTimeout(alignTopbarRight, 0);
      setTimeout(alignTopbarRight, 80);
      return result;
    };
  }

  document.addEventListener('DOMContentLoaded', () => {
    setTimeout(alignTopbarRight, 100);
    setTimeout(alignTopbarRight, 400);
  });

  document.addEventListener('click', (event) => {
    if (event.target?.closest?.('[data-v83-lang], [data-page]')) {
      setTimeout(alignTopbarRight, 80);
      setTimeout(alignTopbarRight, 250);
    }
  }, true);
})();


/* =========================================================
   V94 Single Language Toggle Fix
   - Removes duplicate EN/BM toggles in the logged-in topbar.
   - Keeps only one toggle beside the profile chip.
   ========================================================= */
(function upsiV94SingleLanguageToggleFix() {
  function keepSingleTopbarLanguageToggle() {
    const topbar = document.querySelector('.topbar');
    if (!topbar) return;

    let right = topbar.querySelector('.topbar-right');
    if (!right) {
      right = document.createElement('div');
      right.className = 'topbar-right';
      topbar.appendChild(right);
    }

    const chip = document.getElementById('profileChip');
    if (chip && !right.contains(chip)) right.appendChild(chip);

    const toggles = Array.from(topbar.querySelectorAll('.v83-language-toggle'));
    let keeper = toggles[0] || null;

    toggles.slice(1).forEach((toggle) => toggle.remove());

    if (keeper && !right.contains(keeper)) {
      right.appendChild(keeper);
    }

    // Remove accidental language toggles outside topbar when logged in.
    if (document.querySelector('.app-shell')) {
      Array.from(document.querySelectorAll('.v83-language-toggle')).forEach((toggle) => {
        if (!topbar.contains(toggle)) toggle.remove();
      });
    }

    document.querySelectorAll('[data-v83-lang]').forEach((btn) => {
      btn.dataset.v83Bound = btn.dataset.v83Bound || '';
    });
  }

  const baseRenderShell94 = typeof renderShell === 'function' ? renderShell : null;
  if (baseRenderShell94 && !window.__upsiV94ShellSingleLang) {
    window.__upsiV94ShellSingleLang = true;
    renderShell = function renderShellV94SingleLang() {
      const result = baseRenderShell94();
      setTimeout(keepSingleTopbarLanguageToggle, 0);
      setTimeout(keepSingleTopbarLanguageToggle, 100);
      return result;
    };
  }

  const baseRenderPage94 = typeof renderPage === 'function' ? renderPage : null;
  if (baseRenderPage94 && !window.__upsiV94PageSingleLang) {
    window.__upsiV94PageSingleLang = true;
    renderPage = function renderPageV94SingleLang() {
      const result = baseRenderPage94();
      setTimeout(keepSingleTopbarLanguageToggle, 0);
      setTimeout(keepSingleTopbarLanguageToggle, 100);
      return result;
    };
  }

  document.addEventListener('DOMContentLoaded', () => {
    setTimeout(keepSingleTopbarLanguageToggle, 100);
    setTimeout(keepSingleTopbarLanguageToggle, 500);
  });

  document.addEventListener('click', (event) => {
    if (event.target?.closest?.('[data-v83-lang], [data-page]')) {
      setTimeout(keepSingleTopbarLanguageToggle, 80);
      setTimeout(keepSingleTopbarLanguageToggle, 250);
    }
  }, true);
})();


/* =========================================================
   V99 Admin Operational Fixes
   - QR remove really stays empty for user payment/driving range.
   - Tee Time delete removes from Supabase and keeps the current page.
   - Tee Time Date/Time Asc/Desc sorting.
   - Main admin can deactivate/reactivate additional admins with reason.
   ========================================================= */


</script>
<?php
}

function upsi_section_user_profile_module(): void
{
?>
<script>
window.UPSI_SECTION_MODULES = window.UPSI_SECTION_MODULES || {};
window.UPSI_SECTION_MODULES["user_profile"] = {
  title: "User Profile",
  runtimeChunk: '21/22',
  functions: ["userProfile"]
};
</script>
<?php
}

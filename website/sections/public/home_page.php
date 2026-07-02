<?php
/**
 * home_page.php
 * Bahagian: Home Page sebelum login
 *
 * V108: CSS dan JavaScript runtime dibahagikan ke semua section.
 * Jadi home_page.php tidak lagi memegang semua coding sistem.
 *
 * Runtime chunk: 1/22
 * Fungsi berkaitan untuk presentation: v83RenderHome, renderAuth, boot, renderPage
 */

/**
 * PHP config asal sahaja diletakkan di sini.
 * CSS/JavaScript global sudah dibahagikan ke semua section.
 */
/**
 * index.php
 * V108 Balanced Section Version
 *
 * Semua struktur frontend utama telah digabungkan dalam satu fail:
 * - PHP config
 * - page routing
 * - template login
 * - template layout selepas login
 * - modal root
 * - CSS inline
 * - JavaScript inline
 *
 * Nota:
 * Browser masih memerlukan CSS dan JavaScript untuk design/function.
 * Dalam versi ini, CSS dan JavaScript tidak lagi berada dalam fail berasingan.
 * Kod runtime dibahagikan ke semua fail section untuk presentation.
 */

function upsi_env(string $key, string $fallback = ''): string
{
    $value = getenv($key);
    return $value !== false && $value !== '' ? $value : $fallback;
}

const UPSI_DEFAULT_SUPABASE_URL = 'https://gzbctvkbwwvffnvvwwzg.supabase.co';
const UPSI_DEFAULT_SUPABASE_ANON_KEY = 'sb_publishable_zFa_bjtrPuGMKFfxY5Y7wg_gXnbeLWk';

define('SUPABASE_URL', rtrim(upsi_env('SUPABASE_URL', UPSI_DEFAULT_SUPABASE_URL), '/'));
define('SUPABASE_ANON_KEY', upsi_env('SUPABASE_ANON_KEY', UPSI_DEFAULT_SUPABASE_ANON_KEY));
define('SUPABASE_SERVICE_ROLE_KEY', upsi_env('SUPABASE_SERVICE_ROLE_KEY', ''));

define('APP_NAME', 'UPSI Golf Booking System');
define('APP_TIMEZONE', 'Asia/Kuala_Lumpur');
define('BACKEND_API_BASE', './api');

date_default_timezone_set(APP_TIMEZONE);

function upsi_public_config(): array
{
    return [
        'APP_NAME' => APP_NAME,
        'SUPABASE_URL' => SUPABASE_URL,
        'SUPABASE_ANON_KEY' => SUPABASE_ANON_KEY,
        'BACKEND_API_BASE' => BACKEND_API_BASE,
        'PHP_BACKEND_ENABLED' => true,
    ];
}

$UPSI_PAGE_TITLE = $UPSI_PAGE_TITLE ?? 'UPSI Golf Booking System';
$UPSI_START_PAGE = $UPSI_START_PAGE ?? ($_GET['page'] ?? 'dashboard');

function upsi_normalise_start_page($page)
{
    $page = strtolower(trim((string) $page));
    $aliases = [
        'home' => 'dashboard',
        'driving-range' => 'courses',
        'driving_range' => 'courses',
        'trainer' => 'trainers',
        'my-bookings' => 'mybookings',
        'my_bookings' => 'mybookings',
        'admin-driving-range' => 'courses',
        'admin_driving_range' => 'courses',
        'tee-times' => 'times',
        'tee_times' => 'times',
        'manage-users' => 'users',
        'manage_users' => 'users',
    ];
    if (isset($aliases[$page])) return $aliases[$page];

    $allowed = [
        'dashboard', 'courses', 'trainers', 'mybookings', 'payment', 'profile', 'feedback',
        'users', 'times', 'bookings', 'payments', 'reviews', 'reports', 'settings'
    ];
    return in_array($page, $allowed, true) ? $page : 'dashboard';
}

$UPSI_START_PAGE = upsi_normalise_start_page($UPSI_START_PAGE);


function upsi_section_home_page_styles(): void
{
?>
<style>
/* =========================================================
   V108 CSS chunk 1/22
   Bahagian: Home Page sebelum login
   ========================================================= */
:root {
  --dark-green: #0f5132;
  --green: #198754;
  --soft-green: #f4fbf5;
  --light-green: #e8f5e9;
  --gold: #e3b341;
  --charcoal: #1f2933;
  --muted: #6b7280;
  --line: #e5e7eb;
  --danger: #dc2626;
  --warning: #b7791f;
  --white: #ffffff;
  --shadow: 0 22px 70px rgba(15, 81, 50, 0.16);
  --radius: 22px;
}

* {
  box-sizing: border-box;
}

html {
  scroll-behavior: smooth;
}

body {
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
  background: linear-gradient(135deg, #f7fff8 0%, #ffffff 42%, #eff8f1 100%);
  color: var(--charcoal);
  min-height: 100vh;
}

button,
input,
select,
textarea {
  font: inherit;
}

button {
  cursor: pointer;
}

.hidden {
  display: none !important;
}

.toast {
  position: fixed;
  z-index: 50;
  right: 22px;
  top: 22px;
  min-width: 260px;
  max-width: 360px;
  padding: 14px 16px;
  border-radius: 16px;
  background: var(--dark-green);
  color: var(--white);
  box-shadow: var(--shadow);
  transform: translateY(-120%);
  opacity: 0;
  transition: 0.25s ease;
}

.toast.show {
  transform: translateY(0);
  opacity: 1;
}

.auth-layout {
  display: grid;
  grid-template-columns: minmax(0, 1.15fr) minmax(340px, 0.85fr);
  gap: 28px;
  min-height: 760px;
  padding: 28px;
}

.hero-panel {
  position: relative;
  overflow: hidden;
  border-radius: 34px;
  padding: 34px;
  color: var(--white);
  background:
    radial-gradient(circle at 18% 22%, rgba(227, 179, 65, 0.45), transparent 22%),
    linear-gradient(135deg, rgba(15, 81, 50, 0.96), rgba(4, 55, 34, 0.96)),
    url("data:image/svg+xml,%3Csvg width='100' height='100' viewBox='0 0 100 100' xmlns='http://www.w3.org/2000/svg'%3E%3Ccircle cx='20' cy='20' r='2' fill='%23ffffff' fill-opacity='.16'/%3E%3Ccircle cx='70' cy='40' r='2' fill='%23ffffff' fill-opacity='.12'/%3E%3Cpath d='M0 80 C20 60, 40 100, 65 75 S90 70, 100 55' stroke='%23ffffff' stroke-opacity='.12' fill='none'/%3E%3C/svg%3E");
  box-shadow: var(--shadow);
}

.hero-panel::after {
  content: "";
  position: absolute;
  right: -120px;
  bottom: -120px;
  width: 360px;
  height: 360px;
  border-radius: 50%;
  border: 55px solid rgba(255, 255, 255, 0.07);
}

.brand-row,
.side-brand {
  display: flex;
  align-items: center;
  gap: 14px;
}

.brand-logo {
  width: 68px;
  height: 68px;
  display: grid;
  place-items: center;
  border-radius: 20px;
  background: var(--light-green);
  color: var(--dark-green);
  font-size: 34px;
  box-shadow: inset 0 0 0 1px rgba(255,255,255,0.25);
}

.brand-logo.small {
  width: 48px;
  height: 48px;
  font-size: 24px;
  border-radius: 15px;
}

.eyebrow {
  margin: 0 0 6px;
  color: var(--green);
  text-transform: uppercase;
  letter-spacing: 0.14em;
  font-size: 12px;
  font-weight: 800;
}

.hero-panel .eyebrow {
  color: rgba(255,255,255,0.76);
}

h1,
h2,
h3,
p {
  margin-top: 0;
}

.hero-panel h1 {
  margin: 0;
  font-size: clamp(22px, 2.4vw, 34px);
}

.hero-content {
  position: relative;
  z-index: 1;
  margin-top: 105px;
  max-width: 760px;
}

.hero-content h2 {
  font-size: clamp(38px, 5.4vw, 76px);
  line-height: 0.98;
  margin: 20px 0;
  letter-spacing: -0.05em;
}

.hero-content p {
  max-width: 640px;
  color: rgba(255,255,255,0.82);
  font-size: 18px;
  line-height: 1.65;
}

.pill,
.status-pill {
  display: inline-flex;
  align-items: center;
  gap: 8px;
  border-radius: 999px;
  padding: 7px 12px;
  background: rgba(255,255,255,0.16);
  color: inherit;
  font-size: 12px;
  font-weight: 800;
}

.hero-actions {
  display: flex;
  flex-wrap: wrap;
  gap: 12px;
  margin-top: 25px;
}

.hero-stats {
  position: absolute;
  left: 34px;
  right: 34px;
  bottom: 34px;
  display: grid;
  grid-template-columns: repeat(3, 1fr);
  gap: 12px;
  z-index: 1;
}

.hero-stats div {
  padding: 16px;
  border: 1px solid rgba(255,255,255,0.18);
  border-radius: 20px;
  background: rgba(255,255,255,0.11);
  backdrop-filter: blur(10px);
}

.hero-stats strong,
.hero-stats span {
  display: block;
}

.hero-stats strong {
  font-size: 22px;
}

.hero-stats span {
  color: rgba(255,255,255,0.74);
  margin-top: 4px;
}

.auth-card {
  align-self: center;
  width: min(100%, 480px);
  justify-self: center;
  padding: 24px;
  background: rgba(255,255,255,0.86);
  border: 1px solid rgba(15,81,50,0.08);
  border-radius: 28px;
  box-shadow: var(--shadow);
  backdrop-filter: blur(14px);
}

.auth-tabs {
  display: grid;
  grid-template-columns: 1fr 1fr;
  background: var(--soft-green);
  padding: 6px;
  border-radius: 16px;
  margin-bottom: 22px;
}

.auth-tab {
  border: 0;
  border-radius: 13px;
  padding: 12px;
  color: var(--dark-green);
  background: transparent;
  font-weight: 800;
}

.auth-tab.active {
  background: var(--dark-green);
  color: white;
}

.form-stack {
  display: grid;
  gap: 14px;
}

.form-title h2 {
  margin-bottom: 6px;
  font-size: 28px;
}

.form-title p,
.tiny-note,
.muted {
  color: var(--muted);
}

.tiny-note {
  margin: 2px 0 0;
  font-size: 12px;
  text-align: center;
}

label {
  display: grid;
  gap: 7px;
  font-size: 13px;
  font-weight: 800;
  color: var(--charcoal);
}

input,
select,
textarea {
  width: 100%;
  border: 1px solid transparent;
  outline: 0;
  border-radius: 15px;
  padding: 13px 14px;
  background: var(--soft-green);
  color: var(--charcoal);
  transition: 0.2s ease;
}

textarea {
  resize: vertical;
  min-height: 105px;
}

input:focus,
select:focus,
textarea:focus {
  border-color: var(--dark-green);
  box-shadow: 0 0 0 4px rgba(25,135,84,0.12);
}

.btn {
  display: inline-flex;
  align-items: center;
  justify-content: center;
  gap: 8px;
  min-height: 44px;
  padding: 12px 18px;
  border: 0;
  border-radius: 15px;
  font-weight: 900;
  text-decoration: none;
  transition: 0.2s ease;
}

.btn:hover {
  transform: translateY(-1px);
}

.btn-primary {
  background: var(--dark-green);
  color: var(--white);
  box-shadow: 0 12px 26px rgba(15,81,50,0.22);
}

.btn-light {
  background: var(--white);
  color: var(--dark-green);
}

.btn-outline-light {
  background: transparent;
  border: 1px solid rgba(255,255,255,0.5);
  color: white;
}

.btn-soft {
  background: var(--light-green);
  color: var(--dark-green);
}

.btn-warning-soft {
  background: #fff6df;
  color: var(--warning);
}

.btn-danger-soft {
  background: #fef2f2;
  color: var(--danger);
}

.full {
  width: 100%;
}

.landing-section {
  padding: 34px 28px 70px;
  max-width: 1180px;
  margin: 0 auto;
}

.section-heading {
  text-align: center;
  margin-bottom: 22px;
}

.section-heading h2 {
  font-size: clamp(26px, 4vw, 42px);
  margin-bottom: 8px;
}

.feature-grid,
.card-grid,
.stat-grid,
.report-grid {
  display: grid;
  grid-template-columns: repeat(3, minmax(0, 1fr));
  gap: 18px;
}

.feature-card,
.card,
.stat-card,
.table-card,
.empty-state {
  border: 1px solid rgba(15,81,50,0.08);
  border-radius: var(--radius);
  background: var(--white);
  box-shadow: 0 12px 40px rgba(15,81,50,0.07);
}

.feature-card {
  padding: 22px;
}

.feature-card span {
  font-size: 34px;
}

.feature-card h3,
.card h3 {
  margin: 12px 0 8px;
}

.feature-card p,
.card p {
  color: var(--muted);
  line-height: 1.55;
}

.app-shell {
  display: grid;
  grid-template-columns: 280px minmax(0, 1fr);
  min-height: 100vh;
}

.sidebar {
  position: sticky;
  top: 0;
  height: 100vh;
  padding: 24px;
  display: flex;
  flex-direction: column;
  gap: 22px;
  background: #ffffff;
  border-right: 1px solid var(--line);
}

.side-brand h2 {
  margin: 0;
  color: var(--dark-green);
}

.side-brand p {
  margin: 3px 0 0;
  color: var(--muted);
  font-size: 13px;
}

.side-nav {
  display: grid;
  gap: 8px;
  margin-top: 4px;
  flex: 1;
  overflow-y: auto;
  padding-right: 4px;
}

.nav-btn {
  border: 0;
  border-radius: 15px;
  background: transparent;
  color: var(--charcoal);
  padding: 12px 13px;
  display: flex;
  align-items: center;
  gap: 10px;
  text-align: left;
  font-weight: 800;
}

.nav-btn.active,
.nav-btn:hover {
  background: var(--light-green);
  color: var(--dark-green);
}

.main-area {
  min-width: 0;
}

.topbar {
  position: sticky;
  top: 0;
  z-index: 10;
  display: flex;
  justify-content: space-between;
  align-items: center;
  gap: 16px;
  padding: 22px 28px;
  background: rgba(247,255,248,0.84);
  backdrop-filter: blur(14px);
  border-bottom: 1px solid rgba(15,81,50,0.07);
}

.topbar h1 {
  margin: 0;
  font-size: clamp(24px, 3vw, 34px);
}

.profile-chip {
  display: flex;
  align-items: center;
  gap: 10px;
  padding: 10px 13px;
  border-radius: 18px;
  background: var(--white);
  border: 1px solid rgba(15,81,50,0.08);
  box-shadow: 0 8px 22px rgba(15,81,50,0.08);
  min-width: 210px;
}

.avatar {
  width: 38px;
  height: 38px;
  display: grid;
  place-items: center;
  flex: 0 0 auto;
  border-radius: 14px;
  background: var(--dark-green);
  color: white;
  font-weight: 900;
}

.profile-chip strong,
.profile-chip span {
  display: block;
}

.profile-chip span {
  color: var(--muted);
  font-size: 12px;
  margin-top: 2px;
}

.page-content {
  padding: 28px;
}

.toolbar {
  display: flex;
  flex-wrap: wrap;
  justify-content: space-between;
  align-items: center;
  gap: 14px;
  margin-bottom: 18px;
}

.search-row {
  display: grid;
  grid-template-columns: 1.2fr 0.8fr;
  gap: 12px;
  width: min(100%, 660px);
}

.card-grid.two {
  grid-template-columns: repeat(2, minmax(0, 1fr));
}

.card {
  padding: 20px;
}

.card-top {
  display: flex;
  justify-content: space-between;
  align-items: flex-start;
  gap: 12px;
}


</style>
<?php
}

function upsi_section_home_page_scripts(): void
{
?>
<script>
/* =========================================================
   V108 JavaScript chunk 1/22
   Bahagian: Home Page sebelum login
   ========================================================= */
// =========================================================
// Supabase connection
// PHP backend injects config through window.UPSI_PHP_CONFIG in index.php.
// Do not place service_role key in this JavaScript file.
// =========================================================
const PHP_CONFIG = window.UPSI_PHP_CONFIG || {};
const SUPABASE_URL = PHP_CONFIG.SUPABASE_URL || "";
const SUPABASE_ANON_KEY = PHP_CONFIG.SUPABASE_ANON_KEY || "";
const BACKEND_API_BASE = PHP_CONFIG.BACKEND_API_BASE || "./api";

const supabaseClient = window.supabaseClient || (window.supabase?.createClient && SUPABASE_URL && SUPABASE_ANON_KEY
  ? window.supabase.createClient(SUPABASE_URL, SUPABASE_ANON_KEY)
  : null);
window.supabaseClient = supabaseClient;

async function backendApi(endpoint, options = {}) {
  const cleanEndpoint = String(endpoint || '').replace(/^\/+/, '');
  const response = await fetch(`${BACKEND_API_BASE}/${cleanEndpoint}`, {
    credentials: 'same-origin',
    ...options,
    headers: {
      ...(options.headers || {}),
    },
  });
  const contentType = response.headers.get('content-type') || '';
  const data = contentType.includes('application/json') ? await response.json() : await response.text();
  if (!response.ok) {
    throw new Error(typeof data === 'string' ? data : (data.error || data.message || 'Backend request failed'));
  }
  return data;
}

const SUPABASE_MODE = Boolean(supabaseClient);
window.SUPABASE_MODE = SUPABASE_MODE;
let supabaseSyncReady = false;
let suppressSupabaseSync = false;
let supabaseHydrating = false;

const THEME_STORAGE_KEY = 'upsiGolfTheme';

function getSavedTheme() {
  return localStorage.getItem(THEME_STORAGE_KEY) || 'light';
}

function applyTheme(theme = 'light') {
  const safeTheme = theme === 'dark' ? 'dark' : 'light';
  document.body.dataset.theme = safeTheme;
  localStorage.setItem(THEME_STORAGE_KEY, safeTheme);
}

function toggleThemeMode() {
  const nextTheme = document.body.dataset.theme === 'dark' ? 'light' : 'dark';
  applyTheme(nextTheme);
  document.querySelectorAll('[data-theme-label]').forEach((node) => {
    node.textContent = nextTheme === 'dark' ? 'Switch to Light Mode' : 'Switch to Dark Mode';
  });
  document.querySelectorAll('[data-theme-status]').forEach((node) => {
    node.textContent = nextTheme === 'dark' ? 'Dark mode is active' : 'Light mode is active';
  });
  toast(nextTheme === 'dark' ? 'Dark mode enabled.' : 'Light mode enabled.');
}

function bindThemeToggle() {
  const activeTheme = document.body.dataset.theme === 'dark' ? 'dark' : 'light';
  document.querySelectorAll('[data-toggle-theme]').forEach((btn) => {
    btn.querySelector('[data-theme-label]').textContent = activeTheme === 'dark' ? 'Switch to Light Mode' : 'Switch to Dark Mode';
    btn.querySelector('[data-theme-status]').textContent = activeTheme === 'dark' ? 'Dark mode is active' : 'Light mode is active';
    btn.addEventListener('click', toggleThemeMode);
  });
}

const DB_TABLES = {
  profiles: 'profiles',
  drivingRanges: 'driving_ranges',
  bucketOptions: 'bucket_options',
  trainers: 'trainers',
  teeSlots: 'tee_slots',
  bookings: 'bookings',
  payments: 'payments',
  reviews: 'feedback_review',
  settings: 'system_settings',
};

const STORAGE = {
  users: 'upsiGolfUsers',
  courses: 'upsiGolfCourses',
  trainers: 'upsiGolfTrainers',
  times: 'upsiGolfTimes',
  bookings: 'upsiGolfBookings',
  reviews: 'upsiGolfReviews',
  settings: 'upsiGolfSettings',
  session: 'upsiGolfSession',
};

const defaultData = {
  users: [
    {
      id: 'U-ADMIN',
      fullName: 'UPSI Golf Administrator',
      email: 'admin@upsi.edu.my',
      phone: '05-450 6000',
      password: 'admin123',
      role: 'admin',
      status: 'Active',
      profileImage: '',
      address: '',
      createdAt: new Date().toISOString(),
    },
    {
      id: 'U-DEMO',
      fullName: 'Demo Golf Member',
      email: 'user@upsi.edu.my',
      phone: '012-3456789',
      password: 'user123',
      role: 'user',
      status: 'Active',
      profileImage: '',
      address: '',
      createdAt: new Date().toISOString(),
    },
  ],
  courses: [
    {
      id: 'C-001',
      name: 'UPSI Driving Golf Range',
      location: 'UPSI Driving Range',
      type: 'Driving Range',
      holes: 'Practice Bay',
      price: 10,
      description: 'Driving range ball bucket booking for UPSI Golf. Users can choose member or non-member category, select 50 or 100 balls, and choose 1 to 10 buckets.',
      status: 'Available',
      bucketOptions: [
        { id: 'bucket50', label: '50 bola', balls: 50, price: 10, nonMemberPrice: 10, memberPrice: 7.50, description: 'Half bucket containing 50 driving-range balls.' },
        { id: 'bucket100', label: '100 bola', balls: 100, price: 15, nonMemberPrice: 15, memberPrice: 13, description: 'One bucket containing 100 driving-range balls.' },
      ],
      maxBucketCount: 10,
    },
  ],
  trainers: [
    {
      id: 'T-001',
      name: 'Nordin bin Yahya',
      phone: '012-900 1122',
      email: 'nordin.yahya@upsi.edu.my',
      address: 'UPSI Driving Range, Kampus Sultan Azlan Shah',
      description: 'Specialist in beginner swing basics, stance correction, and driving accuracy.',
      status: 'Available',
    },
    {
      id: 'T-002',
      name: 'Mohd Muhayuddin bin Md Zahid',
      phone: '013-900 1133',
      email: 'muhayuddin@upsi.edu.my',
      address: 'UPSI Driving Range, Kampus Sultan Azlan Shah',
      description: 'Specialist in short game control, putting technique, and guided practice routine.',
      status: 'Available',
    },
  ],
  times: ['8:00 AM', '10:00 AM', '12:00 PM', '2:00 PM', '4:00 PM', '6:00 PM', '8:00 PM'],
  bookings: [
    {
      id: 'B-1001',
      userId: 'U-DEMO',
      customerName: 'Demo Golf Member',
      customerEmail: 'user@upsi.edu.my',
      courseId: 'C-001',
      courseName: 'UPSI Driving Golf Range',
      bookingType: 'driving',
      trainerId: '',
      trainerName: 'No trainer',
      bucketOptionId: 'bucket100',
      bucketLabel: '100 bola',
      bucketBalls: 100,
      bucketPrice: 15,
      membershipType: 'non-member',
      bucketCount: 1,
      totalBalls: 100,
      date: getFutureDate(3),
      time: '10:00 AM',
      amount: 15,
      bookingStatus: 'Pending Confirmation',
      paymentStatus: 'Pending Verification',
      paymentMethod: 'QR Payment',
      receiptNote: 'Demo receipt uploaded',
      receiptImage: '',
      createdAt: new Date().toISOString(),
    },
  ],
  reviews: [],
  settings: {
    systemName: 'UPSI Golf Booking System',
    paymentName: 'UPSI Golf QR Payment',
    paymentInfo: 'Scan QR / transfer to UPSI Golf counter and upload receipt note.',
    contactEmail: 'golf@upsi.edu.my',
    contactPhone: '05-450 6000',
    organisationName: 'UPSI Driving Golf Range',
    bookingNotice: 'Please arrive 10 minutes before your selected time slot.',
    qrImage: '',
    scheduleSlots: defaultScheduleSlots(),
    dataVersion: 11,
  },
};

const state = {
  session: null,
  currentPage: 'dashboard',
  search: '',
  bookingTab: 'driving',
};


// =========================================================
// PHP section page support
// Allows files such as profile.php, driving_range.php and bookings.php
// to open the matching section while still using the same JavaScript app.
// =========================================================
const START_PAGE_ALIASES = {
  home: 'dashboard',
  'driving-range': 'courses',
  driving_range: 'courses',
  trainer: 'trainers',
  'my-bookings': 'mybookings',
  my_bookings: 'mybookings',
  'manage-users': 'users',
  manage_users: 'users',
  'tee-times': 'times',
  tee_times: 'times',
  'admin-driving-range': 'courses',
  admin_driving_range: 'courses',
};

function phpStartPage() {
  const raw = String(window.UPSI_START_PAGE || '').trim().toLowerCase();
  return START_PAGE_ALIASES[raw] || raw;
}

function isPageAllowedForRole(page, role) {
  const userPages = ['dashboard', 'courses', 'trainers', 'mybookings', 'payment', 'profile', 'feedback', 'settings'];
  const adminPages = ['dashboard', 'users', 'courses', 'trainers', 'times', 'bookings', 'payments', 'reviews', 'reports', 'settings', 'profile'];
  return (role === 'admin' ? adminPages : userPages).includes(page);
}

function applyPhpStartPage(user = state.session) {
  const requestedPage = phpStartPage();
  if (requestedPage && isPageAllowedForRole(requestedPage, user?.role)) {
    state.currentPage = requestedPage;
  }
}

const BUCKET_OPTIONS = [
  {
    id: 'bucket50',
    label: '50 bola',
    balls: 50,
    price: 10,
    nonMemberPrice: 10,
    memberPrice: 7.50,
    description: 'Half bucket containing 50 driving-range balls.',
  },
  {
    id: 'bucket100',
    label: '100 bola',
    balls: 100,
    price: 15,
    nonMemberPrice: 15,
    memberPrice: 13,
    description: 'One bucket containing 100 driving-range balls.',
  },
];

const BUCKET_COUNTS = Array.from({ length: 10 }, (_, index) => index + 1);
const TIME_STEP_MINUTES = 15;

const ADMIN_CANCEL_DEFAULT_REASON = 'This booking has been cancelled by the administrator due to scheduling, availability, or operational requirements. Please contact UPSI Golf administration for further assistance, or create a new booking using another available slot.';
const USER_CANCEL_DEFAULT_REASON = 'This booking was cancelled by the user. No further action is required unless the user creates a new booking.';
const PAYMENT_REJECT_CANCEL_REASON = 'Payment verification was unsuccessful because the submitted payment details could not be validated or did not match the booking record. Therefore, this booking has been automatically cancelled. Please submit a new booking and ensure the payment reference or receipt information is clear and accurate.';
const CONFIRMED_USER_CANCEL_REASON_HELP = 'Please explain why you want to cancel this confirmed booking. This reason will be kept for admin review and future reference.';

function isDrivingCourse(course = {}) {
  const text = `${course.id || ''} ${course.name || ''} ${course.type || ''}`.toLowerCase();
  return course.id === 'C-001' || text.includes('driving') || text.includes('range');
}

function getDrivingCourse(sourceCourses = null) {
  const courses = sourceCourses || read('courses');
  return courses.find((course) => course.id === 'C-001') ||
    courses.find((course) => isDrivingCourse(course)) ||
    courses[0] || null;
}

function getDrivingCourses(sourceCourses = null) {
  const courses = sourceCourses || read('courses');
  const drivingCourses = courses.filter((course) => isDrivingCourse(course));
  if (drivingCourses.length) return drivingCourses;
  const fallback = getDrivingCourse(courses);
  return fallback ? [fallback] : [];
}

function normaliseBucketOptions(options) {
  const usable = Array.isArray(options) && options.length ? options : BUCKET_OPTIONS;
  return usable
    .map((item, index) => {
      const balls = Number(item.balls || 0);
      const nonMemberPrice = Number(item.nonMemberPrice ?? item.price ?? 0);
      const memberPrice = Number(item.memberPrice ?? item.price ?? nonMemberPrice);
      return {
        id: item.id || `bucket${index + 1}`,
        label: item.label || `${balls} bola`,
        balls,
        price: nonMemberPrice,
        nonMemberPrice,
        memberPrice,
        description: item.description || `${item.label || 'Bucket'} package.`,
      };
    })
    .filter((item) => item.label && item.balls > 0 && item.nonMemberPrice >= 0 && item.memberPrice >= 0);
}

function getBucketOptions(course = null) {
  const targetCourse = course || getDrivingCourse();
  return normaliseBucketOptions(targetCourse?.bucketOptions);
}

function getBucketCounts(course = null) {
  const targetCourse = course || getDrivingCourse();
  const max = Math.max(1, Math.min(10, Number(targetCourse?.maxBucketCount || 10)));
  return Array.from({ length: max }, (_, index) => index + 1);
}

function bucketById(id, course = null) {
  const options = getBucketOptions(course);
  return options.find((item) => item.id === id) || options[0] || BUCKET_OPTIONS[0];
}

function membershipLabel(type = 'non-member') {
  return type === 'member' ? 'Member' : 'Non-member';
}

function bucketUnitPrice(bucket = {}, membershipType = 'non-member') {
  return membershipType === 'member' ? Number(bucket.memberPrice || 0) : Number(bucket.nonMemberPrice ?? bucket.price ?? 0);
}

function bucketAmount(bucketId, count, course = null, membershipType = 'non-member') {
  const bucket = bucketById(bucketId, course);
  return bucketUnitPrice(bucket, membershipType) * Number(count || 1);
}

function bucketPriceLabel(course = null) {
  const options = getBucketOptions(course);
  const first = options[0] || BUCKET_OPTIONS[0];
  return `Non-member RM ${formatPlainMoney(first.nonMemberPrice)} / Member RM ${formatPlainMoney(first.memberPrice)}`;
}

function formatPlainMoney(value) {
  const n = Number(value || 0);
  return Number.isInteger(n) ? String(n) : n.toFixed(2);
}

function bucketOptionSummary(bucket) {
  return `${escapeHtml(bucket.label)} • Non-member RM ${formatPlainMoney(bucket.nonMemberPrice)} • Member RM ${formatPlainMoney(bucket.memberPrice)}`;
}

function qrImageMarkup(className = 'qr-code') {
  const settings = read('settings');
  if (settings?.qrImage) {
    return `<div class="${className}"><img src="${settings.qrImage}" alt="QR Payment"></div>`;
  }
  return `<div class="${className}">QR</div>`;
}

function getFutureDate(days) {
  const d = new Date();
  d.setDate(d.getDate() + days);
  return d.toISOString().slice(0, 10);
}

function defaultScheduleSlots(timeList = null) {
  const baseTimes = Array.isArray(timeList) && timeList.length
    ? timeList
    : ['8:00 AM', '10:00 AM', '12:00 PM', '2:00 PM', '4:00 PM', '6:00 PM', '8:00 PM'];
  const dates = Array.from({ length: 7 }, (_, index) => getFutureDate(index));
  return dates.flatMap((date) => baseTimes.map((time, index) => ({
    id: `S-${date.replaceAll('-', '')}-${index}`,
    date,
    time,
    targetType: 'both',
    targetId: 'all',
    status: 'Available',
  })));
}

function normaliseScheduleSlots(slots = []) {
  if (!Array.isArray(slots)) return [];
  return slots
    .map((slot, index) => ({
      id: slot.id || makeId('S'),
      date: slot.date || getFutureDate(index),
      time: slot.time || '8:00 AM',
      targetType: ['driving', 'trainer', 'both'].includes(slot.targetType) ? slot.targetType : 'both',
      targetId: slot.targetId || 'all',
      status: slot.status || 'Available',
    }))
    .filter((slot) => slot.date && slot.time);
}

function getScheduleSlots() {
  const settings = read('settings');
  return normaliseScheduleSlots(settings.scheduleSlots || []);
}

function writeScheduleSlots(slots) {
  const settings = read('settings');
  settings.scheduleSlots = normaliseScheduleSlots(slots);
  write('settings', settings);
}

function slotAppliesTo(slot = {}, type = 'driving', targetId = '') {
  const targetType = slot.targetType || 'both';
  const slotTargetId = slot.targetId || 'all';
  const typeMatch = targetType === 'both' || targetType === type;
  const targetMatch = slotTargetId === 'all' || !targetId || slotTargetId === targetId;
  return typeMatch && targetMatch;
}

function bookingOccupiesSlot(booking = {}, slot = {}) {
  if (!booking || !slot || isBookingCancelled(booking)) return false;
  if (booking.date !== slot.date || booking.time !== slot.time) return false;

  const slotType = slot.targetType || 'both';
  const slotTarget = slot.targetId || 'all';

  if (slotType === 'both') return true;

  if (slotType === 'driving') {
    return booking.bookingType === 'driving' && (slotTarget === 'all' || !slotTarget || slotTarget === booking.courseId);
  }

  if (slotType === 'trainer') {
    return booking.bookingType === 'trainer' && (slotTarget === 'all' || !slotTarget || slotTarget === booking.trainerId);
  }

  return false;
}

function isSlotBooked(slot = {}) {
  return read('bookings').some((booking) => bookingOccupiesSlot(booking, slot));
}

function slotDisplayStatus(slot = {}) {
  if ((slot.status || 'Available') !== 'Available') return slot.status || 'Unavailable';
  return isSlotBooked(slot) ? 'Booked / Not Available' : 'Available';
}

function isSlotCurrentlyAvailable(slot = {}) {
  return (slot.status || 'Available') === 'Available' && !isSlotBooked(slot);
}

function datesBetween(startDate, endDate) {
  if (!startDate || !endDate) return [];
  const start = new Date(`${startDate}T00:00:00`);
  const end = new Date(`${endDate}T00:00:00`);
  if (Number.isNaN(start.getTime()) || Number.isNaN(end.getTime()) || start > end) return [];
  const dates = [];
  const cursor = new Date(start);
  while (cursor <= end) {
    dates.push(cursor.toISOString().slice(0, 10));
    cursor.setDate(cursor.getDate() + 1);
  }
  return dates;
}

function sortByDateTime(a, b) {
  const aDate = `${a.date} ${convertTo24Hour(a.time)}`;
  const bDate = `${b.date} ${convertTo24Hour(b.time)}`;
  return aDate.localeCompare(bDate);
}

function availableSlotsFor(type, targetId = '', date = '') {
  const today = new Date().toISOString().slice(0, 10);
  return getScheduleSlots()
    .filter((slot) => isSlotCurrentlyAvailable(slot))
    .filter((slot) => slot.date >= today)
    .filter((slot) => !date || slot.date === date)
    .filter((slot) => slotAppliesTo(slot, type, targetId))
    .sort(sortByDateTime);
}

function availableDatesFor(type, targetId = '') {
  return [...new Set(availableSlotsFor(type, targetId).map((slot) => slot.date))].sort();
}

function timeOptionsFor(type, targetId = '', date = '', currentTime = '') {
  const times = [...new Set(availableSlotsFor(type, targetId, date).map((slot) => slot.time))]
    .sort((a, b) => convertTo24Hour(a).localeCompare(convertTo24Hour(b)));
  if (currentTime && !times.includes(currentTime)) times.unshift(currentTime);
  return times;
}

function dateOptionMarkup(dates = [], selected = '') {
  if (!dates.length) return '<option value="">No available date</option>';
  return dates.map((date) => `<option value="${date}" ${selected === date ? 'selected' : ''}>${formatDateDisplay(date)}</option>`).join('');
}

function timeOptionMarkup(times = [], selected = '') {
  if (!times.length) return '<option value="">No available time</option>';
  return times.map((time) => `<option value="${escapeHtml(time)}" ${selected === time ? 'selected' : ''}>${escapeHtml(time)}</option>`).join('');
}

function formatDateDisplay(date = '') {
  if (!date) return '-';
  const parsed = new Date(`${date}T00:00:00`);
  if (Number.isNaN(parsed.getTime())) return date;
  return parsed.toLocaleDateString(undefined, { weekday: 'short', day: '2-digit', month: 'short', year: 'numeric' });
}

function convertTo24Hour(time = '') {
  const match = String(time).trim().match(/^(\d{1,2}):(\d{2})\s*(AM|PM)$/i);
  if (!match) return String(time).padStart(8, '0');
  let hour = Number(match[1]);
  const minute = Number(match[2]);
  const period = match[3].toUpperCase();
  if (period === 'PM' && hour !== 12) hour += 12;
  if (period === 'AM' && hour === 12) hour = 0;
  return `${String(hour).padStart(2, '0')}:${String(minute).padStart(2, '0')}`;
}

function parseTimeSlot(time = '8:00 AM') {
  const match = String(time).trim().match(/^(\d{1,2}):(\d{2})\s*(AM|PM)$/i);
  if (!match) return { hour: 8, minute: 0, period: 'AM' };
  return {
    hour: Math.min(12, Math.max(1, Number(match[1]) || 8)),
    minute: Math.min(59, Math.max(0, Number(match[2]) || 0)),
    period: match[3].toUpperCase(),
  };
}

function formatTimeSlot(hour = 8, minute = 0, period = 'AM') {
  return `${Number(hour)}:${String(Number(minute)).padStart(2, '0')} ${period}`;
}

function adjustTimePart(current, part, direction) {
  const next = { ...current };
  if (part === 'hour') {
    next.hour += direction;
    if (next.hour > 12) next.hour = 1;
    if (next.hour < 1) next.hour = 12;
  }
  if (part === 'minute') {
    next.minute += direction * TIME_STEP_MINUTES;
    if (next.minute >= 60) next.minute = 0;
    if (next.minute < 0) next.minute = 60 - TIME_STEP_MINUTES;
  }
  if (part === 'period') next.period = next.period === 'AM' ? 'PM' : 'AM';
  return next;
}

function scheduleTargetLabel(slot = {}) {
  if (slot.targetType === 'driving') {
    const course = read('courses').find((c) => c.id === slot.targetId) || getDrivingCourse();
    return course ? course.name : 'Driving Range';
  }
  if (slot.targetType === 'trainer') {
    const trainer = read('trainers').find((t) => t.id === slot.targetId);
    return trainer ? trainer.name : 'Trainer';
  }
  return 'Driving Range & All Trainers';
}

function scheduleTypeLabel(type = 'both') {
  if (type === 'driving') return 'Driving Range';
  if (type === 'trainer') return 'Trainer';
  return 'Driving Range & Trainer';
}

function availabilitySummary(type, targetId = '') {
  const slots = availableSlotsFor(type, targetId).slice(0, 4);
  if (!slots.length) return 'No available date/time set yet.';
  return slots.map((slot) => `${formatDateDisplay(slot.date)} • ${slot.time}`).join(' | ');
}

function availabilityCount(type, targetId = '') {
  return availableSlotsFor(type, targetId).length;
}

function availabilityButtonMarkup(type, targetId = '', label = 'View Available Time') {
  const count = availabilityCount(type, targetId);
  const text = count ? `${label} (${count})` : 'No available time';
  return `<button class="btn btn-soft availability-btn" type="button" data-view-availability="${escapeHtml(type)}" data-availability-target="${escapeHtml(targetId)}" ${count ? '' : 'disabled'}>${escapeHtml(text)}</button>`;
}

function openAvailabilityModal(type, targetId = '', title = 'Available Date & Time') {
  const slots = availableSlotsFor(type, targetId).sort(sortByDateTime);
  const grouped = slots.reduce((acc, slot) => {
    acc[slot.date] = acc[slot.date] || [];
    acc[slot.date].push(slot.time);
    return acc;
  }, {});
  openModal(`
    <div class="modal-head">
      <div>
        <p class="eyebrow">Availability</p>
        <h2>${escapeHtml(title)}</h2>
        <p class="muted">Available date and time are controlled by admin in Tee Times.</p>
      </div>
      <button class="close-btn" data-close-modal>&times;</button>
    </div>
    <div class="availability-list">
      ${Object.keys(grouped).length ? Object.entries(grouped).map(([date, times]) => `
        <div class="availability-day">
          <strong>${escapeHtml(formatDateDisplay(date))}</strong>
          <div>${times.map((time) => `<span>${escapeHtml(time)}</span>`).join('')}</div>
        </div>
      `).join('') : '<p class="muted">No available date/time set yet.</p>'}
    </div>
  `);
}

function bindAvailabilityButtons() {
  content().querySelectorAll('[data-view-availability]').forEach((btn) => {
    btn.addEventListener('click', () => {
      const type = btn.dataset.viewAvailability;
      const targetId = btn.dataset.availabilityTarget || '';
      const trainer = type === 'trainer' ? read('trainers').find((item) => item.id === targetId) : null;
      const title = trainer ? `${trainer.name} Available Time` : 'Available Date & Time';
      openAvailabilityModal(type, targetId, title);
    });
  });
}


function isUuid(value = '') {
  return /^[0-9a-f]{8}-[0-9a-f]{4}-[1-5][0-9a-f]{3}-[89ab][0-9a-f]{3}-[0-9a-f]{12}$/i.test(String(value || ''));
}

function accountStatusToLocal(value = 'active') {
  return String(value).toLowerCase() === 'active' ? 'Active' : 'Inactive';
}

function accountStatusToDb(value = 'Active') {
  return ['active', 'available'].includes(String(value).toLowerCase()) ? 'active' : 'inactive';
}

function availabilityToLocal(value = 'active') {
  return String(value).toLowerCase() === 'active' ? 'Available' : 'Unavailable';
}

function availabilityToDb(value = 'Available') {
  return String(value).toLowerCase() === 'available' || String(value).toLowerCase() === 'active' ? 'active' : 'inactive';
}

function toLocalRole(role = 'user') {
  return ['main_admin', 'admin'].includes(String(role)) ? 'admin' : 'user';
}

function fromLocalSlotType(type = 'both') {
  if (type === 'driving') return 'driving_range';
  if (type === 'trainer') return 'trainer';
  return 'both';
}

function toLocalSlotType(type = 'both') {
  if (type === 'driving_range') return 'driving';
  if (type === 'trainer') return 'trainer';
  return 'both';
}

function dbTimeToLocal(time = '') {
  const raw = String(time || '08:00:00');
  const [h = '8', m = '00'] = raw.split(':');
  let hour = Number(h);
  const minute = Number(m || 0);
  const period = hour >= 12 ? 'PM' : 'AM';
  hour = hour % 12;
  if (hour === 0) hour = 12;
  return `${hour}:${String(minute).padStart(2, '0')} ${period}`;
}

function localTimeToDb(time = '8:00 AM') {
  const value = convertTo24Hour(time || '8:00 AM');
  return value.length === 5 ? `${value}:00` : value;
}

function localBookingTypeToDb(type = 'driving') {
  return type === 'trainer' ? 'trainer' : 'driving_range';
}

function dbBookingTypeToLocal(type = 'driving_range') {
  return type === 'trainer' ? 'trainer' : 'driving';
}

function localBookingStatusToDb(status = 'Pending Confirmation') {
  const lower = String(status || '').toLowerCase();
  if (lower.includes('cancel')) return 'cancelled';
  if (lower.includes('confirm')) return 'confirmed';
  if (lower.includes('pending')) return 'pending_verification';
  return 'pending_payment';
}

function dbBookingStatusToLocal(status = 'pending_payment') {
  if (status === 'confirmed') return 'Confirmed';
  if (status === 'cancelled') return 'Cancelled';
  return 'Pending Confirmation';
}

function localPaymentStatusToDb(status = 'not_paid') {
  const lower = String(status || '').toLowerCase();
  if (lower.includes('verified')) return 'verified';
  if (lower.includes('reject')) return 'rejected';
  if (lower.includes('pending')) return 'pending';
  return 'not_paid';
}

function dbPaymentStatusToLocal(status = 'not_paid', bookingType = 'driving') {
  if (bookingType === 'trainer') return 'Not Required';
  if (status === 'verified') return 'Verified';
  if (status === 'rejected') return 'Rejected';
  if (status === 'pending') return 'Pending Verification';
  return 'Not Paid';
}

function profileToUser(profile = {}) {
  return {
    id: profile.id,
    userId: profile.user_id || '',
    fullName: profile.full_name || profile.email || 'User',
    email: profile.email || '',
    phone: profile.phone || '',
    password: '',
    role: toLocalRole(profile.role),
    supabaseRole: profile.role || 'user',
    status: accountStatusToLocal(profile.status),
    profileImage: profile.profile_image_url || '',
    address: profile.address || '',
    inactiveReason: profile.inactive_reason || '',
    inactiveAt: profile.inactive_at || '',
    inactiveBy: profile.inactive_by || '',
    createdAt: profile.created_at || new Date().toISOString(),
  };
}

function trainerToLocal(trainer = {}) {
  return {
    id: trainer.id,
    name: trainer.full_name || 'Trainer',
    phone: trainer.phone || '',
    email: trainer.email || '',
    address: trainer.address || '',
    description: trainer.description || trainer.specialist || trainer.speciality || '',
    rate: Number(trainer.rate || 0),
    profileImage: trainer.profile_image_url || '',
    status: availabilityToLocal(trainer.status),
    createdAt: trainer.created_at || new Date().toISOString(),
  };
}

function courseToLocal(range = {}, buckets = []) {
  const bucketOptions = buckets
    .filter((bucket) => bucket.driving_range_id === range.id)
    .sort((a, b) => Number(a.ball_count || 0) - Number(b.ball_count || 0))
    .map((bucket) => ({
      id: bucket.id,
      label: bucket.bucket_name || `${bucket.ball_count} bola`,
      balls: Number(bucket.ball_count || 0),
      price: Number(bucket.non_member_price || 0),
      nonMemberPrice: Number(bucket.non_member_price || 0),
      memberPrice: Number(bucket.member_price || 0),
      description: `${bucket.ball_count || ''} balls bucket`,
    }));

  return {
    id: range.id,
    name: range.name || 'UPSI Driving Golf Range',
    location: range.location || 'UPSI Driving Range',
    type: 'Driving Range',
    holes: 'Practice Bay',
    price: Number(bucketOptions[0]?.nonMemberPrice || 0),
    description: range.description || 'Driving range ball bucket booking for UPSI Golf.',
    status: availabilityToLocal(range.status),
    openingHours: range.opening_hours || '',
    bucketOptions: bucketOptions.length ? bucketOptions : BUCKET_OPTIONS.map((item) => ({ ...item })),
    maxBucketCount: Number(bucketOptions[0]?.max_bucket || buckets.find((bucket) => bucket.driving_range_id === range.id)?.max_bucket || 10),
  };
}

function slotToLocal(slot = {}) {
  const dbStatus = String(slot.status || 'available').toLowerCase();
  return {
    id: slot.id,
    date: slot.slot_date,
    time: dbTimeToLocal(slot.slot_time),
    targetType: toLocalSlotType(slot.slot_type),
    targetId: slot.slot_type === 'trainer' && slot.trainer_id ? slot.trainer_id : 'all',
    // V45: Supabase rows that were previously marked as `booked` by an old booking sync
    // must still be selectable for driving range bookings when another lane is free.
    // Only admin/inactive statuses should hide the tee slot itself.
    status: dbStatus === 'inactive' || dbStatus === 'unavailable' || dbStatus === 'disabled' ? 'Unavailable' : 'Available',
  };
}

function localSlotToDb(slot = {}) {
  const type = fromLocalSlotType(slot.targetType || 'both');
  const payload = {
    slot_date: slot.date,
    slot_time: localTimeToDb(slot.time),
    slot_type: type,
    trainer_id: type === 'trainer' && isUuid(slot.targetId) ? slot.targetId : null,
    status: String(slot.status || 'Available') === 'Available' ? 'available' : 'inactive',
  };
  if (isUuid(slot.id)) payload.id = slot.id;
  return payload;
}

function bookingToLocal(row = {}) {
  const localType = dbBookingTypeToLocal(row.booking_type);
  const joinedPayment = Array.isArray(row.payments) ? row.payments[0] : row.payments;
  const paymentStatus = joinedPayment?.payment_status || row.payment_status || 'not_paid';
  const bucket = row.bucket_options || {};
  const slot = row.tee_slots || {};
  const profile = row.profiles || {};
  const range = row.driving_ranges || {};
  const trainer = row.trainers || {};
  return {
    id: row.id,
    bookingType: localType,
    userId: row.user_id || '',
    customerName: profile.full_name || 'User',
    customerEmail: profile.email || '',
    courseId: row.driving_range_id || '',
    courseName: localType === 'trainer' ? 'Trainer Coaching Session' : (range.name || 'UPSI Driving Golf Range'),
    trainerId: row.trainer_id || '',
    trainerName: localType === 'trainer' ? (trainer.full_name || 'Trainer') : 'No trainer',
    teeSlotId: row.tee_slot_id || '',
    bucketOptionId: row.bucket_option_id || '',
    bucketLabel: bucket.bucket_name || '',
    bucketBalls: Number(bucket.ball_count || row.total_balls || 0) / Math.max(1, Number(row.number_of_bucket || 1)),
    bucketPrice: Number(row.total_amount || 0) / Math.max(1, Number(row.number_of_bucket || 1)),
    membershipType: row.membership_type || 'non-member',
    bucketCount: Number(row.number_of_bucket || 0),
    totalBalls: Number(row.total_balls || 0),
    date: slot.slot_date || '',
    time: slot.slot_time ? dbTimeToLocal(slot.slot_time) : '',
    amount: Number(row.total_amount || 0),
    bookingStatus: dbBookingStatusToLocal(row.booking_status),
    paymentStatus: dbPaymentStatusToLocal(paymentStatus, localType),
    paymentMethod: localType === 'trainer' ? 'No Payment Required' : 'QR Payment',
    receiptNote: joinedPayment?.payment_note || '',
    receiptImage: joinedPayment?.receipt_image_url || '',
    cancelReason: row.cancellation_reason || joinedPayment?.rejected_reason || '',
    cancelledBy: row.cancellation_type === 'confirmed_user_cancelled' || row.cancellation_type === 'user_cancelled' ? 'user' : (row.cancelled_by ? 'admin' : ''),
    cancelledById: row.cancelled_by || '',
    cancellationType: row.cancellation_type || (paymentStatus === 'rejected' ? 'payment_rejected' : ''),
    cancelledAt: row.cancelled_at || '',
    previousBookingStatus: row.previous_booking_status || '',
    previousPaymentStatus: row.previous_payment_status || '',
    hiddenForUsers: row.hidden_for_user && row.user_id ? [row.user_id] : [],
    hiddenForAdmin: Boolean(row.hidden_for_admin),
    createdAt: row.created_at || new Date().toISOString(),
  };
}

function reviewToLocal(row = {}) {
  return {
    id: row.id,
    userId: row.user_id || '',
    userName: row.profiles?.full_name || 'User',
    rating: Number(row.rating || 0),
    message: row.comment || '',
    createdAt: row.created_at || new Date().toISOString(),
  };
}

function settingsRowsToLocal(rows = []) {
  const map = Object.fromEntries((rows || []).map((row) => [row.setting_key, row.setting_value || '']));
  const previous = read('settings');
  return {
    ...defaultData.settings,
    ...previous,
    systemName: map.system_name || previous.systemName || defaultData.settings.systemName,
    paymentName: map.payment_name || previous.paymentName || defaultData.settings.paymentName,
    paymentInfo: map.payment_instruction || map.payment_info || previous.paymentInfo || defaultData.settings.paymentInfo,
    contactEmail: map.contact_email || previous.contactEmail || defaultData.settings.contactEmail,
    contactPhone: map.contact_phone || previous.contactPhone || defaultData.settings.contactPhone,
    organisationName: map.organisation_name || previous.organisationName || defaultData.settings.organisationName,
    bookingNotice: map.booking_notice || previous.bookingNotice || defaultData.settings.bookingNotice,
    qrImage: map.payment_qr_url || previous.qrImage || '',
    dataVersion: 14,
  };
}

function setLocalData(key, value) {
  localStorage.setItem(STORAGE[key], JSON.stringify(value));
}

async function loadSupabaseDataToLocal({ requireAuth = false } = {}) {
  if (!SUPABASE_MODE || supabaseHydrating) return false;
  supabaseHydrating = true;
  suppressSupabaseSync = true;
  try {
    const { data: sessionData } = await supabaseClient.auth.getSession();
    const isLoggedIn = Boolean(sessionData?.session?.user);
    if (requireAuth && !isLoggedIn) return false;

    const [rangeRes, bucketRes, trainerRes, slotRes, settingRes] = await Promise.all([
      supabaseClient.from(DB_TABLES.drivingRanges).select('*').order('created_at', { ascending: true }),
      supabaseClient.from(DB_TABLES.bucketOptions).select('*').order('ball_count', { ascending: true }),
      supabaseClient.from(DB_TABLES.trainers).select('*').order('full_name', { ascending: true }),
      supabaseClient.from(DB_TABLES.teeSlots).select('*').order('slot_date', { ascending: true }).order('slot_time', { ascending: true }),
      supabaseClient.from(DB_TABLES.settings).select('*'),
    ]);

    if (!rangeRes.error && Array.isArray(rangeRes.data) && rangeRes.data.length) {
      setLocalData('courses', rangeRes.data.map((range) => courseToLocal(range, bucketRes.data || [])));
    }
    if (!trainerRes.error && Array.isArray(trainerRes.data)) {
      setLocalData('trainers', trainerRes.data.map(trainerToLocal));
    }
    if (!slotRes.error && Array.isArray(slotRes.data)) {
      const settings = settingsRowsToLocal(settingRes.data || []);
      settings.scheduleSlots = slotRes.data.map(slotToLocal);
      settings.dataVersion = 14;
      setLocalData('settings', settings);
    } else if (!settingRes.error && Array.isArray(settingRes.data)) {
      const settings = settingsRowsToLocal(settingRes.data || []);
      setLocalData('settings', settings);
    }

    if (isLoggedIn) {
      const [profileRes, bookingRes, reviewRes] = await Promise.all([
        supabaseClient.from(DB_TABLES.profiles).select('*').order('created_at', { ascending: true }),
        supabaseClient.from(DB_TABLES.bookings)
          .select('*, profiles:user_id(full_name,email), driving_ranges:driving_range_id(name), trainers:trainer_id(full_name), bucket_options:bucket_option_id(bucket_name,ball_count,member_price,non_member_price), tee_slots:tee_slot_id(*), payments:payments(*)')
          .order('created_at', { ascending: false }),
        supabaseClient.from(DB_TABLES.reviews).select('*, profiles:user_id(full_name,email)').order('created_at', { ascending: false }),
      ]);
      if (!profileRes.error && Array.isArray(profileRes.data)) {
        setLocalData('users', profileRes.data.map(profileToUser));
      }
      if (!bookingRes.error && Array.isArray(bookingRes.data)) {
        setLocalData('bookings', bookingRes.data.map(bookingToLocal));
      }
      if (!reviewRes.error && Array.isArray(reviewRes.data)) {
        setLocalData('reviews', reviewRes.data.map(reviewToLocal));
      }
    }
    return true;
  } catch (error) {
    console.error('Supabase hydrate error:', error);
    return false;
  } finally {
    suppressSupabaseSync = false;
    supabaseHydrating = false;
  }
}

async function getSupabaseSessionUser() {
  if (!SUPABASE_MODE) return null;
  const { data: sessionData } = await supabaseClient.auth.getSession();
  const authUser = sessionData?.session?.user;
  if (!authUser) return null;
  const { data: profile, error } = await supabaseClient
    .from(DB_TABLES.profiles)
    .select('*')
    .eq('user_id', authUser.id)
    .single();
  if (error || !profile) return null;
  return profileToUser(profile);
}


async function restoreSupabaseSession(session) {
  if (!SUPABASE_MODE || !session?.access_token || !session?.refresh_token) return;
  const { error } = await supabaseClient.auth.setSession({
    access_token: session.access_token,
    refresh_token: session.refresh_token,
  });
  if (error) console.error('Restore Supabase session error:', error);
}

async function createSupabaseAuthAccount({ fullName, email, phone, password, role = 'user', status = 'active', address = '' }, { restoreSession = null } = {}) {
  if (!SUPABASE_MODE) return { data: null, profile: null, error: new Error('Supabase client is not available.') };

  const safeEmail = String(email || '').trim().toLowerCase();
  const safePassword = String(password || '');
  if (!safeEmail) return { data: null, profile: null, error: new Error('Email address is required.') };
  if (!safePassword || safePassword.length < 6) return { data: null, profile: null, error: new Error('Password must be at least 6 characters.') };

  const { data: beforeSessionData } = await supabaseClient.auth.getSession();
  const sessionToRestore = restoreSession || beforeSessionData?.session || null;

  const { data: signUpData, error: signUpError } = await supabaseClient.auth.signUp({
    email: safeEmail,
    password: safePassword,
    options: {
      data: {
        full_name: String(fullName || '').trim() || safeEmail,
        phone: String(phone || '').trim(),
        role: role === 'admin' ? 'admin' : 'user',
        requested_role: role === 'admin' ? 'admin' : 'user',
      },
    },
  });

  if (signUpError) {
    console.error('Supabase signup error:', signUpError);
    return { data: signUpData, profile: null, error: signUpError };
  }

  if (sessionToRestore?.access_token) {
    await restoreSupabaseSession(sessionToRestore);
  }

  const profilePayload = {
    full_name: String(fullName || '').trim() || safeEmail,
    email: safeEmail,
    phone: String(phone || '').trim() || null,
    address: String(address || '').trim() || null,
    role,
    status,
  };

  let profile = null;
  let profileError = null;

  // Try a few times because the auth trigger may need a short moment to create the profile row.
  for (let attempt = 0; attempt < 4; attempt += 1) {
    if (attempt) await new Promise((resolve) => setTimeout(resolve, 450));
    const result = await supabaseClient
      .from(DB_TABLES.profiles)
      .update(profilePayload)
      .eq('email', safeEmail)
      .select()
      .maybeSingle();
    profile = result.data || null;
    profileError = result.error || null;
    if (profile || !profileError) break;
  }

  if (profileError) console.error('Supabase profile create/update error:', profileError);
  return { data: signUpData, profile, error: profileError };
}

async function updateSupabaseProfileByEmail(email, updates = {}) {
  if (!SUPABASE_MODE) return { data: null, error: null };
  const { data, error } = await supabaseClient
    .from(DB_TABLES.profiles)
    .update(updates)
    .eq('email', String(email || '').trim().toLowerCase())
    .select()
    .maybeSingle();
  if (error) console.error('Supabase profile email update error:', error);
  return { data, error };
}

async function getCurrentProfileId() {
  if (state.session?.id && isUuid(state.session.id)) return state.session.id;
  const user = await getSupabaseSessionUser();
  return user?.id || null;
}

function findSlotForBooking(booking = {}) {
  if (booking.teeSlotId && isUuid(booking.teeSlotId)) return booking.teeSlotId;
  const slots = getScheduleSlots();
  const matching = slots.find((slot) => {
    if (slot.date !== booking.date || slot.time !== booking.time) return false;
    if (booking.bookingType === 'trainer') {
      return slotAppliesTo(slot, 'trainer', booking.trainerId);
    }
    return slotAppliesTo(slot, 'driving', booking.courseId);
  });
  return isUuid(matching?.id) ? matching.id : null;
}

function debounceRemoteSync(key, value) {
  if (!SUPABASE_MODE || !supabaseSyncReady || suppressSupabaseSync) return;
  window.clearTimeout(debounceRemoteSync.timers?.[key]);
  debounceRemoteSync.timers = debounceRemoteSync.timers || {};
  debounceRemoteSync.timers[key] = window.setTimeout(() => {
    syncSupabaseWrite(key, value).catch((error) => {
      console.error(`Supabase sync failed for ${key}:`, error);
      toast(`Supabase sync failed for ${key}. Check Console.`);
    });
  }, 250);
}

async function syncSupabaseWrite(key, value) {
  if (!SUPABASE_MODE || !supabaseSyncReady || suppressSupabaseSync) return;
  if (key === 'users') return syncProfilesToSupabase(value || []);
  if (key === 'courses') return syncCoursesToSupabase(value || []);
  if (key === 'trainers') return syncTrainersToSupabase(value || []);
  if (key === 'settings') return syncSettingsToSupabase(value || {});
  if (key === 'bookings') return syncBookingsToSupabase(value || []);
  if (key === 'reviews') return syncReviewsToSupabase(value || []);
}

async function syncProfilesToSupabase(users = []) {
  if (!SUPABASE_MODE) return;
  for (const user of users.filter((item) => item.email)) {
    const payload = {
      full_name: user.fullName || user.email,
      email: String(user.email || '').toLowerCase(),
      phone: user.phone || null,
      address: user.address || null,
      role: user.supabaseRole || (user.role === 'admin' ? 'admin' : 'user'),
      status: accountStatusToDb(user.status),
      profile_image_url: user.profileImage || null,
      inactive_reason: user.inactiveReason || null,
      inactive_at: user.inactiveAt || null,
      inactive_by: isUuid(user.inactiveBy) ? user.inactiveBy : null,
    };
    if (user.userId && isUuid(user.userId)) payload.user_id = user.userId;

    let error = null;
    if (user.id && isUuid(user.id)) {
      ({ error } = await supabaseClient
        .from(DB_TABLES.profiles)
        .update(payload)
        .eq('id', user.id));
    } else if (user.email) {
      const existing = await supabaseClient
        .from(DB_TABLES.profiles)
        .select('id')
        .eq('email', payload.email)
        .maybeSingle();
      if (existing.data?.id) {
        ({ error } = await supabaseClient
          .from(DB_TABLES.profiles)
          .update(payload)
          .eq('id', existing.data.id));
      } else if (isPrimaryAdmin(state.session)) {
        ({ error } = await supabaseClient
          .from(DB_TABLES.profiles)
          .insert(payload));
      }
    }
    if (error) console.error('Profile sync error:', error);
  }
}


async function updateProfileInSupabaseFromUser(user = {}) {
  if (!SUPABASE_MODE) return { data: null, error: null };
  const payload = {
    full_name: user.fullName || user.email || 'User',
    phone: user.phone || null,
    address: user.address || null,
    profile_image_url: user.profileImage || null,
    status: accountStatusToDb(user.status || 'Active'),
  };

  let query = supabaseClient.from(DB_TABLES.profiles).update(payload);
  if (user.id && isUuid(user.id)) {
    query = query.eq('id', user.id);
  } else if (user.userId && isUuid(user.userId)) {
    query = query.eq('user_id', user.userId);
  } else if (user.email) {
    query = query.eq('email', String(user.email).toLowerCase());
  } else {
    return { data: null, error: new Error('Profile identifier is missing.') };
  }

  const { data, error } = await query.select().single();
  if (error) console.error('Profile update error:', error);
  return { data, error };
}

async function deleteProfileFromSupabase(user = {}) {
  if (!SUPABASE_MODE) return { error: null };
  if (!user?.id || !isUuid(user.id)) return { error: null };
  const { error } = await supabaseClient
    .from(DB_TABLES.profiles)
    .delete()
    .eq('id', user.id);
  if (error) console.error('Profile delete error:', error);
  return { error };
}

function upsertLocalUserFromProfile(profile = {}) {
  const updated = profileToUser(profile);
  const users = read('users');
  const index = users.findIndex((u) => u.id === updated.id || u.email?.toLowerCase() === updated.email?.toLowerCase());
  if (index >= 0) users[index] = { ...users[index], ...updated };
  else users.push(updated);
  setLocalData('users', users);
  if (state.session?.id === updated.id || state.session?.email?.toLowerCase() === updated.email?.toLowerCase()) {
    setSession({ ...state.session, ...updated });
  }
  return updated;
}

async function saveCurrentProfileToSupabase({ fullName, phone, address, profileImage }) {
  const current = getFreshSessionUser();
  const user = {
    ...current,
    fullName: String(fullName || '').trim(),
    phone: String(phone || '').trim(),
    address: String(address || '').trim(),
  };
  if (profileImage !== undefined) user.profileImage = profileImage;

  const { data, error } = await updateProfileInSupabaseFromUser(user);
  if (error) {
    toast(error.message || 'Failed to update profile in Supabase.');
    return null;
  }
  if (data) return upsertLocalUserFromProfile(data);

  const users = read('users');
  const index = users.findIndex((u) => u.id === user.id);
  if (index >= 0) users[index] = user;
  setLocalData('users', users);
  setSession(user);
  return user;
}



</script>
<?php
}

function upsi_section_home_page_module(): void
{
?>
<script>
window.UPSI_SECTION_MODULES = window.UPSI_SECTION_MODULES || {};
window.UPSI_SECTION_MODULES["home_page"] = {
  title: "Home Page sebelum login",
  runtimeChunk: '1/22',
  functions: ["v83RenderHome", "renderAuth", "boot", "renderPage"]
};
</script>
<?php
}

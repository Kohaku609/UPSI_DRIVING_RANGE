<?php
/**
 * features.php
 * Bahagian: Features sebelum login
 *
 * V108: CSS dan JavaScript runtime dibahagikan ke semua section.
 * Jadi home_page.php tidak lagi memegang semua coding sistem.
 *
 * Runtime chunk: 3/22
 * Fungsi berkaitan untuk presentation: v83RenderFeatures
 */


function upsi_section_features_styles(): void
{
?>
<style>
/* =========================================================
   V108 CSS chunk 3/22
   Bahagian: Features sebelum login
   ========================================================= */
.booking-tab.active {
  background: var(--dark-green);
  color: var(--white);
  border-radius: 18px;
}

.preview-tabs .booking-tab:not(.active) {
  opacity: 0.85;
}

.app-booking-card,
.admin-range-preview {
  border: 1px solid rgba(15,81,50,0.08);
  border-radius: 26px;
  background: rgba(255,255,255,0.92);
  box-shadow: 0 12px 42px rgba(15,81,50,0.08);
  padding: 20px;
}

.app-booking-card h2 {
  margin-bottom: 14px;
}

.range-form {
  display: grid;
  gap: 12px;
}

.range-field {
  gap: 4px;
  color: rgba(31,41,51,0.72);
}

.range-control {
  position: relative;
  display: flex;
  align-items: center;
  min-height: 58px;
  border-radius: 18px;
  background: var(--soft-green);
  border: 1px solid transparent;
  overflow: hidden;
}

.range-control.active-control {
  border-color: var(--dark-green);
  box-shadow: inset 0 0 0 1px rgba(15,81,50,0.35);
}

.field-icon,
.info-icon {
  width: 42px;
  height: 42px;
  display: grid;
  place-items: center;
  flex: 0 0 auto;
  border-radius: 14px;
  color: var(--dark-green);
  background: rgba(15,81,50,0.08);
  margin-left: 10px;
}

.range-control input,
.range-control select {
  border: 0;
  background: transparent;
  box-shadow: none;
  border-radius: 0;
  padding-left: 12px;
  font-weight: 800;
}

.range-control input:focus,
.range-control select:focus {
  border: 0;
  box-shadow: none;
}

.bucket-info {
  display: flex;
  align-items: center;
  gap: 12px;
  border-radius: 20px;
  background: var(--light-green);
  padding: 16px;
}

.bucket-info .info-icon {
  background: white;
  margin-left: 0;
}

.bucket-info p {
  margin-bottom: 6px;
  color: var(--charcoal);
}

.bucket-info strong {
  color: var(--charcoal);
}

.calculation-row {
  display: flex;
  justify-content: space-between;
  align-items: center;
  gap: 14px;
  border-radius: 18px;
  background: var(--soft-green);
  padding: 16px 18px;
}

.calculation-row div {
  color: var(--charcoal);
}

.calculation-row strong {
  color: var(--charcoal);
  font-size: 18px;
}

.modal-total-row {
  margin-top: 2px;
}

.qr-payment-panel {
  border-radius: 22px;
  background: var(--soft-green);
  padding: 18px;
}

.qr-payment-head {
  display: flex;
  justify-content: space-between;
  gap: 18px;
  align-items: flex-start;
}

.qr-payment-head h3 {
  margin-bottom: 8px;
}

.qr-payment-head p {
  color: var(--muted);
  line-height: 1.5;
}

.qr-mini {
  width: 150px;
  height: 120px;
  display: grid;
  place-items: center;
  margin: 12px auto 0;
  border-radius: 16px;
  color: var(--dark-green);
  background:
    linear-gradient(90deg, #0f5132 9px, transparent 9px) 0 0/27px 27px,
    linear-gradient(#0f5132 9px, transparent 9px) 0 0/27px 27px,
    #ffffff;
  font-weight: 900;
}

.admin-package-grid {
  display: grid;
  grid-template-columns: repeat(3, minmax(0, 1fr));
  gap: 12px;
}

.package-card {
  display: flex;
  align-items: center;
  gap: 12px;
  border-radius: 18px;
  background: var(--soft-green);
  padding: 14px;
}

.package-card .field-icon {
  margin-left: 0;
}

.package-card p {
  margin: 0 0 4px;
  color: var(--muted);
  font-weight: 800;
}

.package-card strong {
  color: var(--charcoal);
}

.compact-toolbar {
  margin-bottom: 14px;
}

@media (max-width: 680px) {
  .booking-tabs,
  .admin-package-grid {
    grid-template-columns: 1fr;
  }

  .qr-payment-head,
  .calculation-row,
  .mobile-booking-heading {
    align-items: flex-start;
    flex-direction: column;
  }
}

/* Account and settings enhancements */
.settings-grid {
  display: grid;
  grid-template-columns: minmax(240px, 0.75fr) minmax(0, 1.25fr);
  gap: 22px;
  align-items: start;
}

.profile-preview-card,
.account-card,
.settings-system-card {
  border: 1px solid rgba(15,81,50,0.08);
  border-radius: 26px;
  background: rgba(255,255,255,0.94);
  box-shadow: 0 12px 42px rgba(15,81,50,0.08);
  padding: 22px;
}

.profile-preview-card {
  text-align: center;
  position: sticky;
  top: 105px;
}

.profile-preview-card h2 {
  margin: 14px 0 4px;
  color: var(--dark-green);
}

.profile-preview-card p {
  color: var(--muted);
  margin-bottom: 12px;
  overflow-wrap: anywhere;
}

.avatar img {
  width: 100%;
  height: 100%;
  object-fit: cover;
  border-radius: inherit;
  display: block;
}

.avatar.large {
  width: 108px;
  height: 108px;
  margin: 0 auto;
  border-radius: 28px;
  font-size: 42px;
  box-shadow: 0 14px 34px rgba(15,81,50,0.18);
}

.profile-meta {
  margin-top: 18px;
  text-align: left;
}

.image-actions {
  display: flex;
  align-items: center;
  gap: 12px;
  flex-wrap: wrap;
  margin-top: -6px;
}

.section-divider {
  margin-top: 8px;
  padding: 14px;
  border-radius: 18px;
  background: var(--soft-green);
  border: 1px solid rgba(15,81,50,0.08);
}

.section-divider strong,
.section-divider span {
  display: block;
}

.section-divider span {
  color: var(--muted);
  font-size: 13px;
  margin-top: 3px;
}

.settings-system-card {
  margin-top: 22px;
}

.modal-card {
  width: min(100%, 760px);
}

@media (max-width: 900px) {
  .settings-grid {
    grid-template-columns: 1fr;
  }

  .profile-preview-card {
    position: static;
  }
}

/* V4 user profile/settings separation */
.profile-only-grid .account-card h2,
.settings-menu-card h2,
.settings-summary-card h2 {
  margin-bottom: 6px;
}

.profile-form-clean {
  margin-top: 18px;
}

.settings-action-layout {
  display: grid;
  grid-template-columns: minmax(240px, 0.7fr) minmax(0, 1.3fr);
  gap: 22px;
  align-items: start;
}


</style>
<?php
}

function upsi_section_features_scripts(): void
{
?>
<script>
/* =========================================================
   V108 JavaScript chunk 3/22
   Bahagian: Features sebelum login
   ========================================================= */
function userDashboard() {
  setTitle('Home', 'User / Golfer');
  const allAvailableCourses = read('courses').filter((c) => c.status === 'Available');
  const drivingCourses = getDrivingCourses(allAvailableCourses);
  const trainers = read('trainers').filter((t) => t.status === 'Available');
  const bookings = userBookingList();
  content().innerHTML = `
    <div class="stat-grid">
      ${statCard('Available Driving Range', drivingCourses.length)}
      ${statCard('Available Trainers', trainers.length)}
      ${statCard('My Bookings', bookings.length)}
    </div>
    <div class="toolbar" style="margin-top:24px">
      <div>
        <p class="eyebrow">Quick Booking</p>
        <h2>Choose Driving Range or Trainer</h2>
        <p class="muted">Driving Range booking uses ball bucket packages. Trainer booking is separated under the Trainer page and does not require bucket selection.</p>
      </div>
      <div class="row-actions">
        <button class="btn btn-primary" data-open-booking>Book Driving Range</button>
        <button class="btn btn-soft" data-go-trainers>View Trainers</button>
      </div>
    </div>
    <div class="card-grid two">
      ${drivingCourses.map(courseCard).join('') || empty('No available driving range.')}
    </div>
    <div class="section-subhead">
      <div>
        <p class="eyebrow">Trainer Details</p>
        <h2>Available Golf Trainers</h2>
        <p class="muted">Trainer booking has its own date and time availability. No ball bucket selection is required.</p>
      </div>
    </div>
    <div class="card-grid two">
      ${trainers.map(trainerCard).join('') || empty('No trainer found.')}
    </div>
  `;
  content().querySelector('[data-open-booking]').addEventListener('click', () => openBookingModal());
  content().querySelector('[data-go-trainers]').addEventListener('click', () => {
    state.currentPage = 'trainers';
    renderNav();
    renderPage();
  });
  bindCourseButtons();
  bindAvailabilityButtons();
  bindTrainerButtons();
}

function userCourses() {
  const courses = getDrivingCourses(read('courses').filter((c) => c.status === 'Available'));
  const drivingCourse = getDrivingCourse(courses);
  if (!drivingCourse) {
    setTitle('Driving Range', 'Driving Range Booking');
    content().innerHTML = empty('No available driving range yet.');
    return;
  }

  setTitle(drivingCourse.name, 'Driving Range Booking');
  content().innerHTML = `
    <section class="app-booking-screen">
      <div class="mobile-booking-heading">
        <div>
          <p class="eyebrow">Driving Range Availability</p>
          <h2>${escapeHtml(drivingCourse.name)}</h2>
          <p class="muted">${escapeHtml(drivingCourse.location)} • ${escapeHtml(drivingCourse.description)}</p>
        </div>
        ${statusPill(drivingCourse.status)}
      </div>

      <div class="booking-tabs preview-tabs single-tab">
        <button class="booking-tab active" type="button">
          <span>⛳</span>
          <strong>Driving Range</strong>
        </button>
      </div>

      ${drivingRangeBookingLayout(drivingCourse)}
    </section>
  `;

  bindDrivingRangeBookingForm(drivingCourse.id);
}

function drivingRangeBookingLayout(course = null) {
  const activeCourse = course || getDrivingCourse();
  const bucketOptions = getBucketOptions(activeCourse);
  const bucketCounts = getBucketCounts(activeCourse);
  const selectedBucket = bucketOptions[0] || BUCKET_OPTIONS[0];
  const selectedMembership = 'non-member';
  const selectedCount = 1;
  const initialAmount = bucketUnitPrice(selectedBucket, selectedMembership) * selectedCount;
  const availableDates = availableDatesFor('driving', activeCourse?.id || '');
  const selectedDate = availableDates[0] || '';
  const availableTimes = selectedDate ? timeOptionsFor('driving', activeCourse?.id || '', selectedDate) : [];
  return `
    <div class="app-booking-card">
      <h2>${escapeHtml(activeCourse?.name || 'Driving Range Booking')}</h2>
      <div class="price-reference-box">
        <strong>Non-member</strong>
        ${bucketOptions.map((bucket) => `<span>${escapeHtml(bucket.label)} - RM ${formatPlainMoney(bucket.nonMemberPrice)}</span>`).join('')}
        <strong>Member</strong>
        ${bucketOptions.map((bucket) => `<span>${escapeHtml(bucket.label)} - RM ${formatPlainMoney(bucket.memberPrice)}</span>`).join('')}
      </div>
      <form id="drivingRangeForm" class="range-form" data-course-id="${escapeHtml(activeCourse?.id || '')}">
        <label class="range-field">Membership category
          <div class="range-control active-control">
            <span class="field-icon">👤</span>
            <select name="membershipType" data-range-membership required>
              <option value="non-member" selected>Non-member</option>
              <option value="member">Member</option>
            </select>
          </div>
        </label>

        <label class="range-field">Ball bucket
          <div class="range-control">
            <span class="field-icon">🗃️</span>
            <select name="bucketOptionId" data-range-bucket required>
              ${bucketOptions.map((bucket) => `<option value="${bucket.id}" ${bucket.id === selectedBucket.id ? 'selected' : ''}>${escapeHtml(bucket.label)}</option>`).join('')}
            </select>
          </div>
        </label>

        <div class="bucket-info" data-bucket-info>
          <span class="info-icon">⛳</span>
          <div>
            <p>${escapeHtml(selectedBucket.description)}</p>
            <strong>${escapeHtml(selectedBucket.label)} per bucket - RM ${formatPlainMoney(bucketUnitPrice(selectedBucket, selectedMembership))} (${membershipLabel(selectedMembership)})</strong>
          </div>
        </div>

        <label class="range-field">Select date
          <div class="range-control">
            <span class="field-icon">📅</span>
            <select name="date" data-range-date required>
              ${dateOptionMarkup(availableDates, selectedDate)}
            </select>
          </div>
        </label>

        <label class="range-field">Select time
          <div class="range-control">
            <span class="field-icon">🕘</span>
            <select name="time" data-range-time required>
              ${timeOptionMarkup(availableTimes, availableTimes[0] || '')}
            </select>
          </div>
        </label>

        <label class="range-field">Number of buckets
          <div class="range-control active-control">
            <span class="field-icon">🧺</span>
            <select name="bucketCount" data-range-count required>
              ${bucketCounts.map((count) => `<option value="${count}">${count} ${count === 1 ? 'bucket' : 'buckets'}</option>`).join('')}
            </select>
          </div>
        </label>

        <div class="calculation-row">
          <div><span>🔢</span> <span data-range-formula>${membershipLabel(selectedMembership)} • ${selectedCount} × ${selectedBucket.balls} balls = ${selectedBucket.balls} balls</span></div>
          <strong data-range-total>RM ${formatPlainMoney(initialAmount)}</strong>
        </div>

        <div class="qr-payment-panel">
          <div class="qr-payment-head">
            <div>
              <h3>QR Payment</h3>
              <p>Scan the QR code provided by the administrator, then return here to confirm your payment.</p>
            </div>
            <strong data-range-payment-total>RM ${formatPlainMoney(initialAmount)}</strong>
          </div>
          ${qrImageMarkup('qr-mini')}
        </div>

        <button class="btn btn-primary full" type="submit">Submit Booking</button>
      </form>
    </div>
  `;
}

function trainerBookingLayout() {
  const trainers = read('trainers').filter((t) => t.status === 'Available');
  return `
    <div class="app-booking-card">
      <div class="toolbar compact-toolbar">
        <div>
          <p class="eyebrow">Trainer</p>
          <h2>Choose professional golf trainer</h2>
        </div>
      </div>
      <div class="card-grid two">
        ${trainers.map(trainerCard).join('') || empty('No trainer found.')}
      </div>
    </div>
  `;
}

function bindDrivingRangeBookingForm(courseId = '') {
  const form = document.getElementById('drivingRangeForm');
  if (!form) return;

  const getCourse = () => read('courses').find((c) => c.id === (courseId || form.dataset.courseId)) || getDrivingCourse();

  const refresh = () => {
    const course = getCourse();
    const membershipType = form.membershipType.value || 'non-member';
    const bucket = bucketById(form.bucketOptionId.value, course);
    const count = Number(form.bucketCount.value || 1);
    const unitPrice = bucketUnitPrice(bucket, membershipType);
    const totalBalls = bucket.balls * count;
    const amount = unitPrice * count;

    const info = form.querySelector('[data-bucket-info]');
    info.innerHTML = `
      <span class="info-icon">⛳</span>
      <div>
        <p>${escapeHtml(bucket.description)}</p>
        <strong>${escapeHtml(bucket.label)} per bucket - RM ${formatPlainMoney(unitPrice)} (${membershipLabel(membershipType)})</strong>
      </div>
    `;
    form.querySelector('[data-range-formula]').textContent = `${membershipLabel(membershipType)} • ${count} × ${bucket.balls} balls = ${totalBalls} balls`;
    form.querySelector('[data-range-total]').textContent = `RM ${formatPlainMoney(amount)}`;
    form.querySelector('[data-range-payment-total]').textContent = `RM ${formatPlainMoney(amount)}`;
  };

  const refreshScheduleOptions = () => {
    const course = getCourse();
    const times = timeOptionsFor('driving', course.id, form.date.value);
    form.time.innerHTML = timeOptionMarkup(times, times[0] || '');
  };

  form.membershipType.addEventListener('change', refresh);
  form.bucketOptionId.addEventListener('change', refresh);
  form.bucketCount.addEventListener('change', refresh);
  form.date.addEventListener('change', refreshScheduleOptions);
  refresh();
  refreshScheduleOptions();

  form.addEventListener('submit', (event) => {
    event.preventDefault();
    const course = getCourse();
    const membershipType = form.membershipType.value || 'non-member';
    const bucket = bucketById(form.bucketOptionId.value, course);
    const count = Number(form.bucketCount.value || 1);
    const unitPrice = bucketUnitPrice(bucket, membershipType);
    const amount = unitPrice * count;
    const bookings = read('bookings');

    if (!form.date.value || !form.time.value) {
      toast('Please select an available date and tee time.');
      return;
    }

    bookings.unshift({
      id: makeId('B'),
      bookingType: 'driving',
      userId: state.session.id,
      customerName: state.session.fullName,
      customerEmail: state.session.email,
      courseId: course.id,
      courseName: course.name,
      trainerId: '',
      trainerName: 'No trainer',
      bucketOptionId: bucket.id,
      bucketLabel: bucket.label,
      bucketBalls: bucket.balls,
      bucketPrice: unitPrice,
      membershipType,
      bucketCount: count,
      totalBalls: bucket.balls * count,
      date: form.date.value,
      time: form.time.value,
      amount,
      bookingStatus: 'Pending Confirmation',
      paymentStatus: 'Pending Verification',
      paymentMethod: 'QR Payment',
      receiptNote: '',
      receiptImage: '',
      hiddenForUsers: [],
      hiddenForAdmin: false,
      cancelReason: '',
      cancelledBy: '',
      cancelledById: '',
      cancellationType: '',
      cancelledAt: '',
      createdAt: new Date().toISOString(),
    });

    write('bookings', bookings);
    state.currentPage = 'mybookings';
    renderNav();
    renderPage();
    toast('Driving range booking submitted successfully.');
  });
}

function userTrainers() {
  setTitle('Trainers', 'Trainer Booking');
  const trainers = read('trainers').filter((t) => t.status === 'Available');
  content().innerHTML = `
    <div class="toolbar">
      <div>
        <p class="eyebrow">Pelatih</p>
        <h2>Book trainer session</h2>
        <p class="muted">Trainer booking is separated from Driving Range booking. No ball bucket selection is required.</p>
      </div>
      ${searchBox('Search trainer, phone, email or address')}
    </div>
    <div class="trainer-reference-card card">
      <p class="eyebrow">Trainer List</p>
      <h2>Available Pelatih</h2>
      <p>Nordin bin Yahya<br>Mohd Muhayuddin bin Md Zahid</p>
    </div>
    <div style="height:18px"></div>
    <div class="card-grid">
      ${filterItems(trainers, ['name', 'phone', 'email', 'address', 'description']).map(trainerCard).join('') || empty('No trainer found.')}
    </div>
  `;
  bindSearch(() => userTrainers());
  bindAvailabilityButtons();
  bindTrainerButtons();
}

function userBookingList() {
  return read('bookings').filter((b) => b.userId === state.session.id && !isBookingHiddenForUser(b));
}

function userBookings() {
  setTitle('My Bookings', 'Booking History');
  const bookings = userBookingList().sort((a, b) => new Date(b.createdAt) - new Date(a.createdAt));
  content().innerHTML = `
    <div class="toolbar">
      <div>
        <p class="eyebrow">History</p>
        <h2>View, cancel or reschedule booking</h2>
      </div>
      <button class="btn btn-primary" data-open-booking>New Booking</button>
    </div>
    ${bookingTable(bookings, 'user')}
  `;
  content().querySelector('[data-open-booking]').addEventListener('click', () => openBookingModal());
  bindBookingActions('user');
}

function userPayments() {
  setTitle('Payment', 'QR Payment and Receipt');
  const bookings = userBookingList().filter((b) => b.bookingStatus !== 'Cancelled' && b.paymentMethod === 'QR Payment');
  const settings = read('settings');
  content().innerHTML = `
    <div class="card-grid two">
      <div class="card">
        <p class="eyebrow">Payment Method</p>
        <h2>${escapeHtml(settings.paymentName)}</h2>
        <p>${escapeHtml(settings.paymentInfo)}</p>
        <p class="muted">${escapeHtml(settings.bookingNotice || '')}</p>
        <div class="qr-box">
          ${qrImageMarkup('qr-code')}
          <strong>${escapeHtml(settings.paymentName)}</strong>
          <p class="muted">QR image is managed by administrator from Website Settings.</p>
        </div>
      </div>
      <div class="card">
        <p class="eyebrow">Instruction</p>
        <h2>How to confirm payment</h2>
        <ul class="meta-list">
          <li><span>Step 1</span><strong>Scan QR or pay at counter</strong></li>
          <li><span>Step 2</span><strong>Click Upload Receipt</strong></li>
          <li><span>Step 3</span><strong>Wait admin verification</strong></li>
        </ul>
      </div>
    </div>
    <div style="height:22px"></div>
    ${bookingTable(bookings, 'payment')}
  `;
  bindBookingActions('payment');
}

function userProfile() {
  const user = getFreshSessionUser();
  setTitle('My Profile', 'User Profile');
  content().innerHTML = `
    <div class="settings-grid profile-only-grid">
      <aside class="profile-preview-card strong-border-card">
        ${avatarMarkup(user, 'avatar large')}
        <h2>${escapeHtml(user.fullName)}</h2>
        <p>${escapeHtml(user.email)}</p>
        <span class="status-pill confirmed">User / Golfer</span>
        <ul class="meta-list profile-meta">
          <li><span>Full Name</span><strong>${escapeHtml(user.fullName || '-')}</strong></li>
          <li><span>Email</span><strong>${escapeHtml(user.email || '-')}</strong></li>
          <li><span>Phone</span><strong>${escapeHtml(user.phone || '-')}</strong></li>
          <li><span>Age</span><strong>${escapeHtml(user.age || '-')}</strong></li>
          <li><span>Birthday</span><strong>${escapeHtml(user.birthday || '-')}</strong></li>
          <li><span>Login Provider</span><strong>${escapeHtml(user.loginProvider || 'Email')}</strong></li>
          <li><span>Address / Notes</span><strong>${escapeHtml(user.address || '-')}</strong></li>
        </ul>
      </aside>

      <div class="card account-card strong-border-card">
        <p class="eyebrow">Profile Information</p>
        <h2>View and edit profile details</h2>
        <p class="muted">This page combines profile and account settings for user.</p>
        <form id="profileForm" class="form-grid profile-form-clean">
          <label class="wide">Profile Picture<input name="profileImage" type="file" accept="image/*"></label>
          <div class="image-actions wide">
            <button class="btn btn-soft" type="button" data-remove-profile-image>Remove Profile Picture</button>
            <span class="muted">JPG/PNG recommended. Saved to Supabase profile record.</span>
          </div>
          <label>Full Name<input name="fullName" value="${escapeHtml(user.fullName)}" required></label>
          <label>Email Address<input value="${escapeHtml(user.email)}" disabled></label>
          <label>Phone Number<input name="phone" value="${escapeHtml(user.phone || '')}" required></label>
          <label>Age<input name="age" type="number" min="1" max="120" value="${escapeHtml(user.age || '')}" placeholder="Optional"></label>
          <label>Birthday<input name="birthday" type="date" value="${escapeHtml(user.birthday || '')}"></label>
          <label>Address / Notes<input name="address" value="${escapeHtml(user.address || '')}" placeholder="Optional"></label>
          <button class="btn btn-primary wide" type="submit">Save Profile</button>
        </form>

        <div class="profile-account-actions">
          <button class="setting-link-button" type="button" data-open-change-password>
            <span class="setting-link-icon">🔐</span>
            <span>
              <strong>Change Password</strong>
              <small>Open secure password form in a popup window.</small>
            </span>
            <b>Change</b>
          </button>
          <button class="setting-link-button" type="button" data-toggle-theme>
            <span class="setting-link-icon">🌓</span>
            <span>
              <strong data-theme-label>Switch to Dark Mode</strong>
              <small data-theme-status>Light mode is active</small>
            </span>
            <b>Theme</b>
          </button>
        </div>
      </div>
    </div>
  `;
  bindProfileForm();
  const passwordBtn = content().querySelector('[data-open-change-password]');
  if (passwordBtn) passwordBtn.addEventListener('click', openChangePasswordModal);
  bindThemeToggle();
}

function userSettings() {
  state.currentPage = 'profile';
  renderNav();
  userProfile();
}

function bindUserSettings() {
  const goProfile = content().querySelector('[data-go-profile]');
  const passwordBtn = content().querySelector('[data-open-change-password]');
  if (goProfile) {
    goProfile.addEventListener('click', () => {
      state.currentPage = 'profile';
      renderNav();
      userProfile();
    });
  }
  if (passwordBtn) passwordBtn.addEventListener('click', openChangePasswordModal);
}

function bindProfileForm() {
  const form = document.getElementById('profileForm');
  if (!form) return;

  const saveUser = async (profileImageValue = undefined) => {
    const formData = new FormData(form);
    const saved = await saveCurrentProfileToSupabase({
      fullName: formData.get('fullName'),
      phone: formData.get('phone'),
      age: formData.get('age') || null,
      birthday: formData.get('birthday') || null,
      address: formData.get('address'),
      loginProvider: 'Email',
      profileImage: profileImageValue,
    });
    if (!saved) return;
    renderProfileChip();
    userProfile();
    toast('Profile updated successfully.');
  };

  form.addEventListener('submit', async (event) => {
    event.preventDefault();
    const file = form.profileImage.files[0];
    if (!file) return saveUser(undefined);
    if (!file.type.startsWith('image/')) return toast('Please upload an image file only.');
    if (file.size > 2500000) return toast('Image is too large. Please use an image below 2.5MB.');
    toast('Uploading profile picture...');
    const current = getFreshSessionUser();
    const publicUrl = await uploadProfileImageToSupabase(file, current?.id || current?.userId || current?.email || 'profile');
    if (!publicUrl) return;
    await saveUser(publicUrl);
  });

  const removeBtn = content().querySelector('[data-remove-profile-image]');
  if (removeBtn) {
    removeBtn.addEventListener('click', () => {
      confirmAction({
        title: 'Remove Profile Picture',
        message: 'Are you sure you want to remove your profile picture?',
        confirmText: 'Remove Picture',
        danger: true,
        onConfirm: async () => {
          const saved = await saveCurrentProfileToSupabase({
            fullName: form.fullName.value,
            phone: form.phone.value,
            age: form.age ? form.age.value : null,
            birthday: form.birthday ? form.birthday.value : null,
            address: form.address.value,
            loginProvider: 'Email',
            profileImage: '',
          });
          if (!saved) return;
          renderProfileChip();
          userProfile();
          toast('Profile picture removed.');
        },
      });
    });
  }
}

function openChangePasswordModal() {
  openModal(`
    <div class="modal-head">
      <div>
        <p class="eyebrow">Account Security</p>
        <h2>Change Password</h2>
        <p class="muted">Enter your current password before saving a new password.</p>
      </div>
      <button class="close-btn" data-close-modal>&times;</button>
    </div>
    <form id="changePasswordForm" class="form-stack password-modal-form">
      <label>Current Password<input name="currentPassword" type="password" placeholder="Current password" required></label>
      <label>New Password<input name="newPassword" type="password" minlength="6" placeholder="Minimum 6 characters" required></label>
      <label>Confirm New Password<input name="confirmPassword" type="password" minlength="6" placeholder="Repeat new password" required></label>
      <button class="btn btn-primary full" type="submit">Update Password</button>
    </form>
  `);

  const form = document.getElementById('changePasswordForm');
  form.addEventListener('submit', async (event) => {
    event.preventDefault();
    const formData = new FormData(form);
    const currentPassword = formData.get('currentPassword');
    const newPassword = formData.get('newPassword');
    const confirmPassword = formData.get('confirmPassword');

    if (!newPassword || newPassword.length < 6) return toast('New password must be at least 6 characters.');
    if (newPassword !== confirmPassword) return toast('New password confirmation does not match.');
    if (!SUPABASE_MODE) return toast('Supabase client is not available.');

    const { error: verifyError } = await supabaseClient.auth.signInWithPassword({
      email: state.session.email,
      password: currentPassword,
    });
    if (verifyError) return toast('Current password is incorrect.');

    const { error: updateError } = await supabaseClient.auth.updateUser({ password: newPassword });
    if (updateError) {
      console.error('Password update error:', updateError);
      toast(updateError.message || 'Failed to update password.');
      return;
    }

    closeModal();
    toast('Password changed successfully.');
  });
}

function accountSettings(includeSystemSettings = false, sourcePage = 'settings') {
  const user = getFreshSessionUser();
  setTitle(includeSystemSettings ? 'Profile' : 'My Profile', includeSystemSettings ? 'Administrator Profile' : 'User Profile');
  const settings = read('settings');
  content().innerHTML = `
    <div class="settings-grid">
      <aside class="profile-preview-card strong-border-card">
        ${avatarMarkup(user, 'avatar large')}
        <h2>${escapeHtml(user.fullName)}</h2>
        <p>${escapeHtml(user.email)}</p>
        <span class="status-pill confirmed">${user.role === 'admin' ? 'Administrator' : 'User / Golfer'}</span>
        <ul class="meta-list profile-meta">
          <li><span>Phone</span><strong>${escapeHtml(user.phone || '-')}</strong></li>
          <li><span>Age</span><strong>${escapeHtml(user.age || '-')}</strong></li>
          <li><span>Birthday</span><strong>${escapeHtml(user.birthday || '-')}</strong></li>
          <li><span>Status</span><strong>${escapeHtml(user.status || 'Active')}</strong></li>
          <li><span>Joined</span><strong>${new Date(user.createdAt || Date.now()).toLocaleDateString()}</strong></li>
        </ul>
      </aside>

      <div class="card account-card strong-border-card">
        <p class="eyebrow">Profile Information</p>
        <h2>View and edit account profile</h2>
        <form id="accountForm" class="form-grid">
          <label class="wide">Profile Picture<input name="profileImage" type="file" accept="image/*"></label>
          <div class="image-actions wide">
            <button class="btn btn-soft" type="button" data-remove-profile-image>Remove Profile Picture</button>
            <span class="muted">JPG/PNG recommended. Saved to Supabase profile record.</span>
          </div>
          <label>Full Name<input name="fullName" value="${escapeHtml(user.fullName)}" required></label>
          <label>Email Address<input value="${escapeHtml(user.email)}" disabled></label>
          <label>Phone Number<input name="phone" value="${escapeHtml(user.phone || '')}" required></label>
          <label>Age<input name="age" type="number" min="1" max="120" value="${escapeHtml(user.age || '')}" placeholder="Optional"></label>
          <label>Birthday<input name="birthday" type="date" value="${escapeHtml(user.birthday || '')}"></label>
          <label>Address / Notes<input name="address" value="${escapeHtml(user.address || '')}" placeholder="Optional"></label>
          <button class="btn btn-primary wide" type="submit">Save Profile</button>
        </form>

        <div class="profile-account-actions">
          <button class="setting-link-button" type="button" data-open-change-password>
            <span class="setting-link-icon">🔐</span>
            <span>
              <strong>Change Password</strong>
              <small>Open secure password form in a popup window.</small>
            </span>
            <b>Change</b>
          </button>
          <button class="setting-link-button" type="button" data-toggle-theme>
            <span class="setting-link-icon">🌓</span>
            <span>
              <strong data-theme-label>Switch to Dark Mode</strong>
              <small data-theme-status>Light mode is active</small>
            </span>
            <b>Theme</b>
          </button>
        </div>
      </div>
    </div>

    ${includeSystemSettings ? `
      <div class="card settings-system-card strong-border-card">
        <p class="eyebrow">Website Settings</p>
        <h2>Update system information and QR payment</h2>
        <form id="settingsForm" class="form-grid">
          <label class="wide">System Name<input name="systemName" value="${escapeHtml(settings.systemName)}" required></label>
          <label>Organisation / Range Name<input name="organisationName" value="${escapeHtml(settings.organisationName || '')}" required></label>
          <label>Payment Name<input name="paymentName" value="${escapeHtml(settings.paymentName)}" required></label>
          <label>Contact Email<input name="contactEmail" type="email" value="${escapeHtml(settings.contactEmail)}" required></label>
          <label>Contact Phone<input name="contactPhone" value="${escapeHtml(settings.contactPhone || '')}" required></label>
          <label class="wide">QR Payment Image<input name="qrImage" type="file" accept="image/*"></label>
          <div class="image-actions wide">
            <button class="btn btn-soft" type="button" data-remove-qr-image>Remove QR Image</button>
            <span class="muted">Upload JPG/PNG QR. The same QR will appear on User Payment and Booking pages.</span>
          </div>
          <div class="qr-settings-preview wide">
            ${qrImageMarkup('qr-code')}
          </div>
          <label class="wide">Payment Instruction<textarea name="paymentInfo" required>${escapeHtml(settings.paymentInfo)}</textarea></label>
          <label class="wide">Booking Notice<textarea name="bookingNotice" required>${escapeHtml(settings.bookingNotice || '')}</textarea></label>
          <button class="btn btn-primary wide" type="submit">Save Website Settings</button>
        </form>
      </div>
    ` : ''}

    ${includeSystemSettings ? adminAccountManagementSection(user) : ''}
  `;

  bindAccountForm(includeSystemSettings, sourcePage);
  const passwordBtn = content().querySelector('[data-open-change-password]');
  if (passwordBtn) passwordBtn.addEventListener('click', openChangePasswordModal);
  bindThemeToggle();
  if (includeSystemSettings) {
    bindSystemSettingsForm();
    bindAdminAccountManagement();
  }
}

function adminAccountManagementSection(currentUser) {
  const admins = getAdminUsers();
  const canManageAdmins = isPrimaryAdmin(currentUser);
  return `
    <div class="card settings-system-card strong-border-card admin-account-card">
      <div class="card-top">
        <div>
          <p class="eyebrow">Admin Account Control</p>
          <h2>Administrator accounts</h2>
          <p class="muted">Only the main admin can register, edit, deactivate or delete additional admin accounts.</p>
        </div>
        <div class="row-actions">
          ${canManageAdmins ? '<button class="btn btn-warning-soft" type="button" data-inactive-admin-records>Inactive Admin Records</button><button class="btn btn-primary" type="button" data-add-admin-account>Register Admin</button>' : '<span class="status-pill pending">View Only</span>'}
        </div>
      </div>
      <div class="table-card admin-account-table"><div class="table-wrap"><table>
        <thead><tr><th>Admin Name</th><th>Email</th><th>Phone</th><th>Type</th><th>Status</th><th>Inactive Reason</th><th>Action</th></tr></thead>
        <tbody>
          ${admins.map((admin) => `
            <tr>
              <td><strong>${escapeHtml(admin.fullName)}</strong></td>
              <td>${escapeHtml(admin.email)}</td>
              <td>${escapeHtml(admin.phone || '-')}</td>
              <td>${isPrimaryAdmin(admin) ? '<span class="status-pill confirmed">Main Admin</span>' : '<span class="status-pill pending">Additional Admin</span>'}</td>
              <td>${statusPill(admin.status || 'Active')}</td>
              <td>${admin.status === 'Inactive' ? escapeHtml(admin.inactiveReason || 'No reason recorded') : '<span class="muted">-</span>'}</td>
              <td>
                ${canManageAdmins && !isPrimaryAdmin(admin) ? `<button class="btn btn-soft" type="button" data-edit-admin-account="${admin.id}">Edit</button>` : '<span class="muted">Protected</span>'}
              </td>
            </tr>
          `).join('')}
        </tbody>
      </table></div></div>
    </div>
  `;
}

function bindAdminAccountManagement() {
  const addBtn = content().querySelector('[data-add-admin-account]');
  if (addBtn) addBtn.addEventListener('click', () => openAdminAccountForm());
  const inactiveRecordsBtn = content().querySelector('[data-inactive-admin-records]');
  if (inactiveRecordsBtn) inactiveRecordsBtn.addEventListener('click', openInactiveAdminRecordsModal);
  content().querySelectorAll('[data-edit-admin-account]').forEach((btn) => {
    btn.addEventListener('click', () => {
      const admin = read('users').find((user) => user.id === btn.dataset.editAdminAccount && user.role === 'admin');
      if (admin) openAdminAccountForm(admin);
    });
  });
}


function openInactiveAdminRecordsModal() {
  const records = getAdminUsers().filter((admin) => admin.status === 'Inactive');
  openModal(`
    <div class="modal-head">
      <div>
        <p class="eyebrow">Inactive Admin Records</p>
        <h2>Additional Admin Inactive History</h2>
        <p class="muted">These records remain visible as reference for why an additional admin was deactivated.</p>
      </div>
      <button class="close-btn" data-close-modal>&times;</button>
    </div>
    ${records.length ? `
      <div class="table-card"><div class="table-wrap"><table>
        <thead><tr><th>Name</th><th>Email</th><th>Reason</th><th>Inactive Date</th></tr></thead>
        <tbody>${records.map((admin) => `
          <tr>
            <td><strong>${escapeHtml(admin.fullName)}</strong></td>
            <td>${escapeHtml(admin.email)}</td>
            <td>${escapeHtml(admin.inactiveReason || 'No reason recorded')}</td>
            <td>${admin.inactiveAt ? new Date(admin.inactiveAt).toLocaleString() : '-'}</td>
          </tr>
        `).join('')}</tbody>
      </table></div></div>
    ` : empty('No inactive additional admin account yet.')}
  `);
}

function openAdminAccountForm(admin = null) {
  if (!currentUserIsPrimaryAdmin()) {
    toast('Only the main admin can manage administrator accounts.');
    return;
  }
  if (admin && isPrimaryAdmin(admin)) {
    toast('Main admin account is protected and cannot be edited here.');
    return;
  }

  openModal(`
    <div class="modal-head">
      <div>
        <p class="eyebrow">Administrator Access</p>
        <h2>${admin ? 'Edit Additional Admin' : 'Register Additional Admin'}</h2>
        <p class="muted">Additional admins can login through the Admin Login panel.</p>
      </div>
      <button class="close-btn" data-close-modal>&times;</button>
    </div>
    <form id="adminAccountForm" class="form-grid">
      <label>Full Name<input name="fullName" value="${escapeHtml(admin?.fullName || '')}" required></label>
      <label>Email Address<input name="email" type="email" value="${escapeHtml(admin?.email || '')}" ${admin ? 'disabled' : ''} required></label>
      <label>Phone Number<input name="phone" value="${escapeHtml(admin?.phone || '')}" required></label>
      <label>Status<select name="status"><option ${admin?.status === 'Active' || !admin ? 'selected' : ''}>Active</option><option ${admin?.status === 'Inactive' ? 'selected' : ''}>Inactive</option></select></label>
      <label class="wide">Address / Notes<input name="address" value="${escapeHtml(admin?.address || '')}" placeholder="Optional"></label>
      ${admin ? `<label class="wide">Inactive Reason / Reference<textarea name="inactiveReason" placeholder="Required if status is changed to Inactive.">${escapeHtml(admin?.inactiveReason || '')}</textarea></label>` : ''}
      <label class="wide">${admin ? 'New Password (optional)' : 'Password'}<input name="password" type="password" minlength="6" placeholder="${admin ? 'Leave blank to keep current password' : 'Minimum 6 characters'}" ${admin ? '' : 'required'}></label>
      <button class="btn btn-primary wide" type="submit">${admin ? 'Save Admin Account' : 'Register Admin Account'}</button>
      ${admin ? '<div class="wide danger-zone"><p><strong>Delete Admin Account</strong><br><span>Use this only when the additional admin profile should be removed from website records.</span></p><button class="btn btn-danger-soft" type="button" data-delete-admin-inside-form>Delete Admin Account</button></div>' : ''}
    </form>
  `);

  const form = document.getElementById('adminAccountForm');
  form.addEventListener('submit', async (event) => {
    event.preventDefault();
    const formData = new FormData(form);
    const users = read('users');
    const email = admin ? admin.email.toLowerCase() : formData.get('email').trim().toLowerCase();
    const existingUserForEmail = users.find((user) => user.email.toLowerCase() === email && user.id !== admin?.id);
    if (existingUserForEmail && !admin && existingUserForEmail.role === 'admin') return toast('This email is already registered as an admin.');

    const passwordValue = formData.get('password') || '';
    const nextStatus = formData.get('status');
    const inactiveReasonInput = String(formData.get('inactiveReason') || '').trim();
    if (admin && nextStatus === 'Inactive' && admin.status !== 'Inactive' && !inactiveReasonInput) {
      toast('Please enter a reason before deactivating this additional admin account.');
      return;
    }
    const payload = {
      id: admin?.id || makeId('A'),
      userId: admin?.userId || '',
      fullName: formData.get('fullName').trim(),
      email,
      phone: formData.get('phone').trim(),
      password: passwordValue || admin?.password || '',
      role: 'admin',
      supabaseRole: 'admin',
      status: nextStatus,
      profileImage: admin?.profileImage || '',
      address: formData.get('address').trim(),
      inactiveReason: nextStatus === 'Inactive' ? (inactiveReasonInput || admin?.inactiveReason || 'No reason recorded') : '',
      inactiveAt: nextStatus === 'Inactive' ? (admin?.inactiveAt || new Date().toISOString()) : '',
      inactiveBy: nextStatus === 'Inactive' ? (state.session?.id || '') : '',
      createdAt: admin?.createdAt || new Date().toISOString(),
    };

    const saveButton = form.querySelector('button[type="submit"]');
    const originalButtonText = saveButton?.textContent || '';
    if (saveButton) {
      saveButton.disabled = true;
      saveButton.textContent = admin ? 'Saving...' : 'Registering...';
    }

    async function finishSave(updatedUser = payload, message = '') {
      const localUsers = read('users');
      const index = localUsers.findIndex((user) => user.id === updatedUser.id || user.email?.toLowerCase() === updatedUser.email?.toLowerCase());
      if (index >= 0) localUsers[index] = { ...localUsers[index], ...updatedUser };
      else localUsers.push(updatedUser);
      setLocalData('users', localUsers);
      await loadSupabaseDataToLocal({ requireAuth: true });
      closeModal();
      adminSettings();
      toast(message || (admin ? 'Admin account updated.' : 'Additional admin account registered.'));
    }

    async function saveAdminToSupabase() {
      if (!SUPABASE_MODE) {
        await finishSave(payload, 'Saved locally. Supabase is not available.');
        return;
      }

      if (!admin || !isUuid(admin.id)) {
        if (existingUserForEmail && existingUserForEmail.role === 'user') {
          const promoted = await promoteSupabaseProfileToAdmin({
            ...existingUserForEmail,
            ...payload,
            id: existingUserForEmail.id,
            userId: existingUserForEmail.userId,
          });
          if (promoted.error) {
            toast(promoted.error.message || 'Failed to promote existing user profile to admin.');
            return;
          }
          const promotedUser = promoted.data ? profileToUser(promoted.data) : { ...existingUserForEmail, ...payload };
          await finishSave({ ...promotedUser, role: 'admin', supabaseRole: 'admin' }, 'Existing user promoted to additional admin.');
          return;
        }

        if (!passwordValue || passwordValue.length < 6) {
          toast('Password must be at least 6 characters to create a login account.');
          return;
        }
        const { data: currentSessionData } = await supabaseClient.auth.getSession();
        const currentAdminSession = currentSessionData?.session;
        const result = await createSupabaseAuthAccount({
          fullName: payload.fullName,
          email: payload.email,
          phone: payload.phone,
          password: passwordValue,
          role: 'admin',
          status: accountStatusToDb(payload.status),
          address: payload.address,
        }, { restoreSession: currentAdminSession });

        if (result.error) {
          if (String(result.error.message || '').toLowerCase().includes('rate limit')) {
            toast('Supabase email rate limit exceeded. Turn off Confirm Email in Supabase Auth settings or wait before trying again.');
          } else {
            toast(result.error.message || 'Failed to create admin login in Supabase.');
          }
          return;
        }

        const promoted = await promoteSupabaseProfileToAdmin({
          ...payload,
          userId: result.profile?.user_id || result.data?.user?.id || payload.userId,
        });
        if (promoted.error) {
          toast(promoted.error.message || 'Admin account was created, but failed to set profile role as admin.');
          return;
        }

        const newUser = promoted.data ? profileToUser(promoted.data) : (result.profile ? profileToUser(result.profile) : payload);
        await finishSave({ ...payload, ...newUser, role: 'admin', supabaseRole: 'admin' }, 'Additional admin account registered in Supabase.');
        return;
      }

      const { data, error } = await updateSupabaseProfileByEmail(payload.email, {
        full_name: payload.fullName,
        phone: payload.phone || null,
        address: payload.address || null,
        role: 'admin',
        status: accountStatusToDb(payload.status),
      });

      if (error) {
        toast(error.message || 'Failed to update admin account in Supabase.');
        return;
      }

      if (passwordValue) {
        toast('Admin details updated. Password change for another admin must be done in Supabase Authentication.');
      }
      await finishSave(data ? profileToUser(data) : payload, 'Admin account updated in Supabase.');
    }

    const runSave = async () => {
      try {
        await saveAdminToSupabase();
      } finally {
        if (saveButton) {
          saveButton.disabled = false;
          saveButton.textContent = originalButtonText;
        }
      }
    };

    if (admin && admin.status !== payload.status && payload.status === 'Inactive') {
      confirmAction({
        title: 'Deactivate Admin Account',
        message: `Are you sure you want to deactivate ${payload.fullName}? This admin will not be able to login until reactivated.`,
        confirmText: 'Deactivate Admin',
        danger: true,
        onConfirm: runSave,
      });
    } else {
      await runSave();
    }
  });

  const deleteBtn = document.querySelector('[data-delete-admin-inside-form]');
  if (deleteBtn && admin) {
    deleteBtn.addEventListener('click', () => {
      confirmAction({
        title: 'Delete Admin Account',
        message: `Are you sure you want to delete ${admin.fullName}? This action cannot be undone.`,
        confirmText: 'Delete Admin',
        danger: true,
        onConfirm: async () => {
          const { error } = await deleteProfileFromSupabase(admin);
          if (error) {
            toast(error.message || 'Failed to delete admin account from Supabase.');
            return;
          }
          setLocalData('users', read('users').filter((user) => user.id !== admin.id));
          closeModal();
          adminSettings();
          toast('Additional admin account deleted.');
        },
      });
    });
  }
}

async function promoteSupabaseProfileToAdmin(user = {}) {
  if (!SUPABASE_MODE) return { data: null, error: null };
  const email = String(user.email || '').trim().toLowerCase();
  const payload = {
    full_name: user.fullName || email,
    phone: user.phone || null,
    address: user.address || null,
    role: 'admin',
    status: accountStatusToDb(user.status || 'Active'),
  };

  let lastResult = { data: null, error: null };
  for (let attempt = 0; attempt < 6; attempt += 1) {
    if (attempt) await new Promise((resolve) => setTimeout(resolve, 500));
    let query = supabaseClient.from(DB_TABLES.profiles).update(payload);
    if (user.userId && isUuid(user.userId)) query = query.eq('user_id', user.userId);
    else query = query.eq('email', email);

    lastResult = await query.select('*').maybeSingle();
    if (lastResult.error) continue;
    if (lastResult.data?.role === 'admin') return lastResult;
  }

  if (!lastResult.error && lastResult.data?.role !== 'admin') {
    lastResult.error = new Error('Profile was created, but Supabase kept the role as user. Please check profiles RLS update policy.');
  }
  return lastResult;
}

function bindAccountForm(includeSystemSettings = false, sourcePage = 'settings') {
  const form = document.getElementById('accountForm');
  if (!form) return;

  const saveUser = async (profileImageValue = undefined) => {
    const formData = new FormData(form);
    const saved = await saveCurrentProfileToSupabase({
      fullName: formData.get('fullName'),
      phone: formData.get('phone'),
      age: formData.get('age') || null,
      birthday: formData.get('birthday') || null,
      address: formData.get('address'),
      loginProvider: 'Email',
      profileImage: profileImageValue,
    });
    if (!saved) return;
    renderProfileChip();
    accountSettings(includeSystemSettings, sourcePage);
    toast('Profile saved successfully.');
  };

  form.addEventListener('submit', async (event) => {
    event.preventDefault();
    const file = form.profileImage.files[0];
    if (!file) return saveUser(undefined);
    if (!file.type.startsWith('image/')) return toast('Please upload an image file only.');
    if (file.size > 2500000) return toast('Image is too large. Please use an image below 2.5MB.');
    toast('Uploading profile picture...');
    const current = getFreshSessionUser();
    const publicUrl = await uploadProfileImageToSupabase(file, current?.id || current?.userId || current?.email || 'profile');
    if (!publicUrl) return;
    await saveUser(publicUrl);
  });

  const removeBtn = content().querySelector('[data-remove-profile-image]');
  if (removeBtn) {
    removeBtn.addEventListener('click', () => {
      confirmAction({
        title: 'Remove Profile Picture',
        message: 'Are you sure you want to remove your profile picture?',
        confirmText: 'Remove Picture',
        danger: true,
        onConfirm: async () => {
          const saved = await saveCurrentProfileToSupabase({
            fullName: form.fullName.value,
            phone: form.phone.value,
            age: form.age ? form.age.value : null,
            birthday: form.birthday ? form.birthday.value : null,
            address: form.address.value,
            loginProvider: 'Email',
            profileImage: '',
          });
          if (!saved) return;
          renderProfileChip();
          accountSettings(includeSystemSettings, sourcePage);
          toast('Profile picture removed.');
        },
      });
    });
  }
}

function bindSystemSettingsForm() {
  const settingsForm = document.getElementById('settingsForm');
  if (!settingsForm) return;

  const saveSettings = async (qrImageValue) => {
    const form = new FormData(settingsForm);
    const previous = read('settings');
    const nextSettings = {
      ...previous,
      systemName: form.get('systemName').trim(),
      organisationName: form.get('organisationName').trim(),
      paymentName: form.get('paymentName').trim(),
      contactEmail: form.get('contactEmail').trim(),
      contactPhone: form.get('contactPhone').trim(),
      paymentInfo: form.get('paymentInfo').trim(),
      bookingNotice: form.get('bookingNotice').trim(),
      qrImage: typeof qrImageValue === 'string' ? qrImageValue : (previous.qrImage || ''),
      dataVersion: 11,
    };

    write('settings', nextSettings);
    if (SUPABASE_MODE && supabaseSyncReady) {
      await syncSettingsToSupabase(nextSettings);
    }
    toast('Website settings saved. QR payment image updated.');
    adminSettings();
  };

  settingsForm.addEventListener('submit', async (event) => {
    event.preventDefault();
    const file = settingsForm.qrImage.files[0];
    if (!file) return saveSettings(undefined);
    if (!file.type.startsWith('image/')) return toast('Please upload an image file only.');
    if (file.size > 2500000) return toast('QR image is too large. Please use an image below 2.5MB.');

    toast('Uploading QR image...');
    const publicUrl = await uploadQrImageToSupabase(file);
    if (!publicUrl) return;
    await saveSettings(publicUrl);
  });

  const removeQrBtn = content().querySelector('[data-remove-qr-image]');
  if (removeQrBtn) {
    removeQrBtn.addEventListener('click', () => {
      confirmAction({
        title: 'Remove QR Payment Image',
        message: 'Are you sure you want to remove the QR payment image from the user payment page?',
        confirmText: 'Remove QR Image',
        danger: true,
        onConfirm: async () => {
          const previous = read('settings');
          const nextSettings = { ...previous, qrImage: '', dataVersion: 11 };
          write('settings', nextSettings);
          if (SUPABASE_MODE && supabaseSyncReady) {
            await syncSettingsToSupabase(nextSettings);
          }
          adminSettings();
          toast('QR payment image removed.');
        },
      });
    });
  }
}



</script>
<?php
}

function upsi_section_features_module(): void
{
?>
<script>
window.UPSI_SECTION_MODULES = window.UPSI_SECTION_MODULES || {};
window.UPSI_SECTION_MODULES["features"] = {
  title: "Features sebelum login",
  runtimeChunk: '3/22',
  functions: ["v83RenderFeatures"]
};
</script>
<?php
}

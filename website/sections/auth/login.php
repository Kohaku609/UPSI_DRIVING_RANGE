<?php
/**
 * login.php
 * Bahagian: Login/Register
 *
 * V108: CSS dan JavaScript runtime dibahagikan ke semua section.
 * Jadi home_page.php tidak lagi memegang semua coding sistem.
 *
 * Runtime chunk: 5/22
 * Fungsi berkaitan untuk presentation: renderAuth, bindAuth
 * Template function: upsi_section_login_template()
 */


function upsi_section_login_template(): void
{
?>
<template id="auth-template">
    <main class="auth-app-layout">
      <section class="auth-app-card" aria-label="UPSI Driving Range login">
        <div class="auth-app-logo-wrap">
          <div class="auth-app-logo-tile custom-logo-tile">
            <img class="auth-app-logo-img" src="/assets/upsi-driving-range-logo.png" alt="UPSI Driving Range logo" />
          </div>
        </div>

        <div class="auth-app-heading">
          <h1>Welcome Back</h1>
          <p>UPSI Driving Range</p>
        </div>

        <div class="auth-switch" role="tablist" aria-label="Login type switcher">
          <button type="button" class="auth-switch-btn active" data-auth-tab="user" aria-selected="true">
            <span>👤</span>
            <span>User</span>
          </button>
          <button type="button" class="auth-switch-btn" data-auth-tab="admin" aria-selected="false">
            <span>✔</span>
            <span>Admin</span>
          </button>
        </div>

        <section id="userAuthPanel" class="auth-tab-panel active">
          <form id="userLoginForm" class="app-login-form" autocomplete="off">
            <label class="icon-field">
              <span class="field-icon">✉</span>
              <input type="email" name="email" placeholder="Email" value="" autocomplete="off" autocapitalize="none" spellcheck="false" required />
            </label>
            <label class="icon-field">
              <span class="field-icon">🔒</span>
              <input type="password" name="password" placeholder="Password" value="" autocomplete="new-password" required />
            </label>
            <div class="auth-inline-row">
              <span></span>
              <button type="button" class="inline-link" data-forgot-user>Password Help</button>
            </div>
            <button class="btn btn-primary full auth-submit-btn" type="submit">Log In as User</button>
            <button class="auth-register-link" type="button" data-show-user-register>New user? Create an account</button>
          </form>

          <form id="registerForm" class="register-panel app-register-panel hidden">
            <div class="form-title">
              <h2>Create User Account</h2>
              <p>One email can only register one user account.</p>
            </div>
            <label>
              Full Name
              <input type="text" name="fullName" placeholder="Enter your full name" required />
            </label>
            <label>
              Email Address
              <input type="email" name="email" placeholder="example@student.upsi.edu.my" required />
            </label>
            <label>
              Phone Number
              <input type="tel" name="phone" placeholder="012-3456789" required />
            </label>
            <label>
              Age
              <input type="number" name="age" min="1" max="120" placeholder="21" required />
            </label>
            <label>
              Birthday Date
              <input type="date" name="birthday" required />
            </label>
            <label>
              Address
              <textarea name="address" rows="2" placeholder="Enter your address" required></textarea>
            </label>
            <label>
              Password
              <input type="password" name="password" placeholder="Minimum 6 characters" minlength="6" required />
            </label>
            <div class="register-actions">
              <button class="btn btn-primary full" type="submit">Register User Account</button>
              <button class="btn btn-soft full" type="button" data-hide-user-register>Back to User Login</button>
            </div>
          </form>
        </section>

        <section id="adminAuthPanel" class="auth-tab-panel hidden">
          <form id="adminLoginForm" class="app-login-form" autocomplete="off">
            <label class="icon-field">
              <span class="field-icon">✉</span>
              <input type="email" name="email" placeholder="Admin Email" value="" autocomplete="off" autocapitalize="none" spellcheck="false" required />
            </label>
            <label class="icon-field">
              <span class="field-icon">🔒</span>
              <input type="password" name="password" placeholder="Password" value="" autocomplete="new-password" required />
            </label>
            <div class="auth-inline-row">
              <span></span>
              <button type="button" class="inline-link" data-forgot-admin>Password Help</button>
            </div>
            <button class="btn btn-primary full auth-submit-btn" type="submit">Log In as Admin</button>
            <p class="tiny-note centered-note">Admin registration is available only after the main admin logs in.</p>
          </form>
        </section>
      </section>

      <section class="landing-section compact-auth-features">
        <div class="section-heading">
          <p class="eyebrow">System Scope</p>
          <h2>Booking platform for users and administrators</h2>
        </div>
        <div class="feature-grid compact-feature-grid">
          <article class="feature-card strong-border-card compact-feature-card">
            <span>🏌️</span>
            <h3>Driving Range</h3>
            <p>Users can check available tee time, choose member or non-member ball buckets, and make secure booking payments.</p>
          </article>
          <article class="feature-card strong-border-card compact-feature-card">
            <span>👨‍🏫</span>
            <h3>Trainer Booking</h3>
            <p>Trainer sessions are separated from driving range booking and follow the available date and time set by the admin.</p>
          </article>
          <article class="feature-card strong-border-card compact-feature-card">
            <span>🛠️</span>
            <h3>Admin Control</h3>
            <p>Admins manage users, admins, trainer details, tee times, payment QR image, bookings and booking reports.</p>
          </article>
        </div>
      </section>
    </main>
</template>
<?php
}

function upsi_section_login_styles(): void
{
?>
<style>
/* =========================================================
   V108 CSS chunk 5/22
   Bahagian: Login/Register
   ========================================================= */
.confirm-action-panel {
  display: flex;
  justify-content: flex-end;
  gap: 12px;
  padding-top: 12px;
}

/* V9 tee time scheduler and clickable profile chip */
.profile-chip {
  cursor: pointer;
  user-select: none;
  transition: transform .2s ease, box-shadow .2s ease, border-color .2s ease;
}

.profile-chip:hover,
.profile-chip:focus-visible {
  transform: translateY(-1px);
  box-shadow: 0 14px 28px rgba(15,81,50,0.14);
  border-color: rgba(15,81,50,0.38) !important;
  outline: none;
}

.schedule-admin-grid {
  display: grid;
  grid-template-columns: repeat(2, minmax(0, 1fr));
  gap: 18px;
  margin-bottom: 20px;
}

.schedule-help-card h3 {
  margin: 8px 0;
  color: var(--deep-green);
}

.schedule-table-card {
  margin-top: 12px;
}

.time-builder {
  display: grid;
  grid-template-columns: 1fr 1.5fr;
  gap: 18px;
  align-items: center;
  padding: 18px;
  border: 1.5px solid rgba(15,81,50,0.22);
  border-radius: 22px;
  background: linear-gradient(135deg, #ffffff, #effaf1);
}

.time-builder h3 {
  margin: 6px 0 0;
  font-size: clamp(1.8rem, 3vw, 2.8rem);
  color: var(--deep-green);
  letter-spacing: -1px;
}

.time-stepper-grid {
  display: grid;
  grid-template-columns: repeat(3, minmax(0, 1fr));
  gap: 12px;
}

.time-stepper-unit {
  display: grid;
  place-items: center;
  gap: 8px;
  padding: 12px 10px;
  border: 1.5px solid rgba(15,81,50,0.18);
  border-radius: 18px;
  background: #fff;
}

.time-stepper-unit strong {
  font-size: 1.35rem;
  color: var(--charcoal);
}

.time-stepper-unit span {
  font-size: .78rem;
  color: var(--muted);
  font-weight: 800;
}

.time-arrow {
  width: 38px;
  height: 32px;
  border: 0;
  border-radius: 12px;
  background: var(--soft-green);
  color: var(--deep-green);
  font-weight: 900;
  cursor: pointer;
  transition: transform .16s ease, background .16s ease;
}

.time-arrow:hover {
  transform: translateY(-1px);
  background: #dff4e4;
}

@media (max-width: 800px) {
  .schedule-admin-grid,
  .time-builder,
  .time-stepper-grid {
    grid-template-columns: 1fr;
  }
}

.section-subhead {
  margin: 28px 0 16px;
  padding: 18px 20px;
  border: 1.5px solid rgba(15,81,50,0.18);
  border-radius: 22px;
  background: linear-gradient(135deg, #ffffff, #f0faf2);
  box-shadow: 0 10px 24px rgba(15,81,50,0.06);
}

.section-subhead h2 {
  margin: 4px 0 6px;
  color: var(--charcoal);
}

.profile-chip {
  cursor: pointer;
  transition: transform .16s ease, border-color .16s ease, box-shadow .16s ease;
}

.profile-chip:hover {
  transform: translateY(-1px);
  border-color: rgba(15,81,50,0.24);
  box-shadow: 0 12px 28px rgba(15,81,50,0.12);
}

/* V11 login split + clearer borders/columns */
.enhanced-auth-layout {
  grid-template-columns: minmax(0, 0.95fr) minmax(460px, 1.05fr);
  background:
    radial-gradient(circle at 90% 8%, rgba(227, 179, 65, 0.18), transparent 28%),
    linear-gradient(135deg, #f7fff8 0%, #ffffff 48%, #eef8f1 100%);
}

.auth-card-modern {
  width: 100%;
  max-width: 760px;
  border: 2px solid rgba(15, 81, 50, 0.16);
  background: rgba(255, 255, 255, 0.94);
}

.auth-card-header {
  padding: 2px 4px 18px;
  border-bottom: 1px solid rgba(15, 81, 50, 0.14);
  margin-bottom: 18px;
}

.auth-card-header h2 {
  margin-bottom: 8px;
  font-size: 32px;
  letter-spacing: -0.03em;
}

.auth-card-header p {
  margin: 0;
  color: var(--muted);
  line-height: 1.55;
}

.login-choice-grid {
  display: grid;
  grid-template-columns: repeat(2, minmax(0, 1fr));
  gap: 16px;
  align-items: start;
}

.user-auth-column {
  display: grid;
  gap: 16px;
}

.login-panel,
.register-panel {
  display: grid;
  gap: 13px;
  padding: 18px;
  border: 1.6px solid rgba(15, 81, 50, 0.16);
  border-radius: 22px;
  background: linear-gradient(145deg, #ffffff, #f5fbf6);
  box-shadow: 0 14px 32px rgba(15, 81, 50, 0.08);
}

.admin-login-panel {
  background:
    linear-gradient(145deg, rgba(255, 248, 230, 0.92), rgba(255,255,255,0.98));
  border-color: rgba(227, 179, 65, 0.46);
}

.user-login-panel {
  background:
    linear-gradient(145deg, rgba(237, 249, 241, 0.98), rgba(255,255,255,0.98));
}

.login-panel h3,
.register-panel h2 {
  margin: 0;
  color: var(--dark-green);
}

.login-panel p {
  margin: 0;
  color: var(--muted);
  line-height: 1.45;
}

.role-badge {
  width: fit-content;
  padding: 7px 11px;
  border-radius: 999px;
  font-size: 12px;
  font-weight: 900;
  letter-spacing: 0.03em;
}

.admin-role {
  background: #fff6df;
  color: #8a5a00;
  border: 1px solid rgba(227, 179, 65, 0.42);
}

.user-role {
  background: var(--light-green);
  color: var(--dark-green);
  border: 1px solid rgba(15, 81, 50, 0.14);
}

.register-panel {
  border-color: rgba(25, 135, 84, 0.28);
}

.register-actions {
  display: grid;
  gap: 10px;
}

.strong-border-card,
.card,
.table-card,
.feature-card,
.stat-card,
.empty-state,
.profile-chip,
.modal-card {
  border-color: rgba(15, 81, 50, 0.18) !important;
}

.card,
.table-card,
.feature-card,
.stat-card,
.empty-state {
  box-shadow: 0 14px 34px rgba(15, 81, 50, 0.08);
}

table {
  border-collapse: separate;
  border-spacing: 0;
}

th,
td {
  border-right: 1px solid rgba(15, 81, 50, 0.12);
  border-bottom: 1px solid rgba(15, 81, 50, 0.13);
}

th:last-child,
td:last-child {
  border-right: 0;
}

thead th {
  border-bottom: 2px solid rgba(15, 81, 50, 0.22);
}

tbody tr:hover {
  background: rgba(232, 245, 233, 0.38);
}

input,
select,
textarea {
  border-color: rgba(15, 81, 50, 0.13);
  background: #f8fcf8;
}

.sidebar {
  border-right: 2px solid rgba(15, 81, 50, 0.12);
}


</style>
<?php
}

function upsi_section_login_scripts(): void
{
?>
<script>
/* =========================================================
   V108 JavaScript chunk 5/22
   Bahagian: Login/Register
   ========================================================= */
function adminCourses() {
  setTitle('Driving Range', 'Administrator Panel');
  const courses = getDrivingCourses(read('courses'));
  const drivingCourse = getDrivingCourse(courses);
  const bucketOptions = getBucketOptions(drivingCourse);
  content().innerHTML = `
    <div class="toolbar">
      <div><p class="eyebrow">Driving Range Management</p><h2>Manage range details and membership pricing</h2></div>
      <button class="btn btn-primary" data-add-course>Add Driving Range</button>
    </div>

    <div class="admin-range-preview clean-admin-range">
      <div class="mobile-booking-heading">
        <div>
          <p class="eyebrow">Admin Preview</p>
          <h2>${escapeHtml(drivingCourse?.name || 'UPSI Driving Golf Range')}</h2>
          <p class="muted">This section controls the Driving Range details shown on User Home and Booking pages.</p>
        </div>
        <div class="card-actions">
          <button class="btn btn-primary" data-edit-course="${escapeHtml(drivingCourse?.id || '')}">Edit Details & Prices</button>
        </div>
      </div>
      <div class="price-list-panel">
        <div class="price-column">
          <h3>Non-member</h3>
          ${bucketOptions.map((bucket) => `<p>${escapeHtml(bucket.label)} - RM ${formatPlainMoney(bucket.nonMemberPrice)}</p>`).join('')}
        </div>
        <div class="price-column">
          <h3>Member</h3>
          ${bucketOptions.map((bucket) => `<p>${escapeHtml(bucket.label)} - RM ${formatPlainMoney(bucket.memberPrice)}</p>`).join('')}
        </div>
        <div class="price-column">
          <h3>Booking Limit</h3>
          <p>Number of buckets: 1 to ${escapeHtml(drivingCourse?.maxBucketCount || 10)}</p>
          <p>${escapeHtml(drivingCourse?.location || 'UPSI Driving Range')}</p>
        </div>
      </div>
    </div>

    <div style="height:22px"></div>
    <div class="card-grid">
      ${courses.map((course) => adminCourseCard(course)).join('') || empty('No driving range record.')}
    </div>
  `;
  content().querySelector('[data-add-course]').addEventListener('click', () => openCourseForm());
  bindAdminCourseButtons();
}

function adminCourseCard(course) {
  const buckets = getBucketOptions(course);
  return `
    <article class="card driving-card-clean">
      <div class="card-top">
        <div><p class="eyebrow">${escapeHtml(course.type)}</p><h3>${escapeHtml(course.name)}</h3></div>
        ${statusPill(course.status)}
      </div>
      <p>${escapeHtml(course.description)}</p>
      <div class="price-reference-box compact-price-box">
        <strong>Non-member</strong>
        ${buckets.map((bucket) => `<span>${escapeHtml(bucket.label)} - RM ${formatPlainMoney(bucket.nonMemberPrice)}</span>`).join('')}
        <strong>Member</strong>
        ${buckets.map((bucket) => `<span>${escapeHtml(bucket.label)} - RM ${formatPlainMoney(bucket.memberPrice)}</span>`).join('')}
      </div>
      <ul class="meta-list">
        <li><span>Location</span><strong>${escapeHtml(course.location)}</strong></li>
        <li><span>Bucket Limit</span><strong>1 to ${escapeHtml(course.maxBucketCount || 10)}</strong></li>
        <li><span>Available Date & Time</span><strong>${escapeHtml(availabilitySummary('driving', course.id))}</strong></li>
      </ul>
      <div class="card-actions">
        <button class="btn btn-soft" data-edit-course="${course.id}">Edit</button>
        <button class="btn btn-danger-soft" data-delete-course="${course.id}">Delete</button>
      </div>
    </article>
  `;
}

function bindAdminCourseButtons() {
  content().querySelectorAll('[data-edit-course]').forEach((btn) => {
    btn.addEventListener('click', () => openCourseForm(read('courses').find((c) => c.id === btn.dataset.editCourse)));
  });
  content().querySelectorAll('[data-delete-course]').forEach((btn) => {
    btn.addEventListener('click', () => {
      confirmAction({
        title: 'Delete Driving Range',
        message: 'Are you sure you want to delete this driving range record?',
        confirmText: 'Delete Driving Range',
        danger: true,
        onConfirm: () => {
          write('courses', read('courses').filter((c) => c.id !== btn.dataset.deleteCourse));
          adminCourses();
          toast('Driving range deleted.');
        },
      });
    });
  });
}

function openCourseForm(course = null) {
  const existingBuckets = getBucketOptions(course);
  const bucketA = existingBuckets[0] || BUCKET_OPTIONS[0];
  const bucketB = existingBuckets[1] || BUCKET_OPTIONS[1];
  openModal(`
    <div class="modal-head">
      <div><p class="eyebrow">Driving Range Form</p><h2>${course ? 'Edit Driving Range' : 'Add Driving Range'}</h2></div>
      <button class="close-btn" data-close-modal>&times;</button>
    </div>
    <form id="courseForm" class="form-grid">
      <label class="wide">Driving Range Name<input name="name" value="${escapeHtml(course?.name || 'UPSI Driving Golf Range')}" required></label>
      <label>Location<input name="location" value="${escapeHtml(course?.location || 'UPSI Driving Range')}" required></label>
      <label>Type<input name="type" value="${escapeHtml(course?.type || 'Driving Range')}" required></label>
      <label>Range / Bay<input name="holes" value="${escapeHtml(course?.holes || 'Practice Bay')}" required></label>
      <label>Status<select name="status"><option ${course?.status === 'Available' ? 'selected' : ''}>Available</option><option ${course?.status === 'Unavailable' ? 'selected' : ''}>Unavailable</option></select></label>
      <label class="wide">Description<textarea name="description" required>${escapeHtml(course?.description || 'Driving range ball bucket booking for UPSI Golf with member and non-member pricing.')}</textarea></label>

      <div class="wide section-divider"><strong>Ball Bucket & Membership Price</strong><span>These member and non-member prices will appear on the user booking page.</span></div>
      <label>Bucket 1 Label<input name="bucket1Label" value="${escapeHtml(bucketA.label)}" required></label>
      <label>Bucket 1 Balls<input name="bucket1Balls" type="number" min="1" value="${bucketA.balls}" required></label>
      <label>Bucket 1 Non-member Price (RM)<input name="bucket1NonMemberPrice" type="number" min="0" step="0.01" value="${bucketA.nonMemberPrice}" required></label>
      <label>Bucket 1 Member Price (RM)<input name="bucket1MemberPrice" type="number" min="0" step="0.01" value="${bucketA.memberPrice}" required></label>
      <label class="wide">Bucket 1 Description<input name="bucket1Description" value="${escapeHtml(bucketA.description)}" required></label>

      <label>Bucket 2 Label<input name="bucket2Label" value="${escapeHtml(bucketB.label)}" required></label>
      <label>Bucket 2 Balls<input name="bucket2Balls" type="number" min="1" value="${bucketB.balls}" required></label>
      <label>Bucket 2 Non-member Price (RM)<input name="bucket2NonMemberPrice" type="number" min="0" step="0.01" value="${bucketB.nonMemberPrice}" required></label>
      <label>Bucket 2 Member Price (RM)<input name="bucket2MemberPrice" type="number" min="0" step="0.01" value="${bucketB.memberPrice}" required></label>
      <label class="wide">Bucket 2 Description<input name="bucket2Description" value="${escapeHtml(bucketB.description)}" required></label>
      <label class="wide">Maximum Number of Buckets<select name="maxBucketCount" required>
        ${BUCKET_COUNTS.map((count) => `<option value="${count}" ${Number(course?.maxBucketCount || 10) === count ? 'selected' : ''}>1 to ${count}</option>`).join('')}
      </select></label>

      <button class="btn btn-primary wide" type="submit">Save Driving Range</button>
    </form>
  `);

  document.getElementById('courseForm').addEventListener('submit', (event) => {
    event.preventDefault();
    const form = new FormData(event.currentTarget);
    const courses = read('courses');
    const payload = {
      id: course?.id || makeId('C'),
      name: form.get('name').trim(),
      location: form.get('location').trim(),
      type: form.get('type').trim(),
      holes: form.get('holes').trim(),
      price: Number(form.get('bucket1NonMemberPrice')),
      status: form.get('status'),
      description: form.get('description').trim(),
      bucketOptions: [
        {
          id: 'bucket50',
          label: form.get('bucket1Label').trim(),
          balls: Number(form.get('bucket1Balls')),
          price: Number(form.get('bucket1NonMemberPrice')),
          nonMemberPrice: Number(form.get('bucket1NonMemberPrice')),
          memberPrice: Number(form.get('bucket1MemberPrice')),
          description: form.get('bucket1Description').trim(),
        },
        {
          id: 'bucket100',
          label: form.get('bucket2Label').trim(),
          balls: Number(form.get('bucket2Balls')),
          price: Number(form.get('bucket2NonMemberPrice')),
          nonMemberPrice: Number(form.get('bucket2NonMemberPrice')),
          memberPrice: Number(form.get('bucket2MemberPrice')),
          description: form.get('bucket2Description').trim(),
        },
      ],
      maxBucketCount: Number(form.get('maxBucketCount')),
    };
    const persistCourse = () => {
      const index = courses.findIndex((c) => c.id === payload.id);
      if (index >= 0) courses[index] = payload;
      else courses.push(payload);
      write('courses', courses);
      closeModal();
      adminCourses();
      toast('Driving range details and membership prices saved.');
    };
    if (course && course.status !== payload.status && payload.status === 'Unavailable') {
      confirmAction({
        title: 'Deactivate Driving Range',
        message: 'Are you sure you want to mark this driving range as unavailable? Users will not be able to book it while unavailable.',
        confirmText: 'Deactivate Range',
        danger: true,
        onConfirm: persistCourse,
      });
    } else {
      persistCourse();
    }
  });
}

function adminTrainers() {
  setTitle('Trainers', 'Administrator Panel');
  const trainers = read('trainers');
  content().innerHTML = `
    <div class="toolbar">
      <div><p class="eyebrow">Trainer Management</p><h2>Manage trainer contact details</h2></div>
      <button class="btn btn-primary" data-add-trainer>Add Trainer</button>
    </div>
    <div class="trainer-reference-card card">
      <p class="eyebrow">Trainer Details</p>
      <h2>Pelatih</h2>
      <p>Nordin bin Yahya<br>Mohd Muhayuddin bin Md Zahid</p>
    </div>
    <div style="height:18px"></div>
    <div class="card-grid">
      ${trainers.map((trainer) => `
        <article class="card trainer-card-clean">
          <div class="card-top"><div><p class="eyebrow">Pelatih</p><h3>${escapeHtml(trainer.name)}</h3></div>${statusPill(trainer.status)}</div>
          <ul class="meta-list">
            <li><span>No. Phone</span><strong>${escapeHtml(trainer.phone || '-')}</strong></li>
            <li><span>Email</span><strong>${escapeHtml(trainer.email || '-')}</strong></li>
            <li><span>Alamat</span><strong>${escapeHtml(trainer.address || '-')}</strong></li>
            <li><span>Specialist</span><strong>${escapeHtml(trainer.description || 'Golf coaching and guided practice')}</strong></li>
          </ul>
          <div class="trainer-availability-row">
            ${availabilityButtonMarkup('trainer', trainer.id, 'View Available Time')}
          </div>
          <div class="card-actions">
            <button class="btn btn-soft" data-edit-trainer="${trainer.id}">Edit</button>
            <button class="btn btn-danger-soft" data-delete-trainer="${trainer.id}">Delete</button>
          </div>
        </article>
      `).join('') || empty('No trainer record.')}
    </div>
  `;
  content().querySelector('[data-add-trainer]').addEventListener('click', () => openTrainerForm());
  bindAvailabilityButtons();
  content().querySelectorAll('[data-edit-trainer]').forEach((btn) => btn.addEventListener('click', () => openTrainerForm(read('trainers').find((t) => t.id === btn.dataset.editTrainer))));
  content().querySelectorAll('[data-delete-trainer]').forEach((btn) => btn.addEventListener('click', () => {
    confirmAction({
      title: 'Delete Trainer',
      message: 'Are you sure you want to delete this trainer record?',
      confirmText: 'Delete Trainer',
      danger: true,
      onConfirm: () => {
        write('trainers', read('trainers').filter((t) => t.id !== btn.dataset.deleteTrainer));
        adminTrainers();
        toast('Trainer deleted.');
      },
    });
  }));
}

function openTrainerForm(trainer = null) {
  openModal(`
    <div class="modal-head"><div><p class="eyebrow">Trainer Form</p><h2>${trainer ? 'Edit Trainer' : 'Add Trainer'}</h2></div><button class="close-btn" data-close-modal>&times;</button></div>
    <form id="trainerForm" class="form-grid">
      <label class="wide">Trainer Name<input name="name" value="${escapeHtml(trainer?.name || '')}" required></label>
      <label>No. Phone<input name="phone" value="${escapeHtml(trainer?.phone || '')}" required></label>
      <label>Email<input name="email" type="email" value="${escapeHtml(trainer?.email || '')}" required></label>
      <label class="wide">Alamat<input name="address" value="${escapeHtml(trainer?.address || '')}" required></label>
      <label class="wide">Specialist / Expertise<textarea name="description" placeholder="Example: Beginner swing basics, stance correction, driving accuracy" required>${escapeHtml(trainer?.description || '')}</textarea></label>
      <label>Status<select name="status"><option ${trainer?.status === 'Available' ? 'selected' : ''}>Available</option><option ${trainer?.status === 'Unavailable' ? 'selected' : ''}>Unavailable</option></select></label>
      <button class="btn btn-primary wide" type="submit">Save Trainer</button>
    </form>
  `);

  document.getElementById('trainerForm').addEventListener('submit', (event) => {
    event.preventDefault();
    const form = new FormData(event.currentTarget);
    const trainers = read('trainers');
    const payload = {
      id: trainer?.id || makeId('T'),
      name: form.get('name').trim(),
      phone: form.get('phone').trim(),
      email: form.get('email').trim(),
      address: form.get('address').trim(),
      description: form.get('description').trim(),
      status: form.get('status'),
    };
    const persistTrainer = () => {
      const index = trainers.findIndex((t) => t.id === payload.id);
      if (index >= 0) trainers[index] = payload;
      else trainers.push(payload);
      write('trainers', trainers);
      closeModal();
      adminTrainers();
      toast('Trainer saved.');
    };
    if (trainer && trainer.status !== payload.status && payload.status === 'Unavailable') {
      confirmAction({
        title: 'Deactivate Trainer',
        message: 'Are you sure you want to mark this trainer as unavailable? Users will not be able to book this trainer while unavailable.',
        confirmText: 'Deactivate Trainer',
        danger: true,
        onConfirm: persistTrainer,
      });
    } else {
      persistTrainer();
    }
  });
}

function adminTimes() {
  setTitle('Tee Time Availability', 'Administrator Panel');
  const slots = getScheduleSlots().sort(sortByDateTime);
  content().innerHTML = `
    <div class="toolbar">
      <div>
        <p class="eyebrow">Schedule Settings</p>
        <h2>Manage date and tee time for Driving Range and Trainers</h2>
        <p class="muted">All date and time options used by user bookings are controlled here.</p>
      </div>
      <button class="btn btn-primary" data-add-time>Add Time Slot</button>
    </div>
    <div class="schedule-admin-grid">
      <article class="card schedule-help-card">
        <p class="eyebrow">How it works</p>
        <h3>Date + Time + Booking Type</h3>
        <p>Choose whether the slot is for Driving Range, Trainer, or both. User booking forms will only show available dates and times created here.</p>
      </article>
      <article class="card schedule-help-card">
        <p class="eyebrow">Current Coverage</p>
        <h3>${slots.filter((slot) => slotDisplayStatus(slot) === 'Available').length} available slots</h3>
        <p>Driving range and trainer availability can be edited from this Tee Time page.</p>
      </article>
    </div>
    <div class="table-card schedule-table-card">
      <div class="table-wrap"><table>
        <thead><tr><th>Date</th><th>Time</th><th>For</th><th>Target</th><th>Status</th><th>Action</th></tr></thead>
        <tbody>
          ${slots.map((slot) => `
            <tr>
              <td><strong>${formatDateDisplay(slot.date)}</strong><br><span class="muted">${escapeHtml(slot.date)}</span></td>
              <td><strong>${escapeHtml(slot.time)}</strong></td>
              <td>${escapeHtml(scheduleTypeLabel(slot.targetType))}</td>
              <td>${escapeHtml(scheduleTargetLabel(slot))}</td>
              <td>${statusPill(slotDisplayStatus(slot))}</td>
              <td><div class="row-actions">
                <button class="btn btn-soft" data-edit-time="${slot.id}">Edit</button>
                <button class="btn btn-danger-soft" data-delete-time="${slot.id}">Remove</button>
              </div></td>
            </tr>
          `).join('') || `<tr><td colspan="6">No tee time slot found.</td></tr>`}
        </tbody>
      </table></div>
    </div>
  `;
  content().querySelector('[data-add-time]').addEventListener('click', () => openTimeForm());
  content().querySelectorAll('[data-edit-time]').forEach((btn) => btn.addEventListener('click', () => {
    const slot = getScheduleSlots().find((item) => item.id === btn.dataset.editTime);
    openTimeForm(slot);
  }));
  content().querySelectorAll('[data-delete-time]').forEach((btn) => btn.addEventListener('click', () => {
    const slot = getScheduleSlots().find((item) => item.id === btn.dataset.deleteTime);
    confirmAction({
      title: 'Remove Tee Time Slot',
      message: `Are you sure you want to remove ${slot ? `${formatDateDisplay(slot.date)} at ${slot.time}` : 'this'} tee time slot? This date and time will no longer appear for users.`,
      confirmText: 'Remove Slot',
      danger: true,
      onConfirm: () => {
        writeScheduleSlots(getScheduleSlots().filter((timeSlot) => timeSlot.id !== btn.dataset.deleteTime));
        adminTimes();
        toast('Tee time slot removed.');
      },
    });
  }));
}

function openTimeForm(slot = null) {
  const courses = getDrivingCourses(read('courses'));
  const trainers = read('trainers');
  const today = new Date().toISOString().slice(0, 10);
  const nextWeek = getFutureDate(7);
  const selectedType = slot?.targetType || 'both';
  const selectedTarget = slot?.targetId || 'all';
  const timeParts = parseTimeSlot(slot?.time || '8:00 AM');
  const isEdit = Boolean(slot);

  openModal(`
    <div class="modal-head">
      <div>
        <p class="eyebrow">${isEdit ? 'Edit Tee Time' : 'New Tee Time'}</p>
        <h2>${isEdit ? 'Update Available Date & Time' : 'Add Time Slot'}</h2>
        <p class="muted">For new slots, admin can add one date or bulk add the same time from today until next week. Use the arrow buttons to set time.</p>
      </div>
      <button class="close-btn" data-close-modal>&times;</button>
    </div>
    <form id="timeForm" class="form-grid">
      ${isEdit ? `
        <label class="wide">Date
          <input name="date" type="date" min="${today}" value="${escapeHtml(slot?.date || today)}" required>
        </label>
      ` : `
        <label>Date Mode
          <select name="dateMode" data-date-mode>
            <option value="single">Single date</option>
            <option value="range">Date range / Bulk add</option>
          </select>
        </label>
        <label data-single-date>Single Date
          <input name="date" type="date" min="${today}" value="${today}" required>
        </label>
        <label class="hidden" data-range-start>Start Date
          <input name="startDate" type="date" min="${today}" value="${today}">
        </label>
        <label class="hidden" data-range-end>End Date
          <input name="endDate" type="date" min="${today}" value="${nextWeek}">
        </label>
      `}
      <label>Booking Type
        <select name="targetType" data-slot-type required>
          <option value="both" ${selectedType === 'both' ? 'selected' : ''}>Driving Range & Trainer</option>
          <option value="driving" ${selectedType === 'driving' ? 'selected' : ''}>Driving Range Only</option>
          <option value="trainer" ${selectedType === 'trainer' ? 'selected' : ''}>Trainer Only</option>
        </select>
      </label>
      <label class="wide" data-target-wrapper>Target
        <select name="targetId" data-slot-target required></select>
      </label>
      <div class="wide time-builder" data-time-builder>
        <div>
          <p class="eyebrow">Digital Time Selector</p>
          <h3 data-time-display>${formatTimeSlot(timeParts.hour, timeParts.minute, timeParts.period)}</h3>
          <input type="hidden" name="time" value="${formatTimeSlot(timeParts.hour, timeParts.minute, timeParts.period)}" data-time-value>
        </div>
        <div class="time-stepper-grid">
          <div class="time-stepper-unit">
            <button class="time-arrow" type="button" data-time-adjust="hour" data-direction="1">▲</button>
            <strong data-hour-display>${timeParts.hour}</strong>
            <button class="time-arrow" type="button" data-time-adjust="hour" data-direction="-1">▼</button>
            <span>Hour</span>
          </div>
          <div class="time-stepper-unit">
            <button class="time-arrow" type="button" data-time-adjust="minute" data-direction="1">▲</button>
            <strong data-minute-display>${String(timeParts.minute).padStart(2, '0')}</strong>
            <button class="time-arrow" type="button" data-time-adjust="minute" data-direction="-1">▼</button>
            <span>Minute</span>
          </div>
          <div class="time-stepper-unit">
            <button class="time-arrow" type="button" data-time-adjust="period" data-direction="1">▲</button>
            <strong data-period-display>${timeParts.period}</strong>
            <button class="time-arrow" type="button" data-time-adjust="period" data-direction="-1">▼</button>
            <span>AM / PM</span>
          </div>
        </div>
      </div>
      <label>Status
        <select name="status">
          <option ${slot?.status !== 'Unavailable' ? 'selected' : ''}>Available</option>
          <option ${slot?.status === 'Unavailable' ? 'selected' : ''}>Unavailable</option>
        </select>
      </label>
      ${!isEdit ? `<div class="wide bucket-info"><span class="info-icon">🗓️</span><div><p>Bulk add example: choose Date range, start today and end next week. The system will create one slot for each date using the selected time and target.</p></div></div>` : ''}
      <button class="btn btn-primary wide" type="submit">${isEdit ? 'Save Tee Time' : 'Save Tee Time Slot(s)'}</button>
    </form>
  `);

  const form = document.getElementById('timeForm');
  let currentTime = { ...timeParts };

  const renderTargetOptions = () => {
    const type = form.targetType.value;
    let options = '<option value="all">All applicable slots</option>';
    if (type === 'driving') {
      options = courses.map((course) => `<option value="${course.id}" ${selectedTarget === course.id ? 'selected' : ''}>${escapeHtml(course.name)}</option>`).join('') || '<option value="all">All Driving Range</option>';
    } else if (type === 'trainer') {
      options = trainers.map((trainer) => `<option value="${trainer.id}" ${selectedTarget === trainer.id ? 'selected' : ''}>${escapeHtml(trainer.name)}</option>`).join('') || '<option value="all">All Trainers</option>';
    }
    form.targetId.innerHTML = options;
    if (type === 'both') form.targetId.value = 'all';
  };

  const renderTime = () => {
    const formatted = formatTimeSlot(currentTime.hour, currentTime.minute, currentTime.period);
    form.querySelector('[data-time-display]').textContent = formatted;
    form.querySelector('[data-time-value]').value = formatted;
    form.querySelector('[data-hour-display]').textContent = currentTime.hour;
    form.querySelector('[data-minute-display]').textContent = String(currentTime.minute).padStart(2, '0');
    form.querySelector('[data-period-display]').textContent = currentTime.period;
  };

  const renderDateMode = () => {
    if (isEdit || !form.dateMode) return;
    const isRange = form.dateMode.value === 'range';
    form.querySelector('[data-single-date]').classList.toggle('hidden', isRange);
    form.querySelector('[data-range-start]').classList.toggle('hidden', !isRange);
    form.querySelector('[data-range-end]').classList.toggle('hidden', !isRange);
    form.date.required = !isRange;
    form.startDate.required = isRange;
    form.endDate.required = isRange;
  };

  form.targetType.addEventListener('change', renderTargetOptions);
  if (form.dateMode) form.dateMode.addEventListener('change', renderDateMode);
  form.querySelectorAll('[data-time-adjust]').forEach((button) => {
    button.addEventListener('click', () => {
      currentTime = adjustTimePart(currentTime, button.dataset.timeAdjust, Number(button.dataset.direction || 1));
      renderTime();
    });
  });
  renderTargetOptions();
  renderTime();
  renderDateMode();

  form.addEventListener('submit', (event) => {
    event.preventDefault();
    const formData = new FormData(event.currentTarget);
    const basePayload = {
      time: formData.get('time'),
      targetType: formData.get('targetType'),
      targetId: formData.get('targetType') === 'both' ? 'all' : formData.get('targetId'),
      status: formData.get('status'),
    };

    const slotDates = isEdit
      ? [formData.get('date')]
      : formData.get('dateMode') === 'range'
        ? datesBetween(formData.get('startDate'), formData.get('endDate'))
        : [formData.get('date')];

    if (!slotDates.length) {
      toast('Please select a valid date or date range.');
      return;
    }

    const slots = getScheduleSlots();

    if (isEdit) {
      const payload = { id: slot.id, date: slotDates[0], ...basePayload };
      const duplicate = slots.some((item) => item.id !== payload.id && item.date === payload.date && item.time === payload.time && item.targetType === payload.targetType && item.targetId === payload.targetId);
      if (duplicate) {
        toast('This tee time slot already exists.');
        return;
      }
      const persistSlot = () => {
        const index = slots.findIndex((item) => item.id === payload.id);
        if (index >= 0) slots[index] = payload;
        writeScheduleSlots(slots);
        closeModal();
        adminTimes();
        toast('Tee time availability saved.');
      };
      if (slot.status !== payload.status && payload.status === 'Unavailable') {
        confirmAction({
          title: 'Deactivate Tee Time Slot',
          message: 'Are you sure you want to mark this tee time as unavailable? Users will not be able to select it while unavailable.',
          confirmText: 'Deactivate Slot',
          danger: true,
          onConfirm: persistSlot,
        });
      } else {
        persistSlot();
      }
      return;
    }

    const newSlots = [];
    let duplicateCount = 0;
    slotDates.forEach((date) => {
      const exists = slots.concat(newSlots).some((item) => item.date === date && item.time === basePayload.time && item.targetType === basePayload.targetType && item.targetId === basePayload.targetId);
      if (exists) {
        duplicateCount += 1;
        return;
      }
      newSlots.push({ id: makeId('S'), date, ...basePayload });
    });

    if (!newSlots.length) {
      toast('No new slot was added because every selected date already has the same slot.');
      return;
    }

    writeScheduleSlots(slots.concat(newSlots));
    closeModal();
    adminTimes();
    toast(`${newSlots.length} tee time slot${newSlots.length === 1 ? '' : 's'} added.${duplicateCount ? ` ${duplicateCount} duplicate skipped.` : ''}`);
  });
}

function adminBookings() {
  setTitle('Manage Bookings', 'Administrator Panel');
  const bookings = adminVisibleBookings();
  content().innerHTML = `
    <div class="toolbar">
      <div><p class="eyebrow">Reservation Records</p><h2>Confirm, pending or cancel booking</h2></div>
      <div class="row-actions">
        <button class="btn btn-warning-soft" type="button" data-open-cancel-review>Cancel Booking Review (${confirmedUserCancelledBookings().length})</button>
        ${searchBox('Search booking, customer, driving range or trainer')}
      </div>
    </div>
    ${bookingTable(filterItems(bookings, ['id', 'customerName', 'customerEmail', 'courseName', 'trainerName']), 'admin')}
  `;
  bindSearch(() => adminBookings());
  const reviewBtn = content().querySelector('[data-open-cancel-review]');
  if (reviewBtn) reviewBtn.addEventListener('click', openCancelBookingReviewModal);
  bindBookingActions('admin');
}

function openCancelBookingReviewModal() {
  const reviews = confirmedUserCancelledBookings();
  openModal(`
    <div class="modal-head">
      <div>
        <p class="eyebrow">Cancel Booking Review</p>
        <h2>User-Cancelled Confirmed Bookings</h2>
        <p class="muted">Confirmed and verified bookings cancelled by users are kept here for admin reference with receipt evidence.</p>
      </div>
      <button class="close-btn" data-close-modal>&times;</button>
    </div>
    ${reviews.length ? `
      <div class="table-card"><div class="table-wrap"><table>
        <thead><tr><th>Booking</th><th>User</th><th>Schedule</th><th>Reason</th><th>Receipt</th></tr></thead>
        <tbody>${reviews.map((b) => `
          <tr>
            <td><strong>${escapeHtml(b.id)}</strong><br>${escapeHtml(bookingTitle(b))}</td>
            <td>${escapeHtml(b.customerName)}<br><span class="muted">${escapeHtml(b.customerEmail)}</span></td>
            <td>${escapeHtml(b.date)}<br>${escapeHtml(b.time)}</td>
            <td>${escapeHtml(cancellationReason(b))}<br><span class="muted">${b.cancelledAt ? new Date(b.cancelledAt).toLocaleString() : '-'}</span></td>
            <td>${b.receiptImage ? `<a class="text-link" href="${escapeHtml(b.receiptImage)}" target="_blank" rel="noopener">View Receipt</a>` : '<span class="muted">No receipt</span>'}</td>
          </tr>
        `).join('')}</tbody>
      </table></div></div>
    ` : empty('No confirmed booking cancellation review yet.')}
  `);
}

function adminPayments() {
  setTitle('Verify Payments', 'Administrator Panel');
  const bookings = adminVisibleBookings().filter((b) => b.paymentMethod === 'QR Payment');
  content().innerHTML = `
    <div class="toolbar">
      <div><p class="eyebrow">Payment Records</p><h2>Verify user payment receipt notes</h2></div>
    </div>
    ${bookingTable(bookings, 'payments-admin')}
  `;
  bindBookingActions('payments-admin');
}

function adminReviews() {
  setTitle('Reviews / Feedback', 'Administrator Panel');
  const reviews = read('reviews');
  content().innerHTML = `
    <div class="toolbar"><div><p class="eyebrow">User Feedback</p><h2>Review customer satisfaction</h2></div></div>
    <div class="card-grid">
      ${reviews.map(reviewCard).join('') || empty('No review submitted yet.')}
    </div>
  `;
}

function adminReports() {
  setTitle('Reports', 'Administrator Panel');
  const bookings = read('bookings');
  const confirmed = bookings.filter((b) => b.bookingStatus === 'Confirmed').length;
  const pending = bookings.filter((b) => b.bookingStatus === 'Pending Confirmation').length;
  const cancelled = bookings.filter((b) => b.bookingStatus === 'Cancelled').length;
  const verified = bookings.filter((b) => b.paymentStatus === 'Verified');
  const revenue = verified.reduce((sum, b) => sum + Number(b.amount || 0), 0);
  content().innerHTML = `
    <div class="report-grid">
      ${statCard('Confirmed Bookings', confirmed)}
      ${statCard('Pending Bookings', pending)}
      ${statCard('Cancelled Bookings', cancelled)}
      ${statCard('Verified Revenue', money(revenue))}
    </div>
    <div class="card" style="margin-top:22px">
      <p class="eyebrow">Summary</p>
      <h2>Operational Report</h2>
      <ul class="meta-list">
        <li><span>Total users</span><strong>${read('users').filter((u) => u.role === 'user').length}</strong></li>
        <li><span>Driving range records</span><strong>${read('courses').filter((c) => isDrivingCourse(c)).length}</strong></li>
        <li><span>Total trainers</span><strong>${read('trainers').length}</strong></li>
        <li><span>Total reviews</span><strong>${read('reviews').length}</strong></li>
      </ul>
    </div>
  `;
}

function adminSettings() {
  return accountSettings(true, 'profile');
}

function statCard(label, value) {
  return `<div class="stat-card"><span>${escapeHtml(label)}</span><strong>${escapeHtml(value)}</strong></div>`;
}

function statusPill(status) {
  const lower = String(status || '').toLowerCase();
  const key = lower.replaceAll(' ', '-').replaceAll('/', '-');
  let className = 'pending';
  if (['confirmed', 'verified', 'active', 'available'].includes(lower)) className = 'confirmed';
  if (['cancelled', 'rejected', 'inactive', 'unavailable'].includes(lower) || lower.includes('booked') || lower.includes('not available')) className = 'cancelled';
  return `<span class="status-pill ${className} ${key}">${escapeHtml(status)}</span>`;
}

function reviewCard(review) {
  return `
    <article class="card">
      <div class="card-top">
        <div><p class="eyebrow">${new Date(review.createdAt).toLocaleDateString()}</p><h3>${escapeHtml(review.userName)}</h3></div>
        <strong>${'⭐'.repeat(Number(review.rating || 0))}</strong>
      </div>
      <p>${escapeHtml(review.message)}</p>
    </article>
  `;
}

function searchBox(placeholder) {
  return `<div class="search-row"><input data-search-input placeholder="${escapeHtml(placeholder)}" value="${escapeHtml(state.search)}"><button class="btn btn-soft" data-clear-search>Clear</button></div>`;
}

function bindSearch(callback) {
  const input = content().querySelector('[data-search-input]');
  const clear = content().querySelector('[data-clear-search]');
  if (input) {
    input.addEventListener('input', () => {
      state.search = input.value;
      const cursorPosition = input.selectionStart || state.search.length;
      callback();
      requestAnimationFrame(() => {
        const refreshedInput = content().querySelector('[data-search-input]');
        if (refreshedInput) {
          refreshedInput.focus();
          refreshedInput.setSelectionRange(cursorPosition, cursorPosition);
        }
      });
    });
  }
  if (clear) {
    clear.addEventListener('click', () => {
      state.search = '';
      callback();
      requestAnimationFrame(() => {
        const refreshedInput = content().querySelector('[data-search-input]');
        if (refreshedInput) refreshedInput.focus();
      });
    });
  }
}

function filterItems(items, fields) {
  const q = state.search.trim().toLowerCase();
  if (!q) return items;
  return items.filter((item) => fields.some((field) => String(item[field] || '').toLowerCase().includes(q)));
}

function empty(message) {
  return `<div class="empty-state"><h3>Nothing here yet</h3><p>${escapeHtml(message)}</p></div>`;
}


function confirmAction({ title = 'Confirm Action', message = 'Are you sure?', confirmText = 'Confirm', cancelText = 'Cancel', danger = false, onConfirm = () => {} } = {}) {
  openModal(`
    <div class="modal-head">
      <div>
        <p class="eyebrow">Confirmation Required</p>
        <h2>${escapeHtml(title)}</h2>
        <p class="muted">${escapeHtml(message)}</p>
      </div>
      <button class="close-btn" data-close-modal>&times;</button>
    </div>
    <div class="confirm-action-panel">
      <button class="btn btn-soft" type="button" data-close-modal>${escapeHtml(cancelText)}</button>
      <button class="btn ${danger ? 'btn-danger-soft' : 'btn-primary'}" type="button" data-confirm-action>${escapeHtml(confirmText)}</button>
    </div>
  `);
  const confirmBtn = document.querySelector('[data-confirm-action]');
  if (confirmBtn) {
    confirmBtn.addEventListener('click', async () => {
      closeModal();
      try {
        await onConfirm();
      } catch (error) {
        console.error('Confirmation action error:', error);
        toast(error.message || 'Action failed. Check Console.');
      }
    });
  }
}

function openModal(html) {
  const root = document.getElementById('modalRoot');
  root.innerHTML = `<div class="modal-card">${html}</div>`;
  root.classList.remove('hidden');
  root.querySelectorAll('[data-close-modal]').forEach((btn) => btn.addEventListener('click', closeModal));
  root.addEventListener('click', modalBackdropClose);
}

function modalBackdropClose(event) {
  if (event.target.id === 'modalRoot') closeModal();
}

function closeModal() {
  const root = document.getElementById('modalRoot');
  root.classList.add('hidden');
  root.innerHTML = '';
  root.removeEventListener('click', modalBackdropClose);
}


// =========================================================
// V26: Personal notifications, public events, admin view/chat actions
// =========================================================
STORAGE.notifications = 'upsiGolfPersonalNotifications';
STORAGE.events = 'upsiGolfPublicEvents';
DB_TABLES.notifications = 'personal_notifications';
DB_TABLES.publicEvents = 'public_events';
window.UPSI_PERSONAL_NOTIFICATIONS_SUPABASE_ENABLED = false;
defaultData.notifications = [];
defaultData.events = [];
state.eventCarouselIndex = 0;

function personalNotificationsSupabaseEnabled() {
  return Boolean(window.UPSI_PERSONAL_NOTIFICATIONS_SUPABASE_ENABLED && SUPABASE_MODE && DB_TABLES?.notifications);
}

function ensureV26LocalStorage() {
  if (!localStorage.getItem(STORAGE.notifications)) localStorage.setItem(STORAGE.notifications, JSON.stringify([]));
  if (!localStorage.getItem(STORAGE.events)) localStorage.setItem(STORAGE.events, JSON.stringify([]));
}
ensureV26LocalStorage();

function currentProfileId() {
  return state.session?.id || '';
}

function currentUserIsAdditionalAdmin() {
  return state.session?.role === 'admin' && !isPrimaryAdmin(state.session);
}

function notificationToLocal(row = {}) {
  return {
    id: row.id,
    recipientId: row.recipient_id || '',
    senderId: row.sender_id || '',
    title: row.title || 'Notification',
    message: row.message || '',
    imageUrl: row.image_url || '',
    type: row.notification_type || 'personal',
    isRead: Boolean(row.is_read),
    createdAt: row.created_at || new Date().toISOString(),
  };
}

function eventToLocal(row = {}) {
  return {
    id: row.id,
    title: row.title || 'Announcement',
    category: row.category || 'Public Notification',
    description: row.description || '',
    eventDate: row.event_date || '',
    eventTime: row.event_time || '',
    location: row.location || '',
    imageUrl: row.image_url || '',
    status: row.status || 'active',
    createdBy: row.created_by || '',
    createdAt: row.created_at || new Date().toISOString(),
  };
}

function localNotificationToDb(item = {}) {
  return {
    id: isUuid(item.id) ? item.id : undefined,
    recipient_id: item.recipientId,
    sender_id: isUuid(item.senderId) ? item.senderId : null,
    title: item.title || 'Notification',
    message: item.message || '',
    image_url: item.imageUrl || null,
    notification_type: item.type || 'personal',
    is_read: Boolean(item.isRead),
    created_at: item.createdAt || new Date().toISOString(),
  };
}

function localEventToDb(item = {}) {
  return {
    id: isUuid(item.id) ? item.id : undefined,
    title: item.title || 'Announcement',
    category: item.category || 'Public Notification',
    description: item.description || '',
    event_date: item.eventDate || null,
    event_time: item.eventTime || null,
    location: item.location || null,
    image_url: item.imageUrl || null,
    status: item.status || 'active',
    created_by: isUuid(item.createdBy) ? item.createdBy : null,
    created_at: item.createdAt || new Date().toISOString(),
  };
}

async function fileToDataUrl(file, maxSize = 2500000) {
  if (!file) return '';
  if (file.size > maxSize) {
    toast('File is too large. Please use a file below 2.5MB.');
    return '';
  }
  return await new Promise((resolve) => {
    const reader = new FileReader();
    reader.onload = () => resolve(reader.result || '');
    reader.onerror = () => resolve('');
    reader.readAsDataURL(file);
  });
}

const v26BaseLoadSupabaseDataToLocal = loadSupabaseDataToLocal;
loadSupabaseDataToLocal = async function v26LoadSupabaseDataToLocal(options = {}) {
  const result = await v26BaseLoadSupabaseDataToLocal(options);
  ensureV26LocalStorage();
  if (!SUPABASE_MODE) return result;
  try {
    const [{ data: eventRows, error: eventError }, { data: sessionData }] = await Promise.all([
      supabaseClient.from(DB_TABLES.publicEvents).select('*').order('event_date', { ascending: true }).order('event_time', { ascending: true }),
      supabaseClient.auth.getSession(),
    ]);
    if (!eventError && Array.isArray(eventRows)) setLocalData('events', eventRows.map(eventToLocal));

    const authUser = sessionData?.session?.user;
    if (authUser) {
      const { data: profile } = await supabaseClient
        .from(DB_TABLES.profiles)
        .select('id')
        .eq('user_id', authUser.id)
        .maybeSingle();
      if (profile?.id && personalNotificationsSupabaseEnabled()) {
        const { data: notiRows, error: notiError } = await supabaseClient
          .from(DB_TABLES.notifications)
          .select('*')
          .eq('recipient_id', profile.id)
          .order('created_at', { ascending: false });
        if (!notiError && Array.isArray(notiRows)) setLocalData('notifications', notiRows.map(notificationToLocal));
      }
    }
  } catch (error) {
    console.error('V26 Supabase load error:', error);
  }
  return result;
};

const v26BaseSyncSupabaseWrite = syncSupabaseWrite;
syncSupabaseWrite = async function v26SyncSupabaseWrite(key, value) {
  if (key === 'notifications') return syncNotificationsToSupabase(value || []);
  if (key === 'events') return syncEventsToSupabase(value || []);
  return v26BaseSyncSupabaseWrite(key, value);
};

async function syncNotificationsToSupabase(items = []) {
  if (!personalNotificationsSupabaseEnabled()) return;
  for (const item of items) {
    if (!isUuid(item.recipientId)) continue;
    const payload = localNotificationToDb(item);
    const { error } = await supabaseClient
      .from(DB_TABLES.notifications)
      .upsert(payload, { onConflict: 'id' });
    if (error) console.error('Notification sync error:', error);
  }
}

async function syncEventsToSupabase(items = []) {
  if (!SUPABASE_MODE) return;
  for (const item of items) {
    const payload = localEventToDb(item);
    const { error } = await supabaseClient
      .from(DB_TABLES.publicEvents)
      .upsert(payload, { onConflict: 'id' });
    if (error) console.error('Public event sync error:', error);
  }
}

function visibleNotificationsForCurrentUser() {
  const current = getFreshSessionUser();
  return read('notifications')
    .filter((item) => item.recipientId === current.id)
    .sort((a, b) => new Date(b.createdAt) - new Date(a.createdAt));
}

function unreadNotificationCount() {
  return visibleNotificationsForCurrentUser().filter((item) => !item.isRead).length;
}

function topbarNotificationButton() {
  const count = unreadNotificationCount();
  return `
    <button class="notification-top-btn" type="button" data-open-notifications title="Personal notifications">
      <span>🔔</span>
      ${count ? `<b>${count}</b>` : ''}
    </button>
  `;
}

renderProfileChip = function v26RenderProfileChip() {
  const chip = document.getElementById('profileChip');
  const user = getFreshSessionUser();
  const name = user.fullName;
  chip.classList.add('profile-chip-v26');
  chip.innerHTML = `
    ${topbarNotificationButton()}
    <div class="profile-chip-user" data-open-profile-chip>
      ${avatarMarkup(user)}
      <div>
        <strong>${escapeHtml(name)}</strong>
        <span>${user.role === 'admin' ? (isPrimaryAdmin(user) ? 'Main Administrator' : 'Administrator') : 'User / Golfer'}</span>
      </div>
    </div>
  `;
  const goProfile = () => {
    state.currentPage = user.role === 'admin' ? 'settings' : 'profile';
    state.search = '';
    renderNav();
    renderPage();
  };
  const profileTarget = chip.querySelector('[data-open-profile-chip]');
  profileTarget.setAttribute('role', 'button');
  profileTarget.setAttribute('tabindex', '0');
  profileTarget.onclick = goProfile;
  profileTarget.onkeydown = (event) => {
    if (event.key === 'Enter' || event.key === ' ') {
      event.preventDefault();
      goProfile();
    }
  };
  const notifBtn = chip.querySelector('[data-open-notifications]');
  notifBtn.addEventListener('click', (event) => {
    event.stopPropagation();
    openNotificationCenter();
  });
};

function openNotificationCenter() {
  const notifications = visibleNotificationsForCurrentUser();
  openModal(`
    <div class="modal-head">
      <div>
        <p class="eyebrow">Personal Notification</p>
        <h2>Messages from Administration</h2>
        <p class="muted">Messages here are read-only. Users and additional admins cannot reply from this panel.</p>
      </div>
      <button class="close-btn" data-close-modal>&times;</button>
    </div>
    <div class="notification-list">
      ${notifications.map((item) => `
        <article class="notification-card ${item.isRead ? '' : 'unread'}">
          <div class="card-top">
            <div><p class="eyebrow">${new Date(item.createdAt).toLocaleString()}</p><h3>${escapeHtml(item.title)}</h3></div>
            ${item.isRead ? '<span class="status-pill confirmed">Read</span>' : '<span class="status-pill pending">New</span>'}
          </div>
          <p>${escapeHtml(item.message)}</p>
          ${item.imageUrl ? `<img class="notification-image" src="${escapeHtml(item.imageUrl)}" alt="Notification image">` : ''}
        </article>
      `).join('') || empty('No personal notification yet.')}
    </div>
  `);
  markNotificationsRead();
}

async function markNotificationsRead() {
  const current = getFreshSessionUser();
  const items = read('notifications');
  let changed = false;
  items.forEach((item) => {
    if (item.recipientId === current.id && !item.isRead) {
      item.isRead = true;
      changed = true;
    }
  });
  if (changed) setLocalData('notifications', items);
  if (personalNotificationsSupabaseEnabled() && isUuid(current.id)) {
    const { error } = await supabaseClient
      .from(DB_TABLES.notifications)
      .update({ is_read: true })
      .eq('recipient_id', current.id)
      .eq('is_read', false);
    if (error) console.error('Notification mark read error:', error);
  }
  renderProfileChip();
}



</script>
<?php
}

function upsi_section_login_module(): void
{
?>
<script>
window.UPSI_SECTION_MODULES = window.UPSI_SECTION_MODULES || {};
window.UPSI_SECTION_MODULES["login"] = {
  title: "Login/Register",
  runtimeChunk: '5/22',
  functions: ["renderAuth", "bindAuth"]
};
</script>
<?php
}

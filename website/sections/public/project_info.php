<?php
/**
 * project_info.php
 * Bahagian: Project Info sebelum login
 *
 * V108: CSS dan JavaScript runtime dibahagikan ke semua section.
 * Jadi home_page.php tidak lagi memegang semua coding sistem.
 *
 * Runtime chunk: 4/22
 * Fungsi berkaitan untuk presentation: v83RenderProject
 */


function upsi_section_project_info_styles(): void
{
?>
<style>
/* =========================================================
   V108 CSS chunk 4/22
   Bahagian: Project Info sebelum login
   ========================================================= */
.settings-summary-card {
  text-align: center;
}

.settings-summary-card h2 {
  color: var(--dark-green);
  margin-top: 14px;
}

.settings-summary-card p {
  color: var(--muted);
  overflow-wrap: anywhere;
  margin-bottom: 12px;
}

.settings-button-list {
  display: grid;
  gap: 14px;
  margin-top: 22px;
}

.setting-link-button {
  width: 100%;
  border: 1px solid rgba(15,81,50,0.10);
  background: var(--soft-green);
  border-radius: 22px;
  padding: 16px;
  display: grid;
  grid-template-columns: auto 1fr auto;
  gap: 14px;
  align-items: center;
  text-align: left;
  cursor: pointer;
  transition: 0.2s ease;
  color: var(--text);
}

.setting-link-button:hover {
  transform: translateY(-2px);
  border-color: rgba(15,81,50,0.25);
  box-shadow: 0 14px 28px rgba(15,81,50,0.10);
}

.setting-link-icon {
  width: 46px;
  height: 46px;
  border-radius: 16px;
  background: var(--dark-green);
  color: #fff;
  display: grid;
  place-items: center;
  font-size: 21px;
}

.setting-link-button strong,
.setting-link-button small,
.setting-link-button b {
  display: block;
}

.setting-link-button small {
  color: var(--muted);
  margin-top: 3px;
  line-height: 1.45;
}

.setting-link-button b {
  color: var(--dark-green);
}

.password-modal-form {
  margin-top: 16px;
}

@media (max-width: 900px) {
  .settings-action-layout {
    grid-template-columns: 1fr;
  }

  .setting-link-button {
    grid-template-columns: auto 1fr;
  }

  .setting-link-button b {
    grid-column: 2;
  }
}

/* V5 booking cancellation workflow */
.btn-icon-x {
  min-width: 42px;
  padding-inline: 13px;
  font-weight: 900;
  border: 1px solid rgba(220, 38, 38, 0.18);
}

.booking-detail-panel {
  display: grid;
  gap: 16px;
}

.booking-detail-list li {
  align-items: flex-start;
}

.booking-detail-list strong {
  text-align: right;
  max-width: 58%;
  overflow-wrap: anywhere;
}

.cancel-reason-box {
  padding: 18px;
  border-radius: 22px;
  border: 1px solid rgba(220, 38, 38, 0.14);
  background: #fff7f7;
}

.cancel-reason-box p:last-child {
  margin-top: 8px;
  color: var(--charcoal);
  line-height: 1.65;
  font-weight: 700;
}

@media (max-width: 640px) {
  .booking-detail-list li {
    display: block;
  }

  .booking-detail-list strong {
    display: block;
    max-width: 100%;
    text-align: left;
    margin-top: 4px;
  }
}

/* V7/V8 UPSI Driving Golf Range pricing, trainer details and QR/profile image fixes */
.price-reference-box,
.price-list-panel,
.trainer-reference-card {
  border: 1px solid rgba(15,81,50,0.10);
  border-radius: 20px;
  background: var(--soft-green);
  padding: 16px;
}

.price-reference-box {
  display: grid;
  gap: 7px;
  margin: 14px 0;
}

.price-reference-box strong {
  color: var(--dark-green);
  margin-top: 4px;
}

.price-reference-box span {
  color: var(--charcoal);
  font-weight: 800;
}

.compact-price-box {
  margin: 14px 0 0;
}

.price-list-panel {
  display: grid;
  grid-template-columns: repeat(3, minmax(0, 1fr));
  gap: 14px;
  background: #ffffff;
}

.price-column {
  border-radius: 18px;
  background: var(--soft-green);
  padding: 16px;
}

.price-column h3 {
  color: var(--dark-green);
  margin: 0 0 10px;
}

.price-column p {
  margin: 6px 0;
  color: var(--charcoal);
  font-weight: 800;
}

.clean-admin-range .booking-tabs {
  display: none;
}

.trainer-reference-card {
  background: linear-gradient(135deg, #ffffff, var(--soft-green));
}

.trainer-reference-card p:last-child {
  color: var(--charcoal);
  font-weight: 900;
  line-height: 1.65;
  margin-bottom: 0;
}

.trainer-card-clean .meta-list strong,
.driving-card-clean .meta-list strong {
  overflow-wrap: anywhere;
  text-align: right;
}

.qr-code img,
.qr-mini img {
  width: 100%;
  height: 100%;
  object-fit: contain;
  border-radius: inherit;
  background: #fff;
  display: block;
}

.qr-settings-preview {
  display: flex;
  justify-content: center;
  align-items: center;
  border: 1px dashed rgba(15,81,50,0.25);
  border-radius: 20px;
  padding: 12px;
  background: var(--soft-green);
}

.trainer-note-box small {
  display: block;
  margin-top: 6px;
  line-height: 1.45;
}

@media (max-width: 900px) {
  .price-list-panel {
    grid-template-columns: 1fr;
  }

  .trainer-card-clean .meta-list li,
  .driving-card-clean .meta-list li {
    display: block;
  }

  .trainer-card-clean .meta-list strong,
  .driving-card-clean .meta-list strong {
    display: block;
    text-align: left;
    margin-top: 4px;
  }
}

/* V8 clearer borders and profile/settings refinement */
:root {
  --line: #bfd7c7;
  --strong-line: rgba(15,81,50,0.22);
}

.feature-card,
.card,
.stat-card,
.table-card,
.empty-state,
.profile-preview-card,
.account-card,
.settings-system-card,
.auth-card,
.profile-chip,
.price-reference-box,
.price-list-panel,
.trainer-reference-card,
.app-booking-card,
.booking-option-card,
.mobile-select-row,
.qr-box,
.qr-settings-preview {
  border: 1.5px solid var(--strong-line) !important;
}

.table-card table th,
.table-card table td {
  border-bottom: 1.5px solid rgba(15,81,50,0.14);
}

.meta-list li {
  border-top: 1.5px dashed rgba(15,81,50,0.20);
}

.nav-btn.active,
.nav-btn:hover {
  box-shadow: inset 0 0 0 1.5px rgba(15,81,50,0.22);
}

.strong-border-card {
  border: 2px solid rgba(15,81,50,0.24) !important;
}

.profile-account-actions {
  margin-top: 20px;
  padding-top: 18px;
  border-top: 1.5px dashed rgba(15,81,50,0.20);
}


</style>
<?php
}

function upsi_section_project_info_scripts(): void
{
?>
<script>
/* =========================================================
   V108 JavaScript chunk 4/22
   Bahagian: Project Info sebelum login
   ========================================================= */
function userFeedback() {
  setTitle('Feedback', 'Review and Rating');
  const myReviews = read('reviews').filter((r) => r.userId === state.session.id);
  content().innerHTML = `
    <div class="card" style="max-width:760px">
      <p class="eyebrow">Submit Review</p>
      <h2>How was your golf booking experience?</h2>
      <form id="reviewForm" class="form-stack">
        <label>Rating</label>
        <div class="review-stars">
          ${[1,2,3,4,5].map((n) => `<label><input type="radio" name="rating" value="${n}" ${n === 5 ? 'checked' : ''}> ${'⭐'.repeat(n)}</label>`).join('')}
        </div>
        <label>Feedback
          <textarea name="message" placeholder="Write your review or suggestion" required></textarea>
        </label>
        <button class="btn btn-primary" type="submit">Submit Feedback</button>
      </form>
    </div>
    <div style="height:22px"></div>
    <div class="card-grid">
      ${myReviews.map(reviewCard).join('') || empty('No feedback submitted yet.')}
    </div>
  `;

  document.getElementById('reviewForm').addEventListener('submit', (event) => {
    event.preventDefault();
    const form = new FormData(event.currentTarget);
    const reviews = read('reviews');
    reviews.unshift({
      id: makeId('R'),
      userId: state.session.id,
      userName: state.session.fullName,
      rating: Number(form.get('rating')),
      message: form.get('message').trim(),
      createdAt: new Date().toISOString(),
    });
    write('reviews', reviews);
    userFeedback();
    toast('Feedback submitted.');
  });
}

function coursePriceLabel(course) {
  if (isDrivingCourse(course)) {
    return bucketPriceLabel(course);
  }
  return money(course.price);
}

function courseCard(course) {
  const buckets = getBucketOptions(course);
  return `
    <article class="card driving-card-clean">
      <div class="card-top">
        <div>
          <p class="eyebrow">Driving Range</p>
          <h3>${escapeHtml(course.name)}</h3>
        </div>
        <div class="card-icon">⛳</div>
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
        <button class="btn btn-primary" data-book-course="${course.id}">Book Driving Range</button>
      </div>
    </article>
  `;
}

function trainerCard(trainer) {
  return `
    <article class="card trainer-card-clean">
      <div class="card-top">
        <div>
          <p class="eyebrow">Pelatih</p>
          <h3>${escapeHtml(trainer.name)}</h3>
        </div>
        <div class="card-icon">🏌️</div>
      </div>
      <ul class="meta-list">
        <li><span>No. Phone</span><strong>${escapeHtml(trainer.phone || '-')}</strong></li>
        <li><span>Email</span><strong>${escapeHtml(trainer.email || '-')}</strong></li>
        <li><span>Alamat</span><strong>${escapeHtml(trainer.address || '-')}</strong></li>
        <li><span>Specialist</span><strong>${escapeHtml(trainer.description || 'Golf coaching and guided practice')}</strong></li>
        <li><span>Status</span><strong>${escapeHtml(trainer.status)}</strong></li>
      </ul>
      <div class="trainer-availability-row">
        ${availabilityButtonMarkup('trainer', trainer.id, 'View Available Time')}
      </div>
      <div class="card-actions">
        <button class="btn btn-primary" data-book-trainer="${trainer.id}">Book Trainer</button>
      </div>
    </article>
  `;
}

function bindCourseButtons() {
  content().querySelectorAll('[data-book-course]').forEach((btn) => {
    btn.addEventListener('click', () => openBookingModal({ courseId: btn.dataset.bookCourse }));
  });
}

function bindTrainerButtons() {
  content().querySelectorAll('[data-book-trainer]').forEach((btn) => {
    btn.addEventListener('click', () => openTrainerBookingModal({ trainerId: btn.dataset.bookTrainer }));
  });
}

function openBookingModal(prefill = {}, existingBooking = null) {
  if (existingBooking?.bookingType === 'trainer') {
    openTrainerBookingModal({ trainerId: existingBooking.trainerId }, existingBooking);
    return;
  }

  const courses = getDrivingCourses(read('courses').filter((c) => c.status === 'Available'));
  const drivingCourse = getDrivingCourse(courses);
  const booking = existingBooking || {};
  const initialCourseId = booking.courseId || prefill.courseId || drivingCourse?.id || courses[0]?.id || '';
  const initialCourse = courses.find((c) => c.id === initialCourseId) || drivingCourse || courses[0];

  if (!initialCourse) {
    toast('No available driving range to book.');
    return;
  }

  const availableDates = availableDatesFor('driving', initialCourse.id);
  if (!availableDates.length && !existingBooking) {
    toast('No available date and tee time for this driving range yet. Please wait for admin to add tee time slots.');
    return;
  }
  const modalDates = [...availableDates];
  if (booking.date && !modalDates.includes(booking.date)) modalDates.unshift(booking.date);

  const selectedDate = modalDates.includes(booking.date) ? booking.date : (modalDates[0] || '');
  const availableTimes = timeOptionsFor('driving', initialCourse.id, selectedDate, booking.time);
  const selectedTime = availableTimes.includes(booking.time) ? booking.time : (availableTimes[0] || '');
  const bucketOptions = getBucketOptions(initialCourse);
  const selectedBucketId = booking.bucketOptionId || bucketOptions[0]?.id;
  const selectedBucketCount = booking.bucketCount || 1;
  const selectedMembership = booking.membershipType || 'non-member';

  openModal(`
    <div class="modal-head">
      <div>
        <p class="eyebrow">${existingBooking ? 'Reschedule Driving Range' : 'New Driving Range Booking'}</p>
        <h2>${existingBooking ? 'Update driving range details' : 'Book Driving Range'}</h2>
        <p class="muted">Choose membership category, ball bucket, number of buckets, available date and tee time. Trainer booking is managed separately under the Trainer page.</p>
      </div>
      <button class="close-btn" data-close-modal>&times;</button>
    </div>
    <form id="bookingForm" class="form-grid">
      <label class="wide">Driving Range
        <select name="courseId" data-modal-course required>
          ${courses.map((c) => `<option value="${c.id}" ${initialCourseId === c.id ? 'selected' : ''}>${escapeHtml(c.name)}</option>`).join('')}
        </select>
      </label>
      <label>Membership Category
        <select name="membershipType" data-modal-membership required>
          <option value="non-member" ${selectedMembership !== 'member' ? 'selected' : ''}>Non-member</option>
          <option value="member" ${selectedMembership === 'member' ? 'selected' : ''}>Member</option>
        </select>
      </label>
      <label>Ball Bucket
        <select name="bucketOptionId" data-modal-bucket required>
          ${bucketOptions.map((bucket) => `<option value="${bucket.id}" ${selectedBucketId === bucket.id ? 'selected' : ''}>${escapeHtml(bucket.label)}</option>`).join('')}
        </select>
      </label>
      <label>Number of Buckets
        <select name="bucketCount" data-modal-count required>
          ${getBucketCounts(initialCourse).map((count) => `<option value="${count}" ${Number(selectedBucketCount) === count ? 'selected' : ''}>${count} ${count === 1 ? 'bucket' : 'buckets'}</option>`).join('')}
        </select>
      </label>
      <label>Available Date
        <select name="date" data-modal-date required>
          ${dateOptionMarkup(modalDates, selectedDate)}
        </select>
      </label>
      <label>Tee Time
        <select name="time" data-modal-time required>
          ${timeOptionMarkup(availableTimes, selectedTime)}
        </select>
      </label>
      <label class="wide">Payment Method
        <select name="paymentMethod" required>
          <option value="QR Payment" ${booking.paymentMethod !== 'Pay at Counter' ? 'selected' : ''}>QR Payment</option>
          <option value="Pay at Counter" ${booking.paymentMethod === 'Pay at Counter' ? 'selected' : ''}>Pay at Counter</option>
        </select>
      </label>
      <div class="calculation-row wide modal-total-row">
        <div><span>🔢</span> <span data-modal-formula>1 × 50 balls = 50 balls</span></div>
        <strong data-modal-total>RM 10</strong>
      </div>
      <button class="btn btn-primary wide" type="submit">${existingBooking ? 'Save Reschedule' : 'Submit Booking'}</button>
    </form>
  `);

  const form = document.getElementById('bookingForm');
  const getSelectedCourse = () => courses.find((c) => c.id === form.courseId.value) || drivingCourse || courses[0];

  const refreshTimeFields = (preferredTime = '') => {
    const course = getSelectedCourse();
    const date = form.date.value;
    const times = timeOptionsFor('driving', course.id, date, preferredTime || form.time.value);
    const selected = times.includes(preferredTime || form.time.value) ? (preferredTime || form.time.value) : (times[0] || '');
    form.time.innerHTML = timeOptionMarkup(times, selected);
  };

  const refreshScheduleFields = (keepCurrent = true) => {
    const course = getSelectedCourse();
    const currentDate = keepCurrent ? form.date.value : '';
    const dates = availableDatesFor('driving', course.id);
    const selected = dates.includes(currentDate) ? currentDate : (dates[0] || '');
    form.date.innerHTML = dateOptionMarkup(dates, selected);
    refreshTimeFields(keepCurrent ? form.time.value : '');
  };

  const refreshBucketFields = (keepCurrent = true) => {
    const course = getSelectedCourse();
    const currentBucket = keepCurrent ? form.bucketOptionId.value : '';
    const currentCount = keepCurrent ? Number(form.bucketCount.value || selectedBucketCount) : Number(selectedBucketCount || 1);
    const options = getBucketOptions(course);
    const selected = options.some((bucket) => bucket.id === currentBucket) ? currentBucket : options[0]?.id;
    form.bucketOptionId.innerHTML = options.map((bucket) => `<option value="${bucket.id}" ${selected === bucket.id ? 'selected' : ''}>${escapeHtml(bucket.label)}</option>`).join('');

    const counts = getBucketCounts(course);
    const safeCount = counts.includes(currentCount) ? currentCount : counts[0];
    form.bucketCount.innerHTML = counts.map((count) => `<option value="${count}" ${count === safeCount ? 'selected' : ''}>${count} ${count === 1 ? 'bucket' : 'buckets'}</option>`).join('');
    refreshModalTotal();
  };

  const refreshModalTotal = () => {
    const course = getSelectedCourse();
    const membershipType = form.membershipType.value || 'non-member';
    const bucket = bucketById(form.bucketOptionId.value, course);
    const count = Number(form.bucketCount.value || 1);
    const totalBalls = bucket.balls * count;
    const amount = bucketUnitPrice(bucket, membershipType) * count;
    form.querySelector('[data-modal-formula]').textContent = `${membershipLabel(membershipType)} • ${count} × ${bucket.balls} balls = ${totalBalls} balls`;
    form.querySelector('[data-modal-total]').textContent = money(amount);
  };

  form.courseId.addEventListener('change', () => {
    refreshBucketFields(false);
    refreshScheduleFields(false);
  });
  form.date.addEventListener('change', () => refreshTimeFields(''));
  form.membershipType.addEventListener('change', refreshModalTotal);
  form.bucketOptionId.addEventListener('change', refreshModalTotal);
  form.bucketCount.addEventListener('change', refreshModalTotal);
  refreshBucketFields(true);
  refreshScheduleFields(true);

  form.addEventListener('submit', (event) => {
    event.preventDefault();
    const formData = new FormData(event.currentTarget);
    if (!formData.get('date') || !formData.get('time')) {
      toast('Please select an available date and tee time.');
      return;
    }
    const course = courses.find((c) => c.id === formData.get('courseId')) || drivingCourse;
    const membershipType = formData.get('membershipType') || 'non-member';
    const bucket = bucketById(formData.get('bucketOptionId'), course);
    const bucketCount = Number(formData.get('bucketCount') || 1);
    const unitPrice = bucketUnitPrice(bucket, membershipType);
    const bookings = read('bookings');
    const amount = bucketAmount(bucket.id, bucketCount, course, membershipType);

    if (existingBooking) {
      const item = bookings.find((b) => b.id === existingBooking.id);
      item.bookingType = 'driving';
      item.courseId = course.id;
      item.courseName = course.name;
      item.trainerId = '';
      item.trainerName = 'No trainer';
      item.bucketOptionId = bucket.id;
      item.bucketLabel = bucket.label;
      item.bucketBalls = bucket.balls;
      item.bucketPrice = unitPrice;
      item.membershipType = membershipType;
      item.bucketCount = bucketCount;
      item.totalBalls = bucket.balls * bucketCount;
      item.date = formData.get('date');
      item.time = formData.get('time');
      item.amount = amount;
      item.paymentMethod = formData.get('paymentMethod');
      item.bookingStatus = 'Pending Confirmation';
      item.paymentStatus = formData.get('paymentMethod') === 'QR Payment' ? 'Pending Verification' : 'Pay at Counter';
      write('bookings', bookings);
      closeModal();
      userBookings();
      toast('Driving range booking rescheduled. Waiting admin confirmation.');
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
      bucketCount,
      totalBalls: bucket.balls * bucketCount,
      date: formData.get('date'),
      time: formData.get('time'),
      amount,
      bookingStatus: 'Pending Confirmation',
      paymentStatus: formData.get('paymentMethod') === 'QR Payment' ? 'Pending Verification' : 'Pay at Counter',
      paymentMethod: formData.get('paymentMethod'),
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
    closeModal();
    state.currentPage = 'mybookings';
    renderNav();
    renderPage();
    toast('Driving range booking submitted successfully.');
  });
}

function openTrainerBookingModal(prefill = {}, existingBooking = null) {
  const trainers = read('trainers').filter((t) => t.status === 'Available');
  const booking = existingBooking || {};
  const selectedTrainerId = booking.trainerId || prefill.trainerId || trainers[0]?.id || '';
  const selectedTrainer = trainers.find((t) => t.id === selectedTrainerId) || trainers[0];

  if (!selectedTrainer) {
    toast('No available trainer to book.');
    return;
  }

  const availableDates = availableDatesFor('trainer', selectedTrainer.id);
  if (!availableDates.length && !existingBooking) {
    toast('No available date and time for this trainer yet. Please wait for admin to add trainer time slots.');
    return;
  }
  const modalDates = [...availableDates];
  if (booking.date && !modalDates.includes(booking.date)) modalDates.unshift(booking.date);
  const selectedDate = modalDates.includes(booking.date) ? booking.date : (modalDates[0] || '');
  const availableTimes = timeOptionsFor('trainer', selectedTrainer.id, selectedDate, booking.time);
  const selectedTime = availableTimes.includes(booking.time) ? booking.time : (availableTimes[0] || '');

  openModal(`
    <div class="modal-head">
      <div>
        <p class="eyebrow">${existingBooking ? 'Reschedule Trainer' : 'New Trainer Booking'}</p>
        <h2>${existingBooking ? 'Update trainer session' : 'Book Trainer'}</h2>
        <p class="muted">Choose trainer, available date and available time only. No ball bucket selection is required.</p>
      </div>
      <button class="close-btn" data-close-modal>&times;</button>
    </div>
    <form id="trainerBookingForm" class="form-grid">
      <label class="wide">Trainer
        <select name="trainerId" data-trainer-booking-select required>
          ${trainers.map((t) => `<option value="${t.id}" ${selectedTrainerId === t.id ? 'selected' : ''}>${escapeHtml(t.name)}</option>`).join('')}
        </select>
      </label>
      <label>Available Date
        <select name="date" data-trainer-date required>
          ${dateOptionMarkup(modalDates, selectedDate)}
        </select>
      </label>
      <label>Available Time
        <select name="time" data-trainer-time required>
          ${timeOptionMarkup(availableTimes, selectedTime)}
        </select>
      </label>
      <div class="bucket-info wide trainer-note-box">
        <span class="info-icon">🎓</span>
        <div>
          <p>No ball bucket selection is required for trainer booking.</p>
          <strong data-trainer-contact>${escapeHtml(selectedTrainer.name)} • ${escapeHtml(selectedTrainer.phone || '-')}</strong>
          <small class="muted" data-trainer-extra>${escapeHtml(selectedTrainer.email || '-')} • ${escapeHtml(selectedTrainer.address || '-')}</small>
          <small class="muted" data-trainer-availability>Available: ${escapeHtml(availabilitySummary('trainer', selectedTrainer.id))}</small>
        </div>
      </div>
      <button class="btn btn-primary wide" type="submit">${existingBooking ? 'Save Reschedule' : 'Submit Trainer Booking'}</button>
    </form>
  `);

  const form = document.getElementById('trainerBookingForm');

  const refreshTrainerSchedule = (keepCurrent = true) => {
    const trainer = trainers.find((t) => t.id === form.trainerId.value) || selectedTrainer;
    const currentDate = keepCurrent ? form.date.value : '';
    const dates = availableDatesFor('trainer', trainer.id);
    const selected = dates.includes(currentDate) ? currentDate : (dates[0] || '');
    form.date.innerHTML = dateOptionMarkup(dates, selected);
    refreshTrainerTimes(keepCurrent ? form.time.value : '');
  };

  const refreshTrainerTimes = (preferredTime = '') => {
    const trainer = trainers.find((t) => t.id === form.trainerId.value) || selectedTrainer;
    const date = form.date.value;
    const times = timeOptionsFor('trainer', trainer.id, date, preferredTime || form.time.value);
    const selected = times.includes(preferredTime || form.time.value) ? (preferredTime || form.time.value) : (times[0] || '');
    form.time.innerHTML = timeOptionMarkup(times, selected);
  };

  const refreshTrainerInfo = () => {
    const trainer = trainers.find((t) => t.id === form.trainerId.value) || selectedTrainer;
    form.querySelector('[data-trainer-contact]').textContent = `${trainer.name} • ${trainer.phone || '-'}`;
    form.querySelector('[data-trainer-extra]').textContent = `${trainer.email || '-'} • ${trainer.address || '-'}`;
    form.querySelector('[data-trainer-availability]').textContent = `Available: ${availabilitySummary('trainer', trainer.id)}`;
  };

  form.trainerId.addEventListener('change', () => {
    refreshTrainerInfo();
    refreshTrainerSchedule(false);
  });
  form.date.addEventListener('change', () => refreshTrainerTimes(''));
  refreshTrainerInfo();
  refreshTrainerSchedule(true);

  form.addEventListener('submit', (event) => {
    event.preventDefault();
    const formData = new FormData(event.currentTarget);
    if (!formData.get('date') || !formData.get('time')) {
      toast('Please select an available trainer date and time.');
      return;
    }
    const trainer = trainers.find((t) => t.id === formData.get('trainerId')) || selectedTrainer;
    const bookings = read('bookings');

    if (existingBooking) {
      const item = bookings.find((b) => b.id === existingBooking.id);
      item.bookingType = 'trainer';
      item.courseId = '';
      item.courseName = 'Trainer Coaching Session';
      item.trainerId = trainer.id;
      item.trainerName = trainer.name;
      item.bucketOptionId = '';
      item.bucketLabel = '';
      item.bucketBalls = 0;
      item.bucketPrice = 0;
      item.bucketCount = 0;
      item.totalBalls = 0;
      item.date = formData.get('date');
      item.time = formData.get('time');
      item.amount = 0;
      item.paymentMethod = 'No Payment Required';
      item.bookingStatus = 'Pending Confirmation';
      item.paymentStatus = 'Not Required';
      write('bookings', bookings);
      closeModal();
      userBookings();
      toast('Trainer booking rescheduled. Waiting admin confirmation.');
      return;
    }

    bookings.unshift({
      id: makeId('B'),
      bookingType: 'trainer',
      userId: state.session.id,
      customerName: state.session.fullName,
      customerEmail: state.session.email,
      courseId: '',
      courseName: 'Trainer Coaching Session',
      trainerId: trainer.id,
      trainerName: trainer.name,
      bucketOptionId: '',
      bucketLabel: '',
      bucketBalls: 0,
      bucketPrice: 0,
      bucketCount: 0,
      totalBalls: 0,
      date: formData.get('date'),
      time: formData.get('time'),
      amount: 0,
      bookingStatus: 'Pending Confirmation',
      paymentStatus: 'Not Required',
      paymentMethod: 'No Payment Required',
      receiptNote: '',
      receiptImage: '',
      hiddenForUsers: [],
      hiddenForAdmin: false,
      cancelReason: '',
      cancelledBy: '',
      cancellationType: '',
      cancelledAt: '',
      createdAt: new Date().toISOString(),
    });
    write('bookings', bookings);
    closeModal();
    state.currentPage = 'mybookings';
    renderNav();
    renderPage();
    toast('Trainer booking submitted successfully.');
  });
}

function bookingPackageLine(booking) {
  if (booking.bookingType === 'trainer') {
    return '<br><span class="muted">Trainer coaching session • No bucket required</span>';
  }
  if (!booking.bucketLabel) return '';
  const count = Number(booking.bucketCount || 1);
  const balls = Number(booking.totalBalls || (booking.bucketBalls || 0) * count);
  const memberText = booking.membershipType ? `${membershipLabel(booking.membershipType)} • ` : '';
  return `<br><span class="muted">${memberText}${count} × ${escapeHtml(booking.bucketLabel)} = ${balls} balls</span>`;
}

function receiptEvidenceLine(booking = {}) {
  if (booking.receiptImage) {
    return `<br><a class="text-link" href="${escapeHtml(booking.receiptImage)}" target="_blank" rel="noopener">View Receipt File</a>`;
  }
  if (booking.receiptNote) {
    return `<br><span class="muted">Receipt note: ${escapeHtml(booking.receiptNote)}</span>`;
  }
  return '';
}

function bookingTitle(booking) {
  return booking.bookingType === 'trainer' ? 'Trainer Coaching Session' : (booking.courseName || 'Driving Range Booking');
}

function bookingTable(bookings, mode = 'admin') {
  if (!bookings.length) return empty('No booking record found.');
  return `
    <div class="table-card">
      <div class="table-wrap">
        <table>
          <thead>
            <tr>
              <th>Booking</th>
              <th>Customer</th>
              <th>Schedule</th>
              <th>Amount</th>
              <th>Status</th>
              <th>Payment</th>
              <th>Action</th>
            </tr>
          </thead>
          <tbody>
            ${bookings.map((b) => `
              <tr>
                <td><strong>${escapeHtml(b.id)}</strong><br>${escapeHtml(bookingTitle(b))}${bookingPackageLine(b)}<br><span class="muted">Trainer: ${escapeHtml(b.trainerName)}</span></td>
                <td>${escapeHtml(b.customerName)}<br><span class="muted">${escapeHtml(b.customerEmail)}</span></td>
                <td>${escapeHtml(b.date)}<br>${escapeHtml(b.time)}</td>
                <td><strong>${money(b.amount)}</strong></td>
                <td>${statusPill(b.bookingStatus)}</td>
                <td>${statusPill(b.paymentStatus)}<br><span class="muted">${escapeHtml(b.paymentMethod)}</span>${receiptEvidenceLine(b)}</td>
                <td><div class="row-actions">${bookingActions(b, mode)}</div></td>
              </tr>
            `).join('')}
          </tbody>
        </table>
      </div>
    </div>
  `;
}

function bookingActions(b, mode) {
  if (isBookingCancelled(b)) {
    const undoButton = mode === 'user' && b.cancelledBy === 'user' && ['user_cancelled', 'confirmed_user_cancelled'].includes(b.cancellationType)
      ? `<button class="btn btn-warning-soft" data-undo-cancel="${b.id}">Undo</button>`
      : '';
    const removeButton = isProtectedBookingReference(b)
      ? `<span class="status-pill pending" title="Verified booking records are kept for reference.">Reference</span>`
      : `<button class="btn btn-danger-soft btn-icon-x" title="Delete cancelled booking record" data-hide-booking="${b.id}">X</button>`;
    return `
      <button class="btn btn-soft" data-view-booking="${b.id}">View</button>
      ${undoButton}
      ${removeButton}
    `;
  }

  if (mode === 'user') {
    return `
      <button class="btn btn-soft" data-reschedule="${b.id}">Reschedule</button>
      <button class="btn btn-danger-soft" data-cancel="${b.id}">Cancel</button>
    `;
  }
  if (mode === 'payment') {
    return `<button class="btn btn-primary" data-upload-receipt="${b.id}">Upload Receipt</button>`;
  }
  if (mode === 'payments-admin') {
    return `
      <button class="btn btn-soft" data-verify-payment="${b.id}">Verify</button>
      <button class="btn btn-danger-soft" data-reject-payment="${b.id}">Reject</button>
    `;
  }
  return `
    <button class="btn btn-soft" data-confirm-booking="${b.id}">Confirm</button>
    <button class="btn btn-warning-soft" data-pending-booking="${b.id}">Pending</button>
    <button class="btn btn-danger-soft" data-cancel="${b.id}">Cancel</button>
  `;
}

function bindBookingActions(mode) {
  content().querySelectorAll('[data-cancel]').forEach((btn) => {
    btn.addEventListener('click', () => {
      if (mode === 'user' || mode === 'payment') {
        const booking = read('bookings').find((item) => item.id === btn.dataset.cancel);
        if (booking && String(booking.bookingStatus).toLowerCase() === 'confirmed' && String(booking.paymentStatus).toLowerCase() === 'verified') {
          openUserConfirmedCancelModal(btn.dataset.cancel);
          return;
        }
        confirmAction({
          title: 'Cancel Booking',
          message: 'Are you sure you want to cancel this booking? You can undo this cancellation later from My Bookings.',
          confirmText: 'Cancel Booking',
          danger: true,
          onConfirm: () => cancelBookingAsUser(btn.dataset.cancel),
        });
      } else {
        openAdminCancelBookingModal(btn.dataset.cancel);
      }
    });
  });
  content().querySelectorAll('[data-confirm-booking]').forEach((btn) => {
    btn.addEventListener('click', () => updateBooking(btn.dataset.confirmBooking, { bookingStatus: 'Confirmed' }, true));
  });
  content().querySelectorAll('[data-pending-booking]').forEach((btn) => {
    btn.addEventListener('click', () => updateBooking(btn.dataset.pendingBooking, { bookingStatus: 'Pending Confirmation' }, true));
  });
  content().querySelectorAll('[data-verify-payment]').forEach((btn) => {
    btn.addEventListener('click', () => updateBooking(btn.dataset.verifyPayment, { paymentStatus: 'Verified' }, true));
  });
  content().querySelectorAll('[data-reject-payment]').forEach((btn) => {
    btn.addEventListener('click', () => {
      confirmAction({
        title: 'Reject Payment',
        message: 'Rejecting this payment will automatically cancel the booking. The user will see a professional cancellation reason related to payment verification. Continue?',
        confirmText: 'Reject Payment',
        danger: true,
        onConfirm: () => rejectPaymentAndCancel(btn.dataset.rejectPayment),
      });
    });
  });
  content().querySelectorAll('[data-reschedule]').forEach((btn) => {
    btn.addEventListener('click', () => {
      const booking = read('bookings').find((b) => b.id === btn.dataset.reschedule);
      if (booking?.bookingType === 'trainer') openTrainerBookingModal({ trainerId: booking.trainerId }, booking);
      else openBookingModal({}, booking);
    });
  });
  content().querySelectorAll('[data-upload-receipt]').forEach((btn) => {
    btn.addEventListener('click', () => openReceiptModal(btn.dataset.uploadReceipt));
  });
  content().querySelectorAll('[data-view-booking]').forEach((btn) => {
    btn.addEventListener('click', () => openCancelledBookingDetail(btn.dataset.viewBooking));
  });
  content().querySelectorAll('[data-hide-booking]').forEach((btn) => {
    btn.addEventListener('click', () => {
      confirmAction({
        title: 'Delete Cancelled Booking',
        message: 'Are you sure you want to delete this cancelled booking? Unverified cancelled bookings will be removed from the website and Supabase database.',
        confirmText: 'Delete Booking',
        danger: true,
        onConfirm: () => deleteCancelledBookingForCurrentSite(btn.dataset.hideBooking),
      });
    });
  });
  content().querySelectorAll('[data-undo-cancel]').forEach((btn) => {
    btn.addEventListener('click', () => {
      confirmAction({
        title: 'Undo Cancellation',
        message: 'Do you want to undo your cancellation and return this booking to active status?',
        confirmText: 'Undo Cancellation',
        onConfirm: () => undoUserCancellation(btn.dataset.undoCancel),
      });
    });
  });
}

function updateBooking(id, patch, rerender = false) {
  const bookings = read('bookings');
  const booking = bookings.find((b) => b.id === id);
  if (!booking) return;
  Object.assign(booking, patch);
  write('bookings', bookings);
  if (rerender) renderPage();
  toast('Booking updated.');
}


function openUserConfirmedCancelModal(id) {
  const booking = read('bookings').find((b) => b.id === id);
  if (!booking) return;
  openModal(`
    <div class="modal-head">
      <div>
        <p class="eyebrow">Confirmed Booking Cancellation</p>
        <h2>Reason Required</h2>
        <p class="muted">${escapeHtml(CONFIRMED_USER_CANCEL_REASON_HELP)}</p>
      </div>
      <button class="close-btn" data-close-modal>&times;</button>
    </div>
    <form id="confirmedCancelForm" class="form-stack">
      <div class="booking-detail-panel">
        <ul class="meta-list">
          <li><span>Booking ID</span><strong>${escapeHtml(booking.id)}</strong></li>
          <li><span>Schedule</span><strong>${escapeHtml(booking.date)} • ${escapeHtml(booking.time)}</strong></li>
          <li><span>Payment</span><strong>${escapeHtml(booking.paymentStatus)}</strong></li>
        </ul>
      </div>
      <label>Cancellation Reason
        <textarea name="cancelReason" required placeholder="Example: I am unable to attend due to an urgent matter."></textarea>
      </label>
      <button class="btn btn-danger-soft" type="submit">Submit Cancellation</button>
    </form>
  `);
  document.getElementById('confirmedCancelForm').addEventListener('submit', (event) => {
    event.preventDefault();
    const reason = new FormData(event.currentTarget).get('cancelReason').trim();
    if (!reason) return toast('Please enter a reason for this confirmed booking cancellation.');
    confirmAction({
      title: 'Confirm Cancellation Review',
      message: 'This confirmed and paid booking will be cancelled and kept for admin review. You can undo it from My Bookings if this was a mistake.',
      confirmText: 'Cancel Booking',
      danger: true,
      onConfirm: () => {
        const bookings = read('bookings');
        const target = bookings.find((b) => b.id === id);
        if (!target) return;
        target.previousBookingStatus = target.bookingStatus || 'Confirmed';
        target.previousPaymentStatus = target.paymentStatus || 'Verified';
        target.bookingStatus = 'Cancelled';
        target.cancelledBy = 'user';
        target.cancelledById = state.session?.id || '';
        target.cancellationType = 'confirmed_user_cancelled';
        target.cancelReason = reason;
        target.cancelledAt = new Date().toISOString();
        write('bookings', bookings);
        closeModal();
        renderPage();
        toast('Confirmed booking cancelled and sent to admin review.');
      },
    });
  });
}

function cancelBookingAsUser(id) {
  const bookings = read('bookings');
  const booking = bookings.find((b) => b.id === id);
  if (!booking) return;
  booking.previousBookingStatus = booking.bookingStatus || 'Pending Confirmation';
  booking.previousPaymentStatus = booking.paymentStatus || '';
  booking.bookingStatus = 'Cancelled';
  booking.cancelledBy = 'user';
  booking.cancelledById = state.session?.id || '';
  booking.cancellationType = 'user_cancelled';
  booking.cancelReason = USER_CANCEL_DEFAULT_REASON;
  booking.cancelledAt = new Date().toISOString();
  write('bookings', bookings);
  renderPage();
  toast('Booking cancelled. You can undo this cancellation from My Bookings.');
}

function undoUserCancellation(id) {
  const bookings = read('bookings');
  const booking = bookings.find((b) => b.id === id);
  if (!booking) return;
  if (!(booking.cancelledBy === 'user' && ['user_cancelled', 'confirmed_user_cancelled'].includes(booking.cancellationType))) {
    toast('Only user cancellation can be undone.');
    return;
  }
  booking.bookingStatus = booking.previousBookingStatus && booking.previousBookingStatus !== 'Cancelled'
    ? booking.previousBookingStatus
    : 'Pending Confirmation';
  if (booking.previousPaymentStatus) booking.paymentStatus = booking.previousPaymentStatus;
  booking.cancelledBy = '';
  booking.cancelledById = '';
  booking.cancellationType = '';
  booking.cancelReason = '';
  booking.cancelledAt = '';
  booking.previousBookingStatus = '';
  booking.previousPaymentStatus = '';
  write('bookings', bookings);
  renderPage();
  toast('Booking cancellation has been undone.');
}

function openAdminCancelBookingModal(id) {
  const booking = read('bookings').find((b) => b.id === id);
  if (!booking) return;
  openModal(`
    <div class="modal-head">
      <div>
        <p class="eyebrow">Cancel Booking</p>
        <h2>Administrative cancellation reason</h2>
        <p class="muted">The reason below will be shown to the user when they click View.</p>
      </div>
      <button class="close-btn" data-close-modal>&times;</button>
    </div>
    <div class="booking-detail-panel">
      <ul class="meta-list">
        <li><span>Booking ID</span><strong>${escapeHtml(booking.id)}</strong></li>
        <li><span>Customer</span><strong>${escapeHtml(booking.customerName)}</strong></li>
        <li><span>Schedule</span><strong>${escapeHtml(booking.date)} • ${escapeHtml(booking.time)}</strong></li>
      </ul>
    </div>
    <form id="adminCancelForm" class="form-stack">
      <label>Reason for cancellation
        <textarea name="cancelReason" required>${escapeHtml(booking.cancelReason || ADMIN_CANCEL_DEFAULT_REASON)}</textarea>
      </label>
      <button class="btn btn-danger-soft" type="submit">Confirm Cancel Booking</button>
    </form>
  `);

  document.getElementById('adminCancelForm').addEventListener('submit', (event) => {
    event.preventDefault();
    const reason = new FormData(event.currentTarget).get('cancelReason').trim() || ADMIN_CANCEL_DEFAULT_REASON;
    confirmAction({
      title: 'Confirm Administrative Cancellation',
      message: 'Please confirm again. Do you want to cancel this booking and show this reason to the user?',
      confirmText: 'Confirm Cancel Booking',
      danger: true,
      onConfirm: () => {
        updateBooking(id, {
          bookingStatus: 'Cancelled',
          cancelledBy: 'admin',
          cancelledById: state.session?.id || '',
          cancellationType: 'admin_cancelled',
          cancelReason: reason,
          cancelledAt: new Date().toISOString(),
        });
        closeModal();
        renderPage();
        toast('Booking cancelled. User can view the cancellation reason.');
      },
    });
  });
}

function rejectPaymentAndCancel(id) {
  updateBooking(id, {
    paymentStatus: 'Rejected',
    bookingStatus: 'Cancelled',
    cancelledBy: 'admin',
    cancelledById: state.session?.id || '',
    cancellationType: 'payment_rejected',
    cancelReason: PAYMENT_REJECT_CANCEL_REASON,
    cancelledAt: new Date().toISOString(),
  }, true);
  toast('Payment rejected. Booking has been automatically cancelled.');
}

function openCancelledBookingDetail(id) {
  const booking = read('bookings').find((b) => b.id === id);
  if (!booking) return;
  const reason = cancellationReason(booking);
  const cancelledByLabel = booking.cancellationType === 'payment_rejected'
    ? 'Automatically cancelled after payment rejection'
    : booking.cancelledBy === 'user'
      ? 'Cancelled by User'
      : booking.cancelledBy === 'admin'
        ? 'Cancelled by Administrator'
        : 'Cancelled';

  openModal(`
    <div class="modal-head">
      <div>
        <p class="eyebrow">Cancelled Booking Detail</p>
        <h2>${escapeHtml(booking.id)}</h2>
        <p class="muted">${escapeHtml(cancelledByLabel)}</p>
      </div>
      <button class="close-btn" data-close-modal>&times;</button>
    </div>
    <div class="booking-detail-panel">
      <ul class="meta-list booking-detail-list">
        <li><span>Customer</span><strong>${escapeHtml(booking.customerName || '-')}</strong></li>
        <li><span>Email</span><strong>${escapeHtml(booking.customerEmail || '-')}</strong></li>
        <li><span>Booking Type</span><strong>${booking.bookingType === 'trainer' ? 'Trainer Booking' : 'Driving Range Booking'}</strong></li>
        <li><span>Driving Range</span><strong>${booking.bookingType === 'trainer' ? 'Not required' : escapeHtml(booking.courseName || '-')}</strong></li>
        <li><span>Package</span><strong>${booking.bookingType === 'trainer' ? 'No ball bucket required' : (booking.bucketLabel ? `${escapeHtml(String(booking.bucketCount || 1))} × ${escapeHtml(booking.bucketLabel)} = ${escapeHtml(String(booking.totalBalls || 0))} balls` : '-')}</strong></li>
        <li><span>Trainer</span><strong>${escapeHtml(booking.trainerName || 'No trainer')}</strong></li>
        <li><span>Date & Time</span><strong>${escapeHtml(booking.date || '-')} • ${escapeHtml(booking.time || '-')}</strong></li>
        <li><span>Amount</span><strong>${money(booking.amount)}</strong></li>
        <li><span>Booking Status</span><strong>${escapeHtml(booking.bookingStatus || '-')}</strong></li>
        <li><span>Payment Status</span><strong>${escapeHtml(booking.paymentStatus || '-')}</strong></li>
        <li><span>Cancelled At</span><strong>${booking.cancelledAt ? new Date(booking.cancelledAt).toLocaleString() : '-'}</strong></li>
      </ul>
      <div class="cancel-reason-box">
        <p class="eyebrow">Cancellation Reason</p>
        <p>${escapeHtml(reason)}</p>
      </div>
    </div>
  `);
}

async function deleteBookingFromSupabase(booking = {}) {
  if (!SUPABASE_MODE || !isUuid(booking.id)) return { error: null };
  const { error: paymentError } = await supabaseClient
    .from(DB_TABLES.payments)
    .delete()
    .eq('booking_id', booking.id);
  if (paymentError) console.error('Payment delete error:', paymentError);

  const { error: bookingError } = await supabaseClient
    .from(DB_TABLES.bookings)
    .delete()
    .eq('id', booking.id);
  if (bookingError) console.error('Booking delete error:', bookingError);
  return { error: bookingError || paymentError };
}

async function deleteCancelledBookingForCurrentSite(id) {
  const bookings = read('bookings');
  const booking = bookings.find((b) => b.id === id);
  if (!booking) return;
  if (isProtectedBookingReference(booking)) {
    toast('This verified booking record is kept in Supabase for admin reference and cannot be deleted from the website.');
    return;
  }
  const { error } = await deleteBookingFromSupabase(booking);
  if (error) {
    toast(error.message || 'Failed to delete booking from Supabase. Check policy or Console.');
    return;
  }
  setLocalData('bookings', bookings.filter((b) => b.id !== id));
  await loadSupabaseDataToLocal({ requireAuth: true });
  renderPage();
  toast('Cancelled booking deleted from website and Supabase.');
}

function openReceiptModal(id) {
  const booking = read('bookings').find((b) => b.id === id);
  if (!booking) return;
  openModal(`
    <div class="modal-head">
      <div>
        <p class="eyebrow">Payment Receipt</p>
        <h2>Upload Receipt File</h2>
        <p class="muted">Upload an image or PDF receipt. A reference note is optional but recommended.</p>
      </div>
      <button class="close-btn" data-close-modal>&times;</button>
    </div>
    <form id="receiptForm" class="form-stack">
      <label>Receipt Image / File
        <input type="file" name="receiptFile" accept="image/*,application/pdf" ${booking.receiptImage ? '' : 'required'} />
      </label>
      ${booking.receiptImage ? `<p class="muted">Current receipt: <a class="text-link" href="${escapeHtml(booking.receiptImage)}" target="_blank" rel="noopener">View uploaded receipt</a></p>` : ''}
      <label>Receipt Note / Reference Number
        <textarea name="receiptNote" placeholder="Example: Paid RM ${booking.amount} via QR, ref no ABC123">${escapeHtml(booking.receiptNote || '')}</textarea>
      </label>
      <button class="btn btn-primary" type="submit">Submit Receipt</button>
    </form>
  `);

  document.getElementById('receiptForm').addEventListener('submit', async (event) => {
    event.preventDefault();
    const formData = new FormData(event.currentTarget);
    const note = String(formData.get('receiptNote') || '').trim();
    const file = event.currentTarget.querySelector('input[name="receiptFile"]')?.files?.[0] || null;

    let receiptImage = booking.receiptImage || '';
    if (file) {
      toast('Uploading receipt file...');
      receiptImage = await uploadReceiptFileToSupabase(file, id);
      if (!receiptImage) return;
    }

    updateBooking(id, {
      receiptNote: note,
      receiptImage,
      paymentStatus: 'Pending Verification',
    });
    closeModal();
    userPayments();
    toast('Receipt submitted successfully. Waiting for admin verification.');
  });
}

function adminDashboard() {
  setTitle('Dashboard', 'Administrator Panel');
  const bookings = adminVisibleBookings();
  const revenue = bookings.filter((b) => b.paymentStatus === 'Verified').reduce((sum, b) => sum + Number(b.amount || 0), 0);
  content().innerHTML = `
    <div class="stat-grid">
      ${statCard('Total Users', read('users').filter((u) => u.role === 'user').length)}
      ${statCard('Driving Range', read('courses').filter((c) => isDrivingCourse(c)).length)}
      ${statCard('Bookings', bookings.length)}
      ${statCard('Verified Revenue', money(revenue))}
    </div>
    <div class="toolbar" style="margin-top:24px">
      <div>
        <p class="eyebrow">Latest Bookings</p>
        <h2>Manage booking status and payment verification</h2>
      </div>
    </div>
    ${bookingTable(bookings.slice(0, 5), 'admin')}
  `;
  bindBookingActions('admin');
}

function adminUsers() {
  setTitle('Manage Users', 'Administrator Panel');
  const users = read('users').filter((u) => u.role === 'user');
  content().innerHTML = `
    <div class="toolbar">
      <div>
        <p class="eyebrow">Customer Information</p>
        <h2>Activate or deactivate registered users</h2>
      </div>
      ${searchBox('Search name, email or phone')}
    </div>
    <div class="table-card"><div class="table-wrap"><table>
      <thead><tr><th>Name</th><th>Email</th><th>Phone</th><th>Status</th><th>Registered</th><th>Action</th></tr></thead>
      <tbody>
        ${filterItems(users, ['fullName', 'email', 'phone']).map((u) => `
          <tr>
            <td><strong>${escapeHtml(u.fullName)}</strong></td>
            <td>${escapeHtml(u.email)}</td>
            <td>${escapeHtml(u.phone)}</td>
            <td>${statusPill(u.status)}</td>
            <td>${new Date(u.createdAt).toLocaleDateString()}</td>
            <td><button class="btn ${u.status === 'Active' ? 'btn-danger-soft' : 'btn-soft'}" data-toggle-user="${u.id}">${u.status === 'Active' ? 'Deactivate' : 'Activate'}</button></td>
          </tr>
        `).join('') || `<tr><td colspan="6">No user found.</td></tr>`}
      </tbody>
    </table></div></div>
  `;
  bindSearch(() => adminUsers());
  content().querySelectorAll('[data-toggle-user]').forEach((btn) => {
    btn.addEventListener('click', () => {
      const all = read('users');
      const user = all.find((u) => u.id === btn.dataset.toggleUser);
      const nextStatus = user.status === 'Active' ? 'Inactive' : 'Active';
      confirmAction({
        title: `${nextStatus === 'Inactive' ? 'Deactivate' : 'Activate'} User`,
        message: `Are you sure you want to ${nextStatus === 'Inactive' ? 'deactivate' : 'activate'} ${user.fullName}?`,
        confirmText: nextStatus === 'Inactive' ? 'Deactivate User' : 'Activate User',
        danger: nextStatus === 'Inactive',
        onConfirm: () => {
          user.status = nextStatus;
          write('users', all);
          adminUsers();
          toast('User status updated.');
        },
      });
    });
  });
}



</script>
<?php
}

function upsi_section_project_info_module(): void
{
?>
<script>
window.UPSI_SECTION_MODULES = window.UPSI_SECTION_MODULES || {};
window.UPSI_SECTION_MODULES["project_info"] = {
  title: "Project Info sebelum login",
  runtimeChunk: '4/22',
  functions: ["v83RenderProject"]
};
</script>
<?php
}

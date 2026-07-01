<?php
/**
 * admin_reviews.php
 * Bahagian: Admin Reviews
 *
 * V108: CSS dan JavaScript runtime dibahagikan ke semua section.
 * Jadi home_page.php tidak lagi memegang semua coding sistem.
 *
 * Runtime chunk: 13/22
 * V109 note: Admin delete feedback runtime is implemented in sections/user/user_feedback.php to keep submit/load/delete feedback logic together.
 * Fungsi berkaitan untuk presentation: adminReviews, reviewCard
 */


function upsi_section_admin_reviews_styles(): void
{
?>
<style>
/* =========================================================
   V108 CSS chunk 13/22
   Bahagian: Admin Reviews
   ========================================================= */
.lane-chip b { color: var(--green); }
.lane-chip small { font-weight: 900; font-size: 11px; }
.lane-chip.available small { color: #007a45; }
.lane-chip.booked small,
.lane-chip.unavailable small { color: #d71920; }
body.dark .lane-status-panel {
  background: rgba(13, 38, 27, .9);
  border-color: rgba(88, 231, 154, .22);
}
body.dark .lane-status-head,
body.dark .lane-chip { color: var(--text); }
body.dark .lane-status-head span { color: var(--subText); }
body.dark .lane-chip {
  background: rgba(7, 27, 18, .96);
  border-color: rgba(88, 231, 154, .18);
}
body.dark .lane-chip b { color: #74f2a9; }

/* V42 feedback and lane display refinements */
.feedback-category-card .status-pill { white-space: nowrap; }
.lane-chip.booked { background: #fff7ed; color: #b45309; border-color: #fed7aa; }
.lane-chip.unavailable { background: #fef2f2; color: #dc2626; border-color: #fecaca; }
body.dark .lane-chip.booked { background: rgba(245, 158, 11, .16); color: #fbbf24; border-color: rgba(245, 158, 11, .35); }
body.dark .lane-chip.unavailable { background: rgba(239, 68, 68, .16); color: #fca5a5; border-color: rgba(239, 68, 68, .35); }

/* =========================================================
   V47 - Custom logo + WhatsApp contact buttons
   ========================================================= */
.auth-app-logo-tile.custom-logo-tile {
  width: 230px;
  height: 155px;
  padding: 10px;
  overflow: hidden;
}
.auth-app-logo-img {
  width: 100%;
  height: 100%;
  object-fit: contain;
  display: block;
}
.brand-logo.image-logo {
  overflow: hidden;
  padding: 3px;
  background: var(--light-green);
}
.brand-logo-img {
  width: 100%;
  height: 100%;
  object-fit: contain;
  border-radius: inherit;
  display: block;
}
.whatsapp-btn {
  background: #25d366 !important;
  color: #062414 !important;
  border-color: rgba(37, 211, 102, 0.55) !important;
}
.whatsapp-btn:hover {
  filter: brightness(0.98);
}
.contact-action-stack {
  display: flex;
  flex-wrap: wrap;
  gap: 10px;
  align-items: center;
}

/* =========================================================
   V48 - Full logo fitting inside login and sidebar borders
   ========================================================= */
.auth-app-logo-tile.custom-logo-tile {
  width: 280px;
  height: 220px;
  padding: 12px;
  overflow: hidden;
  border-radius: 28px;
  display: grid;
  place-items: center;
}
.auth-app-logo-img {
  width: 100% !important;
  height: 100% !important;
  max-width: 100% !important;
  max-height: 100% !important;
  object-fit: contain !important;
  object-position: center center !important;
  border-radius: 18px;
}
.brand-logo.image-logo {
  overflow: hidden;
  padding: 5px;
  background: var(--light-green);
  display: grid;
  place-items: center;
}
.brand-logo-img {
  width: 100% !important;
  height: 100% !important;
  max-width: 100% !important;
  max-height: 100% !important;
  object-fit: contain !important;
  object-position: center center !important;
  border-radius: 10px;
}
@media (max-width: 640px) {
  .auth-app-logo-tile.custom-logo-tile {
    width: 230px;
    height: 185px;
  }
}

/* V49 trainer date-only booking polish */
.trainer-date-toolbar { margin-top: 18px; }
.trainer-date-booking-card .trainer-info-note,
.trainer-date-booking-form .trainer-note-box,
.trainer-date-booking-form .trainer-profile-box {
  align-items: flex-start;
}
.trainer-info-note {
  display: flex;
  gap: 12px;
  align-items: flex-start;
  padding: 14px 16px;
  border: 1px solid rgba(20, 126, 82, .18);
  border-radius: 18px;
  background: rgba(35, 166, 103, .08);
  margin-top: 14px;
  color: var(--muted, #5d6f80);
}
.trainer-info-note p { margin: 0; line-height: 1.5; }
.trainer-date-only-list .availability-day div { gap: 8px; }
.trainer-date-only-list .availability-day span { display: inline-flex; align-items: center; }
.trainer-profile-box .whatsapp-btn { width: fit-content; margin-top: 10px; }

/* V50 compact availability and login/search UX cleanup */
.v50-compact-availability-card .meta-list li:last-child { border-bottom: 0; }
.v50-compact-availability-card .availability-action-row,
.v50-compact-availability-card .contact-action-stack { gap: 12px; flex-wrap: wrap; }
.v50-compact-availability-card .availability-btn { min-width: 220px; }
.auth-app-card input:-webkit-autofill,
.auth-app-card input:-webkit-autofill:hover,
.auth-app-card input:-webkit-autofill:focus {
  -webkit-text-fill-color: var(--ink);
  transition: background-color 9999s ease-in-out 0s;
}

/* V51 compact trainer date buttons */
.v51-compact-trainer-card .meta-list li span,
.v51-compact-trainer-card .meta-list li strong {
  word-break: break-word;
}
.trainer-date-button-panel {
  padding: 20px;
}
.trainer-date-button-grid {
  display: grid;
  grid-template-columns: repeat(auto-fit, minmax(240px, 1fr));
  gap: 14px;
}
.trainer-date-summary-btn {
  width: 100%;
  border: 1px solid rgba(0, 93, 54, 0.18);
  border-radius: 18px;
  background: rgba(230, 246, 235, 0.95);
  padding: 18px 20px;
  text-align: left;
  cursor: pointer;
  transition: transform .18s ease, box-shadow .18s ease, border-color .18s ease;
}
.trainer-date-summary-btn:hover {
  transform: translateY(-2px);
  border-color: rgba(0, 93, 54, 0.35);
  box-shadow: 0 16px 28px rgba(0, 93, 54, 0.12);
}
.trainer-date-summary-name {
  display: block;
  font-weight: 900;
  color: var(--text);
  font-size: 1.02rem;
  line-height: 1.25;
}

</style>
<?php
}

function upsi_section_admin_reviews_scripts(): void
{
?>
<script>
/* =========================================================
   V108 JavaScript chunk 13/22
   Bahagian: Admin Reviews
   ========================================================= */
/* V43 Lane Field in Main Booking Popup Fix
   - The popup opened by data-book-course / openBookingModal was still using the old booking form.
   - This override adds Duration + Select Available Lane into that popup.
   - Booked/unavailable lanes are hidden from the lane dropdown.
   - Booking data saved to local cache and Supabase with lane_id/lane_label/duration/start/end fields.
*/
(function v43MainBookingLanePopupFix() {
  const V43_DEFAULT_LANES = ['KD01','KD02','KD03','KD04','KD05','KD06','KD07','KD08','KD09','KD10'];
  const V43_DURATION_OPTIONS = [
    { label: '1 hour', minutes: 60 },
    { label: '1 hour 30 minutes', minutes: 90 },
    { label: '2 hours', minutes: 120 },
  ];
  const V43_PAYMENT_METHODS = ['QR Payment', 'Pay at Counter'];

  function v43NormStatus(status = '') {
    const value = String(status || '').toLowerCase();
    if (value === 'inactive' || value === 'unavailable' || value === 'disabled') return 'Unavailable';
    if (value === 'booked') return 'Booked';
    return 'Available';
  }

  function v43LaneRecords() {
    const settings = read('settings') || {};
    let records = Array.isArray(settings.drivingRangeLaneRecords) ? settings.drivingRangeLaneRecords : [];
    if (!records.length && Array.isArray(settings.drivingRangeLanes)) {
      records = settings.drivingRangeLanes.map((code) => ({ laneCode: code, laneName: code, status: 'Available' }));
    }
    if (!records.length) {
      records = V43_DEFAULT_LANES.map((code) => ({ laneCode: code, laneName: code, status: 'Available' }));
    }
    const seen = new Set();
    return records.map((lane) => {
      const code = String(lane.laneCode || lane.lane_code || lane.code || lane.laneName || lane.lane_name || lane.id || '').trim().toUpperCase();
      return {
        id: lane.id || code,
        laneCode: code,
        laneName: String(lane.laneName || lane.lane_name || code).trim(),
        status: v43NormStatus(lane.status || lane.laneStatus || lane.lane_status || 'Available'),
      };
    }).filter((lane) => {
      if (!lane.laneCode || seen.has(lane.laneCode)) return false;
      seen.add(lane.laneCode);
      return true;
    });
  }

  function v43TimeToMinutes(time = '') {
    if (!time) return 0;
    const value = String(time).trim();
    const ampm = value.match(/^(\d{1,2}):(\d{2})\s*(AM|PM)$/i);
    if (ampm) {
      let hour = Number(ampm[1]);
      const minute = Number(ampm[2]);
      const suffix = ampm[3].toUpperCase();
      if (suffix === 'PM' && hour !== 12) hour += 12;
      if (suffix === 'AM' && hour === 12) hour = 0;
      return hour * 60 + minute;
    }
    const parts = value.match(/^(\d{1,2}):(\d{2})/);
    if (parts) return Number(parts[1]) * 60 + Number(parts[2]);
    return 0;
  }

  function v43MinutesToDisplay(total = 0) {
    const normal = ((Number(total) % 1440) + 1440) % 1440;
    let hour = Math.floor(normal / 60);
    const minute = normal % 60;
    const suffix = hour >= 12 ? 'PM' : 'AM';
    hour = hour % 12 || 12;
    return `${hour}:${String(minute).padStart(2, '0')} ${suffix}`;
  }

  function v43AddMinutes(time = '', minutes = 60) {
    return v43MinutesToDisplay(v43TimeToMinutes(time) + Number(minutes || 60));
  }

  function v43BookingIsActiveForLane(booking = {}) {
    if (!booking || booking.bookingType === 'trainer') return false;
    const bookingStatus = String(booking.bookingStatus || '').toLowerCase();
    const paymentStatus = String(booking.paymentStatus || '').toLowerCase();
    if (bookingStatus.includes('cancel') || bookingStatus.includes('reject')) return false;
    if (paymentStatus.includes('reject')) return false;
    if (booking.hiddenForAdmin === true) return false;
    return true;
  }

  function v43BookedLaneSet(date = '', time = '', durationMinutes = 60, excludedBookingId = '') {
    if (window.v60BookedLaneSetFromLocal) return window.v60BookedLaneSetFromLocal(date, time, durationMinutes, excludedBookingId);
    const booked = new Set();
    if (!date || !time) return booked;
    const start = v43TimeToMinutes(time);
    const end = start + Number(durationMinutes || 60);
    read('bookings').forEach((booking) => {
      if (!v43BookingIsActiveForLane(booking)) return;
      if (excludedBookingId && String(booking.id) === String(excludedBookingId)) return;
      if (booking.date !== date) return;
      const lane = String(booking.laneId || booking.lane || '').trim().toUpperCase();
      if (!lane) return;
      const bookingStart = v43TimeToMinutes(booking.startTime || booking.time || '');
      const bookingDuration = Number(booking.durationMinutes || 60);
      const bookingEnd = bookingStart + bookingDuration;
      if (start < bookingEnd && end > bookingStart) booked.add(lane);
    });
    return booked;
  }

  function v43LaneAvailability(date = '', time = '', durationMinutes = 60, excludedBookingId = '') {
    const booked = v43BookedLaneSet(date, time, durationMinutes, excludedBookingId);
    return v43LaneRecords().map((lane) => {
      const inactive = lane.status !== 'Available';
      const isBooked = booked.has(lane.laneCode);
      return {
        ...lane,
        computedStatus: inactive ? 'Unavailable' : (isBooked ? 'Booked' : 'Available'),
      };
    });
  }

  function v43LaneOptions(date = '', time = '', durationMinutes = 60, selected = '', excludedBookingId = '') {
    const available = v43LaneAvailability(date, time, durationMinutes, excludedBookingId).filter((lane) => lane.computedStatus === 'Available');
    if (!available.length) return '<option value="">No lane available</option>';
    const selectedValue = available.some((lane) => lane.laneCode === selected) ? selected : available[0].laneCode;
    return available.map((lane) => `<option value="${escapeHtml(lane.laneCode)}" ${lane.laneCode === selectedValue ? 'selected' : ''}>${escapeHtml(lane.laneCode)}${lane.laneName && lane.laneName !== lane.laneCode ? ` - ${escapeHtml(lane.laneName)}` : ''}</option>`).join('');
  }

  function v43LanePanel(date = '', time = '', durationMinutes = 60, excludedBookingId = '') {
    const lanes = v43LaneAvailability(date, time, durationMinutes, excludedBookingId);
    return `
      <div class="lane-status-panel" data-lane-status-panel>
        <div class="lane-status-head">
          <strong>Lane Availability</strong>
          <span>${date && time ? `${escapeHtml(formatDateDisplay(date))} • ${escapeHtml(time)}` : 'Choose date and time to check lane status'}</span>
        </div>
        <div class="lane-chip-grid">
          ${lanes.map((lane) => `<span class="lane-chip ${lane.computedStatus.toLowerCase()}"><b>${escapeHtml(lane.laneCode)}</b><small>${escapeHtml(lane.computedStatus)}</small></span>`).join('')}
        </div>
      </div>
    `;
  }

  function v43DurationOptions(selected = 60) {
    return V43_DURATION_OPTIONS.map((item) => `<option value="${item.minutes}" ${Number(selected) === item.minutes ? 'selected' : ''}>${escapeHtml(item.label)}</option>`).join('');
  }

  function v43PaymentOptions(selected = 'QR Payment') {
    return V43_PAYMENT_METHODS.map((item) => `<option value="${escapeHtml(item)}" ${item === selected ? 'selected' : ''}>${escapeHtml(item)}</option>`).join('');
  }

  async function v43SyncBookings(bookings = []) {
    write('bookings', bookings);
    if (!SUPABASE_MODE || !supabaseClient) return;
    try {
      await syncBookingsToSupabase(bookings);
      write('bookings', bookings);
    } catch (error) {
      console.error('V43 booking sync error:', error);
      toast('Booking saved locally but failed to sync to Supabase. Check Console.');
    }
  }

  openBookingModal = function openBookingModalV43(prefill = {}, existingBooking = null) {
    if (existingBooking?.bookingType === 'trainer') {
      openTrainerBookingModal({ trainerId: existingBooking.trainerId }, existingBooking);
      return;
    }

    const courses = getDrivingCourses(read('courses').filter((course) => course.status === 'Available'));
    const drivingCourse = getDrivingCourse(courses);
    const booking = existingBooking || {};
    const initialCourseId = booking.courseId || prefill.courseId || drivingCourse?.id || courses[0]?.id || '';
    const initialCourse = courses.find((course) => course.id === initialCourseId) || drivingCourse || courses[0];

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
    const selectedDuration = Number(booking.durationMinutes || 60);
    const selectedLane = String(booking.laneId || booking.lane || '').toUpperCase();

    openModal(`
      <div class="modal-head">
        <div>
          <p class="eyebrow">${existingBooking ? 'Reschedule Driving Range' : 'New Driving Range Booking'}</p>
          <h2>${existingBooking ? 'Update driving range details' : 'Book Driving Range'}</h2>
          <p class="muted">Choose membership category, ball bucket, number of buckets, available date, tee time and lane. Trainer booking is managed separately under the Trainer page.</p>
        </div>
        <button class="close-btn" data-close-modal>&times;</button>
      </div>
      <form id="bookingForm" class="form-grid">
        <label class="wide">Driving Range
          <select name="courseId" data-modal-course required>
            ${courses.map((course) => `<option value="${escapeHtml(course.id)}" ${initialCourseId === course.id ? 'selected' : ''}>${escapeHtml(course.name)}</option>`).join('')}
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
            ${bucketOptions.map((bucket) => `<option value="${escapeHtml(bucket.id)}" ${selectedBucketId === bucket.id ? 'selected' : ''}>${escapeHtml(bucket.label)}</option>`).join('')}
          </select>
        </label>
        <label>Number of Buckets
          <select name="bucketCount" data-modal-count required>
            ${getBucketCounts(initialCourse).map((count) => `<option value="${count}" ${Number(selectedBucketCount) === count ? 'selected' : ''}>${count} ${count === 1 ? 'bucket' : 'buckets'}</option>`).join('')}
          </select>
        </label>
        <label>Available Date
          <select name="date" data-modal-date required>${dateOptionMarkup(modalDates, selectedDate)}</select>
        </label>
        <label>Tee Time
          <select name="time" data-modal-time required>${timeOptionMarkup(availableTimes, selectedTime)}</select>
        </label>
        <label>Duration
          <select name="durationMinutes" required>${v43DurationOptions(selectedDuration)}</select>
        </label>
        <label>Select Available Lane
          <select name="laneId" required>${v43LaneOptions(selectedDate, selectedTime, selectedDuration, selectedLane, booking.id)}</select>
        </label>
        <div class="wide" data-v43-lane-panel>${v43LanePanel(selectedDate, selectedTime, selectedDuration, booking.id)}</div>
        <label class="wide">Payment Method
          <select name="paymentMethod" required>${v43PaymentOptions(booking.paymentMethod || 'QR Payment')}</select>
        </label>
        <div class="calculation-row wide modal-total-row">
          <div><span>🔢</span> <span data-modal-formula>1 × 50 balls = 50 balls</span></div>
          <strong data-modal-total>RM 10</strong>
        </div>
        <div class="calculation-row wide app-compatible-preview">
          <div><span>⏰</span> <span data-v43-time-preview>${selectedTime ? `${escapeHtml(selectedTime)} - ${escapeHtml(v43AddMinutes(selectedTime, selectedDuration))}` : 'Choose time'}</span></div>
          <strong data-v43-lane-preview>${escapeHtml(selectedLane || '')}</strong>
        </div>
        <button class="btn btn-primary wide" type="submit">${existingBooking ? 'Save Reschedule' : 'Submit Booking'}</button>
      </form>
    `);

    const form = document.getElementById('bookingForm');
    const getSelectedCourse = () => courses.find((course) => course.id === form.courseId.value) || drivingCourse || courses[0];

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

    const refreshLaneFields = () => {
      const duration = Number(form.durationMinutes.value || 60);
      const currentLane = String(form.laneId?.value || '').toUpperCase();
      if (form.laneId) form.laneId.innerHTML = v43LaneOptions(form.date.value, form.time.value, duration, currentLane, booking.id);
      const activeLane = form.laneId?.value || '';
      const lanePreview = form.querySelector('[data-v43-lane-preview]');
      const timePreview = form.querySelector('[data-v43-time-preview]');
      if (lanePreview) lanePreview.textContent = activeLane || 'No lane available';
      if (timePreview) timePreview.textContent = form.time.value ? `${form.time.value} - ${v43AddMinutes(form.time.value, duration)}` : 'Choose time';
      const lanePanel = form.querySelector('[data-v43-lane-panel]');
      if (lanePanel) lanePanel.innerHTML = v43LanePanel(form.date.value, form.time.value, duration, booking.id);
    };

    const refreshTimeFields = (preferredTime = '') => {
      const course = getSelectedCourse();
      const date = form.date.value;
      const times = timeOptionsFor('driving', course.id, date, preferredTime || form.time.value);
      const selected = times.includes(preferredTime || form.time.value) ? (preferredTime || form.time.value) : (times[0] || '');
      form.time.innerHTML = timeOptionMarkup(times, selected);
      refreshLaneFields();
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
      form.bucketOptionId.innerHTML = options.map((bucket) => `<option value="${escapeHtml(bucket.id)}" ${selected === bucket.id ? 'selected' : ''}>${escapeHtml(bucket.label)}</option>`).join('');
      const counts = getBucketCounts(course);
      const safeCount = counts.includes(currentCount) ? currentCount : counts[0];
      form.bucketCount.innerHTML = counts.map((count) => `<option value="${count}" ${count === safeCount ? 'selected' : ''}>${count} ${count === 1 ? 'bucket' : 'buckets'}</option>`).join('');
      refreshModalTotal();
    };

    form.courseId.addEventListener('change', () => {
      refreshBucketFields(false);
      refreshScheduleFields(false);
    });
    form.date.addEventListener('change', () => refreshTimeFields(''));
    form.time.addEventListener('change', refreshLaneFields);
    form.durationMinutes.addEventListener('change', refreshLaneFields);
    form.laneId.addEventListener('change', refreshLaneFields);
    form.membershipType.addEventListener('change', refreshModalTotal);
    form.bucketOptionId.addEventListener('change', refreshModalTotal);
    form.bucketCount.addEventListener('change', refreshModalTotal);
    refreshBucketFields(true);
    refreshScheduleFields(true);
    refreshLaneFields();

    form.addEventListener('submit', async (event) => {
      event.preventDefault();
      const formData = new FormData(event.currentTarget);
      if (!formData.get('date') || !formData.get('time')) {
        toast('Please select an available date and tee time.');
        return;
      }
      const laneId = String(formData.get('laneId') || '').toUpperCase();
      const durationMinutes = Number(formData.get('durationMinutes') || 60);
      if (!laneId) {
        toast('No lane is available for the selected date, time and duration. Please choose another slot.');
        return;
      }
      if (v43BookedLaneSet(formData.get('date'), formData.get('time'), durationMinutes, booking.id).has(laneId)) {
        refreshLaneFields();
        toast('This lane has already been booked for the selected date/time. Please choose another lane.');
        return;
      }

      const course = courses.find((item) => item.id === formData.get('courseId')) || drivingCourse;
      const membershipType = formData.get('membershipType') || 'non-member';
      const bucket = bucketById(formData.get('bucketOptionId'), course);
      const bucketCount = Number(formData.get('bucketCount') || 1);
      const unitPrice = bucketUnitPrice(bucket, membershipType);
      const amount = bucketAmount(bucket.id, bucketCount, course, membershipType);
      const paymentMethod = formData.get('paymentMethod') || 'QR Payment';
      const bookings = read('bookings');
      const commonData = {
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
        startTime: formData.get('time'),
        endTime: v43AddMinutes(formData.get('time'), durationMinutes),
        durationMinutes,
        duration: V43_DURATION_OPTIONS.find((item) => item.minutes === durationMinutes)?.label || `${durationMinutes} minutes`,
        lane: laneId,
        laneId,
        amount,
        paymentMethod,
        paymentStatus: paymentMethod === 'QR Payment' ? 'Pending Verification' : 'Pay at Counter',
      };

      if (existingBooking) {
        const item = bookings.find((entry) => entry.id === existingBooking.id);
        if (!item) return toast('Booking record not found.');
        Object.assign(item, commonData, {
          bookingStatus: 'Pending Confirmation',
        });
        await v43SyncBookings(bookings);
        closeModal();
        userBookings();
        toast('Driving range booking rescheduled and synced. Waiting admin confirmation.');
        return;
      }

      bookings.unshift({
        id: makeId('B'),
        ...commonData,
        bookingStatus: 'Pending Confirmation',
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
      await v43SyncBookings(bookings);
      closeModal();
      state.currentPage = 'mybookings';
      renderNav();
      renderPage();
      toast('Driving range booking submitted and synced.');
    });
  };
})();


/* V45 Lane Capacity Booking Fix
   - A tee date/time remains bookable while at least one driving range lane is available.
   - Only the lane that has already been booked is hidden from the user lane dropdown.
   - Old tee_slots rows marked `booked` by previous versions are treated as available for driving-range lane booking.
*/
(function v45LaneCapacityBookingFix() {
  const DEFAULT_LANES_V45 = ['KD01','KD02','KD03','KD04','KD05','KD06','KD07','KD08','KD09','KD10'];

  function normV45(value = '') {
    return String(value || '').trim().toLowerCase();
  }

  function cleanDateV45(value = '') {
    return String(value || '').slice(0, 10);
  }

  function laneCodeV45(value = '') {
    return String(value || '').trim().toUpperCase();
  }

  function timeToMinutesV45(value = '') {
    const text = String(value || '').trim();
    const m12 = text.match(/^(\d{1,2}):(\d{2})\s*(AM|PM)$/i);
    if (m12) {
      let hour = Number(m12[1]);
      const minute = Number(m12[2]);
      const suffix = m12[3].toUpperCase();
      if (suffix === 'PM' && hour !== 12) hour += 12;
      if (suffix === 'AM' && hour === 12) hour = 0;
      return hour * 60 + minute;
    }
    const m24 = text.match(/^(\d{1,2}):(\d{2})(?::\d{2})?$/);
    return m24 ? Number(m24[1]) * 60 + Number(m24[2]) : 0;
  }

  function laneRecordsV45() {
    const settings = read('settings') || {};
    let records = Array.isArray(settings.drivingRangeLaneRecords) ? settings.drivingRangeLaneRecords : [];
    if (!records.length && Array.isArray(settings.drivingRangeLanes) && settings.drivingRangeLanes.length) {
      records = settings.drivingRangeLanes.map((code) => ({ laneCode: code, laneName: code, status: 'Available' }));
    }
    if (!records.length) {
      records = DEFAULT_LANES_V45.map((code) => ({ laneCode: code, laneName: code, status: 'Available' }));
    }
    const seen = new Set();
    return records.map((lane) => {
      const code = laneCodeV45(lane.laneCode || lane.lane_code || lane.code || lane.laneName || lane.lane_name || lane.id || '');
      const statusText = normV45(lane.status || lane.laneStatus || lane.lane_status || 'available');
      return {
        id: lane.id || code,
        laneCode: code,
        laneName: String(lane.laneName || lane.lane_name || code).trim(),
        status: statusText === 'inactive' || statusText === 'unavailable' || statusText === 'disabled' ? 'Unavailable' : 'Available',
      };
    }).filter((lane) => {
      if (!lane.laneCode || seen.has(lane.laneCode)) return false;
      seen.add(lane.laneCode);
      return true;
    });
  }

  function activeLaneBlockingBookingV45(booking = {}) {
    const type = normV45(booking.bookingType || booking.booking_type || '');
    if (!(type === 'driving' || type === 'driving_range' || type.includes('driving'))) return false;
    const bookingStatus = normV45(booking.bookingStatus || booking.booking_status || '');
    const paymentStatus = normV45(booking.paymentStatus || booking.payment_status || '');
    const cancelType = normV45(booking.cancellationType || booking.cancellation_type || '');
    if (booking.hiddenForAdmin === true) return false;
    if (bookingStatus.includes('cancel') || bookingStatus.includes('reject') || bookingStatus.includes('expired')) return false;
    if (paymentStatus.includes('reject')) return false;
    if (cancelType.includes('cancel') || cancelType.includes('reject')) return false;
    return true;
  }

  function bookedLaneSetV45(date = '', time = '', durationMinutes = 60, excludedBookingId = '') {
    if (window.v60BookedLaneSetFromLocal) return window.v60BookedLaneSetFromLocal(date, time, durationMinutes, excludedBookingId);
    const selectedDate = cleanDateV45(date);
    const start = timeToMinutesV45(time);
    const end = start + Number(durationMinutes || 60);
    const booked = new Set();
    read('bookings').forEach((booking) => {
      if (!activeLaneBlockingBookingV45(booking)) return;
      if (excludedBookingId && String(booking.id) === String(excludedBookingId)) return;
      if (cleanDateV45(booking.date || booking.slot_date) !== selectedDate) return;
      const lane = laneCodeV45(booking.laneId || booking.lane || booking.lane_label || booking.lane_id || '');
      if (!lane) return;
      const bookingStart = timeToMinutesV45(booking.startTime || booking.time || booking.slot_time || '');
      const bookingDuration = Number(booking.durationMinutes || booking.duration_minutes || 60);
      const bookingEnd = booking.endTime ? timeToMinutesV45(booking.endTime) : bookingStart + bookingDuration;
      if (start < bookingEnd && end > bookingStart) booked.add(lane);
    });
    return booked;
  }

  function drivingSlotHasFreeLaneV45(date = '', time = '', durationMinutes = 60) {
    const activeLanes = laneRecordsV45().filter((lane) => lane.status === 'Available');
    if (!activeLanes.length) return false;
    const booked = bookedLaneSetV45(date, time, durationMinutes);
    return activeLanes.some((lane) => !booked.has(lane.laneCode));
  }

  function isDrivingAvailabilityRequestV45(type = '') {
    const value = normV45(type);
    return value === 'driving' || value === 'driving_range' || value.includes('driving');
  }

  const previousAvailableSlotsForV45 = availableSlotsFor;
  availableSlotsFor = function availableSlotsForV45(type, targetId = '', date = '') {
    if (!isDrivingAvailabilityRequestV45(type)) {
      return previousAvailableSlotsForV45(type, targetId, date);
    }
    const today = new Date().toISOString().slice(0, 10);
    return getScheduleSlots()
      .filter((slot) => (slot.status || 'Available') === 'Available')
      .filter((slot) => slot.date >= today)
      .filter((slot) => !date || slot.date === date)
      .filter((slot) => slotAppliesTo(slot, 'driving', targetId))
      .filter((slot) => drivingSlotHasFreeLaneV45(slot.date, slot.time, 60))
      .sort(sortByDateTime);
  };

  availableDatesFor = function availableDatesForV45(type, targetId = '') {
    return [...new Set(availableSlotsFor(type, targetId).map((slot) => slot.date))].sort();
  };

  timeOptionsFor = function timeOptionsForV45(type, targetId = '', date = '', currentTime = '') {
    const times = [...new Set(availableSlotsFor(type, targetId, date).map((slot) => slot.time))]
      .sort((a, b) => convertTo24Hour(a).localeCompare(convertTo24Hour(b)));
    if (currentTime && !times.includes(currentTime)) times.unshift(currentTime);
    return times;
  };

  const previousSlotDisplayStatusV45 = slotDisplayStatus;
  slotDisplayStatus = function slotDisplayStatusV45(slot = {}) {
    if ((slot.status || 'Available') !== 'Available') return slot.status || 'Unavailable';
    const canServeDriving = slotAppliesTo(slot, 'driving', slot.targetId || 'all');
    if (canServeDriving && laneRecordsV45().length) {
      return drivingSlotHasFreeLaneV45(slot.date, slot.time, 60) ? 'Available' : 'Booked / Not Available';
    }
    return previousSlotDisplayStatusV45(slot);
  };
})();

/* V46 Payment + Feedback Supabase Fix
   - Every website booking now creates/updates a row in public.payments.
   - Payment amount in payments follows bookings.amount.
   - QR Payment defaults to pending; Pay at Counter defaults to not_paid.
   - Receipt upload, admin verify, and admin reject update both bookings + payments via the booking sync.
   - User feedback is inserted into public.reviews immediately and admin/user review cards show feedback category + user email.
*/


</script>
<?php
}

function upsi_section_admin_reviews_module(): void
{
?>
<script>
window.UPSI_SECTION_MODULES = window.UPSI_SECTION_MODULES || {};
window.UPSI_SECTION_MODULES["admin_reviews"] = {
  title: "Admin Reviews",
  runtimeChunk: '13/22',
  functions: ["adminReviews", "reviewCard"]
};
</script>
<?php
}

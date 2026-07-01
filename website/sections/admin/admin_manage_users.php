<?php
/**
 * admin_manage_users.php
 * Bahagian: Admin Manage Users
 *
 * V108: CSS dan JavaScript runtime dibahagikan ke semua section.
 * Jadi home_page.php tidak lagi memegang semua coding sistem.
 *
 * Runtime chunk: 7/22
 * Fungsi berkaitan untuk presentation: adminUsers, openAdminAccountForm
 */


function upsi_section_admin_manage_users_styles(): void
{
?>
<style>
/* =========================================================
   V108 CSS chunk 7/22
   Bahagian: Admin Manage Users
   ========================================================= */
.content-section-header h2 {
  margin: 0 0 6px;
  letter-spacing: -0.025em;
  color: var(--charcoal);
}

.content-section-header .muted {
  margin: 0;
  max-width: 850px;
  line-height: 1.55;
}

.section-icon {
  width: 50px;
  height: 50px;
  min-width: 50px;
  display: grid;
  place-items: center;
  border-radius: 17px;
  background: var(--dark-green);
  color: #fff;
  border: 2px solid rgba(227,179,65,0.55);
  box-shadow: 0 12px 28px rgba(15, 81, 50, 0.16);
  font-size: 23px;
}

.content-section-body {
  padding: 22px 24px 24px;
  display: grid;
  gap: 20px;
}

.content-section-body > .toolbar {
  margin: 0 !important;
  border: 1.5px solid rgba(15,81,50,0.12);
  border-radius: 20px;
  background: #f7fbf8;
  padding: 16px;
}

.content-section-body > div[style*="height"] {
  display: none;
}

.content-section-body > .card-grid,
.content-section-body > .stat-grid,
.content-section-body > .report-grid,
.content-section-body > .settings-grid,
.content-section-body > .schedule-admin-grid {
  margin-top: 0;
}

.content-section-body .table-card,
.content-section-body .card,
.content-section-body .admin-range-preview,
.content-section-body .app-booking-screen,
.content-section-body .app-booking-card,
.content-section-body .profile-preview-card {
  border-width: 2px;
}

.category-section + .category-section {
  margin-top: 2px;
}

@media (max-width: 760px) {
  .content-section-header,
  .content-section-body {
    padding: 18px;
  }

  .content-section-header {
    gap: 12px;
  }

  .section-icon {
    width: 44px;
    height: 44px;
    min-width: 44px;
    font-size: 20px;
  }
}


/* V21 QR image containment fix: keep QR/receipt-style payment images inside their frame */
.qr-box,
.qr-payment-panel,
.qr-settings-preview {
  overflow: hidden !important;
}

.qr-box {
  display: flex;
  flex-direction: column;
  align-items: center;
  gap: 10px;
}

.qr-code,
.qr-mini {
  overflow: hidden !important;
  position: relative;
  display: flex !important;
  align-items: center !important;
  justify-content: center !important;
  background: #ffffff !important;
  border: 1px solid rgba(15, 81, 50, 0.14);
  box-shadow: inset 0 0 0 1px rgba(15, 81, 50, 0.04);
}

.qr-code {
  width: min(220px, 100%) !important;
  height: 260px !important;
  max-height: 260px !important;
  margin: 12px auto !important;
  border-radius: 18px !important;
  padding: 8px !important;
}

.qr-mini {
  width: min(220px, 100%) !important;
  height: 260px !important;
  max-height: 260px !important;
  margin: 18px auto 14px !important;
  border-radius: 18px !important;
  padding: 8px !important;
}

.qr-code img,
.qr-mini img,
.qr-settings-preview img,
.qr-box img,
.qr-payment-panel img {
  display: block !important;
  width: 100% !important;
  height: 100% !important;
  max-width: 100% !important;
  max-height: 100% !important;
  object-fit: contain !important;
  object-position: center center !important;
  border-radius: 14px !important;
  margin: 0 auto !important;
  background: #ffffff !important;
}

.qr-settings-preview {
  min-height: 300px !important;
  max-height: 340px !important;
  padding: 16px !important;
  display: flex !important;
  align-items: center !important;
  justify-content: center !important;
}

.qr-payment-panel .qr-mini {
  flex: 0 0 auto;
}

.app-booking-card form .qr-payment-panel + .btn,
.qr-payment-panel + .btn {
  margin-top: 16px !important;
}

@media (max-width: 720px) {
  .qr-code,
  .qr-mini {
    width: min(190px, 100%) !important;
    height: 230px !important;
    max-height: 230px !important;
  }

  .qr-settings-preview {
    min-height: 260px !important;
    max-height: 300px !important;
  }
}

/* V22: clearer colour system, trainer availability popup, and dark/light mode */
body {
  background: linear-gradient(135deg, #edf9ef 0%, #ffffff 38%, #e1f1e5 100%) !important;
}

.card,
.table-card,
.empty-state,
.profile-preview-card,
.account-card,
.settings-system-card,
.trainer-reference-card,
.app-booking-card,
.auth-app-card {
  background: linear-gradient(145deg, #ffffff 0%, #f7fcf8 100%);
  border-color: rgba(15, 81, 50, 0.22) !important;
}

.topbar {
  background: linear-gradient(90deg, rgba(236, 248, 239, 0.96), rgba(255, 255, 255, 0.96));
}

.trainer-availability-row {
  margin: 14px 0 4px;
  display: flex;
  justify-content: flex-start;
}

.availability-btn {
  width: 100%;
  justify-content: center;
  border: 1.5px solid rgba(15, 81, 50, 0.18);
}

.availability-btn:disabled {
  cursor: not-allowed;
  opacity: 0.62;
}

.availability-list {
  display: grid;
  gap: 12px;
  margin-top: 16px;
}

.availability-day {
  display: grid;
  grid-template-columns: minmax(145px, 0.45fr) 1fr;
  gap: 12px;
  align-items: start;
  padding: 14px;
  border: 1px solid rgba(15, 81, 50, 0.16);
  border-radius: 18px;
  background: var(--soft-green);
}

.availability-day strong {
  color: var(--dark-green);
}

.availability-day div {
  display: flex;
  flex-wrap: wrap;
  gap: 8px;
}

.availability-day span {
  display: inline-flex;
  align-items: center;
  padding: 7px 11px;
  border-radius: 999px;
  background: #ffffff;
  border: 1px solid rgba(15, 81, 50, 0.14);
  color: var(--dark-green);
  font-weight: 800;
  font-size: 13px;
}

.meta-list li span {
  min-width: 115px;
}

.meta-list li strong {
  line-height: 1.35;
}


</style>
<?php
}

function upsi_section_admin_manage_users_scripts(): void
{
?>
<script>
/* =========================================================
   V108 JavaScript chunk 7/22
   Bahagian: Admin Manage Users
   ========================================================= */
adminCourseCard = function v27AdminCourseCard(course) {
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
      </ul>
      <div class="trainer-availability-row driving-availability-row">
        ${availabilityButtonMarkup('driving', course.id, 'View Available Date & Time')}
      </div>
      <div class="card-actions">
        <button class="btn btn-soft" data-edit-course="${course.id}">Edit</button>
        <button class="btn btn-danger-soft" data-delete-course="${course.id}">Delete</button>
      </div>
    </article>
  `;
};

const v27BaseBindAdminCourseButtons = bindAdminCourseButtons;
bindAdminCourseButtons = function v27BindAdminCourseButtons() {
  v27BaseBindAdminCourseButtons();
  bindAvailabilityButtons();
};

courseCard = function v27CourseCard(course) {
  const buckets = getBucketOptions(course);
  return `
    <article class="card driving-card-clean">
      <div class="card-top"><div><p class="eyebrow">Driving Range</p><h3>${escapeHtml(course.name)}</h3></div><div class="card-icon">⛳</div></div>
      <p>${escapeHtml(course.description)}</p>
      <div class="price-reference-box compact-price-box">
        <strong>Non-member</strong>${buckets.map((bucket) => `<span>${escapeHtml(bucket.label)} - RM ${formatPlainMoney(bucket.nonMemberPrice)}</span>`).join('')}
        <strong>Member</strong>${buckets.map((bucket) => `<span>${escapeHtml(bucket.label)} - RM ${formatPlainMoney(bucket.memberPrice)}</span>`).join('')}
      </div>
      <ul class="meta-list">
        <li><span>Location</span><strong>${escapeHtml(course.location)}</strong></li>
        <li><span>Bucket Limit</span><strong>1 to ${escapeHtml(course.maxBucketCount || 10)}</strong></li>
      </ul>
      <div class="trainer-availability-row driving-availability-row">${availabilityButtonMarkup('driving', course.id, 'View Available Date & Time')}</div>
      <div class="card-actions"><button class="btn btn-primary" data-book-course="${course.id}">Book Driving Range</button></div>
    </article>
  `;
};

trainerCard = function v27TrainerCard(trainer) {
  const rate = trainerRate(trainer);
  return `
    <article class="card trainer-card-clean">
      <div class="card-top"><div><p class="eyebrow">Pelatih</p><h3>${escapeHtml(trainer.name)}</h3></div><div class="card-icon">🏌️</div></div>
      <ul class="meta-list">
        <li><span>No. Phone</span><strong>${escapeHtml(trainer.phone || '-')}</strong></li>
        <li><span>Email</span><strong>${escapeHtml(trainer.email || '-')}</strong></li>
        <li><span>Alamat</span><strong>${escapeHtml(trainer.address || '-')}</strong></li>
        <li><span>Specialist</span><strong>${escapeHtml(trainer.description || 'Golf coaching and guided practice')}</strong></li>
        <li><span>Fee / Hour</span><strong>${rate ? money(rate) : 'Free / Not set'}</strong></li>
        <li><span>Booking Limit</span><strong>${trainerMinHours(trainer)} to ${trainerMaxHours(trainer)} hour(s)</strong></li>
        <li><span>Status</span><strong>${escapeHtml(trainer.status)}</strong></li>
      </ul>
      <div class="trainer-availability-row">${availabilityButtonMarkup('trainer', trainer.id, 'View Available Time')}</div>
      <div class="card-actions"><button class="btn btn-primary" data-book-trainer="${trainer.id}">Book Trainer</button></div>
    </article>
  `;
};

openTrainerForm = function v27OpenTrainerForm(trainer = null) {
  openModal(`
    <div class="modal-head"><div><p class="eyebrow">Trainer Form</p><h2>${trainer ? 'Edit Trainer' : 'Add Trainer'}</h2></div><button class="close-btn" data-close-modal>&times;</button></div>
    <form id="trainerForm" class="form-grid">
      <label class="wide">Trainer Name<input name="name" value="${escapeHtml(trainer?.name || '')}" required></label>
      <label>No. Phone<input name="phone" value="${escapeHtml(trainer?.phone || '')}" required></label>
      <label>Email<input name="email" type="email" value="${escapeHtml(trainer?.email || '')}" required></label>
      <label class="wide">Alamat<input name="address" value="${escapeHtml(trainer?.address || '')}" required></label>
      <label class="wide">Specialist / Expertise<textarea name="description" placeholder="Example: beginner swing basics, stance correction, driving accuracy" required>${escapeHtml(trainer?.description || '')}</textarea></label>
      <label>Trainer Fee Per Hour (RM)<input name="rate" type="number" min="0" step="0.01" value="${trainerRate(trainer)}" required></label>
      <label>Minimum Booking Hour<input name="minBookingHours" type="number" min="1" max="12" value="${trainerMinHours(trainer)}" required></label>
      <label>Maximum Booking Hour<input name="maxBookingHours" type="number" min="1" max="12" value="${trainerMaxHours(trainer)}" required></label>
      <label>Status<select name="status"><option ${trainer?.status === 'Available' ? 'selected' : ''}>Available</option><option ${trainer?.status === 'Unavailable' ? 'selected' : ''}>Unavailable</option></select></label>
      <button class="btn btn-primary wide" type="submit">Save Trainer</button>
    </form>
  `);
  document.getElementById('trainerForm').addEventListener('submit', (event) => {
    event.preventDefault();
    const form = new FormData(event.currentTarget);
    const minHours = Math.max(1, Number(form.get('minBookingHours') || 1));
    const maxHours = Math.max(minHours, Number(form.get('maxBookingHours') || minHours));
    const trainers = read('trainers');
    const payload = {
      id: trainer?.id || makeId('T'),
      name: form.get('name').trim(),
      phone: form.get('phone').trim(),
      email: form.get('email').trim(),
      address: form.get('address').trim(),
      description: form.get('description').trim(),
      rate: Number(form.get('rate') || 0),
      hourlyRate: Number(form.get('rate') || 0),
      minBookingHours: minHours,
      maxBookingHours: maxHours,
      status: form.get('status'),
      profileImage: trainer?.profileImage || '',
      createdAt: trainer?.createdAt || new Date().toISOString(),
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
      confirmAction({ title: 'Deactivate Trainer', message: 'Are you sure you want to mark this trainer as unavailable? Users will not be able to book this trainer while unavailable.', confirmText: 'Deactivate Trainer', danger: true, onConfirm: persistTrainer });
    } else {
      persistTrainer();
    }
  });
};

openTrainerBookingModal = function v27OpenTrainerBookingModal(prefill = {}, existingBooking = null) {
  const trainers = read('trainers').filter((t) => t.status === 'Available');
  const booking = existingBooking || {};
  const selectedTrainerId = booking.trainerId || prefill.trainerId || trainers[0]?.id || '';
  const selectedTrainer = trainers.find((t) => t.id === selectedTrainerId) || trainers[0];
  if (!selectedTrainer) return toast('No available trainer to book.');
  const availableDates = availableDatesFor('trainer', selectedTrainer.id);
  if (!availableDates.length && !existingBooking) return toast('No available date and time for this trainer yet. Please wait for admin to add trainer time slots.');
  const modalDates = [...availableDates];
  if (booking.date && !modalDates.includes(booking.date)) modalDates.unshift(booking.date);
  const selectedDate = modalDates.includes(booking.date) ? booking.date : (modalDates[0] || '');
  const availableTimes = timeOptionsFor('trainer', selectedTrainer.id, selectedDate, booking.time);
  const selectedTime = availableTimes.includes(booking.time) ? booking.time : (availableTimes[0] || '');
  const selectedHours = Number(booking.trainerHours || trainerMinHours(selectedTrainer));
  openModal(`
    <div class="modal-head"><div><p class="eyebrow">${existingBooking ? 'Reschedule Trainer' : 'New Trainer Booking'}</p><h2>${existingBooking ? 'Update trainer session' : 'Book Trainer'}</h2><p class="muted">Choose trainer, available date, time and session duration. No ball bucket selection is required.</p></div><button class="close-btn" data-close-modal>&times;</button></div>
    <form id="trainerBookingForm" class="form-grid">
      <label class="wide">Trainer<select name="trainerId" data-trainer-booking-select required>${trainers.map((t) => `<option value="${t.id}" ${selectedTrainerId === t.id ? 'selected' : ''}>${escapeHtml(t.name)}</option>`).join('')}</select></label>
      <label>Available Date<select name="date" data-trainer-date required>${dateOptionMarkup(modalDates, selectedDate)}</select></label>
      <label>Available Time<select name="time" data-trainer-time required>${timeOptionMarkup(availableTimes, selectedTime)}</select></label>
      <label>Booking Duration<select name="trainerHours" data-trainer-hours required>${trainerHourOptions(selectedTrainer, selectedHours)}</select></label>
      <div class="bucket-info wide trainer-note-box"><span class="info-icon">🎓</span><div><p>No ball bucket selection is required for trainer booking.</p><strong data-trainer-contact>${escapeHtml(selectedTrainer.name)} • ${escapeHtml(selectedTrainer.phone || '-')}</strong><small class="muted" data-trainer-extra>${escapeHtml(selectedTrainer.email || '-')} • ${escapeHtml(selectedTrainer.address || '-')}</small><small class="muted" data-trainer-availability>Available: ${escapeHtml(availabilitySummary('trainer', selectedTrainer.id))}</small></div></div>
      <div class="calculation-row wide modal-total-row"><div><span>💼</span> <span data-trainer-price-formula>${escapeHtml(selectedTrainer.name)} • ${selectedHours} hour(s) × ${money(trainerRate(selectedTrainer))}</span></div><strong data-trainer-total>${money(trainerRate(selectedTrainer) * selectedHours)}</strong></div>
      <button class="btn btn-primary wide" type="submit">${existingBooking ? 'Save Reschedule' : 'Submit Trainer Booking'}</button>
    </form>
  `);
  const form = document.getElementById('trainerBookingForm');
  const currentTrainer = () => trainers.find((t) => t.id === form.trainerId.value) || selectedTrainer;
  const refreshTrainerTimes = (preferredTime = '') => {
    const trainer = currentTrainer();
    const date = form.date.value;
    const times = timeOptionsFor('trainer', trainer.id, date, preferredTime || form.time.value);
    const selected = times.includes(preferredTime || form.time.value) ? (preferredTime || form.time.value) : (times[0] || '');
    form.time.innerHTML = timeOptionMarkup(times, selected);
  };
  const refreshTrainerTotal = () => {
    const trainer = currentTrainer();
    const hours = Number(form.trainerHours.value || trainerMinHours(trainer));
    const rate = trainerRate(trainer);
    form.querySelector('[data-trainer-price-formula]').textContent = `${trainer.name} • ${hours} hour(s) × ${money(rate)}`;
    form.querySelector('[data-trainer-total]').textContent = money(hours * rate);
  };
  const refreshTrainerInfo = () => {
    const trainer = currentTrainer();
    form.querySelector('[data-trainer-contact]').textContent = `${trainer.name} • ${trainer.phone || '-'}`;
    form.querySelector('[data-trainer-extra]').textContent = `${trainer.email || '-'} • ${trainer.address || '-'}`;
    form.querySelector('[data-trainer-availability]').textContent = `Available: ${availabilitySummary('trainer', trainer.id)}`;
    const dates = availableDatesFor('trainer', trainer.id);
    form.date.innerHTML = dateOptionMarkup(dates, dates[0] || '');
    form.trainerHours.innerHTML = trainerHourOptions(trainer, trainerMinHours(trainer));
    refreshTrainerTimes('');
    refreshTrainerTotal();
  };
  form.trainerId.addEventListener('change', refreshTrainerInfo);
  form.date.addEventListener('change', () => refreshTrainerTimes(''));
  form.trainerHours.addEventListener('change', refreshTrainerTotal);
  refreshTrainerTotal();
  form.addEventListener('submit', (event) => {
    event.preventDefault();
    const formData = new FormData(event.currentTarget);
    if (!formData.get('date') || !formData.get('time')) return toast('Please select an available trainer date and time.');
    const trainer = trainers.find((t) => t.id === formData.get('trainerId')) || selectedTrainer;
    const hours = Math.max(1, Number(formData.get('trainerHours') || trainerMinHours(trainer)));
    const amount = trainerRate(trainer) * hours;
    const bookings = read('bookings');
    const applyBooking = (item) => {
      item.bookingType = 'trainer'; item.courseId = ''; item.courseName = 'Trainer Coaching Session'; item.trainerId = trainer.id; item.trainerName = trainer.name;
      item.bucketOptionId = ''; item.bucketLabel = ''; item.bucketBalls = 0; item.bucketPrice = trainerRate(trainer); item.bucketCount = 0; item.totalBalls = 0;
      item.trainerHours = hours; item.date = formData.get('date'); item.time = formData.get('time'); item.amount = amount;
      item.paymentMethod = 'QR Payment'; item.bookingStatus = 'Pending Confirmation'; item.paymentStatus = amount > 0 ? 'Pending Verification' : 'Not Required';
    };
    if (existingBooking) {
      const item = bookings.find((b) => b.id === existingBooking.id);
      applyBooking(item);
      write('bookings', bookings); closeModal(); userBookings(); toast('Trainer booking rescheduled. Waiting admin confirmation.'); return;
    }
    const item = { id: makeId('B'), userId: state.session.id, customerName: state.session.fullName, customerEmail: state.session.email, receiptNote: '', receiptImage: '', hiddenForUsers: [], hiddenForAdmin: false, cancelReason: '', cancelledBy: '', cancellationType: '', cancelledAt: '', createdAt: new Date().toISOString() };
    applyBooking(item);
    bookings.unshift(item);
    write('bookings', bookings); closeModal(); state.currentPage = 'mybookings'; renderNav(); renderPage(); toast('Trainer booking submitted successfully.');
  });
};

bookingPackageLine = function v27BookingPackageLine(booking) {
  if (booking.bookingType === 'trainer') {
    const hours = Number(booking.trainerHours || 1);
    const rate = hours ? Number(booking.amount || 0) / hours : Number(booking.amount || 0);
    return `<br><span class="muted">Trainer coaching session • ${hours} ${hours === 1 ? 'hour' : 'hours'} × ${money(rate)}</span>`;
  }
  if (!booking.bucketLabel) return '';
  const count = Number(booking.bucketCount || 1);
  const balls = Number(booking.totalBalls || (booking.bucketBalls || 0) * count);
  const memberText = booking.membershipType ? `${membershipLabel(booking.membershipType)} • ` : '';
  return `<br><span class="muted">${memberText}${count} × ${escapeHtml(booking.bucketLabel)} = ${balls} balls</span>`;
};

function isAdminLike(user = {}) {
  return user.role === 'admin' || ['admin', 'main_admin'].includes(user.supabaseRole);
}

function notificationParticipants(item = {}) {
  return [item.senderId, item.recipientId].filter(Boolean);
}

function peerFromNotification(item = {}) {
  const current = getFreshSessionUser();
  const peerId = item.senderId === current.id ? item.recipientId : item.senderId;
  return read('users').find((u) => u.id === peerId) || null;
}

function chatMessagesWith(peerId) {
  const current = getFreshSessionUser();
  return read('notifications')
    .filter((item) => item.type === 'chat' || item.type === 'personal')
    .filter((item) => (item.recipientId === current.id && item.senderId === peerId) || (item.senderId === current.id && item.recipientId === peerId))
    .sort((a, b) => new Date(a.createdAt) - new Date(b.createdAt));
}

async function markChatRead(peerId) {
  const current = getFreshSessionUser();
  const items = read('notifications');
  let changed = false;
  items.forEach((item) => {
    if (item.recipientId === current.id && item.senderId === peerId && !item.isRead) {
      item.isRead = true;
      changed = true;
    }
  });
  if (changed) setLocalData('notifications', items);
  if (SUPABASE_MODE && isUuid(current.id) && isUuid(peerId)) {
    await supabaseClient.from(DB_TABLES.notifications).update({ is_read: true }).eq('recipient_id', current.id).eq('sender_id', peerId).eq('is_read', false);
  }
  renderProfileChip();
}

function openChatThread(peerId) {
  const current = getFreshSessionUser();
  const peer = read('users').find((u) => u.id === peerId);
  if (!peer) return toast('Chat user not found.');
  markChatRead(peerId);
  const messages = chatMessagesWith(peerId);
  const canReply = isAdminLike(current) && isAdminLike(peer);
  openModal(`
    <div class="modal-head"><div><p class="eyebrow">Personal Notification Chat</p><h2>${escapeHtml(peer.fullName)}</h2><p class="muted">${canReply ? 'Admins can reply to each other here.' : 'This message thread is read-only for users.'}</p></div><button class="close-btn" data-close-modal>&times;</button></div>
    <div class="chat-thread">
      ${messages.map((item) => `<article class="chat-bubble ${item.senderId === current.id ? 'mine' : ''}"><div><strong>${escapeHtml(item.senderId === current.id ? 'You' : peer.fullName)}</strong><small>${new Date(item.createdAt).toLocaleString()}</small></div><h4>${escapeHtml(item.title || 'Message')}</h4><p>${escapeHtml(item.message || '')}</p>${item.imageUrl ? `<img class="notification-image" src="${escapeHtml(item.imageUrl)}" alt="Message image">` : ''}</article>`).join('') || empty('No message in this chat yet.')}
    </div>
    ${canReply ? `<form id="chatReplyForm" class="form-grid chat-reply-form"><label class="wide">Reply<textarea name="message" placeholder="Write your reply..." required></textarea></label><label class="wide">Image Attachment<input name="image" type="file" accept="image/*"></label><button class="btn btn-primary wide" type="submit">Send Reply</button></form>` : ''}
  `);
  const form = document.getElementById('chatReplyForm');
  if (form) form.addEventListener('submit', async (event) => {
    event.preventDefault();
    const data = new FormData(form);
    const imageUrl = await fileToDataUrl(data.get('image'), 1800000);
    const notification = await createPersonalNotification({ recipient: peer, title: 'Admin Chat Reply', message: data.get('message').trim(), imageUrl, type: 'chat' });
    if (notification) { closeModal(); openChatThread(peerId); toast('Reply sent.'); }
  });
}

openNotificationCenter = function v27OpenNotificationCenter() {
  const notifications = visibleNotificationsForCurrentUser();
  openModal(`
    <div class="modal-head"><div><p class="eyebrow">Personal Notification</p><h2>Messages from Administration</h2><p class="muted">Notifications will stay unread until you open the chat/thread.</p></div><button class="close-btn" data-close-modal>&times;</button></div>
    <div class="notification-list">
      ${notifications.map((item) => {
        const peer = peerFromNotification(item);
        return `<article class="notification-card ${item.isRead ? '' : 'unread'}"><div class="card-top"><div><p class="eyebrow">${new Date(item.createdAt).toLocaleString()}</p><h3>${escapeHtml(item.title)}</h3></div>${item.isRead ? '<span class="status-pill confirmed">Read</span>' : '<span class="status-pill pending">New</span>'}</div><p>${escapeHtml(item.message)}</p>${item.imageUrl ? `<img class="notification-image" src="${escapeHtml(item.imageUrl)}" alt="Notification image">` : ''}<div class="card-actions"><button class="btn btn-primary" data-open-chat-peer="${peer?.id || item.senderId || ''}">Open Chat</button></div></article>`;
      }).join('') || empty('No personal notification yet.')}
    </div>
  `);
  document.querySelectorAll('[data-open-chat-peer]').forEach((btn) => btn.addEventListener('click', () => {
    if (btn.dataset.openChatPeer) openChatThread(btn.dataset.openChatPeer);
  }));
};

function messageInboxCardMarkup() {
  const current = getFreshSessionUser();
  const peers = [];
  visibleNotificationsForCurrentUser().forEach((item) => {
    const peer = peerFromNotification(item);
    if (peer && !peers.some((u) => u.id === peer.id)) peers.push(peer);
  });
  read('notifications').filter((item) => item.senderId === current.id).forEach((item) => {
    const peer = read('users').find((u) => u.id === item.recipientId);
    if (peer && !peers.some((u) => u.id === peer.id)) peers.push(peer);
  });
  return `
    <div class="card settings-system-card strong-border-card message-inbox-card">
      <div class="card-top"><div><p class="eyebrow">Personal Notification</p><h2>Message Inbox</h2><p class="muted">Open a chat to mark messages as read. Users can read only; admins can reply to admins.</p></div></div>
      <div class="card-grid two message-peer-grid">
        ${peers.map((peer) => `<article class="mini-profile-card"><div>${avatarMarkup(peer)}<div><strong>${escapeHtml(peer.fullName)}</strong><span>${escapeHtml(peer.email || '')}</span></div></div><button class="btn btn-soft" type="button" data-open-profile-chat="${peer.id}">Open Chat</button></article>`).join('') || empty('No personal notification yet.')}
      </div>
    </div>
  `;
}

const v27BaseUserProfile = userProfile;
userProfile = function v27UserProfile() {
  v27BaseUserProfile();
  content().insertAdjacentHTML('beforeend', messageInboxCardMarkup());
  content().querySelectorAll('[data-open-profile-chat]').forEach((btn) => btn.addEventListener('click', () => openChatThread(btn.dataset.openProfileChat)));
};

const v27BaseAccountSettings = accountSettings;
accountSettings = function v27AccountSettings(includeSystemSettings = false, sourcePage = 'settings') {
  v27BaseAccountSettings(includeSystemSettings, sourcePage);
  content().insertAdjacentHTML('beforeend', messageInboxCardMarkup());
  content().querySelectorAll('[data-open-profile-chat]').forEach((btn) => btn.addEventListener('click', () => openChatThread(btn.dataset.openProfileChat)));
};

const v27BaseCreatePersonalNotification = createPersonalNotification;
createPersonalNotification = async function v27CreatePersonalNotification(args) {
  return v27BaseCreatePersonalNotification({ ...args, type: args.type || 'chat' });
};

function printableReportHtml() {
  const bookings = read('bookings');
  const reportBookings = bookings.filter((b) => ['Confirmed', 'Cancelled'].includes(b.bookingStatus) || b.paymentStatus === 'Verified');
  const verified = bookings.filter((b) => b.paymentStatus === 'Verified');
  const confirmed = bookings.filter((b) => b.bookingStatus === 'Confirmed');
  const confirmedCancelled = bookings.filter((b) => b.bookingStatus === 'Cancelled' && b.previousBookingStatus === 'Confirmed');
  const revenue = verified.reduce((sum, b) => sum + Number(b.amount || 0), 0);
  const monthly = {};
  reportBookings.forEach((b) => {
    const key = (b.date || b.createdAt || '').slice(0, 7) || 'No Date';
    if (!monthly[key]) monthly[key] = { booking: 0, cancel: 0, revenue: 0 };
    monthly[key].booking += b.bookingStatus === 'Confirmed' ? 1 : 0;
    monthly[key].cancel += b.bookingStatus === 'Cancelled' ? 1 : 0;
    monthly[key].revenue += b.paymentStatus === 'Verified' ? Number(b.amount || 0) : 0;
  });
  const monthRows = Object.entries(monthly).sort().map(([month, row]) => `<tr><td>${escapeHtml(month)}</td><td>${row.booking}</td><td>${row.cancel}</td><td>${money(row.revenue)}</td></tr>`).join('');
  const serviceRows = ['driving', 'trainer'].map((type) => {
    const list = reportBookings.filter((b) => b.bookingType === type);
    const svcRevenue = list.filter((b) => b.paymentStatus === 'Verified').reduce((sum, b) => sum + Number(b.amount || 0), 0);
    return `<tr><td>${type === 'trainer' ? 'Trainer Booking' : 'Driving Range'}</td><td>${list.length}</td><td>${money(svcRevenue)}</td></tr>`;
  }).join('');
  return `<!doctype html><html><head><title>UPSI Golf Booking Report</title><style>
    body{font-family:Arial,Helvetica,sans-serif;color:#10231b;margin:0;padding:30px;background:#f7fff8} .sheet{background:white;border:2px solid #0f5132;border-radius:22px;padding:28px;max-width:980px;margin:auto} h1{margin:0 0 5px;color:#0f5132;font-size:34px} h2{color:#0f5132;margin-top:28px}.muted{color:#62746b}.grid{display:grid;grid-template-columns:repeat(4,1fr);gap:14px;margin:24px 0}.stat{border:1px solid #d7eadc;border-radius:16px;padding:16px;background:#f4fbf5}.stat span{display:block;color:#607267;font-weight:700}.stat strong{font-size:24px;color:#0f5132} table{width:100%;border-collapse:collapse;margin-top:14px}th,td{border:1px solid #d7eadc;padding:12px;text-align:left}th{background:#0f5132;color:white}.footer{margin-top:30px;font-size:12px;color:#667} @media print{body{background:white;padding:0}.sheet{border:none;border-radius:0}.no-print{display:none}}
  </style></head><body><main class="sheet"><p class="muted">UPSI Golf Booking System</p><h1>Booking & Revenue Report</h1><p class="muted">Generated on ${new Date().toLocaleString()}</p><section class="grid"><div class="stat"><span>Verified Revenue</span><strong>${money(revenue)}</strong></div><div class="stat"><span>Confirmed Bookings</span><strong>${confirmed.length}</strong></div><div class="stat"><span>Confirmed Cancellations</span><strong>${confirmedCancelled.length}</strong></div><div class="stat"><span>Verified Payments</span><strong>${verified.length}</strong></div></section><h2>Monthly Summary</h2><table><thead><tr><th>Month</th><th>Confirmed Booking</th><th>Confirmed Cancel</th><th>Verified Revenue</th></tr></thead><tbody>${monthRows || '<tr><td colspan="4">No report data.</td></tr>'}</tbody></table><h2>Service Summary</h2><table><thead><tr><th>Service</th><th>Relevant Records</th><th>Verified Revenue</th></tr></thead><tbody>${serviceRows}</tbody></table><h2>Operational Notes</h2><ul><li>Pending bookings that are not confirmed are excluded from this report.</li><li>Verified payment records are kept as financial reference.</li><li>Confirmed booking cancellations are counted separately for admin review.</li></ul><p class="footer">Prepared by administrator through UPSI Golf Booking System.</p><button class="no-print" onclick="window.print()">Print Report</button></main></body></html>`;
}

function printOperationalReport() {
  const win = window.open('', '_blank');
  if (!win) return toast('Popup blocked. Please allow popups to print report.');
  win.document.open();
  win.document.write(printableReportHtml());
  win.document.close();
  win.focus();
  setTimeout(() => win.print(), 400);
}

adminReports = function v27AdminReports() {
  setTitle('Reports', 'Administrator Panel');
  const bookings = read('bookings');
  const confirmed = bookings.filter((b) => b.bookingStatus === 'Confirmed').length;
  const verified = bookings.filter((b) => b.paymentStatus === 'Verified');
  const revenue = verified.reduce((sum, b) => sum + Number(b.amount || 0), 0);
  const confirmedCancelled = bookings.filter((b) => b.bookingStatus === 'Cancelled' && b.previousBookingStatus === 'Confirmed').length;
  const monthlyCount = new Set(bookings.filter((b) => b.bookingStatus === 'Confirmed').map((b) => (b.date || '').slice(0, 7)).filter(Boolean)).size;
  content().innerHTML = `
    <div class="toolbar"><div><p class="eyebrow">Printable Report</p><h2>Verified operational report</h2><p class="muted">Only confirmed, verified and confirmed-cancelled records are used. Pending bookings are excluded.</p></div><button class="btn btn-primary" type="button" data-print-report>Print Report</button></div>
    <div class="report-grid">${statCard('Verified Revenue', money(revenue))}${statCard('Confirmed Bookings', confirmed)}${statCard('Confirmed Cancel Review', confirmedCancelled)}${statCard('Monthly Booking Groups', monthlyCount)}</div>
    <div class="card" style="margin-top:22px"><p class="eyebrow">Summary</p><h2>Operational Report</h2><ul class="meta-list"><li><span>Total users</span><strong>${read('users').filter((u) => u.role === 'user').length}</strong></li><li><span>Driving range records</span><strong>${read('courses').filter((c) => isDrivingCourse(c)).length}</strong></li><li><span>Total trainers</span><strong>${read('trainers').length}</strong></li><li><span>Total reviews</span><strong>${read('reviews').length}</strong></li><li><span>Verified payments</span><strong>${verified.length}</strong></li></ul></div>
  `;
  content().querySelector('[data-print-report]').addEventListener('click', printOperationalReport);
};


document.addEventListener('DOMContentLoaded', boot);

// =========================================================
// V28: Trainer button, event controls/date-time picker, chat fixes,
// QR download, profile/QR layout polish.
// =========================================================

function hasUsableImageUrl(url = '') {
  const value = String(url || '').trim();
  return Boolean(value) && !value.startsWith('data:application/octet-stream') && value !== 'null' && value !== 'undefined';
}

const v28BaseFileToDataUrl = fileToDataUrl;
fileToDataUrl = async function v28FileToDataUrl(file, maxSize = 2500000) {
  if (!file || !file.size || file.size <= 0 || !file.name) return '';
  return v28BaseFileToDataUrl(file, maxSize);
};

function monthKeyFromDate(date = '') {
  if (!date) return 'No date set';
  const parsed = new Date(`${date}T00:00:00`);
  if (Number.isNaN(parsed.getTime())) return date;
  return parsed.toLocaleDateString(undefined, { month: 'long', year: 'numeric' });
}

// Group date dropdowns by month so users/admin can clearly choose another month.
dateOptionMarkup = function v28DateOptionMarkup(dates = [], selected = '') {
  if (!dates.length) return '<option value="">No available date</option>';
  const grouped = {};
  dates.slice().sort().forEach((date) => {
    const label = monthKeyFromDate(date);
    if (!grouped[label]) grouped[label] = [];
    grouped[label].push(date);
  });
  return Object.entries(grouped).map(([month, list]) => `
    <optgroup label="${escapeHtml(month)}">
      ${list.map((date) => `<option value="${date}" ${selected === date ? 'selected' : ''}>${formatDateDisplay(date)}</option>`).join('')}
    </optgroup>
  `).join('');
};

function selectOptions(list, selected, labelFn = (x) => x, valueFn = (x) => x) {
  return list.map((item) => {
    const value = String(valueFn(item));
    return `<option value="${escapeHtml(value)}" ${String(selected) === value ? 'selected' : ''}>${escapeHtml(String(labelFn(item)))}</option>`;
  }).join('');
}

function splitDateParts(date = '') {
  const d = date ? new Date(`${date}T00:00:00`) : new Date();
  const valid = !Number.isNaN(d.getTime());
  const base = valid ? d : new Date();
  return { year: base.getFullYear(), month: base.getMonth() + 1, day: base.getDate() };
}

function daysInMonth(year, month) {
  return new Date(Number(year), Number(month), 0).getDate();
}

function buildDateFromParts(year, month, day) {
  return `${String(year).padStart(4, '0')}-${String(month).padStart(2, '0')}-${String(day).padStart(2, '0')}`;
}

function dateScrollPickerMarkup(namePrefix, value = '') {
  const parts = splitDateParts(value);
  const years = Array.from({ length: 6 }, (_, i) => new Date().getFullYear() + i);
  const months = Array.from({ length: 12 }, (_, i) => i + 1);
  const days = Array.from({ length: 31 }, (_, i) => i + 1);
  return `
    <div class="custom-date-picker" data-date-picker="${namePrefix}">
      <input type="hidden" name="${namePrefix}" value="${escapeHtml(value || buildDateFromParts(parts.year, parts.month, parts.day))}" data-date-value>
      <label>Month<select name="${namePrefix}Month" data-date-month>${selectOptions(months, parts.month, (m) => new Date(2026, m - 1, 1).toLocaleDateString(undefined, { month: 'long' }))}</select></label>
      <label>Day<select class="scroll-select" size="6" name="${namePrefix}Day" data-date-day>${selectOptions(days, parts.day)}</select></label>
      <label>Year<select name="${namePrefix}Year" data-date-year>${selectOptions(years, parts.year)}</select></label>
    </div>
  `;
}

function bindDateScrollPicker(scope = document) {
  scope.querySelectorAll('[data-date-picker]').forEach((picker) => {
    const month = picker.querySelector('[data-date-month]');
    const day = picker.querySelector('[data-date-day]');
    const year = picker.querySelector('[data-date-year]');
    const hidden = picker.querySelector('[data-date-value]');
    const refresh = () => {
      const maxDay = daysInMonth(year.value, month.value);
      const selected = Math.min(Number(day.value || 1), maxDay);
      day.innerHTML = selectOptions(Array.from({ length: maxDay }, (_, i) => i + 1), selected);
      day.value = String(selected);
      hidden.value = buildDateFromParts(year.value, month.value, selected);
    };
    [month, day, year].forEach((el) => el.addEventListener('change', refresh));
    refresh();
  });
}

function parseTimeForPicker(time = '8:00 AM') {
  const parts = parseTimeSlot(time || '8:00 AM');
  return { hour: Number(parts.hour || 8), minute: Number(parts.minute || 0), period: parts.period || 'AM' };
}

function timeScrollPickerMarkup(name = 'time', value = '8:00 AM') {
  const parts = parseTimeForPicker(value);
  const hours = Array.from({ length: 12 }, (_, i) => i + 1);
  const minutes = Array.from({ length: 12 }, (_, i) => i * 5);
  return `
    <div class="custom-time-picker" data-time-picker>
      <input type="hidden" name="${name}" value="${escapeHtml(formatTimeSlot(parts.hour, parts.minute, parts.period))}" data-time-value>
      <label>Hour<select class="scroll-select" size="6" data-time-hour>${selectOptions(hours, parts.hour)}</select></label>
      <label>Minute<select class="scroll-select" size="6" data-time-minute>${selectOptions(minutes, parts.minute, (m) => String(m).padStart(2, '0'))}</select></label>
      <label>AM/PM<select class="scroll-select" size="2" data-time-period>${selectOptions(['AM', 'PM'], parts.period)}</select></label>
      <strong class="time-preview" data-time-preview>${escapeHtml(formatTimeSlot(parts.hour, parts.minute, parts.period))}</strong>
    </div>
  `;
}

function bindTimeScrollPicker(scope = document) {
  scope.querySelectorAll('[data-time-picker]').forEach((picker) => {
    const hour = picker.querySelector('[data-time-hour]');
    const minute = picker.querySelector('[data-time-minute]');
    const period = picker.querySelector('[data-time-period]');
    const hidden = picker.querySelector('[data-time-value]');
    const preview = picker.querySelector('[data-time-preview]');
    const refresh = () => {
      const formatted = formatTimeSlot(Number(hour.value), Number(minute.value), period.value);
      hidden.value = formatted;
      if (preview) preview.textContent = formatted;
    };
    [hour, minute, period].forEach((el) => el.addEventListener('change', refresh));
    refresh();
  });
}

function eventCardMarkupV28(item, mode = 'user') {
  return `
    <article class="event-card">
      ${hasUsableImageUrl(item.imageUrl) ? `<img src="${escapeHtml(item.imageUrl)}" alt="${escapeHtml(item.title)}">` : '<div class="event-placeholder">📣</div>'}
      <div class="event-card-body">
        <span class="status-pill pending">${escapeHtml(item.category || 'Public Notification')}</span>
        <h3>${escapeHtml(item.title)}</h3>
        <p>${escapeHtml(item.description || '')}</p>
        <ul class="meta-list compact-meta">
          <li><span>Date</span><strong>${escapeHtml(item.eventDate ? formatDateDisplay(item.eventDate) : '-')}</strong></li>
          <li><span>Time</span><strong>${escapeHtml(item.eventTime || '-')}</strong></li>
          <li><span>Location</span><strong>${escapeHtml(item.location || '-')}</strong></li>
        </ul>
        ${mode === 'admin' ? `<div class="card-actions event-admin-actions"><button class="btn btn-soft" data-edit-public-event="${item.id}">Edit</button><button class="btn btn-danger-soft" data-delete-public-event="${item.id}">Delete</button></div>` : ''}
      </div>
    </article>
  `;
}

// Month label now sits above the event group and cards align to the left.
eventCarouselMarkup = function v28EventCarouselMarkup(mode = 'user') {
  const events = publicEvents();
  let lastMonth = '';
  return `
    <section class="event-carousel-section">
      <div class="event-carousel-head">
        <div>
          <p class="eyebrow">Event & Public Notification</p>
          <h2>${mode === 'admin' ? 'Public events shown to users' : 'Latest public notifications'}</h2>
          <p class="muted">Events are grouped by month. Use the arrow buttons if there are many announcements.</p>
        </div>
        <div class="row-actions">
          ${mode === 'admin' ? '<button class="btn btn-primary" type="button" data-add-public-event>Add Event / Public Notification</button>' : ''}
          <button class="carousel-arrow" type="button" data-event-scroll="left">←</button>
          <button class="carousel-arrow" type="button" data-event-scroll="right">→</button>
        </div>
      </div>
      <div class="event-carousel-track v28-event-track" data-event-track>
        ${events.map((item) => {
          const month = monthKeyFromDate(item.eventDate);
          const monthBadge = month !== lastMonth ? `<div class="event-month-break v28-month-break"><span>${escapeHtml(month)}</span></div>` : '';
          lastMonth = month;
          return `${monthBadge}${eventCardMarkupV28(item, mode)}`;
        }).join('') || '<article class="event-card empty-event"><div class="event-card-body"><h3>No public event yet</h3><p class="muted">Admin can add announcements from the dashboard.</p></div></article>'}
      </div>
    </section>
  `;
};

bindEventCarousel = function v28BindEventCarousel() {
  const track = content().querySelector('[data-event-track]');
  if (!track) return;
  content().querySelectorAll('[data-event-scroll]').forEach((btn) => {
    btn.addEventListener('click', () => track.scrollBy({ left: (btn.dataset.eventScroll === 'right' ? 1 : -1) * 360, behavior: 'smooth' }));
  });
  const addBtn = content().querySelector('[data-add-public-event]');
  if (addBtn) addBtn.addEventListener('click', () => openPublicEventForm());
  content().querySelectorAll('[data-edit-public-event]').forEach((btn) => btn.addEventListener('click', () => {
    const item = read('events').find((ev) => ev.id === btn.dataset.editPublicEvent);
    if (item) openPublicEventForm(item);
  }));
  content().querySelectorAll('[data-delete-public-event]').forEach((btn) => btn.addEventListener('click', () => {
    const item = read('events').find((ev) => ev.id === btn.dataset.deletePublicEvent);
    if (!item) return;
    confirmAction({
      title: 'Delete Event / Public Notification',
      message: `Are you sure you want to delete "${item.title}"? It will be removed from admin dashboard and user home.`,
      confirmText: 'Delete Announcement',
      danger: true,
      onConfirm: () => {
        write('events', read('events').filter((ev) => ev.id !== item.id));
        renderPage();
        toast('Event / public notification deleted.');
      },
    });
  }));
};

openPublicEventForm = function v28OpenPublicEventForm(eventItem = null) {
  if (!currentUserIsPrimaryAdmin() && state.session?.role !== 'admin') return toast('Only admin can add public events.');
  const safeTime = eventItem?.eventTime ? String(eventItem.eventTime).slice(0, 5) : '09:00';
  const timeParts = (() => {
    const [hh, mm] = safeTime.split(':').map(Number);
    const period = hh >= 12 ? 'PM' : 'AM';
    let hour = hh % 12;
    if (hour === 0) hour = 12;
    return formatTimeSlot(hour, Number(mm || 0), period);
  })();
  openModal(`
    <div class="modal-head">
      <div><p class="eyebrow">Event & Public Notification</p><h2>${eventItem ? 'Edit Announcement' : 'Add Announcement'}</h2><p class="muted">This will appear at the top of the admin dashboard and user home page.</p></div>
      <button class="close-btn" data-close-modal>&times;</button>
    </div>
    <form id="publicEventForm" class="form-grid scrollable-modal-form v28-event-form">
      <label>Title<input name="title" value="${escapeHtml(eventItem?.title || '')}" required></label>
      <label>Category<select name="category"><option ${eventItem?.category === 'Event' ? 'selected' : ''}>Event</option><option ${eventItem?.category !== 'Event' ? 'selected' : ''}>Public Notification</option><option ${eventItem?.category === 'Maintenance' ? 'selected' : ''}>Maintenance</option><option ${eventItem?.category === 'Promotion' ? 'selected' : ''}>Promotion</option></select></label>
      <label class="wide">Date ${dateScrollPickerMarkup('eventDate', eventItem?.eventDate || '')}</label>
      <label class="wide">Time ${timeScrollPickerMarkup('eventTime', timeParts)}</label>
      <label class="wide">Location<input name="location" value="${escapeHtml(eventItem?.location || '')}" placeholder="Example: UPSI Driving Range"></label>
      <label class="wide">Description<textarea name="description" required>${escapeHtml(eventItem?.description || '')}</textarea></label>
      <label class="wide">Event / Notice Image<input name="image" type="file" accept="image/*"></label>
      <label>Status<select name="status"><option value="active" ${eventItem?.status !== 'inactive' ? 'selected' : ''}>Active</option><option value="inactive" ${eventItem?.status === 'inactive' ? 'selected' : ''}>Inactive</option></select></label>
      <button class="btn btn-primary wide" type="submit">Save Event / Public Notification</button>
    </form>
  `);
  const form = document.getElementById('publicEventForm');
  bindDateScrollPicker(form);
  bindTimeScrollPicker(form);
  form.addEventListener('submit', async (event) => {
    event.preventDefault();
    const formData = new FormData(event.currentTarget);
    const selectedFile = formData.get('image');
    const imageUrl = selectedFile && selectedFile.size ? await fileToDataUrl(selectedFile, 2200000) : (eventItem?.imageUrl || '');
    const payload = {
      id: eventItem?.id || makeId('EV'),
      title: formData.get('title').trim(),
      category: formData.get('category'),
      eventDate: formData.get('eventDate'),
      eventTime: convertTo24Hour(formData.get('eventTime')).slice(0, 5),
      location: formData.get('location').trim(),
      description: formData.get('description').trim(),
      imageUrl,
      status: formData.get('status'),
      createdBy: state.session?.id || '',
      createdAt: eventItem?.createdAt || new Date().toISOString(),
    };
    const items = read('events');
    const index = items.findIndex((item) => item.id === payload.id);
    if (index >= 0) items[index] = payload;
    else items.unshift(payload);
    write('events', items);
    closeModal();
    renderPage();
    toast('Event / public notification saved.');
  });
};

// Non-looping scroll time picker for Tee Time form.


</script>
<?php
}

function upsi_section_admin_manage_users_module(): void
{
?>
<script>
window.UPSI_SECTION_MODULES = window.UPSI_SECTION_MODULES || {};
window.UPSI_SECTION_MODULES["admin_manage_users"] = {
  title: "Admin Manage Users",
  runtimeChunk: '7/22',
  functions: ["adminUsers", "openAdminAccountForm"]
};
</script>
<?php
}

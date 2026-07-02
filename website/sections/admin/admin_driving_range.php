<?php
/**
 * admin_driving_range.php
 * Bahagian: Admin Driving Range
 *
 * V108: CSS dan JavaScript runtime dibahagikan ke semua section.
 * Jadi home_page.php tidak lagi memegang semua coding sistem.
 *
 * Runtime chunk: 8/22
 * Fungsi berkaitan untuk presentation: adminCourses, openCourseForm
 */


function upsi_section_admin_driving_range_styles(): void
{
?>
<style>
/* =========================================================
   V108 CSS chunk 8/22
   Bahagian: Admin Driving Range
   ========================================================= */
body[data-theme="dark"] {
  --dark-green: #5ee39f;
  --green: #34d399;
  --soft-green: #12231b;
  --light-green: #173927;
  --gold: #f5c84b;
  --charcoal: #f3f7f4;
  --muted: #bccbc1;
  --line: #2b4738;
  --white: #101a14;
  --shadow: 0 22px 70px rgba(0, 0, 0, 0.34);
  background: linear-gradient(135deg, #07110c 0%, #0d1b13 46%, #122a1b 100%) !important;
  color: #f3f7f4;
}

body[data-theme="dark"] .app-shell,
body[data-theme="dark"] .main-area,
body[data-theme="dark"] .page-content,
body[data-theme="dark"] .auth-app-layout {
  background: transparent !important;
  color: #f3f7f4;
}

body[data-theme="dark"] .sidebar,
body[data-theme="dark"] .topbar,
body[data-theme="dark"] .card,
body[data-theme="dark"] .table-card,
body[data-theme="dark"] .empty-state,
body[data-theme="dark"] .profile-preview-card,
body[data-theme="dark"] .account-card,
body[data-theme="dark"] .settings-system-card,
body[data-theme="dark"] .trainer-reference-card,
body[data-theme="dark"] .app-booking-card,
body[data-theme="dark"] .modal-card,
body[data-theme="dark"] .auth-app-card,
body[data-theme="dark"] .content-section,
body[data-theme="dark"] .stat-card,
body[data-theme="dark"] .schedule-help-card,
body[data-theme="dark"] .payment-card {
  background: linear-gradient(145deg, #0f1f16 0%, #14291d 100%) !important;
  color: #f3f7f4 !important;
  border-color: rgba(94, 227, 159, 0.22) !important;
  box-shadow: 0 18px 42px rgba(0, 0, 0, 0.28) !important;
}

body[data-theme="dark"] h1,
body[data-theme="dark"] h2,
body[data-theme="dark"] h3,
body[data-theme="dark"] strong,
body[data-theme="dark"] th,
body[data-theme="dark"] label,
body[data-theme="dark"] .side-nav button,
body[data-theme="dark"] .profile-chip strong,
body[data-theme="dark"] .meta-list strong {
  color: #f8fff9 !important;
}

body[data-theme="dark"] p,
body[data-theme="dark"] .muted,
body[data-theme="dark"] .profile-chip span,
body[data-theme="dark"] .meta-list span,
body[data-theme="dark"] td,
body[data-theme="dark"] small {
  color: #bdd3c5 !important;
}

body[data-theme="dark"] .eyebrow,
body[data-theme="dark"] .side-nav button.active,
body[data-theme="dark"] .btn-soft,
body[data-theme="dark"] .setting-link-button b {
  color: #5ee39f !important;
}

body[data-theme="dark"] input,
body[data-theme="dark"] select,
body[data-theme="dark"] textarea,
body[data-theme="dark"] .icon-field {
  background: #0b1710 !important;
  color: #f3f7f4 !important;
  border-color: rgba(94, 227, 159, 0.22) !important;
}

body[data-theme="dark"] input::placeholder,
body[data-theme="dark"] textarea::placeholder {
  color: #8da696 !important;
}

body[data-theme="dark"] .btn-primary,
body[data-theme="dark"] .toast {
  background: #1f8f5b !important;
  color: #ffffff !important;
}

body[data-theme="dark"] .btn-soft,
body[data-theme="dark"] .setting-link-button,
body[data-theme="dark"] .status-pill,
body[data-theme="dark"] .availability-day,
body[data-theme="dark"] .price-reference-box,
body[data-theme="dark"] .bucket-info,
body[data-theme="dark"] .qr-payment-panel,
body[data-theme="dark"] .qr-settings-preview {
  background: #12231b !important;
  border-color: rgba(94, 227, 159, 0.18) !important;
}

body[data-theme="dark"] .availability-day span,
body[data-theme="dark"] table,
body[data-theme="dark"] tbody tr,
body[data-theme="dark"] .qr-code,
body[data-theme="dark"] .qr-mini {
  background: #0b1710 !important;
  border-color: rgba(94, 227, 159, 0.18) !important;
}

body[data-theme="dark"] .content-section-header {
  background: linear-gradient(145deg, #102017 0%, #183622 100%) !important;
}

@media (max-width: 720px) {
  .availability-day {
    grid-template-columns: 1fr;
  }
}

/* V23 dark-mode contrast fix: remove leftover white panels and make text readable */
body[data-theme="dark"] .content-section-body,
body[data-theme="dark"] .content-section-body > .toolbar,
body[data-theme="dark"] .toolbar,
body[data-theme="dark"] .section-toolbar,
body[data-theme="dark"] .filter-panel,
body[data-theme="dark"] .search-panel,
body[data-theme="dark"] .form-title,
body[data-theme="dark"] .admin-preview,
body[data-theme="dark"] .admin-range-preview,
body[data-theme="dark"] .app-booking-screen,
body[data-theme="dark"] .price-list-panel,
body[data-theme="dark"] .time-builder,
body[data-theme="dark"] .time-stepper-unit,
body[data-theme="dark"] .booking-tabs,
body[data-theme="dark"] .range-control,
body[data-theme="dark"] .calculation-row,
body[data-theme="dark"] .package-card,
body[data-theme="dark"] .price-column,
body[data-theme="dark"] .cancel-reason-box,
body[data-theme="dark"] .danger-zone,
body[data-theme="dark"] .mobile-booking-card,
body[data-theme="dark"] .trainer-note-box,
body[data-theme="dark"] .receipt-preview,
body[data-theme="dark"] .qr-box {
  background: linear-gradient(145deg, #0b1710 0%, #102318 100%) !important;
  color: #f4fff7 !important;
  border-color: rgba(94, 227, 159, 0.24) !important;
}

body[data-theme="dark"] .content-section-body > .toolbar,
body[data-theme="dark"] .toolbar,
body[data-theme="dark"] .section-toolbar,
body[data-theme="dark"] .filter-panel,
body[data-theme="dark"] .search-panel,
body[data-theme="dark"] .form-title {
  box-shadow: inset 0 0 0 1px rgba(94, 227, 159, 0.07) !important;
}


</style>
<?php
}

function upsi_section_admin_driving_range_scripts(): void
{
?>
<script>
/* =========================================================
   V108 JavaScript chunk 8/22
   Bahagian: Admin Driving Range
   ========================================================= */
openTimeForm = function v28OpenTimeForm(slot = null) {
  const courses = getDrivingCourses(read('courses'));
  const trainers = read('trainers');
  const today = new Date().toISOString().slice(0, 10);
  const nextWeek = getFutureDate(7);
  const selectedType = slot?.targetType || 'both';
  const selectedTarget = slot?.targetId || 'all';
  const isEdit = Boolean(slot);
  openModal(`
    <div class="modal-head"><div><p class="eyebrow">${isEdit ? 'Edit Tee Time' : 'New Tee Time'}</p><h2>${isEdit ? 'Update Available Date & Time' : 'Add Time Slot'}</h2><p class="muted">Use the scroll lists for hour, minute and AM/PM. The selector does not loop.</p></div><button class="close-btn" data-close-modal>&times;</button></div>
    <form id="timeForm" class="form-grid">
      ${isEdit ? `<label class="wide">Date<input name="date" type="date" min="${today}" value="${escapeHtml(slot?.date || today)}" required></label>` : `<label>Date Mode<select name="dateMode" data-date-mode><option value="single">Single date</option><option value="range">Date range / Bulk add</option></select></label><label data-single-date>Single Date<input name="date" type="date" min="${today}" value="${today}" required></label><label class="hidden" data-range-start>Start Date<input name="startDate" type="date" min="${today}" value="${today}"></label><label class="hidden" data-range-end>End Date<input name="endDate" type="date" min="${today}" value="${nextWeek}"></label>`}
      <label>Booking Type<select name="targetType" data-slot-type required><option value="both" ${selectedType === 'both' ? 'selected' : ''}>Driving Range & Trainer</option><option value="driving" ${selectedType === 'driving' ? 'selected' : ''}>Driving Range Only</option></select></label>
      <label class="wide" data-target-wrapper>Target<select name="targetId" data-slot-target required></select></label>
      <label class="wide">Time ${timeScrollPickerMarkup('time', slot?.time || '8:00 AM')}</label>
      <label>Status<select name="status"><option ${slot?.status !== 'Unavailable' ? 'selected' : ''}>Available</option><option ${slot?.status === 'Unavailable' ? 'selected' : ''}>Unavailable</option></select></label>
      ${!isEdit ? `<div class="wide bucket-info"><span class="info-icon">🗓️</span><div><p>Bulk add example: choose Date range, start today and end next week. The system will create one slot for each date using the selected time and target.</p></div></div>` : ''}
      <button class="btn btn-primary wide" type="submit">${isEdit ? 'Save Tee Time' : 'Save Tee Time Slot(s)'}</button>
    </form>
  `);
  const form = document.getElementById('timeForm');
  bindTimeScrollPicker(form);
  const renderTargetOptions = () => {
    const type = form.targetType.value;
    let options = '<option value="all">All applicable slots</option>';
    if (type === 'driving') options = courses.map((course) => `<option value="${course.id}" ${selectedTarget === course.id ? 'selected' : ''}>${escapeHtml(course.name)}</option>`).join('') || '<option value="all">All Driving Range</option>';
    if (type === 'trainer') options = trainers.map((trainer) => `<option value="${trainer.id}" ${selectedTarget === trainer.id ? 'selected' : ''}>${escapeHtml(trainer.name)}</option>`).join('') || '<option value="all">All Trainers</option>';
    form.targetId.innerHTML = options;
    if (type === 'both') form.targetId.value = 'all';
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
  renderTargetOptions();
  renderDateMode();
  form.addEventListener('submit', (event) => {
    event.preventDefault();
    const formData = new FormData(event.currentTarget);
    const basePayload = { time: formData.get('time'), targetType: formData.get('targetType'), targetId: formData.get('targetType') === 'both' ? 'all' : formData.get('targetId'), status: formData.get('status') };
    const slotDates = isEdit ? [formData.get('date')] : formData.get('dateMode') === 'range' ? datesBetween(formData.get('startDate'), formData.get('endDate')) : [formData.get('date')];
    if (!slotDates.length) return toast('Please select a valid date or date range.');
    const slots = getScheduleSlots();
    if (isEdit) {
      const payload = { id: slot.id, date: slotDates[0], ...basePayload };
      const duplicate = slots.some((item) => item.id !== payload.id && item.date === payload.date && item.time === payload.time && item.targetType === payload.targetType && item.targetId === payload.targetId);
      if (duplicate) return toast('This tee time slot already exists.');
      writeScheduleSlots(slots.map((item) => item.id === slot.id ? payload : item));
      closeModal(); state.teePage = 1; adminTimes(); return toast('Tee time slot updated.');
    }
    const newSlots = [];
    slotDates.forEach((date) => {
      const duplicate = slots.concat(newSlots).some((item) => item.date === date && item.time === basePayload.time && item.targetType === basePayload.targetType && item.targetId === basePayload.targetId);
      if (!duplicate) newSlots.push({ id: makeId('TS'), date, ...basePayload });
    });
    if (!newSlots.length) return toast('No new slot was added because all selected slots already exist.');
    writeScheduleSlots(slots.concat(newSlots).sort(sortByDateTime));
    closeModal(); state.teePage = 1; adminTimes(); toast(`${newSlots.length} tee time slot(s) added.`);
  });
};

// Safer trainer add button binding even if earlier listeners were blocked by rerendering.
document.addEventListener('click', (event) => {
  const addTrainer = event.target.closest('[data-add-trainer]');
  if (addTrainer) {
    event.preventDefault();
    event.stopImmediatePropagation();
    openTrainerForm();
  }
}, true);

// Profile pictures stay inside their frame.
function cleanNotificationImageUrl(value) { return hasUsableImageUrl(value) ? value : ''; }

const v28BaseCreatePersonalNotification = createPersonalNotification;
createPersonalNotification = async function v28CreatePersonalNotification(args = {}) {
  return v28BaseCreatePersonalNotification({ ...args, imageUrl: cleanNotificationImageUrl(args.imageUrl) });
};

async function refreshNotificationsFromSupabaseV28() {
  if (!personalNotificationsSupabaseEnabled() || !state.session?.id || !isUuid(state.session.id)) return;
  try {
    const { data, error } = await supabaseClient
      .from(DB_TABLES.notifications)
      .select('*')
      .or(`recipient_id.eq.${state.session.id},sender_id.eq.${state.session.id}`)
      .order('created_at', { ascending: false });
    if (!error && Array.isArray(data)) setLocalData('notifications', data.map(notificationToLocal));
    if (error) console.error('Notification refresh error:', error);
  } catch (err) {
    console.error('Notification refresh failed:', err);
  }
}

openChatThread = async function v28OpenChatThread(peerId) {
  await refreshNotificationsFromSupabaseV28();
  const current = getFreshSessionUser();
  const peer = read('users').find((u) => u.id === peerId);
  if (!peer) return toast('Chat user not found.');
  await markChatRead(peerId);
  const messages = chatMessagesWith(peerId);
  const canReply = isAdminLike(current) && isAdminLike(peer);
  openModal(`
    <div class="modal-head"><div><p class="eyebrow">Personal Notification Chat</p><h2>${escapeHtml(peer.fullName)}</h2><p class="muted">${canReply ? 'Admins can reply to each other here.' : 'This message thread is read-only for users.'}</p></div><button class="close-btn" data-close-modal>&times;</button></div>
    <div class="chat-thread">
      ${messages.map((item) => `<article class="chat-bubble ${item.senderId === current.id ? 'mine' : ''}"><div><strong>${escapeHtml(item.senderId === current.id ? 'You' : peer.fullName)}</strong><small>${new Date(item.createdAt).toLocaleString()}</small></div><h4>${escapeHtml(item.title || 'Message')}</h4><p>${escapeHtml(item.message || '')}</p>${hasUsableImageUrl(item.imageUrl) ? `<img class="notification-image" src="${escapeHtml(item.imageUrl)}" alt="Message image">` : ''}</article>`).join('') || empty('No message in this chat yet.')}
    </div>
    ${canReply ? `<form id="chatReplyForm" class="form-grid chat-reply-form"><label class="wide">Reply<textarea name="message" placeholder="Write your reply..." required></textarea></label><label class="wide">Image Attachment<input name="image" type="file" accept="image/*"></label><button class="btn btn-primary wide" type="submit">Send Reply</button></form>` : ''}
  `);
  const form = document.getElementById('chatReplyForm');
  if (form) form.addEventListener('submit', async (event) => {
    event.preventDefault();
    const data = new FormData(form);
    const imageUrl = await fileToDataUrl(data.get('image'), 1800000);
    const notification = await createPersonalNotification({ recipient: peer, title: 'Admin Chat Reply', message: data.get('message').trim(), imageUrl, type: 'chat' });
    if (notification) { await refreshNotificationsFromSupabaseV28(); closeModal(); openChatThread(peerId); toast('Reply sent.'); }
  });
};

openNotificationCenter = async function v28OpenNotificationCenter() {
  await refreshNotificationsFromSupabaseV28();
  const notifications = visibleNotificationsForCurrentUser();
  openModal(`
    <div class="modal-head"><div><p class="eyebrow">Personal Notification</p><h2>Messages from Administration</h2><p class="muted">Notifications will stay unread until you open the chat/thread.</p></div><button class="close-btn" data-close-modal>&times;</button></div>
    <div class="notification-list">
      ${notifications.map((item) => {
        const peer = peerFromNotification(item);
        return `<article class="notification-card ${item.isRead ? '' : 'unread'}"><div class="card-top"><div><p class="eyebrow">${new Date(item.createdAt).toLocaleString()}</p><h3>${escapeHtml(item.title)}</h3></div>${item.isRead ? '<span class="status-pill confirmed">Read</span>' : '<span class="status-pill pending">New</span>'}</div><p>${escapeHtml(item.message)}</p>${hasUsableImageUrl(item.imageUrl) ? `<img class="notification-image" src="${escapeHtml(item.imageUrl)}" alt="Notification image">` : ''}<div class="card-actions"><button class="btn btn-primary" data-open-chat-peer="${peer?.id || item.senderId || ''}">Open Chat</button></div></article>`;
      }).join('') || empty('No personal notification yet.')}
    </div>
  `);
  document.querySelectorAll('[data-open-chat-peer]').forEach((btn) => btn.addEventListener('click', () => { if (btn.dataset.openChatPeer) openChatThread(btn.dataset.openChatPeer); }));
};

function bindProfileChatButtonsV28() {
  content().querySelectorAll('[data-open-profile-chat]').forEach((btn) => btn.addEventListener('click', () => openChatThread(btn.dataset.openProfileChat)));
  content().querySelectorAll('[data-refresh-inbox]').forEach((btn) => btn.addEventListener('click', async () => { await refreshNotificationsFromSupabaseV28(); renderPage(); toast('Inbox refreshed.'); }));
}

const v28BaseMessageInboxCardMarkup = messageInboxCardMarkup;
messageInboxCardMarkup = function v28MessageInboxCardMarkup() {
  const html = v28BaseMessageInboxCardMarkup();
  return html.replace('<p class="muted">Open a chat to mark messages as read. Users can read only; admins can reply to admins.</p>', '<p class="muted">Open a chat to mark messages as read. Users can read only; admins can reply to admins.</p><button class="btn btn-soft" type="button" data-refresh-inbox>Refresh Inbox</button>');
};

const v28BaseUserProfile = userProfile;
userProfile = function v28UserProfile() {
  v28BaseUserProfile();
  bindProfileChatButtonsV28();
  refreshNotificationsFromSupabaseV28().then(() => bindProfileChatButtonsV28());
};

const v28BaseAccountSettings = accountSettings;
accountSettings = function v28AccountSettings(includeSystemSettings = false, sourcePage = 'settings') {
  v28BaseAccountSettings(includeSystemSettings, sourcePage);
  bindProfileChatButtonsV28();
  refreshNotificationsFromSupabaseV28().then(() => bindProfileChatButtonsV28());
};

qrImageMarkup = function v28QrImageMarkup(className = 'qr-code') {
  const settings = read('settings');
  if (settings?.qrImage) {
    const url = escapeHtml(settings.qrImage);
    return `<div class="${className} qr-download-wrap"><img src="${url}" alt="QR Payment"><button class="btn btn-soft qr-download-btn" type="button" data-download-qr="${url}">Download QR Image</button></div>`;
  }
  return `<div class="${className}">QR</div>`;
};

document.addEventListener('click', async (event) => {
  const qrBtn = event.target.closest('[data-download-qr]');
  if (!qrBtn) return;
  event.preventDefault();
  const url = qrBtn.dataset.downloadQr;
  try {
    window.open(url, '_blank');
    const response = await fetch(url);
    const blob = await response.blob();
    const objectUrl = URL.createObjectURL(blob);
    const link = document.createElement('a');
    link.href = objectUrl;
    link.download = 'upsi-golf-qr-payment.png';
    document.body.appendChild(link);
    link.click();
    link.remove();
    URL.revokeObjectURL(objectUrl);
  } catch (err) {
    const link = document.createElement('a');
    link.href = url;
    link.target = '_blank';
    link.download = 'upsi-golf-qr-payment.png';
    document.body.appendChild(link);
    link.click();
    link.remove();
  }
});



// =========================================================
// V29 stability fixes: compact date/time forms, working trainer form,
// stronger trainer sync, chat inbox fallback, event delete, profile image frame.
// =========================================================

function v29ToTimeInputValue(value = '08:00') {
  const str = String(value || '').trim();
  if (/^\d{2}:\d{2}/.test(str)) return str.slice(0, 5);
  const match = str.match(/^(\d{1,2})(?::(\d{2}))?\s*(AM|PM)$/i);
  if (!match) return '08:00';
  let hour = Number(match[1]);
  const minute = match[2] || '00';
  const period = match[3].toUpperCase();
  if (period === 'PM' && hour < 12) hour += 12;
  if (period === 'AM' && hour === 12) hour = 0;
  return `${String(hour).padStart(2, '0')}:${minute}`;
}

function v29TimeInputToLocal(value = '08:00') {
  const [rawHour, rawMinute] = String(value || '08:00').split(':');
  let hour = Number(rawHour || 8);
  const minute = String(rawMinute || '00').padStart(2, '0');
  const period = hour >= 12 ? 'PM' : 'AM';
  hour = hour % 12;
  if (hour === 0) hour = 12;
  return `${hour}:${minute} ${period}`;
}

function v29DateInput(value = '', name = 'date', label = 'Date') {
  const today = new Date().toISOString().slice(0, 10);
  return `<label>${escapeHtml(label)}<input name="${name}" type="date" min="${today}" value="${escapeHtml(value || today)}" required></label>`;
}

function v29TimeInput(value = '08:00', name = 'time', label = 'Time') {
  return `<label>${escapeHtml(label)}<input name="${name}" type="time" value="${escapeHtml(v29ToTimeInputValue(value))}" required></label>`;
}

// Trainer sync: insert/update without deleting newly-created non-UUID trainers.
syncTrainersToSupabase = async function v29SyncTrainersToSupabase(trainers = []) {
  if (!SUPABASE_MODE) return;
  let changedIds = false;
  for (const trainer of trainers) {
    const payload = {
      full_name: trainer.name || trainer.fullName || 'Trainer',
      phone: trainer.phone || null,
      email: trainer.email || null,
      address: trainer.address || null,
      description: trainer.description || null,
      rate: trainerRate(trainer),
      min_booking_hours: trainerMinHours(trainer),
      max_booking_hours: trainerMaxHours(trainer),
      profile_image_url: trainer.profileImage || null,
      status: availabilityToDb(trainer.status),
    };
    try {
      let response;
      if (isUuid(trainer.id)) {
        response = await supabaseClient.from(DB_TABLES.trainers).update(payload).eq('id', trainer.id).select().maybeSingle();
      } else if (trainer.email) {
        const existing = await supabaseClient.from(DB_TABLES.trainers).select('id').eq('email', trainer.email).maybeSingle();
        if (existing.data?.id) {
          trainer.id = existing.data.id;
          changedIds = true;
          response = await supabaseClient.from(DB_TABLES.trainers).update(payload).eq('id', trainer.id).select().maybeSingle();
        } else {
          response = await supabaseClient.from(DB_TABLES.trainers).insert(payload).select().maybeSingle();
        }
      } else {
        response = await supabaseClient.from(DB_TABLES.trainers).insert(payload).select().maybeSingle();
      }
      if (response?.error) console.error('Trainer sync error:', response.error);
      if (response?.data?.id && trainer.id !== response.data.id) {
        trainer.id = response.data.id;
        changedIds = true;
      }
    } catch (error) {
      console.error('Trainer sync failed:', error);
    }
  }
  if (changedIds) setLocalData('trainers', trainers);
};

function openTrainerFormV29(trainer = null) {
  openModal(`
    <div class="modal-head"><div><p class="eyebrow">Trainer Form</p><h2>${trainer ? 'Edit Trainer' : 'Add Trainer'}</h2><p class="muted">Trainer details will be saved to Supabase.</p></div><button class="close-btn" data-close-modal>&times;</button></div>
    <form id="trainerFormV29" class="form-grid compact-modal-form">
      <label class="wide">Trainer Name<input name="name" value="${escapeHtml(trainer?.name || '')}" required></label>
      <label>No. Phone<input name="phone" value="${escapeHtml(trainer?.phone || '')}" required></label>
      <label>Email<input name="email" type="email" value="${escapeHtml(trainer?.email || '')}" required></label>
      <label class="wide">Alamat<input name="address" value="${escapeHtml(trainer?.address || '')}" required></label>
      <label class="wide">Specialist / Expertise<textarea name="description" placeholder="Example: beginner swing basics, stance correction, driving accuracy" required>${escapeHtml(trainer?.description || '')}</textarea></label>
      <label>Trainer Fee Per Hour (RM)<input name="rate" type="number" min="0" step="0.01" value="${trainerRate(trainer)}" required></label>
      <label>Minimum Booking Hour<input name="minBookingHours" type="number" min="1" max="12" value="${trainerMinHours(trainer)}" required></label>
      <label>Maximum Booking Hour<input name="maxBookingHours" type="number" min="1" max="12" value="${trainerMaxHours(trainer)}" required></label>
      <label>Status<select name="status"><option ${trainer?.status !== 'Unavailable' ? 'selected' : ''}>Available</option><option ${trainer?.status === 'Unavailable' ? 'selected' : ''}>Unavailable</option></select></label>
      <button class="btn btn-primary wide" type="submit">Save Trainer</button>
    </form>
  `);
  const form = document.getElementById('trainerFormV29');
  form.addEventListener('submit', async (event) => {
    event.preventDefault();
    const formData = new FormData(form);
    const minHours = Math.max(1, Number(formData.get('minBookingHours') || 1));
    const maxHours = Math.max(minHours, Number(formData.get('maxBookingHours') || minHours));
    const trainers = read('trainers');
    const payload = {
      id: trainer?.id || makeId('T'),
      name: formData.get('name').trim(),
      phone: formData.get('phone').trim(),
      email: formData.get('email').trim().toLowerCase(),
      address: formData.get('address').trim(),
      description: formData.get('description').trim(),
      rate: Number(formData.get('rate') || 0),
      hourlyRate: Number(formData.get('rate') || 0),
      minBookingHours: minHours,
      maxBookingHours: maxHours,
      status: formData.get('status'),
      profileImage: trainer?.profileImage || '',
      createdAt: trainer?.createdAt || new Date().toISOString(),
    };
    const index = trainers.findIndex((item) => item.id === payload.id || item.email?.toLowerCase() === payload.email);
    if (index >= 0) trainers[index] = { ...trainers[index], ...payload };
    else trainers.push(payload);
    await syncTrainersToSupabase(trainers);
    setLocalData('trainers', trainers);
    closeModal();
    if (state.currentPage === 'trainers') adminTrainers();
    else renderPage();
    toast('Trainer saved.');
  });
}
openTrainerForm = openTrainerFormV29;

document.addEventListener('click', (event) => {
  const btn = event.target.closest('[data-add-trainer]');
  if (!btn) return;
  event.preventDefault();
  openTrainerFormV29();
}, true);

// Compact native popup date/time form for Event/Public Notification.
openPublicEventForm = function v29OpenPublicEventForm(eventItem = null) {
  if (!isAdminLike(getFreshSessionUser())) return toast('Only admin can add public events.');
  openModal(`
    <div class="modal-head"><div><p class="eyebrow">Event & Public Notification</p><h2>${eventItem ? 'Edit Announcement' : 'Add Announcement'}</h2><p class="muted">Date and time controls open as popups when clicked.</p></div><button class="close-btn" data-close-modal>&times;</button></div>
    <form id="publicEventFormV29" class="form-grid compact-modal-form">
      <label>Title<input name="title" value="${escapeHtml(eventItem?.title || '')}" required></label>
      <label>Category<select name="category"><option ${eventItem?.category === 'Public Notification' ? 'selected' : ''}>Public Notification</option><option ${eventItem?.category === 'Event' ? 'selected' : ''}>Event</option><option ${eventItem?.category === 'Maintenance' ? 'selected' : ''}>Maintenance</option><option ${eventItem?.category === 'Announcement' ? 'selected' : ''}>Announcement</option></select></label>
      ${v29DateInput(eventItem?.eventDate || '', 'eventDate', 'Date')}
      ${v29TimeInput(eventItem?.eventTime || '09:00', 'eventTime', 'Time')}
      <label class="wide">Location<input name="location" value="${escapeHtml(eventItem?.location || '')}" placeholder="Example: UPSI Driving Range"></label>
      <label class="wide">Description<textarea name="description" required>${escapeHtml(eventItem?.description || '')}</textarea></label>
      <label class="wide">Event / Notice Image<input name="image" type="file" accept="image/*"></label>
      <label>Status<select name="status"><option value="active" ${String(eventItem?.status || 'active') === 'active' ? 'selected' : ''}>Active</option><option value="inactive" ${String(eventItem?.status || '') === 'inactive' ? 'selected' : ''}>Inactive</option></select></label>
      <button class="btn btn-primary wide" type="submit">Save Event / Public Notification</button>
    </form>
  `);
  const form = document.getElementById('publicEventFormV29');
  form.addEventListener('submit', async (event) => {
    event.preventDefault();
    const formData = new FormData(form);
    const imageUrl = await fileToDataUrl(formData.get('image'), 1800000) || eventItem?.imageUrl || '';
    const payload = {
      id: eventItem?.id || makeId('EV'),
      title: formData.get('title').trim(),
      category: formData.get('category'),
      description: formData.get('description').trim(),
      eventDate: formData.get('eventDate'),
      eventTime: formData.get('eventTime'),
      location: formData.get('location').trim(),
      imageUrl,
      status: formData.get('status'),
      createdBy: eventItem?.createdBy || state.session?.id || '',
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

// Event carousel with month above-left and working edit/delete.
eventCarouselMarkup = function v29EventCarouselMarkup(mode = 'user') {
  const grouped = {};
  publicEvents().forEach((item) => {
    const month = monthKeyFromDate(item.eventDate);
    if (!grouped[month]) grouped[month] = [];
    grouped[month].push(item);
  });
  const groups = Object.entries(grouped);
  return `
    <section class="event-carousel-section">
      <div class="event-carousel-head">
        <div><p class="eyebrow">Event & Public Notification</p><h2>${mode === 'admin' ? 'Public events shown to users' : 'Latest public notifications'}</h2><p class="muted">Events are grouped by month. Use the arrow buttons if there are many announcements.</p></div>
        <div class="row-actions">${mode === 'admin' ? '<button class="btn btn-primary" type="button" data-add-public-event>Add Event / Public Notification</button>' : ''}<button class="carousel-arrow" type="button" data-event-scroll="left">←</button><button class="carousel-arrow" type="button" data-event-scroll="right">→</button></div>
      </div>
      <div class="event-carousel-track v29-event-track" data-event-track>
        ${groups.map(([month, list]) => `<div class="event-month-group"><div class="event-month-heading">${escapeHtml(month)}</div><div class="event-month-cards">${list.map((item) => eventCardMarkupV28(item, mode)).join('')}</div></div>`).join('') || '<article class="event-card empty-event"><div class="event-card-body"><h3>No public event yet</h3><p class="muted">Admin can add announcements from the dashboard.</p></div></article>'}
      </div>
    </section>
  `;
};

bindEventCarousel = function v29BindEventCarousel() {
  const track = content().querySelector('[data-event-track]');
  if (!track) return;
  content().querySelectorAll('[data-event-scroll]').forEach((btn) => btn.addEventListener('click', () => track.scrollBy({ left: (btn.dataset.eventScroll === 'right' ? 1 : -1) * 420, behavior: 'smooth' })));
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
      message: `Are you sure you want to delete "${item.title}"?`,
      confirmText: 'Delete Announcement',
      danger: true,
      onConfirm: async () => {
        if (SUPABASE_MODE && isUuid(item.id)) {
          const { error } = await supabaseClient.from(DB_TABLES.publicEvents).delete().eq('id', item.id);
          if (error) console.error('Event delete error:', error);
        }
        setLocalData('events', read('events').filter((ev) => ev.id !== item.id));
        renderPage();
        toast('Event / public notification deleted.');
      },
    });
  }));
};

// Compact native popup date/time form for Tee Time.
openTimeForm = function v29OpenTimeForm(slot = null) {
  const courses = getDrivingCourses(read('courses'));
  const trainers = read('trainers');
  const today = new Date().toISOString().slice(0, 10);
  const nextWeek = getFutureDate(7);
  const selectedType = slot?.targetType || 'both';
  const selectedTarget = slot?.targetId || 'all';
  const isEdit = Boolean(slot);
  openModal(`
    <div class="modal-head"><div><p class="eyebrow">${isEdit ? 'Edit Tee Time' : 'New Tee Time'}</p><h2>${isEdit ? 'Update Available Date & Time' : 'Add Time Slot'}</h2><p class="muted">Click date/time fields to open browser popup controls.</p></div><button class="close-btn" data-close-modal>&times;</button></div>
    <form id="timeFormV29" class="form-grid compact-modal-form">
      ${isEdit ? `<label class="wide">Date<input name="date" type="date" min="${today}" value="${escapeHtml(slot?.date || today)}" required></label>` : `<label>Date Mode<select name="dateMode" data-date-mode><option value="single">Single date</option><option value="range">Date range / Bulk add</option></select></label><label data-single-date>Single Date<input name="date" type="date" min="${today}" value="${today}" required></label><label class="hidden" data-range-start>Start Date<input name="startDate" type="date" min="${today}" value="${today}"></label><label class="hidden" data-range-end>End Date<input name="endDate" type="date" min="${today}" value="${nextWeek}"></label>`}
      <label>Booking Type<select name="targetType" data-slot-type required><option value="both" ${selectedType === 'both' ? 'selected' : ''}>Driving Range & Trainer</option><option value="driving" ${selectedType === 'driving' ? 'selected' : ''}>Driving Range Only</option></select></label>
      <label class="wide" data-target-wrapper>Target<select name="targetId" data-slot-target required></select></label>
      ${v29TimeInput(slot?.time || '8:00 AM', 'time', 'Time')}
      <label>Status<select name="status"><option ${slot?.status !== 'Unavailable' ? 'selected' : ''}>Available</option><option ${slot?.status === 'Unavailable' ? 'selected' : ''}>Unavailable</option></select></label>
      <button class="btn btn-primary wide" type="submit">${isEdit ? 'Save Tee Time' : 'Save Tee Time Slot(s)'}</button>
    </form>
  `);
  const form = document.getElementById('timeFormV29');
  const renderTargetOptions = () => {
    const type = form.targetType.value;
    let options = '<option value="all">All applicable slots</option>';
    if (type === 'driving') options = courses.map((course) => `<option value="${course.id}" ${selectedTarget === course.id ? 'selected' : ''}>${escapeHtml(course.name)}</option>`).join('') || '<option value="all">All Driving Range</option>';
    if (type === 'trainer') options = trainers.map((trainer) => `<option value="${trainer.id}" ${selectedTarget === trainer.id ? 'selected' : ''}>${escapeHtml(trainer.name)}</option>`).join('') || '<option value="all">All Trainers</option>';
    form.targetId.innerHTML = options;
    if (type === 'both') form.targetId.value = 'all';
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
  renderTargetOptions();
  renderDateMode();
  form.addEventListener('submit', (event) => {
    event.preventDefault();
    const formData = new FormData(form);
    const basePayload = { time: v29TimeInputToLocal(formData.get('time')), targetType: formData.get('targetType'), targetId: formData.get('targetType') === 'both' ? 'all' : formData.get('targetId'), status: formData.get('status') };
    const slotDates = isEdit ? [formData.get('date')] : formData.get('dateMode') === 'range' ? datesBetween(formData.get('startDate'), formData.get('endDate')) : [formData.get('date')];
    if (!slotDates.length) return toast('Please select a valid date or date range.');
    const slots = getScheduleSlots();
    if (isEdit) {
      const payload = { id: slot.id, date: slotDates[0], ...basePayload };
      const duplicate = slots.some((item) => item.id !== payload.id && item.date === payload.date && item.time === payload.time && item.targetType === payload.targetType && item.targetId === payload.targetId);
      if (duplicate) return toast('This tee time slot already exists.');
      writeScheduleSlots(slots.map((item) => item.id === slot.id ? payload : item));
      closeModal(); state.teePage = 1; adminTimes(); return toast('Tee time slot updated.');
    }
    const newSlots = [];
    slotDates.forEach((date) => {
      const duplicate = slots.concat(newSlots).some((item) => item.date === date && item.time === basePayload.time && item.targetType === basePayload.targetType && item.targetId === basePayload.targetId);
      if (!duplicate) newSlots.push({ id: makeId('TS'), date, ...basePayload });
    });
    if (!newSlots.length) return toast('No new slot was added because all selected slots already exist.');
    writeScheduleSlots(slots.concat(newSlots).sort(sortByDateTime));
    closeModal(); state.teePage = 1; adminTimes(); toast(`${newSlots.length} tee time slot(s) added.`);
  });
};

function v29PeerNameFromId(peerId, item = {}) {
  const found = read('users').find((u) => u.id === peerId);
  if (found) return found;
  return { id: peerId, fullName: 'Administration', email: '', role: 'admin', supabaseRole: 'admin', status: 'Active', profileImage: '' };
}

async function refreshNotificationsFromSupabaseV29() {
  if (!personalNotificationsSupabaseEnabled() || !state.session?.id || !isUuid(state.session.id)) return;
  try {
    const { data, error } = await supabaseClient
      .from(DB_TABLES.notifications)
      .select('*')
      .or(`recipient_id.eq.${state.session.id},sender_id.eq.${state.session.id}`)
      .order('created_at', { ascending: false });
    if (error) console.error('Notification refresh error:', error);
    if (!error && Array.isArray(data)) setLocalData('notifications', data.map(notificationToLocal));
  } catch (err) {
    console.error('Notification refresh failed:', err);
  }
}
refreshNotificationsFromSupabaseV28 = refreshNotificationsFromSupabaseV29;

createPersonalNotification = async function v29CreatePersonalNotification({ recipient, title, message, imageUrl = '', type = 'chat' }) {
  const sender = getFreshSessionUser();
  if (!recipient?.id || !sender?.id) return null;
  const payload = {
    id: makeId('N'),
    recipientId: recipient.id,
    senderId: sender.id,
    title: title || 'Message from Administration',
    message: message || '',
    imageUrl: cleanNotificationImageUrl(imageUrl),
    type: type || 'chat',
    isRead: false,
    createdAt: new Date().toISOString(),
  };
  if (personalNotificationsSupabaseEnabled() && isUuid(recipient.id) && isUuid(sender.id)) {
    const { data, error } = await supabaseClient
      .from(DB_TABLES.notifications)
      .insert(localNotificationToDb(payload))
      .select()
      .maybeSingle();
    if (error) {
      console.error('Notification insert error:', error);
      toast(error.message || 'Failed to send notification. Run the latest notification SQL policy if needed.');
      return null;
    }
    if (data) Object.assign(payload, notificationToLocal(data));
  }
  const items = read('notifications').filter((item) => item.id !== payload.id);
  items.unshift(payload);
  setLocalData('notifications', items);
  return payload;
};

function chatMessagesWithV29(peerId) {
  const current = getFreshSessionUser();
  return read('notifications')
    .filter((item) => (item.recipientId === current.id && item.senderId === peerId) || (item.senderId === current.id && item.recipientId === peerId))
    .sort((a, b) => new Date(a.createdAt) - new Date(b.createdAt));
}
chatMessagesWith = chatMessagesWithV29;

peerFromNotification = function v29PeerFromNotification(item = {}) {
  const current = getFreshSessionUser();
  const peerId = item.senderId === current.id ? item.recipientId : item.senderId;
  return v29PeerNameFromId(peerId, item);
};

visibleNotificationsForCurrentUser = function v29VisibleNotificationsForCurrentUser() {
  const current = getFreshSessionUser();
  return read('notifications').filter((item) => item.recipientId === current.id).sort((a, b) => new Date(b.createdAt) - new Date(a.createdAt));
};

openChatThread = async function v29OpenChatThread(peerId) {
  await refreshNotificationsFromSupabaseV29();
  const current = getFreshSessionUser();
  const peer = v29PeerNameFromId(peerId);
  if (!peer?.id) return toast('Chat user not found.');
  await markChatRead(peerId);
  const messages = chatMessagesWithV29(peerId);
  const canReply = isAdminLike(current) && isAdminLike(peer);
  openModal(`
    <div class="modal-head"><div><p class="eyebrow">Personal Notification Chat</p><h2>${escapeHtml(peer.fullName || 'Administration')}</h2><p class="muted">${canReply ? 'Admins can reply to each other here.' : 'This message thread is read-only for users.'}</p></div><button class="close-btn" data-close-modal>&times;</button></div>
    <div class="chat-thread">
      ${messages.map((item) => `<article class="chat-bubble ${item.senderId === current.id ? 'mine' : ''}"><div><strong>${escapeHtml(item.senderId === current.id ? 'You' : (v29PeerNameFromId(item.senderId).fullName || 'Administration'))}</strong><small>${new Date(item.createdAt).toLocaleString()}</small></div><h4>${escapeHtml(item.title || 'Message')}</h4><p>${escapeHtml(item.message || '')}</p>${hasUsableImageUrl(item.imageUrl) ? `<img class="notification-image" src="${escapeHtml(item.imageUrl)}" alt="Message image">` : ''}</article>`).join('') || empty('No message in this chat yet.')}
    </div>
    ${canReply ? `<form id="chatReplyFormV29" class="form-grid chat-reply-form"><label class="wide">Reply<textarea name="message" placeholder="Write your reply..." required></textarea></label><label class="wide">Image Attachment<input name="image" type="file" accept="image/*"></label><button class="btn btn-primary wide" type="submit">Send Reply</button></form>` : ''}
  `);
  const form = document.getElementById('chatReplyFormV29');
  if (form) form.addEventListener('submit', async (event) => {
    event.preventDefault();
    const data = new FormData(form);
    const imageUrl = await fileToDataUrl(data.get('image'), 1800000);
    const notification = await createPersonalNotification({ recipient: peer, title: 'Admin Chat Reply', message: data.get('message').trim(), imageUrl, type: 'chat' });
    if (notification) { await refreshNotificationsFromSupabaseV29(); closeModal(); openChatThread(peerId); toast('Reply sent.'); }
  });
};

openSendMessageModal = function v29OpenSendMessageModal(recipient) {
  if (!recipient?.id) return toast('Recipient not found.');
  openModal(`
    <div class="modal-head"><div><p class="eyebrow">Send Personal Notification</p><h2>${escapeHtml(recipient.fullName)}</h2><p class="muted">This message will appear in the recipient notification bell and inbox.</p></div><button class="close-btn" data-close-modal>&times;</button></div>
    <form id="personalMessageFormV29" class="form-grid compact-modal-form">
      <label class="wide">Title<input name="title" value="Message from Administration" required></label>
      <label class="wide">Message<textarea name="message" placeholder="Write your message here..." required></textarea></label>
      <label class="wide">Image / Notice Attachment <input name="image" type="file" accept="image/*"></label>
      <button class="btn btn-primary wide" type="submit">Send Notification</button>
    </form>
  `);
  document.getElementById('personalMessageFormV29').addEventListener('submit', async (event) => {
    event.preventDefault();
    const form = new FormData(event.currentTarget);
    const imageUrl = await fileToDataUrl(form.get('image'), 1800000);
    const notification = await createPersonalNotification({ recipient, title: form.get('title').trim(), message: form.get('message').trim(), imageUrl, type: 'chat' });
    if (notification) { closeModal(); await refreshNotificationsFromSupabaseV29(); toast('Personal notification sent.'); }
  });
};

messageInboxCardMarkup = function v29MessageInboxCardMarkup() {
  const current = getFreshSessionUser();
  const peerMap = new Map();
  read('notifications').forEach((item) => {
    if (item.recipientId === current.id || item.senderId === current.id) {
      const peerId = item.senderId === current.id ? item.recipientId : item.senderId;
      if (peerId && !peerMap.has(peerId)) peerMap.set(peerId, v29PeerNameFromId(peerId, item));
    }
  });
  const peers = Array.from(peerMap.values());
  return `
    <div class="card settings-system-card strong-border-card message-inbox-card">
      <div class="card-top"><div><p class="eyebrow">Personal Notification</p><h2>Message Inbox</h2><p class="muted">Open a chat to mark messages as read. Users can read only; admins can reply to admins.</p></div><button class="btn btn-soft" type="button" data-refresh-inbox>Refresh Inbox</button></div>
      <div class="card-grid two message-peer-grid">
        ${peers.map((peer) => `<article class="mini-profile-card"><div>${avatarMarkup(peer)}<div><strong>${escapeHtml(peer.fullName || 'Administration')}</strong><span>${escapeHtml(peer.email || '')}</span></div></div><button class="btn btn-soft" type="button" data-open-profile-chat="${peer.id}">Open Chat</button></article>`).join('') || empty('No personal notification yet.')}
      </div>
    </div>
  `;
};

openNotificationCenter = async function v29OpenNotificationCenter() {
  await refreshNotificationsFromSupabaseV29();
  const notifications = visibleNotificationsForCurrentUser();
  openModal(`
    <div class="modal-head"><div><p class="eyebrow">Personal Notification</p><h2>Messages from Administration</h2><p class="muted">Notifications stay unread until you open the chat/thread.</p></div><button class="close-btn" data-close-modal>&times;</button></div>
    <div class="notification-list">
      ${notifications.map((item) => {
        const peer = peerFromNotification(item);
        return `<article class="notification-card ${item.isRead ? '' : 'unread'}"><div class="card-top"><div><p class="eyebrow">${new Date(item.createdAt).toLocaleString()}</p><h3>${escapeHtml(item.title)}</h3></div>${item.isRead ? '<span class="status-pill confirmed">Read</span>' : '<span class="status-pill pending">New</span>'}</div><p>${escapeHtml(item.message)}</p>${hasUsableImageUrl(item.imageUrl) ? `<img class="notification-image" src="${escapeHtml(item.imageUrl)}" alt="Notification image">` : ''}<div class="card-actions"><button class="btn btn-primary" data-open-chat-peer="${peer?.id || item.senderId || ''}">Open Chat</button></div></article>`;
      }).join('') || empty('No personal notification yet.')}
    </div>
  `);
  document.querySelectorAll('[data-open-chat-peer]').forEach((btn) => btn.addEventListener('click', () => { if (btn.dataset.openChatPeer) openChatThread(btn.dataset.openChatPeer); }));
};

function bindProfileChatButtonsV29() {
  content().querySelectorAll('[data-open-profile-chat]').forEach((btn) => btn.addEventListener('click', () => openChatThread(btn.dataset.openProfileChat)));
  content().querySelectorAll('[data-refresh-inbox]').forEach((btn) => btn.addEventListener('click', async () => { await refreshNotificationsFromSupabaseV29(); renderPage(); toast('Inbox refreshed.'); }));
}
bindProfileChatButtonsV28 = bindProfileChatButtonsV29;


// =========================================================
// V30 final stability patch: Add Trainer null/default fix,
// direct Supabase trainer save, and stronger chat refresh/send.
// =========================================================
function trainerRate(trainer = {}) {
  const safe = trainer || {};
  return Number(safe.hourlyRate ?? safe.hourly_rate ?? safe.rate ?? safe.bookingRatePerHour ?? 0) || 0;
}

function trainerMinHours(trainer = {}) {
  const safe = trainer || {};
  return Math.max(1, Number(safe.minBookingHours ?? safe.min_booking_hours ?? 1) || 1);
}

function trainerMaxHours(trainer = {}) {
  const safe = trainer || {};
  return Math.max(trainerMinHours(safe), Number(safe.maxBookingHours ?? safe.max_booking_hours ?? 2) || 2);
}

function trainerDbPayloadV30(data = {}) {
  return {
    full_name: data.name || data.fullName || 'Trainer',
    phone: data.phone || null,
    email: data.email || null,
    address: data.address || null,
    description: data.description || null,
    hourly_rate: Number(data.hourlyRate ?? data.rate ?? 0) || 0,
    min_booking_hours: trainerMinHours(data),
    max_booking_hours: trainerMaxHours(data),
    profile_image_url: data.profileImage || null,
    status: availabilityToDb(data.status || 'Available'),
  };
}

async function refreshTrainersFromSupabaseV30() {
  if (!SUPABASE_MODE) return;
  try {
    const { data, error } = await supabaseClient
      .from(DB_TABLES.trainers)
      .select('*')
      .order('full_name', { ascending: true });
    if (error) {
      console.error('Trainer refresh error:', error);
      return;
    }
    if (Array.isArray(data)) setLocalData('trainers', data.map(trainerToLocal));
  } catch (err) {
    console.error('Trainer refresh failed:', err);
  }
}

syncTrainersToSupabase = async function v30SyncTrainersToSupabase(trainers = []) {
  if (!SUPABASE_MODE) return;
  for (const trainer of trainers) {
    const payload = trainerDbPayloadV30(trainer);
    let error = null;
    if (isUuid(trainer.id)) {
      ({ error } = await supabaseClient.from(DB_TABLES.trainers).update(payload).eq('id', trainer.id));
    } else if (trainer.email) {
      const existing = await supabaseClient.from(DB_TABLES.trainers).select('id').eq('email', trainer.email).maybeSingle();
      if (existing.error) console.error('Trainer lookup error:', existing.error);
      if (existing.data?.id) {
        ({ error } = await supabaseClient.from(DB_TABLES.trainers).update(payload).eq('id', existing.data.id));
      } else {
        ({ error } = await supabaseClient.from(DB_TABLES.trainers).insert(payload));
      }
    } else {
      ({ error } = await supabaseClient.from(DB_TABLES.trainers).insert(payload));
    }
    if (error) console.error('Trainer sync error:', error);
  }
  await refreshTrainersFromSupabaseV30();
};



</script>
<?php
}

function upsi_section_admin_driving_range_module(): void
{
?>
<script>
window.UPSI_SECTION_MODULES = window.UPSI_SECTION_MODULES || {};
window.UPSI_SECTION_MODULES["admin_driving_range"] = {
  title: "Admin Driving Range",
  runtimeChunk: '8/22',
  functions: ["adminCourses", "openCourseForm"]
};
</script>
<?php
}

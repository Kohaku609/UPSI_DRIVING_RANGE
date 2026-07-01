<?php
/**
 * admin_trainers.php
 * Bahagian: Admin Trainers
 *
 * V108: CSS dan JavaScript runtime dibahagikan ke semua section.
 * Jadi home_page.php tidak lagi memegang semua coding sistem.
 *
 * Runtime chunk: 9/22
 * Fungsi berkaitan untuk presentation: adminTrainers, openTrainerForm
 */


function upsi_section_admin_trainers_styles(): void
{
?>
<style>
/* =========================================================
   V108 CSS chunk 9/22
   Bahagian: Admin Trainers
   ========================================================= */
body[data-theme="dark"] .content-section-body > .toolbar h1,
body[data-theme="dark"] .content-section-body > .toolbar h2,
body[data-theme="dark"] .content-section-body > .toolbar h3,
body[data-theme="dark"] .toolbar h1,
body[data-theme="dark"] .toolbar h2,
body[data-theme="dark"] .toolbar h3,
body[data-theme="dark"] .section-toolbar h1,
body[data-theme="dark"] .section-toolbar h2,
body[data-theme="dark"] .section-toolbar h3,
body[data-theme="dark"] .form-title h1,
body[data-theme="dark"] .form-title h2,
body[data-theme="dark"] .form-title h3,
body[data-theme="dark"] .admin-range-preview h1,
body[data-theme="dark"] .admin-range-preview h2,
body[data-theme="dark"] .admin-range-preview h3,
body[data-theme="dark"] .app-booking-screen h1,
body[data-theme="dark"] .app-booking-screen h2,
body[data-theme="dark"] .app-booking-screen h3,
body[data-theme="dark"] .price-list-panel h1,
body[data-theme="dark"] .price-list-panel h2,
body[data-theme="dark"] .price-list-panel h3,
body[data-theme="dark"] .price-column h1,
body[data-theme="dark"] .price-column h2,
body[data-theme="dark"] .price-column h3 {
  color: #f8fff9 !important;
  text-shadow: none !important;
}

body[data-theme="dark"] .content-section-body > .toolbar p,
body[data-theme="dark"] .toolbar p,
body[data-theme="dark"] .section-toolbar p,
body[data-theme="dark"] .form-title p,
body[data-theme="dark"] .admin-range-preview p,
body[data-theme="dark"] .app-booking-screen p,
body[data-theme="dark"] .price-list-panel p,
body[data-theme="dark"] .price-column p,
body[data-theme="dark"] .trainer-note-box p,
body[data-theme="dark"] .trainer-note-box small,
body[data-theme="dark"] .cancel-reason-box p {
  color: #c7dbcf !important;
}

body[data-theme="dark"] .content-section-body > .toolbar .eyebrow,
body[data-theme="dark"] .toolbar .eyebrow,
body[data-theme="dark"] .section-toolbar .eyebrow,
body[data-theme="dark"] .form-title .eyebrow,
body[data-theme="dark"] .admin-range-preview .eyebrow,
body[data-theme="dark"] .app-booking-screen .eyebrow,
body[data-theme="dark"] .price-list-panel .eyebrow,
body[data-theme="dark"] .trainer-note-box .eyebrow {
  color: #5ee39f !important;
}

body[data-theme="dark"] table,
body[data-theme="dark"] thead,
body[data-theme="dark"] tbody,
body[data-theme="dark"] tr,
body[data-theme="dark"] td,
body[data-theme="dark"] th {
  background-color: #0b1710 !important;
  border-color: rgba(94, 227, 159, 0.14) !important;
}

body[data-theme="dark"] th {
  background-color: #102318 !important;
}

body[data-theme="dark"] .status-pill,
body[data-theme="dark"] .badge,
body[data-theme="dark"] .pill {
  background: rgba(94, 227, 159, 0.12) !important;
  color: #6cf2a7 !important;
}

body[data-theme="dark"] .btn-danger-soft,
body[data-theme="dark"] .danger-zone .btn,
body[data-theme="dark"] .btn-soft.danger,
body[data-theme="dark"] .btn-danger {
  background: #2b1518 !important;
  color: #ffb4bc !important;
  border-color: rgba(248, 113, 113, 0.22) !important;
}

body[data-theme="dark"] .btn-light,
body[data-theme="dark"] .btn-outline-light {
  background: #102318 !important;
  color: #f4fff7 !important;
  border-color: rgba(94, 227, 159, 0.22) !important;
}

body[data-theme="dark"] .qr-code,
body[data-theme="dark"] .qr-mini,
body[data-theme="dark"] .qr-settings-preview,
body[data-theme="dark"] .qr-code img,
body[data-theme="dark"] .qr-mini img,
body[data-theme="dark"] .qr-settings-preview img {
  background: #ffffff !important;
}

body[data-theme="dark"] .modal-root {
  color: #f4fff7 !important;
}

body[data-theme="dark"] .modal-card,
body[data-theme="dark"] .modal-card form,
body[data-theme="dark"] .modal-card .form-grid,
body[data-theme="dark"] .modal-card .form-stack {
  background: #0f1f16 !important;
  color: #f4fff7 !important;
}

/* V26 personal notification + event carousel + profile actions */
.profile-chip-v26 {
  min-width: 300px;
  gap: 10px;
  padding: 8px 10px;
}

.profile-chip-user {
  display: flex;
  align-items: center;
  gap: 10px;
  flex: 1;
  cursor: pointer;
  border-radius: 14px;
  padding: 3px 4px;
}

.profile-chip-user:hover {
  background: rgba(25, 135, 84, 0.06);
}

.notification-top-btn {
  position: relative;
  width: 44px;
  height: 44px;
  border: 1.5px solid rgba(15,81,50,0.16);
  border-radius: 14px;
  background: var(--light-green);
  color: var(--dark-green);
  display: grid;
  place-items: center;
  font-size: 20px;
  flex: 0 0 auto;
}

.notification-top-btn b {
  position: absolute;
  top: -7px;
  right: -7px;
  min-width: 20px;
  height: 20px;
  padding: 0 5px;
  border-radius: 999px;
  background: var(--danger);
  color: #fff;
  font-size: 11px;
  display: grid;
  place-items: center;
  border: 2px solid #fff;
}

.notification-list {
  display: grid;
  gap: 14px;
  max-height: min(70vh, 620px);
  overflow: auto;
  padding-right: 4px;
}

.notification-card {
  border: 1.5px solid rgba(15,81,50,0.16);
  border-radius: 20px;
  background: #fff;
  padding: 16px;
  box-shadow: 0 12px 28px rgba(15,81,50,0.06);
}

.notification-card.unread {
  border-color: rgba(227, 179, 65, 0.55);
  background: linear-gradient(135deg, #fffdf6, #ffffff);
}

.notification-image {
  width: 100%;
  max-height: 320px;
  object-fit: contain;
  border-radius: 16px;
  border: 1px solid rgba(15,81,50,0.12);
  background: #fff;
  margin-top: 12px;
}

.event-carousel-section {
  margin-bottom: 24px;
  border: 1.5px solid rgba(15,81,50,0.16);
  border-radius: 26px;
  background: linear-gradient(135deg, rgba(255,255,255,0.96), rgba(237,249,241,0.96));
  padding: 18px;
  box-shadow: 0 14px 34px rgba(15,81,50,0.08);
}

.event-carousel-head {
  display: flex;
  align-items: center;
  justify-content: space-between;
  gap: 16px;
  margin-bottom: 14px;
}


</style>
<?php
}

function upsi_section_admin_trainers_scripts(): void
{
?>
<script>
/* =========================================================
   V108 JavaScript chunk 9/22
   Bahagian: Admin Trainers
   ========================================================= */
openTrainerForm = function v30OpenTrainerForm(trainer = null) {
  const safeTrainer = trainer || {};
  openModal(`
    <div class="modal-head"><div><p class="eyebrow">Trainer Form</p><h2>${trainer ? 'Edit Trainer' : 'Add Trainer'}</h2><p class="muted">Trainer details will be saved to Supabase and shown to users.</p></div><button class="close-btn" data-close-modal>&times;</button></div>
    <form id="trainerFormV30" class="form-grid compact-modal-form">
      <label class="wide">Trainer Name<input name="name" value="${escapeHtml(safeTrainer.name || safeTrainer.fullName || '')}" required></label>
      <label>No. Phone<input name="phone" value="${escapeHtml(safeTrainer.phone || '')}" required></label>
      <label>Email<input name="email" type="email" value="${escapeHtml(safeTrainer.email || '')}" required></label>
      <label class="wide">Alamat<input name="address" value="${escapeHtml(safeTrainer.address || '')}" required></label>
      <label class="wide">Specialist / Expertise<textarea name="description" placeholder="Example: beginner swing basics, stance correction, driving accuracy" required>${escapeHtml(safeTrainer.description || '')}</textarea></label>
      <label>Trainer Fee Per Hour (RM)<input name="rate" type="number" min="0" step="0.01" value="${trainerRate(safeTrainer)}" required></label>
      <label>Minimum Booking Hour<input name="minBookingHours" type="number" min="1" max="12" value="${trainerMinHours(safeTrainer)}" required></label>
      <label>Maximum Booking Hour<input name="maxBookingHours" type="number" min="1" max="12" value="${trainerMaxHours(safeTrainer)}" required></label>
      <label>Status<select name="status"><option ${safeTrainer.status !== 'Unavailable' ? 'selected' : ''}>Available</option><option ${safeTrainer.status === 'Unavailable' ? 'selected' : ''}>Unavailable</option></select></label>
      <button class="btn btn-primary wide" type="submit">Save Trainer</button>
    </form>
  `);
  const form = document.getElementById('trainerFormV30');
  form.addEventListener('submit', async (event) => {
    event.preventDefault();
    const formData = new FormData(form);
    const minHours = Math.max(1, Number(formData.get('minBookingHours') || 1));
    const maxHours = Math.max(minHours, Number(formData.get('maxBookingHours') || minHours));
    const payloadLocal = {
      id: safeTrainer.id || makeId('T'),
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
      profileImage: safeTrainer.profileImage || '',
      createdAt: safeTrainer.createdAt || new Date().toISOString(),
    };

    if (SUPABASE_MODE) {
      const dbPayload = trainerDbPayloadV30(payloadLocal);
      let result;
      if (isUuid(safeTrainer.id)) {
        result = await supabaseClient.from(DB_TABLES.trainers).update(dbPayload).eq('id', safeTrainer.id).select().maybeSingle();
      } else {
        const existing = await supabaseClient.from(DB_TABLES.trainers).select('id').eq('email', payloadLocal.email).maybeSingle();
        if (existing.error) console.error('Trainer email check error:', existing.error);
        result = existing.data?.id
          ? await supabaseClient.from(DB_TABLES.trainers).update(dbPayload).eq('id', existing.data.id).select().maybeSingle()
          : await supabaseClient.from(DB_TABLES.trainers).insert(dbPayload).select().maybeSingle();
      }
      if (result?.error) {
        console.error('Trainer save error:', result.error);
        toast(result.error.message || 'Failed to save trainer. Run the V30 SQL migration first.');
        return;
      }
      await refreshTrainersFromSupabaseV30();
    } else {
      const trainers = read('trainers');
      const index = trainers.findIndex((item) => item.id === payloadLocal.id || item.email?.toLowerCase() === payloadLocal.email);
      if (index >= 0) trainers[index] = { ...trainers[index], ...payloadLocal };
      else trainers.push(payloadLocal);
      setLocalData('trainers', trainers);
    }

    closeModal();
    if (state.currentPage === 'trainers') adminTrainers();
    else renderPage();
    toast('Trainer saved.');
  });
};
openTrainerFormV29 = openTrainerForm;

// Hard-bind Add Trainer button after all page renders, so older handlers cannot break it.
document.addEventListener('click', (event) => {
  const btn = event.target.closest('[data-add-trainer]');
  if (!btn) return;
  event.preventDefault();
  event.stopPropagation();
  openTrainerForm(null);
}, true);

async function refreshNotificationsFromSupabaseV30() {
  if (!SUPABASE_MODE || !state.session?.id || !isUuid(state.session.id)) return;
  try {
    // RLS policies decide which rows are visible. This avoids missing sent admin replies.
    const { data, error } = await supabaseClient
      .from(DB_TABLES.notifications)
      .select('*')
      .order('created_at', { ascending: false });
    if (error) {
      console.error('Notification refresh error:', error);
      return;
    }
    if (Array.isArray(data)) setLocalData('notifications', data.map(notificationToLocal));
  } catch (err) {
    console.error('Notification refresh failed:', err);
  }
}
refreshNotificationsFromSupabaseV29 = refreshNotificationsFromSupabaseV30;
refreshNotificationsFromSupabaseV28 = refreshNotificationsFromSupabaseV30;

createPersonalNotification = async function v30CreatePersonalNotification({ recipient, title, message, imageUrl = '', type = 'chat' }) {
  const sender = getFreshSessionUser();
  if (!recipient?.id || !sender?.id) {
    toast('Recipient or sender profile not found.');
    return null;
  }
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
  if (SUPABASE_MODE && isUuid(recipient.id) && isUuid(sender.id)) {
    const dbPayload = localNotificationToDb(payload);
    delete dbPayload.id;
    const { data, error } = await supabaseClient
      .from(DB_TABLES.notifications)
      .insert(dbPayload)
      .select()
      .maybeSingle();
    if (error) {
      console.error('Notification insert error:', error);
      toast(error.message || 'Failed to send notification. Run the V30 notification SQL policy.');
      return null;
    }
    if (data) Object.assign(payload, notificationToLocal(data));
  }
  const items = read('notifications').filter((item) => item.id !== payload.id);
  items.unshift(payload);
  setLocalData('notifications', items);
  return payload;
};

openChatThread = async function v30OpenChatThread(peerId) {
  await refreshNotificationsFromSupabaseV30();
  const current = getFreshSessionUser();
  const peer = v29PeerNameFromId(peerId);
  if (!peer?.id) return toast('Chat user not found.');
  await markChatRead(peerId);
  await refreshNotificationsFromSupabaseV30();
  const messages = chatMessagesWithV29(peerId);
  const canReply = isAdminLike(current) && isAdminLike(peer);
  openModal(`
    <div class="modal-head"><div><p class="eyebrow">Personal Notification Chat</p><h2>${escapeHtml(peer.fullName || 'Administration')}</h2><p class="muted">${canReply ? 'Admins can reply to each other here.' : 'This message thread is read-only for users.'}</p></div><button class="close-btn" data-close-modal>&times;</button></div>
    <div class="chat-thread">
      ${messages.map((item) => `<article class="chat-bubble ${item.senderId === current.id ? 'mine' : ''}"><div><strong>${escapeHtml(item.senderId === current.id ? 'You' : (v29PeerNameFromId(item.senderId).fullName || 'Administration'))}</strong><small>${new Date(item.createdAt).toLocaleString()}</small></div><h4>${escapeHtml(item.title || 'Message')}</h4><p>${escapeHtml(item.message || '')}</p>${hasUsableImageUrl(item.imageUrl) ? `<img class="notification-image" src="${escapeHtml(item.imageUrl)}" alt="Message image">` : ''}</article>`).join('') || empty('No message in this chat yet.')}
    </div>
    ${canReply ? `<form id="chatReplyFormV30" class="form-grid chat-reply-form"><label class="wide">Reply<textarea name="message" placeholder="Write your reply..." required></textarea></label><label class="wide">Image Attachment<input name="image" type="file" accept="image/*"></label><button class="btn btn-primary wide" type="submit">Send Reply</button></form>` : ''}
  `);
  const form = document.getElementById('chatReplyFormV30');
  if (form) form.addEventListener('submit', async (event) => {
    event.preventDefault();
    const data = new FormData(form);
    const imageUrl = await fileToDataUrl(data.get('image'), 1800000);
    const notification = await createPersonalNotification({ recipient: peer, title: 'Admin Chat Reply', message: data.get('message').trim(), imageUrl, type: 'chat' });
    if (notification) { await refreshNotificationsFromSupabaseV30(); closeModal(); openChatThread(peerId); toast('Reply sent.'); }
  });
};

// =========================================================
// V31 polish patch: stable modals, event hook/view, storage images,
// chat latest-first + working image upload, native date/time controls.
// =========================================================
const V31_CHAT_IMAGE_MAX = 5 * 1024 * 1024;   // 5 MB
const V31_EVENT_IMAGE_MAX = 8 * 1024 * 1024;  // 8 MB

// Popups must only close when the X/cancel button is pressed, not when user clicks outside.
openModal = function v31OpenModal(html) {
  const root = document.getElementById('modalRoot');
  root.innerHTML = `<div class="modal-card v31-modal-card">${html}</div>`;
  root.classList.remove('hidden');
  root.removeEventListener('click', modalBackdropClose);
  root.querySelectorAll('[data-close-modal]').forEach((btn) => btn.addEventListener('click', closeModal));
};

async function v31FileToDataUrl(file) {
  return await new Promise((resolve, reject) => {
    const reader = new FileReader();
    reader.onload = () => resolve(reader.result || '');
    reader.onerror = reject;
    reader.readAsDataURL(file);
  });
}

function v31SafeFileName(name = 'file') {
  return String(name || 'file').replace(/[^a-zA-Z0-9._-]/g, '-');
}

function v31FileExt(file, fallback = 'png') {
  const raw = (String(file?.name || '').split('.').pop() || fallback).toLowerCase();
  return raw.replace(/[^a-z0-9]/g, '') || fallback;
}

async function v31UploadPublicFile(file, { bucket, folder = 'uploads', maxSize = 5000000, label = 'File', allowedTypes = [] } = {}) {
  if (!file || !file.size) return '';
  if (file.size > maxSize) {
    toast(`${label} is too large. Maximum size is ${(maxSize / 1024 / 1024).toFixed(0)}MB. The message/event was not sent.`);
    throw new Error(`${label} too large`);
  }
  if (allowedTypes.length && !allowedTypes.some((type) => String(file.type || '').startsWith(type))) {
    toast(`${label} type is not supported.`);
    throw new Error(`${label} unsupported type`);
  }
  if (!SUPABASE_MODE) return await v31FileToDataUrl(file);

  const cleanFolder = String(folder || 'uploads').replace(/[^a-zA-Z0-9_-]/g, '-');
  const ext = v31FileExt(file);
  const filePath = `${cleanFolder}/${Date.now()}-${Math.random().toString(36).slice(2)}-${v31SafeFileName(file.name || `upload.${ext}`)}`;
  const { error: uploadError } = await supabaseClient.storage.from(bucket).upload(filePath, file, {
    cacheControl: '3600',
    upsert: true,
    contentType: file.type || 'application/octet-stream',
  });
  if (uploadError) {
    console.error(`${label} upload error:`, uploadError);
    toast(`${label} upload failed. Run the V31 SQL and check Storage policy.`);
    throw uploadError;
  }
  const { data } = supabaseClient.storage.from(bucket).getPublicUrl(filePath);
  return data?.publicUrl || '';
}

async function v31UploadChatImage(file) {
  return await v31UploadPublicFile(file, {
    bucket: 'notification-media',
    folder: state.session?.id || 'chat',
    maxSize: V31_CHAT_IMAGE_MAX,
    label: 'Chat image',
    allowedTypes: ['image/'],
  });
}

async function v31UploadEventImage(file) {
  return await v31UploadPublicFile(file, {
    bucket: 'event-images',
    folder: 'events',
    maxSize: V31_EVENT_IMAGE_MAX,
    label: 'Event image',
    allowedTypes: ['image/'],
  });
}

// Extend public event mapping with hook text.
eventToLocal = function v31EventToLocal(row = {}) {
  return {
    id: row.id,
    title: row.title || 'Announcement',
    category: row.category || 'Public Notification',
    hook: row.hook || row.short_hook || row.summary || '',
    description: row.description || '',
    eventDate: row.event_date || '',
    eventTime: row.event_time || '',
    location: row.location || '',
    imageUrl: row.image_url || '',
    status: row.status || 'active',
    createdBy: row.created_by || '',
    createdAt: row.created_at || new Date().toISOString(),
  };
};

localEventToDb = function v31LocalEventToDb(item = {}) {
  return {
    id: isUuid(item.id) ? item.id : undefined,
    title: item.title || 'Announcement',
    category: item.category || 'Public Notification',
    hook: item.hook || '',
    description: item.description || '',
    event_date: item.eventDate || null,
    event_time: item.eventTime || null,
    location: item.location || null,
    image_url: item.imageUrl || null,
    status: item.status || 'active',
    created_by: isUuid(item.createdBy) ? item.createdBy : null,
    created_at: item.createdAt || new Date().toISOString(),
  };
};

function v31DateInput(name, value = '', label = 'Date') {
  return `<label>${escapeHtml(label)}<input name="${escapeHtml(name)}" type="date" value="${escapeHtml(value || '')}" required></label>`;
}

function v31TimeInput(name, value = '09:00', label = 'Time') {
  const safe = String(value || '09:00').includes(':') ? String(value || '09:00').slice(0, 5) : convertTo24Hour(value).slice(0, 5);
  return `<label>${escapeHtml(label)}<input name="${escapeHtml(name)}" type="time" value="${escapeHtml(safe)}" required></label>`;
}

openPublicEventForm = function v31OpenPublicEventForm(eventItem = null) {
  if (!isAdminLike(getFreshSessionUser())) return toast('Only admin can add public events.');
  openModal(`
    <div class="modal-head"><div><p class="eyebrow">Event & Public Notification</p><h2>${eventItem ? 'Edit Announcement' : 'Add Announcement'}</h2><p class="muted">The hook is shown on the outside card. Users press View to read the full description.</p></div><button class="close-btn" data-close-modal>&times;</button></div>
    <form id="publicEventFormV31" class="form-grid compact-modal-form v31-event-form">
      <label>Title<input name="title" value="${escapeHtml(eventItem?.title || '')}" required></label>
      <label>Category<select name="category"><option ${eventItem?.category === 'Public Notification' ? 'selected' : ''}>Public Notification</option><option ${eventItem?.category === 'Event' ? 'selected' : ''}>Event</option><option ${eventItem?.category === 'Maintenance' ? 'selected' : ''}>Maintenance</option><option ${eventItem?.category === 'Announcement' ? 'selected' : ''}>Announcement</option></select></label>
      ${v31DateInput('eventDate', eventItem?.eventDate || '', 'Date')}
      ${v31TimeInput('eventTime', eventItem?.eventTime || '09:00', 'Time')}
      <label class="wide">Hook / Short Preview<textarea name="hook" maxlength="220" placeholder="Short attractive sentence shown on the event card" required>${escapeHtml(eventItem?.hook || '')}</textarea></label>
      <label class="wide">Full Description<textarea name="description" placeholder="Full details shown after user presses View" required>${escapeHtml(eventItem?.description || '')}</textarea></label>
      <label class="wide">Location<input name="location" value="${escapeHtml(eventItem?.location || '')}" placeholder="Example: UPSI Driving Range"></label>
      <label class="wide">Event / Notice Image <span class="muted">Max 8MB</span><input name="image" type="file" accept="image/*"></label>
      <label>Status<select name="status"><option value="active" ${String(eventItem?.status || 'active') === 'active' ? 'selected' : ''}>Active</option><option value="inactive" ${String(eventItem?.status || '') === 'inactive' ? 'selected' : ''}>Inactive</option></select></label>
      <button class="btn btn-primary wide" type="submit">Save Event / Public Notification</button>
    </form>
  `);
  const form = document.getElementById('publicEventFormV31');
  form.addEventListener('submit', async (event) => {
    event.preventDefault();
    const submitBtn = form.querySelector('button[type="submit"]');
    submitBtn.disabled = true;
    try {
      const formData = new FormData(form);
      const file = form.querySelector('input[name="image"]')?.files?.[0] || null;
      const imageUrl = file ? await v31UploadEventImage(file) : (eventItem?.imageUrl || '');
      const payload = {
        id: eventItem?.id || makeId('EV'),
        title: formData.get('title').trim(),
        category: formData.get('category'),
        hook: formData.get('hook').trim(),
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
    } catch (err) {
      console.error('Event save failed:', err);
      submitBtn.disabled = false;
    }
  });
};

function eventCardMarkupV31(item, mode = 'user') {
  const previewText = item.hook || 'Tap View to see full details.';
  return `
    <article class="event-card v31-event-card">
      ${item.imageUrl ? `<img src="${escapeHtml(item.imageUrl)}" alt="${escapeHtml(item.title)}">` : '<div class="event-placeholder">📣</div>'}
      <div class="event-card-body">
        <span class="event-badge">${escapeHtml(item.category)}</span>
        <h3>${escapeHtml(item.title)}</h3>
        <p>${escapeHtml(previewText)}</p>
        <ul class="event-meta-list">
          <li><span>Date</span><strong>${escapeHtml(item.eventDate ? formatDateDisplay(item.eventDate) : '-')}</strong></li>
          <li><span>Time</span><strong>${escapeHtml(item.eventTime || '-')}</strong></li>
          ${item.location ? `<li><span>Location</span><strong>${escapeHtml(item.location)}</strong></li>` : ''}
        </ul>
        <div class="card-actions">
          <button class="btn btn-soft" type="button" data-view-public-event="${escapeHtml(item.id)}">View</button>
          ${mode === 'admin' ? `<button class="btn btn-soft" type="button" data-edit-public-event="${escapeHtml(item.id)}">Edit</button><button class="btn btn-danger-soft" type="button" data-delete-public-event="${escapeHtml(item.id)}">Delete</button>` : ''}
        </div>
      </div>
    </article>
  `;
}

eventCardMarkupV28 = eventCardMarkupV31;

eventCarouselMarkup = function v31EventCarouselMarkup(mode = 'user') {
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
        <div><p class="eyebrow">Event & Public Notification</p><h2>${mode === 'admin' ? 'Public events shown to users' : 'Latest public notifications'}</h2><p class="muted">Events are grouped by month. Use the arrows if there are many announcements.</p></div>
        <div class="row-actions">${mode === 'admin' ? '<button class="btn btn-primary" type="button" data-add-public-event>Add Event / Public Notification</button>' : ''}<button class="carousel-arrow" type="button" data-event-scroll="left">←</button><button class="carousel-arrow" type="button" data-event-scroll="right">→</button></div>
      </div>
      <div class="event-carousel-track v31-event-track" data-event-track>
        ${groups.map(([month, list]) => `<div class="event-month-group v31-event-month-group"><div class="event-month-heading v31-month-heading">${escapeHtml(month)}</div><div class="event-month-cards">${list.map((item) => eventCardMarkupV31(item, mode)).join('')}</div></div>`).join('') || '<article class="event-card empty-event"><div class="event-card-body"><h3>No public event yet</h3><p class="muted">Admin can add announcements from the dashboard.</p></div></article>'}
      </div>
    </section>
  `;
};

function openEventViewModalV31(item) {
  openModal(`
    <div class="modal-head"><div><p class="eyebrow">${escapeHtml(item.category || 'Public Notification')}</p><h2>${escapeHtml(item.title || 'Announcement')}</h2><p class="muted">${escapeHtml(item.eventDate ? formatDateDisplay(item.eventDate) : '')}${item.eventTime ? ` • ${escapeHtml(item.eventTime)}` : ''}</p></div><button class="close-btn" data-close-modal>&times;</button></div>
    <div class="event-detail-view">
      ${item.imageUrl ? `<img class="event-detail-image" src="${escapeHtml(item.imageUrl)}" alt="${escapeHtml(item.title || 'Event image')}">` : ''}
      ${item.location ? `<p><strong>Location:</strong> ${escapeHtml(item.location)}</p>` : ''}
      ${item.hook ? `<p class="event-hook-view"><strong>Hook:</strong> ${escapeHtml(item.hook)}</p>` : ''}
      <p>${escapeHtml(item.description || 'No description provided.')}</p>
    </div>
  `);
}

bindEventCarousel = function v31BindEventCarousel() {
  const track = content().querySelector('[data-event-track]');
  if (!track) return;
  content().querySelectorAll('[data-event-scroll]').forEach((btn) => btn.addEventListener('click', () => track.scrollBy({ left: (btn.dataset.eventScroll === 'right' ? 1 : -1) * 460, behavior: 'smooth' })));
  const addBtn = content().querySelector('[data-add-public-event]');
  if (addBtn) addBtn.addEventListener('click', () => openPublicEventForm());
  content().querySelectorAll('[data-view-public-event]').forEach((btn) => btn.addEventListener('click', () => {
    const item = read('events').find((ev) => ev.id === btn.dataset.viewPublicEvent);
    if (item) openEventViewModalV31(item);
  }));
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

// Compact browser popup controls for Tee Time instead of bulky scroll lists.
openTimeForm = function v31OpenTimeForm(slot = null) {
  const courses = getDrivingCourses(read('courses'));
  const trainers = read('trainers');
  const today = new Date().toISOString().slice(0, 10);
  const nextWeek = getFutureDate(7);
  const selectedType = slot?.targetType || 'both';
  const selectedTarget = slot?.targetId || 'all';
  const isEdit = Boolean(slot);
  const safeTime = slot?.time ? convertTo24Hour(slot.time).slice(0, 5) : '08:00';
  openModal(`
    <div class="modal-head"><div><p class="eyebrow">${isEdit ? 'Edit Tee Time' : 'New Tee Time'}</p><h2>${isEdit ? 'Update Available Date & Time' : 'Add Time Slot'}</h2><p class="muted">Click the date or time field to open the picker.</p></div><button class="close-btn" data-close-modal>&times;</button></div>
    <form id="timeFormV31" class="form-grid compact-modal-form">
      ${isEdit ? `<label class="wide">Date<input name="date" type="date" min="${today}" value="${escapeHtml(slot?.date || today)}" required></label>` : `<label>Date Mode<select name="dateMode" data-date-mode><option value="single">Single date</option><option value="range">Date range / Bulk add</option></select></label><label data-single-date>Single Date<input name="date" type="date" min="${today}" value="${today}" required></label><label class="hidden" data-range-start>Start Date<input name="startDate" type="date" min="${today}" value="${today}"></label><label class="hidden" data-range-end>End Date<input name="endDate" type="date" min="${today}" value="${nextWeek}"></label>`}
      <label>Booking Type<select name="targetType" data-slot-type required><option value="both" ${selectedType === 'both' ? 'selected' : ''}>Driving Range & Trainer</option><option value="driving" ${selectedType === 'driving' ? 'selected' : ''}>Driving Range Only</option></select></label>
      <label class="wide" data-target-wrapper>Target<select name="targetId" data-slot-target required></select></label>
      <label>Time<input name="time" type="time" value="${escapeHtml(safeTime)}" required></label>
      <label>Status<select name="status"><option ${slot?.status !== 'Unavailable' ? 'selected' : ''}>Available</option><option ${slot?.status === 'Unavailable' ? 'selected' : ''}>Unavailable</option></select></label>
      <button class="btn btn-primary wide" type="submit">Save Time Slot</button>
    </form>
  `);
  const form = document.getElementById('timeFormV31');
  const dateMode = form.querySelector('[data-date-mode]');
  const singleWrap = form.querySelector('[data-single-date]');
  const startWrap = form.querySelector('[data-range-start]');
  const endWrap = form.querySelector('[data-range-end]');
  if (dateMode) dateMode.addEventListener('change', () => {
    const range = dateMode.value === 'range';
    singleWrap?.classList.toggle('hidden', range);
    startWrap?.classList.toggle('hidden', !range);
    endWrap?.classList.toggle('hidden', !range);
  });
  function updateTargets() {
    const type = form.querySelector('[data-slot-type]').value;
    const target = form.querySelector('[data-slot-target]');
    let options = '<option value="all">Driving Range & All Trainers</option>';
    if (type === 'driving') options = courses.map((course) => `<option value="${course.id}">${escapeHtml(course.name)}</option>`).join('') || '<option value="all">All Driving Ranges</option>';
    if (type === 'trainer') options = trainers.map((trainer) => `<option value="${trainer.id}">${escapeHtml(trainer.name || trainer.fullName)}</option>`).join('') || '<option value="all">All Trainers</option>';
    target.innerHTML = options;
    target.value = selectedTarget;
  }
  form.querySelector('[data-slot-type]').addEventListener('change', updateTargets);
  updateTargets();
  form.addEventListener('submit', (event) => {
    event.preventDefault();
    const formData = new FormData(form);
    const base = {
      time: formatTimeForDisplay(formData.get('time')),
      status: formData.get('status'),
      targetType: formData.get('targetType'),
      targetId: formData.get('targetId'),
    };
    const settings = read('settings');
    const slots = settings.scheduleSlots || [];
    if (isEdit) {
      const index = slots.findIndex((item) => item.id === slot.id);
      if (index >= 0) slots[index] = { ...slots[index], ...base, date: formData.get('date') };
      settings.scheduleSlots = slots;
      write('settings', settings);
      closeModal(); state.teePage = 1; adminTimes(); return toast('Tee time slot updated.');
    }
    const dates = formData.get('dateMode') === 'range' ? dateRange(formData.get('startDate'), formData.get('endDate')) : [formData.get('date')];
    const newSlots = dates.map((date) => ({ id: makeId('S'), date, ...base }));
    settings.scheduleSlots = mergeSlots(slots, newSlots);
    write('settings', settings);
    closeModal(); state.teePage = 1; adminTimes(); toast(`${newSlots.length} tee time slot(s) added.`);
  });
};

function v31FormatBytes(bytes) {
  return `${(bytes / 1024 / 1024).toFixed(1)}MB`;
}

function chatMessagesWithV31(peerId) {
  const current = getFreshSessionUser();
  return read('notifications')
    .filter((item) => item.type === 'chat' || item.type === 'personal')
    .filter((item) => (item.recipientId === current.id && item.senderId === peerId) || (item.senderId === current.id && item.recipientId === peerId))
    .sort((a, b) => new Date(b.createdAt || 0) - new Date(a.createdAt || 0));
}
chatMessagesWith = chatMessagesWithV31;
chatMessagesWithV29 = chatMessagesWithV31;

openSendMessageModal = function v31OpenSendMessageModal(recipient) {
  if (!recipient?.id) return toast('Recipient not found.');
  openModal(`
    <div class="modal-head"><div><p class="eyebrow">Send Personal Notification</p><h2>${escapeHtml(recipient.fullName)}</h2><p class="muted">This message appears in the recipient notification bell and inbox. Image max ${v31FormatBytes(V31_CHAT_IMAGE_MAX)}.</p></div><button class="close-btn" data-close-modal>&times;</button></div>
    <form id="personalMessageFormV31" class="form-grid compact-modal-form">
      <label>Title<input name="title" value="Message from Administration" required></label>
      <label class="wide">Message<textarea name="message" placeholder="Write your message here..." required></textarea></label>
      <label class="wide">Image Attachment<input name="image" type="file" accept="image/*"></label>
      <button class="btn btn-primary wide" type="submit">Send Message</button>
    </form>
  `);
  const form = document.getElementById('personalMessageFormV31');
  form.addEventListener('submit', async (event) => {
    event.preventDefault();
    const submitBtn = form.querySelector('button[type="submit"]');
    submitBtn.disabled = true;
    try {
      const data = new FormData(form);
      const file = form.querySelector('input[name="image"]')?.files?.[0] || null;
      const imageUrl = file ? await v31UploadChatImage(file) : '';
      const notification = await createPersonalNotification({ recipient, title: data.get('title').trim(), message: data.get('message').trim(), imageUrl, type: 'chat' });
      if (notification) {
        await refreshNotificationsFromSupabaseV30();
        closeModal();
        toast('Personal notification sent.');
      } else submitBtn.disabled = false;
    } catch (err) {
      console.error('Message send failed:', err);
      submitBtn.disabled = false;
    }
  });
};

openChatThread = async function v31OpenChatThread(peerId) {
  await refreshNotificationsFromSupabaseV30();
  const current = getFreshSessionUser();
  const peer = v29PeerNameFromId(peerId);
  if (!peer?.id) return toast('Chat user not found.');
  await markChatRead(peerId);
  await refreshNotificationsFromSupabaseV30();
  const messages = chatMessagesWithV31(peerId);
  const canReply = isAdminLike(current) && isAdminLike(peer);
  openModal(`
    <div class="modal-head"><div><p class="eyebrow">Personal Notification Chat</p><h2>${escapeHtml(peer.fullName || 'Administration')}</h2><p class="muted">Latest chat appears first. ${canReply ? 'Admins can reply to each other here.' : 'This thread is read-only for users.'}</p></div><button class="close-btn" data-close-modal>&times;</button></div>
    <div class="chat-thread v31-chat-thread">
      ${messages.map((item) => `<article class="chat-bubble ${item.senderId === current.id ? 'mine' : ''}"><div><strong>${escapeHtml(item.senderId === current.id ? 'You' : (v29PeerNameFromId(item.senderId).fullName || 'Administration'))}</strong><small>${new Date(item.createdAt).toLocaleString()}</small></div><h4>${escapeHtml(item.title || 'Message')}</h4><p>${escapeHtml(item.message || '')}</p>${hasUsableImageUrl(item.imageUrl) ? `<a href="${escapeHtml(item.imageUrl)}" target="_blank" rel="noopener"><img class="notification-image" src="${escapeHtml(item.imageUrl)}" alt="Message image"></a>` : ''}</article>`).join('') || empty('No message in this chat yet.')}
    </div>
    ${canReply ? `<form id="chatReplyFormV31" class="form-grid chat-reply-form"><label class="wide">Reply<textarea name="message" placeholder="Write your reply..."></textarea></label><label class="wide">Image Attachment <span class="muted">Max ${v31FormatBytes(V31_CHAT_IMAGE_MAX)}</span><input name="image" type="file" accept="image/*"></label><button class="btn btn-primary wide" type="submit">Send Reply</button></form>` : ''}
  `);
  const form = document.getElementById('chatReplyFormV31');
  if (form) form.addEventListener('submit', async (event) => {
    event.preventDefault();
    const submitBtn = form.querySelector('button[type="submit"]');
    const data = new FormData(form);
    const message = String(data.get('message') || '').trim();
    const file = form.querySelector('input[name="image"]')?.files?.[0] || null;
    if (!message && !file) return toast('Please write a reply or attach an image.');
    submitBtn.disabled = true;
    try {
      const imageUrl = file ? await v31UploadChatImage(file) : '';
      const notification = await createPersonalNotification({ recipient: peer, title: 'Admin Chat Reply', message, imageUrl, type: 'chat' });
      if (notification) { await refreshNotificationsFromSupabaseV30(); closeModal(); openChatThread(peerId); toast('Reply sent.'); }
      else submitBtn.disabled = false;
    } catch (err) {
      console.error('Reply send failed:', err);
      submitBtn.disabled = false;
    }
  });
};

openNotificationCenter = async function v31OpenNotificationCenter() {
  await refreshNotificationsFromSupabaseV30();
  const notifications = visibleNotificationsForCurrentUser();
  openModal(`
    <div class="modal-head"><div><p class="eyebrow">Personal Notification</p><h2>Messages from Administration</h2><p class="muted">Notifications stay unread until you open the chat.</p></div><button class="close-btn" data-close-modal>&times;</button></div>
    <div class="notification-list">
      ${notifications.map((item) => {
        const peer = peerFromNotification(item);
        return `<article class="notification-card ${item.isRead ? '' : 'unread'}"><div class="card-top"><div><p class="eyebrow">${new Date(item.createdAt).toLocaleString()}</p><h3>${escapeHtml(item.title)}</h3></div>${item.isRead ? '<span class="status-pill confirmed">Read</span>' : '<span class="status-pill pending">New</span>'}</div><p>${escapeHtml(item.message)}</p>${hasUsableImageUrl(item.imageUrl) ? `<img class="notification-image" src="${escapeHtml(item.imageUrl)}" alt="Notification image">` : ''}<div class="card-actions"><button class="btn btn-primary" data-open-chat-peer="${peer?.id || item.senderId || ''}">Open Chat</button></div></article>`;
      }).join('') || empty('No personal notification yet.')}
    </div>
  `);
  document.querySelectorAll('[data-open-chat-peer]').forEach((btn) => btn.addEventListener('click', () => { if (btn.dataset.openChatPeer) openChatThread(btn.dataset.openChatPeer); }));
};

// Keep profile images strictly inside the avatar frame.
document.documentElement.classList.add('v31-profile-image-fix');


// =========================================================
// V32 simplification patch: remove personal notification/chat completely.
// Keep public event notifications only. No bell, no inbox, no admin chat.
// =========================================================
(function v32RemovePersonalNotification() {
  // Disable all personal-notification data use so old DB/storage policies are no longer required.
  if (typeof STORAGE !== 'undefined') STORAGE.notifications = STORAGE.notifications || 'upsiGolfPersonalNotifications';
  if (typeof defaultData !== 'undefined') defaultData.notifications = [];

  visibleNotificationsForCurrentUser = function v32VisibleNotificationsForCurrentUser() { return []; };
  unreadNotificationCount = function v32UnreadNotificationCount() { return 0; };
  topbarNotificationButton = function v32TopbarNotificationButton() { return ''; };
  refreshNotificationsFromSupabaseV30 = async function v32RefreshNotificationsFromSupabase() { return []; };
  refreshNotificationsFromSupabaseV29 = refreshNotificationsFromSupabaseV30;
  refreshNotificationsFromSupabaseV28 = refreshNotificationsFromSupabaseV30;
  syncNotificationsToSupabase = async function v32SyncNotificationsToSupabase() { return true; };
  createPersonalNotification = async function v32CreatePersonalNotification() {
    toast('Personal notification has been removed. Please use Event / Public Notification instead.');
    return null;
  };
  openSendMessageModal = function v32OpenSendMessageModal() {
    toast('Personal notification has been removed.');
  };
  openNotificationCenter = function v32OpenNotificationCenter() {
    toast('Personal notification has been removed. Please check public announcements on the dashboard/home page.');
  };
  openChatThread = function v32OpenChatThread() {
    toast('Chat has been removed from this system.');
  };
  messageInboxCardMarkup = function v32MessageInboxCardMarkup() { return ''; };
  bindProfileChatButtonsV28 = function v32BindProfileChatButtons() {};
  bindProfileChatButtonsV29 = function v32BindProfileChatButtons() {};

  // Render top-right profile chip without notification bell.
  renderProfileChip = function v32RenderProfileChip() {
    const chip = document.getElementById('profileChip');
    if (!chip) return;
    const user = getFreshSessionUser();
    chip.classList.add('profile-chip-v26');
    chip.innerHTML = `
      <div class="profile-chip-user" data-open-profile-chip>
        ${avatarMarkup(user)}
        <div>
          <strong>${escapeHtml(user.fullName || 'User')}</strong>
          <span>${isAdminLike(user) ? (isPrimaryAdmin(user) ? 'Main Administrator' : 'Administrator') : 'User / Golfer'}</span>
        </div>
      </div>
    `;
    const goProfile = () => {
      state.currentPage = isAdminLike(user) ? 'settings' : 'profile';
      state.search = '';
      renderNav();
      renderPage();
    };
    const profileTarget = chip.querySelector('[data-open-profile-chip]');
    if (!profileTarget) return;
    profileTarget.setAttribute('role', 'button');
    profileTarget.setAttribute('tabindex', '0');
    profileTarget.onclick = goProfile;
    profileTarget.onkeydown = (event) => {
      if (event.key === 'Enter' || event.key === ' ') {
        event.preventDefault();
        goProfile();
      }
    };
  };

  // Revert Profile pages to the pre-inbox versions where possible.
  if (typeof v27BaseUserProfile !== 'undefined') {
    userProfile = function v32UserProfile() {
      v27BaseUserProfile();
    };
  }
  if (typeof v27BaseAccountSettings !== 'undefined') {
    accountSettings = function v32AccountSettings(includeSystemSettings = false, sourcePage = 'settings') {
      v27BaseAccountSettings(includeSystemSettings, sourcePage);
    };
  }

  // Manage Users without Message button.
  adminUsers = function v32AdminUsers() {
    setTitle('Manage Users', 'Administrator Panel');
    const users = read('users').filter((u) => u.role === 'user');
    content().dataset.sectionized = 'true';
    content().innerHTML = `
      <div class="toolbar">
        <div>
          <p class="eyebrow">Customer Information</p>
          <h2>Registered user accounts</h2>
          <p class="muted">View user profile details and activate or deactivate accounts.</p>
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
              <td>${escapeHtml(u.phone || '-')}</td>
              <td>${statusPill(u.status)}</td>
              <td>${new Date(u.createdAt || Date.now()).toLocaleDateString()}</td>
              <td>
                <div class="row-actions compact-actions">
                  <button class="btn btn-soft" data-view-user="${u.id}">View Details</button>
                  <button class="btn ${u.status === 'Active' ? 'btn-danger-soft' : 'btn-soft'}" data-toggle-user="${u.id}">${u.status === 'Active' ? 'Deactivate' : 'Activate'}</button>
                </div>
              </td>
            </tr>
          `).join('') || `<tr><td colspan="6">No user found.</td></tr>`}
        </tbody>
      </table></div></div>
    `;
    bindSearch(() => adminUsers());
    content().querySelectorAll('[data-view-user]').forEach((btn) => btn.addEventListener('click', () => {
      const user = read('users').find((item) => item.id === btn.dataset.viewUser);
      if (user) openProfileDetailModal(user);
    }));
    content().querySelectorAll('[data-toggle-user]').forEach((btn) => {
      btn.addEventListener('click', () => {
        const all = read('users');
        const user = all.find((u) => u.id === btn.dataset.toggleUser);
        if (!user) return;
        const nextStatus = user.status === 'Active' ? 'Inactive' : 'Active';
        confirmAction({
          title: `${nextStatus === 'Inactive' ? 'Deactivate' : 'Activate'} User`,
          message: `Are you sure you want to ${nextStatus === 'Inactive' ? 'deactivate' : 'activate'} ${user.fullName}?`,
          confirmText: nextStatus === 'Inactive' ? 'Deactivate User' : 'Activate User',
          danger: nextStatus === 'Inactive',
          onConfirm: async () => {
            user.status = nextStatus;
            write('users', all);
            adminUsers();
            toast('User status updated.');
          },
        });
      });
    });
  };

  // Main admin account control without Chat button.
  adminAccountManagementSection = function v32AdminAccountManagementSection(currentUser) {
    if (!isPrimaryAdmin(currentUser)) return '';
    const admins = getAdminUsers();
    return `
      <div class="card settings-system-card strong-border-card admin-account-card">
        <div class="card-top">
          <div>
            <p class="eyebrow">Admin Account Control</p>
            <h2>Administrator accounts</h2>
            <p class="muted">Only the main admin can register, view, edit or deactivate additional admin accounts.</p>
          </div>
          <div class="row-actions">
            <button class="btn btn-warning-soft" type="button" data-inactive-admin-records>Inactive Admin Records</button>
            <button class="btn btn-primary" type="button" data-add-admin-account>Register Admin</button>
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
                  ${!isPrimaryAdmin(admin) ? `
                    <div class="row-actions compact-actions">
                      <button class="btn btn-soft" type="button" data-view-admin-account="${admin.id}">View Profile</button>
                      <button class="btn btn-soft" type="button" data-edit-admin-account="${admin.id}">Edit</button>
                    </div>
                  ` : '<span class="muted">Protected</span>'}
                </td>
              </tr>
            `).join('')}
          </tbody>
        </table></div></div>
      </div>
    `;
  };

  bindAdminAccountManagement = function v32BindAdminAccountManagement() {
    const addBtn = content().querySelector('[data-add-admin-account]');
    if (addBtn) addBtn.addEventListener('click', () => openAdminAccountForm());
    const inactiveRecordsBtn = content().querySelector('[data-inactive-admin-records]');
    if (inactiveRecordsBtn) inactiveRecordsBtn.addEventListener('click', openInactiveAdminRecordsModal);
    content().querySelectorAll('[data-view-admin-account]').forEach((btn) => btn.addEventListener('click', () => {
      const admin = read('users').find((user) => user.id === btn.dataset.viewAdminAccount && user.role === 'admin');
      if (admin) openProfileDetailModal(admin);
    }));
    content().querySelectorAll('[data-edit-admin-account]').forEach((btn) => {
      btn.addEventListener('click', () => {
        const admin = read('users').find((user) => user.id === btn.dataset.editAdminAccount && user.role === 'admin');
        if (admin) openAdminAccountForm(admin);
      });
    });
  };

  // Clean up any old notification UI that might still be in the DOM after cache/hot reload.
  document.addEventListener('DOMContentLoaded', () => {
    document.querySelectorAll('[data-open-notifications], .notification-top-btn, .message-inbox-card').forEach((el) => el.remove());
  });
})();

/* =========================================================
   V33 PATCH - Tee Time save fix + expired slot auto clean
   - Fixes Add/Save Time Slot form that was calling old helper names
   - Removes expired tee time slots from local cache and Supabase when pages render
   ========================================================= */


</script>
<?php
}

function upsi_section_admin_trainers_module(): void
{
?>
<script>
window.UPSI_SECTION_MODULES = window.UPSI_SECTION_MODULES || {};
window.UPSI_SECTION_MODULES["admin_trainers"] = {
  title: "Admin Trainers",
  runtimeChunk: '9/22',
  functions: ["adminTrainers", "openTrainerForm"]
};
</script>
<?php
}

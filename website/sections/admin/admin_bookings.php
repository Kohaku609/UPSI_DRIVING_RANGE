<?php
/**
 * admin_bookings.php
 * Bahagian: Admin Bookings
 *
 * V108: CSS dan JavaScript runtime dibahagikan ke semua section.
 * Jadi home_page.php tidak lagi memegang semua coding sistem.
 *
 * Runtime chunk: 11/22
 * Fungsi berkaitan untuk presentation: adminBookings, bookingTable
 */


function upsi_section_admin_bookings_styles(): void
{
?>
<style>
/* =========================================================
   V108 CSS chunk 11/22
   Bahagian: Admin Bookings
   ========================================================= */
.chat-bubble > div {
  display: flex;
  align-items: center;
  justify-content: space-between;
  gap: 12px;
  color: var(--muted);
}

.chat-bubble h4 {
  margin: 8px 0 6px;
  color: var(--dark-green);
}

.chat-reply-form {
  margin-top: 16px;
  padding-top: 16px;
  border-top: 1px solid rgba(15,81,50,0.12);
}

@media (max-width: 860px) {
  .tee-search-grid {
    grid-template-columns: 1fr;
  }
  .pagination-row {
    flex-direction: column;
  }
  .event-month-break {
    min-width: 100%;
    justify-content: flex-start;
  }
}

body[data-theme="dark"] .toolbar,
body[data-theme="dark"] .table-card,
body[data-theme="dark"] .card,
body[data-theme="dark"] .stat-card,
body[data-theme="dark"] .schedule-help-card,
body[data-theme="dark"] .admin-range-preview,
body[data-theme="dark"] .price-list-panel,
body[data-theme="dark"] .section-subhead,
body[data-theme="dark"] .content-section,
body[data-theme="dark"] .category-section,
body[data-theme="dark"] .settings-system-card,
body[data-theme="dark"] .account-card,
body[data-theme="dark"] .profile-preview-card,
body[data-theme="dark"] .mini-profile-card,
body[data-theme="dark"] .chat-bubble,
body[data-theme="dark"] .event-month-break span {
  background: #0f241b !important;
  border-color: rgba(167, 243, 208, 0.22) !important;
  color: #e9fff3 !important;
}

body[data-theme="dark"] .content-section-header,
body[data-theme="dark"] .mobile-booking-heading,
body[data-theme="dark"] .event-carousel-head {
  background: #123620 !important;
  border-color: rgba(167, 243, 208, 0.18) !important;
  color: #effff6 !important;
}

body[data-theme="dark"] .toolbar h2,
body[data-theme="dark"] .card h2,
body[data-theme="dark"] .card h3,
body[data-theme="dark"] .table-card strong,
body[data-theme="dark"] .meta-list strong,
body[data-theme="dark"] .chat-bubble h4,
body[data-theme="dark"] .event-month-break,
body[data-theme="dark"] .section-subhead h2 {
  color: #ffffff !important;
}

body[data-theme="dark"] .muted,
body[data-theme="dark"] .toolbar p,
body[data-theme="dark"] .card p,
body[data-theme="dark"] .meta-list span,
body[data-theme="dark"] .mini-profile-card span,
body[data-theme="dark"] .chat-bubble small {
  color: #c7f5db !important;
}

body[data-theme="dark"] input,
body[data-theme="dark"] select,
body[data-theme="dark"] textarea {
  background: #081c14 !important;
  color: #f2fff7 !important;
  border-color: rgba(167, 243, 208, 0.28) !important;
}

body[data-theme="dark"] input::placeholder,
body[data-theme="dark"] textarea::placeholder {
  color: #9fd8b7 !important;
}

body[data-theme="dark"] table th {
  background: #0b1f16 !important;
  color: #f2fff7 !important;
}

body[data-theme="dark"] table td {
  border-color: rgba(167, 243, 208, 0.12) !important;
  color: #e9fff3 !important;
}

body[data-theme="dark"] .qr-download-wrap,
body[data-theme="dark"] .qr-code {
  background: #f7fff8 !important;
  color: #0f5132 !important;
}

/* =========================================================
   V28 polishing fixes
   ========================================================= */
.profile-card .avatar,
.profile-summary-card .avatar,
.profile-detail-head .avatar,
.profile-card [class*="avatar"],
.profile-summary-card [class*="avatar"] {
  overflow: hidden;
  border-radius: 28px;
}
.profile-card .avatar img,
.profile-summary-card .avatar img,
.profile-detail-head .avatar img,
.avatar img,
.profile-chip .avatar img {
  width: 100%;
  height: 100%;
  object-fit: cover;
  display: block;
}
.profile-chip .avatar {
  overflow: hidden;
  flex: 0 0 auto;
}

.event-carousel-track.v28-event-track {
  align-items: stretch;
  justify-content: flex-start;
  gap: 18px;
}
.event-month-break.v28-month-break {
  flex: 0 0 100%;
  margin: 0 0 -4px;
  display: flex;
  justify-content: flex-start;
  align-items: center;
}
.event-month-break.v28-month-break span {
  margin-left: 0;
}
.event-admin-actions {
  margin-top: 14px;
  justify-content: flex-start;
}

.scrollable-modal-form,
.v28-event-form {
  max-height: min(70vh, 680px);
  overflow-y: auto;
  padding-right: 10px;
  scrollbar-width: thin;
}
.scrollable-modal-form::-webkit-scrollbar,
.v28-event-form::-webkit-scrollbar {
  width: 10px;
}
.scrollable-modal-form::-webkit-scrollbar-thumb,
.v28-event-form::-webkit-scrollbar-thumb {
  background: rgba(15, 81, 50, .35);
  border-radius: 999px;
}
.custom-time-picker,
.custom-date-picker {
  width: 100%;
  display: grid;
  grid-template-columns: repeat(3, minmax(120px, 1fr));
  gap: 12px;
  margin-top: 8px;
  align-items: end;
}
.custom-time-picker .time-preview {
  grid-column: 1 / -1;
  display: block;
  padding: 12px 16px;
  border: 1px solid var(--border);
  border-radius: 16px;
  background: var(--mint);
  color: var(--green);
  font-size: 20px;
  text-align: center;
}
.scroll-select {
  min-height: 132px;
  overflow-y: auto;
  cursor: pointer;
}
.scroll-select option {
  padding: 8px 10px;
  border-radius: 8px;
}
body.dark-mode .custom-time-picker .time-preview,
body.dark-mode .custom-date-picker select,
body.dark-mode .custom-time-picker select {
  background: #071c13;
  color: #f8fff8;
  border-color: rgba(92, 242, 159, .25);
}
body.dark-mode .scroll-select option {
  background: #071c13;
  color: #f8fff8;
}

.notification-image[src=""],
.notification-image:not([src]) {
  display: none !important;
}
.chat-thread {
  max-height: 420px;
  overflow-y: auto;
  padding-right: 12px;
}
.message-inbox-card [data-refresh-inbox] {
  margin-top: 12px;
}


</style>
<?php
}

function upsi_section_admin_bookings_scripts(): void
{
?>
<script>
/* =========================================================
   V108 JavaScript chunk 11/22
   Bahagian: Admin Bookings
   ========================================================= */
(function teeTimeV38RealSaveFix() {
  function pad2(value) { return String(value).padStart(2, '0'); }
  function todayIso() {
    const d = new Date();
    return `${d.getFullYear()}-${pad2(d.getMonth() + 1)}-${pad2(d.getDate())}`;
  }
  function futureDateIso(days = 1) {
    const d = new Date();
    d.setDate(d.getDate() + days);
    return `${d.getFullYear()}-${pad2(d.getMonth() + 1)}-${pad2(d.getDate())}`;
  }
  function nextFutureTimeInput() {
    const d = new Date();
    d.setMinutes(d.getMinutes() + 45);
    const rounded = Math.ceil(d.getMinutes() / 15) * 15;
    if (rounded >= 60) {
      d.setHours(d.getHours() + 1);
      d.setMinutes(0);
    } else d.setMinutes(rounded);
    return `${pad2(d.getHours())}:${pad2(d.getMinutes())}`;
  }
  function inputToDisplayTime(value = '09:00') {
    const [hRaw = '09', mRaw = '00'] = String(value || '09:00').split(':');
    let hour = Number(hRaw || 9);
    const suffix = hour >= 12 ? 'PM' : 'AM';
    hour = hour % 12 || 12;
    return `${hour}:${pad2(Number(mRaw || 0))} ${suffix}`;
  }
  function displayToInputTime(value = '09:00') {
    if (/^\d{2}:\d{2}$/.test(String(value))) return value;
    const match = String(value || '').match(/(\d{1,2}):(\d{2})\s*(AM|PM)/i);
    if (!match) return '09:00';
    let hour = Number(match[1]);
    const minute = match[2];
    const suffix = match[3].toUpperCase();
    if (suffix === 'PM' && hour !== 12) hour += 12;
    if (suffix === 'AM' && hour === 12) hour = 0;
    return `${pad2(hour)}:${minute}`;
  }
  function toDbTime(displayTime) {
    return `${displayToInputTime(displayTime)}:00`;
  }
  function isPastSlot(date, displayTime) {
    const d = new Date(`${date}T${displayToInputTime(displayTime)}:00`);
    return d.getTime() <= Date.now();
  }
  function localTypeToDb(type) {
    if (type === 'driving') return 'driving_range';
    if (type === 'trainer') return 'trainer';
    return 'both';
  }
  function dbTypeToLocal(type) {
    if (type === 'driving_range') return 'driving';
    if (type === 'trainer') return 'trainer';
    return 'both';
  }
  function dbToLocalSlot(row = {}) {
    return {
      id: row.id,
      date: row.slot_date,
      time: typeof dbTimeToLocal === 'function' ? dbTimeToLocal(row.slot_time) : inputToDisplayTime(String(row.slot_time || '09:00').slice(0,5)),
      targetType: dbTypeToLocal(row.slot_type),
      targetId: row.slot_type === 'trainer' && row.trainer_id ? row.trainer_id : 'all',
      status: row.status === 'available' ? 'Available' : 'Unavailable',
    };
  }
  function slotKey(slot = {}) {
    return [slot.date || '', displayToInputTime(slot.time || '09:00'), slot.targetType || 'both', slot.targetId || 'all'].join('|');
  }
  function mergeSlots(existing = [], incoming = []) {
    const map = new Map();
    (typeof normaliseScheduleSlots === 'function' ? normaliseScheduleSlots(existing) : existing).forEach((slot) => map.set(slotKey(slot), slot));
    incoming.forEach((slot) => map.set(slotKey(slot), slot));
    const output = [...map.values()];
    return typeof sortByDateTime === 'function' ? output.sort(sortByDateTime) : output;
  }
  function slotPayload(slot = {}) {
    const dbType = localTypeToDb(slot.targetType || 'both');
    const payload = {
      slot_date: slot.date,
      slot_time: toDbTime(slot.time),
      slot_type: dbType,
      trainer_id: dbType === 'trainer' && typeof isUuid === 'function' && isUuid(slot.targetId) ? slot.targetId : null,
      status: slot.status === 'Available' ? 'available' : 'inactive',
    };
    return payload;
  }
  async function saveSlotToSupabase(slot, editSlotId = null) {
    if (!SUPABASE_MODE || !supabaseClient) return slot;
    const payload = slotPayload(slot);
    let result;
    if (editSlotId && typeof isUuid === 'function' && isUuid(editSlotId)) {
      result = await supabaseClient.from(DB_TABLES.teeSlots).update(payload).eq('id', editSlotId).select('*').single();
    } else {
      result = await supabaseClient.from(DB_TABLES.teeSlots).insert(payload).select('*').single();
    }
    if (result.error) {
      console.error('V38 tee_slots save error:', result.error, payload);
      throw new Error(result.error.message || 'Supabase blocked tee time save.');
    }
    return result.data ? dbToLocalSlot(result.data) : slot;
  }
  async function saveSlots(slots, editSlotId = null) {
    const saved = [];
    for (const slot of slots) {
      const savedSlot = await saveSlotToSupabase(slot, editSlotId);
      saved.push(savedSlot);
    }
    return saved;
  }

  openTimeForm = function openTimeFormV38(slot = null) {
    const courses = typeof getDrivingCourses === 'function' ? getDrivingCourses(read('courses')) : [];
    const trainers = read('trainers') || [];
    const isEdit = Boolean(slot);
    const today = todayIso();
    const tomorrow = futureDateIso(1);
    const nextWeek = futureDateIso(7);
    const defaultDate = isEdit ? (slot.date || today) : tomorrow;
    const defaultTime = isEdit ? displayToInputTime(slot.time || '09:00') : nextFutureTimeInput();
    const selectedType = slot?.targetType || 'both';
    const selectedTarget = slot?.targetId || 'all';

    openModal(`
      <div class="modal-head">
        <div>
          <p class="eyebrow">${isEdit ? 'Edit Tee Time' : 'New Tee Time'}</p>
          <h2>${isEdit ? 'Update Available Date & Time' : 'Add Time Slot'}</h2>
          <p class="muted">Pilih tarikh/masa akan datang. Slot masa lepas tidak akan disimpan.</p>
        </div>
        <button class="close-btn" data-close-modal>&times;</button>
      </div>
      <form id="timeFormV38" class="form-grid compact-modal-form">
        ${isEdit ? `
          <label class="wide">Date
            <input name="date" type="date" min="${today}" value="${escapeHtml(defaultDate)}" required>
          </label>
        ` : `
          <label>Date Mode
            <select name="dateMode" data-date-mode>
              <option value="single">Single date</option>
              <option value="range">Date range / Bulk add</option>
            </select>
          </label>
          <label data-single-date>Single Date
            <input name="date" type="date" min="${today}" value="${escapeHtml(defaultDate)}" required>
          </label>
          <label class="hidden" data-range-start>Start Date
            <input name="startDate" type="date" min="${today}" value="${escapeHtml(tomorrow)}">
          </label>
          <label class="hidden" data-range-end>End Date
            <input name="endDate" type="date" min="${today}" value="${escapeHtml(nextWeek)}">
          </label>
        `}
        <label>Booking Type
          <select name="targetType" data-slot-type required>
            <option value="both" ${selectedType === 'both' ? 'selected' : ''}>Driving Range & Trainer</option>
            <option value="driving" ${selectedType === 'driving' ? 'selected' : ''}>Driving Range Only</option>
            <option value="trainer" ${selectedType === 'trainer' ? 'selected' : ''}>Trainer Only</option>
          </select>
        </label>
        <label class="wide">Target
          <select name="targetId" data-slot-target required></select>
        </label>
        <label>Time
          <input name="time" type="time" value="${escapeHtml(defaultTime)}" required>
        </label>
        <label>Status
          <select name="status">
            <option value="Available" ${slot?.status !== 'Unavailable' ? 'selected' : ''}>Available</option>
            <option value="Unavailable" ${slot?.status === 'Unavailable' ? 'selected' : ''}>Unavailable</option>
          </select>
        </label>
        <button class="btn btn-primary wide" type="submit">Save Time Slot</button>
      </form>
    `);

    const form = document.getElementById('timeFormV38');
    if (!form) return;
    const mode = form.querySelector('[data-date-mode]');
    function updateMode() {
      if (!mode) return;
      const range = mode.value === 'range';
      form.querySelector('[data-single-date]')?.classList.toggle('hidden', range);
      form.querySelector('[data-range-start]')?.classList.toggle('hidden', !range);
      form.querySelector('[data-range-end]')?.classList.toggle('hidden', !range);
      if (form.date) form.date.required = !range;
      if (form.startDate) form.startDate.required = range;
      if (form.endDate) form.endDate.required = range;
    }
    function updateTargets() {
      const type = form.querySelector('[data-slot-type]').value;
      const target = form.querySelector('[data-slot-target]');
      let html = '<option value="all">Driving Range & All Trainers</option>';
      if (type === 'driving') {
        html = courses.map((c) => `<option value="${c.id}">${escapeHtml(c.name || 'Driving Range')}</option>`).join('') || '<option value="all">All Driving Ranges</option>';
      }
      if (type === 'trainer') {
        html = trainers.map((t) => `<option value="${t.id}">${escapeHtml(t.name || t.fullName || 'Trainer')}</option>`).join('') || '<option value="all">All Trainers</option>';
      }
      target.innerHTML = html;
      target.value = [...target.options].some((opt) => opt.value === selectedTarget) ? selectedTarget : 'all';
    }
    mode?.addEventListener('change', updateMode);
    form.querySelector('[data-slot-type]')?.addEventListener('change', updateTargets);
    updateMode();
    updateTargets();

    form.addEventListener('submit', async (event) => {
      event.preventDefault();
      const submitBtn = form.querySelector('button[type="submit"]');
      submitBtn.disabled = true;
      submitBtn.textContent = 'Saving...';
      try {
        const data = new FormData(form);
        const base = {
          time: inputToDisplayTime(data.get('time')),
          targetType: data.get('targetType') || 'both',
          targetId: data.get('targetId') || 'all',
          status: data.get('status') || 'Available',
        };
        let selectedDates = [];
        if (isEdit) selectedDates = [data.get('date')].filter(Boolean);
        else if (data.get('dateMode') === 'range') selectedDates = datesBetween(data.get('startDate'), data.get('endDate'));
        else selectedDates = [data.get('date')].filter(Boolean);

        const validDates = selectedDates.filter((date) => !isPastSlot(date, base.time));
        if (!validDates.length) {
          toast('Pilih tarikh dan masa akan datang. Slot masa lepas tidak akan disimpan.');
          return;
        }
        const slots = validDates.map((date) => ({
          id: isEdit ? slot.id : makeId('S'),
          date,
          ...base,
        }));

        const saved = await saveSlots(slots, isEdit ? slot.id : null);
        const settings = read('settings') || {};
        let existing = typeof normaliseScheduleSlots === 'function' ? normaliseScheduleSlots(settings.scheduleSlots || []) : (settings.scheduleSlots || []);
        if (isEdit) existing = existing.filter((s) => s.id !== slot.id);
        settings.scheduleSlots = mergeSlots(existing, saved);
        setLocalData('settings', settings);

        closeModal();
        state.teePage = Math.max(1, Math.ceil((settings.scheduleSlots || []).length / 8));
        adminTimes();
        toast(isEdit ? 'Tee time slot updated.' : `${saved.length} tee time slot(s) saved.`);
      } catch (err) {
        console.error('V38 Save Time Slot failed:', err);
        toast(err.message || 'Failed to save time slot. Check Console.');
      } finally {
        submitBtn.disabled = false;
        submitBtn.textContent = 'Save Time Slot';
      }
    });
  };
})();

/* V39 Tee Time Delete Supabase Fix
   - Remove button deletes tee_slots from Supabase first, then local cache.
   - Prevents deleted local cached slots from being recreated after refresh.
*/
(function teeTimeV39DeleteFix() {
  function pad2(value) { return String(value).padStart(2, '0'); }
  function displayToInputTimeV39(value = '09:00') {
    if (/^\d{2}:\d{2}$/.test(String(value))) return value;
    const match = String(value || '').match(/(\d{1,2}):(\d{2})\s*(AM|PM)/i);
    if (!match) return '09:00';
    let hour = Number(match[1]);
    const minute = match[2];
    const suffix = match[3].toUpperCase();
    if (suffix === 'PM' && hour !== 12) hour += 12;
    if (suffix === 'AM' && hour === 12) hour = 0;
    return `${pad2(hour)}:${minute}`;
  }
  function toDbTimeV39(displayTime) {
    return `${displayToInputTimeV39(displayTime)}:00`;
  }
  function localTypeToDbV39(type) {
    if (type === 'driving') return 'driving_range';
    if (type === 'trainer') return 'trainer';
    return 'both';
  }
  function teeSlotDeleteKey(slot = {}) {
    return [slot.id || '', slot.date || '', displayToInputTimeV39(slot.time || '09:00'), slot.targetType || 'both', slot.targetId || 'all'].join('|');
  }
  function readDeletedTeeKeys() {
    try { return JSON.parse(localStorage.getItem('deletedTeeSlotKeys') || '[]'); } catch (_) { return []; }
  }
  function rememberDeletedTeeSlot(slot) {
    const list = readDeletedTeeKeys();
    const key = teeSlotDeleteKey(slot);
    if (key && !list.includes(key)) list.push(key);
    localStorage.setItem('deletedTeeSlotKeys', JSON.stringify(list.slice(-300)));
  }
  function isDeletedTeeSlot(slot) {
    return readDeletedTeeKeys().includes(teeSlotDeleteKey(slot));
  }
  function cleanLocalSlotsAfterDelete(slotId) {
    const settings = read('settings') || {};
    const current = typeof normaliseScheduleSlots === 'function'
      ? normaliseScheduleSlots(settings.scheduleSlots || [])
      : (settings.scheduleSlots || []);
    settings.scheduleSlots = current.filter((slot) => slot.id !== slotId && !isDeletedTeeSlot(slot));
    setLocalData('settings', settings);
  }
  async function deleteTeeSlotFromSupabase(slot) {
    if (!SUPABASE_MODE || !supabaseClient || !DB_TABLES?.teeSlots || !slot) return true;

    // Preferred: delete by UUID id returned by Supabase.
    if (typeof isUuid === 'function' && isUuid(slot.id)) {
      const byId = await supabaseClient.from(DB_TABLES.teeSlots).delete().eq('id', slot.id).select('id');
      if (!byId.error) return true;
      console.error('V39 tee_slots delete by id error:', byId.error, slot);
      throw new Error(byId.error.message || 'Supabase blocked tee time delete.');
    }

    // Fallback for older local/cache slots with non-UUID ids: delete by matching data.
    const dbType = localTypeToDbV39(slot.targetType || 'both');
    let query = supabaseClient
      .from(DB_TABLES.teeSlots)
      .delete()
      .eq('slot_date', slot.date)
      .eq('slot_time', toDbTimeV39(slot.time))
      .eq('slot_type', dbType);

    if (dbType === 'trainer' && typeof isUuid === 'function' && isUuid(slot.targetId)) {
      query = query.eq('trainer_id', slot.targetId);
    }

    const result = await query.select('id');
    if (result.error) {
      console.error('V39 tee_slots delete fallback error:', result.error, slot);
      throw new Error(result.error.message || 'Supabase blocked tee time delete.');
    }
    return true;
  }

  const previousGetScheduleSlots = typeof getScheduleSlots === 'function' ? getScheduleSlots : null;
  if (previousGetScheduleSlots) {
    getScheduleSlots = function getScheduleSlotsV39() {
      return previousGetScheduleSlots().filter((slot) => !isDeletedTeeSlot(slot));
    };
  }

  adminTimes = function adminTimesV39() {
    if (typeof cleanupExpiredTeeSlotsV33 === 'function') cleanupExpiredTeeSlotsV33(false);
    setTitle('Tee Time Availability', 'Administrator Panel');
    const allSlots = getScheduleSlots().sort(sortByDateTime);
    const filteredSlots = typeof searchableSlotRows === 'function' ? searchableSlotRows(allSlots) : allSlots;
    const perPage = 8;
    const maxPage = Math.max(1, Math.ceil(filteredSlots.length / perPage));
    state.teePage = Math.min(Math.max(1, Number(state.teePage || 1)), maxPage);
    const start = (state.teePage - 1) * perPage;
    const pageSlots = filteredSlots.slice(start, start + perPage);

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
          <h3>${allSlots.filter((slot) => slotDisplayStatus(slot) === 'Available').length} available slots</h3>
          <p>${filteredSlots.length} slot record${filteredSlots.length === 1 ? '' : 's'} match the current search.</p>
        </article>
      </div>
      <div class="toolbar tee-filter-toolbar">
        <div><p class="eyebrow">Search Tee Time</p><h2>Filter slot table</h2></div>
        ${typeof teeSearchInputMarkup === 'function' ? teeSearchInputMarkup() : ''}
      </div>
      <div class="table-card schedule-table-card">
        <div class="table-wrap"><table>
          <thead><tr><th>Date</th><th>Time</th><th>For</th><th>Target</th><th>Status</th><th>Action</th></tr></thead>
          <tbody>
            ${pageSlots.map((slot) => `
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
        <div class="pagination-row">
          <button class="btn btn-soft" type="button" data-tee-page="prev" ${state.teePage <= 1 ? 'disabled' : ''}>← Previous</button>
          <span>Page <strong>${state.teePage}</strong> of <strong>${maxPage}</strong> • Showing ${pageSlots.length} of ${filteredSlots.length}</span>
          <button class="btn btn-soft" type="button" data-tee-page="next" ${state.teePage >= maxPage ? 'disabled' : ''}>Next →</button>
        </div>
      </div>
    `;

    content().querySelector('[data-add-time]')?.addEventListener('click', () => openTimeForm());
    const aspect = content().querySelector('[data-tee-search-aspect]');
    const value = content().querySelector('[data-tee-search-value]');
    if (aspect) aspect.addEventListener('change', () => { state.teeSearchAspect = aspect.value; state.teeSearchValue = ''; state.teePage = 1; adminTimes(); });
    if (value) value.addEventListener('input', () => { state.teeSearchValue = value.value; state.teePage = 1; adminTimes(); });
    if (value && value.tagName === 'SELECT') value.addEventListener('change', () => { state.teeSearchValue = value.value; state.teePage = 1; adminTimes(); });
    content().querySelector('[data-clear-tee-search]')?.addEventListener('click', () => { state.teeSearchAspect = 'all'; state.teeSearchValue = ''; state.teePage = 1; adminTimes(); });
    content().querySelectorAll('[data-tee-page]').forEach((btn) => btn.addEventListener('click', () => {
      state.teePage += btn.dataset.teePage === 'next' ? 1 : -1;
      adminTimes();
    }));
    content().querySelectorAll('[data-edit-time]').forEach((btn) => btn.addEventListener('click', () => {
      const slot = getScheduleSlots().find((item) => item.id === btn.dataset.editTime);
      openTimeForm(slot);
    }));
    content().querySelectorAll('[data-delete-time]').forEach((btn) => btn.addEventListener('click', () => {
      const slotId = btn.dataset.deleteTime;
      const slot = getScheduleSlots().find((item) => item.id === slotId);
      confirmAction({
        title: 'Remove Tee Time Slot',
        message: `Are you sure you want to remove ${slot ? `${formatDateDisplay(slot.date)} at ${slot.time}` : 'this'} tee time slot? This will delete the record from Supabase too.`,
        confirmText: 'Remove Slot',
        danger: true,
        onConfirm: async () => {
          try {
            if (slot) rememberDeletedTeeSlot(slot);
            await deleteTeeSlotFromSupabase(slot);
            cleanLocalSlotsAfterDelete(slotId);
            state.teePage = 1;
            adminTimes();
            toast('Tee time slot deleted from website and Supabase.');
          } catch (err) {
            console.error('V39 Tee Time delete failed:', err);
            toast(err.message || 'Failed to delete tee time slot. Check Console.');
          }
        },
      });
    }));
  };
})();

/* V40 App Compatibility Patch
   Aligns the website data model with the latest Flutter app without changing the app.
   Adds lanes, duration, start/end time, Pay at Counter, trainer class type, profile age/birthday,
   and feedback category support for Supabase.
*/
(function v40AppCompatibilityPatch() {
  DB_TABLES.lanes = 'driving_range_lanes';
  const APP_LANES = ['KD01','KD02','KD03','KD04','KD05','KD06','KD07','KD08','KD09','KD10'];
  const APP_DURATIONS = [
    { label: '1 hour', minutes: 60 },
    { label: '1 hour 30 minutes', minutes: 90 },
    { label: '2 hours', minutes: 120 },
  ];
  const PAYMENT_METHODS = ['QR Payment', 'Pay at Counter'];
  const TRAINING_CLASS_TYPES = ['Beginner', 'Intermediate', 'Amateur', 'Professional'];

  function cleanDate(value) {
    if (!value) return '';
    return String(value).slice(0, 10);
  }

  function parseClockToMinutes(value = '') {
    const text = String(value || '').trim();
    const m12 = text.match(/^(\d{1,2}):(\d{2})\s*(AM|PM)$/i);
    if (m12) {
      let h = Number(m12[1]);
      const min = Number(m12[2]);
      const ap = m12[3].toUpperCase();
      if (ap === 'PM' && h !== 12) h += 12;
      if (ap === 'AM' && h === 12) h = 0;
      return h * 60 + min;
    }
    const m24 = text.match(/^(\d{1,2}):(\d{2})(?::\d{2})?$/);
    if (m24) return Number(m24[1]) * 60 + Number(m24[2]);
    return 0;
  }

  function minutesToDisplay(total) {
    let mins = Number(total || 0) % (24 * 60);
    if (mins < 0) mins += 24 * 60;
    let h = Math.floor(mins / 60);
    const m = mins % 60;
    const ap = h >= 12 ? 'PM' : 'AM';
    h = h % 12;
    if (h === 0) h = 12;
    return `${h}:${String(m).padStart(2, '0')} ${ap}`;
  }

  function addMinutesToDisplayTime(start, minutes) {
    return minutesToDisplay(parseClockToMinutes(start) + Number(minutes || 0));
  }

  function localTimeToDbV40(displayTime) {
    const mins = parseClockToMinutes(displayTime);
    const h = String(Math.floor(mins / 60)).padStart(2, '0');
    const m = String(mins % 60).padStart(2, '0');
    return `${h}:${m}:00`;
  }

  function getProfileDateValue(value) {
    if (!value) return '';
    return String(value).slice(0, 10);
  }

  const baseProfileToUserV40 = profileToUser;
  profileToUser = function profileToUserV40(profile = {}) {
    const user = baseProfileToUserV40(profile);
    user.age = profile.age ? String(profile.age) : (user.age || '');
    user.birthday = getProfileDateValue(profile.birthday || user.birthday || '');
    user.loginProvider = profile.login_provider || user.loginProvider || 'Email';
    return user;
  };

  createSupabaseAuthAccount = async function createSupabaseAuthAccountV40({ fullName, email, phone, password, role = 'user', status = 'active', address = '', age = null, birthday = null, loginProvider = 'Email' }, { restoreSession = null } = {}) {
    if (!SUPABASE_MODE) return { data: null, profile: null, error: new Error('Supabase client is not available.') };
    const safeEmail = String(email || '').trim().toLowerCase();
    const safePassword = String(password || '');
    const signUpPayload = {
      email: safeEmail,
      password: safePassword,
      options: {
        data: {
          full_name: String(fullName || '').trim(),
          phone: String(phone || '').trim(),
          role: 'user',
        },
      },
    };
    const { data, error: signUpError } = await supabaseClient.auth.signUp(signUpPayload);
    if (signUpError) {
      if (restoreSession) await restoreSupabaseSession(restoreSession);
      return { data, profile: null, error: signUpError };
    }
    const authUserId = data?.user?.id;
    if (!authUserId) {
      if (restoreSession) await restoreSupabaseSession(restoreSession);
      return { data, profile: null, error: null };
    }
    const profilePayload = {
      user_id: authUserId,
      full_name: String(fullName || '').trim(),
      email: safeEmail,
      phone: String(phone || '').trim() || null,
      address: String(address || '').trim() || null,
      age: age ? Number(age) : null,
      birthday: birthday || null,
      login_provider: loginProvider || 'Email',
      role,
      status,
    };
    const { data: profile, error: profileError } = await supabaseClient
      .from(DB_TABLES.profiles)
      .upsert(profilePayload, { onConflict: 'email' })
      .select()
      .maybeSingle();
    if (restoreSession) await restoreSupabaseSession(restoreSession);
    return { data, profile, error: profileError };
  };

  updateProfileInSupabaseFromUser = async function updateProfileInSupabaseFromUserV40(user = {}) {
    if (!SUPABASE_MODE || !user) return { data: null, error: null };
    const payload = {
      full_name: user.fullName || null,
      phone: user.phone || null,
      address: user.address || null,
      profile_image_url: user.profileImage || null,
      age: user.age ? Number(user.age) : null,
      birthday: user.birthday || null,
      login_provider: user.loginProvider || 'Email',
    };
    let query = supabaseClient.from(DB_TABLES.profiles).update(payload);
    if (user.userId) query = query.eq('user_id', user.userId);
    else if (user.id && isUuid(user.id)) query = query.eq('id', user.id);
    else if (user.email) query = query.eq('email', user.email);
    const { data, error } = await query.select().maybeSingle();
    return { data, error };
  };

  saveCurrentProfileToSupabase = async function saveCurrentProfileToSupabaseV40({ fullName, phone, age, birthday, address, loginProvider = 'Email', profileImage }) {
    const user = getFreshSessionUser();
    if (!user) return null;
    user.fullName = String(fullName || '').trim();
    user.phone = String(phone || '').trim();
    user.age = age ? String(age) : '';
    user.birthday = birthday || '';
    user.address = String(address || '').trim();
    user.loginProvider = loginProvider || user.loginProvider || 'Email';
    if (profileImage !== undefined) user.profileImage = profileImage;
    const { data, error } = await updateProfileInSupabaseFromUser(user);
    if (error) {
      toast(error.message || 'Failed to update profile in Supabase. Run V40 SQL migration if profile columns are missing.');
      return null;
    }
    const freshUser = data ? profileToUser(data) : user;
    updateLocalUser(freshUser);
    setSession(freshUser);
    return freshUser;
  };

  async function loadLanesFromSupabaseV40() {
    if (!SUPABASE_MODE || !supabaseClient) return;
    try {
      const { data, error } = await supabaseClient
        .from(DB_TABLES.lanes)
        .select('*')
        .order('lane_code', { ascending: true });
      if (error) return console.warn('V40 lanes not loaded. Run V40 SQL migration if needed.', error.message || error);
      const laneCodes = (data || []).filter((lane) => (lane.status || 'active') === 'active').map((lane) => lane.lane_code || lane.lane_name).filter(Boolean);
      const settings = read('settings') || {};
      settings.drivingRangeLanes = laneCodes.length ? laneCodes : APP_LANES;
      setLocalData('settings', settings);
    } catch (err) {
      console.warn('V40 load lanes failed:', err);
    }
  }

  const baseLoadSupabaseDataToLocalV40 = loadSupabaseDataToLocal;
  loadSupabaseDataToLocal = async function loadSupabaseDataToLocalV40(options = {}) {
    const result = await baseLoadSupabaseDataToLocalV40(options);
    await loadLanesFromSupabaseV40();
    return result;
  };

  function getDrivingRangeLanesV40() {
    const settings = read('settings') || {};
    const lanes = Array.isArray(settings.drivingRangeLanes) ? settings.drivingRangeLanes : [];
    return lanes.length ? lanes : APP_LANES;
  }

  function isBookingActiveForLane(booking = {}) {
    const status = String(booking.bookingStatus || '').toLowerCase();
    return !status.includes('cancel') && !status.includes('rejected') && !status.includes('expired');
  }

  function getAvailableLanesV40(date, time, durationMinutes = 60, excludedBookingId = '') {
    const start = parseClockToMinutes(time);
    const end = start + Number(durationMinutes || 60);
    const booked = new Set();
    read('bookings').forEach((booking) => {
      if (booking.id === excludedBookingId) return;
      if (booking.bookingType !== 'driving') return;
      if (!isBookingActiveForLane(booking)) return;
      if (cleanDate(booking.date) !== cleanDate(date)) return;
      if (!booking.laneId && !booking.lane) return;
      const bStart = parseClockToMinutes(booking.startTime || booking.time);
      const bEnd = bStart + Number(booking.durationMinutes || 60);
      const overlap = start < bEnd && end > bStart;
      if (overlap) booked.add(booking.laneId || booking.lane);
    });
    return getDrivingRangeLanesV40().filter((lane) => !booked.has(lane));
  }

  function laneOptionsMarkupV40(lanes, selected = '') {
    return (lanes || []).map((lane) => `<option value="${escapeHtml(lane)}" ${lane === selected ? 'selected' : ''}>${escapeHtml(lane)}</option>`).join('') || '<option value="">No lane available</option>';
  }

  function durationOptionsMarkupV40(selected = 60) {
    return APP_DURATIONS.map((item) => `<option value="${item.minutes}" ${Number(selected) === item.minutes ? 'selected' : ''}>${escapeHtml(item.label)}</option>`).join('');
  }

  function paymentMethodOptionsMarkupV40(selected = 'QR Payment') {
    return PAYMENT_METHODS.map((item) => `<option value="${escapeHtml(item)}" ${item === selected ? 'selected' : ''}>${escapeHtml(item)}</option>`).join('');
  }

  const baseDrivingRangeBookingLayoutV40 = drivingRangeBookingLayout;
  drivingRangeBookingLayout = function drivingRangeBookingLayoutV40(course = null) {
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
    const selectedTime = availableTimes[0] || '';
    const initialDuration = 60;
    const initialLanes = selectedDate && selectedTime ? getAvailableLanesV40(selectedDate, selectedTime, initialDuration) : getDrivingRangeLanesV40();
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
            <div class="range-control active-control"><span class="field-icon">👤</span><select name="membershipType" data-range-membership required><option value="non-member" selected>Non-member</option><option value="member">Member</option></select></div>
          </label>
          <label class="range-field">Ball bucket
            <div class="range-control"><span class="field-icon">🗃️</span><select name="bucketOptionId" data-range-bucket required>${bucketOptions.map((bucket) => `<option value="${bucket.id}" ${bucket.id === selectedBucket.id ? 'selected' : ''}>${escapeHtml(bucket.label)}</option>`).join('')}</select></div>
          </label>
          <div class="bucket-info" data-bucket-info><span class="info-icon">⛳</span><div><p>${escapeHtml(selectedBucket.description)}</p><strong>${escapeHtml(selectedBucket.label)} per bucket - RM ${formatPlainMoney(bucketUnitPrice(selectedBucket, selectedMembership))} (${membershipLabel(selectedMembership)})</strong></div></div>
          <label class="range-field">Select date
            <div class="range-control"><span class="field-icon">📅</span><select name="date" data-range-date required>${dateOptionMarkup(availableDates, selectedDate)}</select></div>
          </label>
          <label class="range-field">Select time
            <div class="range-control"><span class="field-icon">🕘</span><select name="time" data-range-time required>${timeOptionMarkup(availableTimes, selectedTime)}</select></div>
          </label>
          <label class="range-field">Duration
            <div class="range-control"><span class="field-icon">⏱️</span><select name="durationMinutes" data-range-duration required>${durationOptionsMarkupV40(initialDuration)}</select></div>
          </label>
          <label class="range-field">Select available lane
            <div class="range-control"><span class="field-icon">🏌️</span><select name="laneId" data-range-lane required>${laneOptionsMarkupV40(initialLanes, initialLanes[0] || '')}</select></div>
          </label>
          <div class="calculation-row app-compatible-preview"><div><span>⏰</span> <span data-range-time-preview>${selectedTime ? `${selectedTime} - ${addMinutesToDisplayTime(selectedTime, initialDuration)}` : 'Choose time'}</span></div><strong data-range-lane-preview>${escapeHtml(initialLanes[0] || 'No lane available')}</strong></div>
          <label class="range-field">Number of buckets
            <div class="range-control active-control"><span class="field-icon">🧺</span><select name="bucketCount" data-range-count required>${bucketCounts.map((count) => `<option value="${count}">${count} ${count === 1 ? 'bucket' : 'buckets'}</option>`).join('')}</select></div>
          </label>
          <label class="range-field">Payment method
            <div class="range-control"><span class="field-icon">💳</span><select name="paymentMethod" data-range-payment-method required>${paymentMethodOptionsMarkupV40('QR Payment')}</select></div>
          </label>
          <div class="calculation-row"><div><span>🔢</span> <span data-range-formula>${membershipLabel(selectedMembership)} • ${selectedCount} × ${selectedBucket.balls} balls = ${selectedBucket.balls} balls</span></div><strong data-range-total>RM ${formatPlainMoney(initialAmount)}</strong></div>
          <div class="qr-payment-panel" data-range-qr-panel>
            <div class="qr-payment-head"><div><h3>QR Payment</h3><p>Scan the QR code provided by the administrator, then return here to confirm your payment.</p></div><strong data-range-payment-total>RM ${formatPlainMoney(initialAmount)}</strong></div>
            ${qrImageMarkup('qr-mini')}
          </div>
          <div class="bucket-info hidden" data-pay-counter-panel><span class="info-icon">🏪</span><div><p>Pay at Counter selected.</p><strong>Your booking will be recorded now. Counter staff can confirm payment when you arrive.</strong></div></div>
          <button class="btn btn-primary full" type="submit">Submit Booking</button>
        </form>
      </div>
    `;
  };

  bindDrivingRangeBookingForm = function bindDrivingRangeBookingFormV40(courseId = '') {
    const form = document.getElementById('drivingRangeForm');
    if (!form) return;
    const getCourse = () => read('courses').find((c) => c.id === (courseId || form.dataset.courseId)) || getDrivingCourse();
    const refresh = () => {
      const course = getCourse();
      const membershipType = form.membershipType.value || 'non-member';
      const bucket = bucketById(form.bucketOptionId.value, course);
      const count = Number(form.bucketCount.value || 1);
      const duration = Number(form.durationMinutes?.value || 60);
      const unitPrice = bucketUnitPrice(bucket, membershipType);
      const totalBalls = bucket.balls * count;
      const amount = unitPrice * count;
      const lanes = form.date.value && form.time.value ? getAvailableLanesV40(form.date.value, form.time.value, duration) : getDrivingRangeLanesV40();
      const currentLane = form.laneId?.value;
      if (form.laneId) {
        form.laneId.innerHTML = laneOptionsMarkupV40(lanes, lanes.includes(currentLane) ? currentLane : (lanes[0] || ''));
      }
      const info = form.querySelector('[data-bucket-info]');
      if (info) info.innerHTML = `<span class="info-icon">⛳</span><div><p>${escapeHtml(bucket.description)}</p><strong>${escapeHtml(bucket.label)} per bucket - RM ${formatPlainMoney(unitPrice)} (${membershipLabel(membershipType)})</strong></div>`;
      form.querySelector('[data-range-formula]').textContent = `${membershipLabel(membershipType)} • ${count} × ${bucket.balls} balls = ${totalBalls} balls`;
      form.querySelector('[data-range-total]').textContent = `RM ${formatPlainMoney(amount)}`;
      form.querySelector('[data-range-payment-total]').textContent = `RM ${formatPlainMoney(amount)}`;
      form.querySelector('[data-range-time-preview]').textContent = form.time.value ? `${form.time.value} - ${addMinutesToDisplayTime(form.time.value, duration)}` : 'Choose time';
      form.querySelector('[data-range-lane-preview]').textContent = form.laneId?.value || 'No lane available';
      const isQr = form.paymentMethod?.value === 'QR Payment';
      form.querySelector('[data-range-qr-panel]')?.classList.toggle('hidden', !isQr);
      form.querySelector('[data-pay-counter-panel]')?.classList.toggle('hidden', isQr);
    };
    const refreshScheduleOptions = () => {
      const course = getCourse();
      const times = timeOptionsFor('driving', course.id, form.date.value);
      form.time.innerHTML = timeOptionMarkup(times, times[0] || '');
      refresh();
    };
    ['membershipType','bucketOptionId','bucketCount','durationMinutes','laneId','paymentMethod','time'].forEach((name) => form[name]?.addEventListener('change', refresh));
    form.date?.addEventListener('change', refreshScheduleOptions);
    refresh();
    refreshScheduleOptions();
    form.addEventListener('submit', (event) => {
      event.preventDefault();
      const course = getCourse();
      const membershipType = form.membershipType.value || 'non-member';
      const bucket = bucketById(form.bucketOptionId.value, course);
      const count = Number(form.bucketCount.value || 1);
      const durationMinutes = Number(form.durationMinutes?.value || 60);
      const unitPrice = bucketUnitPrice(bucket, membershipType);
      const amount = unitPrice * count;
      const paymentMethod = form.paymentMethod?.value || 'QR Payment';
      const laneId = form.laneId?.value || '';
      if (!form.date.value || !form.time.value) return toast('Please select an available date and tee time.');
      if (!laneId) return toast('Please select an available lane.');
      const bookings = read('bookings');
      bookings.unshift({
        id: makeId('B'), bookingType: 'driving', userId: state.session.id, customerName: state.session.fullName, customerEmail: state.session.email,
        courseId: course.id, courseName: course.name, trainerId: '', trainerName: 'No trainer', bucketOptionId: bucket.id, bucketLabel: bucket.label,
        bucketBalls: bucket.balls, bucketPrice: unitPrice, membershipType, bucketCount: count, totalBalls: bucket.balls * count,
        date: form.date.value, time: form.time.value, startTime: form.time.value, endTime: addMinutesToDisplayTime(form.time.value, durationMinutes),
        duration: APP_DURATIONS.find((d) => d.minutes === durationMinutes)?.label || `${durationMinutes} minutes`, durationMinutes,
        lane: laneId, laneId, amount, bookingStatus: 'Pending Confirmation', paymentStatus: paymentMethod === 'QR Payment' ? 'Pending Verification' : 'Pay at Counter', paymentMethod,
        paymentReference: '', receiptNumber: '', receiptNote: '', receiptImage: '', hiddenForUsers: [], hiddenForAdmin: false, cancelReason: '', cancelledBy: '', cancelledById: '', cancellationType: '', cancelledAt: '', createdAt: new Date().toISOString(),
      });
      write('bookings', bookings);
      state.currentPage = 'mybookings';
      renderNav();
      renderPage();
      toast('Driving range booking submitted successfully.');
    });
  };

  const baseBookingToLocalV40 = bookingToLocal;
  bookingToLocal = function bookingToLocalV40(row = {}) {
    const local = baseBookingToLocalV40(row);
    local.startTime = row.start_time ? dbTimeToLocal(row.start_time) : (local.startTime || local.time || '');
    local.endTime = row.end_time ? dbTimeToLocal(row.end_time) : (local.endTime || '');
    local.durationMinutes = Number(row.duration_minutes || local.durationMinutes || 60);
    local.duration = row.duration_label || local.duration || (local.durationMinutes ? `${local.durationMinutes} minutes` : '');
    local.laneId = row.lane_id || local.laneId || '';
    local.lane = row.lane_label || row.lane_id || local.lane || '';
    local.paymentMethod = row.payment_method || local.paymentMethod || 'QR Payment';
    local.paymentReference = row.payment_reference || local.paymentReference || '';
    local.receiptNumber = row.receipt_number || local.receiptNumber || '';
    local.trainingClassType = row.training_class_type || local.trainingClassType || '';
    if (local.paymentMethod === 'Pay at Counter') local.paymentStatus = 'Pay at Counter';
    return local;
  };

  const baseSyncBookingsV40 = syncBookingsToSupabase;
  syncBookingsToSupabase = async function syncBookingsToSupabaseV40(bookings = []) {
    await baseSyncBookingsV40(bookings);
    if (!SUPABASE_MODE || !supabaseClient) return;
    for (const booking of bookings) {
      if (!isUuid(booking.id)) continue;
      const payload = {
        start_time: booking.startTime || booking.time ? localTimeToDbV40(booking.startTime || booking.time) : null,
        end_time: booking.endTime ? localTimeToDbV40(booking.endTime) : null,
        duration_minutes: booking.durationMinutes ? Number(booking.durationMinutes) : null,
        duration_label: booking.duration || null,
        lane_id: booking.laneId || booking.lane || null,
        lane_label: booking.lane || booking.laneId || null,
        payment_method: booking.paymentMethod || null,
        payment_reference: booking.paymentReference || null,
        receipt_number: booking.receiptNumber || null,
        training_class_type: booking.trainingClassType || null,
      };
      const { error } = await supabaseClient.from(DB_TABLES.bookings).update(payload).eq('id', booking.id);
      if (error) console.warn('V40 booking app-field sync skipped. Run V40 SQL migration if columns are missing.', error.message || error);
    }
  };

  const baseBookingPackageLineV40 = bookingPackageLine;
  bookingPackageLine = function bookingPackageLineV40(booking = {}) {
    let line = baseBookingPackageLineV40(booking);
    const extra = [];
    if (booking.startTime || booking.endTime || booking.duration) extra.push(`Session: ${booking.startTime || booking.time || '-'}${booking.endTime ? ` - ${booking.endTime}` : ''}${booking.duration ? ` (${booking.duration})` : ''}`);
    if (booking.laneId || booking.lane) extra.push(`Lane: ${booking.laneId || booking.lane}`);
    if (booking.trainingClassType) extra.push(`Class type: ${booking.trainingClassType}`);
    if (booking.paymentReference) extra.push(`Reference: ${booking.paymentReference}`);
    if (booking.receiptNumber) extra.push(`Receipt: ${booking.receiptNumber}`);
    return line + (extra.length ? `<br><span class="muted">${escapeHtml(extra.join(' • '))}</span>` : '');
  };

  const baseOpenTrainerBookingModalV40 = openTrainerBookingModal;
  openTrainerBookingModal = function openTrainerBookingModalV40(prefill = {}, existingBooking = null) {
    baseOpenTrainerBookingModalV40(prefill, existingBooking);
    const form = document.getElementById('trainerBookingForm');
    if (!form || form.trainingClassType) return;
    const note = form.querySelector('.trainer-note-box');
    if (note) {
      note.insertAdjacentHTML('beforebegin', `
        <label class="wide">Training Class Type
          <select name="trainingClassType" required>${TRAINING_CLASS_TYPES.map((type) => `<option value="${type}" ${existingBooking?.trainingClassType === type ? 'selected' : ''}>${type}</option>`).join('')}</select>
        </label>
      `);
    }
    const oldHandler = form.onsubmit;
    form.addEventListener('submit', () => {
      setTimeout(() => {
        const latest = read('bookings')[0];
        if (latest && latest.bookingType === 'trainer' && latest.userId === state.session?.id) {
          latest.trainingClassType = form.trainingClassType?.value || 'Beginner';
          latest.trainerPhoneNumber = (read('trainers').find((t) => t.id === latest.trainerId) || {}).phone || '';
          latest.trainerEmail = (read('trainers').find((t) => t.id === latest.trainerId) || {}).email || '';
          write('bookings', read('bookings'));
        }
      }, 0);
    });
  };

  const baseReviewToLocalV40 = reviewToLocal;
  reviewToLocal = function reviewToLocalV40(row = {}) {
    const review = baseReviewToLocalV40(row);
    review.category = row.category || review.category || 'General Feedback';
    review.email = row.email || review.email || '';
    return review;
  };

  syncReviewsToSupabase = async function syncReviewsToSupabaseV40(reviews = []) {
    const userId = await getCurrentProfileId();
    for (const review of reviews) {
      const payload = { user_id: isUuid(review.userId) ? review.userId : userId, rating: Number(review.rating || 0), category: review.category || 'General Feedback', comment: review.message || '', status: 'active' };
      if (!payload.user_id) continue;
      if (isUuid(review.id)) payload.id = review.id;
      const { error } = await supabaseClient.from(DB_TABLES.reviews).upsert(payload, { onConflict: payload.id ? 'id' : 'id' });
      if (error) console.warn('V40 review sync skipped. Run V40 SQL migration if category column is missing.', error.message || error);
    }
  };

  userFeedback = function userFeedbackV40() {
    setTitle('Contact & Feedback', 'User / Golfer');
    const myReviews = read('reviews').filter((r) => r.userId === state.session.id);
    const settings = read('settings');
    content().innerHTML = `
      <div class="card-grid two app-contact-grid">
        <div class="card">
          <p class="eyebrow">Contact Information</p>
          <h2>UPSI Driving Range</h2>
          <ul class="meta-list">
            <li><span>Phone number</span><strong>${escapeHtml(settings.contactPhone || '014 813 4213')}</strong></li>
            <li><span>Email</span><strong>${escapeHtml(settings.contactEmail || 'dingolfzero@gmail.com')}</strong></li>
            <li><span>Address</span><strong>Universiti Pendidikan Sultan Idris, 35900 Tanjong Malim, Perak</strong></li>
            <li><span>Operating hours</span><strong>10:00 AM - 11:00 PM</strong></li>
          </ul>
        </div>
        <div class="card">
          <p class="eyebrow">Submit Feedback</p>
          <h2>How was your golf booking experience?</h2>
          <form id="reviewForm" class="form-stack">
            <label>Feedback Category
              <select name="category" required>
                <option>General Feedback</option><option>Booking Issue</option><option>Payment Issue</option><option>Suggestion</option><option>Complaint</option>
              </select>
            </label>
            <label>Rating</label>
            <div class="review-stars">${[1,2,3,4,5].map((n) => `<label><input type="radio" name="rating" value="${n}" ${n === 5 ? 'checked' : ''}> ${'⭐'.repeat(n)}</label>`).join('')}</div>
            <label>Feedback Message<textarea name="message" placeholder="Write your review, issue, suggestion or complaint" required></textarea></label>
            <button class="btn btn-primary" type="submit">Submit Feedback</button>
          </form>
        </div>
      </div>
      <div style="height:22px"></div>
      <div class="card-grid">${myReviews.map(reviewCard).join('') || empty('No feedback submitted yet.')}</div>
    `;
    document.getElementById('reviewForm').addEventListener('submit', (event) => {
      event.preventDefault();
      const form = new FormData(event.currentTarget);
      const reviews = read('reviews');
      reviews.unshift({ id: makeId('R'), userId: state.session.id, userName: state.session.fullName, email: state.session.email, category: form.get('category'), rating: Number(form.get('rating')), message: form.get('message').trim(), createdAt: new Date().toISOString() });
      write('reviews', reviews);
      userFeedback();
      toast('Feedback submitted to the administrator.');
    });
  };

  const baseReviewCardV40 = reviewCard;
  reviewCard = function reviewCardV40(review) {
    const html = baseReviewCardV40(review);
    if (!review?.category) return html;
    return html.replace('<p class="muted">', `<p><span class="status-pill pending">${escapeHtml(review.category)}</span></p><p class="muted">`);
  };
})();

/* V41 Lane Management + Profile Save Supabase Fix
   Adds admin lane control, visible lane availability for users, and repairs profile saving.
*/


</script>
<?php
}

function upsi_section_admin_bookings_module(): void
{
?>
<script>
window.UPSI_SECTION_MODULES = window.UPSI_SECTION_MODULES || {};
window.UPSI_SECTION_MODULES["admin_bookings"] = {
  title: "Admin Bookings",
  runtimeChunk: '11/22',
  functions: ["adminBookings", "bookingTable"]
};
</script>
<?php
}

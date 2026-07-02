<?php
/**
 * user_feedback.php
 * Bahagian: User Feedback
 *
 * V108: CSS dan JavaScript runtime dibahagikan ke semua section.
 * Jadi home_page.php tidak lagi memegang semua coding sistem.
 *
 * Runtime chunk: 22/22
 * Fungsi berkaitan untuk presentation: userFeedback, syncReviewsToSupabase
 */


function upsi_section_user_feedback_styles(): void
{
?>
<style>
/* =========================================================
   V108 CSS chunk 22/22
   Bahagian: User Feedback
   ========================================================= */
.table-sort-btn:hover {
  text-decoration: underline;
}

.table-pagination {
  display: flex;
  align-items: center;
  justify-content: space-between;
  gap: 16px;
  padding: 14px 18px;
  border-top: 1px solid rgba(7, 93, 49, .12);
  font-weight: 700;
  color: #657267;
}

.qr-empty-state {
  min-height: 180px;
  display: grid;
  place-items: center;
  border: 1px dashed rgba(7, 93, 49, .28);
  border-radius: 18px;
  background: rgba(255,255,255,.55);
  color: #6b7280;
  font-weight: 900;
}

body[data-theme="dark"] .table-sort-btn {
  color: #7ff0b4 !important;
}

body[data-theme="dark"] .table-pagination {
  border-top-color: rgba(127, 240, 180, .18);
  color: #bdd3c5;
}

body[data-theme="dark"] .qr-empty-state {
  background: rgba(127, 240, 180, .08) !important;
  border-color: rgba(127, 240, 180, .28) !important;
  color: #e9fff0 !important;
}


/* =========================================================
   V100 Tee Time search bar layout
   ========================================================= */
.tee-toolbar {
  align-items: flex-start !important;
}

.tee-actions {
  flex-wrap: wrap !important;
  justify-content: flex-end !important;
  max-width: 780px;
}

.tee-search-box {
  min-width: 300px;
  max-width: 380px;
  height: 54px;
  margin: 0;
}

.tee-search-box input {
  min-width: 230px;
}

@media (max-width: 980px) {
  .tee-actions {
    justify-content: flex-start !important;
    max-width: none;
  }
  .tee-search-box {
    width: 100%;
    max-width: none;
  }
}

</style>
<?php
}

function upsi_section_user_feedback_scripts(): void
{
?>
<script>
/* =========================================================
   V108 JavaScript chunk 22/22
   Bahagian: User Feedback
   ========================================================= */
(function upsiV99AdminOperationalFixes() {
  const TEE_PAGE_SIZE = 8;
  const QR_EMPTY_MARKER = '__UPSI_QR_REMOVED__';

  function v99Esc(value = '') {
    return typeof escapeHtml === 'function'
      ? escapeHtml(value)
      : String(value ?? '').replace(/[&<>"']/g, (m) => ({ '&': '&amp;', '<': '&lt;', '>': '&gt;', '"': '&quot;', "'": '&#039;' }[m]));
  }

  function v99Toast(message) {
    if (typeof toast === 'function') toast(message);
    else console.log(message);
  }

  function v99IsUuid(value = '') {
    return typeof isUuid === 'function'
      ? isUuid(value)
      : /^[0-9a-f]{8}-[0-9a-f]{4}-[1-5][0-9a-f]{3}-[89ab][0-9a-f]{3}-[0-9a-f]{12}$/i.test(String(value || ''));
  }

  function v99DbTime(time = '8:00 AM') {
    if (typeof localTimeToDb === 'function') return localTimeToDb(time);
    const match = String(time || '').trim().match(/^(\d{1,2}):(\d{2})\s*(AM|PM)$/i);
    if (!match) return String(time || '');
    let hour = Number(match[1] || 0);
    const min = match[2] || '00';
    const period = match[3].toUpperCase();
    if (period === 'PM' && hour !== 12) hour += 12;
    if (period === 'AM' && hour === 12) hour = 0;
    return `${String(hour).padStart(2, '0')}:${min}:00`;
  }

  function v99SlotTypeToDb(type = 'both') {
    if (typeof fromLocalSlotType === 'function') return fromLocalSlotType(type);
    return 'driving_range';
  }

  function v99SlotKey(slot = {}) {
    return [
      slot.id || '',
      slot.date || '',
      v99DbTime(slot.time || ''),
      'driving_range',
      slot.targetId || 'all'
    ].join('|');
  }

  function v99DeletedSlotKeys() {
    try { return JSON.parse(localStorage.getItem('deletedTeeSlotKeys') || '[]'); }
    catch (_) { return []; }
  }

  function v99RememberDeletedSlot(slot = {}) {
    const list = v99DeletedSlotKeys();
    const keys = [
      v99SlotKey(slot),
      [slot.date || '', v99DbTime(slot.time || ''), 'driving_range', slot.targetId || 'all'].join('|')
    ].filter(Boolean);
    keys.forEach((key) => {
      if (!list.includes(key)) list.push(key);
    });
    localStorage.setItem('deletedTeeSlotKeys', JSON.stringify(list.slice(-800)));
  }

  function v99IsDeletedSlot(slot = {}) {
    const list = v99DeletedSlotKeys();
    return list.includes(v99SlotKey(slot)) ||
      list.includes([slot.date || '', v99DbTime(slot.time || ''), 'driving_range', slot.targetId || 'all'].join('|'));
  }

  // 1) QR fix: if Supabase setting exists but value is empty, do NOT fallback to old local QR.
  const baseSettingsRowsToLocal99 = typeof settingsRowsToLocal === 'function' ? settingsRowsToLocal : null;
  if (baseSettingsRowsToLocal99 && !window.__upsiV99SettingsRowsFixed) {
    window.__upsiV99SettingsRowsFixed = true;
    settingsRowsToLocal = function settingsRowsToLocalV99(rows = []) {
      const previous = typeof read === 'function' ? (read('settings') || {}) : {};
      const map = Object.fromEntries((rows || []).map((row) => [row.setting_key, row.setting_value ?? '']));
      const has = (key) => Object.prototype.hasOwnProperty.call(map, key);
      const settings = baseSettingsRowsToLocal99(rows);
      settings.qrImage = has('payment_qr_url') ? String(map.payment_qr_url || '') : String(settings.qrImage || '');
      if (settings.qrImage === QR_EMPTY_MARKER) settings.qrImage = '';
      return settings;
    };
  }

  if (typeof qrImageMarkup === 'function' && !window.__upsiV99QrMarkupFixed) {
    window.__upsiV99QrMarkupFixed = true;
    qrImageMarkup = function qrImageMarkupV99(className = 'qr-code') {
      const settings = typeof read === 'function' ? (read('settings') || {}) : {};
      const url = String(settings.qrImage || '').trim();
      if (url && url !== QR_EMPTY_MARKER) {
        const safeUrl = v99Esc(url);
        return `<div class="${className} qr-download-wrap"><img src="${safeUrl}" alt="QR Payment"><a class="btn btn-soft qr-download-btn" href="${safeUrl}" download="upsi-golf-qr-payment">Download QR Image</a></div>`;
      }
      return `<div class="${className} qr-empty-state">No QR Image</div>`;
    };
  }

  async function v99SaveQrRemoved() {
    const previous = typeof read === 'function' ? (read('settings') || {}) : {};
    const nextSettings = { ...previous, qrImage: '', dataVersion: Math.max(Number(previous.dataVersion || 0), 99) };
    if (typeof write === 'function') write('settings', nextSettings);
    else if (typeof setLocalData === 'function') setLocalData('settings', nextSettings);

    if (window.SUPABASE_MODE !== false && typeof supabaseClient !== 'undefined' && DB_TABLES?.settings) {
      const rows = [
        { setting_key: 'payment_qr_url', setting_value: '' },
        { setting_key: 'payment_name', setting_value: nextSettings.paymentName || 'UPSI Golf QR Payment' },
        { setting_key: 'payment_instruction', setting_value: nextSettings.paymentInfo || '' },
        { setting_key: 'system_name', setting_value: nextSettings.systemName || 'UPSI Golf Booking System' },
        { setting_key: 'organisation_name', setting_value: nextSettings.organisationName || 'UPSI Driving Golf Range' },
        { setting_key: 'contact_email', setting_value: nextSettings.contactEmail || '' },
        { setting_key: 'contact_phone', setting_value: nextSettings.contactPhone || '' },
        { setting_key: 'booking_notice', setting_value: nextSettings.bookingNotice || '' },
      ];
      const { error } = await supabaseClient.from(DB_TABLES.settings).upsert(rows, { onConflict: 'setting_key' });
      if (error) {
        console.error('V99 remove QR sync error:', error);
        throw new Error(error.message || 'Failed to remove QR image in Supabase.');
      }
    }
  }

  document.addEventListener('click', (event) => {
    const removeQrBtn = event.target?.closest?.('[data-remove-qr-image]');
    if (!removeQrBtn) return;
    event.preventDefault();
    event.stopPropagation();
    event.stopImmediatePropagation();

    if (typeof confirmAction === 'function') {
      confirmAction({
        title: 'Remove QR Payment Image',
        message: 'Are you sure you want to remove the QR payment image from user payment and booking pages?',
        confirmText: 'Remove QR Image',
        danger: true,
        onConfirm: async () => {
          try {
            await v99SaveQrRemoved();
            if (typeof adminSettings === 'function') adminSettings();
            v99Toast('QR payment image removed from admin and user pages.');
          } catch (err) {
            console.error('V99 QR remove failed:', err);
            v99Toast(err.message || 'Failed to remove QR image.');
          }
        },
      });
    }
  }, true);

  // 2) Tee Time sorting, delete, pagination retention
  function v99CompareSlots(a = {}, b = {}, mode = 'date_asc') {
    const aKey = `${a.date || ''} ${typeof convertTo24Hour === 'function' ? convertTo24Hour(a.time || '') : v99DbTime(a.time || '')}`;
    const bKey = `${b.date || ''} ${typeof convertTo24Hour === 'function' ? convertTo24Hour(b.time || '') : v99DbTime(b.time || '')}`;
    const result = aKey.localeCompare(bKey);
    return mode === 'date_desc' ? -result : result;
  }

  async function v99DeleteSlotFromSupabase(slot = {}) {
    if (typeof SUPABASE_MODE !== 'undefined' && !SUPABASE_MODE) return true;
    if (typeof supabaseClient === 'undefined' || !DB_TABLES?.teeSlots || !slot) return true;

    let result = null;

    if (v99IsUuid(slot.id)) {
      result = await supabaseClient.from(DB_TABLES.teeSlots).delete().eq('id', slot.id).select('id');
      if (!result.error && result.data && result.data.length) return true;
      if (result.error) console.warn('V99 delete tee by id failed, trying fallback:', result.error);
    }

    let query = supabaseClient
      .from(DB_TABLES.teeSlots)
      .delete()
      .eq('slot_date', slot.date)
      .eq('slot_time', v99DbTime(slot.time))
      .eq('slot_type', 'driving_range')
      .is('trainer_id', null);

    result = await query.select('id');
    if (result.error) {
      console.error('V99 tee slot Supabase delete error:', result.error, slot);
      throw new Error(result.error.message || 'Supabase blocked tee time delete.');
    }

    return true;
  }

  function v99CleanSlotLocal(slot = {}) {
    const settings = typeof read === 'function' ? (read('settings') || {}) : {};
    const current = typeof normaliseScheduleSlots === 'function'
      ? normaliseScheduleSlots(settings.scheduleSlots || [])
      : (settings.scheduleSlots || []);
    const targetKey = v99SlotKey(slot);
    settings.scheduleSlots = current.filter((item) => item.id !== slot.id && v99SlotKey(item) !== targetKey && !v99IsDeletedSlot(item));
    settings.dataVersion = Math.max(Number(settings.dataVersion || 0), 99);
    if (typeof setLocalData === 'function') setLocalData('settings', settings);
    else if (typeof write === 'function') write('settings', settings);
  }

  if (typeof getScheduleSlots === 'function' && !window.__upsiV99GetSlotsFilter) {
    window.__upsiV99GetSlotsFilter = true;
    const baseGetScheduleSlots99 = getScheduleSlots;
    getScheduleSlots = function getScheduleSlotsV99() {
      return baseGetScheduleSlots99().filter((slot) => !v99IsDeletedSlot(slot));
    };
  }

  adminTimes = function adminTimesV99() {
    if (typeof setTitle === 'function') setTitle('Tee Time Availability', 'Administrator Panel');

    const sortMode = state.teeSortMode || 'date_asc';
    const allSlots = (typeof getScheduleSlots === 'function' ? getScheduleSlots() : [])
      .filter((slot) => !String(`${slot.targetType || ''} ${slot.slot_type || ''}`).toLowerCase().includes('trainer'))
      .map((slot) => ({ ...slot, targetType: 'driving' }))
      .filter((slot) => !v99IsDeletedSlot(slot))
      .sort((a, b) => v99CompareSlots(a, b, sortMode));

    const totalPages = Math.max(1, Math.ceil(allSlots.length / TEE_PAGE_SIZE));
    state.teePage = Math.min(Math.max(1, Number(state.teePage || 1)), totalPages);
    const start = (state.teePage - 1) * TEE_PAGE_SIZE;
    const pageSlots = allSlots.slice(start, start + TEE_PAGE_SIZE);

    content().innerHTML = `
      <div class="toolbar">
        <div>
          <p class="eyebrow">Schedule Settings</p>
          <h2>Driving Range date and tee time</h2>
          <p class="muted">Tee Time is for Driving Range only. Trainer dates are managed in the Trainers page.</p>
        </div>
        <div class="row-actions">
          <button class="btn ${sortMode === 'date_asc' ? 'btn-primary' : 'btn-soft'}" type="button" data-tee-sort="date_asc">Date/Time Ascending</button>
          <button class="btn ${sortMode === 'date_desc' ? 'btn-primary' : 'btn-soft'}" type="button" data-tee-sort="date_desc">Date/Time Descending</button>
          <button class="btn btn-primary" type="button" data-add-time>Add Time Slot</button>
        </div>
      </div>
      <div class="schedule-admin-grid">
        <article class="card schedule-help-card">
          <p class="eyebrow">How it works</p>
          <h3>Date + Time + Driving Range</h3>
          <p>Add single or bulk date/time slots for driving range booking. Trainer availability is date-only and managed under Trainers.</p>
        </article>
        <article class="card schedule-help-card">
          <p class="eyebrow">Current Coverage</p>
          <h3>${allSlots.filter((slot) => typeof slotDisplayStatus === 'function' ? slotDisplayStatus(slot) === 'Available' : true).length} available slots</h3>
          <p>Page ${state.teePage} of ${totalPages} • Showing ${pageSlots.length} of ${allSlots.length}</p>
        </article>
      </div>
      <div class="table-card schedule-table-card">
        <div class="table-wrap"><table>
          <thead>
            <tr>
              <th><button class="table-sort-btn" type="button" data-tee-sort="${sortMode === 'date_asc' ? 'date_desc' : 'date_asc'}">Date ${sortMode === 'date_asc' ? '↑' : '↓'}</button></th>
              <th><button class="table-sort-btn" type="button" data-tee-sort="${sortMode === 'date_asc' ? 'date_desc' : 'date_asc'}">Time ${sortMode === 'date_asc' ? '↑' : '↓'}</button></th>
              <th>For</th><th>Target</th><th>Status</th><th>Action</th>
            </tr>
          </thead>
          <tbody>
            ${pageSlots.map((slot) => `
              <tr>
                <td><strong>${typeof formatDateDisplay === 'function' ? formatDateDisplay(slot.date) : v99Esc(slot.date)}</strong><br><span class="muted">${v99Esc(slot.date)}</span></td>
                <td><strong>${v99Esc(slot.time)}</strong></td>
                <td>Driving Range</td>
                <td>${v99Esc(typeof scheduleTargetLabel === 'function' ? scheduleTargetLabel(slot) : (slot.targetId || 'All'))}</td>
                <td>${typeof statusPill === 'function' ? statusPill(typeof slotDisplayStatus === 'function' ? slotDisplayStatus(slot) : (slot.status || 'Available')) : v99Esc(slot.status || 'Available')}</td>
                <td><div class="row-actions">
                  <button class="btn btn-soft" type="button" data-edit-time="${v99Esc(slot.id)}">Edit</button>
                  <button class="btn btn-danger-soft" type="button" data-delete-time="${v99Esc(slot.id)}">Remove</button>
                </div></td>
              </tr>
            `).join('') || `<tr><td colspan="6">No tee time slot found.</td></tr>`}
          </tbody>
        </table></div>
        <div class="table-pagination">
          <button class="btn btn-soft" type="button" data-tee-page="prev" ${state.teePage <= 1 ? 'disabled' : ''}>← Previous</button>
          <span>Page ${state.teePage} of ${totalPages} • Showing ${pageSlots.length} of ${allSlots.length}</span>
          <button class="btn btn-soft" type="button" data-tee-page="next" ${state.teePage >= totalPages ? 'disabled' : ''}>Next →</button>
        </div>
      </div>
    `;

    content().querySelector('[data-add-time]')?.addEventListener('click', () => {
      if (typeof openTimeForm === 'function') openTimeForm();
    });

    content().querySelectorAll('[data-tee-sort]').forEach((btn) => {
      btn.addEventListener('click', () => {
        state.teeSortMode = btn.dataset.teeSort || 'date_asc';
        state.teePage = 1;
        adminTimes();
      });
    });

    content().querySelectorAll('[data-tee-page]').forEach((btn) => {
      btn.addEventListener('click', () => {
        if (btn.dataset.teePage === 'prev') state.teePage = Math.max(1, Number(state.teePage || 1) - 1);
        if (btn.dataset.teePage === 'next') state.teePage = Math.min(totalPages, Number(state.teePage || 1) + 1);
        adminTimes();
      });
    });

    content().querySelectorAll('[data-edit-time]').forEach((btn) => {
      btn.addEventListener('click', () => {
        const slot = allSlots.find((item) => item.id === btn.dataset.editTime);
        if (typeof openTimeForm === 'function') openTimeForm(slot);
      });
    });

    content().querySelectorAll('[data-delete-time]').forEach((btn) => {
      btn.addEventListener('click', () => {
        const slot = allSlots.find((item) => item.id === btn.dataset.deleteTime);
        if (!slot) return;
        const oldPage = Number(state.teePage || 1);

        confirmAction({
          title: 'Remove Tee Time Slot',
          message: `Are you sure you want to remove ${typeof formatDateDisplay === 'function' ? formatDateDisplay(slot.date) : slot.date} at ${slot.time}? This will delete the record from Supabase too.`,
          confirmText: 'Remove Slot',
          danger: true,
          onConfirm: async () => {
            try {
              v99RememberDeletedSlot(slot);
              await v99DeleteSlotFromSupabase(slot);
              v99CleanSlotLocal(slot);

              const remaining = (typeof getScheduleSlots === 'function' ? getScheduleSlots() : []).filter((item) => !v99IsDeletedSlot(item));
              const nextTotalPages = Math.max(1, Math.ceil(remaining.length / TEE_PAGE_SIZE));
              state.teePage = Math.min(oldPage, nextTotalPages);

              adminTimes();
              v99Toast('Tee time slot deleted from website and Supabase.');
            } catch (err) {
              console.error('V99 tee time delete failed:', err);
              v99Toast(err.message || 'Failed to delete tee time slot. Check Console.');
            }
          },
        });
      });
    });
  };

  // 3) Admin additional account deactivate/activate
  function v99AdminUsers() {
    return typeof getAdminUsers === 'function' ? getAdminUsers() : (typeof read === 'function' ? read('users').filter((u) => u.role === 'admin') : []);
  }

  function v99IsPrimaryAdmin(user = {}) {
    return typeof isPrimaryAdmin === 'function'
      ? isPrimaryAdmin(user)
      : String(user.supabaseRole || '').toLowerCase() === 'main_admin';
  }

  async function v99UpdateAdminStatus(admin, nextStatus, reason = '') {
    if (!admin) return;
    const payload = {
      full_name: admin.fullName || admin.email,
      phone: admin.phone || null,
      address: admin.address || null,
      role: admin.supabaseRole || 'admin',
      status: typeof accountStatusToDb === 'function' ? accountStatusToDb(nextStatus) : String(nextStatus).toLowerCase(),
      inactive_reason: nextStatus === 'Inactive' ? reason : null,
      inactive_at: nextStatus === 'Inactive' ? new Date().toISOString() : null,
      inactive_by: nextStatus === 'Inactive' && v99IsUuid(state.session?.id) ? state.session.id : null,
    };

    let updatedProfile = null;
    if (typeof SUPABASE_MODE !== 'undefined' && SUPABASE_MODE && typeof supabaseClient !== 'undefined' && DB_TABLES?.profiles) {
      let query = supabaseClient.from(DB_TABLES.profiles).update(payload);
      if (v99IsUuid(admin.id)) query = query.eq('id', admin.id);
      else query = query.eq('email', String(admin.email || '').toLowerCase());

      const { data, error } = await query.select('*').single();
      if (error) {
        console.error('V99 admin status update error:', error);
        throw new Error(error.message || 'Failed to update admin status in Supabase.');
      }
      updatedProfile = data;
    }

    const users = typeof read === 'function' ? read('users') : [];
    const idx = users.findIndex((u) => u.id === admin.id || String(u.email || '').toLowerCase() === String(admin.email || '').toLowerCase());
    const localUpdated = updatedProfile && typeof profileToUser === 'function'
      ? profileToUser(updatedProfile)
      : {
          ...admin,
          status: nextStatus,
          inactiveReason: nextStatus === 'Inactive' ? reason : '',
          inactiveAt: nextStatus === 'Inactive' ? new Date().toISOString() : '',
          inactiveBy: nextStatus === 'Inactive' ? (state.session?.id || '') : '',
        };
    if (idx >= 0) users[idx] = { ...users[idx], ...localUpdated };
    if (typeof setLocalData === 'function') setLocalData('users', users);

    if (typeof loadSupabaseDataToLocal === 'function') {
      await loadSupabaseDataToLocal({ requireAuth: true });
    }
  }

  function v99PromptDeactivateAdmin(admin) {
    if (!admin || v99IsPrimaryAdmin(admin)) return;
    openModal(`
      <div class="modal-head">
        <div>
          <p class="eyebrow">Deactivate Admin</p>
          <h2>Deactivate ${v99Esc(admin.fullName || admin.email)}</h2>
          <p class="muted">Please enter why this additional admin account is being deactivated.</p>
        </div>
        <button class="close-btn" data-close-modal>&times;</button>
      </div>
      <form id="v99DeactivateAdminForm" class="form-stack">
        <label>Reason
          <textarea name="reason" required placeholder="Example: Staff resigned / no longer working here"></textarea>
        </label>
        <button class="btn btn-danger wide" type="submit">Deactivate Admin</button>
      </form>
    `);

    document.getElementById('v99DeactivateAdminForm')?.addEventListener('submit', async (event) => {
      event.preventDefault();
      const reason = String(new FormData(event.currentTarget).get('reason') || '').trim();
      if (!reason) return v99Toast('Please enter a reason.');
      try {
        await v99UpdateAdminStatus(admin, 'Inactive', reason);
        closeModal();
        if (typeof adminSettings === 'function') adminSettings();
        v99Toast('Additional admin deactivated and moved to Inactive Admin Records.');
      } catch (err) {
        console.error('V99 deactivate admin failed:', err);
        v99Toast(err.message || 'Failed to deactivate admin.');
      }
    });
  }

  function v99PromptActivateAdmin(admin) {
    if (!admin || v99IsPrimaryAdmin(admin)) return;
    confirmAction({
      title: 'Activate Admin Account',
      message: `Activate ${admin.fullName || admin.email} again? This admin will be able to login again.`,
      confirmText: 'Activate Admin',
      onConfirm: async () => {
        try {
          await v99UpdateAdminStatus(admin, 'Active', '');
          if (document.querySelector('.modal-card')) closeModal();
          if (typeof adminSettings === 'function') adminSettings();
          v99Toast('Additional admin activated again.');
        } catch (err) {
          console.error('V99 activate admin failed:', err);
          v99Toast(err.message || 'Failed to activate admin.');
        }
      },
    });
  }

  adminAccountManagementSection = function adminAccountManagementSectionV99(currentUser) {
    const admins = v99AdminUsers();
    const canManageAdmins = v99IsPrimaryAdmin(currentUser);
    return `
      <div class="card settings-system-card strong-border-card admin-account-card">
        <div class="card-top">
          <div>
            <p class="eyebrow">Admin Account Control</p>
            <h2>Administrator accounts</h2>
            <p class="muted">Only the main admin can register, view, edit, deactivate and reactivate additional admin accounts.</p>
          </div>
          <div class="row-actions">
            ${canManageAdmins ? '<button class="btn btn-warning-soft" type="button" data-inactive-admin-records>Inactive Admin Records</button><button class="btn btn-primary" type="button" data-add-admin-account>Register Admin</button>' : '<span class="status-pill pending">View Only</span>'}
          </div>
        </div>
        <div class="table-card admin-account-table"><div class="table-wrap"><table>
          <thead><tr><th>Admin Name</th><th>Email</th><th>Phone</th><th>Type</th><th>Status</th><th>Inactive Reason</th><th>Action</th></tr></thead>
          <tbody>
            ${admins.map((admin) => {
              const primary = v99IsPrimaryAdmin(admin);
              const inactive = admin.status === 'Inactive';
              return `
                <tr>
                  <td><strong>${v99Esc(admin.fullName)}</strong></td>
                  <td>${v99Esc(admin.email)}</td>
                  <td>${v99Esc(admin.phone || '-')}</td>
                  <td>${primary ? '<span class="status-pill confirmed">Main Admin</span>' : '<span class="status-pill pending">Additional Admin</span>'}</td>
                  <td>${typeof statusPill === 'function' ? statusPill(admin.status || 'Active') : v99Esc(admin.status || 'Active')}</td>
                  <td>${inactive ? v99Esc(admin.inactiveReason || 'No reason recorded') : '<span class="muted">-</span>'}</td>
                  <td>
                    ${canManageAdmins && !primary ? `
                      <div class="row-actions">
                        <button class="btn btn-soft" type="button" data-edit-admin-account="${v99Esc(admin.id)}">Edit</button>
                        ${inactive
                          ? `<button class="btn btn-primary" type="button" data-activate-admin-account="${v99Esc(admin.id)}">Activate</button>`
                          : `<button class="btn btn-danger-soft" type="button" data-deactivate-admin-account="${v99Esc(admin.id)}">Deactivate</button>`}
                      </div>
                    ` : '<span class="muted">Protected</span>'}
                  </td>
                </tr>
              `;
            }).join('')}
          </tbody>
        </table></div></div>
      </div>
    `;
  };

  bindAdminAccountManagement = function bindAdminAccountManagementV99() {
    const root = typeof content === 'function' ? content() : document;
    const addBtn = root.querySelector('[data-add-admin-account]');
    if (addBtn) addBtn.addEventListener('click', () => openAdminAccountForm());

    const inactiveRecordsBtn = root.querySelector('[data-inactive-admin-records]');
    if (inactiveRecordsBtn) inactiveRecordsBtn.addEventListener('click', openInactiveAdminRecordsModal);

    root.querySelectorAll('[data-edit-admin-account]').forEach((btn) => {
      btn.addEventListener('click', () => {
        const admin = (typeof read === 'function' ? read('users') : []).find((user) => user.id === btn.dataset.editAdminAccount && user.role === 'admin');
        if (admin && typeof openAdminAccountForm === 'function') openAdminAccountForm(admin);
      });
    });

    root.querySelectorAll('[data-deactivate-admin-account]').forEach((btn) => {
      btn.addEventListener('click', () => {
        const admin = v99AdminUsers().find((user) => user.id === btn.dataset.deactivateAdminAccount);
        v99PromptDeactivateAdmin(admin);
      });
    });

    root.querySelectorAll('[data-activate-admin-account]').forEach((btn) => {
      btn.addEventListener('click', () => {
        const admin = v99AdminUsers().find((user) => user.id === btn.dataset.activateAdminAccount);
        v99PromptActivateAdmin(admin);
      });
    });
  };

  openInactiveAdminRecordsModal = function openInactiveAdminRecordsModalV99() {
    const records = v99AdminUsers().filter((admin) => admin.status === 'Inactive');
    openModal(`
      <div class="modal-head">
        <div>
          <p class="eyebrow">Inactive Admin Records</p>
          <h2>Additional Admin Inactive History</h2>
          <p class="muted">These records remain visible as reference for why an additional admin was deactivated. Main admin can activate them again.</p>
        </div>
        <button class="close-btn" data-close-modal>&times;</button>
      </div>
      ${records.length ? `
        <div class="table-card"><div class="table-wrap"><table>
          <thead><tr><th>Name</th><th>Email</th><th>Reason</th><th>Inactive Date</th><th>Action</th></tr></thead>
          <tbody>${records.map((admin) => `
            <tr>
              <td><strong>${v99Esc(admin.fullName)}</strong></td>
              <td>${v99Esc(admin.email)}</td>
              <td>${v99Esc(admin.inactiveReason || 'No reason recorded')}</td>
              <td>${admin.inactiveAt ? new Date(admin.inactiveAt).toLocaleString() : '-'}</td>
              <td><button class="btn btn-primary" type="button" data-activate-admin-account="${v99Esc(admin.id)}">Activate</button></td>
            </tr>
          `).join('')}</tbody>
        </table></div></div>
      ` : (typeof empty === 'function' ? empty('No inactive additional admin account yet.') : '<p>No inactive additional admin account yet.</p>')}
    `);

    document.querySelectorAll('[data-activate-admin-account]').forEach((btn) => {
      btn.addEventListener('click', () => {
        const admin = v99AdminUsers().find((user) => user.id === btn.dataset.activateAdminAccount);
        v99PromptActivateAdmin(admin);
      });
    });
  };
})();


/* =========================================================
   V100 Tee Time Search + Add Visibility + Duplicate Guard Fix
   - Restore Tee Time search bar.
   - Search input can type normally without losing focus.
   - Newly added tee time appears immediately in website list.
   - Deleted tee slot memory no longer hides newly re-added same date/time.
   - Duplicate slots are blocked by Date + Time + Type + Target.
   ========================================================= */
(function upsiV100TeeTimeSearchDuplicateFix() {
  const TEE_PAGE_SIZE = 8;
  const DELETED_ID_KEY = 'deletedTeeSlotIdsV100';

  function esc(value = '') {
    return typeof escapeHtml === 'function'
      ? escapeHtml(value)
      : String(value ?? '').replace(/[&<>"']/g, (m) => ({ '&': '&amp;', '<': '&lt;', '>': '&gt;', '"': '&quot;', "'": '&#039;' }[m]));
  }

  function toastSafe(message) {
    if (typeof toast === 'function') toast(message);
    else console.log(message);
  }

  function uuid(value = '') {
    return typeof isUuid === 'function'
      ? isUuid(value)
      : /^[0-9a-f]{8}-[0-9a-f]{4}-[1-5][0-9a-f]{3}-[89ab][0-9a-f]{3}-[0-9a-f]{12}$/i.test(String(value || ''));
  }

  function dbTime(time = '8:00 AM') {
    if (typeof localTimeToDb === 'function') return localTimeToDb(time);
    const match = String(time || '').trim().match(/^(\d{1,2}):(\d{2})\s*(AM|PM)$/i);
    if (!match) return String(time || '');
    let hour = Number(match[1] || 0);
    const min = match[2] || '00';
    const period = match[3].toUpperCase();
    if (period === 'PM' && hour !== 12) hour += 12;
    if (period === 'AM' && hour === 12) hour = 0;
    return `${String(hour).padStart(2, '0')}:${min}:00`;
  }

  function slotTypeDb(type = 'both') {
    if (typeof fromLocalSlotType === 'function') return fromLocalSlotType(type);
    return 'driving_range';
  }

  function isTrainerTeeSlot(slot = {}) {
    const text = `${slot.targetType || ''} ${slot.slot_type || ''} ${slot.bookingType || ''}`.toLowerCase();
    return text.includes('trainer');
  }

  function duplicateKey(slot = {}) {
    return [
      String(slot.date || '').trim(),
      dbTime(slot.time || '').trim(),
      'driving_range',
      String(slot.targetId || 'all')
    ].join('|').toLowerCase();
  }

  function readDeletedIds() {
    try { return JSON.parse(localStorage.getItem(DELETED_ID_KEY) || '[]'); }
    catch (_) { return []; }
  }

  function rememberDeletedId(slot = {}) {
    if (!slot?.id) return;
    const ids = readDeletedIds();
    if (!ids.includes(slot.id)) ids.push(slot.id);
    localStorage.setItem(DELETED_ID_KEY, JSON.stringify(ids.slice(-1000)));
  }

  function isDeletedById(slot = {}) {
    return Boolean(slot?.id && readDeletedIds().includes(slot.id));
  }

  // Clear old V99/V39 compound deletion memory because it hides newly re-added same date/time slots.
  try {
    localStorage.removeItem('deletedTeeSlotKeys');
  } catch (_) {}

  // Override getScheduleSlots again: filter deleted by ID only, then de-duplicate visible list.
  if (typeof getScheduleSlots === 'function' && !window.__upsiV100GetSlotsPatched) {
    window.__upsiV100GetSlotsPatched = true;
    const baseGetSlots = getScheduleSlots;
    getScheduleSlots = function getScheduleSlotsV100() {
      const seen = new Set();
      return baseGetSlots()
        .filter((slot) => !isTrainerTeeSlot(slot))
        .map((slot) => ({ ...slot, targetType: 'driving' }))
        .filter((slot) => !isDeletedById(slot))
        .filter((slot) => {
          const key = duplicateKey(slot);
          if (seen.has(key)) return false;
          seen.add(key);
          return true;
        });
    };
  }

  function sortSlots(a = {}, b = {}, mode = 'date_asc') {
    const aKey = `${a.date || ''} ${typeof convertTo24Hour === 'function' ? convertTo24Hour(a.time || '') : dbTime(a.time || '')}`;
    const bKey = `${b.date || ''} ${typeof convertTo24Hour === 'function' ? convertTo24Hour(b.time || '') : dbTime(b.time || '')}`;
    const res = aKey.localeCompare(bKey);
    return mode === 'date_desc' ? -res : res;
  }

  function slotMatchesSearch(slot = {}, term = '') {
    const q = String(term || '').trim().toLowerCase();
    if (!q) return true;
    const haystack = [
      slot.date,
      typeof formatDateDisplay === 'function' ? formatDateDisplay(slot.date) : '',
      slot.time,
      'Driving Range',
      typeof scheduleTargetLabel === 'function' ? scheduleTargetLabel(slot) : slot.targetId,
      slot.status,
      typeof slotDisplayStatus === 'function' ? slotDisplayStatus(slot) : '',
    ].join(' ').toLowerCase();
    return haystack.includes(q);
  }

  async function deleteSlotFromSupabase(slot = {}) {
    if (typeof SUPABASE_MODE !== 'undefined' && !SUPABASE_MODE) return true;
    if (typeof supabaseClient === 'undefined' || !DB_TABLES?.teeSlots || !slot) return true;

    let result = null;
    if (uuid(slot.id)) {
      result = await supabaseClient.from(DB_TABLES.teeSlots).delete().eq('id', slot.id).select('id');
      if (!result.error && result.data && result.data.length) return true;
      if (result.error) console.warn('V100 delete tee by id failed, trying fallback:', result.error);
    }

    let query = supabaseClient
      .from(DB_TABLES.teeSlots)
      .delete()
      .eq('slot_date', slot.date)
      .eq('slot_time', dbTime(slot.time))
      .eq('slot_type', 'driving_range')
      .is('trainer_id', null);

    result = await query.select('id');
    if (result.error) {
      console.error('V100 tee slot Supabase delete error:', result.error, slot);
      throw new Error(result.error.message || 'Supabase blocked tee time delete.');
    }
    return true;
  }

  function cleanLocalSlot(slot = {}) {
    const settings = typeof read === 'function' ? (read('settings') || {}) : {};
    const current = typeof normaliseScheduleSlots === 'function'
      ? normaliseScheduleSlots(settings.scheduleSlots || [])
      : (settings.scheduleSlots || []);
    const key = duplicateKey(slot);
    settings.scheduleSlots = current.filter((item) => item.id !== slot.id && duplicateKey(item) !== key);
    settings.dataVersion = Math.max(Number(settings.dataVersion || 0), 100);
    if (typeof setLocalData === 'function') setLocalData('settings', settings);
  }

  async function refreshTeeSlotsFromSupabase() {
    if (typeof SUPABASE_MODE !== 'undefined' && !SUPABASE_MODE) return false;
    if (typeof supabaseClient === 'undefined' || !DB_TABLES?.teeSlots) return false;

    const { data, error } = await supabaseClient
      .from(DB_TABLES.teeSlots)
      .select('*')
      .order('slot_date', { ascending: true })
      .order('slot_time', { ascending: true });

    if (error) {
      console.warn('V100 refresh tee slots failed:', error);
      return false;
    }

    if (Array.isArray(data)) {
      const settings = typeof read === 'function' ? (read('settings') || {}) : {};
      settings.scheduleSlots = data
        .map((row) => typeof slotToLocal === 'function' ? slotToLocal(row) : row)
        .filter((slot) => !isDeletedById(slot));
      settings.dataVersion = Math.max(Number(settings.dataVersion || 0), 100);
      if (typeof setLocalData === 'function') setLocalData('settings', settings);
      return true;
    }

    return false;
  }

  async function upsertSlotToSupabase(slot = {}) {
    if (typeof SUPABASE_MODE !== 'undefined' && !SUPABASE_MODE) return slot;
    if (typeof supabaseClient === 'undefined' || !DB_TABLES?.teeSlots) return slot;

    const payload = typeof localSlotToDb === 'function'
      ? localSlotToDb(slot)
      : {
          slot_date: slot.date,
          slot_time: dbTime(slot.time),
          slot_type: 'driving_range',
          trainer_id: null,
          status: String(slot.status || 'Available') === 'Available' ? 'available' : 'inactive',
        };
    payload.slot_type = 'driving_range';
    payload.trainer_id = null;

    if (!uuid(payload.id)) delete payload.id;

    const { data, error } = await supabaseClient
      .from(DB_TABLES.teeSlots)
      .upsert(payload, { onConflict: payload.id ? 'id' : 'slot_date,slot_time,slot_type,trainer_id' })
      .select('*')
      .single();

    if (error) {
      console.error('V100 tee slot save error:', error);
      throw new Error(error.message || 'Failed to save tee time to Supabase.');
    }

    return data && typeof slotToLocal === 'function' ? slotToLocal(data) : slot;
  }

  function writeSlotsLocal(slots = []) {
    const seen = new Set();
    const clean = slots.filter((slot) => {
      const key = duplicateKey(slot);
      if (seen.has(key)) return false;
      seen.add(key);
      return true;
    });
    if (typeof writeScheduleSlots === 'function') {
      writeScheduleSlots(clean);
    } else {
      const settings = typeof read === 'function' ? (read('settings') || {}) : {};
      settings.scheduleSlots = clean;
      if (typeof setLocalData === 'function') setLocalData('settings', settings);
    }
  }

  function renderTeeTimePage() {
    if (typeof setTitle === 'function') setTitle('Tee Time Availability', 'Administrator Panel');

    const sortMode = state.teeSortMode || 'date_asc';
    const searchTerm = state.teeSearch || '';
    const allSlots = (typeof getScheduleSlots === 'function' ? getScheduleSlots() : [])
      .filter((slot) => !isTrainerTeeSlot(slot))
      .map((slot) => ({ ...slot, targetType: 'driving' }))
      .filter((slot) => slotMatchesSearch(slot, searchTerm))
      .sort((a, b) => sortSlots(a, b, sortMode));

    const totalPages = Math.max(1, Math.ceil(allSlots.length / TEE_PAGE_SIZE));
    state.teePage = Math.min(Math.max(1, Number(state.teePage || 1)), totalPages);
    const start = (state.teePage - 1) * TEE_PAGE_SIZE;
    const pageSlots = allSlots.slice(start, start + TEE_PAGE_SIZE);

    content().innerHTML = `
      <div class="toolbar tee-toolbar">
        <div>
          <p class="eyebrow">Schedule Settings</p>
          <h2>Driving Range date and tee time</h2>
          <p class="muted">Tee Time is for Driving Range only. Trainer dates are managed in the Trainers page.</p>
        </div>
        <div class="row-actions tee-actions">
          <label class="search-box tee-search-box">
            <span>🔎</span>
            <input id="teeSearchInput" type="search" placeholder="Search date, time, target or status" value="${esc(searchTerm)}" autocomplete="off">
          </label>
          <button class="btn ${sortMode === 'date_asc' ? 'btn-primary' : 'btn-soft'}" type="button" data-tee-sort="date_asc">Date/Time Ascending</button>
          <button class="btn ${sortMode === 'date_desc' ? 'btn-primary' : 'btn-soft'}" type="button" data-tee-sort="date_desc">Date/Time Descending</button>
          <button class="btn btn-primary" type="button" data-add-time>Add Time Slot</button>
        </div>
      </div>

      <div class="schedule-admin-grid">
        <article class="card schedule-help-card">
          <p class="eyebrow">How it works</p>
          <h3>Date + Time + Driving Range</h3>
          <p>Add single or bulk date/time slots for driving range booking. Trainer availability is date-only and managed under Trainers.</p>
        </article>
        <article class="card schedule-help-card">
          <p class="eyebrow">Current Coverage</p>
          <h3>${allSlots.filter((slot) => typeof slotDisplayStatus === 'function' ? slotDisplayStatus(slot) === 'Available' : true).length} available slots</h3>
          <p>Page ${state.teePage} of ${totalPages} • Showing ${pageSlots.length} of ${allSlots.length}${searchTerm ? ` • Search: ${esc(searchTerm)}` : ''}</p>
        </article>
      </div>

      <div class="table-card schedule-table-card">
        <div class="table-wrap"><table>
          <thead>
            <tr>
              <th><button class="table-sort-btn" type="button" data-tee-sort="${sortMode === 'date_asc' ? 'date_desc' : 'date_asc'}">Date ${sortMode === 'date_asc' ? '↑' : '↓'}</button></th>
              <th><button class="table-sort-btn" type="button" data-tee-sort="${sortMode === 'date_asc' ? 'date_desc' : 'date_asc'}">Time ${sortMode === 'date_asc' ? '↑' : '↓'}</button></th>
              <th>For</th><th>Target</th><th>Status</th><th>Action</th>
            </tr>
          </thead>
          <tbody>
            ${pageSlots.map((slot) => `
              <tr>
                <td><strong>${typeof formatDateDisplay === 'function' ? formatDateDisplay(slot.date) : esc(slot.date)}</strong><br><span class="muted">${esc(slot.date)}</span></td>
                <td><strong>${esc(slot.time)}</strong></td>
                <td>Driving Range</td>
                <td>${esc(typeof scheduleTargetLabel === 'function' ? scheduleTargetLabel(slot) : (slot.targetId || 'All'))}</td>
                <td>${typeof statusPill === 'function' ? statusPill(typeof slotDisplayStatus === 'function' ? slotDisplayStatus(slot) : (slot.status || 'Available')) : esc(slot.status || 'Available')}</td>
                <td><div class="row-actions">
                  <button class="btn btn-soft" type="button" data-edit-time="${esc(slot.id)}">Edit</button>
                  <button class="btn btn-danger-soft" type="button" data-delete-time="${esc(slot.id)}">Remove</button>
                </div></td>
              </tr>
            `).join('') || `<tr><td colspan="6">No tee time slot found.</td></tr>`}
          </tbody>
        </table></div>
        <div class="table-pagination">
          <button class="btn btn-soft" type="button" data-tee-page="prev" ${state.teePage <= 1 ? 'disabled' : ''}>← Previous</button>
          <span>Page ${state.teePage} of ${totalPages} • Showing ${pageSlots.length} of ${allSlots.length}</span>
          <button class="btn btn-soft" type="button" data-tee-page="next" ${state.teePage >= totalPages ? 'disabled' : ''}>Next →</button>
        </div>
      </div>
    `;

    const search = content().querySelector('#teeSearchInput');
    if (search) {
      search.addEventListener('input', () => {
        state.teeSearch = search.value;
        state.teePage = 1;
        clearTimeout(window.__upsiV100TeeSearchTimer);
        window.__upsiV100TeeSearchTimer = setTimeout(() => {
          renderTeeTimePage();
          const nextSearch = content().querySelector('#teeSearchInput');
          if (nextSearch) {
            nextSearch.focus();
            const len = nextSearch.value.length;
            nextSearch.setSelectionRange(len, len);
          }
        }, 180);
      });
    }

    content().querySelector('[data-add-time]')?.addEventListener('click', () => {
      if (typeof openTimeForm === 'function') openTimeForm();
    });

    content().querySelectorAll('[data-tee-sort]').forEach((btn) => {
      btn.addEventListener('click', () => {
        state.teeSortMode = btn.dataset.teeSort || 'date_asc';
        state.teePage = 1;
        renderTeeTimePage();
      });
    });

    content().querySelectorAll('[data-tee-page]').forEach((btn) => {
      btn.addEventListener('click', () => {
        if (btn.dataset.teePage === 'prev') state.teePage = Math.max(1, Number(state.teePage || 1) - 1);
        if (btn.dataset.teePage === 'next') state.teePage = Math.min(totalPages, Number(state.teePage || 1) + 1);
        renderTeeTimePage();
      });
    });

    content().querySelectorAll('[data-edit-time]').forEach((btn) => {
      btn.addEventListener('click', () => {
        const slot = allSlots.find((item) => item.id === btn.dataset.editTime);
        if (typeof openTimeForm === 'function') openTimeForm(slot);
      });
    });

    content().querySelectorAll('[data-delete-time]').forEach((btn) => {
      btn.addEventListener('click', () => {
        const slot = allSlots.find((item) => item.id === btn.dataset.deleteTime);
        if (!slot) return;
        const oldPage = Number(state.teePage || 1);

        confirmAction({
          title: 'Remove Tee Time Slot',
          message: `Are you sure you want to remove ${typeof formatDateDisplay === 'function' ? formatDateDisplay(slot.date) : slot.date} at ${slot.time}? This will delete the record from Supabase too.`,
          confirmText: 'Remove Slot',
          danger: true,
          onConfirm: async () => {
            try {
              await deleteSlotFromSupabase(slot);
              rememberDeletedId(slot);
              cleanLocalSlot(slot);
              await refreshTeeSlotsFromSupabase();

              const remaining = (typeof getScheduleSlots === 'function' ? getScheduleSlots() : []).filter((item) => slotMatchesSearch(item, state.teeSearch || ''));
              const nextTotalPages = Math.max(1, Math.ceil(remaining.length / TEE_PAGE_SIZE));
              state.teePage = Math.min(oldPage, nextTotalPages);

              renderTeeTimePage();
              toastSafe('Tee time slot deleted from website and Supabase.');
            } catch (err) {
              console.error('V100 tee time delete failed:', err);
              toastSafe(err.message || 'Failed to delete tee time slot. Check Console.');
            }
          },
        });
      });
    });
  }

  adminTimes = renderTeeTimePage;

  // Override openTimeForm only for submit behavior by replacing complete function.
  openTimeForm = function openTimeFormV100(slot = null) {
    const courses = typeof getDrivingCourses === 'function' ? getDrivingCourses(read('courses')) : read('courses');
    const today = new Date().toISOString().slice(0, 10);
    const nextWeek = typeof getFutureDate === 'function' ? getFutureDate(7) : today;
    const selectedTarget = slot?.targetId || 'all';
    const timeParts = typeof parseTimeSlot === 'function' ? parseTimeSlot(slot?.time || '8:00 AM') : { hour: 8, minute: 0, period: 'AM' };
    const isEdit = Boolean(slot);

    openModal(`
      <div class="modal-head">
        <div>
          <p class="eyebrow">${isEdit ? 'Edit Tee Time' : 'New Tee Time'}</p>
          <h2>${isEdit ? 'Update Driving Range Time Slot' : 'Add Driving Range Time Slot'}</h2>
          <p class="muted">Duplicate driving range slots with the same date, time and target will be skipped automatically.</p>
        </div>
        <button class="close-btn" data-close-modal>&times;</button>
      </div>
      <form id="timeForm" class="form-grid">
        ${isEdit ? `
          <label class="wide">Date
            <input name="date" type="date" min="${today}" value="${esc(slot?.date || today)}" required>
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
        <label class="wide" data-target-wrapper>Driving Range Target
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
      const options = courses.map((course) => `<option value="${esc(course.id)}" ${selectedTarget === course.id ? 'selected' : ''}>${esc(course.name)}</option>`).join('') || '<option value="all">All Driving Ranges</option>';
      form.targetId.innerHTML = options;
      if ([...form.targetId.options].some((opt) => opt.value === selectedTarget)) form.targetId.value = selectedTarget;
      else form.targetId.value = 'all';
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

    form.addEventListener('submit', async (event) => {
      event.preventDefault();
      const submitBtn = form.querySelector('button[type="submit"]');
      const oldText = submitBtn?.textContent || '';
      if (submitBtn) {
        submitBtn.disabled = true;
        submitBtn.textContent = 'Saving...';
      }

      try {
        const formData = new FormData(event.currentTarget);
        const basePayload = {
          time: formData.get('time'),
          targetType: 'driving',
          targetId: formData.get('targetId') || 'all',
          status: formData.get('status'),
        };

        const slotDates = isEdit
          ? [formData.get('date')]
          : formData.get('dateMode') === 'range'
            ? datesBetween(formData.get('startDate'), formData.get('endDate'))
            : [formData.get('date')];

        if (!slotDates.length) {
          toastSafe('Please select a valid date or date range.');
          return;
        }

        let slots = typeof getScheduleSlots === 'function' ? getScheduleSlots() : [];
        const existingKeys = new Set(slots.filter((item) => !isEdit || item.id !== slot?.id).map(duplicateKey));

        if (isEdit) {
          const payload = { id: slot.id, date: slotDates[0], ...basePayload };
          if (existingKeys.has(duplicateKey(payload))) {
            toastSafe('This tee time slot already exists.');
            return;
          }

          const savedSlot = await upsertSlotToSupabase(payload);
          const idx = slots.findIndex((item) => item.id === slot.id);
          if (idx >= 0) slots[idx] = { ...payload, ...savedSlot };
          else slots.push({ ...payload, ...savedSlot });

          writeSlotsLocal(slots);
          await refreshTeeSlotsFromSupabase();
          closeModal();
          renderTeeTimePage();
          toastSafe('Tee time availability saved.');
          return;
        }

        const newSlots = [];
        let duplicateCount = 0;

        slotDates.forEach((date) => {
          const payload = { id: makeId('S'), date, ...basePayload };
          const key = duplicateKey(payload);
          if (existingKeys.has(key) || newSlots.some((item) => duplicateKey(item) === key)) {
            duplicateCount += 1;
            return;
          }
          newSlots.push(payload);
        });

        if (!newSlots.length) {
          toastSafe('No new slot was added because every selected date already has the same slot.');
          return;
        }

        const saved = [];
        for (const slotPayload of newSlots) {
          const savedSlot = await upsertSlotToSupabase(slotPayload);
          saved.push({ ...slotPayload, ...savedSlot });
        }

        slots = slots.concat(saved);
        writeSlotsLocal(slots);
        await refreshTeeSlotsFromSupabase();

        closeModal();
        state.teePage = 1;
        state.teeSearch = '';
        state.teeSortMode = state.teeSortMode || 'date_asc';
        renderTeeTimePage();
        toastSafe(`${saved.length} tee time slot${saved.length === 1 ? '' : 's'} added.${duplicateCount ? ` ${duplicateCount} duplicate skipped.` : ''}`);
      } catch (err) {
        console.error('V100 save tee time failed:', err);
        toastSafe(err.message || 'Failed to save tee time slot.');
      } finally {
        if (submitBtn) {
          submitBtn.disabled = false;
          submitBtn.textContent = oldText;
        }
      }
    });
  };
})();


/* V106 Feedback Database + Display Fix */
(function upsiV106FeedbackFix() {
  if (window.__upsiV106FeedbackFixLoaded) return;
  window.__upsiV106FeedbackFixLoaded = true;

  DB_TABLES.reviews = 'feedback_review';

  function v106Escape(value = '') {
    return typeof escapeHtml === 'function'
      ? escapeHtml(value)
      : String(value ?? '').replace(/[&<>"']/g, (m) => ({ '&': '&amp;', '<': '&lt;', '>': '&gt;', '"': '&quot;', "'": '&#039;' }[m]));
  }

  function v106IsUuid(value = '') {
    return typeof isUuid === 'function'
      ? isUuid(value)
      : /^[0-9a-f]{8}-[0-9a-f]{4}-[1-5][0-9a-f]{3}-[89ab][0-9a-f]{12}$/i.test(String(value || ''));
  }

  function v106Toast(message) {
    if (typeof toast === 'function') toast(message);
    else console.log(message);
  }

  reviewToLocal = function reviewToLocalV106(row = {}) {
    return {
      id: row.id,
      userId: row.user_id || '',
      userName: row.profiles?.full_name || row.full_name || row.name || 'User',
      email: row.profiles?.email || row.email || '',
      category: row.category || 'General Feedback',
      message: row.message || row.comment || '',
      status: row.status || 'active',
      createdAt: row.submitted_at || row.created_at || new Date().toISOString(),
    };
  };

  reviewCard = function reviewCardV106(review = {}) {
    return `
      <article class="card feedback-category-card">
        <div class="card-top">
          <div>
            <p class="eyebrow">${v106Escape(new Date(review.createdAt || Date.now()).toLocaleDateString())}</p>
            <h3>${v106Escape(review.userName || 'User')}</h3>
            <p class="muted">${v106Escape(review.email || 'No email recorded')}</p>
          </div>
          <span class="status-pill pending">${v106Escape(review.category || 'General Feedback')}</span>
        </div>
        <p>${v106Escape(review.message || '')}</p>
      </article>
    `;
  };

  async function v106CurrentProfileId() {
    if (state?.session?.id && v106IsUuid(state.session.id)) return state.session.id;
    if (typeof getCurrentProfileId === 'function') {
      const id = await getCurrentProfileId();
      if (id) return id;
    }
    return '';
  }

  async function v106LoadFeedbackFromSupabase() {
    if (!SUPABASE_MODE || !supabaseClient) return false;

    const { data, error } = await supabaseClient
      .from(DB_TABLES.reviews)
      .select('*, profiles:user_id(full_name,email)')
      .order('submitted_at', { ascending: false });

    if (error) {
      console.error('V106 feedback load error:', error);
      return false;
    }

    if (Array.isArray(data)) {
      setLocalData('reviews', data.map(reviewToLocal));
      return true;
    }

    return false;
  }

  async function v106InsertFeedback(review) {
    if (!SUPABASE_MODE || !supabaseClient) return { data: null, error: null };

    const profileId = await v106CurrentProfileId();
    if (!profileId) return { data: null, error: new Error('Profile id not found for feedback.') };

    const payload = {
      user_id: profileId,
      category: review.category || 'General Feedback',
      name: review.userName || state.session?.fullName || 'User',
      email: review.email || state.session?.email || '',
      message: review.message || '',
      status: 'active',
      submitted_at: review.createdAt || new Date().toISOString(),
    };

    const result = await supabaseClient
      .from(DB_TABLES.reviews)
      .insert(payload)
      .select('*, profiles:user_id(full_name,email)')
      .single();

    return result;
  }

  syncReviewsToSupabase = async function syncReviewsToSupabaseV106(reviews = []) {
    if (!SUPABASE_MODE || !supabaseClient) return;

    for (const review of reviews) {
      if (!review || !String(review.message || '').trim()) continue;

      if (v106IsUuid(review.id)) {
        const payload = {
          category: review.category || 'General Feedback',
          name: review.userName || state.session?.fullName || 'User',
          email: review.email || state.session?.email || '',
          message: review.message || '',
          status: review.status || 'active',
          submitted_at: review.createdAt || new Date().toISOString(),
        };

        const { error } = await supabaseClient
          .from(DB_TABLES.reviews)
          .update(payload)
          .eq('id', review.id);

        if (error) console.error('V106 feedback update error:', error);
      } else {
        const { data, error } = await v106InsertFeedback(review);
        if (error) {
          console.error('V106 feedback insert error:', error);
          v106Toast('Feedback belum masuk database. Run SQL V106 feedback fix jika perlu.');
        } else if (data?.id) {
          review.id = data.id;
          review.userId = data.user_id || review.userId;
          review.userName = data.name || data.profiles?.full_name || review.userName;
          review.email = data.email || data.profiles?.email || review.email;
          review.category = data.category || review.category;
          review.message = data.message || review.message;
          review.createdAt = data.submitted_at || data.created_at || review.createdAt;
        }
      }
    }

    await v106LoadFeedbackFromSupabase();
  };

  userFeedback = function userFeedbackV106() {
    setTitle('Contact & Feedback', 'User / Golfer');

    const sessionEmail = String(state.session?.email || '').toLowerCase();
    const myReviews = read('reviews')
      .filter((r) => r.userId === state.session.id || String(r.email || '').toLowerCase() === sessionEmail)
      .sort((a, b) => new Date(b.createdAt || 0) - new Date(a.createdAt || 0));

    const settings = read('settings');

    content().innerHTML = `
      <div class="card-grid two app-contact-grid">
        <div class="card">
          <p class="eyebrow">Contact Information</p>
          <h2>UPSI Driving Range</h2>
          <ul class="meta-list">
            <li><span>Phone number</span><strong>${v106Escape(settings.contactPhone || '014 813 4213')}</strong></li>
            <li><span>Email</span><strong>${v106Escape(settings.contactEmail || 'dingolfzero@gmail.com')}</strong></li>
            <li><span>Address</span><strong>Universiti Pendidikan Sultan Idris, 35900 Tanjong Malim, Perak</strong></li>
            <li><span>Operating hours</span><strong>10:00 AM - 11:00 PM</strong></li>
          </ul>
        </div>
        <div class="card">
          <p class="eyebrow">Submit Feedback</p>
          <h2>Send feedback to administrator</h2>
          <form id="reviewForm" class="form-stack">
            <label>Feedback Category
              <select name="category" required>
                <option>General Feedback</option>
                <option>Booking Issue</option>
                <option>Payment Issue</option>
                <option>Suggestion</option>
                <option>Complaint</option>
              </select>
            </label>
            <label>Feedback Message
              <textarea name="message" placeholder="Write your review, issue, suggestion or complaint" required></textarea>
            </label>
            <button class="btn btn-primary" type="submit">Submit Feedback</button>
          </form>
        </div>
      </div>
      <div style="height:22px"></div>
      <div class="toolbar">
        <div>
          <p class="eyebrow">My Feedback</p>
          <h2>Feedback History</h2>
          <p class="muted">Your submitted feedback is shown here immediately after submit.</p>
        </div>
      </div>
      <div class="card-grid">${myReviews.map(reviewCard).join('') || empty('No feedback submitted yet.')}</div>
    `;

    const form = document.getElementById('reviewForm');
    form?.addEventListener('submit', async (event) => {
      event.preventDefault();

      const formData = new FormData(form);
      const message = String(formData.get('message') || '').trim();
      if (!message) return v106Toast('Please write your feedback message.');

      const submitBtn = form.querySelector('button[type="submit"]');
      const originalText = submitBtn?.textContent || 'Submit Feedback';
      if (submitBtn) {
        submitBtn.disabled = true;
        submitBtn.textContent = 'Submitting...';
      }

      const review = {
        id: makeId('R'),
        userId: state.session.id,
        userName: state.session.fullName,
        email: state.session.email,
        category: formData.get('category') || 'General Feedback',
        message,
        status: 'active',
        createdAt: new Date().toISOString(),
      };

      const reviews = read('reviews');
      reviews.unshift(review);
      setLocalData('reviews', reviews);

      try {
        await syncReviewsToSupabase([review]);
        await v106LoadFeedbackFromSupabase();
      } catch (error) {
        console.error('V106 feedback submit error:', error);
      } finally {
        if (submitBtn) {
          submitBtn.disabled = false;
          submitBtn.textContent = originalText;
        }
      }

      userFeedback();
      v106Toast('Feedback submitted to the administrator.');
    });
  };

  adminReviews = function adminReviewsV106() {
    setTitle('Customer Feedback', 'Administrator Panel');
    const reviews = read('reviews')
      .sort((a, b) => new Date(b.createdAt || 0) - new Date(a.createdAt || 0));

    content().innerHTML = `
      <div class="toolbar">
        <div>
          <p class="eyebrow">Reviews</p>
          <h2>Review customer feedback</h2>
          <p class="muted">Feedback submitted by users will appear here.</p>
        </div>
        <button class="btn btn-soft" type="button" data-refresh-feedback>Refresh Feedback</button>
      </div>
      <div class="card-grid">${reviews.map(reviewCard).join('') || empty('No feedback yet.')}</div>
    `;

    content().querySelector('[data-refresh-feedback]')?.addEventListener('click', async () => {
      await v106LoadFeedbackFromSupabase();
      adminReviews();
      v106Toast('Feedback refreshed.');
    });
  };

  const oldLoadSupabaseDataToLocalV106 = typeof loadSupabaseDataToLocal === 'function' ? loadSupabaseDataToLocal : null;
  if (oldLoadSupabaseDataToLocalV106 && !window.__upsiV106HydrateFeedbackPatched) {
    window.__upsiV106HydrateFeedbackPatched = true;
    loadSupabaseDataToLocal = async function loadSupabaseDataToLocalV106(options = {}) {
      const result = await oldLoadSupabaseDataToLocalV106(options);
      if (SUPABASE_MODE && supabaseClient && options?.requireAuth) {
        await v106LoadFeedbackFromSupabase();
      }
      return result;
    };
  }
})();

</script>
<?php
}

function upsi_section_user_feedback_module(): void
{
?>
<script>
window.UPSI_SECTION_MODULES = window.UPSI_SECTION_MODULES || {};
window.UPSI_SECTION_MODULES["user_feedback"] = {
  title: "User Feedback",
  runtimeChunk: '22/22',
  functions: ["userFeedback", "syncReviewsToSupabase"]
};


/* =========================================================
   V109 HARD FIX - Feedback & Review Supabase + Admin Delete
   Punca utama:
   - Versi lama guna embedded select profiles:user_id(...).
   - Kalau table feedback_review tiada foreign key relationship,
     Supabase/PostgREST boleh gagal load/insert feedback.
   Fix:
   - Guna simple select('*') sahaja.
   - Insert boleh jalan walaupun user_id tidak jumpa UUID.
   - Feedback terus keluar di My Feedback History.
   - Admin Reviews ada Delete button dan delete Supabase.
   ========================================================= */
(function upsiV109FeedbackReviewHardFix() {
  if (window.__upsiV109FeedbackReviewHardFixLoaded) return;
  window.__upsiV109FeedbackReviewHardFixLoaded = true;

  DB_TABLES.reviews = 'feedback_review';

  function escV109(value = '') {
    return typeof escapeHtml === 'function'
      ? escapeHtml(value)
      : String(value ?? '').replace(/[&<>"']/g, (m) => ({ '&': '&amp;', '<': '&lt;', '>': '&gt;', '"': '&quot;', "'": '&#039;' }[m]));
  }

  function toastV109(message) {
    if (typeof toast === 'function') toast(message);
    else console.log(message);
  }

  function uuidV109(value = '') {
    return typeof isUuid === 'function'
      ? isUuid(value)
      : /^[0-9a-f]{8}-[0-9a-f]{4}-[1-5][0-9a-f]{3}-[89ab][0-9a-f]{12}$/i.test(String(value || ''));
  }

  function nowIsoV109() {
    return new Date().toISOString();
  }

  function localTempIdV109() {
    return `TEMP-FB-${Date.now()}-${Math.random().toString(16).slice(2)}`;
  }

  function normaliseFeedbackV109(row = {}) {
    return {
      id: row.id || row.localId || localTempIdV109(),
      userId: row.user_id || row.userId || '',
      userName: row.name || row.full_name || row.userName || 'User',
      email: row.email || '',
      category: row.category || 'General Feedback',
      message: row.message || row.comment || '',
      status: row.status || 'active',
      createdAt: row.submitted_at || row.created_at || row.createdAt || nowIsoV109(),
    };
  }

  reviewToLocal = function reviewToLocalV109(row = {}) {
    return normaliseFeedbackV109(row);
  };

  reviewCard = function reviewCardV109(review = {}) {
    return `
      <article class="card feedback-category-card">
        <div class="card-top">
          <div>
            <p class="eyebrow">${escV109(new Date(review.createdAt || Date.now()).toLocaleDateString())}</p>
            <h3>${escV109(review.userName || 'User')}</h3>
            <p class="muted">${escV109(review.email || 'No email recorded')}</p>
          </div>
          <span class="status-pill pending">${escV109(review.category || 'General Feedback')}</span>
        </div>
        <p>${escV109(review.message || '')}</p>
      </article>
    `;
  };

  function adminReviewCardV109(review = {}) {
    return `
      <article class="card feedback-category-card">
        <div class="card-top">
          <div>
            <p class="eyebrow">${escV109(new Date(review.createdAt || Date.now()).toLocaleDateString())}</p>
            <h3>${escV109(review.userName || 'User')}</h3>
            <p class="muted">${escV109(review.email || 'No email recorded')}</p>
          </div>
          <span class="status-pill pending">${escV109(review.category || 'General Feedback')}</span>
        </div>
        <p>${escV109(review.message || '')}</p>
        <div class="card-actions">
          <button class="btn btn-danger-soft" type="button" data-delete-feedback="${escV109(review.id)}">
            Delete Feedback
          </button>
        </div>
      </article>
    `;
  }

  async function getCurrentUserUuidV109() {
    if (state?.session?.id && uuidV109(state.session.id)) return state.session.id;

    try {
      if (typeof getCurrentProfileId === 'function') {
        const profileId = await getCurrentProfileId();
        if (profileId && uuidV109(profileId)) return profileId;
      }
    } catch (error) {
      console.warn('V109 profile id lookup skipped:', error?.message || error);
    }

    try {
      if (supabaseClient?.auth) {
        const { data } = await supabaseClient.auth.getUser();
        const authId = data?.user?.id;
        if (authId && uuidV109(authId)) return authId;
      }
    } catch (error) {
      console.warn('V109 auth user lookup skipped:', error?.message || error);
    }

    return null;
  }

  async function loadFeedbackFromSupabaseV109({ mergeLocal = true } = {}) {
    if (!SUPABASE_MODE || !supabaseClient || !DB_TABLES?.reviews) return false;

    const { data, error } = await supabaseClient
      .from(DB_TABLES.reviews)
      .select('*')
      .order('submitted_at', { ascending: false });

    if (error) {
      console.error('V109 feedback load error:', error);
      return false;
    }

    const remoteReviews = Array.isArray(data) ? data.map(reviewToLocal) : [];

    if (mergeLocal) {
      const localReviews = read('reviews') || [];
      const map = new Map();

      remoteReviews.forEach((review) => map.set(String(review.id), review));

      localReviews.forEach((review) => {
        const key = String(review.id || '');
        if (!key) return;
        if (!map.has(key) && !uuidV109(key)) {
          map.set(key, review);
        }
      });

      const merged = Array.from(map.values())
        .sort((a, b) => new Date(b.createdAt || 0) - new Date(a.createdAt || 0));

      setLocalData('reviews', merged);
    } else {
      setLocalData('reviews', remoteReviews);
    }

    return true;
  }

  async function insertFeedbackToSupabaseV109(review = {}) {
    if (!SUPABASE_MODE || !supabaseClient || !DB_TABLES?.reviews) {
      return { data: null, error: null };
    }

    const userUuid = await getCurrentUserUuidV109();

    const payload = {
      user_id: userUuid,
      category: review.category || 'General Feedback',
      name: review.userName || state.session?.fullName || 'User',
      email: review.email || state.session?.email || '',
      message: review.message || '',
      status: 'active',
      submitted_at: review.createdAt || nowIsoV109(),
    };

    // Simple select('*') sahaja. Jangan guna profiles:user_id(...).
    const result = await supabaseClient
      .from(DB_TABLES.reviews)
      .insert(payload)
      .select('*')
      .single();

    return result;
  }

  syncReviewsToSupabase = async function syncReviewsToSupabaseV109(reviews = []) {
    if (!Array.isArray(reviews) || !reviews.length) return;
    if (!SUPABASE_MODE || !supabaseClient || !DB_TABLES?.reviews) return;

    for (const review of reviews) {
      if (!review || !String(review.message || '').trim()) continue;

      if (uuidV109(review.id)) {
        const payload = {
          category: review.category || 'General Feedback',
          name: review.userName || state.session?.fullName || 'User',
          email: review.email || state.session?.email || '',
          message: review.message || '',
          status: review.status || 'active',
          submitted_at: review.createdAt || nowIsoV109(),
        };

        const { error } = await supabaseClient
          .from(DB_TABLES.reviews)
          .update(payload)
          .eq('id', review.id);

        if (error) console.error('V109 feedback update error:', error);
        continue;
      }

      const { data, error } = await insertFeedbackToSupabaseV109(review);

      if (error) {
        console.error('V109 feedback insert error:', error);
        review.syncError = error.message || 'Feedback failed to sync.';
      } else if (data?.id) {
        const oldId = review.id;
        review.id = data.id;
        review.userId = data.user_id || review.userId || '';
        review.userName = data.name || review.userName || state.session?.fullName || 'User';
        review.email = data.email || review.email || state.session?.email || '';
        review.category = data.category || review.category || 'General Feedback';
        review.message = data.message || review.message || '';
        review.status = data.status || review.status || 'active';
        review.createdAt = data.submitted_at || data.created_at || review.createdAt || nowIsoV109();

        const all = read('reviews') || [];
        const idx = all.findIndex((item) => item.id === oldId);
        if (idx >= 0) {
          all[idx] = { ...all[idx], ...review };
          setLocalData('reviews', all);
        }
      }
    }

    await loadFeedbackFromSupabaseV109({ mergeLocal: true });
  };

  async function deleteFeedbackFromSupabaseV109(review = {}) {
    if (!SUPABASE_MODE || !supabaseClient || !DB_TABLES?.reviews) return { error: null };

    if (uuidV109(review.id)) {
      return await supabaseClient
        .from(DB_TABLES.reviews)
        .delete()
        .eq('id', review.id);
    }

    // Fallback untuk local/temp feedback yang tiada UUID.
    let query = supabaseClient
      .from(DB_TABLES.reviews)
      .delete()
      .eq('email', review.email || '')
      .eq('message', review.message || '');

    if (review.createdAt) query = query.eq('submitted_at', review.createdAt);

    return await query;
  }

  function myFeedbackListV109() {
    const sessionEmail = String(state.session?.email || '').toLowerCase();
    const sessionId = String(state.session?.id || '');
    return (read('reviews') || [])
      .filter((review) => {
        const emailMatch = String(review.email || '').toLowerCase() === sessionEmail;
        const idMatch = sessionId && String(review.userId || '') === sessionId;
        return emailMatch || idMatch;
      })
      .sort((a, b) => new Date(b.createdAt || 0) - new Date(a.createdAt || 0));
  }

  userFeedback = function userFeedbackV109() {
    setTitle('Contact & Feedback', 'User / Golfer');

    const myReviews = myFeedbackListV109();
    const settings = read('settings');

    content().innerHTML = `
      <div class="card-grid two app-contact-grid">
        <div class="card">
          <p class="eyebrow">Contact Information</p>
          <h2>UPSI Driving Range</h2>
          <ul class="meta-list">
            <li><span>Phone number</span><strong>${escV109(settings.contactPhone || '014 813 4213')}</strong></li>
            <li><span>Email</span><strong>${escV109(settings.contactEmail || 'dingolfzero@gmail.com')}</strong></li>
            <li><span>Address</span><strong>Universiti Pendidikan Sultan Idris, 35900 Tanjong Malim, Perak</strong></li>
            <li><span>Operating hours</span><strong>10:00 AM - 11:00 PM</strong></li>
          </ul>
        </div>
        <div class="card">
          <p class="eyebrow">Submit Feedback</p>
          <h2>Send feedback to administrator</h2>
          <form id="reviewForm" class="form-stack">
            <label>Feedback Category
              <select name="category" required>
                <option>General Feedback</option>
                <option>Booking Issue</option>
                <option>Payment Issue</option>
                <option>Suggestion</option>
                <option>Complaint</option>
              </select>
            </label>
            <label>Feedback Message
              <textarea name="message" placeholder="Write your review, issue, suggestion or complaint" required></textarea>
            </label>
            <button class="btn btn-primary" type="submit">Submit Feedback</button>
          </form>
        </div>
      </div>

      <div style="height:22px"></div>

      <div class="toolbar">
        <div>
          <p class="eyebrow">My Feedback</p>
          <h2>Feedback History</h2>
          <p class="muted">Your submitted feedback will appear here immediately after submit.</p>
        </div>
        <button class="btn btn-soft" type="button" data-refresh-my-feedback>Refresh</button>
      </div>

      <div class="card-grid">${myReviews.map(reviewCard).join('') || empty('No feedback submitted yet.')}</div>
    `;

    content().querySelector('[data-refresh-my-feedback]')?.addEventListener('click', async () => {
      await loadFeedbackFromSupabaseV109({ mergeLocal: true });
      userFeedback();
      toastV109('Feedback refreshed.');
    });

    const form = document.getElementById('reviewForm');
    form?.addEventListener('submit', async (event) => {
      event.preventDefault();

      const formData = new FormData(form);
      const message = String(formData.get('message') || '').trim();
      if (!message) return toastV109('Please write your feedback message.');

      const review = {
        id: localTempIdV109(),
        userId: state.session?.id || '',
        userName: state.session?.fullName || 'User',
        email: state.session?.email || '',
        category: formData.get('category') || 'General Feedback',
        message,
        status: 'active',
        createdAt: nowIsoV109(),
      };

      // 1) Masuk local dulu supaya terus nampak dekat My Feedback History.
      const all = read('reviews') || [];
      all.unshift(review);
      setLocalData('reviews', all);
      form.reset();
      userFeedback();

      // 2) Sync Supabase selepas UI update.
      try {
        await syncReviewsToSupabase([review]);
        userFeedback();
        if (review.syncError) {
          toastV109(`Feedback saved locally, but Supabase failed: ${review.syncError}`);
        } else {
          toastV109('Feedback submitted to the administrator.');
        }
      } catch (error) {
        console.error('V109 feedback submit error:', error);
        toastV109('Feedback saved locally, but Supabase sync failed. Check console.');
      }
    });
  };

  adminReviews = function adminReviewsV109() {
    setTitle('Customer Feedback', 'Administrator Panel');

    const reviews = (read('reviews') || [])
      .sort((a, b) => new Date(b.createdAt || 0) - new Date(a.createdAt || 0));

    content().innerHTML = `
      <div class="toolbar">
        <div>
          <p class="eyebrow">Reviews</p>
          <h2>Review customer feedback</h2>
          <p class="muted">Admin can delete toxic or inappropriate feedback. Delete will also remove it from Supabase.</p>
        </div>
        <button class="btn btn-soft" type="button" data-refresh-feedback>Refresh Feedback</button>
      </div>
      <div class="card-grid">${reviews.map(adminReviewCardV109).join('') || empty('No feedback yet.')}</div>
    `;

    content().querySelector('[data-refresh-feedback]')?.addEventListener('click', async () => {
      await loadFeedbackFromSupabaseV109({ mergeLocal: true });
      adminReviews();
      toastV109('Feedback refreshed.');
    });

    content().querySelectorAll('[data-delete-feedback]').forEach((btn) => {
      btn.addEventListener('click', () => {
        const reviewId = btn.dataset.deleteFeedback;
        const review = (read('reviews') || []).find((item) => String(item.id) === String(reviewId));
        if (!review) return;

        confirmAction({
          title: 'Delete Feedback',
          message: 'Are you sure you want to delete this feedback? This action will remove it from Supabase too.',
          confirmText: 'Delete Feedback',
          danger: true,
          onConfirm: async () => {
            const localNext = (read('reviews') || []).filter((item) => String(item.id) !== String(reviewId));
            setLocalData('reviews', localNext);

            const { error } = await deleteFeedbackFromSupabaseV109(review);
            if (error) {
              console.error('V109 delete feedback error:', error);
              toastV109(`Feedback removed locally, but Supabase delete failed: ${error.message || error}`);
            } else {
              await loadFeedbackFromSupabaseV109({ mergeLocal: false });
              toastV109('Feedback deleted.');
            }

            adminReviews();
          },
        });
      });
    });
  };

  const oldHydrateFeedbackV109 = typeof loadSupabaseDataToLocal === 'function' ? loadSupabaseDataToLocal : null;
  if (oldHydrateFeedbackV109 && !window.__upsiV109HydrateFeedbackPatched) {
    window.__upsiV109HydrateFeedbackPatched = true;
    loadSupabaseDataToLocal = async function loadSupabaseDataToLocalV109(options = {}) {
      const result = await oldHydrateFeedbackV109(options);
      if (SUPABASE_MODE && supabaseClient) {
        await loadFeedbackFromSupabaseV109({ mergeLocal: true });
      }
      return result;
    };
  }

  // Load feedback once after all scripts are ready.
  setTimeout(() => {
    loadFeedbackFromSupabaseV109({ mergeLocal: true }).catch((error) => {
      console.warn('V109 initial feedback load skipped:', error?.message || error);
    });
  }, 900);
})();

</script>
<?php
}

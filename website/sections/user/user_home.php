<?php
/**
 * user_home.php
 * Bahagian: User Home
 *
 * V108: CSS dan JavaScript runtime dibahagikan ke semua section.
 * Jadi home_page.php tidak lagi memegang semua coding sistem.
 *
 * Runtime chunk: 16/22
 * Fungsi berkaitan untuk presentation: userDashboard
 */


function upsi_section_user_home_styles(): void
{
?>
<style>
/* =========================================================
   V108 CSS chunk 16/22
   Bahagian: User Home
   ========================================================= */
.v65-cal-day {
  border: 1px solid rgba(9, 95, 59, .14);
  background: #fff;
  color: var(--charcoal);
  font-weight: 900;
  cursor: pointer;
}
.v65-cal-day:hover:not(:disabled),
.v65-cal-day.active {
  background: var(--dark-green);
  color: #fff;
  border-color: var(--dark-green);
}
.v65-cal-day:disabled {
  opacity: .32;
  cursor: not-allowed;
  background: #f5f7f5;
}
body.dark-mode .v65-calendar-popover,
body.dark .v65-calendar-popover {
  background: var(--dark-card);
  color: var(--dark-text);
  border-color: var(--dark-border);
}
body.dark-mode .v65-date-trigger,
body.dark .v65-date-trigger,
body.dark-mode .v65-cal-head button,
body.dark .v65-cal-head button,
body.dark-mode .v65-cal-day,
body.dark .v65-cal-day {
  background: rgba(14, 45, 31, .9);
  color: var(--dark-text);
  border-color: var(--dark-border);
}
@media (max-width: 700px) {
  .lane-chip { flex: 1 1 calc(50% - 10px); max-width: none; }
  .lane-status-head span { text-align: left; }
}

/* =========================================================
   V66 - single clean date calendar + final lane block UI
   ========================================================= */
.v66-hidden-date-select {
  position: absolute !important;
  width: 1px !important;
  height: 1px !important;
  opacity: 0 !important;
  pointer-events: none !important;
  margin: 0 !important;
  padding: 0 !important;
  border: 0 !important;
}
.v66-hide-original-date-icon { display: none !important; }
.v66-date-trigger {
  width: 100%;
  min-height: 58px;
  border: 0;
  border-radius: 18px;
  background: var(--soft-green);
  color: var(--charcoal);
  display: flex;
  align-items: center;
  gap: 12px;
  padding: 8px 14px;
  cursor: pointer;
  font: inherit;
  font-weight: 900;
  text-align: left;
}
.v66-date-trigger strong { flex: 1; }
.v66-date-trigger em { font-style: normal; color: var(--muted); }
.v66-date-trigger:hover,
.v66-date-trigger:focus { outline: none; box-shadow: inset 0 0 0 1px rgba(15,81,50,.35); }
.v66-calendar-popover {
  position: fixed;
  z-index: 100000;
  width: min(360px, calc(100vw - 24px));
  background: #fff;
  border: 1px solid rgba(9, 95, 59, .20);
  border-radius: 24px;
  box-shadow: 0 24px 70px rgba(10, 31, 21, .22);
  padding: 18px;
  color: var(--charcoal);
}
.v66-cal-head {
  display: flex;
  align-items: center;
  justify-content: space-between;
  gap: 12px;
  margin-bottom: 8px;
}
.v66-cal-head button {
  width: 40px;
  height: 40px;
  border-radius: 14px;
  border: 1px solid rgba(9, 95, 59, .16);
  background: var(--soft-green);
  color: var(--dark-green);
  font-size: 24px;
  cursor: pointer;
}
.v66-cal-selected { color: var(--muted); font-weight: 800; margin-bottom: 12px; }
.v66-cal-week,
.v66-cal-grid {
  display: grid;
  grid-template-columns: repeat(7, 1fr);
  gap: 6px;
}
.v66-cal-week span {
  text-align: center;
  font-size: 12px;
  font-weight: 900;
  color: var(--muted);
  padding: 4px 0;
}
.v66-cal-day,
.v66-cal-empty { height: 40px; border-radius: 13px; }
.v66-cal-day {
  border: 1px solid rgba(9, 95, 59, .14);
  background: #fff;
  color: var(--charcoal);
  font-weight: 900;
  cursor: pointer;
}
.v66-cal-day:hover:not(:disabled),
.v66-cal-day.active {
  background: var(--dark-green);
  color: #fff;
  border-color: var(--dark-green);
}
.v66-cal-day:disabled { opacity: .32; cursor: not-allowed; background: #f5f7f5; }
.v66-lane-note { margin-top: 10px; font-size: 12px; }
body.dark-mode .v66-calendar-popover,
body.dark .v66-calendar-popover { background: var(--dark-card); color: var(--dark-text); border-color: var(--dark-border); }
body.dark-mode .v66-date-trigger,
body.dark .v66-date-trigger,
body.dark-mode .v66-cal-head button,
body.dark .v66-cal-head button,
body.dark-mode .v66-cal-day,
body.dark .v66-cal-day { background: rgba(14, 45, 31, .9); color: var(--dark-text); border-color: var(--dark-border); }

/* =========================================================
   V75 Admin editable Login + Inside Website/App Background
   ========================================================= */
:root {
  --upsi-login-background-image: url("/assets/background-login-default.png");
  --upsi-app-background-image: url("/assets/background-app-default.png");
}

.auth-app-layout {
  position: relative;
  isolation: isolate;
  overflow: hidden;
  background:
    linear-gradient(180deg, rgba(244, 251, 245, 0.42), rgba(255, 255, 255, 0.76)),
    var(--upsi-login-background-image) center center / cover no-repeat fixed !important;
}

.auth-app-layout::before {
  content: "";
  position: fixed;
  inset: 0;
  z-index: -1;
  background:
    radial-gradient(circle at 50% 0%, rgba(255,255,255,.42), transparent 42%),
    linear-gradient(180deg, rgba(244, 251, 245, 0.28), rgba(255, 255, 255, 0.72));
  pointer-events: none;
}

.auth-app-card,
.landing-section {
  backdrop-filter: blur(10px);
}

.app-shell .main-area {
  position: relative;
  background:
    linear-gradient(180deg, rgba(244, 251, 245, 0.78), rgba(255, 255, 255, 0.84)),
    var(--upsi-app-background-image) center center / cover no-repeat fixed;
}

.app-shell .topbar {
  background: rgba(247, 255, 248, 0.82);
}

.app-shell .page-content {
  position: relative;
  z-index: 1;
  border-radius: 28px;
  margin: 16px 28px 28px;
  background:
    linear-gradient(180deg, rgba(244, 251, 245, 0.72), rgba(255, 255, 255, 0.82)),
    var(--upsi-app-background-image) center center / cover no-repeat fixed;
  border: 1px solid rgba(15, 81, 50, 0.12);
  box-shadow: inset 0 0 0 1px rgba(255,255,255,.5);
}


</style>
<?php
}

function upsi_section_user_home_scripts(): void
{
?>
<script>
/* =========================================================
   V108 JavaScript chunk 16/22
   Bahagian: User Home
   ========================================================= */
(function v53WebsiteOnlyCleanFlowPatch() {
  const TRAINER_DATE_STORAGE_V53 = 'upsiGolfTrainerAvailableDates';
  const CONTACT_DEFAULTS_V53 = {
    phone: '014 813 4213',
    email: 'dingolfzero@gmail.com',
    address: 'Universiti Pendidikan Sultan Idris, 35900 Tanjong Malim, Perak Darul Ridzuan, Malaysia',
    hours: '10:00 AM - 11:00 PM',
  };

  if (typeof DB_TABLES === 'object') DB_TABLES.trainerAvailableDates = DB_TABLES.trainerAvailableDates || 'trainer_available_dates';
  if (typeof defaultData === 'object' && defaultData.settings) {
    defaultData.settings.contactAddress = defaultData.settings.contactAddress || CONTACT_DEFAULTS_V53.address;
    defaultData.settings.operatingHours = defaultData.settings.operatingHours || CONTACT_DEFAULTS_V53.hours;
  }

  const v53BaseSettingsRowsToLocal = typeof settingsRowsToLocal === 'function' ? settingsRowsToLocal : null;
  if (v53BaseSettingsRowsToLocal) {
    settingsRowsToLocal = function settingsRowsToLocalV53(rows = []) {
      const base = v53BaseSettingsRowsToLocal(rows);
      const map = Object.fromEntries((rows || []).map((row) => [row.setting_key, row.setting_value || '']));
      return {
        ...base,
        contactAddress: map.contact_address || base.contactAddress || CONTACT_DEFAULTS_V53.address,
        operatingHours: map.operating_hours || base.operatingHours || CONTACT_DEFAULTS_V53.hours,
      };
    };
  }

  const v53BaseSyncSettingsToSupabase = typeof syncSettingsToSupabase === 'function' ? syncSettingsToSupabase : null;
  if (v53BaseSyncSettingsToSupabase) {
    syncSettingsToSupabase = async function syncSettingsToSupabaseV53(settings = {}) {
      await v53BaseSyncSettingsToSupabase(settings);
      if (!SUPABASE_MODE || !supabaseClient) return;
      const rows = [
        ['contact_address', settings.contactAddress || CONTACT_DEFAULTS_V53.address],
        ['operating_hours', settings.operatingHours || CONTACT_DEFAULTS_V53.hours],
      ].map(([setting_key, setting_value]) => ({ setting_key, setting_value }));
      const { error } = await supabaseClient.from(DB_TABLES.settings).upsert(rows, { onConflict: 'setting_key' });
      if (error) console.error('V53 contact settings sync error:', error);
    };
  }

  function v53Esc(value) { return typeof escapeHtml === 'function' ? escapeHtml(value) : String(value ?? ''); }
  function v53Today() { return new Date().toISOString().slice(0, 10); }
  function v53Pad(value) { return String(value).padStart(2, '0'); }
  function v53DateParts(dateString) {
    const d = dateString ? new Date(`${dateString}T00:00:00`) : new Date();
    if (Number.isNaN(d.getTime())) return new Date();
    return d;
  }
  function v53IsoDate(date) {
    return `${date.getFullYear()}-${v53Pad(date.getMonth() + 1)}-${v53Pad(date.getDate())}`;
  }
  function v53DateRange(start, end) {
    if (!start || !end) return [];
    const s = v53DateParts(start);
    const e = v53DateParts(end);
    if (s > e) return [];
    const out = [];
    const cursor = new Date(s);
    while (cursor <= e) {
      out.push(v53IsoDate(cursor));
      cursor.setDate(cursor.getDate() + 1);
    }
    return out;
  }
  function v53MonthName(date) {
    return date.toLocaleDateString(undefined, { month: 'long', year: 'numeric' });
  }
  function v53PrettyDate(value) {
    return typeof formatDateDisplay === 'function' ? formatDateDisplay(value) : value;
  }
  function v53Money(value) { return typeof money === 'function' ? money(value) : `RM ${Number(value || 0).toFixed(2)}`; }
  function v53Status(value) { return typeof statusPill === 'function' ? statusPill(value) : `<span>${v53Esc(value)}</span>`; }

  function v53ReadTrainerDates() {
    try {
      return JSON.parse(localStorage.getItem(TRAINER_DATE_STORAGE_V53) || '[]') || [];
    } catch (error) {
      return [];
    }
  }
  function v53TrainerNameById(trainerId = '') {
    return (read('trainers').find((trainer) => String(trainer.id) === String(trainerId)) || {}).name || 'Trainer';
  }
  function v53SetTrainerDates(list = []) {
    const clean = (list || [])
      .filter((item) => item && item.trainerId && item.date)
      .map((item) => ({
        id: item.id || makeId('TD'),
        trainerId: item.trainerId,
        trainerName: item.trainerName || v53TrainerNameById(item.trainerId),
        date: item.date,
        status: item.status === 'Unavailable' || item.status === 'inactive' ? 'Unavailable' : 'Available',
        createdAt: item.createdAt || new Date().toISOString(),
      }))
      .sort((a, b) => String(a.date).localeCompare(String(b.date)) || String(a.trainerName).localeCompare(String(b.trainerName)));
    localStorage.setItem(TRAINER_DATE_STORAGE_V53, JSON.stringify(clean));
    return clean;
  }
  async function v53FetchTrainerDatesFromSupabase() {
    if (!SUPABASE_MODE || !supabaseClient) return v53ReadTrainerDates();
    const { data, error } = await supabaseClient
      .from(DB_TABLES.trainerAvailableDates)
      .select('*, trainers:trainer_id(full_name)')
      .order('available_date', { ascending: true });
    if (error) {
      console.warn('V53 trainer date fetch skipped:', error.message || error);
      return v53ReadTrainerDates();
    }
    return v53SetTrainerDates((data || []).map((row) => ({
      id: row.id,
      trainerId: row.trainer_id,
      trainerName: row.trainers?.full_name || v53TrainerNameById(row.trainer_id),
      date: row.available_date,
      status: ['active', 'available'].includes(String(row.status || '').toLowerCase()) ? 'Available' : 'Unavailable',
      createdAt: row.created_at || new Date().toISOString(),
    })));
  }
  async function v53SaveTrainerDate(item = {}) {
    const localItem = {
      id: item.id || makeId('TD'),
      trainerId: item.trainerId,
      trainerName: v53TrainerNameById(item.trainerId),
      date: item.date,
      status: item.status || 'Available',
      createdAt: item.createdAt || new Date().toISOString(),
    };
    if (!localItem.trainerId || !localItem.date) return false;

    if (SUPABASE_MODE && supabaseClient && typeof isUuid === 'function' && isUuid(localItem.trainerId)) {
      const payload = {
        trainer_id: localItem.trainerId,
        available_date: localItem.date,
        status: localItem.status === 'Available' ? 'active' : 'inactive',
      };
      let result;
      if (typeof isUuid === 'function' && isUuid(localItem.id)) {
        result = await supabaseClient.from(DB_TABLES.trainerAvailableDates).update(payload).eq('id', localItem.id).select('*, trainers:trainer_id(full_name)').maybeSingle();
      } else {
        result = await supabaseClient.from(DB_TABLES.trainerAvailableDates).upsert(payload, { onConflict: 'trainer_id,available_date' }).select('*, trainers:trainer_id(full_name)').maybeSingle();
      }
      if (result.error) {
        console.error('V53 trainer date save error:', result.error);
        toast('Trainer date failed to save. Run/check V49/V53 SQL policy.');
        return false;
      }
      console.debug('v53SaveTrainerDate result:', result);
      await v53FetchTrainerDatesFromSupabase();
      // notify other parts of the app that trainer dates have been updated
      try { document.dispatchEvent(new CustomEvent('trainerDatesUpdated', { detail: { trainerId: localItem.trainerId, date: localItem.date } })); } catch (e) { /* ignore */ }
      return true;
    }

    const list = v53ReadTrainerDates();
    const index = list.findIndex((d) => d.trainerId === localItem.trainerId && d.date === localItem.date);
    if (index >= 0) list[index] = { ...list[index], ...localItem };
    else list.push(localItem);
    v53SetTrainerDates(list);
    return true;
  }
  async function v53DeleteTrainerDate(id = '') {
    if (!id) return false;
    if (SUPABASE_MODE && supabaseClient && typeof isUuid === 'function' && isUuid(id)) {
      const { error } = await supabaseClient.from(DB_TABLES.trainerAvailableDates).delete().eq('id', id);
      if (error) {
        console.error('V53 trainer date delete error:', error);
        toast('Trainer date failed to delete. Check Supabase policy.');
        return false;
      }
      await v53FetchTrainerDatesFromSupabase();
      return true;
    }
    v53SetTrainerDates(v53ReadTrainerDates().filter((item) => String(item.id) !== String(id)));
    return true;
  }
  function v53TrainerDatesFor(trainerId = '', includePast = false) {
    const today = v53Today();
    return v53ReadTrainerDates()
      .filter((item) => !trainerId || String(item.trainerId) === String(trainerId))
      .filter((item) => includePast || item.date >= today)
      .sort((a, b) => String(a.date).localeCompare(String(b.date)));
  }
  function v53AvailableTrainerDates(trainerId = '') {
    return v53TrainerDatesFor(trainerId, false).filter((item) => item.status === 'Available').map((item) => item.date);
  }
  function v53WhatsappNumber(phone = '') {
    let digits = String(phone || '').replace(/[^0-9]/g, '');
    if (!digits) return '';
    if (digits.startsWith('0')) digits = `60${digits.slice(1)}`;
    return digits;
  }
  function v53WhatsappButton(phone = '', label = 'WhatsApp Trainer', text = '') {
    const number = v53WhatsappNumber(phone);
    if (!number) return `<button class="btn btn-soft" type="button" disabled>No WhatsApp</button>`;
    return `<a class="btn btn-soft whatsapp-btn" href="https://wa.me/${number}?text=${encodeURIComponent(text || 'Hello, I am contacting you from UPSI Golf Booking System.')}" target="_blank" rel="noopener noreferrer">${v53Esc(label)}</a>`;
  }

  function v53OpenCalendarPicker({ title = 'Select date', dates = [], selected = '', minDate = v53Today(), onPick = null } = {}) {
    const allowed = Array.isArray(dates) ? [...new Set(dates.filter(Boolean))].sort() : [];
    let current = v53DateParts(selected || allowed[0] || minDate || v53Today());
    current.setDate(1);
    let selectedValue = selected || allowed[0] || '';

    const renderMonth = () => {
      const first = new Date(current.getFullYear(), current.getMonth(), 1);
      const last = new Date(current.getFullYear(), current.getMonth() + 1, 0);
      const startOffset = first.getDay();
      const cells = [];
      for (let i = 0; i < startOffset; i += 1) cells.push('<span class="calendar-empty"></span>');
      for (let day = 1; day <= last.getDate(); day += 1) {
        const iso = v53IsoDate(new Date(current.getFullYear(), current.getMonth(), day));
        const disabled = allowed.length ? !allowed.includes(iso) : iso < minDate;
        const active = iso === selectedValue;
        cells.push(`<button type="button" class="calendar-day ${active ? 'active' : ''}" data-calendar-pick="${iso}" ${disabled ? 'disabled' : ''}>${day}</button>`);
      }
      return `
        <div class="v53-calendar">
          <div class="v53-calendar-top"><p class="muted">${v53Esc(title)}</p><strong>${selectedValue ? v53PrettyDate(selectedValue) : 'Choose date'}</strong></div>
          <div class="v53-calendar-bar">
            <button class="calendar-nav-btn" type="button" data-calendar-prev>‹</button>
            <strong>${v53Esc(v53MonthName(current))}</strong>
            <button class="calendar-nav-btn" type="button" data-calendar-next>›</button>
          </div>
          <div class="calendar-weekdays"><span>S</span><span>M</span><span>T</span><span>W</span><span>T</span><span>F</span><span>S</span></div>
          <div class="calendar-grid">${cells.join('')}</div>
          <div class="calendar-actions"><button class="btn btn-soft" type="button" data-v78-close-calendar>Cancel</button></div>
        </div>`;
    };

    const modalCard = document.querySelector('#modalRoot .modal-card');
    if (!modalCard) return;
    modalCard.querySelector('[data-v53-calendar-overlay]')?.remove();
    modalCard.classList.add('v78-calendar-host');
    const overlay = document.createElement('div');
    overlay.className = 'v78-calendar-overlay';
    overlay.setAttribute('data-v53-calendar-overlay', 'true');
    overlay.innerHTML = `<div class="v78-calendar-panel" data-v53-calendar-wrap>${renderMonth()}</div>`;
    modalCard.appendChild(overlay);
    // make overlay focusable and move focus to it to ensure pointer events are captured
    overlay.setAttribute('tabindex', '-1');
    try { overlay.focus(); } catch (e) { /* ignore */ }

    const closeCalendarOnly = () => overlay.remove();
    const bind = () => {
      const wrap = overlay.querySelector('[data-v53-calendar-wrap]');
      if (!wrap) return;
      wrap.querySelector('[data-calendar-prev]')?.addEventListener('click', (event) => {
        event.preventDefault();
        event.stopPropagation();
        current.setMonth(current.getMonth() - 1);
        wrap.innerHTML = renderMonth();
        bind();
      });
      wrap.querySelector('[data-calendar-next]')?.addEventListener('click', (event) => {
        event.preventDefault();
        event.stopPropagation();
        current.setMonth(current.getMonth() + 1);
        wrap.innerHTML = renderMonth();
        bind();
      });
      wrap.querySelectorAll('[data-calendar-pick]').forEach((btn) => btn.addEventListener('click', (event) => {
        event.preventDefault();
        event.stopPropagation();
        const value = btn.dataset.calendarPick;
        selectedValue = value;
        if (typeof onPick === 'function') onPick(value);
        closeCalendarOnly();
      }));
      wrap.querySelector('[data-v78-close-calendar]')?.addEventListener('click', (event) => {
        event.preventDefault();
        event.stopPropagation();
        closeCalendarOnly();
      });
    };
    overlay.addEventListener('click', (event) => {
      if (event.target === overlay) closeCalendarOnly();
    });
    bind();
  }

  function v53AttachCalendarToSelect(select, labelText = 'Select date') {
    if (!select || select.dataset.v53CalendarReady === 'true') return;
    select.dataset.v53CalendarReady = 'true';
    select.classList.add('v53-hidden-native-select');
    const trigger = document.createElement('button');
    trigger.type = 'button';
    trigger.className = 'v53-date-trigger';
    const updateTrigger = () => {
      trigger.innerHTML = `<span>📅</span><strong>${select.value ? v53PrettyDate(select.value) : labelText}</strong>`;
    };
    updateTrigger();
    select.insertAdjacentElement('afterend', trigger);
    select.addEventListener('change', updateTrigger);
    // Use pointerdown to improve responsiveness on touch and click devices
    trigger.addEventListener('pointerdown', (ev) => {
      ev.preventDefault();
      ev.stopPropagation();
      const dates = Array.from(select.options).map((option) => option.value).filter(Boolean);
      v53OpenCalendarPicker({ title: labelText, dates, selected: select.value, onPick: (value) => {
        select.value = value;
        select.dispatchEvent(new Event('change', { bubbles: true }));
        updateTrigger();
      }});
    });
  }
  function v53EnhanceBookingCalendar(root = document) {
    root.querySelectorAll('select[data-modal-date], #trainerBookingForm select[name="date"]').forEach((select) => v53AttachCalendarToSelect(select, 'Select date'));
  }

  function v53ContactValues() {
    const settings = read('settings') || {};
    return {
      phone: settings.contactPhone || CONTACT_DEFAULTS_V53.phone,
      email: settings.contactEmail || CONTACT_DEFAULTS_V53.email,
      address: settings.contactAddress || CONTACT_DEFAULTS_V53.address,
      hours: settings.operatingHours || CONTACT_DEFAULTS_V53.hours,
    };
  }
  function v53ContactCardsMarkup() {
    const c = v53ContactValues();
    return `
      <div class="v53-contact-card-list">
        <article class="v53-contact-info-card"><span class="v53-contact-icon">📞</span><div><h3>Phone number</h3><p>${v53Esc(c.phone)}</p></div></article>
        <article class="v53-contact-info-card"><span class="v53-contact-icon">✉️</span><div><h3>Email</h3><p>${v53Esc(c.email)}</p></div></article>
        <article class="v53-contact-info-card"><span class="v53-contact-icon">📍</span><div><h3>Address</h3><p>${v53Esc(c.address)}</p></div></article>
        <article class="v53-contact-info-card"><span class="v53-contact-icon">🕘</span><div><h3>Operating hours</h3><p>${v53Esc(c.hours)}</p></div></article>
      </div>`;
  }

  function v53TrainerCompactCard(trainer = {}, includeAdminActions = false) {
    return `
      <article class="card trainer-card-clean trainer-card-v53">
        <div class="card-top"><div><p class="eyebrow">Trainer</p><h3>${v53Esc(trainer.name || 'Trainer')}</h3></div><div class="card-icon">🏌️</div></div>
        <ul class="meta-list">
          <li><span>No. Phone</span><strong>${v53Esc(trainer.phone || '-')}</strong></li>
          <li><span>Email</span><strong>${v53Esc(trainer.email || '-')}</strong></li>
          <li><span>Alamat</span><strong>${v53Esc(trainer.address || '-')}</strong></li>
          <li><span>Specialist</span><strong>${v53Esc(trainer.description || 'Golf coaching and guided practice')}</strong></li>
          <li><span>Training price</span><strong>Discuss directly with trainer</strong></li>
          <li><span>Status</span><strong>${v53Esc(trainer.status || 'Available')}</strong></li>
        </ul>
        <div class="trainer-info-note"><span class="info-icon">ℹ️</span><p>Time, price and training slot will be arranged directly with the trainer through WhatsApp.</p></div>
        <div class="trainer-availability-row"><button class="btn btn-soft availability-btn" type="button" data-view-trainer-dates="${v53Esc(trainer.id || '')}">View Available Date (${v53AvailableTrainerDates(trainer.id).length})</button></div>
        <div class="card-actions contact-action-stack">
          ${v53WhatsappButton(trainer.phone, 'WhatsApp Trainer', `Hello ${trainer.name || 'Trainer'}, I want to discuss golf training time, price and slot at UPSI Driving Range.`)}
          ${includeAdminActions ? `
            <button class="btn btn-soft" data-edit-trainer="${v53Esc(trainer.id || '')}">Edit</button>
            <button class="btn btn-danger-soft" data-delete-trainer="${v53Esc(trainer.id || '')}">Delete</button>
          ` : `<button class="btn btn-primary" data-book-trainer="${v53Esc(trainer.id || '')}">Book Trainer</button>`}
        </div>
      </article>`;
  }

  trainerCard = function trainerCardV53(trainer = {}) {
    return v53TrainerCompactCard(trainer, false);
  };

  openTrainerForm = function openTrainerFormV53(trainer = null) {
    const safe = trainer || {};
    openModal(`
      <div class="modal-head"><div><p class="eyebrow">Trainer Form</p><h2>${trainer ? 'Edit Trainer' : 'Add Trainer'}</h2><p class="muted">Trainer booking uses date only. Time and price are discussed through WhatsApp.</p></div><button class="close-btn" data-close-modal>&times;</button></div>
      <form id="trainerFormV53" class="form-grid compact-modal-form">
        <label class="wide">Trainer Name<input name="name" value="${v53Esc(safe.name || safe.fullName || '')}" required></label>
        <label>No. Phone<input name="phone" value="${v53Esc(safe.phone || '')}" required></label>
        <label>Email<input name="email" type="email" value="${v53Esc(safe.email || '')}" required></label>
        <label class="wide">Alamat<input name="address" value="${v53Esc(safe.address || '')}" required></label>
        <label class="wide">Specialist / Expertise<textarea name="description" placeholder="Example: beginner swing basics, stance correction, driving accuracy" required>${v53Esc(safe.description || '')}</textarea></label>
        <label>Status<select name="status"><option ${safe.status !== 'Unavailable' ? 'selected' : ''}>Available</option><option ${safe.status === 'Unavailable' ? 'selected' : ''}>Unavailable</option></select></label>
        <button class="btn btn-primary wide" type="submit">Save Trainer</button>
      </form>`);
    const form = document.getElementById('trainerFormV53');
    form?.addEventListener('submit', async (event) => {
      event.preventDefault();
      const data = new FormData(form);
      const payload = {
        id: safe.id || makeId('T'),
        name: String(data.get('name') || '').trim(),
        phone: String(data.get('phone') || '').trim(),
        email: String(data.get('email') || '').trim().toLowerCase(),
        address: String(data.get('address') || '').trim(),
        description: String(data.get('description') || '').trim(),
        rate: 0,
        hourlyRate: 0,
        minBookingHours: 1,
        maxBookingHours: 1,
        status: data.get('status') || 'Available',
        profileImage: safe.profileImage || '',
        createdAt: safe.createdAt || new Date().toISOString(),
      };

      if (SUPABASE_MODE && supabaseClient) {
        const dbPayload = typeof trainerDbPayloadV30 === 'function' ? trainerDbPayloadV30(payload) : {
          full_name: payload.name,
          phone: payload.phone,
          email: payload.email,
          address: payload.address,
          description: payload.description,
          status: typeof availabilityToDb === 'function' ? availabilityToDb(payload.status) : 'active',
        };
        let result;
        if (typeof isUuid === 'function' && isUuid(safe.id)) {
          result = await supabaseClient.from(DB_TABLES.trainers).update(dbPayload).eq('id', safe.id).select().maybeSingle();
        } else if (payload.email) {
          const existing = await supabaseClient.from(DB_TABLES.trainers).select('id').eq('email', payload.email).maybeSingle();
          result = existing.data?.id
            ? await supabaseClient.from(DB_TABLES.trainers).update(dbPayload).eq('id', existing.data.id).select().maybeSingle()
            : await supabaseClient.from(DB_TABLES.trainers).insert(dbPayload).select().maybeSingle();
        } else {
          result = await supabaseClient.from(DB_TABLES.trainers).insert(dbPayload).select().maybeSingle();
        }
        if (result?.error) {
          console.error('V53 trainer save error:', result.error);
          toast(result.error.message || 'Failed to save trainer.');
          return;
        }
        if (typeof refreshTrainersFromSupabaseV30 === 'function') await refreshTrainersFromSupabaseV30();
      } else {
        const trainers = read('trainers');
        const index = trainers.findIndex((t) => t.id === payload.id || String(t.email || '').toLowerCase() === payload.email);
        if (index >= 0) trainers[index] = { ...trainers[index], ...payload };
        else trainers.push(payload);
        setLocalData('trainers', trainers);
      }
      closeModal();
      if (state.currentPage === 'trainers') adminTrainers();
      else renderPage();
      toast('Trainer saved.');
    });
  };

  function v53OpenTrainerDateForm(existing = null, preferredTrainerId = '') {
    const trainers = read('trainers').filter((trainer) => trainer.status !== 'Unavailable');
    if (!trainers.length) return toast('Please add an available trainer first.');
    const selectedTrainerId = existing?.trainerId || preferredTrainerId || trainers[0]?.id || '';
    const today = v53Today();
    const inSeven = v53IsoDate(new Date(Date.now() + 7 * 86400000));
    openModal(`
      <div class="modal-head"><div><p class="eyebrow">Trainer Date</p><h2>${existing ? 'Edit Trainer Available Date' : 'Add Trainer Available Date'}</h2><p class="muted">Add one date or a date range. Trainer booking remains date-only.</p></div><button class="close-btn" data-close-modal>&times;</button></div>
      <form id="trainerDateFormV53" class="form-grid compact-modal-form">
        <label class="wide">Trainer<select name="trainerId" required>${trainers.map((trainer) => `<option value="${v53Esc(trainer.id)}" ${String(selectedTrainerId) === String(trainer.id) ? 'selected' : ''}>${v53Esc(trainer.name)}</option>`).join('')}</select></label>
        ${existing ? '' : `<label>Date Mode<select name="dateMode" data-v53-trainer-date-mode><option value="single">Single date</option><option value="range">Date range / Bulk add</option></select></label>`}
        <label data-v53-single-date>Available Date<input type="date" name="date" min="${today}" value="${v53Esc(existing?.date || today)}" required></label>
        ${existing ? '' : `<label class="hidden" data-v53-range-start>Start Date<input type="date" name="startDate" min="${today}" value="${today}"></label><label class="hidden" data-v53-range-end>End Date<input type="date" name="endDate" min="${today}" value="${inSeven}"></label>`}
        <label>Status<select name="status"><option value="Available" ${existing?.status !== 'Unavailable' ? 'selected' : ''}>Available</option><option value="Unavailable" ${existing?.status === 'Unavailable' ? 'selected' : ''}>Unavailable</option></select></label>
        <button class="btn btn-primary wide" type="submit">Save Trainer Date</button>
      </form>`);
    const form = document.getElementById('trainerDateFormV53');
    const mode = form?.querySelector('[data-v53-trainer-date-mode]');
    const updateMode = () => {
      if (!mode) return;
      const range = mode.value === 'range';
      form.querySelector('[data-v53-single-date]')?.classList.toggle('hidden', range);
      form.querySelector('[data-v53-range-start]')?.classList.toggle('hidden', !range);
      form.querySelector('[data-v53-range-end]')?.classList.toggle('hidden', !range);
      if (form.date) form.date.required = !range;
      if (form.startDate) form.startDate.required = range;
      if (form.endDate) form.endDate.required = range;
    };
    mode?.addEventListener('change', updateMode);
    updateMode();
    form?.addEventListener('submit', async (event) => {
      event.preventDefault();
      const data = new FormData(form);
      let dates = existing ? [data.get('date')] : (data.get('dateMode') === 'range' ? v53DateRange(data.get('startDate'), data.get('endDate')) : [data.get('date')]);
      dates = [...new Set(dates.filter(Boolean).filter((date) => date >= today))];
      if (!dates.length) return toast('Please choose a valid future date.');
      let saved = 0;
      for (const date of dates) {
        const ok = await v53SaveTrainerDate({ id: dates.length === 1 ? existing?.id : undefined, trainerId: data.get('trainerId'), date, status: data.get('status'), createdAt: existing?.createdAt });
        if (ok) saved += 1;
      }
      if (!saved) return;
      closeModal();
      adminTrainers();
      toast(`${saved} trainer date${saved === 1 ? '' : 's'} saved.`);
    });
  }

  function v53OpenAdminTrainerDatesModal(trainerId = '') {
    const trainer = read('trainers').find((item) => String(item.id) === String(trainerId));
    const rows = v53TrainerDatesFor(trainerId, true);
    openModal(`
      <div class="modal-head"><div><p class="eyebrow">Trainer Available Dates</p><h2>${v53Esc(trainer?.name || 'Trainer')}</h2><p class="muted">Semua tarikh dan status trainer dikumpulkan di sini.</p></div><button class="close-btn" data-close-modal>&times;</button></div>
      <div class="row-actions modal-actions-top"><button class="btn btn-primary" type="button" data-v53-modal-add-trainer-date="${v53Esc(trainerId)}">Add Date / Range</button></div>
      <div class="table-card compact-modal-table"><div class="table-wrap"><table>
        <thead><tr><th>Date</th><th>Status</th><th>Action</th></tr></thead>
        <tbody>${rows.length ? rows.map((item) => `
          <tr><td><strong>${v53Esc(v53PrettyDate(item.date))}</strong><br><span class="muted">${v53Esc(item.date)}</span></td><td>${v53Status(item.status)}</td><td><div class="row-actions compact-actions"><button class="btn btn-soft" data-v53-edit-trainer-date="${v53Esc(item.id)}">Edit</button><button class="btn btn-danger-soft" data-v53-delete-trainer-date="${v53Esc(item.id)}">Delete</button></div></td></tr>
        `).join('') : '<tr><td colspan="3">No trainer date record yet.</td></tr>'}</tbody>
      </table></div></div>`);
    document.querySelector('[data-v53-modal-add-trainer-date]')?.addEventListener('click', () => v53OpenTrainerDateForm(null, trainerId));
    document.querySelectorAll('[data-v53-edit-trainer-date]').forEach((btn) => btn.addEventListener('click', () => {
      const item = v53ReadTrainerDates().find((date) => String(date.id) === String(btn.dataset.v53EditTrainerDate));
      if (item) v53OpenTrainerDateForm(item, trainerId);
    }));
    document.querySelectorAll('[data-v53-delete-trainer-date]').forEach((btn) => btn.addEventListener('click', () => {
      const item = v53ReadTrainerDates().find((date) => String(date.id) === String(btn.dataset.v53DeleteTrainerDate));
      if (!item) return;
      confirmAction({
        title: 'Delete Trainer Date',
        message: `Delete ${v53PrettyDate(item.date)} for ${trainer?.name || 'Trainer'}?`,
        confirmText: 'Delete Date',
        danger: true,
        onConfirm: async () => {
          const ok = await v53DeleteTrainerDate(item.id);
          if (!ok) return;
          closeModal();
          adminTrainers();
          toast('Trainer available date deleted.');
        },
      });
    }));
  }

  function v53BindTrainerDateButtons(root = content()) {
    root.querySelectorAll('[data-view-trainer-dates]').forEach((btn) => {
      btn.addEventListener('click', () => {
        const trainerId = btn.dataset.viewTrainerDates;
        if (state.session?.role === 'admin' || state.session?.role === 'main_admin') v53OpenAdminTrainerDatesModal(trainerId);
        else {
          const trainer = read('trainers').find((item) => String(item.id) === String(trainerId));
          const rows = v53AvailableTrainerDates(trainerId);
          openModal(`
            <div class="modal-head"><div><p class="eyebrow">Trainer Availability</p><h2>${v53Esc(trainer?.name || 'Trainer')}</h2><p class="muted">Trainer booking uses date only. Time is discussed through WhatsApp.</p></div><button class="close-btn" data-close-modal>&times;</button></div>
            <div class="availability-list trainer-date-only-list">${rows.length ? rows.map((date) => `<div class="availability-day"><strong>${v53Esc(v53PrettyDate(date))}</strong><div><span>Date only</span><span>Time via WhatsApp</span></div></div>`).join('') : '<p class="muted">No available date set yet.</p>'}</div>`);
        }
      });
    });
  }

  adminTrainers = function adminTrainersV53() {
    setTitle('Trainers', 'Administrator Panel');
    const trainers = read('trainers');
    const dates = v53ReadTrainerDates();
    content().innerHTML = `
      <div class="toolbar"><div><p class="eyebrow">Trainer Management</p><h2>Manage trainer contact details</h2><p class="muted">Trainer booking guna tarikh sahaja. Tiada masa, hourly rate atau booking hour di bahagian trainer.</p></div><button class="btn btn-primary" data-add-trainer>Add Trainer</button></div>
      <div class="toolbar trainer-date-toolbar v53-trainer-date-toolbar"><div><p class="eyebrow">Trainer Available Dates</p><h2>Date records by trainer</h2><p class="muted">Tekan nama trainer untuk lihat semua tarikh. Add Date boleh single atau range/bulk.</p></div><button class="btn btn-primary" data-add-trainer-date>Add Trainer Date / Range</button></div>
      <div class="card trainer-date-button-panel"><div class="trainer-date-button-grid">
        ${trainers.length ? trainers.map((trainer) => {
          const rows = dates.filter((item) => String(item.trainerId) === String(trainer.id));
          const available = rows.filter((item) => item.status === 'Available').length;
          const unavailable = rows.filter((item) => item.status !== 'Available').length;
          return `<button class="trainer-date-summary-btn" type="button" data-view-trainer-dates="${v53Esc(trainer.id)}"><span class="trainer-date-summary-name">${v53Esc(trainer.name || 'Trainer')}</span><span class="trainer-date-summary-meta">${available} available${unavailable ? ` • ${unavailable} unavailable` : ''}</span></button>`;
        }).join('') : '<p class="muted">No trainer record.</p>'}
      </div></div>
      <div style="height:18px"></div>
      <div class="section-subhead"><div><p class="eyebrow">Trainer Records</p><h2>Trainer List</h2><p class="muted">Edit or delete trainer records with confirmation popup.</p></div></div>
      <div class="card-grid">${trainers.map((trainer) => v53TrainerCompactCard(trainer, true)).join('') || empty('No trainer record.')}</div>`;
    content().querySelector('[data-add-trainer]')?.addEventListener('click', () => openTrainerForm());
    content().querySelector('[data-add-trainer-date]')?.addEventListener('click', () => v53OpenTrainerDateForm());
    content().querySelectorAll('[data-edit-trainer]').forEach((btn) => btn.addEventListener('click', () => openTrainerForm(read('trainers').find((trainer) => String(trainer.id) === String(btn.dataset.editTrainer)))));
    v53BindTrainerDateButtons(content());
    if (typeof bindTrainerButtons === 'function') bindTrainerButtons();
  };

  function v53SlotIsTrainer(slot = {}) {
    return String(slot.targetType || '').toLowerCase().includes('trainer')
      || String(slot.slot_type || '').toLowerCase().includes('trainer')
      || String(slot.bookingType || '').toLowerCase().includes('trainer');
  }
  function v53DrivingSlots() {
    const slots = typeof getScheduleSlots === 'function' ? getScheduleSlots() : ((read('settings') || {}).scheduleSlots || []);
    return (slots || []).filter((slot) => !v53SlotIsTrainer(slot));
  }
  function v53ScheduleTargetLabel(slot = {}) {
    if (slot.targetId && slot.targetId !== 'all') {
      const course = (typeof getDrivingCourses === 'function' ? getDrivingCourses(read('courses')) : read('courses')).find((c) => String(c.id) === String(slot.targetId));
      return course?.name || 'Driving Range';
    }
    return 'All Driving Ranges';
  }
  function v53InputToDisplayTime(value = '09:00') {
    if (typeof inputToDisplayTime === 'function') return inputToDisplayTime(value);
    const [h, m] = String(value).split(':').map(Number);
    const suffix = h >= 12 ? 'PM' : 'AM';
    const hour = ((h + 11) % 12) + 1;
    return `${hour}:${String(m || 0).padStart(2, '0')} ${suffix}`;
  }
  function v53DisplayToInputTime(value = '09:00') {
    if (typeof displayToInputTime === 'function') return displayToInputTime(value);
    const match = String(value || '').match(/(\d{1,2}):(\d{2})\s*(AM|PM)/i);
    if (!match) return /^\d{2}:\d{2}$/.test(String(value)) ? value : '09:00';
    let hour = Number(match[1]);
    if (match[3].toUpperCase() === 'PM' && hour !== 12) hour += 12;
    if (match[3].toUpperCase() === 'AM' && hour === 12) hour = 0;
    return `${v53Pad(hour)}:${match[2]}`;
  }

  function v53DbTime(displayTime = '09:00') {
    return `${v53DisplayToInputTime(displayTime)}:00`;
  }
  async function v53SaveOneTeeSlotToSupabase(slot = {}, editId = null) {
    if (!SUPABASE_MODE || !supabaseClient) return slot;
    const basePayload = {
      slot_date: slot.date,
      slot_time: v53DbTime(slot.time),
      slot_type: 'driving_range',
      trainer_id: null,
      status: slot.status === 'Available' ? 'available' : 'inactive',
    };
    const trySave = async (payload) => {
      if (editId && typeof isUuid === 'function' && isUuid(editId)) {
        return supabaseClient.from(DB_TABLES.teeSlots).update(payload).eq('id', editId).select('*').maybeSingle();
      }
      return supabaseClient.from(DB_TABLES.teeSlots).insert(payload).select('*').maybeSingle();
    };
    let result = await trySave(basePayload);
    if (result.error && String(result.error.message || '').toLowerCase().includes('slot_type')) {
      result = await trySave({ ...basePayload, slot_type: 'driving' });
    }
    if (result.error && String(result.error.message || '').toLowerCase().includes('slot_type')) {
      result = await trySave({ ...basePayload, slot_type: 'both' });
    }
    if (result.error && String(result.error.message || '').toLowerCase().includes('trainer_id')) {
      const { trainer_id, ...withoutTrainer } = basePayload;
      result = await trySave(withoutTrainer);
    }
    if (result.error) {
      console.error('V53 tee slot Supabase save error:', result.error, basePayload);
      throw new Error(result.error.message || 'Supabase blocked tee time save.');
    }
    const row = result.data || {};
    return {
      ...slot,
      id: row.id || slot.id,
      date: row.slot_date || slot.date,
      time: row.slot_time ? v53InputToDisplayTime(String(row.slot_time).slice(0, 5)) : slot.time,
      targetType: 'driving',
      status: row.status === 'inactive' ? 'Unavailable' : (slot.status || 'Available'),
    };
  }
  async function v53SaveTeeSlots(slots = [], editId = null) {
    const saved = [];
    for (const slot of slots) saved.push(await v53SaveOneTeeSlotToSupabase(slot, editId));
    return saved;
  }

  adminTimes = function adminTimesV53() {
    setTitle('Tee Time Availability', 'Administrator Panel');
    const allSlots = v53DrivingSlots().map((slot) => ({ ...slot, targetType: 'driving' }));
    const value = String(state.teeSearchValue || '').trim().toLowerCase();
    const filtered = value ? allSlots.filter((slot) => [slot.date, slot.time, 'Driving Range', v53ScheduleTargetLabel(slot), slot.status].join(' ').toLowerCase().includes(value)) : allSlots;
    const perPage = 8;
    const maxPage = Math.max(1, Math.ceil(filtered.length / perPage));
    state.teePage = Math.min(Math.max(1, Number(state.teePage || 1)), maxPage);
    const pageSlots = filtered.slice((state.teePage - 1) * perPage, state.teePage * perPage);
    content().innerHTML = `
      <div class="toolbar"><div><p class="eyebrow">Schedule Settings</p><h2>Driving Range date and tee time</h2><p class="muted">Tee Time sekarang untuk Driving Range sahaja. Trainer availability diuruskan di bahagian Trainers.</p></div><button class="btn btn-primary" data-add-time>Add Time Slot</button></div>
      <div class="schedule-admin-grid"><article class="card schedule-help-card"><p class="eyebrow">How it works</p><h3>Date + Time + Driving Range</h3><p>Add single or bulk date/time slots for driving range booking. Trainer dates are separate.</p></article><article class="card schedule-help-card"><p class="eyebrow">Current Coverage</p><h3>${allSlots.filter((slot) => String(slot.status || 'Available') === 'Available').length} available slots</h3><p>${filtered.length} driving range slot record${filtered.length === 1 ? '' : 's'} match the current search.</p></article></div>
      <div class="toolbar tee-filter-toolbar"><div><p class="eyebrow">Search Tee Time</p><h2>Filter driving range slots</h2></div><input data-tee-search-value class="v53-tee-search" value="${v53Esc(state.teeSearchValue || '')}" placeholder="Search date, time, target or status"><button class="btn btn-soft" type="button" data-clear-tee-search>Clear</button></div>
      <div class="table-card schedule-table-card"><div class="table-wrap"><table><thead><tr><th>Date</th><th>Time</th><th>For</th><th>Target</th><th>Status</th><th>Action</th></tr></thead><tbody>
        ${pageSlots.map((slot) => `<tr><td><strong>${v53Esc(v53PrettyDate(slot.date))}</strong><br><span class="muted">${v53Esc(slot.date)}</span></td><td><strong>${v53Esc(slot.time)}</strong></td><td>Driving Range</td><td>${v53Esc(v53ScheduleTargetLabel(slot))}</td><td>${v53Status(slot.status || 'Available')}</td><td><div class="row-actions"><button class="btn btn-soft" data-edit-time="${v53Esc(slot.id)}">Edit</button><button class="btn btn-danger-soft" data-delete-time="${v53Esc(slot.id)}">Remove</button></div></td></tr>`).join('') || '<tr><td colspan="6">No driving range tee time slot found.</td></tr>'}
      </tbody></table></div><div class="pagination-row"><button class="btn btn-soft" data-tee-page="prev" ${state.teePage <= 1 ? 'disabled' : ''}>← Previous</button><span>Page <strong>${state.teePage}</strong> of <strong>${maxPage}</strong> • Showing ${pageSlots.length} of ${filtered.length}</span><button class="btn btn-soft" data-tee-page="next" ${state.teePage >= maxPage ? 'disabled' : ''}>Next →</button></div></div>`;
    content().querySelector('[data-add-time]')?.addEventListener('click', () => openTimeForm());
    const search = content().querySelector('[data-tee-search-value]');
    let timer = null;
    search?.addEventListener('input', () => {
      state.teeSearchValue = search.value;
      clearTimeout(timer);
      timer = setTimeout(() => adminTimes(), 220);
    });
    content().querySelector('[data-clear-tee-search]')?.addEventListener('click', () => { state.teeSearchValue = ''; state.teePage = 1; adminTimes(); });
    content().querySelectorAll('[data-tee-page]').forEach((btn) => btn.addEventListener('click', () => { state.teePage += btn.dataset.teePage === 'next' ? 1 : -1; adminTimes(); }));
    content().querySelectorAll('[data-edit-time]').forEach((btn) => btn.addEventListener('click', () => openTimeForm(allSlots.find((slot) => String(slot.id) === String(btn.dataset.editTime)))));
    content().querySelectorAll('[data-delete-time]').forEach((btn) => btn.addEventListener('click', () => {
      const slotId = btn.dataset.deleteTime;
      const slot = allSlots.find((item) => String(item.id) === String(slotId));
      confirmAction({
        title: 'Remove Tee Time Slot',
        message: `Remove ${slot ? `${v53PrettyDate(slot.date)} at ${slot.time}` : 'this'} driving range tee time slot?`,
        confirmText: 'Remove Slot',
        danger: true,
        onConfirm: async () => {
          if (typeof rememberDeletedTeeSlot === 'function' && slot) rememberDeletedTeeSlot(slot);
          if (typeof deleteTeeSlotFromSupabase === 'function') await deleteTeeSlotFromSupabase(slot);
          if (typeof cleanLocalSlotsAfterDelete === 'function') cleanLocalSlotsAfterDelete(slotId);
          else {
            const settings = read('settings');
            settings.scheduleSlots = (settings.scheduleSlots || []).filter((s) => String(s.id) !== String(slotId));
            setLocalData('settings', settings);
          }
          state.teePage = 1;
          adminTimes();
          toast('Tee time slot deleted.');
        },
      });
    }));
  };

  openTimeForm = function openTimeFormV53(slot = null) {
    const courses = typeof getDrivingCourses === 'function' ? getDrivingCourses(read('courses')) : read('courses');
    const isEdit = Boolean(slot);
    const today = v53Today();
    const tomorrow = v53IsoDate(new Date(Date.now() + 86400000));
    const nextWeek = v53IsoDate(new Date(Date.now() + 7 * 86400000));
    const defaultDate = isEdit ? (slot.date || today) : tomorrow;
    const defaultTime = isEdit ? v53DisplayToInputTime(slot.time || '09:00') : (typeof nextFutureTimeInput === 'function' ? nextFutureTimeInput() : '09:00');
    const selectedTarget = slot?.targetId || 'all';
    openModal(`
      <div class="modal-head"><div><p class="eyebrow">${isEdit ? 'Edit Tee Time' : 'New Tee Time'}</p><h2>${isEdit ? 'Update Driving Range Time Slot' : 'Add Driving Range Time Slot'}</h2><p class="muted">Tee Time is for Driving Range only. Trainer availability is managed in the Trainers page.</p></div><button class="close-btn" data-close-modal>&times;</button></div>
      <form id="timeFormV53" class="form-grid compact-modal-form">
        ${isEdit ? `<label>Date<input name="date" type="date" min="${today}" value="${v53Esc(defaultDate)}" required></label>` : `<label>Date Mode<select name="dateMode" data-v53-date-mode><option value="single">Single date</option><option value="range">Date range / Bulk add</option></select></label><label data-v53-single-date>Single Date<input name="date" type="date" min="${today}" value="${v53Esc(defaultDate)}" required></label><label class="hidden" data-v53-range-start>Start Date<input name="startDate" type="date" min="${today}" value="${tomorrow}"></label><label class="hidden" data-v53-range-end>End Date<input name="endDate" type="date" min="${today}" value="${nextWeek}"></label>`}
        <label class="wide">Driving Range Target<select name="targetId" required><option value="all">All Driving Ranges</option>${courses.map((c) => `<option value="${v53Esc(c.id)}" ${String(selectedTarget) === String(c.id) ? 'selected' : ''}>${v53Esc(c.name || 'Driving Range')}</option>`).join('')}</select></label>
        <label>Time<input name="time" type="time" value="${v53Esc(defaultTime)}" required></label>
        <label>Status<select name="status"><option value="Available" ${slot?.status !== 'Unavailable' ? 'selected' : ''}>Available</option><option value="Unavailable" ${slot?.status === 'Unavailable' ? 'selected' : ''}>Unavailable</option></select></label>
        <button class="btn btn-primary wide" type="submit">Save Tee Time Slot(s)</button>
      </form>`);
    const form = document.getElementById('timeFormV53');
    const mode = form?.querySelector('[data-v53-date-mode]');
    const updateMode = () => {
      if (!mode) return;
      const range = mode.value === 'range';
      form.querySelector('[data-v53-single-date]')?.classList.toggle('hidden', range);
      form.querySelector('[data-v53-range-start]')?.classList.toggle('hidden', !range);
      form.querySelector('[data-v53-range-end]')?.classList.toggle('hidden', !range);
      if (form.date) form.date.required = !range;
      if (form.startDate) form.startDate.required = range;
      if (form.endDate) form.endDate.required = range;
    };
    mode?.addEventListener('change', updateMode);
    updateMode();
    form?.addEventListener('submit', async (event) => {
      event.preventDefault();
      const data = new FormData(form);
      const time = v53InputToDisplayTime(data.get('time'));
      let dates = isEdit ? [data.get('date')] : (data.get('dateMode') === 'range' ? v53DateRange(data.get('startDate'), data.get('endDate')) : [data.get('date')]);
      dates = [...new Set(dates.filter(Boolean))];
      if (!dates.length) return toast('Please choose valid date.');
      const slots = dates.map((date) => ({
        id: isEdit ? slot.id : makeId('S'),
        date,
        time,
        targetType: 'driving',
        targetId: data.get('targetId') || 'all',
        status: data.get('status') || 'Available',
      }));
      try {
        const saved = await v53SaveTeeSlots(slots, isEdit ? slot.id : null);
        const settings = read('settings') || {};
        let existing = (settings.scheduleSlots || []).filter((s) => !v53SlotIsTrainer(s));
        if (isEdit) existing = existing.filter((s) => String(s.id) !== String(slot.id));
        const key = (s) => [s.date, s.time, s.targetId || 'all'].join('|');
        const map = new Map(existing.map((s) => [key(s), s]));
        saved.forEach((s) => map.set(key(s), s));
        settings.scheduleSlots = [...map.values()].sort((a, b) => String(a.date).localeCompare(String(b.date)) || String(a.time).localeCompare(String(b.time)));
        setLocalData('settings', settings);
        closeModal();
        state.teePage = 1;
        adminTimes();
        toast(`${saved.length} driving range tee time slot${saved.length === 1 ? '' : 's'} saved.`);
      } catch (err) {
        console.error('V53 tee time save failed:', err);
        toast(err.message || 'Failed to save driving range tee time.');
      }
    });
  };

  const v53BaseOpenBookingModal = openBookingModal;
  openBookingModal = function openBookingModalV53(...args) {
    v53BaseOpenBookingModal(...args);
    setTimeout(() => v53EnhanceBookingCalendar(document), 0);
  };
  const v53BaseOpenTrainerBookingModal = openTrainerBookingModal;
  openTrainerBookingModal = function openTrainerBookingModalV53(...args) {
    v53BaseOpenTrainerBookingModal(...args);
    setTimeout(() => v53EnhanceBookingCalendar(document), 0);
  };

  function v53BookingPackage(booking = {}) {
    if (booking.bookingType === 'trainer') return `${booking.trainingClassType || 'Trainer coaching'} • Date only • Time via WhatsApp`;
    const count = Number(booking.bucketCount || 1);
    const label = booking.bucketLabel || 'bucket';
    const balls = Number(booking.totalBalls || booking.bucketBalls * count || 0);
    const lane = booking.laneCode || booking.laneName || booking.lane || 'No lane';
    return `${booking.membershipType ? membershipLabel(booking.membershipType) : 'Package'} • ${count} × ${label} = ${balls} balls • Lane: ${lane}`;
  }
  function v53BookingDetailModal(id = '') {
    const booking = read('bookings').find((b) => String(b.id) === String(id));
    if (!booking) return;
    openModal(`
      <div class="modal-head"><div><p class="eyebrow">Booking Details</p><h2>${v53Esc(bookingTitle(booking))}</h2><p class="muted">${v53Esc(booking.id)}</p></div><button class="close-btn" data-close-modal>&times;</button></div>
      <div class="booking-detail-panel"><ul class="meta-list booking-detail-list">
        <li><span>Created At</span><strong>${booking.createdAt ? new Date(booking.createdAt).toLocaleString() : '-'}</strong></li>
        <li><span>Customer</span><strong>${v53Esc(booking.customerName || '-')}</strong></li>
        <li><span>Email</span><strong>${v53Esc(booking.customerEmail || '-')}</strong></li>
        <li><span>Booking Type</span><strong>${booking.bookingType === 'trainer' ? 'Trainer Booking' : 'Driving Range Booking'}</strong></li>
        <li><span>Package</span><strong>${v53Esc(v53BookingPackage(booking))}</strong></li>
        <li><span>Driving Range</span><strong>${booking.bookingType === 'trainer' ? 'Not required' : v53Esc(booking.courseName || '-')}</strong></li>
        <li><span>Trainer</span><strong>${v53Esc(booking.trainerName || 'No trainer')}</strong></li>
        <li><span>Date</span><strong>${v53Esc(v53PrettyDate(booking.date || ''))}</strong></li>
        <li><span>Time</span><strong>${v53Esc(booking.bookingType === 'trainer' ? 'Discuss through WhatsApp' : (booking.time || '-'))}</strong></li>
        <li><span>Amount</span><strong>${v53Money(booking.amount)}</strong></li>
        <li><span>Booking Status</span><strong>${v53Esc(booking.bookingStatus || '-')}</strong></li>
        <li><span>Payment</span><strong>${v53Esc(booking.paymentStatus || '-')} • ${v53Esc(booking.paymentMethod || '-')}</strong></li>
        <li><span>Reference / Receipt</span><strong>${v53Esc(booking.receiptNote || booking.reference || '-')}</strong></li>
      </ul></div>`);
  }
  openCancelledBookingDetail = v53BookingDetailModal;

  bookingTable = function bookingTableV53(bookings, mode = 'admin') {
    if (!bookings.length) return empty('No booking record found.');
    return `<div class="booking-card-list-v53">${bookings.map((b) => `
      <article class="booking-card-v53">
        <div class="booking-card-main-v53">
          <p class="eyebrow">${b.bookingType === 'trainer' ? 'Trainer Booking' : 'Driving Range Booking'}</p>
          <h3>${v53Esc(bookingTitle(b))}</h3>
          <p class="muted">${v53Esc(b.id)} • Created ${b.createdAt ? new Date(b.createdAt).toLocaleString() : '-'}</p>
          <p>${v53Esc(v53BookingPackage(b))}</p>
          <p class="muted">${v53Esc(b.customerName || '-')} • ${v53Esc(b.customerEmail || '-')}</p>
        </div>
        <div class="booking-card-side-v53">
          <div><span>Date</span><strong>${v53Esc(v53PrettyDate(b.date || ''))}</strong></div>
          <div><span>Time</span><strong>${v53Esc(b.bookingType === 'trainer' ? 'Discuss via WhatsApp' : (b.time || '-'))}</strong></div>
          <div><span>Amount</span><strong>${v53Money(b.amount)}</strong></div>
        </div>
        <div class="booking-card-status-v53">
          ${v53Status(b.bookingStatus)}
          ${v53Status(b.paymentStatus)}
          <span class="muted">${v53Esc(b.paymentMethod || '-')}</span>
        </div>
        <div class="booking-card-actions-v53 row-actions">
          <button class="btn btn-soft" data-view-booking="${v53Esc(b.id)}">View Booking</button>
          ${bookingActions(b, mode)}
        </div>
      </article>`).join('')}</div>`;
  };

  userFeedback = function userFeedbackV53() {
    setTitle('Contact & Feedback', 'User / Golfer');
    const myReviews = read('reviews').filter((review) => review.userId === state.session.id || review.email === state.session.email);
    content().innerHTML = `
      <div class="v53-contact-layout">
        <div>${v53ContactCardsMarkup()}</div>
        <div class="card"><p class="eyebrow">Submit Feedback</p><h2>Send feedback to administrator</h2><form id="reviewForm" class="form-grid"><label class="wide">Feedback Category<select name="category"><option>General Feedback</option><option>Suggestion</option><option>Issue / Problem</option><option>Complaint</option><option>Compliment</option></select></label><label class="wide">Feedback Message<textarea name="message" placeholder="Write your review, issue, suggestion or complaint" required></textarea></label><button class="btn btn-primary wide" type="submit">Submit Feedback</button></form></div>
      </div>
      <div style="height:22px"></div><div class="toolbar"><div><p class="eyebrow">My Reviews</p><h2>Feedback History</h2><p class="muted">Your submitted feedback is shown in this section.</p></div></div><div class="card-grid">${myReviews.map(reviewCard).join('') || empty('No feedback submitted yet.')}</div>`;
    document.getElementById('reviewForm')?.addEventListener('submit', async (event) => {
      event.preventDefault();
      const form = new FormData(event.currentTarget);
      const message = String(form.get('message') || '').trim();
      if (!message) return toast('Please write your feedback message.');
      const review = { id: makeId('R'), userId: state.session.id, userName: state.session.fullName, email: state.session.email, category: form.get('category') || 'General Feedback', message, createdAt: new Date().toISOString() };
      const reviews = read('reviews'); reviews.unshift(review); setLocalData('reviews', reviews);
      if (typeof syncReviewsToSupabase === 'function') await syncReviewsToSupabase([review]);
      await loadSupabaseDataToLocal({ requireAuth: true });
      userFeedback();
      toast('Feedback submitted to the administrator.');
    });
  };

  adminReviews = function adminReviewsV53() {
    setTitle('Contact & Review', 'Administrator Panel');
    const reviews = read('reviews');
    content().innerHTML = `
      <div class="toolbar"><div><p class="eyebrow">Contact Information</p><h2>Contact & Review</h2><p class="muted">Contact information shown to users can be edited in Profile → Website Settings.</p></div></div>
      ${v53ContactCardsMarkup()}
      <div style="height:22px"></div><div class="toolbar"><div><p class="eyebrow">User Feedback</p><h2>Review customer feedback</h2></div></div><div class="card-grid">${reviews.map(reviewCard).join('') || empty('No feedback submitted yet.')}</div>`;
  };

  const v53BaseAdminSettings = adminSettings;
  adminSettings = function adminSettingsV53() {
    v53BaseAdminSettings();
    const form = document.getElementById('settingsForm');
    if (!form || form.dataset.v53Enhanced === 'true') return;
    form.dataset.v53Enhanced = 'true';
    const settings = read('settings') || {};
    const paymentInstruction = form.querySelector('[name="paymentInfo"]')?.closest('label');
    const contactFields = document.createElement('div');
    contactFields.className = 'form-grid wide v53-contact-settings-fields';
    contactFields.innerHTML = `
      <label class="wide">Contact Address<input name="contactAddress" value="${v53Esc(settings.contactAddress || CONTACT_DEFAULTS_V53.address)}" required></label>
      <label class="wide">Operating Hours<input name="operatingHours" value="${v53Esc(settings.operatingHours || CONTACT_DEFAULTS_V53.hours)}" required></label>`;
    paymentInstruction?.insertAdjacentElement('beforebegin', contactFields);

    form.addEventListener('submit', async (event) => {
      event.preventDefault();
      event.stopImmediatePropagation();
      const data = new FormData(form);
      const file = form.qrImage?.files?.[0];
      let qr = (read('settings') || {}).qrImage || '';
      if (file) {
        if (!file.type.startsWith('image/')) return toast('Please upload an image file only.');
        if (file.size > 2500000) return toast('QR image is too large. Please use an image below 2.5MB.');
        toast('Uploading QR image...');
        qr = await uploadQrImageToSupabase(file);
        if (!qr) return;
      }
      const next = {
        ...(read('settings') || {}),
        systemName: String(data.get('systemName') || '').trim(),
        organisationName: String(data.get('organisationName') || '').trim(),
        paymentName: String(data.get('paymentName') || '').trim(),
        contactEmail: String(data.get('contactEmail') || '').trim(),
        contactPhone: String(data.get('contactPhone') || '').trim(),
        contactAddress: String(data.get('contactAddress') || '').trim(),
        operatingHours: String(data.get('operatingHours') || '').trim(),
        paymentInfo: String(data.get('paymentInfo') || '').trim(),
        bookingNotice: String(data.get('bookingNotice') || '').trim(),
        qrImage: qr,
        dataVersion: 53,
      };
      write('settings', next);
      if (SUPABASE_MODE && supabaseSyncReady) await syncSettingsToSupabase(next);
      toast('Website settings saved. Contact information updated.');
      adminSettings();
    }, true);
  };

  const v53BaseRenderAuth = renderAuth;
  renderAuth = function renderAuthV53() {
    v53BaseRenderAuth();
    document.querySelectorAll('#userLoginForm input[type="password"], #adminLoginForm input[type="password"], #registerForm input[type="password"]').forEach((input) => {
      if (input.dataset.v53EyeReady === 'true') return;
      input.dataset.v53EyeReady = 'true';
      const wrapper = document.createElement('div');
      wrapper.className = 'password-eye-wrap';
      input.parentNode.insertBefore(wrapper, input);
      wrapper.appendChild(input);
      const btn = document.createElement('button');
      btn.type = 'button';
      btn.className = 'password-eye-btn';
      btn.setAttribute('aria-label', 'Show password');
      btn.textContent = '👁️';
      btn.addEventListener('click', () => {
        input.type = input.type === 'password' ? 'text' : 'password';
        btn.textContent = input.type === 'password' ? '👁️' : '🙈';
        input.focus();
      });
      wrapper.appendChild(btn);
    });
  };

  const v53BaseBindAvailabilityButtons = bindAvailabilityButtons;
  bindAvailabilityButtons = function bindAvailabilityButtonsV53() {
    if (typeof v53BaseBindAvailabilityButtons === 'function') v53BaseBindAvailabilityButtons();
    v53BindTrainerDateButtons(content());
  };

  const v53BaseLoadSupabase = loadSupabaseDataToLocal;
  loadSupabaseDataToLocal = async function loadSupabaseDataToLocalV53(options = {}) {
    const result = await v53BaseLoadSupabase(options);
    await v53FetchTrainerDatesFromSupabase();
    const settings = read('settings') || {};
    if (!settings.contactAddress) settings.contactAddress = CONTACT_DEFAULTS_V53.address;
    if (!settings.operatingHours) settings.operatingHours = CONTACT_DEFAULTS_V53.hours;
    setLocalData('settings', settings);
    return result;
  };

  v53SetTrainerDates(v53ReadTrainerDates());
})();



</script>
<?php
}

function upsi_section_user_home_module(): void
{
?>
<script>
window.UPSI_SECTION_MODULES = window.UPSI_SECTION_MODULES || {};
window.UPSI_SECTION_MODULES["user_home"] = {
  title: "User Home",
  runtimeChunk: '16/22',
  functions: ["userDashboard"]
};
</script>
<?php
}

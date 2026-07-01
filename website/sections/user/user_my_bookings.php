<?php
/**
 * user_my_bookings.php
 * Bahagian: User My Bookings
 *
 * V108: CSS dan JavaScript runtime dibahagikan ke semua section.
 * Jadi home_page.php tidak lagi memegang semua coding sistem.
 *
 * Runtime chunk: 19/22
 * Fungsi berkaitan untuk presentation: userBookings, bookingTable
 */


function upsi_section_user_my_bookings_styles(): void
{
?>
<style>
/* =========================================================
   V108 CSS chunk 19/22
   Bahagian: User My Bookings
   ========================================================= */
.v83-breadcrumb {
  margin-top: 22px;
  font-weight: 800;
  color: rgba(255,255,255,.9);
}
.v83-public-main {
  width: min(1560px, 91vw);
  margin: -48px auto 0;
  position: relative;
  z-index: 2;
  padding-bottom: 30px;
}
.v83-declaration-card,
.v83-public-card,
.v83-info-grid article,
.v83-project-grid article {
  background: rgba(255,255,255,.96);
  border: 1px solid rgba(7, 93, 49, .10);
  border-radius: 16px;
  box-shadow: 0 12px 28px rgba(0,0,0,.08);
}
.v83-declaration-card {
  display: grid;
  grid-template-columns: 100px 300px minmax(0, 1fr) 320px;
  gap: 26px;
  align-items: center;
  padding: 22px 28px;
  margin-bottom: 18px;
}
.v83-declaration-card.compact {
  grid-template-columns: 96px 410px minmax(0, 1fr);
}
.v83-declaration-icon,
.v83-info-grid span,
.v83-project-grid span,
.v83-team-grid span {
  width: 72px;
  height: 72px;
  display: inline-flex;
  align-items: center;
  justify-content: center;
  border-radius: 50%;
  background: #e6f4e8;
  color: #075d31;
  font-size: 32px;
  flex: 0 0 auto;
}
.v83-declaration-icon {
  border-radius: 22px;
  border: 2px solid rgba(7,93,49,.35);
  background: #f5fbf6;
}
.v83-declaration-title {
  border-right: 1px solid rgba(0,0,0,.12);
  padding-right: 24px;
}
.v83-declaration-card h2,
.v83-public-card h2,
.v83-info-grid h3,
.v83-project-grid h3 {
  margin: 0;
  color: #075d31;
  font-family: Georgia, 'Times New Roman', serif;
}
.v83-declaration-card h2 {
  font-size: 25px;
}
.v83-declaration-card p {
  margin: 0;
  line-height: 1.55;
  font-weight: 600;
}
.v83-declaration-card ul {
  list-style: none;
  padding: 0;
  margin: 0;
  display: grid;
  gap: 10px;
  font-weight: 800;
}
.v83-team-section {
  padding: 22px 28px;
  margin-bottom: 18px;
}
.v83-team-section h2 {
  font-size: 22px;
  margin-bottom: 14px;
}
.v83-team-grid {
  display: grid;
  grid-template-columns: repeat(4, minmax(0, 1fr));
  gap: 18px;
}
.v83-team-grid article {
  display: grid;
  grid-template-columns: 64px 1fr;
  gap: 14px;
  align-items: center;
  padding: 14px 18px;
  border: 1px solid rgba(7,93,49,.14);
  border-radius: 12px;
  background: #fff;
}
.v83-team-grid article.lecturer {
  background: #edf7ee;
}
.v83-team-grid span {
  width: 54px;
  height: 54px;
  font-size: 26px;
  grid-row: span 2;
}
.v83-team-grid strong {
  display: block;
  color: #075d31;
  font-family: Georgia, 'Times New Roman', serif;
  font-size: 18px;
}
.v83-team-grid p {
  margin: 3px 0 0;
  font-weight: 650;
  line-height: 1.35;
}
.v83-course-line {
  text-align: center;
  margin: 14px 0 0;
  font-weight: 800;
}
.v83-about-strip {
  display: grid;
  grid-template-columns: minmax(0, 1.6fr) minmax(420px, 1fr);
  gap: 26px;
  align-items: center;
  padding: 22px 28px;
  margin-bottom: 18px;
}
.v83-about-strip h2,
.v83-public-card h2 {
  font-size: 24px;
}
.v83-about-strip p {
  line-height: 1.55;
  font-weight: 600;
}
.v83-values {
  display: grid;
  grid-template-columns: repeat(3, 1fr);
  gap: 16px;
  border-left: 1px solid rgba(0,0,0,.11);
  padding-left: 24px;
}
.v83-values b {
  display: block;
  color: #075d31;
  margin-bottom: 6px;
}
.v83-values span {
  font-size: 13px;
  color: #3e4c47;
}
.v83-info-grid,
.v83-project-grid {
  display: grid;
  gap: 18px;
  margin-bottom: 18px;
}
.v83-info-grid.four {
  grid-template-columns: repeat(4, minmax(0, 1fr));
}
.v83-info-grid.features,
.v83-project-grid.top {
  grid-template-columns: repeat(4, minmax(0, 1fr));
}
.v83-project-grid.bottom {
  grid-template-columns: 1.05fr 1.2fr 1.5fr;
}
.v83-info-grid article,
.v83-project-grid article {
  padding: 24px;
  display: grid;
  grid-template-columns: 76px 1fr;
  gap: 12px 18px;
  align-items: start;
}
.v83-info-grid article span,
.v83-project-grid article span {
  grid-row: span 3;
}
.v83-info-grid article h3,
.v83-project-grid article h3 {
  font-size: 22px;
}
.v83-info-grid article p,
.v83-project-grid article p {
  margin: 0;
  line-height: 1.55;
  font-weight: 600;
}
.v83-project-grid article strong {
  display: block;
  font-size: 16px;
  line-height: 1.45;
}
.v83-project-grid ul,
.v83-two-col ul {
  margin: 0;
  padding-left: 22px;
  font-weight: 650;
  line-height: 1.55;
}
.v83-project-grid li::marker,
.v83-two-col li::marker {
  color: #075d31;
}
.v83-two-list {
  columns: 2;
}
.v83-two-col {
  display: grid;
  grid-template-columns: 1fr 1.15fr;
  gap: 24px;
  padding: 24px 28px;
}
.v83-steps {
  display: grid;
  grid-template-columns: repeat(4, 1fr);
  gap: 14px;
  text-align: center;
}
.v83-steps b {
  display: inline-flex;
  width: 42px;
  height: 42px;
  align-items: center;
  justify-content: center;
  border-radius: 50%;
  background: #e6f4e8;
  color: #075d31;
  font-size: 20px;
}
.v83-steps strong {
  display: block;
  color: #075d31;
  margin: 8px 0;
}
.v83-public-footer {
  display: grid;
  grid-template-columns: 1fr auto 1fr;
  align-items: center;
  gap: 24px;
  padding: 24px 5.5vw;
  background: linear-gradient(135deg, #075d31, #064224);
  color: #fff;
}
.v83-public-footer p {
  margin: 0 0 6px;
  font-weight: 700;
}
.v83-public-footer em {
  opacity: .92;
}
.v83-footer-upsi {
  display: flex;
  align-items: center;
  justify-content: center;
  gap: 10px;
  font-size: 30px;
  font-weight: 900;
  text-transform: uppercase;
}
.v83-footer-upsi img {
  width: 56px;
  height: 56px;
  object-fit: contain;
}
.v83-footer-cta {
  display: flex;
  align-items: center;
  justify-content: flex-end;
  gap: 18px;
  font-weight: 800;
}

</style>
<?php
}

function upsi_section_user_my_bookings_scripts(): void
{
?>
<script>
/* =========================================================
   V108 JavaScript chunk 19/22
   Bahagian: User My Bookings
   ========================================================= */
(function v65ManualLaneCalendarFix() {
  const V65_VERSION = 65;
  const MANUAL_TABLE = 'driving_range_manual_lane_blocks';
  const LOCAL_KEY = 'upsiGolfV64ManualLaneBlocks';
  let manualCacheV65 = [];
  let manualCacheAtV65 = 0;
  let calendarPopoverV65 = null;

  const esc = (value = '') => (typeof escapeHtml === 'function'
    ? escapeHtml(value)
    : String(value ?? '').replace(/[&<>"']/g, (m) => ({ '&': '&amp;', '<': '&lt;', '>': '&gt;', '"': '&quot;', "'": '&#039;' }[m])));
  const text = (value = '') => String(value ?? '').trim();

  function laneCodeV65(value = '') {
    const raw = text(value).toUpperCase().replace(/\s+/g, '');
    const match = raw.match(/^KD0*(\d+)$/i) || raw.match(/KD0*(\d+)/i);
    return match ? `KD${String(Number(match[1])).padStart(2, '0')}` : raw;
  }

  function isoDateV65(value = '') {
    const raw = text(value);
    if (!raw) return '';
    const iso = raw.match(/\d{4}-\d{2}-\d{2}/);
    if (iso) return iso[0];
    const slash = raw.match(/^(\d{1,2})\/(\d{1,2})\/(\d{4})$/);
    if (slash) return `${slash[3]}-${slash[2].padStart(2, '0')}-${slash[1].padStart(2, '0')}`;
    const parsed = new Date(raw);
    if (!Number.isNaN(parsed.getTime())) return `${parsed.getFullYear()}-${String(parsed.getMonth() + 1).padStart(2, '0')}-${String(parsed.getDate()).padStart(2, '0')}`;
    return raw.slice(0, 10);
  }

  function prettyDateV65(value = '') {
    const iso = isoDateV65(value);
    if (!iso) return text(value) || 'Choose date';
    if (typeof formatDateDisplay === 'function') return formatDateDisplay(iso);
    const d = new Date(`${iso}T00:00:00`);
    return Number.isNaN(d.getTime()) ? iso : d.toLocaleDateString(undefined, { weekday: 'short', month: 'short', day: '2-digit', year: 'numeric' });
  }

  function minutesV65(value = '', partNo = 1) {
    let raw = text(value).replace(/[–—]/g, '-').replace(/\s+/g, ' ');
    if (!raw) return null;
    if (raw.includes('-')) raw = text(raw.split('-')[partNo - 1] || '');
    raw = raw.replace(/^(time|booking time|session)\s*:?\s*/i, '').replace(/\s*\(.*\)\s*$/g, '').trim();
    const m12 = raw.match(/^(\d{1,2})(?::(\d{2}))?(?::\d{2})?\s*(AM|PM)$/i);
    if (m12) {
      let h = Number(m12[1]);
      const m = Number(m12[2] || 0);
      const ap = m12[3].toUpperCase();
      if (ap === 'PM' && h !== 12) h += 12;
      if (ap === 'AM' && h === 12) h = 0;
      return h * 60 + m;
    }
    const m24 = raw.match(/^(\d{1,2}):(\d{2})(?::\d{2})?$/);
    return m24 ? Number(m24[1]) * 60 + Number(m24[2]) : null;
  }

  function durationMinutesV65(value = 60) {
    const direct = Number(value || 0);
    if (direct > 12) return direct;      // form usually sends 60, 90, 120
    if (direct > 0) return direct * 60;  // RPC/admin sometimes sends 1, 2, 3 hours
    const raw = text(value).toLowerCase();
    const h = raw.match(/(\d+(?:\.\d+)?)\s*hour/);
    if (h) return Math.round(Number(h[1]) * 60);
    const m = raw.match(/(\d+)\s*min/);
    if (m) return Number(m[1]);
    return 60;
  }

  function readLocalManualBlocksV65() {
    try { return JSON.parse(localStorage.getItem(LOCAL_KEY) || '[]'); } catch (_) { return []; }
  }

  function writeLocalManualBlocksV65(rows = []) {
    try { localStorage.setItem(LOCAL_KEY, JSON.stringify(rows)); } catch (_) {}
    manualCacheV65 = rows;
    manualCacheAtV65 = Date.now();
  }

  function manualBlockToLocalV65(row = {}) {
    const startRaw = row.start_time || row.startTime || '';
    const endRaw = row.end_time || row.endTime || '';
    return {
      id: row.id || `${Date.now()}-${Math.random()}`,
      laneCode: laneCodeV65(row.lane_code || row.laneCode || row.lane || ''),
      date: isoDateV65(row.block_date || row.date || row.booking_date || ''),
      startTime: text(String(startRaw).slice(0, 5) || startRaw),
      endTime: text(String(endRaw).slice(0, 5) || endRaw),
      status: text(row.status || 'blocked'),
      reason: text(row.reason || row.source || 'Manual unavailable'),
      createdAt: row.created_at || row.createdAt || new Date().toISOString(),
    };
  }

  async function loadManualBlocksV65(force = false) {
    if (!force && Date.now() - manualCacheAtV65 < 2500 && manualCacheV65.length) return manualCacheV65;
    if (!SUPABASE_MODE || !supabaseClient) {
      manualCacheV65 = readLocalManualBlocksV65().map(manualBlockToLocalV65);
      manualCacheAtV65 = Date.now();
      return manualCacheV65;
    }
    try {
      const { data, error } = await supabaseClient
        .from(MANUAL_TABLE)
        .select('*')
        .order('block_date', { ascending: true })
        .order('start_time', { ascending: true });
      if (error) throw error;
      const rows = (Array.isArray(data) ? data : []).map(manualBlockToLocalV65);
      writeLocalManualBlocksV65(rows);
      return rows;
    } catch (error) {
      console.warn('V65 manual lane unavailable table not loaded. Run supabase_v65_manual_lane_hard_fix.sql:', error?.message || error);
      manualCacheV65 = readLocalManualBlocksV65().map(manualBlockToLocalV65);
      manualCacheAtV65 = Date.now();
      return manualCacheV65;
    }
  }

  function manualBlockedLaneSetV65(date = '', time = '', duration = 60) {
    const selectedDate = isoDateV65(date);
    const selectedStart = minutesV65(time, 1);
    if (!selectedDate || selectedStart === null) return new Set();
    const selectedEnd = selectedStart + durationMinutesV65(duration);
    const rows = manualCacheV65.length ? manualCacheV65 : readLocalManualBlocksV65().map(manualBlockToLocalV65);
    const set = new Set();
    rows.forEach((block) => {
      if (/release|cancel|delete|inactive|available/i.test(block.status || '')) return;
      if (isoDateV65(block.date) !== selectedDate) return;
      const blockStart = minutesV65(block.startTime, 1);
      const blockEnd = minutesV65(block.endTime, 1);
      if (blockStart === null || blockEnd === null) return;
      if (selectedStart < blockEnd && selectedEnd > blockStart) set.add(laneCodeV65(block.laneCode));
    });
    return set;
  }

  const baseLocalLaneSetV65 = window.v60BookedLaneSetFromLocal;
  window.v60BookedLaneSetFromLocal = function v65BookedLaneSetFromLocal(date = '', time = '', duration = 60, excludedBookingId = '') {
    const set = typeof baseLocalLaneSetV65 === 'function' ? new Set(baseLocalLaneSetV65(date, time, duration, excludedBookingId)) : new Set();
    manualBlockedLaneSetV65(date, time, duration).forEach((lane) => set.add(lane));
    return set;
  };

  const baseFetchBookedV65 = window.v61FetchBookedLanes;
  window.v61FetchBookedLanes = async function v65FetchBookedLanes(date = '', time = '', duration = 60, excludedBookingId = '') {
    let set = new Set();
    if (typeof baseFetchBookedV65 === 'function') {
      try { set = new Set(await baseFetchBookedV65(date, time, duration, excludedBookingId)); }
      catch (error) { console.warn('V65 base booked lane fetch failed:', error?.message || error); }
    }
    await loadManualBlocksV65(true);
    manualBlockedLaneSetV65(date, time, duration).forEach((lane) => set.add(lane));
    return set;
  };

  function bookingFormV65() {
    return document.getElementById('bookingForm') || document.getElementById('drivingRangeForm');
  }

  function formPartsV65(form) {
    return {
      date: form?.date?.value || form?.querySelector('[name="date"]')?.value || '',
      time: form?.time?.value || form?.querySelector('[name="time"]')?.value || '',
      duration: form?.durationMinutes?.value || form?.querySelector('[name="durationMinutes"]')?.value || 60,
      lane: laneCodeV65(form?.laneId?.value || form?.querySelector('[name="laneId"]')?.value || ''),
      excludeId: form?.dataset?.existingBookingId || '',
    };
  }

  async function refreshBookingLaneUiV65(form = bookingFormV65()) {
    if (!form || form.dataset.v65Refreshing === '1') return;
    const parts = formPartsV65(form);
    if (!parts.date || !parts.time) return;
    form.dataset.v65Refreshing = '1';
    await loadManualBlocksV65(true);
    if (typeof window.v61FetchBookedLanes === 'function') {
      await window.v61FetchBookedLanes(parts.date, parts.time, parts.duration, parts.excludeId);
    }
    form.dataset.v65Skip = '1';
    const trigger = form.time || form.querySelector('[name="time"]') || form.querySelector('[name="durationMinutes"]');
    trigger?.dispatchEvent(new Event('change', { bubbles: true }));
    setTimeout(() => {
      delete form.dataset.v65Skip;
      delete form.dataset.v65Refreshing;
      enhanceDatePickersV65(form);
    }, 0);
  }

  function allBookingDateSelectsV65(root = document) {
    return Array.from(root.querySelectorAll([
      '#bookingForm select[name="date"]',
      '#drivingRangeForm select[name="date"]',
      'select[data-range-date]',
      'select[data-modal-date]'
    ].join(','))).filter(Boolean);
  }

  function buildMonthTitleV65(dateObj) {
    return dateObj.toLocaleDateString(undefined, { month: 'long', year: 'numeric' });
  }

  function monthStartV65(value = '') {
    const base = new Date(`${isoDateV65(value) || new Date().toISOString().slice(0, 10)}T00:00:00`);
    return new Date(base.getFullYear(), base.getMonth(), 1);
  }

  function closeCalendarPopoverV65() {
    if (calendarPopoverV65) calendarPopoverV65.remove();
    calendarPopoverV65 = null;
  }

  function openCalendarPopoverV65(select, trigger) {
    closeCalendarPopoverV65();
    const options = Array.from(select.options).map((option) => option.value).filter(Boolean);
    const allowed = [...new Set(options.map(isoDateV65).filter(Boolean))].sort();
    let current = monthStartV65(select.value || allowed[0] || '');
    const today = new Date();
    today.setHours(0, 0, 0, 0);

    const render = () => {
      const first = new Date(current.getFullYear(), current.getMonth(), 1);
      const last = new Date(current.getFullYear(), current.getMonth() + 1, 0);
      const cells = [];
      for (let i = 0; i < first.getDay(); i += 1) cells.push('<span class="v65-cal-empty"></span>');
      for (let day = 1; day <= last.getDate(); day += 1) {
        const iso = `${current.getFullYear()}-${String(current.getMonth() + 1).padStart(2, '0')}-${String(day).padStart(2, '0')}`;
        const disabled = allowed.length ? !allowed.includes(iso) : new Date(`${iso}T00:00:00`) < today;
        const active = iso === isoDateV65(select.value);
        cells.push(`<button type="button" class="v65-cal-day ${active ? 'active' : ''}" data-v65-cal-date="${esc(iso)}" ${disabled ? 'disabled' : ''}>${day}</button>`);
      }
      calendarPopoverV65.innerHTML = `
        <div class="v65-cal-head">
          <button type="button" data-v65-cal-prev>‹</button>
          <strong>${esc(buildMonthTitleV65(current))}</strong>
          <button type="button" data-v65-cal-next>›</button>
        </div>
        <div class="v65-cal-selected">${esc(select.value ? prettyDateV65(select.value) : 'Choose date')}</div>
        <div class="v65-cal-week"><span>S</span><span>M</span><span>T</span><span>W</span><span>T</span><span>F</span><span>S</span></div>
        <div class="v65-cal-grid">${cells.join('')}</div>
      `;
      calendarPopoverV65.querySelector('[data-v65-cal-prev]')?.addEventListener('click', () => { current.setMonth(current.getMonth() - 1); render(); });
      calendarPopoverV65.querySelector('[data-v65-cal-next]')?.addEventListener('click', () => { current.setMonth(current.getMonth() + 1); render(); });
      calendarPopoverV65.querySelectorAll('[data-v65-cal-date]').forEach((btn) => btn.addEventListener('click', () => {
        select.value = btn.dataset.v65CalDate;
        select.dispatchEvent(new Event('change', { bubbles: true }));
        updateDateTriggerV65(select, trigger);
        closeCalendarPopoverV65();
        setTimeout(() => refreshBookingLaneUiV65(select.closest('#bookingForm, #drivingRangeForm')), 0);
      }));
    };

    calendarPopoverV65 = document.createElement('div');
    calendarPopoverV65.className = 'v65-calendar-popover';
    document.body.appendChild(calendarPopoverV65);
    const rect = trigger.getBoundingClientRect();
    const top = Math.min(window.innerHeight - 390, Math.max(16, rect.bottom + 8));
    const left = Math.min(window.innerWidth - 380, Math.max(16, rect.left));
    calendarPopoverV65.style.top = `${top}px`;
    calendarPopoverV65.style.left = `${left}px`;
    render();
    setTimeout(() => {
      document.addEventListener('pointerdown', calendarOutsideV65, { capture: true, once: true });
    }, 0);
  }

  function calendarOutsideV65(event) {
    if (!calendarPopoverV65) return;
    if (calendarPopoverV65.contains(event.target) || event.target.closest?.('.v65-date-trigger')) {
      document.addEventListener('pointerdown', calendarOutsideV65, { capture: true, once: true });
      return;
    }
    closeCalendarPopoverV65();
  }

  function updateDateTriggerV65(select, trigger) {
    if (!trigger) return;
    trigger.innerHTML = `<span class="field-icon v65-date-icon">📅</span><strong>${esc(select.value ? prettyDateV65(select.value) : 'Choose date')}</strong><em>⌄</em>`;
  }

  function attachCalendarToSelectV65(select) {
    if (!select || select.dataset.v65CalendarReady === '1') return;
    if (select.nextElementSibling?.classList?.contains('v65-date-trigger')) return;
    select.dataset.v65CalendarReady = '1';
    select.classList.add('v65-hidden-date-select');
    const trigger = document.createElement('button');
    trigger.type = 'button';
    trigger.className = 'v65-date-trigger';
    updateDateTriggerV65(select, trigger);
    select.insertAdjacentElement('afterend', trigger);
    select.addEventListener('change', () => updateDateTriggerV65(select, trigger));
    trigger.addEventListener('click', () => openCalendarPopoverV65(select, trigger));
  }

  function enhanceDatePickersV65(root = document) {
    allBookingDateSelectsV65(root).forEach(attachCalendarToSelectV65);
  }

  const baseOpenBookingModalV65 = typeof openBookingModal === 'function' ? openBookingModal : null;
  if (baseOpenBookingModalV65) {
    openBookingModal = function openBookingModalV65(...args) {
      const result = baseOpenBookingModalV65(...args);
      setTimeout(() => {
        enhanceDatePickersV65(document);
        refreshBookingLaneUiV65(bookingFormV65());
      }, 80);
      return result;
    };
  }

  document.addEventListener('change', (event) => {
    const form = event.target?.closest?.('#bookingForm, #drivingRangeForm');
    if (!form || form.dataset.v65Skip === '1') return;
    if (['date', 'time', 'durationMinutes', 'courseId'].includes(event.target?.name || '')) {
      setTimeout(() => refreshBookingLaneUiV65(form), 0);
    }
  }, true);

  document.addEventListener('submit', async (event) => {
    const form = event.target?.closest?.('#bookingForm, #drivingRangeForm');
    if (!form || form.dataset.v65SubmitChecking === '1') return;
    const parts = formPartsV65(form);
    if (!parts.date || !parts.time || !parts.lane) return;
    form.dataset.v65SubmitChecking = '1';
    await loadManualBlocksV65(true);
    const booked = typeof window.v61FetchBookedLanes === 'function'
      ? await window.v61FetchBookedLanes(parts.date, parts.time, parts.duration, parts.excludeId)
      : manualBlockedLaneSetV65(parts.date, parts.time, parts.duration);
    delete form.dataset.v65SubmitChecking;
    if (booked.has(parts.lane)) {
      event.preventDefault();
      event.stopImmediatePropagation();
      refreshBookingLaneUiV65(form);
      const msg = `${parts.lane} tidak available untuk ${prettyDateV65(parts.date)} pada ${parts.time}. Sila pilih lane lain.`;
      if (typeof toast === 'function') toast(msg); else alert(msg);
    }
  }, true);

  setTimeout(() => {
    loadManualBlocksV65(true).then(() => {
      enhanceDatePickersV65(document);
      refreshBookingLaneUiV65(bookingFormV65());
    }).catch(() => {});
  }, 600);

  try {
    const settings = typeof read === 'function' ? (read('settings') || {}) : {};
    settings.dataVersion = Math.max(Number(settings.dataVersion || 0), V65_VERSION);
    if (typeof setLocalData === 'function') setLocalData('settings', settings);
  } catch (_) {}
})();

/* =====================================================
   V66 - Final presentation fix: single calendar + hard lane unavailable UI
   - Removes duplicated date calendar triggers on user driving range booking.
   - Rebuilds lane dropdown/status using Supabase RPC + manual lane blocks.
   - Keeps website/app compatible because the source of truth is Supabase:
     bookings + driving_range_manual_lane_blocks + upsi_driving_range_booked_lanes RPC.
   ===================================================== */
(function v66FinalCalendarLaneConnectionFix() {
  const V66_VERSION = 66;
  const MANUAL_TABLE = 'driving_range_manual_lane_blocks';
  const LOCAL_KEY = 'upsiGolfV64ManualLaneBlocks';
  const DEFAULT_LANES = Array.from({ length: 10 }, (_, index) => `KD${String(index + 1).padStart(2, '0')}`);
  let manualRowsV66 = [];
  let manualLoadedAtV66 = 0;
  let calendarElV66 = null;
  const previousFetchBookedLanesV66 = window.v61FetchBookedLanes;

  const esc = (value = '') => (typeof escapeHtml === 'function'
    ? escapeHtml(value)
    : String(value ?? '').replace(/[&<>"']/g, (m) => ({ '&': '&amp;', '<': '&lt;', '>': '&gt;', '"': '&quot;', "'": '&#039;' }[m])));
  const text = (value = '') => String(value ?? '').trim();

  function laneCode(value = '') {
    const raw = text(value).toUpperCase().replace(/\s+/g, '');
    const match = raw.match(/^KD0*(\d+)$/i) || raw.match(/KD0*(\d+)/i);
    return match ? `KD${String(Number(match[1])).padStart(2, '0')}` : raw;
  }

  function isoDate(value = '') {
    const raw = text(value);
    if (!raw) return '';
    const iso = raw.match(/\d{4}-\d{2}-\d{2}/);
    if (iso) return iso[0];
    const slash = raw.match(/^(\d{1,2})\/(\d{1,2})\/(\d{4})$/);
    if (slash) return `${slash[3]}-${slash[2].padStart(2, '0')}-${slash[1].padStart(2, '0')}`;
    const parsed = new Date(raw);
    if (!Number.isNaN(parsed.getTime())) return `${parsed.getFullYear()}-${String(parsed.getMonth() + 1).padStart(2, '0')}-${String(parsed.getDate()).padStart(2, '0')}`;
    return raw.slice(0, 10);
  }

  function prettyDate(value = '') {
    const iso = isoDate(value);
    if (!iso) return 'Choose date';
    if (typeof formatDateDisplay === 'function') return formatDateDisplay(iso);
    const parsed = new Date(`${iso}T00:00:00`);
    return Number.isNaN(parsed.getTime()) ? iso : parsed.toLocaleDateString(undefined, { weekday: 'short', day: '2-digit', month: 'short', year: 'numeric' });
  }

  function timeText(value = '', partNo = 1) {
    let raw = text(value).replace(/[–—]/g, '-').replace(/\s+/g, ' ');
    if (!raw) return '';
    if (raw.includes('-')) raw = text(raw.split('-')[partNo - 1] || '');
    return raw.replace(/^(time|booking time|session)\s*:?\s*/i, '').replace(/\s*\(.*\)\s*$/g, '').trim();
  }

  function minutes(value = '', partNo = 1) {
    const raw = timeText(value, partNo);
    if (!raw) return null;
    const m12 = raw.match(/^(\d{1,2})(?::(\d{2}))?(?::\d{2})?\s*(AM|PM)$/i);
    if (m12) {
      let hour = Number(m12[1]);
      const minute = Number(m12[2] || 0);
      const suffix = m12[3].toUpperCase();
      if (suffix === 'PM' && hour !== 12) hour += 12;
      if (suffix === 'AM' && hour === 12) hour = 0;
      return hour * 60 + minute;
    }
    const m24 = raw.match(/^(\d{1,2}):(\d{2})(?::\d{2})?$/);
    return m24 ? Number(m24[1]) * 60 + Number(m24[2]) : null;
  }

  function displayFromMinutes(total = 0) {
    let value = ((Number(total || 0) % 1440) + 1440) % 1440;
    let hour = Math.floor(value / 60);
    const minute = value % 60;
    const suffix = hour >= 12 ? 'PM' : 'AM';
    hour %= 12;
    if (hour === 0) hour = 12;
    return `${hour}:${String(minute).padStart(2, '0')} ${suffix}`;
  }

  function durationMinutes(value = 60) {
    const direct = Number(value || 0);
    if (direct > 12) return direct;
    if (direct > 0) return direct * 60;
    const raw = text(value).toLowerCase();
    const hour = raw.match(/(\d+(?:\.\d+)?)\s*hour/);
    if (hour) return Math.round(Number(hour[1]) * 60);
    const min = raw.match(/(\d+)\s*min/);
    if (min) return Number(min[1]);
    return 60;
  }

  function isInactiveStatus(value = '') {
    const clean = text(value).toLowerCase();
    // V71: jangan anggap perkataan "unavailable" sebagai "available".
    // Row manual status seperti blocked/unavailable mesti kekal dikira sebagai lane block.
    return /cancel|reject|delete|inactive|expired|released/.test(clean) || clean === 'available';
  }

  function readLocalManualRows() {
    try { return JSON.parse(localStorage.getItem(LOCAL_KEY) || '[]'); } catch (_) { return []; }
  }

  function normaliseManual(row = {}) {
    return {
      id: row.id || `${Date.now()}-${Math.random()}`,
      laneCode: laneCode(row.lane_code || row.laneCode || row.lane || ''),
      date: isoDate(row.block_date || row.date || row.booking_date || ''),
      startTime: text(String(row.start_time || row.startTime || '').slice(0, 5) || row.start_time || row.startTime || ''),
      endTime: text(String(row.end_time || row.endTime || '').slice(0, 5) || row.end_time || row.endTime || ''),
      status: text(row.status || 'blocked'),
      reason: text(row.reason || row.source || 'Manual unavailable'),
    };
  }

  async function loadManualRows(force = false) {
    if (!force && Date.now() - manualLoadedAtV66 < 2500 && manualRowsV66.length) return manualRowsV66;
    if (SUPABASE_MODE && supabaseClient) {
      try {
        const { data, error } = await supabaseClient
          .from(MANUAL_TABLE)
          .select('*')
          .order('block_date', { ascending: true })
          .order('start_time', { ascending: true });
        if (!error && Array.isArray(data)) {
          manualRowsV66 = data.map(normaliseManual);
          manualLoadedAtV66 = Date.now();
          try { localStorage.setItem(LOCAL_KEY, JSON.stringify(manualRowsV66)); } catch (_) {}
          return manualRowsV66;
        }
        if (error) console.warn('V66 manual lane table read failed:', error.message || error);
      } catch (error) {
        console.warn('V66 manual lane table read crashed:', error?.message || error);
      }
    }
    manualRowsV66 = readLocalManualRows().map(normaliseManual);
    manualLoadedAtV66 = Date.now();
    return manualRowsV66;
  }

  function manualLaneSet(date = '', time = '', duration = 60) {
    const selectedDate = isoDate(date);
    const selectedStart = minutes(time, 1);
    if (!selectedDate || selectedStart === null) return new Set();
    const selectedEnd = selectedStart + durationMinutes(duration);
    const result = new Set();
    (manualRowsV66.length ? manualRowsV66 : readLocalManualRows().map(normaliseManual)).forEach((row) => {
      if (!row.laneCode || isInactiveStatus(row.status)) return;
      if (isoDate(row.date) !== selectedDate) return;
      const start = minutes(row.startTime, 1);
      const end = minutes(row.endTime, 1);
      if (start === null || end === null) return;
      if (selectedStart < end && selectedEnd > start) result.add(row.laneCode);
    });
    return result;
  }

  function localBookingLaneSet(date = '', time = '', duration = 60, excludedBookingId = '') {
    const selectedDate = isoDate(date);
    const selectedStart = minutes(time, 1);
    if (!selectedDate || selectedStart === null) return new Set();
    const selectedEnd = selectedStart + durationMinutes(duration);
    const result = new Set();
    const rows = typeof read === 'function' ? read('bookings') : [];
    (Array.isArray(rows) ? rows : []).forEach((booking) => {
      if (excludedBookingId && String(booking.id) === String(excludedBookingId)) return;
      const type = text(booking.bookingType || booking.booking_type || 'driving').toLowerCase();
      if (type.includes('trainer')) return;
      const statusText = [booking.status, booking.bookingStatus, booking.booking_status, booking.paymentStatus, booking.payment_status, booking.cancellationType, booking.cancellation_type]
        .map((item) => text(item).toLowerCase()).join(' ');
      if (/cancel|reject|delete|inactive|expired|released/.test(statusText)) return;
      const lane = laneCode(booking.laneCode || booking.lane_code || booking.laneId || booking.lane_id_text || booking.lane_label || booking.laneLabel || booking.lane || booking.lane_id || '');
      const bDate = isoDate(booking.date || booking.bookingDate || booking.booking_date || booking.scheduledDate || booking.scheduled_date || booking.slot_date || '');
      const bStart = minutes(booking.startTime || booking.start_time || booking.bookingTime || booking.booking_time || booking.scheduledTime || booking.scheduled_time || booking.time || booking.slot_time || '', 1);
      if (!lane || bDate !== selectedDate || bStart === null) return;
      const bEnd = minutes(booking.endTime || booking.end_time || '', 1)
        ?? minutes(booking.bookingTime || booking.booking_time || booking.scheduledTime || booking.scheduled_time || booking.time || '', 2)
        ?? (bStart + durationMinutes(booking.durationMinutes || booking.duration_minutes || booking.duration || 60));
      if (selectedStart < bEnd && selectedEnd > bStart) result.add(lane);
    });
    return result;
  }

  async function fetchUnavailableLanes(date = '', time = '', duration = 60, excludedBookingId = '') {
    const result = localBookingLaneSet(date, time, duration, excludedBookingId);
    try {
      if (typeof previousFetchBookedLanesV66 === 'function') {
        const base = await previousFetchBookedLanesV66(date, time, duration, excludedBookingId);
        (base instanceof Set ? Array.from(base) : Array.from(base || [])).forEach((lane) => {
          const clean = laneCode(lane?.lane_code ?? lane);
          if (clean) result.add(clean);
        });
      }
    } catch (error) {
      console.warn('V66 previous booked lane fetch failed:', error?.message || error);
    }
    if (SUPABASE_MODE && supabaseClient && date && time) {
      const rpcArgs = [
        { p_booking_date: isoDate(date), p_booking_time: timeText(time, 1), p_duration: durationMinutes(duration), p_exclude_booking_id: text(excludedBookingId) || null },
        { p_booking_date: isoDate(date), p_booking_time: timeText(time, 1), p_duration_minutes: durationMinutes(duration), p_excluded_booking_id: text(excludedBookingId) || null },
      ];
      for (const args of rpcArgs) {
        try {
          const { data, error } = await supabaseClient.rpc('upsi_driving_range_booked_lanes', args);
          if (!error && Array.isArray(data)) {
            data.forEach((row) => {
              const clean = laneCode(row?.lane_code ?? row);
              if (clean) result.add(clean);
            });
            break;
          }
        } catch (_) {}
      }
    }
    await loadManualRows(true);
    manualLaneSet(date, time, duration).forEach((lane) => result.add(lane));
    return result;
  }

  window.v61FetchBookedLanes = async function v66FetchBookedLanes(date = '', time = '', duration = 60, excludedBookingId = '') {
    return fetchUnavailableLanes(date, time, duration, excludedBookingId);
  };
  window.upsiV66FetchUnavailableLanes = fetchUnavailableLanes;

  function laneRecords() {
    let settings = {};
    try { settings = typeof getSettings === 'function' ? getSettings() : (typeof read === 'function' ? read('settings') : {}); } catch (_) { settings = {}; }
    const records = [];
    const sourceRecords = Array.isArray(settings.drivingRangeLaneRecords) ? settings.drivingRangeLaneRecords : [];
    sourceRecords.forEach((item) => {
      const code = laneCode(item.laneCode || item.lane_code || item.code || item.name || item.id || '');
      if (!code) return;
      records.push({ laneCode: code, laneName: text(item.laneName || item.lane_name || item.name || code), status: text(item.status || item.laneStatus || 'Available') });
    });
    const simple = Array.isArray(settings.drivingRangeLanes) ? settings.drivingRangeLanes : [];
    simple.forEach((item) => {
      const code = laneCode(item.laneCode || item.lane_code || item.code || item.name || item.id || item || '');
      if (!code || records.some((r) => r.laneCode === code)) return;
      records.push({ laneCode: code, laneName: code, status: 'Available' });
    });
    const finalRows = records.length ? records : DEFAULT_LANES.map((code) => ({ laneCode: code, laneName: code, status: 'Available' }));
    return finalRows.sort((a, b) => a.laneCode.localeCompare(b.laneCode, undefined, { numeric: true }));
  }

  function laneStatusRows(unavailable = new Set()) {
    return laneRecords().map((lane) => {
      const baseUnavailable = /inactive|unavailable|disabled/i.test(lane.status || '');
      const blocked = unavailable.has(lane.laneCode);
      return {
        ...lane,
        computedStatus: baseUnavailable ? 'Unavailable' : (blocked ? 'Booked / Unavailable' : 'Available'),
      };
    });
  }

  function lanePanelHtml(date = '', time = '', duration = 60, unavailable = new Set()) {
    const rows = laneStatusRows(unavailable);
    return `
      <div class="lane-status-panel v66-lane-status-panel" data-lane-status-panel>
        <div class="lane-status-head"><strong>Lane Availability</strong><span>${date && time ? `${esc(prettyDate(date))} • ${esc(timeText(time, 1))} - ${esc(displayFromMinutes((minutes(time, 1) || 0) + durationMinutes(duration)))}` : 'Choose date and time first'}</span></div>
        <div class="lane-chip-grid">
          ${rows.map((lane) => `<span class="lane-chip ${lane.computedStatus === 'Available' ? 'available' : 'unavailable'}"><b>${esc(lane.laneCode)}</b><small>${esc(lane.computedStatus)}</small></span>`).join('')}
        </div>
        <p class="muted v66-lane-note">Lane yang Booked / Unavailable tidak akan keluar dalam pilihan user. Data ini sama dengan Supabase untuk website dan app.</p>
      </div>`;
  }

  async function refreshLaneUi(form) {
    if (!form || form.dataset.v66Refreshing === '1') return;
    const date = form.querySelector('[name="date"]')?.value || '';
    const time = form.querySelector('[name="time"]')?.value || '';
    const duration = form.querySelector('[name="durationMinutes"]')?.value || 60;
    if (!date || !time) return;
    form.dataset.v66Refreshing = '1';
    const unavailable = await fetchUnavailableLanes(date, time, duration, form.dataset.existingBookingId || '');
    const laneSelect = form.querySelector('[name="laneId"]');
    const rows = laneStatusRows(unavailable);
    const available = rows.filter((lane) => lane.computedStatus === 'Available');
    const current = laneCode(laneSelect?.value || '');
    const selected = available.some((lane) => lane.laneCode === current) ? current : (available[0]?.laneCode || '');
    const renderKey = [date, time, durationMinutes(duration), selected, rows.map((lane) => `${lane.laneCode}:${lane.computedStatus}`).join(',')].join('|');
    if (form.dataset.v66LastRenderKey === renderKey) {
      const panelText = (form.querySelector('[data-lane-status-panel]')?.textContent || '').replace(/\s+/g, ' ');
      const laneSelectWrong = laneSelect && selected && laneCode(laneSelect.value || '') !== selected;
      const panelWrong = rows.some((lane) => {
        if (!panelText.includes(lane.laneCode)) return true;
        const expected = lane.computedStatus === 'Available' ? 'Available' : '(Booked|Unavailable)';
        return !new RegExp(`${lane.laneCode}[\s\S]{0,120}${expected}`, 'i').test(panelText);
      });
      if (!laneSelectWrong && !panelWrong) {
        delete form.dataset.v66Refreshing;
        return;
      }
    }
    form.dataset.v66LastRenderKey = renderKey;
    if (laneSelect) {
      laneSelect.innerHTML = available.length
        ? available.map((lane) => `<option value="${esc(lane.laneCode)}" ${lane.laneCode === selected ? 'selected' : ''}>${esc(lane.laneCode)}${lane.laneName && lane.laneName !== lane.laneCode ? ` - ${esc(lane.laneName)}` : ''}</option>`).join('')
        : '<option value="">No lane available</option>';
      laneSelect.value = selected;
    }
    const panelWrap = form.querySelector('[data-lane-panel-wrap]') || form.querySelector('[data-lane-status-panel]')?.parentElement;
    if (panelWrap) panelWrap.innerHTML = lanePanelHtml(date, time, duration, unavailable);
    const timePreview = form.querySelector('[data-range-time-preview]');
    if (timePreview) timePreview.textContent = time ? `${timeText(time, 1)} - ${displayFromMinutes((minutes(time, 1) || 0) + durationMinutes(duration))}` : 'Choose time';
    const lanePreview = form.querySelector('[data-range-lane-preview]');
    if (lanePreview) lanePreview.textContent = selected || 'No lane available';
    delete form.dataset.v66Refreshing;
  }

  function closeCalendar() {
    document.querySelectorAll('.v65-calendar-popover, .v66-calendar-popover').forEach((el) => el.remove());
    calendarElV66 = null;
  }

  function buildCalendar(select, trigger) {
    closeCalendar();
    const values = Array.from(select.options).map((option) => isoDate(option.value)).filter(Boolean);
    const allowed = Array.from(new Set(values)).sort();
    let current = new Date(`${isoDate(select.value) || allowed[0] || new Date().toISOString().slice(0, 10)}T00:00:00`);
    current = new Date(current.getFullYear(), current.getMonth(), 1);
    const today = new Date();
    today.setHours(0, 0, 0, 0);
    calendarElV66 = document.createElement('div');
    calendarElV66.className = 'v66-calendar-popover';
    document.body.appendChild(calendarElV66);

    const render = () => {
      const first = new Date(current.getFullYear(), current.getMonth(), 1);
      const last = new Date(current.getFullYear(), current.getMonth() + 1, 0);
      const cells = [];
      for (let index = 0; index < first.getDay(); index += 1) cells.push('<span class="v66-cal-empty"></span>');
      for (let day = 1; day <= last.getDate(); day += 1) {
        const iso = `${current.getFullYear()}-${String(current.getMonth() + 1).padStart(2, '0')}-${String(day).padStart(2, '0')}`;
        const disabled = allowed.length ? !allowed.includes(iso) : new Date(`${iso}T00:00:00`) < today;
        const active = iso === isoDate(select.value);
        cells.push(`<button type="button" class="v66-cal-day ${active ? 'active' : ''}" data-v66-pick="${esc(iso)}" ${disabled ? 'disabled' : ''}>${day}</button>`);
      }
      calendarElV66.innerHTML = `
        <div class="v66-cal-head"><button type="button" data-v66-prev>‹</button><strong>${esc(current.toLocaleDateString(undefined, { month: 'long', year: 'numeric' }))}</strong><button type="button" data-v66-next>›</button></div>
        <div class="v66-cal-selected">${esc(select.value ? prettyDate(select.value) : 'Choose date')}</div>
        <div class="v66-cal-week"><span>S</span><span>M</span><span>T</span><span>W</span><span>T</span><span>F</span><span>S</span></div>
        <div class="v66-cal-grid">${cells.join('')}</div>`;
      calendarElV66.querySelector('[data-v66-prev]')?.addEventListener('click', () => { current.setMonth(current.getMonth() - 1); render(); });
      calendarElV66.querySelector('[data-v66-next]')?.addEventListener('click', () => { current.setMonth(current.getMonth() + 1); render(); });
      calendarElV66.querySelectorAll('[data-v66-pick]').forEach((btn) => btn.addEventListener('click', () => {
        select.value = btn.dataset.v66Pick;
        updateDateTrigger(select, trigger);
        select.dispatchEvent(new Event('change', { bubbles: true }));
        closeCalendar();
        setTimeout(() => refreshLaneUi(select.closest('#drivingRangeForm, #bookingForm')), 0);
      }));
    };

    const rect = trigger.getBoundingClientRect();
    calendarElV66.style.top = `${Math.min(window.innerHeight - 390, Math.max(12, rect.bottom + 8))}px`;
    calendarElV66.style.left = `${Math.min(window.innerWidth - 380, Math.max(12, rect.left))}px`;
    render();
    setTimeout(() => document.addEventListener('pointerdown', function outside(event) {
      if (calendarElV66 && (calendarElV66.contains(event.target) || event.target.closest?.('.v66-date-trigger'))) {
        document.addEventListener('pointerdown', outside, { capture: true, once: true });
        return;
      }
      closeCalendar();
    }, { capture: true, once: true }), 0);
  }

  function updateDateTrigger(select, trigger) {
    if (!select || !trigger) return;
    trigger.innerHTML = `<span>📅</span><strong>${esc(select.value ? prettyDate(select.value) : 'Choose date')}</strong><em>⌄</em>`;
  }

  function cleanupCalendarDuplicates(scope = document) {
    scope.querySelectorAll('#drivingRangeForm .v53-date-trigger, #drivingRangeForm .v65-date-trigger, #bookingForm .v53-date-trigger, #bookingForm .v65-date-trigger').forEach((el) => el.remove());
    scope.querySelectorAll('#drivingRangeForm select[name="date"], #bookingForm select[name="date"]').forEach((select) => {
      select.dataset.v53CalendarReady = 'true';
      select.dataset.v65CalendarReady = '1';
      select.classList.remove('v53-hidden-native-select', 'v65-hidden-date-select');
      select.classList.add('v66-hidden-date-select');
      const icon = select.parentElement?.querySelector(':scope > .field-icon');
      if (icon) icon.classList.add('v66-hide-original-date-icon');
    });
  }

  function enhanceCalendar(scope = document) {
    cleanupCalendarDuplicates(scope);
    scope.querySelectorAll('#drivingRangeForm select[name="date"], #bookingForm select[name="date"]').forEach((select) => {
      if (select.nextElementSibling?.classList?.contains('v66-date-trigger')) {
        updateDateTrigger(select, select.nextElementSibling);
        return;
      }
      const trigger = document.createElement('button');
      trigger.type = 'button';
      trigger.className = 'v66-date-trigger';
      updateDateTrigger(select, trigger);
      select.insertAdjacentElement('afterend', trigger);
      select.addEventListener('change', () => updateDateTrigger(select, trigger));
      trigger.addEventListener('click', () => buildCalendar(select, trigger));
    });
  }

  function enhanceForms(scope = document) {
    enhanceCalendar(scope);
    scope.querySelectorAll('#drivingRangeForm, #bookingForm').forEach((form) => refreshLaneUi(form));
  }

  const baseBindDrivingRangeBookingFormV66 = typeof bindDrivingRangeBookingForm === 'function' ? bindDrivingRangeBookingForm : null;
  if (baseBindDrivingRangeBookingFormV66) {
    bindDrivingRangeBookingForm = function bindDrivingRangeBookingFormV66(...args) {
      const result = baseBindDrivingRangeBookingFormV66(...args);
      setTimeout(() => enhanceForms(document), 120);
      return result;
    };
  }

  const baseOpenBookingModalV66 = typeof openBookingModal === 'function' ? openBookingModal : null;
  if (baseOpenBookingModalV66) {
    openBookingModal = function openBookingModalV66(...args) {
      const result = baseOpenBookingModalV66(...args);
      Promise.resolve(result).finally(() => setTimeout(() => enhanceForms(document), 120));
      return result;
    };
  }

  document.addEventListener('change', (event) => {
    const form = event.target?.closest?.('#drivingRangeForm, #bookingForm');
    if (!form) return;
    if (['date', 'time', 'durationMinutes', 'laneId'].includes(event.target?.name || '')) {
      setTimeout(() => refreshLaneUi(form), 0);
    }
  }, true);

  document.addEventListener('submit', async (event) => {
    const form = event.target?.closest?.('#drivingRangeForm, #bookingForm');
    if (!form || form.dataset.v66SubmitOk === '1') {
      if (form) setTimeout(() => delete form.dataset.v66SubmitOk, 0);
      return;
    }
    const lane = laneCode(form.querySelector('[name="laneId"]')?.value || '');
    const date = form.querySelector('[name="date"]')?.value || '';
    const time = form.querySelector('[name="time"]')?.value || '';
    const duration = form.querySelector('[name="durationMinutes"]')?.value || 60;
    if (!lane || !date || !time) return;
    const unavailable = await fetchUnavailableLanes(date, time, duration, form.dataset.existingBookingId || '');
    if (unavailable.has(lane)) {
      event.preventDefault();
      event.stopImmediatePropagation();
      await refreshLaneUi(form);
      if (typeof toast === 'function') toast(`${lane} tidak available untuk ${prettyDate(date)} pada ${timeText(time, 1)}. Sila pilih lane lain.`);
    } else {
      form.dataset.v66SubmitOk = '1';
    }
  }, true);

  let observerTimerV66 = null;
  const observer = new MutationObserver(() => {
    clearTimeout(observerTimerV66);
    observerTimerV66 = setTimeout(() => enhanceForms(document), 80);
  });
  observer.observe(document.body, { childList: true, subtree: true });

  setTimeout(() => loadManualRows(true).then(() => enhanceForms(document)).catch(() => enhanceForms(document)), 700);

  try {
    const settings = typeof read === 'function' ? (read('settings') || {}) : {};
    settings.dataVersion = Math.max(Number(settings.dataVersion || 0), V66_VERSION);
    if (typeof setLocalData === 'function') setLocalData('settings', settings);
  } catch (_) {}
})();



/* =====================================================
   V72 - MAIN DRIVING RANGE STABLE LANE STATUS
   - Popup booking was already correct, so this patch does not change popup logic.
   - Main #drivingRangeForm no longer uses old synchronous V42 lane repaint.
   - It refreshes lane status once after date/time/duration changes using V66 source of truth.
   - No setInterval, so lane cards will not blink/flash between Available and Unavailable.
   ===================================================== */
(function v72MainDrivingRangeStableLaneStatus() {
  const V72_VERSION = 72;
  const text = (value = '') => String(value ?? '').trim();
  const laneCode = (value = '') => {
    const raw = text(value).toUpperCase().replace(/\s+/g, '');
    const match = raw.match(/^KD0*(\d+)$/i) || raw.match(/KD0*(\d+)/i);
    return match ? `KD${String(Number(match[1])).padStart(2, '0')}` : raw;
  };
  const esc = (value = '') => (typeof escapeHtml === 'function' ? escapeHtml(value) : text(value));
  const isoDate = (value = '') => {
    const raw = text(value);
    const iso = raw.match(/\d{4}-\d{2}-\d{2}/);
    if (iso) return iso[0];
    const parsed = new Date(raw);
    if (!Number.isNaN(parsed.getTime())) return `${parsed.getFullYear()}-${String(parsed.getMonth() + 1).padStart(2, '0')}-${String(parsed.getDate()).padStart(2, '0')}`;
    return raw.slice(0, 10);
  };
  const prettyDate = (value = '') => {
    const iso = isoDate(value);
    if (!iso) return 'Choose date';
    if (typeof formatDateDisplay === 'function') return formatDateDisplay(iso);
    return iso;
  };
  const timeText = (value = '') => text(value).replace(/[–—]/g, '-').split('-')[0].trim();
  const durationMinutes = (value = 60) => {
    const direct = Number(value || 0);
    if (direct > 12) return direct;
    if (direct > 0) return direct * 60;
    const hour = text(value).toLowerCase().match(/(\d+(?:\.\d+)?)\s*hour/);
    if (hour) return Math.round(Number(hour[1]) * 60);
    const min = text(value).toLowerCase().match(/(\d+)\s*min/);
    return min ? Number(min[1]) : 60;
  };
  const minutes = (value = '') => {
    const raw = timeText(value);
    const m12 = raw.match(/^(\d{1,2})(?::(\d{2}))?(?::\d{2})?\s*(AM|PM)$/i);
    if (m12) {
      let h = Number(m12[1]);
      const m = Number(m12[2] || 0);
      const ap = m12[3].toUpperCase();
      if (ap === 'PM' && h !== 12) h += 12;
      if (ap === 'AM' && h === 12) h = 0;
      return h * 60 + m;
    }
    const m24 = raw.match(/^(\d{1,2}):(\d{2})(?::\d{2})?$/);
    return m24 ? Number(m24[1]) * 60 + Number(m24[2]) : null;
  };
  const displayFromMinutes = (total = 0) => {
    let value = ((Number(total || 0) % 1440) + 1440) % 1440;
    let h = Math.floor(value / 60);
    const m = value % 60;
    const ap = h >= 12 ? 'PM' : 'AM';
    h %= 12;
    if (h === 0) h = 12;
    return `${h}:${String(m).padStart(2, '0')} ${ap}`;
  };
  function laneRecords() {
    let settings = {};
    try { settings = typeof getSettings === 'function' ? getSettings() : (typeof read === 'function' ? read('settings') : {}); } catch (_) {}
    const rows = [];
    (Array.isArray(settings.drivingRangeLaneRecords) ? settings.drivingRangeLaneRecords : []).forEach((item) => {
      const code = laneCode(item.laneCode || item.lane_code || item.code || item.name || item.id || '');
      if (!code || rows.some((row) => row.laneCode === code)) return;
      rows.push({ laneCode: code, laneName: text(item.laneName || item.lane_name || item.name || code), baseStatus: text(item.status || item.laneStatus || 'Available') });
    });
    (Array.isArray(settings.drivingRangeLanes) ? settings.drivingRangeLanes : []).forEach((item) => {
      const code = laneCode(item.laneCode || item.lane_code || item.code || item.name || item.id || item || '');
      if (!code || rows.some((row) => row.laneCode === code)) return;
      rows.push({ laneCode: code, laneName: code, baseStatus: 'Available' });
    });
    const defaults = Array.from({ length: 10 }, (_, index) => `KD${String(index + 1).padStart(2, '0')}`);
    return (rows.length ? rows : defaults.map((code) => ({ laneCode: code, laneName: code, baseStatus: 'Available' })))
      .sort((a, b) => a.laneCode.localeCompare(b.laneCode, undefined, { numeric: true }));
  }
  function panelHtml(date = '', time = '', duration = 60, unavailable = new Set()) {
    const rows = laneRecords().map((lane) => {
      const baseUnavailable = /inactive|unavailable|disabled|blocked|maintenance/i.test(lane.baseStatus || '');
      const blocked = unavailable.has(lane.laneCode);
      return { ...lane, computedStatus: baseUnavailable ? 'Unavailable' : (blocked ? 'Booked / Unavailable' : 'Available') };
    });
    const start = minutes(time);
    const range = date && time ? `${prettyDate(date)} • ${timeText(time)}${start === null ? '' : ` - ${displayFromMinutes(start + durationMinutes(duration))}`}` : 'Choose date and time first';
    return `<div class="lane-status-panel v72-lane-status-panel" data-lane-status-panel data-v72-main-lane-panel="1"><div class="lane-status-head"><strong>Lane Availability</strong><span>${esc(range)}</span></div><div class="lane-chip-grid">${rows.map((lane) => `<span class="lane-chip ${lane.computedStatus === 'Available' ? 'available' : 'unavailable'}"><b>${esc(lane.laneCode)}</b><small>${esc(lane.computedStatus)}</small></span>`).join('')}</div></div>`;
  }
  function normalizeSet(value) {
    const out = new Set();
    const arr = value instanceof Set ? Array.from(value) : Array.from(value || []);
    arr.forEach((item) => {
      const code = laneCode(item?.lane_code || item?.laneCode || item?.lane || item);
      if (code) out.add(code);
    });
    return out;
  }
  async function syncMainForm(force = false) {
    const form = document.getElementById('drivingRangeForm');
    if (!form || form.dataset.v72Busy === '1') return;
    const date = form.querySelector('[name="date"]')?.value || '';
    const time = form.querySelector('[name="time"]')?.value || '';
    const duration = form.querySelector('[name="durationMinutes"]')?.value || 60;
    if (!date || !time || typeof window.upsiV66FetchUnavailableLanes !== 'function') return;
    form.dataset.v72Busy = '1';
    try {
      const unavailable = normalizeSet(await window.upsiV66FetchUnavailableLanes(date, time, duration, ''));
      const rows = laneRecords().map((lane) => ({ ...lane, computedStatus: (/inactive|unavailable|disabled|blocked|maintenance/i.test(lane.baseStatus || '') || unavailable.has(lane.laneCode)) ? 'Booked / Unavailable' : 'Available' }));
      const available = rows.filter((lane) => lane.computedStatus === 'Available');
      const laneSelect = form.querySelector('[name="laneId"]');
      const current = laneCode(laneSelect?.value || '');
      const selected = available.some((lane) => lane.laneCode === current) ? current : (available[0]?.laneCode || '');
      const key = `${isoDate(date)}|${timeText(time)}|${durationMinutes(duration)}|${selected}|${rows.map((row) => `${row.laneCode}:${row.computedStatus}`).join(',')}`;
      const panelText = (form.querySelector('[data-lane-status-panel]')?.textContent || '').replace(/\s+/g, ' ');
      const panelWrong = rows.some((lane) => !panelText.includes(lane.laneCode) || !new RegExp(`${lane.laneCode}[\\s\\S]{0,120}${lane.computedStatus === 'Available' ? 'Available' : '(Booked|Unavailable)'}`, 'i').test(panelText));
      if (!force && form.dataset.v72Key === key && !panelWrong && (!laneSelect || laneCode(laneSelect.value) === selected)) return;
      form.dataset.v72Key = key;
      if (laneSelect) {
        laneSelect.innerHTML = available.length
          ? available.map((lane) => `<option value="${esc(lane.laneCode)}" ${lane.laneCode === selected ? 'selected' : ''}>${esc(lane.laneCode)}${lane.laneName && lane.laneName !== lane.laneCode ? ` - ${esc(lane.laneName)}` : ''}</option>`).join('')
          : '<option value="">No lane available</option>';
        laneSelect.value = selected;
      }
      const wrap = form.querySelector('[data-lane-panel-wrap]') || form.querySelector('[data-lane-status-panel]')?.parentElement;
      if (wrap) wrap.innerHTML = panelHtml(date, time, duration, unavailable);
      const start = minutes(time);
      const timePreview = form.querySelector('[data-range-time-preview]');
      if (timePreview) timePreview.textContent = start === null ? 'Choose time' : `${timeText(time)} - ${displayFromMinutes(start + durationMinutes(duration))}`;
      const lanePreview = form.querySelector('[data-range-lane-preview]');
      if (lanePreview) lanePreview.textContent = selected || 'No lane available';
    } finally {
      delete form.dataset.v72Busy;
    }
  }
  let timer = null;
  function scheduleMain(force = false) {
    clearTimeout(timer);
    timer = setTimeout(() => syncMainForm(force), 90);
  }
  document.addEventListener('change', (event) => {
    if (event.target?.closest?.('#drivingRangeForm') && ['date', 'time', 'durationMinutes', 'laneId'].includes(event.target?.name || '')) scheduleMain(true);
  }, true);
  const baseBind = typeof bindDrivingRangeBookingForm === 'function' ? bindDrivingRangeBookingForm : null;
  if (baseBind) {
    bindDrivingRangeBookingForm = function bindDrivingRangeBookingFormV72(...args) {
      const result = baseBind(...args);
      [80, 250, 700].forEach((delay) => setTimeout(() => syncMainForm(delay > 80), delay));
      return result;
    };
  }
  // No observer and no interval here by design. This avoids the blinking problem.
  try {
    const settings = typeof read === 'function' ? (read('settings') || {}) : {};
    settings.dataVersion = Math.max(Number(settings.dataVersion || 0), V72_VERSION);
    if (typeof setLocalData === 'function') setLocalData('settings', settings);
  } catch (_) {}
})();

/* =========================================================
   V75 Admin editable Login + Inside Website/App Background
   - Login background and inside website/app background are separate.
   - Admin uploads images in Profile -> Website Settings.
   - URLs are saved in Supabase public.system_settings for mobile app use.
   ========================================================= */


</script>
<?php
}

function upsi_section_user_my_bookings_module(): void
{
?>
<script>
window.UPSI_SECTION_MODULES = window.UPSI_SECTION_MODULES || {};
window.UPSI_SECTION_MODULES["user_my_bookings"] = {
  title: "User My Bookings",
  runtimeChunk: '19/22',
  functions: ["userBookings", "bookingTable"]
};
</script>
<?php
}

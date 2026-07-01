<?php
/**
 * user_trainers.php
 * Bahagian: User Trainers
 *
 * V108: CSS dan JavaScript runtime dibahagikan ke semua section.
 * Jadi home_page.php tidak lagi memegang semua coding sistem.
 *
 * Runtime chunk: 18/22
 * Fungsi berkaitan untuk presentation: userTrainers, openTrainerBookingModal
 */


function upsi_section_user_trainers_styles(): void
{
?>
<style>
/* =========================================================
   V108 CSS chunk 18/22
   Bahagian: User Trainers
   ========================================================= */
body[data-theme="dark"] .app-shell .page-content input,
body[data-theme="dark"] .app-shell .page-content select,
body[data-theme="dark"] .app-shell .page-content textarea,
body.dark-mode .app-shell .page-content input,
body.dark-mode .app-shell .page-content select,
body.dark-mode .app-shell .page-content textarea,
body.dark .app-shell .page-content input,
body.dark .app-shell .page-content select,
body.dark .app-shell .page-content textarea {
  background: rgba(14, 29, 21, 0.88) !important;
  color: #f4fff7 !important;
  border-color: rgba(94, 227, 159, 0.18) !important;
}

/* =========================================================
   V78 Trainer date calendar fix
   Calendar now opens above the trainer booking popup without closing it.
   ========================================================= */
.v78-calendar-host {
  position: relative;
}

.v78-calendar-overlay {
  position: absolute;
  inset: 0;
  z-index: 80;
  display: flex;
  align-items: center;
  justify-content: center;
  padding: 22px;
  background: rgba(6, 20, 13, 0.30);
  border-radius: inherit;
}

.v78-calendar-panel {
  width: min(720px, 96%);
  max-height: min(760px, 92vh);
  overflow-y: auto;
  background: rgba(255, 255, 255, 0.98);
  border: 1px solid rgba(15, 81, 50, 0.16);
  border-radius: 28px;
  box-shadow: 0 26px 80px rgba(4, 40, 24, 0.22);
  padding: 14px;
}

body[data-theme="dark"] .v78-calendar-panel,
body.dark-mode .v78-calendar-panel,
body.dark .v78-calendar-panel {
  background: rgba(10, 22, 16, 0.98);
  color: #f4fff7;
  border-color: rgba(94, 227, 159, 0.20);
}

body[data-theme="dark"] .v78-calendar-overlay,
body.dark-mode .v78-calendar-overlay,
body.dark .v78-calendar-overlay {
  background: rgba(2, 8, 5, 0.46);
}


/* =========================================================
   V83 Public WBL Landing + Language Toggle
   ========================================================= */
.v83-public-site,
.v83-public-site * {
  box-sizing: border-box;
}
.v83-public-site {
  min-height: 100vh;
  background: #f7fbf8;
  color: #17221f;
  font-family: Inter, ui-sans-serif, system-ui, -apple-system, BlinkMacSystemFont, "Segoe UI", sans-serif;
}
.v83-public-header {
  height: 86px;
  display: flex;
  align-items: center;
  justify-content: space-between;
  gap: 24px;
  padding: 0 5.5vw;
  background: rgba(255,255,255,.96);
  border-bottom: 1px solid rgba(12, 78, 43, .10);
  position: relative;
  z-index: 5;
}
.v83-public-brand {
  display: flex;
  align-items: center;
  gap: 14px;
  text-transform: uppercase;
}
.v83-public-brand img {
  width: 58px;
  height: 58px;
  object-fit: contain;
  border-radius: 16px;
  background: #edf7ef;
}
.v83-public-brand strong {
  display: block;
  color: #075d31;
  font-family: Georgia, 'Times New Roman', serif;
  font-size: 30px;
  letter-spacing: .5px;
  line-height: 1;
}
.v83-public-brand span {
  display: block;
  color: #3f4d48;
  letter-spacing: 5px;
  font-size: 13px;
  margin-top: 4px;
}
.v83-public-nav {
  display: flex;
  align-items: center;
  justify-content: flex-end;
  gap: 18px;
  flex-wrap: wrap;
}
.v83-public-nav button {
  border: 0;
  background: transparent;
  font-weight: 800;
  color: #151c1a;
  font-size: 15px;
  cursor: pointer;
  padding: 12px 4px;
  border-bottom: 3px solid transparent;
}
.v83-public-nav button.active {
  color: #075d31;
  border-bottom-color: #075d31;
}
.v83-public-nav .v83-public-login-btn,
.v83-public-login-btn {
  background: linear-gradient(135deg, #086235, #074a2a);
  color: #fff;
  border: 0;
  border-radius: 10px;
  padding: 12px 18px;
  box-shadow: 0 10px 22px rgba(0, 71, 37, .18);
}
.v83-language-toggle {
  display: inline-flex;
  align-items: center;
  gap: 3px;
  padding: 4px;
  border: 1px solid rgba(10, 85, 47, .22);
  border-radius: 999px;
  background: rgba(255,255,255,.88);
  box-shadow: 0 8px 20px rgba(0,0,0,.06);
}
.v83-language-toggle button,
.v83-public-nav .v83-language-toggle button {
  min-width: 42px;
  padding: 7px 10px;
  border: 0 !important;
  border-radius: 999px;
  background: transparent;
  color: #075d31;
  font-size: 12px;
  font-weight: 900;
  cursor: pointer;
}
.v83-language-toggle button.active,
.v83-public-nav .v83-language-toggle button.active {
  background: #075d31;
  color: #fff;
}
.v83-public-hero {
  min-height: 390px;
  display: flex;
  align-items: center;
  padding: 54px 5.5vw 68px;
  background:
    linear-gradient(90deg, rgba(5, 20, 14, .72) 0%, rgba(7, 39, 21, .52) 42%, rgba(8, 50, 26, .08) 100%),
    var(--upsi-login-background-image, url("/assets/background-login-default.png")) center center / cover no-repeat;
  position: relative;
}
.v83-public-hero .v83-hero-copy {
  max-width: 760px;
  color: #fff;
}
.v83-public-hero h1 {
  margin: 0;
  font-family: Georgia, 'Times New Roman', serif;
  font-size: clamp(42px, 5vw, 70px);
  line-height: .98;
  letter-spacing: -.8px;
  text-shadow: 0 4px 18px rgba(0,0,0,.24);
}
.v83-public-hero h1 span,
.v83-public-hero h2 span {
  color: #18b765;
}
.v83-public-hero h2 {
  margin: 4px 0 0;
  font-family: Georgia, 'Times New Roman', serif;
  font-size: clamp(30px, 4vw, 52px);
  line-height: 1.03;
  color: #fff;
}
.v83-green-line {
  display: block;
  width: 80px;
  height: 4px;
  background: #13a957;
  border-radius: 999px;
  margin: 22px 0 18px;
}
.v83-public-hero p {
  max-width: 660px;
  margin: 0;
  color: rgba(255,255,255,.94);
  font-size: 17px;
  line-height: 1.65;
  font-weight: 600;
}
.v83-hero-actions {
  display: flex;
  align-items: center;
  gap: 14px;
  flex-wrap: wrap;
  margin-top: 22px;
}
.v83-primary-cta,
.v83-outline-cta {
  border-radius: 9px;
  padding: 14px 20px;
  font-size: 15px;
  font-weight: 850;
  cursor: pointer;
}
.v83-primary-cta {
  border: 0;
  color: #fff;
  background: linear-gradient(135deg, #0b7b44, #07542e);
}
.v83-outline-cta {
  color: #fff;
  background: rgba(0,0,0,.18);
  border: 1px solid rgba(255,255,255,.72);
}

</style>
<?php
}

function upsi_section_user_trainers_scripts(): void
{
?>
<script>
/* =========================================================
   V108 JavaScript chunk 18/22
   Bahagian: User Trainers
   ========================================================= */
/* =====================================================
   V62 - Real lane double-booking fix
   - Fixes Supabase RPC argument names used by V61.
   - Makes the first booking upsert include lane/date/time.
   - Removes local booking if Supabase rejects duplicate lane.
   ===================================================== */
(function v62RealLaneDoubleBookingFix() {
  const V62_VERSION = 62;
  function txt(v = '') { return String(v ?? '').trim(); }
  function lane(v = '') {
    const raw = txt(v).toUpperCase().replace(/\s+/g, '');
    const m = raw.match(/^KD0*(\d+)$/i) || raw.match(/KD0*(\d+)/i);
    return m ? `KD${String(Number(m[1])).padStart(2, '0')}` : raw;
  }
  function dkey(v = '') {
    const raw = txt(v);
    if (!raw) return '';
    const iso = raw.match(/\d{4}-\d{2}-\d{2}/);
    if (iso) return iso[0];
    const slash = raw.match(/^(\d{1,2})\/(\d{1,2})\/(\d{4})$/);
    if (slash) return `${slash[3]}-${slash[2].padStart(2, '0')}-${slash[1].padStart(2, '0')}`;
    const parsed = new Date(raw);
    if (!Number.isNaN(parsed.getTime())) return `${parsed.getFullYear()}-${String(parsed.getMonth() + 1).padStart(2, '0')}-${String(parsed.getDate()).padStart(2, '0')}`;
    return raw.slice(0, 10);
  }
  function tpart(v = '', partNo = 1) {
    let raw = txt(v).replace(/[–—]/g, '-').replace(/\s+/g, ' ');
    if (!raw) return '';
    if (raw.includes('-')) raw = txt(raw.split('-')[partNo - 1] || '');
    return raw.replace(/^time\s*:?\s*/i, '').replace(/^booking time\s*:?\s*/i, '').replace(/^session\s*:?\s*/i, '').replace(/\s*\(.*\)\s*$/g, '').trim();
  }
  function duration(v = 60) {
    const n = Number(v || 0);
    if (n > 0) return n;
    const raw = txt(v).toLowerCase();
    const h = raw.match(/(\d+(?:\.\d+)?)\s*hour/);
    if (h) return Math.round(Number(h[1]) * 60);
    const m = raw.match(/(\d+)\s*min/);
    if (m) return Number(m[1]);
    return 60;
  }
  async function fetchBooked(date = '', time = '', dur = 60, excludeId = '') {
    const fallback = typeof window.v60BookedLaneSetFromLocal === 'function'
      ? window.v60BookedLaneSetFromLocal(date, time, dur, excludeId)
      : new Set();
    if (!SUPABASE_MODE || !supabaseClient || !date || !time) return fallback;
    const argsList = [
      { p_booking_date: dkey(date), p_booking_time: tpart(time, 1), p_duration: duration(dur), p_exclude_booking_id: txt(excludeId) || null },
      { p_booking_date: dkey(date), p_booking_time: tpart(time, 1), p_duration_minutes: duration(dur), p_excluded_booking_id: txt(excludeId) || null },
    ];
    for (const args of argsList) {
      const { data, error } = await supabaseClient.rpc('upsi_driving_range_booked_lanes', args);
      if (!error) {
        const set = new Set(fallback);
        (Array.isArray(data) ? data : []).forEach((row) => {
          const code = lane(row?.lane_code ?? row);
          if (code) set.add(code);
        });
        return set;
      }
    }
    return fallback;
  }
  window.v61FetchBookedLanes = fetchBooked;

  // Capture submit before the booking form's own submit handler. Do not allow same lane/date/time through.
  document.addEventListener('submit', async (event) => {
    const form = event.target?.closest?.('#bookingForm, #drivingRangeForm');
    if (!form || form.dataset.v62VerifiedSubmit === '1') {
      if (form) setTimeout(() => delete form.dataset.v62VerifiedSubmit, 0);
      return;
    }
    const date = form.date?.value || form.querySelector('[name="date"]')?.value || '';
    const time = form.time?.value || form.querySelector('[name="time"]')?.value || '';
    const dur = form.durationMinutes?.value || form.querySelector('[name="durationMinutes"]')?.value || 60;
    const selectedLane = lane(form.laneId?.value || form.querySelector('[name="laneId"]')?.value || '');
    if (!date || !time || !selectedLane) return;

    event.preventDefault();
    event.stopImmediatePropagation();

    const booked = await fetchBooked(date, time, dur, form.dataset.existingBookingId || '');
    if (booked.has(selectedLane)) {
      const msg = `${selectedLane} sudah dibooking untuk ${date} pada ${time}. Sila pilih lane lain.`;
      if (typeof toast === 'function') toast(msg); else alert(msg);
      form.laneId?.dispatchEvent(new Event('change', { bubbles: true }));
      return;
    }
    form.dataset.v62VerifiedSubmit = '1';
    if (typeof form.requestSubmit === 'function') form.requestSubmit();
    else form.dispatchEvent(new Event('submit', { bubbles: true, cancelable: true }));
  }, true);

  // Remove unsynced local booking if Supabase rejects duplicate lane.
  const baseV62Sync = typeof syncBookingsToSupabase === 'function' ? syncBookingsToSupabase : null;
  if (baseV62Sync) {
    syncBookingsToSupabase = async function syncBookingsToSupabaseV62(bookings = []) {
      try {
        return await baseV62Sync(bookings);
      } catch (error) {
        const message = String(error?.message || error || '').toLowerCase();
        if (message.includes('already booked') || message.includes('duplicate') || message.includes('lane')) {
          const local = typeof read === 'function' ? read('bookings') : [];
          const cleaned = (Array.isArray(local) ? local : []).filter((b) => String(b.id || '').length > 20 || !String(b.createdAt || '').startsWith(new Date().toISOString().slice(0, 10)));
          if (typeof setLocalData === 'function') setLocalData('bookings', cleaned);
          if (typeof toast === 'function') toast('Lane itu sudah dibooking. Booking tidak disimpan. Sila pilih lane lain.');
        }
        throw error;
      }
    };
  }

  try {
    const settings = typeof read === 'function' ? (read('settings') || {}) : {};
    settings.dataVersion = Math.max(Number(settings.dataVersion || 0), V62_VERSION);
    if (typeof setLocalData === 'function') setLocalData('settings', settings);
  } catch (_) {}
})();

/* =====================================================
   V63 - User delete booking with undo
   - Website only. App source is not changed.
   - Delete is a safe soft-delete: the booking is hidden from the user.
   - If the booking is still active, delete also cancels it so the lane is released.
   - Undo Delete restores the booking from local/Supabase as long as the lane is still free.
   ===================================================== */
(function v63UserDeleteUndoPatch() {
  const V63_VERSION = 63;
  const UNDO_KEY = 'upsiGolfV63LastDeletedBooking';
  const esc = (value = '') => (typeof escapeHtml === 'function' ? escapeHtml(value) : String(value ?? '').replace(/[&<>"']/g, (m) => ({ '&': '&amp;', '<': '&lt;', '>': '&gt;', '"': '&quot;', "'": '&#039;' }[m])));
  const isCancelled = (booking = {}) => String(booking.bookingStatus || booking.booking_status || '').toLowerCase().includes('cancel');
  const clone = (value) => JSON.parse(JSON.stringify(value || {}));

  function sessionUserId() {
    return String(state?.session?.id || '').trim();
  }

  function readBookingsV63() {
    try { return Array.isArray(read('bookings')) ? read('bookings') : []; } catch (_) { return []; }
  }

  function saveBookingsLocalV63(bookings = []) {
    if (typeof setLocalData === 'function') setLocalData('bookings', bookings);
    else localStorage.setItem(STORAGE.bookings, JSON.stringify(bookings));
  }

  function lastDeletedInfo() {
    try { return JSON.parse(localStorage.getItem(UNDO_KEY) || 'null'); } catch (_) { return null; }
  }

  function rememberDeletedBooking(info = {}) {
    localStorage.setItem(UNDO_KEY, JSON.stringify({ ...info, deletedAt: new Date().toISOString() }));
  }

  function clearDeletedMemory() {
    localStorage.removeItem(UNDO_KEY);
  }

  function userCanSeeUndo() {
    const info = lastDeletedInfo();
    if (!info || !info.id) return null;
    if (info.userId && info.userId !== sessionUserId()) return null;
    const booking = readBookingsV63().find((item) => String(item.id) === String(info.id));
    if (!booking) return null;
    if (Array.isArray(booking.hiddenForUsers) && booking.hiddenForUsers.includes(sessionUserId())) return { info, booking };
    return null;
  }

  function bookingTitleText(booking = {}) {
    if (typeof bookingTitle === 'function') return bookingTitle(booking);
    return booking.bookingType === 'trainer' ? 'Trainer Booking' : 'Driving Range Booking';
  }

  function localStatusToDbV63(status = '') {
    if (typeof localBookingStatusToDb === 'function') return localBookingStatusToDb(status);
    const clean = String(status || '').toLowerCase();
    if (clean.includes('confirm')) return 'confirmed';
    if (clean.includes('cancel')) return 'cancelled';
    return 'pending';
  }

  function localPaymentToDbV63(status = '') {
    if (typeof localPaymentStatusToDb === 'function') return localPaymentStatusToDb(status);
    const clean = String(status || '').toLowerCase();
    if (clean.includes('verified')) return 'verified';
    if (clean.includes('reject')) return 'rejected';
    if (clean.includes('counter')) return 'pay_at_counter';
    if (clean.includes('pending')) return 'pending';
    return 'not_paid';
  }

  async function updateRemoteBookingV63(booking = {}, patch = {}) {
    if (!SUPABASE_MODE || !supabaseClient || !DB_TABLES?.bookings || !isUuid?.(booking.id)) return { error: null };
    let query = supabaseClient.from(DB_TABLES.bookings).update(patch).eq('id', booking.id);
    if (isUuid?.(booking.userId || sessionUserId())) query = query.eq('user_id', booking.userId || sessionUserId());
    const { error } = await query;
    if (error) console.error('V63 booking update error:', error);
    return { error };
  }

  async function deleteBookingAsUserV63(id = '') {
    const bookings = readBookingsV63();
    const index = bookings.findIndex((item) => String(item.id) === String(id));
    if (index < 0) return;

    const booking = bookings[index];
    const userId = sessionUserId() || booking.userId || '';
    const wasCancelled = isCancelled(booking);
    const snapshot = clone(booking);

    const hidden = new Set(Array.isArray(booking.hiddenForUsers) ? booking.hiddenForUsers : []);
    if (userId) hidden.add(userId);
    booking.hiddenForUsers = Array.from(hidden);

    if (!wasCancelled) {
      booking.previousBookingStatus = booking.previousBookingStatus || booking.bookingStatus || 'Pending Confirmation';
      booking.previousPaymentStatus = booking.previousPaymentStatus || booking.paymentStatus || '';
      booking.bookingStatus = 'Cancelled';
      booking.cancelledBy = 'user';
      booking.cancelledById = userId;
      booking.cancellationType = 'user_cancelled';
      booking.cancelReason = 'Deleted by user';
      booking.cancelledAt = new Date().toISOString();
    }

    bookings[index] = booking;
    saveBookingsLocalV63(bookings);
    rememberDeletedBooking({
      id: booking.id,
      userId,
      title: bookingTitleText(booking),
      snapshot,
      changedStatus: !wasCancelled,
    });

    const remotePatch = {
      hidden_for_user: true,
      booking_status: localStatusToDbV63(booking.bookingStatus),
      previous_booking_status: booking.previousBookingStatus || null,
      previous_payment_status: booking.previousPaymentStatus ? localPaymentToDbV63(booking.previousPaymentStatus) : null,
      cancellation_type: booking.cancellationType || null,
      cancellation_reason: booking.cancelReason || null,
      cancelled_by: isUuid?.(booking.cancelledById) ? booking.cancelledById : null,
      cancelled_at: booking.cancelledAt || null,
    };

    renderPage();
    toast('Booking deleted from your list. Use Undo Delete if this was a mistake.');
    const { error } = await updateRemoteBookingV63(booking, remotePatch);
    if (error) toast(error.message || 'Booking deleted locally but Supabase update failed. Check Console.');
  }

  async function undoDeleteBookingV63() {
    const data = userCanSeeUndo();
    if (!data) {
      toast('No deleted booking to undo.');
      clearDeletedMemory();
      renderPage();
      return;
    }

    const { info, booking } = data;
    const bookings = readBookingsV63();
    const index = bookings.findIndex((item) => String(item.id) === String(info.id));
    if (index < 0) return;
    const userId = sessionUserId() || info.userId || booking.userId || '';

    const beforeUndo = clone(bookings[index]);
    const restored = bookings[index];
    restored.hiddenForUsers = (Array.isArray(restored.hiddenForUsers) ? restored.hiddenForUsers : []).filter((id) => String(id) !== String(userId));

    if (info.changedStatus) {
      const snapshot = info.snapshot || {};
      restored.bookingStatus = snapshot.bookingStatus || restored.previousBookingStatus || 'Pending Confirmation';
      restored.paymentStatus = snapshot.paymentStatus || restored.previousPaymentStatus || restored.paymentStatus;
      restored.cancelledBy = snapshot.cancelledBy || '';
      restored.cancelledById = snapshot.cancelledById || '';
      restored.cancellationType = snapshot.cancellationType || '';
      restored.cancelReason = snapshot.cancelReason || '';
      restored.cancelledAt = snapshot.cancelledAt || '';
      restored.previousBookingStatus = snapshot.previousBookingStatus || '';
      restored.previousPaymentStatus = snapshot.previousPaymentStatus || '';
    }

    bookings[index] = restored;
    saveBookingsLocalV63(bookings);
    renderPage();

    const remotePatch = {
      hidden_for_user: false,
      booking_status: localStatusToDbV63(restored.bookingStatus),
      previous_booking_status: restored.previousBookingStatus || null,
      previous_payment_status: restored.previousPaymentStatus ? localPaymentToDbV63(restored.previousPaymentStatus) : null,
      cancellation_type: restored.cancellationType || null,
      cancellation_reason: restored.cancelReason || null,
      cancelled_by: isUuid?.(restored.cancelledById) ? restored.cancelledById : null,
      cancelled_at: restored.cancelledAt || null,
    };

    const { error } = await updateRemoteBookingV63(restored, remotePatch);
    if (error) {
      bookings[index] = beforeUndo;
      saveBookingsLocalV63(bookings);
      renderPage();
      toast(error.message || 'Undo failed. The lane may already be booked by another user.');
      return;
    }

    clearDeletedMemory();
    toast('Deleted booking restored.');
  }

  function undoCancelBookingV63(id = '') {
    if (typeof undoUserCancellation === 'function') return undoUserCancellation(id);
  }

  function insertUndoBannerV63() {
    const data = userCanSeeUndo();
    if (!data) return;
    const toolbar = content()?.querySelector?.('.toolbar');
    if (!toolbar || content().querySelector('[data-v63-undo-banner]')) return;
    toolbar.insertAdjacentHTML('afterend', `
      <div class="card v63-undo-delete-banner" data-v63-undo-banner>
        <div>
          <p class="eyebrow">Undo Delete</p>
          <h3>Booking was deleted from your list</h3>
          <p class="muted">${esc(data.info.title || bookingTitleText(data.booking))} • ${esc(data.booking.date || data.booking.bookingDate || '')} ${esc(data.booking.time || data.booking.bookingTime || '')}</p>
        </div>
        <button class="btn btn-warning-soft" type="button" data-v63-undo-delete>Undo Delete</button>
      </div>
    `);
    content().querySelector('[data-v63-undo-delete]')?.addEventListener('click', () => undoDeleteBookingV63());
  }

  function addButtonOnce(actions, html, marker) {
    if (!actions || actions.querySelector(`[${marker}]`)) return;
    actions.insertAdjacentHTML('beforeend', html);
  }

  function enhanceUserBookingActionsV63() {
    if (state?.currentPage !== 'mybookings') return;
    const bookings = readBookingsV63();
    const root = content();
    root.querySelectorAll('[data-view-booking]').forEach((viewBtn) => {
      const id = viewBtn.dataset.viewBooking;
      const booking = bookings.find((item) => String(item.id) === String(id));
      if (!booking || booking.userId !== state.session?.id) return;
      const actions = viewBtn.closest('.booking-card-actions-v53, .row-actions') || viewBtn.parentElement;
      if (!actions) return;

      const cancelled = isCancelled(booking);
      if (cancelled) {
        actions.querySelectorAll('[data-reschedule], [data-cancel]').forEach((btn) => btn.remove());
        if (booking.cancelledBy === 'user' && ['user_cancelled', 'confirmed_user_cancelled'].includes(String(booking.cancellationType || ''))) {
          addButtonOnce(actions, `<button class="btn btn-warning-soft" type="button" data-v63-undo-cancel="${esc(booking.id)}">Undo Cancellation</button>`, 'data-v63-undo-cancel');
        }
      }

      addButtonOnce(actions, `<button class="btn btn-danger-soft" type="button" data-v63-delete-booking="${esc(booking.id)}">Delete</button>`, 'data-v63-delete-booking');
    });

    root.querySelectorAll('[data-v63-delete-booking]').forEach((btn) => {
      if (btn.dataset.v63Ready === '1') return;
      btn.dataset.v63Ready = '1';
      btn.addEventListener('click', () => {
        const booking = readBookingsV63().find((item) => String(item.id) === String(btn.dataset.v63DeleteBooking));
        if (!booking) return;
        const message = isCancelled(booking)
          ? 'Delete this cancelled booking from your list? You can undo the delete after this.'
          : 'Delete this booking from your list? This will cancel the booking and release the lane. You can undo the delete after this if the lane is still available.';
        confirmAction({
          title: 'Delete Booking',
          message,
          confirmText: 'Delete Booking',
          danger: true,
          onConfirm: () => deleteBookingAsUserV63(btn.dataset.v63DeleteBooking),
        });
      });
    });

    root.querySelectorAll('[data-v63-undo-cancel]').forEach((btn) => {
      if (btn.dataset.v63Ready === '1') return;
      btn.dataset.v63Ready = '1';
      btn.addEventListener('click', () => {
        confirmAction({
          title: 'Undo Cancellation',
          message: 'Do you want to undo your cancellation and return this booking to active status?',
          confirmText: 'Undo Cancellation',
          onConfirm: () => undoCancelBookingV63(btn.dataset.v63UndoCancel),
        });
      });
    });
  }

  const baseUserBookingsV63 = typeof userBookings === 'function' ? userBookings : null;
  if (baseUserBookingsV63) {
    userBookings = function userBookingsV63() {
      baseUserBookingsV63();
      insertUndoBannerV63();
      enhanceUserBookingActionsV63();
    };
  }

  const baseBindBookingActionsV63 = typeof bindBookingActions === 'function' ? bindBookingActions : null;
  if (baseBindBookingActionsV63) {
    bindBookingActions = function bindBookingActionsV63(mode) {
      baseBindBookingActionsV63(mode);
      if (mode === 'user') {
        insertUndoBannerV63();
        enhanceUserBookingActionsV63();
      }
    };
  }

  try {
    const settings = typeof read === 'function' ? (read('settings') || {}) : {};
    settings.dataVersion = Math.max(Number(settings.dataVersion || 0), V63_VERSION);
    if (typeof setLocalData === 'function') setLocalData('settings', settings);
  } catch (_) {}
})();


/* =====================================================
   V64 - Manual lane unavailable for walk-in / phone call
   - Admin can manually block lanes for a date and time.
   - User/app booking availability uses the same RPC: upsi_driving_range_booked_lanes.
   - Adds admin feedback category filter dropdown.
   - Website only. App source is not changed.
   ===================================================== */
(function v64ManualLaneAndFeedbackFilterPatch() {
  const V64_VERSION = 64;
  const MANUAL_TABLE = 'driving_range_manual_lane_blocks';
  const LOCAL_KEY = 'upsiGolfV64ManualLaneBlocks';
  const esc = (value = '') => (typeof escapeHtml === 'function' ? escapeHtml(value) : String(value ?? '').replace(/[&<>"']/g, (m) => ({ '&': '&amp;', '<': '&lt;', '>': '&gt;', '"': '&quot;', "'": '&#039;' }[m])));
  let cachedManualBlocks = [];
  let reviewCategoryFilter = 'All Feedback';

  function text(v = '') { return String(v ?? '').trim(); }
  function normLane(v = '') {
    const raw = text(v).toUpperCase().replace(/\s+/g, '');
    const m = raw.match(/^KD0*(\d+)$/i) || raw.match(/KD0*(\d+)/i);
    return m ? `KD${String(Number(m[1])).padStart(2, '0')}` : raw;
  }
  function toIsoDate(v = '') {
    const raw = text(v);
    if (!raw) return '';
    const iso = raw.match(/\d{4}-\d{2}-\d{2}/);
    if (iso) return iso[0];
    const slash = raw.match(/^(\d{1,2})\/(\d{1,2})\/(\d{4})$/);
    if (slash) return `${slash[3]}-${slash[2].padStart(2, '0')}-${slash[1].padStart(2, '0')}`;
    const d = new Date(raw);
    if (!Number.isNaN(d.getTime())) return `${d.getFullYear()}-${String(d.getMonth() + 1).padStart(2, '0')}-${String(d.getDate()).padStart(2, '0')}`;
    return raw.slice(0, 10);
  }
  function pad(n) { return String(n).padStart(2, '0'); }
  function timeToMinutes(v = '') {
    const raw = text(v).replace(/[–—]/g, '-').split('-')[0].trim();
    if (!raw) return null;
    const m12 = raw.match(/^(\d{1,2})(?::(\d{2}))?(?::\d{2})?\s*(AM|PM)$/i);
    if (m12) {
      let h = Number(m12[1]);
      const min = Number(m12[2] || 0);
      const ap = m12[3].toUpperCase();
      if (ap === 'PM' && h !== 12) h += 12;
      if (ap === 'AM' && h === 12) h = 0;
      return h * 60 + min;
    }
    const m24 = raw.match(/^(\d{1,2}):(\d{2})(?::\d{2})?$/);
    if (m24) return Number(m24[1]) * 60 + Number(m24[2]);
    return null;
  }
  function minutesToInput(mins) {
    mins = ((Number(mins || 0) % 1440) + 1440) % 1440;
    return `${pad(Math.floor(mins / 60))}:${pad(mins % 60)}`;
  }
  function inputToDisplay(value = '') {
    const mins = timeToMinutes(value);
    if (mins === null) return text(value) || '-';
    let h = Math.floor(mins / 60);
    const m = mins % 60;
    const ap = h >= 12 ? 'PM' : 'AM';
    h = ((h + 11) % 12) + 1;
    return `${h}:${pad(m)} ${ap}`;
  }
  function dbTimeFromInput(value = '') {
    const mins = timeToMinutes(value);
    return mins === null ? '09:00:00' : `${minutesToInput(mins)}:00`;
  }
  function addMinutesToTime(value = '', minsToAdd = 60) {
    const mins = timeToMinutes(value);
    return minutesToInput((mins === null ? 540 : mins) + Number(minsToAdd || 60));
  }
  function prettyDate(value = '') {
    if (typeof v53PrettyDate === 'function') return v53PrettyDate(value);
    if (typeof formatDateDisplay === 'function') return formatDateDisplay(value);
    const d = new Date(`${toIsoDate(value)}T00:00:00`);
    return Number.isNaN(d.getTime()) ? text(value) : d.toLocaleDateString(undefined, { weekday: 'short', month: 'short', day: '2-digit', year: 'numeric' });
  }
  function statusPillSafe(status = '') {
    if (typeof statusPill === 'function') return statusPill(status);
    return `<span class="status-pill">${esc(status)}</span>`;
  }
  function activeLaneCodes() {
    try {
      const settings = typeof getSettings === 'function' ? getSettings() : (read('settings') || {});
      const lanes = Array.isArray(settings.drivingRangeLanes) ? settings.drivingRangeLanes : [];
      const codes = lanes.map((lane) => normLane(lane.code || lane.laneCode || lane.name || lane.label || lane.id || lane)).filter(Boolean);
      if (codes.length) return Array.from(new Set(codes)).sort();
    } catch (_) {}
    return Array.from({ length: 10 }, (_, i) => `KD${pad(i + 1)}`);
  }
  function readLocalBlocks() {
    try { return JSON.parse(localStorage.getItem(LOCAL_KEY) || '[]'); } catch (_) { return []; }
  }
  function writeLocalBlocks(rows = []) {
    localStorage.setItem(LOCAL_KEY, JSON.stringify(rows));
    cachedManualBlocks = rows;
  }
  function rowToBlock(row = {}) {
    return {
      id: row.id || makeId?.('LB') || `${Date.now()}-${Math.random()}`,
      laneCode: normLane(row.lane_code || row.laneCode || row.lane || ''),
      date: toIsoDate(row.block_date || row.date || row.booking_date || ''),
      startTime: inputToDisplay(String(row.start_time || row.startTime || '').slice(0, 5) || row.start_time || row.startTime || ''),
      endTime: inputToDisplay(String(row.end_time || row.endTime || '').slice(0, 5) || row.end_time || row.endTime || ''),
      status: text(row.status || 'blocked'),
      source: text(row.source || 'walk_in'),
      reason: text(row.reason || row.reference_note || ''),
      createdAt: row.created_at || row.createdAt || new Date().toISOString(),
    };
  }
  async function loadManualBlocks() {
    if (!SUPABASE_MODE || !supabaseClient) {
      cachedManualBlocks = readLocalBlocks();
      return cachedManualBlocks;
    }
    const { data, error } = await supabaseClient
      .from(MANUAL_TABLE)
      .select('*')
      .order('block_date', { ascending: true })
      .order('start_time', { ascending: true });
    if (error) {
      console.warn('V64 manual lane blocks not loaded. Run supabase_v64_manual_lane_unavailable.sql:', error.message || error);
      cachedManualBlocks = readLocalBlocks();
      return cachedManualBlocks;
    }
    cachedManualBlocks = (Array.isArray(data) ? data : []).map(rowToBlock);
    writeLocalBlocks(cachedManualBlocks);
    return cachedManualBlocks;
  }
  async function saveManualBlocks(payloads = []) {
    if (!payloads.length) return true;
    if (!SUPABASE_MODE || !supabaseClient) {
      const rows = readLocalBlocks();
      payloads.forEach((payload) => rows.unshift(rowToBlock(payload)));
      writeLocalBlocks(rows);
      return true;
    }
    const { error } = await supabaseClient.from(MANUAL_TABLE).insert(payloads);
    if (error) {
      toast(error.message || 'Manual lane unavailable failed to save.');
      console.error('V64 manual block insert error:', error);
      return false;
    }
    await loadManualBlocks();
    return true;
  }
  async function deleteManualBlock(id = '') {
    if (!id) return false;
    if (!SUPABASE_MODE || !supabaseClient) {
      writeLocalBlocks(readLocalBlocks().filter((row) => String(row.id) !== String(id)));
      return true;
    }
    const { error } = await supabaseClient.from(MANUAL_TABLE).delete().eq('id', id);
    if (error) {
      toast(error.message || 'Cannot delete manual lane unavailable record.');
      console.error('V64 manual block delete error:', error);
      return false;
    }
    await loadManualBlocks();
    return true;
  }
  function activeBlocksForTable() {
    const today = new Date();
    today.setHours(0, 0, 0, 0);
    return (cachedManualBlocks || []).filter((row) => {
      if (!row.date) return true;
      const d = new Date(`${row.date}T00:00:00`);
      return Number.isNaN(d.getTime()) || d >= today || !/released|cancel|delete/i.test(row.status);
    }).slice(0, 80);
  }
  function manualLanePanelMarkup() {
    const rows = activeBlocksForTable();
    return `
      <div class="toolbar v64-lane-block-toolbar">
        <div>
          <p class="eyebrow">Manual Lane Unavailable</p>
          <h2>Walk-in / phone call lane control</h2>
          <p class="muted">Admin boleh tutup lane ikut tarikh dan masa untuk walk-in, booking melalui telefon atau maintenance. Lane ini tidak akan keluar sebagai available kepada user.</p>
        </div>
        <button class="btn btn-primary" type="button" data-v64-add-lane-block>Set Lane Unavailable</button>
      </div>
      <div class="table-card v64-lane-block-card"><div class="table-wrap"><table>
        <thead><tr><th>Date</th><th>Time</th><th>Lane</th><th>Reason</th><th>Status</th><th>Action</th></tr></thead>
        <tbody>${rows.length ? rows.map((row) => `
          <tr>
            <td><strong>${esc(prettyDate(row.date))}</strong><br><span class="muted">${esc(row.date)}</span></td>
            <td>${esc(row.startTime)} - ${esc(row.endTime)}</td>
            <td><strong>${esc(row.laneCode)}</strong></td>
            <td>${esc(row.reason || row.source || 'Walk-in / manual block')}</td>
            <td>${statusPillSafe(row.status === 'blocked' ? 'Unavailable' : row.status)}</td>
            <td><button class="btn btn-danger-soft" type="button" data-v64-delete-lane-block="${esc(row.id)}">Release</button></td>
          </tr>`).join('') : '<tr><td colspan="6">No manual lane unavailable record yet.</td></tr>'}</tbody>
      </table></div></div>`;
  }
  function injectManualLanePanel() {
    const root = content();
    if (!root || root.querySelector('.v64-lane-block-toolbar')) return;
    const firstToolbar = root.querySelector('.toolbar');
    if (!firstToolbar) return;
    firstToolbar.insertAdjacentHTML('afterend', manualLanePanelMarkup());
    bindManualLanePanel(root);
  }
  function bindManualLanePanel(root = content()) {
    root.querySelector('[data-v64-add-lane-block]')?.addEventListener('click', () => openManualLaneBlockModal());
    root.querySelectorAll('[data-v64-delete-lane-block]').forEach((btn) => btn.addEventListener('click', () => {
      const block = cachedManualBlocks.find((row) => String(row.id) === String(btn.dataset.v64DeleteLaneBlock));
      confirmAction({
        title: 'Release Lane',
        message: `Release ${block?.laneCode || 'this lane'} on ${prettyDate(block?.date || '')}? User can book it again after release.`,
        confirmText: 'Release Lane',
        danger: true,
        onConfirm: async () => {
          const ok = await deleteManualBlock(btn.dataset.v64DeleteLaneBlock);
          if (!ok) return;
          if (typeof adminCourses === 'function') adminCourses();
          toast('Lane released. User can book it again if no booking overlaps.');
        },
      });
    }));
  }
  function openManualLaneBlockModal() {
    const lanes = activeLaneCodes();
    const today = new Date();
    const defaultDate = `${today.getFullYear()}-${pad(today.getMonth() + 1)}-${pad(today.getDate())}`;
    openModal(`
      <div class="modal-head">
        <div><p class="eyebrow">Manual Lane Unavailable</p><h2>Set lane unavailable</h2><p class="muted">Untuk walk-in, phone call booking atau maintenance. Pilih satu atau banyak lane.</p></div>
        <button class="close-btn" data-close-modal>&times;</button>
      </div>
      <form id="v64ManualLaneForm" class="form-grid v64-manual-lane-form">
        <label>Date<input name="blockDate" type="date" value="${esc(defaultDate)}" required></label>
        <label>Start Time<input name="startTime" type="time" value="09:00" required></label>
        <label>Duration<select name="durationMinutes"><option value="60">1 hour</option><option value="120">2 hours</option><option value="180">3 hours</option><option value="30">30 minutes</option></select></label>
        <label>Reason<select name="reason"><option value="Walk-in customer">Walk-in customer</option><option value="Phone call booking">Phone call booking</option><option value="Maintenance">Maintenance</option><option value="Private event">Private event</option><option value="Trainer session">Trainer session</option><option value="Other manual block">Other manual block</option></select></label>
        <div class="wide v64-lane-checkbox-card">
          <strong>Select Lane</strong>
          <div class="v64-lane-checkbox-grid">${lanes.map((lane) => `<label class="v64-lane-check"><input type="checkbox" name="lanes" value="${esc(lane)}"><span>${esc(lane)}</span></label>`).join('')}</div>
        </div>
        <button class="btn btn-primary wide" type="submit">Save Unavailable Lane</button>
      </form>`);
    const form = document.getElementById('v64ManualLaneForm');
    form?.addEventListener('submit', async (event) => {
      event.preventDefault();
      const data = new FormData(form);
      const selected = data.getAll('lanes').map(normLane).filter(Boolean);
      if (!selected.length) return toast('Please select at least one lane.');
      const date = toIsoDate(data.get('blockDate'));
      const start = text(data.get('startTime') || '09:00');
      const dur = Number(data.get('durationMinutes') || 60);
      const end = addMinutesToTime(start, dur);
      const reason = text(data.get('reason') || 'Walk-in customer');
      const payloads = selected.map((laneCode) => ({
        lane_code: laneCode,
        block_date: date,
        start_time: dbTimeFromInput(start),
        end_time: dbTimeFromInput(end),
        source: reason.toLowerCase().includes('walk') ? 'walk_in' : reason.toLowerCase().includes('phone') ? 'phone_call' : 'manual_block',
        status: 'blocked',
        reason,
        created_by: state?.session?.id || null,
      }));
      const ok = await saveManualBlocks(payloads);
      if (!ok) return;
      closeModal();
      if (typeof adminCourses === 'function') adminCourses();
      toast('Lane unavailable saved. It will be blocked for website and app availability if app reads the same table/RPC.');
    });
  }

  const baseAdminCoursesV64 = typeof adminCourses === 'function' ? adminCourses : null;
  if (baseAdminCoursesV64) {
    adminCourses = function adminCoursesV64() {
      const result = baseAdminCoursesV64();
      loadManualBlocks().then(() => {
        if (state?.currentPage === 'courses' || document.body.textContent.includes('Driving Range Management')) {
          injectManualLanePanel();
        }
      });
      return result;
    };
  }

  const baseFetchBookedV64 = window.v61FetchBookedLanes;
  window.v61FetchBookedLanes = async function v64FetchBookedLanes(date = '', time = '', dur = 60, excludeId = '') {
    const baseSet = typeof baseFetchBookedV64 === 'function' ? await baseFetchBookedV64(date, time, dur, excludeId) : new Set();
    if (!SUPABASE_MODE || !supabaseClient) {
      const selectedDate = toIsoDate(date);
      const selectedStart = timeToMinutes(time);
      const selectedEnd = selectedStart === null ? null : selectedStart + (Number(dur) > 12 ? Number(dur) : Number(dur || 1) * 60);
      (cachedManualBlocks.length ? cachedManualBlocks : readLocalBlocks()).forEach((block) => {
        if (/release|cancel|delete/i.test(block.status)) return;
        if (toIsoDate(block.date) !== selectedDate) return;
        const s = timeToMinutes(block.startTime);
        const e = timeToMinutes(block.endTime);
        if (selectedStart !== null && selectedEnd !== null && s !== null && e !== null && selectedStart < e && selectedEnd > s) baseSet.add(normLane(block.laneCode));
      });
    }
    return baseSet;
  };

  const FEEDBACK_OPTIONS = ['All Feedback', 'General Feedback', 'Suggestion', 'Issue / Problem', 'Complaint', 'Compliment'];
  function reviewCat(review = {}) { return text(review.category || review.feedbackCategory || review.feedback_category || 'General Feedback') || 'General Feedback'; }
  const baseAdminReviewsV64 = typeof adminReviews === 'function' ? adminReviews : null;
  if (baseAdminReviewsV64) {
    adminReviews = function adminReviewsV64() {
      setTitle('Contact & Review', 'Administrator Panel');
      const allReviews = Array.isArray(read('reviews')) ? read('reviews') : [];
      const cats = Array.from(new Set([...FEEDBACK_OPTIONS, ...allReviews.map(reviewCat)])).filter(Boolean);
      const reviews = reviewCategoryFilter === 'All Feedback' ? allReviews : allReviews.filter((review) => reviewCat(review) === reviewCategoryFilter);
      content().innerHTML = `
        <div class="toolbar"><div><p class="eyebrow">Contact Information</p><h2>Contact & Review</h2><p class="muted">Contact information shown to users can be edited in Profile → Website Settings.</p></div></div>
        ${typeof v53ContactCardsMarkup === 'function' ? v53ContactCardsMarkup() : ''}
        <div style="height:22px"></div>
        <div class="toolbar v64-feedback-filter-toolbar">
          <div><p class="eyebrow">User Feedback</p><h2>Review customer feedback</h2><p class="muted">Filter feedback by category.</p></div>
          <label class="v64-feedback-filter-label">Feedback Type<select data-v64-feedback-filter>${cats.map((cat) => `<option value="${esc(cat)}" ${cat === reviewCategoryFilter ? 'selected' : ''}>${esc(cat)}</option>`).join('')}</select></label>
        </div>
        <div class="card-grid">${reviews.map(reviewCard).join('') || empty('No feedback submitted yet.')}</div>`;
      content().querySelector('[data-v64-feedback-filter]')?.addEventListener('change', (event) => {
        reviewCategoryFilter = event.target.value || 'All Feedback';
        adminReviews();
      });
    };
  }

  document.addEventListener('DOMContentLoaded', () => loadManualBlocks().catch(() => {}));
  try {
    const settings = typeof read === 'function' ? (read('settings') || {}) : {};
    settings.dataVersion = Math.max(Number(settings.dataVersion || 0), V64_VERSION);
    if (typeof setLocalData === 'function') setLocalData('settings', settings);
  } catch (_) {}
})();

/* =====================================================
   V65 - Manual lane unavailable + user calendar + clean lane UI
   - Fixes manual walk-in lane blocks still appearing available in Supabase mode.
   - Adds calendar picker for user driving range booking date fields.
   - Hard frontend guard checks manual block + booking RPC before submit.
   ===================================================== */


</script>
<?php
}

function upsi_section_user_trainers_module(): void
{
?>
<script>
window.UPSI_SECTION_MODULES = window.UPSI_SECTION_MODULES || {};
window.UPSI_SECTION_MODULES["user_trainers"] = {
  title: "User Trainers",
  runtimeChunk: '18/22',
  functions: ["userTrainers", "openTrainerBookingModal"]
};
</script>
<?php
}

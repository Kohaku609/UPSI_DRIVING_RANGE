<?php
/**
 * user_driving_range.php
 * Bahagian: User Driving Range
 *
 * V108: CSS dan JavaScript runtime dibahagikan ke semua section.
 * Jadi home_page.php tidak lagi memegang semua coding sistem.
 *
 * Runtime chunk: 17/22
 * Fungsi berkaitan untuk presentation: userCourses, drivingRangeBookingLayout
 */


function upsi_section_user_driving_range_styles(): void
{
?>
<style>
/* =========================================================
   V108 CSS chunk 17/22
   Bahagian: User Driving Range
   ========================================================= */
.v75-background-card .v75-background-grid {
  display: grid;
  grid-template-columns: repeat(2, minmax(0, 1fr));
  gap: 18px;
  margin-top: 16px;
}

.v75-bg-box {
  border: 1px solid rgba(15, 81, 50, 0.14);
  border-radius: 22px;
  padding: 16px;
  background: rgba(255, 255, 255, 0.84);
}

.v75-bg-box h3 {
  margin: 0 0 6px;
}

.v75-bg-preview {
  width: 100%;
  aspect-ratio: 16 / 9;
  overflow: hidden;
  border-radius: 18px;
  border: 1px solid rgba(15, 81, 50, 0.15);
  background: #eff8f1;
  margin: 12px 0;
}

.v75-bg-preview img {
  width: 100%;
  height: 100%;
  object-fit: cover;
  display: block;
}

.v75-bg-actions {
  display: flex;
  flex-wrap: wrap;
  gap: 12px;
  align-items: center;
  margin-top: 16px;
}

.v75-bg-url {
  display: block;
  min-height: 34px;
  overflow-wrap: anywhere;
  font-size: 12px;
  color: var(--muted);
  background: rgba(244, 251, 245, 0.72);
  border-radius: 12px;
  padding: 8px 10px;
}

@media (max-width: 880px) {
  .v75-background-card .v75-background-grid {
    grid-template-columns: 1fr;
  }
  .app-shell .page-content {
    margin: 12px;
  }
}


/* =========================================================
   V76 Clear background display + admin review delete button
   ========================================================= */
.auth-app-layout {
  background: var(--upsi-login-background-image) center center / cover no-repeat fixed !important;
}

.auth-app-layout::before {
  background: linear-gradient(180deg, rgba(255,255,255,.10), rgba(255,255,255,.10));
}

.auth-app-card,
.landing-section {
  backdrop-filter: none !important;
  background: rgba(255,255,255,.94);
}

.app-shell .main-area {
  background: var(--upsi-app-background-image) center center / cover no-repeat fixed !important;
}

.app-shell .topbar {
  background: rgba(247,255,248,.92);
}

.app-shell .page-content {
  background: rgba(255,255,255,.86) !important;
  backdrop-filter: none !important;
  box-shadow: inset 0 0 0 1px rgba(255,255,255,.55);
}

.v76-admin-review-card .v76-review-actions {
  margin-top: 12px;
  justify-content: flex-end;
}


/* =========================================================
   V77 Soft smoke overlay + dark mode background support
   ========================================================= */
.auth-app-layout {
  background:
    linear-gradient(180deg, rgba(8, 18, 12, 0.18), rgba(8, 18, 12, 0.16)),
    var(--upsi-login-background-image) center center / cover no-repeat fixed !important;
}

.auth-app-layout::before {
  background:
    radial-gradient(circle at 50% 8%, rgba(255,255,255,.08), transparent 36%),
    linear-gradient(180deg, rgba(10, 18, 14, 0.12), rgba(10, 18, 14, 0.14));
}

.auth-app-card,
.landing-section {
  background: rgba(255,255,255,.92);
}

.app-shell .main-area {
  background:
    linear-gradient(180deg, rgba(8, 18, 12, 0.16), rgba(8, 18, 12, 0.14)),
    var(--upsi-app-background-image) center center / cover no-repeat fixed !important;
}

.app-shell .page-content {
  background: rgba(255,255,255,.84) !important;
}

body[data-theme="dark"] .auth-app-layout,
body.dark-mode .auth-app-layout,
body.dark .auth-app-layout {
  background:
    linear-gradient(180deg, rgba(3, 8, 6, 0.42), rgba(3, 8, 6, 0.38)),
    var(--upsi-login-background-image) center center / cover no-repeat fixed !important;
}

body[data-theme="dark"] .auth-app-layout::before,
body.dark-mode .auth-app-layout::before,
body.dark .auth-app-layout::before {
  background:
    radial-gradient(circle at 50% 8%, rgba(255,255,255,.04), transparent 34%),
    linear-gradient(180deg, rgba(2, 6, 4, 0.22), rgba(2, 6, 4, 0.28));
}

body[data-theme="dark"] .auth-app-card,
body[data-theme="dark"] .landing-section,
body.dark-mode .auth-app-card,
body.dark-mode .landing-section,
body.dark .auth-app-card,
body.dark .landing-section {
  background: rgba(10, 22, 16, 0.88) !important;
  color: #f4fff7;
  border-color: rgba(94, 227, 159, 0.18);
}

body[data-theme="dark"] .app-shell .main-area,
body.dark-mode .app-shell .main-area,
body.dark .app-shell .main-area {
  background:
    linear-gradient(180deg, rgba(2, 8, 5, 0.40), rgba(2, 8, 5, 0.34)),
    var(--upsi-app-background-image) center center / cover no-repeat fixed !important;
}

body[data-theme="dark"] .app-shell .topbar,
body.dark-mode .app-shell .topbar,
body.dark .app-shell .topbar {
  background: rgba(10, 22, 16, 0.88) !important;
}

body[data-theme="dark"] .app-shell .page-content,
body.dark-mode .app-shell .page-content,
body.dark .app-shell .page-content {
  background: rgba(10, 22, 16, 0.82) !important;
  color: #f4fff7 !important;
  border-color: rgba(94, 227, 159, 0.18) !important;
  box-shadow: inset 0 0 0 1px rgba(255,255,255,.03);
}

body[data-theme="dark"] .app-shell .page-content .muted,
body[data-theme="dark"] .auth-app-card .muted,
body.dark-mode .app-shell .page-content .muted,
body.dark-mode .auth-app-card .muted,
body.dark .app-shell .page-content .muted,
body.dark .auth-app-card .muted {
  color: #b7d8c3 !important;
}


</style>
<?php
}

function upsi_section_user_driving_range_scripts(): void
{
?>
<script>
/* =========================================================
   V108 JavaScript chunk 17/22
   Bahagian: User Driving Range
   ========================================================= */
/* =====================================================
   V54 - Payment receipt viewer + booking slot date/time clarity
   Website only. App source is not changed.
   ===================================================== */
(function v54ReceiptAndSchedulePatch() {
  const V54_VERSION = 54;
  const v54Esc = (value = '') => (typeof escapeHtml === 'function' ? escapeHtml(value) : String(value ?? '').replace(/[&<>"]/g, (m) => ({ '&': '&amp;', '<': '&lt;', '>': '&gt;', '"': '&quot;' }[m])));
  const v54Money = (value = 0) => (typeof money === 'function' ? money(Number(value || 0)) : `RM ${Number(value || 0).toFixed(2)}`);
  const v54Status = (value = '') => (typeof statusPill === 'function' ? statusPill(value) : `<span class="status-pill">${v54Esc(value)}</span>`);
  const v54Title = (booking = {}) => (typeof bookingTitle === 'function' ? bookingTitle(booking) : (booking.bookingType === 'trainer' ? 'Trainer Booking' : 'Driving Range Booking'));
  const v54Package = (booking = {}) => {
    if (typeof v53BookingPackage === 'function') return v53BookingPackage(booking);
    if (booking.bookingType === 'trainer') return `${booking.trainingClassType || 'Trainer coaching'} • Date only • Time via WhatsApp`;
    const count = Number(booking.bucketCount || 1);
    const label = booking.bucketLabel || 'bucket';
    const balls = Number(booking.totalBalls || booking.bucketBalls * count || 0);
    const lane = booking.laneCode || booking.laneName || booking.lane || booking.laneId || 'No lane';
    return `${booking.membershipType ? membershipLabel(booking.membershipType) : 'Package'} • ${count} × ${label} = ${balls} balls • Lane: ${lane}`;
  };
  const v54PrettyDate = (value = '') => {
    if (!value) return '-';
    if (typeof v53PrettyDate === 'function') return v53PrettyDate(value);
    if (typeof formatDateDisplay === 'function') return formatDateDisplay(value);
    return String(value);
  };
  const v54TimeText = (booking = {}) => {
    if (booking.bookingType === 'trainer') return 'Discuss via WhatsApp';
    const start = booking.startTime || booking.time || booking.bookingTime || '';
    const end = booking.endTime || '';
    if (start && end && String(start) !== String(end)) return `${start} - ${end}`;
    return start || '-';
  };
  const v54DateText = (booking = {}) => v54PrettyDate(booking.date || booking.bookingDate || booking.sessionDate || '');
  const v54ReceiptUrl = (booking = {}) => String(booking.receiptImage || booking.receiptUrl || booking.receipt_image_url || '').trim();
  const v54ReceiptNote = (booking = {}) => String(booking.receiptNote || booking.paymentReference || booking.receiptNumber || '').trim();
  const v54HasReceipt = (booking = {}) => Boolean(v54ReceiptUrl(booking) || v54ReceiptNote(booking));
  const v54IsImageUrl = (url = '') => /\.(png|jpe?g|gif|webp|bmp|svg)(\?|#|$)/i.test(url) || /image/i.test(url);

  function v54ReceiptButtons(booking = {}) {
    if (!v54HasReceipt(booking)) return '';
    return `<button class="btn btn-soft" type="button" data-view-receipt="${v54Esc(booking.id)}">View Receipt</button>`;
  }

  function v54ActionButtons(booking = {}, mode = 'admin') {
    const viewBooking = `<button class="btn btn-soft" type="button" data-view-booking="${v54Esc(booking.id)}">View Booking</button>`;
    const viewReceipt = v54ReceiptButtons(booking);
    const isVerified = String(booking.paymentStatus || '').toLowerCase() === 'verified';

    if (mode === 'payment') {
      const uploadLabel = v54HasReceipt(booking) ? 'Replace Receipt' : 'Upload Receipt';
      const upload = isVerified ? '' : `<button class="btn btn-primary" type="button" data-upload-receipt="${v54Esc(booking.id)}">${uploadLabel}</button>`;
      return [viewBooking, viewReceipt, upload].filter(Boolean).join('');
    }

    if (mode === 'payments-admin') {
      const verify = isVerified ? '' : `<button class="btn btn-soft" type="button" data-verify-payment="${v54Esc(booking.id)}">Verify</button>`;
      const reject = isVerified ? '' : `<button class="btn btn-danger-soft" type="button" data-reject-payment="${v54Esc(booking.id)}">Reject</button>`;
      return [viewBooking, viewReceipt || `<span class="status-pill pending">No receipt uploaded</span>`, verify, reject].filter(Boolean).join('');
    }

    if (mode === 'user') {
      const reschedule = `<button class="btn btn-soft" type="button" data-reschedule="${v54Esc(booking.id)}">Reschedule</button>`;
      const cancel = `<button class="btn btn-danger-soft" type="button" data-cancel="${v54Esc(booking.id)}">Cancel</button>`;
      return [viewBooking, viewReceipt, reschedule, cancel].filter(Boolean).join('');
    }

    if (typeof isBookingCancelled === 'function' && isBookingCancelled(booking)) {
      const undo = mode === 'user' && booking.cancelledBy === 'user' && ['user_cancelled', 'confirmed_user_cancelled'].includes(booking.cancellationType)
        ? `<button class="btn btn-warning-soft" type="button" data-undo-cancel="${v54Esc(booking.id)}">Undo</button>` : '';
      const remove = typeof isProtectedBookingReference === 'function' && isProtectedBookingReference(booking)
        ? `<span class="status-pill pending" title="Verified booking records are kept for reference.">Reference</span>`
        : `<button class="btn btn-danger-soft btn-icon-x" type="button" title="Delete cancelled booking record" data-hide-booking="${v54Esc(booking.id)}">X</button>`;
      return [viewBooking, viewReceipt, undo, remove].filter(Boolean).join('');
    }

    const confirm = `<button class="btn btn-soft" type="button" data-confirm-booking="${v54Esc(booking.id)}">Confirm</button>`;
    const pending = `<button class="btn btn-warning-soft" type="button" data-pending-booking="${v54Esc(booking.id)}">Pending</button>`;
    const cancel = `<button class="btn btn-danger-soft" type="button" data-cancel="${v54Esc(booking.id)}">Cancel</button>`;
    return [viewBooking, viewReceipt, confirm, pending, cancel].filter(Boolean).join('');
  }

  function v54ReceiptSummary(booking = {}) {
    const url = v54ReceiptUrl(booking);
    const note = v54ReceiptNote(booking);
    if (!url && !note) return `<span class="muted">No receipt uploaded</span>`;
    return `${url ? `<button class="text-link button-link" type="button" data-view-receipt="${v54Esc(booking.id)}">View uploaded receipt</button>` : ''}${note ? `<br><span class="muted">Receipt note: ${v54Esc(note)}</span>` : ''}`;
  }

  function v54OpenReceiptViewer(id = '') {
    const booking = read('bookings').find((b) => String(b.id) === String(id));
    if (!booking) return;
    const url = v54ReceiptUrl(booking);
    const note = v54ReceiptNote(booking);
    openModal(`
      <div class="modal-head">
        <div>
          <p class="eyebrow">Payment Receipt</p>
          <h2>${v54Esc(v54Title(booking))}</h2>
          <p class="muted">${v54Esc(booking.id)} • Uploaded evidence for this booking.</p>
        </div>
        <button class="close-btn" data-close-modal>&times;</button>
      </div>
      <div class="v54-receipt-viewer">
        ${url ? `<div class="v54-receipt-frame">${v54IsImageUrl(url) ? `<img src="${v54Esc(url)}" alt="Payment receipt">` : `<iframe src="${v54Esc(url)}" title="Payment receipt"></iframe>`}</div>` : `<div class="empty-state">No receipt file uploaded.</div>`}
        <ul class="meta-list booking-detail-list">
          <li><span>Customer</span><strong>${v54Esc(booking.customerName || '-')}</strong></li>
          <li><span>Booking Date</span><strong>${v54Esc(v54DateText(booking))}</strong></li>
          <li><span>Booking Time</span><strong>${v54Esc(v54TimeText(booking))}</strong></li>
          <li><span>Amount</span><strong>${v54Money(booking.amount)}</strong></li>
          <li><span>Payment Status</span><strong>${v54Esc(booking.paymentStatus || '-')}</strong></li>
          <li><span>Receipt Note</span><strong>${v54Esc(note || '-')}</strong></li>
        </ul>
        ${url ? `<a class="btn btn-primary wide" href="${v54Esc(url)}" target="_blank" rel="noopener">Open Receipt in New Tab</a>` : ''}
      </div>
    `);
  }
  window.v54OpenReceiptViewer = v54OpenReceiptViewer;

  const v54BaseBookingToLocal = bookingToLocal;
  bookingToLocal = function bookingToLocalV54(row = {}) {
    const local = v54BaseBookingToLocal(row);
    const slot = Array.isArray(row.tee_slots) ? row.tee_slots[0] : (row.tee_slots || {});
    if (!local.date || local.date === '-') {
      local.date = row.booking_date || row.session_date || row.slot_date || slot.slot_date || local.date || '';
    }
    if ((!local.time || local.time === '-') && (row.booking_time || row.start_time || slot.slot_time)) {
      const raw = row.booking_time || row.start_time || slot.slot_time;
      local.time = typeof dbTimeToLocal === 'function' ? dbTimeToLocal(raw) : String(raw || '');
    }
    if (!local.startTime && row.start_time) local.startTime = typeof dbTimeToLocal === 'function' ? dbTimeToLocal(row.start_time) : row.start_time;
    if (!local.endTime && row.end_time) local.endTime = typeof dbTimeToLocal === 'function' ? dbTimeToLocal(row.end_time) : row.end_time;
    const joinedPayment = Array.isArray(row.payments) ? row.payments[0] : row.payments;
    if (joinedPayment) {
      local.receiptNote = joinedPayment.payment_note || local.receiptNote || row.payment_reference || '';
      local.receiptImage = joinedPayment.receipt_image_url || local.receiptImage || '';
    }
    local.bookingDate = local.date;
    local.bookingTime = local.time;
    return local;
  };

  const v54BaseSyncBookings = syncBookingsToSupabase;
  syncBookingsToSupabase = async function syncBookingsToSupabaseV54(bookings = []) {
    await v54BaseSyncBookings(bookings);
    if (!SUPABASE_MODE || !supabaseClient) return;
    for (const booking of bookings) {
      if (!booking || !isUuid(booking.id)) continue;
      const bookingDate = booking.date || booking.bookingDate || null;
      const startTime = booking.startTime || booking.time || booking.bookingTime || null;
      const endTime = booking.endTime || (booking.durationMinutes && startTime && typeof addMinutesToDisplayTime === 'function' ? addMinutesToDisplayTime(startTime, Number(booking.durationMinutes)) : null);
      const patch = {
        booking_date: bookingDate,
        booking_time: booking.bookingType === 'trainer' ? null : (startTime && typeof localTimeToDb === 'function' ? localTimeToDb(startTime) : null),
        start_time: booking.bookingType === 'trainer' ? null : (startTime && typeof localTimeToDb === 'function' ? localTimeToDb(startTime) : null),
        end_time: booking.bookingType === 'trainer' ? null : (endTime && typeof localTimeToDb === 'function' ? localTimeToDb(endTime) : null),
      };
      try {
        await supabaseClient.from(DB_TABLES.bookings).update(patch).eq('id', booking.id);
      } catch (error) {
        console.warn('V54 booking date/time sync skipped. Run V54 SQL if booking_date/booking_time columns are missing.', error?.message || error);
      }
    }
  };

  function v54BookingDetailModal(id = '') {
    const booking = read('bookings').find((b) => String(b.id) === String(id));
    if (!booking) return;
    const url = v54ReceiptUrl(booking);
    const note = v54ReceiptNote(booking);
    openModal(`
      <div class="modal-head">
        <div>
          <p class="eyebrow">Booking Details</p>
          <h2>${v54Esc(v54Title(booking))}</h2>
          <p class="muted">${v54Esc(booking.id)}</p>
        </div>
        <button class="close-btn" data-close-modal>&times;</button>
      </div>
      <div class="booking-detail-panel">
        <ul class="meta-list booking-detail-list">
          <li><span>Created At</span><strong>${booking.createdAt ? new Date(booking.createdAt).toLocaleString() : '-'}</strong></li>
          <li><span>Customer</span><strong>${v54Esc(booking.customerName || '-')}</strong></li>
          <li><span>Email</span><strong>${v54Esc(booking.customerEmail || '-')}</strong></li>
          <li><span>Booking Type</span><strong>${booking.bookingType === 'trainer' ? 'Trainer Booking' : 'Driving Range Booking'}</strong></li>
          <li><span>Package</span><strong>${v54Esc(v54Package(booking))}</strong></li>
          <li><span>Driving Range</span><strong>${booking.bookingType === 'trainer' ? 'Not required' : v54Esc(booking.courseName || '-')}</strong></li>
          <li><span>Trainer</span><strong>${v54Esc(booking.trainerName || 'No trainer')}</strong></li>
          <li><span>Booking Date</span><strong>${v54Esc(v54DateText(booking))}</strong></li>
          <li><span>Booking Time</span><strong>${v54Esc(v54TimeText(booking))}</strong></li>
          <li><span>Amount</span><strong>${v54Money(booking.amount)}</strong></li>
          <li><span>Booking Status</span><strong>${v54Esc(booking.bookingStatus || '-')}</strong></li>
          <li><span>Payment</span><strong>${v54Esc(booking.paymentStatus || '-')} • ${v54Esc(booking.paymentMethod || '-')}</strong></li>
          <li><span>Receipt</span><strong>${url ? `<button class="text-link button-link" type="button" data-view-receipt="${v54Esc(booking.id)}">View Receipt</button>` : 'No receipt file uploaded'}</strong></li>
          <li><span>Receipt Note</span><strong>${v54Esc(note || '-')}</strong></li>
        </ul>
      </div>
    `);
    document.querySelector('[data-view-receipt]')?.addEventListener('click', () => v54OpenReceiptViewer(booking.id));
  }
  openCancelledBookingDetail = v54BookingDetailModal;

  bookingTable = function bookingTableV54(bookings, mode = 'admin') {
    if (!bookings.length) return empty('No booking record found.');
    return `<div class="booking-card-list-v53 booking-card-list-v54">${bookings.map((b) => `
      <article class="booking-card-v53 booking-card-v54 ${v54HasReceipt(b) ? 'has-receipt' : ''}">
        <div class="booking-card-main-v53">
          <p class="eyebrow">${b.bookingType === 'trainer' ? 'Trainer Booking' : 'Driving Range Booking'}</p>
          <h3>${v54Esc(v54Title(b))}</h3>
          <p class="muted">${v54Esc(b.id)} • Created ${b.createdAt ? new Date(b.createdAt).toLocaleString() : '-'}</p>
          <p>${v54Esc(v54Package(b))}</p>
          <p class="muted">${v54Esc(b.customerName || '-')} • ${v54Esc(b.customerEmail || '-')}</p>
          <p class="v54-receipt-summary">${v54ReceiptSummary(b)}</p>
        </div>
        <div class="booking-card-side-v53 booking-card-side-v54">
          <div><span>Booking Date</span><strong>${v54Esc(v54DateText(b))}</strong></div>
          <div><span>Booking Time</span><strong>${v54Esc(v54TimeText(b))}</strong></div>
          <div><span>Amount</span><strong>${v54Money(b.amount)}</strong></div>
        </div>
        <div class="booking-card-status-v53">
          ${v54Status(b.bookingStatus)}
          ${v54Status(b.paymentStatus)}
          <span class="muted">${v54Esc(b.paymentMethod || '-')}</span>
        </div>
        <div class="booking-card-actions-v53 row-actions">
          ${v54ActionButtons(b, mode)}
        </div>
      </article>`).join('')}</div>`;
  };

  const v54BaseBindBookingActions = bindBookingActions;
  bindBookingActions = function bindBookingActionsV54(mode) {
    if (typeof v54BaseBindBookingActions === 'function') v54BaseBindBookingActions(mode);
    content().querySelectorAll('[data-view-receipt]').forEach((btn) => {
      if (btn.dataset.v54Ready === 'true') return;
      btn.dataset.v54Ready = 'true';
      btn.addEventListener('click', () => v54OpenReceiptViewer(btn.dataset.viewReceipt));
    });
  };

  const v54BaseOpenReceiptModal = openReceiptModal;
  openReceiptModal = function openReceiptModalV54(id) {
    const booking = read('bookings').find((b) => String(b.id) === String(id));
    if (!booking) return;
    v54BaseOpenReceiptModal(id);
    const form = document.getElementById('receiptForm');
    if (!form) return;
    const current = v54ReceiptUrl(booking);
    if (current && !document.querySelector('.v54-current-receipt-box')) {
      form.insertAdjacentHTML('afterbegin', `
        <div class="v54-current-receipt-box">
          <strong>Current uploaded receipt</strong>
          <button class="btn btn-soft" type="button" data-view-receipt="${v54Esc(booking.id)}">View Receipt</button>
        </div>
      `);
      form.querySelector('[data-view-receipt]')?.addEventListener('click', () => v54OpenReceiptViewer(booking.id));
    }
  };

  const v54BaseUserPayments = userPayments;
  userPayments = function userPaymentsV54() {
    v54BaseUserPayments();
  };

  const v54BaseAdminPayments = adminPayments;
  adminPayments = function adminPaymentsV54() {
    v54BaseAdminPayments();
  };

  const settings = read('settings') || {};
  settings.dataVersion = Math.max(Number(settings.dataVersion || 0), V54_VERSION);
  setLocalData('settings', settings);
})();


/* =====================================================
   V60 - Booking-based lane availability fix
   Base: V54. No lane block table. No app changes.
   Lane becomes unavailable immediately when a booking exists,
   even while admin has not confirmed the booking yet.
   ===================================================== */
(function v60BookingBasedLaneAvailabilityFix() {
  function v60Text(value = '') {
    return String(value ?? '').trim();
  }

  function v60Lower(value = '') {
    return v60Text(value).toLowerCase();
  }

  function v60DateKey(value = '') {
    const text = v60Text(value);
    if (!text) return '';
    const iso = text.match(/\d{4}-\d{2}-\d{2}/);
    if (iso) return iso[0];
    const slash = text.match(/^(\d{1,2})\/(\d{1,2})\/(\d{4})$/);
    if (slash) {
      const d = slash[1].padStart(2, '0');
      const m = slash[2].padStart(2, '0');
      const y = slash[3];
      return `${y}-${m}-${d}`;
    }
    const parsed = new Date(text);
    if (!Number.isNaN(parsed.getTime())) {
      const y = parsed.getFullYear();
      const m = String(parsed.getMonth() + 1).padStart(2, '0');
      const d = String(parsed.getDate()).padStart(2, '0');
      return `${y}-${m}-${d}`;
    }
    return text.slice(0, 10);
  }

  function v60TimePart(value = '', partNo = 1) {
    let text = v60Text(value).replace(/[–—]/g, '-').replace(/\s+/g, ' ');
    if (!text) return '';
    if (text.includes('-')) text = v60Text(text.split('-')[partNo - 1] || '');
    text = text.replace(/^time\s*:?\s*/i, '').replace(/^booking time\s*:?\s*/i, '').replace(/^session\s*:?\s*/i, '');
    text = text.replace(/\s*\(.*\)\s*$/g, '').trim();
    return text;
  }

  function v60TimeToMinutes(value = '', partNo = 1) {
    const text = v60TimePart(value, partNo);
    if (!text) return null;
    const m12 = text.match(/^(\d{1,2})(?::(\d{2}))?(?::\d{2})?\s*(AM|PM)$/i);
    if (m12) {
      let hour = Number(m12[1]);
      const minute = Number(m12[2] || 0);
      const suffix = m12[3].toUpperCase();
      if (suffix === 'PM' && hour !== 12) hour += 12;
      if (suffix === 'AM' && hour === 12) hour = 0;
      return hour * 60 + minute;
    }
    const m24 = text.match(/^(\d{1,2}):(\d{2})(?::\d{2})?$/);
    if (m24) return Number(m24[1]) * 60 + Number(m24[2]);
    return null;
  }

  function v60DurationMinutes(booking = {}) {
    const direct = Number(booking.durationMinutes || booking.duration_minutes || 0);
    if (direct > 0) return direct;
    const label = v60Lower(booking.duration || booking.duration_label || '');
    const hourMatch = label.match(/(\d+(?:\.\d+)?)\s*hour/);
    if (hourMatch) return Number(hourMatch[1]) * 60;
    const minMatch = label.match(/(\d+)\s*min/);
    if (minMatch) return Number(minMatch[1]);
    return 60;
  }

  function v60LaneCodeFromObject(booking = {}) {
    const candidates = [
      booking.laneCode,
      booking.lane_code,
      booking.laneId,
      booking.lane_id_text,
      booking.selected_lane,
      booking.driving_range_lane,
      booking.lane,
      booking.laneLabel,
      booking.lane_label,
      booking.laneName,
      booking.lane_name,
      booking.lane_id,
    ];
    for (const item of candidates) {
      const clean = v60Text(item).toUpperCase();
      if (!clean) continue;
      const kd = clean.match(/KD\s*0?\d+/i);
      if (kd) return kd[0].replace(/\s+/g, '').toUpperCase().replace(/^KD(\d)$/,'KD0$1');
      if (!/^[0-9a-f-]{30,}$/i.test(clean)) return clean;
    }
    return '';
  }

  function v60BookingDate(booking = {}) {
    return v60DateKey(
      booking.date ||
      booking.bookingDate ||
      booking.booking_date ||
      booking.scheduledDate ||
      booking.scheduled_date ||
      booking.sessionDate ||
      booking.session_date ||
      booking.slot_date ||
      booking.tee_slots?.slot_date ||
      ''
    );
  }

  function v60BookingStart(booking = {}) {
    return v60TimeToMinutes(
      booking.startTime ||
      booking.start_time ||
      booking.bookingStartTime ||
      booking.booking_start_time ||
      booking.time ||
      booking.bookingTime ||
      booking.booking_time ||
      booking.scheduledTime ||
      booking.scheduled_time ||
      booking.slot_time ||
      booking.tee_slots?.slot_time ||
      '',
      1
    );
  }

  function v60BookingEnd(booking = {}) {
    const direct = v60TimeToMinutes(
      booking.endTime ||
      booking.end_time ||
      booking.bookingEndTime ||
      booking.booking_end_time ||
      '',
      1
    );
    if (direct !== null) return direct;
    const rangeEnd = v60TimeToMinutes(booking.time || booking.bookingTime || booking.booking_time || booking.scheduled_time || '', 2);
    if (rangeEnd !== null) return rangeEnd;
    const start = v60BookingStart(booking);
    return start === null ? null : start + v60DurationMinutes(booking);
  }

  function v60IsBlockingBooking(booking = {}) {
    const lane = v60LaneCodeFromObject(booking);
    if (!lane) return false;
    const type = v60Lower(booking.bookingType || booking.booking_type || 'driving');
    if (type.includes('trainer')) return false;
    const bookingStatus = v60Lower(booking.bookingStatus || booking.booking_status || booking.status || '');
    const paymentStatus = v60Lower(booking.paymentStatus || booking.payment_status || '');
    const cancelType = v60Lower(booking.cancellationType || booking.cancellation_type || '');
    const bad = [bookingStatus, paymentStatus, cancelType].some((value) =>
      value.includes('cancel') ||
      value.includes('reject') ||
      value.includes('delete') ||
      value.includes('inactive') ||
      value.includes('expired')
    );
    return !bad;
  }

  window.v60BookedLaneSetFromLocal = function v60BookedLaneSetFromLocal(date = '', time = '', durationMinutes = 60, excludedBookingId = '') {
    const selectedDate = v60DateKey(date);
    const selectedStart = v60TimeToMinutes(time, 1);
    if (!selectedDate || selectedStart === null) return new Set();
    const selectedEnd = selectedStart + Number(durationMinutes || 60);
    const booked = new Set();
    const bookings = typeof read === 'function' ? read('bookings') : [];
    (Array.isArray(bookings) ? bookings : []).forEach((booking) => {
      if (!v60IsBlockingBooking(booking)) return;
      if (excludedBookingId && String(booking.id) === String(excludedBookingId)) return;
      if (v60BookingDate(booking) !== selectedDate) return;
      const lane = v60LaneCodeFromObject(booking);
      const bookingStart = v60BookingStart(booking);
      const bookingEnd = v60BookingEnd(booking);
      if (!lane || bookingStart === null || bookingEnd === null) return;
      if (selectedStart < bookingEnd && selectedEnd > bookingStart) booked.add(lane.toUpperCase());
    });
    return booked;
  };

  const v60BaseBookingToLocal = bookingToLocal;
  bookingToLocal = function bookingToLocalV60(row = {}) {
    const local = v60BaseBookingToLocal(row);
    const lane = v60LaneCodeFromObject({ ...row, ...local });
    if (lane) {
      local.laneCode = lane;
      local.laneId = lane;
      local.lane = lane;
      local.laneLabel = row.lane_label || row.lane_name || lane;
    }
    const dbDate = row.booking_date || row.scheduled_date || row.session_date || row.slot_date || row.tee_slots?.slot_date || '';
    if (dbDate) {
      local.date = v60DateKey(dbDate);
      local.bookingDate = local.date;
    }
    const dbStart = row.start_time || row.booking_time || row.scheduled_time || row.slot_time || row.tee_slots?.slot_time || '';
    if (dbStart) {
      local.startTime = typeof dbTimeToLocal === 'function' ? dbTimeToLocal(dbStart) : v60TimePart(dbStart, 1);
      local.time = local.startTime;
      local.bookingTime = local.startTime;
    }
    const dbEnd = row.end_time || '';
    if (dbEnd) local.endTime = typeof dbTimeToLocal === 'function' ? dbTimeToLocal(dbEnd) : v60TimePart(dbEnd, 1);
    return local;
  };

  async function v60RefreshBookingsFromSupabase() {
    if (!SUPABASE_MODE || !supabaseClient || typeof loadSupabaseDataToLocal !== 'function') return false;
    try {
      await loadSupabaseDataToLocal({ requireAuth: true });
      return true;
    } catch (error) {
      console.warn('V60 booking refresh skipped:', error?.message || error);
      return false;
    }
  }

  const v60BaseOpenBookingModal = openBookingModal;
  openBookingModal = async function openBookingModalV60(...args) {
    await v60RefreshBookingsFromSupabase();
    return v60BaseOpenBookingModal(...args);
  };
})();

/* =====================================================
   V61 - HARD lane duplicate fix using Supabase RPC
   - Does NOT use driving_range_lane_blocks table.
   - Reads booked lanes through security-definer RPC so all users can see lane occupancy only.
   - Blocks submit if selected lane is already booked, even if booking is pending.
   ===================================================== */
(function v61HardLaneRpcFix() {
  const V61_VERSION = 61;
  const bookedLaneCache = new Map();

  function text(value = '') {
    return String(value ?? '').trim();
  }

  function laneCode(value = '') {
    const clean = text(value).toUpperCase().replace(/\s+/g, '');
    if (!clean) return '';
    const kd = clean.match(/^KD0*(\d+)$/i) || clean.match(/KD0*(\d+)/i);
    if (kd) return `KD${String(Number(kd[1])).padStart(2, '0')}`;
    return clean;
  }

  function dateKey(value = '') {
    const raw = text(value);
    if (!raw) return '';
    const iso = raw.match(/\d{4}-\d{2}-\d{2}/);
    if (iso) return iso[0];
    const slash = raw.match(/^(\d{1,2})\/(\d{1,2})\/(\d{4})$/);
    if (slash) return `${slash[3]}-${slash[2].padStart(2, '0')}-${slash[1].padStart(2, '0')}`;
    const parsed = new Date(raw);
    if (!Number.isNaN(parsed.getTime())) {
      return `${parsed.getFullYear()}-${String(parsed.getMonth() + 1).padStart(2, '0')}-${String(parsed.getDate()).padStart(2, '0')}`;
    }
    return raw.slice(0, 10);
  }

  function timePart(value = '', partNo = 1) {
    let raw = text(value).replace(/[–—]/g, '-').replace(/\s+/g, ' ');
    if (!raw) return '';
    if (raw.includes('-')) raw = text(raw.split('-')[partNo - 1] || '');
    raw = raw.replace(/^time\s*:?\s*/i, '').replace(/^booking time\s*:?\s*/i, '').replace(/^session\s*:?\s*/i, '');
    raw = raw.replace(/\s*\(.*\)\s*$/g, '').trim();
    return raw;
  }

  function timeToMinutes(value = '', partNo = 1) {
    const raw = timePart(value, partNo);
    if (!raw) return null;
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
    if (m24) return Number(m24[1]) * 60 + Number(m24[2]);
    return null;
  }

  function durationMinutes(value = 60) {
    const direct = Number(value || 0);
    if (direct > 0) return direct;
    const raw = text(value).toLowerCase();
    const hour = raw.match(/(\d+(?:\.\d+)?)\s*hour/);
    if (hour) return Math.round(Number(hour[1]) * 60);
    const min = raw.match(/(\d+)\s*min/);
    if (min) return Number(min[1]);
    return 60;
  }

  function cacheKey(date = '', time = '', duration = 60, excludedBookingId = '') {
    return `${dateKey(date)}|${timePart(time, 1).toUpperCase()}|${durationMinutes(duration)}|${text(excludedBookingId)}`;
  }

  function localBookedLaneSet(date = '', time = '', duration = 60, excludedBookingId = '') {
    const selectedDate = dateKey(date);
    const selectedStart = timeToMinutes(time, 1);
    if (!selectedDate || selectedStart === null) return new Set();
    const selectedEnd = selectedStart + durationMinutes(duration);
    const set = new Set();
    const bookings = typeof read === 'function' ? read('bookings') : [];
    (Array.isArray(bookings) ? bookings : []).forEach((booking) => {
      if (excludedBookingId && String(booking.id) === String(excludedBookingId)) return;
      const statusText = [booking.status, booking.bookingStatus, booking.booking_status, booking.paymentStatus, booking.payment_status, booking.cancellationType, booking.cancellation_type]
        .map((item) => text(item).toLowerCase()).join(' ');
      if (/cancel|reject|delete|inactive|expired/.test(statusText)) return;
      const typeText = text(booking.bookingType || booking.booking_type || '').toLowerCase();
      if (typeText.includes('trainer')) return;
      const lane = laneCode(booking.laneCode || booking.lane_code || booking.laneId || booking.lane_id_text || booking.lane_label || booking.laneLabel || booking.lane_id || '');
      if (!lane) return;
      const bookingDate = dateKey(booking.date || booking.bookingDate || booking.booking_date || booking.scheduledDate || booking.scheduled_date || '');
      if (bookingDate !== selectedDate) return;
      const bookingStart = timeToMinutes(booking.startTime || booking.start_time || booking.time || booking.bookingTime || booking.booking_time || booking.scheduledTime || booking.scheduled_time || '', 1);
      if (bookingStart === null) return;
      const bookingEnd = timeToMinutes(booking.endTime || booking.end_time || '', 1)
        ?? timeToMinutes(booking.time || booking.bookingTime || booking.booking_time || booking.scheduledTime || booking.scheduled_time || '', 2)
        ?? (bookingStart + durationMinutes(booking.durationMinutes || booking.duration_minutes || booking.duration || 60));
      if (selectedStart < bookingEnd && selectedEnd > bookingStart) set.add(lane);
    });
    return set;
  }

  async function fetchBookedLanes(date = '', time = '', duration = 60, excludedBookingId = '') {
    if (!SUPABASE_MODE || !supabaseClient || !date || !time) return localBookedLaneSet(date, time, duration, excludedBookingId);
    const key = cacheKey(date, time, duration, excludedBookingId);
    try {
      const { data, error } = await supabaseClient.rpc('upsi_driving_range_booked_lanes', {
        p_booking_date: dateKey(date),
        p_booking_time: timePart(time, 1),
        p_duration: durationMinutes(duration),
        p_exclude_booking_id: text(excludedBookingId) || null,
      });
      if (error) throw error;
      const set = new Set();
      (Array.isArray(data) ? data : []).forEach((row) => {
        const code = laneCode(row?.lane_code ?? row);
        if (code) set.add(code);
      });
      bookedLaneCache.set(key, set);
      return set;
    } catch (error) {
      console.warn('V61 booked lane RPC failed. Run supabase_v61_booking_lane_hard_fix.sql:', error?.message || error);
      const fallback = localBookedLaneSet(date, time, duration, excludedBookingId);
      bookedLaneCache.set(key, fallback);
      return fallback;
    }
  }

  function combinedBookedLaneSet(date = '', time = '', duration = 60, excludedBookingId = '') {
    const key = cacheKey(date, time, duration, excludedBookingId);
    const combined = localBookedLaneSet(date, time, duration, excludedBookingId);
    const rpcSet = bookedLaneCache.get(key);
    if (rpcSet) rpcSet.forEach((lane) => combined.add(lane));
    return combined;
  }

  window.v60BookedLaneSetFromLocal = combinedBookedLaneSet;
  window.v61FetchBookedLanes = fetchBookedLanes;

  function getBookingForm() {
    return document.getElementById('bookingForm') || document.getElementById('drivingRangeForm');
  }

  function formDate(form) {
    return form?.date?.value || form?.querySelector('[name="date"]')?.value || '';
  }

  function formTime(form) {
    return form?.time?.value || form?.querySelector('[name="time"]')?.value || '';
  }

  function formDuration(form) {
    return form?.durationMinutes?.value || form?.querySelector('[name="durationMinutes"]')?.value || 60;
  }

  function formLane(form) {
    return laneCode(form?.laneId?.value || form?.querySelector('[name="laneId"]')?.value || '');
  }

  async function refreshFormLaneUi(form) {
    if (!form || form.dataset.v61Refreshing === '1') return;
    const d = formDate(form);
    const t = formTime(form);
    const dur = formDuration(form);
    if (!d || !t) return;
    form.dataset.v61Refreshing = '1';
    await fetchBookedLanes(d, t, dur, form.dataset.existingBookingId || '');
    form.dataset.v61SkipFetch = '1';
    const target = form.time || form.querySelector('[name="time"]') || form.querySelector('[name="durationMinutes"]');
    target?.dispatchEvent(new Event('change', { bubbles: true }));
    setTimeout(() => {
      delete form.dataset.v61SkipFetch;
      delete form.dataset.v61Refreshing;
    }, 0);
  }

  const baseOpenBookingModalV61 = typeof openBookingModal === 'function' ? openBookingModal : null;
  if (baseOpenBookingModalV61) {
    openBookingModal = async function openBookingModalV61(...args) {
      const result = await baseOpenBookingModalV61(...args);
      setTimeout(() => refreshFormLaneUi(getBookingForm()), 50);
      return result;
    };
  }

  document.addEventListener('change', (event) => {
    const form = event.target?.closest?.('#bookingForm, #drivingRangeForm');
    if (!form || form.dataset.v61SkipFetch === '1') return;
    const name = event.target?.name || '';
    if (!['date', 'time', 'durationMinutes'].includes(name)) return;
    setTimeout(() => refreshFormLaneUi(form), 0);
  }, true);

  document.addEventListener('submit', async (event) => {
    const form = event.target?.closest?.('#bookingForm, #drivingRangeForm');
    if (!form) return;
    if (form.dataset.v61VerifiedSubmit === '1') {
      setTimeout(() => delete form.dataset.v61VerifiedSubmit, 0);
      return;
    }

    const d = formDate(form);
    const t = formTime(form);
    const dur = formDuration(form);
    const lane = formLane(form);
    if (!d || !t || !lane) return;

    event.preventDefault();
    event.stopImmediatePropagation();

    const booked = await fetchBookedLanes(d, t, dur, form.dataset.existingBookingId || '');
    await refreshFormLaneUi(form);

    if (booked.has(lane)) {
      if (typeof toast === 'function') toast(`${lane} has already been booked for ${d} at ${t}. Please choose another lane.`);
      else alert(`${lane} has already been booked. Please choose another lane.`);
      return;
    }

    form.dataset.v61VerifiedSubmit = '1';
    if (typeof form.requestSubmit === 'function') form.requestSubmit();
    else form.dispatchEvent(new Event('submit', { bubbles: true, cancelable: true }));
  }, true);

  try {
    const settings = typeof read === 'function' ? (read('settings') || {}) : {};
    settings.dataVersion = Math.max(Number(settings.dataVersion || 0), V61_VERSION);
    if (typeof setLocalData === 'function') setLocalData('settings', settings);
  } catch (_) {}
})();




</script>
<?php
}

function upsi_section_user_driving_range_module(): void
{
?>
<script>
window.UPSI_SECTION_MODULES = window.UPSI_SECTION_MODULES || {};
window.UPSI_SECTION_MODULES["user_driving_range"] = {
  title: "User Driving Range",
  runtimeChunk: '17/22',
  functions: ["userCourses", "drivingRangeBookingLayout"]
};
</script>
<?php
}

<?php
/**
 * admin_reports.php
 * Bahagian: Admin Reports
 *
 * V108: CSS dan JavaScript runtime dibahagikan ke semua section.
 * Jadi home_page.php tidak lagi memegang semua coding sistem.
 *
 * Runtime chunk: 14/22
 * Fungsi berkaitan untuk presentation: adminReports
 */


function upsi_section_admin_reports_styles(): void
{
?>
<style>
/* =========================================================
   V108 CSS chunk 14/22
   Bahagian: Admin Reports
   ========================================================= */
.trainer-date-summary-meta {
  display: block;
  margin-top: 8px;
  color: var(--muted);
  font-weight: 800;
  font-size: .9rem;
}
.modal-actions-top {
  justify-content: flex-end;
  margin-bottom: 14px;
}
.compact-modal-table {
  margin-top: 0;
}
body.dark .trainer-date-summary-btn {
  background: rgba(20, 61, 42, .95);
  border-color: rgba(103, 232, 166, .22);
}
body.dark .trainer-date-summary-name {
  color: var(--text);
}
body.dark .trainer-date-summary-meta {
  color: var(--muted);
}

/* =========================================================
   V53 website-only layout patch
   ========================================================= */
.v53-hidden-native-select {
  position: absolute !important;
  opacity: 0 !important;
  pointer-events: none !important;
  height: 1px !important;
  width: 1px !important;
}
.v53-date-trigger {
  width: 100%;
  min-height: 58px;
  border: 1px solid var(--line);
  border-radius: 18px;
  background: var(--soft);
  display: flex;
  align-items: center;
  gap: 14px;
  padding: 0 18px;
  font: inherit;
  color: var(--text);
  cursor: pointer;
  text-align: left;
}
.v53-date-trigger strong { font-weight: 800; }
.v53-calendar {
  max-width: 520px;
  margin: 0 auto;
  background: var(--card);
  border-radius: 28px;
  overflow: hidden;
}
.v53-calendar-top {
  padding: 18px 22px;
  border-bottom: 1px solid var(--line);
}
.v53-calendar-top strong {
  display: block;
  font-size: clamp(30px, 5vw, 54px);
  line-height: 1.05;
  margin-top: 10px;
  font-weight: 700;
}
.v53-calendar-bar {
  display: flex;
  align-items: center;
  justify-content: space-between;
  padding: 18px 22px;
}
.calendar-nav-btn {
  width: 42px;
  height: 42px;
  border: 0;
  border-radius: 50%;
  background: var(--soft);
  color: var(--primary);
  font-size: 28px;
  cursor: pointer;
}
.calendar-weekdays,
.calendar-grid {
  display: grid;
  grid-template-columns: repeat(7, 1fr);
  gap: 8px;
  padding: 0 22px;
}
.calendar-weekdays span {
  text-align: center;
  font-weight: 800;
  color: var(--muted);
}
.calendar-grid { padding-top: 14px; }
.calendar-day,
.calendar-empty {
  min-height: 48px;
  border-radius: 16px;
  display: grid;
  place-items: center;
}
.calendar-day {
  border: 1px solid transparent;
  background: transparent;
  color: var(--text);
  font-weight: 800;
  cursor: pointer;
}
.calendar-day:hover:not(:disabled) { background: var(--soft); border-color: var(--line); }
.calendar-day.active { background: var(--primary); color: #fff; }
.calendar-day:disabled { opacity: .25; cursor: not-allowed; }
.calendar-actions {
  display: flex;
  justify-content: flex-end;
  padding: 20px 22px 24px;
}
.password-eye-wrap {
  display: flex;
  align-items: center;
  gap: 8px;
  width: 100%;
}
.password-eye-wrap input { flex: 1; }
.password-eye-btn {
  width: 52px;
  min-width: 52px;
  height: 52px;
  border-radius: 18px;
  border: 1px solid var(--line);
  background: var(--soft);
  cursor: pointer;
  font-size: 20px;
}
.booking-card-list-v53 {
  display: grid;
  gap: 18px;
}
.booking-card-v53 {
  border: 1px solid var(--line);
  border-radius: 26px;
  background: var(--card);
  box-shadow: var(--shadow);
  padding: 22px;
  display: grid;
  grid-template-columns: minmax(280px, 1.3fr) minmax(190px, .7fr) minmax(180px, .55fr) auto;
  gap: 18px;
  align-items: start;
}
.booking-card-main-v53 h3 { margin: 4px 0 8px; }
.booking-card-side-v53 {
  display: grid;
  gap: 10px;
}
.booking-card-side-v53 div {
  display: flex;
  justify-content: space-between;
  gap: 12px;
  padding-bottom: 8px;
  border-bottom: 1px dashed var(--line);
}
.booking-card-side-v53 span { color: var(--muted); }
.booking-card-status-v53,
.booking-card-actions-v53 {
  display: flex;
  flex-direction: column;
  gap: 10px;
  align-items: flex-start;
}
.booking-card-actions-v53 .btn { width: 100%; justify-content: center; }
.v53-contact-layout {
  display: grid;
  grid-template-columns: minmax(260px, .95fr) minmax(320px, 1.05fr);
  gap: 24px;
}
.v53-contact-card-list {
  display: grid;
  gap: 16px;
}
.v53-contact-info-card {
  display: grid;
  grid-template-columns: 66px 1fr;
  gap: 18px;
  align-items: center;
  background: var(--soft);
  border: 1px solid var(--line);
  border-radius: 26px;
  padding: 20px 24px;
}
.v53-contact-icon {
  width: 56px;
  height: 56px;
  border-radius: 50%;
  display: grid;
  place-items: center;
  background: var(--card);
  color: var(--primary);
  font-size: 24px;
}
.v53-contact-info-card h3 { margin: 0 0 6px; }
.v53-contact-info-card p { margin: 0; color: var(--text); }
.v53-contact-settings-fields {
  display: contents;
}
.trainer-card-v53 .meta-list li:nth-child(5) strong,
.trainer-card-v53 .meta-list li:nth-child(6) strong { color: var(--primary); }
.v53-tee-search {
  min-width: 320px;
}
@media (max-width: 980px) {
  .booking-card-v53,
  .v53-contact-layout { grid-template-columns: 1fr; }
  .booking-card-status-v53,
  .booking-card-actions-v53 { flex-direction: row; flex-wrap: wrap; }
  .booking-card-actions-v53 .btn { width: auto; }
}
@media (max-width: 640px) {
  .v53-calendar-top strong { font-size: 34px; }
  .calendar-day, .calendar-empty { min-height: 40px; }
  .v53-contact-info-card { grid-template-columns: 48px 1fr; padding: 16px; }
  .v53-contact-icon { width: 44px; height: 44px; }
}

/* V54 receipt viewer and booking date/time clarity */
.booking-card-v54.has-receipt {
  border-color: rgba(0, 106, 74, 0.28);
}
.booking-card-side-v54 div span {
  min-width: 104px;
}

</style>
<?php
}

function upsi_section_admin_reports_scripts(): void
{
?>
<script>
/* =========================================================
   V108 JavaScript chunk 14/22
   Bahagian: Admin Reports
   ========================================================= */
(function v46PaymentFeedbackSupabaseFix() {
  function v46PaymentStatusForDb(booking = {}) {
    const method = String(booking.paymentMethod || booking.payment_method || 'QR Payment').toLowerCase();
    const local = String(booking.paymentStatus || booking.payment_status || '').toLowerCase();
    if (local.includes('verified')) return 'verified';
    if (local.includes('reject')) return 'rejected';
    if (method.includes('counter')) return 'not_paid';
    if (local.includes('pending')) return 'pending';
    return method.includes('qr') ? 'pending' : 'not_paid';
  }

  async function v46ProfileIdForBooking(booking = {}) {
    if (booking.userId && isUuid(booking.userId)) return booking.userId;
    if (state.session?.id && isUuid(state.session.id)) return state.session.id;
    try {
      const profileId = await getCurrentProfileId();
      if (profileId) return profileId;
    } catch (error) {
      console.warn('V46 profile id lookup skipped:', error?.message || error);
    }
    return null;
  }

  async function v46FindExistingPaymentId(bookingId) {
    if (!bookingId || !isUuid(bookingId)) return null;
    const { data, error } = await supabaseClient
      .from(DB_TABLES.payments)
      .select('id')
      .eq('booking_id', bookingId)
      .maybeSingle();
    if (error) {
      console.warn('V46 payment lookup skipped:', error?.message || error);
      return null;
    }
    return data?.id || null;
  }

  async function v46SyncPaymentForBooking(booking = {}) {
    if (!SUPABASE_MODE || !supabaseClient || !isUuid(booking.id)) return;
    const userId = await v46ProfileIdForBooking(booking);
    if (!userId) return;

    const paymentStatus = v46PaymentStatusForDb(booking);
    const payload = {
      booking_id: booking.id,
      user_id: userId,
      amount: Number(booking.amount || booking.total_amount || 0),
      payment_status: paymentStatus,
      payment_note: booking.receiptNote || booking.paymentNote || null,
      receipt_image_url: booking.receiptImage || booking.receiptImageUrl || null,
      rejected_reason: paymentStatus === 'rejected' ? (booking.cancelReason || PAYMENT_REJECT_CANCEL_REASON) : null,
    };

    const existingPaymentId = await v46FindExistingPaymentId(booking.id);
    let result;
    if (existingPaymentId) {
      result = await supabaseClient.from(DB_TABLES.payments).update(payload).eq('id', existingPaymentId).select().maybeSingle();
    } else {
      result = await supabaseClient.from(DB_TABLES.payments).insert(payload).select().maybeSingle();
    }

    if (result.error) {
      console.error('V46 payment sync error:', result.error);
      toast('Payment record failed to sync. Check Supabase payments policy or Console.');
    }
  }

  const v46BaseSyncBookingsToSupabase = syncBookingsToSupabase;
  syncBookingsToSupabase = async function syncBookingsToSupabaseV46(bookings = []) {
    await v46BaseSyncBookingsToSupabase(bookings);
    if (!SUPABASE_MODE || !supabaseClient) return;

    // Base sync can replace local temporary booking IDs with Supabase UUIDs.
    setLocalData('bookings', bookings);

    for (const booking of bookings) {
      if (!booking || !isUuid(booking.id)) continue;
      const paymentStatus = v46PaymentStatusForDb(booking);
      const bookingPaymentMethod = booking.paymentMethod || booking.payment_method || 'QR Payment';

      // Keep booking table payment columns aligned with payments table.
      const bookingPatch = {
        payment_status: paymentStatus,
        payment_method: bookingPaymentMethod,
        total_amount: Number(booking.amount || 0),
      };
      if (booking.receiptNote || booking.paymentReference) bookingPatch.payment_reference = booking.receiptNote || booking.paymentReference || null;
      const { error: bookingPaymentError } = await supabaseClient
        .from(DB_TABLES.bookings)
        .update(bookingPatch)
        .eq('id', booking.id);
      if (bookingPaymentError) {
        console.warn('V46 booking payment-field sync skipped:', bookingPaymentError?.message || bookingPaymentError);
      }

      await v46SyncPaymentForBooking(booking);
    }
  };

  const v46BaseUpdateBooking = updateBooking;
  updateBooking = function updateBookingV46(id, patch, rerender = false) {
    v46BaseUpdateBooking(id, patch, rerender);
    const updatedBooking = read('bookings').find((booking) => String(booking.id) === String(id));
    if (updatedBooking && SUPABASE_MODE && supabaseClient) {
      v46SyncPaymentForBooking(updatedBooking).catch((error) => {
        console.error('V46 payment update error:', error);
      });
    }
  };

  const v46BaseBookingToLocal = bookingToLocal;
  bookingToLocal = function bookingToLocalV46(row = {}) {
    const local = v46BaseBookingToLocal(row);
    const joinedPayment = Array.isArray(row.payments) ? row.payments[0] : row.payments;
    if (joinedPayment) {
      local.amount = Number(row.total_amount ?? joinedPayment.amount ?? local.amount ?? 0);
      local.receiptNote = joinedPayment.payment_note || local.receiptNote || '';
      local.receiptImage = joinedPayment.receipt_image_url || local.receiptImage || '';
      local.paymentStatus = dbPaymentStatusToLocal(joinedPayment.payment_status || row.payment_status || 'not_paid', local.bookingType);
    }
    if (row.payment_method) local.paymentMethod = row.payment_method;
    if (local.paymentMethod === 'Pay at Counter' && local.paymentStatus === 'Not Paid') local.paymentStatus = 'Pay at Counter';
    return local;
  };

  reviewToLocal = function reviewToLocalV46(row = {}) {
    return {
      id: row.id,
      userId: row.user_id || '',
      userName: row.profiles?.full_name || row.full_name || 'User',
      email: row.profiles?.email || row.email || '',
      category: row.category || 'General Feedback',
      rating: Number(row.rating || 0),
      message: row.comment || row.message || '',
      createdAt: row.created_at || new Date().toISOString(),
    };
  };

  reviewCard = function reviewCardV46(review = {}) {
    return `
      <article class="card feedback-category-card">
        <div class="card-top">
          <div>
            <p class="eyebrow">${escapeHtml(new Date(review.createdAt || Date.now()).toLocaleDateString())}</p>
            <h3>${escapeHtml(review.userName || 'User')}</h3>
            <p class="muted">${escapeHtml(review.email || 'No email recorded')}</p>
          </div>
          <span class="status-pill pending">${escapeHtml(review.category || 'General Feedback')}</span>
        </div>
        <p>${escapeHtml(review.message || '')}</p>
      </article>
    `;
  };

  syncReviewsToSupabase = async function syncReviewsToSupabaseV46(reviews = []) {
    if (!SUPABASE_MODE || !supabaseClient) return;
    const fallbackUserId = await getCurrentProfileId();
    for (const review of reviews) {
      const userId = isUuid(review.userId) ? review.userId : fallbackUserId;
      if (!userId) continue;
      const basePayload = {
        user_id: userId,
        category: review.category || 'General Feedback',
        comment: review.message || '',
        status: 'active',
      };
      if (isUuid(review.id)) basePayload.id = review.id;

      // Try rating 0 first for app compatibility; fallback to 5 if old DB has rating 1-5 check constraint.
      let payload = { ...basePayload, rating: Number(review.rating || 0) };
      let { data, error } = await supabaseClient.from(DB_TABLES.reviews).upsert(payload, { onConflict: payload.id ? 'id' : 'id' }).select('*, profiles:user_id(full_name,email)').maybeSingle();
      if (error && String(error.message || '').toLowerCase().includes('rating')) {
        payload = { ...basePayload, rating: 5 };
        ({ data, error } = await supabaseClient.from(DB_TABLES.reviews).upsert(payload, { onConflict: payload.id ? 'id' : 'id' }).select('*, profiles:user_id(full_name,email)').maybeSingle());
      }
      if (error) {
        console.error('V46 review sync error:', error);
        toast('Feedback failed to sync. Run V46 SQL policy fix or check Console.');
      } else if (data?.id) {
        review.id = data.id;
        review.email = data.profiles?.email || review.email || state.session?.email || '';
        review.userName = data.profiles?.full_name || review.userName || state.session?.fullName || 'User';
      }
    }
    setLocalData('reviews', reviews);
  };

  userFeedback = function userFeedbackV46() {
    setTitle('Contact & Feedback', 'User / Golfer');
    const myReviews = read('reviews').filter((r) => r.userId === state.session.id || String(r.email || '').toLowerCase() === String(state.session.email || '').toLowerCase());
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
      <div class="toolbar"><div><p class="eyebrow">My Reviews</p><h2>Feedback History</h2><p class="muted">Your submitted feedback is shown in this section.</p></div></div>
      <div class="card-grid">${myReviews.map(reviewCard).join('') || empty('No feedback submitted yet.')}</div>
    `;
    document.getElementById('reviewForm').addEventListener('submit', async (event) => {
      event.preventDefault();
      const form = new FormData(event.currentTarget);
      const message = String(form.get('message') || '').trim();
      if (!message) return toast('Please write your feedback message.');
      const review = {
        id: makeId('R'),
        userId: state.session.id,
        userName: state.session.fullName,
        email: state.session.email,
        category: form.get('category') || 'General Feedback',
        rating: 0,
        message,
        createdAt: new Date().toISOString(),
      };
      const reviews = read('reviews');
      reviews.unshift(review);
      setLocalData('reviews', reviews);
      await syncReviewsToSupabase([review]);
      await loadSupabaseDataToLocal({ requireAuth: true });
      userFeedback();
      toast('Feedback submitted to the administrator.');
    });
  };
})();

/* =========================================================
   V47 PATCH - remove feedback rating usage, WhatsApp contact,
   and replace website/login logo with uploaded golf logo asset.
   ========================================================= */
(function v47RatingWhatsAppLogoPatch() {
  function v47DigitsOnly(value = '') {
    return String(value || '').replace(/[^0-9]/g, '');
  }

  function v47WhatsappNumber(phone = '') {
    let digits = v47DigitsOnly(phone);
    if (!digits) return '';
    // Malaysia local mobile/landline format: 01x / 03 / 05 -> 60xx
    if (digits.startsWith('0')) digits = `60${digits.slice(1)}`;
    // If user entered 10/11 digits without country code and no leading 0, keep as-is.
    return digits;
  }

  function v47WhatsappUrl(phone = '', text = '') {
    const number = v47WhatsappNumber(phone);
    if (!number) return '';
    const encodedText = encodeURIComponent(text || 'Hello, I am contacting you from UPSI Golf Booking System.');
    return `https://wa.me/${number}?text=${encodedText}`;
  }

  function v47WhatsappButton(phone = '', label = 'WhatsApp', text = '') {
    const url = v47WhatsappUrl(phone, text);
    if (!url) return `<button class="btn btn-soft" type="button" disabled>No WhatsApp</button>`;
    return `<a class="btn btn-soft whatsapp-btn" href="${escapeHtml(url)}" target="_blank" rel="noopener noreferrer">${escapeHtml(label)}</a>`;
  }

  // Feedback/review: no star rating in website and no rating field sent to Supabase.
  reviewToLocal = function reviewToLocalV47(row = {}) {
    return {
      id: row.id,
      userId: row.user_id || '',
      userName: row.profiles?.full_name || row.full_name || 'User',
      email: row.profiles?.email || row.email || '',
      category: row.category || 'General Feedback',
      message: row.comment || row.message || '',
      createdAt: row.created_at || new Date().toISOString(),
    };
  };

  reviewCard = function reviewCardV47(review = {}) {
    return `
      <article class="card feedback-category-card">
        <div class="card-top">
          <div>
            <p class="eyebrow">${escapeHtml(new Date(review.createdAt || Date.now()).toLocaleDateString())}</p>
            <h3>${escapeHtml(review.userName || 'User')}</h3>
            <p class="muted">${escapeHtml(review.email || 'No email recorded')}</p>
          </div>
          <span class="status-pill pending">${escapeHtml(review.category || 'General Feedback')}</span>
        </div>
        <p>${escapeHtml(review.message || '')}</p>
      </article>
    `;
  };

  syncReviewsToSupabase = async function syncReviewsToSupabaseV47(reviews = []) {
    if (!SUPABASE_MODE || !supabaseClient) return;
    const fallbackUserId = await getCurrentProfileId();
    for (const review of reviews) {
      const userId = isUuid(review.userId) ? review.userId : fallbackUserId;
      if (!userId) continue;
      const payload = {
        user_id: userId,
        category: review.category || 'General Feedback',
        comment: review.message || '',
        status: 'active',
      };

      let result;
      if (isUuid(review.id)) {
        result = await supabaseClient
          .from(DB_TABLES.reviews)
          .update(payload)
          .eq('id', review.id)
          .select('*, profiles:user_id(full_name,email)')
          .maybeSingle();
      } else {
        result = await supabaseClient
          .from(DB_TABLES.reviews)
          .insert(payload)
          .select('*, profiles:user_id(full_name,email)')
          .maybeSingle();
      }

      if (result.error) {
        console.error('V47 review sync error:', result.error);
        toast('Feedback failed to sync. Check reviews RLS policy or run the V47 SQL if rating column changed.');
      } else if (result.data?.id) {
        review.id = result.data.id;
        review.email = result.data.profiles?.email || review.email || state.session?.email || '';
        review.userName = result.data.profiles?.full_name || review.userName || state.session?.fullName || 'User';
      }
    }
    setLocalData('reviews', reviews);
  };

  userFeedback = function userFeedbackV47() {
    setTitle('Contact & Feedback', 'User / Golfer');
    const myReviews = read('reviews').filter((r) => r.userId === state.session.id || String(r.email || '').toLowerCase() === String(state.session.email || '').toLowerCase());
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
      <div class="toolbar"><div><p class="eyebrow">My Reviews</p><h2>Feedback History</h2><p class="muted">Your submitted feedback is shown in this section.</p></div></div>
      <div class="card-grid">${myReviews.map(reviewCard).join('') || empty('No feedback submitted yet.')}</div>
    `;
    document.getElementById('reviewForm').addEventListener('submit', async (event) => {
      event.preventDefault();
      const form = new FormData(event.currentTarget);
      const message = String(form.get('message') || '').trim();
      if (!message) return toast('Please write your feedback message.');
      const review = {
        id: makeId('R'),
        userId: state.session.id,
        userName: state.session.fullName,
        email: state.session.email,
        category: form.get('category') || 'General Feedback',
        message,
        createdAt: new Date().toISOString(),
      };
      const reviews = read('reviews');
      reviews.unshift(review);
      setLocalData('reviews', reviews);
      await syncReviewsToSupabase([review]);
      await loadSupabaseDataToLocal({ requireAuth: true });
      userFeedback();
      toast('Feedback submitted to the administrator.');
    });
  };

  // Trainer cards: show contact trainer / WhatsApp button.
  trainerCard = function trainerCardV47(trainer = {}) {
    const rate = trainerRate(trainer);
    return `
      <article class="card trainer-card-clean">
        <div class="card-top"><div><p class="eyebrow">Pelatih</p><h3>${escapeHtml(trainer.name || 'Trainer')}</h3></div><div class="card-icon">🏌️</div></div>
        <ul class="meta-list">
          <li><span>No. Phone</span><strong>${escapeHtml(trainer.phone || '-')}</strong></li>
          <li><span>Email</span><strong>${escapeHtml(trainer.email || '-')}</strong></li>
          <li><span>Alamat</span><strong>${escapeHtml(trainer.address || '-')}</strong></li>
          <li><span>Specialist</span><strong>${escapeHtml(trainer.description || 'Golf coaching and guided practice')}</strong></li>
          <li><span>Fee / Hour</span><strong>${rate ? money(rate) : 'Free / Not set'}</strong></li>
          <li><span>Booking Limit</span><strong>${trainerMinHours(trainer)} to ${trainerMaxHours(trainer)} hour(s)</strong></li>
          <li><span>Status</span><strong>${escapeHtml(trainer.status || 'Available')}</strong></li>
        </ul>
        <div class="trainer-availability-row">${availabilityButtonMarkup('trainer', trainer.id, 'View Available Time')}</div>
        <div class="card-actions contact-action-stack">
          ${v47WhatsappButton(trainer.phone, 'Contact Trainer', `Hello ${trainer.name || 'Trainer'}, I want to ask about golf training at UPSI Driving Range.`)}
          <button class="btn btn-primary" data-book-trainer="${escapeHtml(trainer.id || '')}">Book Trainer</button>
        </div>
      </article>
    `;
  };

  // Admin trainer page: show WhatsApp contact beside edit/delete.
  adminTrainers = function adminTrainersV47() {
    setTitle('Trainers', 'Administrator Panel');
    const trainers = read('trainers');
    content().innerHTML = `
      <div class="toolbar">
        <div><p class="eyebrow">Trainer Management</p><h2>Manage trainer contact details</h2></div>
        <button class="btn btn-primary" data-add-trainer>Add Trainer</button>
      </div>
      <div class="trainer-reference-card card">
        <p class="eyebrow">Trainer Details</p>
        <h2>Pelatih</h2>
        <p>${trainers.map((t) => escapeHtml(t.name || 'Trainer')).join('<br>') || 'No trainer record.'}</p>
      </div>
      <div style="height:18px"></div>
      <div class="card-grid">
        ${trainers.map((trainer) => `
          <article class="card trainer-card-clean">
            <div class="card-top"><div><p class="eyebrow">Pelatih</p><h3>${escapeHtml(trainer.name || 'Trainer')}</h3></div>${statusPill(trainer.status || 'Available')}</div>
            <ul class="meta-list">
              <li><span>No. Phone</span><strong>${escapeHtml(trainer.phone || '-')}</strong></li>
              <li><span>Email</span><strong>${escapeHtml(trainer.email || '-')}</strong></li>
              <li><span>Alamat</span><strong>${escapeHtml(trainer.address || '-')}</strong></li>
              <li><span>Specialist</span><strong>${escapeHtml(trainer.description || 'Golf coaching and guided practice')}</strong></li>
              <li><span>Fee / Hour</span><strong>${trainerRate(trainer) ? money(trainerRate(trainer)) : 'Free / Not set'}</strong></li>
            </ul>
            <div class="trainer-availability-row">${availabilityButtonMarkup('trainer', trainer.id, 'View Available Time')}</div>
            <div class="card-actions contact-action-stack">
              ${v47WhatsappButton(trainer.phone, 'Contact Trainer', `Hello ${trainer.name || 'Trainer'}, I am contacting you from UPSI Golf Booking System.`)}
              <button class="btn btn-soft" data-edit-trainer="${escapeHtml(trainer.id || '')}">Edit</button>
              <button class="btn btn-danger-soft" data-delete-trainer="${escapeHtml(trainer.id || '')}">Delete</button>
            </div>
          </article>
        `).join('') || empty('No trainer record.')}
      </div>
    `;
    const addBtn = content().querySelector('[data-add-trainer]');
    if (addBtn) addBtn.addEventListener('click', () => openTrainerForm());
    bindAvailabilityButtons();
    content().querySelectorAll('[data-edit-trainer]').forEach((btn) => btn.addEventListener('click', () => openTrainerForm(read('trainers').find((t) => t.id === btn.dataset.editTrainer))));
    // Delete is handled by the existing global V35 delete handler so Supabase is updated correctly.
  };

  // Manage Users: show phone and WhatsApp contact user button.
  adminUsers = function adminUsersV47() {
    setTitle('Manage Users', 'Administrator Panel');
    const users = read('users').filter((u) => u.role === 'user');
    content().dataset.sectionized = 'true';
    content().innerHTML = `
      <div class="toolbar">
        <div>
          <p class="eyebrow">Customer Information</p>
          <h2>Registered user accounts</h2>
          <p class="muted">View user profile details, contact users through WhatsApp, and activate or deactivate accounts.</p>
        </div>
        ${searchBox('Search name, email or phone')}
      </div>
      <div class="table-card"><div class="table-wrap"><table>
        <thead><tr><th>Name</th><th>Email</th><th>Phone</th><th>Status</th><th>Registered</th><th>Action</th></tr></thead>
        <tbody>
          ${filterItems(users, ['fullName', 'email', 'phone']).map((u) => `
            <tr>
              <td><strong>${escapeHtml(u.fullName || 'User')}</strong></td>
              <td>${escapeHtml(u.email || '-')}</td>
              <td>${escapeHtml(u.phone || '-')}</td>
              <td>${statusPill(u.status || 'Active')}</td>
              <td>${new Date(u.createdAt || Date.now()).toLocaleDateString()}</td>
              <td>
                <div class="row-actions compact-actions contact-action-stack">
                  <button class="btn btn-soft" data-view-user="${escapeHtml(u.id || '')}">View Details</button>
                  ${v47WhatsappButton(u.phone, 'Contact User', `Hello ${u.fullName || 'User'}, this is UPSI Golf Booking System.`)}
                  <button class="btn ${u.status === 'Active' ? 'btn-danger-soft' : 'btn-soft'}" data-toggle-user="${escapeHtml(u.id || '')}">${u.status === 'Active' ? 'Deactivate' : 'Activate'}</button>
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
})();

/* =========================================================
   V48 PATCH - feedback_review table, message column only,
   and improved full-logo fitting.
   ========================================================= */
(function v48FeedbackReviewLogoPatch() {
  // Supabase table has been renamed from public.reviews to public.feedback_review.
  DB_TABLES.reviews = 'feedback_review';

  reviewToLocal = function reviewToLocalV48(row = {}) {
    return {
      id: row.id,
      userId: row.user_id || '',
      userName: row.profiles?.full_name || row.full_name || row.name || 'User',
      email: row.profiles?.email || row.email || '',
      category: row.category || 'General Feedback',
      message: row.message || '',
      createdAt: row.submitted_at || row.created_at || new Date().toISOString(),
    };
  };

  reviewCard = function reviewCardV48(review = {}) {
    return `
      <article class="card feedback-category-card">
        <div class="card-top">
          <div>
            <p class="eyebrow">${escapeHtml(new Date(review.createdAt || Date.now()).toLocaleDateString())}</p>
            <h3>${escapeHtml(review.userName || 'User')}</h3>
            <p class="muted">${escapeHtml(review.email || 'No email recorded')}</p>
          </div>
          <span class="status-pill pending">${escapeHtml(review.category || 'General Feedback')}</span>
        </div>
        <p>${escapeHtml(review.message || '')}</p>
      </article>
    `;
  };

  syncReviewsToSupabase = async function syncReviewsToSupabaseV48(reviews = []) {
    if (!SUPABASE_MODE || !supabaseClient) return;
    const fallbackUserId = await getCurrentProfileId();

    for (const review of reviews) {
      const userId = isUuid(review.userId) ? review.userId : fallbackUserId;
      if (!userId) continue;

      const payload = {
        user_id: userId,
        category: review.category || 'General Feedback',
        name: review.userName || state.session?.fullName || 'User',
        email: review.email || state.session?.email || '',
        message: review.message || '',
        status: 'active',
        submitted_at: review.createdAt || new Date().toISOString(),
      };

      let result;
      if (isUuid(review.id)) {
        result = await supabaseClient
          .from(DB_TABLES.reviews)
          .update(payload)
          .eq('id', review.id)
          .select('*, profiles:user_id(full_name,email)')
          .maybeSingle();
      } else {
        result = await supabaseClient
          .from(DB_TABLES.reviews)
          .insert(payload)
          .select('*, profiles:user_id(full_name,email)')
          .maybeSingle();
      }

      if (result.error) {
        console.error('V48 feedback_review sync error:', result.error);
        toast('Feedback failed to sync. Run the V48 SQL to rename reviews to feedback_review and remove comment/rating.');
      } else if (result.data?.id) {
        review.id = result.data.id;
        review.email = result.data.email || result.data.profiles?.email || review.email || state.session?.email || '';
        review.userName = result.data.name || result.data.profiles?.full_name || review.userName || state.session?.fullName || 'User';
        review.message = result.data.message || review.message || '';
        review.category = result.data.category || review.category || 'General Feedback';
        review.createdAt = result.data.submitted_at || result.data.created_at || review.createdAt || new Date().toISOString();
      }
    }

    setLocalData('reviews', reviews);
  };

  userFeedback = function userFeedbackV48() {
    setTitle('Contact & Feedback', 'User / Golfer');
    const myReviews = read('reviews').filter((r) => r.userId === state.session.id || String(r.email || '').toLowerCase() === String(state.session.email || '').toLowerCase());
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
      <div class="toolbar"><div><p class="eyebrow">My Feedback</p><h2>Feedback History</h2><p class="muted">Your submitted feedback is shown in this section.</p></div></div>
      <div class="card-grid">${myReviews.map(reviewCard).join('') || empty('No feedback submitted yet.')}</div>
    `;

    document.getElementById('reviewForm').addEventListener('submit', async (event) => {
      event.preventDefault();
      const form = new FormData(event.currentTarget);
      const message = String(form.get('message') || '').trim();
      if (!message) return toast('Please write your feedback message.');

      const review = {
        id: makeId('R'),
        userId: state.session.id,
        userName: state.session.fullName,
        email: state.session.email,
        category: form.get('category') || 'General Feedback',
        message,
        createdAt: new Date().toISOString(),
      };

      const reviews = read('reviews');
      reviews.unshift(review);
      setLocalData('reviews', reviews);
      await syncReviewsToSupabase([review]);
      await loadSupabaseDataToLocal({ requireAuth: true });
      userFeedback();
      toast('Feedback submitted to the administrator.');
    });
  };
})();


/* =========================================================
   V49 PATCH - trainer booking uses date-only availability.
   Driving Range keeps tee_slots date + time + lane flow.
   Trainer uses public.trainer_available_dates and WhatsApp discussion.
   ========================================================= */
(function v49TrainerDateOnlyBookingPatch() {
  DB_TABLES.trainerAvailableDates = 'trainer_available_dates';
  const TRAINER_DATE_STORAGE = 'upsiGolfTrainerAvailableDates';
  const TRAINER_DISCUSS_PAYMENT_METHOD = 'Discuss with Trainer';
  const TRAINER_DIRECT_NOTE = 'Time, price and training slot will be arranged directly with the trainer through WhatsApp.';
  const V49_TRAINING_CLASS_TYPES = ['Beginner', 'Intermediate', 'Amateur', 'Professional'];

  function v49DigitsOnly(value = '') {
    return String(value || '').replace(/[^0-9]/g, '');
  }

  function v49WhatsappNumber(phone = '') {
    let digits = v49DigitsOnly(phone);
    if (!digits) return '';
    if (digits.startsWith('0')) digits = `60${digits.slice(1)}`;
    return digits;
  }

  function v49WhatsappUrl(phone = '', text = '') {
    const number = v49WhatsappNumber(phone);
    if (!number) return '';
    return `https://wa.me/${number}?text=${encodeURIComponent(text || 'Hello, I am contacting you from UPSI Golf Booking System.')}`;
  }

  function v49WhatsappButton(phone = '', label = 'WhatsApp', text = '') {
    const url = v49WhatsappUrl(phone, text);
    if (!url) return `<button class="btn btn-soft" type="button" disabled>No WhatsApp</button>`;
    return `<a class="btn btn-soft whatsapp-btn" href="${escapeHtml(url)}" target="_blank" rel="noopener noreferrer">${escapeHtml(label)}</a>`;
  }

  function v49Today() {
    return new Date().toISOString().slice(0, 10);
  }

  function v49DateId() {
    return makeId('TD');
  }

  function v49ReadTrainerDates() {
    try {
      return JSON.parse(localStorage.getItem(TRAINER_DATE_STORAGE) || '[]') || [];
    } catch (error) {
      return [];
    }
  }

  function v49SetTrainerDates(list = []) {
    const clean = (list || [])
      .filter((item) => item && item.trainerId && item.date)
      .map((item) => ({
        id: item.id || v49DateId(),
        trainerId: item.trainerId,
        trainerName: item.trainerName || trainerNameByIdV49(item.trainerId),
        date: item.date,
        status: item.status === 'Unavailable' || item.status === 'inactive' ? 'Unavailable' : 'Available',
        createdAt: item.createdAt || new Date().toISOString(),
      }))
      .sort((a, b) => String(a.date).localeCompare(String(b.date)) || String(a.trainerName).localeCompare(String(b.trainerName)));
    localStorage.setItem(TRAINER_DATE_STORAGE, JSON.stringify(clean));
    return clean;
  }

  function trainerNameByIdV49(trainerId = '') {
    return (read('trainers').find((trainer) => String(trainer.id) === String(trainerId)) || {}).name || 'Trainer';
  }

  function v49TrainerDateToLocal(row = {}) {
    return {
      id: row.id || v49DateId(),
      trainerId: row.trainer_id || '',
      trainerName: row.trainers?.full_name || trainerNameByIdV49(row.trainer_id),
      date: row.available_date || row.date || '',
      status: String(row.status || 'active').toLowerCase() === 'active' || String(row.status || '').toLowerCase() === 'available' ? 'Available' : 'Unavailable',
      createdAt: row.created_at || new Date().toISOString(),
    };
  }

  function v49LocalTrainerDateToDb(item = {}) {
    return {
      trainer_id: item.trainerId,
      available_date: item.date,
      status: item.status === 'Available' ? 'active' : 'inactive',
    };
  }

  async function v49FetchTrainerDatesFromSupabase() {
    if (!SUPABASE_MODE || !supabaseClient) return v49ReadTrainerDates();
    const { data, error } = await supabaseClient
      .from(DB_TABLES.trainerAvailableDates)
      .select('*, trainers:trainer_id(full_name)')
      .order('available_date', { ascending: true });
    if (error) {
      console.warn('V49 trainer available dates fetch skipped. Run the V49 SQL first.', error.message || error);
      return v49ReadTrainerDates();
    }
    return v49SetTrainerDates((data || []).map(v49TrainerDateToLocal));
  }

  async function v49SaveTrainerDate(item = {}) {
    const localItem = {
      id: item.id || v49DateId(),
      trainerId: item.trainerId,
      trainerName: trainerNameByIdV49(item.trainerId),
      date: item.date,
      status: item.status || 'Available',
      createdAt: item.createdAt || new Date().toISOString(),
    };

    if (SUPABASE_MODE && supabaseClient && isUuid(localItem.trainerId)) {
      let result;
      const payload = v49LocalTrainerDateToDb(localItem);
      if (isUuid(localItem.id)) {
        result = await supabaseClient
          .from(DB_TABLES.trainerAvailableDates)
          .update(payload)
          .eq('id', localItem.id)
          .select('*, trainers:trainer_id(full_name)')
          .maybeSingle();
      } else {
        result = await supabaseClient
          .from(DB_TABLES.trainerAvailableDates)
          .upsert(payload, { onConflict: 'trainer_id,available_date' })
          .select('*, trainers:trainer_id(full_name)')
          .maybeSingle();
      }
      if (result.error) {
        console.error('V49 trainer date save error:', result.error);
        toast('Trainer date failed to save. Run the V49 SQL migration first.');
        return false;
      }
      await v49FetchTrainerDatesFromSupabase();
      return true;
    }

    const list = v49ReadTrainerDates();
    const duplicateIndex = list.findIndex((date) => date.trainerId === localItem.trainerId && date.date === localItem.date);
    if (duplicateIndex >= 0) list[duplicateIndex] = { ...list[duplicateIndex], ...localItem };
    else list.push(localItem);
    v49SetTrainerDates(list);
    return true;
  }

  async function v49DeleteTrainerDate(id = '') {
    if (!id) return false;
    if (SUPABASE_MODE && supabaseClient && isUuid(id)) {
      const { error } = await supabaseClient.from(DB_TABLES.trainerAvailableDates).delete().eq('id', id);
      if (error) {
        console.error('V49 trainer date delete error:', error);
        toast('Trainer date failed to delete. Check Supabase policy.');
        return false;
      }
      await v49FetchTrainerDatesFromSupabase();
      return true;
    }
    v49SetTrainerDates(v49ReadTrainerDates().filter((item) => String(item.id) !== String(id)));
    return true;
  }

  function v49AvailableTrainerDates(trainerId = '') {
    const today = v49Today();
    return [...new Set(v49ReadTrainerDates()
      .filter((item) => item.status === 'Available')
      .filter((item) => !trainerId || String(item.trainerId) === String(trainerId))
      .filter((item) => item.date >= today)
      .map((item) => item.date))]
      .sort();
  }

  function v49TrainerAvailabilitySummary(trainerId = '') {
    const dates = v49AvailableTrainerDates(trainerId).slice(0, 4);
    if (!dates.length) return 'No available date set yet.';
    return dates.map(formatDateDisplay).join(' | ');
  }

  function v49TrainerAvailabilityButton(trainerId = '', label = 'View Available Date') {
    const count = v49AvailableTrainerDates(trainerId).length;
    return `<button class="btn btn-soft availability-btn" type="button" data-view-trainer-dates="${escapeHtml(trainerId)}" ${count ? '' : 'disabled'}>${escapeHtml(count ? `${label} (${count})` : 'No available date')}</button>`;
  }

  function v49OpenTrainerDatesModal(trainerId = '') {
    const trainer = read('trainers').find((item) => String(item.id) === String(trainerId));
    const dates = v49AvailableTrainerDates(trainerId);
    openModal(`
      <div class="modal-head">
        <div>
          <p class="eyebrow">Trainer Availability</p>
          <h2>${escapeHtml(trainer?.name || 'Trainer')}</h2>
          <p class="muted">Trainer booking uses available date only. Session time is discussed directly through WhatsApp.</p>
        </div>
        <button class="close-btn" data-close-modal>&times;</button>
      </div>
      <div class="availability-list trainer-date-only-list">
        ${dates.length ? dates.map((date) => `<div class="availability-day"><strong>${escapeHtml(formatDateDisplay(date))}</strong><div><span>Date only</span><span>Time via WhatsApp</span></div></div>`).join('') : '<p class="muted">No available date set yet.</p>'}
      </div>
    `);
  }

  function v49BindTrainerDateButtons(root = document) {
    root.querySelectorAll('[data-view-trainer-dates]').forEach((btn) => {
      btn.addEventListener('click', () => v49OpenTrainerDatesModal(btn.dataset.viewTrainerDates || ''));
    });
  }

  const v49BaseLoadSupabaseDataToLocal = loadSupabaseDataToLocal;
  loadSupabaseDataToLocal = async function loadSupabaseDataToLocalV49(options = {}) {
    const result = await v49BaseLoadSupabaseDataToLocal(options);
    await v49FetchTrainerDatesFromSupabase();
    return result;
  };

  // Make trainer availability independent from tee_slots.
  const v49PreviousAvailableDatesFor = availableDatesFor;
  availableDatesFor = function availableDatesForV49(type, targetId = '') {
    if (String(type || '').toLowerCase() === 'trainer') return v49AvailableTrainerDates(targetId);
    return v49PreviousAvailableDatesFor(type, targetId);
  };

  const v49PreviousTimeOptionsFor = timeOptionsFor;
  timeOptionsFor = function timeOptionsForV49(type, targetId = '', date = '', currentTime = '') {
    if (String(type || '').toLowerCase() === 'trainer') return [];
    return v49PreviousTimeOptionsFor(type, targetId, date, currentTime);
  };

  const v49PreviousAvailabilitySummary = availabilitySummary;
  availabilitySummary = function availabilitySummaryV49(type, targetId = '') {
    if (String(type || '').toLowerCase() === 'trainer') return v49TrainerAvailabilitySummary(targetId);
    return v49PreviousAvailabilitySummary(type, targetId);
  };

  const v49PreviousAvailabilityCount = availabilityCount;
  availabilityCount = function availabilityCountV49(type, targetId = '') {
    if (String(type || '').toLowerCase() === 'trainer') return v49AvailableTrainerDates(targetId).length;
    return v49PreviousAvailabilityCount(type, targetId);
  };

  const v49PreviousAvailabilityButtonMarkup = availabilityButtonMarkup;
  availabilityButtonMarkup = function availabilityButtonMarkupV49(type, targetId = '', label = 'View Available Time') {
    if (String(type || '').toLowerCase() === 'trainer') return v49TrainerAvailabilityButton(targetId, 'View Available Date');
    return v49PreviousAvailabilityButtonMarkup(type, targetId, label);
  };

  const v49PreviousOpenAvailabilityModal = openAvailabilityModal;
  openAvailabilityModal = function openAvailabilityModalV49(type, targetId = '', title = 'Available Date & Time') {
    if (String(type || '').toLowerCase() === 'trainer') return v49OpenTrainerDatesModal(targetId);
    return v49PreviousOpenAvailabilityModal(type, targetId, title);
  };

  const v49PreviousBindAvailabilityButtons = bindAvailabilityButtons;
  bindAvailabilityButtons = function bindAvailabilityButtonsV49() {
    v49PreviousBindAvailabilityButtons();
    v49BindTrainerDateButtons(content());
  };

  function v49TrainerDetailsCard(trainer = {}, includeAdminActions = false) {
    const dates = v49AvailableTrainerDates(trainer.id);
    return `
      <article class="card trainer-card-clean trainer-date-booking-card">
        <div class="card-top"><div><p class="eyebrow">Trainer</p><h3>${escapeHtml(trainer.name || 'Trainer')}</h3></div><div class="card-icon">🏌️</div></div>
        <ul class="meta-list">
          <li><span>No. Phone</span><strong>${escapeHtml(trainer.phone || '-')}</strong></li>
          <li><span>Email</span><strong>${escapeHtml(trainer.email || 'Email not provided')}</strong></li>
          <li><span>Alamat</span><strong>${escapeHtml(trainer.address || '-')}</strong></li>
          <li><span>Specialist</span><strong>${escapeHtml(trainer.description || 'Golf coaching and guided practice')}</strong></li>
          <li><span>Training price</span><strong>Discuss directly with trainer</strong></li>
          <li><span>Available date</span><strong>${escapeHtml(dates.length ? dates.map(formatDateDisplay).join(' | ') : 'No date set')}</strong></li>
          <li><span>Status</span><strong>${escapeHtml(trainer.status || 'Available')}</strong></li>
        </ul>
        <div class="trainer-info-note"><span class="info-icon">ℹ️</span><p>${escapeHtml(TRAINER_DIRECT_NOTE)}</p></div>
        <div class="trainer-availability-row">${v49TrainerAvailabilityButton(trainer.id, 'View Available Date')}</div>
        <div class="card-actions contact-action-stack">
          ${v49WhatsappButton(trainer.phone, 'WhatsApp Trainer', `Hello ${trainer.name || 'Trainer'}, I want to discuss golf training time, price and slot at UPSI Driving Range.`)}
          ${includeAdminActions ? `
            <button class="btn btn-soft" data-edit-trainer="${escapeHtml(trainer.id || '')}">Edit</button>
            <button class="btn btn-danger-soft" data-delete-trainer="${escapeHtml(trainer.id || '')}">Delete</button>
          ` : `<button class="btn btn-primary" data-book-trainer="${escapeHtml(trainer.id || '')}">Book Trainer</button>`}
        </div>
      </article>
    `;
  }

  trainerCard = function trainerCardV49(trainer = {}) {
    return v49TrainerDetailsCard(trainer, false);
  };

  function v49OpenTrainerDateForm(existing = null) {
    const trainers = read('trainers').filter((trainer) => trainer.status !== 'Unavailable');
    if (!trainers.length) return toast('Please add an available trainer first.');
    const selectedTrainerId = existing?.trainerId || trainers[0]?.id || '';
    openModal(`
      <div class="modal-head"><div><p class="eyebrow">Trainer Date</p><h2>${existing ? 'Edit Trainer Available Date' : 'Add Trainer Available Date'}</h2><p class="muted">This date will be shown in both website and app once the app reads trainer_available_dates.</p></div><button class="close-btn" data-close-modal>&times;</button></div>
      <form id="trainerDateFormV49" class="form-grid">
        <label class="wide">Trainer
          <select name="trainerId" required>${trainers.map((trainer) => `<option value="${escapeHtml(trainer.id)}" ${selectedTrainerId === trainer.id ? 'selected' : ''}>${escapeHtml(trainer.name)}</option>`).join('')}</select>
        </label>
        <label>Available Date<input type="date" name="date" value="${escapeHtml(existing?.date || v49Today())}" required></label>
        <label>Status<select name="status"><option ${existing?.status !== 'Unavailable' ? 'selected' : ''}>Available</option><option ${existing?.status === 'Unavailable' ? 'selected' : ''}>Unavailable</option></select></label>
        <button class="btn btn-primary wide" type="submit">Save Trainer Date</button>
      </form>
    `);
    const form = document.getElementById('trainerDateFormV49');
    form.addEventListener('submit', async (event) => {
      event.preventDefault();
      const formData = new FormData(form);
      const saved = await v49SaveTrainerDate({
        id: existing?.id || '',
        trainerId: formData.get('trainerId'),
        date: formData.get('date'),
        status: formData.get('status') || 'Available',
      });
      if (!saved) return;
      closeModal();
      adminTrainers();
      toast('Trainer available date saved.');
    });
  }

  adminTrainers = function adminTrainersV49() {
    setTitle('Trainers', 'Administrator Panel');
    const trainers = read('trainers');
    const trainerDates = v49ReadTrainerDates();
    content().innerHTML = `
      <div class="toolbar">
        <div><p class="eyebrow">Trainer Management</p><h2>Manage trainer contact details</h2><p class="muted">Trainer booking now uses date only. Time, price and slot are discussed through WhatsApp.</p></div>
        <button class="btn btn-primary" data-add-trainer>Add Trainer</button>
      </div>

      <div class="toolbar trainer-date-toolbar">
        <div><p class="eyebrow">Trainer Available Dates</p><h2>Date-only trainer booking</h2><p class="muted">Add or delete trainer dates here. These dates are stored in <strong>trainer_available_dates</strong>.</p></div>
        <button class="btn btn-primary" data-add-trainer-date>Add Trainer Date</button>
      </div>
      <div class="table-card"><div class="table-wrap"><table>
        <thead><tr><th>Date</th><th>Trainer</th><th>Status</th><th>Action</th></tr></thead>
        <tbody>
          ${trainerDates.length ? trainerDates.map((item) => `
            <tr>
              <td><strong>${escapeHtml(formatDateDisplay(item.date))}</strong><br><span class="muted">${escapeHtml(item.date)}</span></td>
              <td>${escapeHtml(item.trainerName || trainerNameByIdV49(item.trainerId))}</td>
              <td>${statusPill(item.status || 'Available')}</td>
              <td><div class="row-actions compact-actions"><button class="btn btn-soft" data-edit-trainer-date="${escapeHtml(item.id)}">Edit</button><button class="btn btn-danger-soft" data-delete-trainer-date="${escapeHtml(item.id)}">Delete</button></div></td>
            </tr>
          `).join('') : `<tr><td colspan="4">No trainer available date yet.</td></tr>`}
        </tbody>
      </table></div></div>

      <div style="height:18px"></div>
      <div class="card-grid">
        ${trainers.map((trainer) => v49TrainerDetailsCard(trainer, true)).join('') || empty('No trainer record.')}
      </div>
    `;
    content().querySelector('[data-add-trainer]')?.addEventListener('click', () => openTrainerForm());
    content().querySelector('[data-add-trainer-date]')?.addEventListener('click', () => v49OpenTrainerDateForm());
    content().querySelectorAll('[data-edit-trainer]').forEach((btn) => btn.addEventListener('click', () => openTrainerForm(read('trainers').find((trainer) => trainer.id === btn.dataset.editTrainer))));
    content().querySelectorAll('[data-edit-trainer-date]').forEach((btn) => btn.addEventListener('click', () => {
      const item = v49ReadTrainerDates().find((date) => String(date.id) === String(btn.dataset.editTrainerDate));
      if (item) v49OpenTrainerDateForm(item);
    }));
    content().querySelectorAll('[data-delete-trainer-date]').forEach((btn) => btn.addEventListener('click', () => {
      const item = v49ReadTrainerDates().find((date) => String(date.id) === String(btn.dataset.deleteTrainerDate));
      if (!item) return;
      confirmAction({
        title: 'Delete Trainer Date',
        message: `Delete ${formatDateDisplay(item.date)} for ${item.trainerName || trainerNameByIdV49(item.trainerId)}?`,
        confirmText: 'Delete Date',
        danger: true,
        onConfirm: async () => {
          const deleted = await v49DeleteTrainerDate(item.id);
          if (!deleted) return;
          adminTrainers();
          toast('Trainer available date deleted.');
        },
      });
    }));
    v49BindTrainerDateButtons(content());
  };

  openTrainerBookingModal = function openTrainerBookingModalV49(prefill = {}, existingBooking = null) {
    const trainers = read('trainers').filter((trainer) => trainer.status === 'Available');
    if (!trainers.length) return toast('No available trainer to book.');
    const booking = existingBooking || {};
    const selectedTrainerId = booking.trainerId || prefill.trainerId || trainers[0]?.id || '';
    const selectedTrainer = trainers.find((trainer) => trainer.id === selectedTrainerId) || trainers[0];
    const availableDates = v49AvailableTrainerDates(selectedTrainer.id);
    if (booking.date && !availableDates.includes(booking.date)) availableDates.unshift(booking.date);
    if (!availableDates.length && !existingBooking) return toast('No available trainer date yet. Please wait for admin to add trainer date.');
    const selectedDate = availableDates.includes(booking.date) ? booking.date : (availableDates[0] || '');
    const selectedClass = booking.trainingClassType || 'Beginner';

    openModal(`
      <div class="modal-head"><div><p class="eyebrow">${existingBooking ? 'Reschedule Trainer' : 'New Trainer Booking'}</p><h2>${existingBooking ? 'Update trainer session' : 'Book Trainer'}</h2><p class="muted">Choose trainer, training class type and date only. Session time is discussed directly through WhatsApp.</p></div><button class="close-btn" data-close-modal>&times;</button></div>
      <form id="trainerBookingForm" class="form-grid trainer-date-booking-form">
        <label class="wide">Trainer<select name="trainerId" required>${trainers.map((trainer) => `<option value="${escapeHtml(trainer.id)}" ${selectedTrainer.id === trainer.id ? 'selected' : ''}>${escapeHtml(trainer.name)}</option>`).join('')}</select></label>
        <div class="bucket-info wide trainer-profile-box"><span class="info-icon">🏌️</span><div><strong data-trainer-contact>${escapeHtml(selectedTrainer.name)} • ${escapeHtml(selectedTrainer.phone || '-')}</strong><small class="muted" data-trainer-extra>${escapeHtml(selectedTrainer.email || 'Email not provided')}</small><p data-trainer-specialist>${escapeHtml(selectedTrainer.description || 'Golf coaching and guided practice')}</p>${v49WhatsappButton(selectedTrainer.phone, 'Discuss Time, Price and Slot', `Hello ${selectedTrainer.name || 'Trainer'}, I want to discuss golf training time, price and slot at UPSI Driving Range.`)}</div></div>
        <label>Training Class Type<select name="trainingClassType" required>${V49_TRAINING_CLASS_TYPES.map((type) => `<option value="${escapeHtml(type)}" ${selectedClass === type ? 'selected' : ''}>${escapeHtml(type)}</option>`).join('')}</select></label>
        <label>Select Date<select name="date" required>${dateOptionMarkup(availableDates, selectedDate)}</select></label>
        <div class="bucket-info wide trainer-note-box"><span class="info-icon">ℹ️</span><div><p>${escapeHtml(TRAINER_DIRECT_NOTE)}</p><strong>Trainer payment is not collected through QR payment.</strong></div></div>
        <button class="btn btn-primary wide" type="submit">${existingBooking ? 'Save Trainer Booking' : 'Submit Trainer Booking'}</button>
      </form>
    `);

    const form = document.getElementById('trainerBookingForm');
    const refreshTrainerInfo = () => {
      const trainer = trainers.find((item) => item.id === form.trainerId.value) || selectedTrainer;
      const dates = v49AvailableTrainerDates(trainer.id);
      form.date.innerHTML = dateOptionMarkup(dates, dates[0] || '');
      form.querySelector('[data-trainer-contact]').textContent = `${trainer.name} • ${trainer.phone || '-'}`;
      form.querySelector('[data-trainer-extra]').textContent = trainer.email || 'Email not provided';
      form.querySelector('[data-trainer-specialist]').textContent = trainer.description || 'Golf coaching and guided practice';
      const oldWhatsapp = form.querySelector('.whatsapp-btn');
      if (oldWhatsapp) {
        oldWhatsapp.href = v49WhatsappUrl(trainer.phone, `Hello ${trainer.name || 'Trainer'}, I want to discuss golf training time, price and slot at UPSI Driving Range.`) || '#';
      }
    };
    form.trainerId.addEventListener('change', refreshTrainerInfo);

    form.addEventListener('submit', (event) => {
      event.preventDefault();
      const formData = new FormData(form);
      const trainer = trainers.find((item) => item.id === formData.get('trainerId')) || selectedTrainer;
      const selectedDateValue = formData.get('date');
      if (!selectedDateValue) return toast('Please select an available trainer date.');

      const bookings = read('bookings');
      const applyBooking = (item) => {
        item.bookingType = 'trainer';
        item.courseId = '';
        item.courseName = 'Trainer Coaching Session';
        item.trainerId = trainer.id;
        item.trainerName = trainer.name;
        item.bucketOptionId = '';
        item.bucketLabel = '';
        item.bucketBalls = 0;
        item.bucketPrice = 0;
        item.bucketCount = 0;
        item.totalBalls = 0;
        item.trainerHours = null;
        item.trainingClassType = formData.get('trainingClassType') || 'Beginner';
        item.date = selectedDateValue;
        item.time = 'To be arranged';
        item.startTime = '';
        item.endTime = '';
        item.duration = 'Discuss through WhatsApp';
        item.durationMinutes = null;
        item.amount = 0;
        item.paymentMethod = TRAINER_DISCUSS_PAYMENT_METHOD;
        item.paymentStatus = 'Not Required';
        item.bookingStatus = 'Pending Trainer Arrangement';
        item.trainerPhoneNumber = trainer.phone || '';
        item.trainerEmail = trainer.email || '';
        item.receiptNote = TRAINER_DIRECT_NOTE;
        item.receiptImage = '';
      };

      if (existingBooking) {
        const item = bookings.find((bookingItem) => bookingItem.id === existingBooking.id);
        if (item) applyBooking(item);
        write('bookings', bookings);
        closeModal();
        userBookings();
        toast('Trainer booking updated. Please discuss time and price with trainer.');
        return;
      }

      const item = {
        id: makeId('B'),
        userId: state.session.id,
        customerName: state.session.fullName,
        customerEmail: state.session.email,
        hiddenForUsers: [],
        hiddenForAdmin: false,
        cancelReason: '',
        cancelledBy: '',
        cancelledById: '',
        cancellationType: '',
        cancelledAt: '',
        createdAt: new Date().toISOString(),
      };
      applyBooking(item);
      bookings.unshift(item);
      write('bookings', bookings);
      closeModal();
      state.currentPage = 'mybookings';
      renderNav();
      renderPage();
      toast('Trainer booking submitted. Discuss time, price and slot with trainer through WhatsApp.');
    });
  };

  const v49PreviousBookingPackageLine = bookingPackageLine;
  bookingPackageLine = function bookingPackageLineV49(booking = {}) {
    if (booking.bookingType === 'trainer') {
      const extras = [
        `Class type: ${booking.trainingClassType || 'Beginner'}`,
        `Date: ${booking.date ? formatDateDisplay(booking.date) : '-'}`,
        'Time / price: Discuss with trainer through WhatsApp',
      ];
      return `<br><span class="muted">Trainer coaching session • ${escapeHtml(extras.join(' • '))}</span>`;
    }
    return v49PreviousBookingPackageLine(booking);
  };

  const v49PreviousBookingToLocal = bookingToLocal;
  bookingToLocal = function bookingToLocalV49(row = {}) {
    const local = v49PreviousBookingToLocal(row);
    if (local.bookingType === 'trainer') {
      local.date = row.booking_date || row.session_date || local.date || '';
      local.time = row.booking_time ? dbTimeToLocal(row.booking_time) : (local.time && local.time !== '-' ? local.time : 'To be arranged');
      local.amount = Number(row.total_amount || 0);
      local.paymentMethod = row.payment_method || TRAINER_DISCUSS_PAYMENT_METHOD;
      local.paymentStatus = 'Not Required';
      local.bookingStatus = row.booking_status === 'cancelled' ? 'Cancelled' : (row.booking_status === 'confirmed' ? 'Confirmed' : 'Pending Trainer Arrangement');
      local.trainingClassType = row.training_class_type || local.trainingClassType || 'Beginner';
      local.receiptNote = row.trainer_session_note || local.receiptNote || TRAINER_DIRECT_NOTE;
    }
    return local;
  };

  const v49PreviousSyncBookingsToSupabase = syncBookingsToSupabase;
  syncBookingsToSupabase = async function syncBookingsToSupabaseV49(bookings = []) {
    await v49PreviousSyncBookingsToSupabase(bookings);
    if (!SUPABASE_MODE || !supabaseClient) return;

    for (const booking of bookings) {
      if (!booking || !isUuid(booking.id)) continue;
      if (booking.bookingType === 'trainer') {
        const patch = {
          booking_date: booking.date || null,
          booking_time: null,
          trainer_available_date_id: isUuid(booking.trainerAvailableDateId) ? booking.trainerAvailableDateId : null,
          training_class_type: booking.trainingClassType || 'Beginner',
          payment_method: TRAINER_DISCUSS_PAYMENT_METHOD,
          payment_status: 'not_paid',
          total_amount: 0,
          start_time: null,
          end_time: null,
          duration_minutes: null,
          duration_label: 'Discuss through WhatsApp',
          trainer_session_note: TRAINER_DIRECT_NOTE,
        };
        const { error } = await supabaseClient.from(DB_TABLES.bookings).update(patch).eq('id', booking.id);
        if (error) console.warn('V49 trainer booking patch skipped. Run V49 SQL first.', error.message || error);

        // Trainer bookings do not need QR payment verification.
        try {
          await supabaseClient.from(DB_TABLES.payments).delete().eq('booking_id', booking.id);
        } catch (error) {
          console.warn('V49 trainer payment cleanup skipped:', error?.message || error);
        }
      }
    }
  };

  // Keep Admin Payments clean: direct trainer bookings are not QR payment records.
  const v49PreviousAdminPayments = adminPayments;
  adminPayments = function adminPaymentsV49() {
    setTitle('Verify Payments', 'Administrator Panel');
    const bookings = adminVisibleBookings().filter((booking) => booking.paymentMethod === 'QR Payment' && booking.bookingType !== 'trainer');
    content().innerHTML = `
      <div class="toolbar">
        <div><p class="eyebrow">Payment Records</p><h2>Verify user QR payment receipt notes</h2><p class="muted">Trainer bookings are arranged directly with trainers and do not appear here.</p></div>
      </div>
      ${bookingTable(bookings, 'payments-admin')}
    `;
    bindBookingActions('payments-admin');
  };

  document.addEventListener('DOMContentLoaded', () => {
    v49FetchTrainerDatesFromSupabase().catch((error) => console.warn('V49 initial trainer dates load skipped:', error));
  });
})();



</script>
<?php
}

function upsi_section_admin_reports_module(): void
{
?>
<script>
window.UPSI_SECTION_MODULES = window.UPSI_SECTION_MODULES || {};
window.UPSI_SECTION_MODULES["admin_reports"] = {
  title: "Admin Reports",
  runtimeChunk: '14/22',
  functions: ["adminReports"]
};
</script>
<?php
}

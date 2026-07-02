<?php
/**
 * about_this_website.php
 * Bahagian: About This Website sebelum login
 *
 * V108: CSS dan JavaScript runtime dibahagikan ke semua section.
 * Jadi home_page.php tidak lagi memegang semua coding sistem.
 *
 * Runtime chunk: 2/22
 * Fungsi berkaitan untuk presentation: v83RenderAbout
 */


function upsi_section_about_this_website_styles(): void
{
?>
<style>
/* =========================================================
   V108 CSS chunk 2/22
   Bahagian: About This Website sebelum login
   ========================================================= */
.card-icon {
  width: 46px;
  height: 46px;
  display: grid;
  place-items: center;
  border-radius: 15px;
  background: var(--light-green);
  color: var(--dark-green);
  font-size: 24px;
}

.card-actions {
  display: flex;
  flex-wrap: wrap;
  gap: 8px;
  margin-top: 16px;
}

.meta-list {
  display: grid;
  gap: 8px;
  margin: 14px 0 0;
  padding: 0;
  list-style: none;
  color: var(--muted);
}

.meta-list li {
  display: flex;
  justify-content: space-between;
  gap: 12px;
  padding-top: 8px;
  border-top: 1px dashed var(--line);
}

.meta-list strong {
  color: var(--charcoal);
}

.stat-card {
  padding: 20px;
  background: linear-gradient(145deg, #ffffff, #f5fbf6);
}

.stat-card span {
  display: block;
  color: var(--muted);
  font-weight: 800;
}

.stat-card strong {
  display: block;
  margin-top: 8px;
  font-size: 36px;
  color: var(--dark-green);
}

.table-card {
  overflow: hidden;
}

.table-wrap {
  overflow-x: auto;
}

table {
  width: 100%;
  border-collapse: collapse;
  min-width: 780px;
}

th,
td {
  padding: 14px 16px;
  text-align: left;
  border-bottom: 1px solid var(--line);
  vertical-align: top;
}

th {
  background: var(--soft-green);
  color: var(--dark-green);
  font-size: 13px;
  text-transform: uppercase;
  letter-spacing: 0.04em;
}

tr:last-child td {
  border-bottom: 0;
}

.row-actions {
  display: flex;
  flex-wrap: wrap;
  gap: 7px;
}

.status-pill {
  padding: 6px 10px;
  color: var(--dark-green);
  background: var(--light-green);
}

.status-pill.pending {
  background: #fff6df;
  color: var(--warning);
}

.status-pill.cancelled,
.status-pill.rejected,
.status-pill.inactive {
  background: #fef2f2;
  color: var(--danger);
}

.status-pill.confirmed,
.status-pill.verified,
.status-pill.active {
  background: var(--light-green);
  color: var(--dark-green);
}

.modal-root {
  position: fixed;
  inset: 0;
  z-index: 40;
  display: grid;
  place-items: center;
  padding: 20px;
  background: rgba(8, 33, 21, 0.52);
  backdrop-filter: blur(8px);
}

.modal-card {
  width: min(100%, 560px);
  max-height: min(92vh, 760px);
  overflow-y: auto;
  background: white;
  border-radius: 26px;
  box-shadow: var(--shadow);
  padding: 24px;
}

.modal-head {
  display: flex;
  justify-content: space-between;
  align-items: flex-start;
  gap: 12px;
  margin-bottom: 18px;
}

.modal-head h2 {
  margin-bottom: 4px;
}

.close-btn {
  width: 40px;
  height: 40px;
  display: grid;
  place-items: center;
  border: 0;
  border-radius: 14px;
  background: var(--soft-green);
  color: var(--dark-green);
  font-size: 22px;
}

.form-grid {
  display: grid;
  grid-template-columns: repeat(2, minmax(0, 1fr));
  gap: 14px;
}

.form-grid .wide {
  grid-column: 1 / -1;
}

.empty-state {
  padding: 34px;
  text-align: center;
  color: var(--muted);
}

.qr-box {
  border: 1px dashed var(--green);
  border-radius: 20px;
  background: var(--soft-green);
  padding: 18px;
  text-align: center;
}

.qr-code {
  width: 150px;
  height: 150px;
  margin: 10px auto;
  display: grid;
  place-items: center;
  border-radius: 18px;
  color: var(--dark-green);
  background:
    linear-gradient(90deg, #0f5132 10px, transparent 10px) 0 0/30px 30px,
    linear-gradient(#0f5132 10px, transparent 10px) 0 0/30px 30px,
    #ffffff;
  font-weight: 900;
}

.review-stars {
  display: flex;
  gap: 8px;
  flex-wrap: wrap;
}

.review-stars label {
  display: inline-flex;
  align-items: center;
  gap: 5px;
  padding: 8px 10px;
  border-radius: 999px;
  background: var(--soft-green);
}

@media (max-width: 980px) {
  .auth-layout,
  .app-shell {
    grid-template-columns: 1fr;
  }

  .auth-layout {
    min-height: auto;
  }

  .hero-content {
    margin-top: 60px;
    padding-bottom: 150px;
  }

  .sidebar {
    position: static;
    height: auto;
  }

  .side-nav {
    grid-template-columns: repeat(2, minmax(0, 1fr));
  }

  .feature-grid,
  .card-grid,
  .stat-grid,
  .report-grid,
  .card-grid.two {
    grid-template-columns: 1fr 1fr;
  }
}

@media (max-width: 680px) {
  .auth-layout,
  .page-content,
  .topbar,
  .landing-section {
    padding: 18px;
  }

  .hero-panel {
    padding: 22px;
    border-radius: 26px;
  }

  .hero-stats,
  .feature-grid,
  .card-grid,
  .stat-grid,
  .report-grid,
  .card-grid.two,
  .form-grid,
  .search-row {
    grid-template-columns: 1fr;
  }

  .hero-stats {
    position: static;
    margin-top: 24px;
  }

  .hero-content {
    margin-top: 42px;
    padding-bottom: 0;
  }

  .topbar {
    align-items: flex-start;
    flex-direction: column;
  }

  .profile-chip {
    width: 100%;
  }

  .side-nav {
    grid-template-columns: 1fr;
  }
}

/* Mobile-app inspired driving range booking layout */
.app-booking-screen,
.admin-range-preview {
  display: grid;
  gap: 18px;
}

.mobile-booking-heading {
  display: flex;
  align-items: center;
  justify-content: space-between;
  gap: 14px;
}

.mobile-booking-heading h2 {
  margin: 0;
  color: var(--dark-green);
  font-size: clamp(24px, 3vw, 34px);
}

.booking-tabs {
  display: grid;
  grid-template-columns: repeat(2, minmax(0, 1fr));
  overflow: hidden;
  border: 1px solid rgba(15,81,50,0.10);
  border-radius: 20px;
  background: var(--light-green);
  box-shadow: 0 10px 30px rgba(15,81,50,0.05);
}

.booking-tab {
  min-height: 78px;
  border: 0;
  background: transparent;
  color: var(--dark-green);
  display: grid;
  place-items: center;
  gap: 6px;
  font-weight: 900;
}

.booking-tab span {
  font-size: 24px;
  line-height: 1;
}


</style>
<?php
}

function upsi_section_about_this_website_scripts(): void
{
?>
<script>
/* =========================================================
   V108 JavaScript chunk 2/22
   Bahagian: About This Website sebelum login
   ========================================================= */
async function syncCoursesToSupabase(courses = []) {
  for (const course of courses.filter(isDrivingCourse)) {
    let rangeId = isUuid(course.id) ? course.id : null;
    const rangePayload = {
      name: course.name || 'UPSI Driving Golf Range',
      location: course.location || null,
      description: course.description || null,
      opening_hours: course.openingHours || null,
      status: availabilityToDb(course.status),
    };

    let rangeData = null;
    if (rangeId) {
      const result = await supabaseClient.from(DB_TABLES.drivingRanges).upsert({ id: rangeId, ...rangePayload }).select().single();
      if (result.error) console.error('Driving range sync error:', result.error);
      rangeData = result.data;
    } else {
      const existing = await supabaseClient.from(DB_TABLES.drivingRanges).select('id').eq('name', rangePayload.name).maybeSingle();
      if (existing.data?.id) {
        rangeId = existing.data.id;
        const result = await supabaseClient.from(DB_TABLES.drivingRanges).update(rangePayload).eq('id', rangeId).select().single();
        if (result.error) console.error('Driving range update error:', result.error);
        rangeData = result.data;
      } else {
        const result = await supabaseClient.from(DB_TABLES.drivingRanges).insert(rangePayload).select().single();
        if (result.error) console.error('Driving range insert error:', result.error);
        rangeData = result.data;
      }
    }

    rangeId = rangeData?.id || rangeId;
    if (!rangeId) continue;

    const buckets = normaliseBucketOptions(course.bucketOptions).map((bucket) => ({
      localId: bucket.id,
      payload: {
        driving_range_id: rangeId,
        bucket_name: bucket.label,
        ball_count: Number(bucket.balls || 0),
        member_price: Number(bucket.memberPrice || 0),
        non_member_price: Number(bucket.nonMemberPrice || bucket.price || 0),
        max_bucket: Number(course.maxBucketCount || 10),
        status: 'active',
      },
    }));

    for (const item of buckets) {
      const bucketPayload = item.payload;
      if (isUuid(item.localId)) {
        const { error } = await supabaseClient.from(DB_TABLES.bucketOptions).upsert({ id: item.localId, ...bucketPayload });
        if (error) console.error('Bucket option sync error:', error);
      } else {
        const existing = await supabaseClient
          .from(DB_TABLES.bucketOptions)
          .select('id')
          .eq('driving_range_id', rangeId)
          .eq('ball_count', bucketPayload.ball_count)
          .maybeSingle();
        const query = existing.data?.id
          ? supabaseClient.from(DB_TABLES.bucketOptions).update(bucketPayload).eq('id', existing.data.id)
          : supabaseClient.from(DB_TABLES.bucketOptions).insert(bucketPayload);
        const { error } = await query;
        if (error) console.error('Bucket option sync error:', error);
      }
    }
  }
}

async function syncTrainersToSupabase(trainers = []) {
  const localIds = trainers.map((trainer) => trainer.id).filter(isUuid);
  for (const trainer of trainers) {
    const payload = {
      full_name: trainer.name || trainer.fullName || 'Trainer',
      phone: trainer.phone || null,
      email: trainer.email || null,
      address: trainer.address || null,
      description: trainer.description || null,
      rate: Number(trainer.rate || 0),
      profile_image_url: trainer.profileImage || null,
      status: availabilityToDb(trainer.status),
    };
    let error = null;
    if (isUuid(trainer.id)) {
      ({ error } = await supabaseClient.from(DB_TABLES.trainers).upsert({ id: trainer.id, ...payload }));
    } else if (trainer.email) {
      const existing = await supabaseClient.from(DB_TABLES.trainers).select('id').eq('email', trainer.email).maybeSingle();
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
  const { data: remote } = await supabaseClient.from(DB_TABLES.trainers).select('id');
  for (const row of remote || []) {
    if (localIds.length && !localIds.includes(row.id)) {
      await supabaseClient.from(DB_TABLES.trainers).delete().eq('id', row.id);
    }
  }
}



async function uploadProfileImageToSupabase(file, ownerId = 'profile') {
  if (!file) return '';
  if (!SUPABASE_MODE) {
    return await new Promise((resolve, reject) => {
      const reader = new FileReader();
      reader.onload = () => resolve(reader.result);
      reader.onerror = reject;
      reader.readAsDataURL(file);
    });
  }

  const cleanOwnerId = String(ownerId || 'profile').replace(/[^a-zA-Z0-9_-]/g, '-');
  const rawExt = (file.name.split('.').pop() || 'png').toLowerCase();
  const ext = ['png', 'jpg', 'jpeg', 'webp'].includes(rawExt) ? rawExt : 'png';
  const filePath = `${cleanOwnerId}/profile-${Date.now()}.${ext}`;

  const { error: uploadError } = await supabaseClient
    .storage
    .from('profile-images')
    .upload(filePath, file, {
      cacheControl: '3600',
      upsert: true,
      contentType: file.type || 'image/png',
    });

  if (uploadError) {
    console.error('Profile image storage upload error:', uploadError);
    toast('Profile picture upload failed. Check Supabase Storage policy.');
    return '';
  }

  const { data } = supabaseClient
    .storage
    .from('profile-images')
    .getPublicUrl(filePath);

  return data?.publicUrl || '';
}

async function uploadQrImageToSupabase(file) {
  if (!file) return null;
  if (!SUPABASE_MODE) {
    return await new Promise((resolve, reject) => {
      const reader = new FileReader();
      reader.onload = () => resolve(reader.result);
      reader.onerror = reject;
      reader.readAsDataURL(file);
    });
  }

  const rawExt = (file.name.split('.').pop() || 'png').toLowerCase();
  const ext = ['png', 'jpg', 'jpeg', 'webp'].includes(rawExt) ? rawExt : 'png';
  const filePath = `qr-payment-${Date.now()}.${ext}`;

  const { error: uploadError } = await supabaseClient
    .storage
    .from('payment-qr')
    .upload(filePath, file, {
      cacheControl: '3600',
      upsert: true,
      contentType: file.type || 'image/png',
    });

  if (uploadError) {
    console.error('QR storage upload error:', uploadError);
    toast('QR image upload failed. Check Supabase Storage policy.');
    return null;
  }

  const { data } = supabaseClient
    .storage
    .from('payment-qr')
    .getPublicUrl(filePath);

  return data?.publicUrl || '';
}

async function uploadReceiptFileToSupabase(file, bookingId = '') {
  if (!file) return '';
  if (!SUPABASE_MODE) {
    return await new Promise((resolve, reject) => {
      const reader = new FileReader();
      reader.onload = () => resolve(reader.result);
      reader.onerror = reject;
      reader.readAsDataURL(file);
    });
  }

  const cleanBookingId = String(bookingId || 'booking').replace(/[^a-zA-Z0-9_-]/g, '-');
  const safeFileName = String(file.name || 'receipt').replace(/[^a-zA-Z0-9._-]/g, '-');
  const filePath = `${cleanBookingId}/receipt-${Date.now()}-${safeFileName}`;

  const { error: uploadError } = await supabaseClient
    .storage
    .from('payment-receipts')
    .upload(filePath, file, {
      cacheControl: '3600',
      upsert: true,
      contentType: file.type || 'application/octet-stream',
    });

  if (uploadError) {
    console.error('Receipt storage upload error:', uploadError);
    toast('Receipt upload failed. Check Supabase Storage policy.');
    return '';
  }

  const { data } = supabaseClient
    .storage
    .from('payment-receipts')
    .getPublicUrl(filePath);

  return data?.publicUrl || '';
}

async function syncSettingsToSupabase(settings = {}) {
  const rows = [
    ['system_name', settings.systemName || 'UPSI Golf Booking System'],
    ['payment_name', settings.paymentName || 'UPSI Golf QR Payment'],
    ['payment_instruction', settings.paymentInfo || ''],
    ['contact_email', settings.contactEmail || ''],
    ['contact_phone', settings.contactPhone || ''],
    ['organisation_name', settings.organisationName || 'UPSI Driving Golf Range'],
    ['booking_notice', settings.bookingNotice || ''],
    ['payment_qr_url', settings.qrImage || ''],
  ].map(([setting_key, setting_value]) => ({ setting_key, setting_value }));
  const { error } = await supabaseClient.from(DB_TABLES.settings).upsert(rows, { onConflict: 'setting_key' });
  if (error) console.error('Settings sync error:', error);
  await syncSlotsToSupabase(settings.scheduleSlots || []);
}

async function syncSlotsToSupabase(slots = []) {
  const localIds = slots.map((slot) => slot.id).filter(isUuid);
  for (const slot of slots) {
    const payload = localSlotToDb(slot);
    const { error } = await supabaseClient
      .from(DB_TABLES.teeSlots)
      .upsert(payload, { onConflict: payload.id ? 'id' : 'slot_date,slot_time,slot_type,trainer_id' });
    if (error) console.error('Tee slot sync error:', error);
  }
  const { data: remote } = await supabaseClient.from(DB_TABLES.teeSlots).select('id');
  for (const row of remote || []) {
    if (localIds.length && !localIds.includes(row.id)) {
      await supabaseClient.from(DB_TABLES.teeSlots).delete().eq('id', row.id);
    }
  }
}

async function syncBookingsToSupabase(bookings = []) {
  for (const booking of bookings) {
    const bookingType = localBookingTypeToDb(booking.bookingType);
    const paymentStatus = localPaymentStatusToDb(booking.paymentStatus);
    const payload = {
      user_id: isUuid(booking.userId) ? booking.userId : (await getCurrentProfileId()),
      booking_type: bookingType,
      driving_range_id: bookingType === 'driving_range' && isUuid(booking.courseId) ? booking.courseId : null,
      trainer_id: bookingType === 'trainer' && isUuid(booking.trainerId) ? booking.trainerId : null,
      tee_slot_id: findSlotForBooking(booking),
      bucket_option_id: bookingType === 'driving_range' && isUuid(booking.bucketOptionId) ? booking.bucketOptionId : null,
      number_of_bucket: bookingType === 'driving_range' ? Math.max(1, Math.min(10, Number(booking.bucketCount || 1))) : null,
      total_balls: Number(booking.totalBalls || 0),
      total_amount: Number(booking.amount || 0),
      booking_status: localBookingStatusToDb(booking.bookingStatus),
      payment_status: paymentStatus,
      cancellation_reason: booking.cancelReason || null,
      cancellation_type: booking.cancellationType || null,
      previous_booking_status: booking.previousBookingStatus || null,
      previous_payment_status: booking.previousPaymentStatus || null,
      cancelled_by: isUuid(booking.cancelledById) ? booking.cancelledById : null,
      cancelled_at: booking.cancelledAt || null,
      hidden_for_user: Boolean(booking.hiddenForUsers?.includes(booking.userId || state.session?.id)),
      hidden_for_admin: Boolean(booking.hiddenForAdmin),
      // V62: send date/time/lane in the first booking upsert so the DB trigger can block duplicates immediately.
      booking_date: booking.bookingType === 'trainer' ? null : (booking.date || booking.bookingDate || null),
      scheduled_date: booking.bookingType === 'trainer' ? null : (booking.date || booking.bookingDate || null),
      booking_time: booking.bookingType === 'trainer' ? null : ((booking.startTime || booking.time || booking.bookingTime) && typeof localTimeToDb === 'function' ? localTimeToDb(booking.startTime || booking.time || booking.bookingTime) : null),
      scheduled_time: booking.bookingType === 'trainer' ? null : ((booking.startTime || booking.time || booking.bookingTime) && typeof localTimeToDb === 'function' ? localTimeToDb(booking.startTime || booking.time || booking.bookingTime) : null),
      start_time: booking.bookingType === 'trainer' ? null : ((booking.startTime || booking.time || booking.bookingTime) && typeof localTimeToDb === 'function' ? localTimeToDb(booking.startTime || booking.time || booking.bookingTime) : null),
      end_time: booking.bookingType === 'trainer' ? null : (booking.endTime && typeof localTimeToDb === 'function' ? localTimeToDb(booking.endTime) : null),
      duration_minutes: booking.bookingType === 'trainer' ? null : Number(booking.durationMinutes || 60),
      duration_label: booking.bookingType === 'trainer' ? null : (booking.duration || null),
      lane_code: booking.bookingType === 'trainer' ? null : (booking.laneCode || booking.laneId || booking.lane || null),
      lane_id_text: booking.bookingType === 'trainer' ? null : (booking.laneId || booking.laneCode || booking.lane || null),
      lane_label: booking.bookingType === 'trainer' ? null : (booking.laneLabel || booking.lane || booking.laneId || booking.laneCode || null),
      payment_method: booking.paymentMethod || null,
    };
    if (!payload.user_id) continue;
    if (isUuid(booking.id)) payload.id = booking.id;
    const { data, error } = await supabaseClient
      .from(DB_TABLES.bookings)
      .upsert(payload, { onConflict: payload.id ? 'id' : 'id' })
      .select()
      .single();
    if (error) {
      console.error('Booking sync error:', error);
      throw error;
    }
    const bookingId = data?.id || booking.id;
    if (booking.paymentMethod === 'QR Payment' || paymentStatus !== 'not_paid') {
      const paymentPayload = {
        booking_id: bookingId,
        user_id: payload.user_id,
        amount: Number(booking.amount || 0),
        payment_status: paymentStatus === 'not_paid' ? 'pending' : paymentStatus,
        payment_note: booking.receiptNote || null,
        receipt_image_url: booking.receiptImage || null,
        rejected_reason: paymentStatus === 'rejected' ? (booking.cancelReason || PAYMENT_REJECT_CANCEL_REASON) : null,
      };
      await supabaseClient.from(DB_TABLES.payments).upsert(paymentPayload, { onConflict: 'booking_id' });
    }

    if (payload.tee_slot_id) {
      // V45 lane-based booking: a driving range tee time can have many lane bookings.
      // Do not mark the whole tee slot as `booked` for driving range bookings; only the selected lane is blocked.
      const nextSlotStatus = bookingType === 'trainer' && payload.booking_status !== 'cancelled' ? 'booked' : 'available';
      const { error: slotStatusError } = await supabaseClient
        .from(DB_TABLES.teeSlots)
        .update({ status: nextSlotStatus })
        .eq('id', payload.tee_slot_id);
      if (slotStatusError) console.error('Tee slot status sync error:', slotStatusError);
    }
  }
}

async function syncReviewsToSupabase(reviews = []) {
  const userId = await getCurrentProfileId();
  for (const review of reviews) {
    const payload = {
      user_id: isUuid(review.userId) ? review.userId : userId,
      rating: Number(review.rating || 0),
      comment: review.message || '',
      status: 'active',
    };
    if (!payload.user_id) continue;
    if (isUuid(review.id)) payload.id = review.id;
    const { error } = await supabaseClient.from(DB_TABLES.reviews).upsert(payload, { onConflict: payload.id ? 'id' : 'id' });
    if (error) console.error('Review sync error:', error);
  }
}

function initStorage() {
  Object.keys(defaultData).forEach((key) => {
    const storageKey = STORAGE[key];
    if (!localStorage.getItem(storageKey)) {
      localStorage.setItem(storageKey, JSON.stringify(defaultData[key]));
    }
  });
  migrateGolfRangeData();
}

function migrateGolfRangeData() {
  const settings = read('settings');
  const currentVersion = Number(settings?.dataVersion || 0);

  const courses = read('courses');
  const drivingRange = getDrivingCourse(courses);
  if (drivingRange) {
    let changedCourse = false;
    if (currentVersion < 8) {
      drivingRange.name = 'UPSI Driving Golf Range';
      drivingRange.location = drivingRange.location || 'UPSI Driving Range';
      drivingRange.type = 'Driving Range';
      drivingRange.holes = 'Practice Bay';
      drivingRange.price = 10;
      drivingRange.description = 'Driving range ball bucket booking for UPSI Golf. Users can choose member or non-member category, select 50 or 100 balls, and choose 1 to 10 buckets.';
      drivingRange.bucketOptions = BUCKET_OPTIONS.map((bucket) => ({ ...bucket }));
      drivingRange.maxBucketCount = 10;
      changedCourse = true;
    }
    if (!drivingRange.bucketOptions || !Array.isArray(drivingRange.bucketOptions) || !drivingRange.bucketOptions.length) {
      drivingRange.bucketOptions = BUCKET_OPTIONS.map((bucket) => ({ ...bucket }));
      changedCourse = true;
    } else {
      drivingRange.bucketOptions = normaliseBucketOptions(drivingRange.bucketOptions);
      changedCourse = true;
    }
    if (!drivingRange.maxBucketCount) {
      drivingRange.maxBucketCount = 10;
      changedCourse = true;
    }
    if (changedCourse) write('courses', courses.filter((course, index, array) => index === array.findIndex((item) => item.id === course.id)));
  }

  const trainers = read('trainers');
  let changedTrainers = false;
  if (currentVersion < 8) {
    write('trainers', defaultData.trainers.map((trainer) => ({ ...trainer })));
    changedTrainers = true;
  } else {
    trainers.forEach((trainer) => {
      if (typeof trainer.phone === 'undefined') { trainer.phone = ''; changedTrainers = true; }
      if (typeof trainer.email === 'undefined') { trainer.email = ''; changedTrainers = true; }
      if (typeof trainer.address === 'undefined') { trainer.address = ''; changedTrainers = true; }
      if (typeof trainer.description === 'undefined') { trainer.description = trainer.name && trainer.name.includes('Nordin') ? 'Specialist in beginner swing basics, stance correction, and driving accuracy.' : 'Specialist in short game control, putting technique, and guided practice routine.'; changedTrainers = true; }
    });
    if (changedTrainers) write('trainers', trainers);
  }

  const users = read('users');
  let changedUsers = false;
  users.forEach((user) => {
    if (typeof user.profileImage === 'undefined') {
      user.profileImage = '';
      changedUsers = true;
    }
    if (typeof user.address === 'undefined') {
      user.address = '';
      changedUsers = true;
    }
  });
  if (changedUsers) write('users', users);

  const mergedSettings = { ...defaultData.settings, ...(settings && !Array.isArray(settings) ? settings : {}) };
  if (currentVersion < 8) {
    mergedSettings.organisationName = 'UPSI Driving Golf Range';
  }
  if (typeof mergedSettings.qrImage === 'undefined') mergedSettings.qrImage = '';
  if (!Array.isArray(mergedSettings.scheduleSlots) || currentVersion < 9) {
    mergedSettings.scheduleSlots = defaultScheduleSlots(read('times'));
  }
  mergedSettings.scheduleSlots = normaliseScheduleSlots(mergedSettings.scheduleSlots);
  mergedSettings.dataVersion = 11;
  write('settings', mergedSettings);

  const latestDrivingRange = getDrivingCourse(read('courses'));
  const bookings = read('bookings');
  let changed = false;
  bookings.forEach((booking) => {
    if (!Array.isArray(booking.hiddenForUsers)) {
      booking.hiddenForUsers = [];
      changed = true;
    }
    if (typeof booking.hiddenForAdmin === 'undefined') {
      booking.hiddenForAdmin = false;
      changed = true;
    }
    if (!booking.bookingType) {
      booking.bookingType = booking.bucketLabel || booking.bucketOptionId ? 'driving' : (booking.trainerId ? 'trainer' : 'driving');
      changed = true;
    }
    if (currentVersion < 8 && booking.bookingType === 'driving') {
      const bucket = bucketById(booking.bucketOptionId || 'bucket100', latestDrivingRange);
      const membershipType = booking.membershipType || 'non-member';
      const count = Number(booking.bucketCount || 1);
      booking.courseName = latestDrivingRange?.name || 'UPSI Driving Golf Range';
      booking.bucketLabel = bucket.label;
      booking.bucketBalls = bucket.balls;
      booking.bucketPrice = bucketUnitPrice(bucket, membershipType);
      booking.membershipType = membershipType;
      booking.amount = bucketAmount(bucket.id, count, latestDrivingRange, membershipType);
      changed = true;
    }
    if (booking.bookingType === 'trainer') {
      if (!booking.courseName || String(booking.courseName).toLowerCase().includes('driving')) booking.courseName = 'Trainer Coaching Session';
      booking.bucketOptionId = '';
      booking.bucketLabel = '';
      booking.bucketBalls = 0;
      booking.bucketPrice = 0;
      booking.bucketCount = 0;
      booking.totalBalls = 0;
      if (currentVersion < 8) {
        booking.amount = 0;
        booking.paymentStatus = 'Not Required';
        booking.paymentMethod = 'No Payment Required';
      }
      changed = true;
    }
    if (booking.bookingType === 'driving' && booking.trainerId) {
      booking.trainerId = '';
      booking.trainerName = 'No trainer';
      changed = true;
    }
    if (String(booking.paymentStatus || '').toLowerCase() === 'rejected' && booking.bookingStatus !== 'Cancelled') {
      booking.bookingStatus = 'Cancelled';
      booking.cancelledBy = 'admin';
      booking.cancellationType = 'payment_rejected';
      booking.cancelReason = PAYMENT_REJECT_CANCEL_REASON;
      booking.cancelledAt = booking.cancelledAt || new Date().toISOString();
      changed = true;
    }
    if (!booking.bucketOptionId && booking.bookingType === 'driving') {
      const bucket = bucketById('bucket100', latestDrivingRange);
      booking.bucketOptionId = bucket.id;
      booking.bucketLabel = bucket.label;
      booking.bucketBalls = bucket.balls;
      booking.membershipType = booking.membershipType || 'non-member';
      booking.bucketPrice = bucketUnitPrice(bucket, booking.membershipType);
      booking.bucketCount = 1;
      booking.totalBalls = bucket.balls;
      changed = true;
    }
    if (booking.courseName === 'UPSI Golf Driving Range' || booking.courseName === 'UPSI Driving Range' || booking.courseName === 'Kimi UPSI AT20') {
      booking.courseName = 'UPSI Driving Golf Range';
      changed = true;
    }
  });
  if (changed) write('bookings', bookings);
}

function read(key) {
  return JSON.parse(localStorage.getItem(STORAGE[key]) || '[]');
}

function write(key, value) {
  localStorage.setItem(STORAGE[key], JSON.stringify(value));
  debounceRemoteSync(key, value);
}

function money(value) {
  return `RM ${Number(value || 0).toFixed(2)}`;
}

function makeId(prefix) {
  if (SUPABASE_MODE && window.crypto?.randomUUID) return window.crypto.randomUUID();
  return `${prefix}-${Date.now().toString(36).toUpperCase()}${Math.random().toString(36).slice(2, 5).toUpperCase()}`;
}

function escapeHtml(value = '') {
  return String(value)
    .replaceAll('&', '&amp;')
    .replaceAll('<', '&lt;')
    .replaceAll('>', '&gt;')
    .replaceAll('"', '&quot;')
    .replaceAll("'", '&#039;');
}

function avatarMarkup(user, className = 'avatar') {
  const safeName = user?.fullName || 'User';
  const initial = safeName.trim().charAt(0).toUpperCase() || 'U';
  if (user?.profileImage) {
    return `<div class="${className}"><img src="${user.profileImage}" alt="${escapeHtml(safeName)} profile picture"></div>`;
  }
  return `<div class="${className}">${escapeHtml(initial)}</div>`;
}

function getFreshSessionUser() {
  const user = read('users').find((u) => u.id === state.session?.id);
  if (user) state.session = user;
  return user || state.session;
}

function isBookingCancelled(booking = {}) {
  return String(booking.bookingStatus || '').toLowerCase() === 'cancelled';
}

function isConfirmedAndVerifiedBooking(booking = {}) {
  return String(booking.previousBookingStatus || booking.bookingStatus || '').toLowerCase() === 'confirmed'
    && String(booking.previousPaymentStatus || booking.paymentStatus || '').toLowerCase() === 'verified';
}

function isProtectedBookingReference(booking = {}) {
  return isBookingCancelled(booking) && (
    isConfirmedAndVerifiedBooking(booking)
    || booking.cancellationType === 'confirmed_user_cancelled'
    || String(booking.paymentStatus || '').toLowerCase() === 'verified'
  );
}

function confirmedUserCancelledBookings() {
  return read('bookings').filter((booking) => (
    isBookingCancelled(booking)
    && booking.cancelledBy === 'user'
    && (booking.cancellationType === 'confirmed_user_cancelled' || isConfirmedAndVerifiedBooking(booking))
  ));
}

function cancellationReason(booking = {}) {
  if (booking.cancelReason) return booking.cancelReason;
  if (String(booking.paymentStatus || '').toLowerCase() === 'rejected' || booking.cancellationType === 'payment_rejected') {
    return PAYMENT_REJECT_CANCEL_REASON;
  }
  if (booking.cancelledBy === 'user') return USER_CANCEL_DEFAULT_REASON;
  if (booking.cancelledBy === 'admin') return ADMIN_CANCEL_DEFAULT_REASON;
  return 'This booking has been cancelled. Please contact UPSI Golf administration for more information.';
}

function adminVisibleBookings() {
  return read('bookings').filter((booking) => !booking.hiddenForAdmin || isProtectedBookingReference(booking));
}

function isBookingHiddenForUser(booking = {}, userId = state.session?.id) {
  return Array.isArray(booking.hiddenForUsers) && booking.hiddenForUsers.includes(userId);
}

function toast(message) {
  const el = document.getElementById('toast');
  el.textContent = message;
  el.classList.add('show');
  setTimeout(() => el.classList.remove('show'), 2600);
}

function setSession(user) {
  state.session = user;
  localStorage.setItem(STORAGE.session, JSON.stringify({ userId: user.id }));
}

function clearSession() {
  state.session = null;
  localStorage.removeItem(STORAGE.session);
  if (SUPABASE_MODE) supabaseClient.auth.signOut().catch((error) => console.error('Supabase sign out error:', error));
}

function getSessionUser() {
  const raw = localStorage.getItem(STORAGE.session);
  if (!raw) return null;
  const session = JSON.parse(raw);
  return read('users').find((u) => u.id === session.userId) || null;
}

async function promoteVerifiedAdminSession() {
  if (!SUPABASE_MODE) return null;
  const { data: sessionData } = await supabaseClient.auth.getSession();
  const authUser = sessionData?.session?.user;
  const metadata = authUser?.user_metadata || {};
  const metadataRole = String(metadata.role || metadata.requested_role || '').toLowerCase();
  if (!authUser || !['admin', 'main_admin'].includes(metadataRole)) return null;

  const payload = {
    role: 'admin',
    status: 'active',
    full_name: metadata.full_name || authUser.email || 'Administrator',
    email: authUser.email || '',
    phone: metadata.phone || null,
  };
  const { data, error } = await supabaseClient
    .from(DB_TABLES.profiles)
    .update(payload)
    .eq('user_id', authUser.id)
    .select('*')
    .maybeSingle();
  if (error) {
    console.warn('Verified admin profile promotion skipped:', error.message || error);
    return null;
  }
  return data ? profileToUser(data) : null;
}

function app() {
  return document.getElementById('app');
}

async function boot() {
  applyTheme(getSavedTheme());
  suppressSupabaseSync = true;
  initStorage();
  suppressSupabaseSync = false;
  await loadSupabaseDataToLocal();
  supabaseSyncReady = true;
  const promotedVerifiedAdmin = await promoteVerifiedAdminSession();
  if (promotedVerifiedAdmin) {
    upsertLocalUserFromProfile({
      id: promotedVerifiedAdmin.id,
      user_id: promotedVerifiedAdmin.userId,
      full_name: promotedVerifiedAdmin.fullName,
      email: promotedVerifiedAdmin.email,
      phone: promotedVerifiedAdmin.phone,
      role: 'admin',
      status: 'active',
      address: promotedVerifiedAdmin.address,
      profile_image_url: promotedVerifiedAdmin.profileImage,
      created_at: promotedVerifiedAdmin.createdAt,
    });
  }
  const supabaseUser = await getSupabaseSessionUser();
  if (SUPABASE_MODE && !supabaseUser) {
    const { data: sessionData } = await supabaseClient.auth.getSession();
    if (sessionData?.session?.user) {
      clearSession();
      renderAuth();
      toast('Account profile no longer exists. Please contact the main administrator.');
      return;
    }
  }
  const user = supabaseUser || getSessionUser();
  if (user) {
    setSession(user);
    applyPhpStartPage(user);
    await loadSupabaseDataToLocal({ requireAuth: true });
    renderShell();
  } else {
    renderAuth();
  }
}

function renderAuth() {
  app().innerHTML = document.getElementById('auth-template').innerHTML;
  bindAuth();
}

function bindAuth() {
  const showRegisterBtn = document.querySelector('[data-show-user-register]');
  const hideRegisterBtn = document.querySelector('[data-hide-user-register]');
  const userLoginForm = document.getElementById('userLoginForm');
  const adminLoginForm = document.getElementById('adminLoginForm');
  const registerForm = document.getElementById('registerForm');
  const authTabs = Array.from(document.querySelectorAll('[data-auth-tab]'));
  const userPanel = document.getElementById('userAuthPanel');
  const adminPanel = document.getElementById('adminAuthPanel');

  function switchAuthTab(type) {
    authTabs.forEach((tab) => {
      const active = tab.dataset.authTab === type;
      tab.classList.toggle('active', active);
      tab.setAttribute('aria-selected', active ? 'true' : 'false');
    });
    if (userPanel) userPanel.classList.toggle('hidden', type !== 'user');
    if (adminPanel) adminPanel.classList.toggle('hidden', type !== 'admin');
    if (type !== 'user' && registerForm) registerForm.classList.add('hidden');
  }

  authTabs.forEach((tab) => {
    tab.addEventListener('click', () => switchAuthTab(tab.dataset.authTab));
  });

  switchAuthTab('user');

  if (showRegisterBtn && registerForm) {
    showRegisterBtn.addEventListener('click', () => {
      switchAuthTab('user');
      registerForm.classList.remove('hidden');
      registerForm.scrollIntoView({ behavior: 'smooth', block: 'center' });
    });
  }

  if (hideRegisterBtn && registerForm) {
    hideRegisterBtn.addEventListener('click', () => {
      registerForm.classList.add('hidden');
    });
  }

  document.querySelectorAll('[data-forgot-user], [data-forgot-admin]').forEach((btn) => {
    btn.addEventListener('click', () => {
      toast('Please contact the administrator to reset or update the password for this prototype.');
    });
  });

  const demoUserBtn = document.querySelector('[data-demo-user]');
  if (demoUserBtn) {
    demoUserBtn.addEventListener('click', () => {
      const demo = read('users').find((u) => u.email === 'user@upsi.edu.my');
      setSession(demo);
      state.currentPage = 'dashboard';
      applyPhpStartPage(demo);
      renderShell();
      toast('Logged in using demo user account.');
    });
  }

  if (registerForm) {
    registerForm.addEventListener('submit', async (event) => {
      event.preventDefault();
      const form = new FormData(event.currentTarget);
      const email = form.get('email').trim().toLowerCase();
      const password = form.get('password');
      const fullName = form.get('fullName').trim();
      const phone = form.get('phone').trim();
      const age = form.get('age') ? Number(form.get('age')) : null;
      const birthday = form.get('birthday') || null;
      const address = form.get('address') ? form.get('address').trim() : '';

      if (!SUPABASE_MODE) return toast('Supabase client is not available. Please check index.html CDN script.');

      const submitBtn = registerForm.querySelector('button[type="submit"]');
      if (submitBtn) {
        submitBtn.disabled = true;
        submitBtn.textContent = 'Registering...';
      }

      const { data, error } = await createSupabaseAuthAccount({
        fullName,
        email,
        phone,
        password,
        role: 'user',
        status: 'active',
        address,
        age,
        birthday,
        loginProvider: 'Email',
      });

      if (submitBtn) {
        submitBtn.disabled = false;
        submitBtn.textContent = 'Register User Account';
      }

      if (error) {
        console.error('Supabase register error:', error);
        if (String(error.message || '').toLowerCase().includes('rate limit')) {
          toast('Supabase email rate limit exceeded. Turn off Confirm Email in Supabase Auth settings or wait before trying again.');
        } else {
          toast(error.message || 'Registration failed.');
        }
        return;
      }

      // If email confirmation is disabled, Supabase returns a session and the user can login immediately.
      // If confirmation is enabled, the Auth user/profile is created but login requires email confirmation.
      if (data?.session) {
        await loadSupabaseDataToLocal({ requireAuth: true });
        const user = await getSupabaseSessionUser();
        if (user) {
          setSession(user);
          state.currentPage = 'dashboard';
          applyPhpStartPage(user);
        }
        renderShell();
        toast('User account registered successfully.');
      } else {
        await loadSupabaseDataToLocal();
        registerForm.classList.add('hidden');
        toast('User account registered in Supabase. Please login after confirming email if confirmation is enabled.');
      }
    });
  }

  async function handleLogin(event, expectedRole) {
    event.preventDefault();
    const form = new FormData(event.currentTarget);
    const email = form.get('email').trim().toLowerCase();
    const password = form.get('password');

    if (!SUPABASE_MODE) return toast('Supabase client is not available. Please check index.html CDN script.');

    const { data: authData, error: authError } = await supabaseClient.auth.signInWithPassword({ email, password });
    if (authError) {
      console.error('Supabase login error:', authError);
      toast('Invalid email or password.');
      return;
    }

    const { data: profile, error: profileError } = await supabaseClient
      .from(DB_TABLES.profiles)
      .select('*')
      .eq('user_id', authData.user.id)
      .single();

    if (profileError || !profile) {
      console.error('Profile lookup error:', profileError);
      await supabaseClient.auth.signOut();
      toast('Profile not found. Please contact administrator.');
      return;
    }

    const metadata = authData.user?.user_metadata || {};
    const metadataRole = String(metadata.role || metadata.requested_role || '').toLowerCase();
    let user = profileToUser(profile);
    if (expectedRole === 'admin' && user.role !== 'admin' && ['admin', 'main_admin'].includes(metadataRole)) {
      const { data: promotedProfile, error: promoteError } = await supabaseClient
        .from(DB_TABLES.profiles)
        .update({
          role: 'admin',
          status: 'active',
          full_name: profile.full_name || metadata.full_name || user.fullName,
          phone: profile.phone || metadata.phone || user.phone || null,
        })
        .eq('user_id', authData.user.id)
        .select('*')
        .maybeSingle();
      if (!promoteError && promotedProfile) {
        user = profileToUser(promotedProfile);
      } else {
        console.warn('Admin profile auto-promote skipped:', promoteError?.message || promoteError);
        user = { ...user, role: 'admin', supabaseRole: 'admin', status: user.status || 'Active' };
      }
    }
    if (user.status !== 'Active') {
      await supabaseClient.auth.signOut();
      toast('This account is inactive. Please contact administrator.');
      return;
    }

    if (user.role !== expectedRole) {
      await supabaseClient.auth.signOut();
      toast(expectedRole === 'admin' ? 'Please use an administrator account.' : 'Please use a user/golfer account.');
      return;
    }

    await loadSupabaseDataToLocal({ requireAuth: true });
    if (expectedRole === 'admin' && user.role === 'admin') {
      const localUsers = read('users');
      const index = localUsers.findIndex((item) => item.id === user.id || item.userId === user.userId || item.email?.toLowerCase() === user.email?.toLowerCase());
      if (index >= 0) localUsers[index] = { ...localUsers[index], ...user, role: 'admin', supabaseRole: user.supabaseRole || 'admin' };
      else localUsers.push({ ...user, role: 'admin', supabaseRole: user.supabaseRole || 'admin' });
      setLocalData('users', localUsers);
    }
    setSession(user);
    state.currentPage = 'dashboard';
    applyPhpStartPage(user);
    renderShell();
    toast(`Welcome, ${user.fullName}.`);
  }

  if (adminLoginForm) {
    adminLoginForm.addEventListener('submit', (event) => handleLogin(event, 'admin'));
    adminLoginForm.querySelectorAll('input').forEach((input) => {
      input.addEventListener('keydown', (event) => {
        if (event.key === 'Enter') {
          event.preventDefault();
          adminLoginForm.requestSubmit();
        }
      });
    });
  }
  if (userLoginForm) userLoginForm.addEventListener('submit', (event) => handleLogin(event, 'user'));
}

function isPrimaryAdmin(userOrId) {
  const user = typeof userOrId === 'string' ? read('users').find((item) => item.id === userOrId) : userOrId;
  return user?.supabaseRole === 'main_admin' || user?.role === 'main_admin' || user?.id === 'U-ADMIN';
}

function getAdminUsers() {
  return read('users').filter((user) => user.role === 'admin');
}

function currentUserIsPrimaryAdmin() {
  return state.session?.role === 'admin' && isPrimaryAdmin(state.session);
}

function getNavItems() {
  if (state.session.role === 'admin') {
    return [
      ['dashboard', '📊', 'Dashboard'],
      ['users', '👥', 'Manage Users'],
      ['courses', '⛳', 'Driving Range'],
      ['trainers', '🏌️', 'Trainers'],
      ['times', '🕒', 'Tee Times'],
      ['bookings', '📌', 'Bookings'],
      ['payments', '💳', 'Payments'],
      ['reviews', '⭐', 'Reviews'],
      ['reports', '📈', 'Reports'],
      ['settings', '👤', 'Profile'],
    ];
  }
  return [
    ['dashboard', '🏠', 'Home'],
    ['courses', '⛳', 'Driving Range'],
    ['trainers', '🏌️', 'Trainers'],
    ['mybookings', '📅', 'My Bookings'],
    ['payment', '💳', 'Payment'],
    ['profile', '👤', 'Profile'],
    ['feedback', '⭐', 'Feedback'],
  ];
}

function renderShell() {
  app().innerHTML = document.getElementById('shell-template').innerHTML;
  renderNav();
  renderProfileChip();
  document.getElementById('logoutBtn').addEventListener('click', () => {
    confirmAction({
      title: 'Log Out',
      message: 'Are you sure you want to log out from the UPSI Golf Booking System?',
      confirmText: 'Log Out',
      danger: true,
      onConfirm: () => {
        clearSession();
        renderAuth();
        toast('Logged out successfully.');
      },
    });
  });
  renderPage();
}

function renderNav() {
  const nav = document.getElementById('sideNav');
  nav.innerHTML = getNavItems()
    .map(([key, icon, label]) => `
      <button class="nav-btn ${state.currentPage === key ? 'active' : ''}" data-page="${key}">
        <span>${icon}</span>${label}
      </button>
    `)
    .join('');

  nav.querySelectorAll('[data-page]').forEach((btn) => {
    btn.addEventListener('click', () => {
      state.currentPage = btn.dataset.page;
      state.search = '';
      if (btn.dataset.page !== 'courses') state.bookingTab = 'driving';
      renderNav();
      renderPage();
    });
  });
}

function renderProfileChip() {
  const chip = document.getElementById('profileChip');
  const user = getFreshSessionUser();
  const name = user.fullName;
  chip.innerHTML = `
    ${avatarMarkup(user)}
    <div>
      <strong>${escapeHtml(name)}</strong>
      <span>${user.role === 'admin' ? 'Administrator' : 'User / Golfer'}</span>
    </div>
  `;
  chip.setAttribute('role', 'button');
  chip.setAttribute('tabindex', '0');
  chip.setAttribute('title', 'Open profile');
  const goProfile = () => {
    state.currentPage = user.role === 'admin' ? 'settings' : 'profile';
    state.search = '';
    renderNav();
    renderPage();
  };
  chip.onclick = goProfile;
  chip.onkeydown = (event) => {
    if (event.key === 'Enter' || event.key === ' ') {
      event.preventDefault();
      goProfile();
    }
  };
}

function setTitle(title, roleLabel) {
  document.getElementById('pageTitle').textContent = title;
  document.getElementById('roleLabel').textContent = roleLabel || (state.session.role === 'admin' ? 'Administrator Panel' : 'User Panel');
}

function renderPage() {
  const root = content();
  if (root) delete root.dataset.sectionized;
  if (state.session.role === 'admin') renderAdminPage();
  else renderUserPage();
  applySectionGrouping();
}

function renderUserPage() {
  const page = state.currentPage;
  if (page === 'dashboard') return userDashboard();
  if (page === 'courses') return userCourses();
  if (page === 'trainers') return userTrainers();
  if (page === 'mybookings') return userBookings();
  if (page === 'payment') return userPayments();
  if (page === 'profile') return userProfile();
  if (page === 'settings') return userSettings();
  if (page === 'feedback') return userFeedback();
  userDashboard();
}

function renderAdminPage() {
  const page = state.currentPage;
  if (page === 'dashboard') return adminDashboard();
  if (page === 'users') return adminUsers();
  if (page === 'courses') return adminCourses();
  if (page === 'trainers') return adminTrainers();
  if (page === 'times') return adminTimes();
  if (page === 'bookings') return adminBookings();
  if (page === 'payments') return adminPayments();
  if (page === 'reviews') return adminReviews();
  if (page === 'reports') return adminReports();
  if (page === 'settings') return adminSettings();
  adminDashboard();
}


function applySectionGrouping() {
  const root = content();
  if (!root || root.dataset.sectionized === 'true') return;
  const nodes = Array.from(root.children);
  if (!nodes.length || nodes.some((node) => node.classList?.contains('content-section'))) return;

  const role = state.session?.role || 'user';
  const page = state.currentPage || 'dashboard';
  const pick = (...indexes) => indexes.map((index) => nodes[index]).filter(Boolean);
  const restFrom = (start) => nodes.slice(start).filter(Boolean);
  let groups = [];

  if (role === 'user') {
    if (page === 'dashboard') {
      groups = [
        { eyebrow: 'Overview', title: 'User Booking Summary', desc: 'Quick summary for available services and your booking activity.', icon: '📊', nodes: pick(0) },
        { eyebrow: 'Driving Range', title: 'Driving Range Booking', desc: 'Book ball bucket sessions and view current driving range details.', icon: '⛳', nodes: pick(1, 2) },
        { eyebrow: 'Trainer', title: 'Trainer Booking', desc: 'View trainer details and book coaching sessions separately from driving range booking.', icon: '🏌️', nodes: pick(3, 4) },
      ];
    } else if (page === 'courses') {
      groups = [{ eyebrow: 'Driving Range', title: 'Driving Range Booking Section', desc: 'Membership category, ball bucket, available date, tee time and QR payment are managed in one clear section.', icon: '⛳', nodes }];
    } else if (page === 'trainers') {
      groups = [
        { eyebrow: 'Trainer Search', title: 'Find Available Trainers', desc: 'Search trainer by name, phone, email or address.', icon: '🔎', nodes: pick(0) },
        { eyebrow: 'Trainer Details', title: 'Available Trainer Records', desc: 'Trainer contact information and available date/time are grouped here.', icon: '🏌️', nodes: restFrom(1) },
      ];
    } else if (page === 'mybookings') {
      groups = [{ eyebrow: 'Booking Records', title: 'My Booking History', desc: 'View booking details, cancellation reason, reschedule actions and booking status.', icon: '📅', nodes }];
    } else if (page === 'payment') {
      groups = [
        { eyebrow: 'QR Payment', title: 'Payment Information', desc: 'Scan the QR code and read payment instructions before submitting receipt notes.', icon: '💳', nodes: pick(0) },
        { eyebrow: 'Receipt Records', title: 'Bookings Requiring Payment Action', desc: 'Upload receipt note and monitor payment verification status.', icon: '🧾', nodes: restFrom(1) },
      ];
    } else if (page === 'profile' || page === 'settings') {
      groups = [{ eyebrow: 'Profile', title: 'Account Profile & Settings', desc: 'View profile details, update contact information, upload picture and change password.', icon: '👤', nodes }];
    } else if (page === 'feedback') {
      groups = [
        { eyebrow: 'Feedback Form', title: 'Submit Review', desc: 'Share your experience after using the booking system.', icon: '⭐', nodes: pick(0) },
        { eyebrow: 'My Reviews', title: 'Feedback History', desc: 'Your submitted reviews are shown in this section.', icon: '💬', nodes: restFrom(1) },
      ];
    }
  } else {
    if (page === 'dashboard') {
      groups = [
        { eyebrow: 'Overview', title: 'Administrator Summary', desc: 'Key statistics for users, driving range records, bookings and verified revenue.', icon: '📊', nodes: pick(0) },
        { eyebrow: 'Latest Bookings', title: 'Recent Booking Management', desc: 'Monitor latest bookings and update confirmation or payment status.', icon: '📅', nodes: restFrom(1) },
      ];
    } else if (page === 'users') {
      groups = [{ eyebrow: 'Users', title: 'Customer Account Management', desc: 'Search registered users and activate or deactivate accounts with confirmation popup.', icon: '👥', nodes }];
    } else if (page === 'courses') {
      groups = [
        { eyebrow: 'Driving Range Setup', title: 'Driving Range Details & Pricing', desc: 'Manage range information, membership prices and bucket limits shown to users.', icon: '⛳', nodes: pick(0, 1) },
        { eyebrow: 'Driving Range Records', title: 'Available Range List', desc: 'Edit or delete driving range records from this section.', icon: '📋', nodes: restFrom(2) },
      ];
    } else if (page === 'trainers') {
      groups = [
        { eyebrow: 'Trainer Setup', title: 'Trainer Details', desc: 'Manage trainer names, phone numbers, emails, addresses and availability status.', icon: '🏌️', nodes: pick(0, 1) },
        { eyebrow: 'Trainer Records', title: 'Trainer List', desc: 'Edit or delete trainer records with confirmation popup.', icon: '📋', nodes: restFrom(2) },
      ];
    } else if (page === 'times') {
      groups = [
        { eyebrow: 'Tee Time Setup', title: 'Date & Time Availability', desc: 'Add single or bulk date/time slots for Driving Range, Trainers or both.', icon: '🕘', nodes: pick(0, 1) },
        { eyebrow: 'Tee Time Records', title: 'Available Slot Table', desc: 'Booked slots are shown as not available and cannot be selected by new users.', icon: '📆', nodes: restFrom(2) },
      ];
    } else if (page === 'bookings') {
      groups = [{ eyebrow: 'Bookings', title: 'Booking Management', desc: 'Search, confirm, cancel, reschedule and view booking records.', icon: '📅', nodes }];
    } else if (page === 'payments') {
      groups = [{ eyebrow: 'Payments', title: 'Payment Verification', desc: 'Verify or reject QR payment receipt notes. Rejected payment automatically cancels the booking.', icon: '💳', nodes }];
    } else if (page === 'reviews') {
      groups = [{ eyebrow: 'Reviews', title: 'Customer Feedback', desc: 'View ratings and feedback submitted by users.', icon: '⭐', nodes }];
    } else if (page === 'reports') {
      groups = [
        { eyebrow: 'Report Overview', title: 'Booking & Revenue Report', desc: 'Summary cards for booking status and verified revenue.', icon: '📊', nodes: pick(0) },
        { eyebrow: 'Operational Summary', title: 'System Record Summary', desc: 'Total users, driving range records, trainer records and reviews.', icon: '📋', nodes: restFrom(1) },
      ];
    } else if (page === 'settings' || page === 'profile') {
      groups = [{ eyebrow: 'Profile', title: 'Administrator Profile & System Settings', desc: 'Manage admin profile, password, additional admin accounts and QR payment settings.', icon: '👤', nodes }];
    }
  }

  groups = groups.filter((group) => group.nodes && group.nodes.length);
  if (!groups.length) return;

  const fragment = document.createDocumentFragment();
  groups.forEach((group) => {
    const section = document.createElement('section');
    section.className = 'content-section category-section';
    section.innerHTML = `
      <div class="content-section-header">
        <div class="section-icon" aria-hidden="true">${group.icon || '📌'}</div>
        <div>
          <p class="eyebrow">${escapeHtml(group.eyebrow || 'Section')}</p>
          <h2>${escapeHtml(group.title || 'Section')}</h2>
          ${group.desc ? `<p class="muted">${escapeHtml(group.desc)}</p>` : ''}
        </div>
      </div>
      <div class="content-section-body"></div>
    `;
    const body = section.querySelector('.content-section-body');
    group.nodes.forEach((node) => body.appendChild(node));
    fragment.appendChild(section);
  });
  root.replaceChildren(fragment);
  root.dataset.sectionized = 'true';
}

function content() {
  return document.getElementById('pageContent');
}



</script>
<?php
}

function upsi_section_about_this_website_module(): void
{
?>
<script>
window.UPSI_SECTION_MODULES = window.UPSI_SECTION_MODULES || {};
window.UPSI_SECTION_MODULES["about_this_website"] = {
  title: "About This Website sebelum login",
  runtimeChunk: '2/22',
  functions: ["v83RenderAbout"]
};
</script>
<?php
}

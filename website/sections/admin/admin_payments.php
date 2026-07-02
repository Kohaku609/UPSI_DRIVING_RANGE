<?php
/**
 * admin_payments.php
 * Bahagian: Admin Payments
 *
 * V108: CSS dan JavaScript runtime dibahagikan ke semua section.
 * Jadi home_page.php tidak lagi memegang semua coding sistem.
 *
 * Runtime chunk: 12/22
 * Fungsi berkaitan untuk presentation: adminPayments
 */


function upsi_section_admin_payments_styles(): void
{
?>
<style>
/* =========================================================
   V108 CSS chunk 12/22
   Bahagian: Admin Payments
   ========================================================= */
.qr-download-wrap img {
  max-width: 100%;
  max-height: 260px;
  object-fit: contain;
}
.qr-download-btn {
  margin-top: 12px;
}
.qr-code.qr-download-wrap,
.qr-mini.qr-download-wrap {
  height: auto !important;
  max-height: none !important;
  min-height: 0 !important;
  overflow: visible !important;
  padding: 12px !important;
}
.qr-code.qr-download-wrap img,
.qr-mini.qr-download-wrap img {
  width: 100% !important;
  height: auto !important;
  max-height: 220px !important;
  flex: 0 0 auto;
}
.qr-download-btn {
  width: 100%;
  min-width: 0;
  max-width: 100%;
  min-height: 48px;
  height: auto;
  white-space: normal;
  line-height: 1.2;
  text-align: center;
}

[data-add-trainer] {
  position: relative;
  z-index: 3;
  pointer-events: auto !important;
}

@media (max-width: 760px) {
  .custom-time-picker,
  .custom-date-picker {
    grid-template-columns: 1fr;
  }
}


/* =========================================================
   V29 UI fixes: compact date/time popups, profile frame, event groups
   ========================================================= */
.modal-card { max-height: 88vh; overflow-y: auto; }
.compact-modal-form { align-items: start; }
.compact-modal-form input[type="date"],
.compact-modal-form input[type="time"] {
  min-height: 58px;
  cursor: pointer;
  color-scheme: light;
}
body.dark .compact-modal-form input[type="date"],
body.dark .compact-modal-form input[type="time"] { color-scheme: dark; }
.custom-date-picker,
.custom-time-picker { display: none !important; }
.v29-event-track { align-items: stretch; gap: 18px; }
.event-month-group { display: flex; flex-direction: column; align-items: flex-start; gap: 12px; flex: 0 0 auto; min-width: 390px; }
.event-month-heading { background: var(--mint); color: var(--green); border: 1px solid var(--line); padding: 10px 16px; border-radius: 999px; font-weight: 900; font-size: 17px; }
.event-month-cards { display: flex; gap: 18px; align-items: stretch; }
.event-month-break, .v28-month-break { display: none !important; }
.event-card { min-width: 360px; }
.profile-card .avatar.large,
.profile-detail-head .avatar.large,
.profile-chip .avatar,
.profile-chip-user .avatar,
.avatar.large,
.avatar {
  overflow: hidden;
  display: inline-flex;
  align-items: center;
  justify-content: center;
}
.profile-card .avatar.large img,
.profile-detail-head .avatar.large img,
.profile-chip .avatar img,
.profile-chip-user .avatar img,
.avatar.large img,
.avatar img {
  width: 100%;
  height: 100%;
  max-width: 100%;
  max-height: 100%;
  object-fit: cover;
  display: block;
}
.notification-image:empty { display: none; }
.chat-thread { max-height: 420px; overflow-y: auto; padding-right: 10px; }
.chat-bubble img.notification-image,
.notification-card img.notification-image { max-width: 220px; max-height: 160px; object-fit: contain; border-radius: 14px; background: #fff; }
body.dark .event-month-heading { background: rgba(84, 230, 151, .12); color: #6df6a5; border-color: rgba(109,246,165,.25); }
body.dark .compact-modal-form input[type="date"],
body.dark .compact-modal-form input[type="time"] { background: #0b1d14; border-color: rgba(109,246,165,.25); color: #f6fff8; }
body.dark .modal-card { background: #102416; color: #f6fff8; border: 1px solid rgba(109,246,165,.22); }
body.dark .modal-card .muted { color: #b7d8c3; }

/* V31 final UI polish */
.v31-modal-card { max-height: 88vh; overflow: auto; }
.v31-event-form textarea[name="hook"] { min-height: 72px; }
.v31-event-card .event-card-body > p { font-weight: 700; color: var(--charcoal); }
body.dark-mode .v31-event-card .event-card-body > p { color: var(--dark-text); }
.v31-event-month-group { min-width: 430px; display: flex; flex-direction: column; gap: 14px; align-items: flex-start; }
.v31-month-heading { align-self: flex-start; margin-left: 0; }
.v31-event-track { align-items: flex-start; }
.event-detail-view { display: grid; gap: 16px; font-size: 16px; line-height: 1.65; }
.event-detail-image { width: min(100%, 620px); max-height: 320px; object-fit: contain; border-radius: 22px; border: 1px solid var(--border); background: #fff; justify-self: center; }
.event-hook-view { background: var(--soft-green); border: 1px solid var(--border); border-radius: 18px; padding: 14px 16px; }
.v31-chat-thread { max-height: 420px; overflow: auto; display: flex; flex-direction: column; }
.v31-chat-thread .chat-bubble:first-child { border-width: 2px; }
.notification-image { max-width: min(100%, 360px); max-height: 260px; object-fit: contain; background: #fff; border-radius: 14px; border: 1px solid var(--border); display: block; }
.profile-avatar img, .avatar img, .profile-image img, .profile-card img, .user-chip img, .top-profile img, .mini-profile-card img { width: 100%; height: 100%; object-fit: cover; border-radius: inherit; display: block; }
.profile-avatar, .avatar, .profile-image { overflow: hidden; }
button:disabled { opacity: .65; cursor: not-allowed; }
body.dark-mode .event-detail-view, body.dark-mode .event-hook-view { color: var(--dark-text); }
body.dark-mode .event-hook-view { background: rgba(63, 220, 138, .08); border-color: var(--dark-border); }
body.dark-mode input[type="date"], body.dark-mode input[type="time"] { color-scheme: dark; }

/* V41 lane management and booking lane availability */
.lane-management-card { margin-top: 0; }
.lane-status-panel {
  margin: 14px 0;
  padding: 14px;
  border: 1px solid rgba(9, 95, 59, .18);
  border-radius: 18px;
  background: rgba(238, 250, 243, .82);
}
.lane-status-head {
  display: flex;
  justify-content: space-between;
  gap: 12px;
  align-items: center;
  margin-bottom: 10px;
  color: var(--charcoal);
}
.lane-status-head span { color: var(--muted); font-size: 13px; font-weight: 700; }
.lane-chip-grid {
  display: grid;
  grid-template-columns: repeat(auto-fit, minmax(92px, 1fr));
  gap: 8px;
}
.lane-chip {
  display: flex;
  justify-content: space-between;
  align-items: center;
  gap: 7px;
  border-radius: 14px;
  padding: 9px 10px;
  border: 1px solid rgba(9, 95, 59, .16);
  background: #fff;
  color: var(--charcoal);
}

</style>
<?php
}

function upsi_section_admin_payments_scripts(): void
{
?>
<script>
/* =========================================================
   V108 JavaScript chunk 12/22
   Bahagian: Admin Payments
   ========================================================= */
(function v41LaneAndProfilePatch() {
  const LANE_TABLE = 'driving_range_lanes';
  const DEFAULT_LANES = ['KD01','KD02','KD03','KD04','KD05','KD06','KD07','KD08','KD09','KD10'];
  const DURATION_OPTIONS_V41 = [
    { label: '1 hour', minutes: 60 },
    { label: '1 hour 30 minutes', minutes: 90 },
    { label: '2 hours', minutes: 120 },
  ];
  const PAYMENT_METHODS_V41 = ['QR Payment', 'Pay at Counter'];

  DB_TABLES.lanes = DB_TABLES.lanes || LANE_TABLE;

  function laneStatusToLocal(status = '') {
    return String(status || '').toLowerCase() === 'inactive' ? 'Unavailable' : 'Available';
  }

  function laneStatusToDb(status = '') {
    return String(status || '').toLowerCase().startsWith('un') || String(status || '').toLowerCase() === 'inactive' ? 'inactive' : 'active';
  }

  function normaliseLaneRecord(row = {}) {
    const code = row.lane_code || row.laneCode || row.code || row.lane_name || row.laneName || row.name || '';
    return {
      id: row.id || code,
      laneCode: String(code || '').trim(),
      laneName: String(row.lane_name || row.laneName || code || '').trim(),
      status: laneStatusToLocal(row.status || row.laneStatus || 'active'),
      createdAt: row.created_at || row.createdAt || new Date().toISOString(),
    };
  }

  function getLaneRecordsV41() {
    const settings = read('settings') || {};
    let records = Array.isArray(settings.drivingRangeLaneRecords) ? settings.drivingRangeLaneRecords : [];
    if (!records.length && Array.isArray(settings.drivingRangeLanes) && settings.drivingRangeLanes.length) {
      records = settings.drivingRangeLanes.map((code) => ({ id: code, laneCode: code, laneName: code, status: 'Available' }));
    }
    if (!records.length) records = DEFAULT_LANES.map((code) => ({ id: code, laneCode: code, laneName: code, status: 'Available' }));
    return records.map(normaliseLaneRecord).filter((lane) => lane.laneCode);
  }

  function setLaneRecordsV41(records = []) {
    const settings = read('settings') || {};
    const clean = records.map(normaliseLaneRecord).filter((lane) => lane.laneCode);
    settings.drivingRangeLaneRecords = clean;
    settings.drivingRangeLanes = clean.filter((lane) => lane.status === 'Available').map((lane) => lane.laneCode);
    setLocalData('settings', settings);
    return clean;
  }

  async function loadLaneRecordsFromSupabaseV41() {
    if (!SUPABASE_MODE || !supabaseClient) return getLaneRecordsV41();
    try {
      const { data, error } = await supabaseClient
        .from(DB_TABLES.lanes)
        .select('*')
        .order('lane_code', { ascending: true });
      if (error) {
        console.warn('V41 lanes not loaded. Run V41 SQL if needed:', error.message || error);
        return getLaneRecordsV41();
      }
      const records = (data || []).map(normaliseLaneRecord);
      return setLaneRecordsV41(records.length ? records : DEFAULT_LANES.map((code) => ({ laneCode: code, laneName: code, status: 'Available' })));
    } catch (err) {
      console.warn('V41 lane load failed:', err);
      return getLaneRecordsV41();
    }
  }

  async function saveLaneToSupabaseV41(lane = {}) {
    const clean = normaliseLaneRecord(lane);
    if (!clean.laneCode) return { data: null, error: new Error('Lane code is required.') };
    if (!SUPABASE_MODE || !supabaseClient) {
      const lanes = getLaneRecordsV41();
      const index = lanes.findIndex((item) => item.id === clean.id || item.laneCode.toLowerCase() === clean.laneCode.toLowerCase());
      if (index >= 0) lanes[index] = clean;
      else lanes.push(clean);
      setLaneRecordsV41(lanes);
      return { data: clean, error: null };
    }
    const payload = {
      lane_code: clean.laneCode,
      lane_name: clean.laneName || clean.laneCode,
      status: laneStatusToDb(clean.status),
    };
    let query;
    if (clean.id && isUuid(clean.id)) {
      query = supabaseClient.from(DB_TABLES.lanes).update(payload).eq('id', clean.id);
    } else {
      query = supabaseClient.from(DB_TABLES.lanes).upsert(payload, { onConflict: 'lane_code' });
    }
    const { data, error } = await query.select().maybeSingle();
    if (error) console.error('V41 lane save error:', error);
    await loadLaneRecordsFromSupabaseV41();
    return { data, error };
  }

  async function deleteLaneFromSupabaseV41(lane = {}) {
    const clean = normaliseLaneRecord(lane);
    if (!SUPABASE_MODE || !supabaseClient) {
      setLaneRecordsV41(getLaneRecordsV41().filter((item) => item.id !== clean.id && item.laneCode !== clean.laneCode));
      return { error: null };
    }
    let query = supabaseClient.from(DB_TABLES.lanes).delete();
    if (clean.id && isUuid(clean.id)) query = query.eq('id', clean.id);
    else query = query.eq('lane_code', clean.laneCode);
    const { error } = await query;
    if (error) {
      // If delete is blocked by dependencies/RLS, fall back to inactive so users cannot select it.
      console.warn('V41 lane delete blocked; setting inactive instead:', error.message || error);
      return await saveLaneToSupabaseV41({ ...clean, status: 'Unavailable' });
    }
    await loadLaneRecordsFromSupabaseV41();
    return { error: null };
  }

  function parseClockV41(value = '') {
    if (typeof parseClockToMinutes === 'function') return parseClockToMinutes(value);
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
    return m24 ? Number(m24[1]) * 60 + Number(m24[2]) : 0;
  }

  function minutesToDisplayV41(total) {
    if (typeof minutesToDisplay === 'function') return minutesToDisplay(total);
    let mins = Number(total || 0) % (24 * 60);
    if (mins < 0) mins += 24 * 60;
    let h = Math.floor(mins / 60);
    const m = mins % 60;
    const ap = h >= 12 ? 'PM' : 'AM';
    h = h % 12;
    if (h === 0) h = 12;
    return `${h}:${String(m).padStart(2, '0')} ${ap}`;
  }

  function addMinutesDisplayV41(start, minutes) {
    if (typeof addMinutesToDisplayTime === 'function') return addMinutesToDisplayTime(start, minutes);
    return minutesToDisplayV41(parseClockV41(start) + Number(minutes || 0));
  }

  function cleanDateV41(value) {
    return String(value || '').slice(0, 10);
  }

  function isActiveDrivingBookingV41(booking = {}) {
    const status = String(booking.bookingStatus || '').toLowerCase();
    return booking.bookingType === 'driving' && !status.includes('cancel') && !status.includes('reject') && !status.includes('expired');
  }

  function laneBookedMapV41(date, time, durationMinutes = 60, excludedBookingId = '') {
    const booked = new Set();
    const start = parseClockV41(time);
    const end = start + Number(durationMinutes || 60);
    read('bookings').forEach((booking) => {
      if (!isActiveDrivingBookingV41(booking)) return;
      if (booking.id === excludedBookingId) return;
      if (cleanDateV41(booking.date) !== cleanDateV41(date)) return;
      const lane = booking.laneId || booking.lane;
      if (!lane) return;
      const bStart = parseClockV41(booking.startTime || booking.time);
      const bEnd = bStart + Number(booking.durationMinutes || 60);
      if (start < bEnd && end > bStart) booked.add(lane);
    });
    return booked;
  }

  function getLaneAvailabilityV41(date = '', time = '', durationMinutes = 60) {
    const booked = date && time ? laneBookedMapV41(date, time, durationMinutes) : new Set();
    return getLaneRecordsV41().map((lane) => {
      const inactive = lane.status !== 'Available';
      const isBooked = booked.has(lane.laneCode);
      return {
        ...lane,
        computedStatus: inactive ? 'Unavailable' : (isBooked ? 'Booked' : 'Available'),
      };
    });
  }

  function laneOptionsMarkupV41(date = '', time = '', durationMinutes = 60, selected = '') {
    const available = getLaneAvailabilityV41(date, time, durationMinutes).filter((lane) => lane.computedStatus === 'Available');
    return available.map((lane) => `<option value="${escapeHtml(lane.laneCode)}" ${lane.laneCode === selected ? 'selected' : ''}>${escapeHtml(lane.laneCode)}${lane.laneName && lane.laneName !== lane.laneCode ? ` - ${escapeHtml(lane.laneName)}` : ''}</option>`).join('') || '<option value="">No lane available</option>';
  }

  function laneStatusPanelV41(date = '', time = '', durationMinutes = 60) {
    const lanes = getLaneAvailabilityV41(date, time, durationMinutes);
    return `
      <div class="lane-status-panel" data-lane-status-panel>
        <div class="lane-status-head"><strong>Lane Availability</strong><span>${date && time ? `${escapeHtml(formatDateDisplay(date))} • ${escapeHtml(time)}` : 'Choose date and time to check booking status'}</span></div>
        <div class="lane-chip-grid">
          ${lanes.map((lane) => `<span class="lane-chip ${lane.computedStatus.toLowerCase()}"><b>${escapeHtml(lane.laneCode)}</b><small>${escapeHtml(lane.computedStatus)}</small></span>`).join('')}
        </div>
      </div>
    `;
  }

  function durationOptionsMarkupV41(selected = 60) {
    return DURATION_OPTIONS_V41.map((item) => `<option value="${item.minutes}" ${Number(selected) === item.minutes ? 'selected' : ''}>${escapeHtml(item.label)}</option>`).join('');
  }

  function paymentMethodOptionsMarkupV41(selected = 'QR Payment') {
    return PAYMENT_METHODS_V41.map((item) => `<option value="${escapeHtml(item)}" ${item === selected ? 'selected' : ''}>${escapeHtml(item)}</option>`).join('');
  }

  async function syncCurrentBookingToSupabaseV41(bookings = []) {
    if (!SUPABASE_MODE || !supabaseClient) return;
    try {
      await syncBookingsToSupabase(bookings);
      await loadSupabaseDataToLocal({ requireAuth: true });
    } catch (err) {
      console.error('V41 booking sync failed:', err);
      toast('Booking saved locally but failed to sync to Supabase. Check Console.');
    }
  }

  // Fix V40 profile save crash caused by missing updateLocalUser().
  updateProfileInSupabaseFromUser = async function updateProfileInSupabaseFromUserV41(user = {}) {
    if (!SUPABASE_MODE || !supabaseClient) return { data: null, error: null };
    const payload = {
      full_name: user.fullName || user.email || 'User',
      phone: user.phone || null,
      address: user.address || null,
      profile_image_url: user.profileImage || null,
      age: user.age ? Number(user.age) : null,
      birthday: user.birthday || null,
      login_provider: user.loginProvider || 'Email',
      status: accountStatusToDb(user.status || 'Active'),
    };
    let query = supabaseClient.from(DB_TABLES.profiles).update(payload);
    if (user.userId && isUuid(user.userId)) query = query.eq('user_id', user.userId);
    else if (user.id && isUuid(user.id)) query = query.eq('id', user.id);
    else if (user.email) query = query.eq('email', String(user.email).toLowerCase());
    else return { data: null, error: new Error('Profile identifier is missing.') };
    const { data, error } = await query.select().maybeSingle();
    if (error) console.error('V41 profile update error:', error);
    return { data, error };
  };

  updateLocalUser = function updateLocalUserV41(updatedUser = {}) {
    const clean = { ...(getFreshSessionUser() || {}), ...updatedUser };
    const users = read('users');
    const index = users.findIndex((user) => user.id === clean.id || user.email?.toLowerCase() === clean.email?.toLowerCase());
    if (index >= 0) users[index] = { ...users[index], ...clean };
    else users.push(clean);
    setLocalData('users', users);
    if (state.session && (state.session.id === clean.id || state.session.email?.toLowerCase() === clean.email?.toLowerCase())) {
      setSession({ ...state.session, ...clean });
    }
    return clean;
  };

  saveCurrentProfileToSupabase = async function saveCurrentProfileToSupabaseV41({ fullName, phone, age, birthday, address, loginProvider = 'Email', profileImage }) {
    const current = getFreshSessionUser();
    if (!current) {
      toast('Please login again before saving profile.');
      return null;
    }
    const user = {
      ...current,
      fullName: String(fullName || '').trim(),
      phone: String(phone || '').trim(),
      age: age ? String(age) : '',
      birthday: birthday || '',
      address: String(address || '').trim(),
      loginProvider: loginProvider || current.loginProvider || 'Email',
    };
    if (profileImage !== undefined) user.profileImage = profileImage;
    const { data, error } = await updateProfileInSupabaseFromUser(user);
    if (error) {
      toast(error.message || 'Failed to update profile in Supabase. Run V40/V41 SQL if profile columns are missing.');
      return null;
    }
    const freshUser = data ? profileToUser(data) : user;
    updateLocalUser(freshUser);
    return freshUser;
  };

  const baseLoadSupabaseDataToLocalV41 = loadSupabaseDataToLocal;
  loadSupabaseDataToLocal = async function loadSupabaseDataToLocalV41(options = {}) {
    const result = await baseLoadSupabaseDataToLocalV41(options);
    await loadLaneRecordsFromSupabaseV41();
    return result;
  };

  courseCard = function courseCardV41(course) {
    const buckets = getBucketOptions(course);
    const laneSummary = getLaneAvailabilityV41('', '', 60);
    const activeCount = laneSummary.filter((lane) => lane.status === 'Available').length;
    const inactiveCount = laneSummary.length - activeCount;
    return `
      <article class="card driving-card-clean">
        <div class="card-top">
          <div><p class="eyebrow">Driving Range</p><h3>${escapeHtml(course.name)}</h3></div>
          <div class="card-icon">⛳</div>
        </div>
        <p>${escapeHtml(course.description)}</p>
        <div class="price-reference-box compact-price-box">
          <strong>Non-member</strong>
          ${buckets.map((bucket) => `<span>${escapeHtml(bucket.label)} - RM ${formatPlainMoney(bucket.nonMemberPrice)}</span>`).join('')}
          <strong>Member</strong>
          ${buckets.map((bucket) => `<span>${escapeHtml(bucket.label)} - RM ${formatPlainMoney(bucket.memberPrice)}</span>`).join('')}
        </div>
        <ul class="meta-list">
          <li><span>Location</span><strong>${escapeHtml(course.location)}</strong></li>
          <li><span>Bucket Limit</span><strong>1 to ${escapeHtml(course.maxBucketCount || 10)}</strong></li>
          <li><span>Lane Status</span><strong>${activeCount} available${inactiveCount ? ` • ${inactiveCount} unavailable` : ''}</strong></li>
          <li><span>Available Date & Time</span><strong>${escapeHtml(availabilitySummary('driving', course.id))}</strong></li>
        </ul>
        ${laneStatusPanelV41('', '', 60)}
        <div class="card-actions"><button class="btn btn-primary" data-book-course="${course.id}">Book Driving Range</button></div>
      </article>
    `;
  };

  drivingRangeBookingLayout = function drivingRangeBookingLayoutV41(course = null) {
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
            <div class="range-control active-control"><span class="field-icon">👤</span><select name="membershipType" required><option value="non-member" selected>Non-member</option><option value="member">Member</option></select></div>
          </label>
          <label class="range-field">Ball bucket
            <div class="range-control"><span class="field-icon">🗃️</span><select name="bucketOptionId" required>${bucketOptions.map((bucket) => `<option value="${bucket.id}" ${bucket.id === selectedBucket.id ? 'selected' : ''}>${escapeHtml(bucket.label)}</option>`).join('')}</select></div>
          </label>
          <div class="bucket-info" data-bucket-info><span class="info-icon">⛳</span><div><p>${escapeHtml(selectedBucket.description)}</p><strong>${escapeHtml(selectedBucket.label)} per bucket - RM ${formatPlainMoney(bucketUnitPrice(selectedBucket, selectedMembership))} (${membershipLabel(selectedMembership)})</strong></div></div>
          <label class="range-field">Select date
            <div class="range-control"><span class="field-icon">📅</span><select name="date" required>${dateOptionMarkup(availableDates, selectedDate)}</select></div>
          </label>
          <label class="range-field">Select time
            <div class="range-control"><span class="field-icon">🕘</span><select name="time" required>${timeOptionMarkup(availableTimes, selectedTime)}</select></div>
          </label>
          <label class="range-field">Duration
            <div class="range-control"><span class="field-icon">⏱️</span><select name="durationMinutes" required>${durationOptionsMarkupV41(initialDuration)}</select></div>
          </label>
          <label class="range-field">Select available lane
            <div class="range-control"><span class="field-icon">🏌️</span><select name="laneId" required>${laneOptionsMarkupV41(selectedDate, selectedTime, initialDuration)}</select></div>
          </label>
          <div class="wide" data-lane-panel-wrap>${laneStatusPanelV41(selectedDate, selectedTime, initialDuration)}</div>
          <div class="calculation-row app-compatible-preview"><div><span>⏰</span> <span data-range-time-preview>${selectedTime ? `${selectedTime} - ${addMinutesDisplayV41(selectedTime, initialDuration)}` : 'Choose time'}</span></div><strong data-range-lane-preview>${escapeHtml((getLaneAvailabilityV41(selectedDate, selectedTime, initialDuration).find((lane) => lane.computedStatus === 'Available') || {}).laneCode || 'No lane available')}</strong></div>
          <label class="range-field">Number of buckets
            <div class="range-control active-control"><span class="field-icon">🧺</span><select name="bucketCount" required>${bucketCounts.map((count) => `<option value="${count}">${count} ${count === 1 ? 'bucket' : 'buckets'}</option>`).join('')}</select></div>
          </label>
          <label class="range-field">Payment method
            <div class="range-control"><span class="field-icon">💳</span><select name="paymentMethod" required>${paymentMethodOptionsMarkupV41('QR Payment')}</select></div>
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

  bindDrivingRangeBookingForm = function bindDrivingRangeBookingFormV41(courseId = '') {
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
      const currentLane = form.laneId?.value;
      if (form.laneId) form.laneId.innerHTML = laneOptionsMarkupV41(form.date.value, form.time.value, duration, currentLane);
      const firstLane = form.laneId?.value || '';
      const info = form.querySelector('[data-bucket-info]');
      if (info) info.innerHTML = `<span class="info-icon">⛳</span><div><p>${escapeHtml(bucket.description)}</p><strong>${escapeHtml(bucket.label)} per bucket - RM ${formatPlainMoney(unitPrice)} (${membershipLabel(membershipType)})</strong></div>`;
      form.querySelector('[data-range-formula]').textContent = `${membershipLabel(membershipType)} • ${count} × ${bucket.balls} balls = ${totalBalls} balls`;
      form.querySelector('[data-range-total]').textContent = `RM ${formatPlainMoney(amount)}`;
      form.querySelector('[data-range-payment-total]').textContent = `RM ${formatPlainMoney(amount)}`;
      form.querySelector('[data-range-time-preview]').textContent = form.time.value ? `${form.time.value} - ${addMinutesDisplayV41(form.time.value, duration)}` : 'Choose time';
      form.querySelector('[data-range-lane-preview]').textContent = firstLane || 'No lane available';
      const wrap = form.querySelector('[data-lane-panel-wrap]');
      if (wrap) wrap.innerHTML = laneStatusPanelV41(form.date.value, form.time.value, duration);
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
    refreshScheduleOptions();
    form.addEventListener('submit', async (event) => {
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
      const newBooking = {
        id: makeId('B'), bookingType: 'driving', userId: state.session.id, customerName: state.session.fullName, customerEmail: state.session.email,
        courseId: course.id, courseName: course.name, trainerId: '', trainerName: 'No trainer', bucketOptionId: bucket.id, bucketLabel: bucket.label,
        bucketBalls: bucket.balls, bucketPrice: unitPrice, membershipType, bucketCount: count, totalBalls: bucket.balls * count,
        date: form.date.value, time: form.time.value, startTime: form.time.value, endTime: addMinutesDisplayV41(form.time.value, durationMinutes),
        duration: DURATION_OPTIONS_V41.find((d) => d.minutes === durationMinutes)?.label || `${durationMinutes} minutes`, durationMinutes,
        lane: laneId, laneId, amount, bookingStatus: 'Pending Confirmation', paymentStatus: paymentMethod === 'QR Payment' ? 'Pending Verification' : 'Pay at Counter', paymentMethod,
        paymentReference: '', receiptNumber: '', receiptNote: '', receiptImage: '', hiddenForUsers: [], hiddenForAdmin: false, cancelReason: '', cancelledBy: '', cancelledById: '', cancellationType: '', cancelledAt: '', createdAt: new Date().toISOString(),
      };
      bookings.unshift(newBooking);
      write('bookings', bookings);
      await syncCurrentBookingToSupabaseV41(bookings);
      state.currentPage = 'mybookings';
      renderNav();
      renderPage();
      toast('Driving range booking submitted and synced.');
    });
  };

  function lanesAdminSectionV41() {
    const lanes = getLaneRecordsV41();
    return `
      <div class="card settings-system-card strong-border-card lane-management-card">
        <div class="card-top">
          <div>
            <p class="eyebrow">Driving Range Lane Setup</p>
            <h2>Lane availability and status</h2>
            <p class="muted">Edit lane code/name and choose whether each lane is available for user booking.</p>
          </div>
          <button class="btn btn-primary" type="button" data-add-lane>Add Lane</button>
        </div>
        <div class="table-card"><div class="table-wrap"><table>
          <thead><tr><th>Lane Code</th><th>Lane Name</th><th>Status</th><th>Action</th></tr></thead>
          <tbody>
            ${lanes.map((lane) => `
              <tr>
                <td><strong>${escapeHtml(lane.laneCode)}</strong></td>
                <td>${escapeHtml(lane.laneName || lane.laneCode)}</td>
                <td>${statusPill(lane.status)}</td>
                <td class="row-actions">
                  <button class="btn btn-soft" type="button" data-edit-lane="${escapeHtml(lane.id)}">Edit</button>
                  <button class="btn btn-danger-soft" type="button" data-delete-lane="${escapeHtml(lane.id)}">Delete</button>
                </td>
              </tr>
            `).join('') || `<tr><td colspan="4">No lane record yet.</td></tr>`}
          </tbody>
        </table></div></div>
      </div>
    `;
  }

  adminCourses = function adminCoursesV41() {
    setTitle('Driving Range', 'Administrator Panel');
    if (SUPABASE_MODE && !state.v41LaneLoaded) {
      state.v41LaneLoaded = true;
      loadLaneRecordsFromSupabaseV41().then(() => {
        if (state.currentPage === 'courses') adminCourses();
      });
    }
    const courses = getDrivingCourses(read('courses'));
    const drivingCourse = getDrivingCourse(courses);
    const bucketOptions = getBucketOptions(drivingCourse);
    content().innerHTML = `
      <div class="toolbar">
        <div><p class="eyebrow">Driving Range Management</p><h2>Manage range details, membership pricing and lanes</h2></div>
        <button class="btn btn-primary" data-add-course>Add Driving Range</button>
      </div>

      <div class="admin-range-preview clean-admin-range">
        <div class="mobile-booking-heading">
          <div>
            <p class="eyebrow">Admin Preview</p>
            <h2>${escapeHtml(drivingCourse?.name || 'UPSI Driving Golf Range')}</h2>
            <p class="muted">This section controls the Driving Range details shown on User Home and Booking pages.</p>
          </div>
          <div class="card-actions"><button class="btn btn-primary" data-edit-course="${escapeHtml(drivingCourse?.id || '')}">Edit Details & Prices</button></div>
        </div>
        <div class="price-list-panel">
          <div class="price-column"><h3>Non-member</h3>${bucketOptions.map((bucket) => `<p>${escapeHtml(bucket.label)} - RM ${formatPlainMoney(bucket.nonMemberPrice)}</p>`).join('')}</div>
          <div class="price-column"><h3>Member</h3>${bucketOptions.map((bucket) => `<p>${escapeHtml(bucket.label)} - RM ${formatPlainMoney(bucket.memberPrice)}</p>`).join('')}</div>
          <div class="price-column"><h3>Booking Limit</h3><p>Number of buckets: 1 to ${escapeHtml(drivingCourse?.maxBucketCount || 10)}</p><p>${escapeHtml(drivingCourse?.location || 'UPSI Driving Range')}</p></div>
        </div>
      </div>

      <div style="height:22px"></div>
      ${lanesAdminSectionV41()}
      <div style="height:22px"></div>
      <div class="card-grid">${courses.map((course) => adminCourseCard(course)).join('') || empty('No driving range record.')}</div>
    `;
    content().querySelector('[data-add-course]')?.addEventListener('click', () => openCourseForm());
    bindAdminCourseButtons();
    bindLaneAdminButtonsV41();
  };

  function openLaneFormV41(lane = null) {
    const clean = normaliseLaneRecord(lane || { laneCode: '', laneName: '', status: 'Available' });
    openModal(`
      <div class="modal-head">
        <div><p class="eyebrow">Driving Range Lane</p><h2>${lane ? 'Edit Lane' : 'Add Lane'}</h2><p class="muted">Lane records are shared between website and app through Supabase.</p></div>
        <button class="close-btn" data-close-modal>&times;</button>
      </div>
      <form id="laneForm" class="form-grid">
        <label>Lane Code<input name="laneCode" value="${escapeHtml(clean.laneCode)}" placeholder="Example: KD01" required></label>
        <label>Lane Name<input name="laneName" value="${escapeHtml(clean.laneName || clean.laneCode)}" placeholder="Example: Bay KD01" required></label>
        <label>Status<select name="status"><option ${clean.status === 'Available' ? 'selected' : ''}>Available</option><option ${clean.status === 'Unavailable' ? 'selected' : ''}>Unavailable</option></select></label>
        <button class="btn btn-primary wide" type="submit">Save Lane</button>
      </form>
    `);
    const form = document.getElementById('laneForm');
    form.addEventListener('submit', async (event) => {
      event.preventDefault();
      const formData = new FormData(form);
      const payload = {
        id: clean.id,
        laneCode: String(formData.get('laneCode') || '').trim().toUpperCase(),
        laneName: String(formData.get('laneName') || '').trim(),
        status: String(formData.get('status') || 'Available'),
      };
      if (!payload.laneCode) return toast('Lane code is required.');
      const { error } = await saveLaneToSupabaseV41(payload);
      if (error) return toast(error.message || 'Failed to save lane. Check Supabase policy.');
      state.v41LaneLoaded = false;
      closeModal();
      await loadLaneRecordsFromSupabaseV41();
      adminCourses();
      toast('Lane saved to Supabase.');
    });
  }

  function bindLaneAdminButtonsV41() {
    content().querySelector('[data-add-lane]')?.addEventListener('click', () => openLaneFormV41());
    content().querySelectorAll('[data-edit-lane]').forEach((btn) => btn.addEventListener('click', () => {
      const lane = getLaneRecordsV41().find((item) => String(item.id) === String(btn.dataset.editLane));
      openLaneFormV41(lane);
    }));
    content().querySelectorAll('[data-delete-lane]').forEach((btn) => btn.addEventListener('click', () => {
      const lane = getLaneRecordsV41().find((item) => String(item.id) === String(btn.dataset.deleteLane));
      if (!lane) return toast('Lane record not found.');
      confirmAction({
        title: 'Delete Lane',
        message: `Are you sure you want to delete ${lane.laneCode}? If Supabase blocks deletion, the lane will be marked as Unavailable instead.`,
        confirmText: 'Delete Lane',
        danger: true,
        onConfirm: async () => {
          const { error } = await deleteLaneFromSupabaseV41(lane);
          if (error) return toast(error.message || 'Failed to delete lane.');
          state.v41LaneLoaded = false;
          await loadLaneRecordsFromSupabaseV41();
          adminCourses();
          toast('Lane updated in Supabase.');
        },
      });
    }));
  }

  // Load lanes once after script boot if Supabase is ready.
  setTimeout(() => { loadLaneRecordsFromSupabaseV41().catch(() => {}); }, 500);
})();

/* V42 Feedback Category + Lane Availability Fix
   - Hide booked/unavailable lanes from user booking dropdown.
   - Show lane availability clearly in booking modal.
   - Remove star rating from user feedback because Flutter app does not use rating.
   - Show feedback category on user/admin feedback cards.
*/
(function v42FeedbackAndLanePatch() {
  const DEFAULT_LANES_V42 = ['KD01','KD02','KD03','KD04','KD05','KD06','KD07','KD08','KD09','KD10'];
  const DURATION_OPTIONS_V42 = [
    { label: '1 hour', minutes: 60 },
    { label: '1 hour 30 minutes', minutes: 90 },
    { label: '2 hours', minutes: 120 },
  ];
  const PAYMENT_METHODS_V42 = ['QR Payment', 'Pay at Counter'];

  function normaliseTextV42(value = '') {
    return String(value || '').trim().toLowerCase();
  }

  function cleanDateV42(value = '') {
    return String(value || '').slice(0, 10);
  }

  function parseClockV42(value = '') {
    const text = String(value || '').trim();
    if (!text) return 0;
    const m12 = text.match(/^(\d{1,2})(?::(\d{2}))?\s*(AM|PM)$/i);
    if (m12) {
      let hour = Number(m12[1]);
      const minute = Number(m12[2] || 0);
      const ap = m12[3].toUpperCase();
      if (ap === 'PM' && hour !== 12) hour += 12;
      if (ap === 'AM' && hour === 12) hour = 0;
      return hour * 60 + minute;
    }
    const m24 = text.match(/^(\d{1,2}):(\d{2})(?::\d{2})?$/);
    return m24 ? Number(m24[1]) * 60 + Number(m24[2]) : 0;
  }

  function minutesToDisplayV42(totalMinutes = 0) {
    if (typeof minutesToDisplay === 'function') return minutesToDisplay(totalMinutes);
    let mins = Number(totalMinutes || 0) % (24 * 60);
    if (mins < 0) mins += 24 * 60;
    let hour = Math.floor(mins / 60);
    const minute = mins % 60;
    const ap = hour >= 12 ? 'PM' : 'AM';
    hour = hour % 12;
    if (hour === 0) hour = 12;
    return `${hour}:${String(minute).padStart(2, '0')} ${ap}`;
  }

  function addMinutesDisplayV42(start = '', minutes = 60) {
    if (typeof addMinutesToDisplayTime === 'function') return addMinutesToDisplayTime(start, minutes);
    return minutesToDisplayV42(parseClockV42(start) + Number(minutes || 0));
  }

  function laneStatusToLocalV42(status = '') {
    return String(status || '').toLowerCase() === 'inactive' || String(status || '').toLowerCase().startsWith('un') ? 'Unavailable' : 'Available';
  }

  function normaliseLaneRecordV42(row = {}) {
    const code = row.lane_code || row.laneCode || row.code || row.lane_name || row.laneName || row.name || row.id || '';
    return {
      id: row.id || code,
      laneCode: String(code || '').trim(),
      laneName: String(row.lane_name || row.laneName || code || '').trim(),
      status: laneStatusToLocalV42(row.status || row.laneStatus || 'active'),
      createdAt: row.created_at || row.createdAt || new Date().toISOString(),
    };
  }

  function getLaneRecordsV42() {
    const settings = read('settings') || {};
    let records = Array.isArray(settings.drivingRangeLaneRecords) ? settings.drivingRangeLaneRecords : [];
    if (!records.length && Array.isArray(settings.drivingRangeLanes) && settings.drivingRangeLanes.length) {
      records = settings.drivingRangeLanes.map((code) => ({ id: code, laneCode: code, laneName: code, status: 'Available' }));
    }
    if (!records.length) records = DEFAULT_LANES_V42.map((code) => ({ id: code, laneCode: code, laneName: code, status: 'Available' }));
    return records.map(normaliseLaneRecordV42).filter((lane) => lane.laneCode);
  }

  function isDrivingBookingV42(booking = {}) {
    const type = normaliseTextV42(booking.bookingType || booking.booking_type || '');
    return type === 'driving' || type === 'driving range' || type === 'driving_range' || type.includes('driving');
  }

  function isActiveLaneBlockingBookingV42(booking = {}) {
    if (!isDrivingBookingV42(booking)) return false;
    const bookingStatus = normaliseTextV42(booking.bookingStatus || booking.booking_status || '');
    const paymentStatus = normaliseTextV42(booking.paymentStatus || booking.payment_status || '');
    const cancelType = normaliseTextV42(booking.cancellationType || booking.cancellation_type || '');
    const notActive = bookingStatus.includes('cancel') || bookingStatus.includes('reject') || bookingStatus.includes('expired') ||
      paymentStatus.includes('reject') || cancelType.includes('cancel') || cancelType.includes('reject');
    return !notActive;
  }

  function bookingLaneCodeV42(booking = {}) {
    return String(booking.laneId || booking.lane || booking.lane_label || booking.lane_id || '').trim();
  }

  function laneBookedMapV42(date = '', time = '', durationMinutes = 60, excludedBookingId = '') {
    const booked = new Set();
    const selectedDate = cleanDateV42(date);
    const selectedStart = parseClockV42(time);
    const selectedEnd = selectedStart + Number(durationMinutes || 60);
    read('bookings').forEach((booking) => {
      if (!isActiveLaneBlockingBookingV42(booking)) return;
      if (excludedBookingId && booking.id === excludedBookingId) return;
      if (cleanDateV42(booking.date || booking.slot_date) !== selectedDate) return;
      const lane = bookingLaneCodeV42(booking);
      if (!lane) return;
      const bookingStart = parseClockV42(booking.startTime || booking.time || booking.slot_time);
      const bookingEnd = booking.endTime ? parseClockV42(booking.endTime) : bookingStart + Number(booking.durationMinutes || 60);
      if (selectedStart < bookingEnd && selectedEnd > bookingStart) {
        booked.add(lane.toLowerCase());
      }
    });
    return booked;
  }

  function getLaneAvailabilityV42(date = '', time = '', durationMinutes = 60) {
    const booked = date && time ? laneBookedMapV42(date, time, durationMinutes) : new Set();
    return getLaneRecordsV42().map((lane) => {
      const unavailable = lane.status !== 'Available';
      const bookedNow = booked.has(lane.laneCode.toLowerCase());
      return {
        ...lane,
        computedStatus: unavailable ? 'Unavailable' : (bookedNow ? 'Booked' : 'Available'),
      };
    });
  }

  function laneOptionsMarkupV42(date = '', time = '', durationMinutes = 60, selected = '') {
    const available = getLaneAvailabilityV42(date, time, durationMinutes).filter((lane) => lane.computedStatus === 'Available');
    const stillAvailable = available.some((lane) => lane.laneCode === selected);
    const selectedValue = stillAvailable ? selected : (available[0]?.laneCode || '');
    if (!available.length) return '<option value="">No lane available</option>';
    return available.map((lane) => `<option value="${escapeHtml(lane.laneCode)}" ${lane.laneCode === selectedValue ? 'selected' : ''}>${escapeHtml(lane.laneCode)}${lane.laneName && lane.laneName !== lane.laneCode ? ` - ${escapeHtml(lane.laneName)}` : ''}</option>`).join('');
  }

  function laneStatusPanelV42(date = '', time = '', durationMinutes = 60) {
    const lanes = getLaneAvailabilityV42(date, time, durationMinutes);
    return `
      <div class="lane-status-panel" data-lane-status-panel>
        <div class="lane-status-head">
          <strong>Lane Availability</strong>
          <span>${date && time ? `${escapeHtml(formatDateDisplay(date))} • ${escapeHtml(time)}` : 'Choose date and time to check lane status'}</span>
        </div>
        <div class="lane-chip-grid">
          ${lanes.map((lane) => `<span class="lane-chip ${lane.computedStatus.toLowerCase()}"><b>${escapeHtml(lane.laneCode)}</b><small>${escapeHtml(lane.computedStatus)}</small></span>`).join('')}
        </div>
      </div>
    `;
  }

  function durationOptionsMarkupV42(selected = 60) {
    return DURATION_OPTIONS_V42.map((item) => `<option value="${item.minutes}" ${Number(selected) === item.minutes ? 'selected' : ''}>${escapeHtml(item.label)}</option>`).join('');
  }

  function paymentMethodOptionsMarkupV42(selected = 'QR Payment') {
    return PAYMENT_METHODS_V42.map((item) => `<option value="${escapeHtml(item)}" ${item === selected ? 'selected' : ''}>${escapeHtml(item)}</option>`).join('');
  }

  async function syncCurrentBookingToSupabaseV42(bookings = []) {
    if (!SUPABASE_MODE || !supabaseClient) return;
    try {
      await syncBookingsToSupabase(bookings);
      await loadSupabaseDataToLocal({ requireAuth: true });
    } catch (err) {
      console.error('V42 booking sync failed:', err);
      toast('Booking saved locally but failed to sync to Supabase. Check Console.');
    }
  }

  const baseCourseCardV42 = courseCard;
  courseCard = function courseCardV42(course) {
    if (!isDrivingCourse(course)) return baseCourseCardV42(course);
    const buckets = getBucketOptions(course);
    const laneSummary = getLaneAvailabilityV42('', '', 60);
    const activeCount = laneSummary.filter((lane) => lane.status === 'Available').length;
    const inactiveCount = laneSummary.length - activeCount;
    return `
      <article class="card driving-card-clean">
        <div class="card-top">
          <div><p class="eyebrow">Driving Range</p><h3>${escapeHtml(course.name)}</h3></div>
          <div class="card-icon">⛳</div>
        </div>
        <p>${escapeHtml(course.description)}</p>
        <div class="price-reference-box compact-price-box">
          <strong>Non-member</strong>
          ${buckets.map((bucket) => `<span>${escapeHtml(bucket.label)} - RM ${formatPlainMoney(bucket.nonMemberPrice)}</span>`).join('')}
          <strong>Member</strong>
          ${buckets.map((bucket) => `<span>${escapeHtml(bucket.label)} - RM ${formatPlainMoney(bucket.memberPrice)}</span>`).join('')}
        </div>
        <ul class="meta-list">
          <li><span>Location</span><strong>${escapeHtml(course.location)}</strong></li>
          <li><span>Bucket Limit</span><strong>1 to ${escapeHtml(course.maxBucketCount || 10)}</strong></li>
          <li><span>Lane Status</span><strong>${activeCount} active${inactiveCount ? ` • ${inactiveCount} inactive` : ''}</strong></li>
          <li><span>Available Date & Time</span><strong>${escapeHtml(availabilitySummary('driving', course.id))}</strong></li>
        </ul>
        ${laneStatusPanelV42('', '', 60)}
        <div class="card-actions"><button class="btn btn-primary" data-book-course="${course.id}">Book Driving Range</button></div>
      </article>
    `;
  };

  drivingRangeBookingLayout = function drivingRangeBookingLayoutV42(course = null) {
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
    const initialAvailableLane = getLaneAvailabilityV42(selectedDate, selectedTime, initialDuration).find((lane) => lane.computedStatus === 'Available')?.laneCode || '';
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
            <div class="range-control active-control"><span class="field-icon">👤</span><select name="membershipType" required><option value="non-member" selected>Non-member</option><option value="member">Member</option></select></div>
          </label>
          <label class="range-field">Ball bucket
            <div class="range-control"><span class="field-icon">🗃️</span><select name="bucketOptionId" required>${bucketOptions.map((bucket) => `<option value="${bucket.id}" ${bucket.id === selectedBucket.id ? 'selected' : ''}>${escapeHtml(bucket.label)}</option>`).join('')}</select></div>
          </label>
          <div class="bucket-info" data-bucket-info><span class="info-icon">⛳</span><div><p>${escapeHtml(selectedBucket.description)}</p><strong>${escapeHtml(selectedBucket.label)} per bucket - RM ${formatPlainMoney(bucketUnitPrice(selectedBucket, selectedMembership))} (${membershipLabel(selectedMembership)})</strong></div></div>
          <label class="range-field">Select date
            <div class="range-control"><span class="field-icon">📅</span><select name="date" required>${dateOptionMarkup(availableDates, selectedDate)}</select></div>
          </label>
          <label class="range-field">Select time
            <div class="range-control"><span class="field-icon">🕘</span><select name="time" required>${timeOptionMarkup(availableTimes, selectedTime)}</select></div>
          </label>
          <label class="range-field">Duration
            <div class="range-control"><span class="field-icon">⏱️</span><select name="durationMinutes" required>${durationOptionsMarkupV42(initialDuration)}</select></div>
          </label>
          <label class="range-field">Select available lane
            <div class="range-control"><span class="field-icon">🏌️</span><select name="laneId" required>${laneOptionsMarkupV42(selectedDate, selectedTime, initialDuration, initialAvailableLane)}</select></div>
          </label>
          <div class="wide" data-lane-panel-wrap>${laneStatusPanelV42(selectedDate, selectedTime, initialDuration)}</div>
          <div class="calculation-row app-compatible-preview"><div><span>⏰</span> <span data-range-time-preview>${selectedTime ? `${selectedTime} - ${addMinutesDisplayV42(selectedTime, initialDuration)}` : 'Choose time'}</span></div><strong data-range-lane-preview>${escapeHtml(initialAvailableLane || 'No lane available')}</strong></div>
          <label class="range-field">Number of buckets
            <div class="range-control active-control"><span class="field-icon">🧺</span><select name="bucketCount" required>${bucketCounts.map((count) => `<option value="${count}">${count} ${count === 1 ? 'bucket' : 'buckets'}</option>`).join('')}</select></div>
          </label>
          <label class="range-field">Payment method
            <div class="range-control"><span class="field-icon">💳</span><select name="paymentMethod" required>${paymentMethodOptionsMarkupV42('QR Payment')}</select></div>
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

  bindDrivingRangeBookingForm = function bindDrivingRangeBookingFormV42(courseId = '') {
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
      /* V72 FIX: Do not let the old V42 refresh repaint lane availability.
         V66 is the source of truth for lane status because it reads Supabase RPC + manual lane blocks.
         This prevents KD01 from flashing Available after V66/booking popup already marked it Booked / Unavailable. */
      const v66LaneOwner = typeof window.upsiV66FetchUnavailableLanes === 'function';
      if (!v66LaneOwner) {
        const previousLane = form.laneId?.value || '';
        if (form.laneId) form.laneId.innerHTML = laneOptionsMarkupV42(form.date.value, form.time.value, duration, previousLane);
      }
      const activeLane = form.laneId?.value || '';
      const info = form.querySelector('[data-bucket-info]');
      if (info) info.innerHTML = `<span class="info-icon">⛳</span><div><p>${escapeHtml(bucket.description)}</p><strong>${escapeHtml(bucket.label)} per bucket - RM ${formatPlainMoney(unitPrice)} (${membershipLabel(membershipType)})</strong></div>`;
      form.querySelector('[data-range-formula]').textContent = `${membershipLabel(membershipType)} • ${count} × ${bucket.balls} balls = ${totalBalls} balls`;
      form.querySelector('[data-range-total]').textContent = `RM ${formatPlainMoney(amount)}`;
      form.querySelector('[data-range-payment-total]').textContent = `RM ${formatPlainMoney(amount)}`;
      if (!v66LaneOwner) {
        form.querySelector('[data-range-time-preview]').textContent = form.time.value ? `${form.time.value} - ${addMinutesDisplayV42(form.time.value, duration)}` : 'Choose time';
        form.querySelector('[data-range-lane-preview]').textContent = activeLane || 'No lane available';
        const wrap = form.querySelector('[data-lane-panel-wrap]');
        if (wrap) wrap.innerHTML = laneStatusPanelV42(form.date.value, form.time.value, duration);
      }
      const isQr = form.paymentMethod?.value === 'QR Payment';
      form.querySelector('[data-range-qr-panel]')?.classList.toggle('hidden', !isQr);
      form.querySelector('[data-pay-counter-panel]')?.classList.toggle('hidden', isQr);
    };
    const refreshScheduleOptions = () => {
      const course = getCourse();
      const previousTime = form.time?.value || '';
      const times = timeOptionsFor('driving', course.id, form.date.value);
      if (form.time) form.time.innerHTML = timeOptionMarkup(times, times.includes(previousTime) ? previousTime : (times[0] || ''));
      refresh();
    };
    ['membershipType','bucketOptionId','bucketCount','durationMinutes','laneId','paymentMethod','time'].forEach((name) => form[name]?.addEventListener('change', refresh));
    form.date?.addEventListener('change', refreshScheduleOptions);
    refreshScheduleOptions();
    form.addEventListener('submit', async (event) => {
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
      if (!laneId) return toast('No lane is available for the selected date, time and duration. Please choose another slot.');
      const bookedNow = laneBookedMapV42(form.date.value, form.time.value, durationMinutes).has(laneId.toLowerCase());
      if (bookedNow) {
        refresh();
        return toast('This lane has already been booked for the selected date and time. Please choose another lane.');
      }
      const bookings = read('bookings');
      const newBooking = {
        id: makeId('B'), bookingType: 'driving', userId: state.session.id, customerName: state.session.fullName, customerEmail: state.session.email,
        courseId: course.id, courseName: course.name, trainerId: '', trainerName: 'No trainer', bucketOptionId: bucket.id, bucketLabel: bucket.label,
        bucketBalls: bucket.balls, bucketPrice: unitPrice, membershipType, bucketCount: count, totalBalls: bucket.balls * count,
        date: form.date.value, time: form.time.value, startTime: form.time.value, endTime: addMinutesDisplayV42(form.time.value, durationMinutes),
        duration: DURATION_OPTIONS_V42.find((d) => d.minutes === durationMinutes)?.label || `${durationMinutes} minutes`, durationMinutes,
        lane: laneId, laneId, amount, bookingStatus: 'Pending Confirmation', paymentStatus: paymentMethod === 'QR Payment' ? 'Pending Verification' : 'Pay at Counter', paymentMethod,
        paymentReference: '', receiptNumber: '', receiptNote: '', receiptImage: '', hiddenForUsers: [], hiddenForAdmin: false, cancelReason: '', cancelledBy: '', cancelledById: '', cancellationType: '', cancelledAt: '', createdAt: new Date().toISOString(),
      };
      bookings.unshift(newBooking);
      write('bookings', bookings);
      await syncCurrentBookingToSupabaseV42(bookings);
      state.currentPage = 'mybookings';
      renderNav();
      renderPage();
      toast('Driving range booking submitted and synced.');
    });
  };

  // Remove star rating and show category clearly on all feedback cards.
  reviewCard = function reviewCardV42(review = {}) {
    return `
      <article class="card feedback-category-card">
        <div class="card-top">
          <div>
            <p class="eyebrow">${escapeHtml(new Date(review.createdAt || Date.now()).toLocaleDateString())}</p>
            <h3>${escapeHtml(review.userName || 'User')}</h3>
          </div>
          <span class="status-pill pending">${escapeHtml(review.category || 'General Feedback')}</span>
        </div>
        <p>${escapeHtml(review.message || '')}</p>
      </article>
    `;
  };

  userFeedback = function userFeedbackV42() {
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
      <div class="card-grid">${myReviews.map(reviewCard).join('') || empty('No feedback submitted yet.')}</div>
    `;
    document.getElementById('reviewForm').addEventListener('submit', (event) => {
      event.preventDefault();
      const form = new FormData(event.currentTarget);
      const reviews = read('reviews');
      reviews.unshift({
        id: makeId('R'),
        userId: state.session.id,
        userName: state.session.fullName,
        email: state.session.email,
        category: form.get('category') || 'General Feedback',
        rating: 0,
        message: form.get('message').trim(),
        createdAt: new Date().toISOString(),
      });
      write('reviews', reviews);
      userFeedback();
      toast('Feedback submitted to the administrator.');
    });
  };

  const baseSyncReviewsV42 = syncReviewsToSupabase;
  syncReviewsToSupabase = async function syncReviewsToSupabaseV42(reviews = []) {
    if (!SUPABASE_MODE || !supabaseClient) return baseSyncReviewsV42(reviews);
    const fallbackUserId = await getCurrentProfileId();
    for (const review of reviews) {
      const payload = {
        user_id: isUuid(review.userId) ? review.userId : fallbackUserId,
        rating: Number(review.rating || 0),
        category: review.category || 'General Feedback',
        comment: review.message || '',
        status: 'active',
      };
      if (!payload.user_id) continue;
      if (isUuid(review.id)) payload.id = review.id;
      const { data, error } = await supabaseClient.from(DB_TABLES.reviews).upsert(payload, { onConflict: payload.id ? 'id' : 'id' }).select().maybeSingle();
      if (error) console.warn('V42 review sync skipped. Run V40/V42 SQL if category column is missing.', error.message || error);
      else if (data?.id && !isUuid(review.id)) review.id = data.id;
    }
  };

  // Make category available when reading existing Supabase rows.
  const previousReviewToLocalV42 = reviewToLocal;
  reviewToLocal = function reviewToLocalV42(row = {}) {
    const review = previousReviewToLocalV42(row);
    review.category = row.category || review.category || 'General Feedback';
    review.rating = Number(row.rating || 0);
    return review;
  };
})();



</script>
<?php
}

function upsi_section_admin_payments_module(): void
{
?>
<script>
window.UPSI_SECTION_MODULES = window.UPSI_SECTION_MODULES || {};
window.UPSI_SECTION_MODULES["admin_payments"] = {
  title: "Admin Payments",
  runtimeChunk: '12/22',
  functions: ["adminPayments"]
};
</script>
<?php
}

<?php
/**
 * admin_tee_times.php
 * Bahagian: Admin Tee Times
 *
 * V108: CSS dan JavaScript runtime dibahagikan ke semua section.
 * Jadi home_page.php tidak lagi memegang semua coding sistem.
 *
 * Runtime chunk: 10/22
 * Fungsi berkaitan untuk presentation: adminTimes, openTimeForm
 */


function upsi_section_admin_tee_times_styles(): void
{
?>
<style>
/* =========================================================
   V108 CSS chunk 10/22
   Bahagian: Admin Tee Times
   ========================================================= */
.carousel-arrow {
  width: 42px;
  height: 42px;
  display: grid;
  place-items: center;
  border-radius: 999px;
  border: 1.5px solid rgba(15,81,50,0.18);
  background: #fff;
  color: var(--dark-green);
  font-weight: 900;
  font-size: 18px;
}

.event-carousel-track {
  display: flex;
  gap: 16px;
  overflow-x: auto;
  scroll-snap-type: x mandatory;
  padding-bottom: 8px;
}

.event-carousel-track::-webkit-scrollbar {
  height: 8px;
}

.event-carousel-track::-webkit-scrollbar-thumb {
  background: rgba(15,81,50,0.25);
  border-radius: 999px;
}

.event-card {
  scroll-snap-align: start;
  min-width: min(360px, 86vw);
  max-width: 380px;
  border: 1.5px solid rgba(15,81,50,0.14);
  border-radius: 22px;
  background: #fff;
  overflow: hidden;
  box-shadow: 0 10px 24px rgba(15,81,50,0.07);
}

.event-card img,
.event-placeholder {
  width: 100%;
  height: 170px;
  object-fit: cover;
  display: grid;
  place-items: center;
  background: #e8f5e9;
  font-size: 42px;
}

.event-card-body {
  padding: 16px;
}

.event-card-body h3 {
  margin: 12px 0 8px;
  color: var(--dark-green);
}

.empty-event {
  min-height: 180px;
  display: grid;
  place-items: center;
}

.profile-detail-panel {
  display: grid;
  gap: 16px;
}

.profile-detail-head {
  display: flex;
  align-items: center;
  gap: 14px;
  padding: 16px;
  border: 1.5px solid rgba(15,81,50,0.14);
  border-radius: 20px;
  background: var(--soft-green);
}

.compact-actions {
  gap: 8px;
  flex-wrap: wrap;
}

.compact-actions .btn {
  padding: 8px 10px;
  font-size: 12px;
}

.compact-meta li {
  grid-template-columns: 70px 1fr;
}

body[data-theme="dark"] .notification-card,
body[data-theme="dark"] .event-card,
body[data-theme="dark"] .event-carousel-section,
body[data-theme="dark"] .profile-detail-head,
body[data-theme="dark"] .carousel-arrow {
  background: #12231c;
  border-color: rgba(167, 243, 208, 0.22);
  color: #e5f7ed;
}

body[data-theme="dark"] .notification-card.unread {
  background: linear-gradient(135deg, #1f2d20, #12231c);
  border-color: rgba(227, 179, 65, 0.48);
}

body[data-theme="dark"] .event-card-body h3,
body[data-theme="dark"] .carousel-arrow,
body[data-theme="dark"] .notification-top-btn {
  color: #d1fae5;
}

body[data-theme="dark"] .event-placeholder,
body[data-theme="dark"] .notification-top-btn {
  background: #18382a;
  border-color: rgba(167, 243, 208, 0.22);
}

body[data-theme="dark"] .profile-chip-user:hover {
  background: rgba(167, 243, 208, 0.08);
}

@media (max-width: 760px) {
  .profile-chip-v26 {
    min-width: 0;
    width: 100%;
  }
  .event-carousel-head {
    align-items: flex-start;
    flex-direction: column;
  }
  .event-card {
    min-width: 86vw;
  }
}

/* =========================================================
   V27 UI fixes: dark mode contrast, QR fit/download, tee time
   paging/search, chat inbox, trainer hourly booking, print UI
   ========================================================= */

.qr-download-wrap {
  display: flex;
  flex-direction: column;
  align-items: center;
  justify-content: center;
  gap: 12px;
  overflow: hidden;
  min-height: 220px;
}

.qr-download-wrap img {
  max-width: min(230px, 80%);
  max-height: 260px;
  width: auto;
  height: auto;
  object-fit: contain;
  border-radius: 18px;
  background: #fff;
  padding: 8px;
}

.qr-download-btn {
  width: auto;
  min-width: 190px;
  justify-content: center;
}

.tee-search-grid {
  display: grid;
  grid-template-columns: 190px minmax(240px, 1fr) auto;
  gap: 12px;
  align-items: center;
  width: min(760px, 100%);
}

.tee-filter-toolbar {
  align-items: center;
}

.pagination-row {
  display: flex;
  align-items: center;
  justify-content: space-between;
  gap: 12px;
  padding: 16px 18px;
  border-top: 1px solid rgba(15,81,50,0.12);
  color: var(--muted);
}

.driving-availability-row {
  margin: 14px 0 6px;
}

.scrollable-modal-form {
  max-height: min(68vh, 720px);
  overflow-y: auto;
  padding-right: 8px;
}

.scrollable-modal-form::-webkit-scrollbar,
.chat-thread::-webkit-scrollbar {
  width: 8px;
}

.scrollable-modal-form::-webkit-scrollbar-thumb,
.chat-thread::-webkit-scrollbar-thumb {
  background: rgba(15,81,50,0.28);
  border-radius: 999px;
}

.event-month-break {
  scroll-snap-align: start;
  min-width: 150px;
  display: flex;
  align-items: center;
  justify-content: center;
  color: var(--dark-green);
  font-weight: 900;
  text-align: center;
}

.event-month-break span {
  display: inline-flex;
  padding: 12px 15px;
  border-radius: 999px;
  background: var(--light-green);
  border: 1.5px solid rgba(15,81,50,0.14);
}

.message-inbox-card {
  margin-top: 24px;
}

.message-peer-grid {
  margin-top: 16px;
}

.mini-profile-card {
  display: flex;
  align-items: center;
  justify-content: space-between;
  gap: 12px;
  padding: 16px;
  border-radius: 20px;
  border: 1.5px solid rgba(15,81,50,0.14);
  background: var(--soft-green);
}

.mini-profile-card > div {
  display: flex;
  align-items: center;
  gap: 12px;
  min-width: 0;
}

.mini-profile-card span {
  display: block;
  color: var(--muted);
  font-size: 13px;
  word-break: break-word;
}

.chat-thread {
  display: grid;
  gap: 12px;
  max-height: min(54vh, 520px);
  overflow-y: auto;
  padding: 4px 8px 4px 0;
}

.chat-bubble {
  width: min(680px, 92%);
  padding: 14px;
  border-radius: 18px 18px 18px 6px;
  border: 1.5px solid rgba(15,81,50,0.15);
  background: var(--soft-green);
}

.chat-bubble.mine {
  justify-self: end;
  border-radius: 18px 18px 6px 18px;
  background: #e6f6ea;
}


</style>
<?php
}

function upsi_section_admin_tee_times_scripts(): void
{
?>
<script>
/* =========================================================
   V108 JavaScript chunk 10/22
   Bahagian: Admin Tee Times
   ========================================================= */
(function v33TeeTimePatch() {
  function timeInputToDisplay(value = '08:00') {
    const [rawHour, rawMinute] = String(value || '08:00').split(':');
    let hour = Number(rawHour || 8);
    const minute = Number(rawMinute || 0);
    const period = hour >= 12 ? 'PM' : 'AM';
    hour = hour % 12;
    if (hour === 0) hour = 12;
    return `${hour}:${String(minute).padStart(2, '0')} ${period}`;
  }

  function displayTimeToInput(value = '8:00 AM') {
    const converted = convertTo24Hour(value || '8:00 AM');
    return String(converted || '08:00').slice(0, 5);
  }

  function teeSlotDateTime(slot = {}) {
    if (!slot.date || !slot.time) return null;
    const hhmm = displayTimeToInput(slot.time);
    const parsed = new Date(`${slot.date}T${hhmm}:00`);
    return Number.isNaN(parsed.getTime()) ? null : parsed;
  }

  function isTeeSlotExpiredV33(slot = {}) {
    const parsed = teeSlotDateTime(slot);
    if (!parsed) return false;
    return parsed.getTime() < Date.now();
  }

  function mergeTeeSlotsV33(existing = [], incoming = []) {
    const merged = [...normaliseScheduleSlots(existing)];
    incoming.forEach((slot) => {
      const duplicate = merged.some((item) => (
        item.date === slot.date
        && item.time === slot.time
        && item.targetType === slot.targetType
        && String(item.targetId || 'all') === String(slot.targetId || 'all')
      ));
      if (!duplicate) merged.push(slot);
    });
    return normaliseScheduleSlots(merged).sort(sortByDateTime);
  }

  async function deleteExpiredSlotsFromSupabaseV33(expiredSlots = []) {
    if (!SUPABASE_MODE || !Array.isArray(expiredSlots) || !expiredSlots.length) return;
    for (const slot of expiredSlots) {
      if (!isUuid(slot.id)) continue;
      const { error } = await supabaseClient
        .from(DB_TABLES.teeSlots)
        .delete()
        .eq('id', slot.id);
      if (error) console.error('Expired tee slot delete error:', error);
    }
  }

  window.cleanupExpiredTeeSlotsV33 = function cleanupExpiredTeeSlotsV33(showToast = false) {
    const settings = read('settings');
    const slots = normaliseScheduleSlots(settings.scheduleSlots || []);
    const expired = [];
    const active = [];

    slots.forEach((slot) => {
      // Do not remove slots already linked to a non-cancelled booking; those slots can be kept as booking evidence.
      if (isTeeSlotExpiredV33(slot) && !isSlotBooked(slot)) expired.push(slot);
      else active.push(slot);
    });

    if (!expired.length) return { removed: 0, active };

    settings.scheduleSlots = active;
    write('settings', settings);
    deleteExpiredSlotsFromSupabaseV33(expired);
    if (showToast) toast(`${expired.length} expired tee time slot(s) auto deleted.`);
    return { removed: expired.length, active };
  };

  // Hide expired slots everywhere immediately, even before remote delete finishes.
  const originalGetScheduleSlotsV33 = getScheduleSlots;
  getScheduleSlots = function getScheduleSlotsWithoutExpiredV33() {
    return originalGetScheduleSlotsV33().filter((slot) => !isTeeSlotExpiredV33(slot) || isSlotBooked(slot));
  };

  const originalRenderPageV33 = renderPage;
  renderPage = function renderPageWithExpiredSlotCleanupV33() {
    cleanupExpiredTeeSlotsV33(false);
    return originalRenderPageV33();
  };

  openTimeForm = function openTimeFormV33(slot = null) {
    cleanupExpiredTeeSlotsV33(false);
    const courses = getDrivingCourses(read('courses'));
    const trainers = read('trainers');
    const today = new Date().toISOString().slice(0, 10);
    const nextWeek = getFutureDate(7);
    const selectedType = slot?.targetType || 'both';
    const selectedTarget = slot?.targetId || 'all';
    const isEdit = Boolean(slot);
    const safeTime = displayTimeToInput(slot?.time || '8:00 AM');

    openModal(`
      <div class="modal-head">
        <div>
          <p class="eyebrow">${isEdit ? 'Edit Tee Time' : 'New Tee Time'}</p>
          <h2>${isEdit ? 'Update Available Date & Time' : 'Add Time Slot'}</h2>
          <p class="muted">Expired date and time slots are removed automatically once they have passed.</p>
        </div>
        <button class="close-btn" data-close-modal>&times;</button>
      </div>
      <form id="timeFormV33" class="form-grid compact-modal-form">
        ${isEdit ? `
          <label class="wide">Date
            <input name="date" type="date" min="${today}" value="${escapeHtml(slot?.date || today)}" required>
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
        <label>Booking Type
          <select name="targetType" data-slot-type required>
            <option value="both" ${selectedType === 'both' ? 'selected' : ''}>Driving Range & Trainer</option>
            <option value="driving" ${selectedType === 'driving' ? 'selected' : ''}>Driving Range Only</option>
            <option value="trainer" ${selectedType === 'trainer' ? 'selected' : ''}>Trainer Only</option>
          </select>
        </label>
        <label class="wide" data-target-wrapper>Target
          <select name="targetId" data-slot-target required></select>
        </label>
        <label>Time
          <input name="time" type="time" value="${escapeHtml(safeTime)}" required>
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

    const form = document.getElementById('timeFormV33');
    if (!form) return;

    function renderDateMode() {
      const dateMode = form.querySelector('[data-date-mode]');
      if (!dateMode) return;
      const isRange = dateMode.value === 'range';
      const single = form.querySelector('[data-single-date]');
      const start = form.querySelector('[data-range-start]');
      const end = form.querySelector('[data-range-end]');
      single?.classList.toggle('hidden', isRange);
      start?.classList.toggle('hidden', !isRange);
      end?.classList.toggle('hidden', !isRange);
      if (form.date) form.date.required = !isRange;
      if (form.startDate) form.startDate.required = isRange;
      if (form.endDate) form.endDate.required = isRange;
    }

    function renderTargetOptions() {
      const type = form.querySelector('[data-slot-type]').value;
      const target = form.querySelector('[data-slot-target]');
      let options = '<option value="all">Driving Range & All Trainers</option>';
      if (type === 'driving') {
        options = courses.map((course) => `<option value="${course.id}">${escapeHtml(course.name)}</option>`).join('') || '<option value="all">All Driving Ranges</option>';
      }
      if (type === 'trainer') {
        options = trainers.map((trainer) => `<option value="${trainer.id}">${escapeHtml(trainer.name || trainer.fullName)}</option>`).join('') || '<option value="all">All Trainers</option>';
      }
      target.innerHTML = options;
      if ([...target.options].some((opt) => opt.value === selectedTarget)) target.value = selectedTarget;
      else target.value = 'all';
    }

    form.querySelector('[data-date-mode]')?.addEventListener('change', renderDateMode);
    form.querySelector('[data-slot-type]')?.addEventListener('change', renderTargetOptions);
    renderDateMode();
    renderTargetOptions();

    form.addEventListener('submit', async (event) => {
      event.preventDefault();
      const formData = new FormData(form);
      const base = {
        time: timeInputToDisplay(formData.get('time')),
        status: formData.get('status') || 'Available',
        targetType: formData.get('targetType') || 'both',
        targetId: formData.get('targetId') || 'all',
      };

      const settings = read('settings');
      const existingSlots = normaliseScheduleSlots(settings.scheduleSlots || []);
      let nextSlots = [...existingSlots];

      if (isEdit) {
        nextSlots = existingSlots.map((item) => item.id === slot.id ? { ...item, ...base, date: formData.get('date') } : item);
      } else {
        const dates = formData.get('dateMode') === 'range'
          ? datesBetween(formData.get('startDate'), formData.get('endDate'))
          : [formData.get('date')].filter(Boolean);

        if (!dates.length) {
          toast('Please choose a valid date.');
          return;
        }

        const newSlots = dates.map((date) => ({
          id: makeId('S'),
          date,
          ...base,
        }));
        nextSlots = mergeTeeSlotsV33(existingSlots, newSlots);
      }

      const expiredPreview = nextSlots.filter((item) => isTeeSlotExpiredV33(item) && !isSlotBooked(item));
      nextSlots = nextSlots.filter((item) => !isTeeSlotExpiredV33(item) || isSlotBooked(item));
      settings.scheduleSlots = normaliseScheduleSlots(nextSlots).sort(sortByDateTime);
      write('settings', settings);
      if (SUPABASE_MODE && typeof syncSlotsToSupabase === 'function') {
        await syncSlotsToSupabase(settings.scheduleSlots);
        await deleteExpiredSlotsFromSupabaseV33(expiredPreview);
      }

      closeModal();
      state.teePage = 1;
      adminTimes();
      toast(isEdit ? 'Tee time slot updated.' : 'Tee time slot saved.');
    });
  };

  // Ensure the current Tee Time page auto cleans after this patch is loaded.
  document.addEventListener('DOMContentLoaded', () => cleanupExpiredTeeSlotsV33(false));
})();

// =========================================================
// V34: Driving Range delete sync fix
// Prevent old/local driving-range demo records from being recreated in Supabase
// and delete real Supabase driving_range rows when admin presses Delete.
// =========================================================
(() => {
  const baseSyncCoursesToSupabaseV34 = typeof syncCoursesToSupabase === 'function' ? syncCoursesToSupabase : null;

  async function findRemoteDrivingRangeIdV34(course = {}) {
    if (!SUPABASE_MODE || !supabaseClient || !course) return null;
    if (isUuid(course.id)) return course.id;
    const name = String(course.name || '').trim();
    if (!name) return null;
    const { data, error } = await supabaseClient
      .from(DB_TABLES.drivingRanges)
      .select('id')
      .eq('name', name)
      .maybeSingle();
    if (error) {
      console.warn('Could not look up remote driving range before delete:', error);
      return null;
    }
    return data?.id || null;
  }

  async function deleteDrivingRangeFromSupabaseV34(course = {}) {
    if (!SUPABASE_MODE || !supabaseClient || !course) return;
    const remoteId = await findRemoteDrivingRangeIdV34(course);
    if (!remoteId) return;

    // Delete bucket prices first because bucket_options usually depends on driving_ranges.
    const bucketDelete = await supabaseClient
      .from(DB_TABLES.bucketOptions)
      .delete()
      .eq('driving_range_id', remoteId);
    if (bucketDelete.error) {
      console.warn('Bucket option delete warning:', bucketDelete.error);
    }

    // If the range has active booking history, Supabase may block hard delete.
    // In that case we mark it inactive instead so it no longer appears as available.
    const hardDelete = await supabaseClient
      .from(DB_TABLES.drivingRanges)
      .delete()
      .eq('id', remoteId)
      .select();

    if (hardDelete.error) {
      console.warn('Driving range hard delete failed, falling back to inactive:', hardDelete.error);
      const fallback = await supabaseClient
        .from(DB_TABLES.drivingRanges)
        .update({ status: 'inactive' })
        .eq('id', remoteId);
      if (fallback.error) throw fallback.error;
    }
  }

  if (baseSyncCoursesToSupabaseV34) {
    syncCoursesToSupabase = async function syncCoursesToSupabaseV34(courses = []) {
      // Important fix:
      // Older versions left fake local records such as C-002 / C-003 in localStorage.
      // The old sync function inserted those local-only records into Supabase after delete.
      // From V34 onward, automatic background sync only pushes real UUID records.
      // New/edit forms still use UUIDs in Supabase mode, so valid records continue syncing.
      const safeCourses = (courses || []).filter((course) => isDrivingCourse(course) && isUuid(course.id));
      return baseSyncCoursesToSupabaseV34(safeCourses);
    };
  }

  bindAdminCourseButtons = function bindAdminCourseButtonsV34() {
    content().querySelectorAll('[data-edit-course]').forEach((btn) => {
      btn.addEventListener('click', () => openCourseForm(read('courses').find((c) => c.id === btn.dataset.editCourse)));
    });

    content().querySelectorAll('[data-delete-course]').forEach((btn) => {
      btn.addEventListener('click', () => {
        const targetId = btn.dataset.deleteCourse;
        const targetCourse = read('courses').find((c) => c.id === targetId);
        confirmAction({
          title: 'Delete Driving Range',
          message: `Are you sure you want to delete ${targetCourse?.name || 'this driving range'}? This will remove it from the website and Supabase if it exists there.`,
          confirmText: 'Delete Driving Range',
          danger: true,
          onConfirm: async () => {
            try {
              await deleteDrivingRangeFromSupabaseV34(targetCourse);
            } catch (error) {
              console.error('Driving range delete error:', error);
              toast(error.message || 'Failed to delete driving range from Supabase.');
              return;
            }

            const remaining = read('courses').filter((c) => c.id !== targetId);
            // Use setLocalData instead of write() so delete does not trigger background sync
            // that could recreate old local-only rows in Supabase.
            setLocalData('courses', remaining);
            await loadSupabaseDataToLocal({ requireAuth: true });
            adminCourses();
            toast('Driving range deleted.');
          },
        });
      });
    });
  };
})();

// =========================================================
// V35: Trainer delete sync fix
// Delete trainer records from Supabase when admin deletes them in the website,
// and prevent old local/demo trainer rows from being recreated after refresh.
// =========================================================
(() => {
  const baseSyncTrainersToSupabaseV35 = typeof syncTrainersToSupabase === 'function' ? syncTrainersToSupabase : null;

  async function findRemoteTrainerIdV35(trainer = {}) {
    if (!SUPABASE_MODE || !supabaseClient || !trainer) return null;
    if (isUuid(trainer.id)) return trainer.id;

    const email = String(trainer.email || '').trim().toLowerCase();
    if (email) {
      const { data, error } = await supabaseClient
        .from(DB_TABLES.trainers)
        .select('id')
        .eq('email', email)
        .maybeSingle();
      if (!error && data?.id) return data.id;
      if (error) console.warn('Trainer email lookup warning:', error);
    }

    const name = String(trainer.name || trainer.fullName || '').trim();
    if (name) {
      const { data, error } = await supabaseClient
        .from(DB_TABLES.trainers)
        .select('id')
        .eq('full_name', name)
        .maybeSingle();
      if (!error && data?.id) return data.id;
      if (error) console.warn('Trainer name lookup warning:', error);
    }

    return null;
  }

  async function deleteTrainerFromSupabaseV35(trainer = {}) {
    if (!SUPABASE_MODE || !supabaseClient || !trainer) return { deleted: false, reason: 'supabase-disabled' };
    const remoteId = await findRemoteTrainerIdV35(trainer);
    if (!remoteId) return { deleted: false, reason: 'not-found' };

    // Remove trainer-specific available slots first so the trainer row is not blocked by tee_slots.
    const slotDelete = await supabaseClient
      .from(DB_TABLES.teeSlots)
      .delete()
      .eq('trainer_id', remoteId);
    if (slotDelete.error) {
      console.warn('Trainer tee slot delete warning:', slotDelete.error);
    }

    const hardDelete = await supabaseClient
      .from(DB_TABLES.trainers)
      .delete()
      .eq('id', remoteId)
      .select();

    if (hardDelete.error) {
      console.error('Trainer hard delete error:', hardDelete.error);
      return { deleted: false, reason: hardDelete.error.message || 'delete-failed', error: hardDelete.error };
    }

    return { deleted: true, id: remoteId };
  }

  if (baseSyncTrainersToSupabaseV35) {
    syncTrainersToSupabase = async function syncTrainersToSupabaseV35(trainers = []) {
      // Important fix:
      // Older local/default trainer rows have ids like T-001/T-002. If background sync
      // pushes them after a delete, Supabase recreates deleted trainers. From V35 onward,
      // automatic sync only updates real Supabase UUID rows. Add/Edit forms still save
      // directly to Supabase, so new trainer records continue working.
      const safeTrainers = (trainers || []).filter((trainer) => isUuid(trainer.id));
      return baseSyncTrainersToSupabaseV35(safeTrainers);
    };
  }

  document.addEventListener('click', (event) => {
    const btn = event.target.closest('[data-delete-trainer]');
    if (!btn) return;

    event.preventDefault();
    event.stopPropagation();
    if (typeof event.stopImmediatePropagation === 'function') event.stopImmediatePropagation();

    const targetId = btn.dataset.deleteTrainer;
    const targetTrainer = read('trainers').find((trainer) => trainer.id === targetId);

    confirmAction({
      title: 'Delete Trainer',
      message: `Are you sure you want to delete ${targetTrainer?.name || 'this trainer'}? This will remove the trainer from the website and Supabase.`,
      confirmText: 'Delete Trainer',
      danger: true,
      onConfirm: async () => {
        try {
          const result = await deleteTrainerFromSupabaseV35(targetTrainer);
          if (SUPABASE_MODE && result.error) {
            toast('Supabase blocked trainer delete because the trainer is linked to records. Check bookings/tee slots first.');
            return;
          }
        } catch (error) {
          console.error('Trainer delete error:', error);
          toast(error.message || 'Failed to delete trainer from Supabase.');
          return;
        }

        const remaining = read('trainers').filter((trainer) => trainer.id !== targetId);
        // Use setLocalData instead of write() so local-only trainer rows are not re-synced
        // and recreated in Supabase after deletion.
        setLocalData('trainers', remaining);

        if (SUPABASE_MODE) {
          await loadSupabaseDataToLocal({ requireAuth: true });
        }
        if (state.currentPage === 'trainers') adminTrainers();
        else renderPage();
        toast('Trainer deleted.');
      },
    });
  }, true);
})();

/* =========================================================
   V36 PATCH - Tee Time save to Supabase + table refresh fix
   - Replaces the fragile tee-slot sync that used ON CONFLICT on columns
     that may not have a unique constraint in Supabase.
   - New slots are inserted, returned UUIDs are saved back into localStorage,
     and the Tee Time table is reloaded from Supabase after save.
   - Expired slots are hidden and deleted only when they are not linked to an
     active booking.
   ========================================================= */
(function v36TeeTimeSavePatch() {
  function v36Pad(value) {
    return String(value).padStart(2, '0');
  }

  function v36ToDisplayTime(value = '08:00') {
    const [hRaw, mRaw] = String(value || '08:00').split(':');
    let hour = Number(hRaw || 8);
    const minute = Number(mRaw || 0);
    const period = hour >= 12 ? 'PM' : 'AM';
    hour = hour % 12;
    if (hour === 0) hour = 12;
    return `${hour}:${v36Pad(minute)} ${period}`;
  }

  function v36ToInputTime(value = '8:00 AM') {
    if (String(value).includes(':') && !String(value).toUpperCase().includes('AM') && !String(value).toUpperCase().includes('PM')) {
      return String(value).slice(0, 5);
    }
    return String(convertTo24Hour(value || '8:00 AM') || '08:00').slice(0, 5);
  }

  function v36SlotDateTime(slot = {}) {
    if (!slot.date || !slot.time) return null;
    const parsed = new Date(`${slot.date}T${v36ToInputTime(slot.time)}:00`);
    return Number.isNaN(parsed.getTime()) ? null : parsed;
  }

  function v36IsExpired(slot = {}) {
    const parsed = v36SlotDateTime(slot);
    return parsed ? parsed.getTime() < Date.now() : false;
  }

  function v36SlotKey(slot = {}) {
    return [slot.date || '', v36ToInputTime(slot.time || '8:00 AM'), slot.targetType || 'both', slot.targetId || 'all'].join('|');
  }

  function v36MergeSlots(existing = [], incoming = []) {
    const map = new Map();
    normaliseScheduleSlots(existing).forEach((slot) => map.set(v36SlotKey(slot), slot));
    normaliseScheduleSlots(incoming).forEach((slot) => {
      if (!map.has(v36SlotKey(slot))) map.set(v36SlotKey(slot), slot);
    });
    return [...map.values()].sort(sortByDateTime);
  }

  async function v36DeleteExpiredRemote(expiredSlots = []) {
    if (!SUPABASE_MODE || !supabaseClient || !expiredSlots.length) return;
    const ids = expiredSlots.map((slot) => slot.id).filter(isUuid);
    if (!ids.length) return;
    const { error } = await supabaseClient.from(DB_TABLES.teeSlots).delete().in('id', ids);
    if (error) console.warn('Expired tee slot remote delete warning:', error);
  }

  window.cleanupExpiredTeeSlotsV33 = function cleanupExpiredTeeSlotsV36(showToast = false) {
    const settings = read('settings');
    const slots = normaliseScheduleSlots(settings.scheduleSlots || []);
    const active = [];
    const expired = [];
    slots.forEach((slot) => {
      if (v36IsExpired(slot) && !isSlotBooked(slot)) expired.push(slot);
      else active.push(slot);
    });
    if (!expired.length) return { removed: 0, active };
    settings.scheduleSlots = active.sort(sortByDateTime);
    setLocalData('settings', settings);
    v36DeleteExpiredRemote(expired);
    if (showToast) toast(`${expired.length} expired tee time slot(s) auto deleted.`);
    return { removed: expired.length, active };
  };

  syncSlotsToSupabase = async function syncSlotsToSupabaseV36(slots = []) {
    if (!SUPABASE_MODE || !supabaseClient) return slots;
    const savedSlots = [];

    for (const originalSlot of normaliseScheduleSlots(slots)) {
      if (v36IsExpired(originalSlot) && !isSlotBooked(originalSlot)) continue;

      const payload = localSlotToDb(originalSlot);
      let response;

      if (isUuid(originalSlot.id)) {
        response = await supabaseClient
          .from(DB_TABLES.teeSlots)
          .update(payload)
          .eq('id', originalSlot.id)
          .select()
          .maybeSingle();
      } else {
        // Do not use upsert here. Some projects do not have a unique constraint
        // on slot_date + slot_time + slot_type + trainer_id, so upsert can silently fail.
        response = await supabaseClient
          .from(DB_TABLES.teeSlots)
          .insert(payload)
          .select()
          .single();
      }

      if (response.error) {
        console.error('Tee slot save error:', response.error);
        toast(response.error.message || 'Failed to save tee time slot to Supabase.');
        continue;
      }

      const savedLocal = response.data ? slotToLocal(response.data) : originalSlot;
      savedSlots.push(savedLocal);
    }

    const settings = read('settings');
    const merged = v36MergeSlots(settings.scheduleSlots || [], savedSlots).filter((slot) => !v36IsExpired(slot) || isSlotBooked(slot));
    settings.scheduleSlots = merged;
    setLocalData('settings', settings);
    return merged;
  };

  openTimeForm = function openTimeFormV36(slot = null) {
    cleanupExpiredTeeSlotsV33(false);
    const courses = getDrivingCourses(read('courses'));
    const trainers = read('trainers');
    const today = new Date().toISOString().slice(0, 10);
    const nextWeek = getFutureDate(7);
    const selectedType = slot?.targetType || 'both';
    const selectedTarget = slot?.targetId || 'all';
    const isEdit = Boolean(slot);
    const safeTime = v36ToInputTime(slot?.time || '8:00 AM');

    openModal(`
      <div class="modal-head">
        <div>
          <p class="eyebrow">${isEdit ? 'Edit Tee Time' : 'New Tee Time'}</p>
          <h2>${isEdit ? 'Update Available Date & Time' : 'Add Time Slot'}</h2>
          <p class="muted">Choose a future date and time. Past slots are removed automatically.</p>
        </div>
        <button class="close-btn" data-close-modal>&times;</button>
      </div>
      <form id="timeFormV36" class="form-grid compact-modal-form">
        ${isEdit ? `
          <label class="wide">Date
            <input name="date" type="date" min="${today}" value="${escapeHtml(slot?.date || today)}" required>
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
        <label>Booking Type
          <select name="targetType" data-slot-type required>
            <option value="both" ${selectedType === 'both' ? 'selected' : ''}>Driving Range & Trainer</option>
            <option value="driving" ${selectedType === 'driving' ? 'selected' : ''}>Driving Range Only</option>
            <option value="trainer" ${selectedType === 'trainer' ? 'selected' : ''}>Trainer Only</option>
          </select>
        </label>
        <label class="wide" data-target-wrapper>Target
          <select name="targetId" data-slot-target required></select>
        </label>
        <label>Time
          <input name="time" type="time" value="${escapeHtml(safeTime)}" required>
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

    const form = document.getElementById('timeFormV36');
    if (!form) return;

    function renderDateMode() {
      const dateMode = form.querySelector('[data-date-mode]');
      if (!dateMode) return;
      const isRange = dateMode.value === 'range';
      form.querySelector('[data-single-date]')?.classList.toggle('hidden', isRange);
      form.querySelector('[data-range-start]')?.classList.toggle('hidden', !isRange);
      form.querySelector('[data-range-end]')?.classList.toggle('hidden', !isRange);
      if (form.date) form.date.required = !isRange;
      if (form.startDate) form.startDate.required = isRange;
      if (form.endDate) form.endDate.required = isRange;
    }

    function renderTargetOptions() {
      const type = form.querySelector('[data-slot-type]').value;
      const target = form.querySelector('[data-slot-target]');
      let options = '<option value="all">Driving Range & All Trainers</option>';
      if (type === 'driving') {
        options = courses.map((course) => `<option value="${course.id}">${escapeHtml(course.name)}</option>`).join('') || '<option value="all">All Driving Ranges</option>';
      }
      if (type === 'trainer') {
        options = trainers.map((trainer) => `<option value="${trainer.id}">${escapeHtml(trainer.name || trainer.fullName)}</option>`).join('') || '<option value="all">All Trainers</option>';
      }
      target.innerHTML = options;
      target.value = [...target.options].some((opt) => opt.value === selectedTarget) ? selectedTarget : 'all';
    }

    form.querySelector('[data-date-mode]')?.addEventListener('change', renderDateMode);
    form.querySelector('[data-slot-type]')?.addEventListener('change', renderTargetOptions);
    renderDateMode();
    renderTargetOptions();

    form.addEventListener('submit', async (event) => {
      event.preventDefault();
      const submitBtn = form.querySelector('button[type="submit"]');
      submitBtn.disabled = true;
      submitBtn.textContent = 'Saving...';

      try {
        const formData = new FormData(form);
        const base = {
          time: v36ToDisplayTime(formData.get('time')),
          status: formData.get('status') || 'Available',
          targetType: formData.get('targetType') || 'both',
          targetId: formData.get('targetId') || 'all',
        };

        const settings = read('settings');
        const existingSlots = normaliseScheduleSlots(settings.scheduleSlots || []);
        let nextSlots;

        if (isEdit) {
          nextSlots = existingSlots.map((item) => item.id === slot.id ? { ...item, ...base, date: formData.get('date') } : item);
        } else {
          const dates = formData.get('dateMode') === 'range'
            ? datesBetween(formData.get('startDate'), formData.get('endDate'))
            : [formData.get('date')].filter(Boolean);

          if (!dates.length) {
            toast('Please choose a valid date.');
            return;
          }

          const newSlots = dates.map((date) => ({ id: makeId('S'), date, ...base }));
          nextSlots = v36MergeSlots(existingSlots, newSlots);
        }

        const expired = nextSlots.filter((item) => v36IsExpired(item) && !isSlotBooked(item));
        nextSlots = nextSlots.filter((item) => !v36IsExpired(item) || isSlotBooked(item));
        settings.scheduleSlots = nextSlots.sort(sortByDateTime);
        setLocalData('settings', settings);

        if (SUPABASE_MODE) {
          await syncSlotsToSupabase(settings.scheduleSlots);
          await v36DeleteExpiredRemote(expired);
          await loadSupabaseDataToLocal({ requireAuth: true });
        }

        closeModal();
        state.teePage = 1;
        adminTimes();
        toast(isEdit ? 'Tee time slot updated.' : 'Tee time slot saved.');
      } finally {
        submitBtn.disabled = false;
        submitBtn.textContent = 'Save Time Slot';
      }
    });
  };

  const baseAdminTimesV36 = typeof adminTimes === 'function' ? adminTimes : null;
  if (baseAdminTimesV36) {
    adminTimes = function adminTimesV36() {
      cleanupExpiredTeeSlotsV33(false);
      return baseAdminTimesV36();
    };
  }
})();

/* V37 Tee Time Save Final Fix
   - Prevents saving past date/time slots that immediately disappear.
   - Defaults the Add Time Slot form to the next future time.
   - Saves directly to Supabase then refreshes local data from Supabase.
*/
(function teeTimeV37FinalFix() {
  function v37Pad(value) {
    return String(value).padStart(2, '0');
  }

  function v37TodayDate() {
    const now = new Date();
    return `${now.getFullYear()}-${v37Pad(now.getMonth() + 1)}-${v37Pad(now.getDate())}`;
  }

  function v37DateAfter(days = 1) {
    const date = new Date();
    date.setDate(date.getDate() + days);
    return `${date.getFullYear()}-${v37Pad(date.getMonth() + 1)}-${v37Pad(date.getDate())}`;
  }

  function v37NextFutureInputTime() {
    const now = new Date();
    now.setMinutes(now.getMinutes() + 20);
    const roundedMinutes = Math.ceil(now.getMinutes() / 15) * 15;
    if (roundedMinutes >= 60) {
      now.setHours(now.getHours() + 1);
      now.setMinutes(0);
    } else {
      now.setMinutes(roundedMinutes);
    }
    return `${v37Pad(now.getHours())}:${v37Pad(now.getMinutes())}`;
  }

  function v37InputToDisplayTime(value = '09:00') {
    const [hourRaw, minuteRaw] = String(value || '09:00').split(':');
    let hour = Number(hourRaw || 9);
    const minute = v37Pad(Number(minuteRaw || 0));
    const suffix = hour >= 12 ? 'PM' : 'AM';
    hour = hour % 12 || 12;
    return `${hour}:${minute} ${suffix}`;
  }

  function v37DisplayToInputTime(value = '09:00') {
    if (/^\d{2}:\d{2}$/.test(String(value))) return value;
    if (typeof v36ToInputTime === 'function') return v36ToInputTime(value);
    const match = String(value || '').match(/(\d{1,2}):(\d{2})\s*(AM|PM)/i);
    if (!match) return '09:00';
    let hour = Number(match[1]);
    const minute = match[2];
    const suffix = match[3].toUpperCase();
    if (suffix === 'PM' && hour !== 12) hour += 12;
    if (suffix === 'AM' && hour === 12) hour = 0;
    return `${v37Pad(hour)}:${minute}`;
  }

  function v37IsPast(dateValue, timeValue) {
    if (!dateValue || !timeValue) return true;
    const inputTime = v37DisplayToInputTime(timeValue);
    const selected = new Date(`${dateValue}T${inputTime}:00`);
    return selected.getTime() <= Date.now();
  }

  function v37SlotKey(slot = {}) {
    return [slot.date || '', v37DisplayToInputTime(slot.time || '09:00'), slot.targetType || 'both', slot.targetId || 'all'].join('|');
  }

  function v37MergeSlots(existing = [], incoming = []) {
    const map = new Map();
    (typeof normaliseScheduleSlots === 'function' ? normaliseScheduleSlots(existing) : existing).forEach((slot) => {
      map.set(v37SlotKey(slot), slot);
    });
    incoming.forEach((slot) => {
      map.set(v37SlotKey(slot), slot);
    });
    const output = [...map.values()];
    return typeof sortByDateTime === 'function' ? output.sort(sortByDateTime) : output;
  }

  async function v37SaveSlotsToSupabase(slots = [], editSlotId = null) {
    if (!SUPABASE_MODE || !supabaseClient) return slots;
    const saved = [];

    for (const slot of slots) {
      const payload = localSlotToDb(slot);
      let response;

      if (editSlotId && isUuid(editSlotId)) {
        response = await supabaseClient
          .from(DB_TABLES.teeSlots)
          .update(payload)
          .eq('id', editSlotId)
          .select()
          .maybeSingle();
      } else if (isUuid(slot.id)) {
        response = await supabaseClient
          .from(DB_TABLES.teeSlots)
          .update(payload)
          .eq('id', slot.id)
          .select()
          .maybeSingle();
      } else {
        response = await supabaseClient
          .from(DB_TABLES.teeSlots)
          .insert(payload)
          .select()
          .single();
      }

      if (response.error) {
        console.error('Tee time save error:', response.error);
        throw response.error;
      }

      saved.push(response.data ? slotToLocal(response.data) : slot);
    }

    return saved;
  }

  openTimeForm = function openTimeFormV37(slot = null) {
    if (typeof cleanupExpiredTeeSlotsV33 === 'function') cleanupExpiredTeeSlotsV33(false);

    const courses = getDrivingCourses(read('courses'));
    const trainers = read('trainers');
    const today = v37TodayDate();
    const tomorrow = v37DateAfter(1);
    const nextWeek = typeof getFutureDate === 'function' ? getFutureDate(7) : v37DateAfter(7);
    const isEdit = Boolean(slot);
    const defaultTime = isEdit ? v37DisplayToInputTime(slot?.time || '09:00') : v37NextFutureInputTime();
    const defaultDate = isEdit ? (slot?.date || today) : today;
    const selectedType = slot?.targetType || 'both';
    const selectedTarget = slot?.targetId || 'all';

    openModal(`
      <div class="modal-head">
        <div>
          <p class="eyebrow">${isEdit ? 'Edit Tee Time' : 'New Tee Time'}</p>
          <h2>${isEdit ? 'Update Available Date & Time' : 'Add Time Slot'}</h2>
          <p class="muted">Choose a future date and time. Past time slots will not be saved.</p>
        </div>
        <button class="close-btn" data-close-modal>&times;</button>
      </div>
      <form id="timeFormV37" class="form-grid compact-modal-form">
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
            <input name="startDate" type="date" min="${today}" value="${today}">
          </label>
          <label class="hidden" data-range-end>End Date
            <input name="endDate" type="date" min="${today}" value="${nextWeek}">
          </label>
        `}
        <label>Booking Type
          <select name="targetType" data-slot-type required>
            <option value="both" ${selectedType === 'both' ? 'selected' : ''}>Driving Range & Trainer</option>
            <option value="driving" ${selectedType === 'driving' ? 'selected' : ''}>Driving Range Only</option>
            <option value="trainer" ${selectedType === 'trainer' ? 'selected' : ''}>Trainer Only</option>
          </select>
        </label>
        <label class="wide" data-target-wrapper>Target
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

    const form = document.getElementById('timeFormV37');
    if (!form) return;

    function renderDateMode() {
      const dateMode = form.querySelector('[data-date-mode]');
      if (!dateMode) return;
      const isRange = dateMode.value === 'range';
      form.querySelector('[data-single-date]')?.classList.toggle('hidden', isRange);
      form.querySelector('[data-range-start]')?.classList.toggle('hidden', !isRange);
      form.querySelector('[data-range-end]')?.classList.toggle('hidden', !isRange);
      if (form.date) form.date.required = !isRange;
      if (form.startDate) form.startDate.required = isRange;
      if (form.endDate) form.endDate.required = isRange;
    }

    function renderTargetOptions() {
      const type = form.querySelector('[data-slot-type]').value;
      const target = form.querySelector('[data-slot-target]');
      let options = '<option value="all">Driving Range & All Trainers</option>';
      if (type === 'driving') {
        options = courses.map((course) => `<option value="${course.id}">${escapeHtml(course.name)}</option>`).join('') || '<option value="all">All Driving Ranges</option>';
      }
      if (type === 'trainer') {
        options = trainers.map((trainer) => `<option value="${trainer.id}">${escapeHtml(trainer.name || trainer.fullName)}</option>`).join('') || '<option value="all">All Trainers</option>';
      }
      target.innerHTML = options;
      target.value = [...target.options].some((opt) => opt.value === selectedTarget) ? selectedTarget : 'all';
    }

    form.querySelector('[data-date-mode]')?.addEventListener('change', renderDateMode);
    form.querySelector('[data-slot-type]')?.addEventListener('change', renderTargetOptions);
    renderDateMode();
    renderTargetOptions();

    form.addEventListener('submit', async (event) => {
      event.preventDefault();
      const submitBtn = form.querySelector('button[type="submit"]');
      submitBtn.disabled = true;
      submitBtn.textContent = 'Saving...';

      try {
        const formData = new FormData(form);
        const base = {
          time: v37InputToDisplayTime(formData.get('time')),
          status: formData.get('status') || 'Available',
          targetType: formData.get('targetType') || 'both',
          targetId: formData.get('targetId') || 'all',
        };

        let selectedDates = [];
        if (isEdit) {
          selectedDates = [formData.get('date')].filter(Boolean);
        } else if (formData.get('dateMode') === 'range') {
          selectedDates = datesBetween(formData.get('startDate'), formData.get('endDate'));
        } else {
          selectedDates = [formData.get('date')].filter(Boolean);
        }

        const futureDates = selectedDates.filter((date) => !v37IsPast(date, base.time));
        if (!futureDates.length) {
          toast('Please choose a future date and time. Past slots are removed automatically.');
          return;
        }

        let slotsToSave = futureDates.map((date) => ({
          id: isEdit ? slot.id : makeId('S'),
          date,
          ...base,
        }));

        const savedSlots = await v37SaveSlotsToSupabase(slotsToSave, isEdit ? slot.id : null);

        const settings = read('settings');
        let existingSlots = normaliseScheduleSlots(settings.scheduleSlots || []);
        if (isEdit) existingSlots = existingSlots.filter((item) => item.id !== slot.id);
        settings.scheduleSlots = v37MergeSlots(existingSlots, savedSlots);
        setLocalData('settings', settings);

        if (SUPABASE_MODE && typeof loadSupabaseDataToLocal === 'function') {
          await loadSupabaseDataToLocal({ requireAuth: true });
        }

        closeModal();
        state.teePage = 1;
        adminTimes();
        toast(isEdit ? 'Tee time slot updated.' : `${savedSlots.length} tee time slot(s) saved.`);
      } catch (error) {
        console.error('Save Time Slot failed:', error);
        toast(error.message || 'Failed to save time slot.');
      } finally {
        submitBtn.disabled = false;
        submitBtn.textContent = 'Save Time Slot';
      }
    });
  };
})();

/* V38 Tee Time Save Real Fix
   - Does not reload stale Supabase/local cache immediately after save.
   - Shows actual Supabase error if insert/update is blocked.
   - Inserts/updates tee_slots directly, then merges the returned row into local scheduleSlots.
*/


</script>
<?php
}

function upsi_section_admin_tee_times_module(): void
{
?>
<script>
window.UPSI_SECTION_MODULES = window.UPSI_SECTION_MODULES || {};
window.UPSI_SECTION_MODULES["admin_tee_times"] = {
  title: "Admin Tee Times",
  runtimeChunk: '10/22',
  functions: ["adminTimes", "openTimeForm"]
};
</script>
<?php
}

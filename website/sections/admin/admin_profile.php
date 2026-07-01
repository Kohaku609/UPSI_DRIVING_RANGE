<?php
/**
 * admin_profile.php
 * Bahagian: Admin Profile
 *
 * V108: CSS dan JavaScript runtime dibahagikan ke semua section.
 * Jadi home_page.php tidak lagi memegang semua coding sistem.
 *
 * Runtime chunk: 15/22
 * Fungsi berkaitan untuk presentation: adminSettings, accountSettings
 */


function upsi_section_admin_profile_styles(): void
{
?>
<style>
/* =========================================================
   V108 CSS chunk 15/22
   Bahagian: Admin Profile
   ========================================================= */
.v54-receipt-summary {
  margin-top: 12px;
  padding-top: 10px;
  border-top: 1px dashed var(--line);
}
.button-link {
  border: 0;
  background: transparent;
  padding: 0;
  cursor: pointer;
  font: inherit;
}
.v54-receipt-viewer {
  display: grid;
  gap: 18px;
}
.v54-receipt-frame {
  border: 1px solid var(--line);
  border-radius: 24px;
  background: var(--soft);
  min-height: 280px;
  display: grid;
  place-items: center;
  overflow: hidden;
}
.v54-receipt-frame img,
.v54-receipt-frame iframe {
  width: 100%;
  max-height: 62vh;
  object-fit: contain;
  border: 0;
  background: white;
}
.v54-receipt-frame iframe {
  height: 62vh;
}
.v54-current-receipt-box {
  border: 1px solid var(--line);
  border-radius: 20px;
  background: var(--soft);
  padding: 14px 16px;
  display: flex;
  justify-content: space-between;
  align-items: center;
  gap: 14px;
}
body[data-theme="dark"] .v54-receipt-frame,
body[data-theme="dark"] .v54-current-receipt-box {
  background: linear-gradient(145deg, #0b1710 0%, #102318 100%) !important;
  color: #f4fff7 !important;
  border-color: rgba(94, 227, 159, 0.24) !important;
}
@media (max-width: 700px) {
  .v54-current-receipt-box {
    flex-direction: column;
    align-items: stretch;
  }
}

/* V63 user delete undo banner */
.v63-undo-delete-banner {
  display: flex;
  align-items: center;
  justify-content: space-between;
  gap: 18px;
  margin: 18px 0;
  padding: 22px 24px;
  border-radius: 24px;
}
.v63-undo-delete-banner h3 {
  margin: 4px 0 6px;
}
.v63-undo-delete-banner .btn {
  white-space: nowrap;
}
@media (max-width: 780px) {
  .v63-undo-delete-banner {
    align-items: stretch;
    flex-direction: column;
  }
}


/* V64 manual lane unavailable + feedback filter */
.v64-lane-block-toolbar,
.v64-feedback-filter-toolbar {
  margin-top: 22px;
}
.v64-lane-block-card {
  margin-bottom: 22px;
}
.v64-lane-checkbox-card {
  border: 1px solid rgba(0, 83, 55, .18);
  background: rgba(230, 246, 237, .45);
  border-radius: 20px;
  padding: 16px;
}
.v64-lane-checkbox-grid {
  display: grid;
  grid-template-columns: repeat(auto-fit, minmax(110px, 1fr));
  gap: 10px;
  margin-top: 12px;
}
.v64-lane-check {
  display: flex;
  align-items: center;
  gap: 8px;
  border: 1px solid rgba(0, 83, 55, .18);
  border-radius: 14px;
  padding: 10px 12px;
  background: #fff;
  font-weight: 800;
  color: var(--text);
}
.v64-lane-check input {
  width: 18px;
  height: 18px;
  accent-color: var(--primary);
}
.v64-feedback-filter-label {
  min-width: 260px;
  display: flex;
  flex-direction: column;
  gap: 8px;
  font-weight: 800;
}
.v64-feedback-filter-label select {
  width: 100%;
}

/* =========================================================
   V65 - cleaner lane availability chips + user date calendar
   ========================================================= */
.lane-status-panel {
  overflow: hidden;
}
.lane-status-head {
  flex-wrap: wrap;
  align-items: flex-start;
}
.lane-status-head span {
  white-space: normal;
  text-align: right;
}
.lane-chip-grid {
  display: flex !important;
  flex-wrap: wrap !important;
  gap: 10px !important;
  align-items: stretch;
}
.lane-chip {
  flex: 0 1 128px;
  min-width: 118px;
  max-width: 150px;
  justify-content: center !important;
  align-items: center !important;
  flex-direction: column;
  text-align: center;
  white-space: nowrap;
  overflow: hidden;
  min-height: 54px;
}
.lane-chip b,
.lane-chip small {
  max-width: 100%;
  overflow: hidden;
  text-overflow: ellipsis;
}
.lane-chip small {
  display: block;
  line-height: 1.15;
}
.v65-hidden-date-select {
  position: absolute !important;
  opacity: 0 !important;
  pointer-events: none !important;
  width: 1px !important;
  height: 1px !important;
  margin: 0 !important;
  padding: 0 !important;
}
.v65-date-trigger {
  width: 100%;
  min-height: 58px;
  border: 0;
  border-radius: 18px;
  background: var(--soft-green);
  color: var(--charcoal);
  display: flex;
  align-items: center;
  gap: 12px;
  padding: 8px 14px 8px 0;
  cursor: pointer;
  font: inherit;
  font-weight: 900;
  text-align: left;
}
.v65-date-trigger strong {
  flex: 1;
}
.v65-date-trigger em {
  font-style: normal;
  color: var(--muted);
}
.v65-date-trigger:hover,
.v65-date-trigger:focus {
  outline: none;
  box-shadow: inset 0 0 0 1px rgba(15,81,50,.35);
}
.v65-date-icon {
  margin-left: 10px;
}
.v65-calendar-popover {
  position: fixed;
  z-index: 99999;
  width: min(360px, calc(100vw - 32px));
  background: #fff;
  border: 1px solid rgba(9, 95, 59, .20);
  border-radius: 24px;
  box-shadow: 0 24px 70px rgba(10, 31, 21, .22);
  padding: 18px;
  color: var(--charcoal);
}
.v65-cal-head {
  display: flex;
  align-items: center;
  justify-content: space-between;
  gap: 12px;
  margin-bottom: 8px;
}
.v65-cal-head button {
  width: 40px;
  height: 40px;
  border-radius: 14px;
  border: 1px solid rgba(9, 95, 59, .16);
  background: var(--soft-green);
  color: var(--dark-green);
  font-size: 24px;
  cursor: pointer;
}
.v65-cal-selected {
  color: var(--muted);
  font-weight: 800;
  margin-bottom: 12px;
}
.v65-cal-week,
.v65-cal-grid {
  display: grid;
  grid-template-columns: repeat(7, 1fr);
  gap: 6px;
}
.v65-cal-week span {
  text-align: center;
  font-size: 12px;
  font-weight: 900;
  color: var(--muted);
  padding: 4px 0;
}
.v65-cal-day,
.v65-cal-empty {
  height: 40px;
  border-radius: 13px;
}

</style>
<?php
}

function upsi_section_admin_profile_scripts(): void
{
?>
<script>
/* =========================================================
   V108 JavaScript chunk 15/22
   Bahagian: Admin Profile
   ========================================================= */
/* V50 UX cleanup patch
   - Hide long availability summaries from user cards; users open the availability popup instead.
   - Add View Available Date & Time button for driving range cards and home quick booking.
   - Keep login inputs empty and reduce browser autofill.
   - Debounce search inputs so typing does not lose focus after one character.
*/
(function v50AvailabilityLoginSearchPatch() {
  function v50SafeText(value = '') {
    return typeof escapeHtml === 'function' ? escapeHtml(value) : String(value ?? '');
  }

  function v50PlainMoney(value = 0) {
    return typeof formatPlainMoney === 'function' ? formatPlainMoney(value) : (Number(value || 0).toFixed(2).replace(/\.00$/, ''));
  }

  function v50WhatsappUrl(phone = '', message = '') {
    const digits = String(phone || '').replace(/\D/g, '');
    if (!digits) return '';
    const normalized = digits.startsWith('60') ? digits : digits.startsWith('0') ? `6${digits}` : `60${digits}`;
    return `https://wa.me/${normalized}${message ? `?text=${encodeURIComponent(message)}` : ''}`;
  }

  function v50WhatsappButton(phone = '', label = 'WhatsApp', message = '') {
    const url = v50WhatsappUrl(phone, message);
    if (!url) return `<button class="btn btn-soft" type="button" disabled>${v50SafeText(label)}</button>`;
    return `<a class="btn btn-whatsapp" href="${v50SafeText(url)}" target="_blank" rel="noopener">${v50SafeText(label)}</a>`;
  }

  function v50ActiveLaneCount() {
    try {
      const settings = typeof getSettings === 'function' ? getSettings() : {};
      const lanes = Array.isArray(settings.drivingRangeLanes) ? settings.drivingRangeLanes : [];
      return lanes.length || 10;
    } catch (error) {
      return 10;
    }
  }

  // Driving range cards: no long date/time list. User opens popup to view availability.
  courseCard = function courseCardV50(course = {}) {
    const buckets = typeof getBucketOptions === 'function' ? getBucketOptions(course) : [];
    const activeLaneCount = v50ActiveLaneCount();
    return `
      <article class="card driving-card-clean v50-compact-availability-card">
        <div class="card-top">
          <div><p class="eyebrow">Driving Range</p><h3>${v50SafeText(course.name || 'Driving Range')}</h3></div>
          <div class="card-icon">⛳</div>
        </div>
        <p>${v50SafeText(course.description || '')}</p>
        <div class="price-reference-box compact-price-box">
          <strong>Non-member</strong>
          ${buckets.map((bucket) => `<span>${v50SafeText(bucket.label)} - RM ${v50PlainMoney(bucket.nonMemberPrice)}</span>`).join('')}
          <strong>Member</strong>
          ${buckets.map((bucket) => `<span>${v50SafeText(bucket.label)} - RM ${v50PlainMoney(bucket.memberPrice)}</span>`).join('')}
        </div>
        <ul class="meta-list">
          <li><span>Location</span><strong>${v50SafeText(course.location || '-')}</strong></li>
          <li><span>Bucket Limit</span><strong>1 to ${v50SafeText(course.maxBucketCount || 10)}</strong></li>
          <li><span>Lane Status</span><strong>${activeLaneCount} active</strong></li>
        </ul>
        <div class="card-actions availability-action-row">
          ${typeof availabilityButtonMarkup === 'function' ? availabilityButtonMarkup('driving', course.id || '', 'View Available Date & Time') : ''}
          <button class="btn btn-primary" data-book-course="${v50SafeText(course.id || '')}">Book Driving Range</button>
        </div>
      </article>
    `;
  };

  // Trainer cards: remove long date list from details. Keep only the popup button.
  trainerCard = function trainerCardV50(trainer = {}) {
    return `
      <article class="card trainer-card-clean trainer-date-booking-card v50-compact-availability-card">
        <div class="card-top"><div><p class="eyebrow">Trainer</p><h3>${v50SafeText(trainer.name || 'Trainer')}</h3></div><div class="card-icon">🏌️</div></div>
        <ul class="meta-list">
          <li><span>No. Phone</span><strong>${v50SafeText(trainer.phone || '-')}</strong></li>
          <li><span>Email</span><strong>${v50SafeText(trainer.email || 'Email not provided')}</strong></li>
          <li><span>Alamat</span><strong>${v50SafeText(trainer.address || '-')}</strong></li>
          <li><span>Specialist</span><strong>${v50SafeText(trainer.description || 'Golf coaching and guided practice')}</strong></li>
          <li><span>Training price</span><strong>Discuss directly with trainer</strong></li>
          <li><span>Status</span><strong>${v50SafeText(trainer.status || 'Available')}</strong></li>
        </ul>
        <div class="trainer-info-note"><span class="info-icon">ℹ️</span><p>Time, price and training slot will be arranged directly with the trainer through WhatsApp.</p></div>
        <div class="trainer-availability-row">${typeof availabilityButtonMarkup === 'function' ? availabilityButtonMarkup('trainer', trainer.id || '', 'View Available Date') : ''}</div>
        <div class="card-actions contact-action-stack">
          ${v50WhatsappButton(trainer.phone, 'WhatsApp Trainer', `Hello ${trainer.name || 'Trainer'}, I want to discuss golf training time, price and slot at UPSI Driving Range.`)}
          <button class="btn btn-primary" data-book-trainer="${v50SafeText(trainer.id || '')}">Book Trainer</button>
        </div>
      </article>
    `;
  };

  // User home: add a direct availability button in quick booking area and use compact cards.
  userDashboard = function userDashboardV50() {
    setTitle('Home', 'User / Golfer');
    const allAvailableCourses = read('courses').filter((c) => c.status === 'Available');
    const drivingCourses = getDrivingCourses(allAvailableCourses);
    const trainers = read('trainers').filter((t) => t.status === 'Available');
    const bookings = userBookingList();
    const firstCourse = drivingCourses[0] || null;
    content().dataset.sectionized = 'true';
    content().innerHTML = `
      ${typeof eventCarouselMarkup === 'function' ? eventCarouselMarkup('user') : ''}
      <div class="stat-grid">
        ${statCard('Available Driving Range', drivingCourses.length)}
        ${statCard('Available Trainers', trainers.length)}
        ${statCard('My Bookings', bookings.length)}
      </div>
      <div class="toolbar" style="margin-top:24px">
        <div>
          <p class="eyebrow">Quick Booking</p>
          <h2>Choose Driving Range or Trainer</h2>
          <p class="muted">Driving Range booking uses ball bucket packages. Trainer booking is separated under the Trainer page and does not require bucket selection.</p>
        </div>
        <div class="row-actions">
          <button class="btn btn-primary" data-open-booking>Book Driving Range</button>
          <button class="btn btn-soft" data-view-home-availability ${firstCourse ? '' : 'disabled'}>View Available Date & Time</button>
          <button class="btn btn-soft" data-go-trainers>View Trainers</button>
        </div>
      </div>
      <div class="card-grid two">
        ${drivingCourses.map(courseCard).join('') || empty('No available driving range.')}
      </div>
      <div class="section-subhead">
        <div>
          <p class="eyebrow">Trainer Details</p>
          <h2>Available Golf Trainers</h2>
          <p class="muted">Trainer booking uses available date only. Time and price are discussed with the trainer through WhatsApp.</p>
        </div>
      </div>
      <div class="card-grid two">
        ${trainers.map(trainerCard).join('') || empty('No trainer found.')}
      </div>
    `;
    if (typeof bindEventCarousel === 'function') bindEventCarousel();
    content().querySelector('[data-open-booking]')?.addEventListener('click', () => openBookingModal());
    content().querySelector('[data-view-home-availability]')?.addEventListener('click', () => {
      if (firstCourse && typeof openAvailabilityModal === 'function') openAvailabilityModal('driving', firstCourse.id, `${firstCourse.name || 'Driving Range'} Available Date & Time`);
    });
    content().querySelector('[data-go-trainers]')?.addEventListener('click', () => {
      state.currentPage = 'trainers';
      renderNav();
      renderPage();
    });
    bindCourseButtons();
    bindAvailabilityButtons();
    bindTrainerButtons();
  };

  // Blank login forms after render, even when browser tries to autofill remembered values.
  const v50BaseRenderAuth = renderAuth;
  renderAuth = function renderAuthV50() {
    v50BaseRenderAuth();
    const clearAuthInputs = () => {
      document.querySelectorAll('#userLoginForm input, #adminLoginForm input').forEach((input) => {
        input.value = '';
        input.defaultValue = '';
        input.setAttribute('autocomplete', input.type === 'password' ? 'new-password' : 'off');
        input.setAttribute('autocapitalize', 'none');
        input.setAttribute('spellcheck', 'false');
      });
    };
    clearAuthInputs();
    setTimeout(clearAuthInputs, 50);
    setTimeout(clearAuthInputs, 250);
  };

  // Debounced search that keeps focus so users can type normally.
  bindSearch = function bindSearchV50(callback) {
    const input = content().querySelector('[data-search-input]');
    const clear = content().querySelector('[data-clear-search]');
    let timer = null;
    if (input) {
      input.addEventListener('input', () => {
        state.search = input.value;
        const cursorPosition = input.selectionStart || state.search.length;
        clearTimeout(timer);
        timer = setTimeout(() => {
          callback();
          requestAnimationFrame(() => {
            const refreshedInput = content().querySelector('[data-search-input]');
            if (refreshedInput) {
              refreshedInput.focus();
              const pos = Math.min(cursorPosition, refreshedInput.value.length);
              refreshedInput.setSelectionRange(pos, pos);
            }
          });
        }, 250);
      });
    }
    if (clear) {
      clear.addEventListener('click', () => {
        state.search = '';
        callback();
        requestAnimationFrame(() => content().querySelector('[data-search-input]')?.focus());
      });
    }
  };

  // Debounced Tee Time search too; the old implementation re-rendered after every character.
  const v50BaseAdminTimes = adminTimes;
  adminTimes = function adminTimesV50() {
    v50BaseAdminTimes();
    const root = content();
    const value = root.querySelector('[data-tee-search-value]');
    const aspect = root.querySelector('[data-tee-search-aspect]');
    const clearBtn = root.querySelector('[data-clear-tee-search]');
    let timer = null;

    if (aspect) {
      aspect.onchange = () => {
        state.teeSearchAspect = aspect.value;
        state.teeSearchValue = '';
        state.teePage = 1;
        adminTimes();
      };
    }

    if (value && value.tagName !== 'SELECT') {
      value.oninput = (event) => {
        event.stopImmediatePropagation?.();
        state.teeSearchValue = value.value;
        state.teePage = 1;
        const cursorPosition = value.selectionStart || state.teeSearchValue.length;
        clearTimeout(timer);
        timer = setTimeout(() => {
          adminTimes();
          requestAnimationFrame(() => {
            const refreshed = content().querySelector('[data-tee-search-value]');
            if (refreshed && refreshed.tagName !== 'SELECT') {
              refreshed.focus();
              const pos = Math.min(cursorPosition, refreshed.value.length);
              refreshed.setSelectionRange(pos, pos);
            }
          });
        }, 250);
      };
    }

    if (value && value.tagName === 'SELECT') {
      value.onchange = () => {
        state.teeSearchValue = value.value;
        state.teePage = 1;
        adminTimes();
      };
    }

    if (clearBtn) {
      clearBtn.onclick = () => {
        state.teeSearchAspect = 'all';
        state.teeSearchValue = '';
        state.teePage = 1;
        adminTimes();
      };
    }
  };
})();

/* V50B - final Tee Time search focus fix: clone search controls after old render to remove old one-key listeners. */
(function v50TeeSearchClonePatch() {
  const previousAdminTimes = adminTimes;
  adminTimes = function adminTimesV50B() {
    previousAdminTimes();
    const root = content();
    const oldAspect = root.querySelector('[data-tee-search-aspect]');
    const oldValue = root.querySelector('[data-tee-search-value]');
    const oldClear = root.querySelector('[data-clear-tee-search]');

    const aspect = oldAspect ? oldAspect.cloneNode(true) : null;
    const value = oldValue ? oldValue.cloneNode(true) : null;
    const clearBtn = oldClear ? oldClear.cloneNode(true) : null;

    if (oldAspect && aspect) oldAspect.replaceWith(aspect);
    if (oldValue && value) oldValue.replaceWith(value);
    if (oldClear && clearBtn) oldClear.replaceWith(clearBtn);

    if (aspect) {
      aspect.addEventListener('change', () => {
        state.teeSearchAspect = aspect.value;
        state.teeSearchValue = '';
        state.teePage = 1;
        adminTimes();
      });
    }

    let timer = null;
    if (value && value.tagName !== 'SELECT') {
      value.addEventListener('input', () => {
        state.teeSearchValue = value.value;
        state.teePage = 1;
        const cursorPosition = value.selectionStart || state.teeSearchValue.length;
        clearTimeout(timer);
        timer = setTimeout(() => {
          adminTimes();
          requestAnimationFrame(() => {
            const refreshed = content().querySelector('[data-tee-search-value]');
            if (refreshed && refreshed.tagName !== 'SELECT') {
              refreshed.focus();
              const pos = Math.min(cursorPosition, refreshed.value.length);
              refreshed.setSelectionRange(pos, pos);
            }
          });
        }, 250);
      });
    }

    if (value && value.tagName === 'SELECT') {
      value.addEventListener('change', () => {
        state.teeSearchValue = value.value;
        state.teePage = 1;
        adminTimes();
      });
    }

    if (clearBtn) {
      clearBtn.addEventListener('click', () => {
        state.teeSearchAspect = 'all';
        state.teeSearchValue = '';
        state.teePage = 1;
        adminTimes();
      });
    }
  };
})();

/* =========================================================
   V51 PATCH - compact trainer date display.
   - Trainer cards no longer show long date text.
   - Admin trainer dates are grouped by trainer name button.
   ========================================================= */
(function v51TrainerDateGroupedButtonsPatch() {
  const TRAINER_DATE_STORAGE_V51 = 'upsiGolfTrainerAvailableDates';
  if (typeof DB_TABLES === 'object') DB_TABLES.trainerAvailableDates = DB_TABLES.trainerAvailableDates || 'trainer_available_dates';

  function v51Today() {
    return new Date().toISOString().slice(0, 10);
  }

  function v51MakeId(prefix = 'TD') {
    if (typeof makeId === 'function') return makeId(prefix);
    return `${prefix}${Date.now()}${Math.random().toString(16).slice(2)}`;
  }

  function v51ReadTrainerDates() {
    try {
      const list = JSON.parse(localStorage.getItem(TRAINER_DATE_STORAGE_V51) || '[]') || [];
      return list.filter((item) => item && item.trainerId && item.date);
    } catch (error) {
      return [];
    }
  }

  function v51TrainerNameById(trainerId = '') {
    return (read('trainers').find((trainer) => String(trainer.id) === String(trainerId)) || {}).name || 'Trainer';
  }

  function v51SetTrainerDates(list = []) {
    const clean = (list || [])
      .filter((item) => item && item.trainerId && item.date)
      .map((item) => ({
        id: item.id || v51MakeId('TD'),
        trainerId: item.trainerId,
        trainerName: item.trainerName || v51TrainerNameById(item.trainerId),
        date: item.date,
        status: String(item.status || 'Available').toLowerCase() === 'available' || String(item.status || '').toLowerCase() === 'active' ? 'Available' : 'Unavailable',
        createdAt: item.createdAt || new Date().toISOString(),
      }))
      .sort((a, b) => String(a.trainerName).localeCompare(String(b.trainerName)) || String(a.date).localeCompare(String(b.date)));
    localStorage.setItem(TRAINER_DATE_STORAGE_V51, JSON.stringify(clean));
    return clean;
  }

  function v51LocalFromDb(row = {}) {
    return {
      id: row.id || v51MakeId('TD'),
      trainerId: row.trainer_id || row.trainerId || '',
      trainerName: row.trainers?.full_name || row.trainerName || v51TrainerNameById(row.trainer_id || row.trainerId),
      date: row.available_date || row.date || '',
      status: String(row.status || 'active').toLowerCase() === 'active' || String(row.status || '').toLowerCase() === 'available' ? 'Available' : 'Unavailable',
      createdAt: row.created_at || row.createdAt || new Date().toISOString(),
    };
  }

  async function v51FetchTrainerDatesFromSupabase() {
    if (!SUPABASE_MODE || !supabaseClient) return v51ReadTrainerDates();
    const table = DB_TABLES.trainerAvailableDates || 'trainer_available_dates';
    const { data, error } = await supabaseClient
      .from(table)
      .select('*, trainers:trainer_id(full_name)')
      .order('available_date', { ascending: true });
    if (error) {
      console.warn('V51 trainer date fetch skipped:', error.message || error);
      return v51ReadTrainerDates();
    }
    return v51SetTrainerDates((data || []).map(v51LocalFromDb));
  }

  async function v51SaveTrainerDate(item = {}) {
    const localItem = {
      id: item.id || v51MakeId('TD'),
      trainerId: item.trainerId,
      trainerName: v51TrainerNameById(item.trainerId),
      date: item.date,
      status: item.status || 'Available',
      createdAt: item.createdAt || new Date().toISOString(),
    };
    if (!localItem.trainerId || !localItem.date) return false;

    if (SUPABASE_MODE && supabaseClient && isUuid(localItem.trainerId)) {
      const table = DB_TABLES.trainerAvailableDates || 'trainer_available_dates';
      const payload = {
        trainer_id: localItem.trainerId,
        available_date: localItem.date,
        status: localItem.status === 'Available' ? 'active' : 'inactive',
      };
      let result;
      if (isUuid(localItem.id)) {
        result = await supabaseClient.from(table).update(payload).eq('id', localItem.id).select('*, trainers:trainer_id(full_name)').maybeSingle();
      } else {
        result = await supabaseClient.from(table).upsert(payload, { onConflict: 'trainer_id,available_date' }).select('*, trainers:trainer_id(full_name)').maybeSingle();
      }
      if (result.error) {
        console.error('V51 trainer date save error:', result.error);
        toast('Trainer date failed to save. Check trainer_available_dates policy.');
        return false;
      }
      await v51FetchTrainerDatesFromSupabase();
      return true;
    }

    const list = v51ReadTrainerDates();
    const index = list.findIndex((date) => String(date.id) === String(localItem.id) || (String(date.trainerId) === String(localItem.trainerId) && String(date.date) === String(localItem.date)));
    if (index >= 0) list[index] = { ...list[index], ...localItem };
    else list.push(localItem);
    v51SetTrainerDates(list);
    return true;
  }

  async function v51DeleteTrainerDate(id = '') {
    if (!id) return false;
    if (SUPABASE_MODE && supabaseClient && isUuid(id)) {
      const table = DB_TABLES.trainerAvailableDates || 'trainer_available_dates';
      const { error } = await supabaseClient.from(table).delete().eq('id', id);
      if (error) {
        console.error('V51 trainer date delete error:', error);
        toast('Trainer date failed to delete. Check Supabase policy.');
        return false;
      }
      await v51FetchTrainerDatesFromSupabase();
      return true;
    }
    v51SetTrainerDates(v51ReadTrainerDates().filter((item) => String(item.id) !== String(id)));
    return true;
  }

  function v51TrainerDatesFor(trainerId = '', includePast = true) {
    const today = v51Today();
    return v51ReadTrainerDates()
      .filter((item) => !trainerId || String(item.trainerId) === String(trainerId))
      .filter((item) => includePast || item.date >= today)
      .sort((a, b) => String(a.date).localeCompare(String(b.date)));
  }

  function v51AvailableDatesForTrainer(trainerId = '') {
    const today = v51Today();
    return v51TrainerDatesFor(trainerId, false)
      .filter((item) => item.status === 'Available')
      .map((item) => item.date)
      .filter((date, index, list) => list.indexOf(date) === index)
      .sort();
  }

  function v51WhatsappNumber(phone = '') {
    let digits = String(phone || '').replace(/[^0-9]/g, '');
    if (!digits) return '';
    if (digits.startsWith('0')) digits = `60${digits.slice(1)}`;
    return digits;
  }

  function v51WhatsappButton(phone = '', label = 'WhatsApp Trainer', text = '') {
    const number = v51WhatsappNumber(phone);
    if (!number) return '<button class="btn btn-soft" type="button" disabled>No WhatsApp</button>';
    const url = `https://wa.me/${number}?text=${encodeURIComponent(text || 'Hello, I want to discuss golf training at UPSI Driving Range.')}`;
    return `<a class="btn btn-soft whatsapp-btn" href="${escapeHtml(url)}" target="_blank" rel="noopener noreferrer">${escapeHtml(label)}</a>`;
  }

  function v51TrainerAvailabilityButton(trainerId = '', label = 'View Available Date') {
    const count = v51AvailableDatesForTrainer(trainerId).length;
    return `<button class="btn btn-soft availability-btn" type="button" data-v51-view-trainer-dates="${escapeHtml(trainerId)}" ${count ? '' : 'disabled'}>${escapeHtml(count ? `${label} (${count})` : 'No available date')}</button>`;
  }

  function v51OpenTrainerDatesModal(trainerId = '') {
    const trainer = read('trainers').find((item) => String(item.id) === String(trainerId));
    const dates = v51AvailableDatesForTrainer(trainerId);
    openModal(`
      <div class="modal-head">
        <div>
          <p class="eyebrow">Trainer Availability</p>
          <h2>${escapeHtml(trainer?.name || 'Trainer')}</h2>
          <p class="muted">User hanya perlu pilih tarikh. Masa dan harga bincang terus dengan trainer melalui WhatsApp.</p>
        </div>
        <button class="close-btn" data-close-modal>&times;</button>
      </div>
      <div class="availability-list trainer-date-only-list">
        ${dates.length ? dates.map((date) => `<div class="availability-day"><strong>${escapeHtml(formatDateDisplay(date))}</strong><div><span>Date only</span><span>Time via WhatsApp</span></div></div>`).join('') : '<p class="muted">No available date set yet.</p>'}
      </div>
    `);
  }

  function v51BindTrainerDateViewButtons(root = document) {
    root.querySelectorAll('[data-v51-view-trainer-dates]').forEach((btn) => {
      btn.addEventListener('click', () => v51OpenTrainerDatesModal(btn.dataset.v51ViewTrainerDates || ''));
    });
    root.querySelectorAll('[data-v51-admin-trainer-dates]').forEach((btn) => {
      btn.addEventListener('click', () => v51OpenAdminTrainerDatesModal(btn.dataset.v51AdminTrainerDates || ''));
    });
  }

  function v51TrainerCompactCard(trainer = {}, includeAdminActions = false) {
    return `
      <article class="card trainer-card-clean trainer-date-booking-card v51-compact-trainer-card">
        <div class="card-top"><div><p class="eyebrow">Trainer</p><h3>${escapeHtml(trainer.name || 'Trainer')}</h3></div><div class="card-icon">🏌️</div></div>
        <ul class="meta-list">
          <li><span>No. Phone</span><strong>${escapeHtml(trainer.phone || '-')}</strong></li>
          <li><span>Email</span><strong>${escapeHtml(trainer.email || 'Email not provided')}</strong></li>
          <li><span>Alamat</span><strong>${escapeHtml(trainer.address || '-')}</strong></li>
          <li><span>Specialist</span><strong>${escapeHtml(trainer.description || 'Golf coaching and guided practice')}</strong></li>
          <li><span>Training price</span><strong>Discuss directly with trainer</strong></li>
          <li><span>Status</span><strong>${escapeHtml(trainer.status || 'Available')}</strong></li>
        </ul>
        <div class="trainer-info-note"><span class="info-icon">ℹ️</span><p>Time, price and training slot will be arranged directly with the trainer through WhatsApp.</p></div>
        <div class="trainer-availability-row">${v51TrainerAvailabilityButton(trainer.id, 'View Available Date')}</div>
        <div class="card-actions contact-action-stack">
          ${v51WhatsappButton(trainer.phone, 'WhatsApp Trainer', `Hello ${trainer.name || 'Trainer'}, I want to discuss golf training time, price and slot at UPSI Driving Range.`)}
          ${includeAdminActions ? `
            <button class="btn btn-soft" data-edit-trainer="${escapeHtml(trainer.id || '')}">Edit</button>
            <button class="btn btn-danger-soft" data-delete-trainer="${escapeHtml(trainer.id || '')}">Delete</button>
          ` : `<button class="btn btn-primary" data-book-trainer="${escapeHtml(trainer.id || '')}">Book Trainer</button>`}
        </div>
      </article>
    `;
  }

  function v51OpenTrainerDateForm(existing = null, preferredTrainerId = '') {
    const trainers = read('trainers').filter((trainer) => trainer.status !== 'Unavailable');
    if (!trainers.length) return toast('Please add an available trainer first.');
    const selectedTrainerId = existing?.trainerId || preferredTrainerId || trainers[0]?.id || '';
    openModal(`
      <div class="modal-head"><div><p class="eyebrow">Trainer Date</p><h2>${existing ? 'Edit Trainer Available Date' : 'Add Trainer Available Date'}</h2><p class="muted">Tarikh ini akan dipaparkan dalam website dan app kalau app baca table trainer_available_dates.</p></div><button class="close-btn" data-close-modal>&times;</button></div>
      <form id="trainerDateFormV51" class="form-grid">
        <label class="wide">Trainer
          <select name="trainerId" required>${trainers.map((trainer) => `<option value="${escapeHtml(trainer.id)}" ${String(selectedTrainerId) === String(trainer.id) ? 'selected' : ''}>${escapeHtml(trainer.name)}</option>`).join('')}</select>
        </label>
        <label>Available Date<input type="date" name="date" value="${escapeHtml(existing?.date || v51Today())}" required></label>
        <label>Status<select name="status"><option value="Available" ${existing?.status !== 'Unavailable' ? 'selected' : ''}>Available</option><option value="Unavailable" ${existing?.status === 'Unavailable' ? 'selected' : ''}>Unavailable</option></select></label>
        <button class="btn btn-primary wide" type="submit">Save Trainer Date</button>
      </form>
    `);
    document.getElementById('trainerDateFormV51')?.addEventListener('submit', async (event) => {
      event.preventDefault();
      const data = new FormData(event.currentTarget);
      const ok = await v51SaveTrainerDate({
        id: existing?.id,
        trainerId: data.get('trainerId'),
        date: data.get('date'),
        status: data.get('status'),
        createdAt: existing?.createdAt,
      });
      if (!ok) return;
      closeModal();
      adminTrainers();
      toast('Trainer available date saved.');
    });
  }

  function v51OpenAdminTrainerDatesModal(trainerId = '') {
    const trainer = read('trainers').find((item) => String(item.id) === String(trainerId));
    const rows = v51TrainerDatesFor(trainerId, true);
    openModal(`
      <div class="modal-head">
        <div>
          <p class="eyebrow">Trainer Available Dates</p>
          <h2>${escapeHtml(trainer?.name || 'Trainer')}</h2>
          <p class="muted">Semua tarikh dan status trainer dikumpulkan dalam popup ini.</p>
        </div>
        <button class="close-btn" data-close-modal>&times;</button>
      </div>
      <div class="row-actions modal-actions-top"><button class="btn btn-primary" type="button" data-v51-modal-add-trainer-date="${escapeHtml(trainerId)}">Add Date</button></div>
      <div class="table-card compact-modal-table"><div class="table-wrap"><table>
        <thead><tr><th>Date</th><th>Status</th><th>Action</th></tr></thead>
        <tbody>
          ${rows.length ? rows.map((item) => `
            <tr>
              <td><strong>${escapeHtml(formatDateDisplay(item.date))}</strong><br><span class="muted">${escapeHtml(item.date)}</span></td>
              <td>${statusPill(item.status || 'Available')}</td>
              <td><div class="row-actions compact-actions"><button class="btn btn-soft" data-v51-modal-edit-trainer-date="${escapeHtml(item.id)}">Edit</button><button class="btn btn-danger-soft" data-v51-modal-delete-trainer-date="${escapeHtml(item.id)}">Delete</button></div></td>
            </tr>
          `).join('') : '<tr><td colspan="3">No trainer date record yet.</td></tr>'}
        </tbody>
      </table></div></div>
    `);
    document.querySelector('[data-v51-modal-add-trainer-date]')?.addEventListener('click', () => v51OpenTrainerDateForm(null, trainerId));
    document.querySelectorAll('[data-v51-modal-edit-trainer-date]').forEach((btn) => btn.addEventListener('click', () => {
      const item = v51ReadTrainerDates().find((date) => String(date.id) === String(btn.dataset.v51ModalEditTrainerDate));
      if (item) v51OpenTrainerDateForm(item, trainerId);
    }));
    document.querySelectorAll('[data-v51-modal-delete-trainer-date]').forEach((btn) => btn.addEventListener('click', () => {
      const item = v51ReadTrainerDates().find((date) => String(date.id) === String(btn.dataset.v51ModalDeleteTrainerDate));
      if (!item) return;
      confirmAction({
        title: 'Delete Trainer Date',
        message: `Delete ${formatDateDisplay(item.date)} for ${trainer?.name || 'Trainer'}?`,
        confirmText: 'Delete Date',
        danger: true,
        onConfirm: async () => {
          const ok = await v51DeleteTrainerDate(item.id);
          if (!ok) return;
          closeModal();
          adminTrainers();
          toast('Trainer available date deleted.');
        },
      });
    }));
  }

  // Keep public trainer cards compact everywhere.
  trainerCard = function trainerCardV51(trainer = {}) {
    return v51TrainerCompactCard(trainer, false);
  };

  // Admin trainer page: date records are grouped by trainer button, not one long table.
  adminTrainers = function adminTrainersV51() {
    setTitle('Trainers', 'Administrator Panel');
    const trainers = read('trainers');
    const dates = v51ReadTrainerDates();
    content().innerHTML = `
      <div class="toolbar">
        <div><p class="eyebrow">Trainer Management</p><h2>Manage trainer contact details</h2><p class="muted">Trainer booking guna tarikh sahaja. Masa, harga dan slot dibincang melalui WhatsApp.</p></div>
        <button class="btn btn-primary" data-add-trainer>Add Trainer</button>
      </div>

      <div class="toolbar trainer-date-toolbar v51-trainer-date-toolbar">
        <div><p class="eyebrow">Trainer Available Dates</p><h2>Date records by trainer</h2><p class="muted">Tekan nama trainer untuk lihat semua tarikh dan status trainer tersebut.</p></div>
        <button class="btn btn-primary" data-add-trainer-date>Add Trainer Date</button>
      </div>
      <div class="card trainer-date-button-panel">
        <div class="trainer-date-button-grid">
          ${trainers.length ? trainers.map((trainer) => {
            const rows = dates.filter((item) => String(item.trainerId) === String(trainer.id));
            const available = rows.filter((item) => item.status === 'Available').length;
            const unavailable = rows.filter((item) => item.status !== 'Available').length;
            return `
              <button class="trainer-date-summary-btn" type="button" data-v51-admin-trainer-dates="${escapeHtml(trainer.id)}">
                <span class="trainer-date-summary-name">${escapeHtml(trainer.name || 'Trainer')}</span>
                <span class="trainer-date-summary-meta">${available} available${unavailable ? ` • ${unavailable} unavailable` : ''}</span>
              </button>
            `;
          }).join('') : '<p class="muted">No trainer record.</p>'}
        </div>
      </div>

      <div style="height:18px"></div>
      <div class="section-subhead">
        <div><p class="eyebrow">Trainer Records</p><h2>Trainer List</h2><p class="muted">Edit or delete trainer records with confirmation popup.</p></div>
      </div>
      <div class="card-grid">
        ${trainers.map((trainer) => v51TrainerCompactCard(trainer, true)).join('') || empty('No trainer record.')}
      </div>
    `;
    content().querySelector('[data-add-trainer]')?.addEventListener('click', () => openTrainerForm());
    content().querySelector('[data-add-trainer-date]')?.addEventListener('click', () => v51OpenTrainerDateForm());
    content().querySelectorAll('[data-edit-trainer]').forEach((btn) => btn.addEventListener('click', () => openTrainerForm(read('trainers').find((trainer) => String(trainer.id) === String(btn.dataset.editTrainer)))));
    v51BindTrainerDateViewButtons(content());
    bindAvailabilityButtons();
  };

  // Make global availability button binding aware of the V51 trainer buttons.
  const v51PreviousBindAvailabilityButtons = bindAvailabilityButtons;
  bindAvailabilityButtons = function bindAvailabilityButtonsV51() {
    v51PreviousBindAvailabilityButtons();
    v51BindTrainerDateViewButtons(content());
  };

  // Refresh trainer date cache after Supabase sync.
  const v51PreviousLoadSupabaseDataToLocal = loadSupabaseDataToLocal;
  loadSupabaseDataToLocal = async function loadSupabaseDataToLocalV51(options = {}) {
    const result = await v51PreviousLoadSupabaseDataToLocal(options);
    await v51FetchTrainerDatesFromSupabase();
    return result;
  };

  // If this patch loads after data is already present, normalize cache once.
  v51SetTrainerDates(v51ReadTrainerDates());
})();

/* =========================================================
   V53 PATCH - Website-only clean flow from V51
   - Trainer stays date-only. Removes trainer fee/hour fields.
   - Trainer dates support single or bulk/range add.
   - Tee Time is Driving Range only, with time kept.
   - Booking records use cleaner cards + View Booking detail.
   - Contact & Feedback / Contact & Review cards with editable contact info.
   - Calendar-style picker for user booking dates.
   - Password show/hide eye button.
   ========================================================= */


</script>
<?php
}

function upsi_section_admin_profile_module(): void
{
?>
<script>
window.UPSI_SECTION_MODULES = window.UPSI_SECTION_MODULES || {};
window.UPSI_SECTION_MODULES["admin_profile"] = {
  title: "Admin Profile",
  runtimeChunk: '15/22',
  functions: ["adminSettings", "accountSettings"]
};
</script>
<?php
}

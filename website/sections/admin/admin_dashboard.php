<?php
/**
 * admin_dashboard.php
 * Bahagian: Admin Dashboard
 *
 * V108: CSS dan JavaScript runtime dibahagikan ke semua section.
 * Jadi home_page.php tidak lagi memegang semua coding sistem.
 *
 * Runtime chunk: 6/22
 * Fungsi berkaitan untuk presentation: adminDashboard, renderAdminPage
 * Template function: upsi_section_admin_dashboard_template()
 */


function upsi_section_admin_dashboard_template(): void
{
?>
<template id="shell-template">
    <div class="app-shell">
      <aside class="sidebar">
        <div class="side-brand">
          <div class="brand-logo small image-logo"><img class="brand-logo-img" src="/assets/upsi-driving-range-logo.png" alt="UPSI Golf logo" /></div>
          <div>
            <h2>UPSI Golf</h2>
            <p>Booking System</p>
          </div>
        </div>
        <nav id="sideNav" class="side-nav"></nav>
        <button class="btn btn-danger-soft full" id="logoutBtn">Logout</button>
      </aside>

      <section class="main-area">
        <header class="topbar">
          <div class="topbar-title">
            <p class="eyebrow" id="roleLabel">Dashboard</p>
            <h1 id="pageTitle">Dashboard</h1>
          </div>
          <div class="topbar-right">
            <div class="profile-chip" id="profileChip"></div>
          </div>
        </header>
        <div id="pageContent" class="page-content"></div>
      </section>
    </div>
</template>
<div id="modalRoot" class="modal-root hidden"></div>
<?php
}

function upsi_section_admin_dashboard_styles(): void
{
?>
<style>
/* =========================================================
   V108 CSS chunk 6/22
   Bahagian: Admin Dashboard
   ========================================================= */
.topbar {
  border-bottom: 2px solid rgba(15, 81, 50, 0.10);
}

.admin-account-card {
  margin-top: 22px;
}

.admin-account-table {
  margin-top: 16px;
  box-shadow: none;
}

.danger-zone {
  margin-top: 6px;
  padding: 16px;
  border: 1.6px solid rgba(220, 38, 38, 0.22);
  border-radius: 18px;
  background: #fff5f5;
}

.danger-zone p {
  margin: 0 0 12px;
  color: var(--danger);
  line-height: 1.45;
}

.danger-zone span {
  color: #7f1d1d;
  font-weight: 600;
}

@media (max-width: 1120px) {
  .enhanced-auth-layout {
    grid-template-columns: 1fr;
  }
  .auth-card-modern {
    max-width: 100%;
  }
}

@media (max-width: 720px) {
  .login-choice-grid {
    grid-template-columns: 1fr;
  }
}

/* V12 app-like login redesign */
.auth-app-layout {
  min-height: 100vh;
  padding: 36px 20px 54px;
  display: grid;
  gap: 28px;
  justify-items: center;
  align-content: start;
  background:
    radial-gradient(circle at 50% 0%, rgba(25, 135, 84, 0.10), transparent 30%),
    linear-gradient(180deg, #f4fbf5 0%, #ffffff 40%, #f0f7f2 100%);
}

.auth-app-card {
  width: min(100%, 980px);
  padding: 42px 26px 26px;
  border-radius: 34px;
  background: rgba(255,255,255,0.96);
  border: 2px solid rgba(15,81,50,0.14);
  box-shadow: 0 22px 54px rgba(15,81,50,0.10);
}

.auth-app-logo-wrap {
  display: grid;
  place-items: center;
  margin-bottom: 14px;
}

.auth-app-logo-tile {
  width: 212px;
  height: 148px;
  border-radius: 26px;
  background: #dfeee3;
  display: grid;
  place-items: center;
  border: 1.5px solid rgba(15,81,50,0.10);
}

.auth-app-logo-circle {
  width: 140px;
  height: 140px;
  border-radius: 50%;
  display: grid;
  place-items: center;
  text-align: center;
  background: #fff;
  border: 5px solid #111;
  box-shadow: inset 0 0 0 4px rgba(15,81,50,0.08);
  position: relative;
  color: #111;
}

.logo-ball {
  position: absolute;
  top: 10px;
  font-size: 23px;
}

.logo-text {
  font-weight: 900;
  line-height: 0.9;
  letter-spacing: 0.02em;
  font-size: 19px;
  margin-top: 16px;
}

.auth-app-heading {
  text-align: center;
  margin-bottom: 26px;
}

.auth-app-heading h1 {
  margin: 0 0 6px;
  font-size: clamp(34px, 5vw, 56px);
  letter-spacing: -0.04em;
}

.auth-app-heading p {
  margin: 0;
  font-size: 18px;
  color: var(--charcoal);
  font-weight: 700;
}

.auth-switch {
  display: grid;
  grid-template-columns: repeat(2, 1fr);
  border: 2px solid rgba(15,81,50,0.34);
  border-radius: 999px;
  overflow: hidden;
  background: #fff;
  margin-bottom: 22px;
}

.auth-switch-btn {
  display: inline-flex;
  align-items: center;
  justify-content: center;
  gap: 10px;
  min-height: 54px;
  padding: 12px 18px;
  border: 0;
  background: transparent;
  color: #1f2a32;
  font-size: 18px;
  transition: background .18s ease, color .18s ease;
}

.auth-switch-btn + .auth-switch-btn {
  border-left: 1.5px solid rgba(15,81,50,0.26);
}

.auth-switch-btn.active {
  background: #cfe2d1;
  color: var(--dark-green);
}

.auth-tab-panel.hidden {
  display: none !important;
}

.app-login-form {
  display: grid;
  gap: 18px;
}

.icon-field {
  display: grid;
  grid-template-columns: 58px 1fr;
  align-items: center;
  min-height: 64px;
  border-radius: 18px;
  background: #edf5ef;
  border: 2px solid #e3ece5;
  overflow: hidden;
}

.icon-field .field-icon {
  display: grid;
  place-items: center;
  color: #445047;
  font-size: 26px;
}

.icon-field input {
  width: 100%;
  min-height: 62px;
  border: 0;
  outline: none;
  background: transparent;
  padding: 0 18px 0 0;
  font-size: 17px;
  color: var(--charcoal);
}

.icon-field input::placeholder {
  color: #6e7a71;
}

.auth-inline-row {
  display: flex;
  justify-content: space-between;
  align-items: center;
  gap: 12px;
  min-height: 24px;
}

.inline-link,
.auth-register-link {
  border: 0;
  background: transparent;
  color: #16a34a;
  font-weight: 700;
  padding: 0;
}

.inline-link:hover,
.auth-register-link:hover {
  text-decoration: underline;
}

.auth-submit-btn {
  min-height: 56px;
  border-radius: 18px;
  font-size: 18px;
  font-weight: 900;
}

.centered-note {
  text-align: center;
}

.auth-register-link {
  justify-self: center;
  margin-top: 6px;
}

.app-register-panel {
  margin-top: 16px;
  background: #fbfdfb;
}

.compact-auth-features {
  width: min(100%, 1120px);
  padding-top: 0;
}

.compact-feature-grid {
  gap: 16px;
}

.compact-feature-card {
  border-width: 2px;
}

@media (max-width: 760px) {
  .auth-app-card {
    padding: 30px 16px 20px;
    border-radius: 24px;
  }

  .auth-app-logo-tile {
    width: 180px;
    height: 132px;
  }

  .auth-app-logo-circle {
    width: 124px;
    height: 124px;
  }

  .logo-text {
    font-size: 17px;
  }

  .auth-switch-btn {
    font-size: 16px;
    min-height: 50px;
  }

  .icon-field {
    grid-template-columns: 50px 1fr;
    min-height: 58px;
  }

  .icon-field input {
    min-height: 56px;
    font-size: 16px;
  }
}

/* V13 category section layout for cleaner user/admin pages */
.page-content {
  display: grid;
  gap: 24px;
}

.content-section {
  background: rgba(255, 255, 255, 0.96);
  border: 2px solid rgba(15, 81, 50, 0.18);
  border-radius: 26px;
  box-shadow: 0 18px 42px rgba(15, 81, 50, 0.08);
  overflow: hidden;
}

.content-section-header {
  display: flex;
  align-items: flex-start;
  gap: 15px;
  padding: 22px 24px;
  background:
    linear-gradient(135deg, rgba(232, 245, 233, 0.92), rgba(255,255,255,0.98));
  border-bottom: 2px solid rgba(15, 81, 50, 0.12);
}


</style>
<?php
}

function upsi_section_admin_dashboard_scripts(): void
{
?>
<script>
/* =========================================================
   V108 JavaScript chunk 6/22
   Bahagian: Admin Dashboard
   ========================================================= */
async function createPersonalNotification({ recipient, title, message, imageUrl = '', type = 'personal' }) {
  const sender = getFreshSessionUser();
  const payload = {
    id: makeId('N'),
    recipientId: recipient.id,
    senderId: sender.id,
    title,
    message,
    imageUrl,
    type,
    isRead: false,
    createdAt: new Date().toISOString(),
  };
  const items = read('notifications');
  items.unshift(payload);
  setLocalData('notifications', items);
  if (personalNotificationsSupabaseEnabled() && isUuid(recipient.id)) {
    const { data, error } = await supabaseClient
      .from(DB_TABLES.notifications)
      .insert(localNotificationToDb(payload))
      .select()
      .maybeSingle();
    if (error) {
      console.error('Notification insert error:', error);
      toast(error.message || 'Failed to send notification.');
      return null;
    }
    if (data?.id) payload.id = data.id;
  }
  return payload;
}

function openSendMessageModal(recipient) {
  if (!recipient?.id) return toast('Recipient not found.');
  openModal(`
    <div class="modal-head">
      <div>
        <p class="eyebrow">Send Personal Notification</p>
        <h2>${escapeHtml(recipient.fullName)}</h2>
        <p class="muted">This message will appear in the recipient notification bell. The recipient cannot reply.</p>
      </div>
      <button class="close-btn" data-close-modal>&times;</button>
    </div>
    <form id="personalMessageForm" class="form-grid">
      <label class="wide">Title<input name="title" value="Message from Administration" required></label>
      <label class="wide">Message<textarea name="message" placeholder="Write your message here..." required></textarea></label>
      <label class="wide">Image / Notice Attachment <input name="image" type="file" accept="image/*"></label>
      <button class="btn btn-primary wide" type="submit">Send Notification</button>
    </form>
  `);
  document.getElementById('personalMessageForm').addEventListener('submit', async (event) => {
    event.preventDefault();
    const form = new FormData(event.currentTarget);
    const imageUrl = await fileToDataUrl(form.get('image'), 1800000);
    const notification = await createPersonalNotification({
      recipient,
      title: form.get('title').trim(),
      message: form.get('message').trim(),
      imageUrl,
    });
    if (notification) {
      closeModal();
      toast('Personal notification sent.');
    }
  });
}

function openProfileDetailModal(user) {
  const bookings = read('bookings').filter((booking) => booking.userId === user.id);
  openModal(`
    <div class="modal-head">
      <div>
        <p class="eyebrow">View Details</p>
        <h2>${escapeHtml(user.fullName)}</h2>
        <p class="muted">Profile details and related booking summary.</p>
      </div>
      <button class="close-btn" data-close-modal>&times;</button>
    </div>
    <div class="profile-detail-panel">
      <div class="profile-detail-head">
        ${avatarMarkup(user, 'avatar large')}
        <div>
          <h3>${escapeHtml(user.fullName)}</h3>
          <p>${escapeHtml(user.email)}</p>
          ${statusPill(user.status || 'Active')}
        </div>
      </div>
      <ul class="meta-list">
        <li><span>Phone</span><strong>${escapeHtml(user.phone || '-')}</strong></li>
        <li><span>Address / Note</span><strong>${escapeHtml(user.address || '-')}</strong></li>
        <li><span>Role</span><strong>${escapeHtml(user.supabaseRole || user.role || '-')}</strong></li>
        <li><span>Joined</span><strong>${new Date(user.createdAt || Date.now()).toLocaleDateString()}</strong></li>
        ${user.status === 'Inactive' ? `<li><span>Inactive Reason</span><strong>${escapeHtml(user.inactiveReason || '-')}</strong></li>` : ''}
        <li><span>Total Bookings</span><strong>${bookings.length}</strong></li>
      </ul>
    </div>
  `);
}

adminUsers = function v26AdminUsers() {
  setTitle('Manage Users', 'Administrator Panel');
  const users = read('users').filter((u) => u.role === 'user');
  content().dataset.sectionized = 'true';
  content().innerHTML = `
    <div class="toolbar">
      <div>
        <p class="eyebrow">Customer Information</p>
        <h2>Registered user accounts</h2>
        <p class="muted">View user profile details or send one-way personal notifications.</p>
      </div>
      ${searchBox('Search name, email or phone')}
    </div>
    <div class="table-card"><div class="table-wrap"><table>
      <thead><tr><th>Name</th><th>Email</th><th>Phone</th><th>Status</th><th>Registered</th><th>Action</th></tr></thead>
      <tbody>
        ${filterItems(users, ['fullName', 'email', 'phone']).map((u) => `
          <tr>
            <td><strong>${escapeHtml(u.fullName)}</strong></td>
            <td>${escapeHtml(u.email)}</td>
            <td>${escapeHtml(u.phone || '-')}</td>
            <td>${statusPill(u.status)}</td>
            <td>${new Date(u.createdAt || Date.now()).toLocaleDateString()}</td>
            <td>
              <div class="row-actions compact-actions">
                <button class="btn btn-soft" data-view-user="${u.id}">View Details</button>
                <button class="btn btn-primary" data-message-user="${u.id}">Message</button>
                <button class="btn ${u.status === 'Active' ? 'btn-danger-soft' : 'btn-soft'}" data-toggle-user="${u.id}">${u.status === 'Active' ? 'Deactivate' : 'Activate'}</button>
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
  content().querySelectorAll('[data-message-user]').forEach((btn) => btn.addEventListener('click', () => {
    const user = read('users').find((item) => item.id === btn.dataset.messageUser);
    if (user) openSendMessageModal(user);
  }));
  content().querySelectorAll('[data-toggle-user]').forEach((btn) => {
    btn.addEventListener('click', () => {
      const all = read('users');
      const user = all.find((u) => u.id === btn.dataset.toggleUser);
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

adminAccountManagementSection = function v26AdminAccountManagementSection(currentUser) {
  if (!isPrimaryAdmin(currentUser)) return '';
  const admins = getAdminUsers();
  return `
    <div class="card settings-system-card strong-border-card admin-account-card">
      <div class="card-top">
        <div>
          <p class="eyebrow">Admin Account Control</p>
          <h2>Administrator accounts</h2>
          <p class="muted">Only the main admin can register, view, message, edit or deactivate additional admin accounts.</p>
        </div>
        <div class="row-actions">
          <button class="btn btn-warning-soft" type="button" data-inactive-admin-records>Inactive Admin Records</button>
          <button class="btn btn-primary" type="button" data-add-admin-account>Register Admin</button>
        </div>
      </div>
      <div class="table-card admin-account-table"><div class="table-wrap"><table>
        <thead><tr><th>Admin Name</th><th>Email</th><th>Phone</th><th>Type</th><th>Status</th><th>Inactive Reason</th><th>Action</th></tr></thead>
        <tbody>
          ${admins.map((admin) => `
            <tr>
              <td><strong>${escapeHtml(admin.fullName)}</strong></td>
              <td>${escapeHtml(admin.email)}</td>
              <td>${escapeHtml(admin.phone || '-')}</td>
              <td>${isPrimaryAdmin(admin) ? '<span class="status-pill confirmed">Main Admin</span>' : '<span class="status-pill pending">Additional Admin</span>'}</td>
              <td>${statusPill(admin.status || 'Active')}</td>
              <td>${admin.status === 'Inactive' ? escapeHtml(admin.inactiveReason || 'No reason recorded') : '<span class="muted">-</span>'}</td>
              <td>
                ${!isPrimaryAdmin(admin) ? `
                  <div class="row-actions compact-actions">
                    <button class="btn btn-soft" type="button" data-view-admin-account="${admin.id}">View Profile</button>
                    <button class="btn btn-primary" type="button" data-message-admin-account="${admin.id}">Chat</button>
                    <button class="btn btn-soft" type="button" data-edit-admin-account="${admin.id}">Edit</button>
                  </div>
                ` : '<span class="muted">Protected</span>'}
              </td>
            </tr>
          `).join('')}
        </tbody>
      </table></div></div>
    </div>
  `;
};

bindAdminAccountManagement = function v26BindAdminAccountManagement() {
  const addBtn = content().querySelector('[data-add-admin-account]');
  if (addBtn) addBtn.addEventListener('click', () => openAdminAccountForm());
  const inactiveRecordsBtn = content().querySelector('[data-inactive-admin-records]');
  if (inactiveRecordsBtn) inactiveRecordsBtn.addEventListener('click', openInactiveAdminRecordsModal);
  content().querySelectorAll('[data-view-admin-account]').forEach((btn) => btn.addEventListener('click', () => {
    const admin = read('users').find((user) => user.id === btn.dataset.viewAdminAccount && user.role === 'admin');
    if (admin) openProfileDetailModal(admin);
  }));
  content().querySelectorAll('[data-message-admin-account]').forEach((btn) => btn.addEventListener('click', () => {
    const admin = read('users').find((user) => user.id === btn.dataset.messageAdminAccount && user.role === 'admin');
    if (admin) openSendMessageModal(admin);
  }));
  content().querySelectorAll('[data-edit-admin-account]').forEach((btn) => {
    btn.addEventListener('click', () => {
      const admin = read('users').find((user) => user.id === btn.dataset.editAdminAccount && user.role === 'admin');
      if (admin) openAdminAccountForm(admin);
    });
  });
};

openAdminAccountForm = function v26OpenAdminAccountForm(admin = null) {
  if (!currentUserIsPrimaryAdmin()) return toast('Only the main admin can manage administrator accounts.');
  if (admin && isPrimaryAdmin(admin)) return toast('Main admin account is protected and cannot be edited here.');
  openModal(`
    <div class="modal-head">
      <div>
        <p class="eyebrow">Administrator Access</p>
        <h2>${admin ? 'Edit Additional Admin' : 'Register Additional Admin'}</h2>
        <p class="muted">A reason is required when an additional admin is set to Inactive.</p>
      </div>
      <button class="close-btn" data-close-modal>&times;</button>
    </div>
    <form id="adminAccountForm" class="form-grid">
      <label>Full Name<input name="fullName" value="${escapeHtml(admin?.fullName || '')}" required></label>
      <label>Email Address<input name="email" type="email" value="${escapeHtml(admin?.email || '')}" ${admin ? 'disabled' : ''} required></label>
      <label>Phone Number<input name="phone" value="${escapeHtml(admin?.phone || '')}" required></label>
      <label>Status<select name="status"><option ${admin?.status === 'Active' || !admin ? 'selected' : ''}>Active</option><option ${admin?.status === 'Inactive' ? 'selected' : ''}>Inactive</option></select></label>
      <label class="wide">Address / Notes<input name="address" value="${escapeHtml(admin?.address || '')}" placeholder="Optional"></label>
      ${admin ? `<label class="wide">Reason for Inactive / Reference<textarea name="inactiveReason" placeholder="Required if status is changed to Inactive.">${escapeHtml(admin?.inactiveReason || '')}</textarea></label>` : ''}
      <label class="wide">${admin ? 'New Password (optional)' : 'Password'}<input name="password" type="password" minlength="6" placeholder="${admin ? 'Leave blank to keep current password' : 'Minimum 6 characters'}" ${admin ? '' : 'required'}></label>
      <button class="btn btn-primary wide" type="submit">${admin ? 'Save Admin Account' : 'Register Admin Account'}</button>
    </form>
  `);
  const form = document.getElementById('adminAccountForm');
  form.addEventListener('submit', async (event) => {
    event.preventDefault();
    const formData = new FormData(form);
    const email = admin ? admin.email.toLowerCase() : formData.get('email').trim().toLowerCase();
    const passwordValue = formData.get('password') || '';
    const nextStatus = formData.get('status');
    const inactiveReasonInput = String(formData.get('inactiveReason') || '').trim();
    if (admin && nextStatus === 'Inactive' && !inactiveReasonInput) return toast('Main admin must enter a reason before inactivating this admin account.');
    const payload = {
      id: admin?.id || makeId('A'),
      userId: admin?.userId || '',
      fullName: formData.get('fullName').trim(),
      email,
      phone: formData.get('phone').trim(),
      password: passwordValue || admin?.password || '',
      role: 'admin',
      supabaseRole: 'admin',
      status: nextStatus,
      profileImage: admin?.profileImage || '',
      address: formData.get('address').trim(),
      inactiveReason: nextStatus === 'Inactive' ? inactiveReasonInput : '',
      inactiveAt: nextStatus === 'Inactive' ? (admin?.inactiveAt || new Date().toISOString()) : '',
      inactiveBy: nextStatus === 'Inactive' ? (state.session?.id || '') : '',
      createdAt: admin?.createdAt || new Date().toISOString(),
    };
    const saveAdmin = async () => {
      if (!admin || !isUuid(admin.id)) {
        if (!passwordValue || passwordValue.length < 6) return toast('Password must be at least 6 characters to create a login account.');
        const { data: currentSessionData } = await supabaseClient.auth.getSession();
        const result = await createSupabaseAuthAccount({
          fullName: payload.fullName,
          email: payload.email,
          phone: payload.phone,
          password: passwordValue,
          role: 'admin',
          status: accountStatusToDb(payload.status),
          address: payload.address,
        }, { restoreSession: currentSessionData?.session });
        if (result.error) return toast(result.error.message || 'Failed to create admin login in Supabase.');
        const newUser = result.profile ? profileToUser(result.profile) : payload;
        upsertAdminLocal(newUser);
        closeModal();
        adminSettings();
        return toast('Additional admin account registered in Supabase.');
      }
      const { data, error } = await updateSupabaseProfileByEmail(payload.email, {
        full_name: payload.fullName,
        phone: payload.phone || null,
        address: payload.address || null,
        role: 'admin',
        status: accountStatusToDb(payload.status),
        inactive_reason: payload.inactiveReason || null,
        inactive_at: payload.inactiveAt || null,
        inactive_by: isUuid(payload.inactiveBy) ? payload.inactiveBy : null,
      });
      if (error) return toast(error.message || 'Failed to update admin account in Supabase.');
      upsertAdminLocal(data ? profileToUser(data) : payload);
      closeModal();
      adminSettings();
      toast(payload.status === 'Inactive' ? 'Admin account inactivated with reason recorded.' : 'Admin account updated.');
    };
    if (admin && nextStatus === 'Inactive') {
      confirmAction({
        title: 'Deactivate Admin Account',
        message: `Please confirm that you want to deactivate ${payload.fullName}. The reason will be saved for reference.`,
        confirmText: 'Deactivate Admin',
        danger: true,
        onConfirm: saveAdmin,
      });
    } else {
      await saveAdmin();
    }
  });
};

function upsertAdminLocal(updatedUser) {
  const localUsers = read('users');
  const index = localUsers.findIndex((user) => user.id === updatedUser.id || user.email?.toLowerCase() === updatedUser.email?.toLowerCase());
  if (index >= 0) localUsers[index] = { ...localUsers[index], ...updatedUser };
  else localUsers.push({ ...updatedUser, role: 'admin' });
  setLocalData('users', localUsers);
}

function publicEvents() {
  return read('events')
    .filter((item) => String(item.status || 'active').toLowerCase() === 'active')
    .sort((a, b) => `${a.eventDate || ''} ${a.eventTime || ''}`.localeCompare(`${b.eventDate || ''} ${b.eventTime || ''}`));
}

function eventCarouselMarkup(mode = 'user') {
  const events = publicEvents();
  return `
    <section class="event-carousel-section">
      <div class="event-carousel-head">
        <div>
          <p class="eyebrow">Event & Public Notification</p>
          <h2>${mode === 'admin' ? 'Public events shown to users' : 'Latest public notifications'}</h2>
          <p class="muted">Scroll with the arrow buttons if there are many announcements.</p>
        </div>
        <div class="row-actions">
          ${mode === 'admin' ? '<button class="btn btn-primary" type="button" data-add-public-event>Add Event / Public Notification</button>' : ''}
          <button class="carousel-arrow" type="button" data-event-scroll="left">←</button>
          <button class="carousel-arrow" type="button" data-event-scroll="right">→</button>
        </div>
      </div>
      <div class="event-carousel-track" data-event-track>
        ${events.map((item) => `
          <article class="event-card">
            ${item.imageUrl ? `<img src="${escapeHtml(item.imageUrl)}" alt="${escapeHtml(item.title)}">` : '<div class="event-placeholder">📣</div>'}
            <div class="event-card-body">
              <span class="status-pill pending">${escapeHtml(item.category || 'Public Notification')}</span>
              <h3>${escapeHtml(item.title)}</h3>
              <p>${escapeHtml(item.description || '')}</p>
              <ul class="meta-list compact-meta">
                <li><span>Date</span><strong>${escapeHtml(item.eventDate || '-')}</strong></li>
                <li><span>Time</span><strong>${escapeHtml(item.eventTime || '-')}</strong></li>
                <li><span>Location</span><strong>${escapeHtml(item.location || '-')}</strong></li>
              </ul>
            </div>
          </article>
        `).join('') || '<article class="event-card empty-event"><div class="event-card-body"><h3>No public event yet</h3><p class="muted">Admin can add announcements from the dashboard.</p></div></article>'}
      </div>
    </section>
  `;
}

function bindEventCarousel() {
  const track = content().querySelector('[data-event-track]');
  if (!track) return;
  content().querySelectorAll('[data-event-scroll]').forEach((btn) => {
    btn.addEventListener('click', () => {
      const direction = btn.dataset.eventScroll === 'right' ? 1 : -1;
      track.scrollBy({ left: direction * 360, behavior: 'smooth' });
    });
  });
  const addBtn = content().querySelector('[data-add-public-event]');
  if (addBtn) addBtn.addEventListener('click', openPublicEventForm);
}

function openPublicEventForm(eventItem = null) {
  if (!currentUserIsPrimaryAdmin() && state.session?.role !== 'admin') return toast('Only admin can add public events.');
  openModal(`
    <div class="modal-head">
      <div>
        <p class="eyebrow">Event & Public Notification</p>
        <h2>${eventItem ? 'Edit Announcement' : 'Add Announcement'}</h2>
        <p class="muted">This will appear at the top of the admin dashboard and user home page.</p>
      </div>
      <button class="close-btn" data-close-modal>&times;</button>
    </div>
    <form id="publicEventForm" class="form-grid">
      <label>Title<input name="title" value="${escapeHtml(eventItem?.title || '')}" required></label>
      <label>Category<select name="category"><option ${eventItem?.category === 'Event' ? 'selected' : ''}>Event</option><option ${eventItem?.category !== 'Event' ? 'selected' : ''}>Public Notification</option><option ${eventItem?.category === 'Maintenance' ? 'selected' : ''}>Maintenance</option><option ${eventItem?.category === 'Promotion' ? 'selected' : ''}>Promotion</option></select></label>
      <label>Date<input name="eventDate" type="date" value="${escapeHtml(eventItem?.eventDate || '')}"></label>
      <label>Time<input name="eventTime" type="time" value="${escapeHtml(eventItem?.eventTime || '')}"></label>
      <label class="wide">Location<input name="location" value="${escapeHtml(eventItem?.location || '')}" placeholder="Example: UPSI Driving Range"></label>
      <label class="wide">Description<textarea name="description" required>${escapeHtml(eventItem?.description || '')}</textarea></label>
      <label class="wide">Event / Notice Image<input name="image" type="file" accept="image/*"></label>
      <label>Status<select name="status"><option value="active" ${eventItem?.status !== 'inactive' ? 'selected' : ''}>Active</option><option value="inactive" ${eventItem?.status === 'inactive' ? 'selected' : ''}>Inactive</option></select></label>
      <button class="btn btn-primary wide" type="submit">Save Event / Public Notification</button>
    </form>
  `);
  document.getElementById('publicEventForm').addEventListener('submit', async (event) => {
    event.preventDefault();
    const form = new FormData(event.currentTarget);
    const selectedFile = form.get('image');
    const imageUrl = selectedFile && selectedFile.size ? await fileToDataUrl(selectedFile, 2200000) : (eventItem?.imageUrl || '');
    const payload = {
      id: eventItem?.id || makeId('EV'),
      title: form.get('title').trim(),
      category: form.get('category'),
      eventDate: form.get('eventDate'),
      eventTime: form.get('eventTime'),
      location: form.get('location').trim(),
      description: form.get('description').trim(),
      imageUrl,
      status: form.get('status'),
      createdBy: state.session?.id || '',
      createdAt: eventItem?.createdAt || new Date().toISOString(),
    };
    const items = read('events');
    const index = items.findIndex((item) => item.id === payload.id);
    if (index >= 0) items[index] = payload;
    else items.unshift(payload);
    write('events', items);
    closeModal();
    renderPage();
    toast('Event / public notification saved.');
  });
}

adminDashboard = function v26AdminDashboard() {
  setTitle('Dashboard', 'Administrator Panel');
  const bookings = adminVisibleBookings();
  const revenue = bookings.filter((b) => b.paymentStatus === 'Verified').reduce((sum, b) => sum + Number(b.amount || 0), 0);
  content().dataset.sectionized = 'true';
  content().innerHTML = `
    ${eventCarouselMarkup('admin')}
    <div class="stat-grid">
      ${statCard('Total Users', read('users').filter((u) => u.role === 'user').length)}
      ${statCard('Driving Range', read('courses').filter((c) => isDrivingCourse(c)).length)}
      ${statCard('Bookings', bookings.length)}
      ${statCard('Verified Revenue', money(revenue))}
    </div>
    <div class="toolbar" style="margin-top:24px">
      <div>
        <p class="eyebrow">Latest Bookings</p>
        <h2>Manage booking status and payment verification</h2>
      </div>
    </div>
    ${bookingTable(bookings.slice(0, 5), 'admin')}
  `;
  bindEventCarousel();
  bindBookingActions('admin');
};

userDashboard = function v26UserDashboard() {
  setTitle('Home', 'User / Golfer');
  const allAvailableCourses = read('courses').filter((c) => c.status === 'Available');
  const drivingCourses = getDrivingCourses(allAvailableCourses);
  const trainers = read('trainers').filter((t) => t.status === 'Available');
  const bookings = userBookingList();
  content().dataset.sectionized = 'true';
  content().innerHTML = `
    ${eventCarouselMarkup('user')}
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
        <p class="muted">Trainer booking has its own date and time availability. No ball bucket selection is required.</p>
      </div>
    </div>
    <div class="card-grid two">
      ${trainers.map(trainerCard).join('') || empty('No trainer found.')}
    </div>
  `;
  bindEventCarousel();
  content().querySelector('[data-open-booking]').addEventListener('click', () => openBookingModal());
  content().querySelector('[data-go-trainers]').addEventListener('click', () => {
    state.currentPage = 'trainers';
    renderNav();
    renderPage();
  });
  bindCourseButtons();
  bindAvailabilityButtons();
  bindTrainerButtons();
};

// Keep Admin Account Control hidden from additional admin accounts.
const v26BaseAccountSettings = accountSettings;
accountSettings = function v26AccountSettings(includeSystemSettings = false, sourcePage = 'settings') {
  v26BaseAccountSettings(includeSystemSettings, sourcePage);
  if (includeSystemSettings && currentUserIsAdditionalAdmin()) {
    const adminCard = content().querySelector('.admin-account-card');
    if (adminCard) adminCard.remove();
  }
};



// =========================================================
// V27 enhancements: tee-time search/paging, trainer hourly booking,
// chat inbox, QR download, report printing, stronger dark-mode support.
// =========================================================

function trainerRate(trainer = {}) {
  return Number(trainer.hourlyRate ?? trainer.rate ?? trainer.bookingRatePerHour ?? 0) || 0;
}

function trainerMinHours(trainer = {}) {
  return Math.max(1, Number(trainer.minBookingHours || trainer.min_booking_hours || 1) || 1);
}

function trainerMaxHours(trainer = {}) {
  return Math.max(trainerMinHours(trainer), Number(trainer.maxBookingHours || trainer.max_booking_hours || 2) || 2);
}

function trainerHourOptions(trainer = {}, selected = 1) {
  const min = trainerMinHours(trainer);
  const max = trainerMaxHours(trainer);
  return Array.from({ length: Math.max(1, max - min + 1) }, (_, index) => min + index)
    .map((hour) => `<option value="${hour}" ${Number(selected) === hour ? 'selected' : ''}>${hour} ${hour === 1 ? 'hour' : 'hours'}</option>`)
    .join('');
}

const v27BaseTrainerToLocal = trainerToLocal;
trainerToLocal = function v27TrainerToLocal(trainer = {}) {
  const local = v27BaseTrainerToLocal(trainer);
  local.hourlyRate = Number(trainer.rate || trainer.hourly_rate || trainer.booking_rate_per_hour || 0);
  local.rate = local.hourlyRate;
  local.minBookingHours = Number(trainer.min_booking_hours || trainer.minBookingHours || 1) || 1;
  local.maxBookingHours = Number(trainer.max_booking_hours || trainer.maxBookingHours || 2) || 2;
  return local;
};

syncTrainersToSupabase = async function v27SyncTrainersToSupabase(trainers = []) {
  const localIds = trainers.map((trainer) => trainer.id).filter(isUuid);
  for (const trainer of trainers) {
    const payload = {
      full_name: trainer.name || trainer.fullName || 'Trainer',
      phone: trainer.phone || null,
      email: trainer.email || null,
      address: trainer.address || null,
      description: trainer.description || null,
      rate: trainerRate(trainer),
      min_booking_hours: trainerMinHours(trainer),
      max_booking_hours: trainerMaxHours(trainer),
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
    if (!localIds.includes(row.id)) await supabaseClient.from(DB_TABLES.trainers).delete().eq('id', row.id);
  }
};

const v27BaseBookingToLocal = bookingToLocal;
bookingToLocal = function v27BookingToLocal(row = {}) {
  const local = v27BaseBookingToLocal(row);
  local.trainerHours = Number(row.trainer_hours || local.trainerHours || 1) || 1;
  if (local.bookingType === 'trainer') {
    local.paymentMethod = 'QR Payment';
    if (local.paymentStatus === 'Not Required') local.paymentStatus = dbPaymentStatusToLocal(row.payment_status || 'pending', 'driving');
  }
  return local;
};

syncBookingsToSupabase = async function v27SyncBookingsToSupabase(bookings = []) {
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
      trainer_hours: bookingType === 'trainer' ? Math.max(1, Number(booking.trainerHours || 1)) : null,
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
    };
    if (!payload.user_id) continue;
    if (isUuid(booking.id)) payload.id = booking.id;
    const { data, error } = await supabaseClient
      .from(DB_TABLES.bookings)
      .upsert(payload, { onConflict: payload.id ? 'id' : 'id' })
      .select()
      .maybeSingle();
    if (error) {
      console.error('Booking sync error:', error);
      continue;
    }
    if (data?.id && !isUuid(booking.id)) booking.id = data.id;
    if (payload.tee_slot_id) {
      // V45 lane-based booking: do not lock the whole tee slot for driving range bookings.
      const slotStatus = bookingType === 'trainer' && localBookingStatusToDb(booking.bookingStatus) !== 'cancelled' ? 'booked' : 'available';
      const { error: slotStatusError } = await supabaseClient
        .from(DB_TABLES.teeSlots)
        .update({ status: slotStatus })
        .eq('id', payload.tee_slot_id);
      if (slotStatusError) console.error('Tee slot status sync error:', slotStatusError);
    }
  }
};

qrImageMarkup = function v27QrImageMarkup(className = 'qr-code') {
  const settings = read('settings');
  if (settings?.qrImage) {
    const url = escapeHtml(settings.qrImage);
    return `<div class="${className} qr-download-wrap"><img src="${url}" alt="QR Payment"><a class="btn btn-soft qr-download-btn" href="${url}" download="upsi-golf-qr-payment">Download QR Image</a></div>`;
  }
  return `<div class="${className}">QR</div>`;
};

function eventMonthLabel(date = '') {
  if (!date) return 'No date set';
  const d = new Date(`${date}T00:00:00`);
  if (Number.isNaN(d.getTime())) return date;
  return d.toLocaleDateString(undefined, { month: 'long', year: 'numeric' });
}

const v27BasePublicEvents = publicEvents;
eventCarouselMarkup = function v27EventCarouselMarkup(mode = 'user') {
  const events = v27BasePublicEvents();
  let lastMonth = '';
  return `
    <section class="event-carousel-section">
      <div class="event-carousel-head">
        <div>
          <p class="eyebrow">Event & Public Notification</p>
          <h2>${mode === 'admin' ? 'Public events shown to users' : 'Latest public notifications'}</h2>
          <p class="muted">Events are grouped by month. Use the arrow buttons if there are many announcements.</p>
        </div>
        <div class="row-actions">
          ${mode === 'admin' ? '<button class="btn btn-primary" type="button" data-add-public-event>Add Event / Public Notification</button>' : ''}
          <button class="carousel-arrow" type="button" data-event-scroll="left">←</button>
          <button class="carousel-arrow" type="button" data-event-scroll="right">→</button>
        </div>
      </div>
      <div class="event-carousel-track" data-event-track>
        ${events.map((item) => {
          const month = eventMonthLabel(item.eventDate);
          const monthBadge = month !== lastMonth ? `<div class="event-month-break"><span>${escapeHtml(month)}</span></div>` : '';
          lastMonth = month;
          return `
            ${monthBadge}
            <article class="event-card">
              ${item.imageUrl ? `<img src="${escapeHtml(item.imageUrl)}" alt="${escapeHtml(item.title)}">` : '<div class="event-placeholder">📣</div>'}
              <div class="event-card-body">
                <span class="status-pill pending">${escapeHtml(item.category || 'Public Notification')}</span>
                <h3>${escapeHtml(item.title)}</h3>
                <p>${escapeHtml(item.description || '')}</p>
                <ul class="meta-list compact-meta">
                  <li><span>Date</span><strong>${escapeHtml(item.eventDate ? formatDateDisplay(item.eventDate) : '-')}</strong></li>
                  <li><span>Time</span><strong>${escapeHtml(item.eventTime || '-')}</strong></li>
                  <li><span>Location</span><strong>${escapeHtml(item.location || '-')}</strong></li>
                </ul>
              </div>
            </article>
          `;
        }).join('') || '<article class="event-card empty-event"><div class="event-card-body"><h3>No public event yet</h3><p class="muted">Admin can add announcements from the dashboard.</p></div></article>'}
      </div>
    </section>
  `;
};

openPublicEventForm = function v27OpenPublicEventForm(eventItem = null) {
  if (!currentUserIsPrimaryAdmin() && state.session?.role !== 'admin') return toast('Only admin can add public events.');
  openModal(`
    <div class="modal-head">
      <div>
        <p class="eyebrow">Event & Public Notification</p>
        <h2>${eventItem ? 'Edit Announcement' : 'Add Announcement'}</h2>
        <p class="muted">This will appear at the top of the admin dashboard and user home page.</p>
      </div>
      <button class="close-btn" data-close-modal>&times;</button>
    </div>
    <form id="publicEventForm" class="form-grid scrollable-modal-form">
      <label>Title<input name="title" value="${escapeHtml(eventItem?.title || '')}" required></label>
      <label>Category<select name="category"><option ${eventItem?.category === 'Event' ? 'selected' : ''}>Event</option><option ${eventItem?.category !== 'Event' ? 'selected' : ''}>Public Notification</option><option ${eventItem?.category === 'Maintenance' ? 'selected' : ''}>Maintenance</option><option ${eventItem?.category === 'Promotion' ? 'selected' : ''}>Promotion</option></select></label>
      <label>Date<input name="eventDate" type="date" value="${escapeHtml(eventItem?.eventDate || '')}"></label>
      <label>Time<input name="eventTime" type="time" value="${escapeHtml(eventItem?.eventTime || '')}"></label>
      <label class="wide">Location<input name="location" value="${escapeHtml(eventItem?.location || '')}" placeholder="Example: UPSI Driving Range"></label>
      <label class="wide">Description<textarea name="description" required>${escapeHtml(eventItem?.description || '')}</textarea></label>
      <label class="wide">Event / Notice Image<input name="image" type="file" accept="image/*"></label>
      <label>Status<select name="status"><option value="active" ${eventItem?.status !== 'inactive' ? 'selected' : ''}>Active</option><option value="inactive" ${eventItem?.status === 'inactive' ? 'selected' : ''}>Inactive</option></select></label>
      <button class="btn btn-primary wide" type="submit">Save Event / Public Notification</button>
    </form>
  `);
  document.getElementById('publicEventForm').addEventListener('submit', async (event) => {
    event.preventDefault();
    const form = new FormData(event.currentTarget);
    const selectedFile = form.get('image');
    const imageUrl = selectedFile && selectedFile.size ? await fileToDataUrl(selectedFile, 2200000) : (eventItem?.imageUrl || '');
    const payload = {
      id: eventItem?.id || makeId('EV'),
      title: form.get('title').trim(),
      category: form.get('category'),
      eventDate: form.get('eventDate'),
      eventTime: form.get('eventTime'),
      location: form.get('location').trim(),
      description: form.get('description').trim(),
      imageUrl,
      status: form.get('status'),
      createdBy: state.session?.id || '',
      createdAt: eventItem?.createdAt || new Date().toISOString(),
    };
    const items = read('events');
    const index = items.findIndex((item) => item.id === payload.id);
    if (index >= 0) items[index] = payload;
    else items.unshift(payload);
    write('events', items);
    closeModal();
    renderPage();
    toast('Event / public notification saved.');
  });
};

function searchableSlotRows(slots) {
  const aspect = state.teeSearchAspect || 'all';
  const value = String(state.teeSearchValue || '').trim().toLowerCase();
  if (!value) return slots;
  return slots.filter((slot) => {
    if (aspect === 'date') return slot.date === value || formatDateDisplay(slot.date).toLowerCase().includes(value);
    if (aspect === 'time') return convertTo24Hour(slot.time).slice(0, 5) === value || String(slot.time).toLowerCase().includes(value);
    if (aspect === 'for') return scheduleTypeLabel(slot.targetType).toLowerCase().includes(value);
    if (aspect === 'target') return scheduleTargetLabel(slot).toLowerCase().includes(value);
    if (aspect === 'status') return slotDisplayStatus(slot).toLowerCase().includes(value);
    return [slot.date, formatDateDisplay(slot.date), slot.time, scheduleTypeLabel(slot.targetType), scheduleTargetLabel(slot), slotDisplayStatus(slot)].some((field) => String(field || '').toLowerCase().includes(value));
  });
}

function teeSearchInputMarkup() {
  const aspect = state.teeSearchAspect || 'all';
  const value = escapeHtml(state.teeSearchValue || '');
  const inputType = aspect === 'date' ? 'date' : aspect === 'time' ? 'time' : 'text';
  const placeholder = aspect === 'date' ? '' : aspect === 'time' ? '' : 'Search date, time, for, target or status';
  const statusOptions = ['Available', 'Unavailable', 'Booked'];
  return `
    <div class="tee-search-grid">
      <select data-tee-search-aspect>
        <option value="all" ${aspect === 'all' ? 'selected' : ''}>All aspects</option>
        <option value="date" ${aspect === 'date' ? 'selected' : ''}>Date</option>
        <option value="time" ${aspect === 'time' ? 'selected' : ''}>Time</option>
        <option value="for" ${aspect === 'for' ? 'selected' : ''}>For</option>
        <option value="target" ${aspect === 'target' ? 'selected' : ''}>Target</option>
        <option value="status" ${aspect === 'status' ? 'selected' : ''}>Status</option>
      </select>
      ${aspect === 'status' ? `<select data-tee-search-value><option value="">All status</option>${statusOptions.map((s) => `<option value="${s.toLowerCase()}" ${String(state.teeSearchValue || '').toLowerCase() === s.toLowerCase() ? 'selected' : ''}>${s}</option>`).join('')}</select>` : `<input data-tee-search-value type="${inputType}" value="${value}" placeholder="${placeholder}">`}
      <button class="btn btn-soft" type="button" data-clear-tee-search>Clear</button>
    </div>
  `;
}

adminTimes = function v27AdminTimes() {
  setTitle('Tee Time Availability', 'Administrator Panel');
  const allSlots = getScheduleSlots().sort(sortByDateTime);
  const filteredSlots = searchableSlotRows(allSlots);
  const perPage = 8;
  const maxPage = Math.max(1, Math.ceil(filteredSlots.length / perPage));
  state.teePage = Math.min(Math.max(1, Number(state.teePage || 1)), maxPage);
  const start = (state.teePage - 1) * perPage;
  const pageSlots = filteredSlots.slice(start, start + perPage);
  content().innerHTML = `
    <div class="toolbar">
      <div>
        <p class="eyebrow">Schedule Settings</p>
        <h2>Manage date and tee time for Driving Range and Trainers</h2>
        <p class="muted">All date and time options used by user bookings are controlled here.</p>
      </div>
      <button class="btn btn-primary" data-add-time>Add Time Slot</button>
    </div>
    <div class="schedule-admin-grid">
      <article class="card schedule-help-card">
        <p class="eyebrow">How it works</p>
        <h3>Date + Time + Booking Type</h3>
        <p>Choose whether the slot is for Driving Range, Trainer, or both. User booking forms will only show available dates and times created here.</p>
      </article>
      <article class="card schedule-help-card">
        <p class="eyebrow">Current Coverage</p>
        <h3>${allSlots.filter((slot) => slotDisplayStatus(slot) === 'Available').length} available slots</h3>
        <p>${filteredSlots.length} slot record${filteredSlots.length === 1 ? '' : 's'} match the current search.</p>
      </article>
    </div>
    <div class="toolbar tee-filter-toolbar">
      <div><p class="eyebrow">Search Tee Time</p><h2>Filter slot table</h2></div>
      ${teeSearchInputMarkup()}
    </div>
    <div class="table-card schedule-table-card">
      <div class="table-wrap"><table>
        <thead><tr><th>Date</th><th>Time</th><th>For</th><th>Target</th><th>Status</th><th>Action</th></tr></thead>
        <tbody>
          ${pageSlots.map((slot) => `
            <tr>
              <td><strong>${formatDateDisplay(slot.date)}</strong><br><span class="muted">${escapeHtml(slot.date)}</span></td>
              <td><strong>${escapeHtml(slot.time)}</strong></td>
              <td>${escapeHtml(scheduleTypeLabel(slot.targetType))}</td>
              <td>${escapeHtml(scheduleTargetLabel(slot))}</td>
              <td>${statusPill(slotDisplayStatus(slot))}</td>
              <td><div class="row-actions">
                <button class="btn btn-soft" data-edit-time="${slot.id}">Edit</button>
                <button class="btn btn-danger-soft" data-delete-time="${slot.id}">Remove</button>
              </div></td>
            </tr>
          `).join('') || `<tr><td colspan="6">No tee time slot found.</td></tr>`}
        </tbody>
      </table></div>
      <div class="pagination-row">
        <button class="btn btn-soft" type="button" data-tee-page="prev" ${state.teePage <= 1 ? 'disabled' : ''}>← Previous</button>
        <span>Page <strong>${state.teePage}</strong> of <strong>${maxPage}</strong> • Showing ${pageSlots.length} of ${filteredSlots.length}</span>
        <button class="btn btn-soft" type="button" data-tee-page="next" ${state.teePage >= maxPage ? 'disabled' : ''}>Next →</button>
      </div>
    </div>
  `;
  content().querySelector('[data-add-time]').addEventListener('click', () => openTimeForm());
  const aspect = content().querySelector('[data-tee-search-aspect]');
  const value = content().querySelector('[data-tee-search-value]');
  if (aspect) aspect.addEventListener('change', () => { state.teeSearchAspect = aspect.value; state.teeSearchValue = ''; state.teePage = 1; adminTimes(); });
  if (value) value.addEventListener('input', () => { state.teeSearchValue = value.value; state.teePage = 1; adminTimes(); });
  if (value && value.tagName === 'SELECT') value.addEventListener('change', () => { state.teeSearchValue = value.value; state.teePage = 1; adminTimes(); });
  const clearBtn = content().querySelector('[data-clear-tee-search]');
  if (clearBtn) clearBtn.addEventListener('click', () => { state.teeSearchAspect = 'all'; state.teeSearchValue = ''; state.teePage = 1; adminTimes(); });
  content().querySelectorAll('[data-tee-page]').forEach((btn) => btn.addEventListener('click', () => {
    state.teePage += btn.dataset.teePage === 'next' ? 1 : -1;
    adminTimes();
  }));
  content().querySelectorAll('[data-edit-time]').forEach((btn) => btn.addEventListener('click', () => {
    const slot = getScheduleSlots().find((item) => item.id === btn.dataset.editTime);
    openTimeForm(slot);
  }));
  content().querySelectorAll('[data-delete-time]').forEach((btn) => btn.addEventListener('click', () => {
    const slot = getScheduleSlots().find((item) => item.id === btn.dataset.deleteTime);
    confirmAction({
      title: 'Remove Tee Time Slot',
      message: `Are you sure you want to remove ${slot ? `${formatDateDisplay(slot.date)} at ${slot.time}` : 'this'} tee time slot? This date and time will no longer appear for users.`,
      confirmText: 'Remove Slot',
      danger: true,
      onConfirm: () => {
        writeScheduleSlots(getScheduleSlots().filter((timeSlot) => timeSlot.id !== btn.dataset.deleteTime));
        state.teePage = 1;
        adminTimes();
        toast('Tee time slot removed.');
      },
    });
  }));
};



</script>
<?php
}

function upsi_section_admin_dashboard_module(): void
{
?>
<script>
window.UPSI_SECTION_MODULES = window.UPSI_SECTION_MODULES || {};
window.UPSI_SECTION_MODULES["admin_dashboard"] = {
  title: "Admin Dashboard",
  runtimeChunk: '6/22',
  functions: ["adminDashboard", "renderAdminPage"]
};
</script>
<?php
}

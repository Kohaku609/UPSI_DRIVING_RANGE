<?php
/**
 * index.php
 * V108 Balanced Presentation Section Version
 *
 * File ini hanya panggil fail section.
 * CSS/JavaScript asal telah dibahagikan ke semua section supaya home_page.php tidak terlalu panjang.
 */

require_once __DIR__ . '/sections/public/home_page.php';
require_once __DIR__ . '/sections/public/about_this_website.php';
require_once __DIR__ . '/sections/public/features.php';
require_once __DIR__ . '/sections/public/project_info.php';
require_once __DIR__ . '/sections/auth/login.php';
require_once __DIR__ . '/sections/admin/admin_dashboard.php';
require_once __DIR__ . '/sections/admin/admin_manage_users.php';
require_once __DIR__ . '/sections/admin/admin_driving_range.php';
require_once __DIR__ . '/sections/admin/admin_trainers.php';
require_once __DIR__ . '/sections/admin/admin_tee_times.php';
require_once __DIR__ . '/sections/admin/admin_bookings.php';
require_once __DIR__ . '/sections/admin/admin_payments.php';
require_once __DIR__ . '/sections/admin/admin_reviews.php';
require_once __DIR__ . '/sections/admin/admin_reports.php';
require_once __DIR__ . '/sections/admin/admin_profile.php';
require_once __DIR__ . '/sections/user/user_home.php';
require_once __DIR__ . '/sections/user/user_driving_range.php';
require_once __DIR__ . '/sections/user/user_trainers.php';
require_once __DIR__ . '/sections/user/user_my_bookings.php';
require_once __DIR__ . '/sections/user/user_payment.php';
require_once __DIR__ . '/sections/user/user_profile.php';
require_once __DIR__ . '/sections/user/user_feedback.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title><?php echo htmlspecialchars($UPSI_PAGE_TITLE ?? 'UPSI Golf Booking System', ENT_QUOTES, 'UTF-8'); ?></title>
  <link rel="icon" href="data:,">
  <?php upsi_section_home_page_styles(); ?>
  <?php upsi_section_about_this_website_styles(); ?>
  <?php upsi_section_features_styles(); ?>
  <?php upsi_section_project_info_styles(); ?>
  <?php upsi_section_login_styles(); ?>
  <?php upsi_section_admin_dashboard_styles(); ?>
  <?php upsi_section_admin_manage_users_styles(); ?>
  <?php upsi_section_admin_driving_range_styles(); ?>
  <?php upsi_section_admin_trainers_styles(); ?>
  <?php upsi_section_admin_tee_times_styles(); ?>
  <?php upsi_section_admin_bookings_styles(); ?>
  <?php upsi_section_admin_payments_styles(); ?>
  <?php upsi_section_admin_reviews_styles(); ?>
  <?php upsi_section_admin_reports_styles(); ?>
  <?php upsi_section_admin_profile_styles(); ?>
  <?php upsi_section_user_home_styles(); ?>
  <?php upsi_section_user_driving_range_styles(); ?>
  <?php upsi_section_user_trainers_styles(); ?>
  <?php upsi_section_user_my_bookings_styles(); ?>
  <?php upsi_section_user_payment_styles(); ?>
  <?php upsi_section_user_profile_styles(); ?>
  <?php upsi_section_user_feedback_styles(); ?>
</head>
<body>
  <div id="toast" class="toast" aria-live="polite"></div>
  <div id="app"></div>

  <?php upsi_section_login_template(); ?>
  <?php upsi_section_admin_dashboard_template(); ?>

  <script>
    window.UPSI_PHP_CONFIG = <?php echo json_encode(upsi_public_config(), JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE); ?>;
    window.UPSI_START_PAGE = <?php echo json_encode($UPSI_START_PAGE ?? 'dashboard', JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE); ?>;
  </script>
  <script src="https://cdn.jsdelivr.net/npm/@supabase/supabase-js@2"></script>

  <?php upsi_section_home_page_scripts(); ?>
  <?php upsi_section_about_this_website_scripts(); ?>
  <?php upsi_section_features_scripts(); ?>
  <?php upsi_section_project_info_scripts(); ?>
  <?php upsi_section_login_scripts(); ?>
  <?php upsi_section_admin_dashboard_scripts(); ?>
  <?php upsi_section_admin_manage_users_scripts(); ?>
  <?php upsi_section_admin_driving_range_scripts(); ?>
  <?php upsi_section_admin_trainers_scripts(); ?>
  <?php upsi_section_admin_tee_times_scripts(); ?>
  <?php upsi_section_admin_bookings_scripts(); ?>
  <?php upsi_section_admin_payments_scripts(); ?>
  <?php upsi_section_admin_reviews_scripts(); ?>
  <?php upsi_section_admin_reports_scripts(); ?>
  <?php upsi_section_admin_profile_scripts(); ?>
  <?php upsi_section_user_home_scripts(); ?>
  <?php upsi_section_user_driving_range_scripts(); ?>
  <?php upsi_section_user_trainers_scripts(); ?>
  <?php upsi_section_user_my_bookings_scripts(); ?>
  <?php upsi_section_user_payment_scripts(); ?>
  <?php upsi_section_user_profile_scripts(); ?>
  <?php upsi_section_user_feedback_scripts(); ?>

  <?php upsi_section_home_page_module(); ?>
  <?php upsi_section_about_this_website_module(); ?>
  <?php upsi_section_features_module(); ?>
  <?php upsi_section_project_info_module(); ?>
  <?php upsi_section_login_module(); ?>
  <?php upsi_section_admin_dashboard_module(); ?>
  <?php upsi_section_admin_manage_users_module(); ?>
  <?php upsi_section_admin_driving_range_module(); ?>
  <?php upsi_section_admin_trainers_module(); ?>
  <?php upsi_section_admin_tee_times_module(); ?>
  <?php upsi_section_admin_bookings_module(); ?>
  <?php upsi_section_admin_payments_module(); ?>
  <?php upsi_section_admin_reviews_module(); ?>
  <?php upsi_section_admin_reports_module(); ?>
  <?php upsi_section_admin_profile_module(); ?>
  <?php upsi_section_user_home_module(); ?>
  <?php upsi_section_user_driving_range_module(); ?>
  <?php upsi_section_user_trainers_module(); ?>
  <?php upsi_section_user_my_bookings_module(); ?>
  <?php upsi_section_user_payment_module(); ?>
  <?php upsi_section_user_profile_module(); ?>
  <?php upsi_section_user_feedback_module(); ?>
</body>
</html>

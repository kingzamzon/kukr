<?php  include('../config.php'); ?>
<?php  include(ROOT_PATH . '/admin/includes/total_functions.php'); ?>
<?php include(ROOT_PATH . '/admin/includes/head_section.php'); ?>

<!-- Get all admin posts from DB -->
<?php $postTotal = getPostTotal(); $commentTotal = getCommentTotal(); $adminTotal = getAdminTotal(); $visitTotal = getVisitTotal(); ?>
	<title>Kukr - Admin | Dashboard</title>
</head>
<body
    class="theme-light aside-active aside-mobile-minimized aside-desktop-maximized preload-active"
    id="fullscreen"
  >
  <div class="preload">
      <div class="preload-dialog">
        <div class="spinner-border text-primary preload-spinner"></div>
      </div>
    </div>
    <div class="holder">
      <!-- Left side menu -->
		<?php include(ROOT_PATH . '/admin/includes/aside_menu.php') ?>

        <div class="wrapper">
            <!-- Header -->
            <?php include(ROOT_PATH . '/admin/includes/header.php') ?>


        <div class="content">
          <div class="container-fluid">
            <div class="row">
              <div class="col-12">
                <div class="portlet">
                  <div class="widget10 widget10-vertical-md">
                    <div class="widget10-item">
                      <div class="widget10-content">
                        <h2 class="widget10-title"><?php echo $postTotal; ?></h2>
                        <h2 class="widget10-subtitle">Total Posts</h2>
                      </div>
                      <div class="widget10-addon">
                        <div
                          class="avatar avatar-label-info avatar-circle widget8-avatar m-0"
                        >
                          <div class="avatar-display">
                            <i class="fa fa-dollar-sign"></i>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="widget10-item">
                      <div class="widget10-content">
                        <h2 class="widget10-title"><?php echo $commentTotal; ?></h2>
                        <h2 class="widget10-subtitle">Total Comments</h2>
                      </div>
                      <div class="widget10-addon">
                        <div
                          class="avatar avatar-label-primary avatar-circle widget8-avatar m-0"
                        >
                          <div class="avatar-display">
                            <i class="fa fa-dolly-flatbed"></i>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="widget10-item">
                      <div class="widget10-content">
                        <h2 class="widget10-title"><?php echo $adminTotal; ?></h2>
                        <h2 class="widget10-subtitle">Total Admin</h2>
                      </div>
                      <div class="widget10-addon">
                        <div
                          class="avatar avatar-label-success avatar-circle widget8-avatar m-0"
                        >
                          <div class="avatar-display">
                            <i class="fa fa-users"></i>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="widget10-item">
                      <div class="widget10-content">
                        <h2 class="widget10-title"><?php echo $visitTotal; ?></h2>
                        <h2 class="widget10-subtitle">Unique visits</h2>
                      </div>
                      <div class="widget10-addon">
                        <div
                          class="avatar avatar-label-danger avatar-circle widget8-avatar m-0"
                        >
                          <div class="avatar-display">
                            <i class="fa fa-link"></i>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <script ype="text/javascript" src="https://nasrul.dev/panely/v1.0/assets/app/dashboard1/home.js"></script>
        <?php include(ROOT_PATH . '/admin/includes/footer.php'); ?>
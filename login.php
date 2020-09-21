<?php  include('config.php');?>
<?php  include('includes/registration_login.php');?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <script
      async="async"
      src="https://www.googletagmanager.com/gtag/js?id=UA-176728070-2"
    ></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag() {
        dataLayer.push(arguments);
      }
      gtag("js", new Date());
      gtag("config", "UA-176728070-2");
    </script>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width,initial-scale=1" />
    <link
      href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600&amp;family=Roboto+Mono&amp;display=swap"
      rel="stylesheet"
    />
    <link
      href="https://nasrul.dev/panely/v1.0/assets/build/styles/ltr-core.css"
      rel="stylesheet"
    />
    <link
      href="https://nasrul.dev/panely/v1.0/assets/build/styles/ltr-vendor.css"
      rel="stylesheet"
    />
    <link
      href="https://nasrul.dev/panely/v1.0/assets/build/styles/ltr-dashboard1.css"
      rel="stylesheet"
    />
    <link
      href="https://nasrul.dev/panely/v1.0/assets/images/favicon.ico"
      rel="shortcut icon"
      type="image/x-icon"
    />
    <title>Login | Kukr</title>
  </head>
  <body class="theme-light preload-active" id="fullscreen">
    <div class="preload">
      <div class="preload-dialog">
        <div class="spinner-border text-primary preload-spinner"></div>
      </div>
    </div>
    <div class="holder">
      <div class="wrapper">
        <div class="content">
          <div class="container-fluid">
            <div
              class="row no-gutters align-items-center justify-content-center h-100"
            >
              <div class="col-sm-8 col-md-6 col-lg-4">
                <div class="portlet">
                  <div class="portlet-body">
                    <div class="text-center mb-4">
                      <div
                        class="avatar avatar-label-primary avatar-circle widget12"
                      >
                        <div class="avatar-display">
                          <i class="fa fa-user-alt"></i>
                        </div>
                      </div>
                    </div>
                    <form id="login-form" method="POST" action="login.php">
                      <?php include(ROOT_PATH . '/includes/errors.php') ?>
                      <div class="form-group">
                        <div class="float-label float-label-lg">
                          <input
                            class="form-control form-control-lg"
                            type="text"
                            id="username"
                            name="username"
                            placeholder="Please insert your username"
                          />
                          <label for="username">Username</label>
                        </div>
                      </div>
                      <div class="form-group">
                        <div class="float-label float-label-lg">
                          <input
                            class="form-control form-control-lg"
                            type="password"
                            id="password"
                            name="password"
                            placeholder="Please provide your password"
                          />
                          <label for="password">Password</label>
                        </div>
                      </div>
                      <div
                        class="d-flex align-items-center justify-content-between mb-3"
                      >
                        <div class="form-group mb-0">
                          <div
                            class="custom-control custom-control-lg custom-switch"
                          >
                            <input
                              type="checkbox"
                              class="custom-control-input"
                              id="remember"
                              name="remember"
                            />
                            <label class="custom-control-label" for="remember"
                              >Remember me</label
                            >
                          </div>
                        </div>
                      </div>
                      <div
                        class="d-flex align-items-center justify-content-between"
                      >
                        <button
                          type="submit"
                          class="btn btn-label-primary btn-lg btn-widest"
                          name="login_btn"
                        >
                          Login
                        </button>
                      </div>
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <script
      type="text/javascript"
      src="https://nasrul.dev/panely/v1.0/assets/build/scripts/mandatory.js"
    ></script>
    <script
      type="text/javascript"
      src="https://nasrul.dev/panely/v1.0/assets/build/scripts/core.js"
    ></script>
    <script
      type="text/javascript"
      src="https://nasrul.dev/panely/v1.0/assets/build/scripts/vendor.js"
    ></script>
    <script
      type="text/javascript"
      src="https://nasrul.dev/panely/v1.0/assets/build/scripts/dashboard1.js"
    ></script>

    <script
      type="text/javascript"
      src="https://nasrul.dev/panely/v1.0/assets/app/dashboard1/datatable/basic/base.js"
    ></script>
  </body>
</html>

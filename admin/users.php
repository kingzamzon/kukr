<?php  include('../config.php'); ?>
<?php  include(ROOT_PATH . '/admin/includes/admin_functions.php'); ?>
<?php 
	// Get all admin users from DB
	$admins = getAdminUsers();
	$roles = ['Admin', 'Author'];				
?>
<?php include(ROOT_PATH . '/admin/includes/head_section.php'); ?>

<!-- Get all admin posts from DB -->
	<title>Victor Eseosa Agency - Admin | Manage Users</title>
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
              <div class="col-md-4">
                <div class="portlet">
                  <div class="portlet-header portlet-header-bordered">
                    <h3 class="portlet-title">Create/Edit Users</h3>
                  </div>
                  <div class="portlet-body">
                  <form method="post" action="<?php echo BASE_URL . 'admin/users.php'; ?>" >

                    <!-- validation errors for the form -->
                    <?php include(ROOT_PATH . '/includes/errors.php') ?>

                    <!-- if editing user, the id is required to identify that user -->
                    <?php if ($isEditingUser === true): ?>
                      <input type="hidden" name="admin_id" value="<?php echo $admin_id; ?>">
                    <?php endif ?>
                    <div class="form-group">
                      <label for="usernameForm">Username</label> 
                      <input type="text" class="form-control" id="usernameForm" name="username" value="<?php echo $username; ?>" placeholder="Username">
                    </div>
                    <div class="form-group">
                      <label for="emailForm">Email</label> 
                      <input type="email" class="form-control" id="emailForm" name="email" value="<?php echo $email ?>" placeholder="Email">
                    </div>
                    <div class="form-group">
                      <label for="passwordForm">Password</label> 
                      <input type="password" class="form-control" id="passwordForm" name="password" placeholder="Password">
                    </div>
                    <div class="form-group">
                      <label for="passwordConfirmationForm">Username</label> 
                      <input type="password" class="form-control" id="passwordConfirmationForm" name="passwordConfirmation" placeholder="Password confirmation">
                    </div>
                    <div class="form-group">
                      <label for="selectForm">Assign role</label>
                      <select class="form-control" name="role" id="selectForm">
                        <?php foreach ($roles as $key => $role): ?>
                          <option value="<?php echo $role; ?>"><?php echo $role; ?></option>
                        <?php endforeach ?>
                      </select>
                    </div>

                    <!-- if editing user, display the update button instead of create button -->
                    <?php if ($isEditingUser === true): ?> 
                      <button type="submit" class="btn btn-label-primary" name="update_admin">UPDATE</button>
                    <?php else: ?>
                      <button type="submit" class="btn btn-label-secondary" name="create_admin">Save User</button>
                    <?php endif ?>
                    </form>
                  </div>
                </div>
              </div>
              <div class="col-md-8">
                <div class="portlet">
                  <div class="portlet-header portlet-header-bordered">
                    <h3 class="portlet-title">Admins</h3>
                  </div>
                  <div class="portlet-body">
                  <!-- Display notification message -->
			            <?php include(ROOT_PATH . '/includes/messages.php') ?>
                  
                  <?php if (empty($admins)): ?>
                    <h1>No admins in the database.</h1>
                  <?php else: ?>
                    <table id="datatable-1" class="table table-bordered table-striped table-hover">
                      <thead>
                        <tr>
                          <th>N</th>
                          <th>Admin</th>
                          <th>Role</th>
                          <th>Action</th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php foreach ($admins as $key => $admin): ?>
                        <tr>
                          <td><?php echo $key + 1; ?></td>
                          <td><?php echo $admin['username']; ?>, &nbsp;
                              <?php echo $admin['email']; ?>	
                            </td>
                          <td><?php echo $admin['role']; ?></td>
                          <td>
                            <a class="fa fa-edit btn btn-label-primary"
                              href="users?edit-admin=<?php echo $admin['id'] ?>">
                            </a>
                            <a class="fa fa-trash btn btn-label-danger" 
                              href="users?delete-admin=<?php echo $admin['id'] ?>">
                            </a>
                          </td>
                        </tr>
                        <?php endforeach ?>
                      </tbody>
                    </table>
                  <?php endif ?>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

<?php include(ROOT_PATH . '/admin/includes/footer.php'); ?>
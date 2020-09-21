<?php  include('../config.php'); ?>
<?php  include(ROOT_PATH . '/admin/includes/admin_functions.php'); ?>
<?php include(ROOT_PATH . '/admin/includes/head_section.php'); ?>

<!-- Get all admin posts from DB -->
<?php $topics = getAllTopics();	?>
	<title>Victor Eseosa Agency - Admin | Manage Categories</title>
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
                      <form method="post" action="<?php echo BASE_URL . 'admin/topics.php'; ?>" >
                          <!-- validation errors for the form -->
                          <?php include(ROOT_PATH . '/includes/errors.php') ?>
                          <!-- if editing topic, the id is required to identify that topic -->
                          <?php if ($isEditingTopic === true): ?>
                            <input type="hidden" name="topic_id" value="<?php echo $topic_id; ?>">
                          <?php endif ?>
                          <div class="form-group">
                            <label for="topicForm">Topic</label> 
                            <input type="text" class="form-control" id="topicForm" name="topic_name" value="<?php echo $topic_name; ?>" placeholder="Topic">
                          </div>
                          <!-- if editing topic, display the update button instead of create button -->
                          <?php if ($isEditingTopic === true): ?> 
                            <button type="submit" class="btn btn-label-primary" name="update_topic">UPDATE</button>
                          <?php else: ?>
                            <button type="submit" class="btn btn-label-secondary" name="create_topic">Save Category</button>
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
                    <?php if (empty($topics)): ?>
                      <h1>No category in the database.</h1>
                    <?php else: ?>
                    <table id="datatable-1" class="table table-bordered table-striped table-hover">
                      <thead>
                        <tr>
                          <th>N</th>
                          <th>Category Name</th>
                          <th>Action</th>
                        </tr>
                      </thead>
                      <tbody>
                      <?php foreach ($topics as $key => $topic): ?>
                        <tr>
                          <td><?php echo $key + 1; ?></td>
                          <td><?php echo $topic['name']; ?></td>
                          <td>
                            <a class="fa fa-edit btn btn-label-primary"
                              href="topics?edit-topic=<?php echo $topic['id'] ?>">
                            </a>
                            <a class="fa fa-trash btn btn-label-danger"								
                              href="topics?delete-topic=<?php echo $topic['id'] ?>">
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
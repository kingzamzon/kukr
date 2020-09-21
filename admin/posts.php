<?php  include('../config.php'); ?>
<?php  include(ROOT_PATH . '/admin/includes/admin_functions.php'); ?>
<?php  include(ROOT_PATH . '/admin/includes/post_functions.php'); ?>
<?php include(ROOT_PATH . '/admin/includes/head_section.php'); ?>

<!-- Get all admin posts from DB -->
<?php $posts = getAllPosts(); ?>
	<title>Victor Eseosa Agency - Admin | Manage Posts</title>
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
                  <div class="portlet-header portlet-header-bordered">
                    <h3 class="portlet-title">Posts</h3>
                  </div>
                  <div class="portlet-body">
                  <?php include(ROOT_PATH . '/includes/messages.php') ?>
                  <?php if (empty($posts)): ?>
                    <h1 style="text-align: center; margin-top: 20px;">No posts in the database.</h1>
			            <?php else: ?>
                    <table id="datatable-1" class="table table-bordered table-striped table-hover">
                      <thead>
                        <tr>
                          <th>N</th>
                          <th>Author</th>
                          <th>Title</th>
                          <th>Views</th>
                          <!-- Only Admin can publish/unpublish post -->
                          <?php if ($_SESSION['user']['role'] == "Admin"): ?>
                            <th>Publish</th>
                          <?php endif ?>
                          <th>Edit</th>
                          <th>Delete</th>
                        </tr>
                      </thead>
                      <tbody>
                      <?php foreach ($posts as $key => $post): ?>
                        <tr>
                        <td><?php echo $key + 1; ?></td>
                          <td><?php echo $post['author']; ?></td>
                          <td>
                            <a 	target="_blank"
                            href="<?php echo BASE_URL . 'blog-single?post-slug=' . $post['slug'] ?>">
                              <?php echo $post['title']; ?>	
                            </a>
                          </td>
                          <td><?php echo $post['views']; ?></td>
                          
                          <!-- Only Admin can publish/unpublish post -->
                          <?php if ($_SESSION['user']['role'] == "Admin" ): ?>
                            <td>
                            <?php if ($post['published'] == true): ?>
                              <a class="fa fa-check btn btn-label-danger"
                                href="posts?unpublish=<?php echo $post['id'] ?>">
                              </a>
                            <?php else: ?>
                              <a class="fa fa-times btn btn-label-success"
                                href="posts?publish=<?php echo $post['id'] ?>">
                              </a>
                            <?php endif ?>
                            </td>
                          <?php endif ?>

                          <td>
                            <a class="fa fa-edit btn btn-label-primary"
                              href="create_post?edit-post=<?php echo $post['id'] ?>">
                            </a>
                          </td>
                          <td>
                            <a  class="fa fa-trash btn btn-label-danger" 
                              href="create_post?delete-post=<?php echo $post['id'] ?>">
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
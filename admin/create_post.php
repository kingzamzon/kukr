<?php  include('../config.php'); ?>
<?php  include(ROOT_PATH . '/admin/includes/admin_functions.php'); ?>
<?php  include(ROOT_PATH . '/admin/includes/post_functions.php'); ?>
<?php include(ROOT_PATH . '/admin/includes/head_section.php'); ?>

<!-- Get all topics -->
<?php $topics = getAllTopics();	?>
	<title>Kukr - Admin | Create Post</title>
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
                    <h3 class="portlet-title">Create / Edit Post</h3>
                  </div>
                  <div class="portlet-body">
                    <form method="post" enctype="multipart/form-data" action="<?php echo BASE_URL . 'admin/create_post.php'; ?>" >
                      <!-- validation errors for the form -->
                      <?php include(ROOT_PATH . '/includes/errors.php') ?>

                      <!-- if editing post, the id is required to identify that post -->
                      <?php if ($isEditingPost === true): ?>
                        <input type="hidden" name="post_id" value="<?php echo $post_id; ?>">
                      <?php endif ?>
                      <!-- <div id="quill">jhjkhh</div> -->
                      <div class="form-group">
                        <label for="titleForm">Title</label> 
                        <input type="text" class="form-control" id="titleForm" name="title" value="<?php echo $title; ?>" placeholder="Title">
                      </div>
                      <div class="form-group">
                        <label for="exampleFormControlFile1">Featured image</label> 
                        <input type="file" class="form-control-file" id="exampleFormControlFile1" name="featured_image" >
                      </div>
                      <!-- <textarea name="body" id="quill" ><?php echo $body; ?></textarea> -->
                      
                      <div class="form-group">
                        <label for="selectForm">Choose category</label>
                        <select class="form-control" name="topic_id">
                          <!-- <option value="" selected disabled>Choose category</option> -->
                          <?php foreach ($topics as $topic): ?>
                            <option value="<?php echo $topic['id']; ?>">
                              <?php echo $topic['name']; ?>
                            </option>
                          <?php endforeach ?>
                        </select>
                      </div>
                      
                      <textarea name="body" id="body" cols="30" rows="10"><?php echo $body; ?></textarea>

                      <!-- Only admin users can view publish input field -->
                      <?php if ($_SESSION['user']['role'] == "Admin"): ?>
                        <!-- display checkbox according to whether post has been published or not -->
                        <?php if ($published == true): ?>
                          <div class="form-check">
                            <input type="checkbox" value="1" name="publish" checked="checked" class="form-check-input" id="defaultCheck1">
                            <label class="form-check-label" for="defaultCheck1">
                              Publish
                            </label>
                          </div>
                        <?php else: ?>
                          <div class="form-check">
                            <input type="checkbox" value="1" name="publish" class="form-check-input" id="defaultCheck2">
                            <label class="form-check-label" for="defaultCheck2">
                              Publish
                            </label>
                          </div>
                        <?php endif ?>
                      <?php endif ?>
                      <br />
                      <!-- if editing post, display the update button instead of create button -->
                      <?php if ($isEditingPost === true): ?> 
                        <button type="submit" class="btn btn-label-primary" name="update_post">UPDATE</button>
                      <?php else: ?>
                        <button type="submit" class="btn btn-label-secondary" name="create_post">Save Post</button>
                      <?php endif ?>

                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        
        <script>
          CKEDITOR.replace('body');
        </script>
        <?php include(ROOT_PATH . '/admin/includes/footer.php'); ?>
        <script type="text/javascript" src="https://nasrul.dev/panely/v1.0/assets/app/dashboard1/editor/complex.js"></script>
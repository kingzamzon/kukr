<div class="header">
    <div class="header-holder header-holder-desktop sticky-header" id="sticky-header-desktop">
        <div class="header-container container-fluid">
        <div class="header-wrap">
            <ul class="nav nav-pills">
            <li class="nav-item dropdown">
                <a href="#" class="nav-link active" data-toggle="dropdown"
                >Create</a
                >
                <div
                class="dropdown-menu dropdown-menu-left dropdown-menu-animated"
                >
                <a href="<?php echo BASE_URL . 'admin/create_post' ?>" class="dropdown-item"
                    ><div class="dropdown-icon">
                    <i class="fa fa-boxes"></i>
                    </div>
                    <span class="dropdown-content">Post</span>
                </a>

                <a href="<?php echo BASE_URL . 'admin/users' ?>" class="dropdown-item"
                    ><div class="dropdown-icon">
                    <i class="fa fa-users"></i>
                    </div>
                    <span class="dropdown-content">User</span></a
                >
                <a href="<?php echo BASE_URL . 'admin/topics' ?>" class="dropdown-item"
                    ><div class="dropdown-icon">
                    <i class="fa fa-dice"></i>
                    </div>
                    <span class="dropdown-content">Categories</span></a
                >
                </div>
            </li>
            </ul>
        </div>
        <div class="header-wrap header-wrap-block"></div>
        <div class="header-wrap">
            <div class="dropdown ml-2">
            <button
                class="btn btn-flat-primary widget13"
                data-toggle="dropdown"
            >
                <div class="widget13-text">Hi <strong><?php echo $_SESSION['user']['username'] ?></strong></div>
                <div class="avatar avatar-info widget13-avatar">
                <div class="avatar-display">B</div>
                </div>
            </button>

            <div
                class="dropdown-menu dropdown-menu-wide dropdown-menu-right dropdown-menu-animated overflow-hidden py-0"
            >
                <div class="portlet border-0">
                <div class="portlet-header bg-primary rounded-0">
                    <div class="rich-list-item w-100 p-0">
                    <div class="rich-list-prepend">
                        <div class="avatar avatar-circle">
                        <div class="avatar-display">
                            <img
                            src="https://nasrul.dev/panely/v1.0/assets/images/avatar/avatar-4.webp"
                            alt="Avatar image"
                            />
                        </div>
                        </div>
                    </div>
                    <div class="rich-list-content">
                        <h3 class="rich-list-title text-white">
                        <?php echo $_SESSION['user']['username'] ?>
                        </h3>
                    </div>
                    </div>
                </div>
                <div
                    class="portlet-footer portlet-footer-bordered rounded-0"
                >
                    <a href="<?php echo BASE_URL . 'logout.php'; ?>" class="btn btn-label-danger">Sign Out</a>
                </div>
                </div>
            </div>
            </div>
        </div>
        </div>
    </div>
    <div class="header-holder header-holder-desktop">
        <div class="header-container container-fluid">
        <h4 class="header-title">Dashboard</h4>
        <i class="header-divider"></i>
        <div class="header-wrap header-wrap-block justify-content-start">
            <div class="breadcrumb">
            <a href="<?php echo BASE_URL . 'admin/dashboard' ?>" class="breadcrumb-item"
                ><div class="breadcrumb-icon">
                <i data-feather="home"></i>
                </div>
                <span class="breadcrumb-text">Dashboard</span></a
            >
            </div>
        </div>
        <div class="header-wrap">
            <button
            class="btn btn-label-info btn-icon ml-2"
            id="fullscreen-trigger"
            data-toggle="tooltip"
            title="Toggle fullscreen"
            data-placement="left"
            >
            <i class="fa fa-expand fullscreen-icon-expand"></i>
            <i class="fa fa-compress fullscreen-icon-compress"></i>
            </button>
        </div>
        </div>
    </div>
    <div class="header-holder header-holder-mobile sticky-header" id="sticky-header-mobile">
        <div class="header-container container-fluid">
        <div class="header-wrap header-wrap-block justify-content-start">
            <h4 class="header-brand">Kukr</h4>
        </div>
        <div class="header-wrap">
            <button
            class="btn btn-flat-primary btn-icon ml-2"
            data-toggle="aside"
            >
            <i class="fa fa-bars"></i>
            </button>
        </div>
        </div>
    </div>
    <div class="header-holder header-holder-mobile">
        <div class="header-container container-fluid">
        <div
            class="header-wrap header-wrap-block justify-content-start w-100"
        >
            <div class="breadcrumb">
            <a href="<?php echo BASE_URL . 'admin/dashboard' ?>" class="breadcrumb-item"
                ><div class="breadcrumb-icon">
                <i data-feather="home"></i>
                </div>
                <span class="breadcrumb-text">Dashboard</span></a
            >
            </div>
        </div>
        </div>
    </div>
</div>
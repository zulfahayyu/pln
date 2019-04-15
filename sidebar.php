<div id="left-sidebar" class="sidebar">
    <div class="sidebar-scroll">
        <div class="user-account">
            <img src="<?= $site_url ?>/assets/images/user.png" class="rounded-circle user-photo" alt="User Profile Picture">
            <div class="dropdown">
                <span>Welcome,</span>
                <a href="javascript:void(0);" class="dropdown-toggle user-name" data-toggle="dropdown"><strong><?= $user['nama'] ?></strong></a>
                <ul class="dropdown-menu dropdown-menu-right account animated flipInY">
                    <li><a href="<?= $site_url ?>/profile"><i class="icon-user"></i>My Profile</a></li>
                    <li class="divider"></li>
                    <li><a href="login.php"><i class="icon-power"></i>Logout</a></li>
                </ul>
            </div>
            <hr>
            <div class="row">
                <div class="col-4">
                    <h6>5</h6>
                    <small>Project</small>
                </div>
                <div class="col-4">
                    <h6>3</h6>
                    <small>Available</small>
                </div>
                <div class="col-4">
                    <h6>1</h6>
                    <small>Finish</small>
                </div>
            </div>
            <hr>
        </div>

        <!-- TAB PANES -->
        <!-- TAB HOME -->
        <div class="tab-content p-l-0 p-r-0">
            <div class="tab-pane animated fadeIn active" id="hr_menu">
                <nav class="sidebar-nav">
                    <ul class="main-menu metismenu">
                        <li ><a href="<?= $site_url ?>"><i class="icon-speedometer"></i><span>Home</a></li>
                        <li ><a href="<?= $site_url ?>/task"><i class="icon-book-open"></i>Task Board</a></li>
                        <li ><a href="<?= $site_url ?>/file"><i class="icon-folder-alt"></i>File</a></li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
</div>
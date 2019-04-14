<div id="left-sidebar" class="sidebar">
    <div class="sidebar-scroll">
        <div class="user-account">
            <img src="<?= $site_url ?>/assets/images/user.png" class="rounded-circle user-photo" alt="User Profile Picture">
            <div class="dropdown">
                <span>Welcome,</span>
                <a href="javascript:void(0);" class="dropdown-toggle user-name" data-toggle="dropdown"><strong>Admin</strong></a>
                <ul class="dropdown-menu dropdown-menu-right account animated flipInY">
                    <li><a href="login.php"><i class="icon-power"></i>Logout</a></li>
                </ul>
            </div>
            <br><hr>
            
        </div>

            <!-- TAB SUPER ADMIN -->
            <div class="tab-pane animated fadeIn active" id="super_admin">
                `<nav class="sidebar-nav">
                <ul class="main-menu metismenu">
                        <li><a href="<?= $site_url ?>/user"><i class="icon-user-follow"></i><span>Manage User</span></a></li>
                        <li><a href="<?= $site_url ?>/manage"><i class="icon-note"></i>Manage Task</a></li>
                    </ul>
                </nav>`
            </div>
        </div>
    </div>
</div>
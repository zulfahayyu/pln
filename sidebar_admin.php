<?php

$toDo = query("SELECT *, task.id as id from task LEFT JOIN task_team ON task.id=task_team.id_task



WHERE (task_team.id_pegawai ='$user[id]' OR task.id_leader='$user[id]') AND status='To Do'");



$inProgress = query("SELECT *, task.id as id from task LEFT JOIN task_team ON task.id=task_team.id_task



WHERE (task_team.id_pegawai ='$user[id]' OR task.id_leader='$user[id]') AND status='In Progress'");



$done = query("SELECT *, task.id as id from task LEFT JOIN task_team ON task.id=task_team.id_task



WHERE (task_team.id_pegawai ='$user[id]' OR task.id_leader='$user[id]') AND status='Done'");

?>

<div id="left-sidebar" class="sidebar">
    <div class="sidebar-scroll">
        <div class="user-account">
            <img src="<?= $site_url ?>/assets/avatar/<?= $user['avatar'] ?>" class="rounded-circle user-photo" alt="User Profile Picture">
            <div class="dropdown">
                <span>Welcome,</span>
                <a href="javascript:void(0);" class="dropdown-toggle user-name" data-toggle="dropdown"><strong><?= $user['nama_p'] ?></strong></a>
                <ul class="dropdown-menu dropdown-menu-right account animated flipInY">
                    <li><a href="<?= $site_url ?>/profile"><i class="icon-user"></i>My Profile</a></li>
                    <li class="divider"></li>
                    <li><a href="<?= $site_url ?>/proses/logout.php"><i class="icon-power"></i>Logout</a></li>
                </ul>
            </div>
            <hr>
            <?php if ($user['status'] == 'user') { ?>
                <div class="row">
                    <div class="col-4">



                        <h6><?= count($toDo) ?></h6>



                        <small>To DO</small>



                    </div>
                    <div class="col-4">



                        <h6><?= count($inProgress) ?></h6>



                        <small>In Progress</small>



                    </div>
                    <div class="col-4">



                        <h6><?= count($done) ?></h6>



                        <small>Complate</small>



                    </div>
                </div>
                <hr>
            <?php } ?>
        </div>

        <!-- TAB SUPER ADMIN -->
        <div class="tab-pane animated fadeIn active" id="super_admin">
            `<nav class="sidebar-nav">
                <ul class="main-menu metismenu">
                    <li><a href="<?= $site_url ?>"><i class="icon-speedometer"></i><span>Home</a></li>
                    <?php if ($user['status'] == 'admin') { ?>
                        <li><a href="<?= $site_url ?>/task/manage"><i class="icon-note"></i>Manage Task</a></li>
                    <?php } else { ?>
                        <li><a href="<?= $site_url ?>/task/home"><i class="icon-book-open"></i>Task</a></li>
                    <?php } ?>
                    <?php if ($user['status'] == 'admin' || $user['status'] == 'hrd') { ?>
                        <li><a href="<?= $site_url ?>/user"><i class="icon-user-follow"></i><span>Manage User</span></a></li>
                    <?php } ?>
                    <?php if ($user['status'] == 'admin' || $user['id_atasan'] == '1') { ?>
                        <li><a href="<?= $site_url ?>/event"><i class="icon-calendar"></i><span>Event</span></a></li>
                    <?php } ?>
                    <li class="">
                        <a href="#Employees" class="has-arrow" aria-expanded="false"><i class="icon-docs"></i><span>Master Data</span></a>
                        <ul aria-expanded="false" class="collapse" style="height: 0px;">
                        <?php if ($user['status'] == 'admin') { ?>
                            <li><a href="<?= $site_url ?>/unit">Data Unit</a></li>
                            <li><a href="<?= $site_url ?>/jabatan">Data Jabatan</a></li>
                        <?php } ?>
                            <li><a href="<?= $site_url ?>/file">Data Document</a></li>
                        </ul>
                    </li>

                </ul>
            </nav>`
        </div>
    </div>
</div>
</div>
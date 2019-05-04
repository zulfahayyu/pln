<?php
date_default_timezone_set('Asia/Jakarta');
$current_date = (date('Y-m-d'));
$toDo = query("SELECT *, task.id as id from task LEFT JOIN task_team ON task.id=task_team.id_task
WHERE (task_team.id_pegawai ='$user[id]' OR task.id_leader='$user[id]') AND status='To Do'");
$inProgress = query("SELECT *, task.id as id from task LEFT JOIN task_team ON task.id=task_team.id_task
WHERE (task_team.id_pegawai ='$user[id]' OR task.id_leader='$user[id]') AND status='In Progress'");
$done = query("SELECT *, task.id as id from task LEFT JOIN task_team ON task.id=task_team.id_task
WHERE (task_team.id_pegawai ='$user[id]' OR task.id_leader='$user[id]') AND status='Done'");

$clear=count($done)/(count($toDo)+count($inProgress)+count($done))*100;
?>

<div id="main-content">
    <div class="container-fluid">
        <div class="block-header">
            <div class="row">
                <div class="col-lg-6 col-md-8 col-sm-12">
                    <h2><a href="javascript:void(0);" class="btn btn-xs btn-link btn-toggle-fullwidth"><i class="icon-list"></i></a>
                        Task Board</h2>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.php"><i class="icon-home"></i></a></li>
                        <li class="breadcrumb-item">Task Board</li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- TAB PERCENTAGE -->
        <div class="row">
            <div class="col-lg-12">
                <div class="row clearfix">
                    <div class="col-lg-12 col-md-12 col-sm-12 text-center">
                        <div class="card tasks_report">
                            <div class="body">
                                <input type="text" class="knob" id="taskprogress" value="<?= $clear ?>" data-width="90" data-height="90" data-thickness="0.1" data-fgColor="#26dad2" readonly>
                                <h6 class="m-t-20">Task Clear</h6>
                                <!-- <p class="displayblock m-b-0"><?= $clear ?>% Average <i class="zmdi zmdi-trending-up"></i></p> -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- TASK BOARD -->
            <div class="col-lg-4 col-md-12">
                <div class="card l-coral text-white planned_task">
                    <div class="header">
                        <h2>To Do</h2>
                        <ul class="header-dropdown">
                            <li><a href="javascript:void(0);" data-toggle="modal" data-target="#addcontact"><i class="icon-plus"></i></a></li>
                        </ul>
                    </div>
                    <div class="body">
                        <div class="dd" data-plugin="nestable" data-area="To Do">
                            <?php if ($toDo) { ?>
                                <ol class="dd-list">
                                    <?php foreach ($toDo as $value) :
                                        $due_date = date('d F Y', strtotime($value['due_date']));
                                        $comment = query("SELECT count(id) as jmlcom FROM task_comments where id_task='$value[id]'");
                                        // print_r($comment);
                                        ?>
                                        <li class="dd-item" data-id="<?= $value['id'] ?>" >
                                            <div class="dd-handle">
                                                <h6><?= $value['task_name'] ?></h6>
                                                <span class="badge badge-success" style="margin:0px!important"><i class=" icon-clock m-r-5"></i><?= $due_date ?></span>
                                                <span class="badge badge-default" style="margin:0px!important;    border-color: transparent;"><i class="fa fa-comment-o m-r-5"></i><?= $comment[0]['jmlcom'] ?></span>
                                            </div>
                                        </li>
                                    <?php endforeach; ?>
                                </ol>
                            <?php } else {
                            echo '<div class="dd-empty"></div>';
                        } ?>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-12">
                <div class="card l-amber text-white progress_task">
                    <div class="header">
                        <h2>In progress</h2>
                        <ul class="header-dropdown">
                            <li><a href="javascript:void(0);" data-toggle="modal" data-target="#addcontact"><i class="icon-plus"></i></a></li>
                        </ul>
                    </div>
                    <div class="body">
                        <div class="dd" data-plugin="nestable" data-area="In Progress">
                            <?php if ($inProgress) { ?>
                                <ol class="dd-list">
                                    <?php foreach ($inProgress as $value) :
                                        $due_date = date('d F Y', strtotime($value['due_date']));
                                        $comment = query("SELECT count(id) as jmlcom FROM task_comments where id_task='$value[id]'");
                                        // print_r($comment);
                                        ?>
                                        <li class="dd-item" data-id="<?= $value['id'] ?>">
                                            <div class="dd-handle">
                                                <h6><?= $value['task_name'] ?></h6>
                                                <span class="badge badge-success" style="margin:0px!important"><i class=" icon-clock m-r-5"></i><?= $due_date ?></span>
                                                <span class="badge badge-default" style="margin:0px!important;    border-color: transparent;"><i class="fa fa-comment-o m-r-5"></i><?= $comment[0]['jmlcom'] ?></span>
                                            </div>
                                        </li>
                                    <?php endforeach; ?>
                                </ol>
                            <?php } else {
                            echo '<div class="dd-empty"></div>';
                        } ?>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-12">
                <div class="card l-green text-black completed_task">
                    <div class="header">
                        <h2>Completed</h2>
                        <ul class="header-dropdown">
                            <li><a href="javascript:void(0);" data-toggle="modal" data-target="#addcontact"><i class="icon-plus"></i></a></li>
                        </ul>
                    </div>
                    <div class="body">
                        <div class="dd" data-plugin="nestable" data-area="Done">
                            <?php if ($done) { ?>
                                <ol class="dd-list">
                                    <?php foreach ($done as $value) :
                                        $due_date = date('d F Y', strtotime($value['due_date']));
                                        $comment = query("SELECT count(id) as jmlcom FROM task_comments where id_task='$value[id]'");
                                        // print_r($comment);
                                        ?>
                                        <li class="dd-item" data-id="<?= $value['id'] ?>">
                                            <div class="dd-handle">
                                                <h6><?= $value['task_name'] ?></h6>
                                                <span class="badge badge-success" style="margin:0px!important"><i class=" icon-clock m-r-5"></i><?= $due_date ?></span>
                                                <span class="badge badge-default" style="margin:0px!important;    border-color: transparent;"><i class="fa fa-comment-o m-r-5"></i><?= $comment[0]['jmlcom'] ?></span>
                                            </div>
                                        </li>
                                    <?php endforeach; ?>
                                </ol>
                            <?php } else {
                            echo '<div class="dd-empty"></div>';
                        } ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- List Task -->
        
    </div>
</div>
<?php 
    include 'manage.php'; 
?>
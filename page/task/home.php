<?php
date_default_timezone_set('Asia/Jakarta');
$current_date = (date('Y-m-d'));
$toDo = query("SELECT *, task.id as id from task JOIN task_team ON task.id=task_team.id_task
WHERE task_team.id_pegawai ='$user[id]' AND status='To Do'");
$inProgress = query("SELECT *, task.id as id from task JOIN task_team ON task.id=task_team.id_task
WHERE task_team.id_pegawai ='$user[id]' AND status='In Progress'");
$done = query("SELECT *, task.id as id from task JOIN task_team ON task.id=task_team.id_task
WHERE task_team.id_pegawai ='$user[id]' AND status='Done'");
print_r($toDo);
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
                                <input type="text" class="knob" value="66" data-width="90" data-height="90" data-thickness="0.1" data-fgColor="#26dad2" readonly>
                                <h6 class="m-t-20">Projects Clear</h6>
                                <p class="displayblock m-b-0">47% Average <i class="zmdi zmdi-trending-up"></i></p>
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
        <div class="row clearfix">
            <div class="col-lg-12 col-md-12">
                <div class="card">
                    <div class="body project_report">
                        <div class="table-responsive">
                            <table class="table table-hover js-basic-example dataTable table-custom m-b-0">
                                <thead>
                                    <tr>
                                        <th>Project</th>
                                        <th>Deadline</th>
                                        <th>Prograss</th>
                                        <th>Lead</th>
                                        <th>Team</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="project-title">
                                            <h6>InfiniO 4.1</h6>
                                            <small>Created 14 July, 2018</small>
                                        </td>
                                        <td>8 Aug, 2018</td>
                                        <td>
                                            <div class="progress progress-xs">
                                                <div class="progress-bar" role="progressbar" aria-valuenow="48" aria-valuemin="0" aria-valuemax="100" style="width: 48%;"></div>
                                            </div>
                                            <small>Completion with: 48%</small>
                                        </td>
                                        <td><img src="<?= $site_url ?>/assets/images/xs/avatar1.jpg" data-toggle="tooltip" data-placement="top" title="Team Lead" alt="Avatar" class="width35 rounded"></td>
                                        <td>
                                            <ul class="list-unstyled team-info">
                                                <li><img src="<?= $site_url ?>/assets/images/xs/avatar1.jpg" data-toggle="tooltip" data-placement="top" title="Avatar" alt="Avatar"></li>
                                                <li><img src="<?= $site_url ?>/assets/images/xs/avatar2.jpg" data-toggle="tooltip" data-placement="top" title="Avatar"></li>
                                                <li><img src="<?= $site_url ?>/assets/images/xs/avatar3.jpg" data-toggle="tooltip" data-placement="top" title="Avatar"></li>
                                            </ul>
                                        </td>
                                        <td><span class="badge badge-success">Active</span></td>
                                        <td class="project-actions">
                                            <a href="project-detail.html" class="btn btn-sm btn-outline-primary"><i class="icon-eye"></i></a>
                                            <a href="javascript:void(0);" class="btn btn-sm btn-outline-success"><i class="icon-pencil"></i></a>
                                            <a href="javascript:void(0);" class="btn btn-sm btn-outline-danger js-sweetalert" title="Delete" data-type="confirm"><i class="icon-trash"></i></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="project-title">
                                            <h6>Many desktop publishing packages and web</h6>
                                            <small>Created 18 July, 2018</small>
                                        </td>
                                        <td>18 Aug, 2018</td>
                                        <td>
                                            <div class="progress progress-xs">
                                                <div class="progress-bar" role="progressbar" aria-valuenow="78" aria-valuemin="0" aria-valuemax="100" style="width: 78%;"></div>
                                            </div>
                                            <small>Completion with: 78%</small>
                                        </td>
                                        <td><img src="<?= $site_url ?>/assets/images/xs/avatar2.jpg" data-toggle="tooltip" data-placement="top" title="Team Lead" alt="Avatar" class="width35 rounded"></td>
                                        <td>
                                            <ul class="list-unstyled team-info">
                                                <li><img src="<?= $site_url ?>/assets/images/xs/avatar10.jpg" data-toggle="tooltip" data-placement="top" title="Avatar"></li>
                                                <li><img src="<?= $site_url ?>/assets/images/xs/avatar7.jpg" data-toggle="tooltip" data-placement="top" title="Avatar"></li>
                                                <li><img src="<?= $site_url ?>/assets/images/xs/avatar2.jpg" data-toggle="tooltip" data-placement="top" title="Avatar"></li>
                                                <li><img src="<?= $site_url ?>/assets/images/xs/avatar5.jpg" data-toggle="tooltip" data-placement="top" title="Avatar"></li>
                                            </ul>
                                        </td>
                                        <td><span class="badge badge-success">Active</span></td>
                                        <td class="project-actions">
                                            <a href="project-detail.html" class="btn btn-sm btn-outline-primary"><i class="icon-eye"></i></a>
                                            <a href="javascript:void(0);" class="btn btn-sm btn-outline-success"><i class="icon-pencil"></i></a>
                                            <a href="javascript:void(0);" class="btn btn-sm btn-outline-danger js-sweetalert" title="Delete" data-type="confirm"><i class="icon-trash"></i></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="project-title">
                                            <h6>iNext - One Page Responsive Template</h6>
                                            <small>Created 14 July, 2018</small>
                                        </td>
                                        <td>22 Aug, 2018</td>
                                        <td>
                                            <div class="progress progress-xs">
                                                <div class="progress-bar l-slategray" role="progressbar" aria-valuenow="29" aria-valuemin="0" aria-valuemax="100" style="width: 29%;"></div>
                                            </div>
                                            <small>Completion with: 29%</small>
                                        </td>
                                        <td><img src="<?= $site_url ?>/assets/images/xs/avatar3.jpg" data-toggle="tooltip" data-placement="top" title="Team Lead" alt="Avatar" class="width35 rounded"></td>
                                        <td>
                                            <ul class="list-unstyled team-info">
                                                <li><img src="<?= $site_url ?>/assets/images/xs/avatar2.jpg" data-toggle="tooltip" data-placement="top" title="Avatar"></li>
                                                <li><img src="<?= $site_url ?>/assets/images/xs/avatar3.jpg" data-toggle="tooltip" data-placement="top" title="Avatar"></li>
                                            </ul>
                                        </td>
                                        <td><span class="badge badge-default">InActive</span></td>
                                        <td class="project-actions">
                                            <a href="project-detail.html" class="btn btn-sm btn-outline-primary"><i class="icon-eye"></i></a>
                                            <a href="javascript:void(0);" class="btn btn-sm btn-outline-success"><i class="icon-pencil"></i></a>
                                            <a href="javascript:void(0);" class="btn btn-sm btn-outline-danger js-sweetalert" title="Delete" data-type="confirm"><i class="icon-trash"></i></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="project-title">
                                            <h6>Massive Event - Conference and Event</h6>
                                            <small>Created 18 July, 2018</small>
                                        </td>
                                        <td>25 Sept, 2018</td>
                                        <td>
                                            <div class="progress progress-xs">
                                                <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width: 100%;"></div>
                                            </div>
                                            <small>Completion with: 100%</small>
                                        </td>
                                        <td><img src="<?= $site_url ?>/assets/images/xs/avatar3.jpg" data-toggle="tooltip" data-placement="top" title="Team Lead" alt="Avatar" class="width35 rounded"></td>
                                        <td>
                                            <ul class="list-unstyled team-info">
                                                <li><img src="<?= $site_url ?>/assets/images/xs/avatar10.jpg" data-toggle="tooltip" data-placement="top" title="Avatar"></li>
                                                <li><img src="<?= $site_url ?>/assets/images/xs/avatar7.jpg" data-toggle="tooltip" data-placement="top" title="Avatar"></li>
                                                <li><img src="<?= $site_url ?>/assets/images/xs/avatar2.jpg" data-toggle="tooltip" data-placement="top" title="Avatar"></li>
                                                <li><img src="<?= $site_url ?>/assets/images/xs/avatar5.jpg" data-toggle="tooltip" data-placement="top" title="Avatar"></li>
                                            </ul>
                                        </td>
                                        <td><span class="badge badge-danger">Closed</span></td>
                                        <td class="project-actions">
                                            <a href="project-detail.html" class="btn btn-sm btn-outline-primary"><i class="icon-eye"></i></a>
                                            <a href="javascript:void(0);" class="btn btn-sm btn-outline-success"><i class="icon-pencil"></i></a>
                                            <a href="javascript:void(0);" class="btn btn-sm btn-outline-danger js-sweetalert" title="Delete" data-type="confirm"><i class="icon-trash"></i></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="project-title">
                                            <h6>Oakleaf Admin - Bootstrap html5 with SASS</h6>
                                            <small>Created 18 July, 2018</small>
                                        </td>
                                        <td>29 Aug, 2018</td>
                                        <td>
                                            <div class="progress progress-xs">
                                                <div class="progress-bar" role="progressbar" aria-valuenow="13" aria-valuemin="0" aria-valuemax="100" style="width: 13%;"></div>
                                            </div>
                                            <small>Completion with: 13%</small>
                                        </td>
                                        <td><img src="<?= $site_url ?>/assets/images/xs/avatar1.jpg" data-toggle="tooltip" data-placement="top" title="Team Lead" alt="Avatar" class="width35 rounded"></td>
                                        <td>
                                            <ul class="list-unstyled team-info">
                                                <li><img src="<?= $site_url ?>/assets/images/xs/avatar7.jpg" data-toggle="tooltip" data-placement="top" title="Avatar"></li>
                                                <li><img src="<?= $site_url ?>/assets/images/xs/avatar1.jpg" data-toggle="tooltip" data-placement="top" title="Avatar"></li>
                                                <li><img src="<?= $site_url ?>/assets/images/xs/avatar3.jpg" data-toggle="tooltip" data-placement="top" title="Avatar"></li>
                                            </ul>
                                        </td>
                                        <td><span class="badge badge-success">Active</span></td>
                                        <td class="project-actions">
                                            <a href="project-detail.html" class="btn btn-sm btn-outline-primary"><i class="icon-eye"></i></a>
                                            <a href="javascript:void(0);" class="btn btn-sm btn-outline-success"><i class="icon-pencil"></i></a>
                                            <a href="javascript:void(0);" class="btn btn-sm btn-outline-danger js-sweetalert" title="Delete" data-type="confirm"><i class="icon-trash"></i></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="project-title">
                                            <h6>InfiniO 4.1</h6>
                                            <small>Created 14 July, 2018</small>
                                        </td>
                                        <td>05 Sept, 2018</td>
                                        <td>
                                            <div class="progress progress-xs">
                                                <div class="progress-bar" role="progressbar" aria-valuenow="48" aria-valuemin="0" aria-valuemax="100" style="width: 48%;"></div>
                                            </div>
                                            <small>Completion with: 48%</small>
                                        </td>
                                        <td><img src="<?= $site_url ?>/assets/images/xs/avatar5.jpg" data-toggle="tooltip" data-placement="top" title="Team Lead" alt="Avatar" class="width35 rounded"></td>
                                        <td>
                                            <ul class="list-unstyled team-info">
                                                <li><img src="<?= $site_url ?>/assets/images/xs/avatar1.jpg" data-toggle="tooltip" data-placement="top" title="Avatar"></li>
                                                <li><img src="<?= $site_url ?>/assets/images/xs/avatar2.jpg" data-toggle="tooltip" data-placement="top" title="Avatar"></li>
                                                <li><img src="<?= $site_url ?>/assets/images/xs/avatar3.jpg" data-toggle="tooltip" data-placement="top" title="Avatar"></li>
                                            </ul>
                                        </td>
                                        <td><span class="badge badge-success">Active</span></td>
                                        <td class="project-actions">
                                            <a href="project-detail.html" class="btn btn-sm btn-outline-primary"><i class="icon-eye"></i></a>
                                            <a href="javascript:void(0);" class="btn btn-sm btn-outline-success"><i class="icon-pencil"></i></a>
                                            <a href="javascript:void(0);" class="btn btn-sm btn-outline-danger js-sweetalert" title="Delete" data-type="confirm"><i class="icon-trash"></i></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="project-title">
                                            <h6>Many desktop publishing packages and web</h6>
                                            <small>Created 18 July, 2018</small>
                                        </td>
                                        <td>15 Sept, 2018</td>
                                        <td>
                                            <div class="progress progress-xs">
                                                <div class="progress-bar" role="progressbar" aria-valuenow="78" aria-valuemin="0" aria-valuemax="100" style="width: 78%;"></div>
                                            </div>
                                            <small>Completion with: 78%</small>
                                        </td>
                                        <td><img src="<?= $site_url ?>/assets/images/xs/avatar6.jpg" data-toggle="tooltip" data-placement="top" title="Team Lead" alt="Avatar" class="width35 rounded"></td>
                                        <td>
                                            <ul class="list-unstyled team-info">
                                                <li><img src="<?= $site_url ?>/assets/images/xs/avatar10.jpg" data-toggle="tooltip" data-placement="top" title="Avatar"></li>
                                                <li><img src="<?= $site_url ?>/assets/images/xs/avatar7.jpg" data-toggle="tooltip" data-placement="top" title="Avatar"></li>
                                                <li><img src="<?= $site_url ?>/assets/images/xs/avatar2.jpg" data-toggle="tooltip" data-placement="top" title="Avatar"></li>
                                                <li><img src="<?= $site_url ?>/assets/images/xs/avatar5.jpg" data-toggle="tooltip" data-placement="top" title="Avatar"></li>
                                            </ul>
                                        </td>
                                        <td><span class="badge badge-success">Active</span></td>
                                        <td class="project-actions">
                                            <a href="project-detail.html" class="btn btn-sm btn-outline-primary"><i class="icon-eye"></i></a>
                                            <a href="javascript:void(0);" class="btn btn-sm btn-outline-success"><i class="icon-pencil"></i></a>
                                            <a href="javascript:void(0);" class="btn btn-sm btn-outline-danger js-sweetalert" title="Delete" data-type="confirm"><i class="icon-trash"></i></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="project-title">
                                            <h6>InfiniO 4.2</h6>
                                            <small>Created 14 July, 2018</small>
                                        </td>
                                        <td>25 Sept, 2018</td>
                                        <td>
                                            <div class="progress progress-xs">
                                                <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="48" aria-valuemin="0" aria-valuemax="100" style="width: 48%;"></div>
                                            </div>
                                            <small>Completion with: 48%</small>
                                        </td>
                                        <td><img src="<?= $site_url ?>/assets/images/xs/avatar2.jpg" data-toggle="tooltip" data-placement="top" title="Team Lead" alt="Avatar" class="width35 rounded"></td>
                                        <td>
                                            <ul class="list-unstyled team-info">
                                                <li><img src="<?= $site_url ?>/assets/images/xs/avatar1.jpg" data-toggle="tooltip" data-placement="top" title="Avatar"></li>
                                                <li><img src="<?= $site_url ?>/assets/images/xs/avatar2.jpg" data-toggle="tooltip" data-placement="top" title="Avatar"></li>
                                                <li><img src="<?= $site_url ?>/assets/images/xs/avatar3.jpg" data-toggle="tooltip" data-placement="top" title="Avatar"></li>
                                            </ul>
                                        </td>
                                        <td><span class="badge badge-warning">Pending</span></td>
                                        <td class="project-actions">
                                            <a href="project-detail.html" class="btn btn-sm btn-outline-primary"><i class="icon-eye"></i></a>
                                            <a href="javascript:void(0);" class="btn btn-sm btn-outline-success"><i class="icon-pencil"></i></a>
                                            <a href="javascript:void(0);" class="btn btn-sm btn-outline-danger js-sweetalert" title="Delete" data-type="confirm"><i class="icon-trash"></i></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="project-title">
                                            <h6>Startup - OnePage Business Corporate Template</h6>
                                            <small>Created 14 July, 2018</small>
                                        </td>
                                        <td>26 Sept, 2018</td>
                                        <td>
                                            <div class="progress progress-xs">
                                                <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="56" aria-valuemin="0" aria-valuemax="100" style="width: 56%;"></div>
                                            </div>
                                            <small>Completion with: 56%</small>
                                        </td>
                                        <td><img src="<?= $site_url ?>/assets/images/xs/avatar8.jpg" data-toggle="tooltip" data-placement="top" title="Team Lead" alt="Avatar" class="width35 rounded"></td>
                                        <td>
                                            <ul class="list-unstyled team-info">
                                                <li><img src="<?= $site_url ?>/assets/images/xs/avatar3.jpg" data-toggle="tooltip" data-placement="top" title="Avatar"></li>
                                                <li><img src="<?= $site_url ?>/assets/images/xs/avatar1.jpg" data-toggle="tooltip" data-placement="top" title="Avatar"></li>
                                                <li><img src="<?= $site_url ?>/assets/images/xs/avatar5.jpg" data-toggle="tooltip" data-placement="top" title="Avatar"></li>
                                                <li><img src="<?= $site_url ?>/assets/images/xs/avatar9.jpg" data-toggle="tooltip" data-placement="top" title="Avatar"></li>
                                            </ul>
                                        </td>
                                        <td><span class="badge badge-warning">Pending</span></td>
                                        <td class="project-actions">
                                            <a href="project-detail.html" class="btn btn-sm btn-outline-primary"><i class="icon-eye"></i></a>
                                            <a href="javascript:void(0);" class="btn btn-sm btn-outline-success"><i class="icon-pencil"></i></a>
                                            <a href="javascript:void(0);" class="btn btn-sm btn-outline-danger js-sweetalert" title="Delete" data-type="confirm"><i class="icon-trash"></i></a>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
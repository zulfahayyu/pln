<?php
if (empty($id)) {
    echo "<script>window.location.href = '" . $site_url . "/task'</script>";
}
date_default_timezone_set('Asia/Jakarta'); //set time server
$current_date = (date('Y-m-d')); // get current date

$task = get_where("SELECT *,task.id AS id FROM task JOIN unit_kerja ON task.id_unit=unit_kerja.id 
WHERE task.id='$id'"); // get task detail

$staff = query("SELECT * FROM pegawai WHERE id_unit='$task[id_unit]' 
AND id NOT IN(SELECT id_pegawai FROM task_team WHERE id_task='$task[id]')"); // get data pegawai berdasarkan id_unit

$listStaff = query("SELECT *,task_team.id AS id FROM task_team JOIN pegawai ON task_team.id_pegawai=pegawai.id
 where id_task='$task[id]'"); // get list assigned staff

$listComment = query("SELECT *,task_comments.id as id FROM task_comments JOIN pegawai ON task_comments.id_user=pegawai.id 
LEFT JOIN document on task_comments.id_doc = document.id
where id_task='$task[id]' ORDER BY task_comments.create_data DESC"); // get list commnent

$listFile = query("SELECT *,task_document.id as id FROM task_document JOIN document 
ON task_document.id_doc=document.id JOIN pegawai ON document.user_upload=pegawai.id
where id_task='$task[id]'"); // get list file 


$due_status = ($current_date > $task['due_date']) ? '<span class="badge badge-danger">Due</span>' : ''; //cek due status

$due_date = date('d F Y', strtotime($task['due_date'])); // formating due date

// status label
if ($task['status'] == 'To Do')
    $status_color = 'info';
elseif ($task['status'] == 'In Progress')
    $status_color = 'primary';
elseif ($task['status'] == 'Pending')
    $status_color = 'warning';
elseif ($task['status'] == 'Done')
    $status_color = 'success';
else
    $status_color = 'default';

//priority table
if ($task['priority'] == 'High')
    $priority_color = 'danger';
elseif ($task['priority'] == 'Medium')
    $priority_color = 'warning';
elseif ($task['priority'] == 'Low')
    $priority_color = 'success';
else
    $priority_color = 'default';


// print_r($listFile);
?>
<div id="main-content">
    <div class="container-fluid">
        <div class="block-header">
            <div class="row">
                <div class="col-lg-6 col-md-8 col-sm-12">
                    <h2><a href="javascript:void(0);" class="btn btn-xs btn-link btn-toggle-fullwidth"><i class="fa fa-arrow-left"></i></a> <?= $task['task_name'] ?></h2>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index-2.html"><i class="icon-home"></i></a></li>
                        <li class="breadcrumb-item">Task</li>
                        <li class="breadcrumb-item active">View</li>
                    </ul>
                </div>

            </div>
        </div>

        <div class="row clearfix">
            <div class="col-lg-12">
                <div class="card">

                    <div class="mail-inbox">
                        <div class="mail-right" style="width:100%">
                            <div class="header align-center">
                                <ul class="nav nav-tabs-new2">
                                    <li class="nav-item"><a class="nav-link show active" data-toggle="tab" href="#task-summary">Task Summary</a></li>
                                    <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#task-activity">Comments</a></li>
                                    <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#task-file">File</a></li>
                                    <div class="ml-auto">


                                        <div class="btn-group">
                                            <a href="javascript:void(0);" class="btn btn-default btn-sm hidden-sm" data-toggle="modal" data-target="#addComment"><i class="fa fa-comment"></i> New Comment</a>
                                            <a href="javascript:void(0);" class="btn btn-default btn-sm hidden-sm" data-toggle="modal" data-target="#uploadFile"><i class="fa fa-upload"></i> Upload File</a>
                                            <a href="javascript:void(0);" class="btn btn-default btn-sm" data-toggle="modal" data-target="#assignStaff"><i class="fa fa-user"></i> Assign Staff</a>
                                        </div>


                                    </div>
                                </ul>

                            </div>
                            <div class="body">
                                <div class="tab-content">
                                    <div class="tab-pane show active" id="task-summary">
                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="">
                                                    <div class="body text-center">
                                                        <input type="text" class="knob" value="<?= $task['progress'] ?>" data-width="150" task-id="<?= $task['id'] ?>" data-height="150" data-thickness="0.25" data-fgColor="#64c8c0">
                                                        <p class="text-muted m-b-0">PROGRESS</p>
                                                    </div>
                                                </div>

                                            </div>
                                            <div class="col-md-8">
                                                <table id="projectTable" class="table table-striped table-bordered">
                                                    <tbody>
                                                        <tr>
                                                            <td><b>Id Task</b></td>
                                                            <td><b>Priority</b></td>
                                                            <td><b>Status</b></td>
                                                            <td><b>Unit</b></td>
                                                            <td><b>Due Date</b></td>
                                                        </tr>
                                                        <tr>
                                                            <td>T-<?= $task['id'] ?></td>
                                                            <td><span class="badge badge-<?= $priority_color ?>"><?= $task['priority'] ?></span></td>
                                                            <td><span class="badge badge-<?= $status_color ?>"><?= $task['status'] ?></span><?= $due_status ?></td>
                                                            <td><?= $task['kode_unit'] ?> - <?= $task['nama_unit'] ?></td>
                                                            <td><?= $due_date ?></td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                                <div class="box box-default">
                                                    <div class="box-header with-border">
                                                        <h5 class="box-title">Task Description</h5>
                                                        <?= $task['description'] ?>
                                                    </div>
                                                    <!-- /.box-header -->
                                                    <div class="box-body ">

                                                    </div>
                                                    <!-- /.box-body -->
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane" id="task-activity">
                                        <div class="">
                                            <?php foreach ($listComment as $value) :
                                                $date = date('d F Y h:i:s', strtotime($value['create_data']));

                                                ?>
                                                <div class="timeline-item green">

                                                    <span class="date"><?= $date ?> | <span>By: <a href="javascript:void(0);" title="<?= $value['nama_p'] ?>"><?= $value['nama_p'] ?></a></span></span>

                                                    <div class="msg">
                                                        <p><?= $value['description'] ?></p>
                                                        <?php if ($value['doc_name']) {
                                                            $file_loc = $site_url . '/assets/document/' . $value['doc_file'];
                                                            ?>
                                                            <div class="top_counter">
                                                                <div class="icon"><i class="fa fa-file-word-o"></i> </div>
                                                                <div class="content">
                                                                    <p class="mb-1"><?= $value['doc_name'] ?></p>
                                                                    <span><a href="<?= $file_loc ?>" download>Download</a></span>
                                                                </div>
                                                            </div>
                                                        <?php } ?>
                                                    </div>

                                                </div>
                                            <?php endforeach; ?>
                                        </div>
                                    </div>
                                    <div class="tab-pane" id="task-file">
                                        <div class="table-responsive">
                                            <table class="table table-hover js-basic-example dataTable table-custom">
                                                <thead class="thead-dark">
                                                    <tr>
                                                        <th>File Name</th>
                                                        <th>Upload Date</th>
                                                        <th>PIC</th>
                                                        <th width="10%">Action</th>
                                                    </tr>
                                                </thead>
                                                <tfoot>
                                                    <tr>
                                                        <th>File Name</th>
                                                        <th>Upload Date</th>
                                                        <th>PIC</th>
                                                        <th width="10%">Action</th>
                                                    </tr>
                                                </tfoot>
                                                <tbody>
                                                    <?php foreach ($listFile as $value) :
                                                        $date = date('d F Y', strtotime($value['date_upload']));
                                                        $file_loc = $site_url . '/assets/document/' . $value['doc_file'];
                                                        ?>
                                                        <tr>
                                                            <td><?= $value['doc_name'] ?></td>
                                                            <td><?= $date ?></td>
                                                            <td><?= $value['nama_p'] ?></td>
                                                            <td> <a href="<?= $file_loc ?>" class="btn btn-primary" download><i class="fa fa-download"></i> </a>
                                                                <a href="" class="btn btn-danger"><i class="fa fa-trash-o"></i></a>
                                                            </td>
                                                        </tr>
                                                    <?php endforeach; ?>

                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-12">
                <div class="card">
                    <div class="header">
                        <h2>Assigned Team</h2>
                    </div>
                    <div class="body">

                        <ul class="right_chat list-unstyled mb-0">
                            <?php foreach ($listStaff as $value) : ?>
                                <li class="online">
                                    <a href="javascript:void(0);">
                                        <div class="media">
                                            <img class="media-object " src="<?= $site_url ?>/assets/avatar/<?= $value['avatar'] ?>" alt="">
                                            <div class="media-body">
                                                <span class="name"><?= $value['nama_p'] ?></span>
                                                <span class="message"><?= $value['keterangan'] ?></span>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                            <?php endforeach; ?>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Modal Assign Staf -->
<div class="modal fade" id="assignStaff" tabindex="-1" role="dialog" aria-labelledby="assignStaffLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="addTaskLabel">Assign Staff</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="<?= $site_url ?>/proses/model_task.php?method=assign_staff" method="POST">
                <div class="modal-body">
                    <input type="hidden" name="id_task" value="<?= $task['id'] ?>">
                    <div class="form-group">
                        <label>Pegawai</label>
                        <select class="form-control show-tick" name="id_pegawai" required>
                            <option selected disabled>Select Staff</option>
                            <?php foreach ($staff as $value) : ?>
                                <option value="<?= $value['id'] ?>"><?= $value['nama_p'] ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Jabatan</label>
                        <input type="text" class="form-control" name="jabatan" required>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" name="submit" value="submit" class="btn btn-primary">Add</button>
                    <button type="button" class="btn btn-outline-secondary" data-dismiss="modal">CLOSE</button>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- Modal Add comment -->

<div class="modal fade" id="addComment" tabindex="-1" role="dialog" aria-labelledby="addCommentLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="addTaskLabel">Add Comment</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="<?= $site_url ?>/proses/model_task.php?method=add_comment" method="POST" enctype="multipart/form-data">
                <div class="modal-body">
                    <input type="hidden" name="id_task" value="<?= $task['id'] ?>">

                    <div class="form-group">
                        <label>Comment</label>
                        <textarea class="summernote" name="description">

                        </textarea>
                    </div>
                    <div class="form-group">
                        <label>File</label>
                        <div class="custom-file">
                            <input type="file" name="document" class="form-control" id="inputGroupFile04">
                            <!-- <label class="custom-file-label" for="inputGroupFile04">Choose file</label> -->
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" name="submit" value="submit" class="btn btn-primary">Add</button>
                    <button type="button" class="btn btn-outline-secondary" data-dismiss="modal">CLOSE</button>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- Upload file -->
<div class="modal fade" id="uploadFile" tabindex="-1" role="dialog" aria-labelledby="uploadFileLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="addTaskLabel">Add File</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="<?= $site_url ?>/proses/model_task.php?method=add_file" method="POST" enctype="multipart/form-data">
                <div class="modal-body">
                    <input type="hidden" name="id_task" value="<?= $task['id'] ?>">

                    <div class="form-group">
                        <label>File Name</label>
                        <input type="text" class="form-control" name="filename">
                    </div>
                    <div class="form-group">
                        <label>File</label>
                        <div class="custom-file">
                            <input type="file" name="document" class="form-control" id="inputGroupFile04">
                            <!-- <label class="custom-file-label" for="inputGroupFile04">Choose file</label> -->
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" name="submit" value="submit" class="btn btn-primary">Add</button>
                    <button type="button" class="btn btn-outline-secondary" data-dismiss="modal">CLOSE</button>
                </div>
            </form>
        </div>
    </div>
</div>
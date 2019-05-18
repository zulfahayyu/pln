<?php
date_default_timezone_set('Asia/Jakarta');
$current_date = (date('Y-m-d'));
// $unit = query("SELECT * FROM unit_kerja");

if($user['status']=='admin'){
    $where='OR 1=1';
}else{
    $where="OR (create_by='$user[id]' OR id_leader='$user[id]')";
}

$event = query("SELECT *,task.id as id from task LEFT JOIN task_team ON task.id=task_team.id_task 
WHERE task_team.id_pegawai ='$user[id]' $where GROUP BY task.id ORDER BY due_date ASC ");
?>
<!-- MAIN CONTENT -->
<div id="main-content">
    <div class="container-fluid">
        <div class="block-header">
            <div class="row">
                <div class="col-lg-6 col-md-8 col-sm-12">
                    <h2><a href="javascript:void(0);" class="btn btn-xs btn-link btn-toggle-fullwidth"><i class="fa fa-arrow-left"></i></a> Task List</h2>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index-2.html"><i class="icon-home"></i></a></li>
                        <li class="breadcrumb-item">Task</li>
                        <li class="breadcrumb-item active">Task List</li>
                    </ul>
                </div>
                <?php if($jml_bawahan>0 || $user['status']=='admin') { ?>
                <div class="col-lg-6 col-md-4 col-sm-12 text-right">
                    <a href="<?= $site_url ?>/task/add" class="btn btn-primary">Add New Task</a>
                </div>
                <?php } ?>
            </div>
        </div>

        <div class="row clearfix">
            <div class="col-lg-12 col-md-12">
                <div class="card">
                    <div class="body project_report">
                        <div class="table-responsive">
                            <table class="table table-hover js-basic-example dataTable table-custom m-b-0">
                                <thead>
                                    <tr>
                                        <th>Task Name</th>
                                        <th>Deadline</th>
                                        <th>Prograss</th>
                                        <th>Lead</th>
                                        <th>Team</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($event as $value) :
                                        $due_date = date('d F Y', strtotime($value['due_date']));
                                        $date_create = date('d F Y', strtotime($value['date_create']));
                                        if ($value['status'] == 'To Do')
                                            $status_color = 'info';
                                        elseif ($value['status'] == 'In Progress')
                                            $status_color = 'primary';
                                        elseif ($value['status'] == 'Pending')
                                            $status_color = 'warning';
                                        elseif ($value['status'] == 'Done')
                                            $status_color = 'success';
                                        else
                                            $status_color = 'default';
                                        $due_status = ($current_date > $value['due_date']) ? '<span class="badge badge-danger">Due</span>' : ''; //cek due status

                                        $team_lead = get_where("SELECT * FROM pegawai WHERE id='$value[id_leader]'");

                                        $task_team = query("SELECT * FROM task_team JOIN pegawai on task_team.id_pegawai=pegawai.id
                                        WHERE id_task='$value[id]'");
                                        ?>
                                        <tr>
                                            <td class="project-title">
                                                <h6><?= $value['task_name'] ?></h6>
                                                <small><?= $date_create ?></small>
                                            </td>
                                            <td><?= $due_date ?></td>
                                            <td>
                                                <div class="progress progress-xs">
                                                    <div class="progress-bar" role="progressbar" aria-valuenow="<?= $value['progress'] ?>" aria-valuemin="0" aria-valuemax="100" style="width: <?= $value['progress'] ?>%;"></div>
                                                </div>
                                                <small>Completion with: <?= $value['progress'] ?>%</small>
                                            </td>
                                            <td><img src="<?= $site_url ?>/assets/avatar/<?= $team_lead['avatar'] ?>" data-toggle="tooltip" data-placement="top" title="<?= $team_lead['nama_p'] ?>" alt="Avatar" class="width35 rounded"></td>
                                            <td>
                                                <ul class="list-unstyled team-info">
                                                    <?php foreach ($task_team as $team) : ?>
                                                        <li><img src="<?= $site_url ?>/assets/avatar/<?= $team['avatar'] ?>" data-toggle="tooltip" data-placement="top" title="<?= $team['nama_p'] ?>" alt="<?= $team['nama_p'] ?>"></li>
                                                    <?php endforeach; ?>
                                                </ul>
                                            </td>
                                            <td><span class="badge badge-<?= $status_color ?>"><?= $value['status'] ?></span> <?= $due_status ?></td>
                                            <td class="project-actions">
                                                <a href="<?= $site_url ?>/task/view/<?= $value['id'] ?>" class="btn btn-sm btn-outline-primary"><i class="icon-eye"></i></a>
                                                <?php if($value['id_leader']==$user['id'] || $value['create_by']==$user['id']){ ?>
                                                <a href="<?= $site_url ?>/task/edit/<?= $value['id'] ?>" class="btn btn-sm btn-outline-success"><i class="icon-pencil"></i></a>
                                                <a href="<?= $site_url ?>/proses/model_task.php?id=<?php echo $value["id"]; ?>&delete=true" onclick='return confirm("Yakin ingin menghapus data?")'  class="btn btn-sm btn-outline-danger" title="Delete" ><i class="icon-trash"></i></a>
                                                <?php } ?>
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

<!-- Modal -->
<div class="modal fade" id="addTask" tabindex="-1" role="dialog" aria-labelledby="addTaskLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="addTaskLabel">Add New Task</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="row clearfix">
                    <div class="col-sm-12">
                        <div class="form-group">
                            <input type="text" class="form-control" name="nama" placeholder="Nama Task *" required>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-12">
                        <div class="form-group mr">
                            <input type="text" data-provide="datepicker" data-date-autoclose="true" name="tgl_mulai" class="form-control" placeholder="Tanggal Mulai *">
                            <!-- bikin default hari ini -->
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-12">
                        <div class="form-group mr">
                            <input type="text" data-provide="datepicker" data-date-autoclose="true" name="tgl_akhir" class="form-control" placeholder="Tanggal Berakhir *">
                            <!-- bikin default hari ini -->
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
            </div>
        </div>
    </div>
</div>
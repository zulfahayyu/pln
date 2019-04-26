<?php
date_default_timezone_set('Asia/Jakarta');
$current_date = (date('Y-m-d'));
// $unit = query("SELECT * FROM unit_kerja");
$event = query("SELECT * from task WHERE due_date>='$current_date' ORDER BY due_date ASC");
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
                <div class="col-lg-6 col-md-4 col-sm-12 text-right">
                    <a href="<?= $site_url ?>/task/add" class="btn btn-primary">Add New Task</a>
                </div>
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
                                        $due_date=date('d F Y',strtotime($value['due_date']));
                                        $date_create=date('d F Y',strtotime($value['date_create']));
                                        if($value['status']=='To Do')
                                            $status_color='info';
                                        elseif($value['status']=='In Progress')
                                            $status_color='primary';
                                        elseif($value['status']=='Pending')
                                            $status_color='warning';
                                        elseif($value['status']=='Done')
                                            $status_color='success';
                                        else
                                            $status_color='default';
                                        $team_lead=get_where("SELECT * FROM pegawai WHERE id='$value[id_leader]'");

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
                                            <td><img src="../assets/images/xs/avatar1.jpg" data-toggle="tooltip" data-placement="top" title="<?= $team_lead['nama_p'] ?>" alt="Avatar" class="width35 rounded"></td>
                                            <td>
                                                <ul class="list-unstyled team-info">
                                                    <li><img src="../assets/images/xs/avatar1.jpg" data-toggle="tooltip" data-placement="top" title="Avatar" alt="Avatar"></li>
                                                    <li><img src="../assets/images/xs/avatar2.jpg" data-toggle="tooltip" data-placement="top" title="Avatar"></li>
                                                    <li><img src="../assets/images/xs/avatar3.jpg" data-toggle="tooltip" data-placement="top" title="Avatar"></li>
                                                </ul>
                                            </td>
                                            <td><span class="badge badge-<?= $status_color ?>"><?= $value['status'] ?></span></td>
                                            <td class="project-actions">
                                                <a href="project-detail.html" class="btn btn-sm btn-outline-primary"><i class="icon-eye"></i></a>
                                                <a href="javascript:void(0);" class="btn btn-sm btn-outline-success"><i class="icon-pencil"></i></a>
                                                <a href="javascript:void(0);" class="btn btn-sm btn-outline-danger js-sweetalert" title="Delete" data-type="confirm"><i class="icon-trash"></i></a>
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
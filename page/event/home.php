<?php
date_default_timezone_set('Asia/Jakarta');
$current_date = (date('Y-m-d'));
$unit = query("SELECT * FROM unit_kerja");
$event = query("SELECT *,event.id as id FROM event left join unit_kerja on event.id_unit=unit_kerja.id  
where date_start>='$current_date' ORDER BY date_start ASC");
?>
<!-- MAIN CONTENT -->
<div id="main-content">
    <div class="container-fluid">
        <div class="block-header">
            <div class="row">
                <div class="col-lg-6 col-md-8 col-sm-12">

                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.php"><i class="icon-home"></i></a></li>
                        <li class="breadcrumb-item">Manage Event</li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- LIST TUGAS -->
        <div class="row clearfix">
            <div class="col-lg-12">
                <div class="card">
                    <div class="header">
                        <h2>Data Event</h2>
                        <ul class="header-dropdown">
                            <li><button type="button" class="btn btn-primary" data-toggle="modal" data-target="#addUnit">Add New</button></li>
                        </ul>
                    </div>
                    <div class="body">
                        <div class="table-responsive">
                            <table class="table table-hover js-basic-example dataTable table-custom table-striped m-b-0 c_list">
                                <thead class="thead-dark">
                                    <tr>
                                        <th>
                                            <label class="fancy-checkbox">
                                                <input class="select-all" type="checkbox" name="checkbox">
                                                <span></span>
                                            </label>
                                        </th>
                                        <th>Nama Event</th>
                                        <th>Tanggal Mulai</th>
                                        <th>Tanggal Berakhir</th>
                                        <th>Unit Kerja</th>
                                        <th>Lokasi</th>
                                        <th width="10%">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($event as $value) { ?>
                                        <tr>
                                            <td class="width45">
                                                <label class="fancy-checkbox">
                                                    <input class="checkbox-tick" type="checkbox" name="checkbox">
                                                    <span></span>
                                                </label>
                                            </td>
                                            <td>
                                                <h6 class="mb-0"><?= $value['event_name'] ?></h6>
                                            </td>
                                            <td>
                                                <h6 class="mb-0"><?= $value['date_start'] ?></h6>
                                            </td>
                                            <td>
                                                <h6 class="mb-0"><?= $value['date_end'] ?></h6>
                                            </td>
                                            <td>
                                                <h6 class="mb-0"><?= ($value['nama_unit']) ? $value['nama_unit'] : 'Semua Unit' ?></h6>
                                            </td>
                                            <td>
                                                <h6 class="mb-0"><?= $value['location'] ?></h6>
                                            </td>
                                            <td>
                                                <button type="button" id="btnEdit" class="btn btn-sm btn-outline-secondary" onclick="editEvent(<?= $value['id'] ?>)" title="Edit"><i class="fa fa-edit"></i></button>
                                                <a href="<?= $site_url ?>/proses/model_event.php?id=<?= $value['id'] ?>&delete=true" onclick='return confirm("Yakin ingin menghapus data?")' class="btn btn-sm btn-outline-danger js-sweetalert" title="Delete" data-type="confirm"><i class="fa fa-trash-o"></i></a>
                                            </td>
                                        </tr>
                                    <?php } ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<!-- Modal Add -->
<div class="modal fade" id="addUnit" tabindex="-1" role="dialog" aria-labelledby="addUnitLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="addTaskLabel">Add Event</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="<?= $site_url ?>/proses/model_event.php" method="POST">
                <div class="modal-body">
                    <div class="form-group">
                        <div class="form-line">
                            <input type="text" class="form-control" name="name" placeholder="Event Title" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <select class="form-control show-tick" name="priority">
                            <option selected disabled>Priority</option>
                            <option value="bg-danger">High</option>
                            <option value="bg-warning">Medium</option>
                            <option value="bg-success">Low</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <div class="form-line">
                            <div class="input-daterange input-group" data-provide="datepicker" data-date-format="yyyy-mm-dd">
                                <input type="text" autocomplete="off" class="input-sm form-control" name="start" placeholder="start date" required>
                                <span class="input-group-addon text-center" style="width: 40px;">to</span>
                                <input type="text" autocomplete="off" class="input-sm form-control" name="end" placeholder="end date" required>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <select class="form-control show-tick" name="unit">
                            <option selected>All Unit</option>
                            <?php foreach ($unit as $row) : ?>
                                <option value="<?= $row['id'] ?>"><?= $row['nama_unit'] ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <div class="form-line">
                            <input type="text" class="form-control" name="location" placeholder="Location" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="form-line">
                            <textarea class="form-control no-resize" rows="4" name="description" placeholder="Event Description..."></textarea>
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
<!-- Modal Edit -->
<div class="modal fade" id="updateEvent" tabindex="-1" role="dialog" aria-labelledby="updateEventLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="addTaskLabel">Update Event</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div id="contentUpdate">
            </div>
        </div>
    </div>
</div>
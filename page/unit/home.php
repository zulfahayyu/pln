<?php
$unitkerja = query("SELECT * FROM unit_kerja");
?>
<!-- MAIN CONTENT -->
<div id="main-content">
    <div class="container-fluid">
        <div class="block-header">
            <div class="row">
                <div class="col-lg-6 col-md-8 col-sm-12">

                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.php"><i class="icon-home"></i></a></li>
                        <li class="breadcrumb-item">Manage Unit Kerja</li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- LIST TUGAS -->
        <div class="row clearfix">
            <div class="col-lg-12">
                <div class="card">
                    <div class="header">
                        <h2>Data Unit Kerja</h2>
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
                                        <th width="15%">Kode</th>
                                        <th>Name Jabatan</th>
                                        <th width="10%">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($unitkerja as $unit) { ?>
                                        <tr>
                                            <td class="width45">
                                                <label class="fancy-checkbox">
                                                    <input class="checkbox-tick" type="checkbox" name="checkbox">
                                                    <span></span>
                                                </label>
                                            </td>
                                            <td>
                                                <h6 class="mb-0"><?= $unit['kode_unit'] ?></h6>
                                            </td>
                                            <td>
                                                <h6 class="mb-0"><?= $unit['nama_unit'] ?></h6>
                                            </td>
                                            <td>
                                                <button type="button" id="btnEdit" class="btn btn-sm btn-outline-secondary" onclick="editUnit(<?= $unit['id'] ?>)" title="Edit"><i class="fa fa-edit"></i></button>
                                                <a href="<?= $site_url ?>/proses/model_unitkerja.php?id=<?= $unit['id'] ?>&delete=true" onclick='return confirm("Yakin ingin menghapus data?")' class="btn btn-sm btn-outline-danger js-sweetalert" title="Delete" data-type="confirm"><i class="fa fa-trash-o"></i></a>
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
                <h5 class="modal-title" id="addTaskLabel">Add Unit Kerja</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form method="POST" action="<?= $site_url ?>/proses/model_unitkerja.php">
                <div class="modal-body">
                    <div class="row clearfix">
                        <div class="col-sm-12">
                            <div class="form-group">
                                <input type="text" class="form-control" name="kode" placeholder="Kode *" required>
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <div class="form-group">
                                <input type="text" class="form-control" name="nama" placeholder="Nama Unit Kerja *" required>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" name="submit" value="save" class="btn btn-primary">Save</button>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- Modal Edit -->
<div class="modal fade" id="updateUnit" tabindex="-1" role="dialog" aria-labelledby="updateUnitLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="addTaskLabel">Update Unit Kerja</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div id="contentUpdate">
            </div>
        </div>
    </div>
</div>
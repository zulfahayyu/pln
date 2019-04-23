<?php
$pegawai = query("SELECT * FROM pegawai");
$jabatan = query("SELECT * FROM jabatan");
$unit = query("SELECT * FROM unit_kerja");

?>


<!-- MAIN CONTENT -->
<div id="main-content">
    <div class="container-fluid">
        <div class="block-header">
            <div class="row">
                <div class="col-lg-6 col-md-8 col-sm-12">
                    <h2><a href="javascript:void(0);" class="btn btn-xs btn-link btn-toggle-fullwidth"><i class="icon-list"></i></a>
                        Admin</h2>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.php"><i class="icon-home"></i></a></li>
                        <li class="breadcrumb-item">Manage User</li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- LIST PEGAWAI -->
        <div class="row clearfix">
            <div class="col-lg-12">
                <div class="card">
                    <div class="header">
                        <h2>Employee List</h2>
                        <ul class="header-dropdown">
                            <li><button type="button" class="btn btn-primary" data-toggle="modal" data-target="#addUser"> + </button></li>
                        </ul>
                    </div>
                    <div class="body">
                        <div class="table-responsive">
                            <table class="table table-hover js-basic-example dataTable table-custom table-striped m-b-0 c_list">
                                <thead class="thead-dark">
                                    <tr>
                                        <th>Pegawai</th>
                                        <th>SAP</th>
                                        <th>Unit</th>
                                        <th>Jabatan</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($pegawai as $pgw) : ?>
                                        <tr>
                                            <td>
                                                <h6 class="mb-0"><?php echo $pgw["nip"]; ?></h6>
                                                <span><?php echo $pgw["nama_p"]; ?></span>
                                            </td>
                                            <td><span><?php echo $pgw["no_sap"]; ?></span></td>
                                            <td><?php echo $pgw["id_unit"]; ?></td>
                                            <td><?php echo $pgw["id_jabatan"]; ?></td>
                                            <td>
                                                <a href="proses/update.php?nip=<?php echo $pgw["nip"]; ?>" class="btn btn-sm btn-outline-secondary" data-toggle='modal' data-target='#editUser' data-id=".$row['nip'].">edit</a>
                                                <a href="proses/delete.php?nip=<?php echo $pgw["nip"]; ?>" class="btn btn-sm btn-outline-danger">del</a>
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

</div>

<!-- Modal Add User-->
<div class="modal fade" id="addUser" tabindex="-1" role="dialog" aria-labelledby="addUserLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="addUserLabel">Add New Employee</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="<?= $site_url ?>/proses/model_pegawai.php" method="POST" >
                <div class="modal-body">
                    <div class="row clearfix">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <input type="text" id="nip" class="form-control" placeholder="NIP *">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <input type="text" id="sap" class="form-control" placeholder="No SAP *">
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <div class="form-group">
                                <input type="text" id="nama" class="form-control" placeholder="Nama Pegawai *">
                            </div>
                        </div>

                        <div class="col-sm-7">
                            <div class="form-group">
                                <input type="text" id="t_lahir" class="form-control" placeholder="Tempat Lahir *">
                            </div>
                        </div>
                        <div class="col-md-5 col-sm-5">
                            <div class="form-group mr">
                                <input type="text" id="tgl_lahir" data-provide="datepicker" data-date-autoclose="true" class="form-control" placeholder="Tanggal Lahir *">
                                <!-- bikin default hari ini -->
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label class="fancy-radio">
                                    <input type="radio" name="jkelamin" value="Perempuan" required data-parsley-errors-container="#error-radio">
                                    <span><i></i>Perempuan</span>
                                </label>
                                <label class="fancy-radio">
                                    <input type="radio" name="jkelamin" value="Laki-laki">
                                    <span><i></i>Laki - Laki</span>
                                </label>
                                <p id="error-radio"></p>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <input type="text" id="agama" class="form-control" placeholder="Agama">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label class="fancy-radio">
                                    <input type="radio" name="status" value="Kawin" required data-parsley-errors-container="#error-radio">
                                    <span><i></i>Kawin</span>
                                </label>
                                <label class="fancy-radio">
                                    <input type="radio" name="status" value="Belum Kawin">
                                    <span><i></i>Belum Kawin</span>
                                </label>
                                <p id="error-radio"></p>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <input type="text" id="jml_kel" class="form-control" placeholder="Jumlah Keluarga">
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <div class="form-group">
                                <textarea class="form-control" id="alamat" rows="2" placeholder="Alamat"></textarea>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <input type="text" id="pass" class="form-control" placeholder="Password *">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <!-- <form action="uploadphoto.php" method="post" enctype="multipart/form-data">
                            <div class="input-group mb-3">
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" id="uploadPhoto" name="uploadPhoto" aria-describedby="inputGroupFileAddon01">
                                    <label class="custom-file-label" for="uploadPhoto">upload photos</label>
                                </div>
                            </div>
                        </form> -->
                        </div>
                        <div class="col-sm-6">
                            <select class="form-control show-tick ms select2" name="id_jabatan" data-placeholder="Select">
                                <option selected disabled>Pilih Jabatan</option>
                                <?php foreach ($jabatan as $row) : ?>
                                <option value="<?= $row['id'] ?>" ><?= $row['nama_jabatan'] ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                        <div class="col-sm-6">
                            <select class="form-control show-tick ms select2" name="id_unit" data-placeholder="Select">
                                <option selected disabled>Pilih Unit Kerja</option>
                                <?php foreach ($unit as $row) : ?>
                                    <option value="<?= $row['id'] ?>" ><?= $row['nama_unit'] ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary" name="submit" value="save">Add</button>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- Modal Update data-->
<div class="modal fade" id="editUser" tabindex="-1" role="dialog" aria-labelledby="addUserLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="addUserLabel">Edit Employee Data</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="modal-data"></div>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary" onclick="addpgw()" name="add_user">Add</button>
            </div>
        </div>
    </div>
</div>


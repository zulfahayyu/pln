<?php
permission(2);
$jabatan = query("SELECT * FROM jabatan"); // query get all jabatan kerja data
$unit = query("SELECT * FROM unit_kerja"); // query get all unit kerja data

//query select data pegawai
$pegawai = query("SELECT p.*, uk.nama_unit, j.nama_jabatan  FROM pegawai p 
LEFT join jabatan j on p.id_jabatan=j.id 
LEFT join unit_kerja uk on p.id_unit=uk.id ");

?>


<!-- MAIN CONTENT -->
<div id="main-content">
    <div class="container-fluid">
        <div class="block-header">
            <div class="row">
                <div class="col-lg-6 col-md-8 col-sm-12">
                    <h2><a href="javascript:void(0);" class="btn btn-xs btn-link btn-toggle-fullwidth"><i class="icon-list"></i></a>
                        Manage User</h2>
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
                                        <th width="10%">NIP</th>
                                        <th width="10%">SAP</th>
                                        <th width="30%">Nama</th>
                                        <th>Unit</th>
                                        <th>Jabatan</th>
                                        <th width="10%">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($pegawai as $pgw) : 
                                    if($user['status']=='admin' || ($user['status']=='hrd' && $pgw['id_unit']!=null)){ ?>
                                        <tr>
                                            <td>
                                                <h6 class="mb-0"><?php echo $pgw["nip"]; ?></h6>
                                            </td>
                                            <td><span><?php echo $pgw["no_sap"]; ?></span></td>
                                            <td><span><?php echo $pgw["nama_p"]; ?></span></td>
                                            <td><?php echo $pgw["nama_unit"]; ?></td>
                                            <td><?php echo $pgw["nama_jabatan"]; ?></td>
                                            <td>
                                                <a href="#" class="btn btn-sm btn-outline-secondary" id="btn-edit-pegawai" onclick="editPegawai('<?= $pgw['id'] ?>')">edit</a>
                                                <a href="<?= $site_url ?>/proses/model_pegawai.php?id=<?php echo $pgw["id"]; ?>&delete=true" onclick='return confirm("Yakin ingin menghapus data?")' class="btn btn-sm btn-outline-danger">del</a>
                                            </td>
                                        </tr>
                                    <?php } endforeach; ?>
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
            <form action="<?= $site_url ?>/proses/model_pegawai.php" method="POST">
                <div class="modal-body">
                    <div class="row clearfix">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <input type="text" name="nip" class="form-control" placeholder="NIP *" required>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <input type="text" name="sap" class="form-control" placeholder="No SAP *" required>
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <div class="form-group">
                                <input type="text" name="nama" class="form-control" placeholder="Nama Pegawai *" required>
                            </div>
                        </div>
                        <div class="col-sm-7">
                            <div class="form-group">
                                <input type="email" name="email" class="form-control" placeholder="Email Pegawai *" required>
                            </div>
                        </div>
                        <div class="col-sm-5">
                            <div class="form-group">
                                <input type="text" name="phone" class="form-control" placeholder="Nomor Telp Pegawai *" required>
                            </div>
                        </div>

                        <div class="col-sm-7">
                            <div class="form-group">
                                <input type="text" name="t_lahir" class="form-control" placeholder="Tempat Lahir *" required>
                            </div>
                        </div>
                        <div class="col-md-5 col-sm-5">
                            <div class="form-group mr">
                                <input type="text" name="tgl_lahir" data-provide="datepicker" data-date-autoclose="true" class="form-control" placeholder="Tanggal Lahir *" required>
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
                                <input type="text" name="agama" class="form-control" placeholder="Agama">
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
                                <input type="text" name="jml_kel" class="form-control" placeholder="Jumlah Keluarga">
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <div class="form-group">
                                <textarea class="form-control" name="alamat" rows="2" placeholder="Alamat"></textarea>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <select class="form-control show-tick ms select2" name="id_unit" id="unit_kerja" data-placeholder="Select" required>
                                    <option selected disabled>Pilih Unit Kerja</option>
                                    <?php foreach ($unit as $row) : ?>
                                        <option value="<?= $row['id'] ?>"><?= $row['nama_unit'] ?></option>
                                    <?php endforeach; ?>
                                </select>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <select class="form-control show-tick ms select2" name="id_atasan" id="data-atasan" data-placeholder="Select" required>
                                    <option selected disabled>Pilih Atasan Pegawai</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-sm-6">

                            <div class="form-group">
                                <input type="password" name="pass" class="form-control" placeholder="Password *" required>
                            </div>
                        </div>
                        <div class="col-sm-6">

                            <select class="form-control show-tick ms select2" name="id_jabatan" data-placeholder="Select" required>
                                <option selected disabled>Pilih Jabatan</option>
                                <?php foreach ($jabatan as $row) : ?>
                                    <option value="<?= $row['id'] ?>"><?= $row['nama_jabatan'] ?></option>
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
            <div id="contentUpdate">
            </div>

        </div>
    </div>
</div>
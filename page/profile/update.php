<?php
include_once '../../proses/connection.php';

$jabatan = query("SELECT * FROM jabatan"); // query get all jabatan kerja data
$unit = query("SELECT * FROM unit_kerja"); // query get all unit kerja data

$pegawai = get_where("SELECT *,pegawai.id as id FROM pegawai join user on user.id_pegawai=pegawai.id WHERE pegawai.id='$_GET[id]'");
$atasan = get_where("SELECT * FROM pegawai where id='$pegawai[id_atasan]'");
?>
<form action="<?= $site_url ?>/proses/model_profile.php?update=true&id=<?= $pegawai['id'] ?>" method="POST">
    <div class="modal-body">
        <div class="row clearfix">
            <div class="col-sm-6">
                <div class="form-group">
                    <input type="text" name="nip" class="form-control" placeholder="NIP *" value="<?= $pegawai['nip'] ?>" required>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="form-group">
                    <input type="text" name="sap" class="form-control" placeholder="No SAP *" value="<?= $pegawai['no_sap'] ?>" required>
                </div>
            </div>
            <div class="col-sm-12">
                <div class="form-group">
                    <input type="text" name="nama" class="form-control" placeholder="Nama Pegawai *" value="<?= $pegawai['nama_p'] ?>" required>
                </div>
            </div>

            <div class="col-sm-7">
                <div class="form-group">
                    <input type="text" name="t_lahir" value="<?= $pegawai['t_lahir'] ?>" class="form-control" placeholder="Tempat Lahir *" required>
                </div>
            </div>
            <div class="col-md-5 col-sm-5">
                <div class="form-group mr">
                    <input type="text" name="tgl_lahir" value="<?= $pegawai['tgl_lahir'] ?>" data-provide="datepicker" data-date-autoclose="true" class="form-control" placeholder="Tanggal Lahir *" required>
                    <!-- bikin default hari ini -->
                </div>
            </div>
            <div class="col-sm-6">
                <div class="form-group">
                    <label class="fancy-radio">
                        <input type="radio" name="jkelamin" value="Perempuan" required data-parsley-errors-container="#error-radio" <?= ($pegawai['jkelamin'] == 'P') ? 'checked' : '' ?>>
                        <span><i></i>Perempuan</span>
                    </label>
                    <label class="fancy-radio">
                        <input type="radio" name="jkelamin" value="Laki-laki" <?= ($pegawai['jkelamin'] == 'L') ? 'checked' : '' ?>>
                        <span><i></i>Laki - Laki</span>
                    </label>
                    <p id="error-radio"></p>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="form-group">
                    <input type="text" name="agama" class="form-control" placeholder="Agama" value="<?= $pegawai['agama'] ?>">
                </div>
            </div>
            <div class="col-sm-6">
                <div class="form-group">
                    <label class="fancy-radio">
                        <input type="radio" name="status" value="Kawin" required data-parsley-errors-container="#error-radio" <?= ($pegawai['status_kawin'] == 'Kawin') ? 'checked' : '' ?>>
                        <span><i></i>Kawin</span>
                    </label>
                    <label class="fancy-radio">
                        <input type="radio" name="status" value="Belum Kawin" <?= ($pegawai['status_kawin'] == 'Belum Kawin') ? 'checked' : '' ?>>
                        <span><i></i>Belum Kawin</span>
                    </label>
                    <p id="error-radio"></p>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="form-group">
                    <input type="text" name="jml_kel" class="form-control" value="<?= $pegawai['jml_kel'] ?>" placeholder="Jumlah Keluarga">
                </div>
            </div>
            <div class="col-sm-12">
                <div class="form-group">
                    <textarea class="form-control" name="alamat" rows="2" placeholder="Alamat"><?= $pegawai['alamat'] ?></textarea>
                </div>
            </div>
            
            
        </div>
    </div>
    <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary" name="submit" value="save">Submit</button>
    </div>
</form>
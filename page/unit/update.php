<?php
include_once '../../proses/connection.php';
$jabatan = get_where("SELECT * FROM unit_kerja WHERE id='$_GET[id]'");
?>
<form method="POST" action="<?= $site_url ?>/proses/model_unitkerja.php?id=<?= $jabatan['id'] ?>">
    <div class="modal-body">
        <div class="row clearfix">
            <div class="col-sm-12">
                <div class="form-group">
                    <input type="text" class="form-control" name="kode" value="<?= $jabatan['kode_unit'] ?>" placeholder="Kode *" required>
                </div>
            </div>
            <div class="col-sm-12">
                <div class="form-group">
                    <input type="text" class="form-control" name="nama" value="<?= $jabatan['nama_unit'] ?>" placeholder="Nama Unit *" required>
                </div>
            </div>
        </div>
    </div>
    <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" name="submit" value="save" class="btn btn-primary">Update</button>
    </div>
</form>
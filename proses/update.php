<?php 
    require 'connection.php';

    $nip = $_GET["nip"];

    echo $nip;
    $sql = "SELECT * FROM pegawai WHERE nip='$nip'";
    $result = mysqli_query($conn, $sql) or die (mysql_error ());
    // var_dump($result);

    if($_POST['getDetail']) {
        $id = $_POST['getDetail'];
        $sql = mysqli_query($db, "SELECT * from pegawai where nip='$nip'");
        while ($row = mysqli_fetch_array($sql)){ 
?>
            <!-- Modal -->
            <form action="" method='post'>
                <div class="row clearfix">
                    <div class="col-sm-6">
                        <div class="form-group">
                            <input type="text" id="nip" class="form-control" placeholder="NIP *">
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <input type="text" name="nama" class="form-control" placeholder="Nama Pegawai *">
                        </div>
                    </div>
                    <div class="col-sm-12">
                        <div class="form-group">
                            <input type="text" id="sap" class="form-control" placeholder="No SAP *">
                        </div>
                    </div>
                    <div class="col-sm-7">
                        <div class="form-group">
                            <input type="text" id="t_lahir" class="form-control" placeholder="Tempat Lahir *">
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-5">
                        <div class="form-group mr">
                            <input type="text" id="tgl_lahir" data-provide="datepicker" data-date-autoclose="true"
                                class="form-control" placeholder="Tanggal Lahir *">
                            <!-- bikin default hari ini -->
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label class="fancy-radio">
                                <input type="radio" name="jkelamin" value="Perempuan" required
                                    data-parsley-errors-container="#error-radio">
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
                                <input type="radio" name="status" value="Kawin" required
                                    data-parsley-errors-container="#error-radio">
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
                        <div class="form-group">
                            <input type="text" id="unit" class="form-control" placeholder="id_unit">
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <input type="text" id="jabatan" class="form-control" placeholder="id_jabatan">
                        </div>
                    </div>
                </div>
            </form>

<?php }} ?>
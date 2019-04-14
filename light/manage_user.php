<?php
require_once 'proses/connection.php';
$pegawai = query("SELECT * FROM pegawai");
?>

<!doctype html>
<html lang="en">

<!-- Mirrored from thememakker.com/templates/lucid/hr/html/light/taskboard.php by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 01 Dec 2018 05:19:35 GMT -->

<head>
    <title>:: PLN :: Manage User</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <meta name="description" content="Lucid Bootstrap 4.1.1 Admin Template">
    <meta name="author" content="WrapTheme, design by: ThemeMakker.com">

    <link rel="icon" href="logo_single.ico" type="image/x-icon">
    <!-- VENDOR CSS -->
    <link rel="stylesheet" href="../assets/vendor/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="../assets/vendor/font-awesome/css/font-awesome.min.css">
    <!-- TASK BOARD & PERCENTAGE -->
    <link rel="stylesheet" href="../assets/vendor/nestable/jquery-nestable.css" />
    <link rel="stylesheet" href="../assets/vendor/sweetalert/sweetalert.css" />
    <link rel="stylesheet" href="../assets/vendor/bootstrap-datepicker/css/bootstrap-datepicker3.min.css">

    <!-- MAIN CSS -->
    <link rel="stylesheet" href="assets/css/main.css">
    <link rel="stylesheet" href="assets/css/color_skins.css">
</head>

<body class="theme-orange">

    <?php  require_once 'page_loader.php' ?>

    <!-- Overlay For Sidebars -->

    <div id="wrapper">

        <?php require_once 'navbar.php' ?>
        <?php require_once 'sidebar_admin.php' ?>
        
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
        <div class="modal-body">
            <div class="row clearfix">
                <div class="col-sm-6">
                    <div class="form-group">
                        <input type="text" id="nip" class="form-control" placeholder="NIP *">
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="form-group">
                        <input type="text" id="nama" class="form-control" placeholder="Nama Pegawai *">
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
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="button" class="btn btn-primary" onclick="addpgw()" name="add_user">Add</button>
        </div>
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


<script src="light/assets/js/jquery.js"></script>
<script src="proses/function.js" type="text/javascript"></script>


    <!-- Javascript -->
    <script src="assets/bundles/libscripts.bundle.js"></script>
    <script src="assets/bundles/vendorscripts.bundle.js"></script>

    <script src="assets/bundles/mainscripts.bundle.js"></script>
    <!-- TASK BOARD -->
    <script src="../assets/vendor/nestable/jquery.nestable.js"></script> <!-- Jquery Nestable -->
    <script src="../assets/vendor/sweetalert/sweetalert.min.js"></script> <!-- SweetAlert Plugin Js -->
    <script src="../assets/vendor/bootstrap-datepicker/js/bootstrap-datepicker.min.js"></script><!-- bootstrap datepicker Plugin Js -->
    <script src="assets/js/pages/ui/sortable-nestable.js"></script>
    <script src="assets/js/pages/ui/dialogs.js"></script>
    <!-- PERCENTAGE -->
    <script src="assets/bundles/knob.bundle.js"></script> <!-- Jquery Knob-->
    <script src="assets/js/widgets/infobox/infobox-1.js"></script>
    
    <script type="text/javascript">
        $(document).ready(function(){
            $('#editUser').on('show.bs.modal', function (e) {
                var getDetail = $(e.relatedTarget).data('nip');
                /* fungsi AJAX untuk melakukan fetch data */
                $.ajax({
                    type : 'post',
                    url : 'proses/update.php',
                    /* detail per identifier ditampung pada berkas detail.php yang berada di folder application/view */
                    data :  'getDetail='+ getDetail,
                    /* memanggil fungsi getDetail dan mengirimkannya */
                    success : function(data){
                    $('.modal-data').html(data);
                    /* menampilkan data dalam bentuk dokumen HTML */
                    }
                });
            });
        });
    </script>
    <script>
        $('.knob').knob({
            draw: function () {
                // "tron" case
                if (this.$.data('skin') == 'tron') {

                    var a = this.angle(this.cv) // Angle
                        ,
                        sa = this.startAngle // Previous start angle
                        ,
                        sat = this.startAngle // Start angle
                        ,
                        ea // Previous end angle
                        , eat = sat + a // End angle
                        ,
                        r = true;

                    this.g.lineWidth = this.lineWidth;

                    this.o.cursor &&
                        (sat = eat - 0.3) &&
                        (eat = eat + 0.3);

                    if (this.o.displayPrevious) {
                        ea = this.startAngle + this.angle(this.value);
                        this.o.cursor &&
                            (sa = ea - 0.3) &&
                            (ea = ea + 0.3);
                        this.g.beginPath();
                        this.g.strokeStyle = this.previousColor;
                        this.g.arc(this.xy, this.xy, this.radius - this.lineWidth, sa, ea, false);
                        this.g.stroke();
                    }

                    this.g.beginPath();
                    this.g.strokeStyle = r ? this.o.fgColor : this.fgColor;
                    this.g.arc(this.xy, this.xy, this.radius - this.lineWidth, sat, eat, false);
                    this.g.stroke();

                    this.g.lineWidth = 2;
                    this.g.beginPath();
                    this.g.strokeStyle = this.o.fgColor;
                    this.g.arc(this.xy, this.xy, this.radius - this.lineWidth + 1 + this.lineWidth * 2 / 3,
                        0, 2 * Math.PI, false);
                    this.g.stroke();

                    return false;
                }
            }
        });

        $('#linecustom1').sparkline('html', {
            height: '55px',
            width: '100%',
            lineColor: '#a095e5',
            fillColor: '#a095e5',
            minSpotColor: true,
            maxSpotColor: true,
            spotColor: '#e2a8df',
            spotRadius: 0
        });

        $('#linecustom2').sparkline('html', {
            height: '55px',
            width: '100%',
            lineColor: '#75c3f2',
            fillColor: '#75c3f2',
            minSpotColor: true,
            maxSpotColor: true,
            spotColor: '#8dbfe0',
            spotRadius: 0
        });

        $('#linecustom3').sparkline('html', {
            height: '55px',
            width: '100%',
            lineColor: '#fc7b92',
            fillColor: '#fc7b92',
            minSpotColor: true,
            maxSpotColor: true,
            spotColor: '#e0b89d',
            spotRadius: 0
        });
    </script>

</body>

<!-- Mirrored from thememakker.com/templates/lucid/hr/html/light/taskboard.php by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 01 Dec 2018 05:19:35 GMT -->

</html>
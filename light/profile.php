<!doctype html>
<html lang="en">


<!-- Mirrored from thememakker.com/templates/lucid/hr/html/light/page-profile2.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 01 Dec 2018 05:19:14 GMT -->
<head>
<title>:: PLN :: Profile</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=Edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
<meta name="description" content="Lucid Bootstrap 4.1.1 Admin Template">
<meta name="author" content="WrapTheme, design by: ThemeMakker.com">

<link rel="icon" href="logo_single.ico" type="image/x-icon">
<!-- VENDOR CSS -->
<link rel="stylesheet" href="../assets/vendor/bootstrap/css/bootstrap.min.css">
<link rel="stylesheet" href="../assets/vendor/font-awesome/css/font-awesome.min.css">

<link rel="stylesheet" href="../assets/vendor/bootstrap-datepicker/css/bootstrap-datepicker3.min.css">

<!-- MAIN CSS -->
<link rel="stylesheet" href="assets/css/main.css">
<link rel="stylesheet" href="assets/css/blog.css">
<link rel="stylesheet" href="assets/css/color_skins.css">
</head>
<body class="theme-orange">

<?php  require_once 'page_loader.php' ?>

<!-- Overlay For Sidebars -->

<div id="wrapper">

    <?php require_once 'navbar.php' ?>
    <?php require_once 'sidebar.php' ?>
    
    <!-- TAB MAIN -->
    <div id="main-content" class="profilepage_2 blog-page">
        <div class="container-fluid">
            <div class="block-header">
                <div class="row">
                    <div class="col-lg-11 col-md-8 col-sm-12">
                        <h2><a href="javascript:void(0);" class="btn btn-xs btn-link btn-toggle-fullwidth"><i class="icon-user"></i></a> Profile</h2>
                    </div>
                    <div class="col-lg-1 col-md-8 col-sm-12">
                        <ul class="nav nav-tabs-new">
                        <li><button type="button" class="btn btn-outline-secondary" data-toggle="modal" data-target="#Settings">Setting</button></li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="row clearfix">

                <div class="col-lg-12 col-md-12">
                    <div class="card profile-header">
                        <div class="body">
                            <div class="profile-image"> <img src="../assets/images/user.png" class="rounded-circle" alt=""> </div>
                            <div>
                                <h4 class="m-b-0"><strong>Jessica</strong> Doe</h4>
                                <span>Washington, d.c.</span>
                            </div>
                            <div class="m-t-15">
                                <p>-bio-</p>
                            </div>
                        </div>
                    </div>

                    <div class="card">
                        <div class="header">
                            <h2>Info</h2>
                            <ul class="header-dropdown">
                                <li class="dropdown">
                                    <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"></a>
                                    <ul class="dropdown-menu dropdown-menu-right animated bounceIn">
                                        <li><a href="javascript:void(0);">Action</a></li>
                                        <li><a href="javascript:void(0);">Another Action</a></li>
                                        <li><a href="javascript:void(0);">Something else</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                        <div class="body">
                            <small class="text-muted">Address: </small>
                            <p>795 Folsom Ave, Suite 600 San Francisco, 94107</p>
                            <hr>
                            <small class="text-muted">Email address: </small>
                            <p>michael@gmail.com</p>
                            <hr>
                            <small class="text-muted">Mobile: </small>
                            <p>+ 202-555-2828</p>
                            <hr>
                            <small class="text-muted">Birth Date: </small>
                            <p class="m-b-0">October 22th, 1990</p>
                            <hr>
                            <small class="text-muted">Social: </small>
                            <p><i class="fa fa-twitter m-r-5"></i> twitter.com/example</p>
                            <p><i class="fa fa-facebook  m-r-5"></i> facebook.com/example</p>
                            <p><i class="fa fa-github m-r-5"></i> github.com/example</p>
                            <p><i class="fa fa-instagram m-r-5"></i> instagram.com/example</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="Settings" tabindex="-1" role="dialog" aria-labelledby="SettingsLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="SettingsLabel">Settings</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-body">
        <div class="row clearfix">
            <div class="col-lg-12 col-md-12">
            <h6>Basic Information</h6>
                <div class="form-group">
                    <input type="text" class="form-control" placeholder="First Name">
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" placeholder="Last Name">
                </div>
                <div class="form-group">
                    <div>
                        <label class="fancy-radio">
                            <input name="gender2" value="male" type="radio" checked>
                            <span><i></i>Male</span>
                        </label>
                        <label class="fancy-radio">
                            <input name="gender2" value="female" type="radio">
                            <span><i></i>Female</span>
                        </label>
                    </div>
                </div>
                <div class="form-group">
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="icon-calendar"></i></span>
                        </div>
                        <input data-provide="datepicker" data-date-autoclose="true" class="form-control" placeholder="Birthdate">
                    </div>
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" placeholder="http://">
                </div>
            </div>
            <div class="col-lg-12 col-md-12">
                <div class="form-group">
                    <input type="text" class="form-control" placeholder="Address Line 1">
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" placeholder="Address Line 2">
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" placeholder="City">
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" placeholder="State/Province">
                </div>
            </div>
        </div>
        <div class="row clearfix">
            <div class="col-lg-12 col-md-12">
                <h6>Account Data</h6>
                <div class="form-group">
                    <input type="text" class="form-control" value="JessicaDoe" disabled placeholder="Username">
                </div>
                <div class="form-group">
                    <input type="email" class="form-control" value="Jessica.info@yourdomain.com" placeholder="Email">
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" placeholder="Phone Number">
                </div>
            </div>

            <div class="col-lg-12 col-md-12">
                <h6>Change Password</h6>
                <div class="form-group">
                    <input type="password" class="form-control" placeholder="Current Password">
                </div>
                <div class="form-group">
                    <input type="password" class="form-control" placeholder="New Password">
                </div>
                <div class="form-group">
                    <input type="password" class="form-control" placeholder="Confirm New Password">
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

<!-- Javascript -->
<script src="assets/bundles/libscripts.bundle.js"></script>
<script src="assets/bundles/vendorscripts.bundle.js"></script>

<script src="assets/bundles/knob.bundle.js"></script> <!-- Jquery Knob-->
<script src="../assets/vendor/bootstrap-datepicker/js/bootstrap-datepicker.min.js"></script>

<script src="assets/bundles/mainscripts.bundle.js"></script>

<script>
$(function () {
    $('.knob').knob({
        draw: function () {
            // "tron" case
            if (this.$.data('skin') == 'tron') {

                var a = this.angle(this.cv)  // Angle
                    , sa = this.startAngle          // Previous start angle
                    , sat = this.startAngle         // Start angle
                    , ea                            // Previous end angle
                    , eat = sat + a                 // End angle
                    , r = true;

                this.g.lineWidth = this.lineWidth;

                this.o.cursor
                    && (sat = eat - 0.3)
                    && (eat = eat + 0.3);

                if (this.o.displayPrevious) {
                    ea = this.startAngle + this.angle(this.value);
                    this.o.cursor
                        && (sa = ea - 0.3)
                        && (ea = ea + 0.3);
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
                this.g.arc(this.xy, this.xy, this.radius - this.lineWidth + 1 + this.lineWidth * 2 / 3, 0, 2 * Math.PI, false);
                this.g.stroke();

                return false;
            }
        }
    });
});
</script>
</body>

<!-- Mirrored from thememakker.com/templates/lucid/hr/html/light/page-profile2.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 01 Dec 2018 05:19:15 GMT -->
</html>
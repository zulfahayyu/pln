<?php 
// print_r($user); 
$jabatan=get_where("SELECT * FROM jabatan where id='$user[id_jabatan]'");
$unit=get_where("SELECT * FROM unit_kerja where id='$user[id_unit]'");
// print_r($unit);
?>
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
                        <!-- <li><button type="button" class="btn btn-outline-secondary" data-toggle="modal" data-target="#Settings">Setting</button></li> -->
                    </ul>
                </div>
            </div>
        </div>

        <div class="row clearfix">

            <div class="col-lg-12 col-md-12">
                <div class="card profile-header">
                    <div class="body">
                        <div class="profile-image"> <img src="<?= $site_url ?>/assets/avatar/<?= $user['avatar'] ?>" class="rounded-circle" alt="" style="max-width:150px"> </div>
                        <div>
                            <h4 class="m-b-0"><strong><?= $user['nama_p'] ?></strong></h4>
                            <span><?= $user['status'] ?></span>
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
                                    <li><a href="javascript:void(0);" onclick="editProfile('<?= $user['id'] ?>')">Edit Profile Info</a></li>
                                    <li><a href="javascript:void(0);" data-toggle="modal" data-target="#changeAvatar">Change Avatar</a></li>
                                    <li><a href="javascript:void(0);" data-toggle="modal" data-target="#changePass">Change Password</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                    <div class="body">
                        <small class="text-muted">NIP: </small>
                        <p><?= $user['nip'] ?></p>
                        <hr>
                        <small class="text-muted">Nomor SAP</small>
                        <p><?= $user['no_sap'] ?></p>
                        <hr>
                        <small class="text-muted">Alamat Email</small>
                        <p><?= $user['email'] ?></p>
                        <hr>
                        <small class="text-muted">Phone</small>
                        <p><?= $user['phone'] ?></p>
                        <hr>
                        <?php if($user['id_unit']){ ?>
                        <small class="text-muted">Unit Kerja</small>

                        <p><?= $unit['nama_unit'] ?></p>

                        <hr>
                        <?php } ?>

                        <?php if($user['id_jabatan']){ ?>
                        <small class="text-muted">Jabatan</small>

                        <p><?= $jabatan['nama_jabatan'] ?></p>

                        <hr>
                        <?php } ?>

                        <small class="text-muted">Tempat, Tanggal Lahir</small>
                        <p><?= $user['t_lahir'] . ', ' . $user['tgl_lahir'] ?></p>
                        <hr>
                        <small class="text-muted">Alamat</small>
                        <p><?= $user['alamat'] ?></p>
                        <hr>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>

<!-- Modal Update data-->
<div class="modal fade" id="editUser" tabindex="-1" role="dialog" aria-labelledby="addUserLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="addUserLabel">Edit Profile Data</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div id="contentUpdate">
            </div>

        </div>
    </div>
</div>

<!-- Modal Change Password data-->
<div class="modal fade" id="changePass" tabindex="-1" role="dialog" aria-labelledby="changePassLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="addUserLabel">Change Password</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div id="">
                <form action="<?= $site_url ?>/proses/model_profile.php?password=true&id=<?= $user['id'] ?>" method="POST">
                    <div class="modal-body">
                        <div class="row clearfix">
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <label>Password Sekarang</label>
                                    <input type="password" name="currentpass" class="form-control" required>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label>Password Baru</label>
                                    <input type="password" name="password" class="form-control" required>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label>Ulangi Password</label>
                                    <input type="password" name="rpassword" class="form-control" required>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary" name="submit" value="save">Submit</button>
                    </div>
                </form>
            </div>

        </div>
    </div>
</div>


<!-- Modal Change avatar-->
<div class="modal fade" id="changeAvatar" tabindex="-1" role="dialog" aria-labelledby="changeAvatarLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="addUserLabel">Change Avatar</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div id="">
                <form action="<?= $site_url ?>/proses/model_profile.php?avatar=true&id=<?= $user['id'] ?>" enctype="multipart/form-data" method="POST">
                    <div class="modal-body">
                        <div class="row clearfix">
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <label>Pilih Foto</label>
                                    <input type="file" name="document" class="form-control" accept="image/*" required>
                                </div>
                            </div>
                            
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary" name="submit" value="save">Submit</button>
                    </div>
                </form>
            </div>

        </div>
    </div>
</div>
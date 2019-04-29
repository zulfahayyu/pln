<?php
$files = query("SELECT *,document.id as id from document JOIN pegawai ON document.user_upload= pegawai.id
 ORDER BY date_upload DESC");
?>
<div id="main-content" class="file_manager">
    <div class="container-fluid">
        <div class="block-header">
            <div class="row">
                <div class="col-lg-5 col-md-8 col-sm-12">
                    <h2><a href="javascript:void(0);" class="btn btn-xs btn-link btn-toggle-fullwidth"><i class="fa fa-arrow-left"></i></a> File Documents</h2>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index-2.html"><i class="icon-home"></i></a></li>
                        <li class="breadcrumb-item">File Manager</li>
                        <li class="breadcrumb-item active">File Documents</li>
                    </ul>
                </div>
                <div class="col-lg-7 col-md-4 col-sm-12 text-right">
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#addFile">Add New File</button>
                </div>
            </div>
        </div>


        <div class="row clearfix">
            <?php foreach ($files as $value) {
                $upload_date = date('d F Y', strtotime($value['date_upload']));
                $file_loc = $site_url . '/assets/document/' . $value['doc_file'];
                ?>
                <div class="col-lg-3 col-md-4 col-sm-12">
                    <div class="card">
                        <div class="file">
                            <a href="javascript:void(0);" style="cursor: default;">
                                <div class="hover">
                                    <button type="button" onclick="delfile(<?= $value['id'] ?>)" class="btn btn-icon btn-danger">
                                        <i class="fa fa-trash"></i>
                                    </button>
                                </div>
                                <div class="icon">
                                    <i class="fa fa-file text-info"></i>
                                </div>
                                <a href="<?= $file_loc ?>" download>
                                    <div class="file-name">
                                        <p class="m-b-5 text-muted"><?= $value['doc_name'] ?></p>
                                        <small>PIC : <?= $value['nama_p'] ?><span class="date text-muted"><?= $upload_date ?></span></small>
                                    </div>
                                </a>
                            </a>
                        </div>
                    </div>
                </div>
            <?php } ?>

        </div>

    </div>
</div>

<!-- Modal add file -->
<div class="modal fade" id="addFile" tabindex="-1" role="dialog" aria-labelledby="addFileLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="addTaskLabel">Add File/Document</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form method="POST" action="<?= $site_url ?>/proses/model_file.php" enctype="multipart/form-data">
                <div class="modal-body">
                    <div class="row clearfix">
                        <div class="col-sm-12">
                            <div class="form-group">
                                <label>File Name</label>
                                <input type="text" class="form-control" name="filename" placeholder="file name" required>
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <div class="form-group">
                                <label>File Name</label>
                                <input type="file" class="form-control" name="document" required>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" name="submit" value="save" class="btn btn-primary">Submit</button>
                </div>
            </form>
        </div>
    </div>
</div>

<script>
    function delfile(id) {
        var r = confirm("Apakah yakin ingin menghapus file?");
        if (r == true) {
            window.location.href = base_url + '/proses/model_file.php?delete=true&id=' + id;
        }
    }
</script>
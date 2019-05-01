<?php
$unit = query("SELECT * FROM unit_kerja"); // query get all unit kerja data
?>
<div id="main-content">
    <div class="container-fluid">
        <div class="block-header">
            <div class="row">
                <div class="col-lg-6 col-md-8 col-sm-12">
                    <h2><a href="javascript:void(0);" class="btn btn-xs btn-link btn-toggle-fullwidth"><i class="fa fa-arrow-left"></i></a> Create New Task</h2>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index-2.html"><i class="icon-home"></i></a></li>
                        <li class="breadcrumb-item">Task</li>
                        <li class="breadcrumb-item active">Add Task</li>
                    </ul>
                </div>

            </div>
        </div>

        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12">
                <div class="card modal-content">
                    <div class="body">
                        <form action="<?= $site_url ?>/proses/model_task.php" method="POST" enctype="multipart/form-data">
                            <div class="row clearfix">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <label>Task Title</label>
                                        <input type="text" class="form-control" name="nama" placeholder="Project Name *" required>
                                    </div>
                                </div>

                                <div class="col-md-3 col-sm-12">
                                    <div class="form-group">
                                        <label>Due Date</label>
                                        <input type="text" data-provide="datepicker" name="due_date" data-date-format="yyyy-mm-dd" data-date-autoclose="true" class="form-control" placeholder="End date *" required>
                                    </div>
                                </div>
                                <div class="col-md-3 col-sm-12">
                                    <div class="form-group">
                                        <label>Select Priority</label>
                                        <select class="form-control show-tick" name="priority" required>
                                            <option selected disabled>Pilih Priority</option>
                                            <option value="High">High</option>
                                            <option value="Medium">Medium</option>
                                            <option value="Low">Low</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-3 col-sm-12">
                                    <?php
                                    if ($user['status'] == 'admin') {
                                        $disabled = '';
                                        $selected = 'selected';
                                        $unitselected = '';
                                    } else {
                                        $unituser = get_where("SELECT * FROM unit_kerja WHERE id='$user[id_unit]'");
                                        $unitselected = $unituser['id'];
                                        $disabled = 'disabled';
                                        $selected = '';
                                        echo "<input type='hidden' name='unit_kerja' value='" . $unitselected . "'>";
                                    }
                                    ?>
                                    <div class="form-group">
                                        <label>Select Unit</label>
                                        <select class="form-control show-tick" name="unit_kerja" id="unit_kerja" <?= $disabled ?>>
                                            <option <?= $selected ?> disabled>Pilih Unit</option>
                                            <?php foreach ($unit as $row) : ?>
                                                <option value="<?= $row['id'] ?>" <?= ($row['id'] == $unitselected) ? 'selected' : '' ?>><?= $row['nama_unit'] ?></option>
                                            <?php endforeach; ?>
                                        </select>
                                    </div>
                                    <!-- <div class="form-group">
                                        <label>Select Unit</label>
                                        <select class="form-control show-tick" name="unit_kerja" id="unit_kerja" required>
                                            <option selected disabled>Pilih Unit</option>
                                            <?php foreach ($unit as $row) : ?>
                                                    <option value="<?= $row['id'] ?>"><?= $row['nama_unit'] ?></option>
                                            <?php endforeach; ?>
                                        </select>
                                    </div> -->
                                </div>
                                <div class="col-md-3 col-sm-12">
                                    <label>Select Team Lead</label>
                                    <div class="form-group">
                                        <select class="form-control show-tick" name="team_lead" id="data-atasan" required>
                                            <option selected disabled>Pilih Team Lead</option>

                                        </select>
                                    </div>
                                </div>
                            </div>

                            <div class="row clearfix">
                                <div class="col-12">
                                    <input type="file" name="document" class="dropify">
                                    <div class="mt-3"></div>
                                </div>
                                <div class="col-sm-12">
                                    <textarea name="description" class="summernote">

                                    </textarea>
                                </div>
                                <div class="col-sm-12">
                                    <div class="mt-4">
                                        <button type="submit" name="submit" value="submit" class="btn btn-primary">Submit</button>
                                        <button type="submit" class="btn btn-outline-secondary">Cancel</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
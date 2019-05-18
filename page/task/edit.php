<?php
$task = get_where("SELECT *,task.id AS id FROM task 
WHERE task.id='$id'"); // get task detail
$unit = query("SELECT * FROM unit_kerja"); // query get all unit kerja data
$team_lead = get_where("SELECT * FROM pegawai WHERE id='$task[id_leader]'");

?>
<div id="main-content">
    <div class="container-fluid">
        <div class="block-header">
            <div class="row">
                <div class="col-lg-6 col-md-8 col-sm-12">
                    <h2><a href="javascript:void(0);" class="btn btn-xs btn-link btn-toggle-fullwidth"><i class="fa fa-arrow-left"></i></a> Edit Task</h2>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index-2.html"><i class="icon-home"></i></a></li>
                        <li class="breadcrumb-item">Task</li>
                        <li class="breadcrumb-item active">Edit Task</li>
                    </ul>
                </div>

            </div>
        </div>

        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12">
                <div class="card modal-content">
                    <div class="body">
                        <form action="<?= $site_url ?>/proses/model_task.php?id=<?= $task['id'] ?>" method="POST" enctype="multipart/form-data">
                            <div class="row clearfix">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <label>Task Title</label>
                                        <input type="text" class="form-control" name="nama" value="<?= $task['task_name'] ?>" placeholder="Project Name *" required>
                                    </div>
                                </div>

                                <div class="col-md-3 col-sm-12">
                                    <div class="form-group">
                                        <label>Due Date</label>
                                        <input type="text" data-provide="datepicker" name="due_date" value="<?= $task['due_date'] ?>" data-date-format="yyyy-mm-dd" data-date-autoclose="true" class="form-control" placeholder="End date *" required>
                                    </div>
                                </div>
                                <div class="col-md-3 col-sm-12">
                                    <div class="form-group">
                                        <label>Select Priority</label>
                                        <select class="form-control show-tick" name="priority" required>
                                            <option disabled>Pilih Priority</option>
                                            <option value="High" <?= ($task['priority']=='High')? 'Selected' : '' ?>>High</option>
                                            <option value="Medium" <?= ($task['priority']=='Medium')? 'Selected' : '' ?>>Medium</option>
                                            <option value="Low" <?= ($task['priority']=='Low')? 'Selected' : '' ?>>Low</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-3 col-sm-12">
                                    <div class="form-group">
                                        <label>Select Unit</label>
                                        <select class="form-control show-tick" name="unit_kerja" id="unit_kerja" required>
                                            <option selected disabled>Pilih Unit</option>
                                            <?php foreach ($unit as $row) : ?>
                                                <option value="<?= $row['id'] ?>" <?= ($task['id_unit']==$row['id'])? 'Selected' : '' ?>><?= $row['nama_unit'] ?></option>
                                            <?php endforeach; ?>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-3 col-sm-12">
                                    <label>Select Team Lead</label>
                                    <div class="form-group">
                                        <select class="form-control show-tick" name="team_lead" id="data-atasan" required>
                                            <option selected><?= $team_lead['nama_p'] ?></option>
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <div class="row clearfix">
                                
                                <div class="col-sm-12">
                                    <textarea name="description" class="summernote">
                                        <?= $task['description'] ?>
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
<script>
    $(document).ready(function() {
        $('#data-atasan').val("<?= $task['id_leader'] ?>");
        alert($('#data-atasan').val());
    });
</script>
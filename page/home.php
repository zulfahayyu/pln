<?php
date_default_timezone_set('Asia/Jakarta');
$current_date = (date('Y-m-d'));
$unit = query("SELECT * FROM unit_kerja");
print_r($unit);
$event = query("SELECT * FROM event left join unit_kerja on event.id_unit = unit_kerja.id where date_start>='$current_date' order by date_start ASC");
?>
<!-- MAIN CONTENT -->
<div id="main-content">
    <div class="container-fluid">
        <div class="block-header">
            <div class="row">
                <div class="col-lg-6 col-md-8 col-sm-12">
                    <h2><a href="javascript:void(0);" class="btn btn-xs btn-link btn-toggle-fullwidth"><i class="icon-list"></i></a>
                        Home</h2>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.php"><i class="icon-home"></i></a></li>
                        <li class="breadcrumb-item active">Home</li>
                    </ul>
                </div>
            </div>
        </div>

        <!-- ACTIVITY -->
        <div class="row clearfix">

            <!-- CALENDAR -->
            <div class="col-lg-7">
                <?php if ($user['status'] == 'admin' || $user['id_atasan']==1) { ?>
                    <div class="card">
                        <div class="body">
                            <button type="button" class="btn btn-primary btn-block" data-toggle="modal" data-target="#addevent">Add New Event</button>
                        </div>
                    </div>
                <?php } ?>
                <!-- Default Size -->
                <div class="modal animated jello" id="addevent" tabindex="-1" role="dialog">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h4 class="title" id="defaultModalLabel">Add Event</h4>
                            </div>
                            <form action="<?= $site_url ?>/proses/model_event.php" method="POST">
                                <div class="modal-body">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <input type="text" class="form-control" name="name" placeholder="Event Title" required>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <select class="form-control show-tick" name="priority" required>
                                            <option value="bg-danger" selected disabled>Priority</option>
                                            <option value="bg-danger">High</option>
                                            <option value="bg-warning">Medium</option>
                                            <option value="bg-success">Low</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <div class="form-line">
                                            <div class="input-daterange input-group" data-provide="datepicker" data-date-format="yyyy-mm-dd">
                                                <input autocomplete="off" type="text" class="input-sm form-control" name="start" placeholder="start date" required>
                                                <span class="input-group-addon text-center" style="width: 40px;">to</span>
                                                <input autocomplete="off" type="text" class="input-sm form-control" name="end" placeholder="end date" required>
                                            </div>
                                        </div>
                                    </div>
                                    <?php 
                                    if($user['status']=='admin'){
                                        $disabled='';
                                        $selected= 'selected';
                                        $unitselected='';
                                    }else{
                                        $unituser=get_where("SELECT * FROM unit_kerja WHERE id='$user[id_unit]'");
                                        $unitselected=$unituser['id'];
                                        $disabled='disabled';
                                        $selected= '';
                                        echo "<input type='hidden' name='unit' value='".$unitselected."'>";
                                    }
                                    ?>
                                    <div class="form-group">
                                        <select class="form-control show-tick" name="unit" <?= $disabled ?>>
                                            <option <?= $selected ?>>All Unit</option>
                                            <?php foreach ($unit as $row) : ?>
                                                <option value="<?= $row['id'] ?>" <?= ($row['id']==$unitselected) ? 'selected' :'' ?> ><?= $row['nama_unit'] ?></option>
                                            <?php endforeach; ?>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <div class="form-line">
                                            <input type="text" class="form-control" name="location" placeholder="Location" required>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="form-line">
                                            <textarea class="form-control no-resize" rows="4" name="description" placeholder="Event Description..."></textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="submit" name="submit" value="submit" class="btn btn-primary">Add</button>
                                    <button type="button" class="btn btn-outline-secondary" data-dismiss="modal">CLOSE</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="body">
                        <div id="calendar"></div>
                    </div>
                </div>
            </div>
            <div class="col-lg-5">
                <div class="card">
                    <div class="body">
                        <?php foreach ($event as $value) :
                            $date = date('Y-F-d', strtotime($value['date_start']));
                            // echo $date;
                            $date = explode('-', $date);
                            ?>
                            <div class="event-name row">
                                <div class="col-2 text-center">
                                    <h4><?= $date[2] ?><span><?= $date[1] ?></span><span><?= $date[0] ?></span></h4>
                                </div>
                                <div class="col-10">
                                    <h6><?= $value['event_name'] ?></h6>
                                    <p><?= $value['description'] ?></p>
                                    <address><i class="fa fa-map-marker"></i> <?= $value['location'] ?>&nbsp;&nbsp;&nbsp;<i class="fa fa-user"></i> <?= ($value['nama_unit']) ? $value['nama_unit'] : 'All Unit'  ?></address>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>
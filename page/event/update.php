<?php
include_once '../../proses/connection.php';
include_once '../../proses/ceklogin.php';
$unit = query("SELECT * FROM unit_kerja");
$event = get_where("SELECT *,event.id as id FROM event left join unit_kerja on event.id_unit=unit_kerja.id  
where event.id='$_GET[id]'");
?>
<form action="<?= $site_url ?>/proses/model_event.php?id=<?= $event['id'] ?>" method="POST">
    <div class="modal-body">
        <div class="form-group">
            <div class="form-line">
                <input type="text" class="form-control" name="name" value="<?= $event['event_name'] ?>" placeholder="Event Title" required>
            </div>
        </div>
        <div class="form-group">
            <select class="form-control show-tick" name="priority">
                <option selected disabled>Priority</option>
                <option value="bg-danger" <?= ($event['priority'] == 'bg-danger') ? 'Selected' : '' ?>>High</option>
                <option value="bg-warning" <?= ($event['priority'] == 'bg-warning') ? 'Selected' : '' ?>>Medium</option>
                <option value="bg-success" <?= ($event['priority'] == 'bg-success') ? 'Selected' : '' ?>>Low</option>
            </select>
        </div>
        <div class="form-group">
            <div class="form-line">
                <div class="input-daterange input-group" data-provide="datepicker" data-date-format="yyyy-mm-dd">
                    <input type="text" value="<?= $event['date_start'] ?>" autocomplete="off" class="input-sm form-control" name="start" placeholder="start date" required>
                    <span class="input-group-addon text-center" style="width: 40px;">to</span>
                    <input type="text" value="<?= $event['date_end'] ?>" autocomplete="off" class="input-sm form-control" name="end" placeholder="end date" required>
                </div>
            </div>
        </div>
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
            echo "<input type='hidden' name='unit' value='" . $unitselected . "'>";
        }
        ?>
        <div class="form-group">
            <select class="form-control show-tick" name="unit" <?= $disabled ?>>
                <option <?= $selected ?>>All Unit</option>
                <?php foreach ($unit as $row) : ?>
                    <option value="<?= $row['id'] ?>" <?= ($row['id'] == $unitselected) ? 'selected' : '' ?>><?= $row['nama_unit'] ?></option>
                <?php endforeach; ?>
            </select>
        </div>
        <div class="form-group">
            <div class="form-line">
                <input type="text" class="form-control" name="location" value="<?= $event['location'] ?>" placeholder="Location" required>
            </div>
        </div>
        <div class="form-group">
            <div class="form-line">
                <textarea class="form-control no-resize" rows="4" name="description" placeholder="Event Description..."><?= $event['description'] ?></textarea>
            </div>
        </div>
    </div>
    <div class="modal-footer">
        <button type="submit" name="submit" value="submit" class="btn btn-primary">Add</button>
        <button type="button" class="btn btn-outline-secondary" data-dismiss="modal">CLOSE</button>
    </div>
</form>
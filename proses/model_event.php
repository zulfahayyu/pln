<?php
include_once 'connection.php';
date_default_timezone_set('Asia/Jakarta');
$current_date=(date('Y-m-d'));
if($_GET['method']=='get_all_event'){
    $event = query("SELECT id, event_name as title, date_start as start, date_end as end, priority as className
    FROM event where date_start>='$current_date'");
    echo json_encode($event);
    return 0;
}

if ($_GET['id']) {
    if ($_GET['delete']) { // delete data event
        $result = mysqli_query($conn, "DELETE FROM event where id='$_GET[id]'");
        if ($result) {
            $_SESSION['message'] = 'Data Event berhasil dihapus';
            $_SESSION['type'] = 'success';
        } else {
            $_SESSION['message'] = 'Data Event gagal dihapus';
            $_SESSION['type'] = 'error';
        }
        header('Location: ../');
    } else { // Update data event
        if ($_POST['submit']) {
            $kode = $_POST['kode'];
            $nama = $_POST['nama'];
            $result = mysqli_query($conn, "UPDATE event SET kode_jabatan='$kode', nama_jabatan='$nama' where id='$_GET[id]'");
            if ($result) {
                $_SESSION['message'] = 'Data Event berhasil diupdate';
                $_SESSION['type'] = 'success';
            } else {
                $_SESSION['message'] = 'Data Event gagal diupdate';
                $_SESSION['type'] = 'error';
            }
        } else {
            $_SESSION['message'] = 'Data tidak valid';
            $_SESSION['type'] = 'warning';
        }
        header('Location: ../');
    }
} else { // tambah data event baru
    if ($_POST['submit']) {
        $nama = $_POST['name'];
        $priority = $_POST['priority'];
        $start_date = ($_POST['start']);
        $end_date = ($_POST['end']);
        $location = $_POST['location'];
        $description = $_POST['description'];

        $result = mysqli_query($conn, "INSERT INTO event VALUES('','$nama','$priority','$start_date','$end_date','$location','$description')");
        if ($result) {
            $_SESSION['message'] = 'Data Event berhasil ditambahkan';
            $_SESSION['type'] = 'success';
        } else {
            $_SESSION['message'] = 'Data Event gagal ditambahkan';
            $_SESSION['type'] = 'error';
        }
    } else {
        $_SESSION['message'] = 'Data tidak valid';
        $_SESSION['type'] = 'warning';
    }
    header('Location: ../');
}

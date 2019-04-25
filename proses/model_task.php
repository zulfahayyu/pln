<?php
include_once 'connection.php';
date_default_timezone_set('Asia/Jakarta');
$current_date = (date('Y-m-d'));

// if ($_GET['method'] == 'get_all_event') {
//     date_default_timezone_set('Asia/Jakarta');
//     $current_date = (date('Y-m-d'));

//     $event = query("SELECT id, event_name as title, date_start as start, date_end as end, priority as className
//     FROM event where date_start>='$current_date'");
//     echo json_encode($event);
//     return 0;
// }

if (!empty($_GET['id'])) {
    if ($_GET['delete']) { // delete data task
        $result = mysqli_query($conn, "DELETE FROM task where id='$_GET[id]'");
        if ($result) {
            $_SESSION['message'] = 'Data Task berhasil dihapus';
            $_SESSION['type'] = 'success';
        } else {
            $_SESSION['message'] = 'Data Task gagal dihapus';
            $_SESSION['type'] = 'error';
        }
        header('Location: ' . $_SERVER['HTTP_REFERER']);
    } else { // Update data event
        if ($_POST['submit']) {
            $nama = $_POST['name'];
            $priority = $_POST['priority'];
            $start_date = ($_POST['start']);
            $end_date = ($_POST['end']);
            $id_unit = $_POST['unit'];
            $location = $_POST['location'];
            $description = $_POST['description'];
            $result = mysqli_query($conn, "UPDATE event SET event_name='$nama',priority='$priority',date_start='$start_date',
            date_end='$end_date',id_unit='$id_unit',location='$location',description='$description' where id='$_GET[id]'");
            if ($result) {
                $_SESSION['message'] = 'Data Task berhasil diupdate';
                $_SESSION['type'] = 'success';
            } else {
                $_SESSION['message'] = 'Data Task gagal diupdate';
                $_SESSION['type'] = 'error';
            }
        } else {
            $_SESSION['message'] = 'Data tidak valid';
            $_SESSION['type'] = 'warning';
        }
        header('Location: ' . $_SERVER['HTTP_REFERER']);
    }
} else { // tambah data event baru
    if ($_POST['submit']) {
        $nama = $_POST['nama'];
        $priority = $_POST['priority'];
        $due_date = ($_POST['due_date']);
        $id_unit = $_POST['unit_kerja'];
        $team_lead = $_POST['team_lead'];
        $description = $_POST['description'];
        //insert data task
        $result = mysqli_query($conn, "INSERT task  VALUES('','$nama','$priority','$current_date','$due_date',
        '$id_unit','$team_lead','$_SESSION[id]','$description','To Do','0')");
        if ($result) {
            //upload file to directory assets/document
            $target_dir = "../assets/document/";
            $filename = basename($_FILES["document"]["name"]);
            $target_file = $target_dir . $filename;

            if (move_uploaded_file($_FILES["document"]["tmp_name"], $target_file)) {
                //insert data document to database
                $result = mysqli_query($conn, "INSERT document  VALUES('','$filename','$filename','$current_date',
                '$_SESSION[id]')");
                //notif sukses
                $_SESSION['message'] = 'Data Task berhasil ditambahkan';
                $_SESSION['type'] = 'success';
            } else {
                //notif sukses
                $_SESSION['message'] = 'Data Task berhasil ditambahkan, namun document gagal ditambahkan';
                $_SESSION['type'] = 'warning';
            }
        } else {
            //notif gagal
            $_SESSION['message'] = 'Data Task gagal ditambahkan';
            $_SESSION['type'] = 'error';
        }
    } else {
        //notif data tidak valid
        $_SESSION['message'] = 'Data tidak valid';
        $_SESSION['type'] = 'warning';
    }
    // echo  $_SESSION['message'];
    header('Location: ../task/manage');
}

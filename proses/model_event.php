<?php
include_once 'connection.php';
include_once 'ceklogin.php';
require 'send_mail.php';

if ($_GET['method'] == 'get_all_event') {
    date_default_timezone_set('Asia/Jakarta');
    $current_date = (date('Y-m-d'));
    if ($user['status'] == 'admin') {
        $where = '';
    } else {
        $where = 'AND (event.id_unit=' . $user['id_unit'] . ' OR event.id_unit IS NULL)';
    }
    $event = query("SELECT id, event_name as title, date_start as start, date_end as end, priority as className
    FROM event where date_start>='$current_date' $where");
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
        header('Location: ' . $_SERVER['HTTP_REFERER']);
    }
} else { // tambah data event baru
    if ($_POST['submit']) {
        $nama = $_POST['name'];
        $priority = $_POST['priority'];
        $start_date = ($_POST['start']);
        $end_date = ($_POST['end']);
        // $id_unit = $_POST['unit'];
        $location = $_POST['location'];
        $description = $_POST['description'];
        $id_unit = !empty($_POST['unit']) ? "'$_POST[unit]'" : "NULL";


        $result = mysqli_query($conn, "INSERT INTO event VALUES('','$nama','$priority','$start_date','$end_date',$id_unit,'$location','$description','$_SESSION[id]')");
        // echo $id_unit;
        // print_r($_POST);
        // return 0;
        if ($result) {
            
            // print_r($staff_list);
            if ($_POST['unit']) {
                $staff_list = query("SELECT * FROM pegawai where id_unit=$id_unit and id<>'$_SESSION[id]'");
            }else{
                $staff_list = query("SELECT * FROM pegawai where id<>'$_SESSION[id]'");
            }
            // echo $id_unit;
            // print_r($staff_list);
            // return 0;
            foreach ($staff_list as $data_email) {
                $receiverMail = $data_email['email'];
                $receiverName = $data_email['nama_p'];
                $mailSubject = 'New Event';
                $eventName = $_POST['name'];
                $startDate= $start_date;
                $endDate =  $end_date;
                $evenLoc = $location;
                $evenKet =$description;
                ob_start();
                include '../mailtemplate/new_event.php';
                $mailMessage = ob_get_clean();

                SendMail($receiverMail, $receiverName, $mailSubject, $mailMessage);
                $mailMessage = ob_get_clean();
            }

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
    header('Location: ' . $_SERVER['HTTP_REFERER']);
}

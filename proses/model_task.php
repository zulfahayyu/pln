<?php
include_once 'connection.php';
include_once 'ceklogin.php';
date_default_timezone_set('Asia/Jakarta');
$current_date = (date('Y-m-d'));
$current_date_time = date('Y-m-d h:i:s');

// echo $_GET['method'];
// return 0;


if ($_GET['method'] == 'assign_staff') { //assign new staff
    if ($_POST['submit']) {
        $id_task = $_POST['id_task'];
        $id_pegawai = $_POST['id_pegawai'];
        $jabatan = $_POST['jabatan'];
        $result = mysqli_query($conn, "INSERT task_team  VALUES('','$id_task','$id_pegawai','$jabatan')");
        if ($result) {
            $_SESSION['message'] = 'Pegawai berhasil ditambahkan';
            $_SESSION['type'] = 'success';
        } else {
            $_SESSION['message'] = 'Pegawai gagal ditambahkan';
            $_SESSION['type'] = 'error';
        }
        header('Location: ' . $_SERVER['HTTP_REFERER']);
        return 0;
    }
} elseif ($_GET['method'] == 'ajax_change_progress') { // ajax change progress value
    $result = mysqli_query($conn, "UPDATE task  SET progress='$_GET[value]' WHERE id='$_GET[id]'");
    if ($result) {
        echo 'success';
    } else {
        echo 'error';
    }
} elseif ($_GET['method'] == 'ajax_change_satus') { // ajax change status
    $result = mysqli_query($conn, "UPDATE task  SET status='$_GET[value]' WHERE id='$_GET[id]'");
    if ($result) {
        echo 'success';
    } else {
        echo 'error';
    }
} elseif ($_GET['method'] == 'add_file') { // add file
    if ($_POST['submit']) {
        $target_dir = "../assets/document/";
        $filename = basename($_FILES["document"]["name"]);
        $target_file = $target_dir . $filename;
        if (move_uploaded_file($_FILES["document"]["tmp_name"], $target_file)) {
            //insert data document to database
            $id_task = $_POST['id_task'];
            $file_name = $_POST['filename'];

            $result = mysqli_query($conn, "INSERT document  VALUES('','$file_name','$filename','$current_date',
                '$_SESSION[id]')");

            $doc_id = mysqli_insert_id($conn); // get last insert id

            $result = mysqli_query($conn, "INSERT task_document  VALUES('','$id_task','$doc_id')"); // add file to task doc
            if ($result) {
                $_SESSION['message'] = 'Data file berhasil ditambahkan';
                $_SESSION['type'] = 'success';
            } else {
                $_SESSION['message'] = 'Data file gagal ditambahkan';
                $_SESSION['type'] = 'error';
            }
            header('Location: ' . $_SERVER['HTTP_REFERER']);
        }
    }

} elseif ($_GET['method'] == 'deletefile') { // delete file

    if ($_GET['id']) {
            $result=mysqli_query($conn,"DELETE FROM document where id='$_GET[id]'");
            if ($result) {

                $_SESSION['message'] = 'Data file berhasil dihapus';
    
                $_SESSION['type'] = 'success';
    
            } else {
    
                $_SESSION['message'] = 'Data file gagal dihapus';
    
                $_SESSION['type'] = 'error';
    
            }
        }
        header('Location: ' . $_SERVER['HTTP_REFERER']);

} elseif ($_GET['method'] == 'deletecomment') { // delete komentar

    if ($_GET['id']) {
            $result=mysqli_query($conn,"DELETE FROM task_comments where id='$_GET[id]'");
            if ($result) {

                $_SESSION['message'] = 'Komentar berhasil dihapus';
    
                $_SESSION['type'] = 'success';
    
            } else {
    
                $_SESSION['message'] = 'Komentar gagal dihapus';
    
                $_SESSION['type'] = 'error';
    
            }
        }
        header('Location: ' . $_SERVER['HTTP_REFERER']);

} elseif ($_GET['method'] == 'add_comment') { // add comment
    if ($_POST['submit']) {
        if (empty($_FILES)) {
            $doc_id = null;
        } else {
            $target_dir = "../assets/document/";
            $filename = basename($_FILES["document"]["name"]);
            $target_file = $target_dir . $filename;
            if (move_uploaded_file($_FILES["document"]["tmp_name"], $target_file)) {
                //insert data document to database
                $result = mysqli_query($conn, "INSERT document  VALUES('','$filename','$filename','$current_date',
                '$_SESSION[id]')");
                $doc_id = mysqli_insert_id($conn);
            }
        }
        $doc_id = !empty($doc_id) ? "'$doc_id'" : "NULL";

        $id_task = $_POST['id_task'];
        $comment = $_POST['description'];

        $result = mysqli_query($conn, "INSERT INTO task_comments VALUES('','$id_task','$user[id]','$comment',$doc_id,'$current_date_time')");

        if ($result) {
            $_SESSION['message'] = 'Data comment berhasil ditambahkan';
            $_SESSION['type'] = 'success';
        } else {
            $_SESSION['message'] = 'Data comment gagal ditambahkan';
            $_SESSION['type'] = 'error';
        }
        header('Location: ' . $_SERVER['HTTP_REFERER']);
    }
} else {
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
        } else { // Update data task
            if ($_POST['submit']) {
                $nama = $_POST['nama'];
                $priority = $_POST['priority'];
                $due_date = ($_POST['due_date']);
                $id_unit = $_POST['unit_kerja'];
                $team_lead = $_POST['team_lead'];
                $description = $_POST['description'];
                $result = mysqli_query($conn, "UPDATE task SET task_name='$nama',priority='$priority',
                due_date='$due_date',id_unit='$id_unit',id_leader='$team_lead',description='$description' where id='$_GET[id]'");
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
            header('Location: ../task/manage');
        }
    } else { // tambah data task baru
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
           $id_task = mysqli_insert_id($conn);
           if ($result) {
                if ($_FILES) {
                    //upload file to directory assets/document
                    $target_dir = "../assets/document/";
                    $filename = basename($_FILES["document"]["name"]);
                    $target_file = $target_dir . $filename;

                    if (move_uploaded_file($_FILES["document"]["tmp_name"], $target_file)) {
                        //insert data document to database
                        $result = mysqli_query($conn, "INSERT document  VALUES('','$filename','$filename','$current_date',
                '$_SESSION[id]')");
                        $doc_id = mysqli_insert_id($conn); // get last insert id

                        $result = mysqli_query($conn, "INSERT task_document  VALUES('','$id_task','$doc_id')"); // add file to task doc
                    } else {
                        //notif sukses
                        $_SESSION['message'] = 'Data Task berhasil ditambahkan, namun document gagal ditambahkan';
                        $_SESSION['type'] = 'warning';
                    }
                    //notif sukses
                    $_SESSION['message'] = 'Data Task berhasil ditambahkan';
                    $_SESSION['type'] = 'success';
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
}

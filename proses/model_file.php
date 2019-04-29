<?php
include_once 'connection.php';
date_default_timezone_set('Asia/Jakarta');
$current_date = (date('Y-m-d'));
if ($_GET['id']) {
    if ($_GET['delete']) { // delete data jabatan
        $result = mysqli_query($conn, "DELETE FROM document where id='$_GET[id]'");
        if ($result) {
            $_SESSION['message'] = 'Data file berhasil dihapus';
            $_SESSION['type'] = 'success';
        } else {
            $_SESSION['message'] = 'Data file gagal dihapus';
            $_SESSION['type'] = 'error';
        }
        header('Location: ../file');
    }
} else { // tambah data jabatan baru
    if ($_POST['submit']) {
        $target_dir = "../assets/document/";
        $filename = basename($_FILES["document"]["name"]);
        $target_file = $target_dir . $filename;
        if (move_uploaded_file($_FILES["document"]["tmp_name"], $target_file)) {
            //insert data document to database
            $file_name = $_POST['filename'];

            $result = mysqli_query($conn, "INSERT document  VALUES('','$file_name','$filename','$current_date',
                '$_SESSION[id]')");

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
}

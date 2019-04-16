<?php
include_once 'connection.php';
if ($_GET['id']) {
    if ($_GET['delete']) { // delete data jabatan
        $result = mysqli_query($conn, "DELETE FROM jabatan where id='$_GET[id]'");
        if ($result) {
            $_SESSION['message'] = 'Data jabatan berhasil dihapus';
            $_SESSION['type'] = 'success';
        } else {
            $_SESSION['message'] = 'Data jabatan gagal dihapus';
            $_SESSION['type'] = 'error';
        }
        header('Location: ../jabatan');
    } else { // Update data jabatan
        if ($_POST['submit']) {
            $kode = $_POST['kode'];
            $nama = $_POST['nama'];
            $result = mysqli_query($conn, "UPDATE jabatan SET kode_jabatan='$kode', nama_jabatan='$nama' where id='$_GET[id]'");
            if ($result) {
                $_SESSION['message'] = 'Data jabatan berhasil diupdate';
                $_SESSION['type'] = 'success';
            } else {
                $_SESSION['message'] = 'Data jabatan gagal diupdate';
                $_SESSION['type'] = 'error';
            }
        } else {
            $_SESSION['message'] = 'Data tidak valid';
            $_SESSION['type'] = 'warning';
        }
        header('Location: ../jabatan');
    }
} else { // tambah data jabatan baru
    if ($_POST['submit']) {
        $kode = $_POST['kode'];
        $nama = $_POST['nama'];
        $result = mysqli_query($conn, "INSERT INTO jabatan VALUES('','$kode','$nama')");
        if ($result) {
            $_SESSION['message'] = 'Data jabatan berhasil ditambahkan';
            $_SESSION['type'] = 'success';
        } else {
            $_SESSION['message'] = 'Data jabatan gagal ditambahkan';
            $_SESSION['type'] = 'error';
        }
    } else {
        $_SESSION['message'] = 'Data tidak valid';
        $_SESSION['type'] = 'warning';
    }
    header('Location: ../jabatan');
}

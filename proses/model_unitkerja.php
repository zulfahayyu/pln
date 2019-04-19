<?php
include_once 'connection.php';
if ($_GET['id']) {
    if ($_GET['delete']) { // delete data unit
        $result = mysqli_query($conn, "DELETE FROM unit_kerja where id='$_GET[id]'");
        if ($result) {
            $_SESSION['message'] = 'Data unit kerja berhasil dihapus';
            $_SESSION['type'] = 'success';
        } else {
            $_SESSION['message'] = 'Data unit kerja gagal dihapus';
            $_SESSION['type'] = 'error';
        }
        header('Location: ../unit');
    } else { // Update data unit
        if ($_POST['submit']) {
            $kode = $_POST['kode'];
            $nama = $_POST['nama'];
            $result = mysqli_query($conn, "UPDATE unit_kerja SET kode_unit='$kode', nama_unit='$nama' where id='$_GET[id]'");
            if ($result) {
                $_SESSION['message'] = 'Data unit kerja berhasil diupdate';
                $_SESSION['type'] = 'success';
            } else {
                $_SESSION['message'] = 'Data unit erja gagal diupdate';
                $_SESSION['type'] = 'error';
            }
        } else {
            $_SESSION['message'] = 'Data tidak valid';
            $_SESSION['type'] = 'warning';
        }
        header('Location: ../unit');
    }
} else { // tambah data unit baru
    if ($_POST['submit']) {
        $kode = $_POST['kode'];
        $nama = $_POST['nama'];
        $result = mysqli_query($conn, "INSERT INTO unit_kerja VALUES('','$kode','$nama')");
        if ($result) {
            $_SESSION['message'] = 'Data unit kerja berhasil ditambahkan';
            $_SESSION['type'] = 'success';
        } else {
            $_SESSION['message'] = 'Data unit kerja gagal ditambahkan';
            $_SESSION['type'] = 'error';
        }
    } else {
        $_SESSION['message'] = 'Data tidak valid';
        $_SESSION['type'] = 'warning';
    }
    header('Location: ../unit');
}

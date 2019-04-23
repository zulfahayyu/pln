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
} else { // tambah data pegawai baru
    if ($_POST['submit']) {
        $nip = $_POST['nip'];
        $nama_p = $_POST['nama_p'];
        $no_sap = $_POST['no_sap'];
        $t_lahir = $_POST['t_lahir'];
        $tgl_lahir = $_POST['tgl_lahir'];
        $jkelamin = $_POST['jkelamin'];
        $agama = $_POST['agama'];
        $status = $_POST['status'];
        $kel = $_POST['kel'];
        $alamat = $_POST['alamat'];
        $password = $_POST['password'];
        // $gambar = $_POST['gambar'];
        $id_unit = $_POST['id_unit'];
        $id_jabatan = $_POST['id_jabatan'];

        $query = mysqli_query($conn,"INSERT INTO pegawai VALUES ('$nip','$nama_p','$no_sap','$t_lahir','$tgl_lahir','$jkelamin','$agama','$status','$kel','$alamat','$password','','$id_unit','$id_jabatan')");
        mysqli_query($conn, "INSERT INTO login VALUES('$nip','$password','user')");

        if($query){
            echo "<script> alert('Data Berhasil Ditambahkan')</script>";
        }
        else{
            echo "<script> alert('Data Gagal Ditambahkan')</script>";
        }

        header('Location: ../manage_user.php');
    } else {
        $_SESSION['message'] = 'Data tidak valid';
        $_SESSION['type'] = 'warning';
    }
    header('Location: ../unit');
}



    
?>
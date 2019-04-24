<?php
include_once 'connection.php';
if($_GET['method']=='get_data_pegawai'){
    $unit = query("SELECT * FROM pegawai where id_unit='$_GET[id_unit]'");
    echo json_encode($unit);
    return 0;
}

if ($_GET['id']) {
    if ($_GET['delete']) { // delete data karyawan
        $result = mysqli_query($conn, "DELETE FROM pegawai where id='$_GET[id]'");
        if ($result) {
            $result = mysqli_query($conn, "DELETE FROM user where id_pegawai='$_GET[id]'");
            $_SESSION['message'] = 'Data karyawan berhasil dihapus';
            $_SESSION['type'] = 'success';
        } else {
            $_SESSION['message'] = 'Data karyawan gagal dihapus';
            $_SESSION['type'] = 'error';
        }
        header('Location: ../user');
    } else { // Update data karyawan
        if ($_POST['submit']) {
            $nip = $_POST['nip'];
            $nama = $_POST['nama'];
            $no_sap = $_POST['sap'];
            $t_lahir = $_POST['t_lahir'];
            $tgl_lahir = $_POST['tgl_lahir'];
            $jkelamin = $_POST['jkelamin'];
            $agama = $_POST['agama'];
            $kawin = $_POST['status'];
            $jml_kel = $_POST['jml_kel'];
            $alamat = $_POST['alamat'];
            $id_unit = $_POST['id_unit'];
            $id_jabatan = $_POST['id_jabatan'];
            $id_atasan = $_POST['id_atasan'];
            $password = $_POST['pass'];

            $result = mysqli_query($conn, "UPDATE pegawai SET 
            nip='$nip', nama_p='$nama' , no_sap='$no_sap', t_lahir='$t_lahir', tgl_lahir='$tgl_lahir', 
            jkelamin='$jkelamin' , agama='$agama' , status_kawin='$kawin' , 
            jml_kel='$jml_kel', alamat='$alamat' , id_unit='$id_unit', id_jabatan='$id_jabatan', 
            id_atasan='$id_atasan'
            where id='$_GET[id]'");

            if ($result) {
                mysqli_query($conn, "UPDATE user SET password='$password' where id_pegawai='$_GET[id]'");
                $_SESSION['message'] = 'Data karyawan berhasil diupdate';
                $_SESSION['type'] = 'success';
            } else {
                $_SESSION['message'] = 'Data karyawan gagal diupdate';
                $_SESSION['type'] = 'error';
            }
        } else {
            $_SESSION['message'] = 'Data tidak valid';
            $_SESSION['type'] = 'warning';
        }
        header('Location: ../user');
    }
} else { // tambah data karyawan baru
    if ($_POST['submit']) {
        $nip = $_POST['nip'];
        $nama = $_POST['nama'];
        $no_sap = $_POST['sap'];
        $t_lahir = $_POST['t_lahir'];
        $tgl_lahir = $_POST['tgl_lahir'];
        $jkelamin = $_POST['jkelamin'];
        $agama = $_POST['agama'];
        $kawin = $_POST['status'];
        $jml_kel = $_POST['jml_kel'];
        $alamat = $_POST['alamat'];
        $id_unit = $_POST['id_unit'];
        $id_jabatan = $_POST['id_jabatan'];
        $id_atasan = $_POST['id_atasan'];
        $password = $_POST['pass'];

        $result = mysqli_query($conn, "INSERT INTO pegawai VALUES ('','$nip', '$nama' ,'$no_sap','$t_lahir',
            '$tgl_lahir', '$jkelamin' , '$agama' , '$kawin' , '$jml_kel', '$alamat' , '' ,'$id_unit', 
            '$id_jabatan', '$id_atasan')");
        $lastid = mysqli_insert_id($conn);
        if ($result) {
            mysqli_query($conn, "INSERT INTO user VALUES ('','$lastid','$password','user')");
            $_SESSION['message'] = 'Data karyawan berhasil ditambahkan';
            $_SESSION['type'] = 'success';

        } else {
            $_SESSION['message'] = 'Data karyawan gagal ditambahkan';
            $_SESSION['type'] = 'error';

        }
    } else {
        $_SESSION['message'] = 'Data tidak valid';
        $_SESSION['type'] = 'warning';
    }
    header('Location: ../user');
}

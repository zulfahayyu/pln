<?php
include("connection.php");
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
    
?>
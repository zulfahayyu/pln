<?php
include_once 'connection.php';
include_once 'ceklogin.php';
if ($_GET['method'] == 'get_data_pegawai') {
    $unit = query("SELECT * FROM pegawai where id_unit='$_GET[id_unit]'");
    echo json_encode($unit);
    return 0;
}

if ($_GET['update']) {
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


        $result = mysqli_query($conn, "UPDATE pegawai SET 
            nip='$nip', nama_p='$nama' , no_sap='$no_sap', t_lahir='$t_lahir', tgl_lahir='$tgl_lahir', 
            jkelamin='$jkelamin' , agama='$agama' , status_kawin='$kawin' , 
            jml_kel='$jml_kel', alamat='$alamat'
            where id='$_GET[id]'");
        if ($result) {
            $_SESSION['message'] = 'Profile berhasil diupdate';
            $_SESSION['type'] = 'success';
        } else {
            $_SESSION['message'] = 'Profile gagal diupdate';
            $_SESSION['type'] = 'error';
        }
    } else {
        $_SESSION['message'] = 'Data tidak valid';
        $_SESSION['type'] = 'warning';
    }
    // header('Location: ../user');
} elseif ($_GET['password']) {
    if ($_POST['submit']) {
        $cpass = $_POST['currentpass'];
        $pass = $_POST['password'];
        $rpass = $_POST['rpassword'];
        $data = get_where("SELECT * FROM user where id_pegawai='$_GET[id]'");
        if ($cpass == $data['password']) {
            if ($pass == $rpass) {
                $result = mysqli_query($conn, "UPDATE user SET password='$pass' where id_pegawai='$_GET[id]'");
                if ($result) {
                    $_SESSION['message'] = 'Password berhasil diupdate';
                    $_SESSION['type'] = 'success';
                } else {
                    $_SESSION['message'] = 'Password gagal diupdate';
                    $_SESSION['type'] = 'error';
                }
            } else {
                $_SESSION['message'] = 'Password baru tidak sama';
                $_SESSION['type'] = 'warning';
            }
        } else {
            $_SESSION['message'] = 'Password sekarang tidak sesuai';
            $_SESSION['type'] = 'warning';
        }
    }
} elseif ($_GET['avatar']) {
    if ($_POST['submit']) {
        $target_dir = "../assets/avatar/";
        $filename = basename($_FILES["document"]["name"]);
        $target_file = $target_dir . $filename;
        if (move_uploaded_file($_FILES["document"]["tmp_name"], $target_file)) {
            //insert data document to database
            $file_name = $_POST['filename'];

            $result = mysqli_query($conn, "UPDATE pegawai  SET avatar='$filename' WHERE id='$_GET[id]'");

            if ($result) {
                $_SESSION['message'] = 'Avatar berhasil diganti';
                $_SESSION['type'] = 'success';
            } else {
                $_SESSION['message'] = 'Avatar gagal diganti';
                $_SESSION['type'] = 'error';
            }
           
            // header('Location: ' . $_SERVER['HTTP_REFERER']);
        }
    }
    // return 0;
}
header('Location: ../profile');

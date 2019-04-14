<?php 
require 'connection.php';

$nip = $_GET["nip"];

function hapus($nip) {
    global $conn;
    mysqli_query($conn, "DELETE FROM pegawai WHERE nip ='".$nip."'");
    return mysqli_affected_rows($conn);
}

if (hapus($nip) > 0) {
	echo "
        <script>
            alert('data berhasil dihapus!');
            document.location.href = '../manage_user.php';
        </script>
    ";
} else {
    echo mysqli_error($conn);
    echo $nip;
	echo "
        <script>
            alert('data gagal dihapus!');
            document.location.href = '../manage_user.php';
        </script>
    ";
}

 ?>
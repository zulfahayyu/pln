<?php
include("connection.php");
    $nama = $_POST['nama'];

    $query = mysqli_query($conn,"INSERT INTO up_tugas VALUES ('','','$nama','')");
    echo $nama;
?>
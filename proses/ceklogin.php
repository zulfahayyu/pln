<?php 
if(empty($_SESSION['id'])){
    echo "<script>window.location.href = 'login.php'</script>";
}else{
    $query = mysqli_query($conn,"SELECT user.status,pegawai.* FROM pegawai join user on pegawai.id=user.id_pegawai WHERE pegawai.id = '$_SESSION[id]' limit 1");
    $user =$query->fetch_array(MYSQLI_ASSOC);

    $result = mysqli_query($conn,"SELECT * FROM pegawai WHERE id_atasan='$user[id]'");
    $jml_bawahan = mysqli_num_rows($result);

    while ($b = mysqli_fetch_assoc($result)) {
        $bawahan[] = $b;
    }
}

?>
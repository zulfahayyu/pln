<?php 
session_start();
if(empty($_SESSION['nip'])){
    echo "<script>window.location.href = 'login.php'</script>";
}else{
    $query = mysqli_query($conn,"SELECT * FROM user WHERE `nip` = '$_SESSION[nip]' limit 1");
    $user=$query->fetch_array(MYSQLI_ASSOC);
}

?>
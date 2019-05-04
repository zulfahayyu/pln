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

function permission($id){
    global $user;
    if($id==1){
        if($user['status']!='admin'){
            $_SESSION['message'] = 'Anda tidak memiliki akses';
            $_SESSION['type'] = 'error';
            echo "<script>window.location.href = 'index.php'</script>";
            return 0;
        }
    }elseif($id==2){
        if($user['status']!='admin' && $user['status']!='hrd'){
            $_SESSION['message'] = 'Anda tidak memiliki akses';
            $_SESSION['type'] = 'error';
            echo "<script>window.location.href = 'index.php'</script>";
            return 0;
        }
    }elseif($id==3){
        if($user['status']!='hrd'){
            $_SESSION['message'] = 'Anda tidak memiliki akses';
            $_SESSION['type'] = 'error';
            echo "<script>window.location.href = 'index.php'</script>";
            return 0;
        }
    }
}

?>
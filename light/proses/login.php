<?php
    include_once('connection.php');
    session_start();
    $nip  = $_POST['nip'];
    $pass = $_POST['password'];

    $query = mysqli_query($conn,"SELECT * FROM login WHERE `nip` = '$nip' AND `password` = '$pass'" );
    
    if($query){
        $row = mysqli_fetch_assoc($query);
        if($row['status']=='admin'){
            echo "<script>window.location.href = 'manage_user.php'</script>";
            $_SESSION['nip']=$row['nip']; 
        }
        elseif($row['status']=='user'){
            echo "<script>window.location.href = 'index.php'</script>";
            $_SESSION['nip']=$row['nip']; 
        }
        else{
            echo "<script>window.location.href = 'login.php'</script>";
        }

    }else{
        echo "ccd";
    }
?>
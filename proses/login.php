<?php
    include_once('connection.php');
    // session_start();
    $nip  = $_POST['nip'];
    $pass = $_POST['password'];

    $query = mysqli_query($conn,"SELECT * FROM user WHERE `nip` = '$nip' AND `password` = '$pass'" );
    
    if($query){
        $row = mysqli_fetch_assoc($query);
        if($row['status']=='admin'){
            echo "<script>window.location.href = '$site_url'</script>";
            $_SESSION['nip']=$row['nip']; 
            $_SESSION['nama']=$row['nama']; 
        }
        elseif($row['status']=='user'){
            echo "<script>window.location.href = '$site_url'</script>";
            $_SESSION['nip']=$row['nip']; 
            $_SESSION['nama']=$row['nama']; 
        }
        else{
            echo "<script>window.location.href = '$site_url/login.php'</script>";
        }

    }else{
        echo "ccd";
    }
?>
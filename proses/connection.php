<?php
    include_once 'config.php';
    $conn = mysqli_connect($db_server,$db_user,$db_pass,$db_name);

    function query($query){
        global $conn;
            $result = mysqli_query($conn, $query);
            $rows = [];
            while ( $row = mysqli_fetch_assoc($result)) {
                 $rows[] = $row;
             } 
             return $rows;
        }

?>
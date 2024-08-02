<?php

    include '../Db_Connect.php';
    session_start();
    $no = $_SESSION['No'];

    // echo $no;
    
    $sql = "DELETE FROM results WHERE No = '$no'";

    $data = mysqli_query($conn,$sql);

    if($data){
        
        header('location:AdminUpdateResult.php');
    }
    else{
        echo "Error";  
    }
?>

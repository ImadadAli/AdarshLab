<?php
    include '../Db_Connect.php';
    $no = $_GET['id'];

    echo $no;
    
    $sql = "DELETE FROM home_visite WHERE No = '$no'";

    $data = mysqli_query($conn,$sql);

    if($data){
        header('location:AdminHomeVisit.php');
    }
    else{
        echo "Error";
        error();
    }

?>
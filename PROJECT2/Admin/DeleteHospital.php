<?php
    include '../Db_Connect.php';
    $no = $_GET['id'];

    echo $no;
    
    $sql = "DELETE FROM hospital_visit WHERE No = '$no'";

    $data = mysqli_query($conn,$sql);

    if($data){
        header('location:AdminHospitalVisit.php');
    }
    else{
        echo "Error";  error();
    }

?>
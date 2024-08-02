<?php
    include '../Db_Connect.php';
    $no = $_GET['id'];

    echo $no;
    
    $sql = "DELETE FROM contacts WHERE No = '$no'";

    $data = mysqli_query($conn,$sql);

    if($data){
        header('location:AdminContact.php');
    }
    else{
        echo "Error";  error();
    }

?>
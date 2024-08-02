<?php
    $Server = "localhost";
    $Password = "";
    $Data_base = "leboratry_management";
    $UserName = "root";

    $conn = mysqli_connect($Server,$UserName,$Password,$Data_base);
    if(!$conn){
        echo "error";
    }
?>
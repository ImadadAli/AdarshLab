<?php

    header("refresh: 3;");
    session_start();
 if(!isset($_SESSION['logedin']) || $_SESSION['logedin']!=true){
    header("location:AdminLogin.php");
    exit;
  }
  include '../Db_Connect.php';
  $sql = "SELECT * FROM  home_visite";
    $result = mysqli_query($conn,$sql);

    $home = mysqli_num_rows($result);

    $sql = "SELECT * FROM hospital_visit";
    $result = mysqli_query($conn,$sql);

    $hospital = mysqli_num_rows($result);
//   $hospital = $_SESSION['hospital'];
//   $home = $_SESSION['home'];

  $total = $hospital + $home;

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/DashBord.css">
    <title>Adarsh Admin</title>
        <!-- <style>
            *{
                margin: 0px;
                padding: 0px;
            }
            
            .navbar{
                background-color: black;
                display: block;
                position: fixed;
                width: 7cm;
                height: 16.2cm;
            }
            .title{
                text-align: center;
                font-weight: bolder;
                font-size: 30px;
                margin-top: 30px;
                color: green;
                font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
            }
            .AdminName{
                
                color: white;
                margin-top: 20px;
                margin-left: 35px;
                font-size: 20px;
                font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
            }
            .navItem{
                margin-top: 50px;
                margin-right: 62px;
            }
            .navItem li a{
                margin-left: 35px;
                font-size: 21px;
                font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
                text-decoration: none;
            }
            .navItem li{
                margin-top: 10px;
                padding: 10px;
            }
            .DashBord{
                background-color: whitesmoke;
                text-decoration: underline;
                border-top-right-radius: 80px;
            }
            .abc{
                color: black;
            }
            .cba{
                color: white;
            }
            .navItem ul li:hover{
                background-color: whitesmoke;
                text-decoration: underline;
                border-top-right-radius: 80px;
            }
            .navItem ul li a:hover{
                color: black;
            }
            .mainDiv{
                position: absolute;
                left: 264px;
                width: 1016px;
                height: 16.1cm;
                background-color: rgb(224, 173, 173);
            }
            .heading{
                margin-top: 1cm;
                text-align: center;
                color: purple;
                font-size: 50px;
            }
            .container{
                
                display: flex;
                margin-top: 1cm;
            }
            .container1{
                border: 2px solid black;
                height: 150px;
                width: 200px;
                background-color: whitesmoke;
                border-radius: 20px;
                margin: 20px;
                margin-left: 5.2cm;
            }
            .container2{
                text-align: center;
                margin-top: 1.2cm;
            }
            .container1:hover{
                height: 160PX;
                width: 210px;
            }
        </style> -->
</head>
<body>
<div>
    <nav class="navbar">
    
        <h1 class="title">Adarsh Admin</h1>
        <div class="AdminName">
            <h3><i class="fa fa-user-circle"></i> <?php print_r($_SESSION['Admin']);?></h3>    
        </div>
        <div class="navItem">
            <ul>
                <li class="DashBord"><a class="abc" href="">Dashbord</a></li>
                <li><a class="cba" href="AdminHomeVisit.php">Home Visit</a></li>
                <li><a class="cba" href="AdminHospitalVisit.php">Hospital Visit</a></li>
                <li><a class="cba" href="AdminResult.php">Result</a></li>
                <li><a class="cba" href="AdminUpdateResult.php">Update Result</a></li>
                <li><a class="cba" href="AdminFeedBack.php">Feedback</a></li>
                <li><a class="cba" href="AdminContact.php">Contact</a></li>
                <li><a class="cba" href="../Logout.php">Log Out</a></li>

            </ul>
        </div>
    
    </nav>
</div>
    <div class="mainDiv">
       <h1 class="heading">Dashbord</h1>
       <div class="container">
            <div class="container1">
                <div class="container2">
                    <h1 class="h2">
                        <?php echo $total;?>
                     </h1><br>
                     <h2 class="h3">
                         Total Reports
                     </h2>
                </div>
            </div>
            <div class="container1">
                <div class="container2">
                    <h1 class="h2">
                        <?php echo $total;?> 
                     </h1><br>
                     <h2 class="h3">
                            Panding Reports
                     </h2>
                </div>
            </div>    
       </div>
        <div class="container">
        <div class="container1">
            <div class="container2">
                <h1 class="h2">
                    <?php echo $hospital;?> 
                 </h1><br>
                 <h2 class="h3">
                     Hospital Visit
                 </h2>
            </div>
        </div>
        <div class="container1">
            <div class="container2">
                <h1 class="h2">
                    <?php echo $home;?> 
                 </h1><br>
                 <h2 class="h3">
                    Home Visit
                 </h2>
            </div>
        </div>    
    </div>
    </div>
</body>
</html>
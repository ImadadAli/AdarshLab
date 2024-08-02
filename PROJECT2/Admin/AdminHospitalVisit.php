<?php

    header("refresh: 3;");
    include '../Db_Connect.php';
    $sql = "SELECT * FROM hospital_visit";
    $result = mysqli_query($conn,$sql);

    $num = mysqli_num_rows($result);

    // session_start();
    // $_SESSION['hospital'] = $num;
    
    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/AdminHospital.css">
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
            <h3><i class="fa fa-user-circle"></i> Hasan Abbas</h3>    
        </div>
        <div class="navItem">
            <ul>
                <li class="DashBord"><a class="abc" href="AdminDashbord.php">Dashbord</a></li>
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
       <h1 class="heading">Hospital Visit</h1>
       <div class="Table">
            <table class="styled-table">
                <thead>
                    <tr>
                        <th>SurName</th>
                        <th>Name</th>
                        <th>Age</th>
                        <th>Cases</th>
                        <th>Room</th>
                        <th>Dr.</th>
                        <th>Hospital</th>
                        <th>E-mail</th>
                        <th>Mobile</th>
                        <th>Address</th>
                        <th>Action  </th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <?php
                            while($row= mysqli_fetch_assoc($result)){
                        ?>
                        <td><?php echo $row['Surname']?></td>
                        <td><?php echo $row['Name']?></td>
                        <td><?php echo $row['Age']?></td>
                        <td><?php echo $row['Cases']?></td>
                        <td><?php echo $row['Room_No']?></td>
                        <td><?php echo $row['Doctor_Name']?></td>
                        <td><?php echo $row['Hospital_Name']?></td>
                        <td><?php echo $row['Email']?></td>
                        <td><?php echo $row['Mobile_No']?></td>
                        <td><?php echo $row['Address']?></td>
                        <td><a href="DeleteHospital.php?id=<?= $row['No'];?>">Delete</a></td>  
                    </tr>
                    <?php
                            }
                        ?>
                </tbody>
            </table>
       </div>
    </div>
</body>
</html>
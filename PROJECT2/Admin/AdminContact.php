<?php

    header("refresh: 3;");
    include '../Db_Connect.php';
    $sql = "SELECT * FROM  contacts";
    $result = mysqli_query($conn,$sql);

    $num = mysqli_num_rows($result);
    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/AdminContact.css">
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
       .styled-table {
            border-collapse: collapse;
            margin: 25px 0;
            font-size: 0.9em;
            font-family: sans-serif;
            min-width: 400px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.15);
            border:2px solid #009879;
        }
        .styled-table thead tr {
            background-color: #009879;
            color: #ffffff;
            text-align: left;
        }
        .styled-table th,
        .styled-table td {
            padding: 12px 15px;
        }
        .styled-table tbody tr {
            border-bottom: 1px solid #dddddd;
        }

        .styled-table tbody tr:nth-of-type(even) {
            background-color: #f3f3f3;
            font-weight: bold;
            color: #009879;
        }

        .styled-table tbody tr:last-of-type {
            border-bottom: 2px solid #009879;
            
        }
        .Table{
            margin:0px 10px;
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
       <h1 class="heading">Contact</h1>
       <div class="Table">
            <table class="styled-table">
                <thead>
                    <tr>
                        <th>First_Name</th>
                        <th>Last_Name</th>
                        <th>E-mail</th>
                        <th>Mobile</th>
                        <th>Massage</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <?php
                            while($row= mysqli_fetch_assoc($result)){
                        ?>
                        <td><?php echo $row['Name']?></td>
                        <td><?php echo $row['LastName']?></td>
                        <td><?php echo $row['Email']?></td>
                        <td><?php echo $row['Mobile']?></td>
                        <td><?php echo $row['Message']?></td>
                        <td><a href="DeleteContact.php?id=<?= $row['No'];?>">Delete</a></td>
                        
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
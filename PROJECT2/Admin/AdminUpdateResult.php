<?php
     session_start();
    if($_SERVER["REQUEST_METHOD"] == "POST"){

        include '../Db_Connect.php';

        $Mobile = $_POST['Mobile'];

        if(($Mobile != "") && strlen($Mobile) == 10){
            $sql = "SELECT * FROM  results where No='$Mobile'";
            $result = mysqli_query($conn,$sql);

            // if(mysqli_num_rows($result) > 0){

            //     while($row = mysqli_fetch_assoc($result)){

            //         echo $row['Name'];
            //     }
            // }
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/AdminUpdateResult.css">
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
            margin-top: 30px;
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
    <h1 class="heading">Update Result</h1>
         <form action="AdminUpdateResult.php" class="uform" method="POST">
            <input type="text" placeholder="Enter Moile No." name="Mobile">
            <button class="button">Search Reacord</button>
        </form>
     
        <div class="Table">
            <table class="styled-table">
                <?php
                if(isset($result))
                {
                    if(mysqli_num_rows($result) > 0){
                    while($row= mysqli_fetch_assoc($result)){
                       
                        $_SESSION['Name'] = $row['Name'];
                        $_SESSION['No'] = $row['No'];
                        $_SESSION['Fasting_Blood_Glucose'] = $row['Fasting_Blood_Glucose'];
                        $_SESSION['Fasting_Urin_Glucose'] = $row['Fasting_Urin_Glucose'];
                        $_SESSION['Random_Blood_Glucose'] = $row['Random_Blood_Glucose'];
                        $_SESSION['Sr_Uric_Acid'] = $row['Sr_Uric_Acid'];
                        $_SESSION['Post_Prandial_Urine_Glucose'] = $row['Post_Prandial_Urine_Glucose'];
                        $_SESSION['Post_Prandial_Blood_Glucose'] = $row['Post_Prandial_Blood_Glucose'];
                        $_SESSION['Blood_Urea'] = $row['Blood_Urea'];
                        $_SESSION['Sr_Creatinine'] = $row['Sr_Creatinine'];
                        $_SESSION['SGPT'] = $row['SGPT'];
                        $_SESSION['SGOT'] = $row['SGOT'];
                        $_SESSION['HB'] = $row['HB'];
                        $_SESSION['RBC_Count'] = $row['RBC_Count'];
                        $_SESSION['PVC'] = $row['PVC'];
                        $_SESSION['MCV'] = $row['MCV'];
                        $_SESSION['MCH'] = $row['MCH'];
                        $_SESSION['MCHC'] = $row['MCHC'];
                        $_SESSION['RDW'] = $row['RDW'];
                        $_SESSION['WBC_Count'] = $row['WBC_Count'];
                        $_SESSION['C_Reactive_Protein'] = $row['C_Reactive_Protein'];
                        $_SESSION['Serum_T3_Estimation'] = $row['Serum_T3_Estimation'];
                        $_SESSION['Serum_T4_Estimation'] = $row['Serum_T4_Estimation'];
                        $_SESSION['Free_T3_Estimation'] = $row['Free_T3_Estimation'];
                        $_SESSION['Free_T4_Estimation'] = $row['Free_T4_Estimation'];
                        $_SESSION['Serum_Cholesterol'] = $row['Serum_Cholesterol'];
                        $_SESSION['Serum_Triglyceride'] = $row['Serum_Triglyceride'];
                        $_SESSION['Total_Cholesterol_HDL_Ratio'] = $row['Total_Cholesterol_HDL_Ratio'];
                        $_SESSION['LDL_HDL_Ratio'] = $row['LDL_HDL_Ratio'];
                        $_SESSION['Ammount'] = $row['Ammount'];
                ?>
                <tr class="tr">
                    <th>Field</th>
                    <th>result</th>
                </tr>
                <tr>
                    <td class="td">Name</td>
                    <td><?php echo $row['Name']?></td>
                </tr>
                <tr>
                    <td class="td">Mobile No.</td>
                    <td><?php echo $row['No']?></td>
                </tr>
                <tr>
                    <td class="td">Fasting_Blood_Glucose</td>
                    <td><?php echo $row['Fasting_Blood_Glucose']?></td>
                </tr>
                <tr>
                    <td class="td">Fasting_Urin_Glucose</td>
                    <td><?php echo $row['Fasting_Urin_Glucose']?></th>
                </tr>
                <tr>
                    <td class="td">Random_Blood_Glucose</th>
                    <td><?php echo $row['Random_Blood_Glucose']?></td>
                </tr>
                <tr>
                    <td class="td">Sr_Uric_Acid</td>
                    <td><?php echo $row['Sr_Uric_Acid']?></td>
                </tr>
                <tr>
                    <td class="td">Post_Prandial_Urine_Glucose</td>
                    <td><?php echo $row['Post_Prandial_Urine_Glucose']?></td>
                </tr>
                <tr>
                    <td class="td">Post_Prandial_Blood_Glucose</td>
                    <td><?php echo $row['Post_Prandial_Blood_Glucose']?></th>
                </tr>
                <tr>
                    <td class="td">Blood_Urea</td>
                    <td><?php echo $row['Blood_Urea']?></td>
                </tr>
                <tr>
                    <td class="td">Sr_Creatinine</td>
                    <td><?php echo $row['Sr_Creatinine']?></td>
                </tr>
                <tr>
                    <td class="td">SGPT</td>
                    <td><?php echo $row['SGPT']?></td>
                </tr>
                <tr>
                    <td class="td">SGOT</td>
                    <td><?php echo $row['SGOT']?></th>
                </tr>
                <tr>
                    <td class="td">HB</td>
                    <td><?php echo $row['HB']?></td>
                </tr>
                <tr>
                    <td class="td">RBC_Count</td>
                    <td><?php echo $row['RBC_Count']?></td>
                </tr>
                <tr>
                    <td class="td">PCV</td>
                    <td><?php echo $row['PVC']?></td>
                </tr>
                <tr>
                    <td class="td">MCV</td>
                    <td><?php echo $row['MCV']?></td>
                </tr>
                <tr>
                    <td class="td">MCH</td>
                    <td><?php echo $row['MCH']?></td>
                </tr>
                <tr>
                    <td class="td">MCHC</td>
                    <td><?php echo $row['MCHC']?></td>
                </tr>
                <tr>
                    <td class="td">RDW</td>
                    <td><?php echo $row['RDW']?></td>
                </tr>
                <tr>
                     <td class="td">WBC_Count</td>
                    <td><?php echo $row['WBC_Count']?></td>
                </tr>
                <tr>
                    <td class="td">C_Reactive_Protein</td>
                    <td><?php echo $row['C_Reactive_Protein']?></td>
                </tr>
                <tr>
                    <td class="td">Serum_T3_Estimation</td>
                    <td><?php echo $row['Serum_T3_Estimation']?></td>
                </tr>
                <tr>
                    <td class="td">Serum_T4_Estimation</td>
                    <td><?php echo $row['Serum_T4_Estimation']?></td>
                </tr>
                <tr>
                    <td class="td">Free_T3_Estimation</td>
                    <td><?php echo $row['Free_T3_Estimation']?></td>
                </tr>
                <tr>
                    <td class="td">Free_T4_Estimation</td>
                    <td><?php echo $row['Free_T4_Estimation']?></td>
                </tr>
                <tr>
                    <td class="td">Serum_Cholesterol</td>
                    <td><?php echo $row['Serum_Cholesterol']?></td>
                </tr>
                <tr>
                    <td class="td">Serum_Triglyceride</td>
                    <td><?php echo $row['Serum_Triglyceride']?></td>
                </tr>
                <tr>
                    <td class="td">Total_Cholesterol_HDL_Ratio</td>
                    <td><?php echo $row['Total_Cholesterol_HDL_Ratio']?></td>
                </tr>
                <tr>
                    <td class="td">LDL_HDL_Ratio</td>
                    <td><?php echo $row['LDL_HDL_Ratio']?></td>
                </tr>
                <tr>
                    <td class="td">Ammount</td>
                    <td><?php echo $row['Ammount']?>/-RS</td>
                </tr>
                <?php
                    }
                }
            }
        ?>
    </table>
            <button class="button1"><a href="UpdateResult.php">Update</a></button>
            <button class="button2"><a href="DeleteUpdateResult.php">Delete</a></button>
       </div>
    </div>
</body>
</html>





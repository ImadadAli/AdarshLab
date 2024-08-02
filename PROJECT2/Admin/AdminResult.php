<?php

$Show = false;
$ShowErr = false;
if($_SERVER["REQUEST_METHOD"] == "POST"){

    include '../Db_Connect.php';

    $number = $_POST["No"];
    $Name =  $_POST["Name"];
    $Fasting_Blood_Glucose = $_POST["Fasting_Blood_Glucose"];
    $Fasting_Urin_Glucose = $_POST["Fasting_Urin_Glucose"];
    $Random_Blood_Glucose = $_POST["Random_Blood_Glucose"];
    $Sr_Uric_Acid = $_POST["Sr_Uric_Acid"];
    $Post_Prandial_Urine_Glucose = $_POST["Post_Prandial_Urine_Glucose"];
    $Post_Prandial_Blood_Glucose = $_POST["Post_Prandial_Blood_Glucose"];
    $Blood_Urea = $_POST["Blood_Urea"];
    $Sr_Creatinine = $_POST["Sr_Creatinine"];
    $SGPT = $_POST["SGPT"];
    $SGOT = $_POST["SGOT"];
    $HB = $_POST["HB"];
    $RBC_Count = $_POST["RBC_Count"];
    $PVC = $_POST["PVC"];
    $MCV = $_POST["MCV"];
    $MCH = $_POST["MCH"];
    $MCHC = $_POST["MCHC"];
    $RDW = $_POST["RDW"];
    $WBC_Count = $_POST["WBC_Count"];
    $C_Reactive_Protein = $_POST["C_Reactive_Protein"];
    $Serum_T3_Estimation = $_POST["Serum_T3_Estimation"];
    $Serum_T4_Estimation = $_POST["Serum_T4_Estimation"];
    $Free_T3_Estimation = $_POST["Free_T3_Estimation"];
    $Free_T4_Estimation = $_POST["Free_T4_Estimation"];
    $Serum_Cholesterol = $_POST["Serum_Cholesterol"];
    $Serum_Triglyceride = $_POST["Serum_Triglyceride"];
    $Total_Cholesterol_HDL_Ratio = $_POST["Total_Cholesterol_HDL_Ratio"];
    $LDL_HDL_Ratio = $_POST["LDL_HDL_Ratio"];
    $Ammount = $_POST["Ammount"];

    if(($number != "") && (strlen($number) == 10)){
        $sql = "INSERT INTO `results` (`No`, `Name`, `Fasting_Blood_Glucose`, `Fasting_Urin_Glucose`, `Random_Blood_Glucose`, `Sr_Uric_Acid`, `Post_Prandial_Urine_Glucose`, `Post_Prandial_Blood_Glucose`, `Blood_Urea`, `Sr_Creatinine`,`SGPT`, `SGOT`, `HB`, `RBC_Count`, `PVC`, `MCV`, `MCH`, `MCHC`, `RDW`, `WBC_Count`,`C_Reactive_Protein`,`Serum_T3_Estimation`,`Serum_T4_Estimation`,`Free_T3_Estimation`,`Free_T4_Estimation`,`Serum_Cholesterol`,`Serum_Triglyceride`,`Total_Cholesterol_HDL_Ratio`,`LDL_HDL_Ratio`,`Ammount`) VALUES ('$number', '$Name', '$Fasting_Blood_Glucose', '$Fasting_Urin_Glucose', '$Random_Blood_Glucose', '$Sr_Uric_Acid', '$Post_Prandial_Urine_Glucose', '$Post_Prandial_Blood_Glucose', '$Blood_Urea', '$Sr_Creatinine','$SGPT', '$SGOT', '$HB', '$RBC_Count', '$PVC', '$MCV', '$MCH', '$MCHC', '$RDW', '$WBC_Count','$C_Reactive_Protein', '$Serum_T3_Estimation', '$Serum_T4_Estimation', '$Free_T3_Estimation', '$Free_T4_Estimation', '$Serum_Cholesterol', '$Serum_Triglyceride', '$Total_Cholesterol_HDL_Ratio', '$LDL_HDL_Ratio', '$Ammount')";
        $result = mysqli_query($conn,$sql);
                
        if($result){
            $Show = true;
            // echo "INSERTED";
          }
        }else{
          $ShowErr = "sOMREFGN";
        // echo "ERROR";
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
    <link rel="stylesheet" href="css/AdminResult.css">
    <title>Adarsh Admin</title>
    <!-- <style>
        /* *{
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
       } */
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
        <?php
            if($Show)
            {
                echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
          <strong>SUCCESS! </strong>Your form Submited
          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>';
            }
            if($ShowErr){
                echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                  <strong>ERROR! </strong>Something went wrong
                  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>';
            }
        ?>
       <h1 class="heading">Upload Result</h1>  
       <form action="AdminResult.php" class="uform" method="POST">
      <input type="text" placeholder="Enter Number" name="No"><br>
      <input type="text" placeholder="Enter Name" name="Name"><br>     
      <input type="text" placeholder="Enter Fasting_Blood_Glucose" name="Fasting_Blood_Glucose"><br>
      <input type="text" placeholder="Enter Fasting_Urin_Glucose" name="Fasting_Urin_Glucose"><br>
      <input type="text" placeholder="Enter Random_Blood_Glucose" name="Random_Blood_Glucose"><br>
      <input type="text" placeholder="Enter Sr._Uric_Acid" name="Sr_Uric_Acid"><br>
      <input type="text" placeholder="Enter Post_Prandial_Urine_Glucose" name="Post_Prandial_Urine_Glucose"><br>
      <input type="text" placeholder="Enter Post_Prandial_Blood_Glucose" name="Post_Prandial_Blood_Glucose"><br>
      <input type="text" placeholder="Enter Blood_Urea" name="Blood_Urea"><br>
      <input type="text" placeholder="Enter Sr._Creatinine" name="Sr_Creatinine"><br>
      <input type="text" placeholder="Enter S.G.P.T" name="SGPT"><br>
      <input type="text" placeholder="Enter S.G.O.T" name="SGOT"><br>     
      <input type="text" placeholder="Enter HB" name="HB"><br>
      <input type="text" placeholder="Enter R.B.C_Count" name="RBC_Count"><br>
      <input type="text" placeholder="Enter P.C.V." name="PVC"><br>
      <input type="text" placeholder="Enter M.C.V." name="MCV"><br>
      <input type="text" placeholder="Enter M.C.H." name="MCH"><br>
      <input type="text" placeholder="Enter M.C.H.C." name="MCHC"><br>
      <input type="text" placeholder="Enter R.D.W." name="RDW"><br>
      <input type="text" placeholder="Enter W.B.C._Count" name="WBC_Count"><br>
      <input type="text" placeholder="Enter C-Reactive_Protein" name="C_Reactive_Protein"><br>
      <!-- <input type="email" placeholder="Enter Result" name="mail"><br>      -->
      <input type="text" placeholder="Enter Serum_T3_Estimation" name="Serum_T3_Estimation"><br>
      <input type="text" placeholder="Enter Serum_T4_Estimation" name="Serum_T4_Estimation"><br>
      <!-- <input type="text" placeholder="Enter sr._T.S.H._Estimation" name="Surname"><br> -->
      <input type="text" placeholder="Enter Free_T3_Estimation" name="Free_T3_Estimation"><br>
      <input type="text" placeholder="Enter Free_T4_Estimation" name="Free_T4_Estimation"><br>
      <!-- <input type="text" placeholder="Enter Method" name="Cases"><br> -->
      <!-- <input type="text" placeholder="Enter Comments" name="Room"><br> -->
      <input type="text" placeholder="Enter Serum_Cholesterol" name="Serum_Cholesterol">   <br>
      <input type="text" placeholder="Enter Serum_Triglyceride" name="Serum_Triglyceride"><br>
      <!-- <input type="email" placeholder="Enter S._HDL_Cholesterol" name="mail"><br>     
      <input type="mobile" placeholder="Enter S._LDL_Cholesterol" name="Mobile"><br>
      <input type="text" placeholder="Enter S._VLDL_Cholesterol" name="Address"><br> -->
      <input type="text" placeholder="Enter Total_Cholesterol_/HDL_Ratio" name="Total_Cholesterol_HDL_Ratio"><br>
      <input type="text" placeholder="Enter LDL_HDL_Ratio" name="LDL_HDL_Ratio"><br>
      <input type="text" placeholder="Enter Amount" name="Ammount"><br>
      
      <button class="button">Submit</button>
    </form>
    
    </div>
    </div>
    </div>
</div>
</body>
</html>
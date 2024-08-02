<?php
session_start();    
$Name = $_SESSION['Name'];
$No = $_SESSION['No'];
$Fasting_Blood_Glucose = $_SESSION['Fasting_Blood_Glucose'];
$Fasting_Urin_Glucose = $_SESSION['Fasting_Urin_Glucose'];
$Random_Blood_Glucose = $_SESSION['Random_Blood_Glucose'];
$Sr_Uric_Acid = $_SESSION['Sr_Uric_Acid'];
$Post_Prandial_Urine_Glucose = $_SESSION['Post_Prandial_Urine_Glucose'];
$Post_Prandial_Blood_Glucose = $_SESSION['Post_Prandial_Blood_Glucose'];
$Blood_Urea = $_SESSION['Blood_Urea'];
$Sr_Creatinine = $_SESSION['Sr_Creatinine'];
$SGPT = $_SESSION['SGPT'];
$SGOT = $_SESSION['SGOT'];
$HB = $_SESSION['HB'];
$RBC_Count = $_SESSION['RBC_Count'];
$PVC = $_SESSION['PVC'];
$MCV = $_SESSION['MCV'];
$MCH = $_SESSION['MCH'];
$MCHC = $_SESSION['MCHC'];
$RDW = $_SESSION['RDW'];
$WBC_Count = $_SESSION['WBC_Count'];
$C_Reactive_Protein = $_SESSION['C_Reactive_Protein'];
$Serum_T3_Estimation = $_SESSION['Serum_T3_Estimation'];
$Serum_T4_Estimation = $_SESSION['Serum_T4_Estimation'];
$Free_T3_Estimation = $_SESSION['Free_T3_Estimation'];
$Free_T4_Estimation = $_SESSION['Free_T4_Estimation'];
$Serum_Cholesterol = $_SESSION['Serum_Cholesterol'];
$Serum_Triglyceride = $_SESSION['Serum_Triglyceride'];
$Total_Cholesterol_HDL_Ratio = $_SESSION['Total_Cholesterol_HDL_Ratio'];
$LDL_HDL_Ratio = $_SESSION['LDL_HDL_Ratio'];
$Ammount = $_SESSION['Ammount'];

if($_SERVER["REQUEST_METHOD"] == "POST"){
include '../Db_Connect.php';


$Name_ = $_POST['Name'];
$No_ = $_POST['No'];
$Fasting_Blood_Glucose_ = $_POST['Fasting_Blood_Glucose'];
$Fasting_Urin_Glucose_ = $_POST['Fasting_Urin_Glucose'];
$Random_Blood_Glucose_ = $_POST['Random_Blood_Glucose'];
$Sr_Uric_Acid_ = $_POST['Sr_Uric_Acid'];
$Post_Prandial_Urine_Glucose_ = $_POST['Post_Prandial_Urine_Glucose'];
$Post_Prandial_Blood_Glucose_ = $_POST['Post_Prandial_Blood_Glucose'];
$Blood_Urea_ = $_POST['Blood_Urea'];
$Sr_Creatinine_ = $_POST['Sr_Creatinine'];
$SGPT_ = $_POST['SGPT'];
$SGOT_ = $_POST['SGOT'];
$HB_ = $_POST['HB'];
$RBC_Count_ = $_POST['RBC_Count'];
$PVC_ =$_POST['PVC'];
$MCV_ =$_POST['MCV'];
$MCH_ =$_POST['MCH'];
$MCHC_ = $_POST['MCHC'];
$RDW_ = $_POST['RDW'];
$WBC_Count_ = $_POST['WBC_Count'];
$C_Reactive_Protein_ = $_POST['C_Reactive_Protein'];
$Serum_T3_Estimation_ = $_POST['Serum_T3_Estimation'];
$Serum_T4_Estimation_ = $_POST['Serum_T4_Estimation'];
$Free_T3_Estimation_ = $_POST['Free_T3_Estimation'];
$Free_T4_Estimation_ = $_POST['Free_T4_Estimation'];
$Serum_Cholesterol_ = $_POST['Serum_Cholesterol'];
$Serum_Triglyceride_ =$_POST['Serum_Triglyceride'];
$Total_Cholesterol_HDL_Ratio_ =$_POST['Total_Cholesterol_HDL_Ratio'];
$LDL_HDL_Ratio_ =$_POST['LDL_HDL_Ratio'];
$Ammount_ =$_POST['Ammount'];

$sql = "UPDATE `results` SET `Name` = '$Name_', `Fasting_Blood_Glucose` = '$Fasting_Blood_Glucose_', `Fasting_Urin_Glucose` = '$Fasting_Urin_Glucose_', `Random_Blood_Glucose` = '$Random_Blood_Glucose_', `Sr_Uric_Acid` = '$Sr_Uric_Acid_', `Post_Prandial_Urine_Glucose` = '$Post_Prandial_Urine_Glucose_', `Post_Prandial_Blood_Glucose` = '$Post_Prandial_Blood_Glucose_', `Blood_Urea` = '$Blood_Urea_', `Sr_Creatinine` = '$Sr_Creatinine_', `SGPT` = '$SGPT_', `SGOT` = '$SGOT_', `HB` = '$HB_', `RBC_Count` = '$RBC_Count_', `PVC` = '$PVC_', `MCV` = '$MCV_', `MCH` = '$MCH_', `MCHC` = '$MCHC_', `RDW` = '$RDW_', `WBC_Count` = '$WBC_Count_', `C_Reactive_Protein` = '$C_Reactive_Protein_', `Serum_T3_Estimation` = '$Serum_T3_Estimation_', `Serum_T4_Estimation` = '$Serum_T4_Estimation_', `Free_T3_Estimation` = '$Free_T3_Estimation_', `Free_T4_Estimation` = '$Free_T4_Estimation_', `Serum_Cholesterol` = '$Serum_Cholesterol_', `Serum_Triglyceride` = '$Serum_Triglyceride_', `Total_Cholesterol_HDL_Ratio` = '$Total_Cholesterol_HDL_Ratio_', `LDL_HDL_Ratio` = '$LDL_HDL_Ratio_', `Ammount` = '$Ammount_' WHERE `results`.`No` = '$No_'";
$Uquery = mysqli_query($conn,$sql);

if($Uquery){
    header("location:AdminUpdateResult.php");
}else{
    echo "error";
}
}
    // echo $Name;
    // echo $No;
    // echo $Fasting_Blood_Glucose;
    // echo $Fasting_Urin_Glucose;
    // echo $Random_Blood_Glucose;
    // echo $Sr_Uric_Acid;
    // echo $Post_Prandial_Urine_Glucose;
    // echo $Post_Prandial_Blood_Glucose;
    // echo $Blood_Urea;
    // echo $Sr_Creatinine;
    // echo $SGPT;
    // echo $SGOT;
    // echo $HB;
    // echo $RBC_Count;
    // echo $PVC;
    // echo $MCV;
    // echo $MCH;
    // echo $MCHC;
    // echo $RDW;
    // echo $WBC_Count;
    // echo $C_Reactive_Protein;
    // echo $Serum_T3_Estimation;
    // echo $Serum_T4_Estimation;
    // echo $Free_T3_Estimation;
    // echo $Free_T4_Estimation;
    // echo $Serum_Cholesterol;
    // echo $Serum_Triglyceride;
    // echo $Total_Cholesterol_HDL_Ratio;
    // echo $LDL_HDL_Ratio;
    // echo $Ammount;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/UpdateResult.css">
    <title>Document</title>
</head>
<body>

<form action="UpdateResult.php" class="uform" method="POST">
     <h1 class="heading">Update Fields</h1>
     Mobile No. <br>
     <input type="text" placeholder="Enter Number" name="No" value="<?php echo $No?>"><br>
     Name <br>
      <input type="text" placeholder="Enter Name" name="Name" value="<?php echo $Name?>"><br>
      Fasting_Blood_Glucose <br>     
      <input type="text" placeholder="Enter Fasting_Blood_Glucose" name="Fasting_Blood_Glucose" value="<?php echo $Fasting_Blood_Glucose?>"><br>
      Fasting_Urin_Glucose <br>
      <input type="text" placeholder="Enter Fasting_Urin_Glucose" name="Fasting_Urin_Glucose" value="<?php echo $Fasting_Urin_Glucose?>"><br>
      Random_Blood_Glucose <br>
      <input type="text" placeholder="Enter Random_Blood_Glucose" name="Random_Blood_Glucose" value="<?php echo $Random_Blood_Glucose?>"><br>
      Sr_Uric_Acid <br>
      <input type="text" placeholder="Enter Sr._Uric_Acid" name="Sr_Uric_Acid" value="<?php echo $Sr_Uric_Acid?>"><br>
      Post_Prandial_Urine_Glucose <br>
      <input type="text" placeholder="Enter Post_Prandial_Urine_Glucose" name="Post_Prandial_Urine_Glucose" value="<?php echo $Post_Prandial_Urine_Glucose?>"><br>
      Post_Prandial_Blood_Glucose <br>
      <input type="text" placeholder="Enter Post_Prandial_Blood_Glucose" name="Post_Prandial_Blood_Glucose" value="<?php echo $Post_Prandial_Blood_Glucose?>"><br>
      Blood_Urea <br>
      <input type="text" placeholder="Enter Blood_Urea" name="Blood_Urea" value="<?php echo $Blood_Urea?>"><br>
      Sr_Creatinine<br>
      <input type="text" placeholder="Enter Sr._Creatinine" name="Sr_Creatinine" value="<?php echo $Sr_Creatinine?>"><br>
      SGPT<br>
      <input type="text" placeholder="Enter S.G.P.T" name="SGPT" value="<?php echo $SGPT?>"><br>
      SGOT <br>
      <input type="text" placeholder="Enter S.G.O.T" name="SGOT" value="<?php echo $SGOT?>"><br>  
      HB <br>   
      <input type="text" placeholder="Enter HB" name="HB" value="<?php echo $HB?>"><br>
      RBC_Count <br>
      <input type="text" placeholder="Enter R.B.C_Count" name="RBC_Count" value="<?php echo $RBC_Count?>"><br>
      PVC <br>
      <input type="text" placeholder="Enter P.C.V." name="PVC" value="<?php echo $PVC?>"><br>
      MCV<br>
      <input type="text" placeholder="Enter M.C.V." name="MCV" value="<?php echo $MCV?>"><br>
      MCH <br>
      <input type="text" placeholder="Enter M.C.H." name="MCH" value="<?php echo $MCH?>"><br>
      MCHC<br>
      <input type="text" placeholder="Enter M.C.H.C." name="MCHC" value="<?php echo $MCHC?>"><br>
      RDW <br>
      <input type="text" placeholder="Enter R.D.W." name="RDW" value="<?php echo $RDW?>"><br>
      WBC_Count <br>
      <input type="text" placeholder="Enter W.B.C._Count" name="WBC_Count" value="<?php echo $WBC_Count?>"><br>
      C_Reactive_Protein <br>
      <input type="text" placeholder="Enter C-Reactive_Protein" name="C_Reactive_Protein" value="<?php echo $C_Reactive_Protein?>"><br>
      Serum_T3_Estimation <br>
      <input type="text" placeholder="Enter Serum_T3_Estimation" name="Serum_T3_Estimation" value="<?php echo $Serum_T3_Estimation?>"><br>
      Serum_T4_Estimation <br>
      <input type="text" placeholder="Enter Serum_T4_Estimation" name="Serum_T4_Estimation" value="<?php echo $Serum_T4_Estimation?>"><br>
      Free_T3_Estimation <br>
      <input type="text" placeholder="Enter Free_T3_Estimation" name="Free_T3_Estimation" value="<?php echo $Free_T3_Estimation?>"><br>
      Free_T4_Estimation <br>
      <input type="text" placeholder="Enter Free_T4_Estimation" name="Free_T4_Estimation" value="<?php echo $Free_T4_Estimation?>"><br>
      Serum_Cholesterol <br>
      <input type="text" placeholder="Enter Serum_Cholesterol" name="Serum_Cholesterol" value="<?php echo $Serum_Cholesterol?>"><br>
      Serum_Triglyceride <br>
      <input type="text" placeholder="Enter Serum_Triglyceride" name="Serum_Triglyceride" value="<?php echo $Serum_Triglyceride?>"><br>
      Total_Cholesterol_HDL_Ratio <br>
      <input type="text" placeholder="Enter Total_Cholesterol_/HDL_Ratio" name="Total_Cholesterol_HDL_Ratio" value="<?php echo $Total_Cholesterol_HDL_Ratio?>"><br>
      LDL_HDL_Ratio <br>
      <input type="text" placeholder="Enter LDL_HDL_Ratio" name="LDL_HDL_Ratio" value="<?php echo $LDL_HDL_Ratio?>"><br>
      Ammount <br>
      <input type="text" placeholder="Enter Amount" name="Ammount" value="<?php echo $Ammount?> RS/-"><br>
      <button class="button"><a href="AdminUpdateResult.php">Back</a></button>
      <button class="button">Update</button>  
</form>
       

</body>

</html>
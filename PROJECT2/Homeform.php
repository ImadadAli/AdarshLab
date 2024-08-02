<?php
   $Show = false;
   $ShowErr = false;
   if($_SERVER["REQUEST_METHOD"] == "POST"){

       include 'Db_Connect.php';
       $SurName = $_POST["Surname"];
       $Name = $_POST["Name"];
       $Age = $_POST["Age"];
       $Mail = $_POST["Mail"];
       $Mobile = $_POST["Mobile"];
       $Cases = $_POST["Cases"];
       $Address = $_POST["Address"];
      if(($Mobile != "") && strlen($Mobile) == 10){
      $sql = "INSERT INTO `home_visite` (`Surname`, `Name`, `Age`, `Email`, `Mobile_No`, `Cases`, `Address`) VALUES ('$SurName', '$Name', '$Age', '$Mail', '$Mobile', '$Cases', '$Address')";
      $result = mysqli_query($conn,$sql);
              
      if($result){
          $Show = true;
        }
      }else{
        $ShowErr = "sOMREFGN";
      }
    } 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Adarsh Laboratry&Pathology</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <style>
     
      
      
      .uform{
        text-align: center;   
        margin-top: 100px;    
      }
      .uform input{
        margin: 10px;
        width: 10cm;
        border-radius: 7px;
        border: 2x solid purple;
        height: 1cm;
      }
      .uform button{
        margin: 5px;
      }
     
      .btn{
        background-color: purple;
        color: white;
        font-weight: bold;
        margin-top: 10px;
      }
      h1{
        color: purple;
      }
      h4{
        font-weight: lighter;
      }
      .last{
        background-color: black;   
        color: white;
        justify-content: center;
        text-align: center;
        margin-top: 116px;
        height: 40px;
        
      } 
  
    </style>
</head>
<body>

  <nav class="navbar navbar-expand-lg bg-dark ">
    <div class="container-fluid ">
      <a class="navbar-brand " style="color:white;" href="UserLoginHome.php">Home</a>
    </div>
  </nav>
  <?php
    if($Show){
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
 
  <div> 
    <form action="Homeform.php" class="uform" method="POST">
      <h1>Home Visit Form</h1>
     <h4>Feel the following details</h4>
     
      <input type="text" placeholder="Enter Your Surname" name="Surname"><br>
      <input type="text" placeholder="Enter Your Name" name="Name"><br>
      <input type="text" placeholder="Enter Your Age" name="Age"><br>
      <input type="email" placeholder="Enter Your E-mail" name="Mail"><br>     
      <input type="mobile" placeholder="Enter Your Mobile" name="Mobile"><br>
      <input type="text" placeholder="Enter Your Cases" name="Cases"><br>
      <input type="text" placeholder="Enter Your Address" name="Address"><br>
      
      <button class="btn">Submit</button>
    </form>
  </div>

     <div class="last"><p>© Copyright 2022 Adarsh. All Right Reserved.</p></div>

</body>
</html>
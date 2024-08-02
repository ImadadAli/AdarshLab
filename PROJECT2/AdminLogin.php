<?php
   $login = false;
   $ShowErr = false;
  
   if($_SERVER["REQUEST_METHOD"] == "POST"){
       include 'Db_Connect.php ';
       $Admin = $_POST["UserName"];
       $eml = $_POST["Email"];
       $Password = $_POST["Pass"];
       if($Admin != ""){
        
      $sql = "Select *from admin_login where Email='$eml' and Password='$Password'";
      $result = mysqli_query($conn,$sql);
      $num = mysqli_num_rows($result);

      if($num == 1){
        $login = true;
        session_start();
        $_SESSION['logedin'] = true;
        $_SESSION['Admin'] = $Admin;
        header("location:Admin/AdminDashbord.php");
      }else{
        $ShowErr = "User Invalid";
      }
    }else{
      $ShowErr = "User Invalid";
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
      
      .lia{
        font-size: 20px;
        padding: 0px 10px;
       
       }
       .ulmain{
         margin-left: 357px;
       }
       .navbar a:hover{
         text-decoration: underline;
       }
       .logo{
         color:green;
         margin-left: 30px;
         font-size: 40px;
         font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
       }
       nav button{
         background-color: white;
       }
    </style>
</head>
<body>
  <nav class="navbar navbar-expand-lg bg-dark">
    <div class="container-fluid navbar">
      <div class="logo">ADARSH</div>
      <div class="collapse navbar-collapse" id="navbarScroll">
    <ul class="navbar-nav me-auto my-2 my-lg-0 navbar-nav-scroll ulmain" style="--bs-scroll-height: 100px;">
          <li class="nav-item lia">
            <a class="nav-link active" style="color:white;" href="Home.html">Home</a>
          </li> 
          <li class="nav-item lia">
            <a class="nav-link active" aria-current="page" style="color:white;"  href="About.html">About Us</a>
          </li>
          <li class="nav-item lia">
            <a class="nav-link active" style="color:white;"  href="Contact.php">Contact Us</a>
          </li>
          <li class="nav-item lia">
            <a class="nav-link active" style="color:white;" href="Lab.html">Laboratory & Services</a>
          </li>
          <li class="nav-item dropdown lia">
            <a class="nav-link active dropdown-toggle justify-content-end" href="#" style="color:white;" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Login
            </a>
            <ul class="dropdown-menu bg-dark ">
              <li><a class="nav-link active" style="color:white;" href="UserLogin.php">User Login</a></li>
              <li><a class="nav-link active" style="color:white;" href="#">Admin Login</a></li>
             
            </ul>
          </li>
      </ul>
      </div>
    </div>
  </nav>
  <?php
    if($ShowErr){
        echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
          <strong>ERROR! </strong>Something went wrong
          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>';
    }
  ?>
  <div> 
    <form action="#" class="uform" method="POST">
      <h1>Admin Login</h1>
     <h4> Use your Own Lab account</h4>
     <input type="text" placeholder="Enter User Name" name="UserName"><br>
      <input type="email" placeholder="Enter Your E-mail" name="Email"><br>
      <input type="Password" placeholder="Enter Your Password" name="Pass"><br>
      <p>Don't Worry your data will not be shared with anyone <br></p>
      <button class="btn">Log In</button>
    </form>
  </div>

     <div class="last"><p>© Copyright 2022 Adarsh. All Right Reserved.</p></div>

</body>
</html>
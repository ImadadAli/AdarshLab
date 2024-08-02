<?php
    $Show = false;
    $ShowErr = false;
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        include 'Db_Connect.php ';
        $FirstName = $_POST["FirstName"];
        $LastName = $_POST["LastName"];
        $Email = $_POST["Email"];
        $Mobile = $_POST["Mobile"];
        $Message = $_POST["Message"];
        

       

            $sql = "INSERT INTO `contacts` (`Name`, `LastName`, `Email`, `Mobile`, `Message`) VALUES ('$FirstName', '$LastName', '$Email', '$Mobile', '$Message')";
            $result = mysqli_query($conn,$sql);
               
            if($result){
               $Show = true;
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
    <link rel="stylesheet" href="style.css">
    <style>
        .Contactimg{
            margin-left: 50px;
            margin-top: 50px;
        }
        .slast{
      
        
            background-color: purple;
            height: 70px;
          }
          .slast h1{
            color: whitesmoke;
            text-align: center;
          }
          .footer{
            margin-top: -10px;
            background-color: black;
            height: 400px;
          }
          
          .mf{
           
            margin-top: 100px;
          }
         
          .mf h3{
            color: white;
            margin-bottom: 50px;
          }
          .mf li{
            color: white;
          }
          .last{
           
            color: white;
            justify-content: center;
            margin-top: 50px;
            margin-bottom: 30px;
          }
          .Contactmain{
            height: 16cm;

          }
          .Contactform12{
            margin-top : 1cm;
            text-align: center;
        

          }
          .Contactform12 input {
            
            margin: 10px; 
            width: 11cm;
            height: 1cm;
            border: 2x solid purple;
            border-radius: 7px;
          }
          #message{
            height: 2cm;
          }
          .btn{
            background-color: purple;
            color: white;
            font-weight: bold;
            margin-top: 10px;
          }
          .conhead{
            text-align: center;
            margin-top: 1cm;
                 
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
    <header>
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
                <a class="nav-link active" style="color:white;"  href="#">Contact Us</a>
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
                  <li><a class="nav-link active" style="color:white;" href="AdminLogin.php">Admin Login</a></li>
                 
                </ul>
              </li>
          </ul>
          </div>
        </div>
      </nav>

      <?php
      if($Show){
        echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>SUCCESS! </strong>Sended
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
       
               <div class="container-fluid Contactmain"   >
               
                       <div class="row">
                           <div class="col-5">
                               <img src="./projects_images/Contactimage.png"  alt="" class="img-fluid Contactimg">
                       </div>
                       <div class="col-7 Contactform">
                        <h1 class="conhead">Get in touch with us !</h1>
                            <form class="Contactform12" action="Contact.php" method="POST">
                                <input type="text" placeholder="First Name" name="FirstName">
                                <input type="text" placeholder="Last Name" name="LastName"><br>
                                <input type="email" placeholder="Email" name="Email"><br>
                                <input type="mobile" placeholder="Phone Number" name="Mobile"><br>
                                <input type="text" id="message" placeholder="Message" name="Message"><br>
                                <button class="btn">Submit Now</button>
                            </form>
                       </div>
                       
               </div>
           </div>
           </header>

           <div class="container-fluid slast">
            <h1 >Adarsh Laboratory & Pharmaceutical</h1>
          </div>
            
      
          <footer class="footer">
            <div class="container">
              <div class="row ">
                <div class="col-4 mf">
                  <h3>Quick Links</h3>
                  <li>Life Insurance</li>
                  <li>Home Insurance</li>
                  <li>Child Insurance</li>
                  <li>Family Health Plan</li>
                  <li>Family Health Plan</li>
                </div>
                <div class="col-4 mf">
                  <h3>RESOURCES</h3>
                  <li>The StarLab Brochure</li>
                  <li>KLT Brochure</li>
                  <li>Child Insurance</li>
                  <li>Natural Science and</li>
                  <li>Technology - Grades 4-7 </li>
                </div>
                <div class="col-4 mf">
                  <h3>QUICK LINKS</h3>
                  <li>Laboratories</li>
                  <li>Construction & Fencing</li>
                  <li>Child Insurance</li>
                  <li>Photo Gallery </li>
                  <li>Contact Us</li>
                </div>
                
              </div>
              <div class="row  last">© Copyright 2022 Adarsh. All Right Reserved. Designed by AivahThemes</div>
            </div>
            
          </footer>
</body>
</html>
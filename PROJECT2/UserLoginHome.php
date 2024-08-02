<?php
session_start();
  if(!isset($_SESSION['logedin']) || $_SESSION['logedin']!=true){
  header("location:UserLogin.php");
    exit;
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
        .slast{
      
            margin-top: 80px;
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
          .Ulhc{
            align-items: center;
          }
          .Ulhr h3{
            text-align: center;
          }
          .Ulhc button{
            background-color: purple;
            color: white;
            font-weight: bold;
            margin-top: 10px;
            margin-left: 120px;

          }
          #hv{
            width: 100px;
            margin-left: 120px;
          }
          #Hv{
            width: 159px;
            margin-left: 100px;
          }
          #sr{
            width: 100px;
            margin-left: 130px;
          }
          .ulhcon{
            margin-top: 80px;
          }
          .style{
            color: white;
            text-decoration: none;
          }
          .lia{
            font-size: 20px;
            padding: 0px 10px;
           
           }
           .ulmain{
             margin-left: 550px;
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
              <a class="nav-link active" style="color:white;" href="#">Home</a>
            </li> 
            <li class="nav-item lia">
              <a class="nav-link active" aria-current="page" style="color:white;"  href="Doctors.html">Doctors</a>
            </li>
            <li class="nav-item lia">
              <a class="nav-link active" style="color:white;"  href="Payment.html">Payment</a>
            </li>
            <li class="nav-item lia">
              <a class="nav-link active" style="color:white;" href="Feedback.php">feedback</a>
            </li>
            <li class="nav-item lia">
              <a class="nav-link active" style="color:white;" href="Logout.php">LogOut</a>
            </li>
        </ul>
        </div>
      </div>
    </nav>
              <div class="container-fluid "  style="background-color:rgb(210, 228, 234); " >
                      <div class="row">
                          <div class="col-6">
                              <img src="./projects_images/back.png"  alt="" class="img-fluid">
                             
                      </div>
                      <div class="col-6" style="padding: 50px;">
                             <h1 style="margin-top:200px;">Adarsh Labs & </h1><br>
                             <h1 style="margin-top:-20px;">Technology Foundation</h1><br>
                              <h2 style="margin-top:-20px;">Explore, Experience, Enrich</h2>
                              <button type="button" class="btn btn-dark">DONATE OR VOLUNTEER</button>
                             
                      </div>
                      
              </div>
          </div>
          </header>
          <div class="container ulhcon">

              <div class="row Ulhr">
                  <div class="col-4 Ulhc"> 
                    <img src="./projects_images/delivery.webp"  alt="" class="img" id="hv">
                    <h3>Book Home Visit</h3>
                    <button class="btn" href="Homevisit.html"><a href="Homeform.php" class="style">Submit now</a></button>
                </div>
                  <div class="col-4 Ulhc">
                    <img src="./projects_images/hospitalvisit.webp"  alt="" class="img" id="Hv">
                    <h3>Book hospital Visit</h3>
                    <button class="btn" href="Hospital.html"><a href="Hospitalform.php" class="style">Submit Now</a></button>
                  </div>
                  <div class="col-4 Ulhc">
                    <img src="./projects_images/clipbord-removebg-preview.png"  alt="" class="img" id="sr">
                    <h3>Show Result</h3>
                    <button class="btn"><a href="Result.php" class="style">Show Result</a></button>
                  </div>
                </div>
        </div>
          <div class="container-fluid slast">
            <h1>Adarsh Laboratory & Pharmaceutical</h1>
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
      
      
      
</body>
</html>
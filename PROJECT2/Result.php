<?php
    if($_SERVER["REQUEST_METHOD"] == "POST"){

      include 'Db_Connect.php';

        $Mobile = $_POST['Mobile'];
        // echo $Mobile;

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
    <title>Adarsh Laboratry&Pathology</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="style.css">
    <style>
      *{
        margin:0;
        padding:0;
      }
      header{
        margin-bottom: -120px;
      }
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
          .Contactform{
            margin-top: 4cm;
          }
          .Contactimg{
            margin-top: 4cm;
            margin-left: 5cm;
           
          }
          .styled-table {
              border-collapse: collapse;
              /* margin: 25px 0; */
              font-size: 0.9em;
              font-family: sans-serif;
              /* min-width: 400px; */
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
              padding: 12px 1px;
            text-align: center;
            width: 180px;
          }
          .styled-table tbody tr {
              border-bottom: 1px solid #dddddd;
          }

          .styled-table tbody tr:nth-of-type(even) {
              background-color: #f3f3f3;
              color: #009879;
          }

          .styled-table tbody tr:last-of-type {
              border-bottom: 2px solid #009879;
              
          }
          .Table{
              
              margin-bottom: 80px;
              padding: 0px 2px;
              right: 1px;
              margin-left: 12cm;
              
          }
          th{
              border-bottom: 2px solid #009879 ;
          }
          .td{
              font-weight: bolder;
          }
          .button1{
            background-color: purple;
            color: white;
            font-weight: bold;
            margin-top: 5px;
            padding: 10px;
            border-radius: 7px;
            border: 0px black;
          }
    </style>    
</head>
<body>
    <header>
        <nav class="navbar navbar-expand-lg bg-dark ">
            <div class="container-fluid ">
              <a class="navbar-brand " style="color:white;" href="UserLoginHome.php">Home</a>
            </div>
          </nav>

       
               <div class="container-fluid Contactmain">
               
                       <div class="row">
                           <div class="col-5">
                               <img src="./projects_images/clipbord-removebg-preview.png"  alt="" class="img-fluid Contactimg">
                       </div>
                       <div class="col-7 Contactform">
                        <h1 class="conhead">Search Your Result</h1>
                            <form class="Contactform12" action="Result.php" method="POST">
                                <input type="text" placeholder="Enter Your Mobile No." name="Mobile"><br>
                                <button class="btn">Search</button>
                            </form>
                       </div>
                       
               </div>
           </div>
           </header>

           <div class="Table">
            <table class="styled-table">
                <?php
                if(isset($result))
                {
                    if(mysqli_num_rows($result) > 0){
                    while($row= mysqli_fetch_assoc($result)){
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
                    <td><?php echo $row['Ammount']?>/- RS.</td>
                </tr>
                <?php
                    }
                }
            }
        ?>
        
    </table>
    <!-- <button class="button1">Download</button> -->
       </div>

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
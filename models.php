<? ob_start(); ?>
<?php include('admin/db_connect.php'); ?>





<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Features | ElegoMotors</title>
     <!--favicon -->
    <link rel="icon" type="image/x-icon" href="assets\images\favicon.png">
    <!--discription -->
    <meta name="description" content="">
    <!--keywords -->
    <meta name="keywords" content="">
      <!--canonical -->
    <link rel="canonical" href="" />
   
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets\css\main.css">
    <link rel="stylesheet" href="assets/css/navbar.css" >
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script> 
 <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
<link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.2.1/css/fontawesome.min.css">

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.4/css/fontawesome.min.css" integrity="sha384-jLKHWM3JRmfMU0A5x5AkjWkw/EYfGUAGagvnfryNV3F9VqM98XiIH7VBGVoxVSc7" crossorigin="anonymous">

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css" integrity="sha512-YWzhKL2whUzgiheMoBFwW8CKV4qpHQAEuvilg9FAn5VJUDwKZZxkJNuGM4XkWuk94WCrrwslk8yWNGmY1EduTA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
 <!-- css file link -->
 <link rel="stylesheet" href="assets/css/models.css">:
<style>
 

  </style>


</head>
<body>

       <!--Nav section-->
       <?php include "nav.php";?>
    

       <!--Nav section-->
  
                         <div class="container back2" style="">
                           <a class=" anchor "style=" " href="features.php">back</a>
                <?php
                        if(isset($_GET['id'])){
                          ?>
                         
                         
                          <div class="row mb-5">
                            <div class=" col-lg-8 col-md-8 col-sm-12 " >
                              <!-- <div class="rounded-tablecorner"> -->
                        
                          <table class="table table-bordered table-striped roundedTable table1"style="">
              <thead>
                <tr>
                  <td>Feature</td>
                  <td>Specification</td>
                  <!-- <th >Image</th> -->
                  
                </tr>
                                        </thead>
                                        <tbody>
<?php
                          $edit_id = $_GET['id'];
                         $_SESSION['id']= $_GET['id'];
                          $show_query = mysqli_query($conn, "SELECT * FROM `features` WHERE id = $edit_id ");
                          if(mysqli_num_rows($show_query) > 0){
                             while($row = mysqli_fetch_assoc($show_query)){
                     
                           ?>
                   


 
                    <tr>
                    <th>Model</th>
                    <td><?php echo $row['model']; ?></td>
             </tr>
                     <tr style="background-color:#ABB2B9;">
                     <th>Range</th>
                    <td><?php echo $row['range']; ?></td>
                      </tr>
                     <tr>
                     <th>Maximum Load</th>
                    <td><?php echo $row['load_capacity']; ?></td>
                     </tr>
                     <tr style="background-color:#ABB2B9;">
                     <th >Tyres</th>
                    <td><?php echo $row['tyre_type']; ?></td>
                      </tr>
                      <tr>
                     <th>Braking</th>
                    <td><?php echo $row['braking']; ?></td>
                      </tr>
                      <tr style="background-color:#ABB2B9;">
                     <th >Rated Voltage</th>
                    <td><?php echo $row['rated_voltage']; ?></td>
                      </tr>
                      <tr>
                     <th>Controller</th>
                    <td><?php echo $row['controller']; ?></td>
                      </tr>
                      <tr style="background-color:#ABB2B9;">
                     <th>Battery</th>
                    <td><?php echo $row['battery_ratings']; ?></td>
                      </tr>

                      <tr style="background-color:#D6DBDF;">
                     <th>Battery Waranty</th>
                    <td><?php echo $row['battery_waranty']; ?></td>
            
                      </tr>
            <?php
            } 
            }
            else{
            echo "<div class='empty'>no product added</div>";
            };
            ?>
                      </tbody>
                   
                    </table>
          <!-- </div> -->
          </div>
          <div class=" col-lg-4 col-md-4 col-sm-12">
        <h1 style="color:#212529">Benfits</h1>
    <div class="card bg-white mb-5" style="border-radius:25px">
      <div class="card-body text-center">
        <p class="card-text"><i class='fas fa-tools' style='font-size:36px;color:green;float:left;'></i>Relaible After Sales</p>
      </div>
      
    </div>
    <div class="card bg-white mb-5" style="border-radius:25px">
      <div class="card-body text-center">
        <p class="card-text"><i class='fas fa-shopping-cart' style='font-size:36px;color:green;float:left;'></i>Spares Availability</p>
      </div>
    </div>
    <div class="card bg-white mb-5" style="border-radius:25px">
      <div class="card-body text-center">
        <p class="card-text"><i class='fas fa-building' style='font-size:36px;color:green;float:left;'></i>Multiple Outlets</p>
      </div>
    </div>
          
          </div>
          </div>
          </div>
          <div >
          <h3  class="line1"style="  ">Brighten Up Your Ride: Colorful Scooters to Choose</h3>
          </div>
          <div class="container-fluid mt-5 background1"style="  ">
          
                        <div class="row" >
             
                 
                       
                          
                     
                      
       
          
   
            <?php 
          
                         
              $show_query = mysqli_query($conn, "SELECT * FROM `features` WHERE id =".$_SESSION['id']." ");
              if(mysqli_num_rows($show_query) > 0){
                 while($row = mysqli_fetch_assoc($show_query)){
                 
                  $modelId = $row['mu_id'];
                  $parentModel = $row['model'];
                  $select_image = mysqli_query($conn, "SELECT * FROM `add_imge` WHERE parent_id = $modelId  && parent_model = $parentModel");
                  if(mysqli_num_rows($select_image) > 0){
                     while($row = mysqli_fetch_assoc($select_image)){
                       
                     
                               if(!empty($row["color"] && !empty($row["image"]) )){
               
               echo'
               <div  class="col-lg-3 col-md-6 col-sm-12" mt-5">';
              echo'
               <div  class="card  mt-5 ml-2 mb-2"style="height:300px;border-radius:20px;" >';

              echo '  <img src="admin/uploaded_img/'. $row["image"].'" class="img-size" alt="Product">';
              echo'<br>';
              echo'<br>';
              echo ' <h4 class="text-center "style="text-transform:uppercase">'. $row["color"].'</h4>';
            

                  
              
                 echo' </div>';
                 echo'<br>';
              echo' </div>';
           
            }    






                  ?>

                  <?php

                     }
                    }
 
                  }
                }
              }
          ?>
   
                                      
                                 
                                      </div>
                                    </div>
                                        </div>
                                    </div>
                                    
                                    
                                        </body>
                                        </html>
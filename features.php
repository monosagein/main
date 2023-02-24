
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

    <link rel="stylesheet" href="assets/css/main.css">
    <link rel="stylesheet" href="assets/css/features.css">
    <link rel="stylesheet" href="assets/css/navbar.css" >
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script> 
 <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
<link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css"> -->
  <!-- <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.1/dist/jquery.slim.min.js"></script> -->
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script> -->
   <!-- <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
     <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin> 
<script src=
        "https://code.jquery.com/jquery-3.3.1.min.js">
    </script> --> 
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" >
    <style>
         
                 .mobv h5{
                    text-align:center;
                }
            @media only screen and (min-width:0px and max-width:625px){
             
                
               .mobv h5{
                    text-align:justify;
                    line-height:2px;
                }
                 
           
            }
    
      </style>
</head>
<body>

       <!--Nav section-->
       <?php include "nav.php";?>
    
       <!-- Ends Nav section-->
    <div class="container-fluid mt-5">
        <div class="row text-center" >   
        
        <div class="col-lg-12 col-md-12 col-sm-12 bg-white mt-4 mb-4 mobv">
         
            <h1 class=" p-4 head1"style=" ">List of Models</h1>
                 <div class"mobvw">
            <h5 class="">Overview of scooty models available, including their key features, performance specifications, and pricing.</h5>
           <h5  class="">Detailed descriptions of each scooty model, including information on engine size, transmission, fuel efficiency, and top speed.</h5>
                </div>

        </div>
   </div>
 
           <div class="container";>   
     
        <?php
         
         $select_products = mysqli_query($conn, "SELECT * FROM `features`");
         if(mysqli_num_rows($select_products) > 0 ){
            while($row = mysqli_fetch_assoc($select_products)){
         
             $GLOBALS['id'] = $row['id'];
         $GLOBALS['modelId'] = $row['mu_id'];
            $GLOBALS['parentModel'] = $row['model'];
       
               $GLOBALS['range']= $row['range'];
               $GLOBALS['charging ']= $row['charging'];
                $GLOBALS['loadCapacity'] = $row['load_capacity'];

             
            $select_image = mysqli_query($conn, "SELECT * FROM `add_imge` WHERE parent_id = $modelId  && parent_model = $parentModel  ORDER BY id DESC limit 0,1");
         
            
            
               
   
         

        
       echo '<div calss="row">';
       echo' <div class=" col-lg-4 col-md-12 col-sm-12 mb-5  ">';
       



echo'<div class="card fcard" style="">';
echo'<figure class="star">';
 
           if(mysqli_num_rows($select_image) > 0 ){
          
            while( $row = mysqli_fetch_assoc($select_image)){ 
               
                  echo '  <img src="admin/uploaded_img/'. $row["image"].'" class=" card-img-top img-size" alt="Card image">';
              }
              };
              ?>


  
 

  
  
  <div class="card-body  carh ">
 
          
    <h4 class="card-title">Model: <td><?php echo $parentModel; ?></td> </h4>
  
    <h4 class="card-text">Range: <td><?php echo  $range; ?></td> </h4>
    
    <h4 class="card-text">Maximum Load: <td><?php echo $loadCapacity  ; ?></td> </h4>
     
    <h4 class="card-text">ChargingTime: <td><?php echo $charging  ; ?></td> </h4>
   
    
      
    <!-- <a  name="show" data-toggle="modal" data-target="#myModal" class="btn btn-primary"> -->
      <a  class="btn btn-danger bttn-h" href="models.php?id=<?php echo $id; ?>" >Read More</a>
           
  </div>
           </figcaption>
           </figure>
           </div>

           </div>

</div>
                                   

  
<?php 
            };
                                          }else{
                                             echo "<div class='empty'>no product added</div>";
                                          };
         
                                       ?>





        
</div>
          
        
        
                                    </div>
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
    


     <!-- Site footer -->
   
  <?php include "footer.php";?>
  
  <!--footer ends -->

</body>
</html>
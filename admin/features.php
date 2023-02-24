<?php ob_start(); ?>
<?php include('db_connect.php'); ?>
<?php include('verifySession.php');?>
<?php     
     
     //add feature
     
if(isset($_POST['add_feature'])){
   $b_model =      $_POST['model'];
   $b_range =      $_POST['range'];
   $load_capacity = $_POST['lcapacity'];
   $tyre_type =     $_POST['tyres'];
   $b_braking =     $_POST['braking'];
   $rated_voltage=  $_POST['voltage'];
   $b_controller=    $_POST['controller'];
   $battery_rating=   $_POST['battery'];
   $battery_charging=   $_POST['charging'];
   $battery_waranty= $_POST['waranty'];
   

   $date = date('Y-m-d');
   $random_number = rand(10000, 99999);
   $insert_query = mysqli_query($conn, "INSERT INTO `features`(`model`,`mu_id`,`range`,`load_capacity`,`tyre_type`, `braking`,`rated_voltage`,`controller`,`battery_ratings`,`charging`,`battery_waranty`,  `created_date`) 
   VALUES('$b_model','$random_number','$b_range','$load_capacity','$tyre_type','$b_braking','$rated_voltage','$b_controller','$battery_rating','$battery_charging','$battery_waranty','$date')") or die('query failed');

   if($insert_query){
   
      
      $message[] = 'product add succesfully';
      header('location:features.php');
   }else{
      $message[] = 'could not add the product';
      header('location:features.php');
   }
};
// delete feature

if(isset($_GET['delete'])){
   $delete_id = $_GET['delete'];
   $delete_query = mysqli_query($conn, "DELETE FROM `features` WHERE id = $delete_id ") or die('query failed');
   if($delete_query){
      header('location:features.php');
      $message[] = 'product has been deleted';
   }else{
      header('location:features.php');
      $message[] = 'product could not be deleted';
   };
};


//update feature
if(isset($_POST['update_feature'])){
   $update_p_id =  $_POST['update_p_id'];
   $update_b_model =      $_POST['u_model'];
   $update_b_range =      $_POST['u_range'];
   $update_load_capacity = $_POST['u_lcapacity'];
   $update_tyre_type =     $_POST['u_tyres'];
   $update_b_braking =     $_POST['u_braking'];
   $update_rated_voltage=  $_POST['u_voltage'];
   $update_b_controller=    $_POST['u_controller'];
   $update_battery_rating=   $_POST['u_battery'];
   $update_battery_charging=   $_POST['u_charging'];
   $update_battery_waranty= $_POST['u_waranty'];
  
   
      
      $update_query = mysqli_query($conn, "UPDATE `features` SET `model`='$update_b_model' , `range`='$update_b_range',`load_capacity`='$update_load_capacity',`tyre_type`='$update_tyre_type', `braking`='$update_b_braking',`rated_voltage` ='$update_rated_voltage' ,`controller`='$update_b_controller',`battery_ratings`='$update_battery_rating',`charging`=' $update_battery_charging',`battery_waranty`=' $update_battery_waranty' WHERE id = '$update_p_id'" ) ;

      if($update_query){
      
         $message[] = 'product updated succesfully';
         header("refresh:1; url=features.php"); 
       
   
   
      }
      
      else{
         $message[] = 'product could not be updated';
        
      }
  
};
// pagination

$per_page_record = 10;  // Number of entries to show in a page.   
// Look for a GET variable page if not found default is 1.        
if (isset($_GET["page"])) {    
    $page  = $_GET["page"];    
}    
else {    
  $page=1;    
}    

$start_from = ($page-1) * $per_page_record;     

$query = "SELECT * FROM features LIMIT $start_from, $per_page_record";     
$rs_result = mysqli_query ($conn, $query);    
?>    
  <!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Elego Motor || Features</title>
    <!--favicon -->
    <link rel="icon" type="image/x-icon" href="uploaded_img\favicon.png">
    <!--discription -->
    <meta name="description" content="">
    <!--keywords -->
    <meta name="keywords" content="">
      <!--canonical -->
    <link rel="canonical" href="" />
   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="assets\css\main.css" >
   <!-- Latest compiled and minified CSS -->
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
   

  <style>
  body{
       background-color:#d9edf7;
  }
            .main {
  margin-left: 160px; /* Same as the width of the sidenav */
  font-size: 16px; /* Increased text to enable scrolling */
  padding: 0px 10px;
 
}
   </style>

</head>
<body>
<?php include ('sidebar.php') ;?>
<?php

if(isset($message)){
   foreach($message as $message){
      ?>
    <div class="message"><span><?php echo $message?></span> <i class="fas fa-times" onclick="this.parentElement.style.display = 'none';"></i> </div>
      <?php
   };
};

?>

<!--nav-->
<nav style="height:50px;width:100%;">
  <h3 style="margin-left:200px;padding-top:10px;color:#337ab7;">Add Models</h3>
</nav>
<hr class="line">

<div class="main">

<div class="container">
   <!-- form for adding -->
   <div class="row">
       
<form action="" method="POST"  enctype="multipart/form-data" >
            
      <div class="col col-lg-3"></div>
      <div class="col-lg-6 col-md-8 col-sm-12 mt-4 pt-4 bg-white" style="border-radius:20px;">
          <h3 class="text-info text-center">ADD NEW MODEL</h3>
          <br>
      <div class="col-lg-12  col-md-12 col-sm-12 mb-2">
      <input type="text" class="form-control" id="model" placeholder="Enter Model " name="model">
      </div>
      <div class="col-lg-12 col-md-12 col-sm-12 mb-2">
  <input type="text" class="form-control" placeholder="Enter Range" name="range">
      </div>
      <div class="col-lg-12  col-md-12 col-sm-12 mb-2">
    <input type="text" class="form-control" id="lcapacity" placeholder="Enter Load Capacity " name="lcapacity">
      </div>
      <div class="col-lg-12 col-md-12 col-sm-12 mb-2">
 <input type="text" class="form-control" placeholder=" Type of Tyres " name="tyres">
      </div>
      <div class="col-lg-12  col-md-12 col-sm-12 mb-2">
      <input type="text" class="form-control" id="braking" placeholder=" Enter Braking" name="braking">
      </div>
      <div class="col-lg-12 col-md-12 col-sm-12 mb-2">
   <input type="text" class="form-control" placeholder="Enter Rated Voltage" name="voltage">
      </div>
      <div class="col-lg-12  col-md-12 col-sm-12 mb-2">
    <input type="text" class="form-control" id="controller" placeholder="Enter Controller" name="controller">
      </div>
      <div class="col-lg-12 col-md-12 col-sm-12 mb-2">
   <input type="text" class="form-control" placeholder="Enter Battery Ratings" name="battery">
      </div>
       <div class="col-lg-12 col-md-12 col-sm-12 mb-2">
   <input type="text" class="form-control" placeholder="Enter Charging Time" name="charging">
      </div>
      <div class="col-lg-12  col-md-12 col-sm-12 mb-2">
      <input type="text" class="form-control" id="waranty" placeholder="Enter Battery Waranty" name="waranty">
      </div>
    
      <div class=" form-group col-lg-12 mb-5">
      <input  type="submit" name="add_feature" class=" btn-block btn-info  mt-3 ">
      </div>
    
</div>
 
  </form>
</div>
 <!-- form for adding -->
 <!-- display -->
        <div class ="row pt-5">

       

<!-- <section class="display-product-table"> -->
 
     <table  class= "table table-striped table-class table-bordered">
              <thead>
                <tr>
                     <th scope="col" class="bg-primary text-light text-center">S.No</th>
                  <th scope="col" class="bg-primary text-light text-center">Id</th>
                  <th scope="col" class="bg-primary text-light text-center">Model</th>
                  <th scope="col" class="bg-primary text-light text-center">Range</th>
                  <th scope="col" class="bg-primary text-light text-center">LoadCapacity</th>
                  <th scope="col" class="bg-primary text-light text-center">TyreType</th>
                  <th scope="col" class="bg-primary text-light text-center">Braking</th>
                  <th scope="col" class="bg-primary text-light text-center">RatedVoltage</th>
                  <th scope="col" class="bg-primary text-light text-center">Controller</th>
                  <th scope="col" class="bg-primary text-light text-center">BatteryRating</th>
                  <th scope="col" class="bg-primary text-light text-center">BatteryWaranty</th>
                   <th scope="col" class="bg-primary text-light text-center">Charging</th> 
                  <th scope="col" class="bg-primary text-light text-center">Actions</th>
                  <th scope="col" class="bg-primary text-light text-center">Add Images</th>
                </tr>
</thead>
<tbody>
                <?php
         
                   $select_products = mysqli_query($conn, "SELECT * FROM `features`");
                   if(mysqli_num_rows($select_products) > 0 ){
                      while($row = mysqli_fetch_assoc($select_products))
                     /* while ($row = mysqli_fetch_array($rs_result))*/   {
                                 
                 ?>
                     
                    <tr>
                    <td><?php echo $row['id']; ?></td>
                    <td><?php echo $row['model']; ?></td>
                    <td><?php echo $row['range']; ?></td>
                    <td><?php echo $row['load_capacity']; ?></td>
                    <td><?php echo $row['tyre_type']; ?></td>
                    <td><?php echo $row['braking']; ?></td>
                    <td><?php echo $row['rated_voltage']; ?></td>
                    <td><?php echo $row['controller']; ?></td>
                    <td><?php echo $row['battery_ratings']; ?></td>
                    
                    <td><?php echo $row['battery_waranty']; ?></td>
                 
                     <td ><?php echo $row['charging']; ?></td>
                    <td>
                     <a href="features.php?edit=<?php echo $row['id'];?>" > <i class="fas fa-edit" ></i>  </a>
                     <a href="features.php?delete=<?php echo $row['id']; ?>" onclick="return confirm('are your sure you want to delete this?');"> <i class="fas fa-trash"></i>  </a>
                     </td>
                     <td>
                     
                     <a href="add_img.php?add=<?php echo $row['mu_id'];?>" > Click here to add </a>
                     </td>
                     </tr>
                  
                     
                   <?php
                                            
                                          
                             };    
                             }else{
                                echo "<div class='empty'>no product added</div>";
                             };
                          ?>
                   </tbody>
                    </table>
                           </div> 
                           </div>  
                           <!-- pagination -->     
   <div class="pagination">    
      <?php  
        $query = "SELECT COUNT(*) FROM features";     
        $rs_result = mysqli_query($conn, $query);     
        $row = mysqli_fetch_row($rs_result);     
        $total_records = $row[0];     
          
    echo "</br>";     
        // Number of pages required.   
        $total_pages = ceil($total_records / $per_page_record);     
        $pagLink = "";       
      
        if($page>=2){   
            echo "<a href='features.php?page=".($page-1)."'>  Prev </a>";   
        }       
        for ($i=1; $i<=$total_pages; $i++) {   
         if ($i == $page) {   
               $pagLink .= "<a class = 'active' href='features.php?page="  
                                                 .$i."'>".$i." </a>";   
           }               
           else  {   
               $pagLink .= "<a href='features.php?page=".$i."'>   
                                                 ".$i." </a>";     
           }   
 };          
        
        echo $pagLink;   
  
        if($page<$total_pages){   
            echo "<a href='features.php?page=".($page+1)."'>  Next </a>";   
        }   
  
      ?>    
      </div>  
  <div class="inline">   
      <input id="page" type="number" min="1" max="<?php echo $total_pages?>"   
      placeholder="<?php echo $page."/".$total_pages; ?>" required>   
      <button onClick="go2Page();">Go</button>   
     </div>    
    </div>   
  </div>  

   <?php
     // Modal 

   
   if(isset($_GET['edit'])){
      $edit_id = $_GET['edit'];
     
      $edit_query = mysqli_query($conn, "SELECT * FROM `features` WHERE id = $edit_id ");
      if(mysqli_num_rows($edit_query) > 0){
         while($fetch_edit = mysqli_fetch_assoc($edit_query)){
   ?> 
      <section>
         
      <form action="" method="post"  class="add-product-form " enctype="multipart/form-data">
     
     
      <input type="hidden" name="update_p_id"class="box" value="<?php echo $fetch_edit['id']; ?>">
      <div class="col col-lg-3"></div>
      <div class="col-lg-6 col-md-8 col-sm-12 mt-5 pt-5 mb-5 bg-white"style="border-radius:20px;">
      <div class="col-lg-12  col-md-12 col-sm-12 mb-2 " >
          <h2 class="text-center text-info">Update Details</h2><br>
      <input type="text" class="form-control" id="model" placeholder="Enter Model " name="u_model" value="<?php echo $fetch_edit['model']; ?>">
      </div>
      <div class="col-lg-12 col-md-12 col-sm-12 mb-2">
  <input type="text" class="form-control" placeholder="Enter Range" name="u_range" value="<?php echo $fetch_edit['range']; ?>">
      </div>
      <div class="col-lg-12  col-md-12 col-sm-12 mb-2">
    <input type="text" class="form-control" id="lcapacity" placeholder="Enter Load Capacity " name="u_lcapacity" value="<?php echo $fetch_edit['load_capacity']; ?>">
      </div>
      <div class="col-lg-12 col-md-12 col-sm-12 mb-2">
 <input type="text" class="form-control" placeholder=" Type of Tyres " name="u_tyres" value="<?php echo $fetch_edit['tyre_type']; ?>">
      </div>
      <div class="col-lg-12  col-md-12 col-sm-12 mb-2">
      <input type="text" class="form-control" id="braking" placeholder=" Enter Braking" name="u_braking" value="<?php echo $fetch_edit['braking']; ?>">
      </div>
      <div class="col-lg-12 col-md-12 col-sm-12 mb-2">
   <input type="text" class="form-control" placeholder="Enter Rated Voltage" name="u_voltage" value="<?php echo $fetch_edit['rated_voltage']; ?>">
      </div>
      <div class="col-lg-12  col-md-12 col-sm-12 mb-2">
    <input type="text" class="form-control" id="controller" placeholder="Enter Controller" name="u_controller" value="<?php echo $fetch_edit['controller']; ?>">
      </div>
      <div class="col-lg-12 col-md-12 col-sm-12 mb-2">
   <input type="text" class="form-control" placeholder="Enter Battery Ratings" name="u_battery" value="<?php echo $fetch_edit['battery_ratings']; ?>">
      </div>
      <div class="col-lg-12  col-md-12 col-sm-12 mb-2">
      <input type="text" class="form-control" id="waranty" placeholder="Enter charging time" name="u_charging" value="<?php echo $fetch_edit['charging']; ?>">
      </div>
      <div class="col-lg-12  col-md-12 col-sm-12 mb-2">
      <input type="text" class="form-control" id="waranty" placeholder="Enter Battery Waranty" name="u_waranty" value="<?php echo $fetch_edit['battery_waranty']; ?>"><br>
      </div>

    
 

      <div class="col-lg-12  col-md-12 col-sm-12 mb-2">
      <input type="submit" value="update"   name="update_feature" class="btn btn-block btn-info text-white" style=""><br>
      </div>
      </form>
    





















   <?php
            };
         };
         echo "<script>document.querySelector('.edit-form-container').style.display = 'flex';</script>";
      };
   ?>
   


</section>

</div>













</div>

<!-- custom js file link  -->
<script src="js/script.js"></script>
<script src="js\index.js"></script>
<script>   
    function go2Page()   
    {   
        var page = document.getElementById("page").value;   
        page = ((page><?php echo $total_pages; ?>)?<?php echo $total_pages; ?>:((page<1)?1:page));   
        window.location.href = 'features.php?page='+page;   
    }   
  </script>  

<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript">
  $(document).ready(function(){
         // Live Search
     $("#search").on("keyup",function(){
       var search_term = $(this).val();

       $.ajax({
         url: "ajax-live-search.php",
         type: "POST",
         data : {search:search_term },
         success: function(data) {
           $("#table-data").html(data);
         }
       });
     });
  });
</script>

</body>
</html>
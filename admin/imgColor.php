<?ob_start(); ?>
<?php include('db_connect.php'); ?>
<?php include('verifySession.php');?>
<?php


                                               
                                             
                              
                              
if(isset($_POST['add_image'])){


   $model=$_POST['model'];
   $color1= $_POST['add_color1'];
   $color2= $_POST['add_color2'];
   $color3= $_POST['add_color3'];
   $color4= $_POST['add_color4'];
   $color5= $_POST['add_color5'];
   $color6= $_POST['add_color6'];
   $color7= $_POST['add_color7'];
   $color8= $_POST['add_color8'];
   $color9= $_POST['add_color9'];
   $color10= $_POST['add_color10'];
  
   $p_image1 = $_FILES['p_image1']['name'];
   $p_image1_tmp_name = $_FILES['p_image1']['tmp_name'];
   $p_image1_folder = 'uploaded_img/'.$p_image1;
   $p_image2 = $_FILES['p_image2']['name'];
   $p_image2_tmp_name = $_FILES['p_image2']['tmp_name'];
   $p_image2_folder = 'uploaded_img/'.$p_image2;
   $p_image3 = $_FILES['p_image3']['name'];
   $p_image3_tmp_name = $_FILES['p_image3']['tmp_name'];
   $p_image3_folder = 'uploaded_img/'.$p_image3;
   $p_image4 = $_FILES['p_image4']['name'];
   $p_image4_tmp_name = $_FILES['p_image4']['tmp_name'];
   $p_image4_folder = 'uploaded_img/'.$p_image4;
   $p_image5 = $_FILES['p_image5']['name'];
   $p_image5_tmp_name = $_FILES['p_image5']['tmp_name'];
   $p_image5_folder = 'uploaded_img/'.$p_image5;
   $p_image6 = $_FILES['p_image6']['name'];
   $p_image6_tmp_name = $_FILES['p_image6']['tmp_name'];
   $p_image6_folder = 'uploaded_img/'.$p_image6;
   $p_image7 = $_FILES['p_image7']['name'];
   $p_image7_tmp_name = $_FILES['p_image7']['tmp_name'];
   $p_image7_folder = 'uploaded_img/'.$p_image7;
   $p_image8 = $_FILES['p_image8']['name'];
   $p_image8_tmp_name = $_FILES['p_image8']['tmp_name'];
   $p_image8_folder = 'uploaded_img/'.$p_image8;
   $p_image9 = $_FILES['p_image9']['name'];
   $p_image9_tmp_name = $_FILES['p_image9']['tmp_name'];
   $p_image9_folder = 'uploaded_img/'.$p_image9;
   $p_image10 = $_FILES['p_image10']['name'];
   $p_image10_tmp_name = $_FILES['p_image10']['tmp_name'];
   $p_image10_folder = 'uploaded_img/'.$p_image10;
if(isset($_POST['o_image1'])){

 $old_image1=$_POST['o_image1'];

   if($p_image1 != ""){

      $p_image1 =  $_FILES['p_image1']['name'];
      
   }else{
      $p_image1 = $old_image1;
   } 
}
if(isset($_POST['o_image2'])){
   $old_image2=$_POST['o_image2'];
   if($p_image2 != ""){

      $p_image2 =  $_FILES['p_image2']['name'];
      
   }else{
      $p_image2 = $old_image2;
   } 
}
if(isset($_POST['o_image3'])){
   $old_image3=$_POST['o_image3'];

   if($p_image3 != ""){

      $p_image3 =  $_FILES['p_image3']['name'];
      
   }else{
      $p_image3= $old_image3;
   } 
}
if(isset($_POST['o_image4'])){
   $old_image4=$_POST['o_image4'];

   if($p_image4 != ""){

      $p_image4 =  $_FILES['p_image4']['name'];
      
   }else{
      $p_image4 = $old_image4;
      
   } 
}
if(isset($_POST['o_image5'])){
   $old_image5=$_POST['o_image5'];

   if($p_image5 != ""){

      $p_image5 =  $_FILES['p_image5']['name'];
      
   }else{
      $p_image5 = $old_image5;
   } 
}
if(isset($_POST['o_image6'])){
   $old_image6=$_POST['o_image6'];

   if($p_image6 != ""){

      $p_image6 =  $_FILES['p_image6']['name'];
      
   }else{
      $p_image6 = $old_image6;
   } 
}
if(isset($_POST['o_image7'])){
   $old_image7=$_POST['o_image7'];

   if($p_image7 != ""){

      $p_image7 =  $_FILES['p_image7']['name'];
      
   }else{
      $p_image7 = $old_image7;
   } 
}
if(isset($_POST['o_image8'])){
   $old_image8=$_POST['o_image8'];

   if($p_image8 != ""){

      $p_image8 =  $_FILES['p_image8']['name'];
      
   }else{
      $p_image8 = $old_image8;
   } 
}
if(isset($_POST['o_image9'])){
   $old_image9=$_POST['o_image9'];

   if($p_image9 != ""){

      $p_image9 =  $_FILES['p_image9']['name'];
      
   }else{
      $p_image9 = $old_image9;
   } 
}
if(isset($_POST['o_image10'])){
   $old_image10=$_POST['o_image10'];

   if($p_image10 != ""){

      $p_image10 =  $_FILES['p_image10']['name'];
      
   }else{
      $p_image10 = $old_image10;
   } 
};
   $date = date('Y-m-d');

   $insert_query = mysqli_query($conn, "UPDATE features SET image1='$p_image1',image2='$p_image2',image3='$p_image3',image4='$p_image4',image5='$p_image5',image6='$p_image6',image7='$p_image7',image8='$p_image8',image9='$p_image9',image10='$p_image10',
   color1='$color1',color2='$color2',color3='$color3',color4='$color4',color5='$color5',color6='$color6',color7='$color7',color8='$color8',color9='$color9',color10='$color10' WHERE id = '$model' ") 
   or die('query failed');

   if($insert_query){
      move_uploaded_file($p_image1_tmp_name, $p_image1_folder);
      move_uploaded_file($p_image2_tmp_name, $p_image2_folder);
      move_uploaded_file($p_image3_tmp_name, $p_image3_folder);
      move_uploaded_file($p_image4_tmp_name, $p_image4_folder);
      move_uploaded_file($p_image5_tmp_name, $p_image5_folder);
      move_uploaded_file($p_image6_tmp_name, $p_image6_folder);
      move_uploaded_file($p_image7_tmp_name, $p_image7_folder);
      move_uploaded_file($p_image8_tmp_name, $p_image8_folder);
      move_uploaded_file($p_image9_tmp_name, $p_image9_folder);
      move_uploaded_file($p_image10_tmp_name, $p_image10_folder);
 
      $message[] = 'product add succesfully';
     
   }else{
      $message[] = 'could not add the product';

   }
};




























if(isset($_GET['delete'] ) =='image1'){
   $delete_id = $_GET['delete'];


  // $delete_query = mysqli_query($conn, "DELETE FROM `features` WHERE id = $delete_id ") or die('query failed');
 $updat_query = mysqli_query($conn,"UPDATE `features` SET `color1`=null,`image1`=null   WHERE image1 ='$delete_id'");
 if($updat_query){ 
      
      header('location:features.php');
      $message[] = 'product has been deleted';
   }else{

      header('location:features.php');
      $message[] = 'product could not be deleted';
   };
 }
if (isset($_GET['delete']) == 'image2'){
   $delete_id = $_GET['delete'];
   // $delete_query = mysqli_query($conn, "DELETE FROM `features` WHERE id = $delete_id ") or die('query failed');
  $updat_query = mysqli_query($conn,"UPDATE `features` SET `color2`=null,`image2`=null   WHERE image2 ='$delete_id'");
  if($updat_query){ 
      
   header('location:features.php');
   $message[] = 'product has been deleted';
}else{

   header('location:features.php');
   $message[] = 'product could not be deleted';
};
}



  
 if (isset($_GET['delete']) =='image3'){
   $delete_id = $_GET['delete'];
   // $delete_query = mysqli_query($conn, "DELETE FROM `features` WHERE id = $delete_id ") or die('query failed');
  $updat_query = mysqli_query($conn,"UPDATE `features` SET `color3`=null,`image3`=null   WHERE image3 ='$delete_id'");
  if($updat_query){ 
      
   header('location:features.php');
   $message[] = 'product has been deleted';
}else{

   header('location:features.php');
   $message[] = 'product could not be deleted';
};







  }
if (isset($_GET['delete']) == 'image4'){
   $delete_id = $_GET['delete'];
   // $delete_query = mysqli_query($conn, "DELETE FROM `features` WHERE id = $delete_id ") or die('query failed');
  $updat_query = mysqli_query($conn,"UPDATE `features` SET `color4`=null,`image4`=null   WHERE image4 ='$delete_id'");

  if($updat_query){ 
      
   header('location:features.php');
   $message[] = 'product has been deleted';
}else{

   header('location:features.php');
   $message[] = 'product could not be deleted';
};








  }
 if (isset($_GET['delete']) == 'image5'){
   $delete_id = $_GET['delete'];
   // $delete_query = mysqli_query($conn, "DELETE FROM `features` WHERE id = $delete_id ") or die('query failed');
  $updat_query = mysqli_query($conn,"UPDATE `features` SET `color5`=null,`image5`=null   WHERE image5 ='$delete_id'");
  if($updat_query){ 
      
   header('location:features.php');
   $message[] = 'product has been deleted';
}else{

   header('location:features.php');
   $message[] = 'product could not be deleted';
};






  }
 if (isset($_GET['delete']) == 'image6'){
   $delete_id = $_GET['delete'];
   // $delete_query = mysqli_query($conn, "DELETE FROM `features` WHERE id = $delete_id ") or die('query failed');
  $updat_query = mysqli_query($conn,"UPDATE `features` SET `color6`=null,`image6`=null   WHERE image6 ='$delete_id'");

  if($updat_query){ 
      
   header('location:features.php');
   $message[] = 'product has been deleted';
}else{

   header('location:features.php');
   $message[] = 'product could not be deleted';
};





  }
 if (isset($_GET['delete']) == 'image7'){
   $delete_id = $_GET['delete'];
   // $delete_query = mysqli_query($conn, "DELETE FROM `features` WHERE id = $delete_id ") or die('query failed');
  $updat_query = mysqli_query($conn,"UPDATE `features` SET `color7`=null,`image7`=null   WHERE image7 ='$delete_id'");

  if($updat_query){ 
      
   header('location:features.php');
   $message[] = 'product has been deleted';
}else{

   header('location:features.php');
   $message[] = 'product could not be deleted';
};





  }
 if (isset($_GET['delete']) =='image8'){
   $delete_id = $_GET['delete'];
   // $delete_query = mysqli_query($conn, "DELETE FROM `features` WHERE id = $delete_id ") or die('query failed');
  $updat_query = mysqli_query($conn,"UPDATE `features` SET `color8`=null,`image8`=null   WHERE image8 ='$delete_id'");
  if($updat_query){ 
      
   header('location:features.php');
   $message[] = 'product has been deleted';
}else{

   header('location:features.php');
   $message[] = 'product could not be deleted';
};







  }
  if (isset($_GET['delete']) == 'image9'){
   $delete_id = $_GET['delete'];
   // $delete_query = mysqli_query($conn, "DELETE FROM `features` WHERE id = $delete_id ") or die('query failed');
  $updat_query = mysqli_query($conn,"UPDATE `features` SET `color9`=null,`image9`=null   WHERE image9 ='$delete_id'");
  if($updat_query){ 
      
   header('location:features.php');
   $message[] = 'product has been deleted';
}else{

   header('location:features.php');
   $message[] = 'product could not be deleted';
};





  }
  if (isset($_GET['delete'])=='image10'){
   $delete_id = $_GET['delete'];
   // $delete_query = mysqli_query($conn, "DELETE FROM `features` WHERE id = $delete_id ") or die('query failed');
  $updat_query = mysqli_query($conn,"UPDATE `features` SET `color10`=null,`image10`=null   WHERE image10 ='$delete_id'");

  if($updat_query){ 
      
   header('location:features.php');
   $message[] = 'product has been deleted';
}else{

   header('location:features.php');
   $message[] = 'product could not be deleted';
};




  }
 /*if($updat_query){ 
      
      header('location:features.php');
      $message[] = 'product has been deleted';
   }else{

      header('location:features.php');
      $message[] = 'product could not be deleted';
   };*/


if(isset($_POST['update_image'])){
             $u_id =$_POST['u_p_id'];
   $u_color1= $_POST['u_color1'];
   $u_color2= $_POST['u_color2'];
   $u_color3= $_POST['u_color3'];
   $u_color4= $_POST['u_color4'];
   $u_color5= $_POST['u_color5'];
   $u_color6= $_POST['u_color6'];
   $u_color7= $_POST['u_color7'];
   $u_color8= $_POST['u_color8'];
   $u_color9= $_POST['u_color9'];
   $u_color10= $_POST['u_color10'];

   $u_image1 = $_FILES['u_image1']['name'];
   $u_image1_tmp_name = $_FILES['u_image1']['tmp_name'];
   $u_image1_folder = 'uploaded_img/'.$u_image1;
   $u_image2 = $_FILES['u_image2']['name'];
   $u_image2_tmp_name = $_FILES['u_image2']['tmp_name'];
   $u_image2_folder = 'uploaded_img/'.$u_image2;
   $u_image3 = $_FILES['u_image3']['name'];
   $u_image3_tmp_name = $_FILES['u_image3']['tmp_name'];
   $u_image3_folder = 'uploaded_img/'.$u_image3;
   $u_image4 = $_FILES['u_image4']['name'];
   $u_image4_tmp_name = $_FILES['u_image4']['tmp_name'];
   $u_image4_folder = 'uploaded_img/'.$u_image4;
   $u_image5 = $_FILES['u_image5']['name'];
   $u_image5_tmp_name = $_FILES['u_image5']['tmp_name'];
   $u_image5_folder = 'uploaded_img/'.$u_image5;
   $u_image6 = $_FILES['u_image6']['name'];
   $u_image6_tmp_name = $_FILES['u_image6']['tmp_name'];
   $u_image6_folder = 'uploaded_img/'.$u_image6;
   $u_image7 = $_FILES['u_image7']['name'];
   $u_image7_tmp_name = $_FILES['u_image7']['tmp_name'];
   $u_image7_folder = 'uploaded_img/'.$u_image7;
   $u_image8 = $_FILES['u_image8']['name'];
   $u_image8_tmp_name = $_FILES['u_image8']['tmp_name'];
   $u_image8_folder = 'uploaded_img/'.$u_image8;
   $u_image9 = $_FILES['u_image9']['name'];
   $u_image9_tmp_name = $_FILES['u_image9']['tmp_name'];
   $u_image9_folder = 'uploaded_img/'.$u_image9;
   $u_image10 = $_FILES['u_image10']['name'];
   $u_image10_tmp_name = $_FILES['u_image10']['tmp_name'];
   $u_image10_folder = 'uploaded_img/'.$u_image10;

   if(isset($_POST['uo_image1'])){

      $old_image1=$_POST['uo_image1'];
     
        if($u_image1 != ""){
     
           $u_image1 =  $_FILES['u_image1']['name'];
           
        }else{
           $u_image1 = $old_image1;
        } 
     }
     if(isset($_POST['uo_image2'])){
        $old_image2=$_POST['uo_image2'];
        if($u_image2 != ""){
     
           $u_image2 =  $_FILES['u_image2']['name'];
           
        }else{
           $u_image2 = $old_image2;
        } 
     }
     if(isset($_POST['uo_image3'])){
        $old_image3=$_POST['uo_image3'];
     
        if($u_image3 != ""){
     
           $u_image3 =  $_FILES['u_image3']['name'];
           
        }else{
           $u_image3= $old_image3;
        } 
     }
     if(isset($_POST['uo_image4'])){
        $old_image4=$_POST['uo_image4'];
     
        if($u_image4 != ""){
     
           $u_image4 =  $_FILES['u_image4']['name'];
           
        }else{
           $u_image4 = $old_image4;
           
        } 
     }
     if(isset($_POST['uo_image5'])){
        $old_image5=$_POST['uo_image5'];
     
        if($u_image5 != ""){
     
           $u_image5 =  $_FILES['u_image5']['name'];
           
        }else{
           $u_image5 = $old_image5;
        } 
     }
     if(isset($_POST['uo_image6'])){
        $old_image6=$_POST['uo_image6'];
     
        if($u_image6 != ""){
     
           $u_image6 =  $_FILES['u_image6']['name'];
           
        }else{
           $u_image6 = $old_image6;
        } 
     }
     if(isset($_POST['uo_image7'])){
        $old_image7=$_POST['uo_image7'];
     
        if($u_image7 != ""){
     
           $u_image7 =  $_FILES['u_image7']['name'];
           
        }else{
           $u_image7 = $old_image7;
        } 
     }
     if(isset($_POST['uo_image8'])){
        $old_image8=$_POST['uo_image8'];
     
        if($u_image8 != ""){
     
           $u_image8 =  $_FILES['u_image8']['name'];
           
        }else{
           $u_image8 = $old_image8;
        } 
     }
     if(isset($_POST['uo_image9'])){
        $old_image9=$_POST['uo_image9'];
     
        if($u_image9 != ""){
     
           $u_image9 =  $_FILES['u_image9']['name'];
           
        }else{
           $u_image9 = $old_image9;
        } 
     }
     if(isset($_POST['uo_image10'])){
        $old_image10=$_POST['uo_image10'];
     
        if($u_image10 != ""){
     
           $u_image10 =  $_FILES['u_image10']['name'];
           
        }else{
           $u_image10 = $old_image10;
        } 
     };



  
  
   /*if(file_exists("uploaded_img/" .$_FILES['update_p_image']['name'])){
      $filename=  $_FILES['update_p_image']['name'];
      echo '<script>alert("file already exists")</script>';
     
   } else{*/
      
      $update_query = mysqli_query($conn, "UPDATE `features` SET      
      
      `color1`='$u_color1',`color2`='$u_color2',`color3`='$u_color3',`color4`='$u_color4',`color5`='$u_color5',
       `color6`='$u_color6',`color7`='$u_color7',`color8`='$u_color8',`color9`='$u_color9',`color10`='$u_color10',
       `image1`='$u_image1',`image2`='$u_image2',`image3`='$u_image3 ',`image4`='$u_image4 ',`image5`='$u_image5',
       `image6`='$u_image6',`image7`='$u_image7',`image8`='$u_image8',`image9`='$u_image9',`image10`='$u_image10'
       WHERE id='$u_id'") ;

      if($update_query){
         move_uploaded_file($u_image1_tmp_name, $u_image1_folder);
         move_uploaded_file($u_image2_tmp_name, $u_image2_folder);
         move_uploaded_file($u_image3_tmp_name, $u_image3_folder);
         move_uploaded_file($u_image4_tmp_name, $u_image4_folder);
         move_uploaded_file($u_image5_tmp_name, $u_image5_folder);
         move_uploaded_file($u_image6_tmp_name, $u_image6_folder);
         move_uploaded_file($u_image7_tmp_name, $u_image7_folder);
         move_uploaded_file($u_image8_tmp_name, $u_image8_folder);
         move_uploaded_file($u_image9_tmp_name, $u_image9_folder);
         move_uploaded_file($u_image10_tmp_name, $u_image10_folder);



        
         $message[] = 'product updated succesfully';
         header("refresh:1; url=features.php"); 
       
   
   
      }
     
  
};



?>




































     <!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Elego Motor || Features</title>
   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
  

<!-- custom css file link  -->
  

   <link rel="stylesheet"  
    href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">  

  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.1/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  
   

  <style>
            .main {
  margin-left: 160px; /* Same as the width of the sidenav */
  font-size: 16px; /* Increased text to enable scrolling */
  padding: 0px 10px;
  background-color:#d9edf7;
}
.box1{
   margin-top:5px;
}
.box1 input{
   margin-bottom:5px;

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

<div class="main">
    <?php
if(isset($_GET['add'])){


 $GLOBALS['edit_model'] = $_GET['add'];

$get_query = mysqli_query($conn, "SELECT * FROM features WHERE id = $edit_model");
if(mysqli_num_rows($get_query) > 0){
   while($row = mysqli_fetch_assoc($get_query)){
    ?>


  


<div class="container">

<form action="" method="post"  class="add-product-form" enctype="multipart/form-data">


<input type="hidden" name="model"class="box" value="<?php echo $row['id']; ?>">

<div class="col-lg-4 box1 col-md-12 col-sm-12 ">
<input type="text" class="form-control" id="waranty" placeholder="add color" name="add_color1" value="<?php echo $row['color1'];?>"  >

<input type="file" name="p_image1" accept="image/png, image/jpg, image/jpeg" class="form-control">
<input type="hidden" name="o_image1"  value="<?php echo $row['image1'];?>" >
</div>
<div class="col-lg-4 box1  col-md-12 col-sm-12 ">
<input type="text" class="form-control" id="waranty" placeholder="add color" name="add_color2" value="<?php echo $row['color2'];?>" >
<input type="hidden" name="o_image1"  value="<?php echo $row['image1'];?>" >

<input type="file" name="p_image2" accept="image/png, image/jpg, image/jpeg" class="form-control" >
<input type="hidden" name="o_image2"  value="<?php echo $row['image2'];?>" >
</div>
<div class="col-lg-4 box1  col-md-12 col-sm-12 ">
<input type="text" class="form-control" id="waranty" placeholder="add color" name="add_color3" value="<?php echo $row['color3'];?>" >

<input type="file" name="p_image3" accept="image/png, image/jpg, image/jpeg" class="form-control" >
<input type="hidden" name="o_image3"  value="<?php echo $row['image3'];?>" >
</div>
<div class="col-lg-4 box1   col-md-12 col-sm-12 ">
<input type="text" class="form-control" id="waranty" placeholder="add color" name="add_color4" value="<?php echo $row['color4'];?>" >

<input type="file" name="p_image4" accept="image/png, image/jpg, image/jpeg" class="form-control" >
<input type="hidden" name="o_image4"  value="<?php echo $row['image4'];?>" >
</div>
<div class="col-lg-4 box1  col-md-12 col-sm-12 ">
<input type="text" class="form-control" id="waranty" placeholder="add color" name="add_color5" value="<?php echo $row['color5'];?>" >

<input type="file" name="p_image5" accept="image/png, image/jpg, image/jpeg" class="form-control" >
<input type="hidden" name="o_image5"  value="<?php echo $row['image5'];?>" >
</div>
<div class="col-lg-4 box1  col-md-12 col-sm-12 ">
<input type="text" class="form-control" id="waranty" placeholder="add color" name="add_color6" value="<?php echo $row['color6'];?>" >

<input type="file" name="p_image6" accept="image/png, image/jpg, image/jpeg" class="form-control" >
<input type="hidden" name="o_image6"  value="<?php echo $row['image6'];?>" >
</div>
<div class="col-lg-4 box1  col-md-12 col-sm-12 ">
<input type="text" class="form-control" id="waranty" placeholder="add color" name="add_color7" value="<?php echo $row['color7'];?>" >

<input type="file" name="p_image7" accept="image/png, image/jpg, image/jpeg" class="form-control" >
<input type="hidden" name="o_image7"  value="<?php echo $row['image7'];?>" >
</div>
<div class="col-lg-4 box1   col-md-12 col-sm-12 ">
<input type="text" class="form-control" id="waranty" placeholder="add color" name="add_color8" value="<?php echo $row['color8'];?>">

<input type="file" name="p_image8" accept="image/png, image/jpg, image/jpeg" class="form-control" >
<input type="hidden" name="o_image8"  value="<?php echo $row['image8'];?>" >
</div>
<div class="col-lg-4 box1  col-md-12 col-sm-12 ">
<input type="text" class="form-control" id="waranty" placeholder="add color" name="add_color9" value="<?php echo $row['color9'];?>" >

<input type="file" name="p_image9" accept="image/png, image/jpg, image/jpeg" class="form-control" >
<input type="hidden" name="o_image9"  value="<?php echo $row['image9'];?>" >
</div>
<div class="col-lg-4 pt-4 box1 col-md-12 col-sm-12" style="margin-bottom:20px">
<input type="text" class="form-control" id="waranty" placeholder="add color" name="add_color10" value="<?php echo $row['color10'];?>">

<input type="file" name="p_image10" accept="image/png, image/jpg, image/jpeg" class="form-control" >
<input type="hidden" name="o_image10"  value="<?php echo $row['image10'];?>" >
</div>

<input type="submit" value="add the image"   name="add_image" class="btn btn-success">


</form>
   </div>
<?php
            };
         };
         echo "<script>document.querySelector('.edit-form-container').style.display = 'flex';</script>";
      
   ?>


 
        <div class="container mt-5">
    <div class="row" >
       
                   <?php
            
                      $select_products = mysqli_query($conn, "SELECT * FROM `features` WHERE id = '$edit_model'");
                      if(mysqli_num_rows($select_products) > 0 ){
                         while($row = mysqli_fetch_assoc($select_products)){
                        
       
                    
        
      
         if(!empty($row["image1"]) || !empty($row["image2"]) || !empty($row["image3"]) || !empty($row["image4"]) || !empty($row["image5"])|| !empty($row["image6"])|| !empty($row["image7"])|| !empty($row["image8"])|| !empty($row["image9"])|| !empty($row["image10"])){ 
            ?>
             
      
   
            
            
            <?php 
            for($x=0;$x<=10;$x++){
               if(!empty($row["color$x"])){
                  
                  echo '<div style="border:1px solid green;min-width:200px;min-height:200px;max-width:200px;max-height:200px" class=" col col-lg-4 mt-5">';
                  
                  echo '<img src="uploaded_img/'.$row["image$x"].'" width=200px;height=200px; alt="Product">';
                  echo '<h2>'.$row["color$x"].'</h2>';
                  
                  echo '<a href="imgColor.php?edit='. $row["id"].'" > <i class="fas fa-edit"></i></a> &nbsp';
                  echo '&nbsp &nbsp &nbsp<a href="imgColor.php?delete='.$row["image$x"].'" > <i class="fas fa-trash"></i> </a>';
                     
                 
                  
                  echo '</div>';
               }    
            }
            
         }else{
            echo "<div class='empty'>no product added</div>";
         };  
      }
   }
}
   
   

   
if(isset($_GET['edit'])){
   $edit_id = $_GET['edit'];
  
   $edit_query = mysqli_query($conn, "SELECT * FROM `features` WHERE id = $edit_id ");
   if(mysqli_num_rows($edit_query) > 0){
      while($fetch_edit = mysqli_fetch_assoc($edit_query)){
?>
   <section>

   


 

   <form action="" method="post"  class="add-product-form" enctype="multipart/form-data">
  
   <input type="hidden" name="u_p_id"class="box" value="<?php echo $fetch_edit['id']; ?>">
   <div class="col col-lg-3"></div>
   <div class="col-lg-4 box1 col-md-12 col-sm-12 ">
<input type="text" class="form-control" id="waranty" placeholder="add color" name="u_color1" value="<?php echo $fetch_edit['color1'];?>"  >

<input type="file" name="u_image1" accept="image/png, image/jpg, image/jpeg" class="form-control">
</div>
<div class="col-lg-4 box1  col-md-12 col-sm-12 ">
<input type="text" class="form-control" id="waranty" placeholder="add color" name="u_color2" value="<?php echo $fetch_edit['color2'];?>" >

<input type="file" name="u_image2" accept="image/png, image/jpg, image/jpeg" class="form-control" >
</div>
<div class="col-lg-4 box1  col-md-12 col-sm-12 ">
<input type="text" class="form-control" id="waranty" placeholder="add color" name="u_color3" value="<?php echo $fetch_edit['color3'];?>" >

<input type="file" name="u_image3" accept="image/png, image/jpg, image/jpeg" class="form-control" >
</div>
<div class="col-lg-4 box1   col-md-12 col-sm-12 ">
<input type="text" class="form-control" id="waranty" placeholder="add color" name="u_color4" value="<?php echo $fetch_edit['color4'];?>">

<input type="file" name="u_image4" accept="image/png, image/jpg, image/jpeg" class="form-control" >
</div>
<div class="col-lg-4 box1  col-md-12 col-sm-12 ">
<input type="text" class="form-control" id="waranty" placeholder="add color" name="u_color5" value="<?php echo $fetch_edit['color5'];?>" >

<input type="file" name="u_image5" accept="image/png, image/jpg, image/jpeg" class="form-control" >
</div>
<div class="col-lg-4 box1  col-md-12 col-sm-12 ">
<input type="text" class="form-control" id="waranty" placeholder="add color" name="u_color6"  value="<?php echo $fetch_edit['color6'];?>">

<input type="file" name="u_image6" accept="image/png, image/jpg, image/jpeg" class="form-control" >
</div>
<div class="col-lg-4 box1  col-md-12 col-sm-12 ">
<input type="text" class="form-control" id="waranty" placeholder="add color" name="u_color7" value="<?php echo $fetch_edit['color7'];?>">

<input type="file" name="u_image7" accept="image/png, image/jpg, image/jpeg" class="form-control" >
</div>
<div class="col-lg-4 box1   col-md-12 col-sm-12 ">
<input type="text" class="form-control" id="waranty" placeholder="add color" name="u_color8" value="<?php echo $fetch_edit['color8'];?>">

<input type="file" name="u_image8" accept="image/png, image/jpg, image/jpeg" class="form-control" >
</div>
<div class="col-lg-4 box1  col-md-12 col-sm-12 ">
<input type="text" class="form-control" id="waranty" placeholder="add color" name="u_color9" value="<?php echo $fetch_edit['color9'];?>">

<input type="file" name="u_image9" accept="image/png, image/jpg, image/jpeg" class="form-control" >
</div>
<div class="col-lg-4 pt-4 box1 col-md-12 col-sm-12" style="margin-bottom:20px">
<input type="text" class="form-control" id="waranty" placeholder="add color" name="u_color10" value="<?php echo $fetch_edit['color10'];?>">

<input type="file" name="u_image10" accept="image/png, image/jpg, image/jpeg" class="form-control" >
</div>
<input type="hidden" name="uo_image1"    value="<?php echo $fetch_edit['image1']; ?>">
<input type="hidden" name="uo_image2"    value="<?php echo $fetch_edit['image2']; ?>">
<input type="hidden" name="uo_image3"    value="<?php echo $fetch_edit['image3']; ?>">
<input type="hidden" name="uo_image4"    value="<?php echo $fetch_edit['image4']; ?>">
<input type="hidden" name="uo_image5"    value="<?php echo $fetch_edit['image5']; ?>">
<input type="hidden" name="uo_image6"    value="<?php echo $fetch_edit['image6']; ?>">
<input type="hidden" name="uo_image7"    value="<?php echo $fetch_edit['image7']; ?>">
<input type="hidden" name="uo_image8"    value="<?php echo $fetch_edit['image8']; ?>">
<input type="hidden" name="uo_image9"    value="<?php echo $fetch_edit['image9']; ?>">
<input type="hidden" name="uo_image10"    value="<?php echo $fetch_edit['image10']; ?>">

 

<input type="submit" value="update image and color"   name="update_image" class="btn btn-success">


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
     
                        
         













   </div>
                              </div>
                              </body>
</html>    
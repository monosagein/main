
<?php include('db_connect.php'); ?>
<?php include('verifySession.php');?>
<?php include("functions.php"); ?>
<?php
//add image
if(isset($_POST['add_image'])){

$model_id=$_POST['model_id'];
$parent_id = $_POST['parent_id'];
$parent_moidel = $_POST['parent_model'];

$color= $_POST['add_color'];
//$p_image = $_FILES['p_image']['name'];
//$p_image_tmp_name = $_FILES['p_image']['tmp_name'];
// $p_image_folder = 'uploaded_img/'.$p_image;
//
 
 $desiredHeight =300;
$desiredWidth=300;
$folder = "uploaded_img/";
$image_file=$_FILES['image']['name'];
$file = $_FILES['image']['tmp_name'];
$path = $folder . $image_file;  
$target_file=$folder.basename($image_file);
$imageFileType=pathinfo($target_file,PATHINFO_EXTENSION);
//Allow only JPG, JPEG, PNG & GIF etc formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
$error[] = 'Sorry, only JPG, JPEG, PNG & GIF files are allowed';   
}
//Set image upload size 
if ($_FILES["image"]["size"] > 1000000) {
$error[] = 'Sorry, your image is too large. Upload less than 1 MB in size.';
}
if(!isset($error))
{
$imageProcess = 0;
if(is_array($_FILES)) {
$sourceProperties = getimagesize($file);
$unique_id=mt_rand(1000,9999).time(); 
$uploadImageType = $sourceProperties[2];
$sourceImageWidth = $sourceProperties[0];
$sourceImageHeight = $sourceProperties[1];
$image_point = $folder."image_".$unique_id.'.'. $imageFileType; 
switch ($uploadImageType) {
case IMAGETYPE_JPEG:
$resourceType = imagecreatefromjpeg($file); 
$imageLayer = resizeImage($resourceType,$sourceImageWidth,$sourceImageHeight,$desiredWidth,$desiredHeight);
imagejpeg($imageLayer,$image_point);
break;
case IMAGETYPE_GIF:
$resourceType = imagecreatefromgif($file); 
$imageLayer = resizeImage($resourceType,$sourceImageWidth,$sourceImageHeight,$desiredWidth,$desiredHeight);
imagegif($imageLayer,$image_point);
break;
case IMAGETYPE_PNG:
$resourceType = imagecreatefrompng($file); 
$imageLayer = resizeImage($resourceType,$sourceImageWidth,$sourceImageHeight,$desiredWidth,$desiredHeight);
imagepng($imageLayer,$image_point);
break;
default:
$imageProcess = 0;
break;
}
move_uploaded_file($file,$folder. $unique_id. ".". $imageFileType);
unlink($folder.$unique_id.'.'.$imageFileType); 
$imgtodb='image_'.$unique_id.'.'.$imageFileType; 
$imageProcess = 1;

}


$date = date('Y-m-d');
$random_number = rand(10000, 99999);
$insert_query = mysqli_query($conn, "INSERT `add_imge`(`parent_id`,`parent_model`,`image`,`color`,`date`,`image_id`) VALUES (
    '$parent_id','$parent_moidel', '$imgtodb','$color','$date','$random_number')") or die('query failed');
if($insert_query){
   // move_uploaded_file($p_image_tmp_name, $p_image_folder);
  // move_uploaded_file($_FILES["p_image"]["tmp_name"], $p_image_folder );

}else{
   $message[] = 'could not add the product';

}
}
};

//delete image
 
if(isset($_POST['is_delete'])){
    $delete_id = $_POST['deleteId'];
    $delete_query = mysqli_query($conn, "DELETE FROM `add_imge` WHERE image_id = $delete_id ") or die('query failed');
    if(!$delete_query){

      echo '<script> alert("plase try again") </script>'; 
      
       

       }

  };

?>

     <!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Elego Motor || Model || Images</title>
   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
         <!-- bootstrap4 -->
    <!-- font awsome-->
 
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
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
.img-size{
   width:100%;
   height:40vh;
   object-fit:contain;
}
   </style>

</head>
<body>
<?php include ('sidebar.php') ;?>


<div class="main">
    <?php
if(isset($_GET['add'])){
       $_SESSION['id'] = $_GET['add'];

 //$GLOBALS['edit_model'] = $_GET['add'];

$get_query = mysqli_query($conn, "SELECT * FROM features WHERE mu_id = ".$_SESSION['id']."");
if(mysqli_num_rows($get_query) > 0){
     while($row = mysqli_fetch_assoc($get_query)) {
    
    ?>



<div class="container " style="padding-top:50px" >
   <div class="row ">
   <div class=" col col-lg-4"></div>
   <div class="col col-lg-4">
<form action="" method="post"  class="add-product-form" enctype="multipart/form-data">
<div class="form-row">
<small class="alert alert-danger"> upload upto 1mb  and 300x300 SIZE IMAGES</small>
<br>
<br>
<div class="form-group mt-5 ">
<label for="inputEmail4">Enter Color</label>
<input type="hidden" name="model_id"class="box" value="<?php echo $row['id']; ?>">
<input type="hidden" name="parent_id"class="box" value="<?php echo $row['mu_id']; ?>">
<input type="hidden" name="parent_model"class="box" value="<?php echo $row['model']; ?>">


<input type="text" class="form-control" id="waranty" placeholder="add color" name="add_color" value=""  >
     </div>
     <div class="form-group mt-5 ">
     <label for="inputEmail4">Upload Image</label>
<input type="file" name="image"  class="form-control">
</div>
<input type="submit" value="Add"   name="add_image" class="btn btn-success btn-block"><br><br>

</div>







</form>
   </div>
   </div>
     </div>
<?php
     } 
         };
       
         
      
   ?>

<!-- display -->
 
        <div class="container mt-5">
    <div class="row" >
   
                   <?php
            
                      $select_products = mysqli_query($conn, "SELECT * FROM `add_imge` WHERE parent_id = ".$_SESSION['id']."");
                      if(mysqli_num_rows($select_products) > 0 ){
                         while($row = mysqli_fetch_assoc($select_products)){
                        
                    
               if(!empty($row["color"] && !empty($row["image"]) )){
               
                  echo'
                  <div  class="col col-lg-3" mt-5">';
                 echo'
                  <div  class="card  mt-5 ml-2 mb-2" style="background-color:white;border-radius:20px;height:350px">';

                 echo '  <img src="uploaded_img/'. $row["image"].'" class="img-size" alt="Product">';
                 echo '<br>';
                 echo '<br>';
                 echo ' <h4 class="text-center "style="text-transform:uppercase">'. $row["color"].'</h4>';
                // echo '  <a href="add_img.php?edit='. $row["image"].' > <i class="fas fa-edit"></i></a> &nbsp';
                 echo '  <form action="" method="post">
                    <input type="hidden" id="deleteId" value="'.$row["image_id"].'" name="deleteId" />
                     <button a href="javascript:void(0);"type="submit" name="is_delete"><i class="fas fa-trash"></i> </button>
                    </form>';

                     
                 
                    echo' </div>';
                    echo'<br>';
                 echo' </div>';
              
               }     
         
         }      
  
}   else {
   echo "no product added";
}
?>

</div>
</div>
   
   
<!-- display -->




     <?php
}
?>
</div>
                        
         

















                               
                              </body>
</html>    
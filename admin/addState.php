<?php ob_start(); ?>
<?php include('db_connect.php'); ?>



<?php //include('verifySession.php');?>
<?php


// state add
if(isset($_POST['add_state'])){
   $s_name = $_POST['s_name'];
 
   //if(mysqli_num_rows(mysqli_query($conn,"SELECT * FROM states WHERE statename = '$s_name' ")) > 0){
     //  echo"already added";
     $sql="select* from `states`";
     $result=mysqli_query($conn,$sql);
         // if(mysqli_num_rows($result)>0){
           // $rows = mysqli_fetch_assoc($result);
               //  if($s_name = $rows['statename']){
                  //   echo ' <script>alert("state already existed")</script>';
               // }
   //}else{
   $date = date('Y-m-d');
   $random_numbers = rand(10000, 99999);
   $insert_query = mysqli_query($conn, "INSERT INTO `states`(`statename`, `stateid`,`date`) 
   VALUES('$s_name',  '$random_numbers' , '$date')") or die('query failed');

   if($insert_query){
      
      echo ' <script>alert("state added succesfully")</script>';
   }else{
      echo ' <script>alert("Adding states failed")</script>';
   }
   
};
// dist add
if(isset($_POST['add_dist'])){
    $d_name = $_POST['d_name'];
     $stateid=$_POST['stateid'];
     if(mysqli_num_rows(mysqli_query($conn,"SELECT * FROM districts WHERE districtname = '$d_name' "))>0){
       echo"already added";
   }else{
    $date = date('Y-m-d');
  
    $insert_query = mysqli_query($conn, "INSERT INTO `districts`(`districtname`, `stateid`,`date`) 
    VALUES('$d_name',  '$stateid' , '$date')") or die('query failed');
 
    if($insert_query){
       
       echo ' <script>alert("district added succesfully")</script>';
    }else{
       echo ' <script>alert("Adding district failed")</script>';
    }
   }
 };
// state delete
if(isset($_GET['delete'])){
   $delete_id = $_GET['delete'];
   $delete_query = mysqli_query($conn, "DELETE FROM `states` WHERE id = $delete_id ") or die('query failed');
   if($delete_query){
      header('location:addState.php');
      $message[] = 'product has been deleted';
   }else{
      header('location:addState.php');
      $message[] = 'product could not be deleted';
   };
};
// dist delete
if(isset($_GET['del'])){
    $del_id = $_GET['del'];
    $delete_query = mysqli_query($conn, "DELETE FROM `districts` WHERE id = $del_id ") or die('query failed');
    if($delete_query){
       header('location:addState.php');
       $message[] = 'product has been deleted';
    }else{
       header('location:addState.php');
       $message[] = 'product could not be deleted';
    };
 };
// state update
if(isset($_POST['update_state'])){
   $update_s_id = $_POST['update_s_id'];
   $update_s_name = $_POST['update_s_name'];

   //  $sql="select* from `states`";
   //$result=mysqli_query($conn,$sql);
     //    if(mysqli_num_rows($result)>0){
       //     $rows = mysqli_fetch_assoc($result);
         //        if($s_name = $rows['statename']){
           //         echo ' state already existed';
              //   }
                //  else{
                  $date = date('Y-m-d');
                  $update_query = mysqli_query($conn, "UPDATE `states` SET statename= '$update_s_name' WHERE id = '$update_s_id' ");
                //  $random_numbers = rand(10000, 99999);
                 // $insert_query = mysqli_query($conn, "INSERT INTO `states`(`statename`, `stateid`,`date`) 
                 // VALUES('$s_name',  '$random_numbers' , '$date')") or die('query failed');
                if($update_query){
                     
                     echo ' <script>alert("state updated succesfully")</script>';
                  }else{
                     echo ' <script>alert("Adding states failed")</script>';
                  }

               
           //}

 
 
 
   };


// dist update
if(isset($_POST['update_district'])){
    $update_d_id = $_POST['update_d_id'];
    $update_d_name = $_POST['update_d_name'];
 
  
  
    $date = date('Y-m-d');
 
 
                
    $update_query = mysqli_query($conn, "UPDATE `districts` SET districtname = '$update_d_name' WHERE id = '$update_d_id' ");
   
    if($update_query){
  
       $message[] = 'district updated succesfully';
       header('location:addState.php');
 
 
    }
    
    else{
       $message[] = 'District could not be updated';
       header('location:addState.php');
    }
 
 }

















                                      


$per_page_record = 15;  // Number of entries to show in a page.   
// Look for a GET variable page if not found default is 1.        
if (isset($_GET["page"])) {    
    $page  = $_GET["page"];    
}    
else {    
  $page=1;    
}    

$start_from = ($page-1) * $per_page_record;     

//$query = "SELECT * FROM dealersdata LIMIT $start_from, $per_page_record";     
//$rs_result = mysqli_query ($conn, $query);    
?>    




  

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   
   <title>ElegoMoter || stateAddd</title>
     <!--favicon -->
    <!--favicon -->
    <link rel="icon" type="image/x-icon" href="uploaded_img\favicon.png">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
  <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
  <link rel="stylesheet"  
    href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">  


    <style>
      *{
         margin:0;
        padding:0;

      }
      body {
  font-family:  sans-serif;
   background-color:#d9edf7;
}
      .update-card{
         position:absolute;
         top:0px;
         left:170px;
      
      }  
       .box{
         outline:none;
         border:1px solid grey;
         border-radius:10px;
         padding:10px;
         width:90%;
      }
      .update-form{
         border:1px solid green;
         border-radius:10px;
         background-color:grey;
         padding:5px;
      }
      .main {
  margin-left: 160px; /* Same as the width of the sidenav */
  font-size: 16px; /* Increased text to enable scrolling */
  padding: 0px 10px;
  background-color:#d9edf7;
}
.btn1{
    float:right;
    color:red;
}

   
      </style>

</head>
<body>
<?php include ('sidebar.php') ;?>
<?php

if(isset($message)){
   foreach($message as $message){
      echo '<div class="message"><span>'.$message.'</span> <i class="fas fa-times" onclick="this.parentElement.style.display = none;"></i> </div>';
   };
};

?>


<div class="main">

<div class="container">
<div class="container">


 
      <div class="row">
         <div class="col col-lg-4"></div>
         
         <div class="col-lg-5" style="background-color:#fff;margin-top:50px;padding-bottom:50px;border-radius:20px;">
                      
    <form action="" method="post" class="user add-form" enctype="multipart/form-data">
   <h3 class="text-info text-center">Add State</h3>
   <hr>
   <div class="from-group ">

   <div class="mb-4">
      <!-- <label  class="text-info">DealerName:</label> -->
   <input type="text" name="s_name" placeholder="Enter state Name" class="form-control form-control-user mt-5"required>
   </div>
</div>
<br>
<div class="from-group">
      <div class="pt-4">
   <input type="submit" value="Add state" name="add_state" class="btn btn-primary ">
   </div>
</div>
</form>
<br>
<form action="" method="post"  enctype="multipart/form-data">




<select id="state" class="form-control"  name="stateid" >
    <option value=""  >Select state</option>
    <?php
                                 $sql= "SELECT * FROM `states`";
                                 $result=mysqli_query($conn,$sql);
                                     if(mysqli_num_rows( $result) > 0){
                                         while($r = mysqli_fetch_assoc($result)){
                                         echo '<option style=" text-transform: uppercase;" value="'.$r["stateid"].' "> '.$r["statename"].'</option>';
                                     }
                                 }
                             ?>
</select>
<br>
<div class="from-group ">
<div class="mb-4">
<!-- <label  class="text-info">Adress</label> -->
   <input type="text" name="d_name"   placeholder="Enter district/city" class="form-control form-control-user" required>
   </div>
</div>
<br>
   

      <div class="from-group">
      <div class="pt-4">
   <input type="submit" value="Add District/city" name="add_dist" class="btn btn-primary ">
   </div>
</div>
</form>

</div>
</div>
</div>


<br>
      <br>
</section>
<div class="row">
   <div class="col col-lg-6 mb-2 ">
<div id="search-bar">
<!--   <FORM CLASS="SEARCH-INPUT">-->
        
<!--          <INPUT   STYLE="MAX-WIDTH:30%; BORDER:1PX SOLID BLACK" CLASS="FORM-CONTROL" TYPE="TEXT" PLACEHOLDER="SEARCH STATE"  ID="SEARCH" AUTOCOMPLETE="OFF">-->
<!--</FORM>-->
        </div>

</div>
<div class="col col-lg-6 ">
   <!-- <div style="display:flex;align-items:center;justify-content:center">
        <form method="post"  style="max-width:50%" action="export.php">
     <input  style="border:1px solid black;margin:auto;" type="submit" name="export" class="btn btn-default" value="Download" />
    </form>
</div> -->

</div>
</div>
<section class="display-product-table">

<table class="table table-striped table-class table-bordered" id= "table-data" style="width:600px;margin-left:300px;">

  
      <thead>
         <th scope="col" class="bg-primary text-light text-center">State</th>
         <th scope="col" class="bg-primary text-light text-center"> District/city</th>
         <th scope="col" class="bg-primary text-light text-center">action</th>
      </thead>

      <tbody>
         <?php
         
            $select_products = mysqli_query($conn, "SELECT * FROM `states`");
            if(mysqli_num_rows($select_products) > 0 ){
               while($row = mysqli_fetch_assoc($select_products))
              /* while ($row = mysqli_fetch_array($rs_result))*/   {
              
         ?>

         <tr>
            
            <td style="text-transform:uppercase;"><?php echo $row['statename']; ?></td>
            <td style="text-align:center;text-transform:uppercase;"><a href="addState.php?showid=<?php  echo $row["stateid"];?>"> <i class="fas fa-eye text-center"></i>View  </a></td>
            <td style="text-align:center">
            <a href="addState.php?edit=<?php  echo $row["id"];?>"> <i class="fas fa-edit"></i> </a>
               <a href="addState.php?delete=<?php  echo $row["id"];?>" onclick="return confirm('are your sure you want to delete this?');"> <i class="fas fa-trash"></i>  </a>
              
            </td>
         </tr>

         <?php
                                            
                                          
            };    
            }else{
               echo "<div class='empty'>no states added</div>";
            };
         ?>
      </tbody>
   </table>
   
   <div class="pagination">    
      <?php  
        $query = "SELECT COUNT(*) FROM states";     
        $rs_result = mysqli_query($conn, $query);     
        $row = mysqli_fetch_row($rs_result);     
        $total_records = $row[0];     
          
    echo "</br>";     
        // Number of pages required.   
        $total_pages = ceil($total_records / $per_page_record);     
        $pagLink = "";       
      
        if($page>=2){   
            echo "<a href='addState.php?page=".($page-1)."'>  Prev </a>";   
        }       
        for ($i=1; $i<=$total_pages; $i++) {   
         if ($i == $page) {   
               $pagLink .= "<a class = 'active' href='addState.php?page="  
                                                 .$i."'>".$i." </a>";   
           }               
           else  {   
               $pagLink .= "<a href='addState.php?page=".$i."'>   
                                                 ".$i." </a>";     
           }   
 };          
        
        




          
        echo $pagLink;   
  
        if($page<$total_pages){   
            echo "<a href='addState.php?page=".($page+1)."'>  Next </a>";   
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

   
   


</section>

</div>
<?php 
if(isset($_GET['showid'])){

    $showid = $_GET['showid'];

?>
<div class="" id="exampleModalScrollable" tabindex="-1" role="dialog" aria-labelledby="exampleModalScrollableTitle" aria-hidden="true"  style="position:absolute;margin-left:500px;top:800px;">
  <div class="modal-dialog modal-dialog-scrollable" role="document">
    <div class="modal-content">
      <div class="modal-header">
      <button type="button" id="hide" onclick="hide()"class="btn btn-secondary btn1 " data-dismiss="modal"><b>X</b></button>
      </div>
      <div class="modal-body">
       
<table class="table table-striped table-class table-bordered" id= "table-data">

  
      <thead>
         <th scope="col" class="bg-primary text-light text-center">District</th>
      
         <th scope="col" class="bg-primary text-light text-center">Action</th>
      </thead>
      <tbody>
         <?php
         
            $select_dist = mysqli_query($conn, "SELECT * FROM `districts` WHERE stateid ='$showid'");
            if(mysqli_num_rows($select_dist) > 0 ){
               while($row = mysqli_fetch_assoc($select_dist))
              /* while ($row = mysqli_fetch_array($rs_result))*/   {
              
         ?>

         <tr>
            
            <td style="text-align:center;text-transform:uppercase;"><?php echo $row['districtname']; ?></td>
            <td style="text-align:center;text-transform:uppercase;">
            <a href="addState.php?editdist=<?php  echo $row["id"];?>"> <i class="fas fa-edit"></i>  </a>
               <a href="addState.php?del=<?php  echo $row["id"];?>" onclick="return confirm('are your sure you want to delete this?');"> <i class="fas fa-trash"></i>  </a>
              
            </td>
         </tr>

         <?php
                                            
                                          
            };    
            }else{
               echo "<div class='empty'>no district  added</div>";
            };
         ?>
      </tbody>
   </table>
      </div>
      <div class="modal-footer">
       
        
      </div>
    </div>
  </div>
</div>
<?PHP
}

?>
<?php 
if(isset($_GET['edit'])){

    $editid = $_GET['edit'];
   
?>
<div class="" id="Scrollable" tabindex="-1" role="dialog" aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-scrollable" role="document">
    <div class="modal-content">
      <div class="modal-header">
     
      </div>
      <div class="modal-body">
       

      <form action="" method="post" enctype="multipart/form-data">
      

   <h3 class="text-info">Update State</h3>


   <?php
         
        $select_state = mysqli_query($conn, "SELECT * FROM `states` WHERE id = '$editid' ");
           if(mysqli_num_rows($select_state) > 0 ){
              while($ro = mysqli_fetch_assoc($select_state)){
             /* while ($row = mysqli_fetch_array($rs_result))*/   
               
          ?>
   <div class="from-group ">



   <div class="mb-4">
      <!-- <label  class="text-info">DealerName:</label> -->
      <input type="hidden" name="update_s_id" placeholder="Enter state Name" value="<?php echo $ro['id'] ;?>" class="form-control form-control-user" required>

   <input type="text" name="update_s_name" placeholder="Enter state Name" value="<?php echo $ro['statename'] ;?>"  class="form-control form-control-user" required>
   </div>
</div>
<br>
<div class="from-group">
      <div class="pt-4">
   <input type="submit" value="update state" name="update_state" class="btn btn-primary ">
   </div>
</div>


<?php
              }
            }else{
               echo "<div class='empty'>no state  added</div>";
            };
           ?>



</form>



      </div>
      <div class="modal-footer">
        <button type="button" id="hide" onclick="hide()"class="btn btn-secondary" data-dismiss="modal">Close</button>
        
      </div>
    </div>
  </div>
</div>
<?PHP
}

?>
<?php 
if(isset($_GET['editdist'])){

    $editdistid = $_GET['editdist'];
   
?>
<div class="" id="Scrollable" tabindex="-1" role="dialog" aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-scrollable" role="document">
    <div class="modal-content">
      <div class="modal-header">
     
      </div>
      <div class="modal-body">
       

      <form action="" method="post" enctype="multipart/form-data">
      

   <h3 class="text-info">Update State</h3>


   <?php
         
        $select_d = mysqli_query($conn, "SELECT * FROM `districts` WHERE id = '$editdistid' ");
           if(mysqli_num_rows($select_d) > 0 ){
              while($rows = mysqli_fetch_assoc($select_d)){
             /* while ($row = mysqli_fetch_array($rs_result))*/   
               
          ?>
   <div class="from-group ">



   <div class="mb-4">
      <!-- <label  class="text-info">DealerName:</label> -->
      <input type="hidden" name="update_d_id" placeholder="Enter district Name" value="<?php echo $rows['id'] ;?>" class="form-control form-control-user" required>

   <input type="text" name="update_d_name" placeholder="Enter district Name" value="<?php echo $rows['districtname'] ;?>"  class="form-control form-control-user" required>
   </div>
</div>
<br>
<div class="from-group">
      <div class="pt-4">
   <input type="submit" value="update district" name="update_district" class="btn btn-primary ">
   </div>
</div>


<?php
              }
            }else{
               echo "<div class='empty'>no district  added</div>";
            };
           ?>



</form>



      </div>
      <div class="modal-footer">
        <button type="button" id="hide" onclick="hide()"class="btn btn-secondary" data-dismiss="modal">Close</button>
        
      </div>
    </div>
  </div>
</div>
<?PHP
}

?>






</div>
<script>
function hide(){
document.getElementById('exampleModalScrollable').style.display="none";


}

</script>



<script>   
    function go2Page()   
    {   
        var page = document.getElementById("page").value;   
        page = ((page><?php echo $total_pages; ?>)?<?php echo $total_pages; ?>:((page<1)?1:page));   
        window.location.href = 'addState.php?page='+page;   
    }   
  </script>  

<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript">
  $(document).ready(function(){
         // Live Search
     $("#search").on("keyup",function(){
       var search_term = $(this).val();

       $.ajax({
         url: "ajaxData.php",
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
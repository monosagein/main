<?php ob_start(); ?>
<?php include('db_connect.php'); ?>
<?php include('verifySession.php');?>
<?php



if(isset($_POST['add_dealer'])){
    $State = $_POST['State'];
    $district = $_POST['district'];
   $p_name = $_POST['p_name'];
   $p_adress = $_POST['p_adress'];
   $p_number = $_POST['p_number'];
   $p_email = $_POST['p_email'];
   $date = date('Y-m-d');
   
         if( mysqli_num_rows(mysqli_query($conn,"select * from dealersdata  where d_name = '$p_name"))>0 ){
             echo "already dealer  existed ";
         }else{

   $insert_query = mysqli_query($conn, "INSERT INTO `dealersdata`(`State`,`district`,`d_name`,`d_adress`,`p_number`,`p_email`,`date`) VALUES('$State','$district','$p_name','$p_adress' ,'$p_number','$p_email', '$date')") or die('query failed');

   if($insert_query){
      
      echo ' <script>alert("Dealer added succesfully")</script>';
   }else{
      echo ' <script>alert("Adding Delaer failed")</script>';
   }
         }
};

if(isset($_GET['delete'])){
   $delete_id = $_GET['delete'];
   $delete_query = mysqli_query($conn, "DELETE FROM `dealersdata` WHERE id = $delete_id ") or die('query failed');
   if($delete_query){
      header('location:dealers.php');
      $message[] = 'product has been deleted';
   }else{
      header('location:dealers.php');
      $message[] = 'product could not be deleted';
   };
};

if(isset($_POST['update_dealer'])){
    
    $update_s_name = $_POST['editstate'];
   $update_ds_name = $_POST['editdistrict'];
   $update_d_id = $_POST['update_d_id'];
   $update_d_name = $_POST['update_d_name'];
   $update_d_adress = $_POST['update_d_adress'];
   $update_p_number =$_POST['update_p_number'];
   $update_p_email =$_POST['update_p_email'];
 
 
   $date = date('Y-m-d');


               
   $update_query = mysqli_query($conn, "UPDATE dealersdata SET  State = '$update_s_name', district = '$update_ds_name', d_name = '$update_d_name', d_adress = '$update_d_adress' , p_number = '$update_p_number', p_email ='$update_p_email', update_date = '$date' WHERE id = '$update_d_id' ");
  
   if($update_query){
 echo 'product updated succesfully';
      header('location:dealers.php');


   }
   
   else{
   echo 'product could not be updated';
      header('location:dealers.php');
   }

};



















                                      


$per_page_record = 15;  // Number of entries to show in a page.   
// Look for a GET variable page if not found default is 1.        
if (isset($_GET["page"])) {    
    $page  = $_GET["page"];    
}    
else {    
  $page=1;    
}    

$start_from = ($page-1) * $per_page_record;     

$query = "SELECT * FROM dealersdata LIMIT $start_from, $per_page_record";     
$rs_result = mysqli_query ($conn, $query);    
?>    




  

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Dealers</title>
    <!--favicon -->
    <link rel="icon" type="image/x-icon" href="uploaded_img\favicon.png">
    <!--discription -->
    <meta name="description" content="">
    <!--keywords -->
    <meta name="keywords" content="">
      <!--canonical -->
    <link rel="canonical" href="" />
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
         top:50px;
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
  
}
.table2{
    font-size:13px;
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
<nav style="height:50px;width:100%;">
  <h3 style="margin-left:200px;padding-top:10px;color:#337ab7;">Add Dealers</h3>
</nav>
<hr class="line">

<div class="main">

<div class="container ">
<div class="container">


 
      <div class="row">
         <div class="col col-lg-4 "></div>      
         
         <div class="col-lg-5" style="background-color:#fff; padding-bottom:20px; border-radius:15px; margin-top:50px; ">
                      
<form action="" method="post" class="user add-form" enctype="multipart/form-data">
   <h3 class="text-info text-center">ADD NEW DEALER</h3><hr>
   
   
    <div class="from-group ">
   <div class="mb-4">
          <select id="State" name="State" class="form-control"  required>
                          <option value="" >Select state</option>
                             <?php
                                 $sql= "SELECT * FROM `states`";
                                 $result=mysqli_query($conn,$sql);
                                     if(mysqli_num_rows( $result) > 0){
                                         while($r = mysqli_fetch_assoc($result)){
                                         echo '<option value="'.$r["stateid"].' "> '.$r["statename"].'</option>';
                                     }
                                 }
                             ?>
                       </select>
   </div>
</div><br>
    <div class="from-group ">
   <div class="mb-4">
      <select id="dist" name="district" class="form-control" >
                                 <option value="">Select state first</option>
                          
                          </select>
                             <script type="text/javascript"  src="stajax.js"></script>
                                    
   </div>
</div><br>
   
   
   <div class="from-group ">
   <div class="mb-4">
      <!-- <label  class="text-info">DealerName:</label> -->
   <input type="text" name="p_name" placeholder="Enter Dealer Name" class="form-control form-control-user" required>
   </div>
</div>
<br>
<div class="from-group ">
<div class="mb-4">
<!-- <label  class="text-info">Adress</label> -->
   <input type="text" name="p_adress"   placeholder="Enter Address" class="form-control form-control-user" required>
   </div>
</div>
<br>
      <div class="from-group ">
      <div class="mb-4">
      <!-- <label  class="text-info">PH-Number:</label> -->
   <input type="text" name="p_number" min="10" max="12"  placeholder="Enter Phonenumber" class="form-control form-control-user" required>
</div>
</div>
<br>
<div class="from-group ">
      <div class="mb-4">
      <!-- <label  class="text-info">PH-Number:</label> -->
   <input type="email" name="p_email" placeholder="Enter Email" class="form-control form-control-user" required>
</div>
</div>
<br>
      <div class="from-group">
      <div class="pt-4 text-center">
   <input type="submit" value="Add Dealer" name="add_dealer" class="btn btn-primary ">
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
         <form class="search-input">
        
          <input style="max-width:30%; border:1px solid black; position:absolute; margin-left:900px;margin-top:30px;" class="form-control" type="text" placeholder="Search Dealer"  id="search" autocomplete="off">
       </form>
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


<!--date filter-->

<div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card mt-5">
                    <div class="card-header">
                        <!-- <h4>How to Filter or Find or Get data </h4> -->
                    </div>
                    <div class="card-body">
                    
                        <form action="" method="GET">
                            <div class="row" style="margin-left:px;">
                                <div class="col-md-4" >
                                    <div class="form-group">
                                        <label>From Date</label>
                                        <input type="date" name="from_date" value="<?php if(isset($_GET['from_date'])){ echo $_GET['from_date']; } ?>" class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>To Date</label>
                                        <input type="date" name="to_date" value="<?php if(isset($_GET['to_date'])){ echo $_GET['to_date']; } ?>" class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label></label> <br>
                                      <button type="submit" class="btn btn-primary">Filter</button>
                                    </div>
                                </div>
                                
                            </div>
                        </form>
                    </div>
                </div>

                <div class="card mt-5">
                    <div class="card-body">
                        <table class="table table-striped table-class table-bordered table2">
                            <thead>
                                <tr>
                                    
                                <th scope="col" class="bg-primary text-light text-center">State</th>
                                 <th scope="col" class="bg-primary text-light text-center">District</th>
                                 <th scope="col" class="bg-primary text-light text-center">Dealer Name</th>
                                 <th scope="col" class="bg-primary text-light text-center"> Address</th>
                                 <th scope="col" class="bg-primary text-light text-center"> Phone Number </th>
                                 <th scope="col" class="bg-primary text-light text-center">Email Id </th>
                                 <th scope="col" class="bg-primary text-light text-center">Date</th>
                                
                                </tr>
                            </thead>
                            <tbody>
                            
                            <?php 
                                
                                if(isset($_GET['from_date']) && isset($_GET['to_date']))
                                {
                                    $from_date = $_GET['from_date'];
                                    $to_date = $_GET['to_date'];

                                    $query = "SELECT * FROM dealersdata WHERE Date BETWEEN '$from_date' AND '$to_date' ";
                                    $query_run = mysqli_query($conn, $query);

                                    if(mysqli_num_rows($query_run) > 0)
                                    {
                                        foreach($query_run as $row)
                                        {
                                            ?>
                                            <tr>
                                            <td style="text-transform:uppercase;"><?php echo $stateName ?></td>
            
                                             <td style="text-transform:uppercase;"><?php if(isset($row['district'])){echo  $row['district'] ; }else{ echo 0 ;} ?></td>
                                             <td style="text-transform:uppercase;"><?php echo $row['d_name']; ?></td>
                                             <td style="text-transform:uppercase;"><?php echo $row['d_adress']; ?></td>
                                             <td style="text-transform:uppercase;"><?php echo $row['p_number']; ?></td>
                                             <td style="text-transform:uppercase;"><?php echo $row['p_email']; ?></td>
                                             <td style="text-transform:uppercase;"><?php echo $row['date']; ?></td>
                                            </tr>
                                            <?php
                                        }
                                    }
                                    else
                                    {
                                        echo "No Record Found";
                                    }
                                }
                            ?>
                            </tbody>
                        </table>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"></script>



<!--datefilterend-->
<section class="display-product-table">

<table class="table table-striped table-class table-bordered table2" id= "table-data">

  
      <thead>
          <th scope="col" class="bg-primary text-light text-center">State</th>
         <th scope="col" class="bg-primary text-light text-center">District</th>
         <th scope="col" class="bg-primary text-light text-center">Dealer Name</th>
         <th scope="col" class="bg-primary text-light text-center"> Adress</th>
         <th scope="col" class="bg-primary text-light text-center"> Phone number </th>
         <th scope="col" class="bg-primary text-light text-center">Email Id </th>
         <th scope="col" class="bg-primary text-light text-center">action</th>
      </thead>

      <tbody>
         <?php
         
            $select_products = mysqli_query($conn, "SELECT * FROM `dealersdata`");
            if(mysqli_num_rows($select_products) > 0 ){
               while($row = mysqli_fetch_assoc($select_products))
              /* while ($row = mysqli_fetch_array($rs_result))*/   {
                    //  $stateName =  $row['State'];
              
                     $select_state = mysqli_query($conn, "SELECT * FROM `states` WHERE stateid = '".$row['State']." ' ");
            if(mysqli_num_rows($select_state) > 0 ){
               while($rw = mysqli_fetch_assoc($select_state))
                 {  $GLOBALS['stateName']  = $rw['statename'];
               
                
                   
            }
            }
            ?>
        
         
            
             <td style="text-transform:uppercase;"><?php echo $stateName ?></td>
            
            <td style="text-transform:uppercase;"><?php if(isset($row['district'])){echo  $row['district'] ; }else{ echo 0 ;} ?></td>
            <td style="text-transform:uppercase;"><?php echo $row['d_name']; ?></td>
            <td style="text-transform:uppercase;"><?php echo $row['d_adress']; ?></td>
            <td style="text-transform:uppercase;"><?php echo $row['p_number']; ?></td>
            <td style="text-transform:uppercase;"><?php echo $row['p_email']; ?></td>
            <td>
            <a href="dealers.php?edit=<?php echo $row['id'];?>" > <i class="fas fa-edit"></i>  </a>
               <a href="dealers.php?delete=<?php echo $row['id']; ?>" onclick="return confirm('are your sure you want to delete this?');"> <i class="fas fa-trash"></i>  </a>
              
            </td>
         </tr>

         <?php
                                            
                                          
            };    
            }else{
               echo "<div class='empty'>no dealers added</div>";
            };
         ?>
      </tbody>
   </table>
   
   <div class="pagination">    
      <?php  
        $query = "SELECT COUNT(*) FROM dealersdata";     
        $rs_result = mysqli_query($conn, $query);     
        $row = mysqli_fetch_row($rs_result);     
        $total_records = $row[0];     
          
    echo "</br>";     
        // Number of pages required.   
        $total_pages = ceil($total_records / $per_page_record);     
        $pagLink = "";       
      
        if($page>=2){   
            echo "<a href='dealers.php?page=".($page-1)."'>  Prev </a>";   
        }       
        for ($i=1; $i<=$total_pages; $i++) {   
         if ($i == $page) {   
               $pagLink .= "<a class = 'active' href='dealers.php?page="  
                                                 .$i."'>".$i." </a>";   
           }               
           else  {   
               $pagLink .= "<a href='dealers.php?page=".$i."'>   
                                                 ".$i." </a>";     
           }   
 };          
        
        




          
        echo $pagLink;   
  
        if($page<$total_pages){   
            echo "<a href='dealers.php?page=".($page+1)."'>  Next </a>";   
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
   
   if(isset($_GET['edit'])){
      $edit_id = $_GET['edit'];
     
      $edit_query = mysqli_query($conn, "SELECT * FROM `dealersdata` WHERE id = $edit_id ");
      if(mysqli_num_rows($edit_query) > 0){
         while($fetch_edit = mysqli_fetch_assoc($edit_query)){
   ?>
      


    
          <div class="container update-card ">
            <div class="row">
               <div class="col col-lg-4 update-form ">
                   <h3 class="text-center text-light" style="color:#fff">Update Dealer</h3><hr>
      <form action="" method="post"  enctype="multipart/form-data">
    
         <div class="from-group ">
   <div class="mb-4">
       
       
       
       
       
       
       
       
       
       
       
          <select id="editstate" name="editstate" class="form-control"  required>
                          <option value="" >Select state</option>
                             <?php
                                 $sql= "SELECT * FROM `states`";
                                 $result=mysqli_query($conn,$sql);
                                     if(mysqli_num_rows( $result) > 0){
                                         while($r = mysqli_fetch_assoc($result)){
                                         echo '<option value="'.$r["stateid"].' "> '.$r["statename"].'</option>';
                                     }
                                 }
                             ?>
                       </select>
                       
   </div>
</div><br>
    <div class="from-group ">
   <div class="mb-4">
      <select id="editdist" name="editdistrict" class="form-control" >
                                 <option value="">Select state first</option>
                          
                          </select>
                          <script type="text/javascript"  src="editajax.js"></script>
                           
                                    
   </div>
</div><br>
          <input type="hidden"   name="update_d_id" class="box" value="<?php echo $fetch_edit['id']; ?>">
      <label style="color:#fff" >Dealer Name:</label>
      <input type="text"   name="update_d_name" class="box" value="<?php echo $fetch_edit['d_name']; ?>">
      <label style="color:#fff">Address:</label>
      <input type="text"  name="update_d_adress" class="box" value="<?php echo $fetch_edit['d_adress']; ?>">
      <label style="color:#fff"> Email Id:</label>
      <input type="email"  name="update_p_email" class="box" value="<?php echo $fetch_edit['p_email']; ?>">
      <label style="color:#fff">Phone Number:</label>
      <input type="text" min="0" class="box"  name="update_p_number"  class="box"value="<?php echo $fetch_edit['p_number']; ?>"><br><br>
      <input type="submit" value="Update Dealer"  name="update_dealer" class="btn btn-primary">
         
      </form>
         </div>
         
         </div>
         </div>

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
        window.location.href = 'dealers.php?page='+page;   
    }   
  </script>  

<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript">
  $(document).ready(function(){
         // Live Search
     $("#search").on("keyup",function(){
       var search_term = $(this).val();

       $.ajax({
         url: "dealers-live-search.php",
         type: "POST",
         data : {search:search_term },
         success: function(data) {
           $("#table-data").html(data);
         }
       });
     });
  });
</script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
</body>
</html>
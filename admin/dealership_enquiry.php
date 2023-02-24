<?php ob_start(); ?>
<?php include('db_connect.php'); ?>



<?php //include('verifySession.php');?>
<?php
// state delete
if(isset($_GET['delete'])){
   $delete_id = $_GET['delete'];
   $delete_query = mysqli_query($conn, "DELETE FROM `enquiryform` WHERE id = $delete_id ") or die('query failed');
   if($delete_query){
      header('location:dealership_enquiry.php');
      $message[] = 'product has been deleted';
   }else{
      header('location:dealership_enquiry.php');
      $message[] = 'product could not be deleted';
   };
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

$query = "SELECT * FROM enquiryform LIMIT $start_from, $per_page_record";     
$rs_result = mysqli_query ($conn, $query);    
?>    




  

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>ElegoMoter || Dealership_enquiry</title>
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
          backgroud-color:#d9edf7;
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
  background-color:#d9edf7;
}

   
      </style>

</head>
<body style="background-color:#d9edf7;">
<?php include ('sidebar.php') ;?>
<?php

if(isset($message)){
   foreach($message as $message){
      echo '<div class="message"><span>'.$message.'</span> <i class="fas fa-times" onclick="this.parentElement.style.display = none;"></i> </div>';
   };
};

?>

<nav style="height:50px;width:100%;">
  <h3 style="margin-left:200px;padding-top:10px;color:#337ab7;">Dealer Enquiries</h3>
</nav>
<hr class="line">
<div class="main">

<div class="container">
<div class="container">


 
      <div class="row">
         <div class="col col-lg-4"></div>
         
         <div class="col-lg-5">
                      

<br>

</div>
</div>
</div>


<br>
      <br>
</section>
<div class="row">
   <div class="col col-lg-6 mb-2 ">
<div id="search-bar">
<!--   <form class="search-input">-->
        
<!--          <input   style="max-width:30%; border:1px solid black" class="form-control" type="text" placeholder="search "  id="search" autocomplete="off">-->
<!--</form>-->
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

<div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card mt-5">
                    <div class="card-header">
                        <!-- <h4>How to Filter or Find or Get data (records) between TWO DATES in PHP</h4> -->
                    </div>
                    <div class="card-body">
                    
                        <form action="" method="GET">
                            <div class="row">
                                <div class="col-md-4">
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
                                        <label>Click to Filter</label> <br>
                                      <button type="submit" class="btn btn-primary">Filter</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>

                <div class="card mt-4">
                    <div class="card-body">
                        <table class="table table-striped table-class table-bordered table2">
                            <thead>
                                <tr>
                                <th scope="col" class="bg-primary text-light text-center">State</th>
                                 <th scope="col" class="bg-primary text-light text-center">District</th>
                                 <th scope="col" class="bg-primary text-light text-center">Dealer Name</th>
                                 <th scope="col" class="bg-primary text-light text-center"> Adress</th>
                                 <th scope="col" class="bg-primary text-light text-center"> Phone number </th>
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
<section class="display-product-table">

<table class="table table-striped table-class table-bordered" id= "table-data">

  
      <thead>
         <th scope="col" class="bg-primary text-light text-center"> State</th>
         <th scope="col" class="bg-primary text-light text-center"> District/city</th>
         <th scope="col" class="bg-primary text-light text-center"> Area</th>
         <th scope="col" class="bg-primary text-light text-center"> Name</th>
         <th scope="col" class="bg-primary text-light text-center"> Contact</th>
         <th scope="col" class="bg-primary text-light text-center"> Age</th>
         <th scope="col" class="bg-primary text-light text-center"> Address</th>
         <th scope="col" class="bg-primary text-light text-center"> Email</th>
         <th scope="col" class="bg-primary text-light text-center">Action</th>
      </thead>

      <tbody>
         <?php
         
            $select_products = mysqli_query($conn, "SELECT * FROM `enquiryform`");
            if(mysqli_num_rows($select_products) > 0 ){
               while($row = mysqli_fetch_assoc($select_products))
              /* while ($row = mysqli_fetch_array($rs_result))*/   {
                $stateName =  $row['State'];
         ?>

         <tr>
             <?php
            $select_state = mysqli_query($conn, "SELECT * FROM `states` WHERE stateid = '".$row['State']." ' ");
            if(mysqli_num_rows($select_state) > 0 ){
               while($rw = mysqli_fetch_assoc($select_state))
              /* while ($row = mysqli_fetch_array($rs_result))*/   {
                  $GLOBALS['stateName']  = $rw['statename'];
         }
            }
            ?>
            
            <td><?php echo $stateName ?></td>
            <td><?php if(isset($row['district'])){echo  $row['district'] ; }else{ echo 0 ;} ?></td>
            <td><?php echo $row['wArea']; ?></td>
            <td><?php echo $row['Name']; ?></td>
            <td><?php echo $row['contact']; ?></td>
            <td><?php echo $row['Age']; ?></td>
            <td><?php echo $row['Adress']; ?></td>
            <td><?php echo $row['Email']; ?></td>
            <td style="text-align:center;">
            <a href="dealership_enquiry.php?showid=<?php  echo $row["id"];?>"> <i class="fas fa-eye"></i>  </a>

               <a href="dealership_enquiry.php?delete=<?php  echo $row["id"];?>" onclick="return confirm('are your sure you want to delete this?');"> <i class="fas fa-trash"></i>  </a>
              
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
        $query = "SELECT COUNT(*) FROM enquiryform";     
        $rs_result = mysqli_query($conn, $query);     
        $row = mysqli_fetch_row($rs_result);     
        $total_records = $row[0];     
          
    echo "</br>";     
        // Number of pages required.   
        $total_pages = ceil($total_records / $per_page_record);     
        $pagLink = "";       
      
        if($page>=2){   
            echo "<a href='dealership_enquiry.php?page=".($page-1)."'>  Prev </a>";   
        }       
        for ($i=1; $i<=$total_pages; $i++) {   
         if ($i == $page) {   
               $pagLink .= "<a class = 'active' href='dealership_enquiry.php?page="  
                                                 .$i."'>".$i." </a>";   
           }               
           else  {   
               $pagLink .= "<a href='dealership_enquiry.php?page=".$i."'>   
                                                 ".$i." </a>";     
           }   
 };          
        
        




          
        echo $pagLink;   
  
        if($page<$total_pages){   
            echo "<a href='dealership_enquiry.php?page=".($page+1)."'>  Next </a>";   
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
<div class="" id="exampleModalScrollable" tabindex="-1" role="dialog" aria-labelledby="exampleModalScrollableTitle" aria-hidden="true" style="position:absolute;margin-left:500px;top:150px;">
  <div class="modal-dialog modal-dialog-scrollable" role="document">
    <div class="modal-content">
      <div class="modal-header">
     
      </div>
      <div class="modal-body">
       
      <table class="table table-bordered table-striped roundedTable table1"style="">
              <thead>
                  <h3 style="position:absolute;"><b>Details</b></h3>
                <button type="button" id="hide" onclick="hide()"class="btn btn-secondary" style="float:right;margin-bottom:15px;color:red;" data-dismiss="modal"><b>X</b></button>
                                        </thead>
                                        <tbody>
<?php
                           $show_query = mysqli_query($conn, "SELECT * FROM `enquiryform` WHERE id = '$showid' ");

                          if(mysqli_num_rows($show_query) > 0){
                             while($row = mysqli_fetch_assoc($show_query)){
                               
                           ?>
                       
                       
                     <tr>
                    <th>State</th>
                    <td><?php echo $stateName; ?></td>
                    </tr>
                    <tr  style="background-color:#ABB2B9;">
                    <th>District/City</th>
                    <td><?php echo $row['District']; ?></td>
                    </tr><tr>
                    <th>Area</th>
                    <td><?php echo $row['wArea']; ?></td>
                    </tr>
                    <tr  style="background-color:#ABB2B9;">
                    <th>Name</th>
                    <td><?php echo $row['Name']; ?></td>
                    </tr>
                    <tr>
                    <th>Contact</th>
                    <td><?php echo $row['contact']; ?></td>
                    </tr>
                    <tr style="background-color:#ABB2B9;">
                    <th>Age</th>
                    <td><?php echo $row['Age']; ?></td>
                    </tr>
                     <tr>
                    <th>Email</th>
                    <td><?php echo $row['Email']; ?></td>
                    </tr>
                    <tr style="background-color:#ABB2B9;">
                    <th>Address</th>
                    <td><?php echo $row['Adress']; ?></td>
                    </tr>
                    <tr>
                    <th>Experience</th>
                    <td><?php echo $row['Experience']; ?></td>
                    </tr>
                     <tr style="background-color:#ABB2B9;">
                     <th>pincode</th>
                    <td><?php echo $row['pincode']; ?></td>
                      </tr>
                     <tr>
                     <th>Present profile</th>
                    <td><?php echo $row['Present_profile']; ?></td>
                     </tr>
                     <tr><th scope="col" class="bg-primary text-light text-center">Showroom</th>
                     <th scope="col" class="bg-primary text-light text-center">Detailes</th>
                     </tr>
                     <tr style="background-color:#ABB2B9;">
                     <th >Area(in sq ft):</th>
                    <td><?php echo $row['sArea']; ?></td>
                      </tr>
                      <tr>
                     <th>Frontage(in ft):</th>
                    <td><?php echo $row['aFrontage']; ?></td>
                      </tr>
                      <tr style="background-color:#ABB2B9;">
                     <th >Height(in ft):</th>
                    <td><?php echo $row['tHeight']; ?></td>
                      </tr>
                        <tr>
                         <th>Remark</th>
                    <td><?php echo $row['Remark']; ?></td>
                      </tr>
                     
                      <tr style="background-color:#D6DBDF;">
                     <th>Remark</th>
                    <td><?php echo $row['Remark2']; ?></td>
                       </tr>
                    
                      <tr>
                     <th>Remark</th>
                    <td><?php echo $row['Remark3']; ?></td>
                       </tr>
                       <tr><th scope="col" class="bg-primary text-light text-center">Workshop</th>
                     <th scope="col" class="bg-primary text-light text-center">Detailes</th>
                     </tr>
                      <tr>
                     <th>Area</th>
                    <td><?php echo $row['Area']; ?></td>
                      </tr>
                      <tr style="background-color:#ABB2B9;">
                     <th>Frontage</th>
                    <td><?php echo $row['tFrontage']; ?></td>
                      </tr>
                     <th>height</th>
                    <td><?php echo $row['rheight']; ?></td>
                      </tr>
                        <tr style="background-color:#D6DBDF;">
                     <th>Remark</th>
                    <td><?php echo $row['Remark4']; ?></td>
            
                      </tr>
                      
                     <th>Remark</th>
                    <td><?php echo $row['Remark5']; ?></td>
            
                      </tr>
                      <tr style="background-color:#D6DBDF;">
                     <th>Remark</th>
                    <td><?php echo $row['Remark6']; ?></td>
            
                      </tr>
                    
                      
                       <tr><th scope="col" class="bg-primary text-light text-center">Warehouse</th>
                     <th scope="col" class="bg-primary text-light text-center">Detailes</th>
                     </tr>
                       <tr>
                     <th>Area</th>
                    <td><?php echo $row['rArea']; ?></td>
            
                      </tr>
                      <tr style="background-color:#D6DBDF;">
                     <th>status (Covered/Accessible)</th>
                    <td><?php echo $row['status']; ?></td>
            
                      </tr>
                        <th>Remark</th>
                    <td><?php echo $row['Remark7']; ?></td>
            
                      </tr>
                      <tr style="background-color:#D6DBDF;">
                     <th>Remark</th>
                    <td><?php echo $row['Remark8']; ?></td>
            
                      </tr>
                     
                  
                       <tr><th scope="col" class="bg-primary text-light text-center">Other Store Requirements</th>
                     <th scope="col" class="bg-primary text-light text-center">Detailes</th>
                     </tr>
                     <th>Investment-CI & VI (in Lacs)</th>
                    <td><?php echo $row['Investment_cv']; ?></td>
            
                      </tr>
                      <tr style="background-color:#D6DBDF;">
                     <th>Investement-Equipment / Others (in Lacs)</th>
                    <td><?php echo $row['Investement_Equipment']; ?></td>
            
                      </tr>
                      
                     <th>Working Capital (in Lacs)</th>
                    <td><?php echo $row['Working_Capital']; ?></td>
            
                      </tr>
                      <tr style="background-color:#D6DBDF;">
                     <th>Plan for Own Funds (in Lacs)</th>
                    <td><?php echo $row['pof']; ?></td>
            
                      </tr>
                      
                     <th>Plan for Loans (in Lacs)</th>
                    <td><?php echo $row['Plan_for_Loans']; ?></td>
            
                      </tr>
                      <tr style="background-color:#D6DBDF;">
                         <th>Remark</th>
                    <td><?php echo $row['Remark9']; ?></td>
            
                      </tr>
                        <tr >
                     <th>Remark</th>
                    <td><?php echo $row['Remark10']; ?></td>
            
                      </tr>
                      <tr style="background-color:#D6DBDF;">
                     <th>Remark</th>
                    <td><?php echo $row['Remark11']; ?></td>
            
                      </tr>
                    
                     <th>Remark</th>
                    <td><?php echo $row['Remark12']; ?></td>
            
                      </tr>
                      <tr style="background-color:#D6DBDF;">
                     <th>Remark</th>
                    <td><?php echo $row['Remark13']; ?></td>
            
                      </tr>
                      
                       <tr><th scope="col" class="bg-primary text-light text-center">Other</th>
                     <th scope="col" class="bg-primary text-light text-center">Detailes</th>
                     </tr>
                      
                      <tr style="background-color:#D6DBDF;">
                     <th> Nature of organization proposed</th>
                    <td><?php echo $row['organization_proposed']; ?></td>
            
                      </tr>
                      
                     <th>Total Tunrover of business:</th>
                    <td><?php echo $row['Tunrover_business']; ?></td>
            
                      </tr>
                      <tr style="background-color:#D6DBDF;">
                     <th>Showroom / Workshop</th>
                    <td><?php echo $row['S_ Workshop']; ?></td>
            
                      </tr>
                     
                     <th>Land / Building</th>
                    <td><?php echo $row['Land_Building']; ?></td>
            
                      </tr>
                      <tr style="background-color:#D6DBDF;">
                     <th>Showroom Property</th>
                    <td><?php echo $row['Showroom_Property']; ?></td>
            
                      </tr>
                      
                     <th>Additional Information if any</th>
                    <td><?php echo $row['Additional_Information']; ?></td>
            
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
      </div>
      <div class="modal-footer">
        <!--<button type="button" id="hide" onclick="hide()"class="btn btn-secondary" data-dismiss="modal">Close</button>-->
        
      </div>
    </div>
  </div>
</div>
<?php
}

?>


       

      

   



  









</div>
<script>
function hide(){
document.getElementById('exampleModalScrollable').style.display="none";


}

</script>





<!-- custom js file link  -->
 <SCRIPT SRC="JS/SCRIPT.JS"></SCRIPT>
 <SCRIPT SRC="JS\INDEX.JS"></SCRIPT>
 <SCRIPT>   
     FUNCTION GO2PAGE()   
     {   
         VAR PAGE = DOCUMENT.GETELEMENTBYID("PAGE").VALUE;   
         PAGE = ((PAGE><?PHP ECHO $TOTAL_PAGES; ?>)?<?PHP ECHO $TOTAL_PAGES; ?>:((PAGE<1)?1:PAGE));   
         WINDOW.LOCATION.HREF = 'dealership_enquiry.php?PAGE='+PAGE;   
     }   
   </SCRIPT>  

 <SCRIPT TYPE="TEXT/JAVASCRIPT" SRC="JS/JQUERY.JS"></SCRIPT>
 <SCRIPT TYPE="TEXT/JAVASCRIPT">
   $(DOCUMENT).READY(FUNCTION(){
        LIVE SEARCH
      $("#SEARCH").ON("KEYUP",FUNCTION(){
       VAR SEARCH_TERM = $(THIS).VAL();

       $.AJAX({
          URL: "dealership_enquiry.php",
          TYPE: "POST",
          DATA : {SEARCH:SEARCH_TERM },
          SUCCESS: FUNCTION(DATA) {
           $("#TABLE-DATA").HTML(DATA);
          }
       });
      });
   });
 </SCRIPT>

</body>
</html>
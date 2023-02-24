<?php
include ('admin/db_connect.php')

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> dealer dealers | ElegoMotors</title>
     <!--favicon -->
    <link rel="icon" type="image/x-icon" href="assets\images\favicon.png">
    <!--discription -->
    <meta name="description" content="">
    <!--keywords -->
    <meta name="keywords" content="">
      <!--canonical -->
    <link rel="canonical" href="" />
    <link rel="stylesheet" href="assets/css/main.css" >
    <link rel="stylesheet" href="assets/css/about.css" >
    <link rel="stylesheet" href="assets/css/navbar.css" >
     <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
     <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
     <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
     <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
     <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" >

<style>
    .table1{
        font-size:13px;
        background-color:none;
    }
    

.well {
    background: none;
    height: auto;
   border-radius:20px;
}

.table-scroll tbody {

    overflow-y: scroll;
}
.container-fluid{
    margin-left:0px!important;
    margin-right:0px!important;
    padding-left:0px!important;
    padding-right:0px!important;
}
.fa2{
    display:none;
}
.request:hover{
    cursor:pointer;
    text-decoration:none;
    
}


 @media only screen and (max-width: 786px){
  #table-data thead{
    display:none;
  }
   .table,.table tbody,.table tr,.table td{
    display:block;
    width:100%;
    border:none;
   }
   .table tr{
    margin-bottom:2px;
   }
   .table tr, td, th{
    border:none !important;
    
   }
   .table td{
    display:block;
   }
   .btn2{
    display:none;
   }
   .table td{
    display:block;
    color:#1e4b72;
   }
   .table td:hover{
       text-decoration:underline;
   }
   .btn2{
       display:none;
   }
   .table td{
       display:block;
       
   }
   .sta{
       
   }
   .dist{
       position:relative;
       margin-left:150px;
       bottom:20px;
   }
   .addr{
       width:100px;
   }
   .fa2{
       display:inline-block;
       float:right;
       padding:5px;
       
       border-radius:7px;
       font-size:25px;
       background-color:#1e4b72;
       color:white;
   }
   .request:hover{
    cursor:pointer;
    text-decoration:none;
    
}
h4{
    border:none;
    
}
.fa1{
  display:none;
             
}
.fa2{
  display:inline-block;
}
  }


</style>
</head>
<body   style="background-color:#e5e9f1">

    
     <!--Nav section-->
    <?php include "nav.php";?>
  







<div class="container-fluid mt-5 a" id="myDiv" >

<div class="container dealerTable  tb-title mt-5 mb-5" style="overflow-x:auto;">
  <h2 class="text-center mb-5 mt-5">Our Dealers Details</h2>

<div class="row">
   <div class="col col-lg-6 mb-3 ">
        <div id="search-bar">
         <form class="search-input">
        
          <input   style="max-width:60%; border:1px solid black; border-radius:20px;" class="form-control" type="text" placeholder="Search Dealer"  id="search" autocomplete="off">
       </form>
        </div>

</div>

 <div class ="well"  style="overflow-x:auto;"> 
<table class="table table-bordered table-striped roundedTable d table1"style=" " id= "table-data">

  
      <thead>

      <tr style="background-color:gray;padding:5px;">
          <td>State</td>
         <td> District</td>
         <td> Name</td>
         <td> Location</td>
         <td> Enquiry</td>
</tr>
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
              /* while ($row = mysqli_fetch_array($rs_result))*/   {
                  $GLOBALS['stateName']  = $rw['statename'];
            }
            }
            ?>
                

         
              <td class="sta"style="text-transform:uppercase;"><?php echo $stateName ?></td>
            
            <td  class="dist"style="text-transform:uppercase;"> <?php if(isset($row['district'])){echo  $row['district'] ; }else{ echo 0 ;} ?></td>
            <td><a class=" request" style="color:black;font-weight:bold;color:#1e4b72;" data-toggle="modal" data-target="#myModal" data_req_id= "<?php echo $row['d_name'];?>" dealer_mail_id="<?php echo $row['p_email'];?>"><?php echo $row['d_name']; ?><i class="fa fa-chevron-circle-right fa2" aria-hidden="true"></i></a></td>
            <td class="addr"><?php echo $row['d_adress']; ?></td>
            
                <td><a class="btn btn-outline-danger request btn2" style="background-color:#ffff;color:black;" data-toggle="modal" data-target="#myModal" data_req_id= "<?php echo $row['d_name'];?>" dealer_mail_id="<?php echo $row['p_email'];?>"> <i class="fa fa-question-circle text-center fa1" aria-hidden="true"></i> </a></td>
             

         </tr>

         <?php
                                            
                                          
            };    
            }else{
               echo "<div class='empty'>no dealers added</div>";
            };
         ?>
  
        
    </tbody>
</table> 
</div>
       
</div>
          </div>
<!-- dealer-->    
<!-- enquiry model -->



  <div class="container">
  <!-- The Modal -->
  <div class="modal fade" id="myModal"style="margin-top:50px;padding-top:5px">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">Book Test Ride </h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
           
        <!-- Modal body -->
        <div class="modal-body">
        <form class="form-horizontal" action="testRideMail.php" method="post">
        <div class="form-group">
    <label class="control-label col-sm-2" for="dealer">Dealer</label>
    <div class="col-sm-10">
      <input style="border:none"  name="d_location" id="dealer_id" value=" " readonly>
      <input type="hidden" name="d_mail" id="dealer_email" value=" ">
    





    </div>
  </div>
          <div class="form-group">
    <label class="control-label col-sm-2"  for="pwd">Name:</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="user"  id="pwd" placeholder="Enter Name">
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-2" for="email">Email:</label>
    <div class="col-sm-10">
      <input type="email" class="form-control" name="email" id="email" placeholder="Enter email">
    </div>
  </div>

  <div class="form-group">
  <label class="control-label col-sm-2" for="pwd">Ph:</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="phone" id="pwd" placeholder="Enter Number">
    </div>
  </div>
  <div class="form-group">
  <label class="control-label col-sm-2"    for="pwd">Date:</label>
    <div class="col-sm-10">
      <input type="date" name="date"  class="form-control" id="date_picker">
    </div>
  </div>

  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
      <button type="submit" name="submit"class="btn btn-danger">RegisterNow</button>
    </div>
  </div>
</form>



        </div>
        
        <!-- Modal footer -->
      
        
      </div>
    </div>
  </div>
</div>





<!-- enquiry model -->


  <!-- Site footer -->
   
  <?php include "footer.php";?>
  
  <!--footer ends -->
  
  <!--searchbar -->
  
  <script>
        $(document).ready(function(){
         $(".request").click(function(){
             
         var button = $(this);
         var reqId = button.attr("data_req_id");
         var reqmail = button.attr("dealer_mail_id");
          $('#dealer_id').val(reqId);
          $('#dealer_email').val(reqmail);
         

         })


        });

//   date picker
  </script>
       <script language="javascript">
        var today = new Date();
        var dd = String(today.getDate()).padStart(2, '0');
        var mm = String(today.getMonth() + 1).padStart(2, '0');
        var yyyy = today.getFullYear();

        today = yyyy + '-' + mm + '-' + dd;
        $('#date_picker').attr('min',today);
    </script>
  
  
  
  
  
  <script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript">
  $(document).ready(function(){
         // Live Search
     $("#search").on("keyup",function(){
       var search_term = $(this).val();

       $.ajax({
         url: "dealer_enquirySearch.php",
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
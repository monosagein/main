
<?php
include ('admin/db_connect.php')

?>





<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TestRide | ElegoMotors</title>
     <!--favicon -->
    <link rel="icon" type="image/x-icon" href="assets\images\favicon.png">
    <!--discription -->
    <meta name="description" content="">
    <!--keywords -->
    <meta name="keywords" content="">
      <!--canonical -->
    <link rel="canonical" href="" />
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="assets\css\main.css" >
    <link rel="stylesheet" href="assets/css/navbar.css" >
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script> 
 <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
<link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css"> -->
   <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.1/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
   <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
     <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>



<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>



   
   
    

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" >

<style>
  *{
    padding:0;
    margin:0;
  }
  #rcorners2 .btn{
        margin:10px;
    }
    #rcorners2 {
  border-radius: 15px 50px 30px;

  background:#ffff;
  padding: 10px;

}
#answer {

margin-right: auto;
margin-left: auto;
}

</style>
</head>
<body style="background-color:#f0f1f5">

      <!--Nav section-->
      <?php include "nav.php";?>
     <!-- Ends Nav section-->

   <div class="container-fluid" style="margin-top:100px;">
     <div class="row">
        <div  class=" col-lg-5 col-md-12 col-sm-12" id="mydiv">
          <img width="90%"  src="assets\images\22.1.png"/>
        </div>

          <div class=" col-lg-7 col-md-12 col-sm-12  text-left">
          <h4 style="">Experience the Scooty before you buy</h4>
                <h1 style="">Schedule your test rides</h1>
                <p style="">Your infinite experience has just begun! Please follow the instructions <br>below to schedule your test ride with Infinity e.1. Can't wait to meet you!</p>
                
                <h4 style="">   Select Your Test Ride Center</h4><br>
                
                <!--states search-->
                
                     
                <section>
            <div class="row ">
            <div class = "container">
            <form action="" method="post"  enctype="multipart/form-data">
            <div class="col-sm-4">
                        <div class="form-group">           
     <select id="SelectState" class="form-control "  name="stateid" style="width:200px;" >
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
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="form-group">
                        <select id="showDist" name="dist" class="form-control "  style="width:200px;" >
                                 <option value="">Select state first</option>
                                </select>
                        </div> 
                    </div>
                    <div class="col-sm-4">
                        <div class="form-group">
                        <button  type="button"  id="startSearch" name="startSearch" class="btn btn-success "> Search</button>
                             <script type="text/javascript"  src="testrideajax.js"></script>
                                </div>
                                </div>                   
         </form>
</div>
</div>
<section>
<!--                <div style=""><br>-->
                
                
<!--                <div class="row">-->
                 
                      
<!--                      <form action="" method="post"  enctype="multipart/form-data">-->


         

<!--     <select id="SelectState" class="form-control"  name="stateid" style="width:200px;" >-->
<!--    <option value=""  >Select state</option>-->
<!--    </?php-->
<!--                                 $sql= "SELECT * FROM `states`";-->
<!--                                 $result=mysqli_query($conn,$sql);-->
<!--                                     if(mysqli_num_rows( $result) > 0){-->
<!--                                         while($r = mysqli_fetch_assoc($result)){-->
<!--                                         echo '<option style=" text-transform: uppercase;" value="'.$r["stateid"].' "> '.$r["statename"].'</option>';-->
<!--                                     }-->
<!--                                 }-->
<!--                             ?>-->
<!--</select><br>-->


<!-- <div class="from-group ">-->
<!--   <div class="">-->
<!--      <select id="showDist" name="dist" class="form-control"  style="width:200px;" >-->
<!--                                 <option value="">Select state first</option>-->
                         
<!--                          </select><br>-->
<!--                          <button  type="button"  id="startSearch" name="startSearch" class="btn btn-success"> Search</button>-->
<!--                             <script type="text/javascript"  src="testrideajax.js"></script>-->
                                   
<!--</div>-->
<!--</form>-->
<!--</div>-->

                      
                     <div id="rcorners2"  class="col-lg-10 col-md-10 col-sm-10">  
                      
                      
                <?php
         
                   $select_products = mysqli_query($conn, "SELECT * FROM `dealersdata`");
                   if(mysqli_num_rows($select_products) > 0 ){
                      while($row = mysqli_fetch_assoc($select_products))
                     /* while ($row = mysqli_fetch_array($rs_result))*/   {
              
                 ?>
                  
            <button type="button" id="button-data" class="btn btn-outline-danger request" style="background-color:#ffff;color:black;border:2px solid #D3D3D3" data-toggle="modal" data-target="#myModal" data_req_id= "<?php echo $row['d_name'];?>" dealer_mail_id="<?php echo $row['p_email'];?>" data-toggle="tooltip" data-placement="top" title="<?php echo $row['d_adress'];?>"><?php echo $row['d_name']; ?> </button>

           <?php
            
            };    
            }else{
               echo "<div class='empty'>no dealers added</div>";
            };
            ?>
            </div>
           </div>
          </div>
            </div>
            </div> 

 
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

 <!-- Site footer -->
   
 <?php include "footer.php";?>
  
  <!--footer ends -->
 
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

   
  </script>
       <script language="javascript">
        var today = new Date();
        var dd = String(today.getDate()).padStart(2, '0');
        var mm = String(today.getMonth() + 1).padStart(2, '0');
        var yyyy = today.getFullYear();

        today = yyyy + '-' + mm + '-' + dd;
        $('#date_picker').attr('min',today);
    </script>
    
    <!--addstate sript-->
  
  <script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript">
  $(document).ready(function(){
         // Live Search
     $("#startSearch").on("click",function(){
        //  alert("hi");
       var search_term = $("#showDist").val();

       $.ajax({
         url: "testrideSearch.php",
         type: "POST",
         data : {search:search_term },
         success: function(data) {
             console.log(data)
           $("#rcorners2").html(data);
         }
       });
     });
  });
</script>

</body>
</html>


<?php ob_start(); ?>
<?php include('db_connect.php'); ?>
<?php include('verifySession.php');?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js" integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/chartist.js/latest/chartist.min.css">
    <link href="assets/plugins/global/plugins.bundle.css" rel="stylesheet" type="text/css"/>
     <script src="assets/plugins/global/plugins.bundle.js"></script>
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <title>Dashboard | Elego Motors</title>
     <!--favicon -->
    <link rel="icon" type="image/x-icon" href="uploaded_img\favicon.png">
    <!--discription -->
    <meta name="description" content="">
    <!--keywords -->
    <meta name="keywords" content="">
      <!--canonical -->
    <link rel="canonical" href="" />
    <style>
    
    body{
         background-color:#d9edf7;
    }
     form.example input[type=text] {
  padding: 10px;
  font-size: 17px;
  border: 1px solid grey;
  float: left;
  width: 80%;
  background: #f1f1f1;
  
}

form.example a {
  float: right;
  width: 20%;
  padding: 10px;
  background: #2196F3;
  color: white;
  font-size: 17px;
  border: 1px solid grey;
  border-left: none;

  cursor: pointer;
}

form.example a:hover {
  background: #0b7dda;
}

form.example::after {
  content: "";
  clear: both;
  display: table;
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

<nav style="height:70px;width:100%;top:0;">
  <h4 style="margin-left:200px;padding-top:25px;color:#337ab7;">Dashboard</h4>
</nav>
<hr>

<!-- card start -->
<div class="main">
        <main class="py-6 bg">
            <div class="container ">
                  <div class="row g-6 ">
                    <!--<div class="col-lg-3 col-md-12 col-sm-12 mt-5"></div>-->
                    <div class="col-lg-4 col-sm-12 col-md-12 mt-5">
                        <div class="card shadow"style=" border:1px solid white ; border-radius:20px;">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col">
                                        <span class="h6 font-semibold text-muted text-sm d-block mb-2"> <a type="button" href="websiteLeads.php"style="text-decoration:none;" >Website Enquiries </a></span>
                                       
                                       <!--<a type="button" href="websiteLeads.php" >Leads Detailes</a>-->
                                    </div>
                                    <div class="col-auto">
                                        <div class="icon icon-shape"><b>
                                        <?php 
                                         $query="select * from `visit_leads`";
                                       

                                        $result = mysqli_query($conn, $query);
                                        if($result)
                                         {
                                           
                                           $row = mysqli_num_rows($result);
                                           if ($row)
                                           {
                                              printf(" " . $row);
                                           }
                                         }else
                                         {
                                            echo '<h4 class="mb-4"> no data';
                                         }

                                        ?></b>
                                 </div>
                             </div>
                         </div>
                     
                     </div>
                </div>
             </div>
             <div class="col-lg-4 col-md-12 col-sm-12 mt-5">
                        <div class="card shadow" style=" border:1px solid white ; border-radius:20px;">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col">
                                        <span class="h6 font-semibold text-muted text-sm d-block mb-2"><a type="button" href="testRideLeads.php" style="text-decoration:none;" >Test Ride Enquiries</a></span>
                                         
                                         <!--<a type="button" href="testRideLeads.php" >Leads Detailes</a>-->
                                    </div>
                                    <div class="col-auto">
                                        <div class="icon icon-shape"><b>
                                        <?php 
                                         $query="select * from `testride_leads`";
                                       
                                        $result = mysqli_query($conn, $query);
                                        if($result)
                                         {
                                           
                                           $row = mysqli_num_rows($result);
                                           if ($row)
                                           {
                                              printf(" " . $row);
                                           }
                                         }else
                                         {
                                            echo '<h4 class="mb-4"> no data';
                                         }

                                        ?> </b>
                                        </div>
                                    </div>
                                </div>
                           
                            </div>
                        </div>
                    </div>
                    <!--dealers-enquiry-->
                    <div class="col-lg-4 col-md-12 col-sm-12 mt-5">
                        <div class="card shadow" style=" border:1px solid white ; border-radius:20px;">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col">
                                        <span class="h6 font-semibold text-muted text-sm d-block mb-2"><a type="button" href="dealership_enquiry.php" style="text-decoration:none;" >Dealer Enquiries</a></span>
                                         
                                         <!--<a type="button" href="testRideLeads.php" >Leads Detailes</a>-->
                                    </div>
                                    <div class="col-auto">
                                        <div class="icon icon-shape"><b>
                                        <?php 
                                         $query="select * from `enquiryform`";
                                       
                                        $result = mysqli_query($conn, $query);
                                        if($result)
                                         {
                                           
                                           $row = mysqli_num_rows($result);
                                           if ($row)
                                           {
                                              printf(" " . $row);
                                           }
                                         }else
                                         {
                                            echo '<h4 class="mb-4"> no data';
                                         }

                                        ?> </b>
                                        </div>
                                    </div>
                                </div>
                           
                            </div>
                        </div>
                    </div>
                    <!--<div class="col-lg-4 col-md-12 col-sm-12 mt-5"></div>-->
                    <div class=" container card-body my-5 text-center mt-0 ">
                   
<!-- <form action="" method="GET">
   <div class="row">
      <div class="col-md-3">
          <div class="form-group ">
              <label>From Date</label>
                 <input type="date" name="from_date" value="if(isset($_GET['from_date'])){echo $_GET['from_date']; } ?>"                         
                 class="form-control border-primary"required="requied">
             </div>

          </div>
    <div class="col-md-3">
         <div class="form-group">
             <label>To Date</label>
                   <input type="date" name="to_date" value="if(isset($_GET['to_date'])){echo $_GET['to_date']; } ?>" 
                   class="form-control  border-primary"required="requied">
         </div>
    </div>
     <div class="col-md-3">
           <div class="form-group">
               <label>click to filter</label><br>
                  <button type="submit" name="from_date" class="btn btn-primary">Filter</button>
            </div>
        </div>       
   </div>
</form> -->
 

        </main> 
<!-- <cardend -->


<!--dashbord table  start-->
<div class="container">
  <div class="row">
    <div class="col-lg-12 col-md-12 col-sm-12">
<!-- <table class=" container table table-striped table-bordered mt-5 mb-5" >
     <thead >
      
       <tr>
      <th scope="col" class="bg-primary text-light text-center">Name</th>
      <th scope="col" class="bg-primary text-light text-center">Email</th>
      <th scope="col" class="bg-primary text-light text-center">Phone</th>
      <th scope="col" class="bg-primary text-light text-center">Message</th>
      <th scope="col" class="bg-primary text-light text-center">Date</th>
     </tr>
  </thead>
  <tbody>
 <?php 
  // $sql="select * from `visit_leads`";
  // $result=mysqli_query($conn,$sql);
  // if($result){
  // while( $row=mysqli_fetch_assoc($result)){
  //  $id=$row['id'];
  //  $Name=$row['l_name'];
  //  $Email=$row['l_email'];                                      
  //  $Phone=$row['l_number'];  
  //
  //  $Message=$row['l_messege'];
  //  $Date=$row['l_date'];
  //  echo  ' <tr>
 //
  //  <td class="text-center"> '.$Name.'</td>
  //  <td  class="text-center"> '.$Email.' </td>
  //  <td  class="text-center"> '.$Phone.' </td>   
  //  
  //  <td  class="text-center"> '.$Message.' </td>
  //  <td  class="text-center"> '.$Date.'</td>
  //  
  //    </tr> ';
  // }
  // }else{
  //  echo "no data";
  // }

?>
 <td> <button class="btn btn-primary my-5"><a href="Update.php? updateid='.$id.'" class="text-light">Update</a></button></td>-->
    <!-- <td><button class="btn btn-primary my-5"><a href="delete.php? deleteid='.$id.'" class="text-light">Delete</a><i class="bi bi-trash"></i></button></td>  


  </tbody>
</table> -->
  </div>
  <div>
</div> 

  </div>
</div>
  </div>
<script src="https://cdn.jsdelivr.net/chartist.js/latest/chartist.min.js"></script>


</body>
</html>
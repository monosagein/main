
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>price</title>
   <!--favicon -->
    <link rel="icon" type="image/x-icon" href="assets\images\favicon.png">
    <!--discription -->
    <meta name="description" content="">
    <!--keywords -->
    <meta name="keywords" content="">
      <!--canonical -->
    <link rel="canonical" href="" />
  <link rel="stylesheet" href="assets\css\main.css" >
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

<!-- slider-->
<script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" >


<style>

.img-size{
  width:100%;
  height:40vh;
  object-fit:scale-down;
}
.banimg-size{
  width:100%;
  height:50vh;
  object-fit:contain;
}
.cd{
  border-radius:30px;
}
.homesection{
    margin-top:70px;
}


</style>
</head>
<body  style="background-color:#e5e9f1">


     <!--Nav section-->
     <?php include "nav.php";?>
     <!-- Ends Nav section-->
     <div class="homesection">
     <div class="container-fluid"style="">
     <div class="row mt-5">
      <div class="col col-lg-1"></div>
     <div class="col-lg-5 col-md-6 col-sm-12 text-center">
      <h2 style="text-align:left"> Affordable & Stylish Options for Every Budget</h2>
      <p style="text-align:justify" >Are you in the market for a new scooty? Look no further! We offer a wide range of options to fit every budget and style.
Our scooties are designed to provide you with the best combination of affordability, performance, and style.
From entry-level scooties to premium models, we have something for everyone</p>

<p  style="text-align:justify">Don't wait any longer, come and visit us today and take a test ride on one of our scooties. Our friendly and knowledgeable staff will be happy to assist you in finding the perfect scooty to fit your needs and budget.</p>
<br>
<a href="test-ride.php"class="btn " style="background-color:#1e4b72;color:white;">BOOK TEST RIDE</a>
    </div>
    <div class=" col col-lg-1 sm-12 "></div>
    <div class="col-lg-5 col-md-6 col-sm-12">
    <img  src="assets/images/22.0.png"  class=banimg-size alt="img">   


    </div>
    </div>
           
           <div class="row mt-5 h-100"style="background-color:#d1d1d1;min-height:400px; display:flex;align-items:center;justify-content:center">
    <div class=" col col-lg-1 "></div>
        <div class="col-lg-5 col-md-6 col-sm-12 mb-4 mt-4">
     
 
  <div class="card cd" style="">
    <img class="card-img-top img-size" src="assets\images\grey.png" alt="Card image"  >
    <div class="card-body">
    <h4 class="card-title text-center">Model-1.O</h4>
      <h4 class="card-title text-center"><b>Starting Price</b>:<span>&#8377;</span> 60,000</h4>
     
      <!-- <a href="#" class="btn btn-primary">Contact Us</a> -->
    </div>
  </div>
</div>

<div class="col-lg-5 col-md-6 col-sm-12 mb-4 mt-4">
  
   

  <div class="card cd ">
    <img class="card-img-top img-size" src="assets\images\22.2.png" alt="Card image" >
    <div class="card-body">
    <h4 class="card-title text-center">Model-2.O</h4>
      <h4 class="card-title text-center"><b>Starting Price</b>:<span>&#8377;</span> 63,000</h4>
      <!-- <a href="#" class="btn btn-primary">Contact Us</a> -->
    </div>
  </div>
</div>
<div class=" col col-lg-1 "></div>
</div>

  
</div>
</div>
   <!-- Site footer -->
   
   <?php include "footer.php";?>
  
  <!--footer ends -->
</body>
</html>
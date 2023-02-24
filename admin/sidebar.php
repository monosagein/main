<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
.sidenav {
  height: 100%;
  width: 160px;
  position: fixed;
  z-index: 1;
  top: 0;
  left: 0;
  background-color: #0f3449;
  overflow-x: hidden;
  padding-top: 20px;
}

.sidenav a {
  padding: 6px 8px 6px 16px;
  text-decoration: none;
  font-size: 16px;
  color: #ffff;
  display: block;
}
.sidenav h3{
  color:#ffff;
}

.sidenav a:hover {
  color: #f1f1f1;
}


@media screen and (max-height: 450px) {
  .sidenav {padding-top: 15px;}
  .sidenav a {font-size: 18px;}
}
</style>
</head>
<body>

<div class="sidenav">
 
  <a href="admin.php"><img src="uploaded_img\logo.png" width="100%" alt="logo"/></a>
  <hr>
  <!-- <h3>Dashboard</h3> -->
  <div style="margin-top:30px;font-weight:bold">
  <a href="admin.php"><i class="fa-solid fa-user-group-crown"></i>Enquiries</a>
<!--  <div class="dropdown">-->
<!--    <button class="btn btn dropdown-toggle text-white  " style ="width:100px; font-size:16px;" data-toggle="dropdown">-->
<!--      Dealers-->
<!--    </button>-->
     
<!--    <div class="dropdown-menu">-->
<!--      <a class="dropdown-item text-dark" href="dealers.php">Add Dealers</a>-->
<!--      <a class="dropdown-item text-dark" href="dealership_enquiry.php">Dealers Enquiry</a>-->
    
<!--    </div>-->
<!--  </div>-->
<!--</div>-->
  <a href="dealers.php">Add Dealers</a>
  <a href="features.php">Features</a>
   <a href="addState.php">Add State</a>
  <!--<a href="dealership_enquiry.php">Enquiries list</a>-->
</hr>
<a href="logout.php">Logout</a>
</div>
</div>

   
</body>
</html> 
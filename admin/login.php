
<?php include('db_connect.php'); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/chartist.js/latest/chartist.min.css">
    <link href="assets/plugins/global/plugins.bundle.css" rel="stylesheet" type="text/css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
     <script src="assets/plugins/global/plugins.bundle.js"></script>
        <!-- icon link -->
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- fontfamily link -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;1,400&display=swap" rel="stylesheet">

    <!-- end date cdns -->
    <title>Login ElegoMotors</title>
     <!--favicon -->
    <link rel="icon" type="image/x-icon" href="uploaded_img\favicon.png">
    <!--discription -->
    <meta name="description" content="">
    <!--keywords -->
    <meta name="keywords" content="">
      <!--canonical -->
    <link rel="canonical" href="" />
    <style>
 body {
    font-family: 'Poppins', sans-serif;
    background-color:#f5f5f5;
}
h1 {
    margin-bottom: 40px;
}
label {
    color: #333;
}
.btn-send {
    font-weight: 300;
    text-transform: uppercase;
    letter-spacing: 0.2em;
    width: 80%;
    margin-left:0px;
    }
.help-block.with-errors {
    color: #ff5050;
    margin-top: 5px;
}
.card{
	margin-left: 10px;
	margin-right: 10px;
}
.card{
    height:500px;
    width:350px;
    border-radius:20px;
}
input{
    border-top:none!important;
    border-left:none!important;
    border-right:none!important;
    outline:none!important;
    padding-left:25px!important;
    height: 20px;
    border-bottom:1px solid ;
   
}
.btn{
    border-radius:30px;
    height:40px;
    width:250px;
    text-align:center;
    font-weight:bold;
}
p{
    font-size:13px;
    margin-left:150px;
}
label{
    font-size:13px;
    font-weight:bold;
  
}
span{
  position: absolute;
  margin-left: 0px;
  height: 25px;
  display: flex;
  align-items: center;
}
input{
  
}

/* On smaller screens, where height is less than 450px, change the style of the sidenav (less padding and a smaller font size) */
@media screen and (max-height: 450px) {
  .sidebar {padding-top: 15px;}
  .sidebar a {font-size: 18px;}
}

</style>  
</head>

<body>
<?php
                                    if (isset($_POST['loginNow']))
                                    {

                                        $inputUserName = mysqli_real_escape_string($conn, $_POST['user-name']);
                                        $inputPassword = mysqli_real_escape_string($conn, $_POST['user-password']);
                                         /* $insertquery = "INSERT INTO `admin_login`( user_name, user_password) VALUES ('$inputUserName','$inputPassword')" ;     
                                             $result= mysqli_query($conn,$insertquery);*/


                                        $findUserInDb = mysqli_query($conn, "SELECT `id`, `u_name`, `pwd` FROM `userdata` WHERE  u_name='$inputUserName'");
                                        $makeCountOnFind = mysqli_num_rows($findUserInDb);
                                          if($makeCountOnFind == 0){
                                                  echo"No users found";

                                          }else{
                                                   
                                    
                                            while ($row = mysqli_fetch_array($findUserInDb))
                                            {
                                                $dbId = $row['id'];
                                                $dbName = $row['u_name'];
                                               
                                                $dbPassword = $row['pwd'];
                                            }

                                            if ($inputUserName == $dbName && $inputPassword == $dbPassword)
                                            {
                                                session_start();
                                          
                                                $_SESSION['u_name'] = $dbName;
                                                $_SESSION['id'] = $dbId;
               
                                                header('location:admin.php'); 
                                        
                                            }
                                            else
                                            {
                                                echo '
                                                    <div class="alert alert-danger" role="alert">
                                                        Wrong Username or Password!
                                                    </div>
                                                    ';
                                            }
                                        
                                    }
                                }
                 ?>

<!-- form -->


 
<div class="container mt-5">
    <div class="row">
    <div class="col-sm-7">
    <img src="../assets/images/login.png" width="500px"alt="elegomotor image">
    </div>
      <div class="col-sm-5  ">
        <div class="card bg-white mt-5 shadow">
            <div class="card-body">
            <div class = "container">
              <form class="bg-white" method="post" action="">
               
               <div class="controls">
               <div class="row">
                  <div class="col-sm-12 mt-3">
                     <h3 class="text-center">Login</h3>
                     <hr>
                      <div class="form-group"><br>
                            <label for="username">Username</label>
                            <span><i class="fa fa-user" aria-hidden="true"></i></span>
                            <input  type="text" name="user-name"   id="email" class="" placeholder="Username" required="required"/>
                      </div>
                </div>
            </div><br>
        </div>
                <div class="row">
                    <div class="col-sm-12">
                        <div class="form-group">
                           <label for="password">Password</label>
                           <span><i class="fa fa-lock"></i></span>
                            <input type="password" name="user-password"  id="pwd"  class="" placeholder="Password" required="required" >
                            
                        </div>
                    </div>
                        <!--<p>forgot password?</p>-->
                </div><br>
                           
                    <div class="col-sm-12">
                        <input type="submit" name="loginNow" id="submit" class="btn btn-info btn-send  pt-2 btn-block
                            " value="login" >
                   </div>
                </div>
                
              </div>
         </form>
     </div>
 </div>
 </div>
 
        <!-- /.8 -->
    </div>
    <!-- /.row-->
</div>
</div>
</body>
</html>
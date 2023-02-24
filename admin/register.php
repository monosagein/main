<?php

include  ('db_connect.php')

?>



<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Elego Motor - Register</title>
     <!--favicon -->
    <link rel="icon" type="image/x-icon" href="uploaded_img\favicon.png">
    <!--discription -->
    <meta name="description" content="">
    <!--keywords -->
    <meta name="keywords" content="">
      <!--canonical -->
    <link rel="canonical" href="" />

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body class="bg-gradient-primary">

    <div class="container">

        <div class="card o-hidden border-0 shadow-lg my-5">
            <div class="card-body p-0">
                <!-- Nested Row within Card Body -->
                <div class="row">
                    <div class="col-lg-5 d-none d-lg-block bg-register-image"><img src="img\signup.png" width="100%" height="100%"alt="signup"/></div>
                    <div class="col-lg-7">
                        <div class="p-5">
                            <div class="text-center">
                                <h1 class="h4 text-gray-900 mb-4">Create an Account!</h1>
                            </div>
                            <form     method="post" action ="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>"  class="user" >
                                <div class="form-group ">
                                  
                                        <input type="text" name="user-name" class="form-control form-control-user" id="exampleFirstName"
                                            placeholder="First Name"  required>
                                   
                                   
                                </div>
                                <div class="form-group">
                                    <input type="email"  name="user-email" class="form-control form-control-user" id="exampleInputEmail"
                                        placeholder="Email Address" required>
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <input type="password" name="user-pwd1" class="form-control form-control-user"
                                            id="exampleInputPassword" placeholder="Password" required>
                                    </div>
                                    <div class="col-sm-6">
                                        <input type="password" name="user-pwd2" class="form-control form-control-user"
                                            id="exampleRepeatPassword" placeholder="Repeat Password" required>
                                    </div>
                                </div>
                                <button type="submit" name="register" class="btn btn-primary btn-user btn-block">Register Account</button>
                                
                                <hr>
                                <div class="text-center">
                                   <p>Already a user  <a class="small" href="login.html">login here </a></p>
                                </div>
                               </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>


    <?php
    // define variables and set to empty values
   $name = $email = $gender = $comment = $website = "";
   
   if ($_SERVER["REQUEST_METHOD"] == "POST") {
     $name = test_input($_POST["user-name"]);
     $email = test_input($_POST["user-email"]);
     $pwd1 = test_input($_POST["user-pwd1"]);
     $pwd2 = test_input($_POST["user-pwd2"]);
     
         $date= date("Y-m-d");

             $emailQuery =" SELECT FROM userdata WHERE u_email = '$email' ";
             $query = mysqli_query($conn,$emailQuery);
             $emailCount = mysqli_num_rows($query);
             if($emailCount > 0){
                echo '<script>alert("Email already Registered")</script>';
             }else{
                if($pwd === $pwd2){

     
            $insertquery = "INSERT INTO  userdata(u_name , u_email, u_pwd1,u_pwd2,created_date) VALUES ('$name','$email','$pwd1,'$pwd2','$date')"; 

            $sql = mysqli_query($conn,$insertquery);
            if($sql){
                echo '<script>alert("Created account Succesfully")</script>';
                header('locaton:login.php');
            } else{
                echo '<script>alert("Registration failed please try again")</script>';
                header('location:register.php');
            }
        }
        else{
            echo '<script>alert("Password Not Matching")</script>';
        }
             }
             
   
            }



   
   function test_input($data) {
     $data = trim($data);
     $data = stripslashes($data);
     $data = htmlspecialchars($data);
     return $data;
   }
     
   ?>













    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

</body>


</html>

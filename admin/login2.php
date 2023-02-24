
<?php include('db_connect.php'); ?>







<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ElegoMotor|AdminLogin</title>
    <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>

<!-- Popper JS -->
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
<link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">
  <link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.min.css" rel="stylesheet">


  <style>

    /* -=- CODIGOS SCSS -=-*/
$cor1: #08d8da;

/* -=- PAGE BACKGROUND -=-*/
body {
  background: radial-gradient(#135c6c, #0e2633);
}

/* -=- LOGIN MAIN -=- */
.login {
  position: relative;
  
  margin: 50px  auto;
  width: 250px;
  height: 300px;
  background: #125758;
  border: 1px solid $cor1;
}

/* -=- LOGO -=-*/
.logo {

  background-repeat: no-repeat;
  background-position: center;
  margin: auto;
  width: 200px;px;
  height:150px;

}
.logo img{
  margin-top:50px;
}

/* -=- FORMULARIO -=-*/
.formulario{
  width:200px; 
  margin: 0 auto;
}
/* === ICONS === */
.form .field {
    position: relative;
}

.form .field i {
    font-size: 14px;
    left: 1px;
    top: 1px;
    position: absolute;
    height: 34px;
    width: 40px;
    color: #08d8d9;
    background: #026668;
    text-align: center;
    line-height: 35px;
    transition: all 0.3s ease-out;
    pointer-events: none;
}


/* -=- INPUTS -=-*/
::-webkit-input-placeholder {
  color: #ffffff;
  font-family:'Arial';
  font-size: 8pt;
  text-align: center;
}
:-moz-placeholder {
  color: #ded9cf !important;
  font-family:'Open Sans';
}

.form input[type=text],
.form input[type=password] {
    font-family: 'Open Sans', Calibri, Arial, sans-serif;
  text-align:center;
    font-size: 12px;
    font-weight: 400;
    width: 206px;
    height: 32px;
    border: 1px solid #08d8da;
    background: #023637;
    color: #fff;
    transition: color 0.3s ease-out;
    padding-left:40px;
}
.form input[type=text],
.form input[type=password]:focus{
  outline:none;
}


.form input[type=text] {
    margin-bottom: 5px;
}
.form input[type=text]:hover ~ i,
.form input[type=password]:hover ~ i {
    color: #023637;
}

.form input[type=submit] {
  margin: 0 auto;
  width: 105px;
  height:31px;
  text-align: center;
  font-size: 12px;
  font-family: 'Arial',sans-serif;
  letter-spacing: 5px;
  border: 1px solid #08d8da;

  -webkit-box-shadow: inset 0px 0px 0px 0px rgba(204,86,15,1);
  -moz-box-shadow:    inset 0px 0px 0px 0px rgba(204,86,15,1);
  box-shadow:         inset 0px 0px 0px 0px rgba(204,86,15,1);

  color: #fff;
  background-color: #09696a;
  text-shadow: none;
  text-transform: uppercase;
  cursor: pointer;
  position: relative;
  left: 50%;
  margin-right: -50%;
  margin-top:15px;
  transform: translate(-50%, -50%) ;
  -webkit-animation: shadowFadeOut 5s;
  -moz-animation: shadowFadeOut 5s;
   transition: all 0.5s ease-out;
}
.form input[type=submit]:hover{
  background: #023637;
  color:#08d8d9;
}









/* -=- CREDITOS -=- */
.footer {
  position: relative;
  margin: 0 auto;
  width: 500px;
  text-align:center;
}

.footer p{
  color:#fff;
  font-size: 12px;
  font-family: 'Arial',sans-serif;
  letter-spacing: 1px;
}

.yt{
  text-decoration: none;
  color:#08d8da;
}
.yt:hover{
  color:#fff;
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


<div class="login">
    <div class="logo">
      <img src="../assets/images/logo.png" width="200px" alt="elego"/>
    </div>
    <div class="formulario">
    <form class="form" method="post" action="">

      <p class="field">
       
        <input type="text" name="user-name"  placeholder="Enter UserName" id="email" >
        <i class="fa fa-user"></i>
      </p>

      <p class="field">
      <input type="password"  name="user-password" placeholder="Enter password" id="pwd">
      
        <i class="fa fa-lock"></i>
      </p>

      <p class="submit"><input type="submit" name="loginNow" value="Login"></p>
    </form>
    </div>

<!--=- CREDITS -=-->
<div class="footer">
  <p>
    
  </p>
</div>
<!--=- CREDITS -=-->
  </div>

<!--=- FORMULARIO -=-->



















    

                            


 



</body>



</html>

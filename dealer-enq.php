<?php include 'admin/db_connect.php';
 $msg_name ="";
 $msg2_name="";
 $msg_success="";
 $msg_email="";
 $msg2_email="";
 $msg_phone="";
 $msg2_phone="";
 $msg_tc ="";
 $error = false;
 $name_subject =null;
 $email_subject ="";
 $phone_subject="";
 if (isset($_POST['submit'])) {
  //checking name
  if(isset($_POST['State'])){
  $statename = $_POST['State'];
 }

  $districtname = $_POST['district'];

 
  $wArea = $_POST['wArea'];
  $Name = $_POST['Name'];
  $phone = $_POST['contact'];
  $Age = $_POST['Age'];
  $Address = $_POST['Address'];
  $email = $_POST['email'];
  $Experience = $_POST['Experience'];
  $pincode = $_POST['pinCode'];
  $Present_profile = $_POST['Present_profile'];
  $sArea = $_POST['s_Area'];
  $aFrontage = $_POST['aFrontage'];
  $tHeight = $_POST['tHeight'];
  $Area = $_POST['Area'];
  $tFrontage = $_POST['tFrontag'];
  $rheight = $_POST['rheight'];
  $rArea = $_POST['rArea'];
  $status = $_POST['status'];
  $Investment_ci = $_POST['Investment_cv'];
  $Investement_Equipment = $_POST['Investement-Equipment'];
  $Working_Capital = $_POST['Working_Capital'];
  $Plan_for_Own_Funds = $_POST['pof'];
  $Plan_for_Loans = $_POST['Plan_for_Loans'];
  $Nature_of_organization_proposed = $_POST['organization_proposed'];
  $Total_Tunrover_of_business = $_POST['Tunrover_business'];
  $Showroom_Workshop = $_POST['S_Workshop'];
  $Land_Building = $_POST['Land_Building'];
  $Showroom_Property = $_POST['Showroom_Property'];
  $Additional_Information_if_any = $_POST['Additional_Information'];
  $Remark = $_POST['Remark'];
  $Remark = $_POST['Remark'];
  $Remark = $_POST['Remark'];
  $Remark = $_POST['Remark'];
  $Remark = $_POST['Remark'];
  $Remark = $_POST['Remark'];
  $Remark = $_POST['Remark'];
  $Remark = $_POST['Remark'];
  $Remark = $_POST['Remark'];
  $Remark = $_POST['Remark'];
  $Remark = $_POST['Remark'];
  $Remark = $_POST['Remark'];
  $Remark = $_POST['Remark'];
  $date  = date("y-m-d");
   

  if (isset($_POST['submit'])) {
    //checking name
    if (isset($_POST['Name'])){
        $name_subject = $_POST['Name'];
    }

      $name_pattern = '/^[a-zA-Z ]*$/';
      preg_match($name_pattern, $name_subject, $name_matches);
      $email_subject = $_POST['email'];
     $email_pattern = '/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/';
     preg_match($email_pattern, $email_subject, $email_matches);
     $phone_subject = $_POST['contact'];
     $phone_pattern = '/^[0-9]{10}+$/';
     preg_match($phone_pattern, $phone_subject, $phone_matches);
     //name validation//
  if(empty($_POST['full_name'])){
    $error = true;
    $msg_name = "You must supply your name";
   
   
} else if(!$name_matches[0]){
    $error = true;
    $msg2_name = "Only alphabets and white space allowed";
    }  
    //email validation//
      else if(empty($_POST['email'])){
        $error = true;
     $msg_email = "You must supply your email";
            } else if(!$email_matches[0]){
                $error = true;
     $msg2_email = "Must be of valid email format";
     }  
     //phone validation//
     else if(empty($_POST['contact'])){
         $error = true;
    $msg_phone = "You must supply your phone number";
        
   
     }else if(!$phone_matches[0]){
        $error = true;
            $msg2_phone = "Must be a valid phone number";
           
        }   
      }
                   //$randomNumber = rand(100000,999999);
            
                  // $userId = "monosage-landingpage".$randomNumber."";
                
                    $result = mysqli_query($conn, "INSERT INTO `enquiryform`(`State`,`District`,`wArea`,`Name`,`contact`,`Age`,`Adress`,`Email`,`Experience`,`pincode`,`Present_profile`,`sArea`,`aFrontage`,`tHeight`,`Area`,`tFrontage`,`rheight`,`rArea`,`status`,`Investment_cv`,`Investement_Equipment`,`Working_Capital`,`pof`,`Plan_for_Loans`,`organization_proposed`,`Tunrover_business`,`S_ Workshop`,`Land_Building`,`Showroom_Property`,`Additional_Information`,`Date`,`Remark`,`Remark2`,`Remark3`,`Remark4`,`Remark5`,`Remark6`,`Remark7`,`Remark8`,`Remark9`,`Remark10`,`Remark11`,`Remark12`,`Remark13`) 
                    VALUES('$statename','$districtname','$wArea','$Name','$phone','$Age','$Address','$email','$Experience','$pincode','$Present_profile','$sArea','$aFrontage','$tHeight','$Area','$tFrontage','$rheight','$rArea','$status','$Investment_ci','$Investement_Equipment','$Working_Capital','$Plan_for_Own_Funds','$Plan_for_Loans','$Nature_of_organization_proposed','$Total_Tunrover_of_business','$Showroom_Workshop','$Land_Building','$Showroom_Property','$Additional_Information_if_any','$date','$Remark','$Remark','$Remark','$Remark','$Remark','$Remark','$Remark','$Remark','$Remark','$Remark','$Remark','$Remark','$Remark')");
                   
                   //mail functionality
                   $to = 'ashwini.anumasa@monosage.com';
                    $subject ="WebEnquiry-#".rand(1000,9000)."" ;
                    $fromName =  "". $name_subject."";
                    $from = "".$email_subject."";
                     
                    $body = '  
               
                   <div style="margin: 50px; font-family: arial, sans-serif; text-align: left; font-size:16px;">
        
                    <p><b>Dear</b> Prospect,</p>
                    <p>Please find attached the Enquiry details as per the details below:</p>
                  
                    <section style="padding:6px; border:1px solid black;border-radius:12px; width: 60%;">
          
          
          <table style="border-collapse: collapse; width: 100% ; font-size:16px; ">
          <tr  style="background-color: #ffff;">
          <th style="border: 1px solid #dddddd; padding: 8px;">State</th>
          <td style="border: 1px solid #dddddd; padding: 8px;">'. $statename.'</td> 
        </tr>
        <tr  style="background-color: #ffff;">
        <th style="border: 1px solid #dddddd; padding: 8px;">District</th>
        <td style="border: 1px solid #dddddd; padding: 8px;">'. $districtname.'</td> 
        </tr>
        <tr  style="background-color: #ffff;">
        <th style="border: 1px solid #dddddd; padding: 8px;">wArea</th>
        <td style="border: 1px solid #dddddd; padding: 8px;">'. $wArea.'</td> 
        </tr>

          <tr  style="background-color: #ffff;">
            <th style="border: 1px solid #dddddd; padding: 8px;">Name</th>
            <td style="border: 1px solid #dddddd; padding: 8px;">'. $name_subject.'</td> 
          </tr>
          
          <tr  style="background-color: #ffff;">
            <th style="border: 1px solid #dddddd; padding: 8px;">Email</th>
            <td style="border: 1px solid #dddddd; padding: 8px;">'. $email_subject .' </td>
          </tr>
          <tr  style="background-color: #dddddd;">
         
            <th style="border: 1px solid #dddddd; padding: 8px;">contact</th>
            <td style="border: 1px solid #dddddd; padding: 8px;">'. $phone_subject.'</td> 
          </tr>
          <tr  style="background-color: #dddddd;">
         
            <th style="border: 1px solid #dddddd; padding: 8px;">sArea</th>
            <td style="border: 1px solid #dddddd; padding: 8px;">'. $sArea .'</td> 
          </tr>
         <tr style="background-color: #ffff; ">
            <th style="border: 1px solid #dddddd; padding: 8px;">aFrontage</th>
            <td style="border: 1px solid #dddddd; padding: 8px;">'. $aFrontage.' </td>    
          </tr>
          <tr style="background-color: #ffff; ">
            <th style="border: 1px solid #dddddd; padding: 8px;">tHeight</th>
            <td style="border: 1px solid #dddddd; padding: 8px;">'. $tHeight .' </td>    
          </tr>
          <tr style="background-color: #ffff; ">
          <th style="border: 1px solid #dddddd; padding: 8px;">tHeight</th>
          <td style="border: 1px solid #dddddd; padding: 8px;">'. $tHeight .' </td>    
        </tr>
          </table>
          </section>
          </div>';
               
  
  
      // Thanks Return Mail Details Ends 
      
      //Set content-type header for sending HTML email 
      $headers = "MIME-Version: 1.0" . "\r\n"; 
      $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n"; 
       
      //Additional headers 
      $headers .= 'From: '.$fromName.'<'.$from.'>' . "\r\n"; 
      $headers .= 'Cc:Bcc: kalidas.durga@monosage.com' . "\r\n"; 
     $headers .= ' parlapelly.pranay@monosage.com' . "\r\n"; 
       
      //Send email 
      if(mail($to, $subject, $body, $headers))
      { 
         // success
          
          $customerReplay = '
          <div style="padding:8px;line-height: 1.4;">
              <font face="arial">
                Hi  <b>'.$name_subject.'</b>,
                <br><br>
              
                We thank you very much for your interest in <b>Euniketech Solutions </b>. We have noted down your contact details.
              <br><br>
                We are keen to discuss & understand your requirements.  
                 
              <br><br>
                Also, if you like to have more information please contact us  at info@eunitechsolutions.com and we would be glad to provide the same.
              <br><br>
                Thanking you
              <br><br>
                Customer Engagement Team
              <br><br>
               <b> Euniketech Solutions</b>
              </font>
          </div>
          ';
          
          $toOne = $userEmail ;
          
          $subjectOne = 'Thanks for contacting us';
          
          $headersOne = "MIME-Version: 1.0" . "\r\n"; 
          $headersOne .= "Content-type:text/html;charset=UTF-8" . "\r\n";
          $headersOne .= 'From:parlapelly.pranay@monosage.com ' . "\r\n";
          
          mail($toOne, $subjectOne, $customerReplay, $headersOne);
    
       header("location:thanku.php");
   
        }
    
  else{
     echo '0'; 
  }  
  
  }
      else{
         // echo"enter valid details";
      }
       


                ?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Dealer Enquiry | ElegoMotors</title>
     <!--CDN LINKS -->
<link rel="stylesheet" href="assets/css/main.css" >
<link rel="stylesheet" href="assets/css/index.css" >
<link rel="stylesheet" href="assets/css/navbar.css" >
  <!--favicon -->
    <link rel="icon" type="image/x-icon" href="assets\images\favicon.png">


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

<!-- formlinks -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.1/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
      <!-- form state dependency link -->

  <style>
      
    body{
        margin-top:100px;
        background-color:#f0f1f5;
    }
    label{
        font-size:25px;
    }
    .form-group{
      font-size:15px;
    }
    
   
    .btn{
        font-size:18px;
        background-color:#1e4b72;
        color:white;
    }
    .card{
    
      padding:40px;

    }
    .container{
      padding-top:50px;
    }
    h1{
      text-align:center;
      font-size:30px;
    }
    .form-control{
        font-size:14px;
    }
    
  </style>
</head>
   <!--CDN LINKS-->
    <body>

    <!--Nav section-->
    <?php include "nav.php";?>
     <!-- Ends Nav section-->
    
<!--  Home section  -->
<h1>Please fill the form below</h1>
<div class="container">
    
<form name="contact" method="post" action=""  class="php-email-form">
<div>

        <div class="card " style="border-radius: 15px;">
            <div class="row">
                <div class="col-md-4 col-lg-4  mt-3 mt-md-0 form-group">
                    <span class="mandt">*</span>Select State:<br>
                       <select id="State" name="State" class="form-control" style="text-transform:uppercase" required>
                          <option value=""   >Select state</option>
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
                  <div class="col-md-4 col-lg-4 form-group mt-3 mt-md-0 form-group">
                       <span class="mandt ">*</span>Select District/City:<br>
                          <select id="dist" name="district" class="form-control"  style="text-transform:uppercase" >
                                 <option value=""  >Select state first</option>
                          
                          </select>
                            <script type="text/javascript"  src="assets/js/stajax.js"></script>
                                    
                                </div>
                
                

                <div class="col-md-4 col-lg-4 form-group mt-3 mt-md-0 form-group">
                    <span class="mandt">*</span>Area/Location:<br>
                        <input name="wArea" type="text" maxlength="50" id="txt_AreaLoc" class="form-control" required>
                </div>
              </div>
            </div>

            <div class="card " style="border-radius: 15px;">


        <div class="row mt-3">
                <div class="col-md-4 col-lg-4 form-group">
                    <span class="mandt">*</span>Your Name:<br>
                   <input name="Name" type="text" maxlength="50" id="txt_name" class="form-control" required>
                   <?php echo "<p class='note'>".$msg_name."</p>";?>
                    <?php echo "<p class='note'>".$msg2_name."</p>";?>
                </div>
                <div class="col-md-4 col-lg-4 form-group mt-3 mt-md-0">
                    <span class="mandt">*</span>Address:<br>
                    <input name="Address" type="text" maxlength="100" id="txt_Address" class="form-control" required>
                </div>
                 <div class="col-md-4 col-lg-4 form-group mt-3 mt-md-0">
                     <span class="mandt">*</span>Pincode:<br>
                    <input name="pinCode" type="number" maxlength="20" id="txt_PinCode" class="form-control" required>
                </div>
        </div>
        <div class="row mt-3">
                <div class="col-md-4 col-lg-4 form-group">
                     <span class="mandt">*</span>Contact Number:<br>
                   <input name="contact" type="number"  pattern="[0-9]{10}" maxlength="50" id="txt_phone" class="form-control" required>
                   <?php echo "<p class='note'>".$msg_phone."</p>";?>
                    <?php echo "<p class='note'>".$msg2_phone."</p>";?>
                  </div>
                 <div class="col-md-4 col-lg-4 form-group mt-3 mt-md-0">
                      <span class="mandt">*</span>Email Id:<br>
                    <input name="email" type="email" maxlength="50" id="txt_email" class="form-control" placeholder="" required>
                    <?php echo "<p class='note'>".$msg_email."</p>";?>
                        <?php echo "<p class='note'>".$msg2_email."</p>";?>
                  </div>
                <div class="col-md-4 col-lg-4 form-group mt-3 mt-md-0">
                     <span class="mandt">*</span>Present Profile:<br>
                     <input name="Present_profile" type="text" maxlength="50" id="txt_PresentBusiness1" class="form-control" required>
                </div>
                 
        </div>

         <div class="row mt-3">
                <div class="col-md-4 col-lg-4 form-group">
                    Age:<br>
                   <input name="Age" type="number" maxlength="50" id="txt_Age" class="form-control" required>
                </div>
                <div class="col-md-4 col-lg-4 form-group mt-3 mt-md-0">
                    Experience:<br>
                    <input name="Experience" type="text" maxlength="50" id="txt_Experience" class="form-control" required>
                </div>
                 <div class="col-md-4 col-lg-4 form-group mt-3 mt-md-0">
                    
                </div>
        </div>

      </div>

      <div class="card " style="border-radius: 15px;">
        <div class="frm_tit" style="font-size:20px"><b>Showroom</b></div>
        
        <div class="row mt-3">
                <div class="col-md-6 col-lg-6 form-group">
                    <span class="mandt">*</span>Area (in sq ft):<br>
                  <input name="s_Area" type="number" maxlength="50" id="txt_ShowArea" class="form-control" required>
                </div>
                <div class="col-md-6 col-lg-6 form-group mt-3 mt-md-0">
                    Remark:<br>
                    <input name="Remark" type="text" maxlength="50" id="txt_ShowAreaRemark" class="form-control" >
                </div>
        </div>
         <div class="row mt-3">
                <div class="col-md-6 col-lg-6 form-group">
                    <span class="mandt">*</span>Frontage (in ft):<br>
                  <input name="aFrontage" type="number" maxlength="50" id="txt_ShowFrontage" class="form-control" required>
                </div>
                <div class="col-md-6 col-lg-6 form-group mt-3 mt-md-0">
                    Remark:<br>
                    <input name="Remark" type="text" maxlength="50" id="txt_ShowFrontageRemark" class="form-control">
                </div>
        </div>
        <div class="row mt-3">
                <div class="col-md-6 col-lg-6 form-group">
                    <span class="mandt">*</span>Height (in ft):<br>
                  <input name="tHeight" type="number" maxlength="50" id="txt_ShowHeight" class="form-control" required>
                </div>
                <div class="col-md-6 col-lg-6 form-group mt-3 mt-md-0">
                    Remark:<br>
                    <input name="Remark" type="text" maxlength="50" id="txt_ShowHeightRemark" class="form-control" >
                </div>
        </div>

      </div>

      <div class="card " style="border-radius: 15px;">
       <div class="frm_tit"  style="font-size:20px"><b>Workshop</b></div>
         <div class="row mt-3">
                <div class="col-md-6 col-lg-6 form-group">
                    <span class="mandt">*</span>Area (in sq ft):<br>
                  <input name="Area" type="number" maxlength="50" id="txt_WorkArea" class="form-control" required>
                </div>
                <div class="col-md-6 col-lg-6 form-group mt-3 mt-md-0">
                    Remark:<br>
                    <input name="Remark" type="text" maxlength="50" id="txt_WorkAreaRemark" class="form-control" >
                </div>
        </div>
         <div class="row mt-3">
                <div class="col-md-6 col-lg-6 form-group">
                    <span class="mandt">*</span>Frontage (in ft):<br>
                  <input name="tFrontag" type="number" maxlength="50" id="txt_WorkFrontage" class="form-control" required>
                </div>
                <div class="col-md-6 col-lg-6 form-group mt-3 mt-md-0">
                    Remark:<br>
                    <input name="Remark" type="text" maxlength="50" id="txt_WorkFrontageRemark" class="form-control" >
                </div>
        </div>
        <div class="row mt-3">
                <div class="col-md-6 col-lg-6 form-group">
                    <span class="mandt">*</span>Height (in ft):<br>
                  <input name="rheight" type="number" maxlength="50" id="txt_WorkHeight" class="form-control" required>
                </div>
                <div class="col-md-6 col-lg-6 form-group mt-3 mt-md-0">
                    Remark:<br>
                    <input name="Remark" type="text" maxlength="50" id="txt_WorkHeightRemark" class="form-control">
                </div>
        </div>
      </div>


      <div class="card " style="border-radius: 15px;">
        <div class="frm_tit"  style="font-size:20px"><b>Warehouse</b></div>
        <div class="row mt-3">
                <div class="col-md-6 col-lg-6 form-group">
                    <span class="mandt">*</span>Area (in sq ft):<br>
                  <input name="rArea" type="number" maxlength="50" id="txt_WareArea" class="form-control" required>
                </div>
                <div class="col-md-6 col-lg-6 form-group mt-3 mt-md-0">
                    Remark:<br>
                    <input name="Remark" type="text" maxlength="50" id="txt_WareAreaRemark" class="form-control" >
                </div>
        </div>
         <div class="row mt-3">
                <div class="col-md-6 col-lg-6 form-group">
                    <span class="mandt">*</span>Status (Covered/Accessible):<br>
                  <input name="status" type="text" maxlength="50" id="txt_WareStatus" class="form-control" required>
                </div>
                <div class="col-md-6 col-lg-6 form-group mt-3 mt-md-0">
                    Remark:<br>
                    <input name="Remark" type="text" maxlength="50" id="txt_WareStatusRemark" class="form-control">
                </div>
        </div>
        </div>


        <div class="card " style="border-radius: 15px;">

        <div class="frm_tit"  style="font-size:20px"><b>Other Store Requirements</b></div>
         <div class="row mt-3">
                <div class="col-md-6 col-lg-6 form-group">
                  Investment-CI &amp; VI (in Lacs):<br>
                  <input name="Investment_cv" type="number" maxlength="50" id="txt_Investment" class="form-control" required>
                </div>
                <div class="col-md-6 col-lg-6 form-group mt-3 mt-md-0">
                    Remark:<br>
                    <input name="Remark" type="text" maxlength="50" id="txt_InvestmentRemark" class="form-control">
                </div>
        </div>
        <div class="row mt-3">
                <div class="col-md-6 col-lg-6 form-group">
                    Investement-Equipment / Others (in Lacs):<br>
                  <input name="Investement-Equipment" type="number" maxlength="50" id="txt_InvestmentEquipOther" class="form-control" required>
                </div>
                <div class="col-md-6 col-lg-6 form-group mt-3 mt-md-0">
                    Remark:<br>
                    <input name="Remark" type="text" maxlength="50" id="txt_InvestmentEquipOtherRemark" class="form-control" >
                </div>
        </div>
        <div class="row mt-3">
                <div class="col-md-6 col-lg-6 form-group">
                    Working Capital (in Lacs):<br>
                  <input name="Working_Capital" type="number" maxlength="50" id="txt_WorkingCapital" class="form-control" required>
                </div>
                <div class="col-md-6 col-lg-6 form-group mt-3 mt-md-0">
                    Remark:<br>
                    <input name="Remark" type="text" maxlength="50" id="txt_WorkingCapitalRemark" class="form-control" >
                </div>
        </div>
        <div class="row mt-3">
                <div class="col-md-6 col-lg-6 form-group">
                  Plan for Own Funds (in Lacs):<br>
                  <input name="pof" type="number" maxlength="50" id="txt_PlanForOwnFund" class="form-control" required>
                </div>
                <div class="col-md-6 col-lg-6 form-group mt-3 mt-md-0">
                    Remark:<br>
                    <input name="Remark" type="text" maxlength="50" id="txt_PlanForOwnFundRemark" class="form-control" >
                </div>
        </div>

        <div class="row mt-3">
                <div class="col-md-6 col-lg-6 form-group">
                   Plan for Loans (in Lacs):<br>
                  <input name="Plan_for_Loans" type="number" maxlength="50" id="txt_PlanForLoan" class="form-control" required>
                </div>
                <div class="col-md-6 col-lg-6 form-group mt-3 mt-md-0">
                    Remark:<br>
                    <input name="Remark" type="text" maxlength="50" id="txt_PlanForLoanRemark" class="form-control" >
                </div>
        </div>
      </div>

      <div class="card " style="border-radius: 15px;">
         <div class="frm_tit"  style="font-size:20px"><b>Other Details</b></div>
        <div class="row mt-3">
                <div class="col-md-4 col-lg-4 form-group">
                    <span class="mandt">*</span> Nature of organization proposed:<br>
                  <select name="organization_proposed" id="drp_OrgNature" required>
	<option value="">-Select-</option>
	<option value="Private Limited">Private Limited</option>
	<option value="Partnership">Partnership</option>
	<option value="Proprietorship">Proprietorship</option>
	<option value="LLP">LLP</option>

</select>
                </div>
                <div class="col-md-4 col-lg-4 form-group mt-3 mt-md-0">
                    <span class="mandt">*</span>Total Tunrover of business:<br>
                  <select name="Tunrover_business" id="drp_TotalTrunOver" required>
	<option value="">-Select-</option>
	<option selected="selected" value="0 TO 1 CR">0 TO 1 CR</option>
	<option value="1 TO 10 CR">1 TO 10 CR</option>
	<option value="10 TO 100 CR">10 TO 100 CR</option>
	<option value="More Than 100 CR">More Than 100 CR</option>

</select>
                </div>
            <div class="col-md-4 col-lg-4 form-group mt-3 mt-md-0">
                   <span class="mandt">*</span>Showroom / Workshop:<br>
                  <select name="S_Workshop" id="drp_ShowroomWorkShop" required>
	<option value="">-Select-</option>
	<option value="At one Place">At one Place</option>
	<option value="Different Location">Different Location</option>

</select>
                </div>
        </div>

         <div class="row mt-3">
                <div class="col-md-4 col-lg-4 form-group">
                     <span class="mandt">*</span>Land / Building:<br>
                  <select name="Land_Building" id="drp_LandBuilding" required>
	<option value="">-Select-</option>
	<option value="Available">Available</option>
	<option value="Not Available">Not Available</option>

</select>
                </div>
                
            <div class="col-md-4 col-lg-4 form-group mt-3 mt-md-0">
                <span class="mandt">*</span>Showroom Property:<br>
                   <select name="Showroom_Property" id="drp_Building" required>
	<option value="">-Select-</option>
	<option value="Rented">Rented</option>
	<option value="Owned">Owned</option>

</select>
                </div>






             <div class="col-md-4 col-lg-4 form-group mt-3 mt-md-0">
                   
          </div>
        </div>

              <div class="form-group mt-3">
                Additional Information if any:<br>
                <textarea name="Additional_Information" rows="2" cols="20" id="txt_msg" class="form-control" required></textarea>
              </div>

              </div>
               <div class="card " style="border-radius: 15px;">
             <div class="form-group mt-3">
                 <div id="Pnl_Captcha">
	
                
                <div style="padding-bottom:10px;border-bottom:solid 1px #d7d7d7;margin-bottom:20px;">
                <div><!--<span class="mandt">*</span>Enter the text as shown in the image:<br> -->
                <!-- <div style="float:left;width:120px;padding-top:5px;"> <img id="imgCaptcha" src="/SiteCPanel/captchPage.aspx?638114261223910252" style="width:130px;border-width:0px;"> </div>
                <div style="float:left;padding:5px 0px 0px 5px;"><input type="image" name="image_text" id="img_RefreshCaptch" title="Refresh" src="/images/renewlic.png" style="border-width:0px;" required></div>
                <div style="float:left;padding:5px 0px 2px 0px;"><input name="txt_Captcha" type="text" maxlength="5" id="txt_Captcha" class="form-control" style="width:115px;" required></div>  
               <div style="clear:both;"></div>  -->
               <div></div>
                </div> 
              </div>
            </div>
          </div> 
            
              <!--<DIV CLASS="TEXT-CENTER" STYLE="PADDING-BOTTOM:10PX;"></DIV>-->
              <div class="text-center"> <input type="submit" name="submit" value="Submit" onclick="return validateinput();" id="btn_submit" class="submit-button" style="font-size:20px;background-color:#36596b;color:white;height:40px;border-radius:20px;width:200px;border:none;"> <div id="dv_loader" class="loader" style="display:none;"></div></div>
        
        
        <input name="hdn_IsNewsLetter" type="hidden" id="hdn_IsNewsLetter" value="0">
    

        

   </div>
</form>

</div>
</div>



  <!-- form end -->
      <!-- Site footer -->
    

    <?php include "footer.php";?>
   
  
  <!--footer ends -->
   
   

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
</body>
</html>
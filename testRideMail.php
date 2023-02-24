<?php ob_start(); ?>
<?php include ('admin/db_connect.php')?>


<?php
if(isset($_POST["submit"])){

  $userName = $_POST["user"];
  $userEmail=$_POST["email"];
  $location = $_POST["d_location"];
  $dealerMail = $_POST["d_mail"];
  $phone = $_POST["phone"] ;

  $shedule_date=$_POST["date"];
  // data base 
  $date = date('Y-m-d');
 
  $insert_query = mysqli_query($conn, "INSERT INTO `testride_leads`(`tl_name`, `tl_email`,`tl_number`,`shedule_date`,`location`,`register_date`) VALUES('$userName ',  ' $userEmail' ,'  $phone', ' 
  $shedule_date', '$location','$date')") or die('query failed');

//mail
  $to = 'parlapelly.pranay@monosage.com';
  $subject ="Elego-Test Ride lead-#".rand(1000,9000)."" ;
  $fromName =  "".$userName."";
 
  $from = "".$userEmail."";
  $cc ="".$dealerMail."";
  $dealer="".$location."";
   $body = '
 
      <div style="margin: 50px; font-family: arial, sans-serif; text-align: left; font-size:16px;">
      
          <p><b>Dear</b> Prospect,</p>
          <p>Please find attached the Enquiry details as per the details below:</p>
        
        <section style="padding:6px; border:1px solid black;border-radius:12px; width: 60%;">
        
        
        <table style="border-collapse: collapse; width: 100% ; font-size:16px; ">
        <tr  style="background-color: #ffff;">
          <th style="border: 1px solid #dddddd; padding: 8px;">Name</th>
          <td style="border: 1px solid #dddddd; padding: 8px;">'.$userName.'</td> 
        </tr>
        <tr  style="background-color: #dddddd;">
          <th style="border: 1px solid #dddddd; padding: 8px;">Phone</th>
          <td style="border: 1px solid #dddddd; padding: 8px;">'.$phone.' </td>    
        </tr>
        <tr  style="background-color: #ffff;">
          <th style="border: 1px solid #dddddd; padding: 8px;">Email</th>
          <td style="border: 1px solid #dddddd; padding: 8px;">'.$userEmail.' </td>
        </tr>
       
     
        <tr  style="background-color: #ffff;">
        <th style="border: 1px solid #dddddd; padding: 8px;">Shedule Date</th>
        <td style="border: 1px solid #dddddd; padding: 8px;">'.$shedule_date.' </td>
      </tr>
       
      <tr style="background-color: #ffff; ">
      <th style="border: 1px solid #dddddd; padding: 8px;">Selected Dealer</th>
      <td style="border: 1px solid #dddddd; padding: 8px;">'.$location. ' </td>    
    </tr>
        </table>
        </section>
        </div>';
             


     // Thanks Return Mail Details Ends 
    
    
    // Set content-type header for sending HTML email 
    $headers = "MIME-Version: 1.0" . "\r\n"; 
    $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n"; 
     
    // Additional headers 
    $headers .= 'From: '.$fromName.'<'.$from.'>' . "\r\n"; 
    $headers .= 'Cc: '.$dealer.'<'.$cc.'>' . "\r\n"; 
     //$headers .= 'Cc: welcome2@example.com' . "\r\n"; 
    $headers .= 'Bcc: gafoorbasha.shaik@monosage.com' . "\r\n"; 
     
    // Send email 
    if(mail($to, $subject, $body, $headers))
    { 
        //success
        
        $customerReplay = '
        <div style="padding:8px;line-height: 1.4;">
            <font face="arial">
              Hi  <b>'.$userName.'</b>,
              <br><br>
            
              We thank you very much for your interest in <b>Elego Motors </b>. We have noted down your contact details.
            <br><br>
              We are keen to discuss & understand your requirements.  
               
            <br><br>
              Also, if you like to have more information please contact us  at  www.elegomotors.com and we would be glad to provide the same.
            <br><br>
              Thanking you
            <br><br>
              Customer Engagement Team
            <br><br>
             <b>Elego Motors </b>
            </font>
        </div>
        ';
        
        $toOne = $userEmail ;
        
        $subjectOne = 'Thanks for contacting us';
        
        $headersOne = "MIME-Version: 1.0" . "\r\n"; 
        $headersOne .= "Content-type:text/html;charset=UTF-8" . "\r\n";
        $headersOne .= 'From:parlapelly.pranay@monosage.com ' . "\r\n";
        
        mail($toOne, $subjectOne, $customerReplay, $headersOne);
  
        


         echo '<script language="javascript">';
      
        echo 'window.location.href="thanku.php";';
        echo '</script>';
      
    }
  }
else{
   echo '0'; 
}



?>

 

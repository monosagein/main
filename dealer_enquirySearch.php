<?php
include ('admin/db_connect.php');
?>


<?php
/*if(isset($_POST['add_dealer'])){
  $p_name = $_POST['d_name'];
  $p_adress = $_POST['d_adress'];
  $p_number = $_POST['p_number'];
 

  $insert_query = mysqli_query($conn, "INSERT INTO `dealersdata`(d_name, d_adress,p_number) VALUES('$p_name',  '$p_adress' ,'$p_number')") or die('query failed');

  if($insert_query){
   
     $message[] = 'dealer add succesfully';
  }else{
     $message[] = 'could not add the dealer';
  }
};*/

$search_value = $_POST["search"];



$sql = "SELECT * FROM dealersdata WHERE d_name LIKE '%{$search_value}%' || State LIKE '%{$search_value}%' || district LIKE '%{$search_value}%' ";
$result = mysqli_query($conn, $sql) or die("SQL Query Failed.");
$output = "";
if(mysqli_num_rows($result) > 0 ){
  $output = '<table border="" width="100%" cellspacing="0" cellpadding="10px">


      <thead>
           <tr style="background-color:gray;padding:5px;">
           <td>State</td>
         <td> District</td>
         <td> Name</td>
         <td> Location</td>
         <td> Send Enquiry</td>
</tr>






</thead>';

              while($row = mysqli_fetch_assoc($result)){
                  
                     
                      $select_state = mysqli_query($conn, "SELECT * FROM `states` WHERE stateid = '".$row['State']." ' ");
             if(mysqli_num_rows($select_state) > 0 ){
               while($rw = mysqli_fetch_assoc($select_state))
                  {
                   $GLOBALS['stateName']  = $rw['statename'];
 
             }
             }

                  
                  
                $output .= "<tr>
               
            <td> $stateName </td>
            
             <td>".$row['district'] ."</td>
            <td> <a   lass='btn btn-outline-danger request'style='color:#1e4b72;' data-toggle='modal' data-target='#myModal' data_req_id= ".$row['d_name']."   dealer_mail_id=". $row['p_email'] ."> ".$row['d_name'] ." <i class='fa fa-chevron-circle-right fa2' aria-hidden='true'></i> </a></td>
          
            <td>".$row['d_adress']."</td>
           <td><a class='btn btn-outline-danger request'style='color:#1e4b72;' data-toggle='modal' data-target='#myModal' data_req_id= ".$row['d_name'] ."   dealer_mail_id=". $row['p_email'] ."> <i class='fa fa-question-circle fa1' aria-hidden='true'></i> </a></td>
            
             </tr>";
              
    $output .= "</table>";                
            }

    mysqli_close($conn);

    echo $output;
}else{
    echo "<h4 style='background-color:none!important;'>No Record Found.</h4>";
}

?>





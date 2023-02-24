<?php
include ('admin/db_connect.php');
?>


<?php


 




if($search_value = $_POST["search"]){
echo"<script>alert($search_value)</script>";


$sql = "SELECT * FROM dealersdata WHERE  district LIKE '%{$search_value}%'  ";
$result = mysqli_query($conn, $sql) or die("SQL Query Failed.");
$output = "";
if(mysqli_num_rows($result) > 0 ){
  $output = "<div col-lg-10 col-md-10 col-sm-10>";
 









              while($row = mysqli_fetch_assoc($result)){
                  
                     
           
 
             
             

                  
                  
                $output .= "<button type='button' class='btn btn-outline-danger request' style='background-color:#ffff;color:black;border:2px solid #D3D3D3' data-toggle='modal' data-target='#myModal' data_req_id=' ". $row['d_name']."'  dealer_mail_id= ' ".$row['p_email']."' >". $row['d_name']." </button>"
               
          ;
              
    $output .= "</div>";                
            }

    mysqli_close($conn);

    echo $output;
}else{
    echo "<h4>No Record Found.</h4>";
}
}
else{
      echo"$re=mysqli_query($conn,SELECT * FROM `dealersdata`)";
}

?>
<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script> -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<?php 
// Include the database  file 
include 'db_connect.php'; 
 
if(!empty($_POST["stateid"])){ 
    
    // Fetch state data based on the specific country 
  
    $result = mysqli_query($conn, "SELECT * FROM districts WHERE stateid = ".$_POST['stateid']." ");                                      
     
    // Generate HTML of state options list 
    if(mysqli_num_rows($result) > 0){ 

        echo '<option value="">Select Dist</option>'; 
        while($row = mysqli_fetch_assoc($result)){  
            echo '<option value="'.$row['districtname'].'">'.$row['districtname'].'</option>'; 
        } 
    }else{ 
        echo '<option value="">dist not available</option>'; 
    } 
}
 //           elseif(!empty($_POST["state_id"])){ 
 //   // Fetch city data based on the specific state 
 // $sql = "SELECT * FROM districts WHERE districtid = ".$_POST['districtid'].""; 
 // $result =mysqli_query($conn,$sql); 
 //    
 //   //// Generate HTML of city options list 
 //  if($result->num_rows > 0){ 
 //     echo '<option value="">Select city</option>'; 
 //       while($row = $result->fetch_assoc()){  
 //        echo '<option value="'.$row['city_id'].'">'.$row['city_name'].'</option>'; 
 //    } 
  // }else{ 
  //  echo '<option value="">City not available</option>'; 
  // } 
  // } 
?>
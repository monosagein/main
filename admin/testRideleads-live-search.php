<?php
include ('db_connect.php');
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



$sql = "SELECT * FROM testride_leads WHERE tl_name LIKE '%{$search_value}%'";
$result = mysqli_query($conn, $sql) or die("SQL Query Failed.");
$output = "";
if(mysqli_num_rows($result) > 0 ){
  $output = '<table border="1" width="100%" cellspacing="0" cellpadding="10px">
  <thead>
  <th scope="col" class="bg-primary text-light text-center">Name</th>
      <th scope="col" class="bg-primary text-light text-center">Email</th>
      <th scope="col" class="bg-primary text-light text-center">Phone</th>
      <th scope="col" class="bg-primary text-light text-center">SheduleDate</th>
      <th scope="col" class="bg-primary text-light text-center">location</th>
      <th scope="col" class="bg-primary text-light text-center">Actions</th>
</thead>';

              while($row = mysqli_fetch_assoc($result)){
                $output .= "<tr>
               

                
                <td>". $row['tl_name']." </td>
                <td>". $row['tl_email']."</td>
                <td>". $row['tl_number']."</td>
                <td>". $row['shedule_date']."</td>
                <td>". $row['location']."</td>
                <td>
                <a href='testRideLeads.php?edit=". $row['id']."' > <i class='fas fa-edit'></i>  </a>
                   <a href='testRideLeads.php?delete=".$row['id']." onclick='return confirm('are your sure you want to delete this?');'> <i class='fas fa-trash'></i>  </a>

                </td>
            
             </tr>";
              }
    $output .= "</table>";

    mysqli_close($conn);

    echo $output;
}else{
    echo "<h2>No Record Found.</h2>";
}

?>


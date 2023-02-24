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



$sql = "SELECT * from dealersdata WHERE d_name LIKE '%{$search_value}%'  || district LIKE '%{$search_value}%' ";
$result = mysqli_query($conn, $sql) or die("SQL Query Failed.");
$output = "";
if(mysqli_num_rows($result) > 0 ){
  $output = '<table border="1" width="100%" cellspacing="0" cellpadding="10px">


      <thead>
          <th scope="col" class="bg-primary text-light text-center">State</th>
         <th scope="col" class="bg-primary text-light text-center">District</th>
         <th scope="col" class="bg-primary text-light text-center">Dealer Name</th>
         <th scope="col" class="bg-primary text-light text-center"> Adress</th>
         <th scope="col" class="bg-primary text-light text-center"> Phone number </th>
         <th scope="col" class="bg-primary text-light text-center">Email Id </th>
         <th scope="col" class="bg-primary text-light text-center">action</th>






</thead>';

              while($row = mysqli_fetch_assoc($result)){
                  
                     
           

                  
                  
                $output .= "<tr>
               
            <td> ".$row['statename']." </td>
            
            <td>".$row['district']." </td>
            <td>".$row['d_name'] ." </td>
            <td>".$row['d_adress']." </td>
            <td>".$row['p_number']." </td>
            <td>".$row['p_email']." </td>
                <td>
                   <a href='dealers.php?delete=".$row['id']."' class='delete-btn' onclick='confirm('are you sure you want to delete this?');'> <i class='fas fa-trash'></i> </a>
                   <a href='dealers.php?edit=".$row['id']."' class='option-btn'> <i class='fas fa-edit'></i>  </a>
                </td>
            
             </tr>";
              
    $output .= "</table>";                
            }

    mysqli_close($conn);

    echo $output;
}else{
    echo "<h5>No Record Found</h5>";
}

?>


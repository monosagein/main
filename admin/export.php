
<?php  
//export.php  

include('db_connect.php');

$output = '';
if(isset($_POST["export"]))
{
 $query = "SELECT * FROM dealersdata";
 $result = mysqli_query($conn, $query);
 if(mysqli_num_rows($result) > 0)
 {
  $output .= '
   <table class="table" bordered="1">  
                    <tr>  
                    <th>Dealer Name</th>
                    <th>Dealer Adress</th>
                    <th>Dealer Phone number </th>

      
                    </tr>';
  while($row = mysqli_fetch_array($result))
  {
   $output .= '
    <tr>  
       
    <td>'.$row['d_name'].'</td>
    <td>'. $row['d_adress'].'</td>
    <td>'.$row['p_number'].'</td>
                    </tr>
   ';
  }
  $output .= '</table>';
  header('Content-Type: application/pdf');

  // It will be called downloaded.pdf
  header("Content-Disposition:attachment;filename='downloaded.pdf'");
  
  // The PDF source is in original.pdf
  readfile("original.pdf");

  echo $output;
 }
}
?>
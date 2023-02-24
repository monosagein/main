<?php 

include "config.php";

if(isset($_POST['search'])){

	// Search value
    $search = $_POST['search'];

    // Explode by " " to get an Array
    $search_explode = explode(" ",$search);

    // Create condition
    $condition_arr = array();
    foreach($search_explode as $value){
    	$condition_arr[] = " s_name like '%".$value."%'";
    }

    $condition = " ";
    if(count($condition_arr) > 0){
    	$condition = "WHERE".implode(" or ",$condition_arr);
    }
    
    // Select Query
    $query = "SELECT * FROM `dealersdata` ".$condition;

    $result = mysqli_query($conn,$query); 
    while($row = mysqli_fetch_assoc($result) ){
        $response[] = array("value"=>$row['id'],"label"=>$row['State']);
        $response[] = array("value"=>$row['id'],"label"=>$row['district']);
        $response[] = array("value"=>$row['id'],"label"=>$row['d_name']);
    }
    
    echo json_encode($response);
}

exit;
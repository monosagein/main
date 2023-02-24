
<?php include('db_connect.php'); ?>
<?php include('verifySession.php');?>
<?php
if(isset($_POST['is_delete'])){
                 alert("hi");
    $deleteId = $_POST['deleteId'];
     
     console.log($deleteId);
    $sql = mysqli_query($conn," DELETE FROM add_imge WHERE image_id = $deleteId");
    if($sql){

        echo json_encode("OK");
    }else{
        echo json_encode("FAILED");
    }







            
}
?>
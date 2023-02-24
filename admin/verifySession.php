<?php

session_start();

if( isset($_SESSION['u_name']))
{
    $loggedUser = $_SESSION['u_name'];

    //getDetails
    $getDetailsUSer = mysqli_query($conn,"SELECT * FROM userdata WHERE u_name='$loggedUser'");

    while($row = mysqli_fetch_array($getDetailsUSer))
    {
        $dbName = $row['u_name'];
      
        $dbId = $row['id'];
        $dbPassword = $row['pwd'];
    }
}
else
{
    header('location:logout?sessionCleared=true');
}

?>
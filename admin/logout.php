<? ob_start(); ?>
<?php

session_start();

session_unset();

session_destroy();

header('location:login.php?logout.php=true');

?>
<? ob_flush(); ?>

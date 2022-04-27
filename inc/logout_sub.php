

<?php session_destroy(); ?>
<?php session_start(); ?>
<?php

$_SESSION['subadmin_id'] = null;
$_SESSION['fname'] = null;
$_SESSION['lname'] = null;
$_SESSION['contact'] = null;
$_SESSION['email'] = null;
$_SESSION['subadmin_roll'] = null;

setcookie("email", " ", time() - 3600);

header('location:../index.php');


?>


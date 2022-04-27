
<?php include 'db.php' ?>
<?php include 'functions.php' ?>
<?php session_start(); ?>

<?php


if(isset($_POST['Submit'])){

$email = $_POST['email'];
$password = $_POST['password'];

$email = mysqli_escape_string($conn,$email);
$password = mysqli_escape_string($conn, $password);
$checkbox = isset($_POST['keep']);



$query = "SELECT * FROM  `admin` WHERE email = '{$email}'";

$select_admin_query = mysqli_query($conn,$query);

if(!$select_admin_query){

    die("Query FAILED" . mysqli_error($conn));

}


while($row = mysqli_fetch_array($select_admin_query)){

$db_admin_id = $row['admin_id'];
$db_admin_fn = $row['fname'];
$db_admin_ln = $row['lname'];
$db_admin_password = $row['password'];
$db_admin_contact = $row['contact'];
$db_admin_email = $row['email'];
$db_admin_roll = $row['admin_roll'];

}


if($email !== $db_admin_email && $password !== $db_admin_password){


    header('location:../index.php');

}else if($email === $db_admin_email && $password === $db_admin_password){

    $_SESSION['admin_id'] = $db_admin_id;
    $_SESSION['fname'] = $db_admin_fn;
    $_SESSION['lname'] = $db_admin_ln;
    $_SESSION['password'] = $db_admin_password;
    $_SESSION['contact'] = $db_admin_contact;
    $_SESSION['email'] = $db_admin_email;
    $_SESSION['admin_roll'] = $db_admin_roll;


    if($checkbox == "on"){

        setcookie("email", $email, time() + 3600);

    }


    header('location:../admin/dashboard.php');



}else{

    header('location:../index.php');
}




}




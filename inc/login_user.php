<?php include 'db.php' ?>
<?php include 'functions.php' ?>
<?php session_start(); ?>

<?php


if(user_login() == TRUE){


    header('location:../user/index.php');
    exit();

}



if(isset($_POST['Submit'])){

 $email = $_POST['email'];
 $password = $_POST['password'];
 $checkbox = isset($_POST['keep']);

 $email = mysqli_escape_string($conn,$email);
 $password = mysqli_escape_string($conn, $password);

$query = "SELECT * FROM  users WHERE email = '{$email}'";

$select_user_query = mysqli_query($conn,$query);

if(!$select_user_query){

    die("Query FAILED" . mysqli_error($conn));

}


while($row = mysqli_fetch_array($select_user_query)){

  $db_patient_id = $row['patient_id'];
  $db_patient_fn = $row['fname'];
  $db_patient_ln = $row['lname'];
  $db_password = $row['password'];
  $db_contact = $row['contact'];
  $db_email = $row['email'];
  $db_address = $row['address'];
  $db_usre_roll = $row['user_roll'];
  
}


if($email === $db_email && $password === $db_password){

    $_SESSION['patient_id'] = $db_patient_id;
    $_SESSION['fname'] = $db_patient_fn;
    $_SESSION['lname'] = $db_patient_ln;
    $_SESSION['contact'] = $db_contact;
    $_SESSION['email'] = $db_email;
    $_SESSION['password'] = $db_password;
    $_SESSION['address'] = $db_address;
    $_SESSION['user_roll'] = $db_user_roll;


    if($checkbox ==  "on"){

        setcookie("email",$email,time()+3600);


    }

    header('location:../user/index.php');

}else{

    header('location:../index.php');
}



}
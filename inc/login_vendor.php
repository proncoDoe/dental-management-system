
<?php include 'db.php' ?>
<?php include 'functions.php' ?>
<?php session_start(); ?>

<?php


if(isset($_POST['Submit'])){

 $email = $_POST['email'];
 $password = $_POST['password'];
 $checkbox = isset($_POST['keep']);

 $email = mysqli_escape_string($conn,$email);
 $password = mysqli_escape_string($conn, $password);


 $query = "SELECT * FROM  `vendor` WHERE email = '{$email}'";

 $select_vendor_query = mysqli_query($conn,$query);

 if(!$select_vendor_query){

     die("Query FAILED" . mysqli_error($conn));

 }


 while($row = mysqli_fetch_array($select_vendor_query)){

 $db_vendor_id2 = $row['vendor_id2'];
 $db_type_id = $row['type'];
 $db_vendor_fn = $row['fname'];
 $db_vendor_ln = $row['lname'];
 $db_vendor_password = $row['password'];
 $db_vendor_contact = $row['contact'];
 $db_vendor_email = $row['email'];
 $db_vendor_location = $row['location'];
 $db_vendor_roll = $row['vendor_roll'];

 }


 if($email !== $db_vendor_email && $password !== $db_vendor_password){


     header('location:../index.php');

 }else if($email === $db_vendor_email && $password === $db_vendor_password){


     if($checkbox ==  "on"){

        setcookie("email",$email,time()+3600);


    }

     $_SESSION['vendor_id2'] = $db_vendor_id2;
     $_SESSION['type'] = $db_type_id;
     $_SESSION['fname'] = $db_vendor_fn;
     $_SESSION['lname'] = $db_vendor_ln;
     $_SESSION['password'] = $db_vendor_password;
     $_SESSION['contact'] = $db_vendor_contact;
     $_SESSION['email'] = $db_vendor_email;
     $_SESSION['location'] = $db_vendor_location;
     $_SESSION['vendor_roll'] = $db_vendor_roll;

     header('location:../vendor/index.php');


 }else{

     header('location:../index.php');
 }


}
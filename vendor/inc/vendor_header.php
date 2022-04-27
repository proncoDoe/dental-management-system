<?php include 'db.php'; ?>
<?php ob_start(); ?>
<?php session_start();  ?>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title></title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <!-- Google Fonts Roboto -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap">
     
    <!-- Material Design Bootstrap -->
    <link rel="stylesheet" href="css/mdb.min.css">
    <link rel="stylesheet" href="css/sample.css">
    <link rel="stylesheet" href="css/style.css">
     <link rel="stylesheet" href="css/feedback_toggleup.css">

</head>
<body>

<?php  

if(isset($_SESSION['vendor_roll'])){

    if($_SESSION['vendor_roll'] !== 'vendor'){


        header('location:../index.php');

    }

}

?>
<?php require '../inc/db.php' ?>
<?php ob_start(); ?>
<?php require 'function_query_confirm.php' ?>
<!DOCTYPE html>

<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
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
        <!-- Bootstrap core CSS -->
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <!-- Material Design Bootstrap -->
        <link rel="stylesheet" href="css/mdb.min.css">
        <link rel="stylesheet" href="css/dashboard.css">
        <link rel="stylesheet" href="css/nomalise.css">
        <link rel="stylesheet" href="css/sample.css">
        <script src="https://cdn.ckeditor.com/ckeditor5/22.0.0/classic/ckeditor.js"></script>
        <link rel="stylesheet" href="css/loader2.css">
        <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    
    </head>

    <?php  

    if(isset($_SESSION['subadmin_roll'])){

        if($_SESSION['subadmin_roll'] !== 'subadmin'){

	
            header("location:../index.php");

        
        }

    }


    ?>



    <body>

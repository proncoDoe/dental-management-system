<?php require 'inc/db.php' ?>
<?php ob_start(); ?>


<!DOCTYPE html>

<!--[if gt IE 8]><!-->
<html class="no-js">
<!--<![endif]-->

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title></title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
        integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <!-- Google Fonts Roboto -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap">

    <!-- Material Design Bootstrap -->
    <link rel="stylesheet" href="css/mdb.min.css">
    <link rel="stylesheet" media="screen an (max-width:768px)" href="css/mobile.css">

    <link rel="stylesheet" media="sreen and (min-width:1100px)" href="css/windscreen.css">

    <link rel="stylesheet" href="css/menu.css">
    <link rel="stylesheet" href="css/banner.css">


    <style>






    </style>


</head>

<body>






    <div class="container">


        <?php




        $error = '';
        $response = '';

        if (isset($_POST['Submit'])) {


            $email = $_POST['email'];

            $password = $_POST['password'];
            


            // // User

            // $query1 = mysqli_query($conn, "SELECT * FROM users WHERE email='$email' AND password='$password'");
            // if(mysqli_num_rows($query1) == 0)
            // {
            //     $error = "Email or Password is invalid";
            // }
            // else
            // {
            //     $row1 = mysqli_fetch_assoc($query1);
            //     $_SESSION['email']=$row1['email'];
            //     $_SESSION['user_id'] = $row1['user_id'];
		
            //     if($_SESSION['user_id'] == $row1['user_id'])
            //     {
            //         header("Location: user_dashboard.php");
            //     }
            //     else
            //     {
            //         $error = "Failed Login";
            //     }
            // };
	


            // $query2 = mysqli_query($conn, "SELECT * FROM vendor WHERE email='$email' AND password='$password'");
            // if(mysqli_num_rows($query2) == 0)
            // {
            //     $error = "Username or Password is invalid";
            // }
            // else
            // {
            //     $row2 = mysqli_fetch_assoc($query2);
            //     $_SESSION['email']=$row2['email'];
            //     $_SESSION['vendor_id'] = $row2['vendor_id'];
		
            //     if($_SESSION['vendor_id'] == $row2['vendor_id'])
            //     {
            //         header("Location: vendor_dashboard.php");
            //     }
            //     else
            //     {
            //         $error = "Failed Login";
            //     }
            // }
	

         




        }


        ?>
























        <header id="main-header">

            <div class="conatiner-fluid">

                <nav class="navbar navbar-expand-lg navbar-light bg-light text-right fixed-top">

                    <div class="text-left mt-5">




                    </div>


                    <div class="col">


                        <div>

                            <a href="general_signup.php"><i class="fas fa-user-md fa-2x  p-3"></i><span
                                    style="text-decoration: none; font-weight:500;"
                                    class="mr-5 text-muted">Signup</span></a>

                            <a href="" data-toggle="modal" data-target="#modalLoginAvatar"><i
                                    class="fas fa-sign-in-alt fa-2x p-3"></i><span
                                    style="text-decoration: none;font-weight:500;" class="text-muted">Sign In
                                </span></a>

                            <a class="float-left mt-md-4" href="#"><img src="myid/logo.png" class=" figure-img"
                                    alt=""></a>
                            <span clearfix></span>
                        </div>


                        <button class="navbar-toggler" type="button" data-toggle="collapse"
                            data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                            aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>


                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul class="navbar-nav  ml-auto">



                                <?php


$query = "SELECT * FROM category_menu_bar";


$select_reult = mysqli_query($conn,$query);


while ($row = mysqli_fetch_assoc($select_reult)) {

    $cat_title = $row['cat_title'];

echo  "<li class='pb-3 text-muted'><a href='#' class='nav-item p-3 text-muted'>{$cat_title}</a></li>";


}


?>







                            </ul>
                        </div>


                    </div>
                </nav>

            </div>





            <!--Modal: Login / Register Form-->
            <div class="modal fade" tabindex="-1" id="modalLoginAvatar" role="dialog" aria-labelledby="myModalLabel"
                aria-hidden="true">
                <div class="modal-dialog cascading-modal modal-avatar" role="document">
                    <!--Content-->
                    <div class="modal-content">

                        <!--Header-->
                        <div class="modal-header">
                            <img src="myid/untitled-9.png" alt="avatar" class="rounded-circle img-responsive">

                        </div>

                        <div class="text-center bg-danger error"
                            style="<?php if($error != ""){ ?> display:block; <?php } ?>"><?php echo $error; ?></div>
                        <div class="text-center  bg-success error"
                            style=" <?php if($response !=""){ ?> display:block; <?php } ?>"> <?php echo $response; ?>
                        </div>
                        <!--Modal cascading tabs-->
                        <div class="modal-c-tabs">

                            <!-- Tab panels -->
                            <div class="tab-content">

                                <!--Body-->
                                <div class="modal-body  mb-1">

                                    <h5 class="mt-1 mb-2"><b><i>SIGN IN<i></b></h5>

                                    <form action="index.php" method="POST" enctype="multipart/form-data">

                                        <div class="row">

                                            <div class="col-md-12">


                                                <div class="md-form form-sm mb-5">
                                                    <i class="fas fa-envelope prefix"></i>
                                                    <input type="email" name="email" id="modalLRInput10"
                                                        class="form-control validate">
                                                    <label data-error="wrong" data-success="right"
                                                        for="modalLRInput10"><i>Your email</i></label>
                                                </div>

                                                <div class="md-form form-sm mb-4">
                                                    <i class="fas fa-lock prefix"></i>
                                                    <input type="password" name="password" id="modalLRInput11"
                                                        class="form-control validate">
                                                    <label data-error="wrong" data-success="right"
                                                        for="modalLRInput11"><i>Your password</i></label>
                                                </div>


                                            </div>


                                        </div>


                                        <div class="text-center mt-2">
                                            <button type="submit" name="Submit" value="Submit" class="btn btn-info">Log
                                                in <i class="fas fa-sign-in ml-1"></i></button>
                                        </div>

                                    </form>

                                </div>
                                <!--Footer-->
                                <div class="modal-footer">
                                    <div class="options text-center text-md-right mt-1">
                                        <p>Not a user/vendor? <a href="general_signup.php" class="blue-text">Sign Up</a>
                                        </p>
                                        <p>Forgot <a href="form/forgetPassword.php" class="blue-text">Password?</a></p>
                                    </div>
                                    <button type="button" class="btn btn-outline-info waves-effect ml-auto"
                                        data-dismiss="modal">Close</button>
                                </div>


                            </div>

                        </div>
                    </div>
                    <!--/.Content-->
                </div>
            </div>

        </header>




        <main>



            <div class="col-12 flex-top bg-dark" style="margin-top: 120px;">
                <h1 class="display-4">Title</h1>
                <p class="lead">Subtitle</p>
                <hr class="my-4">
                <p>Content</p>
            </div>



        </main>

    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"
        integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous">
    </script>
    <script src="" async defer></script>
</body>

</html>


<script src="" async defer></script>
</body>

</html>
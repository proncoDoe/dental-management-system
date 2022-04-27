<?php require 'inc/db.php' ?>
<?php require 'function_id_exist.php' ?>


<!DOCTYPE html>

<!--[if gt IE 8]><!-->
<html class="no-js">
<!--<![endif]-->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title></title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
        integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link href="css/style.css" rel="stylesheet">


</head>

<body>


    <div style="margin-top:100px;"></div>

    <header>

    </header>

    <main>


        <?php
     
      if(isset($_GET['lang']) && !empty($_GET['lang'])){


        $_SESSION['lang'] = $_GET['lang'];


        if($_SESSION['lang'] && $_SESSION['lang'] != $_GET['lang']){

            echo "<script type='text/javascript'> location.reload(); </script>";

        }

    }


        if(isset($_SESSION['lang'])){


            include "../inc/languages/".$_SESSION['lang'].".php";

        }else{

        include "../inc/languages/en.php";


        }

     ?>




        <div class="container">


            <form action="" id="language_form" method="get" style="border: none; text-decoration:none; float:right">
                <div class="form-group">
                    <select name="lang" class="form-control" onchange="changeLanguage();">

                        <option value="en"
                            <?php  if(isset($_SESSION['lang']) && $_SESSION['lang'] == 'en'){ echo "selected";} ?>>
                            English</option>
                        <option value="sp"
                            <?php  if(isset($_SESSION['lang']) && $_SESSION['lang'] == 'sp'){ echo "selected";} ?>>
                            Spanish</option>
                        <option value="fr"
                            <?php  if(isset($_SESSION['lang']) && $_SESSION['lang'] == 'fr'){ echo "selected";} ?>>
                            French</option>

                    </select>

                </div>

                <div class="clearfix" style="clear:both"></div>

            </form>


            <?php
    

     $error = '';
     $response = '';

    if(isset($_POST['Submit'])){


    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $email = $_POST['email'];
    $user_roll = $_POST['user_roll'];
    $password = $_POST['password'];
    $comfirm_password = $_POST['comfirm_password'];
    $sex = @$_POST['sex'];
    $condtion = isset($_POST['condition']);
    $date = date('F, d Y');

    if (strlen($fname) < 3) {

        $error = 'First name is to short';
    } else if (strlen($lname) < 3) {

        $error = 'last name is to short';
    }else if(!filter_var($email, FILTER_VALIDATE_EMAIL)){

        $error = 'Please enter a valid email';

    }else if(patient_exist($email, $conn)){


        $error = 'Someone have already use the email?';


    }else if(strlen($password) < 8){


        $error = 'Password must be greater than or equal to 8 character';


    }else if($password !== $comfirm_password){


        $error = 'password doe\'s not match';

    }else if(!$sex == "M" || !$sex == "F"){


        $error  = 'You must check the botton';


    }else if(!$condtion){


        $error = 'You must Agree to the Terms and Conditions';


    }else{


    //   $password =  password_hash($password, PASSWORD_BCRYPT, array('cost' => 12));

    // $password = md5($password);

        $statement = "INSERT INTO users(`fname`,`lname`,`email`, `user_roll`,`password`,`sex`,`date`) ";
        $statement .= "VALUES (?,?,?,?,?,?,?)";
        $stmt = $conn->prepare($statement);
        $stmt->bind_param("sssssss", $fname, $lname, $email, $user_roll, $password, $sex, $date);
        $stmt->execute();

        if($stmt){


            $response = 'Successfully registered';

        }

    }$conn->close();



    }

    ?>


            <div class="row">

                <div class="col-md-12">


                    <div class="my-3 textItalic text-muted"><?php echo _JOIN_NOW  ?></div>

                    <form action="signup_user.php" method="POST" enctype="multipart/form-data">

                        <div class="row">

                            <div class="mt-2 col-sm-4">


                                <div class="form-group fontuser textItalic">

                                    <label for="fname" class="text-muted"><?php echo _FIRST_NAME ?></label>
                                    <input type="text" name="fname" class="form-control">
                                    <i class="fa fa-user fa-lg"></i>

                                </div>


                                <div class="form-group fontuser textItalic">

                                    <label for="lname" class="text-muted"><?php echo _LAST_NAME ?></label>
                                    <input type="text" name="lname" class="form-control">
                                    <i class="fa fa-user fa-lg"></i>

                                </div>


                                <div class="form-group fontemail textItalic">

                                    <label for="email" class="text-muted"><?php echo _EMAIL ?></label>
                                    <input type="text" name="email" class="form-control">
                                    <i class="fa fa-envelope fa-lg"></i>

                                </div>


                                <div class="form-group fontemail textItalic">

                                    <label class="text-muted">Select Patient</label>

                                    <select name="user_roll" class="form-control" required>

                                        <option value="" selected disabled>Select user</option>
                                        <option value="substriber">User Roll</option>

                                    </select>

                                </div>





                                <div class="form-group fontpassword textItalic">

                                    <label for="password" class="text-muted"><?php echo _PASSWORD; ?></label>
                                    <input type="password" name="password" class="form-control">
                                    <i class="fas fa-lock fa-lg"></i>

                                </div>



                                <div class="form-group fontpassword textItalic">

                                    <label for="comfirm_password"
                                        class="text-muted"><?php echo _RE_ENTER_PASSWORD ?></label>
                                    <input type="password" name="comfirm_password" class="form-control">
                                    <i class="fas fa-lock fa-lg"></i>

                                </div>

                            </div>



                            <div class="col-sm-4">



                                <span class="form-group fontradio ">

                                    <label for="sex" class="textItalic text-muted"><?php echo _SEX ?></label><br>

                                    <input type="radio" class="mx-2 " name="sex" value="M"><label
                                        class="text-muted"><?php echo _MALE ?></label><i
                                        class="mx-3 my-4 fa fa-male fa-2x"></i>
                                    <input type="radio" class="mx-2" name="sex" value="F"><label
                                        class="text-muted"><?php echo _FEMALE ?></label><i
                                        class="mx-3 my-4 fas fa-female fa-2x"></i>


                                </span>


                                <div class="form-group fontpassword condition">


                                    <input type="checkbox" name="condition">
                                    <label for="condition" class="text-muted"><?php echo _CONDITION ?></label>

                                </div>




                                <div class="form-group">

                                    <button type="submit" name="Submit" class="btn btn-primary sub" value="Submit"
                                        style="width: 45%;"><?php echo _SUBMIT ?></button>

                                </div>

                                <div class="text-right options">
                                    <p class="pt-1 text-muted font-weight-bold"><?php echo _ALREADY_COUNT ?> <a
                                            href="../index.php" class="blue-text"
                                            style="text-decoration: none;"><?php echo _SIGN ?></a></p>
                                </div>

                                <div class="text-center bg-danger error"
                                    style="<?php if($error != ""){ ?> display:block; <?php } ?>"><?php echo $error; ?>
                                </div>
                                <div class="text-center bg-success error"
                                    style=" <?php if($response !=""){ ?> display:block; <?php } ?>">
                                    <?php echo $response; ?></div>

                            </div>


                            <div class="col-sm-4">


                                <div class="card bg-primary text-light textFont" style="width: 30rem; height: 27rem">
                                    <div class="card-body">
                                        <h5 class="card-title"><?php echo _TITLE ?></h5>


                                        <ul class="textLi textItalic">


                                            <li><?php echo _ACCESS ?> </li><br>
                                            <li><?php echo _LET ?></li>



                                        </ul>




                                    </div>
                                </div>



                            </div>


                        </div>


                    </form>


                </div>



            </div>
        </div>









    </main>


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


<script>
function changeLanguage() {

    document.getElementById('language_form').submit();


}
</script>
</body>

</html>
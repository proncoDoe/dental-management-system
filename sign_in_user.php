


    <?php include 'inc/header.php' ?>

    <?php include 'inc/navigation.php' ?>
    <body id="sign_in1">

    <header>





          
    </header>

    <main>


    <?php require 'inc/functions.php' ?>



    <?php
     
    if(isset($_GET['lang']) && !empty($_GET['lang'])){


        $_SESSION['lang'] = $_GET['lang'];


        if($_SESSION['lang'] && $_SESSION['lang'] != $_GET['lang']){

            echo "<script type='text/javascript'> location.reload(); </script>";

        }

    }


        if(isset($_SESSION['lang'])){


            include "inc/languages/".$_SESSION['lang'].".php";

        }else{

        include "inc/languages/en.php";


        }

    ?>




    <div class="container my-5">




    <form action="" id="language_form" method="get" style="border: none; text-decoration:none; float:right">
        <div class="form-group">
            <select name="lang" class="form-control" onchange="changeLanguage();" >

                <option value="en" <?php  if(isset($_SESSION['lang']) && $_SESSION['lang'] == 'en'){ echo "selected";} ?> >English</option>
                <option value="sp" <?php  if(isset($_SESSION['lang']) && $_SESSION['lang'] == 'sp'){ echo "selected";} ?> >Spanish</option>
                <option value="fr" <?php  if(isset($_SESSION['lang']) && $_SESSION['lang'] == 'fr'){ echo "selected";} ?> >French</option>
    
            </select>

        </div>

        <div class="clearfix" style="clear:both"></div>

    </form>


    <div class="row">

<div class="col-lg-5">

<div class="card">

<div class="ml-5  pl-5">

<img src="myid/dental_logo.png" alt="" class="btn img-fluid   bounceIn img-responsive" style="border-radius:50%; padding-left:11px; width:50%;  padding-right:15px">

</div>

<div class="card-body bg-primary text-white">

<form action="inc/login_user.php" method="POST" enctype="multipart/form-data">



<div class="form-group fontemail textItalic">

<label for=""><?php echo _EMAIL ?></label>
<input type="email" name="email" class="form-control rounded-0" placeholder="<?php echo _SOME_THING_EMAIL ?> " autocomplete="off">
<i class="fa fa-envelope fa-lg"></i>
</div>


<div class="form-group fontpassword textItalic fontemail">

<label for=""><?php echo _PASSWORD ?></label>

<input type="password" name="password" id="showPassword" class="form-control rounded-0" data-toggle="password" placeholder="<?php echo _PASSWORD ?>" required autocomplete focused>
<!-- <i class="far fa-eye fa-lg icon" id="icon" onclick="show();"></i> -->

    <span class="eye" onclick="showFunction()">
                    <i id="hide1" class="far fa-eye fa-lg"></i>
                    <i id="hide2" class="far fa-eye-slash fa-lg"></i>
    </span>

</div>


<div class="form-group">


    <input type="checkbox" name="keep">
    <lable for="keep"><?php echo _KEEP_ME ?></lable>

</div>

<div class="form-group">

<button type="submit" name="Submit"  class="btn btn-amber btn-lg text-white rounded-0" value="Submit" style="background: #f9f9f9;width: 100%;color: #f9f9f9;  border: none;"><?php echo _LOG_IN ?></button>

</div>



</form>


</div>


<div class="card-footer text-center text-md-right mt-1 text-white">
        <p><?php echo _NOT_USER_VENDOR ?><a href="general_signup.php" class="blue-text"><?php echo _SIGN_UP ?></a></p>
        <p><?php echo _FORGET_PASSWORD ?> <a href="forgetPassword_user.php?forget=<?php echo uniqid(true);  ?>" class="blue-text"><?php echo _PASSWORD ?></a></p>
    </div>



</div>



</div>


</div>


    </div>
      
      
      
    </main>
         

    <?php include 'inc/footer.php' ?>
          
    <script>


function changeLanguage(){

document.getElementById('language_form').submit();


}



        </script>


 






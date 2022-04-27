<?php include 'inc/header.php' ?>

<?php include 'inc/navigation.php' ?>

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

            include "inc/languages/".$_SESSION['lang'].".php";
            

        }else{

            include "inc/languages/en.php";


        }

    ?>




    <div class="container">




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

<div class="ml-5 pl-5">

    <img src="myid/Untitled-9.png" alt="" class="btn img-fluid   bounceIn img-responsive" style="border-radius:57%; padding-left:20px; width:50%;  padding-right:20px">

</div>

<div class="card-body bg-primary">

<form action="inc/login_admin.php" method="POST" enctype="multipart/form-data">



<div class="form-group fontemail textItalic">

<label for=""><?php echo _EMAIL ?></label>
<input type="email" name="email" class="form-control" placeholder="<?php echo _SOME_THING_EMAIL ?> " autocomplete="off">
<i class="fa fa-envelope fa-lg"></i>
</div>


<div class="form-group fontpassword textItalic">

<label for=""><?php echo _PASSWORD ?></label>
<input type="password" name="password" id="showPassword" class="form-control" placeholder="<?php echo _PASSWORD ?>">

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

<button type="submit" name="Submit"  class="btn btn-amber btn-lg text-white" value="Submit" style="background: #f9f9f9;width: 100%;color: #f9f9f9;  border: none;"><?php echo _LOG_IN ?></button>

</div>



</form>


</div>

<div class="card-footer text-center text-md-right mt-1">
        <p><?php echo _NOT_USER_VENDOR ?><a href="general_signup.php" class="blue-text"><?php echo _SIGN_UP ?></a></p>
        <p><?php echo _FORGET_PASSWORD ?> <a href="forgetPassword_subadmin.php" class="blue-text"><?php echo _PASSWORD ?></a></p>
    </div>



</div>



</div>


</div>


    </div>
      
      
      
    </main>
         

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>


          
    <script>


function changeLanguage(){

document.getElementById('language_form').submit();


}



        </script>



</body>

</html>


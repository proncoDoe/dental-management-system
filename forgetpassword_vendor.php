
  <?php include 'inc/header.php' ?>




<?php


$error = "";
$respond = "";

if(isset($_POST['Submit'])){



$newpassword = $_POST['password'];
$comfirm_password = $_POST['comfirm_password'];


$email = $_POST['email'];

$statement = "SELECT vendor_id FROM vendor WHERE `email` = ?";
$stmt = $conn->prepare($statement);
$stmt->bind_param("s", $email);
$stmt->execute();
 
$result = $stmt->get_result();
 
if (mysqli_num_rows($result) >= 1) {
 

  if(strlen($newpassword) < 8){


    $error = "password must be greater than or equal 8 character?";

}else if ($newpassword !== $comfirm_password){


    $error = "password does not match";
}else{

    $statement = "UPDATE vendor SET `password` = '$newpassword' WHERE `email` = ? ";
    $stmt = $conn->prepare($statement);
    $stmt->bind_param("s", $_POST['email']);
    $stmt->execute();
   
    if($stmt){

      $response = "Password change successfuly, <a href='index.php'>Click here</a>";


    }

}

}else{

  $error = 'Email doe\'s not exist';
} 

}


  ?>
     
 




    <header>
    <?php require 'inc/navigation.php' ?> 

    </header>




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




<main>

<div class="container my-4"> 


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

<div class="text-center  bg-danger error" style=" <?php if($error !=""){ ?> display:block; <?php } ?>" > <?php echo $error; ?></div>
<div class="text-center  bg-success error" style=" <?php if($response !=""){ ?> display:block; <?php } ?>" > <?php echo $response; ?></div>
    <div class="card my-5">


        <div class="container">

        <div class="text-center my-5 text-light">
              <i class="fa fa-lock fa-7x"></i>
        </div>

          <div class="my-3 textItalic text-center font-weight-bold text-white">Forgot Password?</div>

          <h5 class="text-white">You can reset your Password here.</h5>

    <form action="" method="post">


    <div class="form-group">

<div class="input-group">
<span class="input-group-addon text-light" style="background: #008ed6; margin-top: 2%; width: 10%; color: #444;  border: none; "><i class="fa fa-envelope fa-lg bounceIn" style="margin-top:40%; padding-left:25%"></i></span>
<input type="email" name="email"  class="form-control"  placeholder="<?php echo _SOME_THING_EMAIL ?>" required autocomplete="off">

 
   
</div>
<div>

<br>




 
<div class="form-group">

<div class="input-group">
<span class="input-group-addon text-light" style="background: #008ed6; margin-top: 2%; width: 10%; color: #444;  border: none; "><i class="far fa-user bounceIn" style="margin-top:40%; padding-left:25%"></i></span>
<input type="password" name="password"  class="form-control"  placeholder="<?php echo _PASSWORD ?>" required autocomplete="off">

 
   
</div>
<div>

<br>

<div class="form-group">

  <div class="input-group">
<span class="input-group-addon  text-light" style="background: #008ed6;; width: 10%; margin-top: 2%; color: #444;  border: none;"><i class="fas fa-check bounceIn" style="margin-top:40%; padding-left:25%"></i></span>
<input type="password" name="comfirm_password"  class="form-control"  placeholder="<?php echo _RE_ENTER_PASSWORD ?>" required autocomplete="off">
  </div>
<div>

<br>



          <div class="form-group text-center">

            <button type="submit" name="Submit"  class="btn btn-primary   sub "  value="<?php echo _RESET_PASSWORD; ?>" style="width: 100%; "><?php echo _RESET_PASSWORD; ?></button>

            </div>





     
      </div>


  </form>

        
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
 

 

   
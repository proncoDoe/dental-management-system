
  <?php include 'inc/header.php' ?>




<?php


$error = "";
$respond = "";

if(isset($_POST['Submit'])){



$newpassword = $_POST['password'];
$comfirm_password = $_POST['comfirm_password'];


$email = $_POST['email'];

$statement = "SELECT subadmin_id FROM subadmin WHERE `email` = ?";
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

    $statement = "UPDATE subadmin SET `password` = '$newpassword' WHERE `email` = ? ";
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



<main>

<div class="container"> 
   

<div class="row">

<div class="col-lg-5">

<div class="text-center  bg-danger error" style=" <?php if($error !=""){ ?> display:block; <?php } ?>" > <?php echo $error; ?></div>
<div class="text-center  bg-success error" style=" <?php if($response !=""){ ?> display:block; <?php } ?>" > <?php echo $response; ?></div>
    <div class="card my-5">


        <div class="container">

        <div class="text-center my-5 text-light">
              <i class="fa fa-lock fa-7x"></i>
        </div>

          <div class="my-3 textItalic text-center font-weight-bold">Forgot Password?</div>

          <h5>You can reset your Password here.</h5>

    <form action="" method="post">


    <div class="form-group">

<div class="input-group">
<span class="input-group-addon text-light" style="background: #008ed6; margin-top: 2%; width: 10%; color: #444;  border: none; "><i class="fa fa-envelope fa-lg bounceIn" style="margin-top:40%; padding-left:25%"></i></span>
<input type="email" name="email"  class="form-control" placeholder="Email" required autocomplete="off">

 
   
</div>
<div>

<br>




 
<div class="form-group">

<div class="input-group">
<span class="input-group-addon text-light" style="background: #008ed6; margin-top: 2%; width: 10%; color: #444;  border: none; "><i class="far fa-user bounceIn" style="margin-top:40%; padding-left:25%"></i></span>
<input type="password" name="password"  class="form-control" placeholder="Enter Password" required autocomplete="off">

 
   
</div>
<div>

<br>

<div class="form-group">

  <div class="input-group">
<span class="input-group-addon  text-light" style="background: #008ed6;; width: 10%; margin-top: 2%; color: #444;  border: none;"><i class="fas fa-check bounceIn" style="margin-top:40%; padding-left:25%"></i></span>
<input type="password" name="comfirm_password"  class="form-control" placeholder="Confirm Password" required autocomplete="off">
  </div>
<div>

<br>



          <div class="form-group text-center">

            <button type="submit" name="Submit"  class="btn btn-primary   sub "  value="Submit" style="width: 100%; ">Reset Password</button>

            </div>





     
      </div>


  </form>

        
</div>


</div>

</div>

</div>



</main>

<?php include 'inc/footer.php' ?>




 

   
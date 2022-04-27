<?php include 'inc/header.php' ?>

<header>
<?php include 'inc/navigation.php' ?> 

<?php


$error = "";
$respond = "";

if(isset($_POST['Submit'])){



$newpassword = $_POST['password'];
 $comfirm_password = $_POST['comfirm_password'];



    if(strlen($newpassword) < 8){


        $error = "password must be greater than or equal to 8 character";

    }else if ($newpassword !== $comfirm_password){


        $error = "password does not match";
    }else{
    


        $email = $_SESSION['email'];

        $statement = "UPDATE users SET `password` = '$newpassword' WHERE `email` = ? ";
        $stmt = $conn->prepare($statement);
        $stmt->bind_param("s", $email);
        $stmt->execute();
     
        if($stmt){

            $respond = "Password change successfuly, <a href='index.php'>Click here</a> to go back to profile";


        }


    }

}


 


    ?>
     
 


<body>





<div class="container">



<div class="text-center  bg-danger error" style=" <?php if($error !=""){ ?> display:block; <?php } ?>" > <?php echo $error; ?></div>
<div class="text-center  bg-success error" style=" <?php if($response !=""){ ?> display:block; <?php } ?>" > <?php echo $response; ?></div>

<form action="" method="POST" >

  <div class="form-group" style="max-width: 400px;">

  <label for="password">New Password</label>
<input type="password" name="password" class="form-control">

<label for="comfirm_password">Re-Enter_Password</label>
<input type="password" name="comfirm_password" class="form-control"><br>


<button type="submit" name="Submit" value="Savepassword">Save</button>

</div>

</form>


</div>

</body>

</html>

 

  
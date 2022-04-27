<?php require 'inc/user_header.php' ?>
<?php require 'inc/function_id_exist.php' ?>

<main>

    <?php require 'inc/user_navigation.php' ?>

    <!--/col-->



    <?php 

if(isset($_SESSION['email'])){

  $email = $_SESSION['email'];



  $query = "SELECT * FROM users WHERE `email` = '{$email}' ";

  $select_query_profile = mysqli_query($conn, $query);

  while($row = mysqli_fetch_array($select_query_profile)){

    $patient_id = $row['patient_id'];
    $fname = $row['fname'];
    $lname = $row['lname'];
    $password = $row['password'];
    $contact = $row['contact'];
    $email = $row['email'];
    $address = $row['address'];
    $user_roll = $row['user_roll'];


    $patient_id = mysqli_escape_string($conn, $patient_id);
    $fname = mysqli_escape_string($conn, $fname);
    $lname = mysqli_escape_string($conn, $lname);
    $contact = mysqli_escape_string($conn, $contact);
    $email = mysqli_escape_string($conn, $email);
    $address = mysqli_escape_string($conn, $address);
    $password = mysqli_escape_string($conn, $password);
    $user_roll = mysqli_escape_string($conn, $user_roll);


  }


}

?>

    <?php
    
    $reponse = "";

    $error = "";
            
if(isset($_POST['Update'])){


    $patient_id = $_POST['patient_id'];
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $contact = $_POST['contact'];
    $email = $_POST['email'];
    $address = $_POST['address'];
    $password = $_POST['password'];
    $user_roll = $_POST['user_roll'];
    $updated_at = date("Y-m-d H:i:sa");

    $patient_id = mysqli_escape_string($conn, $patient_id);
    $fname = mysqli_escape_string($conn, $fname);
    $lname = mysqli_escape_string($conn, $lname);
    $contact = mysqli_escape_string($conn, $contact);
    $email = mysqli_escape_string($conn, $email);
    $address = mysqli_escape_string($conn, $address);
    $password = mysqli_escape_string($conn, $password);
    $user_roll = mysqli_escape_string($conn, $user_roll);


    if(strlen($patient_id) < 3){

        $error = "Invalid ID ";
    
    }else if(patient_exist($patient_id, $conn)){

        $error = "Someone have used the ID";

    }else  if (strlen($fname) < 3) {

        $error = 'First name is to short';
    } else if (strlen($lname) < 3) {
    
        $error = 'last name is to short';
    }else if(strlen($contact) < 9){
    
        $error = "Invalide contact";
    
    }else if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
    
        $error = 'Please enter a valid email';
    
    }else{

        if(mysqli_query ($conn, "UPDATE users SET   patient_id = $patient_id, fname = '$fname', lname ='$lname', contact ='$contact', email ='$email', `password` = '$password', `updated_at` = '$updated_at', address ='$address', user_roll = '$user_roll' WHERE email = '$email'") or die(mysqli_error($conn))){

  
            $response = "successfull updated patient Profile" . "    " . "<a href='index.php'>view Information</a>";


        }


    }


    
    // query_confirm($update_result);
    
    
    }
            
?>








    <div class="container-fluid">

        <div class="col-lg-6 col-sm-12 mx-4">


            <?php include 'inc/welcomepage.php'; ?>

            <div class="text-center  bg-danger error" style=" <?php if($error !=""){ ?> display:block; <?php } ?>">
                <?php echo $error; ?></div>
            <div class="text-center  bg-success error" style=" <?php if($response !=""){ ?> display:block; <?php } ?>">
                <?php echo $response; ?></div>

            <div class="card bg-light my-5">

                <p><a href="index.php" class="btn btn-light btn-lg my-3 text-bold" roll="button">Back</a></p>
                <div class="card-header text-center text-light bg-primary">

                    <h2 class="card-title">Update Profile</h2>

                </div>


                <div class="card-body form-body">

                    <div class="col-md-12 text-dark">

                        <form action="" method="POST" enctype="multipart/form-data">

                            <div class="form-group">

                                <label for="patient_id" class="text-muted">patient Id</label>
                                <input type="text" value="<?php echo $patient_id; ?>" name="patient_id"
                                    class="form-control">

                            </div>



                            <div class="form-group">

                                <label for="Fname" class="text-muted">Fname</label>
                                <input type="text" value="<?php echo $fname   ?>" name="fname" class="form-control">

                            </div>




                            <div class="form-group">

                                <label for="lname" class="text-muted">Lname</label>
                                <input type="text" value="<?php echo $lname  ?>" name="lname" class="form-control">

                            </div>


                            <div class="form-group">

                                <label for="contact" class="text-muted">Contact</label>
                                <input type="text" value="<?php echo $contact; ?>" name="contact" class="form-control">

                            </div>






                            <div class="form-group">

                                <label for="email" class="text-muted">Email</label>
                                <input type="text" name="email" value="<?php echo $email; ?>" class="form-control">

                            </div>


                            <div class="input-group">

                                <select name="user_roll" id="" class="form-control" required>

                                    <option value="" selected disabled>Select User</option>
                                    <option value="substriber">Substriber</option>


                                </select>

                            </div>


                            <div class="form-group">



                                <label class="text-muted">Address</label>


                                <textarea name="address" id="body"
                                    class="form-control"><?php echo $address; ?></textarea>


                            </div>



                            <div class="form-group">



                                <label class="text-muted">Password</label>


                                <input type="password" name="password" value="<?php echo $password; ?>"
                                    class="form-control">


                            </div>


                            <div class="form-group">

                                <button type="submit" name="Update" class="btn btn-primary sub"
                                    value="Update Patient">Update Profile</button>

                            </div>


                        </form>









                    </div>
                </div>
            </div>

        </div>



    </div>

    </div>

</main>

<?php require 'inc/user_footer.php' ?>
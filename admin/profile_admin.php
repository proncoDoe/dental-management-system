<?php include 'inc/admin_header.php'?>

<main>

    <?php include 'inc/admin_navigation.php'?>

    <!--/col-->



    <?php 

if(isset($_SESSION['email'])){

  $email = $_SESSION['email'];



  $query = "SELECT * FROM `admin` WHERE `email` = '{$email}' ";

  $select_query_profile = mysqli_query($conn, $query);

  while($row = mysqli_fetch_array($select_query_profile)){

    $fname = $row['fname'];
    $lname = $row['lname'];
    $password = $row['password'];
    $email = $row['email'];
    $admin_roll = $row['admin_roll'];


    $fname = mysqli_escape_string($conn, $fname);
    $lname = mysqli_escape_string($conn, $lname);
    $password = mysqli_escape_string($conn, $password);
    $admin_roll = mysqli_escape_string($conn, $admin_roll);


  }


}

?>




    <?php
    
    $reponse = "";
            
if(isset($_POST['Update'])){

    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $admin_roll = $_POST['admin_roll'];

    $fname = mysqli_escape_string($conn, $fname);
    $lname = mysqli_escape_string($conn, $lname);
    $email = mysqli_escape_string($conn, $email);
    $password = mysqli_escape_string($conn, $password);
    $admin_roll = mysqli_escape_string($conn, $subadmin_roll);

if(mysqli_query ($conn, "UPDATE `admin` SET  fname = '$fname', lname ='$lname', email ='$email', `password` = '$password', admin_roll = '$admin_roll' WHERE email = '$email'") or die(mysqli_error($conn))){

  
    $response = "successfull updated patient Profile" . "    " . "<a href='index.php'>view Information</a>";



  


}
    
    
    
    // query_confirm($update_result);
    
    
    }
            
?>



    <div class="container-fluid">

        <div class="col-lg-6 col-sm-12 mx-4">

            <div class="text-center  bg-success error" style=" <?php if($response !=""){ ?> display:block; <?php } ?>">
                <?php echo $response; ?></div>

            <div class="card bg-light my-5">

                <p><a href="dashboard.php" class="btn btn-light btn-lg my-3 text-bold" roll="button">Back</a></p>
                <div class="card-header text-center text-light bg-primary">

                    <h2 class="card-title">Update Profile</h2>

                </div>


                <div class="card-body form-body">

                    <div class="col-md-12 text-dark">

                        <form action="" method="POST" enctype="multipart/form-data">

                            <div class="form-group">

                                <label for="Fname" class="text-muted">Fname</label>
                                <input type="text" value="<?php echo $fname   ?>" name="fname" class="form-control">

                            </div>




                            <div class="form-group">

                                <label for="lname" class="text-muted">Lname</label>
                                <input type="text" value="<?php echo $lname  ?>" name="lname" class="form-control">

                            </div>


                            <div class="form-group">

                                <label for="email" class="text-muted">Email</label>
                                <input type="text" name="email" value="<?php echo $email; ?>" class="form-control">

                            </div>


                            <div class="input-group">

                                <select name="admin_roll" id="" class="form-control" required>

                                    <option value="" selected disabled>Select Admin</option>
                                    <option value="admin">Admin</option>


                                </select>

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

<?php include 'inc/admin_footer.php'?>
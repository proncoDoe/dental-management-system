<?php include "admin_header.php" ?>
<?php session_start();  ?>
<?php ob_start(); ?>

<main>



    <!--/col-->



    <div class="row">

        <div class="container-fluid">


            <?php
   


   if (isset($_GET['edit'])) {

    $the_get_patient = $_GET['edit'];


   }


   $query = "SELECT * FROM users WHERE patient_id =  '$the_get_patient' ";

   $patient_result = mysqli_query($conn,$query);

   query_confirm($conn, $patient_result);
   

   while($row = mysqli_fetch_assoc($patient_result)){

   $patient_id = $row['patient_id'];
   $fname = $row['fname'];
   $lname = $row['lname'];
   $contact = $row['contact'];
   $email = $row['email'];
   $address = $row['address'];
  

   }



?>





            <?php
            
            
if(isset($_POST['Update'])){


    $patient_id = $_POST['patient_id'];
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $contact = $_POST['contact'];
    $email = $_POST['email'];
    $address = $_POST['address'];

   if(mysqli_query ($conn, "UPDATE users SET   patient_id = $patient_id, fname = '$fname', lname ='$lname', contact ='$contact', email ='$email',address ='$address' WHERE patient_id = '$the_get_patient'") or die(mysqli_error($conn))){

    header('location: viewpatient.php');
    exit();

  


   }
    
    
    
    // query_confirm($update_result);
    
    
    }
            
?>















            <div class="col-lg-6 col-sm-12 mx-4">



                <div class="card bg-light my-5">

                    <p><a href="../dashboard.php" class="btn btn-light btn-lg my-3 text-bold" roll="button">Back</a></p>
                    <div class="card-header text-center text-light bg-primary">

                        <h2 class="card-title">Update Patient</h2>

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
                                    <input type="text" value="<?php echo $contact; ?>" name="contact"
                                        class="form-control">

                                </div>






                                <div class="form-group">

                                    <label for="email" class="text-muted">Email</label>
                                    <input type="text" name="email" value="<?php echo $email; ?>" class="form-control">

                                </div>




                                <div class="form-group">



                                    <label class="text-muted">Address</label>


                                    <textarea name="address" id="body"
                                        class="form-control"><?php echo $address; ?></textarea>


                                </div>


                                <div class="form-group">

                                    <button type="submit" name="Update" class="btn btn-primary sub"
                                        value="Update Patient">Update Patient</button>

                                </div>


                            </form>









                        </div>
                    </div>
                </div>

            </div>



        </div>

    </div>

    <?php include "admin_footer.php" ?>


</main>
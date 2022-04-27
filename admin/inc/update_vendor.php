<?php include "admin_header.php" ?>
<?php session_start(); ?>
<?php ob_start(); ?>

<main>
    <nav class="navbar fixed-top navbar-expand-md navbar-dark bg-primary mb-3">
        <div class="flex-row d-flex">

            <a class="navbar-brand" href="../dashboard.php" title="Admin"> <i class="fa fa-tachometer-alt"></i> Supper
                Admin</a>
        </div>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsingNavbar">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="navbar-collapse collapse" id="collapsingNavbar">
            <ul class="navbar-nav">

                <li class="nav-item">
                    <a class="nav-link" href="../subdashboard.php">Sub admin</a>
                </li>
            </ul>
            <ul class="navbar-nav ml-auto float-sm-right">

                <li class="nav-item">
                    <a class="nav-link" href="#myAlert" data-toggle="collapse"><i class="far fa-bell fa-1x"></i></a>
                </li>

            </ul>
        </div>
    </nav>

    <!--/col-->

    <div class="row">

        <div class="container-fluid">
            <div class="col-l2-lg">


                <div class="col main pt-5 mt-3">
                    <h1 class="display-4 d-none d-sm-block">
                        <h1 class="text-primary d-inline-block">Hello</h1>

                        <small class="text-muted font-weight-bold text-capitalize">
                            <?php echo $_SESSION['fname']. " ". $_SESSION['lname'] ?></small>
                    </h1>
                    <hr>
                    <div class="alert alert-warning fade collapse" role="alert" id="myAlert">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">×</span>
                            <span class="sr-only">Close</span>
                        </button>
                        <strong>Welcome to naija Dental!</strong> It's mind changeing..
                    </div>
                    <hr>

                </div>

            </div>

            <div class="col-lg-10 mx-4">



                <div class="card bg-light my-5">

                    <div class="card-header text-center text-light bg-primary">

                        <h2 class="card-title">Update Vendor's</h2>

                    </div>



                    <div class="card-body form-body">

                        <div class="col-lg-12 text-light">


                            <table class="table">


                                <thead>
                                    <th>Vendor ID</th>
                                    <!-- <th>Type</th> -->
                                    <th>Fname</th>
                                    <th>Lname</th>
                                    <th>Contact</th>
                                    <th>Gmail</th>
                                    <!-- <th>Location</th>
                    <th>Sex</th> -->
                                    <th>Updated_at</th>

                                </thead>


                                <tbody>



                                    <?php 
                    

                    if(isset($_GET['source'])){


                        $source = $_POST['source'];

                    }else{


                        $source = '';
                    }



                    switch($source){


                        case "add_vendor":
                            include 'inc/viewvendor.php';
                        break;



                    }
                    
                    
                    
                    ?>


                                    <?php
                
                if(isset($_GET['edit'])){
                
                
                    $the_get_vendor = $_GET['edit'];
                    

                }
             ?>

                                    <?php

                    if(isset($_GET['page'])){
                                          
                                          
                        $page = $_GET['page'];
                          
                          
                    }else{
                          
                        $page = 1;
                    }
                          
                    $num_per_page = 3;
                    $start_from = ($page -1) * 3;

                $query = "SELECT * FROM vendor WHERE vendor_id2 = '$the_get_vendor' LIMIT $start_from, $num_per_page";

                $patient_result = mysqli_query($conn, $query);

                while($row = mysqli_fetch_assoc($patient_result)){

                    $vendor_id2 = $row['vendor_id2'];
                    // $type = $row['type'];
                    $fname = $row['fname'];
                    $lname = $row['lname'];
                    $contact = $row['contact'];
                    $email = $row['email'];
                    // $location = $row['location'];
                    // $sex = $row['sex'];
                    $updated_at = date("Y-m-d H:i:sa");


                echo '<tr>';

                echo '<td>'.$vendor_id2.'</td>';
                // echo '<td>'.$type.'</td>';
                echo '<td>'.$fname.'</td>';
                echo '<td>'.$lname.'</td>';
                echo '<td>'.$contact.'</td>';
                echo '<td>'.$email.'</td>';
                // echo '<td>'.$location.'</td>';
                // echo '<td>'.$sex.'</td>';
                echo '<td>'.$updated_at.'</td>';
              
                echo '</tr>';

                }

                ?>




                                </tbody>


                            </table>

                            <?php
            
            
                    if(isset($_POST['Update'])){


                        $vendor_id2 = $_POST['vendor_id2'];
                        // $type = $_POST['type'];
                        $fname = $_POST['fname'];
                        $lname = $_POST['lname'];
                        $contact = $_POST['contact'];
                        $email = $_POST['email'];
                        $vendor_roll = $_POST['vendor_roll'];
                        // $location = $_POST['location'];
                        $updated_at = date("Y-m-d H:i:sa", $_POST['updated_at']);




                        if(strlen($vendor_id2) < 3){

                            $error = "Invalid ID";


                        }else if (strlen($fname) < 3) {

                            $error = 'First name is to short';

                        } else if (strlen($lname) < 3) {

                            $error = 'last name is to short';
                            
                        }else if(strlen($contact) < 9){

                            $error = "Invalide contact";

                        }else{



                    if(mysqli_query ($conn, "UPDATE vendor SET   vendor_id2 = $vendor_id2, fname = '$fname', lname ='$lname', contact ='$contact', email ='$email', updated_at = '$updated_at' WHERE vendor_id2 = '$the_get_vendor'") or die(mysqli_error($conn))){

                    }


                        header('location: viewvendor.php');
                        exit();

              


            }
    
    
    
                        // query_confirm($update_result);
    
    
                        }
            
                    ?>



                            <form action="" method="POST" enctype="multipart/form-data">

                                <div class="form-group">

                                    <label for="vendor_id2" class="text-muted">vendor ID </label>
                                    <input type="text" value="<?php echo $vendor_id2; ?>" name="vendor_id2"
                                        class="form-control">

                                </div>



                                <div class="form-group">

                                    <label for="fname" class="text-muted">Fname</label>
                                    <input type="text" value="<?php echo $fname; ?>" name="fname" class="form-control">

                                </div>



                                <div class="form-group">

                                    <label for="lname" class="text-muted">Lname</label>
                                    <input type="text" value="<?php echo $lname; ?>" name="lname" class="form-control">

                                </div>


                                <div class="form-group">

                                    <label for="contact" class="text-muted">Contact</label>
                                    <input type="text" value="<?php echo $contact; ?>" name="contact"
                                        class="form-control">

                                </div>


                                <div class="form-group">

                                    <label for="email" class="text-muted">Email</label>
                                    <input type="text" value="<?php echo $email; ?>" name="email" class="form-control">

                                </div>


                                <div class="form-group">

                                    <button type="submit" name="Update" class="btn btn-primary sub"
                                        value="Add Doctor">Update Doctor</button>

                                </div>




                            </form>




                        </div>
                    </div>
                </div>

            </div>






        </div>

    </div>



</main>

<?php include "admin_footer.php" ?>
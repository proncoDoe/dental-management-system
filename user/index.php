<?php require 'inc/user_header.php' ?>
<div id="page-wrapper">

    <?php require 'inc/user_navigation.php' ?>
    <div class="container-fluid">


        <?php include 'inc/welcome_home_page.php'; ?>
        <!-- /.row -->


        <main>


            <div class="col-lg-12 col-sm-lg">

                <?php
    
            $error = "";
            $response = "";

                if(isset($_POST['Submit'])){


                    $name = $_POST['name'];
                    $feedback = $_POST['feedback'];
                    $date_time =  Date("F' m y h:i:sa");


                    if(strlen($name) < 3){

                        $error = "Name is the short";

                    }else if(strlen($feedback) < 10){


                        $error = "feedback is to short";


                    }else{


                        $statement = "INSERT INTO feedback(`name`,`feedback`, `date_time`) ";
                        $statement .= "VALUE (?,?,?)";
                        $stmt = $conn->prepare($statement);
                        $stmt->bind_param("sss", $name, $feedback, $date_time);
                        $stmt->execute();


                        if($stmt){


                            $response = 'Successfully Send Feedback';

                        }




                    }$conn->close();





                }

    
                ?>



                <div class="row">


                    <div class="col-lg-4 my-5">


                        <div class="card" style="border: 2px solid #008ed6; height:500px">


                            <div class="card-body">


                                <?php
    
 
    echo '<h2>';


    echo '<span>Patient ID</span> ' .":". $_SESSION['patient_id'];
   echo '<br><br>';
    echo '<span>Contact</span> ' .":". $_SESSION['contact'];
    echo '<br><br>';
    echo '<span>Email</span> ' .":". $_SESSION['email'];
    echo '<br><br>';
    echo '<span>Address</span> ' .":". $_SESSION['address'];
    echo '<br><br>';

    echo '<a href="profile.php" class="btn btn-outline-primary my-5  bounceIn" style=" position:absolute; top:24rem; margin-left:67%"> Update Profile  </a>';


    '</h2>';


    ?>




                            </div>


                        </div>





                    </div>




                    <div class="col-lg-7 mx-5">



                        <div class="card bg-light my-5 ">


                            <div class="card-header text-center text-light bg-primary">

                                <h2 class="card-title">Leave Feedback</h2>

                            </div>



                            <div class="card-body form-body">

                                <div class="col-lg-12 col-sm-12  text-dark">

                                    <form action="" method="POST" enctype="multipart/form-data">

                                        <div class="col-lg-12">

                                            <div class="form-group">

                                                <label for="name" class="text-muted">Name</label>

                                                <input type="text" name="name" class="form-control" required>


                                            </div>

                                        </div>

                                        <div class="col-lg-12">

                                            <div class="form-group">

                                                <label for="feedback" class="text-muted">Feedback</label>

                                                <textarea name="feedback" id="body" class="form-control"
                                                    required></textarea>


                                            </div>

                                        </div>


                                        <div class="col-lg-12">

                                            <div class="form-group">


                                                <button type="submit" name="Submit"
                                                    class="btn btn-link text-primary sub" value="Send">Send

                                                    <i class="fa fa-paper-plane"></i>

                                                </button>


                                            </div>

                                        </div>

                                        <div class="clearfix"></div>

                                </div>




                                </form>









                            </div>
                        </div>
                    </div>
                </div>




            </div>
        </main>



    </div>













</div>







</div>

<?php require 'inc/user_footer.php' ?>
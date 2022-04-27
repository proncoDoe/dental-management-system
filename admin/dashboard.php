
<?php include "inc/admin_header.php" ?>

<header>

</header>


<main>


<?php include "inc/admin_navigation.php" ?>

    <div class="container-fluid" id="main">
        <div class="row row-offcanvas row-offcanvas-left">
            <div class="col-md-3 col-lg-2 sidebar-offcanvas bg-light pl-0" id="sidebar" role="navigation">
                <ul class="nav flex-column sticky-top pl-0 pt-5 mt-3">
                    <li class="nav-item"><a class="nav-link text-muted" href="#"><i class="far fa-chart-bar pr-2"></i>Overview</a></li>
                    <li class="nav-item"><a class="nav-link text-muted" href="viewcontact.php?source=view_contact"><i class="fas fa-phone-alt pr-2"></i>View Contact</a></li>

                    <li class="nav-item">
                        <a class="nav-link text-muted" href="#submenu4" data-toggle="collapse" data-target="#submenu4"><i class="far fa-envelope-open pr-2"></i>Faq message▾</a>
                        <ul class="list-unstyled flex-column pl-3 collapse" id="submenu4" aria-expanded="false">
                        <li class="nav-item"><a class="nav-link text-muted" href="inc/faqmessage.php?source=faq_message">FaQ Message</a></li>
                        <li class="nav-item"><a class="nav-link text-muted" href="process.php?source=add_faq">Add FAQ</a></li>
                        <li class="nav-item"><a class="nav-link text-muted" href="inc/viewfaq.php?source=view_faq">FaQ</a></li>
                        </ul>
                    </li>

                  

                    <li class="nav-item"><a class="nav-link text-muted" href="feedback.php?source=feedback"><i class="far fa-comments pr-2"></i>Feedback</a></li>
                 


                    <li class="nav-item">
                        <a class="nav-link text-muted" href="#submenu3" data-toggle="collapse" data-target="#submenu3"><i class="fa fa-users pr-2"></i>Patient▾</a>
                        <ul class="list-unstyled flex-column pl-3 collapse" id="submenu3" aria-expanded="false">
                        <li class="nav-item"><a class="nav-link text-muted" href="inc/viewpatient.php?source=view_patient">View Patient</a></li>
                        <li class="nav-item"><a class="nav-link text-muted" href="process.php?source=add_patient">Add Patient</a></li>
                      
                        </ul>
                    </li>


<!--  <li class="nav-item"><a class="nav-link text-muted" href="#"><i class="fa fa-user-plus pr-2"></i>Patient medical History</a></li> -->

                    <li class="nav-item">
                        <a class="nav-link text-muted" href="#submenu5" data-toggle="collapse" data-target="#submenu5"><i class="fas fa-clinic-medical"></i>Vendor▾</a>
                        <ul class="list-unstyled flex-column pl-3 collapse" id="submenu5" aria-expanded="false">
                        <li class="nav-item"><a class="nav-link text-muted" href="inc/viewvendor.php?source=add_vendor">View Vendor</a></li>
                        <li class="nav-item"><a class="nav-link text-muted" href="process.php?source=add_vendor">Add Vendor</a></li>
                        </ul>
                    </li>
                
            </div>
            <!--/col-->

            <div class="col main pt-5 mt-3">
                <h1 class="display-4 d-none d-sm-block">
              Welcome to Admin

              <small class="text-muted"> <?php echo $_SESSION['fname']. " ". $_SESSION['lname'] ?></small>
                </h1>

                <div class="alert alert-warning fade collapse" role="alert" id="myAlert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">×</span>
                        <span class="sr-only">Close</span>
                    </button>
                    <strong>Welcome to naija Dental!</strong> It's mind changeing..
                </div>
                <div class="row mb-3">
                    <div class="col-xl-3 col-sm-6 py-2">
                        <div class="card bg-success text-white h-100">
                            <div class="card-body bg-success">
                                <div class="rotate">
                                    <i class="fa fa-users fa-4x"></i>
                                </div>

                                
                                <?php
                
                                $query = "SELECT * from users";

                                $select_all_patient = mysqli_query($conn,$query);

                               $patient_count = mysqli_num_rows($select_all_patient);

                                    echo "<h6 class='text-uppercase'>Patient's</h6>";
                                    echo "<h1 class='display-4'>$patient_count</h1>";
                               
                                ?>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-sm-6 py-2">
                        <div class="card text-white bg-danger h-100">
                            <div class="card-body bg-danger">
                                <div class="rotate">
                                    <i class="fa fa-list fa-4x"></i>
                                </div>

                                <?php
                
                                    $query = "SELECT * from appointment";

                                    $select_all_appointment = mysqli_query($conn,$query);

                                $appointment_count = mysqli_num_rows($select_all_appointment);

                                        echo "<h6 class='text-uppercase'>Booked Appointment</h6>";
                                        echo "<h1 class='display-4'>$appointment_count</h1>";
                               
                                    ?>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-sm-6 py-2">
                        <div class="card text-white bg-info h-100">
                            <div class="card-body bg-info">
                                <div class="rotate">
                                    <i class="fa fa-user-plus fa-4x"></i>
                                </div>


                                <?php
                
                                    $query = "SELECT * from vendor";

                                    $select_all_vendor = mysqli_query($conn,$query);

                                $feedback_vendor = mysqli_num_rows($select_all_vendor);

                                        echo "<h6 class='text-uppercase'>Doctor's</h6>";
                                        echo "<h1 class='display-4'>$feedback_vendor</h1>";
                               
                                    ?>
                            </div>
                        </div>
                    </div>
    
                    <div class="col-xl-3 col-sm-6 py-2">


                        <div class="card text-white bg-warning h-100">
                            <div class="card-body">
                                <div class="rotate">
                                    <i class="fa fa-share fa-4x"></i>
                                </div>

                                <?php
                
                                    $query = "SELECT * from feedback";

                                    $select_all_feedback = mysqli_query($conn,$query);

                                $feedback_count = mysqli_num_rows($select_all_feedback);

                                        echo "<h6 class='text-uppercase'>Feedback</h6>";
                                        echo "<h1 class='display-4'>$feedback_count</h1>";
                               
                                    ?>
                            </div>
                        </div>
                    </div>

                </div>
                <!--/row-->




                <?php
                
                    $query = "SELECT * from contact";

                    $select_all_contact = mysqli_query($conn,$query);

                $contact_count = mysqli_num_rows($select_all_contact);
                               
                    ?>



            <?php
                
                $query = "SELECT * from faq_message";

                $select_all_faq = mysqli_query($conn,$query);

            $faq_count = mysqli_num_rows($select_all_faq);
                           
                ?>

            <?php
                
                $query = "SELECT * from faq";

                $select_all_faqq = mysqli_query($conn,$query);

            $faq = mysqli_num_rows($select_all_faqq);
                       
                ?>

                <div class="row">
                    <div class="col-lg-8"></div>

                    <script type="text/javascript">
                        google.charts.load('current', {'packages':['bar']});
                        google.charts.setOnLoadCallback(drawChart);

                        function drawChart() {
                            var data = google.visualization.arrayToDataTable([
                            ['Data', 'Count'],

                            <?php 
                            

                            $element_list = ['Users', 'Appointment','Vendor', 'Faq', 'Faq Message', 'Contact', 'Feedback'];
                            $element_count = [$patient_count, $appointment_count, $feedback_vendor, $faq, $faq_count, $contact_count, $feedback_count];


                            for($i = 0; $i < 7; $i++){


                                echo "['{$element_list[$i]}'" . ",".  "{$element_count[$i]}],";


                            }
                            
                            
                            ?>


                            // ['Patients', 1000],
                            
                            ]);

                            var options = {
                            chart: {
                                title: '',
                                subtitle: '',
                            }
                            };

                            var chart = new google.charts.Bar(document.getElementById('columnchart_material'));

                            chart.draw(data, google.charts.Bar.convertOptions(options));
                        }
                        </script>

                        <div id="columnchart_material" style="width: 2000px; height: 500px;"></div>

                </div>

                 <!-- google chart row -->


                <hr>
                

                <a id="features"></a>
                <hr>
             
                <div class="row my-4">
             
        </div>




            </div>
        </div>
    </div>





</main>

 <?php include "inc/admin_footer.php" ?>
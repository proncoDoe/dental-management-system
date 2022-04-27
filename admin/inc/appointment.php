<?php include "admin_header.php" ?>
<header>



</header>


<main>

<?php include "out_header.php" ?>

            <!--/col-->

          

    <div class="row">

    <div class="container-fluid">
        <div class="col-l2-lg">

            <div class="card"> 

            <div class="card-body">



            <div class="col main pt-5 mt-3">
            <h1 class="display-4 d-none d-sm-block">
                            <h1 class="text-primary d-inline-block">Hello</h1>

                            <small class="text-muted font-weight-bold text-capitalize"> <?php echo $_SESSION['fname']. " ". $_SESSION['lname'] ?></small>
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
                    </div>
                </div>



            


     
                <div class="col-lg-10 mx-4">


                    <div class="card bg-light my-5">

                <div class="card-header text-center text-light bg-primary">

                <h2 class="card-title">Booked appointment</h2>

                </div>

             

                    <div class="card-body form-body">

                    <div class="col-lg-12 text-light">


                    <table class="table table-responsive-lg table-hover table-bordered">



                    <thead>
                    <th>Doctor ID</th>
                    <th>Patient Fname</th>
                    <th>Patient Lname</th>
                    <th>Contact</th>
                    <th>Blood Group</th>
                    <th>Booking Status</th>
                    <th>date</th>
                    <th>time</th>


                    <tbody>


                    <?php 
                    
                    if(isset($_GET['source'])){

                        $source = $_GET['source'];

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



                $query = "SELECT * FROM appointment  feedback_id LIMIT $start_from, $num_per_page";

                $patient_result = mysqli_query($conn, $query);

                while($row = mysqli_fetch_assoc($patient_result)){

                    $doctor_id = $row['doctor_id'];
                    $fname = $row['fname'];
                    $lname = $row['lname'];
                    $contact = $row['contact'];
                    $bloodgroup = $row['bloodgroup'];
                    $booking_status = $row['booking_status'];
                    $date = $row['date'];
                    $time = $row['time'];

                    echo '<tr>';

                    echo '<td>'.$doctor_id.'</td>';
                    echo '<td>'.$fname.'</td>';
                    echo '<td>'.$lname.'</td>';
                    echo '<td>'.$contact.'</td>';
                    echo  '<td>'.$bloodgroup.'</td>';
                    echo  '<td>'.$booking_status.'</td>';
                    echo '<td>'.$date.'</td>';
                    echo '<td>'.$time.'</td>';

                    echo '</tr>';


                }

                ?>



                <?php 
                   
                delete_feedback();
                   
                   
                ?>

                    </tbody>

                        
                    </table>


                    </div>
                    </div>
                </div>

                </div>





                <?php 
               

                            $statement = "SELECT * FROM appointment";
                            $total_result = $conn->query($statement);
                            $total_feedback = mysqli_num_rows($total_result);

                            $total_faq_page = ceil($total_feedback / $num_per_page);

 
  
  
                            ?>

                                <div class="col-lg-12">

                                <div class="container">


                        <nav aria-label="...">
                <ul class="pagination my-3">


                    <?php    


                    if($page > 1){

                        echo "<li class='page-item'><a class='page-link ' href='appointment.php?page=".($page -1)."'>   
                        <span aria-hidden='true'>&laquo;</span>

                        Previous
                        </a></li>";


                    }




                    for ($i=1; $i < $total_faq_page ; $i++) { 


                    if($i == $page){

                        echo "<li class='page-item  bg-light'><a class='page-link light active_link text-primary' href='appointment.php?page=".$i."'>$i</a></li>";

                    }else{


                        
                        echo "<li class='page-item  bg-light'><a class='page-link light text-primary' href='appointment.php?page=".$i."'>$i</a></li>";

                    }


                    }




                if($i > $page){

                    echo "<li class='page-item'><a class='page-link ' href='appointment.php?page=".($page + 1)."'>   
                    <span aria-hidden='true'>&laquo;</span>
                    Next
                    </a>
                    </li>";


                    }


                    ?>


                </ul>
                </nav>


       
                                </div>
       


                                </div>



            </div>

            </div>




</main>
<?php include "admin_footer.php" ?>

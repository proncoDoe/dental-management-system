<?php include 'inc/vendor_header.php' ?>

<main>

<?php require 'inc/vendor_navigation.php' ?>
            <!--/col-->


    <?php include 'inc/welcomepage.php'; ?>
          


    <div class="container-fluid">
      
                <div class="col-lg-10  mx-4">


                    <div class="card bg-light my-5">

                <div class="card-header text-center text-light bg-primary">

                <h2 class="card-title">View Vendor's</h2>

                </div>

             

                    <div class="card-body form-body">

                    <div class="col-lg-12 text-light">


                    <table class="table table-hover table-condensed table-responsive-lg">


                    <thead>
                    <th>Type</th>
                    <th>Fname</th>
                    <th>Lname</th>
                    <th>Contact</th>
                    <th>Gmail</th>
                    <th>Location</th>
                    <th>Sex</th>
                    <th>Created_at</th>
                    </thead>


                    <tbody>


                    <?php

                    if(isset($_GET['page'])){
                                          
                                          
                        $page = $_GET['page'];
                          
                          
                    }else{
                          
                        $page = 1;
                    }
                          
                    $num_per_page = 3;
                    $start_from = ($page -1) * 3;




                
                $query = "SELECT * FROM vendor LIMIT $start_from, $num_per_page";

                $patient_result = mysqli_query($conn, $query);

                while($row = mysqli_fetch_assoc($patient_result)){

                  
                    $type = $row['type'];
                    $fname = $row['fname'];
                    $lname = $row['lname'];
                    $contact = $row['contact'];
                    $email = $row['email'];
                    $loc = $row['location'];
                    $sex = $row['sex'];
                    $created_at = $row['created_at'];


                echo '<tr>';
                echo '<td>'.$type.'</td>';
                echo '<td>'.$fname.'</td>';
                echo '<td>'.$lname.'</td>';
                echo '<td>'.$contact.'</td>';
                echo '<td>'.$email.'</td>';
                echo '<td>'.$loc.'</td>';
                echo '<td>'.$sex.'</td>';
                echo '<td>'.$created_at.'</td>';
                echo '</tr>';

                }

                ?>

                    </tbody>

                        
                    </table>


                    </div>
                    </div>
                </div>

                </div>

              
                <?php 
               

                            $statement = "SELECT * FROM vendor";
                            $total_result = $conn->query($statement);
                            $total_faq = mysqli_num_rows($total_result);

                            $total_faq_page = ceil($total_faq / $num_per_page);

 
  
  
                            ?>

                                <div class="col-lg-12">

                                <div class="container">


                        <nav aria-label="...">
                <ul class="pagination my-3">


                    <?php    


                    if($page > 1){

                        echo "<li class='page-item'><a class='page-link ' href='viewvendor.php?page=".($page -1)."'>   
                        <span aria-hidden='true'>&laquo;</span>

                        Previous
                        </a></li>";


                    }





                    for ($i=1; $i < $total_faq_page ; $i++) { 


                   if($i == $page){

                    echo "<li class='page-item  bg-light'><a class='page-link active_link light text-primary' href='viewvendor.php?page=".$i."'>$i</a></li>";


                   }else{

                    echo "<li class='page-item  bg-light'><a class='page-link light text-primary' href='viewvendor.php?page=".$i."'>$i</a></li>";

                   }


                    }




                if($i > $page){

                    echo "<li class='page-item'><a class='page-link ' href='viewvendor.php?page=".($page + 1)."'>   
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



</main>


<?php include 'inc/vendor_footer.php' ?>
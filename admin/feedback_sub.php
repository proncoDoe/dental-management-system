<?php include "inc2/sub_header.php" ?>


<header>



</header>


<main>

<?php include "inc2/sub_navigation.php" ?>




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

                <h2 class="card-title">Feedback Message</h2>

                </div>

             

                    <div class="card-body form-body">

                    <div class="col-lg-12 text-light">


                    <table class="table">


                    <thead>
                    <th>name</th>
                    <th>Feedback</th>
                    <th>Date Time</th>
                    </thead>


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




                $query = "SELECT * FROM feedback ORDER BY feedback_id DESC LIMIT $start_from, $num_per_page";

                $faq_message = mysqli_query($conn, $query);

                while($row = mysqli_fetch_assoc($faq_message)){

                  
                    $feedback_id = $row['feedback_id'];
                    $name = $row['name'];
                    $feedback = $row['feedback'];
                    $date_time = $row['date_time'];

                echo '<tr>';

                echo '<td>'.$name.'</td>';
                echo '<td>'.$feedback.'</td>';
                echo '<td>'.$date_time.'</td>';

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
               

                            $statement = "SELECT * FROM feedback";
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

                        echo "<li class='page-item'><a class='page-link ' href='feedback_sub.php?page=".($page -1)."'>   
                        <span aria-hidden='true'>&laquo;</span>

                        Previous
                        </a></li>";


                    }




                    for ($i=1; $i < $total_faq_page ; $i++) { 


                    if($i == $page){

                        echo "<li class='page-item  bg-light'><a class='page-link light active_link text-primary' href='feedback_sub.php?page=".$i."'>$i</a></li>";

                    }else{


                        
                        echo "<li class='page-item  bg-light'><a class='page-link light text-primary' href='feedback_sub.php?page=".$i."'>$i</a></li>";

                    }


                    }




                if($i > $page){

                    echo "<li class='page-item'><a class='page-link ' href='feedback_sub.php?page=".($page + 1)."'>   
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

<?php include "inc2/sub_footer.php" ?>
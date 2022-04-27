<?php include 'inc/vendor_header.php' ?>



<header>

<?php require 'inc/vendor_navigation.php' ?>

</header>

<?php include 'inc/welcomepage.php'; ?>

<main>




<?php

        if(isset($_GET['page'])){
                                  
                                  
            $page = $_GET['page'];
          
          
            }else{
          
            $page = 1;
            }
          
            $num_per_page = 2;
            $start_from = ($page -1) * 2;
        
  




        echo '<div class="col-lg-5 bg-light my-5">';


        $query = "SELECT * FROM feedback   ORDER BY feedback_id DESC LIMIT $start_from, $num_per_page";

        $feedback_result = mysqli_query($conn,$query);

        echo '<div class="jumbotron bg-primary">';

        while($row = mysqli_fetch_assoc($feedback_result)){

 
        $name = $row['name'];
        $feedback = $row['feedback'];
        $date_time = $row['date_time'];




        ?>



     
 
        <div class="media bg-primary" id="section-icons">
                <a class="float-left my-5 pr-3 d-inline-block" href="#">
                    <i class="fa fa-user fa-2x text-info"></i>
                </a>
                <div class="media-body my-3 lead">
                    <h4 class="media-heading text-dark"><?php echo $name; ?>
                   
                    </h4>
                   <div class="text-light"> <?php echo $feedback; ?> </div>
                <div>
                <small> <?php echo $date_time; ?></small>
                </div>

                  <br>
                    <div id="section-icons">
    
                    <div class="icons">
                
                        <ul>
                            <li><a href="#"> <i class="fab fa-whatsapp fa-2x"   target="_blank" aria-hidden="true"></i></a></li>
                            <li><a href="#"> <i class="fab fa-facebook-f fa-2x"   target="_blank" aria-hidden="true"></i></a></li>
                            <li><a href="#"> <i class="fab fa-twitter fa-2x"   target="_blank" aria-hidden="true"></i></a></li>
                            <li><a href="#"> <i class="fab fa-instagram fa-2x"   target="_blank" aria-hidden="true"></i></a></li>
                            <!-- <li><a href="#"> <i class="fab fa-pinterest fa-2x"   target="_blank" aria-hidden="true"></i></a></li> -->
                            <li><a href="#"> <i class="fab fa-linkedin-in fa-2x"   target="_blank" aria-hidden="true"></i></a></li>
                            <!-- <li><a href="#"> <i class="fab fa-telegram fa-2x"   target="_blank" aria-hidden="true"></i></a></li> -->

                        </ul>
        

                    </div>

                    </div>



                </div>
            </div>

     


        <?php } ?>

        </div>



        <?php 
               

                $statement = "SELECT * FROM feedback ";
                $total_result = $conn->query($statement);
                $total_feedback = mysqli_num_rows($total_result);
       
                $total_total_feedback_page = ceil($total_feedback / $num_per_page);
       
       
       
       
                ?>
       
                    <div class="col-lg-12">
       
                    <div class="container">
       
       
                <nav aria-label="...">
                <ul class="pagination my-3">
       
       
                <?php    
       
       
                if($page > 1){
       
                echo "<li class='page-item bg-primary'><a class='page-link ' href='feedback.php?page=".($page -1)."'>   
                <span aria-hidden='true'>&laquo;</span>
       
                Previous
                </a></li>";
       
       
                }
       
       
       
       
                for ($i=1; $i < $total_total_feedback_page ; $i++) { 
       
       
                if($i == $page){

                    echo "<li class='page-item  bg-light'><a class='page-link light active_link text-primary' href='feedback.php?page=".$i."'>$i</a></li>";

                }else{

                    echo "<li class='page-item  bg-light'><a class='page-link light text-primary' href='feedback.php?page=".$i."'>$i</a></li>";

                }
       
       
                }
       
       
       
       
                if($i > $page){
       
                echo "<li class='page-item bg-primary'><a class='page-link ' href='feedback.php?page=".($page + 1)."'>   
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
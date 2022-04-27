<?php include "inc2/sub_header.php" ?>


<header>



</header>


<main>

<?php include 'inc2/sub_navigation.php'?>
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

                <h2 class="card-title">Contact Message</h2>

                </div>

             

                    <div class="card-body form-body">

                    <div class="col-lg-12 text-light">


                    <table class="table">


                    <thead>
                    <th>name</th>
                    <th>email</th>
                    <th>contact</th>
                    <th>Comment</th>
                    <th>Date</th>
                    </thead>


                    <tbody>


                    <?php 
                    
                    if(isset($_GET['source'])){


                        $source = $_GET['source'];



                        switch($source){

                            case 'view_contact':
                                include 'viewcontact_sub.php';
                            break;

                        }

                    }
                    
                    
                    ?>

                    <?php

              
                   if(isset($_GET['page'])){
                                         
                                         
                       $page = $_GET['page'];
                         
                         
                   }else{
                         
                       $page = 1;
                   }
                         
                   $num_per_page = 2;
                   $start_from = ($page -1) * 2;
                   
             

                
                $query = "SELECT * FROM contact ORDER BY contact_id DESC LIMIT $start_from, $num_per_page";

                $contact_message = mysqli_query($conn, $query);

                while($row = mysqli_fetch_assoc($contact_message)){

                    $contact_id = $row['contact_id'];
                    $name = $row['name'];
                    $email = $row['email'];
                    $contact = $row['contact'];
                    $comment = $row['comment'];
                    $date = $row['date'];

                echo '<tr>';

                echo '<td>'.$name.'</td>';
                echo '<td>'.$email.'</td>';
                echo '<td>'.$contact.'</td>';
                echo '<td>'.$comment.'</td>';
                echo '<td>'.$date.'</td>';

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
               

                            $statement = "SELECT * FROM contact";
                            $total_result = $conn->query($statement);
                            $total_contact = mysqli_num_rows($total_result);

                            $total_contact_page = ceil($total_contact / $num_per_page);

 
  
  
                            ?>

                                <div class="col-lg-12">

                                <div class="container">


                        <nav aria-label="...">
                <ul class="pagination my-3">


                    <?php    


                    if($page > 1){

                        echo "<li class='page-item'><a class='page-link ' href='viewcontact_sub.php?page=".($page -1)."'>   
                        <span aria-hidden='true'>&laquo;</span>

                        Previous
                        </a></li>";


                    }




                    for ($i=1; $i < $total_contact_page ; $i++) { 


                   if($i == $page){


                    echo "<li class='page-item  bg-light'><a class='page-link light active_link text-primary' href='viewcontact_sub.php?page=".$i."'>$i</a></li>";

                   }else{


                    echo "<li class='page-item  bg-light'><a class='page-link light text-primary' href='viewcontact_sub.php?page=".$i."'>$i</a></li>";

                   }


                    }




                if($i > $page){

                    echo "<li class='page-item'><a class='page-link ' href='viewcontact_sub.php?page=".($page + 1)."'>   
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
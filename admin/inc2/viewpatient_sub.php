
    <?php include "sub_header.php" ?>



    <main>


    <?php include 'sub_navigation2.php'?>

        <!--/col-->




        <div class="row">

            <div class="container-fluid">
                <div class="col-l2-lg">

                    <div class="card">

                        <div class="card-body">



                            <div class="col main pt-5 mt-3">
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

                    
                            <h2 class="card-title">View Patient's</h2>

                        </div>



                        <div class="card-body">

                            <div class="col-lg-12 text-light">


                                <table class="table table-condensed table-hover">


                                    <thead>
                                        <th>patient Id</th>
                                        <th>Fname</th>
                                        <th>Lname</th>
                                        <th>Contact</th>
                                        <th>Gmail</th>
                                        <th>Address</th>
                                        <th>Sex</th>
                                        <th>Date</th>
                                        <th>Edit </th>
                                        
                                    </thead>


                                    <tbody>

                                    <?php

                                    if(isset($_GET['source'])){


                                        $source = $_GET['source'];

                                    }

                                    

                                    if(isset($_GET['page'])){
                                                          
                                                          
                                                          $page = $_GET['page'];
                                    
                                    
                                                      }else{
                                    
                                                          $page = 1;
                                                      }
                                    
                                                      $num_per_page = 3;
                                                      $start_from = ($page -1) * 3;

          
                          
                                                      $query = "SELECT * FROM users LIMIT $start_from,$num_per_page";
          
                                                      $patient_result = mysqli_query($conn, $query);
          
                                                      while($row = mysqli_fetch_assoc($patient_result)){
          
                                                          $patient_id = $row['patient_id'];
                                                          $fname = $row['fname'];
                                                          $lname = $row['lname'];
                                                          $contact = $row['contact'];
                                                          $email = $row['email'];
                                                          $address = $row['address'];
                                                          $sex = $row['sex'];
                                                          $date = $row['date'];
          
                  
          
                                                      echo '<tr>';
          
                                                      echo '<td>'.$patient_id.'</td>';
                                                      echo '<td>'.$fname.'</td>';
                                                      echo '<td>'.$lname.'</td>';
                                                      echo '<td>'.$contact.'</td>';
                                                      echo '<td>'.$email.'</td>';
                                                      echo '<td>'.$address.'</td>';
                                                      echo '<td>'.$sex.'</td>';
                                                      echo '<td>'.$date.'</td>';
                                                      echo  "<td><a <a class='btn btn-amber btn-sm edit' style='border-radius: 5%;' href='update_patient_sub.php?edit={$patient_id}'> <i class='fas fa-user-edit fa-2x'></i></a></td>";
                                                     
          
                                                      echo '</tr>';
          
                                                      }
          
          
                                                  
                                                      ?>


                                                            <?php

                                                            if(isset($_GET['edit'])){


                                                                $the_get_patient = $_GET['edit'];

                                                            }


  
                                                          

                                                            ?>





                                    </tbody>


                                </table>


                            </div>
                        </div>
                    </div>

                </div>





                <?php 
               

                            $statement = "SELECT * FROM users";
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

    echo "<li class='page-item'><a class='page-link ' href='viewvendor_sub.php?page=".($page -1)."'>   
    <span aria-hidden='true'>&laquo;</span>

    Previous
    </a></li>";


}





for ($i=1; $i < $total_faq_page ; $i++) { 


if($i == $page){

echo "<li class='page-item  bg-light'><a class='page-link active_link light text-primary' href='viewvendor_sub.php?page=".$i."'>$i</a></li>";


}else{

echo "<li class='page-item  bg-light'><a class='page-link light text-primary' href='viewvendor_sub.php?page=".$i."'>$i</a></li>";

}


}




if($i > $page){

echo "<li class='page-item'><a class='page-link ' href='viewvendor_sub.php?page=".($page + 1)."'>   
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




    <?php include "sub_footer.php" ?>
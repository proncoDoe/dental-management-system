<?php include "admin_header.php" ?>
<?php session_start(); ?>
<?php ob_start(); ?>


<header>



</header>


<main>



<nav class="navbar fixed-top navbar-expand-md navbar-dark bg-primary mb-3">
                    <div class="flex-row d-flex">
          
                        <a class="navbar-brand" href="../dashboard.php" title="Admin"> <i class="fa fa-tachometer-alt"></i> Supper Admin</a>
                    </div>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsingNavbar">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="navbar-collapse collapse" id="collapsingNavbar">
                        <ul class="navbar-nav">
                            <li class="nav-item active">
                                <a class="nav-link" href="../../index.php">Home <span class="sr-only">Home</span></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="../subdashboard.php">Sub admin</a>
                            </li>
                        </ul>
                        <ul class="navbar-nav ml-auto float-sm-right">



                        <li class="nav-item">
                                <a class="nav-link" href="../../vendor/index.php">Vendor Dashboard</a>
                            </li>


                            <li class="nav-item">
                                <a class="nav-link" href="#myAlert" data-toggle="collapse"><i class="far fa-bell fa-1x"></i></a>
                            </li>


                            <li class="nav-item">
                                <a class="nav-link" href="../../user/index.php">User Dashboard</a>
                            </li>

                        </ul>
                    </div>
                </nav>

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



            


     
                <div class="col-lg-7 mx-4">


                    <div class="card bg-light my-5">

                <div class="card-header text-center text-light bg-primary">

                <h2 class="card-title">Admin Management</h2>

                </div>

             

                    <div class="card-body">

                    <div class="col-lg-12 text-light">

                  
        <table class="table table-responsive table-hover">

<thead>

<th>Admin ID</th>
<th>First Name</th>
<th>Last Name</th>
<th>Email</th>
<th>Roll</th>
<th>Sex</th>
<th>Date</th>
<th>Status</th>
<th>Delete</th>
<th>Suspend</th>

</thead>

<tbody>




<?php 


if(isset($_GET['source'])){


   $source = $_GET['source'];

}else{


   $source = '';

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





$query = "SELECT * FROM subadmin LIMIT $start_from, $num_per_page";

$admin_result = mysqli_query($conn, $query);

while($row = mysqli_fetch_assoc($admin_result)){

$subadmin_id = $row['subadmin_id'];
$fname = $row['fname'];
$lname = $row['lname'];
$email = $row['email'];
$subadmin_roll = $row['subadmin_roll'];
$sex = $row['sex'];
$date = $row['date'];
$status = $row['status'];




?>



<tr>
<td> <?php echo $subadmin_id; ?> </td>
<td> <?php echo $fname; ?> </td>
<td> <?php echo $lname; ?> </td>
<td> <?php echo $email; ?> </td>
<td> <?php echo $subadmin_roll; ?> </td>
<td> <?php echo $sex; ?> </td>
<td> <?php echo $date; ?> </td>
<td> <?php echo $status; ?> </td>
<?php
echo  " <td><a  class='btn btn-danger btn-sm' style='border-radius: 5%;'  href='subadmin_management.php?delete={$subadmin_id}'><i class='fa fa-trash-alt fa-2x'></i> </i></a></td>";
echo "<td><a  class='btn btn-secondary btn-sm' style='border-radius: 5%;'  href='subadmin_management.php?suspend={$subadmin_id}'><i class='fas fa-thumbs-down fa-2x'></i></a></td>";
?>
  
</tr>

<?php   } ?>


<?php delete_subadmin(); ?>

<?php suspend_subadmin(); ?>



</tbody>


</table>



                  

                
                    </div>
                    </div>
                </div>

                </div>




                <?php 
               

               $statement = "SELECT * FROM subadmin";
               $total_result = $conn->query($statement);
               $total_subadmin = mysqli_num_rows($total_result);

               $total_subadmin_page = ceil($total_subadmin / $num_per_page);

 
  
  
               ?>

                   <div class="col-lg-12">

                   <div class="container">


           <nav aria-label="...">
   <ul class="pagination my-3">


       <?php    


       if($page > 1){

           echo "<li class='page-item'><a class='page-link ' href='viewfaq.php?page=".($page -1)."'>   
           <span aria-hidden='true'>&laquo;</span>

           Previous
           </a></li>";


       }




       for ($i=1; $i < $total_subadmin_page ; $i++) { 


      if($i == $page){


        echo "<li class='page-item  bg-light'><a class='page-link light active_link text-primary' href='viewfaq.php?page=".$i."'>$i</a></li>";


      }else{


        echo "<li class='page-item  bg-light'><a class='page-link light text-primary' href='viewfaq.php?page=".$i."'>$i</a></li>";


      }


       }




   if($i > $page){

       echo "<li class='page-item'><a class='page-link ' href='viewfaq.php?page=".($page + 1)."'>   
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
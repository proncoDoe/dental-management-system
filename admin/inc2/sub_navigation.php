 <?php session_start(); ?>
 <?php include 'functions_logout.php' ?>

<nav class="navbar fixed-top navbar-expand-md navbar-dark bg-primary mb-3">
        <div class="flex-row d-flex">
            <a class="navbar-brand" href="subdashboard.php" title="Admin"> <i class="fa fa-tachometer-alt text-muted"></i><?php echo $_SESSION['fname']. "  ". $_SESSION['lname'] ?></small></a>
        </div>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsingNavbar">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="navbar-collapse collapse" id="collapsingNavbar">
            <ul class="navbar-nav">
                <li class="nav-item active">
                    <a class="nav-link" href="../index.php">Home <span class="sr-only">Home</span></a>
                </li>


                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Admin Manager
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a href="" class="dropdown-item" data-toggle="modal"   data-target="#subadmin" class="nav-link" href="subdashboard.php">Admin Managemenet</a>
                
    
                    </div>
                </li>

            </ul>

            <ul class="nav navbar-right top-nav ml-auto pr-5">
                
                <li class="nav-item">
                    <a class="nav-link text-white" href="#myAlert" data-toggle="collapse">Alert</a>
                </li>


                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user py-2 text-white"></i><small class="text-dark"><?php echo $_SESSION['fname']. "  ". $_SESSION['lname'] ?></small><b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li>
                            <a href="profile_sub.php"><i class="fa fa-fw fa-user"></i> Profile</a>
                        </li>
 
                 
                
                        <?php 

                        if(user_login()){


                                ?>

          
                        <li><hr class="dashed" style="border-top: 1px dotted #bbb; "></li>
                        <li>
                            <a href="../inc/logout_sub.php"><i class="fa fa-fw fa-power-off"></i> Log Out</a>
                        </li>
                    </ul>
                </li>

            </ul>

            
        

        </div>
    </nav>


    <?php

    }else{


        header('location:../index.php');

    }

    ?>



    <div class="col-lg-12 col-sm-offset-10">


<div class="modal fade" id="subadmin"  tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-lg modal-notify text-white modal-primary" role="document">
        <!--Content-->
        <div class="modal-content">
        <!--Header-->
        <div class="modal-header text-center bg-primary">
            <h4 class="modal-title  w-100 font-weight-bold py-2">Admin Managemenet</h4>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true" class="white-text">&times;</span>
            </button>
        </div>

        <!--Body-->
        <div class="modal-body">
      
        <table class="table table-responsive table-hover">

        <thead>

        <th>Admin ID</th>
        <th>First Name</th>
        <th>Last Name</th>
        <th>Email</th>
        <th>password</th>
        <th>Roll</th>
        <th>Sex</th>
        <th>Date</th>
        </thead>

        <tbody>




        <?php 
     
     
    $query = "SELECT * FROM subadmin WHERE subadmin_id";

    $admin_result = mysqli_query($conn, $query);

while($row = mysqli_fetch_assoc($admin_result)){

$subadmin_id = $row['subadmin_id'];
$fname = $row['fname'];
$lname = $row['lname'];
$email = $row['email'];
$password = $row['password'];
$subadmin_roll = $row['subadmin_roll'];
$sex = $row['sex'];
$date = $row['date'];


     
     
    ?>
 
    <tr>
        <td> <?php echo $subadmin_id; ?> </td>
        <td> <?php echo $fname; ?> </td>
        <td> <?php echo $lname; ?> </td>
        <td> <?php echo $email; ?> </td>
        <td> <?php echo $password; ?> </td>
        <td> <?php echo $subadmin_roll; ?> </td>
        <td> <?php echo $sex; ?> </td>
        <td> <?php echo $date; ?> </td>
     
    </tr>

    <?php   } ?>

        </tbody>


        </table>

        </div>

   
        </div>
 
    </div>
    </div>



</div>



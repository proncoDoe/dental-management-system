
<?php include "admin_header.php" ?>
<?php session_start(); ?>
<?php ob_start(); ?>


</head>

<body>


    <header>



    </header>


    <main>



        <nav class="navbar fixed-top navbar-expand-md navbar-dark bg-primary mb-3">
            <div class="flex-row d-flex">

                <a class="navbar-brand" href="../dashboard.php" title="Admin"> <i class="fa fa-tachometer-alt"></i> Supper
                    Admin</a>
            </div>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsingNavbar">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="navbar-collapse collapse" id="collapsingNavbar">
                <ul class="navbar-nav">
                    <li class="nav-item active">
                        <a class="nav-link" href="../index.php">Home <span class="sr-only">Home</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="subdashboard.php">Sub admin</a>
                    </li>
                </ul>
                <ul class="navbar-nav ml-auto float-sm-right">



                    <li class="nav-item">
                        <a class="nav-link" href="../vendor/index.php">Vendor Dashboard</a>
                    </li>


                    <li class="nav-item">
                        <a class="nav-link" href="#myAlert" data-toggle="collapse"><i class="far fa-bell fa-1x"></i></a>
                    </li>


                    <li class="nav-item">
                        <a class="nav-link" href="../user/index.php">User Dashboard</a>
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





                <div class="col-lg-5 mx-4">


                    <div class="card bg-light my-5">

                        <div class="card-header text-center text-light bg-primary">

                    
                            <h2 class="card-title">View faq status's</h2>

                        </div>



                        <div class="card-body form-body">

                            <div class="col-lg-12 text-light">


                                <table class="table table-responsive-lg table-condensed table-hover">


                                    <thead>
                                        <th>Faq Status View</th>
                                      
                                        <th>Edit </th>
                                  
                                    </thead>


                                    <tbody>

                                    <?php
                                              
                                              
                                              if(isset($_GET['page'])){
                                                                                                        
                                                                                                        
                                                  $page = $_GET['page'];
                                              
                                              
                                              }else{
                                              
                                                  $page = 1;
                                              }
                                              
                                              $num_per_page = 2;
                                              $start_from = ($page -1) * 2;
                          
                                                $query = "SELECT * FROM faq_on_off LIMIT $start_from,$num_per_page";
          
                                                $faq_on_of = mysqli_query($conn,$query);
                                                    $row = mysqli_fetch_assoc($faq_on_of);
                                                    $faq_edit = $row['faq_name'];
                                                    $faq_on_of_id = $row['faq_on_off_id'];
          
                                                  
                                                    echo '<tr>';
          
                                                   echo "<td>$faq_edit</td>";
                                                  
                                                    echo  "<td><a  class='btn btn-amber btn-sm edit' style='border-radius: 5%;'  href='faq_status.php?edit={$faq_edit}'> <i class='fas fa-user-edit fa-2x'></i></a></td>";
                                                   
          
                                                    echo '</tr>';
                                                    
                                                    ?>
                                                    
                                                    <?php
                                                 
                                                 if (isset($_GET['edit'])) {
                                                 
                                                 $faq_edit = $_GET['edit'];
                                                 
                                                 include 'faq_status.php';
                                                 }
                                                 
                                                 
                                                 ?>
                                                 

                                    </tbody>


                                </table>


                            </div>
                        </div>
                    </div>

                </div>



                <div class="col-lg-12">

                    <div class="container">


                      


                    </div>



                </div>













            </div>

        </div>




    </main>




    <?php include "admin_footer.php" ?>
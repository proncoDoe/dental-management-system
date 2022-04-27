<?php include '../inc/functions.php' ?>

<header>


    <nav class="navbar fixed-top navbar-expand-md navbar-dark bg-primary mb-3">
        <div class="flex-row d-flex">
            <button type="button" class="navbar-toggler mr-2 " data-toggle="offcanvas"
                title="Toggle responsive left sidebar">

            </button>
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
                    <a class="nav-link" href="index.php">MyInfo</a>
                </li>


                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Patient's
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="viewappointment.php">View Appointment</a>
                        <a class="dropdown-item" href="cancelbooking.php">Cancel Appointment</a>
                        <a class="dropdown-item" href="viewpatient.php">View Patient</a>

                    </div>
                </li>



                <li class="nav-item">
                    <a class="nav-link" href="appointmentbook.php">Book appointment</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="feedback.php">Feed back</a>
                </li>

            </ul>
            <ul class="navbar-nav ml-auto">



                <li class="nav-item">
                    <a class="nav-link" href="#myAlert" data-toggle="collapse"><i class="far fa-bell fa-1x"></i></a>
                </li>

                </li>
            </ul>
        </div>
    </nav>



    <br><br><br>

    <button class="bg-light" style="border: none; text-decoration:none; float:right">


        <ul class="nav navbar-right top-nav text-light">

            <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i><small>
                        <?php echo $_SESSION['fname']. " ". $_SESSION['lname'] ?> </small><b class="caret"></b></a>
                <ul class="dropdown-menu">
                    <li>
                        <a href="profile.php"><i class="fa fa-fw fa-user"></i> Profile</a>
                    </li>


                    <?php 

                if(user_login()){


                        ?>


                    <li>
                        <hr class="dashed" style="border-top: 1px dotted #bbb;">
                    </li>
                    <li>
                        <a href="../inc/logout_user.php"><i class="fa fa-fw fa-power-off"></i> Log Out</a>
                    </li>
                </ul>
            </li>
        </ul>



    </button>
    <!--/col-->

    <div class="alert alert-warning fade collapse" role="alert" id="myAlert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">×</span>
            <span class="sr-only">Close</span>
        </button>
        <strong>Welcome to naija Dental!</strong> It's mind changeing..
    </div>

</header>

<?php

}else{


    header('location:../index.php');

}
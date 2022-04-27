<?php session_start(); ?>
<?php ob_start(); ?>

<nav class="navbar fixed-top navbar-expand-md navbar-dark bg-primary mb-3">
        <div class="flex-row d-flex">
          
            <a class="navbar-brand" href="dashboard.php" title="Admin"> <i class="fa fa-tachometer-alt"></i> Supper Admin</a>
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
                    <a class="nav-link" href="../user/index.php">User Dashboard</a>
                </li>

            </ul>
        </div>
    </nav>


    
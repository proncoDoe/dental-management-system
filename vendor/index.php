
    <?php include 'inc/vendor_header.php' ?>

     <?php require 'inc/vendor_navigation.php' ?>


<div id="page-wrapper">

<div class="container-fluid">


<!-- Page Heading -->


<?php include "inc/welcome_home_page.php" ?>

<main>

        <div class="col-lg-12 col-sm-lg">

        <div class="row">


        <div class="col-lg-5 my-5">


        <div class="card" style="border: 2px solid #008ed6; height:500px;">

        <div class="card-body">


        <?php
    
 
    echo '<h2>';


    echo '<span>Doctor ID</span> ' .":". $_SESSION['vendor_id2'];
    echo '<br><br>';
    echo '<span>Type</span> ' .":". $_SESSION['type'];
echo '<br><br>';
    echo '<span>Contact</span> ' .":". $_SESSION['contact'];
    echo '<br><br>';
    echo '<span>Email</span> ' .":". $_SESSION['email'];
    echo '<br><br>';
    echo '<span>Location</span> ' .":". $_SESSION['location'];
    echo '<a href="profile.php" class="btn btn-outline-primary my-5  bounceIn" style=" position:absolute; top:24rem; margin-left:69%"> Update Profile  </a>';




    '</h2>';


    ?>




        </div>


        </div>

        </div>






</div>
</main>
 
</div>


            </div>

</div>
<?php include 'inc/vendor_footer.php' ?>



<header>

<?php include "inc/admin_header.php" ?>

</header>


<main>


<?php include "inc/admin_navigation.php" ?>

    <div class="container-fluid" id="main">
    
            <!--/col-->

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


        <?php
        
        
        if(isset($_GET['source'])){


            $source = $_GET['source'];

        }else{


            $source = '';

        }
        
        
        switch($source){

            case 'add_patient':
                include "inc/addpatient.php";

            break;

            case 'add_vendor':
                include "inc/addvendor.php";

            break;



            case 'add_faq':
                include "inc/addfaq.php";

            break;


          


        }



      



    
    
        
        
        
        ?>









</main>

<?php include "inc/admin_footer.php" ?>

<?php include 'inc/header.php' ?>

<header id="home">


<?php include 'inc/navigation.php' ?>



    <!-- Header: Showcase -->
    <div id="faq-header">
    <div class="faq-status">

    <div class="container">

    <div class="row justify-content-center my-4">

     <div class="card bounceIn  my-4">

     <div class="card-header">

     <div class="col-3 text-white">

        <i class="fa fa-users fa-4x "></i>

     </div>

     </div>

     <?php 


     
     if($query = "SELECT * FROM faq_on_off "){

        $faq_on_of = mysqli_query($conn,$query);
        $row = mysqli_fetch_assoc($faq_on_of);
        $faq_name = $row['faq_name'];
        echo  "<h1 class='font-weight-bolder text-center text-white'>$faq_name</h1>";

     }

   
     
     ?>
     
     </div>


    </div>







    </div>

</div>
 
</header>

<main>


<div class="main-grid">

    <div class="box-2">

        
 <div class="main-accordion">
    <div class="containa">

        <div class="inner-accordion">

            <div class="accordion-item">

                <a href="#" class="detail-link">How to track my orders ?</a>


                <div class="content">

                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reiciendis quibusdam reprehenderit 
                        velit sunt saepe illo placeat ipsam explicabo enim ipsum?</p>


                </div>

            </div>

            <div class="accordion-item">

                <a href="#" class="detail-link">How to get notify on orders ?</a>


                <div class="content">

                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reiciendis quibusdam reprehenderit 
                        velit sunt saepe illo placeat ipsam explicabo enim ipsum?</p>


                </div>

            </div>


            <div class="accordion-item">

                <a href="#" class="detail-link">Time off delivering ?</a>


                <div class="content">

                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reiciendis quibusdam reprehenderit 
                        velit sunt saepe illo placeat ipsam explicabo enim ipsum?</p>


                </div>

            </div>


            <div class="accordion-item">

                <a href="#" class="detail-link">Can item be cancel ?</a>


                <div class="content">

                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reiciendis quibusdam reprehenderit 
                        velit sunt saepe illo placeat ipsam explicabo enim ipsum?</p>


                </div>

            </div>


            <div class="accordion-item">

                <a href="#" class="detail-link">How to get promo code ?</a>


                <div class="content">

                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reiciendis quibusdam reprehenderit 
                        velit sunt saepe illo placeat ipsam explicabo enim ipsum?</p>


                </div>

            </div>



        </div>


    </div>

</div>



</div>


    <div class="box-2">

      <img src="images/5074624.svg" class="animated bounce" alt="">

    </div>


</div>

</main>



<?php include 'inc/footer.php' ?>




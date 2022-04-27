<?php include 'inc/header.php' ?>


<header id="home">

    <?php include 'inc/navigation.php' ?>

    <!-- Header: Showcase -->
    <div class="slider">
        <div class="slide current">
            <div class="content">
                <h1>Keep your Family More Healthy</h1>
                <p>
                    Lorem ipsum, dolor sit amet consectetur adipisicing elit. Sit hic
                    maxime, voluptatibus labore doloremque vero!
                </p>


            </div>
        </div>
        <div class="slide">
            <div class="content">
                <h1>Keep your Family More Healthy</h1>
                <p>
                    Lorem ipsum, dolor sit amet consectetur adipisicing elit. Sit hic
                    maxime, voluptatibus labore doloremque vero!
                </p>
            </div>
        </div>
        <div class="slide">
            <div class="content">
                <h1>Keep your Family More Healthy</h1>
                <p>
                    Lorem ipsum, dolor sit amet consectetur adipisicing elit. Sit hic
                    maxime, voluptatibus labore doloremque vero!
                </p>
            </div>
        </div>

    </div>



    <div class="grid">


        <div class="image-container">

        </div>

        <div class="image-container">

            <div class="image-inner">

                <img src="images/6531.svg" alt="">


            </div>



        </div>



    </div>




</header>





<div class="icon-bar">
    <a href="#"> <i class="fab fa-whatsapp fa-2x whatsapp" target="_blank" aria-hidden="true"></i></a>
    <a href="#"> <i class="fab fa-facebook-f fa-2x facebook" target="_blank" aria-hidden="true"></i></a>
    <a href="#"> <i class="fab fa-twitter fa-2x twitter" target="_blank" aria-hidden="true"></i></a>
    <a href="#"> <i class="fab fa-instagram fa-2x instagram" target="_blank" aria-hidden="true"></i></a>
    <!-- <li><a href="#"> <i class="fab fa-pinterest fa-2x"   target="_blank" aria-hidden="true"></i></a></li> -->
    <a href="#"> <i class="fab fa-linkedin-in fa-2x linkedin" target="_blank" aria-hidden="true"></i></a>
    <!-- <li><a href="#"> <i class="fab fa-telegram fa-2x"   target="_blank" aria-hidden="true"></i></a></li> -->
</div>



<div class="main-video">

    <video src="videos/Dentist_6.mp4" id="video" class="screen" loop poster="img/kisspng-mouthwash-tooth.png"></video>

    <div class="controls">

        <button class="btn" id="play">

            <i class="fas fa-play fa-2x" data-icon="P"></i>
        </button>

        <button class="btn" id="stop">

            <i class="fas fa-stop fa-2x" data-icon="S"></i>
        </button>

        <input type="range" id="progress" class="progress" min="0" max="100" step="0.1" value="0">
        <span class="timestamp" id="timestamp">00:00</span>

    </div>



</div>



<section id="what" class="">

    <div class="container">

        <h2 class="text-center m-heading">FEATURES</h2>

        <div class="items">

            <div class="item" data-aos="fade-left">

                <i class="fas fa-tooth fa-4x"></i>

                <div>

                    <h3> HEALTHCARE AT YOUR DEMAND !</h3>

                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquid, nisi.</p>

                </div>

            </div>


            <div class="item" data-aos="fade-up">

                <i class="fas fa-teeth fa-4x"></i>

                <div>

                    <h3>INVEST IN HEALTH!</h3>

                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquid, nisi.</p>

                </div>

            </div>



            <div class="item" data-aos="fade-right">

                <i class="fab fa-discourse fa-4x"></i>

                <div>

                    <h3>HEALTH DISCOURSE</h3>

                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquid, nisi.</p>

                </div>

            </div>


        </div>

    </div>


</section>


<section id="background-phone">

    <div class="row text-white">

        <div class="col-lg-12  ">


            <div class="float-right  my-5 mr-5" style="padding-top: 10%;">

                <div class="text-right"><span class=" ml-5 ">I'm a new patient</span></div>

                <p class="lead textItalic">Find a doctor and book an appointment online for free!</p>
            </div>




        </div>





    </div>
</section>



<a href="#" id="scroll-top"><i class="fas fa-angle-double-up  animated bounce  scrollup text-white"></i></a>

<?php include 'inc/footer.php' ?>


<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
<script>
AOS.init({

    offset: 400,

    duration: 1000
});
</script>
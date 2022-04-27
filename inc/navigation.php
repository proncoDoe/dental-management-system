<section id="navbar-section">
    <nav class="navbar navbar-expand-lg flex-top">
        <a class="navbar-brand" href="">
            <img src="">


        </a>
        <a class=" mt-mr-4 bounceIn" href="index.php"><img src="myid/dental_logo.png" style="width: 70px;" alt=""></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">

            <i class="fa fa-bars"></i>


        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">

            <ul class="navbar-nav li ml-auto pt-4">


                <li class="nav-item <?php echo (basename($_SERVER['PHP_SELF']) == "index.php") ? "active": ""; ?> ">
                    <a class="nav-link" href="index.php">Home</a>
                </li>
                <li class="nav-item <?php echo (basename($_SERVER['PHP_SELF']) == "about.php") ? "active": ""; ?>">
                    <a class="nav-link" href="about.php">About Us</a>
                </li>
                <li class="nav-item <?php echo (basename($_SERVER['PHP_SELF']) == "terms.php") ? "active": ""; ?>">
                    <a class="nav-link" href="terms.php">Terms</a>
                </li>

                <li class="nav-item <?php echo (basename($_SERVER['PHP_SELF']) == "career.php") ? "active": ""; ?>">
                    <a class="nav-link" href="career.php">career</a>
                </li>

                <li class="nav-item <?php echo (basename($_SERVER['PHP_SELF']) == "contact.php") ? "active": ""; ?>">
                    <a class="nav-link" href="contact.php">Contact</a>
                </li>

                <li class="nav-item <?php echo (basename($_SERVER['PHP_SELF']) == "faq.php") ? "active": ""; ?>">
                    <a class="nav-link" href="faq.php">FAQ</a>
                </li>



            </ul>




            </ul>




            <ul class="navbar-nav li ml-auto pt-4 pr-5">

                <a href="general_signup.php" data-toggle="tooltip" data-placement="left" title="Sign Up"
                    class="red-tooltip"><i class="fas fa-user-md fa-2x  p-3"></i><span
                        class="text-muted ml-auto">Signup</span></a>

                <a href="general_login.php"> <i class="fas fa-sign-in-alt fa-2x p-3"></i><span
                        class="text-muted ml-auto">Sign In</span></a>

                <!-- <a href="general_login.php" data-toggle="tooltip" data-placement="bottom" title="Sign In"> <i class="fas fa-sign-in-alt fa-2x p-3"></i><span class="text-muted ml-auto">Sign In</span></a> -->


                <!-- <a href="" data-toggle="modal"    data-target="#modalLoginAvatar"><i class="fas fa-sign-in-alt fa-2x p-3"></i><span class="text-muted">Sign In </span></a> -->




            </ul>



        </div>
    </nav>

</section>
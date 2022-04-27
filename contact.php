
<?php include 'inc/header.php' ?>

<header id="contact-main">

<?php include 'inc/navigation.php' ?>



 <style>






 </style>


 


        <?php
    
    $error = "";
    $response = "";

        if(isset($_POST['Submit'])){


             $name = $_POST['name'];
             $email = $_POST['email'];
            $contact = $_POST['contact'];

             if(strlen($name) < 3){

                $error = "Name is the short";

             }else if(!filter_var($email, FILTER_VALIDATE_EMAIL)){


                $error = "Invalad Emaill";


             }else if(strlen($contact) < 8){


                $error = "Your contact is to Valid";

             }else{


                $statement = "INSERT INTO contact(`name`,`email`,`contact`) ";
                $statement .= "VALUE (?,?,?)";
                $stmt = $conn->prepare($statement);
                $stmt->bind_param("sss", $name, $email, $contact);
                $stmt->execute();


                if($stmt){


                      $time_out = 5;

                    $response = 'Successfully';
                    // header("location: contact.php");
                 
                     header('refresh: $time_out; index.php',true, 303);

                      echo '<meta http-equiv="refresh" content="5;URL=\'http://localhost/workplace/contact.php\'">';

                }




             }$conn->close();







        }



    
        ?>

         
      
<div id="maps" class="py-4" data-aos="fade-left">

<div class="map" class="py-4">



</div>



</div>


<section class="section-contact">
      <div class="contact">
        <div class="contact-form">
          <form>
            <div class="row">
              <div class="input50">
                <input type="text" placeholder="First Name" />
              </div>
              <div class="input50">
                <input type="text" placeholder="Last Name" />
              </div>
            </div>
            <div class="row">
              <div class="input50">
                <input type="text" placeholder="Email" />
              </div>
              <div class="input50">
                <input type="text" placeholder="Subject" />
              </div>
            </div>
            <div class="row">
              <div class="input100">
                <textarea placeholder="Message"></textarea>
              </div>
            </div>
            <div class="row">
              <div class="input100">
                <input type="submit" value="Message" />
              </div>
            </div>
          </form>
        </div>

        <div class="contact-info">
          <div class="info-box">
            <img src="images/address.png" class="contact-icon" alt="" />
            <div class="details">
              <h4>Address</h4>
              <p>No 1 Dawnson Road Benin</p>
            </div>
          </div>
          <div class="info-box">
            <img src="images/email.png" class="contact-icon" alt="" />
            <div class="details">
              <h4>Email</h4>
              <a href="mailto:@proncotech.com">Lorizzy@gmail.com</a>
            </div>
          </div>
          <div class="info-box">
            <img src="images/call.png" class="contact-icon" alt="" />
            <div class="details">
              <h4>Call</h4>
              <a href="">+234 7065015510</a>
            </div>
          </div>
        </div>
      </div>
    </section>





<!-- main: Showcase -->


  
<?php include 'inc/footer.php'  ?>


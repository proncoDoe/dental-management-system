<?php require 'inc/user_header.php' ?>
<?php require 'inc/functions.php' ?>


<header>

<?php require 'inc/user_navigation.php' ?>

</header>


<main>

<?php include 'appointment_header.php' ?>

</div>
      
</div>


        

           
<div class="container-fluid " style="margin-top: 120px;">



</div>

<div class="container">

<div class="row">



<div class="col-md-12">

   

    <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">



<div class="row">

<div class="col-sm-4 mt-2">



<label for="type">Select Type</label>
<div class="form-group">
              
        <select name="type">

        <option value="" selected disabled>Selet Category</option>
        <option value="doctor">Cardiology</option>
        <option value="clinic">dentist</option>
        <option value="medical">bones</option>
        <option value="hospital">sugery</option>


        </select>

        </div>


    </div>


<div class="col-sm-4">

<div class="form-group">
    <button type="submit" name="Search" class="btn btn-success">Search</button>
</div>


</div>



<div class="col-sm-4 col-lg col-md-4">

<div class="card  bg-primary text-light textFont" style="width: 30rem; height: -27rem">
<div class="card-body">
<h5 class="card-title">You'll love being on NaijaDentist</h5>


    <ul class="textLi textItalic">


    <li> Acess NaijaDentist network of more than 5 million patients</li><br>
<li >Let patient schedule appointment with you instantly,24-7 from NaijaDentist and from your practice website.</li>



    </ul>

</div>
</div>



</div>




<div class="col-sm-4 my-3">

<?php  

if (isset($_POST['Search'])) {

$vendor_id2 = $_POST['vendor_id2'];
$type = mysqli_real_escape_string($conn,$_POST['type']);
$fname = $_POST['fname'];
$lname = $_POST['lname'];
$contact = $_POST['contact'];

$query2="SELECT `type`, `fname`,`lname`,`contact` FROM vendor WHERE `vendor_id2`='%$vendor_id2%'";
$result2=mysqli_query($conn,$query2);
?>

    <div class="input-group"> 

        <label>Vendor ID</label>
    

    <select class="input-group" name="vendor_id2">
    
<?php   while ($row2=mysqli_fetch_assoc($result2)) {
    ?>


    <option> <?php echo $row2['vendor_id2'] ?> </option>



<?php 

} ?>
</select>
</div>


</div>





<div class="col-sm-4 my-3">

<label for="booking_id">Appointment ID</label>
<div class="form-input">
        <input type="text"  name="doctor_id">

    </div>


</div>



<div class="col-sm-4 my-3">

<label for="fname">Vendor First</label>
<div class="form-input">
        <input type="text" <?php  echo $fname  ?> name="fname" >

    </div>


</div>




<div class="col-sm-4 my-3">

<label for="lname">Vendor Last</label>
<div class="form-input">
        <input type="text" <?php echo $lname; ?> name="lname" >

    </div>


</div>





<div class="col-sm-4 my-3">

<label for="contact">Doc Contact</label>
<div class="form-input">
        <input type="text" <?php echo $contact; ?> name="contact" >

    </div>


</div>




<div class="col-sm-4 my-3">

<label for="fname">patient First</label>
<div class="form-input">
        <input type="text" name="fname" >

    </div>

</div>




<div class="col-sm-4 my-3">

<label for="lname">patient Last</label>
<div class="form-input">
        <input type="text" name="lname" >

    </div>


</div>

<div class="col-sm-4 my-3">

<label for="email">email</label>
<div class="form-input">
        <input type="text" name="email" >

    </div>


</div>



<div class="col-sm-4 my-3">

<label class="contact">patient Contact</label>
<div class="form-input">
        <input type="text" name="contact" >

    </div>


</div>



<div class="col-sm-4 my-3">

<label for="date">Date</label>
<div class="form-input">
        <input type="date" name="date">

    </div>

</div>


<div class="col-sm-4 my-3">

<label for="time">Time</label>
<div class="form-input">
        <input type="time" name="time">
    </div>

</div>



<div class="col-sm-4 my-3">

<div class="form-input">
            <button type="submit" name="Book" class="btn btn-primary btn-lg">BOOK</button>
            </div>

</div>



    </div>

</form>

<?php  
    }


        ?>




</div>


</div>

</div>
















</main>




<?php require 'inc/user_footer.php' ?>
<?php require 'inc/user_header.php' ?>
<?php require 'functions.php' ?>


<header>

<?php require 'inc/user_navigation.php' ?>

</header>

<?php include 'inc/welcomepage.php'; ?>

<main>

<?php include 'appointment_header.php' ?>

</div>
      
</div>


        

           
<div class="container-fluid " style="margin-top: 120px;">



</div>






<div class="container">


 <?php 
               
 $error = '';
 $response = '';
    
 if(isset($_POST['Book'])){
  
 $vendor_id2 = @$_POST['vendor_id2'];
 $patient_id = @$_POST['patient_id'];
 $fname = $_POST['fname'];
 $lname = $_POST['lname'];
 $contact = $_POST['contact'];
 $email = @$_POST['email'];
 $booking_status = @$_POST['booking_status'];
 $bloodgroup = @$_POST['bloodgroup'];
 $date = date("F' d Y");
 $time =  date("h:i:sa");


 
 if(strlen($patient_id) < 3){
 
     $error = "Invalid ID ";
 
 } else  if (strlen($fname) < 3) {
 
     $error = 'First name is to short';
 } else if (strlen($lname) < 3) {
 
     $error = 'last name is to short';
 }else if(strlen($contact) < 9){
 
     $error = "Invalide contact";
 
 }else if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
 
     $error = 'Please enter a valid email';
 
 }else if(!$bloodgroup === @$bloodtype){

    $error = 'blood group not entered';
 
 
 }else if(!$booking_status === 'free' || !$booking_status === 'video' || !$booking_status === 'audio'){
 
 
 
 }else{
 


    foreach($bloodgroup as $bloodtype){

          
        $bloodgroup =  $bloodtype;


        $statement = "INSERT INTO appointment( `doctor_id`, `patient_id`,`fname`,`lname`, `contact`, `email`,`bloodgroup`, `booking_status`, `date`, `time`) ";
        $statement .= "VALUE (?,?,?,?,?,?,?,?,?,?)";
        $stmt = $conn->prepare($statement);
        $stmt->bind_param("ssssssssss", $vendor_id2, $patient_id, $fname, $lname, $contact, $email, $bloodtype, $booking_status,$date, $time);
        $stmt->execute();

    }

 
    
 
     if($stmt){
 
 
         $response = 'Successfully booked';
 
     }
 
 }$conn->close();
   
                
                
 }
                
                              
 ?>

<div class="row">



<div class="col-md-12">

<?php  echo $error?>
    <?php  echo $response?>
   

    <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">

<div class="row">



<div class="col-sm-4 my-3">

<label for="fname">patient First</label>
<div class="form-input">
        <input type="text" name="fname" required>

    </div>

</div>




<div class="col-sm-4 my-3">

<label for="lname">patient Last</label>
<div class="form-input">
        <input type="text" name="lname" required>

    </div>


</div>

<div class="col-sm-4 my-3">
<label>Vendor ID</label>
<select name="vendor_id2" id="" required>

<?php vendor_id_show(); ?>


</select>


</div>


<div class="col-sm-4 my-3">

<label class="contact">patient Contact</label>
<div class="form-input">
        <input type="text" name="contact" required>

    </div>

    </div>


<div class="col-sm-4 my-3">

<label for="email">email</label>
<div class="form-input">
<input type="text" name="email" required>

    </div>


</div>

<div class="col-sm-4 my-3">

<label class="doctor_id">Vendor ID</label>
<div class="form-input">
        <input type="text" name="doctor_id" placeholder="Enter Vendor ID Here" required>

    </div>

    </div>



<div class="col-sm-4 my-3">

<label for="patient_id">Patient ID</label>
<div class="form-input">
        <input type="text" name="patient_id" >

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

<select name="booking_status" id="" required>

<option value="" selected disabled>Booking Type</option>
<option value="free">book with article free</option>
<option value="video">book with Video</option>
<option value="audio">Book with Audio</option>

</select>

</div>


<div class="col-sm-4 my-3">

<select name="bloodgroup[]" id="" required>

<option value="" selected disabled>Blood Type</option>
<option value="O+">O+</option>
<option value="AB+">AB+</option>
<option value="B+">B+</option>
<option value="O">O</option>
<option value="A">A-</option>
<option value="A+">A+</option>

</select>

</div>




<div class="col-sm-4 my-3">

<div class="form-input">
            <button type="submit" name="Book"  value="Book" class="btn btn-primary btn-lg">BOOK</button>
            </div>

</div>



    </div>

</form>




</div>


</div>

</div>



</main>




<?php require 'inc/user_footer.php' ?>
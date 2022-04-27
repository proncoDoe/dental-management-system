<?php include 'inc/vendor_header.php' ?>
<?php require 'inc/function_id_exist.php' ?>
<main>


<?php require 'inc/vendor_navigation.php' ?>

<!--/col-->

<?php include 'inc/welcomepage.php'; ?>

<?php 

if(isset($_SESSION['email'])){

  $email = $_SESSION['email'];



  $query = "SELECT * FROM vendor WHERE `email` = '{$email}' ";

  $select_query_profile = mysqli_query($conn, $query);

  while($row = mysqli_fetch_array($select_query_profile)){

    $vendor_id2 = $row['vendor_id2'];
    $type = $row['type'];
    $fname = $row['fname'];
    $lname = $row['lname'];
    $password = $row['password'];
    $contact = $row['contact'];
    $email = $row['email'];
    $location = $row['location'];
    $vendor_roll = $row['vendor_roll'];

    $vendor_id2 = mysqli_escape_string($conn, $vendor_id2);
    $fname = mysqli_escape_string($conn, $fname);
    $lname = mysqli_escape_string($conn, $lname);
    $contact = mysqli_escape_string($conn, $contact);
    $email = mysqli_escape_string($conn, $email);
    $location = mysqli_escape_string($conn, $location);
    $password = mysqli_escape_string($conn, $password);
    $vendor_roll = mysqli_escape_string($conn, $vendor_roll);


  }


}

?>


<?php
    
    $error = "";
    $reponse = "";
            
if(isset($_POST['Update'])){

    $vendor_id2 = $_POST['vendor_id2'];
    $type = $_POST['type'];
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $contact = $_POST['contact'];
    $email = $_POST['email'];
    $location = $_POST['location'];
    $password = $_POST['password'];
    $vendor_roll = $_POST['vendor_roll'];
    $updated_at = date("Y-m-d H:i:sa");


    $vendor_id2 = mysqli_escape_string($conn, $vendor_id2);
    $type = mysqli_escape_string($conn, $type);
    $fname = mysqli_escape_string($conn, $fname);
    $lname = mysqli_escape_string($conn, $lname);
    $contact = mysqli_escape_string($conn, $contact);
    $email = mysqli_escape_string($conn, $email);
    $location = mysqli_escape_string($conn, $location);
    $password = mysqli_escape_string($conn, $password);
    $vendor_roll = mysqli_escape_string($conn, $vendor_roll);

    if(strlen($vendor_id2) < 3){

        $error = "Invalid ID";
    }else if(vendor_exist($vendor_id2, $conn)){

        $error = "Someone have used the ID";

    }else if (strlen($fname) < 3) {

        $error = 'First name is to short';
    }else if (strlen($lname) < 3) {

        $error = 'last name is to short';
    }else if(strlen($contact) < 9){

        $error = "Invalide contact";

    }else if(!filter_var($email, FILTER_VALIDATE_EMAIL)){

        $error = 'Please enter a valid email';

    }else{


        if(mysqli_query ($conn, "UPDATE vendor SET   vendor_id2 = $vendor_id2, `type` = '$type', fname = '$fname', lname ='$lname', contact ='$contact', email ='$email', `password` = '$password', location ='$location', `updated_at` = '$updated_at', vendor_roll = '$vendor_roll' WHERE email = '$email'") or die(mysqli_error($conn))){

  
            $response = "successfull updated patient Profile" . "    " . "<a href='index.php'>view Information</a>";


        }


    }


    
    
    
    // query_confirm($update_result);
    
    
    }
            
?>








<div class="container-fluid">

<div class="col-lg-6 col-sm-12 mx-4">



<div class="text-center  bg-danger error" style=" <?php if($error !=""){ ?> display:block; <?php } ?>" > <?php echo $error; ?></div>
<div class="text-center  bg-success error" style=" <?php if($response !=""){ ?> display:block; <?php } ?>" > <?php echo $response; ?></div>

        <div class="card bg-light my-5">

    <p><a href="index.php" class="btn btn-light btn-lg my-3 text-bold" roll="button">Back</a></p>
    <div class="card-header text-center text-light bg-primary">

    <h2 class="card-title">Update Profile</h2>

    </div>

 
        <div class="card-body form-body">

        <div class="col-md-12 text-dark">

        <form action=""  method="POST" enctype="multipart/form-data">

        <div class="form-group">
             
        <label for="vendor_id" class="text-muted">Vendor ID</label>
        <input  type="text"  value="<?php echo $vendor_id2; ?>"  name="vendor_id2" class="form-control">
             
        </div>
             


        <div class="form-group">
        <label>Type</label>

            <select name="type"  class="form-control" required>
            
                    <option value="" selected disabled >Select Type</option>
                    <option value="Cardiology">Cardiology</option>
                    <option value="dentist">dentist</option>
                    <option value="bones">bones</option>
                    <option value="sugery">sugery</option>

                </select>

        </div>

        <div class="form-group">

        <label for="Fname" class="text-muted">Fname</label>
            <input type="text"  value="<?php echo $fname   ?>" name="fname" class="form-control">

            </div>


            
             
            <div class="form-group">
             
            <label for="lname" class="text-muted">Lname</label>
            <input type="text" value="<?php echo $lname  ?>"  name="lname" class="form-control">
             
            </div>


            <div class="form-group">
             
            <label for="contact" class="text-muted">Contact</label>
            <input type="text" value="<?php echo $contact; ?>"  name="contact" class="form-control">
                  
            </div>


             



        <div class="form-group">

            <label for="email" class="text-muted">Email</label>
            <input type="text" name="email" value="<?php echo $email; ?>"  class="form-control">

            </div>


            <div class="input-group">

            <select name="vendor_roll" id="" class="form-control" required>

            <option value="" selected disabled>Select Vendor</option>
            <option value="vendor">Vendor</option>


            </select>

            </div>


            <div class="form-group fontpassword textItalic">

                <label>Select your Location</label>
                    <select name="location" id="multiselector" class="form-control" required>
            
                                <option value="" selected disabled>Select Location</option>
                                <option value="irrua">Irrua</option>
                                <option value="esan west">Esan West</option>
                                <option value="akoko edo">Akokoedo</option>
                                <option value="ikpoba okha">Ikpoba Okha</option>
                                <option value="owan west">Owan west</option>
                                <option value="oredo">Oredo</option>
                                
                </select>
            
            </div>




            <div class="form-group">
             

   
             <label class="text-muted">Password</label>
           
      
             <input type="password" name="password" value="<?php echo $password; ?>" class="form-control">

            
                 </div>


                <div class="form-group">

                    <button type="submit" name="Update"  class="btn btn-primary sub"  value="Update Patient">Update Profile</button>

                </div>


        </form>



       



   

        </div>
        </div>
    </div>

    </div>



</div>

</div>

</main>
<?php include 'inc/vendor_footer.php' ?>

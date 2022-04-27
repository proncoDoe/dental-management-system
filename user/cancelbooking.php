<?php require 'inc/user_header.php' ?>
<?php require 'functions.php' ?>


<header>

<?php require 'inc/user_navigation.php' ?>

</header>

<?php include 'inc/welcomepage.php'; ?>

<main>



   <div class="row">

   <div class="col-lg-12 ">

 <div class="card">
 
 <div class="card-header">

 <h1 class="text-capitalize" style="font-weight: bold;"> <span class="text-primary">Cancel </span> <span class="text-muted">Appointment</span></h1>

 </div>


    <form action="" method="POST">

    <div class="input-control">

    <label for="patient_id">Enter Your ID</label>
        <input type="text" name="patient_id" class="form-control" required>

    </div>

       <div class="input-control">


       <button type="submit" class="btn btn-outline-primary"  name="Search" value="Search">Search</button>

       </div>

    </form>


    <?php 
    

    if(isset($_POST['Search'])){

        $patient_IDD = $_POST['patient_id'];
      

        $query = "SELECT * FROM appointment WHERE patient_id = $patient_IDD";
        $patient_IDD_result = mysqli_query($conn, $query);

    
    
    ?>

<table class="table table-responsive-sm table-responsive-md table-responsive-xl">
      
      
          <thead>
          <th>Vendor ID</th>
          <th>Fname</th>
          <th>Lname</th>
          <th>Contact</th>
          <th>Gmail</th>
          <th>patient ID</th>
          <th>Blood Group</th>
          <th>Booking Status</th>
          <th>Date</th>
          <th>time</th>
          <th>Cancel Booking</th>
      
</thead>


    <tbody>

    <?php 
        if(@mysqli_num_rows($patient_IDD_result) > 0){

              while($row = mysqli_fetch_array($patient_IDD_result)){

                ?>
                <tr>

                <td> <?php  echo $row['doctor_id']; ?></td>
                <td> <?php  echo $row['fname']; ?></td>
                <td> <?php  echo $row['lname']; ?></td>
                <td> <?php  echo $row['contact']; ?></td>
                <td> <?php  echo $row['email']; ?></td>
                <td> <?php  echo $row['patient_id']; ?></td>
                <td> <?php  echo @$row['bloodgroup']; ?></td>
                <td> <?php  echo @$row['booking_status']; ?></td>
                <td> <?php  echo $row['date']; ?></td>
                <td> <?php  echo $row['time']; ?></td>
                <?php echo "<td><a  class='btn btn-amber btn-sm cancelapp' style='border-radius: 5%;'  href='cancelbooking.php?cancel={$patient_IDD}'> <i class='far fa-window-close fa-2x'></i></a></td>"; ?>

                </tr>
         
                <?php


}

}else{

    ?>

        <tr>
            <td colspan="6">No Record Found</td>
        </tr>
    <?php

    
}


   
   ?>


   <?php
   
   cancel_appointment();
   
   ?>

    </tbody>
 
    <?php 

}

    ?>
</table>


<?php 
   
   if(isset($_GET['show'])){ ?>

   <div id="flash-data" data-flashdata="<?php  $_GET['show'];?>"></div>

   <?php } ?>

 
 </div>


   </div>



   </div>


</main>


<?php require 'inc/user_footer.php' ?>
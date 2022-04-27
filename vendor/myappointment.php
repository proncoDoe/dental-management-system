<?php include 'inc/vendor_header.php' ?>

<main>
    <!--/col-->
    <?php require 'inc/vendor_navigation.php' ?>


    <?php include 'inc/welcomepage.php'; ?>

    <div class="container-fluid">



        <div class="row">

            <div class="col-lg-12 ">



                <div class="card">

                    <div class="card-header">

                        <h1 class="text-capitalize" style="font-weight: bold;"> <span class="text-primary">My </span>
                            <span class="text-muted">Appointment</span></h1>

                    </div>


                    <form action="" method="POST">

                        <div class="input-control">

                            <label for="patient_id">Enter Your ID</label>
                            <input type="text" name="doctor_id" class="form-control" required>

                        </div>

                        <div class="input-control">


                            <button type="submit" class="btn btn-outline-primary" name="Search"
                                value="Search">Search</button>

                        </div>

                    </form>


                    <?php 


    if(isset($_POST['Search'])){

        $doctor_id = $_POST['doctor_id'];


        $query = "SELECT * FROM appointment WHERE doctor_id = $doctor_id";
        $doctor_id_IDD_result = mysqli_query($conn, $query);



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

                        </thead>


                        <tbody>

                            <?php 
        if(@mysqli_num_rows($doctor_id_IDD_result) > 0){

            while($row = mysqli_fetch_array($doctor_id_IDD_result)){

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


                            </tr>

                            <?php


}

}else{

    ?>

                            <tr>
                                <td colspan="6">You have not been booked <span>
                                        <h4 class="d d-inline-block text-muted">
                                            <div class="d-inline-block text-primary">Dr</div>
                                    </span> <span><?php echo $_SESSION['fname']. " ". $_SESSION['lname'] ?></h4></span>
                                </td>
                            </tr>
                            <?php


}



?>

                        </tbody>

                        <?php 

}

    ?>
                    </table>



                </div>







            </div>



        </div>



    </div>


</main>




<?php include 'inc/vendor_footer.php' ?>
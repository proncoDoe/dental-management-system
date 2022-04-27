<?php require 'inc/user_header.php' ?>
<?php require 'functions.php' ?>

<header>

<?php require 'inc/user_navigation.php' ?>

</header>

<?php include 'inc/welcomepage.php'; ?>

<main>



            <!--/col-->

          

 

    <div class="container-fluid">
        <div class="col-lg-12 col-sm-lg">

           

        <div class="col-lg-10 col-sm-12 mx-4">


<div class="card bg-light my-5">

<div class="card-header text-center text-light bg-primary">

<h2 class="card-title">Book Appointment's</h2>

</div>



<div class="card-body form-body">

<div class="col-lg-12 col-sm-12  text-light">


<table class="table table-responsive-sm table-responsive-md table-responsive-xl">


<thead>
<th>Vendor ID</th>
<th>Type</th>
<th>Fname</th>
<th>Lname</th>
<th>Contact</th>
<th>Gmail</th>
<th>Location</th>
<th>Sex</th>
<th>Date</th>
<th>BookAppointment</th>

</thead>


<tbody>


<?php

if(isset($_GET['page'])){
                  
                  
    $page = $_GET['page'];
  
  
}else{
  
    $page = 1;
}
  
$num_per_page = 3;
$start_from = ($page -1) * 3;





$query = "SELECT * FROM vendor LIMIT $start_from, $num_per_page";

$patient_result = mysqli_query($conn, $query);

while($row = mysqli_fetch_assoc($patient_result)){

$vendor_id2 = $row['vendor_id2'];
$type = $row['type'];
$fname = $row['fname'];
$lname = $row['lname'];
$contact = $row['contact'];
$email = $row['email'];
$loc = $row['location'];
$sex = $row['sex'];
$created_at = $row['created_at'];



echo '<tr>';

echo '<td>'.$vendor_id2.'</td>';
echo '<td>'.$type.'</td>';
echo '<td>'.$fname.'</td>';
echo '<td>'.$lname.'</td>';
echo '<td>'.$contact.'</td>';
echo '<td>'.$email.'</td>';
echo '<td>'.$loc.'</td>';
echo '<td>'.$sex.'</td>';
echo '<td>'.$created_at.'</td>';
echo  "<td><a  class='btn btn-primary btn-sm book' style='border-radius: 5%;' href='bookappointment.php?id={$vendor_id2}'> <i class='far fa-calendar-check fa-2x'></i></a></td>";

echo '</tr>';


}



?>




<?php

if(isset($_GET['id'])){


    $id = ['id'];


}

?>



<?php

if(isset($_GET['cancel'])){


    $cancel = ['cancel'];


}

?>


<?php  cancel_appointment(); ?>


</tbody>


</table>


</div>
</div>
</div>

</div>




     
                </div>

              
                <?php 
                            $statement = "SELECT * FROM vendor";
                            $total_result = $conn->query($statement);
                            $total_faq = mysqli_num_rows($total_result);

                            $total_faq_page = ceil($total_faq / $num_per_page);

 
  
  
                            ?>

                                <div class="col-lg-12">

                                <div class="container">


                        <nav aria-label="...">
                <ul class="pagination my-3">


                    <?php    


                    if($page > 1){

                        echo "<li class='page-item bg-primary'><a class='page-link ' href='appointmentbook.php?page=".($page -1)."'>   
                        <span aria-hidden='true'>&laquo;</span>

                        Previous
                        </a></li>";


                    }




                    for ($i=1; $i < $total_faq_page ; $i++) { 


                    echo "<li class='page-item  bg-light'><a class='page-link light text-primary' href='appointmentbook.php?page=".$i."'>$i</a></li>";


                    }




                if($i > $page){

                    echo "<li class='page-item bg-primary'><a class='page-link ' href='appointmentbook.php?page=".($page + 1)."'>   
                    <span aria-hidden='true'>&laquo;</span>
                    Next
                    </a>
                    </li>";


                    }


                    ?>


                </ul>
                </nav>

       
                                </div>
       


                                </div>










            </div>

           




</main>




<?php require 'inc/user_footer.php' ?>
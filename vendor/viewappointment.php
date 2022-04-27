<?php include 'inc/vendor_header.php' ?>

<header>

<?php require 'inc/vendor_navigation.php' ?>

</header>


<main>
            <!--/col-->
            <?php require 'inc/welcomepage.php'; ?>

    <div class="container-fluid">
        <div class="col-lg-12 col-sm-lg">

           

        <div class="col-lg-10 col-sm-12 mx-4">


<div class="card bg-light my-5">

<div class="card-header text-center text-light bg-primary">

<h2 class="card-title">View Appointment's</h2>

</div>



<div class="card-body form-body">

<div class="col-lg-12 col-sm-12  text-light">


<table class="table table-responsive-sm table-responsive-md table-responsive-xl">


<thead>
<th>Patient Fname</th>
<th>Patient Lname</th>
<th>Contact</th>
<th>Blood Group</th>
<th>Booking Status</th>
<th>date</th>
<th>time</th>




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





$query = "SELECT * FROM appointment LIMIT $start_from, $num_per_page";

$patient_result = mysqli_query($conn, $query);

while($row = mysqli_fetch_assoc($patient_result)){

$fname = $row['fname'];
$lname = $row['lname'];
$contact = $row['contact'];
$bloodgroup = $row['bloodgroup'];
$booking_status = $row['booking_status'];
$date = $row['date'];
$time = $row['time'];




echo '<tr>';

echo '<td>'.$fname.'</td>';
echo '<td>'.$lname.'</td>';
echo '<td>'.$contact.'</td>';
echo  '<td>'.$bloodgroup.'</td>';
echo  '<td>'.$booking_status.'</td>';
echo '<td>'.$date.'</td>';
echo '<td>'.$time.'</td>';

echo '</tr>';


}

?>


<?php

if(isset($_GET['id'])){


    $id = ['id'];


}




?>



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

                        echo "<li class='page-item bg-primary'><a class='page-link ' href='viewappointment.php?page=".($page -1)."'>   
                        <span aria-hidden='true'>&laquo;</span>

                        Previous
                        </a></li>";


                    }




                    for ($i=1; $i < $total_faq_page ; $i++) { 


                    echo "<li class='page-item  bg-light'><a class='page-link light text-primary' href='viewappointment.php?page=".$i."'>$i</a></li>";


                    }


                if($i > $page){

                    echo "<li class='page-item bg-primary'><a class='page-link ' href='viewappointment.php?page=".($page + 1)."'>   
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




<?php include 'inc/vendor_footer.php' ?>
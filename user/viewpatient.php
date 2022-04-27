

<?php require 'inc/user_header.php' ?>

        

    </head>
    <body style="background-color: #f5f5f5;">


<header>

<?php require 'inc/user_navigation.php' ?>

</header>

<?php include 'inc/welcomepage.php'; ?>
<main>

            <!--/col-->

    <div class="container-fluid">
        <div class="col-l2-lg">


        <div class="col-lg-10 mx-4">


<div class="card bg-light my-5">

<div class="card-header text-center text-light bg-primary">

<h2 class="card-title">View Patient's</h2>

</div>



<div class="card-body form-body">

<div class="col-lg-12 text-light">


<table class="table table-responsive-sm table-responsive-md table-responsive-xl">


<thead>
<th>Fname</th>
<th>Lname</th>
<th>Address</th>
<th>Sex</th>
<th>Date</th>
</thead>


<tbody>


<?php


if(isset($_GET['page'])){
                                  
                                  
$page = $_GET['page'];
  
  
}else{
  
$page = 1;
}
  
$num_per_page = 2;
$start_from = ($page -1) * 2;







$query = "SELECT * FROM users LIMIT $start_from,$num_per_page";

$patient_result = mysqli_query($conn, $query);

while($row = mysqli_fetch_assoc($patient_result)){

$patient_id = $row['patient_id'];
$fname = $row['fname'];
$lname = $row['lname'];
$contact = $row['contact'];
$email = $row['email'];
$address = $row['address'];
$sex = $row['sex'];
$date = $row['date'];


echo '<tr>';

echo '<td>'.$fname.'</td>';
echo '<td>'.$lname.'</td>';
echo '<td>'.$address.'</td>';
echo '<td>'.$sex.'</td>';
echo '<td>'.$date.'</td>';

echo '</tr>';

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
               

                            $statement = "SELECT * FROM users";
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

                        echo "<li class='page-item'><a class='page-link ' href='viewpatient.php?page=".($page -1)."'>   
                        <span aria-hidden='true'>&laquo;</span>

                        Previous
                        </a></li>";


                    }




                    for ($i=1; $i < $total_faq_page ; $i++) { 


                    echo "<li class='page-item  bg-light'><a class='page-link light text-primary' href='viewpatient.php?page=".$i."'>$i</a></li>";


                    }




                if($i > $page){

                    echo "<li class='page-item'><a class='page-link ' href='viewpatient.php?page=".($page + 1)."'>   
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






    </body>
</html>
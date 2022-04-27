

    <?php include 'inc/header.php' ?>

</head>
<body>


<header id="home">


<?php include 'inc/navigation.php' ?>





    <!-- Header: Showcase -->
    <div id="career-main">
      
    <div class="container">

    <div class="row">



    <div class="col-lg-2 col-sm-3 career-content career-vertical ">

    <a href=""><i class="fas fa-hand-holding-medical fa-6x"></i></a>
 
    
    
    </div>


   



    <div class="col-lg-10  col-sm-8     career-content my-5 text-sm-right" >

   <h4 class="search-find-text text-muted font-weight-bold">Careers</h4>

    <p class="text-justify">To achieve our vision, we are always looking out for talented, learnable individuals who are ambitious, 
        who love challenges and who have a passion to excel! Apart from experienced candidates we also 
        invite fresher’s. If you feel that you are a competent.</p>

</div>


     <div class="col-lg-12 career-content text-lg-center text-sm-center">


     <h5>If you think you match NaijaDentist requirements, get in touch with.<a href="form/signup_vendor.php" class="btn btn-outline-cyan bounceIn">Get started</a> </h5>
     </div>

    </div>
</div>

</div>
 
</header>


<section id="career-doc">
  

<div  class="career-bg">
 


<div class="container">


<table class="table  table-responsive">

<thead>

<th>SL.No</th>
<th>Job Title</th>
<th>Vacancies</th>
<th>Location</th>
<th>Education</th>
<th>Experience</th>
<th>Salary</th>
<th>Canditate</th>
<th>Status</th>
</thead>




        <?php
        

        $query = "SELECT * FROM creer_table WHERE career_id";

        $mysql_result = mysqli_query($conn,$query);

        while($num = mysqli_fetch_assoc($mysql_result)){

           $career_id = $num['career_id'];
           $marketing = $num['marketing'];
           $vacancy = $num['vacancy'];
           $location = $num['location'];
           $education = $num['education'];
           $experiency = $num['experiency'];
           $salary = $num['salary'];
           $canditate = $num['canditate'];
           
           



        
        
        
        
        
        
        ?>

<tbody>

<tr>

<td><?php echo $career_id ?></td>
<td><?php echo $marketing ?></td>

<td><?php echo $vacancy ?></td>

<td><?php echo $location ?></td>

<td><?php echo $education ?></td>

<td><?php echo $experiency ?></td>

<td><?php echo $salary ?></td>

<td><?php echo $canditate ?></td>
<td>
   <ul class="fa-ul" ><li><i class="fa-li fa fa-spinner fa-spin text-primary fa-lg"></i>Apply</li></ul>

</td>


</tr>

<?php } ?>



</tbody>


</table>









</div>






    </div>
</div>
</div>
</section>


<?php include 'inc/footer.php' ?>
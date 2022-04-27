<?php require 'inc/user_header.php' ?>
<?php require 'inc/functions.php' ?>



<header>

<?php require 'inc/user_navigation.php' ?>

</header>
<?php include 'inc/welcomepage.php'; ?>

<main>



            <!--/col-->


    <div class="container-fluid">
        <div class="col-lg-12 col-sm-lg">

        <?php
    
        $error = "";
        $response = "";

            if(isset($_POST['Submit'])){


                $name = $_POST['name'];
                $feedback = $_POST['feedback'];
                 $date_time =  Date("F' m y h:i:sa");


                if(strlen($name) < 3){

                    header("location:feedback2.php");

                }else if(strlen($feedback) < 10){


                    header("location:feedback2.php");


                }else{


                    $statement = "INSERT INTO feedback(`name`,`feedback`, `date_time`) ";
                    $statement .= "VALUE (?,?,?)";
                    $stmt = $conn->prepare($statement);
                    $stmt->bind_param("sss", $name, $feedback, $date_time);
                    $stmt->execute();


                    if($stmt){


                        header("location:feedback2.php");

                    }




                }$conn->close();





            }

    
            ?>


           <div class="row">
               
          
        <div class="col-lg-6 col-sm-4 mx-4">

        <div class="col-lg-12">

<div class="text-center bg-danger error" style="<?php if($error != ""){ ?> display:block; <?php } ?>"><?php echo $error; ?></div>
<div class="text-center  bg-success error" style=" <?php if($response !=""){ ?> display:block; <?php } ?>" > <?php echo $response; ?></div>

</div>      
<div class="card bg-light my-5">


<div class="card-header text-center text-light bg-primary">

<h2 class="card-title">Leave Feedback</h2>

</div>



<div class="card-body form-body">

<div class="col-lg-12 col-sm-12  text-dark">

   <form action="" method="POST" enctype="multipart/form-data">

   <div class="col-lg-12">

<div class="form-group">

<label for="name" class="text-muted">Name</label>

<input type="text" name="name" class="form-control" required autocomplete="off">


</div>

</div>

<div class="col-lg-12">

<div class="form-group">

<label for="feedback" class="text-muted">Feedback</label>

<textarea name="feedback" id="body" class="form-control" rows="7" cols="20" required></textarea>


</div>

</div>


<div class="col-lg-12">

<div class="form-group">


<button type="submit" name="Submit" class="btn btn-link text-primary sub" value="Send">Send

    <i class="fa fa-paper-plane"></i>

    </button>


</div>

</div>

<div class="clearfix"></div>

</div>




</form>



</div>
</div>


</div>



<?php  feedback();  ?>





</div>





</div>




     
                </div>

              
                             




           




</main>




<?php require 'inc/user_footer.php' ?>
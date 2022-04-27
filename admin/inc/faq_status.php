<?php include "admin_header.php" ?>

<main>



<!--/col-->



<div class="row">

<div class="container-fluid">

<div class="col-lg-6 col-sm-12 mx-4">



    <div class="card bg-light  my-5">

<p><a href="faq_status_view.php" class="btn btn-light btn-lg my-3 text-bold" roll="button">Back</a></p>
<div class="card-header text-center text-light bg-primary">

<h2 class="card-title">Change Status</h2>

</div>

 
    <div class="card-body form-body">

    <div class="col-md-12 text-light">

    <form action=""  method="POST" enctype="multipart/form-data">

<?php
   


if (isset($_GET['edit'])) {

    @$faq_edit = $_GET['edit'];


}




@$query = "SELECT * FROM faq_on_off WHERE  faq_name  = '$faq_edit' ";

$faq_status = mysqli_query($conn,$query);
   

while($row = mysqli_fetch_assoc($faq_status)){

$faq_name = $row['faq_name'];




?>


  
<div class="form-group">
                         
                <label for="faq_content" class="text-muted">FaQ Message Head</label>
                                       
                <input value="<?php if (isset($faq_name)){echo $faq_name;
                } ?>" class="form-control" type="text" name="faq_name">
    </div>


<?php } ?>


<?php
            
            
if(isset($_POST['Update'])){


    $faq_name = $_POST['faq_name'];

if(mysqli_query($conn, "UPDATE faq_on_off  SET  faq_name = '$faq_name' ") or die(mysqli_error($conn))){

    header("location: faq_status_view.php");

    exit();


}
    
} 
          
?>

             
                                <div class="form-group">
             
                                    <button type="submit" name="Update"  class="btn btn-primary sub"  value="Change Status">Change Status</button>
             
                                </div>
     


        </form>



   

        </div>
        </div>
    </div>

    </div>



</div>

</div>




<?php include "admin_footer.php" ?>


</main>



<?php include "sub_header.php" ?>

<main>



<!--/col-->



<div class="row">

<div class="container-fluid">


<?php
   


if (isset($_GET['edit'])) {

    $the_get_faq = $_GET['edit'];


}



$query = "SELECT * FROM faq WHERE faq_id = '$the_get_faq' ";

$faq_result = mysqli_query($conn,$query);

query_confirm($faq_result);
   

while($row = mysqli_fetch_assoc($faq_result)){

  
$faq_id = $row['faq_id'];
$faq_content = $row['faq_content'];
$faq_text = $row['faq_text'];

  

}



?>





<?php
            
            
if(isset($_POST['Update'])){



    $faq_id = $_POST['faq_id'];
    $faq_content = $_POST['faq_content'];
    $faq_text = $_POST['faq_text'];



if(mysqli_query ($conn, "UPDATE faq SET faq_id = '$faq_id', faq_content = '$faq_content', faq_text ='$faq_text' WHERE faq_id = '$the_get_faq' ") or die(mysqli_error($conn))){

    header('location: viewfaq_sub.php');
    exit();

  


}
    
    
    
    // query_confirm($update_result);
    
    
    }
            
?>



<div class="col-lg-6 col-sm-12 mx-4">



        <div class="card bg-light  my-5">

    <p><a href="viewfaq_sub.php" class="btn btn-light btn-lg my-3 text-bold" roll="button">Back</a></p>
    <div class="card-header text-center text-light bg-primary">

    <h2 class="card-title">Update faQ</h2>

    </div>

 
        <div class="card-body form-body">

        <div class="col-md-12 text-dark">

        <form action=""  method="POST" enctype="multipart/form-data">

        
        <div class="form-group">
                         
                         <label for="faq_content" class="text-muted">FaQ Message Head</label>
                                       
                                  
                         <textarea name="faq_content" id="" class="form-control"  autocapitalize="on"><?php echo $faq_content; ?></textarea>
             
                                        
                             </div>
             
             
             
                         <div class="form-group">
                            
                         <label for="faq_text" class="text-muted">FaQ Message Body</label>
                                       
                                  
                         <textarea name="faq_text"  id="body" class="form-control"><?php echo $faq_text; ?></textarea>
             
                                        
                             </div>
             
                                 <div class="form-group">
             
                                     <button type="submit" name="Update"  class="btn btn-primary sub"  value="Add Doctor">Update FaQ</button>
             
                                 </div>

        </form>



       



   

        </div>
        </div>
    </div>

    </div>



</div>

</div>




<?php include "sub_footer.php" ?>


</main>



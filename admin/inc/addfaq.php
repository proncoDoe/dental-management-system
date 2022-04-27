
<main>



<nav class="navbar fixed-top navbar-expand-md navbar-dark bg-primary mb-3">
        <div class="flex-row d-flex">
          
            <a class="navbar-brand" href="../index.php" title="Admin"> <i class="fa fa-tachometer-alt"></i> Supper Admin</a>
        </div>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsingNavbar">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="navbar-collapse collapse" id="collapsingNavbar">
            <ul class="navbar-nav">
                <li class="nav-item active">
                    <a class="nav-link" href="../index.php">Home <span class="sr-only">Home</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="subdashboard.php">Sub admin</a>
                </li>
            </ul>
            <ul class="navbar-nav ml-auto float-sm-right">



            <li class="nav-item">
                    <a class="nav-link" href="../vendor/index.php">Vendor Dashboard</a>
                </li>


                <li class="nav-item">
                    <a class="nav-link" href="#myAlert" data-toggle="collapse"><i class="far fa-bell fa-1x"></i></a>
                </li>


                <li class="nav-item">
                    <a class="nav-link" href="../user/index.php">User Dashboard</a>
                </li>
            </ul>
        </div>
    </nav>

            <!--/col-->

          

    <div class="row">

    <div class="container-fluid">
       


            <?php
               
            $error = '';
            $response = '';
   
            if(isset($_POST['Submit'])){

            
            $faq_content = @$_POST['faq_content'];

            $faq_text = @$_POST['faq_text'];
           
            $date = date('F, d Y');
   


            if(strlen($faq_content) < 10){

                $error = " Content is too short";

            }else if(strlen($faq_text) < 15){


                $error = "paragram text is too short";


            }else{





                $statement = "INSERT INTO faq(`faq_content`, `faq_text`,`date`) ";
                $statement .= "VALUE (?,?,?)";
                $stmt = $conn->prepare($statement);
                $stmt->bind_param("sss", $faq_content, $faq_text, $date);
                $stmt->execute();






                if($stmt){


                    $response = 'Successfully add question';

                }

            }$conn->close();
  
               
               
        }
               
        
           
               
               
            ?>





     
                <div class="col-lg-6 col-sm-12 mx-4">

                    <div class="card bg-light my-5">
                        
                    <div class="text-center bg-danger error" style="<?php if($error != ""){ ?> display:block; <?php } ?>"><?php echo $error; ?></div>
                <div class="text-center  bg-success error" style=" <?php if($response !=""){ ?> display:block; <?php } ?>" > <?php echo $response; ?></div>


                <div class="card-header text-center text-light bg-primary">

                <h2 class="card-title">Add Message</h2>

                </div>

             

                    <div class="card-body form-body">

                    <div class="col-md-12 text-light">

                    <form action=""  method="POST" enctype="multipart/form-data">

                    <div class="form-group">
                         
                    <label for="faq_content"  class="text-muted">FaQ Message Head</label>
                          
                     
                    <textarea name="faq_content" class="form-control" required autocomplete="off" autocapitalize="on"></textarea>

                           
                        </div>



                    <div class="form-group">
               
                    <label for="faq_text" class="text-muted">FaQ Message Body</label>
                          
                     
                    <textarea name="faq_text" id="body" class="form-control" required></textarea>

                           
                        </div>

                            <div class="form-group">

                                <button type="submit" name="Submit"  class="btn btn-primary sub"  value="Add Doctor">Add FaQ</button>

                            </div>


                    </form>



                   



               

                    </div>
                    </div>
                </div>

                </div>



            </div>

            </div>

        </div>

        </div>
    </div>





</main>

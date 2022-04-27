<?php require 'function_id_exist.php' ?>

<main>



<nav class="navbar fixed-top navbar-expand-md navbar-dark bg-primary mb-3">
        <div class="flex-row d-flex">
          
            <a class="navbar-brand" href="dashboard.php" title="Admin"> <i class="fa fa-tachometer-alt"></i> Supper Admin</a>
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
   
                    
               
                $vendor_id2 = @$_POST['vendor_id2'];
                $type = $_POST['type'];
                $fname = $_POST['fname'];
                $lname = $_POST['lname'];
                $contact = $_POST['contact'];
                $email = @$_POST['email'];
                $vendor_roll = $_POST['vendor_roll'];
                $password = @$_POST['password'];
                $comfirm_password = $_POST['comfirm_password'];
                $location = @$_POST['location'];
                $sex = @$_POST['sex'];
                $created_at = date('F, d Y');
   

                if(strlen($vendor_id2) < 3){

                    $error = "Invalid ID";


                }else if(vendor_exist($vendor_id2, $conn)){


                    $error = 'Someone have ready used the ID ';

                }else if(!$type === 'Cardiology' || !$type === 'dentist' || !$type === 'bones' || !$type === 'sugery'){



                } else if (strlen($fname) < 3) {

                    $error = 'First name is to short';
                } else if (strlen($lname) < 3) {

                    $error = 'last name is to short';
                }else if(strlen($contact) < 9){

                    $error = "Invalide contact";

                }else if(!filter_var($email, FILTER_VALIDATE_EMAIL)){

                    $error = 'Please enter a valid email';

                }else if(strlen($password) < 8){


                    $error = 'Password must be greater than or equal to 8 character';


                }else if($password !== $comfirm_password){


                    $error = 'password doe\'s not match';

                }else if(!$location === @$loc){

                    $error = 'Location not entered';


                }else if(!$sex == "M" || !$sex == "F"){


                    $error  = 'You must check the botton';


                }else{

                    foreach($location as $loc){

          
                    $location =  $loc;

                    $statement = "INSERT INTO vendor( `vendor_id2`,`type`, `fname`,`lname`,`contact`, `email`, `vendor_roll`,  `password`, `location`, `sex`,`created_at`) ";
                    $statement .= "VALUE (?,?,?,?,?,?,?,?,?,?,?)";
                    $stmt = $conn->prepare($statement);
                    $stmt->bind_param("sssssssssss", $vendor_id2, $type, $fname, $lname, $contact, $email, $vendor_roll, $password, $loc, $sex, $created_at);
                    $stmt->execute();

                    }

                    if($stmt){


                        $response = 'Successfully Add Vendor';

                    }

                }$conn->close();
  
               
               
               
               
                }
               
                ?>


                
                <div class="col-lg-6 col-sm-12 mx-4">

                <div class="text-center bg-danger error" style="<?php if($error != ""){ ?> display:block; <?php } ?>"><?php echo $error; ?></div>
                <div class="text-center  bg-success error" style=" <?php if($response !=""){ ?> display:block; <?php } ?>" > <?php echo $response; ?></div>
                    <div class="card bg-light my-5">


                <div class="card-header text-center text-light bg-primary">

             
                <h2 class="card-title">Add Vendor</h2>

                </div>

                    <div class="card-body form-body">

                    <div class="col-lg-12 col-sm-12 text-light">

                    <form action=""  method="POST">


                    <div class="form-group">
                         
                    <label for="vendor_id2" class="text-muted">Vendor ID</label>
                    <input type="text" name="vendor_id2" class="form-control">
                         
                    </div>


                    <div class="form-group fontemail textItalic">

                        <label>Type</label>
           
                    <select name="type"  class="form-control" required>

                    <option value="" selected disabled >Select Type</option>
                    <option value="Cardiology">Cardiology</option>
                    <option value="dentist">dentist</option>
                    <option value="bones">bones</option>
                    <option value="sugery">sugery</option>


                    </select>

                            </div>

                    <div class="form-group">

                    <label for="fname" class="text-muted">Fname</label>
                        <input type="text" name="fname" class="form-control">

                        </div>


                         
                        <div class="form-group">
                         
                         <label for="lname" class="text-muted">Lname</label>
                         <input type="text" name="lname" class="form-control">
                         
                         </div>
                         


                         <div class="form-group">
                         
                         <label for="contact" class="text-muted">Contact</label>
                         <input type="text" name="contact" class="form-control">
                              
                         </div>
     

                    <div class="form-group">

                        <label for="email" class="text-muted"> Email</label>
                        <input type="text" name="email" class="form-control">

                        </div>





    <div class="form-group fontemail textItalic">
                       
                       <label>Select Vendor</label>
                       
                       <select name="vendor_roll"  class="form-control" required>
                       
                       <option value="" selected disabled >Select Vendor</option>
                       <option value="vendor">Vendor Roll</option>
                     
                       

    </select>

    </div>



                    <div class="form-group fontpassword">

                    <label for="password" class="text-muted">Password</label>
                    <input type="password" name="password" class="form-control">

                    </div>


                    <div class="form-group fontpassword textItalic">

                    <label for="comfirm_password" class="text-muted">Re_Enter_password</label>
                    <input type="password" name="comfirm_password" class="form-control">
                    <i class="fas fa-lock fa-lg"></i>

                    </div>






                    <div class="form-group fontpassword textItalic">

                        <label>Select your Location</label>
                        <select name="location[]" id="multiselector" class="form-control" required>
                          
                        <option value="" selected disabled>Select Location</option>
                        <option value="irrua">Irrua</option>
                        <option value="esan west">Esan West</option>
                        <option value="akoko edo">Akokoedo</option>
                        <option value="ikpoba okha">Ikpoba Okha</option>
                        <option value="owan west">Owan west</option>
                        <option value="oredo">Oredo</option>
                          
                        </select>
                          
                    </div>

                    <span class="form-group">

                       <label for="sex" class="textItalic text-muted">Sex</label>
                       
                       <input type="radio" class="mx-2 " name="sex" value="M"><label class="text-muted">Male</label>
                       <input type="radio" class="mx-2" name="sex" value="F"><label class="text-muted">Female</label>
                       
                       
                       </span>


                           
                        

                            <div class="form-group">

                                <button type="submit" name="Submit"  class="btn btn-primary sub"  value="Add Doctor">Add Doctor</button>

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

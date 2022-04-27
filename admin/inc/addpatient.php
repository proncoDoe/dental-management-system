
<?php require 'function_id_exist.php' ?>


<main>



            <!--/col-->

          

    <div class="row">

    <div class="container-fluid">
       

               <?php
               
               $error = '';
               $response = '';
   
               if(isset($_POST['Submit'])){
   
               $patient_id = @$_POST['patient_id'];
               $fname = $_POST['fname'];
               $lname = $_POST['lname'];
               $contact = $_POST['contact'];
               $email = @$_POST['email'];
               $user_roll = $_POST['user_roll'];
               $password = @$_POST['password'];
               $comfirm_password = $_POST['comfirm_password'];
               $address = @$_POST['address'];
               $sex = @$_POST['sex'];
               $date = date('F, d Y');
   


               if(strlen($patient_id) < 3){

                $error = "Invalid ID ";

               }else if(patient_exist($patient_id, $conn)){

                $error = 'Someone have ready used the ID ';

               }else  if (strlen($fname) < 3) {

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

            }else if(strlen($address) < 6){

                $error = " Address to short";

            }else if(!$sex == "M" || !$sex == "F"){


                $error  = 'You must check the botton';


            }else{





                $statement = "INSERT INTO users(`patient_id`,`fname`,`lname`,`contact`, `email`, `user_roll`, `password`, `address`, `sex`,`date`) ";
                $statement .= "VALUE (?,?,?,?,?,?,?,?,?,?)";
                $stmt = $conn->prepare($statement);
                $stmt->bind_param("ssssssssss", $patient_id, $fname, $lname, $contact, $email, $user_roll, $password, $address, $sex, $date);
                $stmt->execute();






                if($stmt){


                    $response = "Successfully registered";

                }

            }$conn->close();
  
               
               
               
               
               }
               
               ?>





     
           <div class="col-lg-6 col-sm-12 mx-4">


                    <div class="text-center bg-danger error" style="<?php if($error != ""){ ?> display:block; <?php } ?>"><?php echo $error; ?></div>
                    <div class="text-center  bg-success error" style=" <?php if($response !=""){ ?> display:block; <?php } ?>" > <?php echo $response; ?></div>


                    <div class="card bg-light my-5">

                <div class="card-header text-center text-light bg-primary">

                <h2 class="card-title">Add Patient</h2>

                </div>

             

                    <div class="card-body form-body">

                    <div class="col-md-12 text-dark">

                    <form action=""  method="POST" enctype="multipart/form-data">


                    <div class="form-group">
                         
                    <label for="patient_id" class="text-muted">patient Id</label>
                    <input type="text" name="patient_id" class="form-control">
                         
                    </div>
                         


                    <div class="form-group">

                    <label for="Fname" class="text-muted">Fname</label>
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

                        <label for="email" class="text-muted">Email</label>
                        <input type="text" name="email" class="form-control">

                        </div>

                <div class="form-group fontemail textItalic">
                       
                       <label class="text-muted">Select Patient</label>
          
                       <select name="user_roll"  class="form-control" required>
          
                       <option value="" selected disabled >Select Vendor</option>
                       <option value="substriber">User Roll</option>
        
                       </select>

                 </div>



                    <div class="form-group fontpassword">

                    <label for="password" class="text-muted">Password</label>
                    <input type="password" name="password" class="form-control">

                    </div>


                    <div class="form-group fontpassword">

                    <label for="comfirm_password" class="text-muted">Comfirm_Password</label>
                    <input type="password" name="comfirm_password" class="form-control">

                    </div>


                    <div class="form-group">
                         

               
                    <label class="text-muted">Address</label>
                          
                     
                     <textarea name="address" id="body" class="form-control"></textarea>


                     <span class="d-inline-block ">

                      <label for="sex" class="textItalic text-muted">Sex</label>
                      
                      <input type="radio" class="mx-2 " name="sex" value="M"><label class="text-muted">Male</label>
                      <input type="radio" class="mx-2" name="sex" value="F"><label class="text-muted">Female</label>
                      
                      
                      </span>


                           
                        </div>

                            <div class="form-group">

                                <button type="submit" name="Submit"  class="btn btn-primary sub"  value="Add Patient">Add Patient</button>

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



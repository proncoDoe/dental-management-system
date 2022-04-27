
<?php


function query_confirm($result){

    global $conn;

    if(!$result){


        die("query failed". mysqli_error($conn));

    }

}


?>




<?php 


 function delete_patient(){

    global $conn;


    if(isset($_GET['delete'])){

        $patient_delete_id = $_GET['delete'];

        $query = "DELETE FROM users  WHERE patient_id = '$patient_delete_id' ";

        $patient_result = mysqli_query($conn,$query);

        header('location: viewpatient.php');


    }


 }

?>





<?php


function delete_vendor(){

global $conn;


if(isset($_GET['delete'])){

    $vendor_delete_id = $_GET['delete'];

    $query = "DELETE FROM vendor  WHERE vendor_id2 = '$vendor_delete_id' ";

    $patient_result = mysqli_query($conn,$query);

    header('location: viewvendor.php');


}


}

?>



<?php


function delete_feedback(){

global $conn;


if(isset($_GET['delete'])){

    $feedback_delete_id = $_GET['delete'];

    $query = "DELETE FROM feedback  WHERE feedback_id = '$feedback_delete_id' ";

    $feedback_result = mysqli_query($conn,$query);

    header('location: feedback.php');


}


}

?>





<?php


function delete_contact(){

global $conn;


if(isset($_GET['delete'])){

    $contact_delete_id = $_GET['delete'];

    $query = "DELETE FROM contact  WHERE contact_id = '$contact_delete_id' ";

    $contact_result = mysqli_query($conn,$query);

    header('location: viewcontact.php');


}


}

?>



<?php


function delete_faq_message(){

global $conn;


if(isset($_GET['delete'])){

    $faq_message_delete_id = $_GET['delete'];

    $query = "DELETE FROM faq_message  WHERE faq_id = '$faq_message_delete_id' ";

    $faq_message_result = mysqli_query($conn,$query);

    header('location: faqmessage.php');


}


}

?>




<?php


function delete_faq(){

global $conn;


if(isset($_GET['delete'])){

    $faq_delete_id = $_GET['delete'];

    $query = "DELETE FROM faq  WHERE faq_id = '$faq_delete_id' ";

    $faq_message_result = mysqli_query($conn,$query);

    header('location: viewfaq.php');


}


}

?>




<?php


function delete_subadmin(){

global $conn;


if(isset($_GET['delete'])){

    $subadmin_delete_id = $_GET['delete'];

    $query = "DELETE FROM subadmin  WHERE subadmin_id = '$subadmin_delete_id' ";

    $subadmin_result = mysqli_query($conn,$query);

    header('location: subadmin_management.php');
    exit();


}


}

?>







<?php


function suspend_subadmin(){

global $conn;


if(isset($_GET['suspend'])){

    $subadmin_suspend_id = $_GET['suspend'];

    $query = "DELETE FROM subadmin  WHERE subadmin_id = '$subadmin_suspend_id' ";

    $subadmin_result = mysqli_query($conn,$query);

    header('location: subadmin_management.php');
    exit();


}


}

?>





<//?php

 //function delete_patient()
// {

//     global $conn;


//     if (isset($_GET['delete'])) {

//         $delete_id = $_GET['delete'];
//         $query = "DELETE  FROM users  WHERE user_id = {$delete_id} ";
//         $delete_user_result = mysqli_query($conn, $query);

//         header('location: viewpatient.php');
//     }
// }




 //?>
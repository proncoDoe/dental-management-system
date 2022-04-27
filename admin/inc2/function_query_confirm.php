
<?php


function query_confirm($result){

    global $conn;

    if(!$result){


        die("query failed". mysqli_error($conn));

    }

}


?>









<?php


function delete_feedback(){

global $conn;


if(isset($_GET['delete'])){

    $feedback_delete_id = $_GET['delete'];

    $query = "DELETE FROM feedback  WHERE feedback_id = '$feedback_delete_id' ";

    $patient_result = mysqli_query($conn,$query);

    header('location: feedback.php');
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

<?php  


function vendor_id_show(){

    global $conn;

    if(isset($_GET['id'])){


        $id = $_GET['id'];

    }



$query = "SELECT * FROM vendor WHERE vendor_id2 = '$id'" ;


    $patient_result = mysqli_query($conn, $query);

    while($row = mysqli_fetch_assoc($patient_result)){

    $vendor_id2 = $row['vendor_id2'];

    echo  "<option value='$vendor_id2'>$vendor_id2</option>";

    }


}



?>





<?php


function cancel_appointment(){

global $conn;


if(isset($_GET['cancel'])){

    $cancel_appoint_id = $_GET['cancel'];

    $query = "DELETE FROM appointment  WHERE patient_id = '$cancel_appoint_id' ";

    $cancel_appoint = mysqli_query($conn,$query);

    header("location: cancelbooking.php?show=1");


}


}


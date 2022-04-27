<?php

function vendor_exist($vendor_id2, $conn)
{

    global $conn;

$statement = "SELECT vendor_id FROM vendor WHERE `vendor_id2` = ?";
$stmt = $conn->prepare($statement);
$stmt->bind_param("s", $vendor_id2);
$stmt->execute();

$result = $stmt->get_result();

if (mysqli_num_rows($result) >= 1) {


    return TRUE;
} else {

    return FALSE;
}
};





function patient_exist($patient_id, $conn)
{

    global $conn;

$statement = "SELECT user_id FROM users WHERE `patient_id` = ?";
$stmt = $conn->prepare($statement);
$stmt->bind_param("s", $patient_id);
$stmt->execute();

$result = $stmt->get_result();

if (mysqli_num_rows($result) >= 1) {


    return TRUE;
} else {

    return FALSE;
}
};













?>
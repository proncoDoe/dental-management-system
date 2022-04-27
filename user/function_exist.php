<?php

function vendor_exist($email, $conn)
{

    global $conn;

$statement = "SELECT vendor_id FROM vendor WHERE `email` = ?";
$stmt = $conn->prepare($statement);
$stmt->bind_param("s", $email);
$stmt->execute();

$result = $stmt->get_result();

if (mysqli_num_rows($result) >= 1) {


    return TRUE;
} else {

    return FALSE;
}
};





function patient_exist($email, $conn)
{

    global $conn;

$statement = "SELECT user_id FROM users WHERE `email` = ?";
$stmt = $conn->prepare($statement);
$stmt->bind_param("s", $email);
$stmt->execute();

$result = $stmt->get_result();

if (mysqli_num_rows($result) >= 1) {


    return TRUE;
} else {

    return FALSE;
}
};













?>
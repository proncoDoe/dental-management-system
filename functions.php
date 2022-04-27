<?php
function email_user_exist($email, $conn)
{


$statement = "SELECT `reg_id` FROM reg_table WHERE `email` = ?";
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
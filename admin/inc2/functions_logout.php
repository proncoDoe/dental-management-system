

<?php 

function user_login()
{

global $conn;

    if(isset($_SESSION['email']) || isset($_COOKIE['email'])){


        return true;

    }else{

        return false;
    }



}





?>
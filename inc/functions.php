

<?php 

function user_login()
{

global $conn;

    if(isset($_SESSION['email'])  || isset($_COOKIE['email'])){


        return true;

    }else{

        return false;
    }



}




// function ifItIsMethod($method = null){


//     if($_SERVER['REQUEST_METHOD'] == strtoupper($method)){


//         return true;

//     }else{

//         return false;
//     }


// }




?>
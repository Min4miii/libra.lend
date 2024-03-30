<?php

$server_name = "localhost";
$username = "root";
$password = "";
$db_name = "test";

// $con = mysqli_connect($server_name, $username, $password, $db_name);
// if(mysqli_connect_errno()){
//     echo "Failed to connect.";
//     exit();
// }
// echo "Connection Successful!";

try{
    $con = new PDO("mysql:host =  $server_name; dbname = $db_name", $username, $password);

    $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connection Successful!";
}catch (PDOException $e){
    echo "error in Connection";$e->getMessage();
}

?>
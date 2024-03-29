<?php 
    $host = "localhost"; //host name
    $user = "root"; //username
    $password = ""; //empty if password is not applied
    $db_name = "register"; //database name
    
    $my_sqli = new mysqli($host, $user, $password, $db_name);

    if($my_sqli->connect_error){
        die("Connection failed: " .$my_sqli->connect_error);
    }
?>
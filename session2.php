<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    //display the value of session
    echo "username: " . $_SESSION["username"] . "<br>";
    echo "password: " . $_SESSION["password"] . "<br>"; 
    echo "name: " . $_SESSION["name"] . "<br>"; 
    print_r($_SESSION);
    ?>
</body>
</html>
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
        //set variables and values for session
        $_SESSION["username"] = "admin";
        $_SESSION["password"] = "123";
        $_SESSION["name"] = "Shane";
        echo "Session is already set!";
    ?>
</body>
</html>
<?php
    session_start();
    include("db.php");

    if($_SERVER['REQUEST_METHOD'] == "POST"){
        $fname = $_POST['fname'];
        $lname = $_POST['lname'];
        $lid = $_POST['lid'];
        $email = $_POST['email'];
        $password = $_POST['password'];

        if(!empty($email) && !empty($password) && !is_numeric($email)){
            $query = "insert into form (fname, lname, lid, email, password) 
            values ('$fname', '$lname','$lid', '$email', '$password')";

            mysqli_query($con, $query);

            echo " <script type='text/javascript'> alert('Succesfully Registered!')</script> ";
        } else {
            echo " <script type='text/javascript'> alert('Enter a valid information')</script> ";
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <script src="https://kit.fontawesome.com/95d194ff11.js" crossorigin="anonymous"></script>
    <script src="script.js"></script>
    <link rel="shortcut icon" href="./images/logo-ico.ico" type="image/x-icon">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css.css">
    <title>Register</title>
</head>
<body>
    <header>
        <div id="logo">
            <img src="./images/logo-nobg.png" alt="logo" width="100px">
            <h1>Libra<span>Lend</span></h1>
        </div>
        <div id="menu">
            <ul>
                <li><a href="#home" class="elements">Home</a></li>
                <li><a href="#abt" class="elements">About</a></li>
                <li><a href="#contact" class="elements">Contacts</a></li>
            </ul>
        </div>
        <div class="nav">
            <div id="r-menu">
                <ul>
                    <li><button type="button" onclick="navback()"><i class="fa-solid fa-greater-than fa-2x"></i></button></li>
                    <li><a href="#home" class="elements">Home</a></li>
                    <li><a href="#abt" class="elements">About</a></li>
                    <li><a href="#contact" class="elements">Contacts</a></li>
                </ul>
            </div>
        </div>
        <button type="button" onclick="nav()"><i class="fa-solid fa-bars fa-2x"></i></button>
    </header>
    <div class="cover" id="id">
        <form action="" method="POST" id="reg">
            <div><h1>Register</h1></div>
                <div class="content">
                    <label for="fname">first name</label>
                    <input type="text" name="fname" autocomplete="off" required>
                    <label for="lname">last name</label>
                    <input type="text" name="lname" autocomplete="off" required>
                    <label for="lid">library ID</label>
                    <input type="text" name="lid" autocomplete="off" required>
                    <label for="email">email</label>
                    <input type="text" name="email" autocomplete="off" required>
                    <label for="password">password</label>
                    <input type="password" name="password" autocomplete="off" required>
                </div>
                <div class="log-in">
                    <input type="submit" value="Register">
                </div>
                <div class="labels">
                    <label for="" class="dont">Already have an account? <a href="index.php">Login</a></label>
                </div>
        </form>
    </div>
</body>
</html>
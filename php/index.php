<?php
session_start();
require("connection.php");
?>
<?php
//redirect to search_record.php if the user
// already logged in to the system

if(isset($_SESSION['session_status']) and $_SESSION['session_status'] == 1){
    ?>
    <script type="text/javascript">
        window.location = "search_record.php";
    </script>
    <?php
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Log in</title>
</head>
<body>
    <form method="POST" action="">
        <h2>Log In</h2>
        Username: <input type="text" name="email">
        Password: <input type="text" name="password">
        <input type="submit" name="login" value="Log in">
        <br>
        <?php
            if(isset($_POST['login'])){
                $email = $_POST['email'];
                $password = $_POST['password'];
                if(!empty($username) and !empty($password)){
                    $q_login = $my_sqli->query("SELECT id, email, password FROM form WHERE email='$email' and password='$password'");
                    if(!$q_login){
                        echo $my_sqli->error;
                        exit();
                    }elseif($q_login->num_rows==0){
                        echo "Invalid Username or Password";
                    }else {
                        $r_login = $q_login->fetch_assoc();
                        //check the entered username and password
                        //is the name from the table users
                        if($r_login['email'] == $email and $r_login['password'] == $password){
                            $_SESSION['id'] = $r_login['id'];
                            $_SESSION['session_status'] = 1;
                            ?>
                            <script type="text/javascript">
                                window.location = "search_record.php";
                            </script>
                            <?php
                        }
                    }
                }
            }
        ?>
    </form>
</body>
</html>
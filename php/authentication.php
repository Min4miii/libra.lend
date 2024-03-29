<?php
     if(isset($_SESSION['session_status']) and isset($_SESSION['user_id'])){
         $user_id = $_SESSION['user_id'];
         $q_user = $my_sqli->query("SELECT ufname, ulname FROM users WHERE user_id='$user_id'");
         $r_user = $q_user->fetch_assoc();
         $ufname = $r_user['ufname'];
         $ulname = $r_user['ulname'];
     } else {
        ?>
         <script type="text/javascript" >
            window.location = "login.php";
        </script> 
        <?php
     }
?>
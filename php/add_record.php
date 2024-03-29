<?php 
    session_start();
    require("connection.php");

    // if(isset($_SESSION['session_status']) and isset($_SESSION['user_id'])){
    //     $user_id = $_SESSION['user_id'];
    //     $q_user = $my_sqli->query("SELECT ufname, ulname FROM users WHERE user_id='$user_id'");
    //     $r_user = $q_user->fetch_assoc();
    //     $ufname = $r_user['ufname'];
    //     $ulname = $r_user['ulname'];
    // } else {
        ?>
        <!-- <script type="text/javascript" >
            window.location = "login.php";
        </script> -->
        <?php
    // }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Record</title>
</head>
<body>
    <form method ="POST" action="">
        <h2>Add Record</h2>
        <a href="add_record.php">Add Record</a>
        <a href="search_record.php">Search Record</a>
        User: <?=$ufname?> <?=$ulname?> [ <a href="logout.php">Log out</a> ]
        <br><br>
        <table border="0" cellpadding="2" cellspacing="2" width="300">
            <tr>
                <td>First Name:</td>
                <td><input type="text" name="cfname"></td>
            </tr>
            <tr>
                <td>M.I.:</td>
                <td><input type="text" name="cmi" size="1" maxlength="1"></td>
            </tr>
            <tr>
                <td>Last Name:</td>
                <td><input type="text" name="clname"></td>
            </tr>
            <tr>
                <td>Gender:</td>
                <td>
                    <select name="gender">
                        <option value="">Select Gender</option>
                        <option value="Male">Male</option>
                        <option value="Female">Female</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>Contact No.:</td>
                <td><input type="text" name="contact_no"></td>
            </tr>
            <tr>
                <td>Address:</td>
                <td><input type="text" name="addresss"></td>
            </tr>
            <td colspan="2" align="center">
                <input type="submit" name="save" value="Save Record">
                <input type="reset" value="Clear">
            </td>
        </table>
        <?php
            if(isset($_POST['save'])){
                $cfname = $_POST['cfname'];
                $cmi = $_POST['cmi'];
                $clname = $_POST['clname'];
                $gender = $_POST['gender'];
                $contact_no = $_POST['contact_no'];
                $addresss = $_POST['addresss'];
                $s_save = "INSERT INTO customer_tbl SET 
                cfname = '$cfname',
                cmi = '$cmi',
                clname = '$clname',
                gender = '$gender',
                contact_no = '$contact_no',
                addresss = '$addresss'
                ";
                $q_save = $my_sqli->query($s_save);

                if(!$q_save){
                    echo $my_sqli->error;
                    exit();
                }elseif($my_sqli->affected_rows == 0){
                    echo "Save error";
                }else{
                    ?>
                    <script type = "text/javascript">
                        alert("New record has been added.");
                        window.location = "add_record.php"
                    </script>
                    <?php
                }
            }
        ?>
    </form>
</body>
</html>
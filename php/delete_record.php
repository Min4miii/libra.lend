<?php
session_start();
require("connection.php");
?>
<?php
    $cid = $_GET['cid'];
    if(isset($_GET['con']) and $_GET['con']=="delete"){
        ?>
        <script type="text/javascript">
            var con = confirm("Are you sure you want to delete this record?");
            if(con){
                window.location="delete_record.php?cid=<?=$cid?>&com=delete";
            } else {
                window.location="search_record.php";
            }
        </script>
        <?php
    }
    if(isset($_GET['com']) and $_GET['com']=="delete"){
        $q_delete = $my_sqli->query("DELETE FROM customer_tbl where cid='$cid'");
        if(!$q_delete){
            echo $my_sqli->error;
            exit();
        } elseif($my_sqli->affected_rows==0){
            echo "Delete error.";
        } else{
            ?>
            <script type="text/javascript">
                alert("Record has been succesfully deleted.");
                window.location="search_record.php";
            </script>
            <?Php
        }
    }
?> 
<?php
    session_start();
    $_SESSION['session_status'] = 0;
    unset($_SESSION['user_id']);
    unset($_SESSION['session_status']);
    session_destroy();
?>
<script type="text/javascript" >
    window.location = "index.php";
</script>
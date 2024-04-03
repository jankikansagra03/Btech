<?php
session_start();
// session_destroy();
unset($_SESSION['admin_uname']);
?>

<script>
    window.location.href = "login.php";
</script>
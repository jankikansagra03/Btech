<?php
session_start();
unset($_SESSION['admin_uname']);
?>

<script>
    window.location.href = "login.php";
</script>
<?php
include_once("admin_header.php");
$e_id = $_REQUEST['e_id'];
$q = "update event_details set status='Active' where event_id=$e_id";
if (mysqli_query($con, $q)) {
    setcookie("success", "Record Activation Successfull", time() + 2, "/");
} else {
    setcookie("error", "Record Activation Failed", time() + 2, "/");
}
?>
<script>
    window.location.href = "manage_events.php";
</script>
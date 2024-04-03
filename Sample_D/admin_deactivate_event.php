<?php
include_once("admin_header.php");
$e_id = $_REQUEST['e_id'];
$q = "update event_details set status='Inactive' where event_id=$e_id";
if (mysqli_query($con, $q)) {
    setcookie("success", "Record Deactivation Successfull", time() + 2, "/");
} else {
    setcookie("error", "Record Deactivation Failed", time() + 2, "/");
}
?>
<script>
    window.location.href = "manage_events.php";
</script>
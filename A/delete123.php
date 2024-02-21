<?php
$dir = "upload_B";

$fname = $_REQUEST['f_name'];
// echo $fname;

unlink($dir . "/" . $fname);

?>
<script>
    window.location.href="file_management.php";
</script>

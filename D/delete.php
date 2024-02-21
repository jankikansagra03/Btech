<?php
$dir = "uploads";
$fname = $_REQUEST['file_name'];
// echo $fname;

unlink($dir . "/" . $fname);
?>
<script>
    window.location.href = "4_1.php";
</script>
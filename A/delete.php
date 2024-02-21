<?php
$dir = "myuploads";
$filename = $_REQUEST['fname'];

unlink($dir . "/" . $filename);
?>
<script>
    window.location.href = "tutorial_4.php";
</script>
<?php
include_once("connection.php");
$em = $_REQUEST['em'];
echo $em;
$q = "delete from registration where email='$em'";
if (mysqli_query($con, $q)) {
?>
    <script>
        window.location.href = "display_data.php";
    </script>
<?php
} else {
    echo "error in deleting data";
}

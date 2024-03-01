<script>
    function delete_user_confirm(em) {
        alert(em);
    }
</script>
<?php
include_once("connection.php");

$q = "select * from registration";

$result = mysqli_query($con, $q);
echo "<table border='2'>";
while ($r = mysqli_fetch_array($result)) {
    echo "<tr>";
    echo "<td>" . $r[0] . "</td>";
    echo "<td>" . $r[1] . "</td>";
    echo "<td>" . $r[2] . "</td>";
    echo "<td>" . $r[3] . "</td>";
    echo "<td>" . $r[4] . "</td>";
    echo "<td>" . $r[5] . "</td>";
    echo "<td>" . $r[6] . "</td>";
    echo "<td>" . $r[7] . "</td>";
?>
    <td><img src="<?php echo 'profile_pictures/' . $r[8]; ?>" height="20%" width="25%" /></td>
    <?php
    echo "<td>" . $r[9] . "</td>";
    echo "<td>" . $r[10] . "</td>";
    ?>
    <td> <a href="edit_user.php?em=<?php echo $r[1]; ?>"> <input type="button" value="Edit"> </a></td>
    <td> <input type="button" value="Delete" onclick="delete_user_confirm(<?php echo $r[1]; ?>)"> </td>
<?php
    echo "</tr>";
}
?>
</table>
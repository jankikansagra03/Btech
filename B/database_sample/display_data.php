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
    <td><img src="<?php echo 'profile_pictures/' . $r[8]; ?>" height="100px" width="120px" /></td>
    <?php
    echo "<td>" . $r[9] . "</td>";
    echo "<td>" . $r[10] . "</td>";
    ?>
    <td> <a href="edit_user.php?em=<?php echo $r[1]; ?>"> <input type="button" value="Edit"> </a></td>
    <td>

        <input type="button" value="Delete" onclick="delete_function('<?php echo $r[1]; ?>')">
    </td>
    </tr>
<?php
}
?>
</table>

<script>
    function delete_function(em) {

        var ans = confirm("Are you sure? you want to delete this user?");
        // alert(ans);
        // alert(em);
        if (ans == true) {
            var xhttp = new XMLHttpRequest();
            xhttp.onreadystatechange = function() {
                if (this.readyState == 4) {
                    if (this.status == 200) {
                        // Handle response if needed
                        alert(this.responseText);
                        window.location.reload();
                    } else {
                        alert("Error: " + this.status);
                    }
                }
            };
            xhttp.open("POST", "delete_user.php", true);
            xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
            // alert(em);
            xhttp.send("email=" + em);
            // window.location.href = "display_data.php";

        }
    }
</script>
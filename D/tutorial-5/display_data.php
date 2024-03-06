<?php

include_once("connection.php");
$q = "select * from product_master";
?>
<table border="2" style="border-collapse:collapse">
    <tr>
        <th>Product ID</th>
        <th>Product Name</th>
        <th>Product Description</th>
        <th>Product Price</th>
        <th>Product Quantity</th>
        <th>Product Image</th>
        <th>Edit</th>
        <th>Delete</th>
    </tr>

    <?php
    $result = mysqli_query($con, $q);
    while ($r = mysqli_fetch_array($result)) {
    ?>
        <tr>
            <td><?php echo $r[0]; ?></td>
            <td><?php echo $r[1]; ?></td>
            <td><?php echo $r[2]; ?></td>
            <td><?php echo $r[3]; ?></td>
            <td><?php echo $r[4]; ?></td>
            <td><img src="product_images/<?php echo $r[5]; ?>" height="20%" width="20%"></td>
            <td><a href="edit_product.php?pid=<?php echo $r[0]; ?>"><input type="button" value="Edit Product" /></a></td>

            <td><a href="delete_product.php?pid=<?php echo $r[0]; ?>"><input type="button" value="Delete Product" /></a></td>
        </tr>
    <?php

    }
    ?>
</table>
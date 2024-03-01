<?php
include_once("connection.php");
?>
<body>
    <form action="insert_form.php" method="post" enctype="multipart/form-data">
        Enter product name: <input type="text" name="p_name" id="">
        <br>
        Enter product description: <textarea name="p_description" id="" cols="30" rows="10"></textarea>
        <br>
        Enter product price : <input type="number" name="p_price" id="">
        <br>
        Enter product quantity : <input type="number" name="p_quantity" id="">
        <br>
        Select product image: <input type="file" name="p_image" id="">
        <br>
        <input type="submit" value="Add product" name="btn">
    </form>
</body>
</html>
<?php
if (isset($_POST['btn'])) {
    $p_name = $_POST['p_name'];
    $p_description = $_POST['p_description'];
    $p_price = $_POST['p_price'];
    $p_quantity = $_POST['p_quantity'];
    if ($_FILES['p_image']['name'] == "") {
        echo "select a product image to upload";
    } else {
        $p_image = $_FILES['p_image']['name'];
        $q = "insert into product_master (`prod_name`,`prod_description`,`prod_price`,`prod_qunatity`,`prod_image`) values('$p_name','$p_description', $p_price,$p_quantity,'$p_image')";
        echo $q . "<br>";
        if (mysqli_query($con, $q)) {
            if (!is_dir("product_images")) {
                mkdir("product_images");
            }
            move_uploaded_file($_FILES['p_image']['tmp_name'], "product_images/" . $p_image);
        } else {
            echo "error in inserting data into database";
        }
    }
}

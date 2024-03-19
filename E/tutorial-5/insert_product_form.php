<?php
include_once("connecction.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="insert_product_form.php" method="post" enctype="multipart/form-data">
        Enter Product Name: <input type="text" name="p_name" id="">
        <br>
        Enter Product Description: <input type="text" name="p_decsription" id="">
        <br>
        Enter Product Price: <input type="number" name="p_price" id="">
        <br>
        Enter Product Quantity: <input type="number" name="p_quantity" id="">
        <br>
        Enter Product Category: <input type="text" name="p_category" id="">
        <br>
        select Product Image: <input type="file" name="p_image" id="">
        <br>
        <input type="submit" value="Insert Product">
    </form>

</body>

</html>
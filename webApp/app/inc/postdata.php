<?php
//var_dump($_POST);

if (isset($_POST['submit'])) {
    include "../models/DbConn.php";
    include "../models/addingProduct.php";
    include "../controllers/addContr.php";

    $sku = $_POST['sku'];
    $name = $_POST['name'];
    $price = $_POST['price'];
    $size = $_POST['size'];
    $weight = $_POST['weight'];
    $height = $_POST['height'];
    $width = $_POST['width'];
    $length = $_POST['length'];
    $productType = $_POST['productType'];

    $add = new AddContr($sku, $name, $price, $size, $weight, $height, $length, $width, $productType);
    $add->checkProduct();
}
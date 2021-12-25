<?php

// require MySQL Connection
require_once '../DataBase/dbController.php';

// require Product Class
require_once '../DataBase/product.db.php';

// DBController object
$db = new dbController();

// Product object
$product = new Product($db);

if (isset($_POST['itemid'])){
    $result = $product->getProduct($_POST['itemid']);
    echo json_encode($result);
}
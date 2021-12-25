<?php
// db connection 
require_once 'DataBase/dbController.php';

// procut class 
require_once 'DataBase/product.db.php';

// require Cart Class
require_once 'database/Cart.php';

// dbController object 
$db = new dbController();

// product object 
$product = new product($db);
$product_item = $product->getData();

// Cart object
$Cart = new Cart($db);
<?php
include_once 'dbh.php';

if(isset($_POST['add_product'])){
    $productBrand = $_POST['item_brand'];
    $productName = $_POST['item_name'];
    $productPrice = $_POST['item_price'];
    $productType = $_POST['item_type'];
    $productImage = $_FILES['item_image']["name"];

    $random1 =rand(1111,9999);
    $random2 =rand(1111,9999);
    $random = $random1.$random2;
    $random = md5($random);

    $dest = "./product_image/".$random.$productImage;
    $dest1 = "product_image/".$random.$productImage;
    move_uploaded_file($_FILES['item_image']["tmp_name"], $dest);

    if(empty($productBrand) || empty($productName) ||empty($productPrice) || empty($productType)){
        header("Location: home.php?error=Please Fill all the fields to ad this product! ");
        exit();
    }
    else{
        $sql = "INSERT INTO `product`(`item_brand`, `item_name`,`item_price`, `item_type`, `item_image`)
                          VALUES('$productBrand', '$productName', '$productPrice','$productType', '$dest1')";
        $result = mysqli_query($conn, $sql);
        if(!$result){
            die("Sql statement failed!");
        }
        else{
            header("Location: home.php?success=One product has been added to your website!");
            exit();
        }
    }
}
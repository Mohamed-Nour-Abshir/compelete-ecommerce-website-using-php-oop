<?php
include_once 'dbh.php';
if(isset($_GET['id'])){
    $id = $_GET['id'];

    $sql = "DELETE FROM `product` WHERE `item_id` = '$id'";
    $result = mysqli_query($conn, $sql);
    if(!$result){
        die("Sql statement failed!");
    }
    else{
        header("Location: home.php?error=One product has been deleted to your website");
    }
}
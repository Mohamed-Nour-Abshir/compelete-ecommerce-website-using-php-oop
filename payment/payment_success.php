<?php
include '../admin/dbh.php';

$order_id = $_GET['order_id'];

$sql = "SELECT * FROM checkout where id='$order_id'";
$result = mysqli_query($conn, $sql);
while($row = mysqli_fetch_array($result)){
    $firstName = $row['f_name'];
    $lastName = $row['l_name'];
    $email = $row['email'];
    $address = $row['address'];
    $zip = $row['zip'];
    $co_no = $row['co_no'];

    $sql1 = "INSERT INTO `confirm_order_adddress` VALUES('','$firstName', '$lastName', '$email', '$address', '$zip', '$co_no')";

    $sql = "SELECT `id` FROM `confirm_order_address` order by id desc limit 1";
    $result = mysqli_query($conn, $sql);
    while($row = mysqli_fetch_array($result)){
        $id = $row['id'];
    }
        foreach($_COOKIE['item'] as $nam1=> $value){
            $value1 = explode("_", $value);

            $sql = "INSERT INTO `confirm_order_product` VALUES('', '$id','$value1[1]','$value1[2]','$value1[3]','$value1[0]','$value1[4]')";
        }
        echo "We get your Order successfully, and we will deliver your order soon";
}
?>
<script>
    setTimeout(function(){
        window.location = "../index.php";
    },4000);
</script>
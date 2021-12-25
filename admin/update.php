<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<?php
include_once 'dbh.php';
if(isset($_GET['id'])){
    $id = $_GET['id'];
   
    $sql = "SELECT *FROM `product` WHERE `item_id` = '$id';";
    $result = mysqli_query($conn, $sql);
    if(!$result){
        die("Sql statement failed!");
    }
    else{
        $row = mysqli_fetch_assoc($result);
    }
    
}
?>
<?php
 
 if(isset($_POST['update'])){
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

     if(isset($_GET['newId'])){
         $newId = $_GET['newId'];
     $sql = "UPDATE `product` SET `item_brand` = '$productBrand', `item_name` = '$productName', `item_price` = '$productPrice', `item_type` = '$productType', `item_image` = '$dest1' WHERE `item_id` = '$newId' ;";
     $result = mysqli_query($conn, $sql);
     if(!$result){
         die("sql statement failed!");
     }
     else{
         header("Location: home.php?success=One product has been updated Successfully!");
     }
    }
 }

?>
<div class="container m-5">
<h1 class="bg-primary text-light p-3 text-center">Update Product Information</h1>
<form action="update.php?newId=<?php echo $id;?>" method="POST" enctype="multipart/form-data">
<div class="form-group">
                    <label for="item_brand">Product Brand</label>
                    <input type="text" name="item_brand" class="form-control" value="<?php echo $row['item_brand'];?>">
                </div>
                <div class="form-group">
                    <label for="item_name">Product Name</label>
                    <input type="text" name="item_name" class="form-control"  value="<?php echo $row['item_name'];?>">
                </div>
                <div class="form-group">
                    <label for="item_price">Product Price</label>
                    <input type="text" name="item_price" class="form-control"  value="<?php echo $row['item_price'];?>">
                </div>
                <div class="form-group">
                    <label for="item_type">Product Type</label>
                    <input type="text" name="item_type" class="form-control"  value="<?php echo $row['item_type'];?>">
                </div>
                <div class="form-group">
                    <label for="item_image">Product image</label>
                    <input type="file" name="item_image" class="form-control">
                </div>
    <input type="submit" name="update" value="Edit" class="btn btn-success mt-2">
</form>
</div>
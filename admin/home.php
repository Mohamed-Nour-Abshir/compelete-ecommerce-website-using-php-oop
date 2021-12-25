<?php
include 'dbh.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Apple Phones/Admin</title>

    <!-- Bootstrap CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!-- font awesome icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" integrity="sha256-h20CPZ0QyXlBuAw7A+KluUYx/3pK+c7lYEpqLTlxjYQ=" crossorigin="anonymous" />

    <!-- Custom CSS file -->
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
      <div class="row justify-content-center mt-2">
      <div class="col-sm-12">
        <h1 class="text-center bg-info text-light p-2">Manage your Site</h1>
        <a href="product_list.php" class="float-start btn btn-primary">Manage Products</a>
        <a href="orderlist.php" class="btn btn-primary float-end mb-2"  >Order List</a>
        <table class="table table-bordered table-striped">
            <thead>
            <tr>
            <th>Product ID</th>
                <th>Product Brand</th>
                <th>Product Name</th>
                <th>Product Price</th>
                <th>Product Type</th>
                <th>Product Image</th>
                <th>Update Product</th>
                <th>Delete Product</th>
            </tr>
            </thead>
            <tbody>
            <tr>
            <?php 
            $sql = "SELECT *FROM `product`; ";
            $result = mysqli_query($conn, $sql);
            if(!$result){
                die("sql statement failed!");
            }
            else{
                while($row = mysqli_fetch_assoc($result)){
                    ?>
                        <tr>
                        <td><?php echo $row['item_id'];?></td>
                            <td><?php echo $row['item_brand'];?></td>
                            <td><?php echo $row['item_name'];?></td>
                            <td>$<?php echo $row['item_price'];?></td>
                            <td><?php echo $row['item_type'];?></td>
                            <td><img src="<?php echo $row['item_image'];?>" alt="" style="width: 100px; height:100px;"></td>
                            <td><a href="update.php?id=<?php echo $row['item_id'];?>" class="btn btn-success"><i class="fas fa-edit"></i></a></td>
                            <td><a href="delete.php?id=<?php echo $row['item_id'];?>" class="btn btn-danger"><i class="fas fa-trash-alt"></i></a></td>
                        </tr>
                    <?php
                }
            }

        ?>
            </tr>
            </tbody>
        </table>
      </div>
    </div>
</body>
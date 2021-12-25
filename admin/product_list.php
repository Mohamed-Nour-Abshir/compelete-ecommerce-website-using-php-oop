<?php
include 'dbh.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Apple Phones</title>

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
                <h1 class="text-center bg-info text-light p-2">Products fo your site</h1>
                 <h4 class="float-start">All products</h4>
                 <button class="btn btn-primary float-end mb-2"  data-bs-toggle="modal" data-bs-target="#addProduct">Add Product</button>
                 <?php
                        if(isset($_GET['error'])){
                            $error = $_GET['error'];
                            echo "<div class='alert alert-danger'>$error</div>";
                        }
                        elseif(isset($_GET['success'])){
                            $success = $_GET['success'];
                            echo "<div class='alert alert-success'>$success</div>";
                        }
                 ?>
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
    </div>

    <form action="add.php" method="POST" enctype="multipart/form-data">
       <!-- Modal -->
        <div class="modal fade" id="addProduct" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">ADD Product</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="form-group">
                    <label for="item_brand">Product Brand</label>
                    <input type="text" name="item_brand" class="form-control">
                </div>
                <div class="form-group">
                    <label for="item_name">Product Name</label>
                    <input type="text" name="item_name" class="form-control">
                </div>
                <div class="form-group">
                    <label for="item_price">Product Price</label>
                    <input type="text" name="item_price" class="form-control">
                </div>
                <div class="form-group">
                    <label for="item_type">Product Type</label>
                    <input type="text" name="item_type" class="form-control">
                </div>
                <div class="form-group">
                    <label for="item_image">Product image</label>
                    <input type="file" name="item_image" class="form-control">
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cancel</button>
                <input type="submit" name="add_product" value="Add Product" class="btn btn-success">
            </div>
            </div>
        </div>
        </div>
   </form>






   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
   <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
</body>
</html>
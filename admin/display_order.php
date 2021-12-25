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
            <h1 class="text-center bg-warning text-light p-2">Orders from the customers</h1>
             <table class="table table-bordered table-striped">
                 <thead>
                     <th>Product Name</th>
                     <th>product Price</th>
                     <th>Product Quantity</th>
                     <th>Product Image</th>
                 </thead>
                 <tbody>
                 <?php 
                    $id = $_GET['id'];
                    $sql = "SELECT *FROM `confirm_order_product` WHERE `id`= '$id'; ";
                    $result = mysqli_query($conn, $sql);
                    if(!$result){
                        die("sql statement failed!");
                    }
                    else{
                        while($row = mysqli_fetch_assoc($result)){
                            ?>
                                <tr>
                                <td><?php echo $row['product_name'];?></td>
                                    <td>$<?php echo $row['product_price'];?></td>
                                    <td><?php echo $row['product_qty'];?></td>
                                    <td><img src="<?php echo $row['product_image'];?>" alt="" style="width: 100px; height:100px;"></td>
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
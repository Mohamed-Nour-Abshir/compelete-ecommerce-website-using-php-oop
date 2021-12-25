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
            <h1 class="text-center bg-info text-light p-2">Orders from the customers</h1>
             <table class="table table-bordered table-striped">
                 <thead>
                     <th>First Name</th>
                     <th>lastName Name</th>
                     <th>Email</th>
                     <th>Address</th>
                     <th>Zip Code</th>
                     <th>Contact Number</th>
                     <th>Veiw Order</th>
                 </thead>
                 <tbody>
                 <?php 
                    $sql = "SELECT *FROM `confirm_order_adddress`; ";
                    $result = mysqli_query($conn, $sql);
                    if(!$result){
                        die("sql statement failed!");
                    }
                    else{
                        while($row = mysqli_fetch_assoc($result)){
                            ?>
                                <tr>
                                <td><?php echo $row['f_name'];?></td>
                                    <td><?php echo $row['l_name'];?></td>
                                    <td><?php echo $row['email'];?></td>
                                    <td>$<?php echo $row['address'];?></td>
                                    <td><?php echo $row['zip'];?></td>
                                    <td><?php echo $row['co_no'];?></td>
                                    <td><a href="display_order.php?id=<?php echo $row['id'];?>">View Order</a></td>
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
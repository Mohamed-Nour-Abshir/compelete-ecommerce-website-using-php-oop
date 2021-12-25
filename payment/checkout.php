<?php
session_start();
?>

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<div class="container">
<form action="" method="POST" class="w-75 ml-5">
    <h3 class="text-center bg-secondary text-light">please give proper details to easliy get delivered your items to your addrss</h3>
    <?php
    if(isset($_GET['error'])){
        $error = $_GET['error'];
        echo "<div class='alert alert-danger'>$error</div>";
    }
    ?>
    <div class="form-group">
        <label for="f_name">First Name</label>
        <input type="text" name="f_name" class="form-control">
    </div>
    <div class="form-group">
        <label for="l_name">Last Name</label>
        <input type="text" name="l_name" class="form-control">
    </div>
    <div class="form-group">
        <label for="email">Email</label>
        <input type="text" name="email" class="form-control">
    </div>
    <div class="form-group">
        <label for="address">Address</label>
        <input type="text" name="address" class="form-control">
    </div>
    <div class="form-group">
        <label for="zip">Zip Code</label>
        <input type="text" name="zip" class="form-control">
    </div>
    <div class="form-group">
        <label for="co_no">Contact Number</label>
        <input type="text" name="co_no" class="form-control">
    </div>

    <button type="submit" name="checkout" class="btn btn-primary">CheckOut</button>
</form>

</div>
<?php

if(isset($_POST['checkout'])){
    include '../admin/dbh.php';

    $firstName = $_POST['f_name'];
    $lastName = $_POST['l_name'];
    $email = $_POST['email'];
    $address = $_POST['address'];
    $zip = $_POST['zip'];
    $co_no = $_POST['co_no'];

    if(empty($firstName) || empty($lastName) || empty($email) || empty($address) || empty($zip) || empty($co_no)){
        header("Location:checkout.php?error=fill all the fields");
        exit();
    }

    $sql = "INSERT INTO `checkoutaddress`(`f_name`, `l_name`, `email`, `address`,`zip`, `co_no`)VALUES('$firstName', '$lastName', '$email', '$address', '$zip', '$co_no');";
     
    $result = mysqli_query($conn, $sql);
    
     $sql1 = "SELECT `id` FROM `checkoutaddress` order by id desc limit 1";
     $result1 = mysqli_query($conn, $sql1);
      while($row = mysqli_fetch_assoc($result1)){
          $_SESSION['order_id'] = $row['id'];
      }
      ?>
<script>
    alert("click ok to pay the money");

    setTimeout(function(){
        window.location="paypal.php";
    },2000);
</script>

      <?php

}
?>
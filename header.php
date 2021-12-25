<?php
 ob_start();
 session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Apple Phones</title>

    <!-- Bootstrap CDN -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <!-- Owl-carousel CDN -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" integrity="sha256-UhQQ4fxEeABh4JrcmAJ1+16id/1dnlOEVCFOxDef9Lw=" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" integrity="sha256-kksNxjDRxd/5+jGurZUJd1sdR2v+ClrCl3svESBaJqw=" crossorigin="anonymous" />

    <!-- font awesome icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" integrity="sha256-h20CPZ0QyXlBuAw7A+KluUYx/3pK+c7lYEpqLTlxjYQ=" crossorigin="anonymous" />

    <!-- Custom CSS file -->
    <link rel="stylesheet" href="style.css">

    <!-- requiring the functions file  -->
    <?php
    require_once 'functions.php';
    ?>

</head>
<body>
<!-- start header -->
<header id="header">
    <div class="strip d-flex justify-content-between px-4 py-1 bg-warning">
        <p class="font-size-12 text-black-50 m-0">Call (+880) 173-093-1984</p>
        <div class="font-size-14">
            <?php 
             if(isset($_SESSION['useruid'])){
                 echo '<a href="includes/logout.inc.php" class="px-3 border-right border-left text-dark">Logout</a>';
             }
             else{
                 echo '<a href="login.php" class="px-3 border-right border-left text-dark">LogIn</a>';
             }
            ?>
            
            <a href="cart.php" class="px-3 border-right text-dark">Whishlist (<?php echo count($product->getData('wishlist'));?>)</a>
        </div>
    </div>
    <nav class="navbar navbar-expand-lg navbar-dark color-secondary-bg">
        <a class="navbar-brand font-cycle" href="index.php">Apple Phones</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav m-auto">
                <li class="nav-item active">
                    <a class="nav-link " href="index.php">Home</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-expanded="false">
                    Products
                    </a>
                    <div class="dropdown-menu color-secondary-bg text-light" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item " href="#top-sale">Top sale</a>
                    <a class="dropdown-item " href="#new-phones">New phones</a>
                    <a class="dropdown-item " href="#special-price">special prices</a>
                    </div>
                 </li>
                <li class="nav-item">
                    <a class="nav-link " href="#new-phones">Coming Soon</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link " href="#blog">Blog</a>
                </li>
            </ul>
            <form action="" class="font-size-12">
                <a href="cart.php" class="py-2 rounded-pill color-primary-bg">
                    <span class="font-size-16 px-2 text-white"><i class="fas fa-shopping-cart"></i></span>
                    <span class="px-3 py-2 rounded-pill text-dark bg-light"><?php echo count($product->getData('Cart'));?></span>
                </a>
            </form>
        </div>
    </nav>

</header>
<!-- end header  -->

<!-- main  start-->
<main id="main">
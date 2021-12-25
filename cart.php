<?php
// header section
  include 'header.php';
?>

<?php
// products section
count($product->getData('cart')) ? include 'Template/cart.php' :include 'Template/empty_cart_wishlist/empty_cart.php';
?>

<?php
// wishlist template
count($product->getData('wishlist')) ? include 'Template/wishlist.temp.php' : include 'Template/empty_cart_wishlist/empty_wishlist.php';
?>

<?php
// new phones section
  include 'Template/new-phones.temp.php';
?>

<?php
// footer section
  include 'footer.php';
?>
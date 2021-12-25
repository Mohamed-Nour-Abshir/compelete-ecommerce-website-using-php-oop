<?php
require 'functions.php';
 shuffle($product_item);

    // request method post
    if($_SERVER['REQUEST_METHOD'] == "POST"){
        if (isset($_POST['top_sale_submit'])){
            // call method addToCart
            $Cart->addToCart($_POST['user_id'], $_POST['item_id']);
        }
    }
?>

<!-- top sale section start  -->
<section id="top-sale">
 <div class="container py-5">
    <h4 class="font-size-20 font-cycle">Top Sale</h4>
    <hr>
    <!-- top-sale owl-carousel -->
    <div class="owl-carousel owl-theme">
        <?php foreach($product_item as $item){?>
        <div class="item py-2">
            <div class="product">
                <a href="product.php?item_id=<?php echo $item['item_id'];?>"><img src="./admin/<?php echo $item['item_image'];?>" alt="product1" class="img-fluid"></a>
                <div class="text-center">
                    <h6><?php echo $item['item_name'] ?? "Unknown";?></h6>
                    <div class="rating text-warning font-size-12">
                        <span><i class="fas fa-star"></i></span>
                        <span><i class="fas fa-star"></i></span>
                        <span><i class="fas fa-star"></i></span>
                        <span><i class="fas fa-star"></i></span>
                        <span><i class="far fa-star"></i></span>
                    </div>
                    <div class="price py-2">
                        <span>$<?php echo $item['item_price'] ?? "0";?></span>
                    </div>
                    <form method="post">
                        <input type="hidden" name="item_id" value="<?php echo $item['item_id'] ?? '1'; ?>">
                        <input type="hidden" name="user_id" value="<?php echo 1; ?>">
                        <?php
                            if (in_array($item['item_id'], $Cart->getCartId($product->getData('cart')) ?? [])){
                                echo '<button type="submit" disabled class="btn btn-warning font-size-12">In the Cart</button>';
                            }else{
                                echo '<button type="submit" name="top_sale_submit" class="btn btn-warning font-size-12">Add to Cart</button>';
                            }
                        ?>
                    </form>
                </div>
            </div>
        </div>
        <?php }?>

    </div>
    <!-- top-sale owl-carousel end-->
 </div>
</section>
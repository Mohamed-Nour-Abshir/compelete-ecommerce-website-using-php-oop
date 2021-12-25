<?php
 shuffle($product_item);
    // request method post
    if($_SERVER['REQUEST_METHOD'] == "POST"){
        if (isset($_POST['special_price_submit'])){
            // call method addToCart
            $Cart->addToCart($_POST['user_id'], $_POST['item_id']);
        }
    }
?>
<!-- special price  start-->
<section id="special-price">
    <div class="container">
        <h4 class="font-cycle font-size-20">Special price</h4>
        <div id="filters" class="button-group text-right font-cycle font-size-16">
            <button class="btn is-checked" data-filter="*">All Brands</button>
            <button class="btn " data-filter=".old">Old phones</button>
            <button class="btn is-checked" data-filter=".new">New phones</button>
            <button class="btn is-checked" data-filter=".upcoming">Upcoming phones</button>
        </div>

        <div class="grid">
        <?php foreach($product_item as $item){?>
        <div class="grid-item <?php echo $item['item_type']?> border">
            <div class="item py-2" style="width: 200px;">
                <div class="product">
                    <a href="product.php?item_id=<?php echo $item['item_id'];?>"><img src="./admin/<?php echo $item['item_image']?>" alt="product1" class="img-fluid"></a>
                    <div class="text-center">
                        <h6><?php echo $item['item_name']?></h6>
                        <div class="rating text-warning font-size-12">
                            <span><i class="fas fa-star"></i></span>
                            <span><i class="fas fa-star"></i></span>
                            <span><i class="fas fa-star"></i></span>
                            <span><i class="fas fa-star"></i></span>
                            <span><i class="far fa-star"></i></span>
                        </div>
                        <div class="price py-2">
                            <span>$<?php echo $item['item_price']?></span>
                        </div>
                        <form method="post">
                        <input type="hidden" name="item_id" value="<?php echo $item['item_id'] ?? '1'; ?>">
                        <input type="hidden" name="user_id" value="<?php echo 1; ?>">
                        <?php
                            if (in_array($item['item_id'], $Cart->getCartId($product->getData('cart')) ?? [])){
                                echo '<button type="submit" disabled class="btn btn-warning font-size-12">In the Cart</button>';
                            }else{
                                echo '<button type="submit" name="special_price_submit" class="btn btn-warning font-size-12">Add to Cart</button>';
                            }
                        ?>
                    </form>
                    </div>
                </div>
            </div>
            </div>
            <?php } ?>
        </div>
    </div>      
</section>
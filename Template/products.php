<?php
if(isset($_GET['item_id'])){
    $item_id = $_GET['item_id'];
}
    foreach ($product->getData() as $item) :
        if(isset($_GET['item_id'])):
            if ($item['item_id'] == $item_id) :
        
        
?>
<!-- products section  -->
<section id="products" class="py-3">
        <div class="container">
            <!-- order details  -->
            <div class="row">
                <div class="col-sm-6">
                    <img src="./admin/<?php echo $item['item_image'];?>" style="height: 500px;" alt="product1" class="img-fluid">
                    <div class="form-row pt-4 font-size-16">
                        <div class="col">
                            <button type="submit" class="btn btn-danger form-control">proceed to Buy</button>
                        </div>
                        <div class="col">
                        <form method="post">
                        <input type="hidden" name="item_id" value="<?php echo $item['item_id']; ?>">
                        <input type="hidden" name="user_id" value="<?php echo 1; ?>">
                        <?php
                            if (in_array($item['item_id'], $Cart->getCartId($product->getData('cart')) ?? [])){
                                echo '<button type="submit" disabled class="btn btn-warning font-size-16 form-control">In the Cart</button>';
                            }else{
                                echo '<button type="submit" name="top_sale_submit" class="btn btn-warning font-size-16 form-control">Add to Cart</button>';
                            }
                        ?>
                       </form>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 py-5">
                    <h5 class="font-size-20"><?php echo $item['item_name'];?></h5>
                    <small>By <?php echo $item['item_brand'];?></small>
                    <div class="d-flex">
                        <div class="rating text-warning font-size-12">
                            <span><i class="fas fa-star"></i></span>
                            <span><i class="fas fa-star"></i></span>
                            <span><i class="fas fa-star"></i></span>
                            <span><i class="fas fa-star"></i></span>
                            <span><i class="far fa-star"></i></span>
                        </div>
                        <a href="#" class="px-3 font-size-14">200 ratings | 100+ answered questions</a>
                    </div>
                    <hr class="m-0">
                    <!-- prodct price  -->
                    <table class="my-3">
                        <tr class="font-size-14">
                            <td>Discount: </td>
                            <td> <strike>$<?php echo $item['item_price']+12.00;?></strike></td>
                        </tr>
                        <tr class="font-size-14">
                            <td>Deal price: </td>
                            <td><span class="font-size-20 text-danger px-2">$<?php echo $item['item_price'];?></span><small>inclusive all taxes</small></td>
                        </tr>
                        <tr class="font-size-14">
                            <td>you save: </td>
                            <td><span class="font-size-16 text-danger px-2">$12.00</span></td>
                        </tr>
                    </table>

                    <!-- policy -->
                    <div id="policy">
                        <div class="d-flex">
                            <div class="return text-center mr-5">
                                <div class="font-size-20 my-2 color-secondary">
                                    <span class="fas fa-retweet border rounded-pill p-3"></span>
                                </div>
                                <a href="#" class="font-size-12">7 Days<br>replacement</a>
                            </div>
                            <div class="return text-center mr-5">
                                <div class="font-size-20 my-2 color-secondary">
                                    <span class="fas fa-truck border rounded-pill p-3"></span>
                                </div>
                                <a href="#" class="font-size-12">Apple Phones<br>Deliver</a>
                            </div>
                            <div class="return text-center mr-5">
                                <div class="font-size-20 my-2 color-secondary">
                                    <span class="fas fa-check-double border rounded-pill p-3"></span>
                                </div>
                                <a href="#" class="font-size-12">1 year<br>waranty</a>
                            </div>
                        </div>
                    </div>
                    <hr>
                    <!-- order details  -->
                    <div id="order-details" class="d-flex flex-column text-dark">
                        <small>Delivery time: 18.11.2021 - 21-11-2021</small>
                        <small>sold By <a href="#">Apple Phones</a> (4.5 out of 5 | 200 ratings)</small>
                        <small><i class="fas fa-map-marker-alt color-primary"></i> Deliver to username -1219</small>
                    </div>

                           <!-- ram size  -->
                    <div class="size my-3">
                        <h6>Ram Size:</h6>
                        <div class="d-flex justify-content-between w-75">
                            <div class="border p-2">
                                <button class="btn p-0 font-size-14">4GB RAM</button>
                            </div>
                            <div class="border p-2">
                                <button class="btn p-0 font-size-14">8GB RAM</button>
                            </div>
                            <div class="border p-2">
                                <button class="btn p-0 font-size-14">16GB RAM</button>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- product Description -->
                <div class="col-12">
                    <h6>Product Description</h6>
                    <hr>
                    <p class="font-size-16">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Itaque ipsam, alias quidem cum dolore voluptatem sunt, vitae officiis pariatur deserunt aliquam magni nulla? Beatae itaque quaerat blanditiis nostrum excepturi neque possimus quidem nesciunt, dolores quisquam voluptatibus sunt recusandae voluptas fuga consectetur minus! Vero aspernatur iure cum officia. Voluptatibus, eveniet rem.</p>
                    <p class="font-size-16">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Itaque ipsam, alias quidem cum dolore voluptatem sunt, vitae officiis pariatur deserunt aliquam magni nulla? Beatae itaque quaerat blanditiis nostrum excepturi neque possimus quidem nesciunt, dolores quisquam voluptatibus sunt recusandae voluptas fuga consectetur minus! Vero aspernatur iure cum officia. Voluptatibus, eveniet rem.</p>
                </div>
            </div>

        </div>
    </section>
<?php
endif;
endif;
endforeach;
?>
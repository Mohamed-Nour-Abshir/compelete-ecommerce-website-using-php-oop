<?php
session_start();
?>
    <h1>Please wait we are transfering you in paypal...</h1>
    <?php
    $paypal_url = 'https://www.paypal.com/';
    if(isset($_SESSION["pay"])){
    $subTotal = $_SESSION["pay"];
    }

    $order_id = $_SESSION["order_id"];
    ?>

    <form action="<?php echo $paypal_url; ?>/cqi-bin/webscr" method="POST" name="buyCredit" id="buyCredit">
        <input type="hidden" name="cmd" value="_xclick">
        <input type="hidden" name="business" value="mdnourabshir@gmail.com">
        <input type="hidden" name="currency_code" value="USD">
        <input type="hidden" name="item_name" value="payment for product buying">
        <input type="hidden" name="item_number" value="1212">
        <input type="hidden" name="amount" value="<?php echo $subTotal;?>">
        <input type="hidden" name="return" value="http://localhost/Apple_phones/payment/payment_success.php?id=<?php echo $order_id;?>">
    </form>
<script>
    document.getElementById("buyCredit").submit();
</script>
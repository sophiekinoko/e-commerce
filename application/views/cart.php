<?php include 'header.php' ?>
<?php include 'nav.php' ?>

<div class="main">
    <h2>My cart</h2>

    <?php if(!empty($_SESSION['cart'])): ?>
        <?php $products = new Model_Product(); ?>
        <?php $totalPrice=[]; ?>

            <table>
                <tr>
                    <td></td>
                    <td>Category</td>
                    <td>Name</td>
                    <td>Price</td>
<!--                    <td>Quantity1</td>-->
                    <td>Quantity</td>
                    <td>Total price</td>
                    <td>Remove</td>

                </tr>
                <?php foreach ($_SESSION['cart'] as $key => $value): ?>
                    <?php $product = $products->getProduct($key); ?>

                    <?php array_push($totalPrice, $product["price"]*$_SESSION["cart"][$product["id"]]); ?>

                    <tr>
                        <td><img src="<?= $imgPath.$product["img"] ?>_small.jpg" alt="" /></td>
                        <td><?= $product["category"] ?></td>
                        <td><?= $product["name"] ?></td>

                        <!--<td>
                            <select name="<?/*= $key */?>" id="cartform">
                                <?php /* for($i=1; $i<11; $i++): */?>
                                    <option value="<?/*= $i */?>" <?php /*if($i==$_SESSION["cart"][$product["id"]]){echo "selected";} */?> ><?/*= $i */?></option>
                                <?php /*endfor; */?>
                            </select>
                        </td>-->
                        <?php $id = $product["id"] ?>
                        <?php $quantity = $_SESSION["cart"][$product["id"]] ?>
                        <td><span class="productprice<?= $id ?>"><?= $product["price"] ?></span> €</td>
                        <td>
                            <span class="quantity<?= $id ?>"><?= $quantity ?></span>
                            <button class="moins" product="<?= $id ?>">-</button>
                            <button class="plus" product="<?= $id ?>">+</button>
                        </td>


                        <td><span class="total" id="total<?= $id ?>">
                            <?php $total = $product["price"]*$_SESSION["cart"][$product["id"]];
                            echo number_format($total, 2, ',', '');
                            ?></span> €
                        </td>

                        <td><a href="<?= URL::base() ?>product/remove_article/<?= $product["id"] ?>" style="color: red">X</a></td>
                    </tr>
                <?php endforeach; ?>
                <tr>
                    <td class="white" colspan="3"></td>
                    <td colspan="2">Total HT:</td>
                    <td colspan="2"><span class="totalht"><?php $totalCart = array_sum($totalPrice);
                        echo number_format($totalCart, 2, ',', '');?></span> €</td>
                </tr>
                <tr>
                    <td class="white" colspan="3"></td>
                    <td colspan="2">Taxes (20%):</td>
                    <td colspan="2"><span  id="tva"><?php $TVA = array_sum($totalPrice)*0.2;
                        echo number_format($TVA, 2, ',', '');?></span> €</td>
                </tr>
                <tr>
                    <td class="white" colspan="3"></td>
                    <td colspan="2">Delivery:</td>
                    <td colspan="2"><?= $livraison.' €' ?></td>
                </tr>
                <tr>
                    <td class="white" colspan="3"></td>
                    <td class="price" colspan="2">TOTAL TTC:</td>
                    <td class="price" colspan="2"><span id="totalttc"><?= $price = number_format($totalCart+$TVA+$livraison, 2, ',', ' ') ?></span> €</td>
                </tr>
                <!--<tr>
                    <td class="white" colspan="4"></td>
                    <td class="checkout" colspan="2"><input type="submit" value="UPDATE CART"></td>
                </tr>-->
                <tr>
                    <td class="white" colspan="3"></td>
                    <td class="checkout" colspan="4"><a href="<?= URL::site('user/address') ?>">CHECKOUT</a></td>
                </tr>
                <tr>
                    <form action="cart" id="cartform" method="post" >
                        <td class="white" colspan="3"></td>
                        <td class="continue" colspan="4"><a href="<?= URL::site('/') ?>">OR CONTINUE MY SHOPPING</a></td>
                    </form>
                </tr>
            </table>


    <?php else : ?>
        <table>
            <tr>
                <td colspan='5' style='height: 10em;'><a href="<?= URL::site('/') ?>">Your cart is empty.<br />Let's take a look at our products !</a></td>
            </tr>
        </table>
    <?php endif; ?>

</div>

<script>

    function panier() {
        var totalht = 0;
        $('.total').each(function()
        {
            totalht += parseFloat($(this).html());
        });

        $('.totalht').text((totalht).toFixed(2));
        $('#tva').text((totalht*0.2).toFixed(2));
        $('#totalttc').text(parseFloat((totalht).toFixed(2))+parseFloat((totalht*0.2).toFixed(2))+10);
    }

    $('.plus').click(function()
        {
            var id = $(this).attr("product");
            $.ajax({url:"<?= URL::site('ajaxcart/add') ?>/"+id}).done(function(data){
                var data = JSON.parse(data);
                $('.quantity'+id).text(data["quantity"]);
                $totalprice = data["quantity"]*$('.productprice'+id).text();
                $('#total'+id).text($totalprice.toFixed(2));
                panier();
            });
        }
    )

    $('.moins').click(function()
        {
            var id = $(this).attr("product");
            $.ajax({url:"<?= URL::site('ajaxcart/sub') ?>/"+id}).done(function(data){
                var data = JSON.parse(data);
                $('.quantity'+id).text(data["quantity"]);
                $totalprice = data["quantity"]*$('.productprice'+id).text();
                $('#total'+id).text($totalprice.toFixed(2));
                panier()
            });
        }
    )
</script>

<?php include 'footer.php' ?>

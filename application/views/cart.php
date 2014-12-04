<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>ecommerce</title>
    <link rel="stylesheet" href="<?= URL::base() ?>/assets/css/normalize.css">
    <link rel="stylesheet" href="<?= URL::base() ?>/assets/css/styles.css">
    <link href='http://fonts.googleapis.com/css?family=Lato:400,900' rel='stylesheet' type='text/css'>
</head>
<body>

<div class="wrap clearfix">

    <h1><a href="<?= URL::site('/') ?>">My Shop</a></h1>

    <div class="aside">
        <?php include 'nav.php' ?>
    </div>


    <div class="main">
        <h2>My cart</h2>

        <?php if(!empty($_SESSION['cart'])): ?>
            <?php $products = new Model_Product(); ?>
            <?php $totalPrice=[]; ?>
            <form action="cart" id="cartform" method="post" >
                <table>
                    <tr>
                        <td></td>
                        <td>Category</td>
                        <td>Name</td>
                        <td>Price</td>
                        <td>Quantity</td>
                        <td>Total price</td>
                        <!--<td>Remove</td>-->
                    </tr>
                    <?php foreach ($_SESSION['cart'] as $key => $value): ?>
                        <?php $key = str_replace("product-", "", $key); ?>
                        <?php $product = $products->getProduct($key); ?>
                        <?php array_push($totalPrice, $product["price"]*$_SESSION["cart"]["product-".$product["id"]]); ?>

                        <tr>
                            <td><img src="<?= $imgPath.$product["img"] ?>_small.jpg" alt="" /></td>
                            <td><?= $product["category"] ?></td>
                            <td><?= $product["name"] ?></td>
                            <td><?= $product["price"] ?> €</td>
                            <td>
                                <select name="product-<?= $key ?>" id="cartform">
                                    <?php for($i=0; $i<11; $i++): ?>
                                        <option value="<?= $i ?>" <?php if($i==$_SESSION["cart"]["product-".$product["id"]]){echo "selected";} ?> ><?= $i ?></option>
                                    <?php endfor; ?>
                                </select>
                            </td>
                            <td><?= $product["price"]*$_SESSION["cart"]["product-".$product["id"]] ?> €</td>
                            <!--<td><a href="--><?//= URL::base() ?><!--product/remove_article/--><?//= $product["id"] ?><!--" style="color: red">X</a></td>-->
                        </tr>
                    <?php endforeach; ?>
                    <tr>
                        <td class="white" colspan="4"></td>
                        <td>total HT:</td>
                        <td><?= $totalCart = array_sum($totalPrice); ?> €</td>
                    </tr>
                    <tr>
                        <td class="white" colspan="4"></td>
                        <td>Taxes (20%):</td>
                        <td><?= $TVA = array_sum($totalPrice)*0.2; ?> €</td>
                    </tr>
                    <tr>
                        <td class="white" colspan="4"></td>
                        <td>Delivery:</td>
                        <td><?= $livraison.' €' ?></td>
                    </tr>
                    <tr>
                        <td class="white" colspan="4"></td>
                        <td class="price">TOTAL TTC:</td>
                        <td class="price"><?= number_format($totalCart+$TVA+$livraison, 2, ',', ' ')." €" ?></td>
                    </tr>
                    <tr>
                        <td class="white" colspan="4"></td>
                        <td class="checkout" colspan="2"><input type="submit" value="UPDATE CART"></td>
                    </tr>
                    <tr>
                        <td class="white" colspan="4"></td>
                        <td class="checkout" colspan="2"><a href="<?= URL::site('product/command') ?>">CHECKOUT</a></td>
                    </tr>
                    <tr>
                        <td class="white" colspan="4"></td>
                        <td class="continue" colspan="2"><a href="<?= URL::site('/') ?>">OR CONTINUE MY SHOPPING</a></td>
                    </tr>
                </table>
            </form>



        <?php else : ?>
            <table>
                <tr>
                   <td colspan='5' style='height: 10em;'><a href="<?= URL::site('/') ?>">Your cart is empty.<br />Let's take a look at our products !</a></td>
                </tr>
            </table>
        <?php endif; ?>

    </div>

</div>
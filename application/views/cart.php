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

        <form action="" id >
            <table>
                <tr>
                    <td></td>
                    <td>Category</td>
                    <td>Name</td>
                    <td>Price</td>
                    <td>Quantity</td>
                    <td>Total price</td>
                    <td>Remove</td>
                </tr>
                <?php if(!empty($_SESSION['cart'])): ?>
                    <?php $products = new Model_Product(); ?>
                    <?php $totalPrice=[]; ?>
                    <?php foreach ($_SESSION['cart'] as $key => $value): ?>
                        <?php $key = str_replace("product-", "", $key); ?>
                        <?php $product = $products->getProduct($key); ?>
                        <?php array_push($totalPrice, $product["price"]); ?>
                        <tr>
                            <td><img src="<?= $imgPath.$product["img"] ?>_small.jpg" alt="" /></td>
                            <td><?= $product["category"] ?></td>
                            <td><?= $product["name"] ?></td>
                            <td><?= $product["price"] ?> €</td>
                            <td>quantite</td>
                            <td>prix total</td>
                            <td><a href="<?= URL::base() ?>product/remove_article/<?= $product["id"] ?>" style="color: red">X</a></td>
                        </tr>
                    <?php endforeach; ?>
                        <tr>
                            <td class="white"></td>
                            <td>total HT:</td>
                            <td><?= $totalCart = array_sum($totalPrice); ?> €</td>
                        </tr>
                    <tr>
                        <td class="white"></td>
                        <td>Taxes (20%):</td>
                        <td><?= $TVA = array_sum($totalPrice)*0.2; ?> €</td>
                    </tr>
                    <tr>
                        <td class="white"></td>
                        <td>Delivery:</td>
                        <td><?= $livraison.' €' ?></td>
                    </tr>
                    <tr>
                        <td class="white"></td>
                        <td class="price">TOTAL TTC:</td>
                        <td class="price"><?= $totalCart+$TVA+$livraison." €" ?></td>
                    </tr>
                        <tr>
                            <td class="white"></td>
                            <td class="checkout">$$ CHECKOUT $$</td>
                        </tr>

            </table>

            <table>
                    <tr class="continue">
                        <td colspan="5" class="continue"><a href="<?= URL::site('/') ?>">OR CONTINUE MY SHOPPING</a></td>
                    </tr>

                <?php else : ?>
                    <tr>
                       <td colspan='5' style='height: 10em;'><a href="<?= URL::site('/') ?>">Your cart is empty.<br />Let's take a look at our products !</a></td>
                    </tr>

                <?php endif; ?>
            </table>
        </form>

    </div>

</div>
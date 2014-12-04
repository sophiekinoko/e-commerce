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
        <h2><?= $productId["name"] ?></h2>

        <ul class="product">
            <li><img src="<?= $imgPath.$productId["img"] ?>_medium.jpg" alt="<?= $productId["name"] ?>"/></li>
            <li class="description"><?= str_replace("\r", "<br />", $productId["description"]) ?></li>
            <li class="price"><?= $productId["price"] ?> €</li>
            <li class="cart"><a href="<?= URL::base() ?>product/addtocart/<?= $productId["id"] ?>" >Add to shopping cart</a></li>
        </ul>
    </div>


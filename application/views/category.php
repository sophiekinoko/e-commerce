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
        <h2>Our <?= $id ?></h2>

        <?php foreach ($listOfProducts as $key => $value): ?>
        <ul class="index">
            <li class="category"><?= $value["category"] ?></li>
            <li><a href="<?= URL::base() ?>product/view/<?= $value["id"] ?>" ><?= $value["name"] ?></a></li>
            <li><a href="<?= URL::base() ?>product/view/<?= $value["id"] ?>" ><img src="<?= $imgPath.$value["img"] ?>_small.jpg" alt="<?= $value["name"] ?>"/></a></li>
            <li class="description"><?= str_replace("\r", "<br />", $value["description"]) ?></li>
            <li class="price"><?= $value["price"] ?> €</li>
            <li class="cart"><a href="<?= URL::base() ?>product/addtocart/<?= $value["id"] ?>">Add to shopping cart</a></li>
        </ul>
        <?php endforeach ?>
    </div>


<?php include 'header.php' ?>
<?php include 'nav.php' ?>


    <div class="main">
        <h2><?= $productId["name"] ?></h2>

        <ul class="product">
            <li><img src="<?= $imgPath.$productId["img"] ?>_medium.jpg" alt="<?= $productId["name"] ?>"/></li>
            <li class="description"><?= str_replace("\r", "<br />", $productId["description"]) ?></li>
            <li class="price"><?= $productId["price"] ?> €</li>
            <li class="cart"><a href="<?= URL::base() ?>product/addtocart/<?= $productId["id"] ?>" >Add to shopping cart</a></li>
        </ul>
    </div>

<?php include 'footer.php' ?>
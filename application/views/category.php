<?php include 'header.php' ?>
<?php include 'nav.php' ?>

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


<?php include 'footer.php' ?>
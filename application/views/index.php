<?php include 'header.php' ?>
<?php include 'nav.php' ?>



    <div class="main">

        <h2>Our products</h2>

        <?php if(isset($_SESSION["message"])): ?>
            <div class="error"><?= $_SESSION["message"] ?></div>
            <?php unset ($_SESSION["message"]); ?>
        <?php endif; ?>

        <?php foreach ($listOfProducts as $key => $value): ?>
        <ul class="index">
            <li class="category"><a href="<?= URL::base() ?>welcome/category/<?= $value["category"] ?>" ><?= $value["category"] ?></a></li>
            <li><a href="<?= URL::base() ?>product/view/<?= $value["id"] ?>" ><?= $value["name"] ?></a></li>
            <li><a href="<?= URL::base() ?>product/view/<?= $value["id"] ?>" ><img src="<?= $imgPath.$value["img"] ?>_small.jpg" alt="<?= $value["name"] ?>"/></a></li>
            <li class="description"><?= str_replace("\r", "<br />", $value["description"]) ?></li>
            <li class="price"><?= view_price($value["price"]) ?> €</li>
            <li class="cart"><a href="<?= URL::base() ?>product/addtocart/<?= $value["id"] ?>">Add to shopping cart</a></li>
        </ul>
        <?php endforeach ?>

        <div class="clear">
            <?php if($page != 1): ?>
                 <div class="pagination">
                    <a href="<?= URL::base() ?><?= $page-1; ?>"><< previous products</a>
                 </div>
            <?php endif; ?>
            <?php if($page < $pagination): ?>
                 <div class="pagination">
                     <a href="<?= URL::base() ?><?= $page+1; ?>">next products >></a>
                 </div>
            <?php endif; ?>
        </div>

    </div>

<?php include 'footer.php' ?>
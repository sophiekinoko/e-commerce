<div class="aside">

    <ul>
        <li><h3>My account:</h3></li>
        <?php if(isset($_SESSION["user"])): ?>
            <li><a href="<?= URL::site('user/logout') ?>" >LOGGOUT</a></li>
            <li><a href="<?= URL::site('product/cart') ?>" >$$ MY CART $$</a></li>
        <?php else: ?>
                <li><a href="<?= URL::site('user/register') ?>">REGISTER</a></li>
                <li><a href="<?= URL::site('user/login') ?>">LOGGIN</a></li>
        <?php endif; ?>
        <li><h3>Categories:</h3></li>
        <?php
        $login = new Model_Product();
        $categories = $login->getCategories(); ?>

        <?php foreach ($categories as $key => $value): ?>
        <li>
            <a href="<?= URL::site('welcome/category')."/".$value['category'] ?>" >
                <?= $value['category'] ?>
            </a>
        </li>
        <?php endforeach; ?>
    </ul>
</div>
<?php include 'header.php' ?>
<?php include 'nav.php' ?>


    <div class="main">
        <h2>LOGIN</h2>

        <?php if(isset($error)): ?>
            <div class="error"><?= $error ?></div>
        <?php endif; ?>

        <form action="<?= URL::site('user/login') ?>" method="post">
            <p>Username:<input type="text" name="username" required></p>
            <p>Password:<input type="password" name="password" required></p>
            <input type="submit" name="submit" value="OK"></p>
        </form>
    </div>

<?php include 'footer.php' ?>
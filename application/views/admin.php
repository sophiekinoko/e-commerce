<?php include 'header.php' ?>


    <div class="administration">
        <h2>ADMINISTRATION</h2>

        <?php if(isset($error)): ?>
            <div class="error"><?= $error ?></div>
        <?php endif; ?>

        <form action="<?= URL::site('user/admin') ?>" method="post">
            <p>Loggin:<input type="text" name="username" required></p>
            <p>Password:<input type="password" name="password" required></p>
            <input type="submit" name="submit" value="OK"></p>
        </form>
    </div>

<?php include 'footer.php' ?>
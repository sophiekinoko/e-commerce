<?php include 'header.php' ?>


    <div class="administration">
        <h2>ADMINISTRATION</h2>

        <?php if(isset($error)): ?>
            <div class="error"><?= $error ?></div>
        <?php endif; ?>

        <form action="<?= URL::site('user/admin') ?>" method="post">

            <div>
                <label for="username" class="colonne1">Username:</label>
                <input type="text" name="username" class="colonne2" required>
            </div>

            <div>
                <label for="password" class="colonne1">Password:</label>
                <input type="password" name="password" class="colonne2" required>
            </div>

            <div>
                <div class="colonne1"></div>
                <input type="submit" name="submit" value="OK" class="colonne2">
            </div>

        </form>
    </div>

<?php include 'footer.php' ?>
<?php include 'header.php' ?>
<?php include 'nav.php' ?>


    <div class="main">
        <h2>NEW CUSTOMER?</h2>

        <?php if(isset($error)): ?>
            <div class="error"><?= $error ?></div>
        <?php endif; ?>

        <form action="<?= URL::site('user/register') ?>" method="post">
        <h3>Register:</h3>
            <p>Username:<span class="red"> *</span>
                <input type="text" name="username" value="<?= isset($_POST["username"]) ? $_POST["username"] : '' ?>" required>
            </p>
            <p>Password: (6 characters or more)<span class="red"> *</span>
                <input type="password" name="password" value="<?= isset($_POST["password"]) ? $_POST["password"] : '' ?>" required>
            </p>
            <p>Email:<span class="red"> *</span>
                <input type="text" name="email" value="<?= isset($_POST["email"]) ? $_POST["email"] : '' ?>" required>
            </p>
        <h3>Your identity:</h3>
            <p>First name:<span class="red"> *</span>
                <input type="text" name="firstname" value="<?= isset($_POST["firstname"]) ? $_POST["firstname"] : '' ?>" required>
            </p>
            <p>Last name:<span class="red"> *</span>
                <input type="text" name="lastname" value="<?= isset($_POST["lastname"]) ? $_POST["lastname"] : '' ?>" required>
            </p>
            <p>Adresse:<span class="red"> *</span>
                <input type="text" name="address" value="<?= isset($_POST["address"]) ? $_POST["address"] : '' ?>" required>
            </p>
            <p>Adresse complement:
                <input type="text" name="addresscomplement" value="<?= isset($_POST["addresscomplement"]) ? $_POST["addresscomplement"] : '' ?>">
            </p>
            <p>City:<span class="red"> *</span>
                <input type="text" name="city" required value="<?= isset($_POST["city"]) ? $_POST["city"] : '' ?>">
            </p>
            <p>Zip code:<span class="red"> *</span>
                <input type="text" name="zipcode" required value="<?= isset($_POST["zipcode"]) ? $_POST["zipcode"] : '' ?>">
            </p>
            <p>Country:<span class="red"> *</span>
                <input type="text" name="country" required value="<?= isset($_POST["country"]) ? $_POST["country"] : '' ?>">
            </p>
            <input type="submit" name="submit" value="OK">
        </form>
    </div>

<?php include 'footer.php' ?>
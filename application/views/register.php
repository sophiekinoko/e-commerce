<?php include 'header.php' ?>
<?php include 'nav.php' ?>


    <div class="main">
        <h2>NEW CUSTOMER</h2>

        <?php if(isset($error)): ?>
            <div class="error"><?= $error ?></div>
        <?php endif; ?>

        <form action="<?= URL::site('user/register') ?>" method="post">

        <h3>Register:</h3>

            <div>
                <label for="name" class="colonne1">Username:<span class="red"> *</span></label>
                <input type="text" name="username" class="colonne2" value="<?= isset($_POST["username"]) ? $_POST["username"] : '' ?>" required>
            </div>

            <div>
                <label for="name" class="colonne1">Password:<span class="red"> *</span></label>
                <input type="password" placeholder="6 characters or more" class="colonne2" required>
            </div>

            <div>
                <label for="name" class="colonne1">Email:<span class="red"> *</span></label>
                <input type="text" name="email" class="colonne2" value="<?= isset($_POST["email"]) ? $_POST["email"] : '' ?>" required>
             </div>

        <h3>Your identity:</h3>

            <div>
                <label for="firstname" class="colonne1">First name:<span class="red"> *</span></label>
                <input type="text" name="firstname" class="colonne2" value="<?= isset($_POST["firstname"]) ? $_POST["firstname"] : '' ?>" required>
            </div>

            <div>
                <label for="lastname" class="colonne1">Last name:<span class="red"> *</span></label>
                <input type="text" name="lastname" class="colonne2" value="<?= isset($_POST["lastname"]) ? $_POST["lastname"] : '' ?>" required>
            </div>

            <div>
                <label for="address" class="colonne1">Adresse:<span class="red"> *</span></label>
                <input type="text" name="address" class="colonne2" value="<?= isset($_POST["address"]) ? $_POST["address"] : '' ?>" required>
            </div>

            <div>
                <label for="addresscomplement" class="colonne1">Adresse complement:</label>
                <input type="text" name="addresscomplement" class="colonne2" value="<?= isset($_POST["addresscomplement"]) ? $_POST["addresscomplement"] : '' ?>">
            </div>

            <div>
                <label for="zipcode" class="colonne1">Zip code:<span class="red"> *</span></label>
                <input type="text" name="zipcode" class="colonne2" required value="<?= isset($_POST["zipcode"]) ? $_POST["zipcode"] : '' ?>">
            </div>

            <div>
                <label for="city" class="colonne1">City:<span class="red"> *</span></label>
                <input type="text" name="city" required class="colonne2" value="<?= isset($_POST["city"]) ? $_POST["city"] : '' ?>">
            </div>

            <div>
                <label for="country" class="colonne1">Country:<span class="red"> *</span></label>
                <input type="text" name="country" class="colonne2" required value="<?= isset($_POST["country"]) ? $_POST["country"] : '' ?>">
            </div>

            <div>
                <div class="colonne1"></div>
                <input type="submit" name="submit" value="OK" class="colonne2">
            </div>

        </form>
    </div>

<?php include 'footer.php' ?>
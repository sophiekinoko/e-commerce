<?php include 'header.php' ?>
<?php include 'nav.php' ?>


    <div class="main">
        <h2>DELIVERY ADDRESS</h2>

        <?php if(isset($error)): ?>
            <div class="error"><?= $error ?></div>
        <?php endif; ?>

        <h3>Select your delivery address:</h3>
            <form action="<?= URL::site('product/command') ?>" method="post">
                    <?php $temp = true; ?>
                    <?php foreach ($addresses as $key => $value): ?>
                        <div class="address">
                            <input type="radio" name="address" value="<?= $value['id'] ?> "
                            <?php if($temp == true)
                            {
                                echo "checked";
                                $temp=false;
                            }
                            ?>
                            />
                                <?= $value["first_name"]." ".strtoupper($value["last_name"]) ?><br/>
                                <?= $value["address"] ?><br/>
                                <?php if($value["address_complement"] != null)
                                { echo $value["address_complement"]."<br/>"; } ?>
                                <?= $value["zipcode"] ?><br/>
                                <?= strtoupper($value["city"]) ?><br/>
                                <?= strtoupper($value["country"]) ?>
                        </div>
                    <?php endforeach ?>
                    <input type="submit" name="submit" value="SELECT">
            </form>

        <h3>Or create a new one:</h3>
        <form action="<?= URL::site('user/address') ?>" method="post">
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
                <input type="submit" name="submit" value="CREATE ADDRESS" class="colonne2">
            </div>

        </form>
    </div>

<?php include 'footer.php' ?>

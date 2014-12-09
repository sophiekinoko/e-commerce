<?php include 'header.php' ?>
<?php include 'nav.php' ?>


    <div class="main">
        <h2>CHECK YOUR DELIVERY ADDRESS</h2>

        <?php if(isset($error)): ?>
            <div class="error"><?= $error ?></div>
        <?php endif; ?>

        <h3>Select your delivery address:</h3>
        <form action="<?= URL::site('product/command') ?>" method="post">
            <ul>
                <?php $temp = true; ?>
                <?php foreach ($addresses as $key => $value): ?>
                    <li>
                        <input type="radio" name="address" value="<?= $value['id'] ?>"
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
                    </li>
                <?php endforeach ?>
                <li>
                    <input type="submit" value="SELECT"/>
                </li>
            </ul>
        </form>


        <h3>Or create a new one:</h3>
        <form action="<?= URL::site('user/address') ?>" method="post">
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
            <input type="submit" name="submit" value="CREATE ADDRESS">
        </form>
    </div>

<?php include 'footer.php' ?>

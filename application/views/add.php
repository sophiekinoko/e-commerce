<?php include 'header.php' ?>
<?php include 'nav.php' ?>


    <div class="main">
        <h2>ADD A PRODUCT</h2>

        <form action="<?= URL::site('product/add') ?>" method="post">

            <p>Product name:<input type="text" name="name" required></p>

            <p>Description:<TEXTAREA name="description" rows=10 required></TEXTAREA></p>

            <p>Price:<input type="text" name="price" required></p>

            <p>Category:<br>
                <select name="category" required>
                    <?php foreach($categories as $key=> $value): ?>
                        <option value="<?= $value["category"] ?>">
                            <?= $value["category"] ?>
                        </option>
                    <?php endforeach ?>
                </select>
            </p>

            <p>N° of pict (2 figures, no extention):
                <input type="text" name="img" required></p>

            <p>Visible:<br>
                <select name="visible" required>
                    <option value="1"> yes </option>
                    <option value="0"> no</option>
                </select>
            </p>

            <input type="submit" name="submit" value="OK"></p>

        </form>
    </div>

<?php include 'footer.php' ?>

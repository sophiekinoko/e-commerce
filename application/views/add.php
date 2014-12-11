<?php include 'header.php' ?>
<?php include 'nav.php' ?>


    <div class="main">
        <h2>ADD A PRODUCT</h2>

        <form action="<?= URL::site('product/add') ?>" method="post">

            <div>
                <label for="name" class="colonne1">Product name:</label>
                <input type="text" name="name" required class="colonne2">
            </div>

            <div>
                <label for="description" class="colonne1">Description:</label>
                <TEXTAREA name="description" rows=10 required class="colonne2"></TEXTAREA>
            </div>

            <div>
                <label for="price" class="colonne1">Price:</label>
                <input type="text" name="price" required class="colonne2">
            </div>

            <div>
                <label for="category" class="colonne1">Category:</label>
                <select name="category" required class="colonne2">
                    <?php foreach($categories as $key=> $value): ?>
                        <option value="<?= $value["category"] ?>">
                            <?= $value["category"] ?>
                        </option>
                    <?php endforeach ?>
                </select>
            </div>

            <div>
                <label for="img" class="colonne1">N° of pict:</label>
                <input type="text" name="img" placeholder="2 figures / no extention" required class="colonne2">
            </div>

            <div>
                <label for="category" class="colonne1">Visible:</label>
                <select name="visible" required class="colonne2">
                    <option value="1"> yes </option>
                    <option value="0"> no</option>
                </select>
            </div>

            <div>
                <div class="colonne1"></div>
                <input type="submit" name="submit" value="OK" class="colonne2">
            </div>

        </form>
    </div>

<?php include 'footer.php' ?>

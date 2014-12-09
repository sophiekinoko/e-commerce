<?php include 'header.php' ?>


    <div class="administration">
        <h2>ADMINISTRATION</h2>

        <?php if(isset($message)): ?>
            <div class="error"><?= $message ?></div>
        <?php endif; ?>

        <div class="add"><a href="<?= URL::base() ?>product/add">ADD PRODUCT >></a></div>

        <table>
            <tr>
                <td>ID</td>
                <td>Picture</td>
                <td>Category</td>
                <td>Name</td>
                <td>Price</td>
                <td>Remove</td>
            </tr>
            <?php foreach ($products as $key => $value): ?>
                <tr>
                    <td><?= $products[$key]["id"] ?></td>
                    <td><img src="<?= $imgPath.$products[$key]["img"] ?>_small.jpg" alt="" /></td>
                    <td><?= $products[$key]["category"] ?></td>
                    <td><?= $products[$key]["name"] ?></td>
                    <td><?= $products[$key]["price"] ?> €</td>
                    <td><a href="<?= URL::base() ?>product/toggle/<?= $products[$key]["id"] ?>" style="color:red">X</a></td>
                </tr>
            <?php endforeach; ?>
        </table>
    </div>

<?php include 'footer.php' ?>
<?php include 'header.php' ?>


    <div class="administration">
        <h2>ADMINISTRATION</h2>

        <?php if(isset($_SESSION["message"])): ?>
            <div class="error"><?= $message ?></div>
            <?php unset ($_SESSION["message"]); ?>
        <?php endif; ?>

        <div class="add"><a href="<?= URL::base() ?>product/add">ADD A PRODUCT >></a></div>

        <table>
            <tr>
                <td>ID</td>
                <td>Picture</td>
                <td>Category</td>
                <td>Name</td>
                <td>Price</td>
                <td>Visibility</td>
            </tr>
            <?php foreach ($products as $key => $value): ?>
                <tr>
                    <td><?= $products[$key]["id"] ?></td>
                    <td><img src="<?= $imgPath.$products[$key]["img"] ?>_small.jpg" alt="" /></td>
                    <td><?= $products[$key]["category"] ?></td>
                    <td><?= $products[$key]["name"] ?></td>
                    <td><?= $products[$key]["price"] ?> €</td>
                    <?php if($products[$key]["visible"]==1)
                    {
                        $visible = "YES";
                    }
                    else{
                        $visible = "NO";
                    } ?>
                    <td><a href="<?= URL::base() ?>product/toggle/<?= $products[$key]["id"] ?>" style="color:red"><?= $visible ?></a></td>
                </tr>
            <?php endforeach; ?>
        </table>
    </div>

<?php include 'footer.php' ?>
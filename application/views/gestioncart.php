<?php include 'header.php' ?>
<?php include 'nav.php' ?>

    <div class="main">
        <h2>My cart</h2>

            <table>
                <tr>
                    <td>ID</td>
                    <td>Quantity</td>
                    <td>Gestion</td>
                </tr>
                <?php foreach ($_SESSION['cart'] as $id => $quantity): ?>
                    <tr>
                        <td><?= $id ?></td>
<!--                        //on donne un nom de classe unique suivant l'id pour pouvoir cnger le contenu_-->
                        <td class="quantity<?= $id ?>"><?= $quantity ?></td>
                        <td><button class="plus" product="<?= $id ?>">+</button>
                            <button class="moins" product="<?= $id ?>">-</button>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </table>
    </div>




<script>
    //quand on clique sur le bouton
    $('.plus').click(function()
        {
            //on va chercher l'id qui est contenu dans l'attribut
            var id = $(this).attr("product");
            //on va chercher l'objet ajax crée dans Ajaxcart
            $.ajax({url:"add/"+id}).done(function(data){
                //on transforme l'objet récupéré en tableau
                var data = JSON.parse(data);
                //et on change le contenu de la balise $('.quantity'+id) avec le contenu du tablreau
                $('.quantity'+id).text(data["quantity"]);
            });
        }
    )

    $('.moins').click(function()
        {
            var id = $(this).attr("product");
            $.ajax({url:"sub/"+id}).done(function(data){
                var data = JSON.parse(data);
                $('.quantity'+id).text(data["quantity"]);
            });
        }
    )
</script>

<?php include 'footer.php' ?>

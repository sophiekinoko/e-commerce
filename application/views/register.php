<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>ecommerce</title>
    <link rel="stylesheet" href="<?= URL::base() ?>/assets/css/normalize.css">
    <link rel="stylesheet" href="<?= URL::base() ?>/assets/css/styles.css">
    <link href='http://fonts.googleapis.com/css?family=Lato:400,900' rel='stylesheet' type='text/css'>
</head>
<body>

<div class="wrap clearfix">

    <h1><a href="<?= URL::site('/') ?>">My Shop</a></h1>

    <div class="aside">
        <?php include 'nav.php' ?>
    </div>

    <div class="main">
        <h2>REGISTER</h2>
        <form action="<?= URL::site('user/register') ?>" method="post">
            <p>Username:
            <input type="text" name="username" value="<?= isset($post['username'])? $post['username']:'' ?>"></p>
            <p>Password:
            <input type="password" name="password" value="<?= isset($post['password'])? $post['password']:'' ?>"></p>
            <p>Email:
            <input type="text" name="email" value="<?= isset($post['email'])? $post['email']:'' ?>"></p>
            <input type="submit" name="submit" value="OK">
        </form>
    </div>



</div>
</body>
</html>
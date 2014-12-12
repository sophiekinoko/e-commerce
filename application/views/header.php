<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>ecommerce</title>
    <link rel="stylesheet" href="<?= URL::base() ?>/assets/css/normalize.css">
    <link rel="stylesheet" href="<?= URL::base() ?>/assets/css/styles.css">
    <link href='http://fonts.googleapis.com/css?family=Lato:400,900' rel='stylesheet' type='text/css'>
    <script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
</head>
<body>



<div class="wrap">

    <?php if(isset($_SESSION["user"]) && $_SESSION["user"]["administration"] == true): ?>
        <div class="admin"><a href="<?= URL::site('product/administration') ?>">ADMINISTRATION</a></div>
    <?php endif; ?>

    <h1><a href="<?= URL::site('/') ?>">My Shop</a></h1>


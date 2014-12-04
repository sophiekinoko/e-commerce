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
        <h2>My command</h2>

        <p>Your command is in process.</p>
        <img src="<?= URL::base() ?>/assets/img/thanks.gif" alt="thanks"/>
        <p>Thanks a lot.</p>
        <?= var_dump($_SESSION); ?>
    </div>

</div>
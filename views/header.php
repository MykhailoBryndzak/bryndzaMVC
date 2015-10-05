<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Test</title>
    <link rel="stylesheet" href="<?php echo URL; ?> public/css/default.css">
    <link rel="stylesheet" href="public/css/default.css">
    <script src="public/js/jquery.js"></script>
    <script src="public/js/custom.js"></script>


</head>

<body>
<?php Session::init(); ?>
<div id="header">
    <?php if(Session::get('loggedIn') == false): ?>
        <a href="<?php echo URL; ?>">Головна</a>
        <a href="<?php echo URL; ?>help">Допомога</a>
    <?php endif; ?>
    <?php if(Session::get('loggedIn') == true): ?>
        <a href="<?php echo URL; ?>dashboard">Панель керуваання</a>
    <?php if(Session::get('role') == 'owner'): ?>
        <a href="<?php URL;  ?>user">Користувачі</a>
    <?php endif; ?>
        <a href="<?php echo URL; ?>dashboard/logout">Вихід</a>
    <?php else: ?>
        <a href="<?php echo URL; ?>login/index">Вхід</a>
    <?php endif; ?>

</div>
<div id="content"></div>
</body>
</html>
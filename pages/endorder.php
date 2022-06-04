<?php
header('Content-Type: text/html; charset=utf-8');
session_start();
include '../assets/php/config.php';
include '../assets/php/makeorder.php';
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,400;0,600;1,400&family=Spectral+SC:wght@300;400&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../assets/css/style.css?v=<?= time(); ?>" />
    <link rel="stylesheet" href="../assets/css/orderstyle.css?v=<?= time(); ?>" />
    <script src="../assets/js/makeorder.js?v=<?= time(); ?>"></script>
    <!--[if lt IE 9]>
    <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
    <title>Торт</title>
</head>
<body>
<?php include('../tpl/header.php');?>
<main>
    <div class="container">
        <?php if(isset($_SESSION['user'])){?>
            <div style="text-align: center; margin-top:10vmin; font-size: 3vmin"> Заказ успешно оформлен<br>Вы можете увидеть его в своем <a href="profile.php">профиле</a></div>
        <?php } else{?>
            <div style="text-align: center; font-size: 2.4vmin;margin-top: 20vmin;">ЧТОБЫ ОФОРМИТЬ ЗАКАЗ, НЕОБХОДИМО
                <button class="regbut" onclick="login()"><a>авторизоваться</a></button>
                <div class="hide" id="hide"></div>
                <div class="window" id="window"><?php include('../assets/php/register.php'); include('../tpl/auth.php');?></div>
                <div class="window" id="window2"><?php include('../assets/php/register.php'); include('../tpl/reg.php');?></div>
            </div>
        <?php }?>
    </div>
</main>
<?php include('../tpl/footer.php');?>
</body>
</html>

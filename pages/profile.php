<?php
header('Content-Type: text/html; charset=utf-8');
session_start();
include '../assets/php/config.php';
$name = "";
$phone = "";
include '../assets/php/prof.php';
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,400;0,600;1,400&family=Spectral+SC:wght@300;400&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../assets/css/style.css?v=<?= time(); ?>" />
    <link rel="stylesheet" href="../assets/css/profstyle.css?v=<?= time(); ?>" />
    <!--[if lt IE 9]>
    <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
    <title>Профиль</title>
</head>
<body>
<?php include('../tpl/header.php');?>
<main>
    <div class="container">
        <?php if(isset($_SESSION['user'])){?>
        <h1>ЛИЧНЫЙ КАБИНЕТ</h1>
        <div class="wins">
            <div style="flex-grow: 1;">
        <div class="contacts">
        <h3>Контактные данные</h3>
        Имя: <?=$name?><br>
        Почта: <?=$_SESSION['user']?><br>
        Телефон: <?=$phone?><br>
        </div>
        <form name="profile" action="#" method="post">
            <label>
                <button class="btn" type="submit" name="out" value="Выйти">Выйти <img src="../assets/img/out.png" alt="" style="width:3vmin; display: inline-block;" /></button>
            </label>
            <label>
                <button class="btn" type="submit" name="red" value="Редактировать">Редактировать <img src="../assets/img/red.png" alt="" style="width:3vmin; display: inline-block;" /></button>
            </label>
        </form>
        </div>
            <div style="flex-grow: 3;">
         <div class="orders">
             <h3>Заказы</h3>
             <?php include '../assets/php/displayord.php'?>
         </div>
        </div>
            </div>
        <?php } else{?>
        <div style="text-align: center; font-size: 2.4vmin;margin-top: 20vmin;">НЕОБХОДИМО
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

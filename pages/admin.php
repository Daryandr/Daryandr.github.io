<?php
header('Content-Type: text/html; charset=utf-8');
session_start();
include '../assets/php/config.php';
$f = false;
include '../assets/php/adm.php';
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
    <title>Админ</title>
</head>
<body>
<?php include('../tpl/header.php');?>
<main>
    <div class="container">
        <?php if(!isset($_SESSION['user']) or !isset($_SESSION['admin'])){?>
        <div style="text-align: center; font-size: 2.4vmin;margin-top: 20vmin;">
            НЕОБХОДИМО БЫТЬ АДМИНИСТРАТОРОМ ДЛЯ ПРОСМОТРА СТРАНИЦЫ
        </div>
        <?php } else{?>
            <form name="adminform" action="#" method="post" class="adminform">
                <h2>Удаление пользователя</h2>
                <label>Email пользователя:
                    <input type="text" name="userem" value="" required>
                </label>
                <label>
                    <input class="btn" type="submit" name="deluser" value="Удалить"/>
                </label><br>
            </form>
            <form name="adminform2" action="#" method="post" class="adminform">
                <h2>Добавление пользователя</h2>
                <label>
                    E&#8211mail &nbsp&nbsp&nbsp&nbsp<input type="email" name="login" value="" required>
                </label><br><br>
                <label>
                    Пароль&nbsp&nbsp <input type="password" name="pass" minlength="6" value="" required>
                </label><br><br>
                <label>
                    Имя &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<input type="text" name="username" value="" required>
                </label><br><br>
                <label>
                    Телефон <input type="number" name="phone" placeholder="79999999999" max="99999999999" min="10000000000" value="" required>
                </label><br>
                <div style="margin-top: 2vmin">
                <label>
                   <input type="radio" name="type" required="required" value="1" checked/> Покупатель
                </label>
                <label>
                    <input type="radio" name="type" required="required" value="2"/> Админ
                </label><br></div>
                <label id="found" style="font-size: 2.2vmin; color:red; margin-bottom: 1vmin; display: none">Данный пользователь уже существует</label><br>
                <?php if($f) echo"<script>document.getElementById('found').style.display = 'block';</script>";?>
                <label>
                    <input class="btn" type="submit" name="adduser" value="Добавить"/>
                </label><br>
            </form><br>
            <a href="stat.php" class="btn" style="text-decoration: none">Статистика</a>
        <form name="outform" action="#" method="post" class="adminform" style="margin-top: 2vmin">
            <label>
                <button class="authbut" type="submit" name="out" value="Выйти">Выйти <img src="../assets/img/out.png" alt="" style="width:3vmin; display: inline-block;" /></button>
            </label>
        </form>
            <h1>Заказы</h1>
            <div class="orders">
            <?php include '../assets/php/admorders.php'?>
            </div>
        <?php }?>
    </div>
</main>
<?php include('../tpl/footer.php');?>
</body>
</html>
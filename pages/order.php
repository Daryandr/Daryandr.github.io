<?php
header('Content-Type: text/html; charset=utf-8');
session_start();
include '../assets/php/config.php';
include '../assets/php/makeorder.php';
$cat = 0;
$pick = 0;
if(isset($_COOKIE['category']) and isset($_COOKIE['delivery'])){
    $cat = $_COOKIE['category'];
    $pick = $_COOKIE['delivery'];
}
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
    <title>Сделать заказ</title>
</head>
<body>
<?php include('../tpl/header.php');?>
<main>
    <div class="container">
        <?php if(isset($_SESSION['user'])){?>
        <form name="order" action="#" method="post" class="makeorder">
            <h2>Что вы хотите заказать?</h2>
            <div class="q1">
            <div class="orderrad">
            <input id="rad1" type="radio" name="category" required="required" value="1" <?php if ($cat==1 or $cat==0) echo 'checked';?>/>
            <label for="rad1">Торт</label><br>
            </div>
            <div class="orderrad">
            <input id="rad2" type="radio" name="category" required="required" value="2" <?php if ($cat==2) echo 'checked';?>/>
                <label for="rad2">Муссовый торт</label><br>
            </div>
            <div class="orderrad">
            <input id="rad3" type="radio" name="category" required="required" value="3" <?php if ($cat==3) echo 'checked';?>/>
                <label for="rad3">Капкейки</label><br>
            </div>
            <div class="orderrad">
            <input id="rad4" type="radio" name="category" required="required" value="4" <?php if ($cat==4) echo 'checked';?>/>
                <label for="rad4">Чизкейк</label><br>
            </div>
            <div class="orderrad">
            <input id="rad5" type="radio" name="category" required="required" value="5" <?php if ($cat==5) echo 'checked';?>/>
                <label for="rad5">Зефир</label><br>
            </div>
            <div class="orderrad">
            <input id="rad6" type="radio" name="category" required="required" value="6" <?php if ($cat==6) echo 'checked';?>/>
                <label for="rad6">Другое</label><br>
            </div>
            </div>
            <h2>Когда вы хотите получить заказ?</h2>
            <label>
                <input class="datetime" type="datetime-local" name="date" value="<?php if (isset($_COOKIE['date'])) echo $_COOKIE['date'];?>" max="<?=date("Y-m-d",mktime(0, 0, 0, date("m"),   date("d"),   date("Y")+1))."T00:00"?>" min="<?=date("Y-m-d")."T00:00"?>" required/>
            </label><br>
            <h2>Способ доставки:</h2>
            <div class="orderrad">
                <input id="del1" type="radio" name="delivery" required="required" value="1" onchange="check()" <?php if ($pick==0 or $pick==1) echo 'checked';?>/>
                <label for="del1">Самовывоз</label><br>
            </div>
            <div class="orderrad">
                <input id="del2" type="radio" name="delivery" required="required" value="2" onchange="check()" <?php if ($pick==2) echo 'checked';?>/>
                <label for="del2">Доставка</label><br>
            </div>
            <div id="pickup">Адрес: ул.Коммунистическая д.70</div>
            <div id="address">
                <label for="add">Адрес: </label><br>
                <input type="text" id="add" name="address" value="<?php if (isset($_COOKIE['address'])) echo $_COOKIE['address'];?>">
            </div>
            <script>check()</script>
            <label>
                <input style="margin-top: 3vmin" type="submit" name="next1" value="Далее" class="authbut"/>
            </label>
        </form>
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

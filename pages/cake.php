<?php
header('Content-Type: text/html; charset=utf-8');
session_start();
include '../assets/php/config.php';
include '../assets/php/makeorder.php';
$tiers = 0;
$form = 0;
$b = 0;
$c= 0;
$f = 0;
if(isset($_COOKIE['tiers']) and isset($_COOKIE['form']) and isset($_COOKIE['bisquit']) and isset($_COOKIE['cream']) and isset($_COOKIE['filling'])){
    $tiers = $_COOKIE['tiers'];
    $form = $_COOKIE['form'];
    $b= $_COOKIE['bisquit'];
    $c = $_COOKIE['cream'];
    $f = $_COOKIE['filling'];
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
    <title>Торт</title>
</head>
<body>
<?php include('../tpl/header.php');?>
<main>
    <div class="container">
        <?php if(isset($_SESSION['user'])){?>
            <form name="ordercake" action="#" method="post" class="makeorder">
                <h2>Количество ярусов</h2>
                <div class="q2">
                    <div class="orderrad">
                        <input id="tr1" type="radio" name="tiers" required="required" value="1" <?php if ($tiers==1 or $tiers==0) echo 'checked';?>/>
                        <label for="tr1" style="height: 17vmin;padding-top: 3vmin;"><img src="../assets/img/t1.jpg" alt="" style="width:12vmin;" />Один</label><br>
                    </div>
                    <div class="orderrad">
                        <input id="tr2" type="radio" name="tiers" required="required" value="2" <?php if ($tiers==2) echo 'checked';?>/>
                        <label for="tr2" style="height: 19vmin;padding-top: 1vmin;"><img src="../assets/img/t2.jpg" alt="" style="width:12vmin;" />Два</label><br>
                    </div>
                    <div class="orderrad">
                        <input id="tr3" type="radio" name="tiers" required="required" value="3" <?php if ($tiers==3) echo 'checked';?>/>
                        <label for="tr3" style="height: 20vmin;"><img src="../assets/img/t3.jpg" alt="" style="width:12vmin;" />Три</label><br>
                    </div>
                </div>
                <h2>Вес</h2>
                <label>
                <input type="range" step="0.5" min="2.5" max="15" value="<?php if (isset($_COOKIE['weight'])) echo $_COOKIE['weight']; else echo '2.5';?>" class="weightrange" name="weight" id="weight" oninput="slide()" required>
                </label>
                <p class="numw"><span id="weightnum"></span> кг</p>
                <p style="font-size: 2.6vmin"><span id="portion"></span> порций</p>
                <script>slide()</script>
                <h2>Форма</h2>
                <div class="q2">
                    <div class="orderrad">
                        <input id="fr1" type="radio" name="form" required="required" value="1" <?php if ($form==1 or $form==0) echo 'checked';?>/>
                        <label for="fr1" style="height: 18vmin;padding-top: 2vmin;"><img src="../assets/img/f1.png" alt="" style="width:12vmin;" />Круг</label><br>
                    </div>
                    <div class="orderrad">
                        <input id="fr2" type="radio" name="form" required="required" value="2" <?php if ($form==2) echo 'checked';?>/>
                        <label for="fr2" style="height: 18vmin;padding-top: 2vmin;"><img src="../assets/img/f2.png" alt="" style="width:12vmin;" />Квадрат</label><br>
                    </div>
                    <div class="orderrad">
                        <input id="fr3" type="radio" name="form" required="required" value="3" <?php if ($form==3) echo 'checked';?>/>
                        <label for="fr3" style="height: 18vmin;padding-top: 2vmin;"><img src="../assets/img/f3.png" alt="" style="width:12vmin;" />Другая</label><br>
                    </div>
                </div>
                <h2>Состав</h2>
                <div style="display: flex; justify-content: center;">
                <label style="font-size: 3vmin;font-weight: bold;margin-right: 5vmin;">
                Бисквит:<br>
                <select name="bisquit" class="sel" required>
                    <option value="1" <?php if ($b==1 or $b==0) echo 'selected';?>>Ванильный</option>
                    <option value="2" <?php if ($b==2) echo 'selected';?>>Шоколадный</option>
                    <option value="3" <?php if ($b==3) echo 'selected';?>>Красный бархат</option>
                    <option value="4" <?php if ($b==4) echo 'selected';?>>Маковый</option>
                    <option value="5" <?php if ($b==5) echo 'selected';?>>Морковный</option>
                    <option value="6" <?php if ($b==6) echo 'selected';?>>Фруктовый</option>
                    <option value="7" <?php if ($b==7) echo 'selected';?>>Медовый</option>
                    <option value="8" <?php if ($b==8) echo 'selected';?>>Фисташковый</option>
                </select>
                </label>
                <label style="font-size: 3vmin;font-weight: bold;margin-right: 5vmin;">
                    Крем:<br>
                    <select name="cream" class="sel" required>
                        <option value="1" <?php if ($c==1 or $c==0) echo 'selected';?>>Крем-чиз</option>
                        <option value="2" <?php if ($c==2) echo 'selected';?>>Шоколадный</option>
                        <option value="3" <?php if ($c==3) echo 'selected';?>>Пломбир</option>
                        <option value="4" <?php if ($c==4) echo 'selected';?>>Йогуртовый</option>
                        <option value="5" <?php if ($c==5) echo 'selected';?>>Сметанный</option>
                        <option value="6" <?php if ($c==6) echo 'selected';?>>Творожный</option>
                        <option value="7" <?php if ($c==7) echo 'selected';?>>Ганаш</option>
                    </select>
                </label>
                    <label style="font-size: 3vmin;font-weight: bold;margin-right: 5vmin;">
                        Начинка:<br>
                        <select name="filling" class="sel" required>
                            <option value="1" <?php if ($f==1 or $f==0) echo 'selected';?>>Ягодная</option>
                            <option value="2" <?php if ($f==2) echo 'selected';?>>Фруктовая</option>
                            <option value="3" <?php if ($f==3) echo 'selected';?>>Карамельная</option>
                            <option value="4" <?php if ($f==4) echo 'selected';?>>Ореховая</option>
                            <option value="5" <?php if ($f==5) echo 'selected';?>>Шоколадная</option>
                            <option value="6" <?php if ($f==6) echo 'selected';?>>Суфле</option>
                        </select>
                    </label>
                </div>
                <h2>Декор</h2>
                <div style="display: flex;justify-content: center">
                <div class="decor">
                    <input onchange="decortext()" type="checkbox" id="d1" name="berries" value="1" <?php if (isset($_COOKIE['berries']) and $_COOKIE['berries']==1) echo 'checked';?>/>
                    <label for="d1">Ягоды</label>
                    <input onchange="decortext()" type="checkbox" id="d2" name="gingerbread" value="1" <?php if (isset($_COOKIE['gingerbread']) and $_COOKIE['gingerbread']==1) echo 'checked';?>/>
                    <label for="d2">Пряники</label>
                    <input type="checkbox" id="d3" name="photo" value="1" <?php if (isset($_COOKIE['photo']) and $_COOKIE['photo']==1) echo 'checked';?>/>
                    <label for="d3">Фотопечать</label>
                    <input type="checkbox" id="d4" name="candies" value="1" <?php if (isset($_COOKIE['candies']) and $_COOKIE['candies']==1) echo 'checked';?>/>
                    <label for="d4">Конфеты</label>
                </div></div>
                <div class="dtext">
                    <label id="lber">Какие ягоды?
                <input type="text" id ="tb" name="textberries" value="<?php if (isset($_COOKIE['textber'])) echo $_COOKIE['textber'];?>"></label><br><br>
                    <label id="lgin">Сколько пряников?
                <input type="number" id ="gn" style="width: 16.5vmin" name="gingnum" value="<?php if (isset($_COOKIE['gingnum'])) echo $_COOKIE['gingnum'];?>"></label></div><br><br>
                <script>decortext()</script>
                <label style="margin-right: 5vmin">
                    <input style="margin-top: 3vmin" type="submit" name="back2" value="Назад" class="authbut"/>
                </label>
                <label>
                    <input style="margin-top: 3vmin" type="submit" name="next2" value="Далее" class="authbut"/>
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

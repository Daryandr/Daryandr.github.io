<?php
if(isset($_REQUEST['next1'])){
    $cat = $_REQUEST['category'];
    $date = $_REQUEST['date'];
    $del = $_REQUEST['delivery'];
    $add = $_REQUEST['address'];
    setcookie("category", $cat , 0, "/");
    setcookie("date", $date, 0, "/");
    setcookie("delivery", $del , 0, "/");
    setcookie("address", $add , 0, "/");
    switch ($cat) {
        case 1:
            header('Location:cake.php');
            break;
        case 2:
            header('Location:../index.php');
            break;
        case 3:
            header('Location:../index.php');
            break;
        case 4:
            header('Location:../index.php');
            break;
        case 5:
            header('Location:../index.php');
            break;
        case 6:
            header('Location:../index.php');
            break;
    }
}
if(isset($_REQUEST['next2'])){
    $tiers = $_REQUEST['tiers'];
    $weight = $_REQUEST['weight'];
    $form = $_REQUEST['form'];
    $bis = $_REQUEST['bisquit'];
    $cream = $_REQUEST['cream'];
    $f1 = $_REQUEST['filling'];
    if (isset($_REQUEST['berries'])) $ber = 1; else $ber = 0;
    if (isset($_REQUEST['gingerbread'])) $gin = 1; else $gin = 0;
    if (isset($_REQUEST['photo'])) $photo = 1; else $photo = 0;
    if (isset($_REQUEST['candies'])) $candies = 1; else $candies = 0;
    $tb = $_REQUEST['textberries'];
    $gn = $_REQUEST['gingnum'];
    setcookie("tiers", $tiers , 0, "/");
    setcookie("weight", $weight, 0, "/");
    setcookie("form", $form , 0, "/");
    setcookie("bisquit", $bis , 0, "/");
    setcookie("cream", $cream , 0, "/");
    setcookie("filling", $f1 , 0, "/");
    setcookie("berries", $ber , 0, "/");
    setcookie("gingerbread", $gin , 0, "/");
    setcookie("photo", $photo , 0, "/");
    setcookie("candies", $candies , 0, "/");
    setcookie("textber", $tb , 0, "/");
    setcookie("gingnum", $gn , 0, "/");
    header('Location:finorder.php');
}
if(isset($_REQUEST['back2'])){
    header('Location:order.php');
}
if(isset($_REQUEST['next3'])){
    $user = $_SESSION['user'];
    $d=$_COOKIE['date'];
    $deldate=substr($d,0,strpos($d,'T'));
    $deltime=substr($d,strpos($d,'T')+1,5).":00";
    if($_COOKIE['delivery']==1) $del = "Самовывоз (Коммунистическая д.70)";
    else $del = $_COOKIE['address'];
    $desc = $_REQUEST['description'];
    $quant = $_REQUEST['quantity'];
    $bis = $_COOKIE['bisquit'];
    $cr = $_COOKIE['cream'];
    $fil = $_COOKIE['filling'];
    $weight = $_COOKIE['weight'];
    $tiers = $_COOKIE['tiers'];
    $form = $_COOKIE['form'];
    if($_COOKIE['berries']==1) $ber = $_COOKIE['textber'];
    else $ber = "нет";
    if($_COOKIE['gingerbread']==1)$gin = $_COOKIE['gingnum'];
    else $gin = 0;
    $photo = $_COOKIE['photo'];
    $cand = $_COOKIE['candies'];
    $cat = $_COOKIE['category'];
    $sqlproc="CALL add_order('$user','$deldate','$deltime','$del','$desc','$quant','$bis','$cr','$fil','$weight','$tiers','$form','$ber','$gin','$photo','$cand','$cat')";
    $proc = mysqli_query($con,$sqlproc);
    header('Location:endorder.php');
}
if(isset($_REQUEST['back3'])){
    header('Location:cake.php');
}

<?php
$user="root";
$password="vertrigo";
$db="cakesdb";
//$user = "daryandr_cakesdb";
//$password = "_Daryandr9";
//$db = "daryandr_cakesdb";
$pdo = new PDO("mysql:host=localhost;dbname=$db", $user, $password);
if(isset($_REQUEST['out'])){
    session_destroy();
    header("Refresh:0; url=../index.php");
}
if(isset($_REQUEST['deluser'])){
    $login = $_REQUEST['userem'];
    $stmt = $pdo->query("CALL del_user('$login')");
}

if(isset($_REQUEST['adduser'])){
    $login = $_REQUEST['login'];
    $pass = $_REQUEST['pass'];
    $name =$_REQUEST['username'];
    $phone = $_REQUEST['phone'];
    $t = $_REQUEST['type'];
    $sql="SELECT is_authed('$login','$phone')";
    $query = $pdo->query($sql);
    $k = $query->fetchColumn();
    if($k==0){
        if($t==1)
        $sqlproc="CALL add_buyer('$login','$pass','$phone','$name')";
        else $sqlproc="CALL add_admin('$login','$pass','$phone','$name')";
        $proc = $pdo->query($sqlproc);
    }
    else{
        $f = true;
    }
}
<?php
if(isset($_REQUEST['authbut'])){
    $login = $_REQUEST['login'];
    $pass = $_REQUEST['pass'];
    $sql="SELECT is_user('$login','$pass')";
    $query = mysqli_query($con,$sql);
    $k = mysqli_fetch_array($query);
    if($k[0]==0){
        echo"<script>authfound()</script>";
    }
    else{
        $sqla="SELECT is_admin('$login')";
        $querya = mysqli_query($con,$sqla);
        $ka = mysqli_fetch_array($querya);
        if($ka[0]!=0) $_SESSION['admin'] = $login;
        $_SESSION['user'] = $login;
        echo"<script>window.location.reload()</script>";
    }
}
?>
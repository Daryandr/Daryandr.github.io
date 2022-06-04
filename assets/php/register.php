<?php
if(isset($_REQUEST['register'])){
    $login = $_REQUEST['login'];
    $pass = $_REQUEST['pass'];
    $name =$_REQUEST['username'];
    $phone = $_REQUEST['phone'];
    $sql="SELECT is_authed('$login','$phone')";
    $query = mysqli_query($con,$sql);
    $k = mysqli_fetch_array($query);
    if($k[0]==0){
        $sqlproc="CALL add_buyer('$login','$pass','$phone','$name')";
        $proc = mysqli_query($con,$sqlproc);
        $_SESSION['user'] = $login;
        echo"<script>window.location.reload()</script>";
    }
    else{
        echo"<script>regfound()</script>";
    }
}
?>
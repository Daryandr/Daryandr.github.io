<?php
if(isset($_REQUEST['send'])){
    $message = $_REQUEST['revtext']." From: ".$_SESSION['user'];
    $to = "andreeva.d.a9@gmail.com";
    $subject = "Отзыв";
    mail($to,$subject,$message);
    echo "Отзыв успешно отправлен";
}
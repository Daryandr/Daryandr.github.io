<?php
header('Content-Type: text/html; charset=utf-8');
session_start();
include '../assets/php/config.php';
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,400;0,600;1,400&family=Spectral+SC:wght@300;400&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../assets/css/style.css?v=<?= time(); ?>" />
    <script src="https://www.gstatic.com/charts/loader.js"></script>
    <script src="../assets/js/chart.js"></script>
    <!--[if lt IE 9]>
    <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
    <title>Статистика</title>
</head>
<body>
<?php include('../tpl/header.php');?>
<main>
    <div class="container">
        <script>const arr = new Map();</script>
        <?php if(!isset($_SESSION['user']) or !isset($_SESSION['admin'])){?>
            <div style="text-align: center; font-size: 2.4vmin;margin-top: 20vmin;">
                НЕОБХОДИМО БЫТЬ АДМИНИСТРАТОРОМ ДЛЯ ПРОСМОТРА СТРАНИЦЫ
            </div>
        <?php } else{?>
        <?php $sqlproc="CALL count_orders()";
            $proc = mysqli_query($con,$sqlproc);
            while ($row = $proc->fetch_assoc()){
                $k = $row['date'];
                $v = $row['num'];
                echo "<script>arr.set('$k','$v');</script>";
            }
        ?>
            <div id='chart_div' style='width: 125vmin; height: 70vmin;margin: auto;'></div>
        <?php }?>
    </div>
</main>
<?php include('../tpl/footer.php');?>
</body>
</html>

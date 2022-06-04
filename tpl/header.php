<header>
  <div class="container">
    <div class="name">Торты от Маруси </div>
    <nav>
      <?php if($_SERVER['REQUEST_URI']=="/Cakes/" || $_SERVER['REQUEST_URI']=="/Cakes/index.php"){?>
      <?php //if($_SERVER['REQUEST_URI']=="/" || $_SERVER['REQUEST_URI']=="/index.php"){?>
      <a href="#">Главная</a>
      <a href="pages/price.php">Ассортимент и цены</a>
      <a href="pages/delivery.php">Доставка и оплата</a>
      <a href="pages/order.php">Сделать заказ</a>
      <a href="pages/review.php">Отзывы</a>
      <script src="assets/js/login.js?v=<?= time(); ?>"></script>
      <?php if(!isset($_SESSION['user'])){?>
      <button onclick="login()"><a>Войти</a><img src="assets/img/in.png" alt="" style="width:3vmin;display: inline-block; margin-top: 2vmin;" /></button>
          <div class="hide" id="hide"></div>
          <div class="window" id="window"><?php include('tpl/auth.php'); include('assets/php/authorize.php');?></div>
          <div class="window" id="window2"><?php include('tpl/reg.php'); include('assets/php/register.php');?></div>
      <?php } else if(!isset($_SESSION['admin'])){?>
      <button onclick="window.location.href ='pages/profile.php'"><a>Профиль</a><img src="assets/img/user.png" alt="" style="width:3vmin;display: inline-block; margin-top: 2vmin;" /></button>
      <?php } else{?>
          <button onclick="window.location.href ='pages/admin.php'"><a>Админ</a></button>
      <?php }} else{?>
        <a href="../index.php">Главная</a>
        <a href="../pages/price.php">Ассортимент и цены</a>
        <a href="../pages/delivery.php">Доставка и оплата</a>
        <a href="../pages/order.php">Сделать заказ</a>
        <a href="../pages/review.php">Отзывы</a>
        <script src="../assets/js/login.js?v=<?= time(); ?>"></script>
        <?php if(!isset($_SESSION['user'])){?>
        <button onclick="login()"><a>Войти</a><img src="../assets/img/in.png" alt="" style="width:3vmin;display: inline-block; margin-top: 2vmin;" /></button>
          <div class="hide" id="hide"></div>
          <div class="window" id="window"><?php include('../tpl/auth.php'); include('../assets/php/authorize.php');?></div>
          <div class="window" id="window2"><?php include('../tpl/reg.php'); include('../assets/php/register.php');?></div>
      <?php } else if(!isset($_SESSION['admin'])) {?>
          <button onclick="window.location.href ='profile.php'"><a>Профиль</a><img src="../assets/img/user.png" alt="" style="width:3vmin;display: inline-block; margin-top: 2vmin;" /></button>
      <?php } else{?>
          <button onclick="window.location.href ='admin.php'"><a>Админ</a></button>
      <?php }}?>
    </nav>
  </div>
</header>
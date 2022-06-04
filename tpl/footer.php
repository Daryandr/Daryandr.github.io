<footer>
  <div class="container">
    <nav>
        <?php if($_SERVER['REQUEST_URI']=="/Cakes/" || $_SERVER['REQUEST_URI']=="/Cakes/index.php"){?>
            <a href="#">Главная</a>
            <a href="pages/price.php">Ассортимент и цены</a>
            <a href="pages/delivery.php">Доставка и оплата</a>
            <a href="pages/order.php">Сделать заказ</a>
            <a href="pages/review.php">Отзывы</a>
        <?php } else{?>
            <a href="../index.php">Главная</a>
            <a href="../pages/price.php">Ассортимент и цены</a>
            <a href="../pages/delivery.php">Доставка и оплата</a>
            <a href="../pages/order.php">Сделать заказ</a>
            <a href="../pages/review.php">Отзывы</a>
        <?php }?>
    </nav>
    <div class="catalog">
      <div>
        <?php include('logo.html')?>
      </div>
      <div>
        <p>Торты и другие десерты на заказ<br />
          г.Сыктывкар<br />
          +7(904)101-84-09</p>
        <div class="vk">
            <?php if($_SERVER['REQUEST_URI']=="/Cakes/" || $_SERVER['REQUEST_URI']=="/Cakes/index.php"){?>
          <a href="https://vk.com/torty_ot_marusi" target="_blank"><img src="assets/img/vk.png" alt="" style="width:4vmin" /> </a>
            <?php } else{?>
          <a href="https://vk.com/torty_ot_marusi" target="_blank"><img src="../assets/img/vk.png" alt="" style="width:4vmin" /> </a>
            <?php }?>
        </div>
      </div>
    </div>
  </div>
</footer>
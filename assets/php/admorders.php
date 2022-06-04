<?php
    $sqlproc="SELECT * FROM order_info ORDER BY number DESC";
    $proc = mysqli_query($con,$sqlproc);
        while ($row = $proc->fetch_assoc()){?>
            <h4 style="margin: 1vmin"> Заказ № <?=$row['number']?></h4>
            <p>Заказчик:  <?=$row['buyer']?> (<?=$row['phone']?>)</p>
            <p>Статус: <?=$row['status']?><br>
                Дата заказа: <?=$row['order_date']?></p>
            <p>
                Адрес получения: <?=$row['delivery']?> <br>
                Дата получения: <?=$row['delivery_date']?> <?=substr($row['delivery_time'],0,5)?>
            </p>
            <script>
                function show(i){
                    var d = document.getElementById(i);
                    if(d.style.display=='none') d.style.display='block';
                    else d.style.display='none';
                }
            </script>
            <button onclick="show(<?=$row['number']?>)" class="btn"><?=$row['cat_name']?><br></button>
            <div id="<?=$row['number']?>" style="display: none">
                <p>
                    Ярусы: <?=$row['tiers']?><br>
                    Вес: <?=$row['weight']?><br>
                    Форма: <?=$row['form_name']?></p>
                <p>
                    Состав<br>
                    Бисквит: <?=$row['bis_name']?><br>
                    Начинка: <?=$row['fil_name']?><br>
                    Крем: <?=$row['cr_name']?>
                </p>
                <p>
                    Декор<br>
                    Пряники: <?=$row['gingerbread']?><br>
                    Ягоды: <?=$row['berries']?><br>
                    Фотопечать: <?php if($row['photo']==1) echo 'Есть'; else echo 'Нет';?><br>
                    Конфеты: <?php if($row['candies']==1) echo 'Есть'; else echo 'Нет';?>
                </p>
                <p>Комментарий: <?=$row['description']?></p>
            </div>
<?php }
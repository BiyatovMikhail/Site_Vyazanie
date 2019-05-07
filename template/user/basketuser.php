<?php var_dump($MODEL); exit();

?>

<div class="basket">
  <div class="container">
    <table class="table table-hover table-bordered">
      <thead class="thead-light">
        <tr>
          <th scope="col">#</th>
          <th scope="col">Артикул</th>
          <th scope="col">Название</th>
          <th scope="col">Фото</th>
          <th scope="col">Цена</th>
          <th scope="col">Цена со скидкой</th>
          <th scope="col">Кол-во</th>
          <th scope="col">Сумма</th>
          <th scope="col">удалить</th>
        </tr>
      </thead>
      <tbody>
                <? $i = 0; foreach ($MODEL["basketTempByUser"] as $v) {?>
                    <tr>
                        <th scope="row"><?= ++$i ?></th> 
                        <td><?= $v["numb_order"] ?></td>
                        <td><?= $v["article_good"] ?></td>
                        <td><?= $v["name"] ?></td>
                        <td><?= $v["date_create"] ?></td>
                        <td><?= $v["price_order"] ?>руб.</td>
                        <td>
                            
                            <button id="basketitem" type="button" class="btn btn-info" >Отменить</button>
                        </td>
                        
                        </tr>
                <?    } ?>
                
            </tbody>
    </table>
    <div>Итого: <span id="total-basket-summa">0</span> руб.</div>
    <br>
    <button id="basketall" class="btn btn-info">Оформить заказ</button>
  </div>
</div>




<div >
<table class="table table-responsive table-hover">
    <thead>
        <tr><th>#</th><th>Номер заказа</th><th>Дата заказа</th><th>Артикул товара</th><th>Название товара</th><th>статус</th><th>del</th></tr>
    </thead>
    <tbody>
        <tr class="clickable" data-toggle="collapse" data-target="#group-of-rows-1" aria-expanded="false" aria-controls="group-of-rows-1">
        
        <td><i class="fa fa-plus" aria-hidden="true"></i>1</td>
            <td>002</td>
          	<td>2019</td>  
            <td>35</td>
            <td>Шапка 1</td>
            <td>в работе</td>
            <td>отменить</td>
        </tr>
    </tbody>
    <tbody id="group-of-rows-1" class="collapse">
        <tr>
          <td>
            <div class="rrr"> 
              dtd 1
            </div>
          </td>
        </tr>
        <tr>
        <td>
            <div class="rrr"> 
              dtd 1
            </div>
          </td>
        </tr>
    </tbody>
    <tbody>
        <tr class="clickable" data-toggle="collapse" data-target="#group-of-rows-2" aria-expanded="false" aria-controls="group-of-rows-2">
            
       
        <td><i class="fa fa-plus" aria-hidden="true"></i>2</td>
            <td>003</td>
          	<td>2018</td>  
            <td>40</td>
            <td>Платье 1</td>
            <td>выполнен</td>
            <td>отменить</td>
        </tr>
    </tbody>
    <tbody id="group-of-rows-2" class="collapse">
        <tr>
        <td>
            <div class="rrr2"> 
              dtd 2
            </div>
          </td>
        </tr>
        <tr>
        <td>
            <div class="rrr2"> 
              dtd 2
            </div>
          </td>
        </tr>
    </tbody>
</table>
</div>

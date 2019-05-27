<?php //var_dump($MODEL); exit();
  // var_dump($MODEL["basketTempByUser"]); exit();
?>

<div class="basket">
  <div class="container">
    <table class="table table-hover table-bordered" id="basket_table">
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
          <td><?= $v["article_good"] ?></td>
          <td><?= $v["name"] ?></td>
          <td>
              <div class="product-basket-images">
                <div class="row">
                <?php 
                $srcsm2 = $this->drawRoute("pic", "onesrc", [
                  "module" => "good",
                  "id" => $v["good_id"]
              ]); 
                ?>
                  <div class="all-product-images">
                      <div class="card mx-1 my-1" style="max-width: 4rem; max-height: 4rem;" >
                        <!--  <img src="<?= $srcsm2 ?>" class="card-img img-fluid" alt="<?= $srcsm2["name"] ?>"> -->
                          <div class="basket-card-product-images" style="width: 4rem; height: 4rem; background:url(<?= $srcsm2 ?>); "></div>
                      </div>
                  </div>
              </div>
            </div>
          </td>
          <?php if ($v["is_discount"] == true): ?>
          <td>
              <div class="basket_price price">
              <?= $v["price"] ?>
              </div>
          </td>  
          <td>
              <div class="basket_price discount">
              <?= $v["price_discount"] ?>
              </div>
            </td>
          <?php else: ?>
            <td>
              <div class="basket_price price">
              <?= $v["price"] ?>
              </div>
            </td>
            <td>
              <div class="basket_price discount">
              <?= $v["price"] ?>
              </div>
            </td>
          <?php endif; ?>
         
          <td>
          <div class="basket_count">                       
              <input onchange="SummIt()" name="count" type="number" id="replyNumber" min="1" max="<?= $v["count_good_good"] ?>" step="1" value="<?= $v["count_good"] ?>" style="width: 4em;" data-bind="value:replyNumber" />
          </div>
          </td>
          <td class="basket_summa">
            <input name="summa" type="number" id="replyNumber" min="1" step="1" value="<?= $v["price_summ"] ?>" style="width: 4em;" data-bind="value:replyNumber" />
          </td>
          <th> 
              <form class="basketGoodCanselId" method="POST" action="/basket/cancel_basketTemp" novalidate>
                  <input type="hidden" name="baskettemp_id" value="<?= $v["id"] ?>" />
                  <button id="delGood" type="submit"  class="btn btn-info" >X</button>
              </form>
          </th>
        </tr>
          <?    } ?>
             <tr>
      <td colspan="7"> Всего: </td>
      <td><span id="total-basket-summa">0</span></td>
      <td></td>
    </tr>
        </tbody>
    </table>
    <div>Итого: <span id="total-basket-summa">0</span> руб.</div>
    <br>
    <button id="basketall" class="btn btn-info">Оформить заказ</button>
  </div>
</div>



<script>
    function SummIt() {
      debugger;
      var summ = 0;
      var table = jQuery("#basket_table tbody");

      table.children("tr").each(function(i, e) {
        var tr = jQuery(e);
        var price = parseInt(tr.find(".basket_price.price").html());
        var discount = parseInt(tr.find(".basket_price.discount").html());
        var count = parseInt(tr.find(".basket_count input").val());

        tr.children(".basket_summa").html(discount*count);
        
        summ += discount*count;
      });

      jQuery("#total-basket-summa").html(summ);
    }

    SummIt();
</script>



<div >
<table class="table table-responsive table-hover">
    <thead>
        <tr><th>#</th><th>Номер заказа</th><th>Дата заказа</th><th>кол-во товаров</th><th>сумма заказа</th><th>статус</th><th>del</th></tr>
    </thead>
    <tbody>
        <tr class="clickable" data-toggle="collapse" data-target="#group-of-rows-1" aria-expanded="false" aria-controls="group-of-rows-1">
        
        <td><i class="fa fa-plus" aria-hidden="true"></i>1</td>
            <td>зак 002</td>
          	<td>2019</td>  
            <td>4</td>
            <td>355руб</td>
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

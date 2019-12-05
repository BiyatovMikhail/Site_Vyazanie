
<-- поправить ширину экрана -->

<div class="conteiner">

    <div class="card text-center">
        <div class="card-header">
            <ul class="nav nav-tabs card-header-tabs" id="myTabOrder" role="tablist">
                <li class="nav-item">
                    <a class="nav-link" id="orderAll-tab" href="/user1/orderuserAll" role="tab" aria-controls="orderAll" aria-selected="false">orderAll</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" id="orderActiv-tab" href="/user1/orderuserActiv" role="tab" aria-controls="orderActiv" aria-selected="true">orderActiv</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="orderDone-tab" href="/user1/orderuserDone" role="tab" aria-controls="orderDone" aria-selected="false">orderDone</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="orderCancel-tab" href="/user1/orderuserCancel" role="tab" aria-controls="orderCancel" aria-selected="false">orderCancel</a>
                </li>
            </ul>
        </div>
        <div class="tab-content" id="myTabOrderContent">
            <div class="tab-pane fade show active" id="orderActiv" role="tabpanel" aria-labelledby="orderActiv-tab">
                <div class="card-body">
                    <div class="container">
                        <table class="table table-hover table-bordered">
                            <thead class="thead-light">
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">номер заказа</th>
                                <th scope="col">Артикул товара</th>
                                <th scope="col">название товара</th>
                                <th scope="col">дата создания заказа</th>
                                <th scope="col">сумма заказа</th>
                                <th scope="col">отменить заказ</th>
                                </tr>
                            </thead>
                            <tbody>
                                <? $i = 0; foreach ($MODEL["orderactivuser"] as $v) {?>
                                    <tr>
                                    <th scope="row"><?= ++$i ?></th> 
                                    <td><?= $v["numb_order"] ?></td>
                                    <td><?= $v["article_good"] ?></td>
                                    <td><?= $v["name"] ?></td>
                                    <td><?= $v["date_create"] ?></td>
                                    <td><?= $v["price_order"] ?>руб.</td>
                                    <td>
                                        <form class="orderCanselId" method="POST" action="/order/cancel_order" novalidate>
                                            <input type="hidden" name="order_id" value="<?= $v["ord_id"] ?>" />
                                            <button id="order" type="submit"  class="btn btn-info" >Отменить</button>
                                        </form>
                                    </td>
                                    
                                    </tr>
                                <?    } ?>
                                
                            </tbody>
                        </table>
                        
                    </div>
                </div>
            </div>
            
        </div>

        <?= $this->WriteHTML($MODEL["orderactivuser_pages"], "shared", "paginator") ?>

    </div>

тут активные заказы
 
</div>
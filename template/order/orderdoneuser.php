<div class="conteiner">

    <div class="card text-center">
        <div class="card-header">
            <ul class="nav nav-tabs card-header-tabs" id="myTabOrder" role="tablist">
                <li class="nav-item">
                    <a class="nav-link" id="orderAll-tab" href="/user1/orderuserAll" role="tab" aria-controls="orderAll" aria-selected="false">orderAll</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="orderActiv-tab" href="/user1/orderuserActiv" role="tab" aria-controls="orderActiv" aria-selected="false">orderActiv</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link  active" id="orderDone-tab" href="/user1/orderuserDone" role="tab" aria-controls="orderDone" aria-selected="true">orderDone</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="orderCancel-tab" href="/user1/orderuserCancel" role="tab" aria-controls="orderCancel" aria-selected="false">orderCancel</a>
                </li>
            </ul>
        </div>
        <div class="tab-content" id="myTabOrderContent">       
            <div class="tab-pane fade show active" id="orderDone" role="tabpanel" aria-labelledby="orderDone-tab">
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
                                <th scope="col">статус заказ</th>
                                </tr>
                            </thead>
                            <tbody>
                                <? $i = 0; foreach ($MODEL["orderdoneuser"] as $v) {?>
                                    <tr>
                                    <th scope="row"><?= ++$i ?></th> 
                                    <td><?= $v["numb_order"] ?></td>
                                    <td><?= $v["article_good"] ?></td>
                                    <td><?= $v["name"] ?></td>
                                    <td><?= $v["date_create"] ?></td>
                                    <td><?= $v["price_order"] ?>руб.</td>
                                    <td>
                                    <p> Выполнен </p>
                                    </td>
                                    </tr>
                                <?    } ?>
                                
                            </tbody>
                            </table>
                            
                        </div>
                    </div>
            </div>
        </div>

        <?= $this->WriteHTML($MODEL["orderalluser_pages"], "shared", "paginator") ?>

    </div>

тут выполненные заказы
 
</div>
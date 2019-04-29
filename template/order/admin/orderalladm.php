
<script>
    function fill_modal(selector) {
        var data = JSON.parse(jQuery(selector).html());
        jQuery("#good_id").val(data.good_id);
        jQuery("#numberOrder").val(data.numb_order);
        jQuery("#numberGood").val(data.good_id);
        jQuery("#nameGood").val(data.user_email);
    }
</script>


<div class="card text-center">
  <div class="card-header">
    <ul class="nav nav-tabs card-header-tabs" id="myTabOrder" role="tablist">
        <li class="nav-item">
            <a class="nav-link active" id="orderAll-tab" data-toggle="tab" href="#orderAll" role="tab" aria-controls="orderAll" aria-selected="true">orderAll</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" id="orderActiv-tab" data-toggle="tab" href="#orderActiv" role="tab" aria-controls="orderActiv" aria-selected="false">orderActiv</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" id="orderDone-tab" data-toggle="tab" href="#orderDone" role="tab" aria-controls="orderDone" aria-selected="false">orderDone</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" id="orderDel-tab" data-toggle="tab" href="#orderDel" role="tab" aria-controls="orderDel" aria-selected="false">orderDel</a>
        </li>
      
      
    </ul>
  </div>
  <div class="tab-content" id="myTabOrderContent">
  <div class="tab-pane fade show active" id="orderAll" role="tabpanel" aria-labelledby="orderAll-tab">
        <div class="card-body">
            <div class="container">
                <table class="table table-hover table-bordered">
                <thead class="thead-light">
                    <tr>
                    <th scope="col">#</th>
                    <th scope="col">номер заказа</th>
                    <th scope="col">имя пользователя</th>
                    <th scope="col">название товара</th>
                    <th scope="col">дата создания заказа</th>
                    <th scope="col">посмотреть заказ</th>
                    </tr>
                </thead>
                <tbody>
                    <? $i = 0; foreach ($MODEL["orderalladm"] as $v) {?>
                        <tr>
                        <th scope="row"><?= ++$i ?></th> 
                        <td><?= $v["numb_order"] ?></td>
                        <td><?= $v["user_name"] ?></td>
                        <td><?= $v["good_name"] ?></td>
                        <td><?= $v["date_create"] ?></td>
                        <td>
                            <div class="order-data-<?= $i ?>" style="display:none;"><?= json_encode($v) ?></div>
                            <button id="order" type="button" class="btn btn-info" data-toggle="modal" data-target=".bd-example-modal-lg" onclick="fill_modal('.order-data-<?= $i ?>')" >Посмотреть</button>
                        </td>
                        
                        </tr>
                    <?    } ?>
                    
                </tbody>
                </table>
                
            </div>
        </div>
    </div>
  <div class="tab-pane fade" id="orderActiv" role="tabpanel" aria-labelledby="orderActiv-tab">
    <div class="card-body">
            <div class="container">
                <table class="table table-hover table-bordered">
                <thead class="thead-light">
                    <tr>
                    <th scope="col">#</th>
                    <th scope="col">номер заказа</th>
                    <th scope="col">имя пользователя</th>
                    <th scope="col">название товара</th>
                    <th scope="col">дата создания заказа</th>
                    <th scope="col">посмотреть заказ</th>
                    </tr>
                </thead>
                <tbody>
                    <? $i = 0; foreach ($MODEL["orderactivadm"] as $value) {?>
                        <tr>
                        <th scope="row"><?= ++$i ?></th> 
                        <td><?= $v["numb_order"] ?>numb_order</td>
                        <td><?= $v["user_name"] ?>user_name</td>
                        <td><?= $v["good_name"] ?>good_name</td>
                        <td><?= $v["date_create"] ?>date_create</td>
                        <td><button id="order" class="btn btn-info">Посмотреть</button></td>
                        
                        </tr>
                    <?    } ?>
                    
                </tbody>
                </table>
                
            </div>
        </div>
    </div>
  </div>
  <div class="tab-pane fade" id="orderDone" role="tabpanel" aria-labelledby="orderDone-tab">
        <div class="card-body">
            <div class="container">
                <table class="table table-hover table-bordered">
                <thead class="thead-light">
                    <tr>
                    <th scope="col">#</th>
                    <th scope="col">номер заказа</th>
                    <th scope="col">имя пользователя</th>
                    <th scope="col">название товара</th>
                    <th scope="col">дата создания заказа</th>
                    <th scope="col">посмотреть заказ</th>
                    </tr>
                </thead>
                <tbody>
                    <? $i = 0; foreach ($MODEL["orderdoneadm"] as $v) {?>
                        <tr>
                        <th scope="row"><?= ++$i; ?></th> 
                        <td><?= $v["numb_order"] ?></td>
                        <td><?= $v["user_name"] ?></td>
                        <td><?= $v["good_name"] ?></td>
                        <td><?= $v["date_create"] ?></td>
                        <td><button id="order" class="btn btn-info">Посмотреть</button></td>
                        
                        </tr>
                    <?    } ?>
                    
                </tbody>
                </table>
                
            </div>
        </div>
  </div>
  <div class="tab-pane fade" id="orderDel" role="tabpanel" aria-labelledby="orderDel-tab">
        <div class="card-body">
            <div class="container">
                <table class="table table-hover table-bordered">
                <thead class="thead-light">
                    <tr>
                    <th scope="col">#</th>
                    <th scope="col">номер заказа</th>
                    <th scope="col">имя пользователя</th>
                    <th scope="col">название товара</th>
                    <th scope="col">дата создания заказа</th>
                    <th scope="col">посмотреть заказ</th>
                    </tr>
                </thead>
                <tbody>
                    <? foreach ($MODEL["orderdeladm"] as $v) {?>
                        <tr>
                        <th scope="row">2</th> 
                        <td><?= $v["numb_order"] ?></td>
                        <td><?= $v["user_name"] ?></td>
                        <td><?= $v["good_name"] ?></td>
                        <td><?= $v["date_create"] ?></td>
                        <td><button id="order" class="btn btn-info">Посмотреть</button></td>
                        
                        </tr>
                    <?    } ?>
                    
                </tbody>
                </table>
                
            </div>
        </div>
  </div>
  </div>
  
</div>
тут все заказы



<!-- Extra large modal -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target=".bd-example-modal-xl">Extra large modal</button>

<div class="modal fade bd-example-modal-xl" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-xl">
    <div class="modal-content">
      ...
    </div>
  </div>
</div>


<!-- Large modal -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target=".bd-example-modal-lg">Large modal</button>

<div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="orderModalLongTitle">Заявка № на товар № </h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-body">

                <input type="hidden" name="user_id" value="<?= $MODEL["userid"] ?>" />
                <input type="hidden" name="good_id" id="good_id" value="<?= $MODEL["goods"]["id"] ?>" />
                <form>
                    <div class="form-group row">
                        <label for="numberOrder" class="col-sm-3 col-form-label">Номер заказа</label>
                        <div class="col-sm-9">
                        <input type="text" readonly class="form-control-plaintext" id="numberOrder" value="numberOrder">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="numberGood" class="col-sm-3 col-form-label">Номер товара</label>
                        <div class="col-sm-9">
                        <input type="text" readonly class="form-control-plaintext" id="numberGood" value="numberGood">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="nameGood" class="col-sm-3 col-form-label">Название товара</label>
                        <div class="col-sm-9">
                        <input type="text" readonly class="form-control-plaintext" id="nameGood" value="nameGood">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="numberUser" class="col-sm-3 col-form-label">Номер пользователя</label>
                        <div class="col-sm-9">
                        <input type="text" readonly class="form-control-plaintext" id="numberUser" value="numberUser">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="nameUser" class="col-sm-3 col-form-label">Имя пользователя</label>
                        <div class="col-sm-9">
                        <input type="text" readonly class="form-control-plaintext" id="nameUser" value="nameUser">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="emailUser" class="col-sm-3 col-form-label">email пользователя</label>
                        <div class="col-sm-9">
                        <input type="text" readonly class="form-control-plaintext" id="emailUser" value="emailUser">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="phoneUser" class="col-sm-3 col-form-label">телефон пользователя</label>
                        <div class="col-sm-9">
                        <input type="text" readonly class="form-control-plaintext" id="phoneUser" value="phoneUser">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="messageUser" class="col-sm-3 col-form-label">сообщение от пользователя</label>
                        <div class="col-sm-9">
                        <input type="text" readonly class="form-control-plaintext" id="messageUser" value="messageUser">
                        <textarea class="form-control-plaintext" readonly  id="messageUser" placeholder="messageUser сообщение"></textarea>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="dateCreateOrder" class="col-sm-3 col-form-label">Дата создания заказа</label>
                        <div class="col-sm-9">
                        <input type="text" readonly class="form-control-plaintext" id="dateCreateOrder" value="dateCreateOrder">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="dateChangeOrder" class="col-sm-3 col-form-label">Дата изменения заказа</label>
                        <div class="col-sm-9">
                        <input type="text" readonly class="form-control-plaintext" id="dateChangeOrder" value="dateChangeOrder">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="commentAdmin" class="col-sm-3 col-form-label">Комментарий к заказу</label>
                        <div class="col-sm-9">
                        <textarea class="form-control"  name="comment_admin" id="commentAdmin" placeholder="comment_admin сообщение"></textarea>
                        </div>
                    </div>
                    
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="is_done" value="" id="isDoneOrder">
                        <label class="form-check-label" for="isDoneOrder">Заказ выполнен</label>
                    </div>
                    <br>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="is_delete" value="" id="isDeleteOrder">
                        <label class="form-check-label" for="isDeleteOrder">Удалить заказ</label>
                    </div>
                </form>

        </div>
        
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary " data-dismiss="modal">Закрыть</button>
            <button type="submit" class="btn btn-primary">Сохранить изменения</button>
        </div>
    
    </div>
  </div>
</div>



 
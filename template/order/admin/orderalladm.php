<div class="card text-center">
  <div class="card-header">
    <ul class="nav nav-tabs card-header-tabs">
      <li class="nav-item">
        <a class="nav-link active" href="/order/admin/show_order_all">Все заказы</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/order/admin/show_order_activ">Активные заказы</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/order/admin/show_order_done">Выполненные заказы</a>
      </li>
      <li class="nav-item">
        <a class="nav-link " href="/order/admin/show_order_del">Удаленные заказы</a>
      </li>
    </ul>
  </div>
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
        
            <tr>
            <th scope="row">2</th>
            <td><?= $v["numb_order"] ?>numb_order</td>
            <td><?= $v["user_name"] ?>user_name</td>
            <td><?= $v["good_name"] ?>good_name</td>
            <td><?= $v["date_create"] ?>date_create</td>
            <td><button id="order" class="btn btn-info">Посмотреть</button></td>
            
            </tr>
        
            
        </tbody>
        </table>
        
        <br>
        <button id="order" class="btn btn-info">отправить</button>
    
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
                <input type="hidden" name="good_id" value="<?= $MODEL["goods"]["id"] ?>" />
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



 
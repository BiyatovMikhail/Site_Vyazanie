
<div class="container">
    <div class="card text-center">
        <div class="card-header">
            <ul class="nav nav-tabs card-header-tabs" id="myTabUser" role="tablist">
                <li class="nav-item">
                    <a class="nav-link active" id="userAll-tab" href="/user/admin/table_user_all" role="tab" aria-controls="userAll" aria-selected="true">Все юзеры</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="userActiv-tab" href="/user/admin/table_user_activ" role="tab" aria-controls="orderActiv" aria-selected="false">Активные Юзеры</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="userBan-tab" href="/user/admin/table_user_ban" role="tab" aria-controls="orderDone" aria-selected="false">ban user</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="userDel-tab" href="/user/admin/table_user_del" role="tab" aria-controls="orderCancel" aria-selected="false">del User</a>
                </li>
            </ul>
        </div>
        <div class="tab-content" id="myTabUserContent">
            <div class="tab-pane fade show active" id="userAll" role="tabpanel" aria-labelledby="userAll-tab">
                <div class="card-body">
                    <div class="container">
                        <table class="table table-hover table-bordered">
                        <thead class="thead-light">
                            <tr>
                            <th scope="col">#</th>
                            <th scope="col">id юзера</th>
                            <th scope="col">логин</th>
                            <th scope="col">имя</th>
                            <th scope="col">ник</th>
                            <th scope="col">почта</th>
                            <th scope="col">телефон</th>
                            <th scope="col">дата регистрации</th>
                            <th scope="col">действие</th>
                            </tr>
                        </thead>
                        <tbody>
                            <? $i = 0; foreach ($MODEL["tableAllUser"] as $v) {?>
                                <tr>
                                <th scope="row"><?= ++$i ?></th> 
                                <td><?= $v["id"] ?></td>
                                <td><?= $v["login"] ?></td>
                                <td> <a href="<?= $v["url"] ?>" target="_blank"> <?= $v["name"] ?> </a></td>
                                <td><?= $v["nikname"] ?></td>
                                <td><?= $v["email"] ?></td>
                                <td><?= $v["phone"] ?></td>
                                <td><?= $v["date_create"] ?></td>
                                <td>
                                   <form class="userOneId" method="POST" action="/admin/userall/userOne" novalidate> 
                  
                                        <input type="hidden" name="user_id" value="<?= $v["id"] ?>" />
                                  <!--      <button id="delGood" type="button" onclick="deleteRow(<?= $v["id"] ?>)"  class="btn btn-info" >X</button> -->
                                        <button id="userOne" type="submit" href="/admin/userall/userOne" class="btn btn-info" >Посмотреть</button>

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

        <?= $this->WriteHTML($MODEL["userall_pages"], "shared", "paginator") ?>

    </div>

  

</div>
тут все юзеры




 
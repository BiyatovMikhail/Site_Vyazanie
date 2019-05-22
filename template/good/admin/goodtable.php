this is goodtable
<?php 
 //var_dump($MODEL); exit();
 
 //var_dump($MODEL["goods"]); exit();
?>
<script>
    var check = false;
    function markAll() {
        check = !check;
        if (check)
            jQuery(".form-check-input").attr("checked", "checked");
        else
            jQuery(".form-check-input").removeAttr("checked");
    }
</script>
<div class="container">
    <div class="row">
        <div class="col">
            <a class="nav-link active" href="/admin/good/goodtable">все товары</a>
            <?= $this->WriteHTML($MODEL["category"], "shop", "categtopmenu"); ?>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <p> текущая категория </p>
        </div>
    </div>
    <div class="row">
        <div class="col">
        <div class="container">
                   <form class="saveGoodChange" method="POST" action="#" novalidate>
                        <table class="table table-hover table-bordered">
                            <thead class="thead-light">
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Артикул категории</th>
                                <th scope="col">Артикул товара</th>
                                <th scope="col">название товара</th>
                                <th scope="col">фото</th>
                                <th scope="col">цена, руб.</th>
                                <th scope="col">скидка в %</th>
                                <th scope="col">цена со скидкой, руб.</th>
                                <th scope="col">скидка</th>
                                </tr>
                            </thead>
                            <thead class="thead-light">
                            <tr>
                                <th scope="col"></th>
                                <th scope="col"></th>
                                <th scope="col"></th>
                                <th scope="col"></th>
                                <th scope="col"></th>
                                <th scope="col"></th>
                                <th scope="col"></th>
                                <th scope="col"></th>
                                <th scope="col"><button id="saveGoodChange" type="button" onclick="markAll()"  class="btn btn-info" >Выделить все</button></th>
                                </tr>
                            </thead>
                            <tbody>
                                <? $i = 0; foreach ($MODEL["goods"] as $v) {?>
                                    <tr>
                                    <th scope="row"><?= ++$i ?></th> 
                                    <td><?= $v["cat_name"] ?></td>
                                    <td><?= $v["article_good"] ?></td>
                                    <td><?= $v["name"] ?></td>
                                    <td><?= $v["price"] ?></td>
                                    <td>
                                        <div>                       
                                            <input name="price[<?= $v["id"] ?>]" type="number" id="goodPriceNumber" min="0" step="1" value="<?= $v["price"] ?>"  style="width: 4em;" data-bind="value:replyNumber" />
                                        </div>
                                    </td>
                                    <td>
                                        <div>                       
                                            <input name="per_discount[<?= $v["id"] ?>]" type="number" id="goodPerDiscNumber" min="0" step="1" value="<?= $v["per_discount"] ?>"  style="width: 4em;" data-bind="value:replyNumber" />
                                        </div>
                                    </td>
                                    <td>
                                        <div>                       
                                            <input name="price_discount[<?= $v["id"] ?>]" type="number" id="goodPriceDiscountNumber" min="0" step="1" value="<?= $v["price_discount"] ?>"  style="width: 4em;" data-bind="value:replyNumber" />
                                        </div>
                                    </td>
                                    <td>
                                        <div class="form-check">
                                            <input name="is_discount[<?= $v["id"] ?>]" value="1" class="form-check-input position-static" type="checkbox" id="goodDiscountCheckbox" <?= $v["is_discount"] ? "checked=\"checked\"" : "" ?>  aria-label="...">
                                        </div>
                                    </td>
                                    
                                    </tr>
                                <?    } ?>
                                <tr>
                                    <button id="saveGoodChange" type="submit"  class="btn btn-info" >Сохранить изменения</button>
                                </tr>
                            </tbody>
                        </table>
                  </form>
            </div>
        </div>
    </div>
</div>

<?php $v = $MODEL; 

?>

<div>
    <form method="POST" action="/admin/good/save_good">
        <input type="hidden" name="action" value="edit" />
        <input type="hidden" name="id" value="<?= $v["id"] ?>" />
        <!-- <input type="hidden" name="category_id" value="<?= $v["category_id"] ?>" /> -->
        <div class="form-group">
            <label for="imputkey">Наименование</label>
            <input value="<?= $v["name"] ?>" type="text" class="form-control" id="imputkey" name="name" placeholder="Введите Наименование товара">
        </div>
        <div class="form-group">
            <select name="category_id">
                        <option value="null" >нет категории</option>  
                        <?php foreach($MODEL["cats"] as $value): ?>
                            <option value="<?= $value["id"] ?>" <?php if ($value["id"] == $MODEL["category_id"]) echo("selected"); ?> ><?= $value["name"] ?></option> 
                        <?php endforeach; ?>
                        
            </select>
        </div>


        <div class="form-group">
            <label for="inputvalue">Описание</label>
            <?= $this->writeHTML(["name" => "description", "value" => $v["description"]], "shared", "editor") ?>
        </div>
        <div class="form-group">
            <label for="inputprice">Цена</label>
            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text">₽</span>
                    <span class="input-group-text">0.00</span>
                </div>
               
                <input value="<?= $v["price"] ?>" type="number" step="0.01" min="0" class="form-control" id="inputprice" name="price" placeholder="Введите Цену товара">
            </div>
        </div>
        <div class="form-group">
        <label for="inputperdiscount">Скидка в процентах</label>
            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text">%</span>
                    <span class="input-group-text">0.00</span>
                </div>
                
                <input value="<?= $v["per_discount"] ?>" type="number" step="0.01" min="0" class="form-control" id="inputperdiscount" name="per_discount" placeholder="Введите процент скидки">
            </div>
        </div>
        <div class="form-group">
        <label for="inputpricediscount">Цена</label>
            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text">₽</span>
                    <span class="input-group-text">0.00</span>
                </div>
               
                <input value="<?= $v["price_discount"] ?>" type="number" step="0.01" min="0" class="form-control" id="inputpricediscount" name="price_discount" placeholder="Введите Цену товара со скидкой">
            </div>
        </div>
        <div class="form-group">
            <div class="form-check">
                <input class="form-check-input" name="is_discount" type="checkbox" value="1" id="Check1isdiscount">
                <label class="form-check-label" for="Check1isdiscount">
                    Если со скидкой поставить чекбокс!
                </label>
            </div>
        </div>
        <div class="form-group">
        <label for="inputcountgood">Количество</label>
            <div class="input-group mb-3">
                <div class="input-group-prepend">
                  
                    <span class="input-group-text">Кол-во</span>
                </div>
                
                <input value="<?= $v["count_good"] ?>" type="number" step="1" min="0" class="form-control" id="inputcountgood" name="count_good" placeholder="Введите количество товара">
            </div>
        </div>
        <table>

<?php foreach($MODEL["params"] as $value): ?>
<tr>
    <td><input name="params[name][]" value="<?= $value["name"] ?>" /></td>
    <td><input name="params[value][]" value="<?= $value["value"] ?>" /></td>
    <td>
        <button type="button" onclick="addLine(this); return false;">Add</button>
        <button type="button" onclick="removeLine(this); return false;">Remove</button>
    </td>
</tr>
<?php endforeach; ?>
<tr>
    <td><input name="params[name][]" value="" /></td>
    <td><input name="params[value][]" value="" /></td>
    <td>
        <button type="button" onclick="addLine(this); return false;">Add</button>
        <button type="button" onclick="removeLine(this); return false;">Remove</button>
    </td>
</tr>

</table>

<script>
    function addLine(element) {
        var el = $(element).parent().parent().clone();
        el.find("input").val("");
        $(element).parent().parent().after(el);
    }

    function removeLine(element) {
        $(element).parent().parent().detach();
    }
</script>

        <button type="submit" class="btn btn-primary">Отправить</button>
    </form>

    <?php if ($v["id"] != -1): ?>

    <p> 
        <?= $this->drawRoute("pic", "all", [
            "module" => "good",
            "id" => $v["id"],
            "del" => true
        ]) ?> 

    </p>

    <p> 
        <?= $this->drawRoute("pic", "add", [
            "module" => "good",
            "id" => $v["id"]
        ]) ?> 
    </p>
    <p> 
        <?= $this->drawRoute("comment", "all", [
            "module" => "good",
            "id" => $v["id"]
        ]) ?> 
    </p>

    <p> 
        <?= $this->drawRoute("comment", "add", [
            "module" => "good",
            "id" => $v["id"]
        ]) ?> 
    </p>

    <?php endif; ?>

</div>
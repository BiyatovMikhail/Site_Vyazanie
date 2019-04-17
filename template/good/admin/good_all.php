<?php foreach ($MODEL as $v): ?>
<div class="card">
    <div class="card-body">
        <h5 class="card-title"><?= $v["name"] ?> </h5>
        <p class="card-text"><?= $v["description"] ?></p>
        <p> 
            <?= $this->drawRoute("pic", "one", [
                "module" => "good",
                "id" => $v["id"]
            ]) ?> 
        </p>
        <a href="/admin/good/edit_good/<?= $v["id"] ?>" class="btn btn-primary">Редактировать</a>
        <a href="/admin/good/del_good/<?= $v["id"] ?>" class="btn btn-danger">Удалить</a>
       
    </div>
</div>
<?php endforeach; ?>
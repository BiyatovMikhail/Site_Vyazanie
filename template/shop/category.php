asdf asdf asdf das f
<?php $src = $this->drawRoute("pic", "onesrc", [
                "module" => "shop",
                "id" => $MODEL["id"]
            ]) ?>

<div class="col-sm">
    <div class="card" style="width: 16rem;" >
        <img src="<?= $src ?>" class="card-img" alt="...">
        <div class="card-body myfontmain">
                <h5 class="card-title product-name"><?= $MODEL["name"] ?></h5>
                <p class="card-text product-price"><?= $MODEL["price"] ?></p>
                <a href="#" class="btn btn-primary">Посмотреть</a>
            
        </div>
    </div>
</div>
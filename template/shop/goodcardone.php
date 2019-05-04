
<? //var_dump($MODEL); exit();  ?>
<? //var_dump($MODEL); exit(); ?>

<? foreach ($MODEL as $value): ?>

<?php $src = $this->drawRoute("pic", "onesrc", [
                "module" => "good",
                "id" => $value["id"]
            ]) ?>
<div class="col-sm">
    <div class="card" style="width: 16rem; ">
        <img src="<?= $src ?>" class="card-img" alt="...">
        <div class="card-body myfontmain">
                <h5 class="card-title product-name"><?= $value["name"] ?></h5>
                
                <?php if ($value["is_discount"] == true): ?>
                <p class="card-text product-price" style="text-decoration: line-through;"><?= $value["price"] ?>Р </p>
                <p class="card-text product-price"><?= $value["price_discount"] ?>Р </p>
                <?php else: ?>
                <p class="card-text product-price"><?= $value["price_discount"] ?>Р </p>
                <?php endif; ?>
                <a href="/shop/good/<?= str_replace("/", "_", $value["cat_name"])  ?>/<?= str_replace("/", "_", $value["name"]) ?>" class="btn btn-primary">Посмотреть</a>
            
        </div>
    </div>
</div>

<? endforeach; ?>
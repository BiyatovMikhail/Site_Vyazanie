
<? //var_dump($MODEL); exit();  ?>
<? //var_dump($MODEL); exit(); ?>

<? foreach ($MODEL as $value): ?>

<?php $src = $this->drawRoute("pic", "onesrc", [
                "module" => "good",
                "id" => $value["id"]
            ]) ?>

<div class="card product card-product-shop" >
    <img style="max-height:300x;"  src="<?= $src ?>" class="card-img" alt="...">
    <div class="card-body">
            <h5 class="card-title product-name"><?= $value["name"] ?></h5>
            <p class="card-text product-price"><?= $value["price"] ?>Р </p>
            <a href="/shop/good/<?= $value["cat_name"] ?>/<?= $value["name"] ?>" class="btn btn-primary">Посмотреть</a>
           
    </div>
</div>

<? endforeach; ?>

<? //var_dump($MODEL); exit();  ?>
<? //var_dump($MODEL); exit(); ?>

<? foreach ($MODEL as $value): ?>

<?php $src = $this->drawRoute("pic", "onesrc", [
                "module" => "good",
                "id" => $value["id"]
            ]) ?>
<div class="col-sm">
    <div class="card" style="width: 16rem; height: 30rem;  margin-top: 1rem;">
       <!--  <img src="<?= $src ?>" class="card-img" alt="..."> -->
        <div class="content-card-product-images" style="background:url(<?= $src ?>); "></div> 
        <div class="card-body myfontmain text-center">
                <h5 class="card-title product-name"><?= $value["name"] ?></h5>
                
                <?php if ($value["is_discount"] == true): ?>
                   <?php if ($value["price"] == ""): ?>
                    <p class="card-text product-price" style="text-decoration: line-through;"><?= $value["price"] ?> </p>
                    <?php else: ?>
                    <p class="card-text product-price" style="text-decoration: line-through;"><?= $value["price"] ?>Р </p>
                    <?php endif; ?>
                <p class="card-text product-price"><?= $value["price_discount"] ?>Р </p>
                <?php else: ?>
                    <?php if ($value["price"] == ""): ?>
                    <p class="card-text product-price" ><?= $value["price"] ?> </p>
                    <?php else: ?>
                    <p class="card-text product-price" ><?= $value["price"] ?>Р </p>
                    <?php endif; ?>
               
                <?php endif; ?>
                <a href="/shop/good/<?= str_replace("/", "_", $value["cat_name"])  ?>/<?= str_replace("/", "_", $value["name"]) ?>" class="btn btn-primary text-center">Посмотреть</a>
            
        </div>
    </div>
</div>

<? endforeach; ?>
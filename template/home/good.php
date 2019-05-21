
<?php $url = "/shop/good/" . str_replace("/", "_", $MODEL["cat_name"]) . "/" . $MODEL["name"] ?>

<?php $src = $this->drawRoute("pic", "onesrc", [
                "module" => "good",
                "id" => $MODEL["id"]
            ]) ?>

<div class="col-sm">
    <div class="card" style="width: 20rem; height: 30rem;">
        <a href="<?= $url ?>" style="width: 20rem; height: 25rem;">
           <!-- <img src="<?= $src ?>" class="card-img" style="width: 20rem; height: 25rem;" alt="..."> -->
           <div class="content-card-product-images" style="background:url(<?= $src ?>); "></div> 
        </a>
       
        <div class="card-body">
            <p class="card-text text-center" >
                <a href="<?= $url ?>">
                    <?= $MODEL["name"] ?>
                </a>
            </p>
        </div>
    </div>
</div>
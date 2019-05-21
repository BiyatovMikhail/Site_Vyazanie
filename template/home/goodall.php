
<?php $url = "/shop/good/" . str_replace("/", "_", $MODEL["cat_name"]) . "/" . $MODEL["name"] ?>

<?php $src = $this->drawRoute("pic", "onesrc", [
                "module" => "good",
                "id" => $MODEL["id"]
            ]) ?>

<div class="col-sm">
    <div class="card" style="width: 20rem; height: 30rem;">
        <a href="<?= $url ?>">
           <!-- <img src="<?= $src ?>" class="card-img" alt="..."> -->
          <div class="content-card-product-images" style="width: 20rem; height: 30rem; background:url(<?= $src ?>); "></div>
        </a>
      
    </div>
</div>

<?php $url = "/shop/good/" . str_replace("/", "_", $MODEL["cat_name"]) . "/" . $MODEL["name"] ?>

<?php $src = $this->drawRoute("pic", "onesrc", [
                "module" => "good",
                "id" => $MODEL["id"]
            ]) ?>

<div class="col-sm">
    <div class="card" style="width: 20rem;">
        <a href="<?= $url ?>">
            <img src="<?= $src ?>" class="card-img" alt="...">
        </a>
        <div class="card-body">
            <p class="card-text text-center" style="font-family: 'Parisienne', cursive;">
                <a href="<?= $url ?>">
                    <?= $MODEL["name"] ?>
                </a>
            </p>
        </div>
    </div>
</div>



<?php $src = $this->drawRoute("pic", "onesrc", [
                "module" => "good",
                "id" => $MODEL["id"]
            ]) ?>

<div class="col-sm">
    <div class="card" style="width: 20rem;">
        <img src="<?= $src ?>" class="card-img" alt="...">
        <div class="card-body">
            <p class="card-text text-center" style="font-family: 'Parisienne', cursive;"><?= $MODEL["name"] ?></p>
        </div>
    </div>
</div>
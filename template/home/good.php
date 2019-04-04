


<?php $src = $this->drawRoute("pic", "onesrc", [
                "module" => "good",
                "id" => $MODEL["id"]
            ]) ?>

<div class="col-sm">
    <div class="card card-home-main" >
        <div class="content-card-home-main-images" style="background:url(<?= $src ?>); "></div>
        <div class="card-body">
            <p class="card-text"><?= $MODEL["name"] ?></p>
        </div>
    </div>
</div>
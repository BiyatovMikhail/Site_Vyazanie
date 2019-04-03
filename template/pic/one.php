<span class="picElement">
<div class="pic-element-image">
    <img 
        src="<?= $MODEL["pic"]["link"] ?>" 
        alt="<?= $MODEL["pic"]["name"] ?>" 
        title="<?= $MODEL["pic"]["name"] ?>" 
    />
</div>
    <?php if ($MODEL["del"]): ?>
        <a class="btn btn-danger" href="/pic/del/<?= $MODEL["id"] ?>">Удалить фото</a>
    <?php endif; ?>
   
</span>

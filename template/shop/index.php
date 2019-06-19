<? $MODEL  ?>
<? //var_dump($MODEL); exit(); ?>

<div class="shop-products">
        
        <div class="container">
                <div class="row">
                        <div class="line-empty"></div>
                </div>
                <div class="row">
                        <div class="col">
                                <?= $this->WriteHTML($MODEL["cat"], "shop", "categleftmenu"); ?>
                                
                        </div>
                        <div class="col-10">
                                <?php if (isset($MODEL["category"])): ?>
                                <div class="container">
                                        <nav class="nav shop-bread-crambs">
                                                <a class="nav-link active" href="/shop">Каталог</a>
                                                <span class="shop-separator"> > </span>
                                                <a class="nav-link" href="/shop/category/<?= $MODEL["category"] ?>"><?= str_replace("_", "/",  $MODEL["category"]) ?></a>
                                        </nav>
                                </div>
                                <?php endif; ?>
                                <div class="shop-contents-main"> 
                                        <div class="row">
                                                <?= $this->WriteHTML($MODEL["goodsAll"], "shop", "goodcardone"); ?>
                                        </div>
                                </div>
                        </div>
                </div>
                <div class="row">
                        <div class="line-empty"></div>
                </div>
       </div> 
</div>
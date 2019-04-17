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
                        <!-- <nav class="nav flex-column">
                        <a class="nav-link active" href="/shop/good/stock">Active</a>
                        <a class="nav-link" href="/shop/category/instock">В наличии</a>
                        <a class="nav-link" href="/shop/category/headwear">Головные уборы/Шапки/Шарфы</a>
                        <a class="nav-link" href="/shop/category/mittens">Варежки/Митенки</a>
                        <a class="nav-link" href="/shop/category/крестильное">Крестильное</a>
                        <a class="nav-link" href="/shop/category/sweaterandcardigan">Женские свитера и кардиганы</a>
                        <a class="nav-link" href="/shop/category/manalbums">Мужской альбом</a>
                        <a class="nav-link" href="/shop/category/toys">Подушки/Игрушки/Разное</a>
                        <a class="nav-link" href="/shop/category/tshirts">Футболки/Топы</a>
                        <a class="nav-link" href="/shop/category/socks">Носочки</a>
                        <a class="nav-link" href="/shop/category/childrenalbum">Детский альбом</a>
                        <a class="nav-link" href="/shop/category/dresses">Платья/Юбки</a>
                        <a class="nav-link" href="/shop/category/handbags">Сумочки/Клатчи/Кошельки</a>
                        <a class="nav-link" href="/shop/category/promotions">Акции</a>
                        <a class="nav-link" href="/shop/category/ideasphoto">Идей из интернета для фотосессий</a>
                        <a class="nav-link" href="/shop/category/ideasinspiration">Идей из интернета для вдохновения</a>                        
                        <a class="nav-link disabled" href="#">Disabled</a>
                        </nav> -->
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
                        <div class="row">

                                
                                <div class="card product card-product-shop" >
                                        <div class="content-card-product-shop-images" style="background:url(/img/images1.jpg); "></div>
                                        <div class="card-body">
                                                <h5 class="card-title product-name">Название карточки</h5>
                                                <p class="card-text product-price">2000р.</p>
                                                <a href="#" class="btn btn-primary">Посмотреть</a>
                                                <a href="#" class="btn btn-primary">В корзину</a>    
                                        </div>
                                </div>
                                <div class="card product card-product-shop" >
                                        <div class="content-card-product-shop-images" style="background:url(/img/images4.jpg); "></div>
                                        <div class="card-body">
                                                <h5 class="card-title product-name">Название карточки</h5>
                                                <p class="card-text product-price">2000р.</p>
                                                <a href="#" class="btn btn-primary">Посмотреть</a>
                                                <a href="#" class="btn btn-primary">В корзину</a>    
                                        </div>
                                </div>

                        </div>






                               
                        </div>
                </div>
         </div>
       </div> 
</div>
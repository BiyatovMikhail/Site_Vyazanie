<? $MODEL  ?>
<? //var_dump($MODEL["goods"]["params"]); exit(); ?>

<div class="container">
    <div class="row">
        <div class="col">
                            <?= $this->WriteHTML($MODEL["category"], "shop", "categleftmenu"); ?>
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
            <?php if (isset($MODEL["catname"])): ?>
                        <div class="container">
                                <nav class="nav shop-bread-crambs">
                                        <a class="nav-link active" href="/shop">Каталог</a>
                                        <span class="shop-separator"> > </span>
                                        <a class="nav-link" href="/shop/category/<?= $MODEL["catname"] ?>"><?= str_replace("_", "/",  $MODEL["catname"]) ?></a>
                                        <span class="shop-separator"> > </span>
                                        <a class="nav-link" href="/shop/category/<?= $MODEL["catname"] ?>/<?= $MODEL["goods"]["name"]?>"><?= str_replace("_", "/",  $MODEL["goods"]["name"]) ?></a>
                                </nav>
                        </div>
            <?php endif; ?>
                <div class="shop-product" >
                    <div class="container">
                        <div class="row">
                            <div class="line-empty"></div>
                        </div>

                        <div class="row">
                            <div class="col" style="background-color: green;">
                                <div class="product-gallery">
                                    <div class="product-main-images">
                                        <?php $src = $this->drawRoute("pic", "onesrc", [
                                            "module" => "good",
                                            "id" => $MODEL["goods"]["id"]
                                        ]) ?>
                                       
                                        <img src="<?= $src ?>" class="card-img" alt="...">
                                    </div>
                                    <div class="product-images">
                                        <div class="row">
                                        <?php $srcsm = $this->drawRoute("pic", "allsrc", [
                                            "module" => "good",
                                            "id" => $MODEL["goods"]["id"]
                                        ]); ?>
                                            
                                            <?php foreach ($srcsm  as $value): ?>
                                                <div class="all-product-images">
                                                    <div class="card mx-1 my-1" style="width: 4rem;" >
                                                        <img src="<?= $value["link"] ?>" class="card-img img-fluid" alt="<?= $value["name"] ?>">
                                                    </div>
                                                </div>
                                            <?php endforeach; ?>

                                            <?php $i = 0; foreach ($srcsm  as $value): $i++; if ($i == 1) continue;?>
                                                <div class="all-product-images">
                                                    <div class="card card-product-images" >
                                                         <div class="content-card-product-images" style="background:url(<?= $value["link"] ?>); "></div>
                                                    </div>
                                                </div>
                                            <?php endforeach; ?>



                                            <div class="all-product-images">
                                                <div class="card card-product-images" >
                                                    <div class="content-card-product-images" style="background:url(/img/images4.jpg); "></div>
                                                </div>
                                            </div>
                                            <div class="all-product-images">
                                                <div class="card card-product-images" >
                                                    <div class="content-card-product-images" style="background:url(/img/images3.jpg); "></div>
                                                </div>
                                            </div>
                                           
                                        </div>

                                        <script>
                                            jQuery(".all-product-images img").click(function() {
                                                var img = jQuery(this);
                                                jQuery(".product-main-images img").attr("src", img.attr("src"));
                                            })
                                        </script>
                                        <div class="clear"></div>
                                    </div>
                                    <div class="product-social">

                                    </div>
                                </div>
                            </div>
                            <div class="col" style="background-color: red;">
                                <div class="product-description">
                                    <div class="product-name-good"> <?= $MODEL["goods"]["name"]?></div>
                                    <?php if ($MODEL["goods"]["is_discount"] == true): ?>
                                    <div class="product-price-good" style="text-decoration: line-through;"> <?= $MODEL["goods"]["price"]?>р </div>
                                    <div class="product-price-discount-good"><?= $MODEL["goods"]["price_discount"]?>р </div>
                                    <?php else: ?>
                                    <div class="product-price-good"> <?= $MODEL["goods"]["price"]?>р </div>
                                     <?php endif; ?>
                                    <div class="description-product"><?= $MODEL["goods"]["description"]?> </div>
                                    
                                    <?php foreach ($MODEL["goods"]["params"] as $value): ?>
                                        <div class="text-product"> 
                                            <p> <?= $value["name"]?> - <?= $value["value"]?></p>

                                        </div>
                                    <? endforeach; ?>                                
                                  
                                    <div class="text-product"> 
                                        
                                        <br>

                                        "Остались вопросы? Пишите в Whatsapp или звоните по номеру +7 (968) 827-20-04 и мы обязательно поможем определиться вам с выбором, а также сразу оформить заказ."

                                        "Обращаем ваше внимание, что товар, которого нет в наличии может быть произведен под заказ. Условия размещения индивидуального заказа читайте здесь."
                                    </div>
                                    <div class="product-params">
                                        <div class="size-product">
                                        </div>
                                        <?php if ($value["count_good"] === 0): ?>
                                        <a href="#" class="btn btn-primary">Заказать</a>
                                        <?php else: ?>
                                        <div class="count-product"> Количество товара в наличии -  <?= $MODEL["goods"]["count_good"]?> </div>
                                        <a href="#" class="btn btn-primary">Добавить в корзину</a>
                                        <?php endif; ?>
                                    </div>
                                </div> 
                            </div>
                        </div>
                    </div>
                </div>


                <div class="container">
                    <div class="line-decorate">
                            <img src="/img/LineBigDecor11.png" style="width: 70%;">
                    </div>
                    <div class="shop-product bind-product">
                        <div class="bind-product-description"> 
                            <h3> Также вам может понравиться </h3>
                        </div>
                        <div class="bind-product-content">
                        <div class="row">
                                <?= $this->WriteHTML($MODEL["goods4bycat"], "shop", "goodcardone"); ?>
                        </div>

                            <div class="card product" style="width: 14rem;">
                                    <img src="/img/images1.jpg" class="card-img-top" alt="...">
                                    <div class="card-body">
                                            <h5 class="card-title product-name">Название карточки</h5>
                                            <p class="card-text product-price">2000р.</p>
                                            <a href="#" class="btn btn-primary">Посмотреть</a>
                                            <a href="#" class="btn btn-primary">В корзину</a>    
                                    </div>
                            </div>
                            <div class="card product" style="width: 14rem;">
                                    <img src="/img/images1.jpg" class="card-img-top" alt="...">
                                    <div class="card-body">
                                            <h5 class="card-title product-name">Название карточки</h5>
                                            <p class="card-text product-price">2000р.</p>
                                            <a href="#" class="btn btn-primary">Посмотреть</a>
                                            <a href="#" class="btn btn-primary">В корзину</a>    
                                    </div>
                            </div>
                            <div class="card product" style="width: 14rem;">
                                    <img src="/img/images1.jpg" class="card-img-top" alt="...">
                                    <div class="card-body">
                                            <h5 class="card-title product-name">Название карточки</h5>
                                            <p class="card-text product-price">2000р.</p>
                                            <a href="#" class="btn btn-primary">Посмотреть</a>
                                            <a href="#" class="btn btn-primary">В корзину</a>    
                                    </div>
                            </div>
                            <div class="clear"></div>
                        </div>
                    </div>

                </div>
        </div>
    </div>
</div>
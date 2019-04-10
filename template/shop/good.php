<? $MODEL  ?>
<? //var_dump($MODEL); exit(); ?>

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
                                        <img src="/img/images1.jpg">
                                    </div>
                                    <div class="product-images">
                                        <div class="row">
                                            <div class="all-product-images">
                                                <div class="card card-product-images" >
                                                    <div class="content-card-product-images" style="background:url(/img/images2.jpg); "></div>
                                                </div>
                                            </div>
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
                                            <div class="all-product-images">
                                                <div class="card card-product-images" >
                                                    <div class="content-card-product-images" style="background:url(/img/images2.jpg); "></div>
                                                </div>
                                            </div>
                                            <div class="all-product-images">
                                                <div class="card card-product-images" >
                                                    <div class="content-card-product-images" style="background:url(/img/images1.jpg); "></div>
                                                </div>
                                            </div>
                                            <div class="all-product-images">
                                                <div class="card card-product-images" >
                                                    <div class="content-card-product-images" style="background:url(/img/images1.jpg); "></div>
                                                </div>
                                            </div>
                                            <div class="all-product-images">
                                                <div class="card card-product-images" >
                                                    <div class="content-card-product-images" style="background:url(/img/images2.jpg); "></div>
                                                </div>
                                            </div>
                                            <div class="all-product-images">
                                                <div class="card card-product-images" >
                                                    <div class="content-card-product-images" style="background:url(/img/images1.jpg); "></div>
                                                </div>
                                            </div>
                                            <div class="all-product-images">
                                                <div class="card card-product-images" >
                                                    <div class="content-card-product-images" style="background:url(/img/images1.jpg); "></div>
                                                </div>
                                            </div>
                                        </div>

                                        
                                        <div class="clear"></div>
                                    </div>
                                    <div class="product-social">

                                    </div>
                                </div>
                            </div>
                            <div class="col" style="background-color: red;">
                                <div class="product-description">
                                    <h1 class="name-product"> <?= $MODEL["goods"]["name"]?></h1>
                                    <h2 class="price-product"> <?= $MODEL["goods"]["price"]?>р </h2>
                                    <div class="price-product-discount"><?= $MODEL["goods"]["price_discount"]?>р </div>
                                    <div class="description-product"><?= $MODEL["goods"]["description"]?> </div>


                                    <div class="text-product"> 
                                        <strong> Масса </strong>
                                        <br>
                                        "0,900 кг"
                                        <br>
                                        <strong>Пол</strong>
                                        <br>
                                        "Женское"
                                        <br>
                                        <strong>Материал</strong>
                                        <br>
                                        "25% шерсть, 75% полиамид."
                                        <br>

                                        "Рост модели: 171 см, размер onesize."
                                        <br>
                                        <br>

                                        "Остались вопросы? Пишите в Whatsapp или звоните по номеру +7 (968) 827-20-04 и мы обязательно поможем определиться вам с выбором, а также сразу оформить заказ."

                                        "Обращаем ваше внимание, что товар, которого нет в наличии может быть произведен под заказ. Условия размещения индивидуального заказа читайте здесь."
                                    </div>
                                    <div class="product-params">
                                        <div class="size-product">
                                        </div>
                                        <a href="#" class="btn btn-primary">Добавить в корзину</a>
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
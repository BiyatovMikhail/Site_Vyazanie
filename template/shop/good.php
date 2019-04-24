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
                                        <?php if ($MODEL["goods"]["count_good"] == 0): ?>
                                       
                                        <div class="count-product">Товара в наличии нет, но его можно заказать. </div>
                                        <a href="#" class="btn btn-primary">Заказать</a>
                                            <!-- Button trigger modal order -->
                                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#orderModalCenter">
                                            Заказать модальное окно
                                            </button>
                                        <?php else: ?>
                                        <div class="count-product"> Количество товара в наличии -  <?= $MODEL["goods"]["count_good"]?> шт </div>
                                        <a href="#" class="btn btn-primary">Добавить в корзину</a>
                                            <!-- Button trigger modal basket -->
                                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#basketModalCenter">
                                            Добавить в корзину модальное окно корзина
                                            </button>
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

                        <?php //var_dump($MODEL["goods4bycat"]); exit(); ?>
                        <div class="row">
                                <?= $this->WriteHTML($MODEL["goods4bycat"], "shop", "goodcardone"); ?>
                        </div>

                            
                            <div class="clear"></div>
                        </div>
                    </div>

                </div>
        </div>
    </div>

    <!-- Button trigger modal -->
    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#orderModalCenter">
    Запустить модальное окно
    </button>

  

    <!-- Modal order -->
    <form class="order-order" method="POST" action="/order/save_order" novalidate>
    <div class="modal fade" id="orderModalCenter" tabindex="-1" role="dialog" aria-labelledby="orderModalCenterTitle"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="orderModalLongTitle">Заявка на товар</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">

                        <input type="hidden" name="user_id" value="<?= $MODEL["userid"] ?>" />
                        <input type="hidden" name="good_id" value="<?= $MODEL["goods"]["id"] ?>" />
    
    
                        <div class="form-group">
                            <label for="order-user-name" class="col-form-label">Ваше имя:</label>
                            <input type="text" name="user_name" class="form-control" id="order-user-name" placeholder="введите имя">
                        </div>
                        <div class="form-group">
                            <label for="orderInputEmail1">Ваш еmail:</label>
                            <input type="email" name="user_email" class="form-control" id="orderInputEmail1"
                                aria-describedby="emailHelp" placeholder="введите email">
    
                        </div>
                        <div class="form-group">
                            <label for="orderInputPhone1">Ваш телефон:</label>
                            <input type="text" name="user_phone" class="form-control" id="orderInputPhone1" placeholder="введите телефон">
                        </div>
                        <div class="form-group">
                            <label for="ordertextAreaMessage">Cообщение</label>
                            <textarea class="form-control" name="user_message" id="ordertextAreaMessage" placeholder="ваше сообщение"></textarea>
                        </div>
    
                    
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary " data-dismiss="modal">Закрыть</button>
                    <button type="submit" class="btn btn-primary">Отправить заявку</button>
                </div>
            </div>
        </div>
    </div>
    </form>



 

    <!-- Modal basket-->
    <div class="modal fade" id="basketModalCenter" tabindex="-1" role="dialog" aria-labelledby="basketModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="basketModalLongTitle">Заявка на товар</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-body">
       <form class="order-basket" method="POST" action="/basket/order" novalidate>>
          <div class="form-group">
            <label for="order-user-name" class="col-form-label">Ваше имя:</label>
            <input type="text" class="form-control" id="order-user-name" placeholder="введите имя">
          </div>
         
        </form>
        <div class="modal-body">
            <h5>Popover in a modal</h5>
            <p>This <a href="#" role="button" class="btn btn-secondary popover-test" title="Popover title" data-content="Popover body content is set in this attribute.">перейти в корзину</a> triggers a popover on click.</p>
            <hr>
            <h5>Popover in a modal</h5>
            <p>This <a href="#" role="button" class="btn btn-secondary popover-test" title="Popover title" data-content="Popover body content is set in this attribute.">продолжить покупки</a> triggers a popover on click.</p>
            <hr>
            <h5>Tooltips in a modal</h5>
            <p><a href="#" class="tooltip-test" title="Tooltip">перейти в корзину для оформления заказа</a> and <a href="#" class="tooltip-test" title="Tooltip">продолжить покупки</a> have tooltips on hover.</p>
            </div>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary " data-dismiss="modal">Закрыть</button>
            <button type="button" class="btn btn-primary">Отправить заявку</button>
        </div>
        </div>
    </div>
    </div>





</div>
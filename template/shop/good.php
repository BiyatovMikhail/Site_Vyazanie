<? $MODEL  ?>
<? //var_dump($MODEL); exit(); ?>

<div class="container">
    <div class="row">
        <div class="col">
                            <?= $this->WriteHTML($MODEL["category"], "shop", "categleftmenu"); ?>
                            
        </div>


            <div class="col-10">
            <?php if (isset($MODEL["catname"])): ?>
                        <div class="container">
                                <nav class="nav shop-bread-crambs myfontmain">
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
                            <div class="col" >
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
                                    <div class="slider">
                                      <a href="/shop/slidergood" > <button type="button" class="btn btn-primary"> Slider  </button> </a>
                                       <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#sliderModalCenter">
                                            Slider модальное окно
                                        </button>
                                    </div>
                                    <div class="product-social">

                                    </div>
                                </div>
                            </div>
                            <div class="col" >
                                <div class="product-description myfontmain">
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
                                  
                                    <div class="text-product myfontmain"> 
                                        
                                        <br>

                                        "Остались вопросы? Пишите в Whatsapp или звоните по номеру +7 (968) 827-20-04 и мы обязательно поможем определиться вам с выбором, а также сразу оформить заказ."

                                        "Обращаем ваше внимание, что товар, которого нет в наличии может быть произведен под заказ. Условия размещения индивидуального заказа читайте здесь."
                                    </div>
                                    <div class="product-params">
                                        <div class="size-product">
                                        </div>
                                        <?php if ($MODEL["goods"]["count_good"] == 0): ?>
                                       
                                        <div class="count-product myfontmain">Товара в наличии нет, но его можно заказать. </div>
                                       <!-- <a href="#" class="btn btn-primary myfontmain">Заказать</a> -->
                                                <?php if ($MODEL["userid"] == -1): ?>
                                                <!-- Button trigger modal order notUser -->
                                                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#ordernotUserModalCenter">
                                                Заказать модальное окно notUser
                                                </button>
                                                <?php else: ?>
                                                <!-- Button trigger modal order -->
                                                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#orderModalCenter">
                                                Заказать модальное окно User
                                                </button>

                                                <?php endif; ?>
                                        <?php else: ?>
                                        <div class="count-product"> Количество товара в наличии -  <?= $MODEL["goods"]["count_good"]?> шт </div>
                                            <form id="basket_id" class="order-basketTemp" method="POST" action="/basket/saveBasketTemp" novalidate>
                                                <input type="hidden" name="user_id" value="<?= $MODEL["userid"] ?>" />
                                                <input type="hidden" name="good_id" value="<?= $MODEL["goods"]["id"] ?>" />
                                                <input type="hidden" name="count" value="1" />
                                                
                                                <!-- <a href="#" class="btn btn-primary">Добавить в корзину</a> -->
                                            <!--    <button type="submit" class="btn btn-primary">Добавить в корзину</button>  -->
                                                    <!-- Button trigger modal basket -->
                                                    <button onclick="sendToBasket()" type="button" class="btn btn-primary"  data-target="#basketModalCenter">
                                                        Добавить в корзину модальное окно корзина
                                                    </button>

                                                    <script>
                                                        function sendToBasket() {
                                                            jQuery.post("/basket/saveBasketTemp", jQuery("#basket_id").serialize(), function(data) {
                                                                if (data == "") {
                                                                    $('#basketModalCenter').modal('show');
                                                                } else {
                                                                    jQuery("#alertModalLongTitleBody").html(data);
                                                                    $('#alertModalCenter').modal('show');
                                                                }
                                                            });
                                                        }
                                                    </script>
                                            </form>
                                        <?php endif; ?>
                                    </div>
                                </div> 
                            </div>
                        </div>
                    </div>
                </div>








                <div class="container">
                    
                    <div class="row">
                        <div class="line-separator" ></div>
                    </div> 
                    <div class="row">
                        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                            <ol class="carousel-indicators">
                                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                            </ol>
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <?php $src = $this->drawRoute("pic", "onesrc", [
                                            "module" => "good",
                                            "id" => $MODEL["goods"]["id"]
                                        ]) ?>
                                    <img class="d-block w-100" src="<?= $src ?>" alt="First slide">
                                </div>
                                <div class="carousel-item">
                                <img class="d-block w-100" src="<?= $src ?>" alt="Second slide">
                                </div>
                                <div class="carousel-item">
                                <img class="d-block w-100" src="/img/images1.jpg" alt="Third slide">
                                </div>
                            </div>
                            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="sr-only">Previous</span>
                            </a>
                            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="sr-only">Next</span>
                            </a>
                        </div>                                
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
  <!--  <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#orderModalCenter">
    Запустить модальное окно
    </button> -->

  

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
    
                        <?php if ($MODEL["goods"]["is_discount"] == true): ?>
                        <input type="hidden" name="price_order" value="<?= $MODEL["goods"]["price_discount"] ?>" />
                        <?php else: ?>
                        <input type="hidden" name="price_order" value="<?= $MODEL["goods"]["price"] ?>" />
                        <?php endif; ?>
    <!--
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
                        </div>  -->
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

<!-- Modal order notUser-->
<form class="order-order" method="POST" action="/order/save_order" novalidate>
    <div class="modal fade" id="ordernotUserModalCenter" tabindex="-1" role="dialog" aria-labelledby="ordernotUserModalCenterTitle"
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
                     
                        <?php if ($MODEL["goods"]["is_discount"] == true): ?>
                        <input type="hidden" name="price_order" value="<?= $MODEL["goods"]["price_discount"] ?>" />
                        <?php else: ?>
                        <input type="hidden" name="price_order" value="<?= $MODEL["goods"]["price"] ?>" />
                        <?php endif; ?>
            
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
            <div class="modal-content text-center">
                <div class="modal-header">
                    <h5 class="modal-title" id="basketModalLongTitle">Товар добавлен в карзину</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            
                <div class="modal-body">
                    <!-- <h5>Р5</h5> -->
                    <p><a href="/user1/basketUser" role="button" class="btn btn-secondary popover-test" title="Popover title" data-content="Popover body content is set in this attribute.">перейти в корзину</a> </p>
                    <hr>
                <!--  <h5>Н5</h5> -->
                    <p> <a href="#" data-dismiss="modal" role="button" class="btn btn-secondary popover-test" title="Popover title" data-content="Popover body content is set in this attribute.">продолжить покупки</a> </p>
                    <hr>
                <!-- <h5>р5</h5> 
                    <p><a href="#" class="tooltip-test" title="Tooltip">перейти в корзину для оформления заказа</a> and <a href="#" class="tooltip-test" title="Tooltip">продолжить покупки</a> on hover.</p>
                    -->
                </div>
        <!--    <div class="modal-footer">
                    <button type="button" class="btn btn-secondary " data-dismiss="modal">Закрыть</button>
                </div> -->
            </div>
        </div>
    </div>



<!-- Modal allert-->
<div class="modal fade" id="alertModalCenter" tabindex="-1" role="dialog" aria-labelledby="alertModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content text-center">
                <div class="modal-header">
                    <h5 class="modal-title" id="alertModalLongTitle"></h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            
                <div class="modal-body" id="alertModalLongTitleBody">
                    
                </div>
        
                <div class="modal-footer">
                <?php if ($MODEL["userid"] == -1): ?>
                    <a href="/loginform/registerform" ><button type="button" class="btn btn-primary"> Зарегистрироваться </button> </a>
                    <a href="/loginform" > <button type="button" class="btn btn-primary"> Войти  </button> </a>
                    <button type="button" class="btn btn-secondary " data-dismiss="modal">Закрыть</button>
                <?php else: ?>
                     <button type="button" class="btn btn-secondary " data-dismiss="modal">Закрыть</button>
                <?php endif; ?>
                </div> 
            </div>
        </div>
    </div>


<!-- Modal slider-->
<div class="modal fade bd-example-modal-xl" id="sliderModalCenter" tabindex="-1" role="dialog" aria-labelledby="sliderModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered my-modal" role="document">
            <div class="modal-content text-center">
                <div class="modal-header">
                    <h5 class="modal-title" id="sliderModalLongTitle"></h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            
                <div class="modal-body" id="sliderModalLongTitleBody">
                <div class="bd-example">
                    <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
                        <ol class="carousel-indicators">
                        <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
                        <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
                        <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
                        </ol>
                        <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="/img/images1.jpg" class="d-block w-100" alt="...">
                            <div class="carousel-caption d-none d-md-block">
                            <h5>First slide label</h5>
                            <p>Nulla vitae elit libero, a pharetra augue mollis interdum.</p>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img src="/img/images2.jpg" class="d-block w-100" alt="...">
                            <div class="carousel-caption d-none d-md-block">
                            <h5>Second slide label</h5>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img src="/img/images3.jpg" class="d-block w-100" alt="...">
                            <div class="carousel-caption d-none d-md-block">
                            <h5>Third slide label</h5>
                            <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur.</p>
                            </div>
                        </div>
                        </div>
                        <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                        </a>
                    </div>
                    </div>
                </div>
        
                <div class="modal-footer">
                    
                    <button type="button" class="btn btn-secondary " data-dismiss="modal">Закрыть</button>
                </div> 
            </div>
        </div>
    </div>


<!-- Extra large modal -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target=".bd-slider-modal-xl">Extra large modal</button>

<div class="modal fade bd-slider-modal-xl" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-xl my-modal">
    <div class="modal-content">
      ...
    </div>
  </div>
</div>

<!-- Large modal -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target=".bd-example-modal-lg">Large modal</button>

<div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      ...
    </div>
  </div>
</div>



</div>
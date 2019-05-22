<!--

<div class="col-3">

</div>
<div class="col-9">
    <?php //$this->drawRoute("statictext", "block", ["conf" => "home", "sec" => "text"]) ?>    
</div>

-->

<?php //var_dump($MODEL[1]); exit(); ?>

<?php 

$one = $this->WriteHTML($MODEL[0]["items"][0], "home", "good");
$two = $this->WriteHTML($MODEL[0]["items"][1], "home", "good");

?>

this is index
<div class="container">
  <!-- <div class="row">
    <div class="line-empty"></div>
  </div>  -->
  <!-- <div class="row">
    <div class="line-decorate">
      <img src="/img/linebigdecornew1.png" style="width: 100%;">
    </div>
    <div class="line-testmy"></div> 
    <div class="line-separator" ></div>
  </div>  -->
  
  <div class="row">

    <?= $one ?>

    <div class="col-sm">
      <div class="card myfontmain " style="width: 20rem; height: 30rem;" >
      <div class="card-content ">
            <div class="element-indent-empty">
            </div>
            <div class="element-post-title">
              <p class="text-center text-uppercase font-weight-bold" > Наши новинки </p>
            </div>
            <div class="element-line-decorate">
                <img src="/img/line-decor1.png" class="card-img-top" alt="..." >
            </div>
            <div class="element-post-text">
               <p class="text-center font-italic" > Новая коллекция </p>
            </div>
            <div class="element-post-button text-center">
                <a href="/shop" class="btn btn-outline-secondary" >Перейти в магазин</a>
            </div>
            
      </div>
      </div>
    </div>
    
    <?= $two ?>

  </div>
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->

<?php 

$one = $this->WriteHTML($MODEL[1]["items"][0], "home", "good");
$two = $this->WriteHTML($MODEL[1]["items"][1], "home", "good");

?>

 <!--  <div class="row">
    <div class="line-empty"></div>
  </div> -->
  <div class="row">
    <!-- <div class="line-decorate">
      <img src="/img/linebigdecornew2.png" style="width: 100%;">
    </div>
    <div class="line-testmy"></div> -->
    <div class="line-separator" ></div>
  </div> 
  
  <div class="row">
    <?= $one ?>
    <div class="col-sm">
      <div class="card" style="width: 20rem; height: 30rem;" >
          <div class="element-indent-empty">
          </div>
         <div class="element indent myfontmain text-center">
           
            <div class="element-post-title">
              <p class="element-text-title text-center" > Наши акции </p>
            </div>
            <div class="element-line-decorate">
                <img src="/img/line-decor1.png" class="card-img-top" alt="..." >
            </div>
            <div class="element-post-text">
               <p class="element-text text-center"> новые акции </p>
            </div>
            <div class="element-post-button text-center">
                <a href="/shop/category/Акции" class="btn btn-outline-secondary" >Посмотреть акции</a>
            </div>
            
          </div>
      </div>
    </div>
    
    <?= $two ?>

  </div>
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<div class="row" >
  <div class="clik-main-good">
      <?php 

      $oneall = $this->WriteHTML($MODEL[2]["items"][0], "home", "goodall");
      $twoall = $this->WriteHTML($MODEL[2]["items"][1], "home", "goodall");
      $threeall = $this->WriteHTML($MODEL[2]["items"][2], "home", "goodall");

      ?> 
  </div>
</div>
  <!-- <div class="row">
    <div class="line-empty"></div>
  </div> -->
  <div class="row">
    <!-- <div class="line-decorate">
      <img src="/img/linebigdecornew3.png" style="width: 100%;">
    </div>
    <div class="line-testmy"></div> -->
    <div class="line-separator" ></div>
  </div> 

  
  <div class="row">

  <?= $oneall ?>
  <?= $twoall ?>
  <?= $threeall ?>
    
  </div>

<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
   <!-- <div class="row">
       <div class="line-empty"></div>
    </div> -->
    <div class="row">
       <div class="line-decorate2" >
        <!-- <img src="/img/linebigdecornew4.png" style="height: 20px;" > -->
       </div> 

       <!-- <div class="line-decorate2" style="background:url(/img/linebigdecornew4.png) no-repeat center center;">
        
       </div> -->
       <div class="line-separator" ></div>
    </div>   

</div>
<div class="section-after-content">
  <div class="container">
  <!-- Stack the columns on mobile by making one full-width and the other half-width -->
      <div class="row">
        <div class="col" ></div>
      
      </div>
      <div class="row">
        <div class="col-2" >
          <div class="image-block img-rounded center-block">
            <img src="/img/hm1.jpg" style="width: 100%;">
          </div>
        </div>
        <div class="col-4" >
          <div class="text-block-head">
            Ручная работа
            
          </div> 
          <div class="text-block-content">
            Каждое изделие мы создаем исключительно вручную с большой любовью, благодаря чему наши вещи качественные и уникальные.
          </div> 
        </div>
        <div class="col-2 " >
          <div class="image-block ">
            <img src="/img/hm2.jpg"  style="width: 100%;">
          </div>
        </div>
        <div class="col-4" >
          <div class="text-block-head">
            Собственное производство
            
          </div> 
          <div class="text-block-content">
            Начиная от выбора пряжи заканчивая упаковкой заказов - все этапы производства и обработки проходят контроль качества.
          </div> 
        </div>
      </div>
      <div class="row">
        <div class="col" ></div>
      
      </div>
      <div class="row">
       <div class="line-empty"></div>
      </div>
      
    </div> 
      
  </div>
    

</div>


 <script>
    // jQuery(".clik-main-good img").click(function() {
    //     var img = jQuery(this);
    //     jQuery(".product-main-images img").attr("src", img.attr("src"));

    // })
</script>
<?= $this->WriteHTML("", "layout", "header") ?>

<ul class="nav nav-pills nav-fill navmy">
  <li class="nav-item">
    <a class="nav-link active" href="#">active</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="#">Главная</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="#">Магазин</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="#">Акции</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="#">Доставка и оплата</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="#">Блог</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="#">Полезные статьи</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="#">Контакты</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="#">Корзина</a>
  </li>
  <li class="nav-item">
    <a class="nav-link disabled" href="#">Disabled</a>
  </li>
</ul>
<div class= "main-content">
  this id index
  <div class="container">
    <div class="row">
      <div class="line-empty"></div>
    </div>
    <div class="row">
      <div class="col-sm">
        <div class="card" style="width: 18rem;">
           <img src="..." class="card-img-top" alt="...">
           <div class="card-body">
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
           </div>
        </div>
      </div>
      <div class="col-sm">
        <div class="card" style="width: 18rem;">
           <div class="element indent">
              <div class="element-post-title">
                <p class="element-text-title"> Наши новинки </p>
              </div>
              <div class="element-post-text">
                 <p class="element-text"> новая коллекция </p>
              </div>
              <div class="element-post-button">
                 <a class="button-view-1" href="http://flavourknit.ru/shop/"> перейти в магазин </a>
               <button type="button" class="btn btn-outline-secondary">перейти в магазин2</button>
           </div>
        </div>
      </div>
      <div class="col-sm">
        <div class="card" style="width: 18rem;">
          <img src="..." class="card-img-top" alt="...">
        <div class="card-body">
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
        </div>
        </div>
      </div>
    </div>
    <div class="row">
    <div class="line-empty"></div>
  </div>
    <div class="row">
      <div class="col-sm">
        Два Одна из трёх колонок
      </div>
      <div class="col-sm">
       Два  Одна из трёх колонок
      </div>
      <div class="col-sm">
        Два Одна из трёх колонок
      </div>
    </div>
    <div class="row">
      <div class="col-sm">
        три Одна из трёх колонок
      </div>
      <div class="col-sm">
       Три  Одна из трёх колонок
      </div>
      <div class="col-sm">
        Три Одна из трёх колонок
      </div>
    </div>
  </div>
</div>

<script>
$('#myTab a').click(function (e) {
  e.preventDefault()
  $(this).tab('show')
})


</script>


<?= $this->WriteHTML("", "layout", "footer") ?>
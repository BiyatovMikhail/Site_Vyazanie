<?= $this->WriteHTML("", "layout", "header") ?>

<ul class="nav nav-pills nav-fill navmy ">
  <li class="nav-item">
    <a class="nav-link active" href="#">active</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="/">Главная</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="/shop">Магазин</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="/shop/category/Акции">Акции</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="/customerservice">Доставка и оплата</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="/blog2">Блог</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="/usefularticles">Полезные статьи</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="#">Форум</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="/contacts">Контакты</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="/basket">Корзина</a>
  </li>
  <li class="nav-item">
    <a class="nav-link disabled" href="#">Disabled</a>
  </li>
</ul>
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<div class= "main-content">
  <COMPONENT/>
</div>
<div class="dropdown">
  <a class="btn btn-secondary dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
  <p><?= $MODEL ?></p>
  </a>

  <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
    <a class="dropdown-item" href="#">Action</a>
    <a class="dropdown-item" href="#">Another action</a>
    <a class="dropdown-item" href="#">Something else here</a>
  </div>
</div>
<!-- Example split danger button -->
<div class="btn-group">
  <button type="button" class="btn btn-danger">Action</button>
  <button type="button" class="btn btn-danger dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    <span class="sr-only">Toggle Dropdown</span>
  </button>
  <div class="dropdown-menu">
    <a class="dropdown-item" href="#">Action</a>
    <a class="dropdown-item" href="#">Another action</a>
    <a class="dropdown-item" href="#">Something else here</a>
    <div class="dropdown-divider"></div>
    <a class="dropdown-item" href="#">Separated link</a>
  </div>
</div>

<!-- Example single danger button -->
<div class="btn-group">
  <button type="button" class="btn btn-danger dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    Action
  </button>
  <div class="dropdown-menu">
    <a class="dropdown-item" href="#">Action</a>
    <a class="dropdown-item" href="#">Another action</a>
    <a class="dropdown-item" href="#">Something else here</a>
    <div class="dropdown-divider"></div>
    <a class="dropdown-item" href="#">Separated link</a>
  </div>
</div>


<script>

$('.navmy .nav-link').not(".active").mouseover(function() { $(this).addClass("active"); }).mouseleave(function() { $(this).removeClass("active"); });

</script>


<?= $this->WriteHTML("", "layout", "footer") ?>
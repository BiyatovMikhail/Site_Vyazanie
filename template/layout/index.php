<?= $this->WriteHTML("", "layout", "header") ?>

<ul class="nav nav-pills nav-fill navmy">
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
    <a class="nav-link" href="/shop/promotions">Акции</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="/customerservice">Доставка и оплата</a>
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
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<div class= "main-content">
  <COMPONENT/>
</div>

<script>

$('.navmy .nav-link').not(".active").mouseover(function() { $(this).addClass("active"); }).mouseleave(function() { $(this).removeClass("active"); });

</script>


<?= $this->WriteHTML("", "layout", "footer") ?>
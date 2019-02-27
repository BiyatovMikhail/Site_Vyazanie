
<?= $this->WriteHTML("", "layout", "header") ?>

<ul class="nav nav-pills nav-fill justify-content-center inline">
  <li class="nav-item">
    <a class="nav-link active" href="#">active</a>
  </li>
  <li class="nav-item">
    <a class="nav-link active" href="#">Главная</a>
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
      <div class="col-sm">
        Одна из трёх колонок
      </div>
      <div class="col-sm">
        Одна из трёх колонок
      </div>
      <div class="col-sm">
        Одна из трёх колонок
      </div>
    </div>
  </div>
</div>

<?= $this->WriteHTML("", "layout", "footer") ?>


<script>
$('#myTab a').click(function (e) {
  e.preventDefault()
  $(this).tab('show')
})


</script>
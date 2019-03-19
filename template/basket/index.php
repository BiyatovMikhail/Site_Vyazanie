<div class="basket">
<div class="container">
    <h2>Web. Интернет-магазин. Модульный Javascript</h2>
    <br>
    <ul class="nav nav-pills">
        <li><a href="/">Каталог</a></li>
        <li class="active"><a rel="nofollow" href="basket.html">Корзина<span id="total-cart-count" class="badge"></span></a></li>
    </ul>
    <br>
    <div class="table-responsive">
        <table class="table table-hover table-bordered">
            <thead>
                <tr>
                    <th>Артикул</th>
                    <th>Название</th>
                    <th>Фото</th>
                    <th>Цена</th>
                    <th>Количество</th>
                    <th>Сумма</th>
                    <th></th>
                </tr>
            </thead>
            <tbody id="basket">
                <tr><td colspan="6"><img src="img/loading.gif" alt=""></td></tr>
            </tbody>
        </table>
    </div>
    <div>Итого: <span id="total-basket-summa">0</span> руб.</div>
    <br>
    <button id="order" class="btn btn-info">Оформить заказ</button>
</div>
</div>
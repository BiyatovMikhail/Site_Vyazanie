this is goodtable
<?php 
 var_dump($MODEL); exit();
?>

<div class="container">
    <div class="row">
        <div class="col">
                            <?= $this->WriteHTML($MODEL["category"], "shop", "categtopmenu"); ?>
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
</div>
</div>

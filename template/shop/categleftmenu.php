

 
 <nav class="nav flex-column"> 
 
 <? foreach ($MODEL as $value) {?>
          <a class="nav-link" href="/shop/category/<?= str_replace("/", "_", $value["name"]) ?>"><?= $value["name"] ?></a> 
    <?    } ?>

</nav>



 
 <nav class="nav flex-column myfontmain"> 
 
 <? foreach ($MODEL as $value) {?>
          <a class="nav-link" href="/shop/category/<?= str_replace("/", "_", $value["name"]) ?>"><?= $value["name"] ?></a> 
    <?    } ?>

</nav>

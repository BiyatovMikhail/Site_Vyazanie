<a class="text-muted" href="#">
    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="mx-3" focusable="false" role="img"><title>Search</title><circle cx="10.5" cy="10.5" r="7.5"></circle><line x1="21" y1="21" x2="15.8" y2="15.8"></line></svg>
</a>


<div class="btn-group">
  <button type="button" class="btn btn-outline-secondary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    <?= $MODEL ?>
  </button>
  <div class="dropdown-menu">
  <a class="dropdown-item" href="/user1/showprofileuser">профиль</a>
      <a class="dropdown-item" href="/order/showorderuser">мои_заказы</a>
      <a class="dropdown-item" href="/user1/orderuserAll">мои_заказы2</a>
      <a class="dropdown-item" href="/user1/basketBuyUserAll">мои_покупки</a>
      <a class="dropdown-item" href="/user1/basketUser">корзина</a>
      <div class="dropdown-divider"></div>
      <a class="dropdown-item" href="/admin">Админка</a>
      <div class="dropdown-divider"></div>
    
  </div>
</div>

<p> / </p>
<a class="btn btn-sm btn-outline-secondary" href="/loginform/logOut">Выйти</a>
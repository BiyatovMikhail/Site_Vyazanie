<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/all.css">


<div class="container">

<hr>

<div class="card bg-light">
<article class="card-body mx-auto" style="max-width: 400px;">
	<h4 class="card-title mt-3 text-center">Создать аккаунт</h4>
	<p class="text-center">Давайте начнем </p>
	<p>
		<a href="" class="btn btn-block btn-twitter"> <i class="fab fa-twitter"></i>   Войти через Twitter</a>
        <a href="" class="btn btn-block btn-facebook"> <i class="fab fa-facebook-f"></i>   Войти через Facebook</a>
		<a href="" class="btn btn-block btn-google-plus"> <i class="fab fa-google-plus-g"></i>   Войти через Google+</a>
        <a href="" class="btn btn-block btn-vk"> <i class="fab fa-vk"></i>   Войти через Вконтакте</a>
        <a href="" class="btn btn-block btn-odnoklassniki"> <i class="fab fa-odnoklassniki"></i></i>   Войти через Одноклассники</a>
      
	</p>
	<p class="divider-text">
        <span class="bg-light">или</span>
    </p>
	<form method="POST" action="/user1/save_user">
	<div class="form-group input-group">
		<div class="input-group-prepend">
		    <span class="input-group-text"> <i class="fa fa-user"></i> </span>
		 </div>
        <input name="surname" class="form-control" placeholder="Фамилия" type="text">
    </div> <!-- form-group// -->
    <div class="form-group input-group">
		<div class="input-group-prepend">
		    <span class="input-group-text"> <i class="fa fa-user"></i> </span>
		 </div>
        <input name="name" class="form-control" placeholder="Имя" type="text">
    </div> <!-- form-group// -->
	<div class="form-group input-group">
		<div class="input-group-prepend">
		    <span class="input-group-text"> <i class="fa fa-user"></i> </span>
		 </div>
        <input name="name2" class="form-control" placeholder="Отчество" type="text">
    </div> <!-- form-group// -->
    <div class="form-group input-group">
		<div class="input-group-prepend">
		    <span class="input-group-text"> <i class="fas fa-user-secret"></i> </span>
		 </div>
        <input name="nikname" class="form-control" placeholder="Ваш Ник" type="text">
    </div> <!-- form-group// -->
    <div class="form-group input-group">
    	<div class="input-group-prepend">
		    <span class="input-group-text"> <i class="fa fa-envelope"></i> </span>
		 </div>
        <input name="email" class="form-control" placeholder="Ваш Email" type="email">
    </div> <!-- form-group// -->
    <div class="form-group input-group">
    	<div class="input-group-prepend">
		    <span class="input-group-text"> <i class="fa fa-phone"></i> </span>
		</div>
		
    	<input name="phone" class="form-control" placeholder="Номер телефона" type="text">
    </div> <!-- form-group// -->
    <div class="form-group input-group">
    	<div class="input-group-prepend">
		    <span class="input-group-text"> <i class="fas fa-venus-mars"></i> </span>
		</div>
		<select class="form-control" name="gender">
			<option selected=""> Ваш пол</option>
			<option>Мужской</option>
			<option>Женский</option>
			
		</select>
	</div> <!-- form-group end.// -->
    <div class="form-group input-group">
    	<div class="input-group-prepend">
		    <span class="input-group-text"> <i class="fa fa-lock"></i> </span>
		</div>
        <input class="form-control" name="pass1" placeholder="Придумайте пароль" type="password">
    </div> <!-- form-group// -->
    <div class="form-group input-group">
    	<div class="input-group-prepend">
		    <span class="input-group-text"> <i class="fa fa-lock"></i> </span>
		</div>
        <input class="form-control" name="pass2" placeholder="Повторите пароль" type="password">
    </div> <!-- form-group// -->                                      
    <div class="form-group">
        <button type="submit" class="btn btn-primary btn-block" data-toggle="modal" data-target="#afterRegisterModal"> Создать аккаунт  </button>
    </div> <!-- form-group// -->      
    <p class="text-center">Уже имеете аккаунт? <a href="/loginform">Войти</a> </p>                                                                 
</form>
</article>
</div> <!-- card.// -->

</div> 
<!--container end.//-->


<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#afterRegisterModal">
  Запустить модальное окно
</button>

<!-- Modal -->
<div class="modal fade" id="afterRegisterModal" tabindex="-1" role="dialog" aria-labelledby="afterRegisterModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="afterRegisterModal">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        Вы успешно зарегистрированы! 
		Теперь вы може перейти на страницу входа на сайт под своим логиным  и паролем.
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <a href="/loginform" class="btn btn-primary"> ПЕРЕЙТИ </a>
      </div>
    </div>
  </div>
</div>
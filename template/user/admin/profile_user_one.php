<?php 
//var_dump($MODEL); exit();
?>
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/all.css">


<div class="container">

<hr>

<div class="card bg-light">
<article class="card-body" style="max-width: 1000px;">

	<form method="POST" action="#">
	<input type="hidden" name="user_id" value="<?=  $MODEL["id"] ?>" />
    <div class="form-group input-group">
		<div class="input-group-prepend">
		    <span class="input-group-text"> <i class="fa fa-user"></i> </span>
		 </div>
        <input name="id" class="form-control" value="<?= $MODEL["id"] ?>" placeholder="id" type="text">
    </div> <!-- form-group// -->
    <div class="form-group input-group">
		<div class="input-group-prepend">
		    <span class="input-group-text"> <i class="fa fa-user"></i> </span>
		</div>
		<input name="login" class="form-control" value="<?= $MODEL["login"] ?>" placeholder="login" type="text">
    </div> <!-- form-group// -->
    <div class="form-group input-group">
		<div class="input-group-prepend">
		    <span class="input-group-text"> <i class="fa fa-user"></i> </span>
		 </div>
        <input name="comment" class="form-control" value="<?= $MODEL["comment"] ?>" placeholder="comment" type="text">
    </div> <!-- form-group// -->
    <div class="form-group input-group">
		<div class="input-group-prepend">
		    <span class="input-group-text"> <i class="fa fa-user"></i> </span>
		 </div>
        <input name="version" class="form-control" value="<?= $MODEL["version"] ?>"  type="number">
    </div> <!-- form-group// -->
	<div class="form-group input-group">
		<div class="input-group-prepend">
		    <span class="input-group-text"> <i class="fa fa-user"></i> </span>
		</div>
		<input name="surname" class="form-control" value="<?= $MODEL["surname"] ?>" placeholder="Ваша фамилия" type="text">
    </div> <!-- form-group// -->
    <div class="form-group input-group">
		<div class="input-group-prepend">
		    <span class="input-group-text"> <i class="fa fa-user"></i> </span>
		 </div>
        <input name="name" class="form-control" value="<?= $MODEL["name"] ?>" placeholder="Ваше имя" type="text">
    </div> <!-- form-group// -->
	<div class="form-group input-group">
		<div class="input-group-prepend">
		    <span class="input-group-text"> <i class="fa fa-user"></i> </span>
		 </div>
        <input name="name2" class="form-control" value="<?= $MODEL["name2"] ?>" placeholder="Ваше отчество" type="text">
    </div> <!-- form-group// -->
    <div class="form-group input-group">
		<div class="input-group-prepend">
		    <span class="input-group-text"> <i class="fas fa-user-secret"></i> </span>
		 </div>
        <input name="nikname" class="form-control" value="<?= $MODEL["nikname"] ?>" placeholder="Ваш ник" type="text">
    </div> <!-- form-group// -->
    <div class="form-group input-group">
    	<div class="input-group-prepend">
		    <span class="input-group-text"> <i class="fa fa-envelope"></i> </span>
		 </div>
        <input name="email" class="form-control" value="<?= $MODEL["email"] ?>" placeholder="Ваш email" type="email">
    </div> <!-- form-group// -->
    <div class="form-group input-group">
    	<div class="input-group-prepend">
		    <span class="input-group-text"> <i class="fa fa-phone"></i> </span>
		</div>
		
    	<input name="phone" class="form-control" value="<?= $MODEL["phone"] ?>" placeholder="Ваш телефон" type="text">
    </div> <!-- form-group// -->
    <div class="form-group input-group">
    	<div class="input-group-prepend">
		    <span class="input-group-text"> <i class="fas fa-venus-mars"></i> </span>
		</div>
		<select class="form-control" name="gender">
			<option value="0"> Ваш пол</option>
			<option value="1">Мужской</option>
			<option value="2">Женский</option>
			
		</select>
	</div> <!-- form-group end.// -->
    <div class="form-group input-group">
		<div class="input-group-prepend">
		    <span class="input-group-text"> <i class="fa fa-user"></i> </span>
		 </div>
        <input name="user_id_social" class="form-control" value="<?= $MODEL["user_id_social"] ?>" placeholder="user_id_social" type="text">
    </div> <!-- form-group// -->
    <div class="form-group input-group">
		<div class="input-group-prepend">
		    <span class="input-group-text"> <i class="fa fa-user"></i> </span>
		 </div>
        <input name="user_secret_social" class="form-control" value="<?= $MODEL["user_secret_social"] ?>" placeholder="user_secret_social" type="text">
    </div> <!-- form-group// -->
    <div class="form-group input-group">
		<div class="input-group-prepend">
		    <span class="input-group-text"> <i class="fa fa-user"></i> </span>
		 </div>
        <input name="date_create" class="form-control" value="<?= $MODEL["date_create"] ?>" placeholder="date_create" type="text">
    </div> <!-- form-group// -->
    <div class="form-group input-group">
		<div class="input-group-prepend">
		    <span class="input-group-text"> <i class="fa fa-user"></i> </span>
		 </div>
        <input name="date_change" class="form-control" value="<?= $MODEL["date_change"] ?>" placeholder="date_change" type="text">
    </div> <!-- form-group// -->
    <div class="form-group input-group">
		<div class="input-group-prepend">
		    <span class="input-group-text"> <i class="fa fa-user"></i> </span>
		 </div>
        <input name="is_ban" class="form-control" value="<?= $MODEL["is_ban"] ?>" placeholder="is_ban" type="text">
    </div> <!-- form-group// -->
    <div class="form-group input-group">
		<div class="input-group-prepend">
		    <span class="input-group-text"> <i class="fa fa-user"></i> </span>
		 </div>
        <input name="is_delete" class="form-control" value="<?= $MODEL["is_delete"] ?>" placeholder="is_delete" type="text">
    </div> <!-- form-group// -->









    <div class="form-group row">
        <label for="numberUser" class="col-sm-3 col-form-label">id юзера</label>
        <div class="col-sm-9">
        <input type="text" readonly class="form-control-plaintext" id="numberUser" value="<?= $MODEL["id"] ?>">
        </div>
    </div>
    <div class="form-group row">
        <label for="loginUser" class="col-sm-3 col-form-label">Логин Юзера</label>
        <div class="col-sm-9">
        <input type="text" readonly class="form-control-plaintext" id="loginUser" value="<?= $MODEL["login"] ?>">
        </div>
    </div>
    <div class="form-group row">
        <label for="commentAdmin" class="col-sm-3 col-form-label">Комментарий к Юзеру</label>
        <div class="col-sm-9">
        <textarea class="form-control"  name="comment_admin" id="commentAdmin" placeholder="comment_admin Юзера сообщение"></textarea>
        </div>
    </div>
    <div class="form-group row">
        <label for="version2" class="col-sm-3 col-form-label">Версия пользователя</label>
        <div class="col-sm-9">
        <input type="number" class="form-control-plaintext" id="version2" value="<?= $MODEL["version"] ?>">
        </div>
    </div>
    <div class="form-group row">
        <label for="surname2" class="col-sm-3 col-form-label">Фамилия пользователя</label>
        <div class="col-sm-9">
        <input type="text" readonly class="form-control-plaintext" id="surname2" value="<?= $MODEL["surname"] ?>">
        </div>
    </div>
    <div class="form-group row">
        <label for="name11" class="col-sm-3 col-form-label">Имя пользователя</label>
        <div class="col-sm-9">
        <input type="text" readonly class="form-control-plaintext" id="name11" value="<?= $MODEL["name"] ?>">
        </div>
    </div>
    <div class="form-group row">
        <label for="name22" class="col-sm-3 col-form-label">Отчество пользователя</label>
        <div class="col-sm-9">
        <input type="text" readonly class="form-control-plaintext" id="name22" value="<?= $MODEL["name2"] ?>">
        </div>
    </div>
    <div class="form-group row">
        <label for="nikname2" class="col-sm-3 col-form-label">Ник пользователя</label>
        <div class="col-sm-9">
        <input type="text" readonly class="form-control-plaintext" id="nikname2" value="<?= $MODEL["nikname"] ?>">
        </div>
    </div>
    <div class="form-group row">
        <label for="emailUser2" class="col-sm-3 col-form-label">email пользователя</label>
        <div class="col-sm-9">
        <input type="text" readonly class="form-control-plaintext" id="emailUser2" value="<?= $MODEL["email"] ?>">
        </div>
    </div>
    <div class="form-group row">
        <label for="phoneUser2" class="col-sm-3 col-form-label">телефон пользователя</label>
        <div class="col-sm-9">
        <input type="text" readonly class="form-control-plaintext" id="phoneUser2" value="<?= $MODEL["phone"] ?>">
        </div>
    </div>
    <div class="form-group row">
        <label for="gender2" class="col-sm-3 col-form-label">gender пользователя</label>
        <div class="col-sm-9">
        <input type="text" readonly class="form-control-plaintext" id="gender2" value="<?= $MODEL["gender"] ?>">
        </div>
    </div>
    <div class="form-group row">
        <label for="user_id_social2" class="col-sm-3 col-form-label">user_id_social пользователя</label>
        <div class="col-sm-9">
        <input type="text" readonly class="form-control-plaintext" id="user_id_social2" value="<?= $MODEL["user_id_social"] ?>">
        </div>
    </div>
    <div class="form-group row">
        <label for="user_secret_social2" class="col-sm-3 col-form-label">user_secret_social пользователя</label>
        <div class="col-sm-9">
        <input type="text" readonly class="form-control-plaintext" id="user_secret_social2" value="<?= $MODEL["user_secret_social"] ?>">
        </div>
    </div>
    
    <div class="form-group row">
        <label for="date_create2" class="col-sm-3 col-form-label">Дата создания пользователя</label>
        <div class="col-sm-9">
        <input type="text" readonly class="form-control-plaintext" id="date_create2" value="<?= $MODEL["date_create"] ?>">
        </div>
    </div>
    <div class="form-group row">
        <label for="date_change2" class="col-sm-3 col-form-label">Дата изменения пользователя</label>
        <div class="col-sm-9">
        <input type="text" readonly class="form-control-plaintext" id="date_change2" value="<?= $MODEL["date_change"] ?>">
        </div>
    </div>
        
    <div class="form-check">
        <input class="form-check-input" type="checkbox" name="is_ban2" value="" id="is_ban2">
        <label class="form-check-label" for="is_ban2">Забанить юзера</label>
    </div>
    <br>
    <div class="form-check">
        <input class="form-check-input" type="checkbox" name="is_delete2" value="" id="is_delete2">
        <label class="form-check-label" for="is_delete2">Удалить Юзера</label>
    </div>

	<label >Если хотите изменить пароль введите новые значения</label>
    <div class="form-group input-group">
    	<div class="input-group-prepend">
		    <span class="input-group-text"> <i class="fa fa-lock"></i> </span>
		</div>
        <input class="form-control" readonly name="pass1" value="<?= $MODEL["pass"] ?>" placeholder="Придумайте новый пароль" type="password">
    </div> <!-- form-group// -->
    <div class="form-group input-group">
    	<div class="input-group-prepend">
		    <span class="input-group-text"> <i class="fa fa-lock"></i> </span>
		</div>
        <input class="form-control" readonly name="pass2" value="<?= $MODEL["pass"] ?>" placeholder="Повторите новый пароль" type="password">
    </div> <!-- form-group// -->                                      
    <div class="form-group">

        <button type="submit" class="btn btn-primary btn-block" > Сохранить изменения </button>
    </div> <!-- form-group// -->      
                                                                
</form>
</article>
</div> <!-- card.// -->

</div> 
<!--container end.//-->



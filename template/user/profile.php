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
<article class="card-body mx-auto" style="max-width: 400px;">

	<form method="POST" action="/user1/save_user">
	<input type="hidden" name="user_id" value="<?=  $MODEL["id"] ?>" />
	<div class="form-group input-group">
		<div class="input-group-prepend">
		    <span class="input-group-text"> <i class="fa fa-user"></i> </span>
		</div>
		<?php if($MODEL["surname"] != ""): ?>
			<input name="surname" class="form-control" value="<?= $MODEL["surname"] ?>" type="text">
		<?php else :?>
			<input name="surname" class="form-control" value="<?= $MODEL["surname"] ?>" placeholder="Ваша фамилия" type="text">
		<?php endif; ?>
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
	<label >Если хотите изменить пароль введите новые значения</label>
    <div class="form-group input-group">
    	<div class="input-group-prepend">
		    <span class="input-group-text"> <i class="fa fa-lock"></i> </span>
		</div>
        <input class="form-control" name="pass1" value="<?= $MODEL["pass"] ?>" placeholder="Придумайте новый пароль" type="password">
    </div> <!-- form-group// -->
    <div class="form-group input-group">
    	<div class="input-group-prepend">
		    <span class="input-group-text"> <i class="fa fa-lock"></i> </span>
		</div>
        <input class="form-control" name="pass2" value="<?= $MODEL["pass"] ?>" placeholder="Повторите новый пароль" type="password">
    </div> <!-- form-group// -->                                      
    <div class="form-group">

        <button type="submit" class="btn btn-primary btn-block" > Сохранить изменения </button>
    </div> <!-- form-group// -->      
                                                                
</form>
</article>
</div> <!-- card.// -->

</div> 
<!--container end.//-->



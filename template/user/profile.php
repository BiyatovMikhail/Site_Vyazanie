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
	<label class="myfontmain" for="surname">Ваша фамилия</label>
	<div class="form-group input-group">
		<div class="input-group-prepend">
		    <span class="input-group-text"> <i class="fa fa-user"></i> </span>
		</div>
		<?php if($MODEL["surname"] != ""): ?>
			<input name="surname" id="surname" class="form-control" value="<?= $MODEL["surname"] ?>" type="text">
		<?php else :?>
			<input name="surname" id="surname" class="form-control" value="<?= $MODEL["surname"] ?>" placeholder="Ваша фамилия" type="text">
		<?php endif; ?>
    </div> <!-- form-group// -->
	<label class="myfontmain" for="name">Ваше имя</label>
    <div class="form-group input-group">
	
		<div class="input-group-prepend">
		    <span class="input-group-text"> <i class="fa fa-user"></i> </span>
		 </div>
		
        <input name="name" id="name" class="form-control" value="<?= $MODEL["name"] ?>" placeholder="Ваше имя" type="text">
    </div> <!-- form-group// -->
	<label class="myfontmain" for="name2">Ваше отчество</label>
	<div class="form-group input-group">
		<div class="input-group-prepend">
		    <span class="input-group-text"> <i class="fa fa-user"></i> </span>
		 </div>
        <input name="name2" id="name2" class="form-control" value="<?= $MODEL["name2"] ?>" placeholder="Ваше отчество" type="text">
    </div> <!-- form-group// -->
	<label class="myfontmain" for="nikname">Ваш ник</label>
    <div class="form-group input-group">
		<div class="input-group-prepend">
		    <span class="input-group-text"> <i class="fas fa-user-secret"></i> </span>
		 </div>
        <input name="nikname" id="nikname" class="form-control" value="<?= $MODEL["nikname"] ?>" placeholder="Ваш ник" type="text">
	</div> <!-- form-group// -->
	<label class="myfontmain" for="email">Ваш email</label>
    <div class="form-group input-group">
    	<div class="input-group-prepend">
		    <span class="input-group-text"> <i class="fa fa-envelope"></i> </span>
		 </div>
        <input name="email" id="email" class="form-control" value="<?= $MODEL["email"] ?>" placeholder="Ваш email" type="email">
	</div> <!-- form-group// -->
	<label class="myfontmain" for="phone">Ваш телефон</label>
    <div class="form-group input-group">
    	<div class="input-group-prepend">
		    <span class="input-group-text"> <i class="fa fa-phone"></i> </span>
		</div>
    	<input name="phone" id="phone" class="form-control" value="<?= $MODEL["phone"] ?>" placeholder="Ваш телефон" type="text">
	</div> <!-- form-group// -->
	<label class="myfontmain" for="gender">Ваш пол</label>
    <div class="form-group input-group">
    	<div class="input-group-prepend">
		    <span class="input-group-text"> <i class="fas fa-venus-mars"></i> </span>
		</div>
		<select class="form-control" id="gender" name="gender" selected="selected">
			<option value="0"> Ваш пол</option>
			<option value="1" <?php if ($MODEL["gender"] == 1) echo("selected"); ?>>Мужской</option>
			<option value="2" <?php if ($MODEL["gender"] == 2) echo("selected"); ?>>Женский</option>
			
		</select>
	</div> <!-- form-group end.// -->
	<label >Если хотите изменить пароль введите новые значения</label>
	<label class="myfontmain" for="pass1">Введите пароль</label>
    <div class="form-group input-group">
    	<div class="input-group-prepend">
		    <span class="input-group-text"> <i class="fa fa-lock"></i> </span>
		</div>
        <input class="form-control" name="pass1" id="pass1" value="<?= $MODEL["pass"] ?>" placeholder="Придумайте новый пароль" type="password">
	</div> <!-- form-group// -->
	<label class="myfontmain" for="pass2">Повторите пароль</label>
    <div class="form-group input-group">
    	<div class="input-group-prepend">
		    <span class="input-group-text"> <i class="fa fa-lock"></i> </span>
		</div>
        <input class="form-control" name="pass2" id="pass2" value="<?= $MODEL["pass"] ?>" placeholder="Повторите новый пароль" type="password">
    </div> <!-- form-group// -->                                      
    <div class="form-group">

        <button type="submit" class="btn btn-primary btn-block" > Сохранить изменения </button>
    </div> <!-- form-group// -->      
                                                                
</form>
</article>
</div> <!-- card.// -->

</div> 
<!--container end.//-->



<?php  
     var_dump($MODEL); exit();
?>

    <div class="one_third first">
        <label for="user">Имя пользователя <span>*</span></label>
        <input type="text" readonly name="user" id="user" value="<?= $MODEL["user"] ?>" size="22" required>
    </div>

    <div class="one_third">
        <label for="email">Mail <span>*</span></label>
        <input type="text" readonly name="email" id="email" value="<?= $MODEL["email"] ?>" size="22" required> 
    </div>
    <div class="one_third">
        <label for="phone">phone <span>*</span></label>
        <input type="text" readonly name="phone" id="phone" value="<?= $MODEL["phone"] ?>" size="22" required> 
    </div>
   
    <div class="block clear">
        <label for="text">Ваш коментарий</label>
        <textarea name="text" readonly id="text" cols="25" value="<?= $MODEL["text"] ?>" rows="10"></textarea>
    </div>
    <div>
      <ul class="nospace inline pushright">
        <li><i class="fa fa-sign-in"></i> <a data-toggle="modal" data-target="#exampleModal2" href="#">fedbak</a></li>
      </ul>
    </div>
      


           
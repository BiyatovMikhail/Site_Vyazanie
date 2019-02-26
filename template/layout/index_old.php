<?= $this->WriteHTML("", "layout", "header") ?>


<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<div class="wrapper bgded" style="background-image:url('images/demo/backgrounds/01.png');">
  <div id="pageintro" class="hoc clear"> 
    <!-- ################################################################################################ -->
    <article>
      <div class="overlay inspace-30 btmspace-30">
        <?= $this->drawRoute("statictext", "block", ["conf" => "static", "sec" => "header_content"]) ?>
      </div>
      <footer>
        <ul class="nospace inline pushright">
          <li><a class="btn" href="#">Vestibulum</a></li>
          <li><a class="btn inverse" href="#">Aliquam</a></li>
        </ul>
      </footer>
    </article>
    <!-- ################################################################################################ -->
  </div>
</div>
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<div class="wrapper row3">
  <main class="hoc container clear"> 
    <!-- main body -->
    <!-- ################################################################################################ -->
    
    <COMPONENT/>

    <!-- ################################################################################################ -->
    <!-- / main body -->
    <div class="clear"></div>
  </main>
</div>
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<div class="wrapper bgded overlay" style="background-image:url('images/demo/backgrounds/02.png');">
  <div class="hoc container clear"> 
    <!-- ################################################################################################ -->
    <article class="center">
      <h2 class="font-x3 uppercase">Lacus ligula malesuada</h2>
      <p class="btmspace-50">Ac egestas at justo quisque lobortis ipsum sapien sed lacinia libero</p>
      <footer>
        <ul class="nospace inline pushright">
          <li><a class="btn inverse" href="#">Convallis</a></li>
          <li><a class="btn" href="#">Vestibulum</a></li>
        </ul>
      </footer>
    </article>
    <!-- ################################################################################################ -->
  </div>
</div>
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<div class="wrapper row3">
  <section class="hoc container clear"> 
    <!-- ################################################################################################ -->
    <div class="center btmspace-50">
      <h2 class="heading">Пример статей</h2>
      <p>Первые несколько элементов нашего блога</p>
    </div>
    
    <?= $this->drawRoute("blog", "byName", ["name" => "test"]) ?>

    <!-- ################################################################################################ -->
  </section>
</div>
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<div class="wrapper row3">
  <section class="hoc container clear"> 
    <!-- ################################################################################################ -->
    <div class="center btmspace-50">
      <h2 class="heading">Пример новостей</h2>
      <p>Первые несколько наших новостей</p>
    </div>
    
    <?= $this->drawRoute("article", "byName", ["name" => "sdfsdf"]) ?>

    <!-- ################################################################################################ -->
  </section>
</div>

<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<div class="wrapper row3">
  <section class="hoc container clear"> 
    <!-- ################################################################################################ -->
    <div class="center btmspace-50">
    <h2>Добавить коментарий обратной связи</h2>

<form id="feedbackform" action="/feedback/save" enctype="multipart/form-data" method="POST">
    <input type="hidden" name="action" value="test" />
  
    <div class="one_third first">
        <label for="user">Имя пользователя <span>*</span></label>
        <input type="text" name="user" id="user" value="" size="22" required>
    </div>

    <div class="one_third">
        <label for="email">Mail <span>*</span></label>
        <input type="email" name="email" id="email" value="" size="22" required> 
    </div>
    <div class="one_third">
        <!-- <label for="url">Website</label>
        <input type="url" name="url" id="url" value="" size="22"> -->
    </div>

    <div class="block clear">
        <label for="text">Ваш коментарий</label>
        <textarea name="text" id="text" cols="25" rows="10"></textarea>
    </div>
    <div>
        
        &nbsp;
        <!-- <input type="reset" name="reset" value="Reset Form"> -->
    </div>    
</form>
  <div>
      <button onclick="sendFeedback()">Отправить</button>
  </div>

<!-- Modal -->
<div class="modal fade" id="exampleModal2" tabindex="-1" role="dialog" aria-labelledby="exampleModal2Label" aria-hidden="true">
  <div class="modal-dialog" role="document">
      <div class="modal-content">
          <div class="modal-header">
              <h5 class="modal-title" id="exampleModal2Label">Ваши обращения</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
              </button>
          </div>
          <div class="modal-body">
                  
          <div class="form-group">
            <label for="message">Ваше сообщение успешно нам отправлено :))))</label>
          
           </div>
          <!--    <?= $this->WriteHTML("", "user", "part/login_form") ?> -->

          </div>
      </div>
  </div>
</div> 


<script>
  function sendFeedback() {
    var element = jQuery("#feedbackform");
    var action  = element.attr("action");
    var ser     = element.serialize();
    jQuery.post(action, ser, function(data) {
      jQuery("#exampleModal2").modal();
    })

    return false;
  }
</script>

           
    </div>

    <!-- ################################################################################################ -->
  </section>
</div>





<?= $this->WriteHTML("", "layout", "footer") ?>
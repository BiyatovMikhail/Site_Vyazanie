
<div class="contacts">
    <div class="container">
         <div class="row">
            
            <div class="col-6" style="margin:0 auto;">
            <div class="post-contacts">
                <h2 class="hpost-text"> Контакты </h2>
                <p class="post-text-content">
                <strong>Телефон </strong>
                <br>
                8-910-123-45-45                
                <br>
                <strong> Группа в контакте  </strong>
                <br>
                <a href="https://vk.com/volshebnaya_nite">https://vk.com/volshebnaya_nite</a> 
                <br>
                <div class="decorate-line-post">
                    _________

                </div>
               
                <div class="form-message">
                <br>
                <strong> Оставить сообщение  </strong>
                <br>
                    <form action="/admin/feedback/save" enctype="multipart/form-data" method="POST">
                      <input type="hidden" name="action" value="test" />
                      <input type="hidden" name="module" value="<?= $MODEL["module"] ?>" />
                          <div class="form-group">
                            <label for="exampleInputName1">Ваше имя</label>
                            <input type="text" name="user" class="form-control" id="exampleInputName1" aria-describedby="nameHelp" placeholder="Введите ваше имя">
                            
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Ваш еmail</label>
                            <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Введите email">
                            
                        </div>
                        <div class="form-group">
                            <label for="InputPhone1">Телефон</label>
                            <input type="text" name="phone" class="form-control" id="InputPhone1" placeholder="введите телефон">
                        </div>
                        <div class="form-group">
                            <label for="textAreaMessage">Cообщение</label>
                            <textarea class="form-control" name="text" id="textAreaMessage" placeholder="ваше сообщение"></textarea>
                            
                        </div>
                        
                        <button type="submit" class="btn btn-primary">Отправить</button>
                    </form>
                </div>


                </p>
                <div class="decorate-line-post">
                    _________

                </div>
            </div>
            
            </div>
           
        </div>
        
    </div>
</div>
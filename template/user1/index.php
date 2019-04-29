this is user1!
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
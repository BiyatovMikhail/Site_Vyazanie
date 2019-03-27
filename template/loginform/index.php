<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/all.css">

<div class="container login-container">
            <div class="row">
                <div class="col-md-6 login-form-1">
                    <h3>Login for Form 1</h3>
                    <div class="social-login">
                        <p>
                            <a href="" class="btn social-btn btn-twitter"> <i class="fab fa-twitter"></i>   Войти через Twitter</a>
                            <a href="" class="btn social-btn btn-facebook"> <i class="fab fa-facebook-f"></i>   Войти через Facebook</a>
                            <a href="" class="btn social-btn btn-google-plus"> <i class="fab fa-google-plus-g"></i>   Войти через Google+</a>
                            <a href="" class="btn social-btn btn-vk"> <i class="fab fa-vk"></i>   Войти через Вконтакте</a>
                            <a href="" class="btn social-btn btn-odnoklassniki"> <i class="fab fa-odnoklassniki"></i></i>   Войти через Одноклассники</a>
                        </P>
                    </div>
                    <form class="needs-validation" novalidate>
                        <div class="form-group" style="position: relative;">
                            <label for="loginvalidationTooltip01">Ваш еmail</label>
                            <input type="text" class="form-control" id="loginvalidationTooltip01" placeholder="Your Email *" value="" required>
                            <div class="valid-tooltip">
                                Отлично!
                            </div>
                            <div class="invalid-tooltip">
                                Такого логина не найдено!
                            </div>
                        </div>
                        <div class="form-group" style="position: relative;">
                            <label for="registerpasswordvalidationTooltip02">Ваш пароль</label>
                            <input type="password" class="form-control" id="registerpasswordvalidationTooltip02" placeholder="Your Password *" value="" required/>
                            <div class="invalid-tooltip">
                                 Логин и пароль не совпадают! Попробуйте еще раз.
                            </div>
                        </div>
                        <div class="form-group">
                            <input type="submit" class="btnSubmit" value="Войти" />
                        </div>
                        <div class="form-group">
                            <a href="#" class="ForgetPwd">Forget Password?</a>
                        </div>
                        <h2>Вы не имеете аккаунта?</h2>
                        <div class="form-group">
                            <a class="btnSubmit" href="/loginform/registerform">Зарегестрироваться</a>
                        </div>
                    </form>

                </div>
                
            </div>
</div>


<!-- <form class="needs-validation" novalidate>
  <div class="form-row">
    <div class="col-md-4 mb-3">
      <label for="validationTooltip01">Имя</label>
      <input type="text" class="form-control" id="validationTooltip01" placeholder="Имя" value="Mark" required>
      <div class="valid-tooltip">
        Looks good!
      </div>
    </div>
    <div class="col-md-4 mb-3">
      <label for="validationTooltip02">Фамилия</label>
      <input type="text" class="form-control" id="validationTooltip02" placeholder="Фамилия" value="Otto" required>
      <div class="valid-tooltip">
        Looks good!
      </div>
    </div>
    <div class="col-md-4 mb-3">
      <label for="validationTooltipUsername">Имя пользователя</label>
      <div class="input-group">
        <div class="input-group-prepend">
          <span class="input-group-text" id="validationTooltipUsernamePrepend">@</span>
        </div>
        <input type="text" class="form-control" id="validationTooltipUsername" placeholder="Имя пользователя" aria-describedby="validationTooltipUsernamePrepend" required>
        <div class="invalid-tooltip">
          Please choose a unique and valid username.
        </div>
      </div>
    </div>
  </div>
  <div class="form-row">
    <div class="col-md-6 mb-3">
      <label for="validationTooltip03">City</label>
      <input type="text" class="form-control" id="validationTooltip03" placeholder="City" required>
      <div class="invalid-tooltip">
        Please provide a valid city.
      </div>
    </div>
    <div class="col-md-3 mb-3">
      <label for="validationTooltip04">State</label>
      <input type="text" class="form-control" id="validationTooltip04" placeholder="State" required>
      <div class="invalid-tooltip">
        Please provide a valid state.
      </div>
    </div>
    <div class="col-md-3 mb-3">
      <label for="validationTooltip05">Zip</label>
      <input type="text" class="form-control" id="validationTooltip05" placeholder="Zip" required>
      <div class="invalid-tooltip">
        Please provide a valid zip.
      </div>
    </div>
  </div>
  <button class="btn btn-primary" type="submit">Submit form</button>
</form> -->

<script>
// Example starter JavaScript for disabling form submissions if there are invalid fields
(function() {
  'use strict';
  window.addEventListener('load', function() {
    // Fetch all the forms we want to apply custom Bootstrap validation styles to
    var forms = document.getElementsByClassName('needs-validation');
    // Loop over them and prevent submission
    var validation = Array.prototype.filter.call(forms, function(form) {
      form.addEventListener('submit', function(event) {
        if (form.checkValidity() === false) {
          event.preventDefault();
          event.stopPropagation();
        }
        form.classList.add('was-validated');
      }, false);
    });
  }, false);
})();
</script>

<?php

class user1 extends ControllerBase {

    public function canAnonymus($action) {
        return true;
    }

    protected function index3() {
        /** @var user1_model $model */
        $model = $this->getModel("user1", "user1");
    }

    public function index() {
        return $this->Render()->WriteHTML(
            "MODEL",
            "user1",
            "index"
        );
    }

    public function save_user() {

        //$current_user = $this->getModel("user");

        $this->model = $this->getModel("user1");

        $pass1 = $_POST["pass1"];
      //  $pass2 = $_POST["pass2"];
      //  if ($pass1 != $pass2 && ($pass1 == "" || $pass2 =="") ) {
      //      return $this->index(["Пароли не совпадают"]);
      //  }
      //  else {
            $pass = $pass1;     
      //  }  

       // var_dump($_POST); exit();

        $email = $_POST["email"];
        $login = $email;


        
        $good_id = $_POST["good_id"];
        $comment = "";
        $version = 0;
        $surname = $_POST["surname"];
        $name = $_POST["name"];
        $name2 = $_POST["name2"];
        $nikname = $_POST["nikname"];
        $email = $_POST["email"];
        $phone = $_POST["phone"];
        $gender = $_POST["gender"];
        $user_id_social = 0;
        $user_secret_social = 0;
        $is_ban = $_POST["is_ban"];
        $is_delete = $_POST["is_delete"];

        $dataUser = [
            "login" => $login,
            "pass" => $pass,
            "comment" => $comment,
            "version" => $version,
            "surname" => $surname,
            "name" => $name,
            "name2" => $name2,
            "nikname" => $nikname,
            "email" => $email,
            "phone" => $phone,
            "gender" => 0,
            "user_id_social" => 0,
            "user_secret_social" => 0,
            "date_create" => date("Y-m-d H:i:s"),
            "date_change" => date("Y-m-d H:i:s"),
            "is_ban" => 0,
            "is_delete" => 0

        ];
      //  var_dump($dataUser); exit();
     
        $this->model->saveUser($dataUser);
        return $this->index();
    }
   

  
}
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

    public function showprofileuser() {

        $user = app::Current()->getRealUser();
      //  var_dump($user); exit();
        // $userModel = [
        //     "surname" => $user["surname"],
        //     "name" => $user["name"],
        //     "name2" => $user["name2"],
        //     "nikname" => $user["nikname"],
        //     "email" => $user["email"],
        //     "phone" => $user["phone"],
        //     "gender" => $user["gender"],
        // ];
        return $this->Render()->WriteHTML(
            $user,
            "user",
            "profile"
        );
    }

    public function orderuserAll() {

        $user = app::Current()->getUser();
        
        $userId = $user->getUserID();

      //  /** @var good_model $model2 */
      //  $model2 = $this->getModel("good", "good");
       // var_dump($model2); exit();
        /** @var order_model $model */
        $model = $this->getModel("order", "order");
     //   $orderModel = $this->getModel("order");

       // var_dump($model); exit();

        $ordersAll = $model->getOrdersAllGoodForUser($userId);
        // var_dump($ordersAll); exit();
        

        $data = [
            "orderalluser" => $ordersAll["data"],
            "orderalluser_pages" => $ordersAll["pages"],
            
        ];

        return $this->Render()->WriteHTML(
            $data,
            "order", "orderalluser"
        );
    }

    public function orderuserActiv() {

        $user = app::Current()->getUser();
        
        $userId = $user->getUserID();

        /** @var order_model $model */
        $model = $this->getModel("order", "order");
    
        
        $ordersActiv = $model->getOrdersGoodActivForUser($userId);  
        //var_dump($ordersActiv); exit();

        $data = [
            "orderactivuser" => $ordersActiv["data"],
            "orderactivuser_pages" => $ordersActiv["pages"],
            
        ];

        return $this->Render()->WriteHTML(
            $data,
            "order", "orderactivuser"
        );
    }

    public function orderuserDone() {

        $user = app::Current()->getUser();
        
        $userId = $user->getUserID();

        /** @var order_model $model */
        $model = $this->getModel("order", "order");
    
        $ordersDone = $model->getOrdersDoneForUser($userId); 
      

        $data = [
            "orderdoneuser" => $ordersDone["data"],
            "orderdoneuser_pages" => $ordersDone["pages"],
            
        ];

        return $this->Render()->WriteHTML(
            $data,
            "order", "orderdoneuser"
        );
    }

    public function orderuserCancel() {

        $user = app::Current()->getUser();
        
        $userId = $user->getUserID();

        /** @var order_model $model */
        $model = $this->getModel("order", "order");
    
       
        $ordersCancel = $model->getOrdersCancelForUser($userId);  

        $data = [
            "ordercanceluser" => $ordersCancel["data"],
            "ordercanceluser_pages" => $ordersCancel["pages"],
           
        ];

        return $this->Render()->WriteHTML(
            $data,
            "order", "ordercanceluser"
        );
    }

    
    public function basketBuyUserAll() {

        $user = app::Current()->getUser();
        $userId = $user->getUserID();

        /** @var basket_model $model */
        $model = $this->getModel("basket", "basket");
     
        $basketPayAll = $model->getBasketPayAllForUser($userId);
       
        $data = [
            "basketPayUserAll" => $basketPayAll["data"],
            "basketPayUserAll_pages" => $basketPayAll["pages"],
            
        ];

        return $this->Render()->WriteHTML(
            $data,
            "basket", "basketPayUserAll"
        );
    }

    public function basketUser() {

        $user = app::Current()->getUser();
        
        $userId = $user->getUserID();
       // var_dump($userId); exit();

        /** @var basket_model $model */
        $model_basket = $this->getModel("basket", "basket");
     
        //var_dump($model_basket); exit();

        $basketTempByUser = $model_basket->getBasketTempActivForUser($userId);

       // var_dump($basketTempByUser); exit();
        $model_good = $this->getModel("good", "good");
    //   $goodsBasketTemp = array();

    //   foreach ($basketTempByUser["good_id"] as $value) {
    //      $goodsBasketTemp[] = $model_good->getGood($value["id"]);
    //   }

        $data = [
            "basketTempByUser" => $basketTempByUser,
  //          "goodsBasket" => $goodsBasketTemp
           
        ];

        return $this->Render()->WriteHTML(
            $data,
            "user", "basketuser"
        );
    }

    public function save_user() {

        //$current_user = $this->getModel("user");

        $this->model = $this->getModel("user1");

        $pass1 = $_POST["pass1"];
        $user1_id = $_POST["user_id"];

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
            "id" => $user1_id,
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
            "gender" => $gender,
            "user_id_social" => 0,
            "user_secret_social" => 0,
            "date_create" => date("Y-m-d H:i:s"),
            "date_change" => date("Y-m-d H:i:s"),
            "is_ban" =>  $is_ban,
            "is_delete" => $is_delete

        ];
      //  var_dump($dataUser); exit();
     
        
        if ($user1_id == -1){
            $_SESSION["MESSAGE"] = "Вы успешно зарегистрированы! 
            Теперь вы може войти на сайт под своим логиным  и паролем!";

            $this->model->saveUser($dataUser);
            return $this->Render()->Redirect("loginform");
        } else {
            $this->model->saveUser($dataUser);
           return $this->Render()->RedirectURL($_SERVER["HTTP_REFERER"]);
        }
    }
   

  
}
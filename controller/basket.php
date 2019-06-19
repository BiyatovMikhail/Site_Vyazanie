<?php

class basket extends ControllerBase {

    public function canAnonymus($action) {
        return true;
    }

    public function index() {
        return $this->Render()->WriteHTML(
            "MODEL",
            "basket",
            "index"
        );
    }
    public function saveBasketTemp() {
        $current_user = $this->getModel("user1", "user1");

        $current_good = $this->getModel("good", "good");

        $this->model = $this->getModel("basket");

        $good_id = $_POST["good_id"];
        $user_id = $_POST["user_id"];


      //  var_dump($user_id,  $good_id); exit();

        if($user_id == -1){
            echo "Вы не можете добавить товар в карзину, т.к. Вы не зарегистрированы. Можете сделать это сейчас.";
            exit();
        }

        $isGoodCheked = $this->model->chekedGoodInBasketTemp($good_id, $user_id);

        

        if($isGoodCheked == true){
            echo "Такой товар уже есть в карзине";
            exit();
        }
       
   //  var_dump($user_id); exit();
        $count = $_POST["count"];
        $count_good = $_POST["count"];
       // var_dump($_POST); exit();
        $data1 = [
            "user_id" => $user_id,
            "good_id" => $good_id,
            "count_good" => $count_good,
            "is_activ" => 0,
            "is_cancel" => 0
            
        ];
     
        $this->model->saveBasketTemp($data1);
        exit();
       
    }

    public function cancel_basketTemp (){

        $basketTempId = $_POST["baskettemp_id"];
       // var_dump($basketTempId); exit();
     //   $this->model = $this->getModel("basket");
        $this->model = $this->getModel("basket");
     
        $this->model->cancelBasketTemp($basketTempId);

        return $this->Render()->RedirectURL($_SERVER["HTTP_REFERER"]);

    }

  
    

    public function addGoodToBasket() {
       
        $current_user = $this->getModel("user1", "user1");

        $current_good = $this->getModel("good", "good");

        $this->model = $this->getModel("basket");

        
        $number_order = $_POST["number_order"];
       

        $good_id = $_POST["good_id"];
        
        $prise = $_POST["prise"];
        $user_id = $_POST["user_id"];
        $count = $_POST["count"];
        $prise_basket = $prise*$count;
        $comment_admin = $_POST["comment_admin"];
        $is_done = $_POST["is_done"];
        $is_cancel = $_POST["is_cancel"];
        $is_delete = $_POST["is_delete"];

        $data1 = [
            "number_order" => $number_order,
            "good_id" => $good_id,
            "prise" => $prise,
            "user_id" => $user_id,
            "count" => $count,
            "prise_basket" => $prise_basket,
            "date_create" => date("Y-m-d H:i:s"),
            "date_change" => date("Y-m-d H:i:s"),
            "comment_admin" => $comment_admin,
            "is_done" => 0,
            "is_cancel" => 0,
            "is_delete" => 0
        ];

     
        $this->model->saveBasket($data1);
        return $this->index();
    }


    public function addBuyToBasketPay() {
      //  var_dump("$_POST"); exit();
       $this->model = $this->getModel("basket");
        $ids = implode(",", $_POST["id"]);

     //   $orderId = rand();
      
       $lastNumberOrder = $this->model->getLastNumberOrderBasket();
       $orderId = ++$lastNumberOrder["m"];

        $sql = "
        INSERT INTO good_basket
        SELECT 
            NULL,
            " . $orderId . ",
            g.id,
            IF(g.is_discount = 1, g.price_discount, g.price),
            t.user_id,
            t.count_good,
            IF(g.is_discount = 1, g.price_discount, g.price) * t.count_good,
            CURRENT_TIMESTAMP(),
            CURRENT_TIMESTAMP(),
            '',
            0,
            0,
            0
        FROM 
            good_basket_temp AS t 
        LEFT JOIN 
            good AS g 
                ON t.good_id = g.id
        WHERE 
            t.id IN (" . $ids . ")        
        ";
        $order_basket_id = $this->model->addBuyToBasketPay($sql);

       foreach ($_POST["id"] as $key => $value) {
           $this->model->deleteBasketTemp($value);
       }
        
       sendMailAfterBasket($order_basket_id);
        
        return $this->Render()->WriteHTML(
            $order_basket_id,
            "basket",
            "afterBasketBuy"
        );
    }

    public function sendMailAfterBasket($order_basket_id){


        $current_user = $this->getModel("user1", "user1");
        $good_model = $this->getModel("good", "good");
        $curr_basket_model = $this->getModel("basket", "basket");
        $current_good = $good_model->getGood($good_id);
        $goods = $curr_basket_model->getGoodsByNumOrd($order_basket_id);

        $model_basket_adm = [
            "user" = [
           "user_namefull" => $current_user["surname"] + $current_user["name"],
           "order_basket_id" = $order_basket_id,
            "user_email" => $current_user["email"],
            "user_phone" => $current_user["phone"],
            "price_order" => $goods["prise_basket"],
            ],
            "goods" = [
            "numb_order" => $order_id,
            "good_id" => $good_id,
            "user_message" => $user_message,
            "price_order" => $price_order,
            "good_name" => $current_good["name"],
            ]
        ];
        $model_basket_user = [
            
             "numb_order" => $order_id,
             "good_id" => $good_id,
             "price_order" => $price_order,
             "good_name" => $current_good["name"],
             "date_create" => date("Y-m-d H:i:s"),
             
         ];
        $mail_adres_send_adm1 = "mihail71bma@yandex.ru";
        $mail_adres_send_adm2 = "sen_77@bk.ru";
        $mail_adres_send_adm3 = "mixail_956@rambler.ru";
        $mail_adres_send_user = $user_email;
        $mail_adres_send_user2 = "mixail_956@rambler.ru";

        //  var_dump($model_basket_adm); exit();
        $mail_data = $this->Render()->WriteHTML($model_basket_adm, "mailer", "mail_basket_adm");
        app::Current()->SendMail($mail_adres_send_adm3, "Новый заказ!", $mail_data);
        
        $mail_data_user = $this->Render()->WriteHTML($model_basket_user, "mailer", "mail_basket_user");
        app::Current()->SendMail($mail_adres_send_user2, "Новый заказ!", $mail_data_user);
    }


}
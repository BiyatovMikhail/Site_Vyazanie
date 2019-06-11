<?php

class order extends ControllerBase {

    public function canAnonymus($action) {
        return true;
    }

  /**
     * @var order $model
     */
    private $model;
    private $path;

   


    public function index($order_id = -1) {
        return $this->Render()->WriteHTML(
            $order_id,
            "order",
            "index"
        );
    }

    public function showorderuser() {
        return $this->Render()->WriteHTML(
            "MODEL",
            "user",
            "order"
        );
    }

    public function save_order() {
        
        $current_user = app::Current()->getRealUser();

        $this->model = $this->getModel("order");

        $orderP = $_POST;
        $numb_order = $_POST["numb_order"];
        $user_id = $_POST["user_id"];
        

        if ($user_id != -1) {
            $user_name = $current_user["surname"] . " " . $current_user["name"]  . " " . $current_user["name2"];
            $user_email = $current_user["email"];
            $user_phone = $current_user["phone"];
        }
        else {
            $user_name = $_POST["user_name"];
            $user_email = $_POST["user_email"];
            $user_phone = $_POST["user_phone"];
        }

        $good_id = $_POST["good_id"];
        
        $user_message = $_POST["user_message"];
        $date_create = $_POST["date_create"];
        $date_change = $_POST["date_change"];
        $comment_admin = $_POST["comment_admin"];
        $price_order = $_POST["price_order"];
        $is_done = $_POST["is_done"];
        $is_cancel = $_POST["is_cancel"];
        $is_delete = $_POST["is_delete"];

        $data1 = [
            "numb_order" => 1,
            "user_id" => $user_id,
            "good_id" => $good_id,
            "user_name" => $user_name,
            "user_email" => $user_email,
            "user_phone" => $user_phone,
            "user_message" => $user_message,
            "date_create" => date("Y-m-d H:i:s"),
            "date_change" => date("Y-m-d H:i:s"),
            "comment_admin" => $comment_admin,
            "price_order" => $price_order,
            "is_done" => 0,
            "is_cancel" => 0,
            "is_delete" => 0
        ];

            
        $order_id = $this->model->saveOrder($data1);
        $good_model = $this->getModel("good", "good");
        $current_good = $good_model->getGood($good_id);
        $model_order_adm = [
           "user_namefull" => $user_name,
            "user_email" => $user_email,
            "user_phone" => $user_phone,
            "numb_order" => $order_id,
            "good_id" => $good_id,
            "user_message" => $user_message,
            "price_order" => $price_order,
            "good_name" => $current_good["name"],
            
        ];
        $model_order_user = [
            
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

      //  var_dump($model_order_adm); exit();
        $mail_data = $this->Render()->WriteHTML($model_order_adm, "mailer", "mail_order_adm");
        app::Current()->SendMail($mail_adres_send_adm3, "Новый заказ!", $mail_data);
        
        $mail_data_user = $this->Render()->WriteHTML($model_order_user, "mailer", "mail_order_user");
        app::Current()->SendMail($mail_adres_send_user2, "Новый заказ!", $mail_data_user);

        return $this->index($order_id);
    }

    public function cancel_order (){

        $orderId = $_POST["order_id"];
       // var_dump($orderId); exit();
     //   $this->model = $this->getModel("order");
        $this->model = $this->getModel("order");
     
        $this->model->cancelOrder($orderId);

        return $this->Render()->RedirectURL($_SERVER["HTTP_REFERER"]);

    }

}
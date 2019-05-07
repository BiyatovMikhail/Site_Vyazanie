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
        return $this->index();
    }

    

    public function addGoodToBasket() {

        $current_user = $this->getModel("user");

        $current_good = $this->getModel("good");

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


    public function addBuyToBasket() {

        $current_user = $this->getModel("user");

        $current_good = $this->getModel("good");

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


}
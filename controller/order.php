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

   


    public function index() {
        return $this->Render()->WriteHTML(
            "MODEL",
            "order",
            "index"
        );
    }

    public function save_order() {

        //$current_user = $this->getModel("user");

        $this->model = $this->getModel("order");

        $orderP = $_POST;
        $numb_order = $_POST["numb_order"];
        $user_id = $_POST["user_id"];
        $good_id = $_POST["good_id"];
        $user_name = $_POST["user_name"];
        $user_email = $_POST["user_email"];
        $user_phone = $_POST["user_phone"];
        $user_message = $_POST["user_message"];
        $date_create = $_POST["date_create"];
        $date_change = $_POST["date_change"];
        $is_done = $_POST["is_done"];
        $is_delete = $_POST["is_delete"];

        $data1 = [
            "numb_order" => 0,
            "user_id" => 0,
            "good_id" => $good_id,
            "user_name" => $user_name,
            "user_email" => $user_email,
            "user_phone" => $user_phone,
            "user_message" => $user_message,
            "date_create" => date("Y-m-d H:i:s"),
            "date_change" => date("Y-m-d H:i:s"),
            "is_done" => 0,
            "is_delete" => 0
        ];

     
        $this->model->saveOrder($data1);
        return $this->index();
    }



}
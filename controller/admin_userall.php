<?php

class admin_userall extends ControllerBase {
    public function canAnonymus($action) {
        return false;
    }

    /**
     * @var user1_model $model
     */
    private $model;

    private $path;

    public function __construct()
    {
        $this->model = $this->getModel("user1", "user1");
        $this->path  = app::Current()->getRequest()->getPath();
    }

    public function index() {
        $userAll = $this->model->getUsersAll();
       
        $data = [
            "tableAllUser" => $userAll,
            
        ];

        return $this->Render()->WriteHTML(
            $data,
            "user/admin", "table_user_all"
        );
    }

    public function userOne() {

        $userId = $_POST["user_id"];
        
        $userOne = $this->model->getUserById($userId);
        //var_dump($userOne); exit();

        $data = [
            "useroneadm" => $userOne,
            
        ];

        return $this->Render()->WriteHTML(
            $userOne,
            "user/admin", "profile_user_one"
        );
    }

}
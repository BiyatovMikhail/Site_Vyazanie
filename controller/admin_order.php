<?php

class admin_order extends ControllerBase {
    public function canAnonymus($action) {
        return false;
    }

    /**
     * @var order_model $model
     */
    private $model;

    private $path;

    public function __construct()
    {
        $this->model = $this->getModel("order");
        $this->path  = app::Current()->getRequest()->getPath();
    }

    public function index() {
        $ordersAll = $this->model->getOrdersAllForAdm();
        $ordersActiv = $this->model->getOrdersActivForAdm();  
        $ordersDone = $this->model->getOrdersDoneForAdm(); 
        $ordersDel = $this->model->getOrdersDelForAdm();  

        $data = [
            "orderalladm" => $ordersAll,
            "orderactivadm" => $ordersActiv,
            "orderdoneadm" => $ordersDone,
            "orderdeladm" => $ordersDel,
        ];

        return $this->Render()->WriteHTML(
            $data,
            "order/admin", "orderalladm"
        );
    }


    public function show_order_all() {
        $id = $this->getFromIndex($this->path, 3, -1);
        $ordersAll = $this->model->getOrdersAllForAdm();  

        return $this->Render()->WriteHTML(
            $ordersAll , 
            "order/admin", "orderalladm"
        );
    }

    public function show_order_activ() {
        $id = $this->getFromIndex($this->path, 3, -1);
        $ordersActiv = $this->model->getOrdersActivForAdm();  
       // var_dump($ordersActiv); exit();
        return $this->Render()->WriteHTML(
            $ordersActiv , 
            "order/admin", "orderactivadm"
        );
    }

    public function show_order_done() {
        $id = $this->getFromIndex($this->path, 3, -1);
        $ordersDone = $this->model->getOrdersDoneForAdm();  

        return $this->Render()->WriteHTML(
            $ordersDone , 
            "order/admin", "orderdoneadm"
        );
    }

    public function show_order_del() {
        $id = $this->getFromIndex($this->path, 3, -1);
        $ordersDel = $this->model->getOrdersDelForAdm();  

        return $this->Render()->WriteHTML(
            $ordersDel , 
            "order/admin", "orderdeladm"
        );
    }

}
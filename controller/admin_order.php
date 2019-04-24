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
        return $this->Render()->WriteHTML(
            $this->model->getOrdersAll(),
            "order/admin", "orderall"
        );
    }



}
<?php

class user extends ControllerBase {

    public function canAnonymus($action) {
        return true;
    }

    protected function index() {
        /** @var user1_model $model */
        $model = $this->getModel("user", "user");
    }

    public function index2() {
        return $this->Render()->WriteHTML(
            "MODEL",
            "user",
            "index"
        );
    }

   

  
}
<?php

class blog2 extends ControllerBase {

    public function canAnonymus($action) {
        return true;
    }

    public function index() {
        return $this->Render()->WriteHTML(
            "MODEL",
            "blog2",
            "index"
        );
    }
    public function category() {
       
        return $this->Render()->WriteHTML(
            "MODEL",
            "blog2",
            "category"
        );
    }




}
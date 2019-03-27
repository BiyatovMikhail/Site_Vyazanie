<?php

class usefularticles extends ControllerBase {

    public function canAnonymus($action) {
        return true;
    }

    public function index() {
        return $this->Render()->WriteHTML(
            "MODEL",
            "usefularticles",
            "index"
        );
    }
    public function category() {
       
        return $this->Render()->WriteHTML(
            "MODEL",
            "usefularticles",
            "category"
        );
    }




}
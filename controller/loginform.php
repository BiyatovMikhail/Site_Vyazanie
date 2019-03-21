<?php

class loginform extends ControllerBase {

    public function canAnonymus($action) {
        return true;
    }

    public function index() {
        return $this->Render()->WriteHTML(
            "MODEL",
            "loginform",
            "index"
        );
    }
    public function registerform() {
       
        return $this->Render()->WriteHTML(
            "MODEL",
            "loginform",
            "registerform"
        );
    }




}
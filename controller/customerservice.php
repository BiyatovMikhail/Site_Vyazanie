<?php

class customerservice extends ControllerBase {

    public function canAnonymus($action) {
        return true;
    }

    public function index() {
        return $this->Render()->WriteHTML(
            "MODEL",
            "customerservice",
            "index"
        );
    }

   

  
}
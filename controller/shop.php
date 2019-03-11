<?php

class shop extends ControllerBase {

    public function canAnonymus($action) {
        return true;
    }

    public function index() {
        return $this->Render()->WriteHTML(
            "MODEL",
            "shop",
            "index"
        );
    }
}
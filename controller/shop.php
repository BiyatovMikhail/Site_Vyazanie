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

    public function category() {
        $category = $this->request->getPath()[2];

        /** @var good_model $model */
        $model = $this->getModel("good", "good");
        $goods = $model->getGoodsByCategory($category);

        var_dump($goods); exit();

        return $this->Render()->WriteHTML(
            "MODEL",
            "shop",
            "category"
        );
    }

    public function good() {
        // $category = $this->request->getPath()[2];
        // var_dump($category);
        return $this->Render()->WriteHTML(
            "MODEL",
            "shop",
            "good"
        );
    }
    public function promotions() {
       
        return $this->Render()->WriteHTML(
            "MODEL",
            "shop",
            "promotions"
        );
    }
    
}
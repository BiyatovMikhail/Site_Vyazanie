<?php

class shop extends ControllerBase {

    public function canAnonymus($action) {
        return true;
    }

    public function index() {
         /** @var good_model $model */
         $model = $this->getModel("good", "good");
         $cat = $model->getcategoryes();
         $goodsAll = $model->getGoodAll();

        return $this->Render()->WriteHTML(
            [
                "cat" => $cat,
                "goodsAll" => $goodsAll
            ],
            "shop",
            "index"
        );
    }

    public function category() {
        $category = $this->request->getPath()[2];


         /** @var good_model $model */
         $model = $this->getModel("good", "good");
         $cat = $model->getcategoryes();
         $goodsAll = $model->getGoodsByCategory($category);

        return $this->Render()->WriteHTML(
            [
                "cat" => $cat,
                "goodsAll" => $goodsAll,
                'category' => $category
            ],
            "shop",
            "index"
        );
    }

    public function good() {

        /** @var good_model $model */
        $model = $this->getModel("good", "good");
       
        $categoryname = $this->request->getPath()[2];
        $goodname = $this->request->getPath()[3];

        $goods = $model->
        
        // var_dump($category);
        return $this->Render()->WriteHTML(
            [

            ],
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
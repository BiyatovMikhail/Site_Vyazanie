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
         $goodsAll = [];

        if ($category == "В наличии")
            $goodsAll = $model->getGoodsInStock();
        else if ($category == "Акции")
            $goodsAll = $model->getGoodsIsDiscount();
        else 
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

        $goods = $model->getGoodByName($goodname, $categoryname);
        $category = $model->getcategoryes();
        $goods4bycat = $model->getGood4RandByCategory([$goodname], str_replace("_", "/", $categoryname));

        $user = app::Current()->getUser();
        
        //var_dump($goods4bycat);
        return $this->Render()->WriteHTML(
            [
                "catname" => $categoryname,
                "goods" => $goods,
                "category" => $category,
                "goods4bycat" => $goods4bycat,
                "userid" => $user->getUserID()   
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
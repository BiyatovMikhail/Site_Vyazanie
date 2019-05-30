<?php

class Slideshow extends ControllerBase  {
    constructor(el) {
        
        this.DOM = {el: el};
      
        this.config = {
          slideshow: {
            delay: 3000,
            pagination: {
              duration: 3,
            }
          }
        };
        
        // Set the slideshow
        this.init();
      
    }





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
}
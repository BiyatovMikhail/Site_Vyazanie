<?php

class admin_good extends ControllerBase {
    public function canAnonymus($action) {
        return false;
    }

    /**
     * @var good_model $model
     */
    private $model;

    private $path;

    public function __construct()
    {
        $this->model = $this->getModel("good");
        $this->path  = app::Current()->getRequest()->getPath();
    }

    public function index() {
        return $this->Render()->WriteHTML(
            $this->model->getcategoryes(),
            "good/admin", "cats"
        );
    }

    public function edit_cat() {
        $id = $this->getFromIndex($this->path, 3, -1);
        return $this->Render()->WriteHTML(
            $this->model->getCategoryOrDefault($id), 
            "good/admin", "edit_cat"
        );
    }

    public function save_cat() {
        $this->model->saveCategory($_POST);
        return $this->index();
    }

    public function show_good() {
        $id = $this->getFromIndex($this->path, 3, -1);
        return $this->Render()->WriteHTML(
            [
                "goods" => $this->model->getGoodsByCategory($id),
                "cat" => $id
             ] , 
            "good/admin", "goods"
        );
    }

    public function show_good_all() {
        $id = $this->getFromIndex($this->path, 3, -1);
        return $this->Render()->WriteHTML(
            $this->model->getGoodAll(),
            "good/admin", "good_all"
        );
    }

    public function edit_good() {
        $id = $this->getFromIndex($this->path, 3, -1);
        $model = $this->model->getGood($id);
        $model["cats"] = $this->model->getcategoryes();

        if (isset($_GET["cat"]))
            $model["category_id"] = $_GET["cat"];

        return $this->Render()->WriteHTML(
            $model , 
            "good/admin", "edit_good"
        );
    }

    public function save_good() {
        $this->model->saveGood($_POST);
        return $this->index();
    }

    public function del_good(){
        $id = $this->getFromIndex($this->path, 3, -1);
        // $model = $this->model->getGood($id);
        $this->model->deleteGood($id);

        return $this->Render()->RedirectURL($_SERVER["HTTP_REFERER"]);
    }

    public function del_cat(){
        $id = $this->getFromIndex($this->path, 3, -1);
        if (count($this->model->getGoodsByCategory($id)) > 0) 
            return $this->Render()->RedirectURL($_SERVER["HTTP_REFERER"]);
            
        $this->model->deleteGoodCategory($id);

        return $this->Render()->RedirectURL($_SERVER["HTTP_REFERER"]);
    }


    function massSave() {
        $arr = $_POST;
        if (!isset($arr["price"])) return;

        foreach ($arr["price"] as $key => $value) {
            $this->model->priceUpdate([
                "per_discount" => $arr["per_discount"][$key],
                "price" => $arr["price"][$key],
                "price_discount" => $arr["price_discount"][$key],
                "is_discount" => isset($arr["is_discount"][$key]) ? "1" : "0",
                "id" => $key
            ]);
        }
    }

    
    public function goodtable() {

        if (isset($_POST["price"])) {
            $this->massSave();
        }

        /** @var good_model $model */
        $model = $this->getModel("good", "good");
       
     //   $categoryname = $this->request->getPath()[2];
          $categoryname = $_POST["categoryname"];
    //    $goodname = $this->request->getPath()[3];

     //   $goods = $model->getGoodByName($goodname, $categoryname);
        $goods = $model->getGoodAll();
        $category = $model->getcategoryes();
       
        return $this->Render()->WriteHTML(
            [
                "catname" => $categoryname,
                "goods" => $goods,
                "category" => $category,
                
            ],
            "good/admin",
            "goodtable"
        );
    }

}
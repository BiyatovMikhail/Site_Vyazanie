<?php

class pic extends ControllerBase {

    public function canAnonymus($action) {
        return true;
    }

    /**
     * @var pic_model $model
     */
    private $model;
    private $path;

    public function __construct()
    {
        $this->model = $this->getModel("pic");
        $this->path  = app::Current()->getRequest()->getPath();
    }

    public function del() {
        $id = $this->getFromIndex($this->path, 2, -1);

        if ($id == -1)
            return $this->Render()->RedirectURL($_SERVER["HTTP_REFERER"]);

        $this->model->deletePic($id);
        return $this->Render()->RedirectURL($_SERVER["HTTP_REFERER"]);
    }

    public function one() {
        $pic = $this->model->One($this->params["module"], $this->params["id"]);
        return $this->Render()->WriteHTML(
            ["pic" => $pic, "del" => false], "pic", "one"
        );
    }

    public function onesrc() {
        $pic = $this->model->One($this->params["module"], $this->params["id"]);
        return $pic["link"];
    }

    public function all() {
        $del = false;
        if (isset($this->params["del"])) $del = $this->params["del"];
        
        $pics = $this->model->All($this->params["module"], $this->params["id"]);
        return $this->Render()->WriteHTML(
            ["pics" => $pics, "del" => $del], "pic", "all"
        );
    }

    public function allsrc() {
        $del = false;
        if (isset($this->params["del"])) $del = $this->params["del"];
        
        $pics = $this->model->All($this->params["module"], $this->params["id"]);
        return $pics;
    }    

    public function add() {
        return $this->Render()->WriteHTML(
            [
                "module" => $this->params["module"], 
                "id"     => $this->params["id"]
            ], "pic", "add");
    }

    public function save() {
        $this->model->Save(
            $_POST["module"],
            $_POST["ref_id"],
            $_POST["name"],
            $_POST["cat"]
        );

        $this->Render()->RedirectURL($_SERVER["HTTP_REFERER"]);
    }
}
<?php

class feedback extends ControllerBase {

    /**
     * @var config $conf
     */
    private $conf;

    private $path;

    public function __construct()
    {
        $this->conf = app::Current()->getConfig();
        $this->path = app::Current()->getRequest()->getPath();
    }
    
   // public function canAnonymus($action) {
   //     return false;
   // }


    public function index() {


       return $this->Render()->WriteHTML("", "feedback", "part/feedbackout");
    }

    public function edit() {
        $key = "";
        if (isset($this->path[3]))
            $key = $this->path[3];
     // var_dump($key); exit();

        $this->conf->load("feedbacks");

        return $this->Render()->WriteHTML([
            "key" => $key,
            "value" => $this->conf->get($key)
        ], "feedback/feedback", "edit");
    }

    public function save() {
        if (isset($_POST["action"])) {
            $user  = $_POST["user"];
            $email = $_POST["email"];
            $text  = $_POST["text"];

            $this->conf->load("feedbacks");
            $data = $this->conf->get("data", []);
            $data[] = [
                "user" => $user,
                "email" => $email,
                "text" => $text
            ];
            $this->conf->set("data", $data);
            $this->conf->save("feedbacks");

        }
        return $this->index();
    }

    public function delete() {
        // $key = "";
        // if (isset($this->path[3]))
        //     $key = $this->path[3];

        // if ($key == "")
        //     return $this->index();

        // $this->conf->load("feedbacks");
        // $this->conf->del($key);
        // $this->conf->save("feedbacks");

        // return $this->index();
    }
}
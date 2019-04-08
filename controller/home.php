<?php

class home extends ControllerBase {

    // public function exec($action) {
    //     //Логика по доступу
    //     return parent::exec($action);
    // }

    protected function index() {
        /** @var good_model $model */
        $model = $this->getModel("good", "good");

        $data = [];

        $ids = [];
        
        $item = [];
        $item["category"] = "Главная";
        $item["items"] = $model->getGoodsByCategory(2, 2);

        foreach ($item["items"] as $value) {
            $ids[] = $value["id"];
        }
        
        $data[] = $item;
        //array_push($data, $item);

        $item = [];
        $item["category"] = "Акции";
        $item["items"] = $model->getGoodsByCategory(3, 2);

        foreach ($item["items"] as $value) {
            $ids[] = $value["id"];
        }

        $data[] = $item;

        $item = [];
        $item["category"] = "Все товары";
        $item["items"] = $model->getGoodAllRand($ids);

        $data[] = $item;
        
        return $this
                ->Render()
                ->WriteHTML($data, "home", "index");
    }

    protected function test() {
        return $this
                ->Render()
                ->WriteHTML("", "home", "test");
    }

    public function leftMenu() {
        $menu = [
            [
                "name" => "test",
                "url" => "/home/test"
            ],
            [
                "name" => "index",
                "url" => "/home/index"
            ]
        ];
        return $this
            ->Render()
            ->WriteHTML($menu, "home", "left_menu");
    }
}
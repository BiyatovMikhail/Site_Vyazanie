<?php

class good_model extends ModelBase {

    /**
     * Возвращает список категорий
     */
    public function getcategoryes() {
        return $this->db->selectMany("SELECT * FROM `good_category`", []);
    }

    public function getGoodAll() {
        return $this->db->selectMany("SELECT `good`.*, `good_category`.name AS cat_name FROM `good` LEFT JOIN `good_category` ON `good`.category_id = `good_category`.id", []);
    }

    public function getGoodAllRand($exclude = null) {
        if ($exclude === null)
            return $this->db->selectMany("SELECT `good`.*, `good_category`.name AS cat_name FROM `good` LEFT JOIN `good_category` ON `good`.category_id = `good_category`.id order by rand()", []);
        else
            return $this->db->selectMany("SELECT `good`.*, `good_category`.name AS cat_name FROM `good` LEFT JOIN `good_category` ON `good`.category_id = `good_category`.id where `id` not in (:ids) order by rand()", [ "ids" => implode(",", $exclude)]);
    }

    public function getCategoryOrDefault($id) {
        $cat = $this->db->selectOne("SELECT * FROM `good_category` where id = :id", ["id" => $id]);

        if ($cat !== false)
            return $cat;

        return [
            "id" => -1,
            "name" => "",
            "description" => ""
        ];
    }

    public function getGood($id) {
        $good = $this->db->selectOne("SELECT `good`.*, `good_category`.name AS cat_name FROM `good` LEFT JOIN `good_category` ON `good`.category_id = `good_category`.id where `id` = :id", [ "id" => $id ]);
        

        if ($good !== false) {
            $good["params"] = $this->getParams($id);
            return $good;
        }

        $good = [
            "id" => -1,
            "name" => "",
            "description" => "",
            "category_id" => "",
            "price" => "",
            "per_discount" => "",
            "price_discount" => "",
            "is_discount" => "",
            "count_good" => ""
        ];

        $good["params"] = [];

        

        return $good;
    }

    public function getGoodsByCategory($id, $count = 100) {
        $goods = null;
        if (is_numeric($id))
            $goods = $this->db->selectMany("SELECT `good`.*, `good_category`.name AS cat_name FROM `good` LEFT JOIN `good_category` ON `good`.category_id = `good_category`.id where category_id = :id limit " .  $count, [ "id" => $id ]);
        else {
            $id = str_replace("_", "/", $id);
            $goods = $this->db->selectMany("SELECT `good`.*, `good_category`.name AS cat_name FROM `good` LEFT JOIN `good_category` ON `good`.category_id = `good_category`.id where `category_id` = (select `id` from `good_category` where `name` = :id limit 1) limit " .  $count, [ "id" => $id ]);
        }

        $ids = [];
        foreach ($goods as $k => $value) {
            $goods[$k]["params"] = [];
            $ids[] = $value["id"];
        }

        $params = $this->getParams($ids);

        foreach ($params as $value) {
            foreach ($goods as $good_k => $good_v) {
                if ($good_v["id"] == $value["good_id"])
                    $goods[$good_k]["params"][] = $value;
                    //array_push($goods[$good_k]["params"], $value);
            }
        }

        return $goods;
    }

    public function getParams($idArr) {
        $sql = "SELECT * FROM `good_info` where `good_id` ";

        if (!is_array($idArr))
            $sql .= " = " . $idArr; //$sql = $sql . $idArr;
        else
            $sql .= " in (" . implode(", ", $idArr) . ")";

        return $this->db->selectMany($sql, []);
    }


    public function saveGood($good) {
      
        if (!isset($good["id"]) || $good["id"] == -1){
    
            return $this->insertGood($good);
        }
        else
            return $this->updateGood($good);
    }

    private function insertGood($good) {
     
        
        $id = $this->db->create("INSERT INTO `good` (`name`, `description`, `category_id`, `price`, `per_discount`, `price_discount`, `is_discount`, `count_good`) 
                                VALUES (:name, :description, :category_id, :price, :per_discount, :price_discount, :is_discount, :count_good)", 
        [
            "name" => $good["name"],
            "description" => $good["description"],
            "category_id" => $good["category_id"],
            "price" => $good["price"],
            "per_discount" => $good["per_discount"],
            "price_discount" => $good["price_discount"],
            "is_discount" => $good["is_discount"],
            "count_good" => $good["count_good"]
        ]);
     
            

        if ($id !== false)
            if (isset($good["params"]) && is_array($good["params"]))
                $this->saveParams($id, $good["params"]);

        return $id;
    }

    private function updateGood($good) {
        if (!isset($good["is_discount"])) $good["is_discount"] = 0;
        if (!isset($good["count_good"]) || $good["count_good"] == "") $good["count_good"] = 0;
        $result = $this->db->update("UPDATE `good` 
                                        SET `name` = :name, 
                                            `description` = :description,
                                            `category_id` = :category_id,
                                            `price` = :price,
                                            `per_discount` = :per_discount,
                                            `price_discount` = :price_discount,
                                            `is_discount` = :is_discount,
                                            `count_good` = :count_good
                                                WHERE 
                                            `good`.`id` = :id ",
                                            [
                                                "name" => $good["name"],
                                                "description" => $good["description"],
                                                "category_id" => $good["category_id"],
                                                "price" => $good["price"],
                                                "per_discount" => $good["per_discount"],
                                                "price_discount" => $good["price_discount"],
                                                "is_discount" => $good["is_discount"],
                                                "count_good" => $good["count_good"],
                                                "id" => $good["id"]
                                            ]);
        if ($result === false)
            return false;

        if (isset($good["params"]) && is_array($good["params"]))
            $this->saveParams($good["id"], $good["params"]);
        return $good["id"];
    }

    public function deleteGood($id) {
        if ($id > 0) {
            $this->db->update("DELETE FROM `good` WHERE `good`.`id` = :id", [ "id" => $id ]);
            return true;
        }
        return false;
    }


    public function saveParams($id, $params) {
        $this->db->update("DELETE FROM `good_info` WHERE `good_id` = :id;", [ "id" => $id ]);
        foreach ($params["name"] as $k => $v)
            if($v != "")
                $this->db->create("INSERT INTO 
                            `good_info` (`good_id`, `name`, `value`) 
                                VALUES (:good_id, :name, :value)", 
                                [
                                    "good_id" => $id,
                                    "name" => $v,
                                    "value" => $params["value"][$k]
                                ]
                            );
    }

    public function saveCategory($category) {
        if (!isset($category["id"]) || $category["id"] == -1)
            return $this->insertCategory($category);
        else
            return $this->updateCategory($category);
    }

    private function insertCategory($category) {
        return $this->db->create("INSERT INTO `good_category` 
                                (`name`, `description`) 
                                VALUES (:name, :description)", [
                                    "name" => $category["name"],
                                    "description" => $category["description"]
                                ]);
    }

    private function updateCategory($category) {
        $id = $this->db->update("UPDATE `good_category` 
                                    SET `name` = :name, 
                                        `description` = :description WHERE 
                                        `good_category`.`id` = :id ", 
                                        [
                                            "name" => $category["name"],
                                            "description" => $category["description"],
                                            "id" => $category["id"]
                                        ]);

        if ($id === false)
            return false;
        return $category["id"];
    }

    public function deleteGoodCategory($id) {
        if ($id > 0) {
            $this->db->update("DELETE FROM `good_category` WHERE `good_category`.`id` = :id", [ "id" => $id ]);
            return true;
        }
        return false;
    }
}
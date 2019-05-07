<?php

class order_model extends ModelBase {

    public function getOrdersAllForAdm() {
        return $this->db->selectMany("SELECT * FROM `good_order`", []);
    }

    public function getOrdersAllUserGoodForAdm() {
        $models = $this->db->selectMany("SELECT `good_order`.`*`, `good`.`*`, `good_category`.name AS cat_name FROM `good_order` LEFT JOIN `good` ON `good`.id = `good_order`.good_id LEFT JOIN `good_category` ON `good_category`.id = `good`.category_id ", []);
        foreach ($models as $key => $value) {
            $url = "/shop/good/" . str_replace("/", "_", $value["cat_name"]) . "/" . $value["name"];
            $models[$key]["url"] = $url;
        }
        return $models;
    }

    public function getOrdersAllGoodForUser($userId) {
        var_dump($userId); exit();
        return $this->db->selectMany("SELECT * FROM `good_order` LEFT JOIN `good` ON `good`.id = `good_order`.good_id where `good_order`.`user_id` = :userId", [ "userId" => $userId ]);
    }

    public function getOrderById($id) {
        $order = $this->db->selectOne("SELECT * FROM `good_order` where `good_order`.`id` = :id", [ "id" => $id ]);
      
        return $order;
    }

    public function getOrdersActivForAdm() {
        $order = $this->db->selectMany("SELECT * FROM `good_order` where `good_order`.`is_done` = 0 AND `good_order`.`is_delete` = 0");
      
        return $order;
    }

    public function getOrdersGoodActivForAdm() {
        $order = $this->db->selectMany("SELECT * FROM `good_order` LEFT JOIN `good` ON `good`.id = `good_order`.good_id where `good_order`.`is_done` = 0 AND `good_order`.`is_delete` = 0");
      
        return $order;
    }

    public function getOrdersGoodActivForUser($userId) {
        $sql = " FROM `good_order` LEFT JOIN `good` ON `good`.id = `good_order`.good_id where `good_order`.`user_id` = :userId AND `good_order`.`is_done` = 0 AND `good_order`.`is_delete` = 0 ";
        $params = [ "userId" => $userId ];

        $all = intval($this->db->selectOne("SELECT count(*) as qq " . $sql, $params)["qq"]);
        $res = intdiv($all, 3);
        if ($all % 3 > 0) $res++;        

        $sql_res = "SELECT * " . $sql;
        if (isset($_GET["page"])) {
            $skip = $_GET["page"] * 3;
            $sql_res .= " limit " . $skip . ",3";
        } else {
            $sql_res .= " limit 3";
        }

        $order = $this->db->selectMany($sql_res, $params);
        
      
        return ["data" => $order, "pages" => $res];
    }

    public function getOrdersDoneForAdm() {
        $order = $this->db->selectMany("SELECT * FROM `good_order` where `good_order`.`is_done` = 1");
      
        return $order;
    }

    public function getOrdersDoneForUser($userId) {
        $order = $this->db->selectMany("SELECT * FROM `good_order` where `good_order`.`user_id` = :userId AND `good_order`.`is_done` = 1", [ "userId" => $userId ]);
      
        return $order;
    }

    public function getOrdersDelForAdm() {
        $order = $this->db->selectMany("SELECT * FROM `good_order` where `good_order`.`is_delete` = 1");
      
        return $order;
    }

    public function getOrdersDelForUser($userId) {
        $order = $this->db->selectMany("SELECT * FROM `good_order` where `good_order`.`user_id` = :userId AND `good_order`.`is_delete` = 1", [ "userId" => $userId ]);
      
        return $order;
    }

    public function getOrdersCancelForUser($userId) {
        $order = $this->db->selectMany("SELECT * FROM `good_order` where `good_order`.`user_id` = :userId AND `good_order`.`is_cancel` = 1", [ "userId" => $userId ]);
      
        return $order;
    }

    public function getOrderBynumb_order($numb_order) {
        $order = $this->db->selectOne("SELECT * FROM `good_order` where `good_order`.`numb_order` = :numb_order", [ "numb_order" => $numb_order ]);
      
        return $order;
    }

    public function saveOrder($order) {
        if (!isset($order["id"]) || $order["id"] == -1){
            $id = $this->insertOrder($order);

            $order["id"] = $id;
            $order["numb_order"] = $id;

            $this->updateOrder($order);

            return $id;
        }
        else {
            $this->updateOrder($order);
            return $order["id"];
        }
    }

    private function insertOrder($order) {
     
        
        $id = $this->db->create("INSERT INTO `good_order` (`numb_order`, `user_id`, `good_id`, `user_name`, `user_email`, `user_phone`, `user_message`, `date_create`, `date_change`, `comment_admin`, `price_order`, `is_done`, `is_cancel`, `is_delete`) 
                                VALUES (:numb_order, :user_id_my, :good_id, :user_name_my, :user_email, :user_phone, :user_message, :date_create, :date_change, :comment_admin, :price_order, :is_done, :is_cancel, :is_delete)", 
        [
            "numb_order" => $order["numb_order"],
            "user_id_my" => $order["user_id"],
            "good_id" => $order["good_id"],
            "user_name_my" => $order["user_name"],
            "user_email" => $order["user_email"],
            "user_phone" => $order["user_phone"],
            "user_message" => $order["user_message"],
            "date_create" => $order["date_create"],
            "date_change" => $order["date_change"],
            "comment_admin" => $order["comment_admin"],
            "price_order" => $order["price_order"],
            "is_done" => $order["is_done"],
            "is_cancel" => $order["is_cancel"],
            "is_delete" => $order["is_delete"]
        ]);
     
            

      
        return $id;
    }

    private function updateOrder($order) {
      //  if (!isset($order["user_id"] !== "admin")) return;
        $result = $this->db->update("UPDATE `good_order` 
                                        SET `numb_order` = :numb_order, 
                                            `user_id` = :user_id_my,
                                            `good_id` = :good_id,
                                            `user_name` = :user_name_my,
                                            `user_email` = :user_email,
                                            `user_phone` = :user_phone,
                                            `user_message` = :user_message,
                                            `date_create` = :date_create,
                                            `date_change` = :date_change,
                                            `comment_admin` = :comment_admin,
                                            `price_order` = :price_order,
                                            `is_done` = :is_done,
                                            `is_cancel` = :is_cancel,
                                            `is_delete` = :is_delete
                                                WHERE 
                                            `good_order`.`id` = :id ",
                                            [
                                                "numb_order" => $order["numb_order"],
                                                "user_id_my" => $order["user_id"],
                                                "good_id" => $order["good_id"],
                                                "user_name_my" => $order["user_name"],
                                                "user_email" => $order["user_email"],
                                                "user_phone" => $order["user_phone"],
                                                "user_message" => $order["user_message"],
                                                "date_create" => $order["date_create"],
                                                "date_change" => $order["date_change"],
                                                "comment_admin" => $order["comment_admin"],
                                                "price_order" => $order["price_order"],
                                                "is_done" => $order["is_done"],
                                                "is_cancel" => $order["is_cancel"],
                                                "is_delete" => $order["is_delete"],

                                                "id" => $order["id"]
                                            ]);
        if ($result === false)
            return false;
       
        return $order["id"];
    }

    public function cancelOrder($id) {
        if ($id > 0) {
            $this->db->update("UPDATE `good_order` SET `is_cancel` = 1,   WHERE `good_order`.`id` = :id", [ "id" => $id ]);
            return true;
        }
        return false;
    }

    public function deleteOrder($id) {
        if ($id > 0) {
            $this->db->update("UPDATE `good_order` SET `is_delete` = 1,   WHERE `good_order`.`id` = :id", [ "id" => $id ]);
            return true;
        }
        return false;
    }



}
<?php

class order_model extends ModelBase {

    public function getOrdersAllForAdm() {
        return $this->db->selectMany("SELECT * FROM `good_order`", []);
    }

    public function getOrderById($id) {
        $order = $this->db->selectOne("SELECT * FROM `good_order` where `good_order`.`id` = :id", [ "id" => $id ]);
      
        return $order;
    }

    public function getOrdersActivForAdm() {
        $order = $this->db->selectMany("SELECT * FROM `good_order` where `good_order`.`is_done` = 0");
      
        return $order;
    }

    public function getOrdersDoneForAdm() {
        $order = $this->db->selectMany("SELECT * FROM `good_order` where `good_order`.`is_done` = 1");
      
        return $order;
    }

    public function getOrdersDelForAdm() {
        $order = $this->db->selectMany("SELECT * FROM `good_order` where `good_order`.`is_delete` = 1");
      
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

            return $this->updateOrder($order);
        }
        else
            return $this->updateOrder($order);
    }

    private function insertOrder($order) {
     
        
        $id = $this->db->create("INSERT INTO `good_order` (`numb_order`, `user_id`, `good_id`, `user_name`, `user_email`, `user_phone`, `user_message`, `date_create`, `date_change`, `comment_admin`, `is_done`, `is_delete`) 
                                VALUES (:numb_order, :user_id_my, :good_id, :user_name_my, :user_email, :user_phone, :user_message, :date_create, :date_change, :comment_admin, :is_done, :is_delete)", 
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
            "is_done" => $order["is_done"],
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
                                            `is_done` = :is_done,
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
                                                "is_done" => $order["is_done"],
                                                "is_delete" => $order["is_delete"],

                                                "id" => $order["id"]
                                            ]);
        if ($result === false)
            return false;
       
        return $order["id"];
    }

    public function deleteOrder($id) {
        if ($id > 0) {
            $this->db->update("UPDATE `good_order` SET `is_delete` = 1,   WHERE `good_order`.`id` = :id", [ "id" => $id ]);
            return true;
        }
        return false;
    }



}
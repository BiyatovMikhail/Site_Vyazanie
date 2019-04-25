<?php

class user1_model extends ModelBase {

    public function getUsersAll() {
        return $this->db->selectMany("SELECT * FROM `user`", []);
    }

    public function getUserById($id) {
        $user = $this->db->selectOne("SELECT * FROM `user` where `user`.`id` = :id", [ "id" => $id ]);
      
        return $user;
    }

    public function getUserByName($name) {
        $user = $this->db->selectOne("SELECT * FROM `user` where `user`.`name` = :name", [ "name" => $name ]);
      
        return $user;
    }

    public function saveUser($user) {
      
        if (!isset($user["id"]) || $user["id"] == -1){
    
            return $this->insertUser($user);
        }
        else
            return $this->updateUser($user);
    }

    private function insertUser($user) {
     
        
        $id = $this->db->create("INSERT INTO `user` (`login`, `pass`, `comment`, `version`, `surname`, `name`, `nikname`, `email`, `phone`, `gender`, `user_id_social`, `user_secret_social`, `is_ban`, `is_delete`) 
                                VALUES (:name, :description, :category_id, :price, :per_discount, :price_discount, :is_discount, :count_good)", 
        [
            "name" => $user["name"],
            "description" => $user["description"],
            "category_id" => $user["category_id"],
            "price" => $user["price"],
            "per_discount" => $user["per_discount"],
            "price_discount" => $user["price_discount"],
            "is_discount" => $user["is_discount"],
            "count_good" => $user["count_good"]
        ]);
     
        
        

        return $id;
    }

    private function updateUser($user) {
        if (!isset($user["is_discount"])) $user["is_discount"] = 0;
        if (!isset($user["count_good"]) || $user["count_good"] == "") $user["count_good"] = 0;
        $result = $this->db->update("UPDATE `user` 
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
                                                "name" => $user["name"],
                                                "description" => $user["description"],
                                                "category_id" => $user["category_id"],
                                                "price" => $user["price"],
                                                "per_discount" => $user["per_discount"],
                                                "price_discount" => $user["price_discount"],
                                                "is_discount" => $user["is_discount"],
                                                "count_good" => $user["count_good"],
                                                "id" => $user["id"]
                                            ]);
        if ($result === false)
            return false;

       
        return $user["id"];
    }

    public function deleteUser($id) {
        if ($id > 0) {
            $this->db->update("DELETE FROM `user` WHERE `user`.`id` = :id", [ "id" => $id ]);
            return true;
        }
        return false;
    }








}
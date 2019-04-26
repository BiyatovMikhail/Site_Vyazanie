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
     
        
        $id = $this->db->create("INSERT INTO `user` (`login`, `pass`, `comment`, `version`, `surname`, `name`, `name2`, `nikname`, `email`, `phone`, `gender`, `user_id_social`, `user_secret_social`, `date_create`, `date_change`, `is_ban`, `is_delete`) 
                                VALUES (:login, :pass, :comment, :version, :surname, :name, :name2, :nikname, :email, :phone, :gender, :user_id_social, :user_secret_social, :date_create, :date_change, :is_ban, :is_delete )", 
        [
            "login" => $user["login"],
            "pass" => $user["pass"],
            "comment" => $user["comment"],
            "version" => $user["version"],
            "surname" => $user["surname"],
            "name" => $user["name"],
            "name2" => $user["name2"],
            "nikname" => $user["nikname"],
            "email" => $user["email"],
            "phone" => $user["phone"],
            "gender" => $user["gender"],
            "user_id_social" => $user["user_id_social"],
            "user_secret_social" => $user["user_secret_social"],
            "date_create" => $user["date_create"],
            "date_change" => $user["date_change"],
            "is_ban" => $user["is_ban"],
            "is_delete" => $user["is_delete"]

        ]);

        return $id;
    }

    private function updateUser($user) {
       
        $result = $this->db->update("UPDATE `user` 
                                        SET `login` = :login, 
                                            `pass` = :pass,
                                            `comment` = :comment,
                                            `version` = :version,
                                            `surname` = :surname,
                                            `name` = :name,
                                            `name2` = :name2,
                                            `nikname` = :nikname,
                                            `email` = :email,
                                            `phone` = :phone,
                                            `gender` = :gender,
                                            `user_id_social` = :user_id_social,
                                            `user_secret_social` = :user_secret_social,
                                            `date_create` = :date_create,
                                            `date_change` = :date_change,
                                            `is_ban` = :is_ban,
                                            `is_delete` = :is_delete
                                                WHERE 
                                            `user`.`id` = :id ",
                                            [
                                                "login" => $user["login"],
                                                "pass" => $user["pass"],
                                                "comment" => $user["comment"],
                                                "version" => $user["version"],
                                                "surname" => $user["surname"],
                                                "name" => $user["name"],
                                                "name2" => $user["name2"],
                                                "nikname" => $user["nikname"],
                                                "email" => $user["email"],
                                                "phone" => $user["phone"],
                                                "gender" => $user["gender"],
                                                "user_id_social" => $user["user_id_social"],
                                                "user_secret_social" => $user["user_secret_social"],
                                                "date_create" => $user["date_create"],
                                                "date_change" => $user["date_change"],
                                                "is_ban" => $user["is_ban"],
                                                "is_delete" => $user["is_delete"],
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
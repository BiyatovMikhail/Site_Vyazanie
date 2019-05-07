<?php

class basket_model extends ModelBase {


    public function getBasketTempActivForUser($userId) {
        $basketTemp = $this->db->selectMany("SELECT * FROM `good_basket_temp` where `good_basket_temp`.`user_id` = :userId AND`good_basket_temp`.`is_activ` = 0 AND `good_basket_temp`.`is_cancel` = 0", [ "userId" => $userId ]);
      
        return $basketTemp;
    }
    

    public function saveBasketTemp($basketTemp) {
        
        if (!isset($basketTemp["id"]) || $basketTemp["id"] == -1){
           
            return $this->insertBasketTemp($basketTemp);
        }
        else
            return $this->updateBasketTemp($basketTemp);
    }

    private function insertBasketTemp($basketTemp) {
     //   var_dump($basketTemp); exit();
        $id = $this->db->create("INSERT INTO `good_basket_temp` (`user_id`, `good_id`, `count_good`, `is_activ`, `is_cancel`) 
                                VALUES (:user_id_my, :good_id, :count_good, :is_activ, :is_cancel)", 
        [
            "user_id_my" => $basketTemp["user_id"],
            "good_id" => $basketTemp["good_id"],
            "count_good" => $basketTemp["count_good"],
            "is_activ" => $basketTemp["is_activ"],
            "is_cancel" => $basketTemp["is_cancel"]
            
        ]);
     
        return $id;
    }

    private function updateBasketTemp($basketTemp) {
      
        $result = $this->db->update("UPDATE `good_basket_temp` 
                                        SET `user_id` = :user_id_my, 
                                            `good_id` = :good_id,
                                            `count_good` = :count_good,
                                            `is_activ` = :is_activ,
                                            `is_cancel` = :is_cancel
                                                WHERE 
                                            `good_basket_temp`.`id` = :id ",
                                            [
                                                "user_id_my" => $basketTemp["user_id"],
                                                "good_id" => $basketTemp["good_id"],
                                                "count_good" => $basketTemp["count_good"],
                                                "is_activ" => $basketTemp["is_activ"],
                                                "is_cancel" => $basketTemp["is_cancel"],
                                                
                                                "id" => $basketTemp["id"]
                                            ]);
        if ($result === false)
            return false;
       
        return $basketTemp["id"];
    }

    public function cancelBasketTemp($id) {
        if ($id > 0) {
            $this->db->update("UPDATE `good_basket_temp` SET `is_cancel` = 1,   WHERE `good_basket_temp`.`id` = :id", [ "id" => $id ]);
            return true;
        }
        return false;
    }

    public function deleteBasketTemp($id) {
        if ($id > 0) {
            $this->db->update("UPDATE `good_basket_temp` SET `is_activ` = 1,   WHERE `good_basket_temp`.`id` = :id", [ "id" => $id ]);
            return true;
        }
        return false;
    }





}
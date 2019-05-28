<?php

class basket_model extends ModelBase {


    public function getBasketTempActivForUser($userId) {
        $basketTemp = $this->db->selectMany("SELECT 
        `good_basket_temp`.*,
        `good`.`article_good`,
        `good`.`name`,
        `good`.`description`,
        `good`.`category_id`,
        `good`.`price`,
        `good`.`per_discount`,
        `good`.`price_discount`,
        `good`.`is_discount`,
        `good`.`count_good` AS count_good_good
    
    FROM 
            `good_basket_temp` 
            LEFT JOIN `good` ON `good`.id = `good_basket_temp`.good_id 
            where `good_basket_temp`.`user_id` = :userId AND 
            `good_basket_temp`.`is_activ` = 0 AND 
            `good_basket_temp`.`is_cancel` = 0", [ "userId" => $userId ]);

      //  var_dump($basketTemp); exit();
      
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
            $this->db->update("UPDATE `good_basket_temp` SET `is_cancel` = 1 WHERE `good_basket_temp`.`id` = :id", [ "id" => $id ]);
            return true;
        }
        return false;
    }

   
    public function deleteBasketTemp($id) {
        if ($id > 0) {
            $this->db->update("UPDATE `good_basket_temp` SET `is_activ` = 1 WHERE `good_basket_temp`.`id` = :id", [ "id" => $id ]);
            return true;
        }
        return false;
    }


    public function getBasketPayAllForUser($userId) {
        $sql = " 
        FROM 
        `good_basket` 
            LEFT JOIN `good` ON 
                `good`.id = `good_basket`.good_id 
            LEFT JOIN `good_category` ON 
                `good_category`.id = `good`.category_id 
    where `good_basket`.`user_id` = :userId
    ORDER BY date_create DESC        
        ";
        $params = [ "userId" => $userId ];

        $all = intval($this->db->selectOne("SELECT count(*) as qq " . $sql, $params)["qq"]);
        $res = intdiv($all, 3);
        if ($all % 3 > 0) $res++;        

        $sql_res = "SELECT                 
        `good_basket`.`*`, 
        `good`.`article_good`,
		  `good`.`name`, 
		  `good`.`category_id`, 
		  `good`.`price` AS price_good, 
		  `good`.`price_discount`, 
		  `good`.`is_discount`,  
        `good_category`.name AS cat_name " . $sql;
        if (isset($_GET["page"])) {
            $skip = $_GET["page"] * 3;
            $sql_res .= " limit " . $skip . ",3";
        } else {
            $sql_res .= " limit 3";
        }

        $order = $this->db->selectMany($sql_res, $params);

        foreach ($order as $key => $value) {
            $url = "/shop/good/" . str_replace("/", "_", $value["cat_name"]) . "/" . $value["name"];
            $url2 = "/admin/userone/" . $value["login"];
            $order[$key]["url"] = $url;
            $order[$key]["url2"] = $url2;
        }
        
        return ["data" => $order, "pages" => $res];
       
    }








    public function saveBasketPay($basketPayArry) {
        
        if (!isset($basketPayArry["id"]) || $basketPayArry["id"] == -1){
           
            return $this->insertBasketPay($basketPayArry);
        }
        else
            return $this->updateBasketPay($basketPayArry);
    }

    private function insertBasketPay($basketPay) {
     
        $id = $this->db->create("INSERT INTO `good_basket` (`number_order`, `good_id`, `prise`, `user_id`, `count`, `prise_basket`, `date_create`, `date_change`, `comment_admin`, `is_done`, `is_cancel`, `is_delete`) 
                                                    VALUES (:number_order, :good_id, :prise, :user_id_my, :count_my, :prise_basket, :date_create, :date_change, :comment_admin, :is_done, :is_cancel, :is_delete)", 
        [
            "number_order" => $basketPay["number_order"],
            "good_id" => $basketPay["good_id"],
            "prise" => $basketPay["prise"],
            "user_id_my" => $basketPay["user_id"],
            "count_my" => $basketPay["count"],
            "prise_basket" => $basketPay["prise_basket"],
            "date_create" => $basketPay["date_create"],
            "date_change" => $basketPay["date_change"],
            "comment_admin" => $basketPay["comment_admin"],
            "is_done" => $basketPay["is_done"],
            "is_cancel" => $basketPay["is_cancel"],
            "is_delete" => $basketPay["is_delete"]
            
        ]);
     
        return $id;
    }

    private function updateBasketPay($basketPay) {
      
        $result = $this->db->update("UPDATE `good_basket` 
                                        SET `number_order` = :number_order, 
                                            `good_id` = :good_id,
                                            `user_id` = :user_id_my,
                                            `count` = :count_my,
                                            `prise_basket` = :prise_basket,
                                            `date_create` = :date_create,
                                            `date_change` = :date_change,
                                            `comment_admin` = :comment_admin,
                                            `is_done` = :is_done,
                                            `is_cancel` = :is_cancel,
                                            `is_delete` = :is_delete
                                                WHERE 
                                            `good_basket`.`id` = :id ",
                                            [
                                                "number_order" => $basketPay["number_order"],
                                                "good_id" => $basketPay["good_id"],
                                                "user_id_my" => $basketPay["user_id"],
                                                "count_my" => $basketPay["count"],
                                                "prise_basket" => $basketPay["prise_basket"],
                                                "date_create" => $basketPay["date_create"],
                                                "date_change" => $basketPay["date_change"],
                                                "comment_admin" => $basketPay["comment_admin"],
                                                "is_done" => $basketPay["is_done"],
                                                "is_cancel" => $basketPay["is_cancel"],
                                                "is_delete" => $basketPay["is_delete"],
                                                                                                
                                                "id" => $basketPay["id"]
                                            ]);
        if ($result === false)
            return false;
       
        return $basketPay["id"];
    }

    public function UpdateCount($id, $value) {
        $result = $this->db->update("UPDATE `good_basket_temp` 
                                        SET `count_good` = :value 
                                                WHERE 
                                            `id` = :id ",
                                            [
                                                "value" => $value,
                                                "id" => $id
                                            ]);
        if ($result === false)
            return false;
       
        return true;
    }

    public function getLastNumberOrderBasket(){
        $lastNumberOrder = $this->db->selectOne("SELECT MAX(number_order) as m
        FROM `good_basket`", []);

    //    var_dump($lastNumberOrder); exit();
      
        return $lastNumberOrder;
    }

    public function addBuyToBasketPay($sql){
        //var_dump($sql); exit();
       $id = $this->db->create($sql, []);
     
        return $id;
    }


}
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>Заказ в магазине Волшебная нить</title>
    <style>
        
    </style>
</head>
<body>
    <table border="1">
        <tr>
            <th>
                № zakaza заказа
            </th>
            <th>
                name Usera юзера
            </th>
            <th>
                email Usera
            </th>
            <th>
                phone Usera
            </th>
            
            <th>
                Summa zakaza
            </th>
        </tr>
        <tr>
            <td><?= $MODEL["user"]["order_basket_id"] ?></td>
            <td><?= $MODEL["user"]["user_namefull"] ?></td>
            <td><?= $MODEL["user"]["user_email"] ?></td>
            <td><?= $MODEL["user"]["user_phone"] ?></td>
            
            <td><?=  ?></td>
        </tr>
        
    </table>  
    <table border="1">
        <tr>
            
            <th>
                № tovara
            </th>
            <th>
                name tovara
            </th>
            <th>
                Summa zakaza
            </th>
        </tr>
        <tr>
             
            <td><?= $MODEL["good_id"] ?></td>
            <td><?= $MODEL["good_name"] ?></td>
            <td><?= $MODEL["price_order"] ?></td>
        </tr>
        
    </table>    
</body>
</html>
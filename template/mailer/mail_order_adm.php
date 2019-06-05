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
                № zakaza
            </th>
            <th>
                name Usera
            </th>
            <th>
                email Usera
            </th>
            <th>
                phone Usera
            </th>
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
            <td><?= $MODEL["numb_order"] ?></td>
            <td><?= $MODEL["user_namefull"] ?></td>
            <td><?= $MODEL["user_email"] ?></td>
            <td><?= $MODEL["user_phone"] ?></td>
            <td><?= $MODEL["good_id"] ?></td>
            <td><?= $MODEL["good_name"] ?></td>
            <td><?= $MODEL["price_order"] ?></td>
        </tr>
        <tr>
        <td  colspan="7"> <?= $MODEL["user_message"] ?> </td>
        </tr>
    </table>    
</body>
</html>
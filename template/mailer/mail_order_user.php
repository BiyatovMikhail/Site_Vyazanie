<!DOCTYPE html>
<html>
<?
$headers = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=utf-8' . "\r\n"; 
?>
<head>
   <!-- <meta charset="utf-8" />
    <meta  charset= "windows-1251" /> -->
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>Заказ в магазине Волшебная нить</title>
    <style>
        
    </style>
</head>
<body>
<div>
Здравствуйте!

Ваша заявка № <?= $MODEL["numb_order"] ?> : <?= $MODEL["date_create"] ?> успешно внесена в очередь на обработку. 
В ближайшее время с Вами свяжутся для подтверждения закза по электронной почте или по телефону.


</div>
    <table border="1">
        <tr>
            <th>
                № zakaza заказа
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
            
            <td><?= $MODEL["good_id"] ?></td>
            <td><?= $MODEL["good_name"] ?></td>
            <td><?= $MODEL["price_order"] ?></td>
        </tr>
        
    </table>  

    <div>
    С уважением,
Студия Волшебная нить.

P.S. Это автоматическая рассылка, отвечать на нее не нужно.
    </div>  
</body>
</html>
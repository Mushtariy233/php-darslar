<?php
$talabalar =[
 ["Ism" => "Ali", "familiya"=> "Ozodov", "t_yili"=> 1986],
    ["Ism" => "Odilbek", "familiya" => "Karimov", "t_yili" => 1996], 
     ["Ism" => "Beksod", "familiya" => "Masharipov", "t_yili" => 1998], 

] ;

?>
 
<!DOCTYPE html>
<html lang="uz">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jadval Namuna</title>
    <style>
        table {
            width: 60%;
            border-collapse: collapse;
            margin: 20px auto;
            font-family: Arial, sans-serif;
        }
        th, td {
            border: 1px solid #333;
            padding: 10px;
            text-align: center;
        }
        th {
            background-color: #0078D7;
            color: white;
        }
        tr:nth-child(even) {
            background-color: #f2f2f2;
        }
        caption {
            caption-side: top;
            font-size: 1.5em;
            margin-bottom: 10px;
            font-weight: bold;
        }
    </style>
</head>
<body>

    <table>
        <caption>Talabalar Ma'lumotlari</caption>
        <thead>
            <tr>
                <th>#</th>
                <th>Ism</th>
                <th>Familiya</th>
                <th>Yosh</th>
                <th>Yo‘nalish</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($talabalar as $key => $value): ?>
                <tr>
                    <td><?php echo ++$key ?></td>
                    <td> <?php echo $value["ism"]?> </td>
                    <td> <?php echo $value["familiya"]?> </td>
                    <td> <?php echo $value["yoshi"]?> </td>
                    <td> <?php echo $value["bahosi"]?> </td>
                </tr>
            <?php endforeach; 

       <tbody>
    </table>

</body>
</html>



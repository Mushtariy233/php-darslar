<?php

$users= [
    ["Ism" => "Ali", "familiya"=> "Ozodov", "t_yili"=> 1986],
    ["Ism" => "Odilbek", "familiya" => "Karimov", "t_yili" => 1996], 
     ["Ism" => "Beksod", "familiya" => "Masharipov", "t_yili" => 1998], 
];
$son = [[3,5,6,[2,8,56,]],6,4,8,];
print_r(value: $users);
echo $users[1]['Ism'];
echo "\n";
foreach ($users as $item){
    echo $item['ism']. ",";
}
?>

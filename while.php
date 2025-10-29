<?php
$i=1;
while ($i <= 5) {
    echo $i. ",";
    $i ++;
}
echo "\n";
$x = 5;
while ($i <10) {
    $i++;
    if ($i ==3) continue;
    echo $i. "," ;
}
echo "\n";
$i = 1;
do {
    echo $i;
    $i++;
} while ($i <6);

?>
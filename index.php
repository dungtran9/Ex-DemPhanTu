<?php

function checkValue($numbers, $value)
{
    $count = 0;
    for ($i = 0; $i < count($numbers); $i++) {
        if ($numbers[$i] == $value) {
            $count++;
        }
    }
    return $count;
}

$numbers = [];
for($i=0;$i<20;$i++){
    $numbers[$i]=rand(1,10);
}
foreach ($numbers as $num){
    echo $num.",";
}
$value = 5;
echo "<br>";
echo "so lan xuat hien cua ".$value."trong mang la " .checkValue($numbers, $value);
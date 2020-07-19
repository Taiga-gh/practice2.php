<?php

#課題1
$name = "井出太雅";
if ($name = "井出太雅") {
 echo "私は あなたの名前 です";
} else {
 echo "あなたの名前ではありません";
}

#課題2
for ($i = 0; $i <= 10000; $i++){
    $total += $i;
}
echo $total;

#課題3
$fruits = array("grape","orange","apple","grapefruit","acerola");
foreach($fruits as $fruit){
    echo $fruit;
    echo "\n";
}

#課題4
$start = 1;
$end = 100;
for($i = $start; $i <= $end; $i++){
    if($i %5 == 0){
        echo $i;
        echo "\n";
    }
}
<?php

$customers = ["侍 太郎", "侍 次郎", "侍 三郎"];

foreach ($customers as &$customer) {
    print($customer."\n");
}

$fruit = ["りんご", "オレンジ", "ぶどう"];

foreach($fruit as &$value){
    echo $value."\n";
}

$data = [1, 2, 3];

array_push($data, 4);

print($data[0]."\n");
# => 1
print($data[2]."\n");
# => 3
print($data[3]."\n");
# => 何も表示されない  
print("要素数".count($data)."\n");

$string =[];
array_push($string,"samurai");
print($string[0]."\n");
?>
<?php
function hello ($a,$b){
    print($a + $b)."\n";
}

hello(29,50);

function add ($a, $b){
    return $a + $b;
}

$num = add(2, 3);
print($num)."\n";
# => 5と表示される
?>
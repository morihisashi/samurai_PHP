<?php
function calc ($a,$b){
    print($a*$b)."\n";
}

calc(29,50);

function triangle_area ($a,$b){
    return $a * $b/2;
}
$num = triangle_area(4,6);
print($num)."\n";

$file_list = [];
function add_list($name){
    global $file_list;
    $file_name = $name.".php";
    array_push($file_list, $file_name);
}

add_list("function");
print($file_list[0])."\n";

add_list("hello");
print($file_list[1]."\n");

?>
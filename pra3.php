<?php
function check($num){
  if($num == 42){
      print("Answer to the Ultimate Question of Life, the Universe, and Everything")."\n";
  }else{
      print("numは".$num."です")."\n";
  }
}
check(10);

$even_num = [];
$odd_num = [];
function sort_number($sort){
  global $even_num;
  global $odd_num;
  if($sort % 2 == 1){
    array_push($even_num,$sort);
  }else{
    array_push($odd_num,$sort);
  }
  
}
sort_number(2);
sort_number(3);

var_dump($even_num)."\n";
var_dump($odd_num)."\n";

?>
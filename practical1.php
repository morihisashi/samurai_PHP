<?php
$dic = [
    "x" => 10,
    "y" => 20
];
print($dic["x"]."\n");
print($dic["y"]."\n");
$dic["y"] = 40;
print($dic["x"]."\n");
print($dic["y"]."\n");
?>
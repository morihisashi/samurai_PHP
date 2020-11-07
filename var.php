<?php
$name = "侍太郎";

function func(){
    global $name;
    print($name."\n");
}

print($name."\n");
# ターミナルに侍太郎と表示される

func();
# ターミナルに侍太郎と表示される
?>
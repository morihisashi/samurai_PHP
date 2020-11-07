<?php
$data = [
    "name"=>"大泉",
    "gender"=>"男性",
    "age"=>46
];
$data['children'] = ["太郎", "次郎", "三郎"];
print($data['name']."\n");
# => 大泉が表示される
print($data['gender']."\n");
# => 男性が表示される
print($data['age']."\n");
# => 46が表示される
var_dump($data);
?>
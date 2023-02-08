<?php

$arr = [1,2,2,2,2,3,3,3];

$uniqueArr = array_count_values($arr);
$val = max($uniqueArr);
$maxs = array_keys($uniqueArr, max($uniqueArr));
$luckNumber = $maxs[0];
$return = $luckNumber;
foreach ($uniqueArr as $key => $val){
    if($key > $luckNumber) {
        $return = -1;
    }

    if($uniqueArr[$key] == $uniqueArr[$luckNumber] && $key != $luckNumber){
        $return = ($key > $luckNumber) ? $key : $luckNumber;
    }
}

print_r($return);
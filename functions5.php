<?php
function largestNum($numbers){
    $largest = $numbers[0];
    foreach($numbers as $num){
        if($largest < $num){
            $largest = $num;
        }
    }
    return $largest;
}
$numbers=[1,4,2,8,6,9];
echo largestNum($numbers);
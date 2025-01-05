<?php
function area($radius){
    $pi=3.14;
    echo "$pi * $radius * $radius = "."<br>";
    $area = $pi * $radius * $radius;
    return $area;
}
echo area(5);

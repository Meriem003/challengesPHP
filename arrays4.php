<?php 
$age=array(2,5,9,1,6,3);
sort($age);
$countArr = count($age);
for($x=0; $x<$countArr; $x++){
echo $age[$x]."<br>";
}
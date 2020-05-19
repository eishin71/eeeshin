<?php

function sum($max){
  $result = 0;
  
  for($i = 1; $i <= $max; $i++){
    $result += $i;
  }
  return $result;
}
echo sum(50);
echo"\n";

$string = "ABCDEF";
echo strlen($string);

$string = "I Love Ruby!";
$new_string = str_replace("Ruby","PHP",$string);
echo $new_string;

$array = array(1,2,3,4,5,6,7,8,9,10);
echo count($array);
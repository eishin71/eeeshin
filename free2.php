<?php
//1
function sun($max){
    $result = 0;
    for($i =1; $i <= $max; $i++){
    $result += $i;
    }
    return $result;
}
echo sun(100);
echo"\n";

$string = "ABCDEF";
echo strlen($string);
echo"\n";

$string = "I love Ruby!";

// Ruby という文字列を　PHP に置換する
$new_string = str_replace("Ruby", "PHP", $string);

echo $new_string;
echo"\n";

function product($max){
    $result =0;
    for($i=1; $i<=$max;$i++){
    $result+=$i;    
    }
    return $result*2;
}
echo product(5);
echo "\n";

function f($a,$b){
    $result=0;
    for($i =1; $i <= $a; $i++){
    $result+=$i;
    }
    for($a =1; $a <= $b; $a++){
    $result+=$a;
    }
    return $result;
}
echo f(2,1);
echo "\n";

function a($arr){
    $result=1;
    foreach($arr as $a){
    $result *=$a;
    }
    echo $result;
}
a(array(1,3,5,7,9));
echo "\n";



//
$list = [1,45,6,13,11];
$result = max_array($list);
echo $result;

 function max_array($arr)
 {
 $max_number = $arr[0];
 foreach($arr as $a) {
    if ($max_number < $a) {
        $max_number = $a;
     }
 }
 return $max_number;
 }
 
 //
$stack = array("orange", "banana");
array_push($stack, "apple", "raspberry");
print_r($stack);

$array1 = array("color" => "red", 2, 4);
$array2 = array("a", "b", "color" => "green", "shape" => "trapezoid", 4);
$result = array_merge($array1, $array2);
var_dump($array1);
var_dump($array2);
print_r($result);


$nextWeek = time() + (7 * 24 * 60 * 60);
                   // 7 日 * 24 時間 * 60 分 * 60 秒
echo 'Now:       '. date('Y-m-d') ."\n";
echo 'Next Week: '. date('Y-m-d', $nextWeek) ."\n";

//

date_default_timezone_set('UTC');

// 出力: July 1, 2000 is on a Saturday
echo "July 1, 2000 is on a " . date("l", mktime(0, 0, 0, 7, 1, 2000));

// 出力例: 2006-04-05T01:02:03+00:00
echo date('c', mktime(1, 2, 3, 4, 5, 2006));
echo date("M-d-Y", mktime(0, 0, 0, 12, 32, 1997));
<?php
//1
function product($max){
    $result =0;
    for($i = 1; $i < $max; $i++){
        $result+= $i;
    }
    return $result*2;
}
echo product(1);
echo"\n";
//2
function f($a,$b){
    $result =0;
    for($i =1; $i < $a+$b ; $i++){
        $result+= $i;
    }
    return $result;
}
echo f(2,6);
echo"\n";

//3
function A($arr){
    $result =1;
    foreach($arr as $a){
        $result*= $a;
    }
    echo $result;
}
A(array(1,3,5,7,9));
echo"\n";

//4
$list = [1,4,6,12,7];
$result = max_array($list);
echo $result;

function max_array($arr) {
    $max_number = $arr[0];
    foreach($arr as $a){
        if ($max_number < $a) {
            $max_number = $a;
        }
    }
    return $max_number;
}
echo "\n";


//strip_tags
$text = '<p>HANDBALL</p><!-- Comment --> <a href="#fragment">handball</a>';
echo strip_tags($text);
echo "\n";

echo strip_tags($text, '<p><a>');
echo "\n";

//array_push
$fruits = array("orange","apple");
array_push($fruits,"grape","banana");
print_r($fruits);
echo "\n";

//array_merge
$array1 = array("sports" => "baseball",4,6);
$array2 = array("a","b","sports" => "handball","fruits" => "apple",5);
$result = array_merge($array1,$array2);
print_r($result);
echo "\n";

//time
$nextWeek = time() + (7 * 24 * 60 * 60);
                   // 7 日 * 24 時間 * 60 分 * 60 秒
echo 'Now:       '. date('Y-m-d') ."\n";
echo 'Next Week: '. date('Y-m-d', $nextWeek) ."\n";

//mktime
echo date("M-d-Y", mktime(0, 52, 9, 5, 19, 2020));
echo "\n";
//date
date_default_timezone_set('UTC');
echo date('l jS \of F Y h:i:s A');
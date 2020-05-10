<?php
$interger = 20;
$stringv= "abc";

$new_interger = $interger +10;
echo $new_interger;
//配列
$array = [2017,2018,2019,2020];
echo $array[0];

$array2 = ["spring","summer","autumn","winter"];
echo $array2[3];
//連想配列
$animals = [
  "cat" => "猫",
  "dog" => "犬",
  "bird" => "鳥"
  ];
  echo $animals["cat"];
  echo $animals["bird"];
  //論理型
  $result = true;
  if ($result == true) {
    echo "成功しました";
  } else {
    echo "失敗しました";
  }
  
//二項演算
$value = 6;

echo $value + 2;
echo $value - 9;
echo $value * 8;
echo $value / 2;

$value = "AAA";
echo $value ."BBB";

//論理演算
$value = 10;
//　＝＝は左項と右項が等しいか判定する
$result = $value == 20;
var_dump($result);

//<は左項が右項より小さいかを判定する
$result = $value < 20;
var_dump($result);

//>は左項が右項より大きいかを判定する
$result = $value > 20;
var_dump($result);

$a = "20";
$b = 20;
//　＝＝＝は左項と右項が同じ型で同じ値を持つかを判定する

$result = $a == $b;
var_dump($result);

$result = $a === $b;
var_dump($result);

//単項演算
$value = 10;

++$value;
echo $value;

--$value;
echo $value;
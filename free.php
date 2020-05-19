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
echo "\n";

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
echo "\n";

$value = 10;
--$value;
var_dump($value);

//複合演算
$value = 10;

$value += 5;
echo $value;
echo "\n";

$value -= 10;
echo $value;
echo "\n";

$value ='apple';
$value .= 'orange';
echo $value;


//
$a = 3;
$b = 7;
echo $a + $b;
echo"\n";

$array_month = ["1月","2月","3月","4月","5月","6月",
               "7月","8月","9月","10月","11月","12月"];
echo $array_month[7];
echo"\n";

$hello = "Hello,";
$name = "eishin";
$world = "'s World!";
echo $hello.$name.$world;
echo "\n";

$tech_boost = "tech";
$tech_boost .= "boost";
echo $tech_boost;

$calendar_2018 = [
  "January" => "1月",
  "February" => "2月",
  "March" => "3月",
  "April" => "4月",
  "May" => "5月",
  "June" => "6月",
  "July" => "7月",
  "August" => "8月",
  "September" => "9月",
  "October" => "10月",
  "November" => "11月",
  "December" => "12月"
];

// 12月を表示する
echo $calendar_2018["December"];


<?php
$height = 160;
if ($height < 150) {
  echo "150cm 未満の方はご乗車出来ません";
} else {
  echo "ご乗車になれます";
}
echo"\n";

$height =230;
if ($height <150) {
    echo "150cm未満の方はご乗車出来ません";
}  else if ($height >= 200) {
    echo "200cm以上の方はご乗車出来ません";
} else {
    echo "ご乗車になれます";
}
echo "\n";

$weekday = "月曜";

switch ($weekday) {
  case "月曜":
    echo "可燃ゴミの日です。";
    break;
  case "水曜":
    echo "資源ゴミの日です。";
    break;
  default:
    echo "回収はありません。";
    break;
}
echo"\n";

//繰り返し
for($i = 0; $i < 10; $i++) {
    echo $i;
}
echo"\n";

$total = 0;
for($i = 0; $i <= 100; $i++) {
    $total += $i;
}
echo $total;
echo "\n";

$animals = array("dog","cat","panda");

foreach($animals as $animal){
  echo "要素は". $animal;
  echo "\n";
}

$name ="eishin"


if ($name =="eishin") {
  echo "私は英伸です";
}   else {
  echo "あなたの名前ではありません";
}
  echo "\n";
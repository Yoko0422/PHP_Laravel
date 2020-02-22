<?php

$name = "Yoko";

if ($name == "Yoko") {
  echo "私はあなたの名前です";
} else {
  echo "あなたの名前ではありません";
}

$total = 0;
echo $total;

for ($i = 0; $i <= 10000; $i++) {
  $total += $i;
}
echo $total;

$fruits = array("apple", "melon", "grape", "lemon", "strawberry");

foreach($fruits as $fruits2){
    echo "要素は" . $fruits2;
    echo "\n";
}


//4.　【応用】 次のプログラムのバグを修正し、1から100までの間で5の倍数のみ表示するようにしてみてください。

/* for文の始めの値を定義する /
$start = 1;
/* for文の終わりの値を定義する */
$end = 100;

for ($i = $start; $i <= $end; $i++) {

  // 5で割り切れたら{}内を実行する
  if($i % 5 == 0){
    echo $i;
    echo "\n";
  }
}

?>
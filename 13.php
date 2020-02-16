<?php

//1.引数に数値を指定して実行すると、数値を2倍にして返す関数を作成してください

function twice($a){
    $result = $a * 2;
    return $result;
}
// 関数を実行
echo twice(10);

echo "\n";

//2.$a と $b を仮引数に持ち、　$a と $b　を足した結果を返す関数を作成してください。

function f($a, $b){
 $result = $a + $b;
 return $result;
}
echo f(1, 2);
echo "\n";

//3.$arr という配列の仮引数を持ち、数値が入った配列array(1, 3, 5 ,7, 9) を渡すとその要素をすべてかけた結果を返す関数を作成してください。
$arr3 = array(1, 3, 5, 7, 9);

function b($arr){
    $result = 1;
    foreach ($arr as $arr2){
        $result *= $arr2;
    }
    return $result;
}
echo b($arr3);

echo "\n";

//4.【応用】　次のプログラムは、配列の中で一番大きい値を返す max_array という関数を実装しようとしています。途中の部分を完成させてください。
$arr = array(1, 6, 2, 47, 29, 43);

function max_array($arr){
    // とりあえず配列の最初の要素を一番大きい値とする
    $max_number = $arr[0];
    foreach ($arr as $a){
    //どうしたらいいかわからない・・・・
        if ($a >= $max_number){
            $max_number = $a;
        }
    }
    return $max_number;
}
echo max_array($arr);

?>
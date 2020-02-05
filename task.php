<?php

/*
    引数に数値を指定して実行すると、数値を2倍にして返す関数を作成してください
*/
function double($x) {
    return $x * 2;
}
echo double(5);
echo "\n";



/*
    $a と $b を仮引数に持ち、　$a と $b　を足した結果を返す関数を作成してください。
*/
function f($a, $b) {
    return $a + $b;
}
echo f(2, 5);
echo "\n";



/*
    $arr という配列の仮引数を持ち、数値が入った配列array(1, 3, 5 ,7, 9) を渡すと
    その要素をすべてかけた結果を返す関数を作成してください。
*/
function sample($arr) {
    $result = 1;
    foreach($arr as $a) {
        $result *= $a;
    }
    return $result;
}
echo sample(array(1, 3, 5 ,7, 9));
echo "\n";



/*
    【応用】　次のプログラムは、配列の中で一番大きい値を返す max_array という関数を
    実装しようとしています。途中の部分を完成させてください。
*/
function max_array($arr){
    // とりあえず配列の最初の要素を一番大きい値とする
    $max_number = $arr[0];
    foreach($arr as $a){
        if($max_number < $a) {
            $max_number = $a;
        }
    }
return $max_number;
}
echo max_array(array(1, 3, 5 ,7, 9));
echo "\n";



/*
    次のビルトイン関数の用途、使い方を調べて実際に使ってみてください。
*/
//strip_tags
$str = "<p>HTMLのタグを取り除く</p>";
$str = strip_tags($str);
echo $str;
echo "\n";

//array_push
$sports = ["サッカー", "野球", "テニス"];
array_push($sports, "ソフトボール", "卓球");
print_r($sports);
echo "\n";

//array_merge
$animal = ["dog", "cat", "lion"];
$array = array_merge($sports,$animal);
print_r($array);
echo "\n";

//time
echo time();
echo "\n";

//mktime
echo mktime();
echo "\n";

//date
echo date("Y/M/D");
echo "\n";
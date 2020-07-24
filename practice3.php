<?php
#1.引数に数値を指定して実行すると、数値を2倍にして返す関数を作成してください
function doublevalue($value) {{
    return $value * 2;
    }
}
echo doublevalue(10);
echo "\n";

#2.$a と $b を仮引数に持ち、　$a と $b　を足した結果を返す関数を作成してください。
function f($a, $b){
 $result = $a + $b;
 return $result;
}
echo f(10,20);
echo "\n";

#3.$arr という配列の仮引数を持ち、数値が入った配列array(1, 3, 5 ,7, 9) を渡すとその要素をすべてかけた結果を返す関数を作成してください。
function multiplyArray($array)
{
    $num = 1;
    foreach($array as $value) {
        $num *= $value;
    }
    return $num;
}
echo multiplyArray([1, 3, 5, 7, 9]);
echo "\n";

#4.【応用】　次のプログラムは、配列の中で1番大きい値を返す max_array という関数を実装しようとしています。途中の部分を完成させてください。
function max_array($arr){
// とりあえず配列の最初の要素を一番大きい値とする
 $max_number = $arr[0];
 foreach($arr as $a){
 //どうしたらいいかわからない・・・・
  if($max_number < $a) {
            $max_number = $a;
    }
 }
 return $max_number;
 }
 echo max_array(array(5, 1, 7, 3));
 echo "\n";
 
#5.次のビルトイン関数の用途、使い方を調べて実際に使ってみてください。
#strip_tags
$string = "<h1>strip_tags関数</h1>"
."<p>タグ取り除くよっ！</p>";
echo strip_tags($string);
echo "\n";

#array_push
$fruits = ['apple', 'orange', 'melon'];
//array_pushを使用して要素を追加する
array_push($fruits, 'banana', 'pineapple');
print_r($fruits);
echo "\n";

#array_merge
$items1 = ['item1', 'item2', 'item3'];
$items2 = ['item4', 'item5'];
$items3 = ['item6', 'item7'];
//配列を結合する
$item_merge = array_merge($items1, $items2, $items3);
print_r($item_merge);
echo "\n";

#time, mktime
#time
//現在のタイムスタンプを取得
echo '現在のUnixタイムスタンプ：'.time();
echo '<br>';
echo "\n";
//3日後のタイムスタンプを取得
$nweek = time() + (3 * 24 * 60 * 60);
echo '3日後のUnixタイムスタンプ：'.$nweek;
echo "\n";
#mktie
//指定した日時のタイムスタンプを取得
$timestamp = mktime(0, 0, 0, 8, 1, 2020);
echo '指定した日時のタイムスタンプ：'.$timestamp;
echo "\n";

#date
$timestamp = time() + (60 * 60 * 24) * 7;
$next_week = date('Y年m月d日H時i分s秒', $timestamp);
print $next_week;
echo "\n";
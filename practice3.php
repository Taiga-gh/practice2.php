

<?php
#1.引数に数値を指定して実行すると、数値を2倍にして返す関数を作成してください
#$func = function($value) {
#    return $value * 2;
#};

#print_r(array_map($func, range(1, 5)));

#function doublevalue($value) {{
#    return $value * 2;
#    }
#}
#echo doublevalue(10);

#2.$a と $b を仮引数に持ち、　$a と $b　を足した結果を返す関数を作成してください。
#function f($a, $b){
# $result = $a + $b;
# return $result;
#}
#echo f(10,20);

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
#$list = [1, 3, 5, 7, 9];  // （3）
#$result = multiplyArray($list);  // （4）
#print("配列の計算結果: ".$result);

#4.【応用】　次のプログラムは、配列の中で1番大きい値を返す max_array という関数を実装しようとしています。途中の部分を完成させてください。

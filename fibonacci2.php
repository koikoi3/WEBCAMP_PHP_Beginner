<?php
echo "0 \n";
echo "1 \n";

$i = 0;
$j = 1;

while($j <= 10000) {
    // 次の値を計算する
    $k = $i + $j;
    
    // 出力
    echo "{$k} \n";
    
    // 数値をずらす
    $i = $j;
    $j = $k;
}
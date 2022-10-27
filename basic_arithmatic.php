<?php

# 四則演算
# ２つの数を作る
$i = random_int(1, 999);
$j = random_int(1, 999);

# 加算
$k = $i + $j;
# 出力
echo "{$i} + {$j} = {$k} \n";

$k = $i - $j;
echo "{$i} - {$j} = {$k} \n";

$k = $i * $j;
echo "{$i} * {$j} = {$k} \n";

$k = $i / $j;
echo "{$i} / {$j} = {$k} \n";

$k = $i % $j;
echo "{$i} % {$j} = {$k} \n";

$k = $i ** 3;
echo "{$i} ** 3 = {$k} \n";

$k = pow($i, 3);
echo "pow({$i}, 3) = {$k} \n";

<?php
//
function fibo($n)
{
  if ($n <= 1) {
    return $n;
  } else {
    return (fibo($n - 1) + fibo($n - 2));
  }
}

for ($i = 0; $i < 22; $i++) {
  echo fibo($i) . "\n";
}




// こっちも動く
<?php
for([$v = [0,1], $i = 1];count($v) <= 21; ++$i) {
    $v[] = $v[$i-1] + $v[$i];
}
echo implode("\n", $v);
echo "\n";
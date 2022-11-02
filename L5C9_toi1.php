<?php
function myFuncStringAdd(string $a, string $b): string
{
    $ret = "{$a}{$b}";
    
    return $ret;
}
$add = myFuncStringAdd("あいう", "えお");
echo "あいうとえおを足したら {$add}になった \n";
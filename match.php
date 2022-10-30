<?php

$i = 2;
$s = match($i) {
    '2a' => "i は '2a'です \n",
    '2' => "i は '2'(string)です \n",
    2 => "i は2(int)です \n",
};
echo $s;
// PHP8.0以上で動く、PHP7.4では動かない
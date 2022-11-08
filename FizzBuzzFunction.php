<?php
//
function fizzBuzz(int $max)
{
    
    for($i = 1; $i <= $max; ++$i) {
        //
        $s = "";
        
        if ( ($i % 3) === 0 ) {
            $s = "Fizz ";
        }
        if ( ($i % 5) === 0 ) {
            $s = $s . "Bizz ";
        }
        if ($s === "") {
            $s = "{$i} ";
        }
        //
        echo "{$s} \n";
    }
    echo "\n";
}
//
fizzBuzz(50);
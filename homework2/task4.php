<?php
$a = 1;
$b = 2;
$operation = "division";
function mathOperation($arg1, $arg2, $operation){
    switch($operation){
        case "addition":
            return $arg1+$arg2 . "  ";
            break;
        case "subtraction":
            return $arg1-$arg2;
            break;
        case "multiplication":
            return $arg1 * $arg2;
            break;
        case "division":
            return $arg1 / $arg2;
            break;
        }
    }

echo mathOperation($a , $b , $operation);

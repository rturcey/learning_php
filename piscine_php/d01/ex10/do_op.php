#!/usr/bin/php
<?php
    if (count($argv) != 4){
        echo "Incorrect Parameters\n";
        return ;
    }
    $op = trim($argv[2]);
    $val1 = intval($argv[1]);
    $val2 = intval($argv[3]);
    if ($op == "+")
        echo $val1 + $val2;
    else if ($op == "-")
        echo $val1 - $val2;
    else if ($op == "*")
        echo $val1 * $val2;
    else if ($op == "/")
        echo $val1 / $val2;
    else if ($op == "%")
        echo $val1 % $val2;  
?>
#!/usr/bin/php
<?php

    function    error(){
        echo "Syntax Error\n";
        return 1;
    }

    if (count($argv) != 2){
        echo "Incorrect Parameters\n";
        return ;
    }
    $string = str_replace(' ', '', $argv[1]);
    $val1 = intval($string);
    if (!($op = $string[strlen($val1 + 1)]))
        return error();
    $val2 = substr($string, strlen($val1)+ 1);
    if (!is_numeric($val2))
        return error();
    $val2= intval($val2);
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
    return error();
?>
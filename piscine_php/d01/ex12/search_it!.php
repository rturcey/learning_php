#!/usr/bin/php
<?php
    if ($argv < 3)
        return ;
    unset($argv[0]);
    $to_find = $argv[1];
    unset($argv[1]);
    foreach($argv as $arg){
        $array = explode(":", $arg);
        if ($array[0] == $to_find){
            echo "$array[1]\n";
            return ;
        }
    }
?>
#!/usr/bin/php
<?php
    if($argv < 2)
        return ;

    $array = array_filter(explode(' ', $argv[1]));
    $array[count($array)] = $array[0];
    unset($array[0]);
    $string = "";
    foreach($array as $elt)
        $string .= $elt . " ";
    if ($string[strlen($string) - 1] == ' ')
        $string = substr($string, 0, -1);
    echo "$string\n";
?>
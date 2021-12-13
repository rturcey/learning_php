#!/usr/bin/php
<?php
    if (count($argv) != 2)
        return ;
    $array = array_filter(explode(' ', trim($argv[1])));
    $string = "";
    foreach($array as $value)
        $string .= $value . ' ';
    echo trim($string);
?>
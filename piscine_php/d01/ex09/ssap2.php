#!/usr/bin/php
<?php

function    custom_sort($elt1, $elt2){
    $elt1 = strtolower($elt1);
    $elt2 = strtolower($elt2);
    $key1 = ctype_alpha($elt1[0]) ? 2 : (is_numeric($elt1[0]) ? 1 : 0);
    $key2 = ctype_alpha($elt2[0]) ? 2 : (is_numeric($elt2[0]) ? 1 : 0);
    if ($key1 == $key2){
        $len = strlen($elt1) > strlen($elt2) ? strlen($elt2) : strlen($elt1);
        for ($i = 0 ; $i <= $len ; ++$i){
            $diff = ord($elt1[$i]) - ord($elt2[$i]);
            if ($diff)
                return $diff;
        }
        return (0);
    }
    return ($key2 - $key1);
}

function    filter_null($elt){
    if ($elt === "0")
        return (true);
    if ($elt === null || empty($elt))
        return (false);
    return (true);
}

unset($argv[0]);
$array = array();
print_r($argv);
foreach($argv as $arg){
    $list = array_filter(explode(' ', $arg), "filter_null");
    foreach($list as $elt){
        $array[] = $elt;
    }
}
uasort($array, "custom_sort");
foreach ($array as $elt)
    echo "$elt\n";
?>
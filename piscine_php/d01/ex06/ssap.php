#!/usr/bin/php
<?php
unset($argv[0]);
$array = array();
foreach($argv as $arg){
    $list = array_filter(explode(' ', $arg));
    foreach($list as $elt){
        $array[] = $elt;
    }
}
sort($array);
foreach ($array as $elt)
    echo "$elt\n";
?>
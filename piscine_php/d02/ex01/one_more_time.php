#!/usr/bin/php
<?php

    function    error(){
        echo "Wrong Format\n";
        exit(1);
    }

    if ($argv < 2)
        return ;
    $days = array("lundi", "mardi", "mercredi", "jeudi", "vendredi", "samedi", "dimanche");
    $months = array("janvier", "février", "mars", "avril", "mai", "juin", "juillet", "août", "septembre", "octobre", "novembre", "décembre");

    if (!preg_match("/[a-zA-Z]{1}[a-z]+ [0-9]{1,2} [a-zA-Z]{1}[a-z]+ [0-9]{4} [0-9]{2}\:[0-9]{2}\:[0-9]{2}/", $argv[1]))
        error();
    $array = explode(' ', $argv[1]);
    if (!array_search(strtolower($array[0]), $days))
        error();
    if (!($month = array_search(strtolower($array[2]), $months)))
        error();
    ++$month;
    $time_array = explode(":", $array[4]);
    echo mktime($time_array[0] - 1, $time_array[1], $time_array[2], $month, $array[1], $array[3]);
?>


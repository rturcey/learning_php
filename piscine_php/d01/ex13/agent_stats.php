#!/usr/bin/php
<?php

    function    average($array){
        $average = 0;
        foreach($array as $note){
            $average += intval($note);
        }
        return $average / count($array);
    }

    function    average_user($array){
        ksort($array);
        foreach($array as $key => $value){
            $value = average(explode(';', trim($value, ';')));
            echo "$key:$value\n";
        }
    }

    function    moulinette_variance($array){
        ksort($array);
        foreach($array as $key => $value){
            $user = average(explode(';', trim($value[0], ';')));
            $moulinette = average(explode(';', trim($value[1], ';')));
            $diff = $user - $moulinette;
            echo "$key:$diff\n";
        }
    }

    if (count($argv) != 2 || ($argv[1] != "moyenne" && $argv[1] != "moyenne_user" && $argv[1] != "ecart_moulinette"))
        return;
    $stdin = fopen('php://stdin', 'r');
    $count = 0;
    $array = array();
    while ($f = fgets($stdin)){
        if ($count++ == 0 || count(($elt = explode(';', $f))) != 4)
            continue ;
        if ($argv[1] == "ecart_moulinette"){
            if (!$array[$elt[0]])
                $array[$elt[0]] = array("", "");
            if ($elt[2] == "moulinette" && strlen($elt[1]))
                $array[$elt[0]][1] .= $elt[1].";";
            else if (strlen($elt[1]))
                $array[$elt[0]][0] .= $elt[1].";";
        }
        else if ($argv[1] == "moyenne_user" && $elt[2] != "moulinette" && strlen($elt[1]))
            $array[$elt[0]] .= "$elt[1];";
        else if ($elt[2] != "moulinette" && strlen($elt[1]))
            $array[] = $elt[1];
    }
    if ($argv[1] == "moyenne")
        echo average($array);
    else if ($argv[1] == "moyenne_user")
        average_user($array);
    else
        moulinette_variance($array);
?>
#!/usr/bin/php
<?php
    $stdin = fopen('php://stdin', 'r');
    echo "Entrez un nombre: ";
    while ($f = fgets($stdin)){
        $val = substr($f, 0, -1);;
        if (!is_numeric($val))
            echo "'$val' n'est pas un chiffre\n";
        else if ($val % 2)
            echo "Le chiffre $val est Impair\n";
        else
            echo "Le chiffre $val est Pair\n";
        echo "Entrez un nombre: ";
    }
?>
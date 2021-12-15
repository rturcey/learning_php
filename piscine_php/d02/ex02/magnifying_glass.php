#!/usr/bin/php
<?php
    $fp = fopen("php://stdin", "r") or die("Impossible de lire la ligne de commande");
    while ($line = fgets($fp)) {
        $line = preg_replace_callback(
            "/(<a .*?>)(.*)(<\/a>)/",
            function ($matches) {
                return $matches[1].strtoupper($matches[2]).$matches[3];
            },
            $line
        );
        echo $line;
    }
    fclose($fp);
?>
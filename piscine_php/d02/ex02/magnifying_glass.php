#!/usr/bin/php
<?php
    $fp = fopen("php://stdin", "r") or die("Impossible de lire la ligne de commande");
    while ($line = fgets($fp)) {
        $line = preg_replace_callback(
            "/(<a .*?>)(.*)(<\/a>)/",
            function ($matches) {
                $matches[0] = preg_replace_callback(
                    "/((<.*>)*)((.*)*)((<.*>)*)/",
                    function ($matches) {
                        foreach($matches[1] as $match)
                            $match = strtoupper($match);
                        return $matches[1];
                    },
                    $matches[0]
                    
                )
            },
            $line
        );
        echo $line;
    }
    fclose($fp);


?>
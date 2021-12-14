#!/usr/bin/php
<?php
    if ($argv < 2)
        return ;
    echo preg_replace("/[ \t]+/", " ", $argv[1])."\n";
?>


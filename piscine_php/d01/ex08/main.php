#!/usr/bin/php
<?php
    include("ft_is_sort.php");

    $tab = array("!/@#;^", "42", "Hello World", "salut", "zZzZzZz");
    //$tab[] = "Et";

    if (ft_is_sort($tab))
        echo "Le tableau est trie\n";
    else
        echo "Le tableau n'est pas trie\n";
?>
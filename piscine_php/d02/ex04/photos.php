#!/usr/bin/php
<?php
    function    grab_img($directory, $filename, $url){
        $file = fopen("$directory/$filename", "w");
        $c = curl_init($url);
        curl_setopt($c, CURLOPT_FILE, $file);
        curl_setopt($c, CURLOPT_TIMEOUT, 10);
        curl_exec($c);
        curl_close ($c);
        fclose($file);
    }

    if (count($argv) < 2)
        return ;
    $directory = str_replace("http://", "", $argv[1]);
    $directory = str_replace("https://", "", $directory);
    $c = curl_init($argv[1]);
    curl_setopt($c, CURLOPT_RETURNTRANSFER, TRUE);
    $str = curl_exec($c);
    $matches = array();
    preg_match_all("/<img .*src=\"(([^\"]+)*)\"/", $str, $matches);
    if (count($matches[2]) > 0){
        if (!file_exists($directory))
            mkdir($directory);
        foreach($matches[2] as $img){
            $filename = array();
            preg_match("/([^\/]+)*$/", $img, $filename);
            grab_img($directory, $filename[0], $img);
        }
    }
    curl_close($c);
?>
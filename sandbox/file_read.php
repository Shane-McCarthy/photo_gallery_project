<?php
/**
 * Created by PhpStorm.
 * User: can you dig it
 * Date: 1/29/14
 * Time: 12:55 PM
 */
$file = 'file_test.php';
if ($handle= fopen($file,'r')){
    $content = fread($handle,9);
    fclose($handle);
}
echo $content. "<br /> ";
echo nl2br($content);
echo "<hr/>";
// use filesize ()to read the whole file
$file = 'file_test.php';
if ($handle= fopen($file,'r')){
    $content = fread($handle,filesize($file));
    fclose($handle);
}

// file_get_contents(); shortcut for fopen/fread/fclose

$content = file_get_contents($file);
echo nl2br($content);
echo "<hr/>";

// incremental reading
$content = "";

if ($handle= fopen($file,'r')){
    while(!feof($handle)){
        $content .= fgets($handle);
    }
    fclose($handle);
}
echo nl2br($content);
echo "<hr/>";

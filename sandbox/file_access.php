<?php
/**
 * Created by PhpStorm.
 * User: can you dig it
 * Date: 1/29/14
 * Time: 12:11 PM
 */
$file = 'filetest.php';
if ($handle = fopen($file,'w')){
fclose($handle);
}else{
    echo "COuld not open or write file";
}
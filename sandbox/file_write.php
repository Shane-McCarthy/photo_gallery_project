<?php
/**
 * Created by PhpStorm.
 * User: can you dig it
 * Date: 1/29/14
 * Time: 12:11 PM
 */
$file = 'file_test.php';
if ($handle = fopen($file,'w')){
   $content = "123\n456";
    fwrite($handle,$content);

    fclose($handle);
}else{
    echo "Could not open or write file";
}

// file_put_contents : shortcut fopen/fwrite/fclose
// over writes existing file by default **BE CAREFUL **
$file = 'file_test.php';
$content = "111\n222\n333";
if ($size = file_put_contents($file,$content)){
    echo "A file of {$size} bytes was created";
}
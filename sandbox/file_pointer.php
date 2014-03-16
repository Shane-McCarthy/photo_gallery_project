<?php
/**
 * Created by PhpStorm.
 * User: can you dig it
 * Date: 1/29/14
 * Time: 12:29 PM
 */

$file = 'file_test.php';
if ($handle = fopen($file,'w')){
    $content = "123\n456";
    fwrite($handle,$content);
    $pos= ftell($handle);
    fseek($handle,$pos-6);
    fwrite($handle,"abcdef");
    rewind($handle);
    fwrite($handle,"xyz");
    fclose($handle);
}else{
    echo "Could not open or write file";
}

// NOTE: a and a+ modes will not let you move the pointer.
<?php
/**
 * Created by PhpStorm.
 * User: can you dig it
 * Date: 1/29/14
 * Time: 2:30 PM
 */

$dir = ".";
if (is_dir($dir)){
    if ($dir_handle=opendir($dir)){
        while($filename = readdir($dir_handle)){
            echo "filename : {$filename}<br />";
        }

        // use rewinddir($dir_handle) to start over .
        closedir($dir_handle);
    }
}

// scandir() reads all filenames into an array
// not much shorter but makes it easier to sort the array.
if (is_dir($dir)){
    $dir_array = scandir($dir);
    foreach($dir_array as $file){
        if (stripos($file,'.')>0){
            echo "filename : {$file} <br />";
        }
    }
}
<?php
/**
 * Created by PhpStorm.
 * User: can you dig it
 * Date: 1/29/14
 * Time: 1:13 PM
 */

$filename = "file_test.php";
echo filesize($filename). "<br />";

echo filemtime($filename). "<br />"; // last modified
echo filectime($filename). "<br />"; // last changed
echo  fileatime($filename). "<br />"; // last accessed
// touch($filename); // might return cached data .
echo strftime ('%m/%d/%Y %H:%M',filemtime($filename) ). "<br />";
echo strftime ('%m/%d/%Y %H:%M',filectime($filename)). "<br />";
echo strftime ('%m/%d/%Y %H:%M',fileatime($filename) ). "<br />";

$path_parts = pathinfo(__FILE__);
echo $path_parts['dirname']. "<br />"; // location of file
echo $path_parts['basename']. "<br />"; // file name.php
echo $path_parts['filename']. "<br />"; // file details
echo $path_parts['extension']. "<br />";// php extensions
<?php
/**
 * Created by PhpStorm.
 * User: can you dig it
 * Date: 1/29/14
 * Time: 11:46 AM
 */
//echo fileowner('file_permissions.php');
// if we have posix installed

$owner_id = fileowner('file_permissions.php');
//$owner_array = posix_getpwuid($owner_id);
//echo $owner_array ['name'];

echo decoct( fileperms('file_permissions.php'));
 chmod('file_permissions.php',0777);
echo decoct( fileperms('file_permissions.php'));
echo is_readable('file_permissions.php')? 'yes': 'no';
echo "<br />";
echo is_writeable('file_permissions.php')? 'yes': 'no';

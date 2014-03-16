<?php
/**
 * Created by PhpStorm.
 * User: can you dig it
 * Date: 1/29/14
 * Time: 1:30 PM
 */

// getcwd() current working directory
echo getcwd(). "<br /> ";

// mkdir () make a directory

//mkdir('new', 0777);

// recursive directory creation
//mkdir('new/test/test2',0777,true);

// change directories
chdir('new');
echo getcwd(). "<br /> ";

// remove directory

rmdir('test/test2');

// to remove directories the dir must be closed and empty before removal
// you can check on php.net for scripts to wipe out dir's with files
// search function.rmdir .
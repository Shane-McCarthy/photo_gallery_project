<?php
/**
 * Created by PhpStorm.
 * User: can you dig it
 * Date: 1/27/14
 * Time: 7:39 PM
 */
echo __FILE__."<br />";
echo __LINE__."<br />"; // gives you the line number of the execution .
echo dirname(__FILE__)."<br />";
echo __DIR__."<br />";

echo file_exists(__FILE__) ? 'yes': 'no';
echo "<br />";

echo file_exists(dirname(__FILE__)."/quiz03.php") ? 'yes': 'no';
echo "<br />";

echo file_exists(dirname(__FILE__)) ? 'yes': 'no';
echo "<br />";


echo is_dir(dirname(__FILE__)."/quiz03.php") ? 'yes': 'no';
echo "<br />";


echo is_dir(dirname(__FILE__)) ? 'yes': 'no';
echo "<br />";


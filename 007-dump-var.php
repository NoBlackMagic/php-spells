<?php
/**
 * DUMP VAR SCRIPT
 * ===============
 *
 * It is often useful to display the content of a variable to the screen just to
 * debug pourpose.
 *
 * print_r() is a very useful functions that expose the content of whatever 
 * variable type: strings, numbers, arrays, associative arrays.
 *
 * the point here is to set a text/plain **Content Type** for the page so it is
 * possible to nicely read the output.
 *
 * Read More:
 * - [Content Type](http://www.php.net//manual/en/function.header.php)
 * - [Dump Utility](http://us2.php.net//manual/en/function.print-r.php)
 */
 
header('Content-type: text/plain');
print_r($_SERVER);
die();
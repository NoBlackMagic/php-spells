<?php
/**
 * SCRIPT MODULARITY
 * =================
 *
 * An application should become so complex that it is not good 
 * to be coded into a single source file.
 *
 * Here it comes the "include()" function which allow to import
 * a script into another.
 *
 * ---
 * this script is the modularised version of "004-validation.php" script.
 * it does exactly the same things with a more organised code base.
 * ---
 *
 * NOTE: a file which contains ONLY php doesn't need to close the
 *       PHP tag at the end.
 *
 * NOTE: be careful to do not place white spaces before the PHP
 *       opening tags because they are sent to the client as
 *       output data! 
 *       (this is often causes bad headaches to PHP coders!)
 *
 */

include('005-config.php');
include('005-logic.php');
include('005-page.php');

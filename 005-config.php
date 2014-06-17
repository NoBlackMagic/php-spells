<?php
/**
 * @mainScript: 005-index.php
 * (should be nice to point out from which file a script is required!)
 */

// setup initial values, this is the "default status" of the script
$showForm = true;
$showResult = false;
$showErrors = false;
$fieldValue = '';

// a "constant" represent some non modificable data we need to use inside our script.
define('CORRECT_ANSWER', 'mpeg');

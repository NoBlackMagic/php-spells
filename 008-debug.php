<?php
/**
 * DEBUG UTILITY FUNCTION
 * ======================
 *
 * This is a classic debug utility that you can include as
 * library in your scripts. 
 */

function debug($var = false, $showHtml = false) {
    print "\n<pre class=\"cake_debug\">\n";
    
    ob_start();
    print_r($var);
    $var = ob_get_clean();

    if ($showHtml) {
        $var = str_replace('<', '&lt;', str_replace('>', '&gt;', $var));
    }
    
    print "{$var}\n</pre>\n";
};



// debug a string
$foo = 'I am a string';
debug($foo);

// debug a number
$foo = 123;
debug($foo);

// debug a boolean
$foo = true;
debug($foo);

// debug an array
$foo = Array('apple','orange','pear');
debug($foo);

// debug an array position
debug($foo[1]);

// debug an associative array:
$foo = Array(
    'name' => 'Marco',
    'surname' => 'Peg'
);
debug($foo);

// debug an associative array position:
debug($foo['name']);

// debug an html string
debug('<p>My name is <b>Marco Peg</b>.</p>');

// debug an html string showing it's code
debug('<p>My name is <b>Marco Peg</b>.</p>', true);

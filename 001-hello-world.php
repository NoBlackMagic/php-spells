<!--
PHP = PHP Hypertext Preprocessor

When you require this file via an HTTP request the server (like Apache)
pass the file's content through the PHP interpreter in order to obtain
the final HTML source to be sent to the client.

PHP detects dynamic code which is delimited by "<?php" and "?>" pseudo tags.

All the PHP code is being evaluated and any echoed output is merged into 
the final HTML code replacing the PHP script itself.
-->
<!DOCTYPE html>
<html>
<head>
    <meta charset=utf-8 />
    <title>PHP Hello World</title>
</head>
<body>
    <p>this is HTML</p>
    <?php
    echo '<p>this is PHP</p>';
    ?>
    <p>this is HTML again</p>
</body>
</html>

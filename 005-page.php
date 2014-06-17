<?php
 /**
 * @mainScript: 005-index.php
 * 
 * This script is just the HTML structure of our application page.
 * Very often it is referred as "layout" because here you can link
 * CSS or stuff that cha change the appeareance of the content.
 *
 * The body contains just some flow conditionals, each one include
 * a sub-module only if it is needed by the actual app status.
 *
 * The point is to keep the code as clean and simple as possible by
 * demanding to sub-modules the big part of the job.
 *
 */
 ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset=utf-8 />
    <title>PHP005 - Single Script Form Example</title>
</head>
<body>
    <?php 
    /**
     * SHOW THE FORM AND ERROR MESSAGES
     */
    if ($showForm) {
        include('005-page-form.php');
    }
    
    /**
     * SHOW THE "RESULT PAGE"
     */
    if ($showResult) {
        include('005-page-result.php');
    }
    ?>
</body>
</html>
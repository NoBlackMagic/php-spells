<?php
/**
 * SCRIPT LOGIC
 */

$showForm = true;
$showErrors = false;

// $_SERVER contains a lot of useful informations we can use to make our
// scripts more smart.
//
// Here I read the script's name in order to send the form to itself
// without hard code the name into the code.
//
// If the script's name changes no modifications are needed to the form action param.
// that's nice!
$scriptName = basename($_SERVER['SCRIPT_NAME']);

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    
    /**
     * CHECKBOX VALIDATION ISSUE:
     * a checkbox control which is not checked does not exists into the data gathering array.
     * that's why we need to validate both data existance and data value.
     */
    if (isset($_POST['privacy']) && $_POST['privacy'] == 'yes') {
        $showForm = false;
    } else {
        $showErrors = true;
    }
}




/**
 * LAYOUT
 */
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset=utf-8 />
    <title>PHP004 - Single Script Form Example</title>
</head>
<body>
    
    <?php if ($showForm): ?>
        
        <form action="<?= $scriptName ?>" method="post">
            <?php if ($showErrors): ?>
            <div style="color:red">
                You must accept our magificent terms and conditions!
            </div>
            <?php endif; ?>
            <div>
                <input type="checkbox" name="privacy" value="yes">
                <label for="privacy">I accept your damn terms and conditions.</label>
                <br>
                <input type="submit" value="send"></input>
            </div>
        </form>
    
    <?php else: ?>
    
        Good boy!<br>
        Now on you'll receive all our annoying marketing materials!
    
    <?php endif; ?>
</body>
</html>

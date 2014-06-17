<?php
/**
 * SCRIPT LOGIC
 * ============
 *
 * here at the beginning of the file we can do all the heavy logic computation for our script.
 * the point is to set variables, check variables and change variables value.
 *
 * - all the operations are done here
 * - simple variables are filled up for the presentation
 * - no output is sent, no "echo" is being used here!
 *
 */

// setup initial values, this is the "default status" of the script
$showForm = true;
$showResult = false;
$showErrors = false;
$fieldValue = '';

// a "constant" represent some non modificable data we need to use inside our script.
define('CORRECT_ANSWER', 'mpeg');

// perform the logic only when the form is sent
if ($_SERVER['REQUEST_METHOD'] == "POST") {
    
    // data gathering
    $fieldValue = $_POST['answer'];
    
    // data validation
    if ($fieldValue == CORRECT_ANSWER) {
        $showForm = false;
        $showResult = true;
    } else {
        $showErrors = true;
    }
}




/**
 * SCRIPT PRESENTATION
 * ===================
 * 
 * down here there is almost HTML with some "PHP placeholders" inside.
 * the main pourpose is to **present the output**. 
 *
 * >
 * > !!! there is almost no logic in the following code !!!
 * > 
 */
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset=utf-8 />
    <title>PHP004 - Single Script Form Example</title>
</head>
<body>
    
    <?php 
    /**
     * SHOW THE FORM AND ERROR MESSAGES
     */
    if ($showForm): ?>
    <form action="004-validation.php" method="post">
        <?php if ($showErrors): ?>
        <div style="color:red">
            "<?= $fieldValue ?>" is not the correct answer!
        </div>
        <?php endif; ?>
        <div>
            <label for="answer">Who's the best?</label><br>
            <input type="text" name="answer" value="<?= $fieldValue ?>">
            <input type="submit" value="send"></input>
        </div>
    </form>
    <?php endif; ?>
    
    
    <?php 
    /**
     * SHOW THE "RESULT PAGE"
     */
    if ($showResult) {
        // strings coded with double quotes can contains and evaluate variables:
        echo "<p>Yeah! <b>$fieldValue</b> is the best!</p>";
        
        // but it is always better to code strings with single quotes like this:
        echo '<p><a href="004-validation.php">&laquo; Back</a></p>';
    }
    ?>
</body>
</html>
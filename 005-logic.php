<?php
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

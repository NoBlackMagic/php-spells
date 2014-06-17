<!--
This is a classic "target PHP script" who receives and handle some data.

As you see this script is a simple HTML page with a little chunch of PHP
which output a variable's content.

The $_POST variable is an _associative array_ which contains all data
which has been posted to the script itself.

NOTE: $_POST is being populated by a form which expose "method=POST" attribute.
-->
<!DOCTYPE html>
<html>
<head>
    <meta charset=utf-8 />
    <title>PHP002 - Form Example</title>
</head>
<body>
    <p>Your name is: <b><?php echo $_POST['answer']; ?></b></p>
    <p><a href="002-form.html">&laquo; Back</a></p>
</body>
</html>
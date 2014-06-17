<!--
A real PHP script should handle some **work flow logic** and it is able
to show different things based on different conditions.

This is the core concept around a "dynamic page".
-->
<!DOCTYPE html>
<html>
<head>
    <meta charset=utf-8 />
    <title>PHP003 - Single Script Form Example</title>
</head>
<body>
    <?php if ($_SERVER['REQUEST_METHOD'] == "POST"): ?>
        <p>Your name is: <b><?= $_POST['answer'] ?></b></p>
        <p><a href="003-form.php">&laquo; Back</a></p>
    <?php else: ?>
        <form action="003-form.php" method="post">
            <div>
                <label for="answer">What's your name?</label><br>
                <input type="text" name="answer">
                <input type="submit" value="send"></input>
            </div>
        </form>
    <?php endif; ?>
</body>
</html>
<form action="005-index.php" method="post">
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
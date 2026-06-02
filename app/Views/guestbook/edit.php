<?php
/**
 * @var array $entry 
 */
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Edit Guestbook Entry</title>
    <style>body { font-family: sans-serif; margin: 40px; }</style>
</head>
<body>

    <h2>Edit Entry #<?= esc($entry['id']) ?></h2>

    <form action="/guestbook/update/<?= esc($entry['id']) ?>" method="POST">
        
        <?= csrf_field() ?>

        <p>
            <label>Username:</label><br>
            <input type="text" name="username" value="<?= esc($entry['username']) ?>" required>
        </p>
        <p>
            <label>Comment:</label><br>
            <textarea name="comment" rows="4" cols="40" required><?= esc($entry['comment']) ?></br></textarea>
        </p>
        
        <button type="submit">Update Entry</button>
        <a href="/guestbook">Cancel</a>
    </form>

</body>
</html>
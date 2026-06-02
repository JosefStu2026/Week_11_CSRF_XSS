
<?php
/**
 * @var array $entry 
 */
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>CI4 Security Lab - Guestbook</title>
    <style>body { font-family: sans-serif; margin: 40px; } .entry { border-bottom: 1px solid #ccc; padding: 10px 0; }</style>
</head>
<body>

    <h2>Community Guestbook</h2>

    <form action="/guestbook/create" method="POST">
        <?= csrf_field() ?>
        <p>
            <label>Username:</label><br>
            <input type="text" name="username" required>
        </p>
        <p>
            <label>Comment:</label><br>
            <textarea name="comment" rows="4" cols="40" required></textarea>
        </p>
        <button type="submit">Submit Entry</button>
    </form>

    <hr>

    <h3>Recent Entries</h3>
    <?php if (!empty($entries)): ?>
        <?php foreach ($entries as $entry): ?>
            <div class="entry">
                <strong><?= esc($entry['username']) ?></strong> says:
                <p><?= esc($entry['comment']) ?></p>
                <a href="/guestbook/edit/<?= esc($entry['id']) ?>">Edit This Entry</a>
            </div>
        <?php endforeach; ?>
    <?php else: ?>
        <p>No entries yet.</p>
    <?php endif; ?>

</body>
</html>
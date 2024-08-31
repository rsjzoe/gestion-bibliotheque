<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="css/style.css">
    <title>Borrowings</title>
</head>
<body>
    <h1>Borrowings</h1>
    <a href="<?= site_url('borrowings/create') ?>">Add New Borrowing</a>
    <ul>
        <?php foreach ($borrowings as $borrowing): ?>
            <li>
                Book: <?= esc($borrowing['title']) ?>, Borrowed by: <?= esc($borrowing['client_name']) ?>, Borrowed at: <?= esc($borrowing['borrowed_at']) ?>
              
            </li>
        <?php endforeach; ?>
    </ul>
</body>
</html>

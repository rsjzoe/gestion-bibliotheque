<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="css/style.css">
    <title>Add New Borrowing</title>
</head>
<body>
    <h1>Add New Borrowing</h1>

    <form action="<?= site_url('borrowings/create') ?>" method="post">
        <?= csrf_field() ?>

        <label for="book_id">Book:</label>
        <select name="book_id" id="book_id" required>
            <?php foreach ($books as $book): ?>
                <option value="<?= $book['id'] ?>"><?= esc($book['title']) ?></option>
            <?php endforeach; ?>
        </select><br><br>

        <label for="client_name">Client Name:</label>
        <input type="text" name="client_name" id="client_name" required><br><br>

        <button type="submit">Add Borrowing</button>
    </form>

    <br>
    <a href="<?= site_url('borrowings') ?>">Back to Borrowing List</a>
</body>
</html>

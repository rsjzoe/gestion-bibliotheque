<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="css/style.css">
    <title>Add New Book</title>
</head>
<body>
    <h1>Add New Book</h1>

    <form action="<?= site_url('books/create') ?>" method="post">
        <?= csrf_field() ?>

        <label for="title">Title:</label>
        <input type="text" name="title" id="title" required><br><br>

        <label for="author_id">Author:</label>
        <select name="author_id" id="author_id" required>
            <?php foreach ($authors as $author): ?>
                <option value="<?= $author['id'] ?>"><?= $author['name'] ?></option>
            <?php endforeach; ?>
        </select><br><br>

        <label for="published_date">Published Date:</label>
        <input type="date" name="published_date" id="published_date" required><br><br>

        <label for="isborrow">is borrow:</label>
        <input type="text" name="isborrow" id="isborrow" required><br><br>

        <button type="submit">Add Book</button>
    </form>

    <br>
    <a href="<?= site_url('books') ?>">Back to Book List</a>
</body>
</html>

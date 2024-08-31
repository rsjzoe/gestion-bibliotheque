<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="css/style.css">
    <title>Edit Book</title>
</head>

<body>
    <h1>Edit Book</h1>

    <form action="<?= site_url('books/update/' . $book['id']) ?>" method="post">
        <?= csrf_field() ?>

        <label for="title">Title:</label>
        <input type="text" name="title" id="title" value="<?= esc($book['title']) ?>" required><br><br>

        <label for="author_id">Author:</label>
        <select name="author_id" id="author_id" required>
            <?php foreach ($authors as $author): ?>
                <option value="<?= $author['id'] ?>" <?= $author['id'] == $book['author_id'] ? 'selected' : '' ?>>
                    <?= esc($author['name']) ?>
                </option>
            <?php endforeach; ?>
        </select><br><br>

        <label for="published_date">Published Date:</label>
        <input type="date" name="published_date" id="published_date" value="<?= esc($book['published_date']) ?>" required><br><br>

        <label for="isborrow">is borrow:</label>
        <input type="text" name="isborrow" id="isborrow" value="<?= esc($book['isborrow']) ?>" required><br><br>

        <button type="submit">Update Book</button>
    </form>

    <br>
    <a href="<?= site_url('books') ?>">Back to Book List</a>
</body>

</html>
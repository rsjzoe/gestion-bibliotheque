<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="css/style.css">
    <title>Books</title>
</head>

<body>
    <h1>Books</h1>
    <a href="<?= site_url('books/create') ?>">Add New Book</a>
    <ul>
        <?php foreach ($books as $book): ?>
            <li>
                <span class="<?= $book['isborrow'] ? 'text-red' : '' ?>">

                    <?= $book['title'] ?>
                </span>
                <a href="<?= site_url('books/edit/' . $book['id']) ?>">Edit</a>
                <a href="<?= site_url('books/delete/' . $book['id']) ?>" onclick="return confirm('ho fafaina ve?');">Delete</a>
            </li>

        <?php endforeach; ?>
    </ul>
</body>

</html>
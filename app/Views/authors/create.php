<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="css/style.css">
    <title>Add New Author</title>
</head>

<body>
    <h1>Add New Author</h1>

    <form action="<?= site_url('authors/create') ?>" method="post">
        <?= csrf_field() ?>

        <label for="name">Name:</label>
        <input type="text" name="name" id="name" required><br><br>

        <button type="submit">Add Author</button>
    </form>

    <br>
    <a href="<?= site_url('authors') ?>">Back to Author List</a>
</body>

</html>
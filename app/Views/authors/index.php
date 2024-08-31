<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="css/style.css">
    <title>Authors</title>
</head>
<body>
    <h1>Authors</h1>
    <a href="<?= site_url('authors/create') ?>">Add New Author</a>
    <ul>
        <?php foreach ($authors as $author): ?>
            <li><a href="<?= site_url('authors/'.$author['id']) ?>"><?= $author['name'] ?></a></li>
        <?php endforeach; ?>
    </ul>
</body>
</html>

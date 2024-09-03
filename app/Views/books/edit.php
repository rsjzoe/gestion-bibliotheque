<!DOCTYPE html>
<html>

<head>
    <title>Edit Book</title>
    <style>
        *{
            box-sizing: border-box;
        }
        body {
            font-family: Arial, sans-serif;
            background-color: #f8f9fa;
            margin: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .container {
            background-color: #ffffff;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            padding: 20px 40px;
            max-width: 400px;
            width: 100%;
        }

        h1 {
            color: #343a40;
            font-size: 24px;
            margin-bottom: 20px;
            text-align: center;
        }

        form {
            display: flex;
            flex-direction: column;
        }

        label {
            font-size: 15px;
            margin-bottom: 5px;
            color: #495057;
        }

        input,
        select {
            padding: 10px;
            /* font-size: 16px; */
            border-radius: 4px;
            border: 1px solid #ced4da;
            margin-bottom: -22px;
            outline: none;
            transition: border-color 0.3s ease;
        }

        input:focus,
        select {
            border-color: #007bff;
        }

        button {
            padding: 10px 20px;
            font-size: 16px;
            color: #ffffff;
            background-color: #007bff;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        button:hover {
            background-color: #0056b3;
        }

        a {
            text-decoration: none;
            color: #007bff;
            display: block;
            text-align: center;
            margin-top: 20px;
            transition: color 0.3s ease;
        }

        a:hover {
            color: #0056b3;
        }
    </style>

</head>

<body>
    <div class="container">

        <h1>Modifier</h1>

        <form action="<?= site_url('books/update/' . $book['id']) ?>" method="post">
            <?= csrf_field() ?>

            <label for="title">Titre:</label>
            <input type="text" name="title" id="title" value="<?= esc($book['title']) ?>" required><br><br>

            <label for="author_id">Auteur:</label>
            <select name="author_id" id="author_id" required>
                <?php foreach ($authors as $author): ?>
                    <option value="<?= $author['id'] ?>" <?= $author['id'] == $book['author_id'] ? 'selected' : '' ?>>
                        <?= esc($author['name']) ?>
                    </option>
                <?php endforeach; ?>
            </select><br><br>

            <label for="published_date">Date:</label>
            <input type="date" name="published_date" id="published_date" value="<?= esc($book['published_date']) ?>" required><br><br>

            <label for="isborrow">Emprunt(true/false):</label>
            <input type="text" name="isborrow" id="isborrow" value="<?= esc($book['isborrow']) ?>" required><br><br>

            <button type="submit">Mise à jour</button>
        </form>

        <br>
        <a href="<?= site_url('books') ?>">Voir liste</a>
    </div>
</body>

</html>
<!DOCTYPE html>
<html>

<head>
    <title>Add New Borrowing</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f8f9fa;
            margin: 0;
            padding: 20px;
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
            font-size: 16px;
            margin-bottom: 5px;
            color: #495057;
        }

        input,
        select {
            padding: 10px;
            font-size: 16px;
            border-radius: 4px;
            border: 1px solid #ced4da;
            margin-bottom: 20px;
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

        <h1>Ajouter nouveau emprunt</h1>

        <form action="<?= site_url('borrowings/create') ?>" method="post">
            <?= csrf_field() ?>

            <label for="book_id">Livre:</label>
            <select name="book_id" id="book_id" required>
                <?php foreach ($books as $book): ?>
                    <option value="<?= $book['id'] ?>"><?= esc($book['title']) ?></option>
                <?php endforeach; ?>
            </select><br><br>

            <label for="client_name">Nom Client:</label>
            <input type="text" name="client_name" id="client_name" required><br><br>

            <button type="submit">Ajouter </button>
        </form>

        <br>
        <a href="<?= site_url('borrowings') ?>">Voir Liste</a>
    </div>
</body>

</html>
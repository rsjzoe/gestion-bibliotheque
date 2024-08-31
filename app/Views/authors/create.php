<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add New Author</title>
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

        input[type="text"] {
            padding: 10px;
            font-size: 16px;
            border-radius: 4px;
            border: 1px solid #ced4da;
            margin-bottom: 20px;
            outline: none;
            transition: border-color 0.3s ease;
        }

        input[type="text"]:focus {
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
        <h1>Ajouter auteur</h1>

        <form action="<?= site_url('authors/create') ?>" method="post">
            <?= csrf_field() ?>

            <label for="name">Nom:</label>
            <input type="text" name="name" id="name" required>

            <button type="submit">creer</button>
        </form>

        <a href="<?= site_url('authors') ?>">voir Liste</a>
    </div>

</body>

</html>
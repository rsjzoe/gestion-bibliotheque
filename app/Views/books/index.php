<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Books</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f8f9fa;
            margin: 0;
            padding: 20px;
        }

        .container {
            max-width: 600px;
            margin: 0 auto;
            padding: 20px;
            background-color: #ffffff;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        h1 {
            color: #343a40;
            text-align: center;
            margin-bottom: 20px;
            font-size: 28px;
        }

        .btn-add-book {
            display: block;
            width: fit-content;
            margin: 0 auto 20px;
            text-decoration: none;
            color: #ffffff;
            background-color: #007bff;
            padding: 10px 20px;
            border-radius: 4px;
            text-align: center;
            transition: background-color 0.3s ease;
        }

        .btn-add-book:hover {
            background-color: #0056b3;
        }

        ul {
            list-style-type: none;
            padding: 0;
        }

        li {
            background-color: #e9ecef;
            margin: 10px 0;
            border-radius: 4px;
            padding: 10px 15px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            transition: background-color 0.3s ease;
        }

        li:hover {
            background-color: #ced4da;
        }

        .text-red {
            color: #dc3545;
            font-weight: bold;
        }

        .actions {
            display: flex;
            gap: 10px;
        }
        .actions .edit{
            background-color: #4caf50;
        }
        .actions .delete{
            background-color: #ee4646;
        }
        .actions a {
            text-decoration: none;
            color: #fff;
            padding: 5px 10px;
            font-size: 15px;
            border-radius: 4px;
            transition: background-color 0.3s ease;
        }

        .actions .edit:hover {
            background-color: #b2ec99;
            color: #ffffff;
        }
        .actions .delete:hover {
            background-color: #ee7676;
            color: #ffffff;
        }
    </style>
</head>
<body>

    <div class="container">
        <h1>Livres</h1>
        <a class="btn-add-book" href="<?= site_url('books/create') ?>">Ajouter</a>
        <ul>
            <?php foreach ($books as $book): ?>
                <li>

                        <span class="<?= $book['isborrow'] ? 'text-red' : '' ?>">
                            <?= $book['title'] ?> 
                        </span>

                    
                    <div class="actions">
                        <a href="<?= site_url('books/edit/' . $book['id']) ?>" class="edit">Modifier</a>
                        <a href="<?= site_url('books/delete/' . $book['id']) ?>"  class="delete" onclick="return confirm('ho fafaina ve?');">Supprimer</a>
                    </div>
                </li>
            <?php endforeach; ?>
        </ul>
    </div>

</body>
</html>

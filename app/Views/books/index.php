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
            max-width: 800px;
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

        table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        th,
        td {
            padding: 15px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }

        th {
            background-color: #ffffff;
        }

        tr:hover {
            background-color: #f1f1f1;
        }

        .text-red {
            color: #dc3545;
            font-weight: bold;
        }

        .actions {
            display: flex;
            gap: 10px;
        }

        .actions .edit {
            background-color: #4caf50;
        }

        .actions .delete {
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

        .search-bar {
            margin-bottom: 20px;
            text-align: center;
        }

        .search-bar input[type="text"] {
            padding: 10px;
            font-size: 16px;
            width: 80%;
            border: 1px solid #ced4da;
            border-radius: 4px;
            outline: none;
        }

        .badge-dispo {
            background-color: #4caf50;
            border-radius: 15px;
            color: white;
            font-weight: normal;
            font-size: 13px;
            padding: 3px;
        }

        .badge-nondispo {
            background-color: #0057B4;
            border-radius: 15px;
            color: white;
            font-weight: normal;
            font-size: 13px;
            padding: 3px;
        }
    </style>
</head>

<body>

    <div class="container">
        <h1>Livres</h1>
        <div class="search-bar">
            <form action="<?= site_url('books') ?>" method="get">
                <input type="text" name="search" placeholder="recherche un livre puis entrer..." value="<?= esc($search) ?>">
            </form>
        </div>
        <a class="btn-add-book" href="<?= site_url('books/create') ?>">Ajouter</a>
        <table>
            <thead>
                <tr>
                    <th>Titre</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($books as $book): ?>
                    <tr>
                        <td>
                            <?= esc($book['title']) ?>
                            <?php if ($book['isborrow']) : ?>
                                <span class="badge badge-nondispo">non dispo</span>
                            <?php else : ?>
                                <span class="badge badge-dispo">dispo</span>
                            <?php endif; ?>
                        </td>
                        <td>
                            <div class="actions">
                                <a href="<?= site_url('books/edit/' . $book['id']) ?>" class="edit">Modifier</a>
                                <a href="<?= site_url('books/delete/' . $book['id']) ?>" class="delete" onclick="return confirm('ho fafaina ve?');">Supprimer</a>
                            </div>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>

</body>

</html>
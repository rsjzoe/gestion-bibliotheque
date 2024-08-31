<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Borrowings</title>
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

        .btn-add-borrowing {
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

        .btn-add-borrowing:hover {
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
            transition: background-color 0.3s ease;
        }

        li:hover {
            background-color: #ced4da;
        }

        .borrowing-info {
            font-size: 16px;
            color: #495057;
        }

        .borrowing-info span {
            font-weight: bold;
            color: #343a40;
        }
    </style>
</head>

<body>

    <div class="container">
        <h1>Emprunts</h1>
        <a class="btn-add-borrowing" href="<?= site_url('borrowings/create') ?>">Ajouter emprunt</a>
        <ul>
            <?php foreach ($borrowings as $borrowing): ?>
                <li>
                    <div class="borrowing-info">
                        <span>Livre:</span> <?= esc($borrowing['title']) ?>,
                        <span>Emprunté par:</span> <?= esc($borrowing['client_name']) ?>,
                        <span>Emprunté le:</span> <?= esc($borrowing['borrowed_at']) ?>
                    </div>
                </li>
            <?php endforeach; ?>
        </ul>
    </div>

</body>

</html>
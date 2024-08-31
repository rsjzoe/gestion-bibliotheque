<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Document</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
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
            text-align: center;
        }

        h1 {
            color: #333333;
            font-size: 24px;
            margin-bottom: 20px;
        }

        ul {
            list-style-type: none;
            padding: 0;
        }

        li {
            margin: 15px 0;
        }

        a {
            text-decoration: none;
            color: #ffffff;
            background-color: #007bff;
            padding: 10px 20px;
            border-radius: 4px;
            display: inline-block;
            transition: background-color 0.3s ease;
        }

        a:hover {
            background-color: #0056b3;
        }
    </style>
</head>

<body>
    <div class="container">
        <h1>gestion bibliotheque</h1>
        <ul>
            <li>
                <a href="books">Livre</a>
            </li>
            <li>
                <a href="authors">Auteur</a>
            </li>
            <li>
                <a href="borrowings">Emprunt</a>
            </li>
        </ul>
    </div>
</body>

</html>
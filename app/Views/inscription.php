<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inscription</title>
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <div class="form-center">

        <div class="form-container">
            <form class="form" method="post" action="inscription">
                <h2>Inscription</h2>
                <div class="input-group">
                    <label for="username">Nom d'utilisateur</label>
                    <input type="text" id="username" name="username" required>
                </div>
                <div class="input-group">
                    <label for="password">Mot de passe</label>
                    <input type="password" id="password" name="password" required>
                </div>
                <div class="input-group">
                    <label for="confirm-password">Confirmer le mot de passe</label>
                    <input type="password" id="confirm-password" name="confirm-password" required>
                </div>
                <button type="submit">S'inscrire</button>
            </form>
        </div>
    </div>
</body>

</html>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <div class="form-center">

        <div class="form-container">
            <?php if (session()->getFlashdata('errorLogin')) : ?>
                <div class="error-message">
                    <?= session()->getFlashdata('errorLogin') ?>
                </div>
            <?php endif; ?>

            <form class="form" method="post" action="login">
                <h2>Connexion</h2>
                <div class="input-group">
                    <label for="username">Nom d'utilisateur</label>
                    <input type="text" id="username" name="username" required>
                </div>
                <div class="input-group">
                    <label for="password">Mot de passe</label>
                    <input type="password" id="password" name="password" required>
                </div>
                <a href="inscription">s'inscrire</a>
                <button type="submit">Se connecter</button>
            </form>
        </div>
    </div>
</body>

</html>
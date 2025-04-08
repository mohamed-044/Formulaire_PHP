<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <section>
    <h1>Connexion</h1>
    <form action="config.php" method="POST">
        <label>Identifiant</label>
        <input type="text" name="id">
        <label>Mot de passe</label>
        <input type="password" name="mdp">
        <input type="submit" value="Valider">  
    </form>
    </section>
</body>
</html>
<?php
?>

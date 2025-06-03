<?php
session_start();
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bienvenue</title>
    <link rel="stylesheet" href="styles.css">
    <link rel="icon" type="image/x-icon" href="favicon.png">
</head>
<body>
    <?php
    echo "<p class ='message'>  Bonjour " . $_SESSION['email'] . "</p>";
    ?>
</body>
</html>
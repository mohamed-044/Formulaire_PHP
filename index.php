<?php
    if(isset($_POST['bouton-valider'])){
    if(isset($_POST['email']) && isset($_POST['mdp'])) {
    $email = $_POST['email'];
    $mdp = $_POST['mdp'];
    $erreur = "" ;
    $nom_serveur ="localhost";
    $utilisateur = "root";
    $mot_de_passe ="";
    $nom_base_données ="form";
    $con = mysqli_connect($nom_serveur, $utilisateur, $mot_de_passe, $nom_base_données);
    $req = mysqli_query($con, "SELECT * FROM utilisateurs WHERE email='$email' AND mdp = '$mdp'");
    $num_ligne = mysqli_num_rows($req);
    if($num_ligne > 0){
        header("Location: bienvenue.php");
        exit();
    } else {
        $erreur = "Adresse Mail ou Mot de passe incorrect !";
    }
    }
    }
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire</title>
    <link rel="stylesheet" href="styles.css">
    <link rel="icon" type="image/x-icon" href="favicon.png">
</head>
<body>
    <section>
    <h1>Connexion</h1>
    <?php
    if(isset($erreur)){
            echo "<p class= 'Erreur' >".$erreur."</p>" ;
    }
    ?>
    <form action="" method="POST">
        <label>Email</label>
        <input type="text" name="email">
        <label>Mot de passe</label>
        <input type="password" name="mdp">
        <input type="submit" value="Valider" name="bouton-valider">  
    </form>
    </section>
</body>
</html>
<?php
?>

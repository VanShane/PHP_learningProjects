<?php
    // on démarre la session AVANT d'écrire du HTML
    session_start();

    // On crée quelques variables de session dans $_SESSION
    $_SESSION['prenom'] = 'Jean';
    $_SESSION['nom'] = 'Dupont';
    $_SESSION['age'] = 24;
    $_SESSION['pseudo'] = '';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Titre de ma page</title>
</head>
<body>
    <form action="/informations.php" method="POST">
        <label for="pseudo">Votre Pseudo Ici: </label>
        <input type="text" id="pseudo" name="pseudo">
        <input type="submit">
    </form>
    <p>Salut <?php echo $_SESSION['prenom']; ?><br>
    Tu es à l'accueil de mon site, tu veux aller sur une autre page?</p>
    <?php include 'ins/menu.php'; ?>
</body>
</html>
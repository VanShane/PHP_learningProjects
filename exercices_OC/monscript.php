<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p>Voici mon script</p>

    <?php 
        $monfichier = fopen('files/compteur.txt', 'r+');

        $pages_vues = fgets($monfichier); // On lit la première ligne (nombre de pages vues)
        $pages_vues += 1; // on augmente de 1 ce nombre de pages vues
        fseek($monfichier, 0); // on remet le curseur au début du fichier
        fputs($monfichier, $pages_vues); // on écrit le nouveau nombre de pages vues

        fclose($monfichier);

        echo '<p>Cette page a été vue ' . $pages_vues . ' fois!</p>';
    ?>

    <?php include 'ins/menu.php'; ?>
</body>
</html>
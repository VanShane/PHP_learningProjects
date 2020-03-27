<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>form</title>
</head>
<body>
    <div>
        <p> Bonjour <?php echo strip_tags($_POST['pseudo']); ?></p>
    </div>
    <div>
        <p>voici ton post:<br> <?php print strip_tags($_POST['message']); ?></p>
    </div>
    <div>
        <p>Tu as choisi le : <?php print $_POST['choix'];?></p>
    </div>
    <div>
        <p>Votre plat: 
        <?php if(isset($_POST['plat']) && !empty($_POST['plat'])) : ?>
        <?php echo implode(',', $_POST['plat']);?>
        <?php endif; ?></p>
    </div>
    <?php if(isset($_POST['oui_non'])) : ?>
    <p>Ta réponse est: <?php echo $_POST['oui_non']; ?><br></p>
    <?php endif;?>
    <div>
        <p><a href="/">Cliquez ici</a> pour revenir à la page formulaire.</p>
    </div>
</body>
</html>
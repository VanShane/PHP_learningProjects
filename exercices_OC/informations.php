<?php session_start(); 
    if(!empty($_POST['pseudo'])) : 
        $_SESSION['pseudo'] = htmlspecialchars($_POST['pseudo']);
    endif;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p>Voici les infos</p>
    <p>Je me souviens de toi! Tu t'appelles <?php echo $_SESSION['prenom'] . ' ' . $_SESSION['nom']; ?><br>
    <?php 
    if (!empty($_SESSION['pseudo'])) :
        ?>Ton Pseudo est <?php echo $_SESSION['pseudo'] . '<br>'; ?>
    <?php 
    endif;
    ?>
    
    Et tu as <?php echo $_SESSION['age']; ?> ans, n'est-ce pas?</p>
    <?php include 'ins/menu.php'; ?>
</body>
</html>
<?php 
    setcookie('pays', 'France', time() + 1*24*3600, null, null, null, true);
    setcookie('region', 'Occitanie', time() + 1*24*3600, null, null, null, true)
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p>Voici ma page</p>
    <p>Mon cookie me dit que tu habites en <?php echo $_COOKIE['region']. ', ' .$_COOKIE['pays']; ?></p>
    <?php include 'ins/menu.php'; ?>
</body>
</html>
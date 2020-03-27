<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP TP OpenClassrooms</title>
</head>
<body>
    <?php 
        $password = 'kangourou';

        if(isset($_POST['pass']) && strip_tags($_POST['pass']) && $_POST['pass'] == $password) :
            if(isset($_POST['login']) && strip_tags($_POST['login'])) :
                ?> <p>Welcome <?php print $_POST['login']; ?> </p> <?php
            endif;
            else : echo 'wrong password';
        endif;
        ?>
        <br>
        <a href="/form.php">Return</a>
</body>
</html>
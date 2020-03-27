
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP TP OpenClassrooms</title>
</head>
<body>
    <div>
        <form method="POST" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>">
            <div>
                <label for="login">User Name</label>
                <input type="text" id="login" name="login" pattern="[a-zA-Z0-9]{4,12}">
            </div>
            <div>
                <label for="pass">Your Password</label>
                <input type="password" id="pass" name="pass" pattern="[a-zA-Z0-9]{6,12}">
            </div>
            <input type="submit">
        </form>
        <?php 
            if(isset($_POST['login']) && strip_tags($_POST['login']) && isset($_POST['pass']) && strip_tags($_POST['pass'])) {
                    if($_POST['pass'] != 'kangourou') {
                        echo 'Wrong password, Try again';
                    }   else if($_POST['pass'] == 'kangourou') {
                        echo 'Welcome '. $_POST['login'];
                    }            
            }
        ?>
    </div>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="/style/style.css" type="text/css" rel="stylesheet">
    <title>Document</title>
</head>
<body>
    <?php
    //define variables and set to empty values
    $nameErr = $emailErr = $genderErr = $websiteErr = $commentErr = '';
    $name = $email = $gender = $comment = $website = '';
    
    //on creera une fonction test_input()
    if($_SERVER['REQUEST_METHOD'] == 'POST') {
        if(empty($_POST['name'])) {
            $nameErr = 'Name is required';
        }   else {
            $name = test_input($_POST['name']);
            //check if name only contains letters and whitespace
            if (!preg_match('/^[a-zA-Z ]*$/',$name)) {
                $nameErr = "Only letters and white space allowed";
            }
        }
        if(empty($_POST['email'])) {
            $emailErr = 'Email is required';
        }   else {
            $email = test_input($_POST['email']);
            //check if e-mail adress is well-formed
            if(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                $emailErr = "Invalid email format";
            }
        }
        if(empty($_POST['website'])) {
            $websiteErr = '';
        }   else {
            $website = test_input($_POST['website']);
            //check if URL adress syntax is valid (this regular expression also allows dashes in the URL)
            if(!preg_match('/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;*[-a-z0-9+&@#\/%=~_|]/i', $website)) {
                $websiteErr = "Invalid URL";
            }
        }
        if(empty($_POST['comment'])) {
            $commentErr = '';
        }   else {
            $comment = test_input($_POST['comment']);
        }
        if(empty($_POST['gender'])) {
            $genderErr = 'Gender is required';
        }   else {
            $gender = (isset($_POST['gender']) ? $_POST['gender'] : null);
        }
        
    }

    function test_input($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
    ?>
    <header>
        <h1>PHP Form Validation Example</h1>
    </header>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>">
        <span>* required field</span>
        <div>
            <label for="name"><span>*</span>Name:</strong> </label>
            <input type="text" id="name" name="name" value="<?php echo $name; ?>" required>
            <span class="error"><?php echo $nameErr;?></span>
        </div>
        <div>
            <label for="email"><span>*</span>E-mail: </label>
            <input type="text" id="email" name="email" value="<?php echo $email; ?>" required>
            <span class="error"><?php echo $emailErr;?></span>
        </div>
        <div>
            <label for="website">Website :</label>
            <input type="text" id="website" name="website" value="<?php echo $website; ?>">
            <span class="error"><?php echo $websiteErr;?></span>
        </div>
        <div class="comment-box">
            <label for="comment">Comment: </label>
            <textarea id="comment" name="comment" rows="5" cols="50"><?php echo $comment; ?></textarea>
            <span class="error"><?php echo $commentErr;?></span>
        </div>
        <div class="gender-select">
            <label for="gender"><span>*</span>Gender:</label>
            <input type="radio" name="gender" <?php if(isset($gender) && $gender == 'female') echo 'checked'; ?> value="female">Female
            <input type="radio" name="gender" <?php if(isset($gender) && $gender == 'male') echo 'checked'; ?> value="male">Male
            <input type="radio" name="gender" <?php if(isset($gender) && $gender == 'other') echo 'checked'; ?> value="other">Other
        </div>
        <div class="gender-error">
                <span class="error"><?php echo $genderErr;?></span>
        </div>
        <div class="button">
            <input type="submit" name="submit" value="SEND">
        </div>
    </form>
    <main>
        <h2>Your Input:</h2>
        <div>
            <?php echo $name; ?>
            <br>
            <?php echo $email; ?>
            <br>
            <?php echo $website; ?>
            <br>
            <?php echo $comment; ?>
            <br>
            <?php echo $gender; ?>
        </div>
    </main>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>form</title>
</head>
<body>
    <form method="post" action="cible.php" enctype="multipart/form-data">
        <div>
            <label for="pseudo">Votre pseudo</label>
            <input type="text" name="pseudo" id="pseudo" required>
        </div>
        <div>
            <label for="message">Votre message</label>
            <br>
            <textarea name="message" id="message" rows="8" cols="45" placeholder="votre message"></textarea>
        </div>
        <div>
            <label for="choix">Faites votre choix</label>
            <select name="choix" id="choix">
                <option value="choix1">Choix 1</option>
                <option value="choix2">Choix 2</option>
                <option value="choix3">Choix 3</option>
                <option value="choix4">Choix 4</option>
            </select>
        </div>
        <div>
            <p>menu</p>
            <input type="checkbox" id="plat1" name="plat[]" value="frites">
            <label for="plat1">Frites</label>
        </div>
        <div>
            <input type="checkbox" id="plat2" name="plat[]" value="steak">
            <label for="plat2">Steak haché</label><br>
        </div>
        <div>
            <input type="checkbox" id="plat3" name="plat[]" value="epinards">
            <label for="plat3">Epinards</label><br>
        </div>
        <div>
            <input type="checkbox" id="plat4" name="plat[]" value="huitres">
            <label for="plat4">Huitres</label><br>
        </div>
        <div>
            <p>Ta réponse: </p>
            <input type="radio" name="oui_non" value="oui" id="oui">
            <label for="oui">Oui</label>
            <input type="radio" name="oui_non" value="non" id="non">
            <label for="non">Non</label>
        </div>
        <div>
            <br>
            <input type="submit" value="valider">
        </div>
    </form>    
</body>
</html>
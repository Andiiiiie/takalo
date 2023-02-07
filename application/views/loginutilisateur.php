<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="connect" method="POST">
        <label for="log">Nom utilisateur</label>
        <input type="text" name="log" ><br/>
        <label for="mdp">Mot de passe</label>
        <input type="password" name="mdp" ><br/>
        <input type="submit" value="Valider">
        <?php if(isset($erreur)) { ?>
            <p>tsy mety an</p>
        <?php } ?>
    </form>
</body>
</html>
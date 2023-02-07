<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="inscript" method="POST">
    <p>nom</p>
    <input type="text" name="nom" id="">
    <p>mail</p>
    <input type="mail" name="mail" id="">
    <p>mot de passe</p>
    <input type="password" name="mdp1" id="">
    <p>confirme mot de passe</p>
    <input type="password" name="mdp2" id="">
    <?php if(isset($erreur)){ ?>
        <p>Mot De Passe Tsy mitovy</p>
    <?php } ?>
    <input type="submit" value="Valider">
    <a href="<?php echo base_url('loginutilisateur/connecter'); ?>">j'ai deja un compte</a>
</form>

</body>
</html>
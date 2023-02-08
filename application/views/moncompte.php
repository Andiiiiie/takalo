<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>BIENVENU </h1>
    <a href="<?php echo base_url('formulaire/form')?>"><button>ajouter objet</button></a>
    <?php if(isset($demandes)) { ?>
        <ul>
            <?php for($i=0;$i<sizeof($demandes);$i++ ) { ?>
                <li><?php echo $demandes[$i]['name']; ?>: </li>
                <a href="<?php echo  base_url('controluser/accepter'); ?>/<?php echo $demandes[$i]['proposition'];?>"><button>accepter</button></a>
                <a href="<?php echo  base_url('controluser/refuser'); ?>/<?php echo $demandes[$i]['proposition'];?>"><button>refuser</button></a>
            <?php } ?>
        </ul>
    <?php } ?>

    <?php if(isset($objets)) { ?>
        <h1>SES OBJETS</h1>
        <ul>
        <?php for($i=0;$i<sizeof($objets);$i++) { ?>
            <li>designation: <?php echo  $objets[$i]['designation']; ?></li>
            <a href="<?php echo  base_url('controluser/modifier'); ?>/<?php echo $objets[$i]['id'] ?>"><button>modifier</button></a>
            <a href="<?php echo  base_url('controluser/supprimer'); ?>/<?php echo $objets[$i]['id'] ?>"><button>supprimer</button></a>
        <?php } ?>

        </ul>
    <?php } ?>
</body>
</html>
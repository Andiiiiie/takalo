<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <a href="<?php echo base_url('login/deconnecter');?>">deconnecter</a>
    <form action="saveCategorie" method="POST"> 
        <p>AJOUTER CATEGORIE <input type="text" name="designation"></p>
        <input type="submit" value="ajoute">
    </form>
    <?php if(isset($listeCategories)) { ?>
        <ul>
        <?php for($i=0;$i<sizeof($listeCategories);$i++) { ?>
            <li><?php echo $listeCategories[$i]['designation'];?>  <a href="<?php echo base_url('controladmin/supprimer/');?>/<?php echo $listeCategories[$i]['id'];?>">supprimer</a>   <a href="<?php echo base_url('controladmin/formModifier/');?>/<?php echo $listeCategories[$i]['id'];?>">modifier</a></li>
            <?php if(isset($modifier) && $modifier==$listeCategories[$i]['id']) {  echo $modifier; ?>
                <form action="<?php echo base_url('controladmin/modifier');?>" method="POST">
                    <input type="hidden" name="id" value='<?php echo $listeCategories[$i]['id']; ?>'>
                    <p>Nouvelle Designation:  <input type="text" name="new" value="<?php echo $listeCategories[$i]['designation']; ?>"></p>
                    <input type="submit" value="valider"> 
                </form>
            <?php } ?>
        <?php } ?>
        </ul>
    <?php } ?>
</body>
</html>
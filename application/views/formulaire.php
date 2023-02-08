<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php if(isset($objet)) { echo "aona e" ; ?>
        <form action="<?php echo base_url('controluser/modifications');?>" method="POST">
            <input type="hidden" name="id" value="<?php echo $objet['id']; ?>">
        <p>nom du produit:</p> 
    <input type="text" name="designation" id=""  value="<?php echo $objet['designation']; ?>" >
    <p>categorie:</p>
    <select name="categorie" id="">
        <?php if(isset($categories)) { ?>
            <?php for($i=0;$i<sizeof($categories);$i++ ) { ?>
                <?php if($objet['idCategorie']==$categories[$i]['id']) { ?>
                    <option value="<?php echo $categories[$i]['id']; ?>"><?php echo $categories[$i]['designation']; ?></option>
                <?php  break; }?>
            <?php } ?>
            <?php for($i=0;$i<sizeof($categories);$i++ ) { ?>
                <?php if($objet['idCategorie']!=$categories[$i]['id']) { ?>
                    <option value="<?php echo $categories[$i]['id']; ?>"><?php echo $categories[$i]['designation']; ?></option>
                <?php   }?>
            <?php } ?>
        <?php } ?>
    </select>
    <p>prix estime:</p>
    <input type="text" name="prix" id="" value="<?php echo $objet['prixEstimatif']; ?>">
    <p>Description:</p>
    <input type="text" name="description" id="" value="<?php echo $objet['description']; ?>">

    <input type="submit" value="Valider">
</form>
    <?php }
    else  { ?>
    <form action="ajouterproduit" method="POST">
    <p>nom du produit:</p> 
    <input type="text" name="designation" id=""  >
    <p>categorie:</p>
    <select name="categorie" id="">
        <?php if(isset($categories)) { ?>
            <?php for($i=0;$i<sizeof($categories);$i++ ) { ?>
                <option value="<?php echo $categories[$i]['id']; ?>"><?php echo $categories[$i]['designation']; ?></option>
            <?php } ?>
        <?php } ?>
    </select>
    <p>prix estime:</p>
    <input type="text" name="prix" id="">
    <p>Description:</p>
    <input type="text" name="description" id="">

    <input type="submit" value="Valider">
</form>
    <?php } ?>
     
</body>
</html>
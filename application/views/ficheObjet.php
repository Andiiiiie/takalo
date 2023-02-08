<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php if(isset($info)) { ?>
        <ul>
            <li><?php echo $info['designation']?></li>
            <li>Proprietaire actuel: <?php echo $info['name']?></li>
        </ul>
        <?php echo "hehe  ".$info['id'];  ?>
        <form action="<?php echo base_url('controluser/proposition'); ?>" method="POST">
            <input type="hidden" name="objet1" value="<?php echo $info['id'];  ?>">
            <input type="hidden" name="p2" value="<?php echo $info['proprietaire']; ?>">
            <p>Vos objets: <select name="objet2" id="">
                <?php for($i=0;$i<sizeof($listeObjets);$i++ ) { ?>
                    <option value="<?php echo $listeObjets[$i]['id']; ?>"><?php echo $listeObjets[$i]['designation'];?></option>
                <?php } ?>
            </select></p>

            <input type="submit" value="proposer">
        </form>
    <?php } ?>
    <?php if (isset($listeProprio)) { ?>
        <table>
            <tr>
                <th>Date</th>
                <th>Proprietaire</th>
            </tr>
            <tr>
                <td>Debut</td>
                <td></td>
            </tr>
            <?php for($i=0;$i<sizeof($listeProprio);$i++) { ?>
                <tr>
                    <td><?php echo $listeProprio[$i]['dateReponse']; ?></td>
                    <td><?php echo $listeProprio[$i]['nom']; ?></td>
                </tr>
            <?php } ?>
        </table>
    <?php } ?>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">



    <link rel="apple-touch-icon" href="assets/img/apple-icon.png">

    <link rel="stylesheet" href="<?php echo base_url('../assets/css/bootstrap.min.css'); ?>">
    <link rel="stylesheet" href="<?php echo base_url('../assets/css/templatemo.css'); ?>">
    <link rel="stylesheet" href="<?php echo base_url('../assets/css/custom.css'); ?>">

    <!-- Load fonts style after rendering the layout styles -->
    <link rel="stylesheet" href="<?php echo base_url('../assets/css/fontawesome.min.css'); ?>">
</head>
<body>
    
    
<nav class="navbar navbar-expand-lg navbar-light shadow">
        <div class="container d-flex justify-content-between align-items-center">

            <a class="navbar-brand text-success logo h1 align-self-center" href="index.html">
                Takalo <br>
                Takalo
            </a>

            <button class="navbar-toggler border-0" type="button" data-bs-toggle="collapse" data-bs-target="#templatemo_main_nav" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="align-self-center collapse navbar-collapse flex-fill  d-lg-flex justify-content-lg-between" id="templatemo_main_nav">
                <div class="flex-fill">
                    <ul class="nav navbar-nav d-flex justify-content-between mx-lg-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo base_url('loginutilisateur/deconnecter')?>">deconnexion</a>
                        </li>
                    </ul>
                </div>
                <div class="navbar align-self-center d-flex">
                    <div class="d-lg-none flex-sm-fill mt-3 mb-4 col-7 col-sm-auto pr-3">
                        <div class="input-group">
                            <input type="text" class="form-control" id="inputMobileSearch" placeholder="Search ...">
                            <div class="input-group-text">
                                <i class="fa fa-fw fa-search"></i>
                            </div>
                        </div>
                    </div>
                    <a class="nav-icon d-none d-lg-inline" href="#" data-bs-toggle="modal" data-bs-target="#templatemo_search">
                        <i class="fa fa-fw fa-search text-dark mr-2"></i>
                    </a>
                    <a class="nav-icon position-relative text-decoration-none" href="<?php echo base_url('controluser/goToMonCompte')?>">
                        <i class="fa fa-fw fa-user text-dark mr-3"></i>
                        <span class="position-absolute top-0 left-100 translate-middle badge rounded-pill bg-light text-dark">Mon Compte</span>
                    </a>
                </div>
            </div>

        </div>
    </nav>

    <div class="modal fade bg-white" id="templatemo_search" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="w-100 pt-1 mb-5 text-right">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="<?php echo base_url('controluser/recherche'); ?>" method="get" class="modal-content modal-body border-0 p-0">
                <div class="input-group mb-2">
                    <input type="text" class="form-control" id="inputModalSearch" name="motCle" placeholder="Search ...">
                    CATEGORIE: <select name="categorie" id="">
                        <option value="0"> tous</option>
                        <?php if(isset($listeObjets)) { ?>
                            aonaa
                            <?php } ?>
                        <?php if(isset($categories)) { ?>
                            <?php for($i=0;$i<sizeof($categories);$i++) { ?>
                                <option value="<?php echo $categories[$i]['id']; ?>"><?php echo $categories[$i]['designation']; ?></option>
                            <?php } ?>
                        <?php }?>
                    </select>
                    <button type="submit" class="input-group-text bg-success text-light">
                        <i class="fa fa-fw fa-search text-white"></i>
                    </button>
                </div>
            </form>
        </div>
    </div>

    <!-- Fin nav bar -->

                                
    <section class="bg-light">
        <div class="container py-5">
            <?php if(isset($listeObjets)) { ?>
                <div class="row text-center py-3">
                <div class="col-lg-6 m-auto">
                    <h1 class="h1">Liste Article</h1>
                    <p>
                        Voici la liste de tous les articles que vous voulez échanger
                    </p>
                </div>
            </div>
            <div class="row">
        <?php for($i=0;$i<sizeof($listeObjets);$i++) { ?>
            <div class="col-12 col-md-4 mb-4">
                <div class="card h-100">
                    <a href="shop-single.html">
                        <img src="<?php echo base_url('../assets/img/lunettes.jpg'); ?>" class="card-img-top" alt="...">
                    </a>
                        <div class="card-body">
                            <ul class="list-unstyled d-flex justify-content-between">
                                <li>
                                    <i class="text-warning fa fa-star"></i>
                                    <i class="text-warning fa fa-star"></i>
                                    <i class="text-warning fa fa-star"></i>
                                    <i class="text-muted fa fa-star"></i>
                                    <i class="text-muted fa fa-star"></i>
                                </li>
                                <li class="text-muted text-right">$<?php echo $listeObjets[$i]['prixEstimatif']; ?></li>
                            </ul>
                            <a href="shop-single.html" class="h2 text-decoration-none text-dark"><a href="<?php echo base_url('controluser/goToFicheObjet')?>/<?php echo $listeObjets[$i]['idObjet'] ?>"><?php echo $listeObjets[$i]['designation']?></a></a>
                            <p class="card-text">
                                <?php echo $listeObjets[$i]['description']; ?>                            </p>
                            <p class="text-muted">appartient a <?php echo $listeObjets[$i]['name']; ?></p>
                        </div>
                </div>
            </div>
            <?php } ?>
        </div>
<?php } ?>


    <?php if(isset($resultats)) { ?>
        <div class="row text-center py-3">
                <div class="col-lg-6 m-auto">
                    <h1 class="h1">Liste Article</h1>
                    <p>
                        Voici la liste de tous les articles correspondants a votre recherche;
                    </p>
                </div>
            </div>
            <div class="row">
        <?php for($i=0;$i<sizeof($resultats);$i++) { ?>
            <div class="col-12 col-md-4 mb-4">
                <div class="card h-100">
                    <a href="shop-single.html">
                        <img src="<?php echo base_url('../assets/img/lunettes.jpg'); ?>" class="card-img-top" alt="...">
                    </a>
                        <div class="card-body">
                            <ul class="list-unstyled d-flex justify-content-between">
                                <li>
                                    <i class="text-warning fa fa-star"></i>
                                    <i class="text-warning fa fa-star"></i>
                                    <i class="text-warning fa fa-star"></i>
                                    <i class="text-muted fa fa-star"></i>
                                    <i class="text-muted fa fa-star"></i>
                                </li>
                                <li class="text-muted text-right">$<?php echo $resultats[$i]['prixEstimatif']; ?></li>
                            </ul>
                            <a href="shop-single.html" class="h2 text-decoration-none text-dark"><a href="<?php echo base_url('controluser/goToFicheObjet')?>/<?php echo $resultats[$i]['id'] ?>"><?php echo $resultats[$i]['designation']?></a></a>
                            <p class="card-text">
                                <?php echo $resultats[$i]['description']; ?>                            </p>
                            <p class="text-muted">Proprietaire actuel: <?php echo $resultats[$i]['name']; ?></p>
                        </div>
                </div>
            </div>
        <?php } ?>
    <?php } ?>
                
                
    </section>

    <script src="<?php echo base_url('../assets/js/jquery-1.11.0.min.js')?>"></script>
    <script src="<?php echo base_url('../assets/js/jquery-migrate-1.2.1.min.js')?>"></script>
    <script src="<?php echo base_url('../assets/js/bootstrap.bundle.min.js')?>"></script>
    <script src="<?php echo base_url('../assets/js/templatemo.js')?>"></script>
    <script src="<?php echo base_url('../assets/js/custom.js')?>"></script>



</body>
</html>
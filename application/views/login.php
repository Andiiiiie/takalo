<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- CSS FILES -->
    <link href="<?php echo base_url('../assets/css/bootstrap.min.css');?>" rel="stylesheet">

    <link href="<?php echo base_url('../assets/css/bootstrap-icons.css'); ?>" rel="stylesheet">

    <link href="<?php echo base_url('../assets/css/templatemo-leadership-event.css'); ?>" rel="stylesheet">

    <title>Document</title>
</head>
<body>
    <!-- <form action="connection" method="POST">
        <label for="log">Nom utilisateur</label>
        <input type="text" name="log" ><br/>
        <label for="mdp">Mot de passe</label>
        <input type="password" name="mdp" ><br/>
        
        <input type="submit" value="Valider">
    </form> -->
    <section class="contact section-padding" id="section_7">
            <div class="container">
                <div class="row">

                    <div class="col-lg-8 col-12 mx-auto">
                        <form class="custom-form contact-form bg-white shadow-lg" action="connection" method="POST" role="form">
                            <h2>Login Admin</h2>

                            <div class="row">
                                <div class="col-lg-4 col-md-4 col-12">
                                    <input type="email" name="log" id="email" pattern="[^ @]*@[^ @]*" class="form-control" placeholder="Email" required="" value="mail@gmail.com">
                                </div>

                                <div class="col-lg-4 col-md-4 col-12">
                                    <input type="password" name="mdp" id="subject" class="form-control" placeholder="Password" value="motDePasse">
                                </div>
                                <?php if(isset($error)) { ?>
                <h1>Compte invalide</h1>
        <?php } ?>

                                <div class="col-12">
                                    <button type="submit" class="form-control">Valider</button>
                                </div>

                            </div>
                        </form>
                    </div>

                </div>
            </div>
        </section>

    <footer class="site-footer">
        <div class="container">
            <div class="row align-items-center">

                <div class="col-lg-12 col-12 border-bottom pb-5 mb-5">
                    <div class="d-flex">
                        <a href="index.html" class="navbar-brand">
                            <i class="bi-bullseye brand-logo"></i>
                            <span class="brand-text">Takalo <br> Takalo</span>
                        </a>

                        <ul class="social-icon ms-auto">
                            <p>
                                ETU002081 Mark
                            </p>

                            <p>
                                ETU00
                            </p>

                            <p>
                                ETU00
                            </p>
                        </ul>
                    </div>
                </div>

            </div>
        </div>
    </footer>
</body>
</html>


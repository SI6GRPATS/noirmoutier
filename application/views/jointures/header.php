<?php
	$urlassets = base_url('application/assets/');
	$urlsite = base_url('application/views/');
?>
<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang=""> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="apple-touch-icon" href="apple-touch-icon.png">

        <link rel="stylesheet" href="<?php echo $urlassets; ?>css/normalize.min.css">
        <link rel="stylesheet" href="<?php echo $urlassets; ?>css/materialize.css">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <link rel="stylesheet" href="<?php echo $urlassets; ?>css/main.css">

    </head>
    <body>
        <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

    <nav>
        <div class="nav-wrapper">
        <a href="#!" class="brand-logo responsive-img"><img width="170px" src="<?php echo $urlassets; ?>/images/logo.png"></a>
         <a href="#" data-activates="mobile-noirmoutier" class="button-collapse"><i class="material-icons">menu</i></a>
        <ul class="right hide-on-med-and-down" data-activates="mobile-noirmoutier">
            <li><a href="<?php echo site_url('Accueil') ?>"><i class="material-icons left">home</i>Accueil</a></li>
            <li><a href="<?php echo site_url('Recherche') ?>"><i class="material-icons left">search</i>Stage</a></li>
            <li><a class="waves-effect waves-light btn modal-trigger" data-target="#modalsign" href="#modalsign">Login/Sign up</a></li>
        </ul>
        <ul class="side-nav" id="mobile-noirmoutier">
            <li><a href="<?php echo $urlsite; ?>Acceuil.php">Acceuil</a></li>
            <li><a href="<?php echo $urlsite; ?>recherche.php">Stage</a></li>
        </ul>
        </div>
    </nav>
    </body>


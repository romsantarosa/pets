<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-132982550-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag() {
        dataLayer.push(arguments);
        }
        gtag('js', new Date());
        gtag('config', 'UA-132982550-1');
    </script>

    <!-- CSS dependencies -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"
        type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Anton" rel="stylesheet">
    <link rel="stylesheet" href="css/template.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.4.1/semantic.min.css">

    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- PAGE settings -->
    <link rel="icon" type="image/png" href="images/favicon-16x16.png">
    <!--alterar o favicon-->

    <title><?php bloginfo('name'); ?></title>
    <meta name="description" content="<?php bloginfo('description'); ?>">

    <?php wp_head(); ?>
    <meta name="description" content="Mundo dos Pets. O seu guia completo">
    <meta name="description" content="width=device-width, initial-scale=1">
    <meta name="keywords" content="Guia, Pets, Animais, Cães, Gatos, Pássaros, Veterinários, Banho, Tosa.">

    <!-- JS dependencies -->

    <script type="text/javascript" src="js/semantic.min.js"></script>
</head>

<body>
    <!-- Navbar -->
    <header class="container cabecalho">

        <div class="row">
            <div class="col-sm-3 logo"><?php the_custom_logo();?></div>
            <div class="col-sm-6 pes"><?php get_search_form();?></div>
            <div class="col-sm-3 redes">
                <ul>
									<li class="whats" title="13 991774646"><a href="https://api.whatsapp.com/send?phone=5513991774646" target="_blank"><i class="fa fa-whatsapp"></i></a></li>
									<li class="facebook" title="facebook"><a href="https://www.facebook.com/mundodospetsofficial" target="_blank"><i class="fa fa-facebook"></i></a></li>
                                    <li class="instagram" title="instagram"><a href="https://www.instagram.com/mundodospetsofficial" target="_blank"><i class="fa fa-instagram"></i></a></li>
                                    <li class="youtube" title="youtube"><a href="https://www.youtube.com/channel/UCg615pUImkh0eQ4PYMtxjpA" target="_blank"><i class="fa fa-youtube"></i></a></li>
                </ul>
              </div>
        </div>
    </header>

    <nav class="menu-principal-topo">
        <?php wp_nav_menu( array( 'theme_location' => 'meu_menu_principal')); ?>
    </nav>
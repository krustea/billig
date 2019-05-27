<!doctype html>
<html lang="<?php language_attributes(); ?>">

<head>
    <meta charset="UTF-8" />
    <meta name="description" content="..." />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title><?php wp_title(); ?></title>
    <link rel="pingback" href="<? bloginfo( 'pingback_url' ); ?>">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css"
        integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous" />
    <link rel="shortcut icon" href="./images/favicon.ico" />
    <link href="https://fonts.googleapis.com/css?family=Lato:400,400i,700" rel="stylesheet" />
<!--    <link rel="stylesheet" href="css/owl.carousel.min.css" />-->
<!--    <link rel="stylesheet" href="css/owl.theme.default.min.css" />-->
<!--    <link rel="stylesheet" href="css/stellarnav.min.css" />-->
<!--    <link rel="stylesheet" href="css/styles.css" />-->
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <header>
        <div class="page-header">

            <div class="baseline container-fluid">
                <h2>Le bol <br>à la française</h2>

            </div>
            <div class="page-header-inner container-fluid">
                <div class="header-logo">
                    <div class="logo">
                        <a href="#" title="Accueil"><img src="<?php echo bloginfo( 'template_url' ); ?>/images/logo-chezbowl_white.svg" alt="Logo"></a>
                    </div>

                </div><!-- .header-logo -->

                <div class="header-nav">
                    <nav class="main-nav stellarnav">

                        <ul class="">
                            <li><a href="#">Notre carte</a></li>
                            <li><a href="#">Notre concept</a></li>
                            <li><a href="#">Devenir franchisé</a></li>
                            <li><a href="#">Contact</a></li>
                            <li><a class="map-market" href="#" title="Localisez-nous" target="_blank"><i
                                        class="fas fa-map-marker-alt"></i></a></li>
                            <li>
                                <form class="search-form" action="#" method="get">
                                    <input type="text" name="keywords" value="" placeholder="Rechercher">
                                    <button type="submit" name="submit-btn"><i class="fas fa-search"></i><span
                                            class="hidden-text">Valider</span>
                                    </button>
                                </form>
                            </li>
                        </ul>

                    </nav><!-- /nav -->
                </div>


            </div><!-- .page-header-inner -->



            <div class="">
                    <img src="<?php echo bloginfo( 'template_url' ); ?>/images/carousel-1.jpg" alt="">
            </div> <!--  /owl-carousel owl-theme -->

        </div> <!-- page-header -->
    </header><!-- /header -->
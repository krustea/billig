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
                    <nav class="main-nav stellarnav ">
                        <?php wp_nav_menu(array( 'theme_location' => 'menu-principal' , 'container' => 'ul')); ?>

                    </nav><!-- /nav -->
                </div>


            </div><!-- .page-header-inner -->

            <div class="owl-carousel owl-theme">

                <?php $front_page_id = get_option('page_on_front'); ?>
                <?php $header_posts = new WP_Query(['page_id' => $front_page_id]); ?>
                <?php $header_posts->the_post(); ?>
                <?php if (have_rows('header')): ?>

                    <?php while (have_rows('header')): the_row();

                        $image = get_sub_field('image');
                        ?>

                        <div class="item">
                            <img src="<?php echo $image['url']; ?>" alt="">
                        </div>

                    <?php endwhile; ?>


                <?php endif; ?>

                <?php wp_reset_postdata(); ?>




            </div> <!--  /owl-carousel owl-theme -->



        </div> <!-- page-header -->
    </header><!-- /header -->
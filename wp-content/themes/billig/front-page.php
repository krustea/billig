<?php get_header(); ?>
<?php if (have_posts()) : ?>
<?php while (have_posts()) :
the_post(); ?>


<section class="hero-1">
    <article class="hero-menu container">
        <div class="gallery-title">
            <h1>Notre carte</h1>
        </div>
        <div class="row">
            <div class="hero-prez col-6 col-md-4">
                <a href="#">
                    <figure class="figure">
                        <img src="<?php echo bloginfo( 'template_url' ); ?>/images/bowl1.jpg" alt="">
                        <figcaption class="figcaption">
                            <h2>Tuna</h2>
                            <p>Thon, mangue, avocat, oignons frits, coriandre fraîche</p>
                        </figcaption>
                    </figure>
                </a>
            </div>

            <div class="hero-prez col-6 col-md-4">
                <a href="#">
                    <figure class="figure">
                        <img src="<?php echo bloginfo( 'template_url' ); ?>/images/bowl2.jpg" alt="">
                        <figcaption class="figcaption">
                            <h2>Salmon</h2>
                            <p>Saumon, avocat, papaye verte, radis noir, graines de lin</p>
                        </figcaption>
                    </figure>
                </a>
            </div>

            <div class="hero-prez col-6 col-md-4">
                <a href="#">
                    <figure class="figure">
                        <img src="<?php echo bloginfo( 'template_url' ); ?>/images/bowl3.jpg" alt="">
                        <figcaption class="figcaption">
                            <h2>White</h2>
                            <p>Poisson blanc, courgette jaune, aubergine grillée, grenade, menthe</p>
                        </figcaption>
                    </figure>
                </a>
            </div>

            <div class="hero-prez col-6 col-md-4">
                <a href="#">
                    <figure class="figure">
                        <img src="<?php echo bloginfo( 'template_url' ); ?>/images/bowl4.jpg" alt="">
                        <figcaption class="figcaption">
                            <h2>Smoky</h2>
                            <p>Poisson fumé, fenouil, pomme granny, sesame, wasabi</p>
                        </figcaption>
                    </figure>
                </a>
            </div>

            <div class="hero-prez col-6 col-md-4">
                <a href="#">
                    <figure class="figure">
                        <img src="<?php echo bloginfo( 'template_url' ); ?>/images/bowl5.jpg" alt="">
                        <figcaption class="figcaption">
                            <h2>Huli huli</h2>
                            <p>Poulet, ananas, menthe, sauce soja, grenade, noix de cajou</p>
                        </figcaption>
                    </figure>
                </a>
            </div>

            <div class="hero-prez col-6 col-md-4">
                <a href="#">
                    <figure class="figure">
                        <img src="<?php echo bloginfo( 'template_url' ); ?>/images/bowl6.jpg" alt="">
                        <figcaption class="figcaption">
                            <h2>Veggie</h2>
                            <p>Tofu mariné, pois gourmands, graines de courge, fruits de saison, sauce soja</p>
                        </figcaption>
                    </figure>
                </a>
            </div>
        </div>


    </article>
</section><!-- /hero-1 -->

<section class="hero-2">

    <div class="concept-articles">

        <div class="title-style">

            <div class="title-infos">
                <h1>Notre concept</h1>
            </div>

            <div class="title-img">
                <img src="<?php echo bloginfo( 'template_url' ); ?>/images/bg-h1.png" alt="">
            </div>
        </div>

        <article class="qsn container">

            <div class="img">
                <img src="<?php echo bloginfo( 'template_url' ); ?>/images/engagements.jpg" alt="">
            </div>

            <div class="text">
                <h2>Nos engagements</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec nec dapibus velit, malesuada
                    ornare metus. Sed ornare, arcu ut consectetur ultricies, metus tortor euismod risus, et
                    consectetur metus felis eget felis. Fusce eu massa suscipit, interdum mi sed, ullamcorper
                    mauris. Curabitur odio enim, accumsan non felis vel, </p>
            </div>

        </article>

        <article class="qsn qsn-2 container">

            <div class="img">
                <img src="<?php echo bloginfo( 'template_url' ); ?>/images/valeurs.jpg" alt="">
            </div>

            <div class="text">
                <h2>Nos valeurs</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec nec dapibus velit, malesuada
                    ornare metus. Sed ornare, arcu ut consectetur ultricies, metus tortor euismod risus, et
                    consectetur metus felis eget felis. Fusce eu massa suscipit, interdum mi sed, ullamcorper
                    mauris. Curabitur odio enim, accumsan non felis vel, </p>
            </div>

        </article>

        <article class="qsn container">

            <div class="img">
                <img src="<?php echo bloginfo( 'template_url' ); ?>/images/communauté.jpg" alt="team">
            </div>

            <div class="text">
                <h2>Notre communauté</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec nec dapibus velit, malesuada
                    ornare metus. Sed ornare, arcu ut consectetur ultricies, metus tortor euismod risus, et
                    consectetur metus felis eget felis. Fusce eu massa suscipit, interdum mi sed, ullamcorper
                    mauris. Curabitur odio enim, accumsan non felis vel, </p>
            </div>
        </article>

    </div>

</section>



<section class="contact">

    <div class="contact-container container-fluid">

        <h2>M'inscrire à la<br>newsletter</h2>

        <form class="contact-form" action="#">

            <div class="mt-5">
                <input type="email" class="form-control" id="inputEmail4" placeholder="Entrez votre email...">
            </div>

            <div class="text-center my-5">
                <a class="btn-7" href="">ENVOYER</a>
            </div>
        </form>

    </div>

</section>

    <?php endwhile; ?>
<?php endif; ?>

<?php get_footer(); ?>

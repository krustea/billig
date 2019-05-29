<?php get_header(); ?>
<?php if (have_posts()) : ?>
<?php while (have_posts()) :
the_post(); ?>


<section id="carte" class="hero-1">

    <article class="hero-menu container">
        <div class="gallery-title">
            <h1>Notre carte</h1>
        </div>
        <div class="row">

            <?php if (have_rows('notre_carte')): ?>

            <?php while (have_rows('notre_carte')):
            the_row();
            $image = get_sub_field('image');
            ?>
            <div class="hero-prez col-6 col-md-4">
                <a href="#">
                    <figure class="figure">
                        <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt'] ?>"/>
                        <figcaption class="figcaption">
                            <h2><?php the_sub_field('titre'); ?></h2>
                            <p><?php the_sub_field('description'); ?></p>
                        </figcaption>
                    </figure>
                </a>
            </div>
                <?php endwhile; ?>


            <?php endif; ?>

        </div>


    </article>
</section><!-- /hero-1 -->

    <section id="concept" class="hero-2">

        <div class="concept-articles">

            <div class="title-style">

                <div class="title-infos">
                    <h1>Notre concept</h1>
                </div>

                <div class="title-img">
                    <img src="<?php echo bloginfo('template_url'); ?>/images/bg-h1.png" alt="">
                </div>
            </div>

            <article class="qsn container">
                <?php

                $image = get_field('image_valeur'); ?>

                <div class="img">
                    <img src="<?php echo $image['url']; ?>" alt="">
                </div>

                <div class="text">
                    <?php if (get_field('titre_engagement')): ?>
                        <h2><?php the_field('titre_engagement') ?></h2>
                    <?php endif; ?>

                    <?php if (get_field('titre_engagement')): ?>

                        <p><?php the_field('description_engagement') ?></p>
                    <?php endif; ?>
                </div>

            </article>

            <article class="qsn qsn-2 container">
                <?php

                $image = get_field('image_valeur'); ?>

                <div class="img">
                    <img src="<?php echo $image['url']; ?>" alt="">
                </div>

                <div class="text">
                    <?php if (get_field('titre_valeur')): ?>
                    <h2><?php the_field('titre_valeur') ?></h2>
                    <?php endif; ?>

                    <?php if (get_field('titre_valeur')): ?>

                    <p><?php the_field('description_valeur') ?></p>
                    <?php endif; ?>

                </div>

            </article>

            <article class="qsn container">
                <?php

                $image = get_field('image_communaute'); ?>
                <div class="img">
                    <img src="<?php echo $image['url']; ?>" alt="team">
                </div>

                <div class="text">
                    <?php if (get_field('titre_valeur')): ?>
                        <h2><?php the_field('titre_valeur') ?></h2>
                    <?php endif; ?>

                    <?php if (get_field('titre_valeur')): ?>

                        <p><?php the_field('description_valeur') ?></p>
                    <?php endif; ?>

                </div>
            </article>

        </div>

    </section>


    <section class="contact"
             style="background-image: url('<?php echo bloginfo('template_url'); ?>/images/bg_newsletter.jpg')">

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

<?php get_header(); ?>
    <div class="main">
        <div class="container">
            <div class="row justify-content-between">
                <div class="col-sm-12 col-md-6 col-lg-4 d-flex flex-column align-items-center">
                    <div class="card text-center" style="width: 18rem;">
                        <img src="images/lacoste jonathan.jpg" class="card-img-top" alt="ma photo-de-profil">
                        <div class="card-body">
                            <h5 class="card-title">A propos de moi</h5>
                            <p class="card-text">Je m’appelle Jonathan
                                j’ai 38 ans et
                                j’habite en Lozère.
                                Ayant une longue expérience dans la boulangerie,
                                aujourd'hui j'ai décidé de me reconvertir
                                professionnellement,
                                j'ai donc intégré une formation afin de devenir
                                développeur web et pouvoir évoluer dans ce métier qui me passionne.</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-md-6 col-lg-4 d-flex flex-column align-items-center">
                    <div class="card" style="width: 18rem justify-space-between;">
                        <img src="images/retro-games.jpg" class="card-img-top" alt="image retro-games">
                        <div class="card-body">
                            <h5 class="card-title">Centre d'intèrets</h5>
                            <ul>
                                <li>
                                    -Rétro-gaming
                                </li>
                                <li>
                                    -Musique
                                </li>
                                <li>
                                    -Informatique
                                </li>
                                <li>
                                    -Nouvelles technologies
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Affichage du CPT compétences -->
    <?php wp_reset_postdata();?>
    <?php 
    $query = new WP_Query(
        [
        'post_type'=> 'competences'
        ]
    );?>

    <div class="container my-5">
    <h1>Compétences</h1> 
        <?php if ( $query->have_posts() ) : ?>
            <div class="row">
                <?php while ( $query->have_posts() ) : $query->the_post(); ?>
                    <div class="col-md-4 mb-3">
                        <div class="card mx-auto shadow-lg p-3 mb-5 card_dim bg-white">
                            <?php the_post_thumbnail('thumbnail')?>
                            <div class="card-body">
                                <h5 class="card-title"><?php the_title(); ?></h5>
                                <p class="card-text"><?php the_content(); ?></p>
                            </div>
                        </div>
                    </div>
                <?php endwhile; ?>
            </div>
            <?php the_posts_navigation(); ?>
        <?php endif; ?>
    </div>


        <!-- Affichage du CPT compétences -->
    <?php wp_reset_postdata();?>
    <?php 
    $query = new WP_Query(
        [
        'post_type'=> 'realisations'
        ]
    );?>

    <div class="container my-5">
    <h1>Réalisations</h1> 
        <?php if ( $query->have_posts() ) : ?>
            <div class="row">
                <?php while ( $query->have_posts() ) : $query->the_post(); ?>
                    <div class="col-md-4 mb-3">
                        <div class="card mx-auto shadow-lg p-3 mb-5 card_dim bg-white">
                            <?php the_post_thumbnail('thumbnail')?>
                            <div class="card-body">
                                <h5 class="card-title"><?php the_title(); ?></h5>
                                <p class="card-text"><?php the_content(); ?></p>
                                <a href="https://worldtris.netlify.app"></a>
                            </div>
                        </div>
                    </div>
                <?php endwhile; ?>
            </div>
            <?php the_posts_navigation(); ?>
        <?php endif; ?>
    </div>




<?php get_footer(); ?>
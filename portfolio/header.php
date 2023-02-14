<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Lancelot&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Marcellus&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">
    <link rel="stylesheet" type="text/css" href="style.css">
    <?php wp_head() ?>

</head>
<?php
$args = array(
    'post_type' => 'competences', 
    'posts_per_page' => -1, 
);
$query = new WP_Query($args);
if ($query->have_posts()) :
    while ($query->have_posts()) : $query->the_post();
        ?>
        <div class="competence">
            <h2><?php the_title(); ?></h2>
            <?php
            $competences_front_end = get_field('competences_front-end');
            $competences_back_end = get_field('competences_back-end');
            $outils_de_developpements = get_field('outils_de_developpements');
            if ($competences_front_end) {
                echo '<p>Compétences front-end : ' . $competences_front_end . '</p>';
            }
            if ($competences_back_end) {
                echo '<p>Compétences back-end : ' . $competences_back_end . '</p>';
            }
            if ($outils_de_developpements) {
                echo '<p>Outils de développements : ' . $outils_de_developpements . '</p>';
            }
            ?>
        </div>
        <?php
    endwhile;
endif;
wp_reset_postdata();
?>


<body>
<header>
        <div class="header--top">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <ul>
                            <div class="atom">
                                <div class="line line-1"></div>
                                <div class="line line-2"></div>
                                <div class="line line-3"></div>
                            </div>
                            <li>
                                <a href="https://twitter.com/joedww2022" target="_blank">
                                    <i class="bi bi-twitter"></i>
                                </a>
                            </li>
                            <li>
                                <a href="https://www.linkedin.com/in/jonathan-lacoste-6bab36257/" target="_blank">
                                    <i class="bi bi-linkedin"></i>
                                </a>
                            </li>
                            <li>
                                <a href="https://github.com/joenibiru" target="_blank">
                                    <i class="bi bi-github"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        </div>
        <div class="header--main">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <h1>Bonjour !</h1>
                        <h2>Lacoste Jonathan</h2>
                        <h3>Dévloppeur web/web mobile</h3>
                    </div>
                </div>
            </div>
        </div>
    </header>


<?php 
/**
 *  index.php est le modèle par défaut
 *  si aucun modèle peut satisfaire la requête http dans ce cas c'est index.php qui affichera le contenu de la page 
 * 
 */
$image_defaut = get_theme_mod('image_defaut_destination');
?>

<?php get_header() ?>
    <section class="populaire">
        <div class="global">
            <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                <article class="populaire__article">
                   <!-- Image mise en avant ou image par défaut -->
                     <?php
                    $image_defaut = get_theme_mod('image_defaut_destination');
                        if (!has_post_thumbnail()) {
                            $image_defaut = get_theme_mod('image_defaut_destination');
                            if ($image_defaut) {
                                echo '<img src="' . esc_url($image_defaut) . '" alt="Image par défaut">';
                            }
                        }
                    ?>
                    <?php
                    if (has_post_thumbnail()) 
                    the_post_thumbnail(); ?>
                    <h2 class="populaire__titre"><?php the_title(); ?></h2>
                    <div class="pouplaire__contenu"><?php the_content(); ?></div>
                    <?php the_category(); ?>
                     <!--Nom de l'auteur -->
                    <p class="auteur">Auteur : <?php the_author(); ?></p>
                    <!--Date de publication -->
                    <p class="date">Publié le : <?php the_time('j F Y'); ?></p>                            
                </article>
            <?php endwhile; endif; ?>
        </div>
    </section>
   <?php get_footer(); ?>
</body>
</html>
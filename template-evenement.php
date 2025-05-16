<?php
/*
Template Name: Événement
*/
?>
<?php get_header(); ?>
<div class="global">
                <article class="populaire__article">
                    <?php
                    if (has_post_thumbnail())
                     the_post_thumbnail(); ?>
                    <h2 class="populaire__titre"><?php the_title(); ?></h2>
                    <div class="pouplaire__contenu"><?php the_content(); ?></div>
                    <h2><?php the_field('titre_evenement')?></h2>
                    <p>Le conférencier: <?php the_field('conferencier_evenement')?></p>
                    
                </article>
        </div>
<?php get_footer(); ?>
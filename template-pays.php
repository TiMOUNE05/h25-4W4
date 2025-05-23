<?php
/*
Template Name: Pays
*/
?>

<?php get_header(); ?>

<div class="global__pays">
    <div class="contenue">
    <h2>Pays</h2>
    <p>Plongez au cœur de l’aventure et laissez-vous emporter par l’appel du large ! Notre planète regorge de destinations incroyables, chacune promettant une expérience unique et mémorable. Que vous rêviez de plages idylliques baignées de soleil, de sommets majestueux invitant à la randonnée, de villes vibrantes d’histoire et de modernité, ou de rencontres culturelles authentiques, il y a un pays fait pour vous.</p>

    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
        <div class="contenu-page">
            <?php the_content(); ?>
        </div>
    <?php endwhile; endif; ?>
    </div>
</div>

<?php 
$footer_couleur_arriere = get_theme_mod('footer_couleur_arriere', '#fcb900');
$couleurVague = get_theme_mod('couleur_vague', '#fff');
vague($footer_couleur_arriere);
?>
<?php get_footer(); ?>

<?php
/*
Template Name: Pays
*/
?>

<?php get_header(); ?>

<div class="global__pays">
    <section class="contenu">
    <h2>Pays</h2>
    <p>Plongez au cœur de l’aventure et laissez-vous emporter par l’appel du large ! Notre planète regorge de destinations incroyables, chacune promettant une expérience unique et mémorable. Que vous rêviez de plages idylliques baignées de soleil, de sommets majestueux invitant à la randonnée, de villes vibrantes d’histoire et de modernité, ou de rencontres culturelles authentiques, il y a un pays fait pour vous.</p>

    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
        <div class="contenu-page">
            <?php the_content(); ?>
        </div>
    <?php endwhile; endif; ?>
</section>
</div>

<?php 
$footer_couleur_arriere = get_theme_mod('footer_couleur_arriere', '#fcb900');
$couleurVague = get_theme_mod('couleur_vague', '#fff');
vague($footer_couleur_arriere);
?>

    <!--//////////////////////////section destination REST-API -->
    
    <section class="rest__api">

    <!-- MENU PAYS -->
    <div class="menu-pays">
        <?php
        $pays = ["France", "États-Unis", "Canada", "Argentine", "Chili", "Belgique", "Maroc", "Mexique", "Japon", "Italie", "Islande", "Chine", "Grèce", "Suisse"];
        foreach ($pays as $p) {
            echo "<button class='pays__item' data-pays='{$p}'>{$p}</button>";
        }
        ?>
    </div>
    <section class="destination">
        <h2 class="destination__titre">Articles de la catégorie</h2>
        <div class="destination__list"></div>
    </section>
    </section>
<?php get_footer(); ?>

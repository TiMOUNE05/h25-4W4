<?php 
$hero_auteur = get_theme_mod('hero_auteur', 'Default Title');
$hero_background = get_theme_mod('hero_background', 'Default Title');
$couleurTexte = get_theme_mod('hero_texte', '#fff');
$hero_courriel = get_theme_mod('hero_courriel', 'Default Title');
?>
<style>
    .hero{
         color: <?php echo $couleurTexte ?>
    }
</style>
<section class="hero" style= "background-image: url(<?php echo $hero_background?>); background-repeat: no-repeat color:">
        <div class="hero__contenu global">
            <h1 class="hero__titre">
                <?php echo bloginfo('name') ?>
            </h1>
            <p class="hero__description">
                <?php echo bloginfo('description') ?>
            </p>
            <p class="hero__courriel">
               Courriel: <?php echo $hero_courriel?>
            </p>
            <p class="hero__addresse">
                3800, rue Sherbrooke, Montreal
            </p>
            <p class="hero__numero">
                514-254-7131
            </p>
            <button class="hero__bouton">
                s'inscrire
            </button>
            <?php get_template_part( 'gabarits/icone' ); ?>
            <p> auteur: <?php echo $hero_auteur?></p>
        </div>
    </section>
    
<?php 
$hero_auteur = get_theme_mod('hero_auteur', 'Default Title');
for ($k= 0; $k<3; $k++){
    $hero_background[$k]= get_theme_mod('hero_background_' . $k, 'Default Title');
}

$couleurTexte = get_theme_mod('hero_texte', '#fff');
$hero_courriel = get_theme_mod('hero_courriel', 'Default Title');
?>
<style>
    .hero{
         color: <?php echo $couleurTexte ?>
    }
</style>
<section class="hero">
       <!--////////////////////////////////////////////////////////////////////////////////////hero__carrousel-->

            <?php foreach ($hero_background as $index => $url): ?>
            <div class="hero__carrousel <?php echo $index === 0 ? 'hero__carrousel--active' : ''; ?>" 
                style="background-image: url(<?php echo $url; ?>);">
            </div>
        <?php endforeach; ?>
        <div class="hero__radio">
            <input class="hero__radio__input" type="radio" name="carrousel" data-id-carrousel="0" checked = "checked"> 
            <input class="hero__radio__input" type="radio" name="carrousel" data-id-carrousel="1">
            <input class="hero__radio__input" type="radio" name="carrousel" data-id-carrousel="2">
        </div>

        <!--////////////////////////////////////////////////////////////////////////////////////hero__contenu-->

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
    
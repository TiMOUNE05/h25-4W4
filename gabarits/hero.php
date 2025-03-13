<?php 
$hero_auteur = get_theme_mod('hero_auteur', 'Default Title');
$hero_background = get_theme_mod('hero_background', 'Default Title');
$couleurIcone = substr(get_theme_mod('hero_icone', '#fff'),1); 
$couleurTexte = get_theme_mod('hero_texte', '#fff');
$hero_courriel = get_theme_mod('hero_courriel', 'Default Title');
?>
<style>
    .hero{
         color: <?php echo $couleurTexte ?>
    }
</style>
<section class="hero" style= "background-image: url(<?php echo $hero_background?>); background-repeat: no-repeat color: <?php echo $couleurTexte ?>">
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
            <div class="hero__icone-app">
                <img src="https://s2.svgbox.net/social.svg?ic=facebook&color=<?php echo $couleurIcone ?>" width="20" height="20">
                <img src="https://s2.svgbox.net/social.svg?ic=linkedin&color=<?php echo $couleurIcone ?>" width="20" height="20">
                <img src="https://s2.svgbox.net/social.svg?ic=paypal&color=<?php echo $couleurIcone ?>" width="20" height="20">
                <img src="https://s2.svgbox.net/social.svg?ic=stackoverflow&color=<?php echo $couleurIcone ?>" width="20" height="20">
            </div>
            <p> auteur: <?php echo $hero_auteur?></p>
        </div>
    </section>
    
<?php 
$hero_auteur = get_theme_mod('hero_auteur', 'Default Title');
$hero_background = get_theme_mod('hero_background', 'Default Title');
$couleur = substr(get_theme_mod('hero_icone', '#fff'),1); 
?>
<style>
    .hero_couleur{
         color: <?php echo $couleur ?>
    }
</style>
<section class="hero" style= "background-image: url(<?php echo $hero_background?>); background-repeat: no-repeat;">
        <div class="hero__contenu global">
            <h1 class="hero__titre">
                <?php echo bloginfo('name') ?>
            </h1>
            <p class="hero__description">
                <?php echo bloginfo('description') ?>
            </p>
            <p class="hero__courriel">
                info@cmaisonneuve.qc.ca
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
                <img src="https://s2.svgbox.net/social.svg?ic=facebook&color=<?php echo $couleur ?>" width="20" height="20">
                <img src="https://s2.svgbox.net/social.svg?ic=linkedin&color=<?php echo $couleur ?>" width="20" height="20">
                <img src="https://s2.svgbox.net/social.svg?ic=paypal&color=<?php echo $couleur ?>" width="20" height="20">
                <img src="https://s2.svgbox.net/social.svg?ic=stackoverflow&color=<?php echo $couleur ?>" width="20" height="20">
            </div>
            <p> auteur: <?php echo $hero_auteur?></p>
        </div>
    </section>
    
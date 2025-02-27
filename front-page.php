<?php 

/**
 * modèle front-page.php permet d'afficher la page d'acceuil
 * 
 */
?>


<?php get_header() ?>
<h1>front-page.php</h1>
    <section class="hero">
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
                <img src="https://s2.svgbox.net/social.svg?ic=facebook&color=000000" width="20" height="20">
                <img src="https://s2.svgbox.net/social.svg?ic=linkedin&color=000000" width="20" height="20">
                <img src="https://s2.svgbox.net/social.svg?ic=paypal&color=000000" width="20" height="20">
                <img src="https://s2.svgbox.net/social.svg?ic=stackoverflow&color=000000" width="20" height="20">
            </div>
        </div>
    </section>
    
    <section class="form__formulaire">
        <div class="formulaire">
            <form>
                <div class="form__reponse">
                    <label for="nom">Nom:</label><br>
                    <input type="text" class="formulaire__input" name="nom" placeholder="Écrivez votre nom"><br>
                </div>
                <div class="form__reponse">
                    <label for="prenom">Prénom:</label><br>
                    <input type="text" class="formulaire__input" name="prenom"placeholder="Écrivez votre prénom"><br>
                </div>
                <div class="form__reponse">
                    <label for="courriel">Courriel:</label><br>
                    <input type="text" class="formulaire__input" name="courriel" placeholder="Écrivez votre courriel"><br>
                </div>
                <div class="form__reponse">
                    <label for="telephone">Téléphone:</label><br>
                    <input type="text" class="formulaire__input" name="telephone"placeholder="Écrivez votre téléphone" ><br>
                </div>
                    <button class="formulaire__button">S'inscrire</button>                
            </form>
        </div>
    </section>
    <section class="galerie">
        <h2>Nos destinations favorites</h2>
        <div class="galerie__destinations">
            <figure class="galerie__fig">
                <img src="<?php echo get_template_directory_uri() . '/images/paysage1.jpg' ?>" class="galerie__img">
            </figure>
            <figure class="galerie__fig">
                <img src="<?php echo get_template_directory_uri() . '/images/paysage2.jpg' ?>" class="galerie__img">
            </figure>
            <figure class="galerie__fig">
                <img src="<?php echo get_template_directory_uri() . '/images/paysage3.jpg' ?>" class="galerie__img">
            </figure>
            <figure class="galerie__fig">
                <img src="<?php echo get_template_directory_uri() . '/images/paysage4.jpg' ?>" class="galerie__img">
            </figure>
            <figure class="galerie__fig">
                <img src="<?php echo get_template_directory_uri() . '/images/paysage5.jpg' ?>"class="galerie__img">
            </figure>
            <figure class="galerie__fig">
                <img src="<?php echo get_template_directory_uri() . '/images/paysage6.jpg' ?>" class="galerie__img">
            </figure>
            <figure class="galerie__fig">
                <img src="<?php echo get_template_directory_uri() . '/images/paysage7.jpg' ?>" class="galerie__img">
            </figure>
            <figure class="galerie__fig">
                <img src="<?php echo get_template_directory_uri() . '/images/paysage8.jpg' ?>" class="galerie__img">
            </figure>
            <figure class="galerie__fig">
                <img src="<?php echo get_template_directory_uri() . '/images/paysage9.jpg' ?>" class="galerie__img">
            </figure>
            <figure class="galerie__fig">
                <img src="<?php echo get_template_directory_uri() . '/images/paysage10.jpg' ?>"class="galerie__img">
            </figure>
        </div>   
    </section>
 
    <section class="populaire">
        <div class="boiteflex global">
            <?php if (have_posts()) : while (have_posts()) : the_post(); 
            if (in_category("galerie"))  {
                the_content() ;
            } else {    ?>
                <?php get_template_part( 'gabarits/carte' ); ?>
            <?php } ?>
            <?php endwhile; endif; ?>
        </div>
    </section>
   <?php get_footer(); ?>
</body>
</html>
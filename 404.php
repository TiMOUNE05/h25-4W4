<?php 
$erreur_message = get_theme_mod('erreur_message', 'Default Title');
$erreur_titre = get_theme_mod('erreur_titre', 'Default Title');
$erreur_img = get_theme_mod('erreur_img', 'Default Title');
$erreur_background = get_theme_mod('erreur_background', 'Default Title');
?>
<?php get_header() ?>

<section class="erreur_global" style="background-image: url(<?php echo esc_url($erreur_background); ?>); background-repeat: no-repeat; background-size: cover; background-position: center;">


    <h2 class="erreur_titre">
            <?php echo $erreur_titre?>
    </h2>

    <p class="erreur_message">
            <?php echo $erreur_message?>
    </p>
    <!--<div class="erreur_image">
        <img src="<?php echo $erreur_img?>" alt="image erreur">
    </div>-->

    <div class="erreur_boutonAccueil">
        <a href="index.php">
        Retour à la page d'accueil
        </a>
    </div>

    <div class="erreur_boutonCarte"> 
    <?php wp_nav_menu(array(
                'menu'  => 'menu_404',
		        'container'  => 'div',
		        'container_class'=> '',
            )); ?>
</div>


    

    <div class="erreur_recherche">
    <?php get_search_form();?>
    </div>

    </section>
<?php get_footer(); ?>
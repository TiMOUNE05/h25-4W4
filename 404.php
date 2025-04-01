<?php 
$erreur_message = get_theme_mod('erreur_message', 'Default Title');
$erreur_titre = get_theme_mod('erreur_titre', 'Default Title');
$erreur_img = get_theme_mod('erreur_img', 'Default Title');
$erreur_background = get_theme_mod('erreur_background', 'Default Title');
?>
<?php get_header() ?>

    <section class="erreur_global" style= "background-image: url(<?php echo $erreur_background?>); background-repeat: no-repeat color:">

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
    <?php if (have_posts()) : while (have_posts()) : the_post(); 
        if (in_category("populaire")) : ?>
            <?php get_template_part( 'gabarits/carteErreur' ); ?>
        <?php endif;
    endwhile; endif; ?>
</div>


    

    <div class="erreur_recherche">
    <?php get_search_form();?>
    </div>


    </section>
<?php get_footer(); ?>
<?php 
$erreur_message = get_theme_mod('erreur_message', 'Default Title');
$erreur_titre = get_theme_mod('erreur_titre', 'Default Title');
$erreur_img = get_theme_mod('erreur_img', 'Default Title');
?>
<?php get_header() ?>

    <section class="erreur_global">

    <h2 class="erreur_titre">
            <?php echo $erreur_titre?>
    </h2>

    <p class="erreur_message">
            <?php echo $erreur_message?>
    </p>
    <div class="erreur_image">
        <img src="<?php echo $erreur_img?>" alt="image erreur">
    </div>
    <div class="erreur_recherche">
    <?php get_search_form();?>
    </div>

    <div class="erreur_icone">
    <?php get_template_part( 'gabarits/icone' ); ?>
    </div>

    </section>
<?php get_footer(); ?>
<?php 
$erreur_message = get_theme_mod('erreur_message', 'Default Title');
$erreur_titre = get_theme_mod('erreur_titre', 'Default Title');
?>
<?php get_header() ?>
    <h2 class="erreur_titre">
            <?php echo $erreur_titre?>
    </h2>
    <p class="erreur_message">
            <?php echo $erreur_message?>
    </p>
    <?php get_search_form();   ?>
    <?php get_template_part( 'gabarits/icone' ); ?>
<?php get_footer(); ?>
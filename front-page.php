<?php 

/**
 * modèle front-page.php permet d'afficher la page d'acceuil
 * 
 */
?>

<?php get_header() ?>
<?php get_template_part( 'gabarits/hero' ); ?>
<?php get_template_part( 'gabarits/formulaire' ); ?>
    

   <section class="populaire">
        <div class="global">
            <?php if (have_posts()) : while (have_posts()) : the_post(); 
            if (in_category("Galerie"))  {
                the_content() ;
            } else {    ?>
                <?php get_template_part( 'gabarits/carte' ); ?>
            <?php } ?>
            <?php endwhile; endif; ?>
        </div>
    </section>
    <!--//////////////////////////section destination REST-API -->
    <?php categories_liste("destination"); ?>
    <section class="destination">
        <h2 class="destination__titre">Articles de la catégorie</h2>
        <div class="destination__list"></div>
    </section>
   <?php get_footer(); ?>
</body>
</html>
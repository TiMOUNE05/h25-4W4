<?php 

/**
 * modèle front-page.php permet d'afficher la page d'acceuil
 * 
 */
?>

<?php get_header() ?>
<?php get_template_part( 'gabarits/hero' ); ?>
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
   <?php get_footer(); ?>
</body>
</html>
<?php
/**
 * Template-part carte
 */
?>
<article class="carte carte--grande">
<?php
 /**  <figure class="carte__image">
    *<img src="voyage.jpg" alt="Image de voyage">
    *</figure>
    */
    ?>
  <div class="carte__contenu">
    <?php
        if (has_post_thumbnail()) {
          //permet d'afficher la petite image associé à l'article (image mis en avant)
        the_post_thumbnail('thumbnail'); }
    ?>    
    <h2 class="carte__titre"><?php the_title(); ?></h2>
    <p class="carte__description"><?php echo wp_trim_words(get_the_content(),10, " ... " ); ?></p>
    <a class="carte__bouton carte__bouton--actif" href="<?php the_permalink() ?>">suite ...</a>
    <?php the_category(); ?>
  </div>
</article>
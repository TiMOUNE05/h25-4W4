<?php 
/**
 *  index.php est le modèle par défaut
 *  si aucun modèle peut satisfaire la requête http dans ce cas c'est index.php qui affichera le contenu de la page 
 * 
 */
?>

<?php get_header() ?>

<h2>
    <?php
    global $wp_query;
    $total_results = $wp_query->found_posts;
    echo $total_results . ' résultat' . ($total_results > 1 ? 's' : '') . ' trouvé' . ($total_results > 1 ? 's' : '');
    ?>
    pour « <?= get_search_query(); ?> »
</h2>

<section class="populaire">
    <div class="global">
        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

            <article>
                <h2 class="populaire__titre">
                    <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                </h2>
                <div class="populaire__contenu">
                    <?php echo wp_trim_words(get_the_excerpt(), 50, "..."); ?>
                </div>
            </article>

        <?php endwhile; else : ?>
            <p>Aucun résultat trouvé.</p>
        <?php endif; ?>
    </div>
</section>

<?php get_footer(); ?>
</body>
</html>
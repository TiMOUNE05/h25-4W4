<?php
$footer_couleur_arriere = get_theme_mod('footer_couleur_arriere', '#0088f7');
$couleurVague = get_theme_mod('couleur_vague', '#fff');

// Affiche la vague avec la bonne couleur
vague($footer_couleur_arriere);
?>

<footer style="background-color: <?= $footer_couleur_arriere ?>;">
    <?php 
    $footer_mission = get_theme_mod('footer_mission', 'Default Title'); 
    $footer_adresse = get_theme_mod('footer_adresse', 'Default Title');
    $footer_telephone = get_theme_mod('footer_telephone', 'Default Title');
    ?>
   
    <div class="piedpage global">
        <section class="piedpage__s1">
            <div class="piedpage__s1__externe">
                <h3>Site de référence</h3>
                <?php wp_nav_menu(array(
                    "menu" => "externe",
                    "container" => "nav",
                    "container_class" => "piedpage__s1__externe"
                )); ?>
            </div>

            <div class="piedpage__s1__adresse">
                <div class="piedpage__s1__adresse__recherche">
                    <h3>Adresse et recherche</h3>
                    <?= $footer_adresse ?><br>
                    <?= $footer_telephone ?>
                    <?php get_search_form(); ?>
                </div>
            </div>

            <div class="piedpage__s1__description">
                <h3>Mission du club</h3>
                <?= $footer_mission ?>
            </div>
        </section>

        <section class="piedpage__s2">
            <?php get_template_part('gabarits/icone'); ?>
        </section>

        <section class="piedpage__s3">
            <?php wp_nav_menu(array(
                'menu' => 'principal',
                'container' => 'div',
                'container_class' => '',
            )); ?>
        </section>
    </div>
</footer>

<?php wp_footer(); ?>

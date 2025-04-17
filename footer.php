<?php
$couleurVague = get_theme_mod('couleur_vague', '#fff');
?>

<footer>

<!--<div class="footer__vague"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="<?php echo $couleurVague ?>" fill-opacity="1" d="M0,96L24,96C48,96,96,96,144,122.7C192,149,240,203,288,224C336,245,384,235,432,218.7C480,203,528,181,576,160C624,139,672,117,720,138.7C768,160,816,224,864,250.7C912,277,960,267,1008,250.7C1056,235,1104,213,1152,224C1200,235,1248,277,1296,256C1344,235,1392,149,1416,106.7L1440,64L1440,320L1416,320C1392,320,1344,320,1296,320C1248,320,1200,320,1152,320C1104,320,1056,320,1008,320C960,320,912,320,864,320C816,320,768,320,720,320C672,320,624,320,576,320C528,320,480,320,432,320C384,320,336,320,288,320C240,320,192,320,144,320C96,320,48,320,24,320L0,320Z"></path></svg>
</div>-->
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
                    <?php echo $footer_adresse ?> <br>
                    <?php echo $footer_telephone ?>
                    <?php get_search_form();   ?>
                </div>
            </div>
            <div class="piedpage__s1__description">
                <h3>Mission du club</h3>
               <?php echo $footer_mission ?>
            </div>
        </section>
        <section class="piedpage__s2">
             <?php get_template_part( 'gabarits/icone' ); ?>
        </section>
        <section class="piedpage__s3">
        <?php wp_nav_menu(array(
                'menu'  => 'principal',
		        'container'  => 'div',
		        'container_class'=> '',
            )); ?>
        </section>


    </div>
</footer>
<?php wp_footer() ?>
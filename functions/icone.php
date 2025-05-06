<?php

function afficher_icones_sociaux() {
    $couleur = get_theme_mod('hero_icone', '#fff');
    $couleur = ltrim($couleur, '#');

    $icones = ['facebook', 'linkedin', 'paypal', 'stackoverflow', 'github', 'wordpress'];

    echo '<div class="icone_app">';
    foreach ($icones as $icone) {
        echo '<img src="https://s2.svgbox.net/social.svg?ic=' . $icone . '&color=' . $couleur . '" width="20" height="20">';
    }
    echo '</div>';
}


?>

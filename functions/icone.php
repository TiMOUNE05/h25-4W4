<?php

function afficher_icones_sociaux() {
    $couleurIcone = substr(get_theme_mod('hero_icone', '#ffffff'), 1);
    $icones = ['facebook', 'linkedin', 'paypal', 'stackoverflow', 'github', 'wordpress'];

    echo '<div class="icone_app" style="display: flex; gap: 10px;">';
    foreach ($icones as $icone) {
        $lien = get_theme_mod("lien_icone_$icone");
        if ($lien) {
            echo '<a href="' . esc_url($lien) . '" target="_blank" rel="noopener">
                <img src="https://s2.svgbox.net/social.svg?ic=' . esc_attr($icone) . '&color=' . esc_attr($couleurIcone) . '" width="20" height="20">
            </a>';
        }
    }
    echo '</div>';
}



?>

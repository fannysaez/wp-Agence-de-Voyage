<?php
add_shortcode('projet_lieu','post_type_projet');

function post_type_projet(){
//Permet de récuperer une valeur dynamique
    $lieu = get_field('lieu_du_projet');
    return "<p>" . $lieu . "</p>";
}
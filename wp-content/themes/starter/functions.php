<?php 

// ajoute une nouvelle section dans la back office dans la partie
// apparence
//register_nav_menu("theme_location" , "top");
//register_nav_menu("theme_location" , "information");


register_nav_menus([
    "top" => "Menu Principal",
    "info" => "Menu dédié à la page info"
]);


// BO > Apparence > Menus 


// activer la capacité du thème à gérer les images à la une

function starter_support(){
    add_theme_support( 'post-thumbnails' );
  }
add_action( 'after_setup_theme', 'starter_support' );
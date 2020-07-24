<?php 

// ajoute une nouvelle section dans la back office dans la partie
// apparence
//register_nav_menu("theme_location" , "top");
//register_nav_menu("theme_location" , "information");

function starter_register_nav_menu(){
    register_nav_menus([
        "top" => "Menu Principal",
        "info" => "Menu dédié à la page info"
    ]);

}


add_action( 'after_setup_theme', 'starter_register_nav_menu', 0 );

// BO > Apparence > Menus 
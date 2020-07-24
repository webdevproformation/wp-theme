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


<?php  

$login = "";
$mdp = "";

$connexion = new PDO('mysql:host=localhost;dbname=theme;charset=utf8mb4', "root", "root");

// la même manière de faire la m

$bdd_name = "theme";
$bdd_user = "theme";
$bdd_password = "azerty1234!";

$connexion2 = new PDO("mysql:host=localhost;dbname=".$bdd_name , $bdd_user ,  $bdd_password);

// connexion à la base de données 

// requête SQL 

// que vous fassiez un projet PHP vous même à la main 
// wordpress => OBLIGATOIRE 
// wp-config.php 

$nom = "valeur"; // créer une variable 

// constante = variable dont la valeur ne peut pas changer

define("user" , "Malik");

echo $nom ; // affichier valeur" à l'écran

echo user ; // afficher Malik à l'écran => attention pas besoin de $ devant le nom du constante pour les utiliser dans votre code 


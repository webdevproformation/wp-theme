<?php 
/*
Template Name: information
*/
?>

<?php get_header() ?> 

<div class="container">
    
    <?php while ( have_posts() ) { // requête sql + connexion
        the_post();  // crée une variable $post est qui contient le résultat de la requête
        echo "<pre>";
        var_dump($post);
        echo "</pre>";
    } ?>

</div>

<?php get_footer() ?>
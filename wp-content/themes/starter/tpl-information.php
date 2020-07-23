<?php 
/*
Template Name: information
*/
?>

<?php get_header() ?> 

<div class="container">
    
    <?php while ( have_posts() ) { // requête sql + connexion
        the_post();  // crée une variable $post qui contient le résultat de la requête
        // la variable $post est un objet php contient de nombreuses propriétés 
        //echo "<pre>";

        //var_dump($post->post_title);
        the_title();
        //echo "<br>";
        //var_dump($post->post_content);
        the_content();

        the_author();

        the_date();
        // echo "</pre>";
    } ?>


</div>

<?php get_footer() ?>
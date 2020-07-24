<?php 
/*
Template Name: information
*/
?>

<?php get_header() ?> 

<div class="container">

    <div class="row">
        <div class="col-8">
                <?php while ( have_posts() ) { // requête sql + connexion
                the_post();  // crée une variable $post qui contient le résultat de la requête
                // la variable $post est un objet php contient de nombreuses propriétés 
                //echo "<pre>";

                //var_dump($post->post_title);
                echo wp_strip_all_tags(get_the_title());
                // sécurité information et injection XSS ???? injection de javascript 

                //echo "<br>";
                //var_dump($post->post_content);
                the_content();

                the_author();

                the_date();
                // echo "</pre>";
            } ?>
        </div>
        <div class="col-4">
         <?php wp_nav_menu(["menu" => "info"  ]); ?>
        </div>
    </div>

   


</div>

<?php get_footer() ?>
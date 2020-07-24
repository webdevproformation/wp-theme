<!--
    ce fichier php va être appelé si on ne donne pas de modèle dans le back office pour une page créée 
-->
<?php get_header() ?> 
<div class="container">
    <div class="row">
    <?php while(have_posts()) { ?>
        <?php the_post() ?>
            <div class="col-3">
                <?php  if( has_post_thumbnail() ){ ?>
                 <?php the_post_thumbnail("large" , ["class" => "img-fluid img-thumbnail"]); ?>
                <?php } else { ?>
                    <p>Aucune image à la Une disponible</p>
                <?php } ?>
            </div>
            <div class="col-9">
                <h1><?php the_title() ?></h1>
                <p><?php the_date() ?> - <?php the_author() ?> </p>
                <div><?php the_content() ?></div>
                <?php edit_post_link("modifier" , null , null , $post); ?>
            </div>
    <?php } ?>
    </div>
</div>
<?php get_footer() ?>
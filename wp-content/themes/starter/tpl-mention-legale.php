<?php 
/*
Template Name: mention légale
*/ 
?>
<!-- le commentaire mis en début de page php 
=> alimenter le menu déroulant dans la section Attribut de page 
=> Apparence de la page 
=> lien qui amène vers la page Mention Légale est géré dans 
le menu BO > Apparence > Menu 
-->
<?php  get_header() ?>
<div class="container">
    <?php while( have_posts()){  ?>
        <?php the_post() ?>
        <h1><?php the_title() ?></h1> 
        <hr>
        <div class="row">
            <div class="col-9">
                <?php the_content() ?>
            </div>
            <div class="col-3">
                <ul>
                    <li><?php the_date() ?></li>
                    <li><?php the_author() ?></li>
                </ul>
            </div>
        </div>
    <?php } ?>
</div>
<?php  get_footer() ?>
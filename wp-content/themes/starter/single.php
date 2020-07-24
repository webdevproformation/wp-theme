<?php get_header() ?>

<div class="container">

    <div class="row">
    <?php while ( have_posts() ){ ?>
        <?php  the_post() ?>
        <div class="col-7">
            <h1><?php the_title() ?></h1>
            <!-- ajouter un bouton modifier l'article => visible QUE si on est connecté au Back Office --> 
            <?php edit_post_link('Modifier article',"<div class='btn btn-success'>","</div>",$post) ?>
            
            <div><?php the_content() ?></div>
            <div><?php the_date() ?></div>
        </div>
        <div class="col-5">   
            <?php the_post_thumbnail('medium' , 
            ["class" => "img-fluid rounded img-thumbnail"] ) ?>
        </div>
    <?php } ?>
    </div>
</div>

<?php get_footer() ?>
<!-- 
    pas besoin de mettre en place un commentaire
    wordpress fait le lien de manière automatique entre ce fichier php
    et http://localhost/theme/
    remarquer que ce n'est plus le fichier index.php qui executé mais le fichier home.php 

    requete en base de donnée qui réalisée

    have_posts()
    the_post()
-->

<!--
    lorsque vous êtes sur le fichier home.php 
    la fonction the_post() 
    retourner => pas 1 article mais la liste des derniers articles
    dans la page home.php the_post renvoie un tableau deux objets wp_post !!!!
    créer un deuxième article dans le back office

-->

<?php get_header() ?>

<div class="container">

    <h1>Page d'accueil du site </h1>

    <div class="row">
    <?php while ( have_posts() ){ ?>
        <?php  the_post() ?>
        <!-- <pre> -->
            <?php // var_dump($post) ?>
        <!-- composant card => bordure joli 
        https://getbootstrap.com/docs/4.5/components/card/
    -->
        <!-- </pre> -->
        <div class="col-3">
            <article class="card p-3">
                <h2 class="card-title"><?php the_title() ?></h2>
                <div class="card-text"><?php the_content() ?></div>
                <!-- autre fonction que l'on doit utiliser DANS la boucle WP
                the_permalink()
                https://getbootstrap.com/docs/4.5/components/buttons/#outline-buttons
            -->
                <a href="<?php the_permalink() ?>" class="btn btn-outline-primary">lire la suite ...</a>
            </article>
        </div>
    <?php } ?>
    </div>
</div>

<?php get_footer() ?>
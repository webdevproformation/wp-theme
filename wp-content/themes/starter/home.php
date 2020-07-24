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

    Framework => React / Symfony / jQuery / Bootstrap 
    librairie de fonctions qui vont vous éviter
    d'avoir à tout coder vous même => gagner en productivité
    par contre ça nécessite d'apprendre par coeur la liste des fonctions
    soit de savoir lire la documentation (le mode d'emploi => CODEX Wordpress)

    pourquoi utiliser Wordpress => Back Office prêt !
    Back Office => solide 
    si tu veux tout coder à la main => il faut que tu codes
    toi même un back office => 
    donne ton site internet à un autre développeur ... 
    former et potentiellement tout casser 
    si il oublie un point virgule ; 

    cas pratique 
    dernière page de notre thème à créer page.php 

    image à la une       |      titre dans un h1
                         |      auteur + date
                         |         contenu
                         |         lien retour page d'accueil
              
    page dans le backoffice sans lui associer un modèle
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
        <!-- ajouter une image entre le titre et le contenu 
            => image à la une 
            => image qui représente le contenu de l'article 
            => activer dans le fichier functions.php la capacité pour les articles d'avoir une image à la une 
            add_theme_support( 'post-thumbnails' );
        -->
                <a href="<?php the_permalink() ?>">
                    <?php the_post_thumbnail('medium' , ["class" => "img-fluid"]) ?>
                </a>

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
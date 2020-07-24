<!-- 
    pas besoin de mettre en place un commentaire
    wordpress fait le lien de manière automatique entre ce fichier php
    et http://localhost/theme/
    remarquer que ce n'est plus le fichier index.php qui executé mais le fichier home.php 

    requete en base de donnée qui réalisée

    have_posts()
    the_post()
-->

<?php get_header() ?>

<div class="container">

    <h1>Page d'accueil du site </h1>

    <?php while ( have_posts() ){ ?>
        <?php  the_post() ?>
        <pre>
            <?php var_dump($post) ?>
        </pre>
    <?php } ?>
</div>

<?php get_footer() ?>
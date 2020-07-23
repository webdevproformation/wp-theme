<?php get_header() ?> <!--  ajouter l'entête de page html -->

<!-- bootstrap => composant menu navbar -->
<div class="container">
    <nav class="navbar navbar-expand navbar-light bg-light">
        <a href="<?php  bloginfo("url") ?>" class="navbar-brand">
            <?php bloginfo("name") ?> 
            <small>
                <?php bloginfo("description") ?>
            </small>
        </a>
        <ul class="navbar-nav">
            <li class="nav-item"> 
                <a href="<?php bloginfo("url") ?>" class="nav-link">Accueil</a>
            </li>
            <li class="nav-item"> 
                <a href="<?php echo get_page_link(5) ?>" class="nav-link">Présentation</a>
            </li>
            <li class="nav-item"> 
                <a href="<?php echo get_page_link(7) ?>" class="nav-link">Contact</a>
            </li>
        </ul>
    </nav>
</div>

<div class="container">
    <h1 class="text-primary">je suis en train de modifier le thème </h1>
    <p class="bg-success">un paragraphe ...</p>
</div>
<?php get_footer() ?> <!-- ajouter la fin de la page html -->
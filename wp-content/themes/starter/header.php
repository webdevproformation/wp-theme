<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>accueil site internet</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <?php wp_head() ?>
</head>
<body>

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
            <li class="nav-item"> 
                <a href="<?php echo get_page_link(9) ?>" class="nav-link">Information</a>
            </li>
        </ul>
    </nav>
</div>

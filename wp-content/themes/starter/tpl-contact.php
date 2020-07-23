<?php 
/*
Template Name: contact
*/
?>

<?php get_header() ?>

<div class="container">
<?php  while ( have_posts()) { ?>
    <?php the_post();  ?>

    <h1><?php the_title() ?></h1>
    <div><?php the_content() ?></div>

<?php } ?>
</div>


<?php get_footer() ?>

<!-- 
    dans wordpress 
    le développeur code + réalise
    des manipulations dans le Back office
    en MEME TEMPS !!!!
-->
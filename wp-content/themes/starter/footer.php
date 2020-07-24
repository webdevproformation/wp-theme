<div class="d-flex my-2">
<?php // wp_nav_menu( ["menu" => "top"] ); ?>
<div class="mx-auto">
<?php $m = wp_get_nav_menu_items('principal'); 
 //var_dump($m);
    foreach($m as $item){
        echo "<a href='$item->url' class='btn btn-primary mx-2'>" .$item->title."</a>";
    }
?>
</div>

   
</div>


<?php wp_footer() ?> 
</body>
</html>

<!-- 
 modifier la barre de menu (dans le fichier header.php) en utilisant la fonction wp_get_nav_menu_items()
-->
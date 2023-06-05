<!-- SINGLE PHP is for displaying POSTS -->
<?php
    get_header();
?>
<!-- above this comment it will be header.php -->
    <hr>
    
    <h1>This is POST hardcoded heading</h1>
    <p>some hardcoded template for POST structure</p>
    <!-- DISPLAYING DASHBOARD CONTENT/TITLE OF A PAGE -->
    <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
    <?php the_content(); ?>
    <!-- DISPLAYING DASHBOARD CONTENT/TITLE OF A PAGE -->
    <hr>
<!-- below this comment it will be footer.php -->
<?php
    get_footer();
?>
<?php
    get_header();
?>
<!-- above this comment it will be header.php -->
 
    <!-- DISPLAYING DASHBOARD CONTENT/TITLE OF A PAGE -->
    <h1 class="h1 page-title"><?php the_title(); ?></h1>

    <section class="page-section">
        <?php the_content(); ?>
    </section>
   
    
<!-- below this comment it will be footer.php -->
<?php
    get_footer();
?>
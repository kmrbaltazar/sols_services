<?php
    get_header();
?>
<!-- above this comment it will be header.php -->
    <hr>
    
    <h1>Generic Page setup</h1>
    <p>welcome to generic pages Lorem ipsum dolor, sit amet consectetur adipisicing elit. Nam consequatur atque quia placeat non dolorem laudantium voluptatem esse? Recusandae, illo!</p>
    <!-- DISPLAYING DASHBOARD CONTENT/TITLE OF A PAGE -->
    <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
    <?php the_content(); ?>
    <!-- DISPLAYING DASHBOARD CONTENT/TITLE OF A PAGE -->
    <hr>
<!-- below this comment it will be footer.php -->
<?php
    get_footer();
?>
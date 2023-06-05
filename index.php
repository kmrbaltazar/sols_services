<?php
    get_header();
?>
<!-- above this comment it will be header.php -->
    <hr>
    
    <h1>This is my landing index page</h1>
    <p>welcome to my index page Lorem ipsum dolor, sit amet consectetur adipisicing elit. Nam consequatur atque quia placeat non dolorem laudantium voluptatem esse? Recusandae, illo!</p>
    <!-- GETTING POSTS FROM WP DASHBOARD -->
    <section class='post-container'>
        <?php 
            if(have_posts()) : while(have_posts()) : the_post(); ?>
    
            <article class="post">
                <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                <?php the_content(); ?>
            </article>
            
            <?php endwhile;
            
            else :
                echo '<p>No content found</p>';
            
            endif;
        ?>
    </section>
    <!-- GETTING POSTS FROM WP DASHBOARD -->
    <hr>
<!-- below this comment it will be footer.php -->
<?php
    get_footer();
?>
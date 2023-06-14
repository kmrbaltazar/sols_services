<?php
    get_header();
?>
<!-- above this comment it will be header.php -->
<section class="big-screens">
    <!-- DISPLAYING DASHBOARD CONTENT/TITLE OF A PAGE -->
    <h1 class="h1 page-title"><?php the_title(); ?></h1>

    <section class="contact-page-section">
        <div class="contact-child">
            <?php the_content(); ?>
        </div>
        <div class="contact-child">
            <img src="<?php bloginfo('template_url'); ?>/Assets/sol1.jpeg" alt="Sol Arrowfield">
        </div>
    </section>
</section>
    
<!-- below this comment it will be footer.php -->
<?php
    get_footer();
?>
<?php
    get_header();
?>
<!-- above this comment it will be header.php -->
 
    <!-- DISPLAYING DASHBOARD CONTENT/TITLE OF A PAGE -->
    <h1 class="h1 page-title"><?php the_title(); ?></h1>

   <section class="gardening-intro">
        <div class="gardening-image-div">
            <div class="gardening-image-wrapper">
                <img src="<?php bloginfo('template_url'); ?>/Assets/services-carousel2.jpg" alt="Gardening project">
            </div>
            <div class="gardening-price-div">
                <h3 class="h3">From $60 per hour + GST</h3>
                <h3 class="h3">Minimum charge: $138</h3>
            </div>
        </div>
        <div class="gardening-blurb">
            <?php the_content(); ?>
        </div>
   </section>
    
<!-- below this comment it will be footer.php -->
<?php
    get_footer();
?>
<?php
    get_header();
?>
<!-- above this comment it will be header.php -->
 
    <!-- DISPLAYING DASHBOARD CONTENT/TITLE OF A PAGE -->
    <h1 class="h1 page-title"><?php the_title(); ?></h1>

    <section class="services-info">
        <div class="services-txt">
            <?php the_content(); ?>
        </div>
        <div class="services-img-wrapper carousel-desktop">
            <?php echo do_shortcode('[metaslider id="65"]'); ?>
        </div>
        <div class="services-img-wrapper carousel-mobile">
            <?php echo do_shortcode('[metaslider id="80"]'); ?>
        </div>
    </section>

    <section class="main-services">
        <div class="service-card">
            <div class="service-img-container">
                <img src="<?php bloginfo('template_url'); ?>/Assets/services-carousel2.jpg" alt="Gardening Project Picture">
            </div>
            <h2 class="h2">GARDENING</h2>
            <p class="paragraph1">Our services for garden maintenance include: mowing, hedge and tree trimming, weed whacking, leaf blowing, general tidying and mulching. We also can lay bark chips and other landscaping materials in your garden. 
            </p>
            <div class="button-style service-btn">
            <span><a href="<?php echo home_url(); ?>/gardening/" class="button">View Gardening Projects</a></span>
            </div>
        </div>

        <div class="service-card">
            <div class="service-img-container">
                <img src="<?php bloginfo('template_url'); ?>/Assets/landscaping-retaining-wall-after.jpg" alt="Landscaping picture picture">
            </div>
            <h2 class="h2">LANDSCAPING</h2>
            <p class="paragraph1">We can offer services in basic landscape construction: retaining walls, raised garden beds, garden edges, fences, garden paths and paved areas.  
            </p>
            <div class="button-style service-btn">
            <span><a href="<?php echo home_url(); ?>/landscaping/" class="button">View Landscaping Projects</a></span>
            </div>
        </div>
        
    </section>

   
    
<!-- below this comment it will be footer.php -->
<?php
    get_footer();
?>
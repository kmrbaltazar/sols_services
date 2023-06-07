<?php
    get_header();
?>
<!-- above this comment it will be header.php -->
    
    
    <section class="home-landing">
        <div class="home-landing-content">
            <div>
                <h4 class="h4 home-landing-text">Hi, my name is Sol, my team and I offer</h4>
                <br>
                <h1 class="headline home-landing-text">High Quality Gardening and Landscaping Services</h1>
            </div>
            <div class="button-style support-btn">
                <span><a href="tel:+642041494452" class="button">Call now 02041494452</a></span>
            </div>  

        </div>
    </section>

    <section class="landing-services">
        <h2 class="h2">WHAT WE DO</h2>
        <div class="featured-services-cards">
            <div class="featured-card">
                <a href="<?php echo home_url(); ?>/gardening/">
                    <img src="<?php bloginfo('template_url'); ?>/Assets/landing-gardening.jpg" alt="Gardening photo">
                    <div class="featured-title">
                        <h3 class="h3">Gardening</h3>
                    </div>
                </a>
            </div>
            <div class="featured-card">
                <a href="<?php echo home_url(); ?>/landscaping/">
                    <img src="<?php bloginfo('template_url'); ?>/Assets/landing-landscaping.jpg" alt="Landscaping photo">
                    <div class="featured-title">
                        <h3 class="h3">Landscaping</h3>
                    </div>
                </a>
            </div>
        </div>
        <div class="button-style btn-left">
            <span><a href="<?php echo home_url(); ?>/services/" class="button">View Services</a></span>
        </div>
    </section>

    <section class="landing-reviews">
        <h2 class="h2">WHAT OUR CUSTOMERS ARE SAYING</h2>
        <div class="google-reviews">
            <?php echo do_shortcode( '[trustindex no-registration=google]' ); ?>
        </div>
    </section>

    <section class="landing-get-quote">
        <div class="button-style btn-left cta-btn">
                <span><a href="<?php echo home_url(); ?>/services/" class="button">Get a free quote</a></span>
        </div>
    </section>
    
   
<!-- below this comment it will be footer.php -->
<?php
    get_footer();
?>
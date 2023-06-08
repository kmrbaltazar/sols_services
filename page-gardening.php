<?php
    get_header();
?>
<!-- above this comment it will be header.php -->
 
    <!-- DISPLAYING DASHBOARD CONTENT/TITLE OF A PAGE -->
    <h1 class="h1 page-title"><?php the_title(); ?></h1>

   <section class="gardening-intro">
        <div class="gardening-image-div">
            <div class="gardening-image-wrapper">
                <img src="<?php bloginfo('template_url'); ?>/Assets/services-carousel6.png" alt="Gardening project">
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

   <h2 class="h2 sub-title">WHAT WE OFFER</h2>

   <section class="offerings-section">
        <?php
            $gardening_services = pods('gardening_job');

            $params = array(
                'orderby' => 'date',    // Sort by date
                'order' => 'ASC'        // Display in ascending order (oldest first)
            );

            $gardening_services->find($params);

            while ($gardening_services->fetch()) {
                $icon_class = $gardening_services->display('icon_name');
                $name = $gardening_services->display('service_name');
                ?>
                <div class="gardening-service">
                    <i class="fa-solid fa-<?php echo $icon_class; ?>"></i>
                    <h3><?php echo $name; ?></h3>
                </div>
                <?php
            }
            ?>
   </section>

   <hr>

   <h2 class="h2 sub-title">OUR GARDENING PROJECTS</h2>

   <section class="service-project-section">
        <?php 
        // you can change variable name to anything you want, just make sure to change it for all of them
        $gardening_featured_product = pods( 'gardening_featured_p' );  // change 'pod-name' to the Pods custom post name
        $gardening_featured_product->find();
        while ( $gardening_featured_product->fetch() ) {
            ?>
            <div class='service-before-after-gallery'>
                <div class="service-before">
                    <h4 class="h4 name-before"> <?php echo $gardening_featured_product->display( 'project_name' ); ?> </h4> 
                    <div class="service-image-wrapper">
                        <img src="<?php echo $gardening_featured_product->display( 'before_image' ); ?>" alt="Project Before Image">
                    </div>
                </div>
                <div class="service-after">
                    <h4 class="h4 name-after"> <?php echo $gardening_featured_product->display( 'project_name' ); ?> </h4> 
                    <div class="service-image-wrapper">
                        <img src="<?php echo $gardening_featured_product->display( 'after_image' ); ?>" alt="Project After Image">
                    </div>
                </div>
            </div> 
            <?php
        }
        ?>
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
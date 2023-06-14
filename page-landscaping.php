<?php
    get_header();
?>
<!-- above this comment it will be header.php -->
<section class="big-screens">
    <!-- DISPLAYING DASHBOARD CONTENT/TITLE OF A PAGE -->
    <h1 class="h1 page-title"><?php the_title(); ?></h1>

   <section class="main-service-intro">
        <div class="main-service-image-div">
            <div class="main-service-image-wrapper">
                <img src="<?php bloginfo('template_url'); ?>/Assets/landscaping-main.jpg" alt="Landscaping project">
            </div>
            <div class="main-service-price-div">
                <h3 class="h3">Price by estimate</h3>
            </div>
        </div>
        <div class="main-service-blurb">
            <?php the_content(); ?>
        </div>
   </section>

   <h2 class="h2 sub-title">WHAT WE OFFER</h2>

   <section class="offerings-section">
        <?php
            $landscaping_services = pods('landscaping_job');

            $params = array(
                'orderby' => 'date',    // Sort by date
                'order' => 'ASC'        // Display in ascending order (oldest first)
            );

            $landscaping_services->find($params);

            while ($landscaping_services->fetch()) {
                $icon_class = $landscaping_services->display('icon_name');
                $name = $landscaping_services->display('service_name');
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

   <h2 class="h2 sub-title">OUR LANDSCAPING PROJECTS</h2>

   <section class="service-project-section">
        <?php 
        // you can change variable name to anything you want, just make sure to change it for all of them
        $landscaping_featured_product = pods( 'landscaping_featured' );  // change 'pod-name' to the Pods custom post name
        $landscaping_featured_product->find();
        while ( $landscaping_featured_product->fetch() ) {
            ?>
            <div class='service-before-after-gallery'>
                <div class="service-before">
                    <h4 class="h4 name-before"> <?php echo $landscaping_featured_product->display( 'project_name' ); ?> </h4> 
                    <div class="service-image-wrapper">
                        <img src="<?php echo $landscaping_featured_product->display( 'before_image' ); ?>" alt="Project Before Image">
                    </div>
                </div>
                <div class="service-after">
                    <h4 class="h4 name-after"> <?php echo $landscaping_featured_product->display( 'project_name' ); ?> </h4> 
                    <div class="service-image-wrapper">
                        <img src="<?php echo $landscaping_featured_product->display( 'after_image' ); ?>" alt="Project After Image">
                    </div>
                </div>
            </div> 
            <?php
        }
        ?>
   </section>

   <section class="landing-get-quote service-btn">
        <div class="button-style btn-left cta-btn">
                <span><a href="<?php echo home_url(); ?>/contact/" class="button">Get a free quote</a></span>
        </div>
    </section>
</section>
    
<!-- below this comment it will be footer.php -->
<?php
    get_footer();
?>
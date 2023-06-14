<?php
    get_header();
?>
<!-- above this comment it will be header.php -->
<section class="big-screens">
    <!-- DISPLAYING DASHBOARD CONTENT/TITLE OF A PAGE -->
    <h1 class="h1 page-title"><?php the_title(); ?></h1>

    <section class="project-portfolio-section">
        <?php 
        // you can change variable name to anything you want, just make sure to change it for all of them
        $project_portfolio = pods( 'project_portfolio' );  // change 'pod-name' to the Pods custom post name

        $params = array(
            'orderby' => 'date',    // Sort by date
            'order' => 'ASC'        // Display in ascending order (oldest first)
        );

        $project_portfolio->find($params);
        while ( $project_portfolio->fetch() ) {
            ?>
            <div class='portfolio-item'>
                <img src="<?php echo $project_portfolio->display( 'project_photo' ); ?>" alt="Project Portfolio Image">
            </div> 
        <?php
        }
        ?>
    </section>
</section>
   
    
<!-- below this comment it will be footer.php -->
<?php
    get_footer();
?>
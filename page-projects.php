<?php
    get_header();
?>
<!-- header.php above -->

<section class="big-screens">
    
    <h1 class="h1 page-title"><?php the_title(); ?></h1>

    <section class="project-portfolio-section">
        <?php 
        $project_portfolio = pods( 'project_portfolio' );  

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
   
    
<!-- footer.php below -->
<?php
    get_footer();
?>
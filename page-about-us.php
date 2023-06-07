<?php
    get_header();
?>
<!-- above this comment it will be header.php -->
 
    <!-- DISPLAYING DASHBOARD CONTENT/TITLE OF A PAGE -->
    <h1 class="h1 page-title"><?php the_title(); ?></h1>

    <section class="about-page-info">
        <?php the_content(); ?>
    </section>

    
    
    <!-- DISPLAYING DASHBOARD CONTENT/TITLE OF A PAGE -->
    <h2 class="h2 page-title">Our Team</h2>
    <section class="people-container">
    
        <!-- custom posts for our people will loop here -->
        <?php 
            // you can change variable name to anything you want, just make sure to change it for all of them
            $team_member = pods( 'team_member' );  // change 'pod-name' to the Pods custom post name
            $params = array(
                'orderby' => 'date',    // Sort by date
                'order' => 'ASC'        // Display in ascending order (oldest first)
            );
            $team_member->find( $params );
            while ( $team_member->fetch() ) {
                ?>
                <div class='our-team-div'>
                    <div class="our-team-text team-child">
                        <div class="person-info">
                            <h3 class="h3"> <?php echo $team_member->display( 'team_member_name' ); ?> </h3> 
                            <h4 class="button"><?php echo $team_member->display( 'team_member_job_title' ); ?></h4>
                        </div>
                        <div class="person-description paragraph1">
                            <p><?php echo $team_member->display( 'description' ); ?></p>
                        </div>
                    </div>
                    <div class="person-img-wrapper team-child">
                        <img src="<?php echo $team_member->display( 'team_member_image' ); ?>" alt="Sol's Services Team member Image">
                    </div>
                </div> 
        <?php
        }
        ?>
        <!-- display our people loop ends -->
    </section>
<!-- below this comment it will be footer.php -->
<?php
    get_footer();
?>
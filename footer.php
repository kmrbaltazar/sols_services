</div> 
        <!-- this is where page-content div closes -->
        <footer>
            <h1 class='footerTest'>FOOTER CONTENT</h1>
                <nav>
                    <?php
                        $argument = array( 'theme_location' => 'footer' );
                        wp_nav_menu( $argument );
                    ?>
                </nav>
        </footer>
        
        
    </div> <!-- this is the closing tag for .body-container div in header.php -->
    <?php wp_footer(); ?>
</body>
</html>
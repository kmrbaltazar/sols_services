</div> 
        <!-- this is where page-content div closes -->
        <footer>
             <a href="<?php echo home_url(); ?>" class="logo"> 
                <div class="logo-container">
                    <img src="<?php bloginfo('template_url'); ?>/Assets/original-logo.png" alt="Sol's Services Logo">
                </div>
            </a>
            <div class="footer-text-container">
                <div>
                    <div class="contact-details-div">
                        <p class="paragraph2">158 Leaver Terrace, North New Brighton
    Christchurch, New Zealand</p>
                        <p class="paragraph2">020 414 94452</p>
                        <p class="paragraph2">arrowfieldsol@gmail.com</p>
                    </div>
                    <div class="social-icons-div">
                        <a href="https://www.facebook.com/SolsServices" target="_blank"><i class="fa-brands fa-facebook"></i></a>
                        <a href="https://www.instagram.com/sols_services/" target="_blank"><i class="fa-brands fa-instagram"></i></a>
                    </div>
                </div>
                <div class="copyright-div">
                    <p class="dev-details">Web design and development by <a href="#" class="tin-logo-container"><img src="<?php bloginfo('template_url'); ?>/Assets/tin-logo-white.png" alt="Tin Baltazar logo" class="tin-logo"></a></p>
                    <p>Copyright © <?php echo date("Y") ?> All Rights Reserved </p>
                </div>
            </div>
        </footer>
        
        
    </div> <!-- this is the closing tag for .body-container div in header.php -->
    <?php wp_footer(); ?>

    <!-- GO TO TOP -->
    <div class="go-top-btn-wrapper no-display" id="mybutton">
            <a href="#">
                <i class="fa-solid fa-chevron-up"></i>
            </a>
    </div>



</body>
</html>
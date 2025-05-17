<section id="footer_section">
    <div class="container">
        <div class="row">
            <div class="col-sm-6">
                <div class="footer_text">
                    <h2>Ready to Start Your Adventure?</h2>
                    <p>Let us help you create the perfect journey. Our travel experts are ready to craft your dream vacation.</p>
                    <br>
                    <a href="#">Start Planning <i class="fa-regular fa-circle-right"></i></a>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="footer_img">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/footerimg.png" alt="Footer Image">
                    </div>
            </div>
        </div>
    </div>
</section>


<footer id="footer_area">
    <div class="widgrt_area">
    <div class="container">
        <div class="row">
            <div class="col-sm-3">
                <?php dynamic_sidebar('footer-1'); ?>
            </div>
            <div class="col-sm-3">
                <?php dynamic_sidebar('footer-2'); ?>
            </div>
            <div class="col-sm-3">
                <?php dynamic_sidebar('footer-3'); ?>
            </div>
            <div class="col-sm-3">
                <?php dynamic_sidebar('footer-4'); ?>
            </div>
        </div>
    </div>
    </div>
    <div class="coopyright_area">
        <p>&COPY; Coppyright 2025</p>
    </div>
</footer>







<?php wp_footer(); ?>
</body>
</html>
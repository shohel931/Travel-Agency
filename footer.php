


<footer id="footer_area">
    <div class="footer_widgets">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                 <?php  dynamic_sidebar('footer-1'); ?>
                </div>
                <div class="col-md-3">
                <?php  dynamic_sidebar('footer-2'); ?>
                </div>
                <div class="col-md-3">
                <?php  dynamic_sidebar('footer-3'); ?>
                </div>
                <div class="col-md-3">
                <?php  dynamic_sidebar('footer-4'); ?>
                </div>
            </div>
        </div>
    </div>
    <div class="coppyright_area">
        <p><?php echo get_theme_mod('sample_coppy_setting'); ?></p>
    </div>
</footer>


<?php wp_footer(); ?>
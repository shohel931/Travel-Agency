<?php
/**
 * Template Name: Home Page
 */

get_header();
?>

<section id="home_area">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="home_area_content">
                    <h1>Welcome to Our Website</h1>
                    <p>Your one-stop solution for all your needs.</p>
                    <a href="#services" class="custom_button">Explore Services</a>
                    <a href="#services" class="custom_button">Explore Services</a>
                </div>
            </div>
        </div>
    </div>
</section>




<section id="popular">
    <div class="title_text">
        <h4>popular destinations</h4>
        <h2>Handpicked Packages</h2>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="main_contant">
                    <div class="sub_contant">
                        <img src="<?php echo get_template_directory_uri(). '/img/packages-01.jpg' ?>" alt="">
                        <div class="sub_text">
                            <h5><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i></h5>
                            <h4>Europe</h4>
                            <h3>Australia</h3>
                            <p>From $2,499</p>
                        </div>
                    </div>
                    <div class="sub_contant">
                        <img src="<?php echo get_template_directory_uri(). '/img/packages-02.jpg' ?>" alt="">
                        <div class="sub_text">
                            <h5><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i></h5>
                            <h4>Europe</h4>
                            <h3>Australia</h3>
                            <p>From $2,499</p>
                        </div>
                    </div>
                    <div class="sub_contant">
                        <img src="<?php echo get_template_directory_uri(). '/img/packages-03.jpg' ?>" alt="">
                        <div class="sub_text">
                            <h5><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i></h5>
                            <h4>Europe</h4>
                            <h3>Australia</h3>
                            <p>From $2,499</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>




<?php
get_footer();
?>
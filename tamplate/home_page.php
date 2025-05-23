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
                            <h3>Spain</h3>
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
                            <h3>Egypt</h3>
                            <p>From $2,499</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<section id="Journey">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="Journey_main">
                    <div class="sub_Journey">
                    <img src="<?php echo get_template_directory_uri(). '/img/section2.png' ?>" alt="">
                    </div>
                    <div class="sub_Journeys">
                        <h4>About Us</h4>
                        <h2>Your Journey, Our Passion</h2>
                        <p>We believe that travel is more than just visiting new places; it's about creating memories, experiencing diverse cultures, and discovering the wonders of the world. With years of experience in the travel industry, our dedicated team is committed to providing exceptional travel experiences tailored to your unique desires and needs.</p>
                        <div class="video_text">
                            <div class="sub_video">
                                <video width="320" height="195" controls src="<?php echo get_template_directory_uri(). '/img/video.mp4' ?>"></video>
                            </div>
                            <div class="sub_text">
                                <p><i class="fa-regular fa-circle-check"></i> Budget-Friendly</p>
                                <p><i class="fa-regular fa-circle-check"></i> Luxurious Getaways</p>
                                <p><i class="fa-regular fa-circle-check"></i> Trusted Local Guides</p>
                                <br>
                                <a class="all_button" href="#">Learn More <i class="fa-regular fa-circle-right"></i></a>
                            </div>
                        </div>
                        <div class="ratting">
                            <div class="image">
                                <img src="<?php echo get_template_directory_uri(). '/img/home-journey3.jpg' ?>" alt="">
                                <img src="<?php echo get_template_directory_uri(). '/img/home-journey4.jpg' ?>" alt="">
                            </div>
                            <div class="text_area">
                                <p>4.7 Star Rating <br>Based on 3,571 Reviews</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>






<section id="destialige">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="main_destition">
                    <div class="sub_destition">
                        <h4>Choose Your Place</h4>
                        <h2>Popular Destinations</h2>
                        <p>Join us as we explore the wonders of the globe, one incredible journey at a time.</p><br>
                        <a class="all_button" href="#">Find Packages  <i class="fa-regular fa-circle-right"></i></a>
                    </div>
                    <div class="sub_destition">
                        <img src="<?php echo get_template_directory_uri(). '/img/amazon.jpeg' ?>" alt="">
                    </div>
                    <div class="sub_destition">
                        <img src="<?php echo get_template_directory_uri(). '/img/newzeland.jpeg' ?>" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>












<?php
get_footer();
?>
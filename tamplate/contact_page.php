<?php
/*
Template Name: Contact Page
*/

get_header();
?>

<div class="contact-page-container">
    <h1>Contact Us</h1>
    <div class="contact-details">
        <p><strong>Address:</strong> 123 Main Street, City, Country</p>
        <p><strong>Phone:</strong> +1 234 567 890</p>
        <p><strong>Email:</strong> info@travelagency.com</p>
    </div>

    <div class="contact-form-section">
        <?php
        if (function_exists('do_shortcode')) {
            echo do_shortcode('[contact-form-7 id="1234" title="Contact form 1"]');
        }
        ?>
    </div>
</div>

<style>
.contact-page-container {
    max-width: 700px;
    margin: 0 auto;
    padding: 40px 20px;
    background: #fff;
    border-radius: 8px;
}
.contact-details {
    margin-bottom: 30px;
}
.contact-details p {
    margin: 8px 0;
}
.contact-form-section {
    margin-top: 20px;
}
</style>

<?php
get_footer();
?>
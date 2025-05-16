<!DOCTYPE html>
<html lang="<?php language_attributes(); ?>">
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
    

<header id="header_area">
     <div class="container">
        <div class="row">
            <div class="col-md-3">
                <div class="logo">
                    <a href="<?php echo home_url(); ?>"><img src="<?php echo get_template_directory_uri(). '/img/logo.png' ?>" alt=""></a>
                </div>
            </div>
            <div class="col-md-6"></div>
            <div class="col-md-3"></div>
        </div>
     </div>
</header>

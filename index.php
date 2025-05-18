<?php get_header(); ?>


<?php 
if ( have_posts() ) : 
    while ( have_posts() ) : the_post(); 
        the_content(); 
        echo the_post_thumbnail();
    endwhile; 
else : 
    echo '<p>No content found</p>';
endif;
?>



<?php get_footer(); ?>
